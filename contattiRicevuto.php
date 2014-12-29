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
		$nome = $_POST['nome'];
		setcookie("nome","$nome",time()+60,"/");
		$indirizzoEmail = $_POST['email'];
		setcookie("indirizzoEmail","$indirizzoEmail",time()+60,"/");
		$oggetto = $_POST['oggetto'];
		setcookie("oggetto","$oggetto",time()+60,"/");
		$messaggio = $_POST['messaggio'];
		setcookie("messaggio","$messaggio",time()+60,"/");

		echo'
		<div id="divForm">
			<form id="formContattiAfter" action="contattiRicevuto.php" method="post" name="formContatti">
				<p id="pContatti">
					Nome:<br>
					<input type="text" name="nome" value="'.$nome.'"><br>
					Indirizzo email:<br>
					<input type="text" name="email" value="'.$indirizzoEmail.'"><br>
					Oggetto: <br>
					<input type="text" name="oggetto" value="'.$oggetto.'"><br>
					Testo: <br>
					<textarea rows="10" cols="25" name="messaggio">'.$messaggio.'</textarea><br>

					<button type="reset" id="reset">Reset</button>
					<button type="submit">Invia</button>
				</p>
			</form>
		</div>';
		?>

		<div id="erroriForm">
			<p><em>Tutti</em> i campi sono obbligatori.</p>
			<p>Il campo <em>nome</em> può contenere solo lettere</p>
			<p>Il campo <em>indirizzo email</em> deve contenere un indirizzo valido</p>

			<script type="text/javascript">
				cConttatti();
				if(quantiErrati == 0){
					document.write('<p class="mexInvio">I <em>dati<\/em> da lei inseriti sono <em>corretti<\/em>, clicchi sul bottone sottostante per inviare il messaggio<\/p>');		
					document.write('<div class="dettagli"><a href="inviato.php">Invia Messaggio<\/a><\/div>');
				} else {
					document.write('<p class="mexInvio">I campi contrassegnati in <em>rosso<\/em> contegono degli <em>errori<\/em>, legga i consigli in alto, provi a modificare i dati e  a rinviare il suo messaggio<\/p>');
				}
			</script> 
		</div>

	</div>
		
	<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>