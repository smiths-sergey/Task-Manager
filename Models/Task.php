<?php

namespace Models;

class Task
{
    /**
     * Создание новой задачи.
     * @param array $data
     * @return bool
     */
    public function create(array $data)
    {
        // Реализация создания задачи.
    }

    /**
     * Получение задачи по ID.
     * @param int $id
     * @return array|null
     */
    public function findById(int $id)
    {
        // Реализация поиска задачи.
    }

    /**
     * Обновление задачи.
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data)
    {
        // Реализация обновления задачи.
    }

    /**
     * Удаление задачи.
     * @param int $id
     * @return bool
     */
    public function delete(int $id)
    {
        // Реализация удаления задачи.
    }

    /**
     * Поиск задач пользователя.
     * @param int $userId
     * @return array
     */
    public function findByUserId(int $userId)
    {
        // Реализация поиска задач по пользователю.
    }
}