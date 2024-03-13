<?php
//ici il faut qu'on aille checker si la connexion correspond a un pwd
var_dump(file_get_contents('php://input'));

if (!empty(file_get_contents('php://input'))) {
    $json=json_decode(file_get_contents('php://input'));
    header("content-type:application/json");
    echo json_encode(["email" => $json->email,"pwd" => $json->pwd]);
}