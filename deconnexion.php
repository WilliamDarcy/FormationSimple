<?php
include 'lib/Connexion.php';
EstConnecte();

Deconnexion();
header('Location: login.php');
exit;