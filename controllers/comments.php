<?php

include "./library/response.php";
include "./models/CommentModel.php";

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
            $comments = CommentModel::fetchAll();
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
        
        $json = json_decode(file_get_contents("php://input"));
        $postId = $json->postId;
        $name = $json->name;
        $email = $json->email;
        $bod = $json->bod;

        CommentModel::create([
            "postId" => $postId,
            "name" => $name,
            "email" => $email,
            "bod" => $bod

        ]);

        $body = [
            "success" => true
        ];

        echo Response::json($statusCode, $headers, $body);
    }
}
