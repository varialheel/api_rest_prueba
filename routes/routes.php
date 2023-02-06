<?php


$rutas = array_filter(explode("/",$_SERVER["REQUEST_URI"]));
if(empty($rutas)||!isset($rutas[2])){
    $json = [
    "status"=>404,
    "result"=>"Page not found"
];
    echo json_encode($json,http_response_code($json["status"]));
    return;
}
$method = filter_input(INPUT_SERVER,"REQUEST_METHOD");
if(isset($method)){
    if ($method==="GET") {
       require_once "routes/services/get.php";
    }
    if ($method==="POST") {
       echo "funciona ".$method;
    }
    if ($method==="PUT") {
       echo "funciona ".$method;
    }
    if ($method==="DELETE") {
       echo "funciona ".$method;
    }
}