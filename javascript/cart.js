cart = new carrello();

function carrello(){
	this.totale = 0;
	this.buyers_id = new Object();
	this.idString = "";

	carrello.prototype.addToCart = function(codice, prezzo){
		var work = parseInt(codice);
		if(this.cerca(work) == false){
			this.buyers_id[work] = work;
			Set_Cookie(work, work, "1", "/", "", "");
			work = parseInt(prezzo);
			this.totale += work;
			Set_Cookie("totale", this.totale, "1", "/", "", "");
			this.idString += codice + "-";
			Set_Cookie("idString", this.idString, "1", "/", "", "");
			setLampeggia();
			linkVaiAllaCassa();
			setCart();
		} else {
			alert("Articolo già presente nel carrello");
		}
	}

	carrello.prototype.removeFromCart = function(codice, prezzo){
		var work = parseInt(codice);
		if(this.cerca(work) == true){
			delete this.buyers_id[work];
			Delete_Cookie(work, "/", "");
			work = parseInt(prezzo);
			this.totale -= prezzo;
			Set_Cookie("totale", this.totale, "1", "/", "", "");
			this.idString = this.idString.replace(codice+"-", "");
			Set_Cookie("idString", this.idString, "1", "/", "", "");
			setLampeggia();
			linkVaiAllaCassa();
			setCart();
		} else {
			alert("Articolo non presente nel carrello");
		}
	}

	carrello.prototype.caricaCookie =  function(){
		if(Get_Cookie('totale') != null){
			this.totale += parseInt(Get_Cookie('totale'));
			this.idString += Get_Cookie('idString');
			var str = this.idString;
			var patt =/^\d{1,4}-/g;
			
			while(str.match(patt) != null){
				var work = str.match(patt);
				str = str.replace(patt, "");
				work = parseInt(work);
				this.buyers_id[work] = work;
			}

		}
	} 

	carrello.prototype.eliminaCookie =  function(){
		if(Get_Cookie('totale') != null){
			var str = Get_Cookie('idString');
			var patt =/^\d{1,4}-/g;
			
			while(str.match(patt) != null){
				var work = str.match(patt);
				str = str.replace(patt, "");
				work = parseInt(work);
				Delete_Cookie(work, "/", "");
			}
			
			Delete_Cookie("idString", "/", "");
			Delete_Cookie("totale", "/", "");
		}
	} 
	
	carrello.prototype.lunghezza = function(){
		var length = 0;
		for (var object in this.buyers_id){
		length++;
		}
		return length;
	}
		
	carrello.prototype.cerca = function(daTrovare){
		for (var obj in this.buyers_id){
			if(this.buyers_id[obj] == daTrovare){
				return true;
			}
		}
		return false;
	}

}