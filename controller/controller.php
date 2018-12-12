<?php
include_once('../models/Connection.php');
$con = new Connection();
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['lada']) ){
if($con->saveData($_POST['password'], $_POST['nombre'],$_POST['app'],$_POST['apm'],$_POST['lada'].$_POST['telefono'],$_POST['direccion'],$_POST['licencia'],$_POST['email'])){
    $usuarioreg='Usuario guardado';
    header("Location: ../views/inicio.php?usuarioreg=$usuarioreg");
}else{
    $usuarioreg='El usuario con este correo ya existe';
    header("Location: ../views/inicio.php?usuarioreg=$usuarioreg");
}
}