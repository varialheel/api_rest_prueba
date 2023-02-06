<?php
require_once 'controllers/GetController.php';
if ($rutas[2]!="") {
    $params = filter_input(INPUT_GET,"select");
    $filter = filter_input(INPUT_GET,"linkTo");
    $equalTo = filter_input(INPUT_GET,"equalTo");
    $select = $params ?? "*";
    if(isset($filter)&&isset($equalTo)){
        echo json_encode(GetController::getDataFilter($rutas[2],$select,$filter,$equalTo));
    } else {
        echo json_encode(GetController::getData($rutas[2],$select));
    }
    
} else {
    echo "no funciona";
}