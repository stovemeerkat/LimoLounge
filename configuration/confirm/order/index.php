<!DOCTYPE html>

<?php
	$servername = '';
	$username = '';
	$password = '';
	$dbname = '';
  
	session_start();
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die('Connection failed:\n' . $conn->connect_error);
	}
	
	$create = $conn->prepare('INSERT INTO Bestellungen (Name, Strasse, Ort) VALUES (?, ?, ?);');
	$create->bind_param('sss', $_POST['Name'], $_POST['Strasse'], $_POST['Ort']);
	$create->execute();
	$ID = $conn->insert_id;
	$create->close();
	
	$flavours = $conn->prepare('INSERT INTO Aromen (ID, Apfel, Himbeere, Mandarine, Mango, Orange, Zitrone) VALUES (?, ?, ?, ?, ?, ?, ?);');
	$flavours->bind_param('iiiiiii', $ID, $_SESSION['Apfel'], $_SESSION['Himbeere'], $_SESSION['Mandarine'], $_SESSION['Mango'], $_SESSION['Orange'], $_SESSION['Zitrone']);
	$flavours->execute();
	$flavours->close();
	
	$colors = $conn->prepare('INSERT INTO Farbstoffe (ID, Blau, Gelb, Gruen, Rot, Violett) VALUES (?, ?, ?, ?, ?, ?);');
	$colors->bind_param('iiiiii', $ID, $_SESSION['Blau'], $_SESSION['Gelb'], $_SESSION['Gruen'], $_SESSION['Rot'], $_SESSION['Violett']);
	$colors->execute();
	$colors->close();
		
	$specials = $conn->prepare('INSERT INTO Specials (ID, Kohlensaeure, Koffein) VALUES (?, ?, ?);');
	$specials->bind_param('iii', $ID, $_SESSION['Kohlensaeure'], $_SESSION['Koffein']);	
	$specials->execute();
	$specials->close();
	
	$conn->close();
	
	function checkOption($optn){
		echo $optn . ': ';
		if($_SESSION[$optn]){
		echo 'ja <br>';
		} else {
		echo 'nein <br>';
		}
	}
	
	function checkPostOption($optn){
		echo $optn . ': ' . $_POST[$optn]. '<br>';
	}
 ?>
 
<html>
	<head>
		<title>Vielen Dank!</title>
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
			<h2>Vielen Dank für Ihre Bestellung!</h2>
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
			<h2>Adresse</h2>
			<?php
				checkPostOption('Name');
				checkPostOption('Strasse');
				checkPostOption('Ort');
			?>
		</div>
	</body>
</html>
<!--- Test --->
