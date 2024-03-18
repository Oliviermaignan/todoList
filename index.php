<?php
session_start();
require './src/authenticationRedirection.php';
//checking if the user is already connected
force_connection();

include './components/header.php';
include './components/main.php';
include './components/footer.php';

?>
