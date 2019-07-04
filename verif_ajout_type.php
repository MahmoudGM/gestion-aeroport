<?php include "includes/header.php";

//initialisation des params voiture
$id_type="";
$nom_type="";
//recup des param du formulaire


	extract($_POST);
if(isset($_REQUEST['nom_type']))
$nom_compagnie=$_REQUEST['nom_type'];

$req=$ddb->exec("INSERT INTO `type`(`id_type`, `nom_type`) VALUES (NULL,'$nom_type')");
redirect("liste_type.php");

?>