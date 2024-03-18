<?php
require_once __DIR__ . "/../repositories/UsersRepository.php";

if (!empty(file_get_contents('php://input'))) {

    $json=json_decode(file_get_contents('php://input'));

    // Sanitize all my data
    $sanitizedObj = [
        "nom" => htmlspecialchars($json->nom),
        "prenom" => htmlspecialchars($json->prenom),
        "email" => filter_var($json->email, FILTER_SANITIZE_EMAIL),
        "password" => password_hash($json->password, PASSWORD_DEFAULT)
    ];

    //instance Users
    $user = new Users(
        $sanitizedObj["nom"],
        $sanitizedObj["prenom"],
        $sanitizedObj["email"],
        $sanitizedObj["password"]
    );
    var_dump($user);

    // Create user
    $userRepo = new UsersRepository();
    $creationNewUser = $userRepo->create($user);

    var_dump($creationNewUser);
    echo json_encode($json);
}

?>