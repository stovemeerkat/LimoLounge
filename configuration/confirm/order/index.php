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
	
	$insert = $conn->prepare('INSERT INTO Aromen (ID, Zitrone, Orange) VALUES (?, ?, ?);
		INSERT INTO Farbstoffe (ID, Gelb, Rot) VALUES (?, ?, ?);
		INSERT INTO Specials (ID, Kohlensäure, Koffein) VALUES (?, ?, ?);');
	$insert->bind_param('iiiiiiiii', $ID, $_SESSION['Zitrone'], $_SESSION['Orange'], $ID, $_SESSION['Gelb'], $_SESSION['Rot'], $ID, $_SESSION['Kohlensäure'], $_SESSION['Koffein']);
	
	$insert->execute();
	$insert->close();
	
	$conn->close();
	
	function checkOption($optn){
		echo $optn . ': ';
		if(!empty($_SESSION[$optn])){
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
			checkOption('Kohlensäure');
			checkOption('Koffein');
		?>
	</body>
</html>
