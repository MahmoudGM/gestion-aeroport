<?php 
include"includes/header.php";
//initialisation des params appareil
$code_aeroport="";
$nom_constructeur="";
$pays_const="";

//recup des param du formulaire
extract($_POST);
if(isset($_REQUEST['code_aeroport']))
$code_aeroport=$_REQUEST['code_aeroport'];

if(isset($_REQUEST['nom_aeroport']))
$nom_aeroport=$_REQUEST['nom_aeroport'];

if(isset($_REQUEST['categorie']))
$categorie=$_REQUEST['categorie'];

$req=$ddb->exec("UPDATE aeropot SET nom_aeroport='$nom_aeroport',categorie='$categorie' WHERE code_aeroport=$code_aeroport");
redirect("liste_aeroport.php");
?>