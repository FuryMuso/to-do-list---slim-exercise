<?php

class DbConnector
{
    public $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=192.168.20.20;dbname=toDoNo.2', 'root');
    }
}