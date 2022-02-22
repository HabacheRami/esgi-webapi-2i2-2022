<?php

include "./library/response.php";
<<<<<<< HEAD
include "./models/TodoModel.php";
=======
include "./models/TodosModel.php";
>>>>>>> 281b28e8a3f318012318c21d1b7db56e788e453e

final class Todo
{
    public function query()
    {
    }

    /**
     * @example
     * User::get();
     */
    final public static function get(): void
    {
        $statusCode = 200;

        $headers = [
            "Content-Type" => "application/json"
        ];

        try {
<<<<<<< HEAD
            $todos = TodoModel::fetchAll();
            $body = ["success" => true, "todos" => $todos];
=======
            $users = TodosModel::getAll();
            $body = ["success" => true, "todos" => $users];
>>>>>>> 281b28e8a3f318012318c21d1b7db56e788e453e
            echo Response::json($statusCode, $headers, $body);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * @example
     * User::post();
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
