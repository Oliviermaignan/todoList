<?php

function force_connection(): void{
//verifier si la session est lancée
    if (!isset($_SESSION['connected'])) {
        header('location: /login.php');
        die;
    }
}

