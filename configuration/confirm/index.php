<!DOCTYPE html>

<?php
	session_start();

	function checkOption($optn){
		echo $optn . ': ';
		
		if(!empty($_POST[$optn])){
			echo 'ja <br>';
			$_SESSION[$optn] = true;
		} else {
			echo 'nein <br>';
			$_SESSION[$optn] = false;
		}
	}
?>

<html>
	<head>
		<title>Bestellbestätigung</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>
	
	<body>
		<div id="shade"></div>
		<div id="directory">
			<a href="http://limolounge.16mb.com/"><div id="logo"><img id="logo-img" src="Bilder/Logo.png"></div></a>
			<div class="dir-item"><a href="http://limolounge.16mb.com/" class="dir-link">Start</a></div>
			<div class="dir-item"><a href="http://limolounge.16mb.com/configuration/" class="dir-link">Configurate</a></div>
			<div class="dir-item"><a href="http://limolounge.16mb.com/configuration/staff/" class="dir-link">Staff</a></div>
		</div>
		<div class="wrapper">
			<div id="header"><p>Bestellung übeprüfen:</p></div>
			<h2>Geschmack</h2>
			<?php
				checkOption('Apfel');
				checkOption('Himbeere');
				checkOption('Mandarine');
				checkOption('Mango');
				checkOption('Orange');
				checkOption('Zitrone');
			?>
			<h2>Farbe</h2>
			<?php
				checkOption('Blau');
				checkOption('Gelb');
				checkOption('Gruen');
				checkOption('Rot');
				checkOption('Violett');
			?>
			<h2>Spezielle Zutaten</h2>
			<?php
				checkOption('Kohlensaeure');
				checkOption('Koffein');
			?>
			<h2>Zahlungsdaten</h2>
			<form action="order/index.php" method="post">
				<table>
					<tr><td>Vorname, Nachname:</td><td><input type="text" name="Name"></td></tr>
					<tr><td>Straße, Hausnr.:</td><td><input type="text" name="Strasse"></td></tr>
					<tr><td>PLZ, Ort:</td><td></ts></tsY><input type="text" name="Ort"></td></tr>
					<tr><td><button type="submit" class="button"><div style="display: table-cell; vertical-align: middle">Abschicken</div></button></td></tr>
				</table>
			</form>
		</div>
		<div id="impressum">
			<p class="impr-paragraph" id="impr-heading">Impressum</p>
			<p class="impr-paragraph">Made by the Big Dick Gang!</p>
		</div>
	</body>

</html>
