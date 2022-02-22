<?php

class CommentsModel
{
    public static function getAll()
    {
        include "./database/connection.php";
        $getUsersQuery = $databaseConnection->query("SELECT * FROM comments;");
        $users = $getUsersQuery->fetchAll();
        return $users;
    }
}
