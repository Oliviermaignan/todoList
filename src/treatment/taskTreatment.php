<?php   
require_once __DIR__ . "/../repositories/TaskRepository.php";
session_start();
$userId = $_SESSION['userId'];
if (!empty(file_get_contents('php://input'))){

    $json = json_decode(file_get_contents('php://input'), true);

    //sanitize all inputs
    $taskTitle= htmlspecialchars($json['task']);
    $description= htmlspecialchars($json['description']);
    $deadline= new DateTime($json['deadline']);
    $priority= htmlspecialchars($json['priority']);

    //ecriture en dur peut etre a remplacer si j'ai le temps
    if ($priority === 'normal') {
        $priority = 0;
    } else if ($priority === 'important') {
        $priority = 1;
    } else if ($priority === 'urgent') {
        $priority = 2;
    }

    $newTask = new Task($taskTitle, $description, $deadline, $priority, $userId);

    $taskRepository = new TaskRepository();
    $taskRepository->create($newTask);
    $userTasks= $taskRepository->getTasksByUserId($userId);
    //renvoyer les données au front
    $retour= json_encode($userTasks);
    header('Content-Type: application/json');
    echo $retour;
} 