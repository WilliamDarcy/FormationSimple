# FormationSimple
Formation maison des Ligues

<p>Ceci est un aide pour débuter le projet des formations de la Maison des Ligues.</p>
<p>Le logiciel n'est pas complet, tu dois le compléter. </p>
<p>Le CSS est quasiment absent mais si tu travailles un peu tu pourras le réaliser toi-même. Ce n'est pas très difficile 
et cela peut être amusant :)</p>
<p>
Le répertoire doc contient 
-Le script de la base de données (script.sql). Il est utile si tu veux importer tes tables dans MySQL.
-Un schéma de la base de données au format .png (c'est un format d'image).
-Le fichier Formation.mvb qui est le schéma relationnel issu de MySQL Workbench (attention tu ne dois pas confondre le schéma entité-association et le schéma relationnel). Tu peux l'importer dans MySQL Workbench, 
modifier les tables et synchroniser ton schéma pour être toujours à jour avec les tables de ta base.
En quelques minutes tu peux comprendre par toi-même :). Tu peux même réaliser le schéma entité-association tout seul! C'est un exercice intéressant.
</p>

# Le répertoire dal.
Il contient toutes les fonctions pour s'interfacer avec la base de données. Toutes les commandes SQL sont situées dans ce répertoire. Si tu as une nouvelle requête à créer tu peux rajouter une fonction dans ce répertoire :)

# Le répertoire lib
Il contient les fonctions utiles pour gérer la connexion et les sessions (connexion.php)
Le fichier date.php permet de modifier le format des dates.

# Le répertoire include
Il contient toutes les différentes parties qui composent une page (header, footer, sidebar).

<p>Les vues sont situées à la racine. Chaque vue doit commencer par la fonction EstConnecte().</p>




