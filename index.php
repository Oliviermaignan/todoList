<?php
session_start();
require './src/authenticationRedirection.php';
force_connection();

include './components/header.php';
include './components/main.php';
include './components/footer.php';

?>
