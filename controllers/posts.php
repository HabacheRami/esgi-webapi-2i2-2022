<?php

include "./library/response.php";
include "./models/PostModel.php";

final class Post
{
    /**
     * @example
     * Post::get();
     */
    final public static function get(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        try {
            $posts = PostModel::getAll();
            $body = [ "success" => true, "posts" => $posts ];
            echo Response::json($statusCode, $headers, $body);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * @example
     * Post::posts();
     */
    final public static function posts(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        $json = json_decode(file_get_contents("php://input"));
        $userId = $json->userId;
        $title = $json->title;
        $bod = $json->bod;

        PostModel::create([
            "userId" => $userId,
            "title" => $title,
            "bod" => $bod
        ]);

        $body = [
            "success" => true
        ];

        echo Response::json($statusCode, $headers, $body);
    }
}
