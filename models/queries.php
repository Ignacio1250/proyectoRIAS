<?php
require_once("../models/connect.php");
require_once("../models/autos.php");

class Query extends Connection{

    public function search($table, $str, $str1){
        parent::__construct();
            $rest=$this->dbh->prepare("SELECT * FROM $table WHERE $str = '$str1'");
            $rest->execute();
            parent::disconnected();
            return $rest;
    }

    public function searchall($table){
        parent::__construct();
        $rest=$this->dbh->prepare("SELECT * FROM $table");
        $rest->execute();
        parent::disconnected();
        return $rest;
    }

    public function getAutos(){

        $respuesta=$this->searchall("autos");
        $arrayautos= array();
        foreach ($respuesta as $res){
            array_push($arrayautos,$res);
        }
        return $arrayautos;
    }

    function login($email, $password){

        $username = $this->search('users','email',$email);

        foreach ($username as $data){
            $email2=$data["email"];
            $pass=$data["contrasena"];
        }

        if(!isset($email2) || !isset($pass)){
            return false;
        }
        return ($email2 == $email) && ($pass == $password); 
    }

}



?>