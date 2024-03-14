<?php
require_once __DIR__ . "/repositories/UsersRepository.php";

if (!empty(file_get_contents('php://input'))) {

    $json=json_decode(file_get_contents('php://input'));

    $email=htmlspecialchars($json->email);
    //a quel moment je hash et a quelle moment je compare avec la base  de  donnees
    $pwd=password_hash($json->pwd, PASSWORD_DEFAULT);

    //creation d'un user en dur pour pouvoir comparer
    $newUser = new Users('John', 'Doe', 'johndoe@gmail.com', 'aaa');
    $createUser = new UsersRepository();
    $createUser->create($newUser);     

    header("content-type:application/json");
    echo json_encode([
        'email' => $email,
        'pwd' => $pwd,
    ]);
}