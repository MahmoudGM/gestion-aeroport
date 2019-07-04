	 <?php include "includes/header.php";
	
	 ?>
<fieldset>
<legend>Liste des aeroport</legend>
<table  id="miyazaki" width="100%">
<thead>
<tr>
    <th>Numero de l'aeroport</th>
    <th>Nom de l'aeroport</th>
    <th>categorie</th>
   
</tr>
</thead>
<tbody>
<?php
$req=$ddb->query("select * from aeropot");
while( $res = $req->fetch() ){
	?>

<tr>

	<td data-th=\"ID\" align='center'><?php echo $res['code_aeroport'];?></td> 
	<td data-th=\"ID\" align='center'><?php echo $res['nom_aeroport'];?></td>
	<td data-th=\"ID\" align='center'><?php echo $res['categorie'];?></td>
	<td data-th=\"ID\" align='center'>
	<a href="modif_aeroport.php?code_aeroport=<?php echo $res['code_aeroport'];?>"><img src='images/edt1.png' height=40 border=0></a>

	<a href="supp_aeroport.php?code_aeroport=<?php echo $res['code_aeroport'];?>"  ><onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><img src='images/del1.png' height=40 border=0></a></td>
</tr>	

<?php
}
?>
</tbody>
</table>
</fieldset>
<?php include "includes/footer.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
</body>
</html>