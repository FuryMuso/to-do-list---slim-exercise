<?php

class TaskModels
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createNewTask($tasks)
    {
        $query = $this->db->prepare("INSERT INTO `allthethings` (`tasks`) VALUES (:tasks);");
        $query->bindparam(':tasks', $tasks);
        $query->execute();
    }

    public function getAllTaskData()
    {
        $query = $this->db->prepare("SELECT `id`, `tasks`, `done` FROM `allthethings`");
        $query->execute();

        $tasks = $query->fetchAll();
        return $tasks;
    }

    public function updateTaskDataById($id)
    {
        $query = $this->db->prepare("UPDATE `allthethings` SET `done` = 1 WHERE `id` = :id;");
        $query->bindparam(':id', $id);
        $query->execute();
    }
}
