<?php

//on va construire la classe Task qui correspond à la table td_tasks et au formulaire d'ajout de tâche

class Task
{
    private string $title;
    private string $description;
    private DateTime $deadline;
    private int $priorityId;
    private int $userId;

    public function __construct(string $title, string $description, DateTime $deadline, int $priorityId, int $userId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->deadline = $deadline;
        $this->priorityId = $priorityId;
        $this->userId = $userId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDeadline(): DateTime
    {
        return $this->deadline;
    }

    public function getPriorityId(): int
    {
        return $this->priorityId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
    public function setTitle(string $title): void {$this->title = $title;}

	public function setDescription(string $description): void {$this->description = $description;}

	public function setDeadline(DateTime $deadline): void {$this->deadline = $deadline;}

	public function setPriorityId(int $priorityId): void {$this->priorityId = $priorityId;}

	public function setUserId(int $userId): void {$this->userId = $userId;}

	
}