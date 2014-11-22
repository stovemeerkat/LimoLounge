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
				if(!empty($_POST['input'])){
					if(($_POST['input'] == $password)){
						echo 'Das Passwort war richtig!';
						echo '<a href="dev_index.html">Weiter zur Konfigurationsseite</a>';
					} else {
						echo '<form action="'; echo htmlspecialchars($_SERVER['PHP_SELF']); echo '" method="post">';
							echo '<input type="password" name="input">';
						echo '</form>';
					}
				} else {
					echo '<form action="'; echo htmlspecialchars($_SERVER['PHP_SELF']); echo '" method="post">';
						echo '<input type="password" name="input">';
					echo '</form>';
				}
			?>
		</div>
	</body>
</html>
