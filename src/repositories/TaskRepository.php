<?php

require_once __DIR__ . "/../classes/Db.php";

class TaskRepository extends Db
{


    public function create(Task $task)
    {
        $sql = "INSERT INTO td_tasks (title, description, dealine, user_id, priority_id) VALUES (?, ?, ?, ?, ?)";
        $query = $this->getDb()->prepare($sql);
        $query->execute([
            $task->getTitle(),
            $task->getDescription(),
            $task->getUserId(),
            $task->getDeadline(),
            $task->getPriorityId()
        ])





}
