<?php
$tasks = [
    ['id' => 1, 'name' => 'Задача 1', 'parent_id' => null],
    ['id' => 2, 'name' => 'Задача 2', 'parent_id' => null],
    ['id' => 3, 'name' => 'Задача 3', 'parent_id' => null],
    ['id' => 4, 'name' => 'Подзадача 1.1', 'parent_id' => 1],
    ['id' => 5, 'name' => 'Подзадача 1.2', 'parent_id' => 1],
    ['id' => 6, 'name' => 'Подзадача 1.3', 'parent_id' => 1],
    ['id' => 7, 'name' => 'Подзадача 2.2', 'parent_id' => 2],
    ['id' => 8, 'name' => 'Подзадача 2.3', 'parent_id' => 2],
    ['id' => 9, 'name' => 'Подзадача 3.1', 'parent_id' => 3],
    ['id' => 10, 'name' => 'Подзадача 1.1.1', 'parent_id' => 4],
];



function displayTasks($tasks, $parentId = null, $level = 0) {
    foreach ($tasks as $task) {
        if ($task['parent_id'] === $parentId) {
            echo str_repeat("&nbsp;&nbsp;&nbsp;", $level) . $task['name'] . "<br>";
            displayTasks($tasks, $task['id'], $level + 1);
        }
    }
}

displayTasks($tasks);