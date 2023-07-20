<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        //det the response header for JSON content
        header('Content-type: application/json');

        //set the status code to 200 OK
        http_response_code(200);

        //send a JSON response
        echo json_encode(['message' => 'Hello, World!']);
    }
}