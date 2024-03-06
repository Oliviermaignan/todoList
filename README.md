# todoList
Pour jeune cadre dynamique voulant améliorer sa productivité journalière

Fait avec HTML, PHP, JS, MySQL

[NOTION](https://www.notion.so/BRIEF-T0D0LIST-b1bbf79d45a34536895be8991eeae9da?pvs=4)

## 1. Création d’une tâche
Une vérification des champs est effectuée à la soumission du formulaire, chaque champ de saisie affiche
une erreur adaptée à l'erreur rencontrée. Les messages d'erreurs doivent disparaître lorsque le formulaire
est à nouveau soumis avec les champs valides.
Lorsque le formulaire est soumis, une requête XMLHttpRequest contenant les données de la nouvelle tâche
est envoyée au backend. Celui-ci vérifie et traite les données et renvoie le tableau complet des tâches mis
à jour. Une fois les données récupérées par le frontend, celui-ci peut mettre à jour la liste des tâches.
Un toast est affiché à l’écran pour indiquer à l’utilisateur le succès ou l’échec de la création de la tâche
côté backend.

En tant qu’utilisateur, je peux créer une tâche.
En tant qu’utilisateur, je ne peux pas soumettre un formulaire incomplet / invalide.
En tant qu’utilisateur, je suis averti des erreurs de mon formulaire.
En tant qu’utilisateur, je suis averti du succès / échec de mon action.
En tant qu’utilisateur, ma liste des tâches est mise à jour après l’ajout d’une tâche.

## 2. Détail d’une tâche
L’utilisateur peut consulter le détail d’une tâche en cliquant sur celle-ci, cela fera apparaître une fenêtre
modale contenant l’ensemble des informations relatives à la tâche ainsi que les boutons / icônes de
validation et de modification.
En tant qu’utilisateur, je peux consulter les informations complètes de la tâches dans une fenêtre
modale.

En tant qu’utilisateur, je peux valider ma tâche depuis sa fenêtre modale de détail.
En tant qu’utilisateur, je peux modifier ma tâche depuis sa fenêtre modale de détail.

## 3. Valider d’une tâche
Un bouton / icône est à la disposition de l’utilisateur pour valider une tâche. Lorsque celui-ci clique sur ce
bouton / icône, une fenêtre de validation lui demande de confirmer son choix pour s'assurer que cela n’est
pas une erreur.
Si l’utilisateur décide de poursuivre l’action, alors une requête XMLHttpRequest est envoyée au backend.
Celui-ci vérifie et traite les données et renvoie le tableau complet des tâches mis à jour. Une fois les
Cahier des charges “todolist” 3
données récupérées par le frontend, celui-ci peut mettre à jour la liste des tâches.
Un toast est affiché à l’écran pour indiquer à l’utilisateur le succès ou l’échec de la validation de la tâche
côté backend.

En tant qu’utilisateur, je peux valider une tâche.
En tant qu’utilisateur, il m'est demandé de confirmer ma volonté de valider une tâche lorsque je
souhaite la valider.
En tant qu’utilisateur, je suis averti du succès / échec de mon action.
En tant qu’utilisateur, ma liste des tâches est mise à jour après la validation d’une tâche.

## 4. Modification d’une tâche
Dans la fenêtre modale du détail d’une tâche, un bouton / icon est à disposition de l’utilisateur pour éditer
la tâche. Lorsque celui-ci décide de mener cette action, un formulaire lui permet alors d’éditer les
informations (titre, description, date et priorité) de la tâche.
Un bouton de validation est à sa disposition pour valider les nouvelles données de la tâches.
Lorsque le formulaire est soumis, une requête XMLHttpRequest contenant les nouvelles données de la
nouvelle tâche est envoyée au backend. Celui-ci vérifie et traite les données et renvoie le tableau complet
des tâches mis à jour. Une fois les données récupérées par le frontend, celui-ci peut mettre à jour la liste
des tâches.

En tant qu’utilisateur, je peux éditer une tâche.
En tant qu’utilisateur, je ne peux pas soumettre un formulaire incomplet / invalide.
En tant qu’utilisateur, je suis averti des erreurs de mon formulaire.
En tant qu’utilisateur, je suis averti du succès / échec de mon action.
En tant qu’utilisateur, ma liste des tâches est mise à jour après la modification d’une tâche