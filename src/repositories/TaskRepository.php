<?php

require_once __DIR__ . "/../classes/Db.php";
require_once __DIR__ . "/../classes/Task.php";
class TaskRepository extends Db
{


    public function create(Task $task)
    {
        $sql = "INSERT INTO td_task (title, description, deadline, priority_id, users_id) VALUES (?, ?, ?, ?, ?)";
        $query = $this->getDb()->prepare($sql);
        $query->execute([
            $task->getTitle(),
            $task->getDescription(),
            $task->getDeadline(),
            $task->getPriorityId(),
            $task->getUserId()
        ]);

    }

    public function getAll(): array{

        $sql = "SELECT * FROM td_task";
        $query = $this->getDb()->prepare($sql);
        $query->execute();
        $datas = $query->fetchAll(PDO::FETCH_ASSOC);
        // creation de tasks comme tableau vide
        $tasks = [];

        foreach ($datas as $task) {
            $task = new Task(
                $task['title'],
                $task['description'],
                new DateTime($task['deadline']),
                $task['priority_Id'],
                $task['users_Id']
            );
            $tasks[] = $task;
        }
        return $tasks;
    }
    
    public function getTasksByUserId(int $userId): array{

        $sql = "SELECT * FROM td_task WHERE users_id = ?";
        $query = $this->getDb()->prepare($sql);
        $query->execute([$userId]);
        $datas = $query->fetchAll(PDO::FETCH_ASSOC);
        // creation de tasks comme tableau vide
        $tasks = [];
        foreach($datas as $task){
            $task = new Task(
                $task['title'],
                $task['description'],
                new DateTime($task['deadline']),
                $task['priority_Id'],
                $task['users_Id']
            );
            $tasks[] = $task->convertToAssociativeArray();
        }
        return $tasks;
    }
    



}
