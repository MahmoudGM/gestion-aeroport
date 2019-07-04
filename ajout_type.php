<?php include "includes/header.php";

	
 ?>
<fieldset>
<legend>Ajouter type</legend>
<form method="post" action="verif_ajout_type.php" enctype="multipart/form-data">
<label>nom dy type</label>
    <input type="text" name="nom_type" placeholder="Saisir le nom du type" required />
    <input type="submit" value="ajouter"  name="submit"/>
</form>
</fieldset>
<?php include "includes/footer.php";?>