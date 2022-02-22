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
<<<<<<< HEAD
            $albums = AlbumModel::fetchAll();
=======
            $albums = AlbumsModel::getAll();
>>>>>>> 281b28e8a3f318012318c21d1b7db56e788e453e
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

        $body = [
            "success" => true
        ];

        echo Response::json($statusCode, $headers, $body);
    }
}
