	 <?php include "includes/header.php"; ?>
<fieldset>
<legend>Liste des constructeur</legend>
<table  id="miyazaki" width="100%">
<thead>
<tr>
    <th>Numero du constructeur</th>
    <th>Nom du constructeur</th>
    <th>pays du compagnie</th>
    
</tr>
</thead>
<tbody>
<?php
$req=$ddb->query("select * from constructeur");
while( $res = $req->fetch() ){
	?>

<tr>

	<td data-th=\"ID\" align='center'><?php echo $res['id_constucteur'];?></td> 
	<td data-th=\"ID\" align='center'><?php echo $res['nom_constructeur'];?></td>
	<td data-th=\"ID\" align='center'><?php echo $res['pays_const'];?></td>
	<td data-th=\"ID\" align='center'>
	<a href="modif_constructeur.php?id_constucteur=<?php echo $res['id_constucteur'];?>"><img src='images/edt1.png' height=40 border=0></a>

	<a href="supp_constructeur.php?id_constucteur=<?php echo $res['id_constucteur'];?>"  onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><img src='images/del1.png' height=40 border=0></a></td>
</tr>	

<?php
}
?>
</tbody>
</table>
</fieldset>
<?php include "includes/footer.php";?>
