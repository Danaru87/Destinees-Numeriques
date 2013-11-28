<?php
session_start();
exit;
if (isset($_GET['error'])){
	switch ($_GET['error']) {
		case 1:
			$error = "Le champ doit être rempli";
			break;
		case 2:
			$error = "Identifiant innexistant";
			break;
		case 3:
			$error = "Vous avez déjà voté";
			break;
		default:
			break;
	}
}
else{
	$error = "";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="jquery.mobile-1.3.2.min.css" />
		<title> Les Destinées Numériques </title>

		<script src="jquery-1.10.2.min.js"></script>
		<script src="jquery.mobile-1.3.2.min.js"></script>

	</head>

	<body>
		<div data-role='header'>
		<h1>PitchAQUI</h1>
	</div>
	<div data-role='content' align="center">
		<p style="color:red"><?php echo $error ?></p>
		<form method="post" action="loggin.php">
			<p align="center">Entrez votre Identifiant</p>
			<input type="text" id="id" name="id"/>
			<input type="submit" value ="Entrer" id="Entrer"/>
		</form>
		<div id="images">
			<img id ="Logo1"src="Logo1.jpg" width="40%" height="17%">
			<img id ="Logo2"src="Logo2.gif" width="30%" height="15%">
		</div>
	</div>

	</body>

</html>
