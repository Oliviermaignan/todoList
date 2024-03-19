<?php
require_once __DIR__ . "/../repositories/UsersRepository.php";

if (!empty(file_get_contents('php://input'))) {

    $json=json_decode(file_get_contents('php://input'));

    $email=htmlspecialchars($json->email);

    $password = htmlspecialchars($json->password);

    $UserRepo = new UsersRepository();
    $passwordFromDb = $UserRepo->getPasswordByEmail($email);
    // verification avec password verify
    $isConnected = password_verify($password, $passwordFromDb);
    
    if ($isConnected){
        //j'ouvre la sesssion et enregistre l'email et le statut
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['connected'] = true;
        $_SESSION['userId'] = $UserRepo->getUserIdByMail($email);
        $_SESSION['nom']=$UserRepo->getUserNameByMail($email);
        //je renvoie pour dire que j'ai connecté
        echo json_encode($isConnected);
        exit;
        //rediriger l'utilisateur vers index
        // header('location: /index.php');
        // exit;
    } else {
        //si non connecté je renvoie pour afficher une pop up d'erreur
        echo json_encode($isConnected);
        exit;
    }
}