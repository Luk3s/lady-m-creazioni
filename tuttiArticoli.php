<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php require_once 'inclusi/head.php'; ?>
<body onload="miaOnLoad()">

<div id="container">
		
<?php
	require_once 'inclusi/header.php';
	require_once 'inclusi/navigator.php';
	require_once 'inclusi/sidebar.php';
?>

<div id="main">

<?php
	require_once 'inclusiPHP/cMysql.php';
	require_once 'inclusiPHP/aStuff.php';

	$a = new cMySQL();
	$a->connect();
	$idOggetto = $_GET['idNumber'];
	$tipoOggetto = $_GET['tipoOggetto'];
	$query = "SELECT * FROM $tipoOggetto WHERE codice = $idOggetto";
	$a->eseguiQuery($query);
	$row = mysql_fetch_assoc($a->query_id);

echo '	<div id="articolo_left">  
			<span id="plus_container">
				<a href="#" onclick="popup()">
					<img id="anteprima" src="images/articoli/2/'.$row['codice'].'/1.jpg" alt="'.$row['nome'].'">
					<img id="plus" src="images/shopping_icons/plus.png" alt="Lente di Ingrandimento">
				</a>
			</span>
			<a href="#" onclick="modificaAnteprima(1)"><img class="immagine_articolo_small" src="images/articoli/2/'.$row['codice'].'/1.jpg" alt="Dettaglio Articolo"></a>
			<a href="#" onclick="modificaAnteprima(2)"><img class="immagine_articolo_small" src="images/articoli/2/'.$row['codice'].'/2.jpg" alt="Dettaglio Articolo"></a>
			<a href="#" onclick="modificaAnteprima(3)"><img class="immagine_articolo_small" src="images/articoli/2/'.$row['codice'].'/3.jpg" alt="Dettaglio Articolo"></a>
		</div>

	<div id="articolo_right"> 
		 <p id="titolo_articolo">'.$row['nome'].'</p>
		 <p id="descrizione_articolo">'.$row['descrizione'].'</p>
		 <ul id="caratteristiche">
		 <li>Codice: '.setCode($row['codice']).'</li>
		 <li>Prezzo: '.setPrice($row['prezzo']).' &euro;</li>';
		 
		 if(isset($row['chiusura']) && $row['chiusura'] != null){echo '<li>Chiusura: '.$row['chiusura'].' </li>';}
		 if(isset($row['montatura'])){echo '<li>Montatura: '.$row['montatura'].' </li>';}

echo '	 <li>Peso: '.$row['peso'].' g</li>
		 <li>Lunghezza: '.$row['lunghezza'].' cm</li>';
		 
		 if(isset($row['larghezza'])){echo '<li>Larghezza: '.$row['larghezza'].' cm</li>';}
		 
echo ' 	</ul>
	 
		<div>
			<a href="#" onclick="cart.addToCart('.$row['codice'].','.$row['prezzo'].')" id="add_to_cart">
				Aggiungi al carrello <img src="images/shopping_icons/add.png" alt="Aggiungi al Carrello">
			</a>
		</div>';

	require_once "inclusi/pezzi_unici.php";

echo ' </div>';
		
?>

</div>

<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>