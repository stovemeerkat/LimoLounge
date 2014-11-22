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
		<div class="config-step" style="z-index: 3">
			<h1>Bestellung übeprüfen:</h1>
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
				<form action="confirm/index.php" method="post">
					Vorname, Nachname: <input type="text" name="Name"><br>
					Straße, Hausnr.: <input type="text" name="Strasse"><br>
					PLZ, Ort: <input type="text" name="Ort"><br>
				</form>
			<a href="order/index.php?<?php echo htmlspecialchars(SID); ?>"><div class="button" id="btn-Finished">Bestellen</div></a>
		</div>
	</body>

</html>
