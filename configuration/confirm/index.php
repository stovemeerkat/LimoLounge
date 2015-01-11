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
			<div class="dir-item"><a href="http://limolounge.16mb.com/staff/" class="dir-link">Staff</a></div>
		</div>
		<div class="wrapper">
			<div id="header"><p>Bestellung übeprüfen:</p></div>
			<div id="smallWrapper">
				<div><h2>Geschmack</h2></div>
				<div class="verysmallWrapper">
					<?php
						checkOption('Apfel');
						checkOption('Himbeere');
						checkOption('Mandarine');
						checkOption('Mango');
						checkOption('Orange');
						checkOption('Zitrone');
					?>
				</div>
				<div><h2>Farbe</h2></div>
				<div class="verysmallWrapper">
					<?php
						checkOption('Blau');
						checkOption('Gelb');
						checkOption('Gruen');
						checkOption('Rot');
						checkOption('Violett');
					?>
				</div>
				<div><h2>Spezielle Zutaten</h2></div>
				<div class="verysmallWrapper">
					<?php
						checkOption('Kohlensaeure');
						checkOption('Koffein');
					?>
				</div>
				<div><h2>Zahlungsdaten</h2></div>
				<div class="verysmallWrapper">
					<form action="order/index.php" method="post">
						<table>
							<tr><td></ts></tsY><input type="text" name="Name" class="inputLabel" placeholder="Vorname, Nachname" required /></td></tr>
							<tr><td></ts></tsY><input type="text" name="Strasse" class="inputLabel" placeholder="Straße, Hausnr." required /></td></tr>
							<tr><td></ts></tsY><input type="text" name="Ort" class="inputLabel" placeholder="PLZ, Ort" required /></td></tr>
							<tr><td><button type="submit" class="button" id="btn-Finished"><div style="display: block; margin: auto; vertical-align: middle;">Abschicken</div></button></td></tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		<div id="impressum">
			<p class="impr-paragraph" id="impr-heading">Impressum</p>
			<p class="impr-paragraph">Made by the TMJJ Gang!</p>
		</div>
	</body>

</html>
