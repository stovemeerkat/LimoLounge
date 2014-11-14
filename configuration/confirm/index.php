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
	</head>
	
	<body>
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
		<a href="order/index.php?<?php echo htmlspecialchars(SID); ?>">Bestellen</a>
	</body>
</html>
