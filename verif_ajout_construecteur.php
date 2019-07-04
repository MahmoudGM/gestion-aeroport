<?php include "includes/header.php";

//initialisation des params voiture
$nom_constructeur="";
$pays_const="";
//recup des param du formulaire
	extract($_POST);
if(isset($_REQUEST['nom_constructeur']))
$nom_constructeur=$_REQUEST['nom_constructeur'];

if(isset($_REQUEST['pays_const']))
$pays_const=$_REQUEST['pays_const'];


$req=$ddb->exec("INSERT INTO `constructeur`(`id_constucteur`, `nom_constructeur`, `pays_const`) VALUES (NULL,'$nom_constructeur','$pays_const')");
redirect("liste_constructeur.php");

?>