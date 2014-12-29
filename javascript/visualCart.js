function lampeggia(){
	var setta = "background-color:#0042C6";
	var nodo = document.getElementById("shopping_cart");

	if(nodo.getAttribute("style") != null){
		document.getElementById("shopping_cart").removeAttribute("style");
	} else {
		document.getElementById("shopping_cart").setAttribute("style", setta);
	}
}

function setLampeggia(){	
	fermaQuestaFunzione = setInterval("lampeggia()", 100);
	setTimeout("unsetLampeggia()", 800);
}

function unsetLampeggia(){
	clearInterval(fermaQuestaFunzione);
	document.getElementById("shopping_cart").setAttribute("style", "background-color:#98d5e0");
}

function linkVaiAllaCassa(){
	var nodo = document.getElementById("go-n-pay").firstChild;
	if(cart.totale == 0){
		nodo.removeAttribute("href");
		document.getElementById("go-n-pay").removeAttribute("style");
	} else {
		nodo.setAttribute("href", "carrello.php");
		document.getElementById("go-n-pay").setAttribute("style", "background-color: #78c9d6");
	}
}

function setCart(){
	if(cart.totale == 0){
		//Il carrello è vuoto <img src="images/shopping_icons/empty.png" alt="Carrello">
		document.getElementById("shopping_cart").firstChild.nodeValue = "Il carrello è vuoto";
		var immagine = document.getElementById("shopping_cart").firstChild.nextSibling;
		immagine.setAttribute("src", "images/shopping_icons/empty.png");
	} else {
		//Totale cart.buyersid.length articoli: totale <img src="images/shopping_icons/full.png" alt="Carrello">
		var articoli = (cart.lunghezza() == 1) ? "articolo" : "articoli";
		document.getElementById("shopping_cart").firstChild.nodeValue = "Totale " + cart.lunghezza() + " " + articoli + ": " + setPrice(cart.totale) + " €";
		var immagine = document.getElementById("shopping_cart").firstChild.nextSibling;
		immagine.setAttribute("src", "images/shopping_icons/full.png");
	}
}

function setPrice(mioTotale){
	var prezzoArticolo = mioTotale;
	prezzoArticolo += '';
	var lunghezza = prezzoArticolo.length;
	var stringaFinale = '';
	var i = 0;
	while(i < (lunghezza-2)){
		stringaFinale += prezzoArticolo[i];
		i++;
	}
	stringaFinale += ",";
	stringaFinale += prezzoArticolo[lunghezza-2];
	stringaFinale += prezzoArticolo[lunghezza-1];
	return stringaFinale;
}