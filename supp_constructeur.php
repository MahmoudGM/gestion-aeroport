<?php include "includes/header.php";
$id_constucteur=$_REQUEST['id_constucteur'];

$req=$ddb->query("delete from constructeur where id_constucteur=".$id_constucteur);
$res=$req->fetch();
redirect("liste_constructeur.php");
?>