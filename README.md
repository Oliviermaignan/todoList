# Ma TodoList

### 🛠 Skills
PHP, JS et MySQL...


Maquette FIGMA => [ICI](https://www.figma.com/file/cs9bH1t2kaApWEj0J9RO3Q/T0d0List-boostrap?type=design&node-id=0%3A1&mode=design&t=iO5pnl0LgznyHJco-1)

## Description
Voici une TodoList faite dans le cadre de la formation Simplon.
L'utilisateur peut s'inscrire, se connecter et ajouter des tâches.
Le rendu de la tâche est dynamique et ne necessite pas le rafraichissement de la page.

## Installation
Lors de l'installation en production, veuillez renseigner dans le fichier config.php les bonnes informations relatives à la base de données.

## Migration
La migration n'est pas opérationnelle. 
Le code pour crée la base de données est dans le fichier migrations sous le nom todoList.sql.

Vous devez passer par votre interface SQL afin de créer la base de données sur votre machine

## Feature en cours
Les fonctionnalités suivantes sont en cours de construction :
-Suppression des tâches (fonctionne avec rafraichissement de la page)

VERSIONS
Le programme a été conçu avec :

PHP 8.3.0
MySQL 8.2

notes:
MCD MLD à la racine du projet. Fait avec looping. J'ai modifié certaines clefs étrangères directement dans todolist.sql (pour la table relationTaskCategory)