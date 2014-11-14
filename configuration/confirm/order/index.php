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
	
	$insert = $conn->prepare('INSERT INTO Aromen (ID, Zitrone, Orange) VALUES (:ID, :Zitrone, :Orange);
		INSERT INTO Farbstoffe (ID, Gelb, Rot) VALUES (:ID, :Gelb, :Rot);
		INSERT INTO Specials (ID, Kohlensäure, Koffein) VALUES (:ID, :Kohlensäure, :Koffein);');
	$insert->bindParam(':ID', $ID);
	$insert->bindParam(':Zitrone', $_SESSION['Zitrone']);
	$insert->bindParam(':Orange', $_SESSION['Orange']);
	$insert->bindParam(':Gelb', $_SESSION['Gelb']);
	$insert->bindParam(':Rot', $_SESSION['Rot']);
	$insert->bindParam(':Kohlensäure', $_SESSION['Kohlensäure']);
	$insert->bindParam(':Koffein', $_SESSION['Koffein']);
	  
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
			$create->execute();
			$ID = $conn->insert_id;
			$insert->execute();
		?>
	</body>
</html>
