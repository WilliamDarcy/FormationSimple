<?php
include(dirname(__FILE__)."/../dal/dbUtilisateur.php");

/**
 * Démarre une session
 * @return void
 */
function DemarrerSession()
{
	if (session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
}

/**
 * Teste si l'utilisateur est bien identifié 
 * @return void
 */
function EstConnecte()
{
	DemarrerSession();
	if (!isset($_SESSION['id']))
	{
		header('Location: login.php');
		exit;
	}

}
/**
 * Teste si l'utilisateur a rentré les bon identifiants dans le formulaire
 * @return vrai si l'utilisateur a rentré les bons identifiants
 */
function TestIdentifiants()
{
	$resultat = false;
	if (!empty($_POST['nom'] && !empty($_POST['mdp'])))
	{
		$employe = RechercheUtilisateur($_POST['nom'],$_POST['mdp']);
		
		if (!empty($employe))
		{
			DemarrerSession();
		
			$_SESSION['id'] = $employe['idEmploye'];
			$_SESSION['nom'] = $employe['nom'];
			
			$resultat = true;
		}
		return $resultat;
	
	}
}
/**
 * Obtient le nom stocké dans la session
 * @return le nom ou inconnu si le nom n'est pas connu
 */
function ObtenirNomEnCours()
{
	return isset($_SESSION['nom'])? $_SESSION['nom'] : 'Inconnu' ;
	
}

/**
 * Obtient l'id  de l'utilisateur stocké dans la session
 * @return l'id
 */
function ObtenirIdEnCours()
{
	return $_SESSION['id'];

}
/**
 * Déconnexion d'une session
 * @return void
 */
function Deconnexion()
{
	session_destroy();	

}