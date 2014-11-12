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
	
	function checkOption($optn){
		echo $optn . ': ';
		
		if(!empty($_POST[$optn])){
			echo 'ja <br>';	
		} else {
			echo 'nein <br>';
		}
	$_SESSION[$optn] = $_POST[$optn];
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
			checkOption('Kohlensäure');
			checkOption('Koffein');
		?>
	</body>
</html>
