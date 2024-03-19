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

    // Create user
    $userRepo = new UsersRepository();
    $creationNewUser = $userRepo->create($user);
    $NewUserId = $userRepo->getUserIdByMail($user->getEmail());
    $_SESSION['email'] = $user->getEmail();
    $_SESSION['connected'] = true;  
    $_SESSION['userId'] = $NewUserId;
    $_SESSION['nom']=$user->getName();
    if($creationNewUser){
        $json = [
            "registered" => true,
            "lastRegisteredId" => $NewUserId
        ];
    } else {
        $json = [
            "registered" => false,
            "lastRegisteredId" => null
        ];
    }

    echo json_encode($json);
}

?>