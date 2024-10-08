<?php

class Task
{
    private $id;
    private $title;
    private $description;
    private $assignee; // Пользователь, ответственный за задачу

    public function setId($id): Task
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title): Task
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description): Task
    {
        $this->description = $description;
        return $this;
    }

    public function assignTo(User $user): Task
    {
        $this->assignee = $user;
        return $this;
    }

    public function save(): bool
    {
        // Логика сохранения в базе данных
        echo "Сохранение задачи: {$this->title} под ответственностью: {$this->assignee->getName()}\n<br>";
        return true;
    }
}