<?php
include_once('../models/Connection.php');
$con = new Connection();

if(isset($_POST['placa'])) ){

    $caracteristicas='[';
    foreach ($_POST['caracteristicas'] as $rest){
        $caracteristicas=$caracteristicas. $rest.','
    }

    $caracteristicas = trim($caracteristicas, ',');
    $caracteristicas=$caracteristicas.']';

    if($con->saveDataCar($_POST['placa'], $_POST['modelo'],$_POST['marca'],$_POST['capacidad'],
    $_POST['color'].$_POST['monto'],$caracteristicas,$_POST['imagen'])){
        $message='seguardaron los datos correctamente';
        header("Location: ../views/#.php?message=$message");
    }else{
        $message='La placa ingresada ya existe';
        header("Location: ../views/#.php?message=$message");
    }
}