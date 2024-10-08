<?php

class User
{
    private $id;
    private $name;
    private $email;

    public function setId($id): User
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name): User
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email): User
    {
        $this->email = $email;
        return $this;
    }

    public function save(): User
    {
        // Логика сохранения в базе данных
        echo "Сохранение пользователя: {$this->name} с email: {$this->email}\n<br>";
        return $this;
    }

    public function getName(): string
    {

        return $this->name;
    }
}