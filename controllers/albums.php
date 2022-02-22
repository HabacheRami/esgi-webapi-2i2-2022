<?php

include "./library/response.php";
include "./models/AlbumModel.php";

final class Album
{
    /**
     * @example
     * Album::get();
     */
    final public static function get(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        try {
            $albums = AlbumModel::fetchAll();
            $body = ["success" => true, "albums" => $albums];
            echo Response::json($statusCode, $headers, $body);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * @example
     * Album::post();
     */
    final public static function post(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        $json = json_decode(file_get_contents("php://input"));
        $userId = $json->userId;
        $title = $json->title;


        AlbumModel::create([
            "userId" => $userId,
            "title" => $title,
        ]);

        $body = [
            "success" => true
        ];

        echo Response::json($statusCode, $headers, $body);
    }
}
