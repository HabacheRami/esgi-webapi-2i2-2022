<?php

class AlbumsModel
{
    public static function getAll()
    {
        include "./database/connection.php";
        $getUsersQuery = $databaseConnection->query("SELECT * FROM albums;");
        $users = $getUsersQuery->fetchAll();
        return $users;
    }
}
