<?php

try 
{
	//connexion à la base de donnée
	require('connexion.php');


	//+--------------------------------------------------------+
	//|			Creation de la fonction de sécurisation		   |
	//+--------------------------------------------------------+


	//extract($_POST);





	function Securite($info)
	{
		$info = trim($info);
		$info = stripcslashes($info);
		$info = strip_tags($info);
		return $info;

	}
	if (isset($_POST['save']))
	 {
	
	$prenom = Securite($_POST['prenom']);
	//echo $nom;
	$NOM = Securite($_POST['nom']);
	$PRENOM = Securite($_POST['prenom']);
	$ADRESSE = Securite($_POST['adresse']);
	$PROFESSION = Securite($_POST['codepostal']);

	
	$requete = $conect->prepare('INSERT INTO personne(PRENOM, NOM, ADRESSE, PROFESSION ) VALUES(?,?,?,?,?)');
	$requete->execute(array($prenom, $nom, $ville, $adresse, $codepostal));

	if ($requete) {

		echo "reussi";		# code...
	}



	
	}
	
} catch (PDOException $e) 
{
	echo 'Erreur'. $e->getMessage;
	echo "Erreur lors de la connexion a la base de donnees";
	//echo 'Erreur' .$e->getMessage;
}


?>


