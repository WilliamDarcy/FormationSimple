<div id="sideBar">
	<ul>
		<li><a href="formations.php">Toutes les formations</a></li>
		<li><a href="compte.php">Mon compte</a></li>
		<?php 
		if (EstManager(ObtenirIdEnCours()))
		{
		echo '<li><a href="equipe.php">Gérer mon équipe</a></li>';
		}
	?>
		
	</ul>
</div>
