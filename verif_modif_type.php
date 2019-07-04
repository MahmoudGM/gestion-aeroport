<?php 
include"includes/header.php";
//initialisation des params appareil
$nom_type="";

//recup des param du formulaire
extract($_POST);

if(isset($_REQUEST['id_type']))
$id_type=$_REQUEST['id_type'];

/*$sql="select * from compagnie where numcomp=".$numcomp;

$req=$ddb->query($sql);
$res=$req->fetch();*/ 

if(isset($_REQUEST['nom_type']))
$nom_compagnie=$_REQUEST['nom_type'];

$req=$ddb->exec("UPDATE `type` SET `nom_type`='$nom_type' where `id_type`='$id_type'");

redirect("liste_type.php");
?>