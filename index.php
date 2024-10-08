<?php
include __DIR__."/Models/User.php";
include __DIR__."/Models/Task.php";
$user = (new User())
    ->setId(1)
    ->setName('Sergey Kuznecov')
    ->setEmail('s.kuznecov@danaflex.ru')
    ->save();

$task = (new Task())
    ->setId(101)
    ->setTitle('Пример использования Fluent Interface')
    ->setDescription('Продемонстрируйте использование Fluent Interface для приложения Task Manager.')
    ->assignTo($user)
    ->save();