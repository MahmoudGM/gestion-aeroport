<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document sans titre</title>
	</head>

	<body>
    	<?php
		
			session_start();
			include"includes/connexion.php";
			include "includes/fonctions.php";
			$id="";
			$motpass="";
			extract($_POST);
			
			if(isset($_REQUEST['id']))
				$id=$_REQUEST['id'];
				
			if(isset($_REQUEST["motpass"]))
				$motpass=$_REQUEST["motpass"];
				
			//$ddb=new MYPDO("mysql:host=localhost;dbname=","root","");	
			$req=$ddb->query("select * from identifans where login='$id' and motpass='$motpass'");
		if($p=$req->rowCount()>0)
			{
				$_SESSION['id']=$id;
				$_SESSION['motpass']=$motpass;
			
		redirect("index.php");
			}
		else 
				redirect("login.php");
		?>
            
	</body>
</html>