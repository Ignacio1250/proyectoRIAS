<?php
include_once('../models/Connection.php');
$con = new Connection();

if(isset($_POST['placa'])){
        echo $con->getDataCar($_POST['placa']);
}