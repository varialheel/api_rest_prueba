<?php
require_once 'models/GetModel.php';

class GetController {
    static public function getData($table,$select) {
        $response = GetModel::getData($table,$select);
        $controller = new GetController();
        $controller->fncResponse($response);
    } 
    static public function getDataFilter($table,$select,$linkTo,$equalTo) {
        $response = GetModel::getDataFilter($table,$select,$linkTo,$equalTo);
        $controller = new GetController();
        $controller->fncResponse($response);
    } 
    public function fncResponse($response) {
        if (!empty($response)) {
            $json = [
                "status" => 200,
                "results" => $response
            ];

        } else {
            $json = [
                "status" => 400,
                "results" => "data not found"
            ];
        }
        echo json_encode($json,http_response_code($json["status"]));
    }
}