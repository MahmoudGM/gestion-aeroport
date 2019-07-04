<?php include "includes/header.php";?> 


<fieldset>
<legend>Ajouter appareil</legend>
<form method="post" action="verif_ajout_appareil.php" enctype="multipart/form-data">

<label>matricule</label>
    <input type="text" name="matricule" placeholder="Saisir la matricule" required />
    <label>capaciter nombre de places</label>
    <input type="text" name="nbplass" placeholder="Entrer la capasiter nombre de places" required />
    <label>poids total</label>
    <input type="text" name="poids" placeholder="Entrer le poids" required />
    <label>dimension </label>
    <input type="text" name="dimension" placeholder="Entrer la dimension" required />
    <label>vitesse maximale</label>
    <input type="text" name="vitesse" placeholder="Entrer la vitesse maximale" required />
    <label>altitude maximale</label>
    <input type="text" name="altitude" placeholder="Entrer l'altitude maximale" required />
    <label>type de l'appareil</label>
    <select name='type'>
<?php $sql="SELECT * FROM `type`";
$req=$ddb->query($sql);
while($res=$req->fetch()){?>
    
    	<option value='<?php echo $res['id_type'] ;?>'><?php echo $res['nom_type'] ;?></option>
        <?php }?>
    </select>
    <br/>
     <label>constructeur de l'appareil</label>
    <select name='constructeur'>
<?php $sql="SELECT * FROM `constructeur`";
$req=$ddb->query($sql);
while($res=$req->fetch()){?>
    
    	<option value='<?php echo $res['id_constucteur'] ;?>'><?php echo $res['nom_constructeur'] ;?></option>
        <?php }?>
    </select>
    <br/>
     <label>compagnie</label>
    <select name='compagnie'>
<?php $sql="SELECT * FROM `compagnie`";
$req=$ddb->query($sql);
while($res=$req->fetch()){?>
    
    	<option value='<?php echo $res['numcomp'] ;?>'><?php echo $res['nom_compagnie'] ;?></option>
        <?php }?>
    </select>
    <br/>
     <label>aeroport</label>
    <select name='aeroport'>
<?php $sql="SELECT * FROM `aeropot`";
$req=$ddb->query($sql);
while($res=$req->fetch()){?>
    
    	<option value='<?php echo $res['code_aeroport'] ;?>'><?php echo $res['nom_aeroport'] ;?></option>
        <?php }?>
    </select>
   	
    <input type="submit" value="ajouter" />
</form>
</fieldset>
<?php include "includes/footer.php";?>
