<?php
session_start();
//verifier si les sessions existent
if (isset($_SESSION['connected']) && isset($_SESSION['email']) && isset($_SESSION['userId']) && isset($_SESSION['nom'])) {
  $connected = $_SESSION['connected'];
  $email = $_SESSION['email'];
  $userId = $_SESSION['userId'];
  $userName = $_SESSION['nom'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" defer></script>
    <script src="./assets/script.js" defer></script>
    <script src="./assets/fetchConnexion.js" defer></script>
    <script src="./assets/inscription.js" defer></script>
    <script src="./assets/validationInscription.js" defer></script>
    <title>Document</title>
</head>
<body>
<header>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid  d-inline-flex  justify-content-between">
    <a class="navbar-brand" href="#">
      <img src="../iconsSVG/sun.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      My to-do list
    </a>
    <!-- si ($_SESSION['connected']) afficher une div avec le nom de l'utilisateur -->
    <?php if (isset($_SESSION['connected']) && isset($_SESSION['nom'])) { ?>
    <div class="container w-50 primary m-3">
          La todoList de : <?= $userName; ?>
    </div>
    <?php } ?>
  </div>
  
</nav>
</header>

