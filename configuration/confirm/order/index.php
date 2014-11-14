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
	
	$create = $conn->prepare('INSERT INTO Bestellungen () VALUES ();');
	$create->execute();
	$ID = $conn->insert_id;
	$create->close();
	
	$flavours = $conn->prepare('INSERT INTO Aromen (ID, Zitrone, Orange) VALUES (?, ?, ?);');
	$flavours->bind_param('iii', $ID, $_SESSION['Zitrone'], $_SESSION['Orange']);
	$flavours->execute();
	$flavours->close();
	
	$colors = $conn->prepare('INSERT INTO Farbstoffe (ID, Gelb, Rot) VALUES (?, ?, ?);');
	$colors->bind_param('iii', $ID, $_SESSION['Gelb'], $_SESSION['Rot']);
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
 ?>
 
 <html>
	<head>
		<title>Vielen Dank!</title>
	</head>
	
	<body>
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
	</body>
</html>
