<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data= (Object) [
    "name"=> "imane",
    "age" => 18,
    "schoom" => "youCode"
];

if(isset($_POST)){
    $fromFetch = json_decode(file_get_contents("php://input"));
    $data = [
        "message"=>'Please Use one of the following endpoints',
        "endpoints"=>["/Multiplication.php" , "/Substraction.php" ,"/Addition.php" ]
    ] ;
}

echo json_encode($data);

