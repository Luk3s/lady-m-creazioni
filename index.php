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
		<h2>Benvenuti nel negozio online di <em>Lady M Creazioni</em>!</h2>
				
		<?php
		require_once 'inclusiPHP/cMysql.php';

		$a = new cMySQL();
		$a->connect();
		$query = "SELECT nome, codice, tipologia FROM bracciali
		UNION
		SELECT nome, codice, tipologia FROM collane
		UNION
		SELECT nome, codice, tipologia FROM orecchini
		UNION
		SELECT nome, codice, tipologia FROM portachiavi
		ORDER BY codice DESC";
		$a->eseguiQuery($query);
		
		if(mysql_num_rows($a->query_id) == 0){
		echo '<p id="erroreInvio">Articoli nel negozio terminati, torni tra qualche giorno!</p>';
		} else {
			$max = (mysql_num_rows($a->query_id)>4) ? 4 : mysql_num_rows($a->query_id);
			for($i=0; $i<$max; $i++){
				$row = mysql_fetch_assoc($a->query_id);
				if($i==0){echo '<p class="small"> I nostri ultimi arrivi: </p>';}
				echo '<div class="articolo">
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