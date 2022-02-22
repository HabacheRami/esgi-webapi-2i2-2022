<?php

include "./library/response.php";
include "./models/PhotoModel.php";

final class Photo
{
    /**
     * @example
     * Photo::get();
     */
    final public static function get(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        try {
<<<<<<< HEAD
            $photos = PhotoModel::fetchAll();
=======
            $photos = PhotosModel::getAll();
>>>>>>> 281b28e8a3f318012318c21d1b7db56e788e453e
            $body = ["success" => true, "photos" => $photos];
            echo Response::json($statusCode, $headers, $body);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * @example
     * Photo::post();
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
