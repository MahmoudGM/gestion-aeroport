<?php include "includes/header.php";?>
<fieldset>
<legend>Modifier constructeur</legend>
<?php

$id_constucteur=$_GET['id_constucteur'];	
$sql="SELECT * FROM `constructeur` WHERE id_constucteur=".$_GET['id_constucteur'];
$req=$ddb->query($sql);
$res = $req->fetch();

 ?>
<form method="post" action="verif_modif_constructeur.php?id_constucteur=<?php echo $res['id_constucteur'];?>" enctype="multipart/form-data">
<br />

<label>nom constructeur</label>
    <input type="text" name="nom_constructeur"  placeholder="Entrer l'nom" value ="<?php echo $res['nom_constructeur'];?>" />
<label>pays</label>
    <input type="text" name="pays_const" required placeholder="Saisir le pays" value ="<?php echo $res['pays_const'];?> " />
    <input type="submit" value="Modifier" />
</form>
</fieldset>

<?php include "includes/footer.php";?>