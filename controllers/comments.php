<?php

include "./library/response.php";
<<<<<<< HEAD
include "./models/CommentModel.php";
=======
include "./models/CommentsModel.php";
>>>>>>> 281b28e8a3f318012318c21d1b7db56e788e453e

final class Comment
{
    /**
     * @example
     * Comment::get();
     */
    final public static function get(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        try {
<<<<<<< HEAD
            $comments = CommentModel::fetchAll();
=======
            $comments = CommentsModel::getAll();
>>>>>>> 281b28e8a3f318012318c21d1b7db56e788e453e
            $body = ["success" => true, "comments" => $comments];
            echo Response::json($statusCode, $headers, $body);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * @example
     * Comment::post();
     */
    final public static function post(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        $body = [
            "success" => true
        ];

        echo Response::json($statusCode, $headers, $body);
    }
}
