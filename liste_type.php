	 <?php include "includes/header.php";
	
	 ?>
<fieldset>
<legend>Liste des types</legend>
<table  id="miyazaki" width="100%">
<thead>
<tr>
    <th>Numero du  type</th>
    <th>Nom du type</th>
    </tr>
</thead>
<tbody>
<?php
$req=$ddb->query("select * from type");
while( $res = $req->fetch() ){
	?>

<tr>

	<td data-th=\"ID\" align='center'><?php echo $res['id_type'];?></td> 
	<td data-th=\"ID\" align='center'><?php echo $res['nom_type'];?></td>
	<td data-th=\"ID\" align='center'>
	<a href="modif_type.php?id_type=<?php echo $res['id_type'];?>"><img src='images/edt1.png' height=40 border=0></a>

	<a href="supp_type.php?id_type=<?php echo $res['id_type'];?>"  onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><img src='images/del1.png' height=40 border=0></a></td>
</tr>	

<?php
}
?>
</tbody>
</table>
</fieldset>
<?php include "includes/footer.php";?>
