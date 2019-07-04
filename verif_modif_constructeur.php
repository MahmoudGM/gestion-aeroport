<?php 
include"includes/header.php";
//initialisation des params appareil
$id_constucteur="";
$nom_constructeur="";
$pays_const="";

//recup des param du formulaire
extract($_POST);
if(isset($_REQUEST['id_constucteur']))
$id_constucteur=$_REQUEST['id_constucteur'];

if(isset($_REQUEST['nom_constructeur']))
$nom_constructeur=$_REQUEST['nom_constructeur'];

if(isset($_REQUEST['pays_const']))
$pays_const=$_REQUEST['pays_const'];

$req=$ddb->query("UPDATE constructeur SET nom_constructeur='$nom_constructeur',pays_const='$pays_const' WHERE id_constucteur=$id_constucteur");
redirect("liste_constructeur.php");
?>