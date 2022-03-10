<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data=[];

if(isset($_POST)){
    $fromFetch = json_decode(file_get_contents("php://input"));
    $data = $fromFetch->number1 + $fromFetch->number2 ;
}

echo json_encode($data , JSON_PRETTY_PRINT);
