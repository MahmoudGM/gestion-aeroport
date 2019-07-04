<?php include "includes/connexion.php";
include "includes/fonctions.php";

//initialisation des params voiture
$idapp="";
$matricule="";
$nbplass="";
$poids="";
$dimension="";
$vitesse="";
$altitude="";
$type="";
$constructeur="";
$compagnie="";
$aeroport="";
//recup des param du formulaire
extract($_POST);

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

if(isset($_REQUEST['type']))
$type=$_REQUEST['type'];

if(isset($_REQUEST['constructeur']))
$constructeur=$_REQUEST['constructeur'];

if(isset($_REQUEST['compagnie']))
$compagnie=$_REQUEST['compagnie'];

if(isset($_REQUEST['aeroport']))
$aeroport=$_REQUEST['aeroport'];



$req=$ddb->exec("INSERT INTO `appareil`(`idapp`, `matricule`, `cap_nb_place`, `poids_tt`, `dimension`, `vitesse_max`, `altitude_max`, `compagnie_numcomp`, `aeropot_code_aeroport`, `type_id_type`, `constructeur_id_constucteur`) VALUES (NULL,'$matricule','$nbplass','$poids','$dimension','$vitesse','$altitude',$compagnie,$aeroport,$type,$constructeur)");
redirect("liste_appareil.php");
?>