<?php
namespace Boyonglab\Theresia\Core\Http;

class Response {
    public function __construct()
    {}

    public function json($data, $status = 200)
    {   
        header('Content-Type: application/json', true, $status);
        echo json_encode($data);
        return;
    }
}
