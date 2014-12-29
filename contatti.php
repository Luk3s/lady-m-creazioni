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

		<form id="formContatti" action="contattiRicevuto.php" method="post" name="formContatti">
			<p id="pContatti">
				Nome:<br>
				<input type="text" name="nome"><br>
				Indirizzo email:<br>
				<input type="text" name="email"><br>
				Oggetto: <br>
				<input type="text" name="oggetto"><br>
				Testo: <br>
				<textarea rows="10" cols="25" name="messaggio"></textarea><br>

				<button type="reset" id="reset">Reset</button>
				<button type="submit">Invia</button>
			</p>
		</form>

	</div>
		
	<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>