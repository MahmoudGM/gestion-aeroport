<?php include "includes/header.php";
//include "includes/secure.php";
$numcomp=$_REQUEST['numcomp'];

$req=$ddb->query("delete from compagnie where numcomp=".$numcomp);
$res=$req->fetch();
redirect("liste_compagnie.php");
?>