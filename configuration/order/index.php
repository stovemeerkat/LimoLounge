<!DOCTYPE html>

<?php
	$servername = '';
	$username = '';
	$password = '';
	
	$conn = new mysqli($servername, $username, $password);
	
	if($conn->connect_error){
		die('Connection failed:\n' . $conn->connect_error);
	}
?>
<html>
	<head>
		<title>Bestellbestätigung</title>
	</head>
	
	<body>
		<h1>Vielen Dank für ihre Bestellung.</h1>
		Zitrone: <?php
			if(!empty($_POST['Zitrone'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
		Orange: <?php
			if(!empty($_POST['Orange'])){
				echo 'ja';
			} else {
				echo 'nein';
			}?><br>
	</body>
</html>
