<?php
require_once 'bd/Bd.php';

class GetModel {
    static public function getData($table,$select) {
        $bd = new Bd();
        $sql = "select $select from `$table`";
        return $bd->select($sql);
    }
    static public function getDataFilter($table,$select,$linkTo,$equalTo) {
        $linkToArray = explode(",",$linkTo);
        $equalToArray = explode("_",$equalTo);
        $bd = new Bd();
        $sql = "select $select from `$table` where ";
        if(count($linkToArray)!=count($equalToArray)){
            return [];
        }
        foreach($linkToArray as $key=>$value){
            if($key==0) {
                $sql = $sql."$value= ?";
            } else {
                $sql = $sql." and $value= ?";
            }
        }
        return $bd->select($sql,$equalToArray);
        // return $sql;
    }
}