function modificaAnteprima(numFoto)
{
	var stringa = document.getElementById('anteprima').getAttribute('src');
	stringa = stringa.replace(/\/\d\./g, "/" + numFoto + ".");
	document.getElementById('anteprima').setAttribute('src', stringa);
	
	var anteprime = getElementsByClassName("immagine_articolo_small"); 
	var nero = "border-color:#000000;";
	
	if(numFoto == 1){
		anteprime[0].setAttribute('style', nero);
		anteprime[1].removeAttribute('style');
		anteprime[2].removeAttribute('style');
	} else if(numFoto == 2){
		anteprime[0].removeAttribute('style');
		anteprime[1].setAttribute('style', nero);
		anteprime[2].removeAttribute('style');
	}else {
		anteprime[0].removeAttribute('style');
		anteprime[1].removeAttribute('style');
		anteprime[2].setAttribute('style', nero);
	}
}

function bordoNero(){
	var anteprime = getElementsByClassName("immagine_articolo_small");
	if(anteprime != ""){	
	var nero = "border-color:#000000;";
	anteprime[0].setAttribute('style', nero);
	}
}

function popup(){
	var indirizzoImmagine = document.getElementById('anteprima').getAttribute('src');
	var re = /i\/\d\//g;
	indirizzoImmagine = indirizzoImmagine.replace(re, "i/3/");
	window.open(indirizzoImmagine ,'zoomIn','width=600,height=550, resizable=yes,menubar=no,location=no,status=no,scrollbars=yes');
}
