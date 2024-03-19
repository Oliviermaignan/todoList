<?php
include './components/header.php';
// Redirection vers login.php si l'utilisateur n'est pas connecté
if(!isset($_SESSION['connected']) || $_SESSION['connected'] != true) {
    header('Location: login.php');
    exit();
}

// require './src/authenticationRedirection.php';
// //checking if the user is already connected
// force_connection();


include './components/main.php';
include './components/footer.php';

?>
