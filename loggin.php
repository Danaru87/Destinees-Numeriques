<?php
session_start();
if(!isset($_POST["id"])){
	header ("location:index.php");
	exit;
}
if ($_POST['id'] == ""){
	header("location:index.php?error=1");
	exit;
}


$id = $_POST['id'];

$db = mysqli_connect('localhost', 'root','aqwsedc2015', 'dnumerique') or die("impossible de se connecter à la base");

/* Verification de l'existance de l'identifiant dans la base */
$request = "SELECT identifiant, vote FROM Public";
$exist = false;
$votant = false;
if($reponse = mysqli_query($db, $request)){
while ($donnee = mysqli_fetch_assoc($reponse)) {
	if ($donnee['identifiant'] == $id and $donnee['vote'] == 1){
		$votant = true;
	}
	elseif ($donnee['identifiant'] == $id) {
		$_SESSION['id'] = $id;
		$exist = true;
	}
}
}
if($exist){
	header('location:vote.php');
    exit;
}
else if($votant){
	header('location:index.php?error=3');
    exit;
}
else{
	header('location:index.php?error=2');
    exit;
}
?>
