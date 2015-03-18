# FormationSimple
Formation maison des Ligues

Ceci est un aide pour débuter le projet des formations de la Maison des Ligues.
Le logiciel n'est pas complet, tu dois le compléter. 
Le CSS est quasiment absent mais si tu travailles un peu tu pourras le réaliser toi-même. Ce n'est pas très difficile 
et cela peut être amusant :)
<br>
Le répertoire doc contient 
-Le script de la base de données (script.sql). Il est utile si tu veux importer tes tables dans MySQL.
-Un schéma de la base de données au format .png (c'est un format d'image).
-Le fichier Formation.mvb qui est le schéma relationnel issu de MySQL Workbench (attention tu ne dois pas confondre le schéma entité-association et le schéma relationnel). Tu peux l'importer dans MySQL Workbench, 
modifier les tables et synchroniser ton schéma pour être toujours à jour avec les tables de ta base.
En quelques minutes tu peux comprendre par toi-même :). Tu peux même réaliser le schéma entité-association tout seul! C'est un exercice intéressant.
<br>
Le répertoire dal
Il contient toutes les fonctions pour s'interfacer avec la base de données. Toutes les commandes SQL sont situées dans ce répertoire. Si tu as une nouvelle requête à créer tu peux rajouter une fonction dans ce répertoire :)
<br>
Le répertoire lib
Il contient les fonctions utiles pour gérer la connexion et les sessions (connexion.php)
Le fichier date.php permet de modifier le format des dates.
<br>
Le répertoire include
Il contient toutes les différentes parties qui composent une page (header, footer, sidebar).
<br>
Les vues sont situées à la racine. Chaque vue doit commencer par la fonction EstConnecte().




