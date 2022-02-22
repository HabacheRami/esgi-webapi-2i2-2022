<?php

class TodosModel
{
    public static function getAll()
    {
        include "./database/connection.php";
        $getUsersQuery = $databaseConnection->query("SELECT * FROM todos;");
        $users = $getUsersQuery->fetchAll();
        return $users;
    }
}
