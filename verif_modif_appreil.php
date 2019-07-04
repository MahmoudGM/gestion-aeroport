<?php
include "include/header.php"; 

extract($_POST);
//initialisation des params appareil
$idapp="";
$matricule="";
$nbplass="";
$poids="";
$dimension="";
$vitesse="";
$altitude="";;
//recup des param du formulaire
if(isset($_REQUEST['idapp']))
$idapp=$_REQUEST['idapp'];

if(isset($_REQUEST['matricule']))
$matricule=$_REQUEST['matricule'];

if(isset($_REQUEST['nbplass']))
$nbplass=$_REQUEST['nbplass'];

if(isset($_REQUEST['poids']))
$poids=$_REQUEST['poids'];

if(isset($_REQUEST['dimension']))
$dimension=$_REQUEST['dimension'];

if(isset($_REQUEST['vitesse']))
$vitesse=$_REQUEST['vitesse'];

if(isset($_REQUEST['altitude']))
$altitude=$_REQUEST['altitude'];
echo $
$req=$ddb->exec("update appareil set idapp='$idapp',matricule='$matricule',cap_nb_place='$nbplass',poids_tt='$poids',dimension='dimension',vitesse_max='vitesse',altitude_max='altitude' where idapp='$idapp'");
//redirect("liste_appreil.php");
?>