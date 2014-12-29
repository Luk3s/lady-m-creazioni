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

		<h2>Scegli una categoria per vedere i relativi prodotti</h2>
		
	<?php
		require_once 'inclusiPHP/cMysql.php';

		$a = new cMySQL();
		$a->connect();
		$categorie = array(0 => "orecchini", 1 => "collane", 2 => "bracciali", 3 => "portachiavi"); 
		$index = 0;
		$quantiVuoti = 0;
		
		
		for(; $index<count($categorie); $index++){
			$dbGiusto = $categorie[$index];
			$query = "SELECT codice, tipologia FROM $dbGiusto";
			$a->eseguiQuery($query);
			$max = mysql_num_rows($a->query_id);
			$casuale = mt_rand(1, $max);
			$i = 0;
			while($i != $casuale){
			$row = mysql_fetch_assoc($a->query_id);
			$i++;
			}
			$controllo = $row['codice'];
		
			if($controllo != ""){
				echo'	<div class="catalogo_item">
							<a href="subCatalogo.php?calledby='.$row['tipologia'].'">
								<span class="titolo_subcatalogo">'.$row['tipologia'].'</span>
								<img class="anteprima_catalogo" src="images/articoli/2/'.$row['codice'].'/1.jpg" alt="'.$row['tipologia'].'">
							</a>
						</div>';
			} else {
				$quantiVuoti++;
			}
		}
		
		if($quantiVuoti == 4){
			echo '<p id="erroreInvio">Articoli nel negozio terminati, torni tra qualche giorno!</p>';
		}
		
	?>
		
	</div>
		
<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>