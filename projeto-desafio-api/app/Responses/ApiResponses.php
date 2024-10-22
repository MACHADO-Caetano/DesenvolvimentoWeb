<?php

namespace App\Responses;


class ApiResponses
{
    public static function success(string $message, mixed $data = null)
    {
        return response()->json([
            "status" => "success",
            "message" => $message,
            "data" => $data
        ], 200);
    }

    public static function error(string $message, mixed $data = null)
    {
        return response()->json([
            "status"=> "fail",
            "message"=> $message,
            "data"=> $data
        ], 400);
    }
}
