<?php include "includes/header.php";
//include "includes/secure.php";	
$idapp=$_REQUEST['idapp'];
$req=$dbb->query("select * from appareil where idapp=".$idapp);
$res = $req->fetch(); ?>
<fieldset>
<legend>Modifier appreil</legend>
<form method="post" action="verif_modif_appreil.php?id=<?php echo $idapp;?>" enctype="multipart/form-data">
<img src="produits/<?php echo $res['photo'];?>" width="150" /><br />
<label>identifiant</label>
    <input type="text" name="idapp" value="<?php echo $res['idapp'];?>" placeholder="Entrer l'id" required />
<label>matricule</label>
    <input type="text" name="matricule" value="<?php echo $res['matricule'];?>" placeholder="Saisir la matricule" required />
<label>capaciter nombre de places</label>
	<input type="text" name="nbplass" value="<?php echo $res['cap_nb_place'];?>" placeholder="Saisir la capaciter nombre de places" required />
<label>poids total</label>
	<input type="text" name="poids" value="<?php echo $res['poids_tt'];?>" placeholder="Saisir le poids total" required />
<label>dimension</label>
	<input type="text" name="dimension" value="<?php echo $res['dimension'];?>" placeholder="Saisir la dimension" required />
<label>vitesse maximale</label>
	<input type="text" name="vitesse" value="<?php echo $res['vitesse_max'];?>" placeholder="Saisir la vitesse" required />
<label>altitude_max</label>
	<input type="text" name="altitude" value="<?php echo $res['altitude_max'];?>" placeholder="Saisir l'altitude" required />


    <input type="submit" value="Modifier"  />
</form>
</fieldset>
<?php include "includes/footer.php";?>