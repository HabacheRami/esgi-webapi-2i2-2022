<?php

class TodoModel
{
    public static function fetchAll()
    {
        include "./database/connection.php";
        $getTodosQuery = $databaseConnection->query("SELECT * FROM todos;");
        $todos = $getTodosQuery->fetchAll();
        return $todos;
    }

    public static function create(array $postToCreate)
    {
        include "./database/connection.php";

        $title = $postToCreate["title"];
        $completed = $postToCreate["completed"];
        $userId = $postToCreate["userId"];
        $createPostQuery = $databaseConnection->prepare("INSERT INTO todos (userId, title, completed,) VALUES(':userId', ':title', ':completed');");
        $createPostQuery->bindParam(":userId", $userId);
        $createPostQuery->bindParam(":completed", $completed);
        $createPostQuery->bindParam(":title", $title);
        $createPostQuery->execute();
    }
}
