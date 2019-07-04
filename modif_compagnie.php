<?php include "includes/header.php";?>
<fieldset>
<legend>Modifier compagnie</legend>
<?php

$idcomp=$_GET['numcomp'];	
$sql="SELECT * FROM `compagnie` WHERE `numcomp`=".$_GET['numcomp'];
$req=$ddb->query($sql);
$res = $req->fetch();

 ?>
<form method="post" action="verif_modif_compagnie.php?numcomp=<?php echo $res['numcomp'];?>" enctype="multipart/form-data">
<br />

<label>nom compagnie</label>
    <input type="text" name="nom_compagnie"  placeholder="Entrer l'nom" value ="<?php echo $res['nom_compagnie'];?>" />
<label>telephone</label>
    <input type="text" name="tel" required placeholder="Saisir le N° telephone" value ="<?php echo $res['tel'];?> " />
<label>E-mail</label>
	<input type="email" name="email" required placeholder="Saisir l'email" value ="<?php echo $res['email'];?> " required />
<label>pays</label>
	<input type="text" name="pays" required placeholder="Saisir le pays" value ="<?php echo $res['pays'];?> " required />

    <input type="submit" value="Modifier"  />
</form>
</fieldset>

<?php include "includes/footer.php";?>