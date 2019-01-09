<?php
include_once('../models/Connection.php');
$con = new Connection();

if(isset($_REQUEST['placa'])){
        $data=$con->getDataCar($_REQUEST['placa']);
        echo $data;
}