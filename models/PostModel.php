<?php


class PostModel
{
    public static function getAll()
    {
        include "./database/connection.php";
        $getPostsQuery = $databaseConnection->query("SELECT * FROM posts;");
        $posts = $getPostsQuery->fetchAll();
        return $posts;
    }

    public static function create(array $postToCreate)
    {
        include "./database/connection.php";

        $title = $postToCreate["title"];
        $bod = $postToCreate["bod"];
        $userId = $postToCreate["userId"];
        $createPostQuery = $databaseConnection->prepare("INSERT INTO todos (userId, title, body) VALUES(':userId', ':title', ':bod');");
        $createPostQuery->bindParam(":userId", $userId);
        $createPostQuery->bindParam(":body", $bod);
        $createPostQuery->bindParam(":title", $title);
        $createPostQuery->execute();
    }
}
