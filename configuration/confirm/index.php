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
		<h2>Aromen</h2>
		<?php
			checkOption('Zitrone');
			checkOption('Orange');
			checkOption('Passionsfrucht');
		?>
		<h2>Farbstoffe</h2>
		<?php
			checkOption('Gelb');
			checkOption('Rot');
		?>
		<h2>Spezielle Zutaten</h2>
		<?php
			checkOption('Kohlensaeure');
			checkOption('Koffein');
		?>
		<a href="order/index.php?<?php echo htmlspecialchars(SID); ?>">Bestellen</a>
	</body>
</html>
