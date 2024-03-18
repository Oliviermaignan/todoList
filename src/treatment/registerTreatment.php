<?php
require_once __DIR__ . "/../repositories/UsersRepository.php";

if (!empty(file_get_contents('php://input'))) {

    $json=json_decode(file_get_contents('php://input'));

    echo json_encode($json);
}

?>