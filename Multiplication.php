<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data = [];
$token = null;


$headers = apache_request_headers();

if (isset($headers['Authorization'])) {
    $token = $headers['Authorization'];
    if (explode(' ', $token)[1] === "11223344") {
        if (isset($_POST)) {
            $fromFetch = json_decode(file_get_contents("php://input"));
            $data = $fromFetch->number1 * $fromFetch->number2;
        }else{
            $data = (object)[
                "message" => "This method is not allowed"
            ];
        }
    } else {
        $data = (object) [
            "message" => "Invalid token"
        ];
    }
} else {
    $data = (object) [
        "message" => "UnAuth user"
    ];
}

echo json_encode($data, JSON_PRETTY_PRINT);
