<?php

function setCode($codiceArticolo){
	settype($codiceArticolo, "string");
	$lunghezza = strlen($codiceArticolo);
 
	switch ($lunghezza) {
	case 1:
		$lunghezza = '000' . $codiceArticolo;
		break;
	case 2:
		$lunghezza = '00' . $codiceArticolo;
		break;
	case 3:
		$lunghezza = '0' . $codiceArticolo;
		break;
	default:
		$lunghezza = $codiceArticolo;
	}
	 
	return $lunghezza;
}

function setPrice($prezzoArticolo){
	settype($prezzoArticolo, "string");
	$lunghezza = strlen($prezzoArticolo);
	$stringaFinale = "";
	$i = 0;
	while($i < ($lunghezza-2)){
		$stringaFinale .= $prezzoArticolo[$i];
		$i++;
	}
	$stringaFinale .= ",";
	$stringaFinale .= $prezzoArticolo[$lunghezza-2];
	$stringaFinale .= $prezzoArticolo[$lunghezza-1];
	return $stringaFinale;
}

?>