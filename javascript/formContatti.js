var quantiErrati = 0;

function cConttatti(){
	var nome = checkname(document.formContatti.nome.value);
	var email = checkmail(document.formContatti.email.value);
	var oggetto = checktext(document.formContatti.oggetto.value);
	var messaggio = checktext(document.formContatti.messaggio.value);
	
	setInput(document.formContatti.nome, nome, quantiErrati);
	setInput(document.formContatti.email, email, quantiErrati);
	setInput(document.formContatti.oggetto, oggetto, quantiErrati);
	setInput(document.formContatti.messaggio, messaggio, quantiErrati);

}

function checkmail(e){
var filter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
var returnval = filter.test(e);
return returnval;
}

function checktext(e){
	if ((e == "") || (e == "undefined")) {
	   return false;
	} else {
		return true;
	}
}

function checkname(e){
	var pieno = checktext(e);
	if(!pieno){return false;
	}else{
		var filter = /^[a-zA-Z\s\D]+$/i
		var returnval = filter.test(e);
		return returnval;
	}
}

function setInput(oggetto, varbool){
	if(varbool == false){
		oggetto.setAttribute("style", "border-color:#FF0000;  background-color: #F0F0F0;");
		quantiErrati++;
	}
}
