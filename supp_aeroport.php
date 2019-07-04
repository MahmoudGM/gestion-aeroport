<?php include "includes/header.php";
$code_aeroport=$_REQUEST['code_aeroport'];

$req=$ddb->query("delete from aeropot where code_aeroport=".$code_aeroport);
$res=$req->fetch();
redirect("liste_aeroport.php");
?>