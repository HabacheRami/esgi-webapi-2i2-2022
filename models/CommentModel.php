<?php

class CommentModel
{
    public static function fetchAll()
    {
        include "./database/connection.php";
        $getCommentsQuery = $databaseConnection->query("SELECT * FROM comments;");
        $comments = $getCommentsQuery->fetchAll();
        return $comments;
    }


    public static function create(array $commentToCreate)
    {
        include "./database/connection.php";
        

        $postId = $commentToCreate["postId"];
        $name = $commentToCreate["name"];
        $email = $commentToCreate["email"];
        $bod = $commentToCreate["bod"];
        $createCommentQuery = $databaseConnection->prepare("INSERT INTO todos (postId, name, email, body) VALUES(':postId', ':name', ':email', ':bod');");
        $createCommentQuery->bindParam(":postId", $postId);
        $createCommentQuery->bindParam(":name", $name);
        $createCommentQuery->bindParam(":email", $email);
        $createCommentQuery->bindParam(":bod", $bod);
        $createCommentQuery->execute();
    }
}
