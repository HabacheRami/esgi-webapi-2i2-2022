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

    public static function create(array $todoToCreate)
    {
        include "./database/connection.php";

        $title = $todoToCreate["title"];
        $completed = $todoToCreate["completed"];
        $userId = $todoToCreate["userId"];
        $createTodoQuery = $databaseConnection->prepare("INSERT INTO todos (userId, title, completed) VALUES(':userId', ':title', ':completed');");
        $createTodoQuery->bindParam(":userId", $userId);
        $createTodoQuery->bindParam(":completed", $completed);
        $createTodoQuery->bindParam(":title", $title);
        $createTodoQuery->execute();
    }
}
