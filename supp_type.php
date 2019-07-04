<?php include "includes/header.php";
//include "includes/secure.php";
$id_type=$_REQUEST['id_type'];

$req=$ddb->query("delete from type where id_type=".$id_type);
$res=$req->fetch();
redirect("liste_type.php");
?>