<?php
include_once(dirname(__FILE__)."/../dal/dbInit.php");

/**
 * Teste si un salarié est un manager
 * @param l'identifiant du salarié
 * @return vrai si l'employé est un manager faux sinon
 */
	 function EstManager($idEmploye)
	{
		//Connexion à la base
		$base = Initialisation();
		
		
		//SELECT avec FETCHALL()
		$sql="select libelle from typeemploye join employe on idTypeEmploye = employe.typeEmploye where employe.idEmploye = :idEmploye";
		$stmt = $base->prepare($sql);
		
		$stmt->BindValue(':idEmploye', $idEmploye);
		
		$retour = $stmt->execute();
		
		
		if ($retour)
		{
			$ligne = $stmt->fetch();
			if ($ligne['libelle'] == 'manager')
			{
				$retour = true;
			}
			else 
			{
				$retour = false;
			}
		}
		
		
		//Libération de la ressource
		$base = NULL;
		
		return $retour;
	}
	
	/**
	 * Recherche tous les membres de l'équipe d'un manager
	 * @param l'identifiant du manager
	 * @return le tableau contenant les résultats
	 */
	function RechercheMembreEquipe($id)
	{
		//Connexion à la base
		$base = Initialisation();
		
		
		//SELECT avec FETCHALL()
		$sql="select idEmploye, nom from employe where superieur = :id";
		$stmt = $base->prepare($sql);
		
		$stmt->BindValue(':id', $id);;
		
		$retour = $stmt->execute();
		
		
		if ($retour)
		{
			$retour = $stmt->fetchAll(PDO::FETCH_OBJ);
		}
		
		
		//Libération de la ressource
		$base = NULL;
		
		return $retour;
	}
	/**
	 * Recherche si les données d'un employé sont présents dans la base
	 * @param l'identifiant de l'employe
	 * @return le tableau contenant les résultats
	 */
	
	function RechercheUtilisateur($nom, $mdp)
	{
		//Connexion à la base
		$base = Initialisation();


		//SELECT avec FETCHALL()
		$sql="select idEmploye, nom from employe where nom = :nom and mdp = :mdp";
		$stmt = $base->prepare($sql);

		$stmt->BindValue(':nom', $nom);
		$stmt->BindValue(':mdp', $mdp);

		$retour = $stmt->execute();


		if ($retour)
		{
			$retour = $stmt->fetch();
			print_r($retour);
		}


		//Libération de la ressource
		$base = NULL;

		return $retour;

	}
	/**
	 * Recherche si les données d'un employé sont présents dans la base avec utilisation d'un mot de passe crypté
	 * @param l'identifiant de l'employe
	 * @return le tableau contenant les résultats
	 */
	function RechercheUtilisateurCrypte($nom, $mdp)
	{
		//Connexion à la base
		$base = initBase();


		//SELECT avec FETCHALL()
		$sql="select idEmploye,nom from employe where nom = :nom and mdp = md5(:mdp)";
		$stmt = $base->prepare($sql);

		$stmt->BindValue(':nom', $nom);
		$stmt->BindValue(':mdp', $mdp);

		$retour = $stmt->execute();


		if ($retour)
		{
			$retour = $stmt->fetch();
		}


		//Libération de la ressource
		$base = NULL;

		return $retour;

	}




