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

	$a = new cMySQL();
	$a->connect();
	$dbGiusto = $_GET['calledby'];
	$query = "SELECT nome, codice, tipologia FROM $dbGiusto";
	$a->eseguiQuery($query);
	
	if(mysql_num_rows($a->query_id) == 0){
		echo '<p id="erroreInvio">Articoli nella sezione '.$dbGiusto.' terminati</p>';
	} else {
		while ($row = mysql_fetch_assoc($a->query_id)) {	
		echo '	<div class="articolo">
					<a href="tuttiArticoli.php?idNumber='.$row['codice'].'&amp;tipoOggetto='.$row['tipologia'].'"><img class="immagine_anteprima_articolo" src="images/articoli/1/'.$row['codice'].'.jpg" alt="'.$row['nome'].'"></a>
					<p class="titolo_anteprima_articolo"> '.$row['nome'].' </p>
					<div class="dettagli"><a href="tuttiArticoli.php?idNumber='.$row['codice'].'&amp;tipoOggetto='.$row['tipologia'].'">Ulteriori Dettagli</a></div>
				</div> ';
		}
	}
	
?>	

</div>
		
<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>