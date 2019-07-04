<?php include "includes/header.php";

//initialisation des params voiture
$nom_compagnie="";
$tel="";
$email="";
$pays="";
//recup des param du formulaire

	extract($_POST);
if(isset($_REQUEST['nom_compagnie']))
$nom_compagnie=$_REQUEST['nom_compagnie'];

if(isset($_REQUEST['tel']))
$tel=$_REQUEST['tel'];

if(isset($_REQUEST['email']))
$email=$_REQUEST['email'];

if(isset($_REQUEST['pays']))
$pays=$_REQUEST['pays'];

$req=$ddb->exec("INSERT INTO `compagnie`(`numcomp`, `nom_compagnie`, `tel`, `email`, `pays`) VALUES (NULL,'$nom_compagnie','$tel','$email','$pays')");
redirect("liste_compagnie.php");

?>