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
				$query = "SELECT codice, nome, descrizione, prezzo FROM $dbRelativo WHERE codice = $code";
				$a->eseguiQuery($query);
				$row = mysql_fetch_assoc($a->query_id);

				echo'	<div>
							<div class="cartA">
								<a href="tuttiArticoli.php?idNumber='.$row['codice'].'&amp;tipoOggetto='.$dbRelativo.'">
									<img class="cartImg" src="images/articoli/1/'.$row['codice'].'.jpg" alt="'.$row['nome'].'">
								</a>
							</div>
						
							<div>
								<div class="cartB">
									<p>
										<a href="tuttiArticoli.php?idNumber='.$row['codice'].'&amp;tipoOggetto='.$dbRelativo.'">
											'.$row['nome'].'
										</a>
									</p>
									<p>Codice prodotto: '.setCode($row['codice']).'</p>
									<p>'.$row['descrizione'].'</p>
								</div>
								
								<div class="cartC">
									<p>Costo Articolo: <em>'.setPrice($row['prezzo']).' &euro;</em></p>
									<a href="carrello.php" onclick="cart.removeFromCart('.$row['codice'].', '.$row['prezzo'].')" class="removeObjFromCart">
										Rimuovi Articolo <img src="images/shopping_icons/remove.png" alt="Rimuovi articolo dal Carrello">
									</a>
								</div>
								
							</div>
						</div> 

						<div class="separator">&nbsp;</div>';
			}
			
			echo '	<div id="divPaga">
						<p>Totale da Pagare: <em>'.setPrice($_COOKIE['totale']).' &euro;</em></p>
							<a href="aggiornaDatabase.php" class="removeObjFromCart" id="pagaSubito">
								Paga Subito!
							</a>
					</div>';

		}

		?> 

	</div>
		
	<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>