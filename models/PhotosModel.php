<?php

class PhotosModel
{
    public static function getAll()
    {
        include "./database/connection.php";
        $getUsersQuery = $databaseConnection->query("SELECT * FROM photos;");
        $users = $getUsersQuery->fetchAll();
        return $users;
    }
}
