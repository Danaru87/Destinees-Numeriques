<?php
session_start();
if(!isset($_SESSION['id'])){
        header('location:index.php');
        exit;
}
if (!isset($_POST["liste1"]) and !isset($_POST["liste2"]) and !isset($_POST["liste3"])){
	exit;
}

$liste1 = $_POST["liste1"];
$liste2 = $_POST["liste2"];
$liste3 = $_POST["liste3"];

if ($liste1 == $liste2 or $liste2 == $liste3 or $liste1 == $liste3){
	header("location:vote.php?equal=true");
	exit;
}

$tableVote = array($liste1, $liste2, $liste3);

foreach ($tableVote as $k) {
	if ($k <1 and $k > 8){
		header('location:vote.php?error=true');
		exit;
	}
}
$host ='localhost'; 
$user ='root';  
$pass = 'aqwsedc2015'; 
$base ='dnumerique';
$db = mysqli_connect($host, $user, $pass, $base) or die("Erreur de connexion a la BDD");

$req = "UPDATE Entreprise SET points=points+5 WHERE id='$liste1';";
$req2 = "UPDATE Entreprise SET points=points+3 WHERE id='$liste2';";
$req3 = "UPDATE Entreprise SET points=points+1 WHERE id='$liste3';";
$vote = "UPDATE Public SET vote=1 Where identifiant='".$_SESSION['id']."';";
mysqli_query($db, $req) or die ("Impossible d'effectuer la req");
mysqli_query($db, $req2)or die ("Impossible d'effectuer la req2");
mysqli_query($db, $req3)or die ("Impossible d'effectuer la req3");
mysqli_query($db, $vote)or die ("Impo BLA BLA BLA");

header('location:merci.php');

?>
