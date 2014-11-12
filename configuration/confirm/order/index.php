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
		if(!empty($_SESSION[$optn])){
		echo 'ja <br>';
		} else {
		echo 'nein <br>';
		}
	}
  
	checkOption('Zitrone');
?>
