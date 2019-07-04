
	<?php
		class MYPDO extends PDO
		{
			private  $connexion = false;
			public function __construct() // creation de constructeur en php avec __construct()
				{
					$base="gestion_appareils";
					$pilote= "mysql:host=localhost;dbname=".$base; //localhost ou 127.0.0.1
					$user="root";
					$pass="";
					try // Etablistion de la cnx 
						{
							$this -> connexion= parent::__construct($pilote,$user,$pass); // en php -> et comme le . en java 
						}catch(PDOException $e)											  // on accéde au classe parent avec les 4point :: 
							{
								echo "echec".$e -> getMessage();//getMessage est methode dans PDOexception qui donne le type d'erreur 
							}
				}
		 }
		$ddb=new MYPDO();
	?>
