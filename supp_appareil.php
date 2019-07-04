<?php include "includes/connexion.php";
include "includes/fonctions.php";
$idapp=$_REQUEST['idapp'];
$req=$ddb->exec("delete from appareil where idapp=".$idapp);

redirect("liste_apperil.php");
?>