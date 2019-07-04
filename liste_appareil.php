	 <?php include "includes/header.php"; ?>
<fieldset>
<legend>Liste des appareils</legend>
<table  id="miyazaki" width="100%">
<thead>
<tr>
    <th>id de l'appareil</th>
    <th>matricule</th>
    <th>nombre de places</th>
    <th>poids maximal</th>
    <th>dimension maximal</th>
    <th>vitesse maximal</th>
    <th>altitude maximale</th>
    
</tr>
</thead>
<tbody>
<?php
$req=$ddb->query("select * from appareil");
while($res = $req->fetch())
{?>
<tr>

	<td data-th=\"ID\" align=center><?php echo $res['idapp'] ?></td>
	<td data-th=\"ID\" align=center><?php echo $res['matricule'] ?></td>
	<td data-th=\"ID\" align=center><?php echo $res['cap_nb_place'] ?></td>
	<td data-th=\"ID\" align=center><?php echo $res['poids_tt']?></td>
	<td data-th=\"ID\" align=center><?php echo $res['dimension']?></td>
	<td data-th=\"ID\" align=center><?php echo $res['vitesse_max']?></td>
	<td data-th=\"ID\" align=center><?php echo $res['altitude_max']?></td>
	<td data-th=\"ID\" align='center'>
	<a href="modif_appareil.php?idapp=<?php echo $res['idapp'];?>"><img src='images/edt1.png' height=40 border=0></a>
	
	<a href="supp_appareil.php?idapp=<?php echo $res['idapp'];?>" onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><img src='images/del1.png' height=40 border=0></a></td>
</tr>	
</tbody>
</table>
</fieldset>
<?php }include "includes/footer.php";?>
