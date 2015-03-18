<?php
include_once(dirname(__FILE__)."/../dal/dbInit.php");

/**
 * Insére une nouvelle formation pour un salarié
 * @param l'identifiant du salarié
 * @param l'identifiant de la  formation
 * @return booléen 
 */
	function InsererNouvelleSelection($idEmploye, $idFormation)
	{
		//Connexion à la base
		$base = Initialisation();


		//SELECT avec FETCHALL()
		$sql="insert into selectionner values (:idEmploye, :idFormation, 'attente')";
		$stmt = $base->prepare($sql);
		
		$stmt->BindValue(':idFormation', $idFormation);
		$stmt->BindValue(':idEmploye', $idEmploye);

		$retour = $stmt->execute();

		//Libération de la ressource
		$base = NULL;

		return $retour;

	}
	/**
	 * Passe une formation à l'état validée
	 * @param l'identifiant du salarié
	 * @param l'identifiant de la  formation
	 * @return booléen
	 */
	function ValiderFormation($idEmploye, $idFormation)
	{
		//Connexion à la base
		$base = Initialisation();
	
	
		//SELECT avec FETCHALL()
		$sql="update selectionner set etat= 'valide' where idEmploye= :idEmploye and idFormation = :idFormation";
		$stmt = $base->prepare($sql);
	
		$stmt->BindValue(':idFormation', $idFormation);
		$stmt->BindValue(':idEmploye', $idEmploye);
	
		$retour = $stmt->execute();
		echo $retour;
		$base = NULL;
	
		return $retour;
	
	}



