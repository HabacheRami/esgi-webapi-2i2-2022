<?php

class PhotoModel
{
    public static function fetchAll()
    {
        include "./database/connection.php";
        $getPhotosQuery = $databaseConnection->query("SELECT * FROM photos;");
        $photos = $getPhotosQuery->fetchAll();
        return $photos;
    }

    public static function create(array $photoToCreate)
    {
        include "./database/connection.php";

        $albumId = $photoToCreate["albumId"];
        $title = $photoToCreate["title"];
        $url = $photoToCreate["url"];
        $thumbnailUrl = $photoToCreate["thumbnailUrl"];
        $createPhotoQuery = $databaseConnection->prepare("INSERT INTO todos (albumId, title, url, thumbnailUrl) VALUES(':albumId', ':title', ':url' , ':thumbnailUrl');");
        $createPhotoQuery->bindParam(":albumId", $albumId);
        $createPhotoQuery->bindParam(":title", $title);
        $createPhotoQuery->bindParam(":url", $url);
        $createPhotoQuery->bindParam(":thumbnailUrl", $thumbnailUrl);
        $createPhotoQuery->execute();
    }
}
