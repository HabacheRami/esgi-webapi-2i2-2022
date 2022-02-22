<?php

class AlbumModel
{
    public static function fetchAll()
    {
        include "./database/connection.php";
        $getAlbumsQuery = $databaseConnection->query("SELECT * FROM albums");
        $albums = $getAlbumsQuery->fetchAll();
        return $albums;
    }

    public static function create(array $albumToCreate)
    {
        include "./database/connection.php";

        $title = $albumToCreate["title"];
        $userId = $albumToCreate["userId"];
        $createAlbumQuery = $databaseConnection->prepare("INSERT INTO todos (userId, title) VALUES(':userId', ':title');");
        $createAlbumQuery->bindParam(":userId", $userId);
        $createAlbumQuery->bindParam(":title", $title);
        $createAlbumQuery->execute();
    }
}
}
