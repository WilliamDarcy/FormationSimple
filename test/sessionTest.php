<?php
include_once(dirname(__FILE__)."/../lib/connexion.php");
class sessionTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Test de la méthode ObtenirNomEnCours sans avoir de session.
	 */

	public function testSessionSansNom()
	{
		$result = ObtenirNomEnCours();
		// Assert
		$this->assertEquals('Inconnu', $result);
	}
	/**
	 * Test de la méthode ObtenirNomEnCours avec une session.
	 * il faut utiliser la commande phpunit --bootstrap test/bootstrap.php test pour démarrer la session.
	 */
	public function testSessionAvecNom()
	{
		
		$_SESSION['nom'] = 'durand';	
		$result = ObtenirNomEnCours();
		$this->assertEquals('durand', $result);
	}
	/**
	 * Test de la méthode testIdentificationCorrect avec un identifiant correct.
	 */
	public function testIdentificationCorrect()
	{
		$_POST['nom'] = 'jf'; 
		$_POST['mdp'] = 'jf';
		
		$result = TestIdentifiants();
		
		$this->assertTrue($result);
	
	}
	
	/**
	 * Test de la méthode testIdentification avec un identifiant incorrect.
	 */
	public function testIdentificationErreur()
	{
		$_POST['nom'] = 'toto';
		$_POST['mdp'] = 'jf';
	
		$result = TestIdentifiants();
	
		$this->assertFalse($result);
	
	}


}