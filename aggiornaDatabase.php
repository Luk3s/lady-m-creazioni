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

		$buyers_id = "";
		$totale = "";
		$sidString = "";

		if(!isset($_COOKIE['totale']) || $_COOKIE['totale'] == 0) {
			echo '<p id="carrelloVuoto">Il carrello &egrave; ancora vuoto!<br>';
			echo '<a href="catalogo.php">Naviga nel nostro catalogo</a></p>';
		} else {
			$totale = $_COOKIE['totale'];
			$idString = $_COOKIE['idString'];
			$buyers_id = array();
			$patt ='/-/i';
			$arrayId = preg_split($patt, $idString);
			$dim = count($arrayId)-1;
			
			for($a = 0; $a<$dim; $a++){
				$buyers_id[$a] = $arrayId[$a];
			}

			$a = new cMySQL();
			$a->connect();
			
			foreach($buyers_id as $code){
				$query = "SELECT tabella FROM idtipo WHERE codice = $code";
				$a->eseguiQuery($query);
				$dbRelativo = mysql_fetch_assoc($a->query_id);
				$dbRelativo = $dbRelativo['tabella'];
				$dbAcquistati = 'a'.$dbRelativo;
				$query = "INSERT INTO $dbAcquistati SELECT * FROM $dbRelativo WHERE codice = $code";
				$a->eseguiQuery($query);
				$query = "DELETE FROM $dbRelativo WHERE codice = $code";
				$a->eseguiQuery($query);
			}
			
			header("location: venduto.php"); 

		}

		?> 

	</div>
		
	<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>