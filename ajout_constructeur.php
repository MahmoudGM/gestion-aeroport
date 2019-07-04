<?php include "includes/header.php";

	
 ?>
<fieldset>
<legend>Ajouter compagnie</legend>
<form method="post" action="verif_ajout_construecteur
.php" enctype="multipart/form-data">

<label>nom constructeur</label>
    <input type="text" name="nom_constructeur" placeholder="Saisir le nom du constructeur" required />
    <label>pays du constructeur</label>
    <input type="text" name="pays_const" placeholder="Entrer le pays du constructeur" required />
 
    <input type="submit" value="ajouter"  name="submit"/>
</form>
</fieldset>
<?php include "includes/footer.php";?>