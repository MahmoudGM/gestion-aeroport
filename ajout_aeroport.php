<?php include "includes/header.php";?>
<fieldset>
<legend>Ajouter aeroport</legend>
<form method="post" action="verif_ajout_aeroport.php" enctype="multipart/form-data">

<label>nom aeroport</label>
    <input type="text" name="nom_aeroport" placeholder="Saisir le nom aeroport" required />
    <label>categorie</label>
    <input type="text" name="categorie" placeholder="Entrer la categorie" required />
    
    <input type="submit" value="ajouter"  name="submit"/>
</form>
</fieldset>
<?php include "includes/footer.php";?>