<?php
require_once __DIR__ . "/../repositories/TaskRepository.php";
require_once __DIR__ . "/../../templates/taskTemplate.php";
session_start();
$userId = $_SESSION['userId'];
if (!empty(file_get_contents('php://input'))) {

    $json=json_decode(file_get_contents('php://input'));
    $taskId = $json->taskId;
    $taskRepo = new TaskRepository();

    $taskRepo->deleteThisTask($taskId);

    //recupere le taches pour les afficher
    $tasks = $taskRepo->getTasksByUserId($userId);

    $html = "";
    foreach($tasks as $task){
        $html .= generateTaskTemplate($task['priorityId'], $task['title'], $task['id']);
    }

    $htmlResponse= json_encode($html);
    // header('Content-Type: application/json');
    echo $htmlResponse;
}