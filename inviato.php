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
		$destinatario = 'luk3s@hotmail.it';
		$nome = @$_COOKIE['nome'];
		$indirizzoEmail = @$_COOKIE['indirizzoEmail'];
		$messaggio = @$_COOKIE['messaggio'];
		$oggetto = @$_COOKIE['oggetto'];
		$finalMex = "Messaggio inviato da: $nome <br> Indirizzo email: $indirizzoEmail <br> $messaggio";
		@mail($destinatario, $oggetto, $finalMex) OR die ('<p id="erroreInvio">Impossibile inviare il messaggio, controllare la connessione ad internet e riprovare.</p>');
	?>


		<div id="messaggioInviato">
			<p>Messaggio Inviato Correttamente </p>
			<p>Le risponderemo il prima possibile </p>
		</div>

	</div>
		
	<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>