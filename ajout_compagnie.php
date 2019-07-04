<?php include "includes/header.php";?>
<fieldset>
<legend>Ajouter compagnie</legend>
<form method="post" action="verif_ajout_compagnie.php" enctype="multipart/form-data">

<label>nom compagnie</label>
    <input type="text" name="nom_compagnie" placeholder="Saisir le nom compagnie" required />
    <label>telephone</label>
    <input type="text" name="tel" placeholder="Entrer le numero de telephone" required />
    <label>e-mail</label>
    <input type="email" name="email" placeholder="Entrer l'e-mail" required />
    <label>pays </label>
    <input type="text" name="pays" placeholder="Entrer la dimension" required />
    
    <input type="submit" value="ajouter"  name="submit"/>
</form>
</fieldset>
<?php include "includes/footer.php";?>