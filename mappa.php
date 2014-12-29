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

	<div id="divGuida">

		<p>Lady M Creazioni online è un negozio virtuale, come tale è possibile scegliere dei prodotti direttamente sul sito e pagarli tramite carta di credito. Una volta effettuato il pagamento, l'oggetto vi sarà recapitato direttamente a casa</p>
		<p>Ecco una mappa del sito per orientarsi:</p>

		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#chiSiamo">Chi Siamo</a></li>
			<li><a href="#catalogo">Catalogo</a>
				<div id="sub">
				<ul>
				<li>Orecchini</li>
				<li>Bracciali</li>
				<li>Collane</li>
				<li>Portachiavi</li>
				</ul>
				</div>
			</li>
			<li><a href="#carrello">Carrello</a></li>
			<li><a href="#contatti">Contatti</a></li>
			<li><a href="#gAcquisto">Guida all'acquisto</a></li>
			<li><a href="#iPrivacy">Informazioni sulla privacy</a></li>
			<li><a href="#uSidebar">Uso della sidebar</a></li>
		</ul>

		<div id="distanzia">&nbsp;</div>

		<a name="home" class="gTitolo" href="index.php">Home</a>
		<p>Nella home, o pagina principale, potr&agrave; vedere gli ultimi arrivi nel catalogo.</p>
		<a name="chiSiamo" class="gTitolo" href="chiSiamo.php">Chi Siamo</a>
		<p>Per avere pi&ugrave; informazioni su chi crea i gioielli e dove vengono creati, visiti questa sezione.</p>
		<a name="catalogo" class="gTitolo" href="catalogo.php">Catalogo</a>
		<p>Questa sezione permette di avere di visualizzare il catalogo, ad ogni sua visita le verr&agrave presentata una immagine casuale di ogni categoria del catalogo. Nel nostro catalogo sono presenti quattro categorie: orecchini, collane, bracciali e portachiavi. Cliccando  sulla relativa immagine nel catalogo le verranno mostrati tutti gli articoli di quella categoria. Potra navigare in ogni articolo dove potr&agrave; avere informazioni specifiche sul prodotto e vedere tre foto dell'articolo in questione.</p>
		<a name="carrello" class="gTitolo" href="carrello.php">Carrello</a>
		<p>Una volta aggiunto un elemnto al carrello (azione possibile dalla pagina specifica di un articolo, cliccando sull'apposito pulsante Aggiungi al carrello), &egrave; possibile visualizzare l'intero carrello ed eventualmente eliminare un oggetto che non si desidera pi&ugrave; (cliccando sull'apposito pulsante Rimuovi dal Carrello). Una volta sicuri delle scelte &egrave; possibile pagare cliccando sul pulsante in fondo alla pagina con la dicitura Paga Adesso.</p>
		<a name="contatti" class="gTitolo" href="contatti.php">Contatti</a>
		<p>Se vuole chiederci qualche qualcosa, essere sicuro degli acquisti effettuati o assicurarsi della spedizioni, pu&ograve; inviarci una email attraverso l'apposito form.</p>
		<a name="gAcquisto" class="gTitolo" href="guida.php">Guida all'acquisto</a>
		<p>Prima di acquistare un prodotto le consigliamo di leggere <a href="guida.php">questa</a> utile guida</p>
		<a name="iPrivacy" class="gTitolo" href="privacy.php">Informazioni sulla privacy</a>
		<p>Tratteremo i suoi dati secondo le vigenti leggi in materia, visita <a href="privacy.php">questa</a> sezione per saperne di pi&ugrave;</p>
		<a name="uSidebar" class="gTitolo" href="#">Uso della sidebar</a>
		<p>Sulla sinistra c'&egrave; una colonna particolare, chiamata sidebar, grazie alla quale &egrave; possibile sia accedere in modo pi&ugrave; veloce alle voci del catalogo che avere un riassunto degli oggetti presenti nel carrelo</p>

	</div>


</div>
		
<?php require_once 'inclusi/push.php'; ?>
		
</div>

<?php require_once 'inclusi/footer.php'; ?>

</body>
</html>