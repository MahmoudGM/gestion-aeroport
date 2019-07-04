<?php include "includes/header.php";

//initialisation des params voiture
$nom_aeroport="";
$categorie="";

//recup des param du formulaire

	extract($_POST);
if(isset($_REQUEST['nom_aeroport']))
$nom_aeroport=$_REQUEST['nom_aeroport'];

if(isset($_REQUEST['categorie']))
$categorie=$_REQUEST['categorie'];


$req=$ddb->exec("INSERT INTO `aeropot`(`code_aeroport`, `nom_aeroport`, `categorie`) VALUES (NULL,'$nom_aeroport','$categorie')");
redirect("liste_aeroport.php");

?>