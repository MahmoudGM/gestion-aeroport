	 <?php include "includes/header.php";
	
	 ?>
<fieldset>
<legend>Liste des compagnies</legend>
<table  id="miyazaki" width="100%">
<thead>
<tr>
    <th>Numero de la  compagnie</th>
    <th>Nom de la compagnie</th>
    <th>Telephone</th>
    <th>l'email de ma compagnie</th>
    <th>pays de la compagnie</th>
    
</tr>
</thead>
<tbody>
<?php
$req=$ddb->query("select * from compagnie");
while( $res = $req->fetch() ){
	?>

<tr>

	<td data-th=\"ID\" align='center'><?php echo $res['numcomp'];?></td> 
	<td data-th=\"ID\" align='center'><?php echo $res['nom_compagnie'];?></td>
	<td data-th=\"ID\" align='center'><?php echo $res['tel'];?></td>
	<td data-th=\"ID\" align='center'><?php echo $res['email'];?></td>
	<td data-th=\"ID\" align='center'><?php echo $res['pays'];?></td>
	<td data-th=\"ID\" align='center'>
	<a href="modif_compagnie.php?numcomp=<?php echo $res['numcomp'];?>"><img src='images/edt1.png' height=40 border=0></a>

	<a href="supp_compagnie.php?numcomp=<?php echo $res['numcomp'];?>"  ><onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><img src='images/del1.png' height=40 border=0></a></td>
</tr>	

<?php
}
?>
</tbody>
</table>
</fieldset>
<?php include "includes/footer.php";?>
