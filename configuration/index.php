<!DOCTYPE html>

<html>
	<head>
		<title>Seite noch im Aufbau</title>
	</head>
	
	<body>
		<h1>Diese Seite ist noch im Entwicklungsstadium.</h1>
		<p>Sie können daher noch keine Bestellungen aufgeben.</p>
		<p>Kommen sie später noch einmal. Bestellungen dürften vorraussichtlich ab dem 10. Dezember möglich sein</p>
		<br>
		<div style="border: 1px solid black; padding: 1em">
			<p>Sollten sie an der Entwicklung dieser Seite beteiligt sein, geben sie hier das Passwort ein:</p>
			<?php
				$password = '';
				if(!$_POST['input'] == $password){
					?>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
						<input type="password" name="input">
					</form>
					<?php
				} else {
					?>
					Das Passwort war richtig!
					<a href="dev_index.html">Weiter zur Konfigurationsseite</a>
					<?php
				}
			?>
		</div>
	</body>
</html>
