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
		
		$googleCheckout = false;
	
	?>
		
	<div id="main">

	<?php 
	if($googleCheckout == false){
		echo '<p id="erroreInvio">L\'ordine su Google Checkout &egrave; stato annullato.</p>';
		require_once 'inclusiPHP/cMysql.php';
		$a = new cMySQL();
		$a->connect();
		$query = "SELECT codice, tipologia FROM abracciali
		UNION
		SELECT codice, tipologia FROM acollane
		UNION
		SELECT codice, tipologia FROM aorecchini
		UNION
		SELECT codice, tipologia FROM aportachiavi";
		$a->eseguiQuery($query);
		$max = mysql_num_rows($a->query_id);
		
		for($i=0; $i<$max; $i++){
			$row = mysql_fetch_assoc($a->query_id);
			$dataBase = $row['tipologia'];
			$dbRelativo = 'a'.$dataBase;
			$code = $row['codice'];
			$query = "INSERT INTO $dataBase SELECT * FROM $dbRelativo WHERE codice = $code";
			$a->eseguiQuery($query);
			$query = "DELETE FROM $dbRelativo WHERE codice = $code";
			$a->eseguiQuery($query);
		}
	
	
	} else { ?>
		<div id="divVenduto">
			<p>Graze per aver acquistato i nostri prodotti</p>
			<p>Le arriver&agrave; quanto richiesto entro 48h</p>
			<p>Se ha dei dubbi visiti <a href="guida.php">questa</a> pagina</p>
			<p>Per qualunque altro problema ci <a href="contatti.php">contatti</a></p>
		</div>
		<script type="text/javascript">cart.eliminaCookie();</script>
	<?php } ?>

	</div>
		
	<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>