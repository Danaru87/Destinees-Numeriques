<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:index.php');
	exit;
}
if (isset($_GET['equal'])){
	$error = "Vous devez selectionner 3 entreprises différentes";
}
else{
	$error ="";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="jquery.mobile-1.3.2.min.css" />
	<title> Les Destinées Numériques </title>
	<script src="jquery-1.10.2.min.js"></script>
	<script src="jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
	<div data-role="header">
		<h1>PitchAQUI</h1>
	</div>
		<p style="color:red"><?php echo $error; ?></p>
		<form id='formulaire' action='moteur.php' method='post'>
		<select name='liste1' id='liste1'>
			<option value="0">Pour 5 points:</option>
			<option value='1'>1. Dokker</option>
			<option value='2'>2. Blook-Up</option>
			<option value='3'>3. Pixfirst</option>
			<option value='4'>4. Tel4xat</option>
			<option value='5'>5. Libcast</option>
			<option value='6'>6. Winewoo</option>
			<option value='7'>7. Dreamtronic</option>
			<option value='8'>8. On Air Radio</option>
		</select>
		<select name='liste2' id='liste2'>
			<option value="0">Pour 3 points</option>
			<option value='1'>1. Dokker</option>
			<option value='2'>2. Blook-Up</option>
			<option value='3'>3. Pixfirst</option>
			<option value='4'>4. Tel4xat</option>
			<option value='5'>5. Libcast</option>
			<option value='6'>6. Winewoo</option>
			<option value='7'>7. Dreamtronic</option>
			<option value='8'>8. On Air Radio</option>
		</select>
		<select name='liste3' id='liste3'>
			<option value="0">Pour 1 point</option>
			<option value='1'>1. Dokker</option>
			<option value='2'>2. Blook-Up</option>
			<option value='3'>3. Pixfirst</option>
			<option value='4'>4. Tel4xat</option>
			<option value='5'>5. Libcast</option>
			<option value='6'>6. Winewoo</option>
			<option value='7'>7. Dreamtronic</option>
			<option value='8'>8. On Air Radio</option>
		</select>
		<input type='submit' id ="OK" value='Voter !!' name='valider'></input>
	</form>
		<div id="images">
			<img id ="Logo1"src="Logo1.jpg" width="40%" height="17%">
			<img id ="Logo2"src="Logo2.gif" width="30%" height="15%">
		</div>
</body>
</html>
