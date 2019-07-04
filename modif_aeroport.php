<?php include "includes/header.php";?>
<fieldset>
<legend>Modifier aeroport</legend>
<?php

$code_aeroport=$_GET['code_aeroport'];	
$sql="SELECT * FROM `aeropot` WHERE code_aeroport=".$_GET['code_aeroport'];
$req=$ddb->query($sql);
$res = $req->fetch();

 ?>
<form method="post" action="verif_modif_aeroport.php?code_aeroport=<?php echo $res['code_aeroport'];?>" enctype="multipart/form-data">
<br />

<label>nom aeroport</label>
    <input type="text" name="nom_aeroport"  placeholder="Entrer l'nom" value ="<?php echo $res['nom_aeroport'];?>" />
<label>categorie</label>
    <input type="text" name="categorie" required placeholder="Saisir le pays" value ="<?php echo $res['categorie'];?> " />
    <input type="submit" value="Modifier" />
</form>
</fieldset>

<?php include "includes/footer.php";?>