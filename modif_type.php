<?php include "includes/header.php";?>
<fieldset>
<legend>Modifier type</legend>
<?php

$id_type=$_GET['id_type'];	
$sql="SELECT * FROM `type` WHERE `id_type`=".$_GET['id_type'];
$req=$ddb->query($sql);
$res = $req->fetch();

 ?>
<form method="post" action="verif_modif_type.php?id_type=<?php echo $res['id_type'];?>" enctype="multipart/form-data">
<br />

<label>nom type</label>
    <input type="text" name="nom_type"  placeholder="Entrer l'nom" value ="<?php echo $res['nom_type'];?>" />
    <input type="submit" value="Modifier"  />
</form>
</fieldset>

<?php include "includes/footer.php";?>