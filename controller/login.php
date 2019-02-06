<?php
session_start();
require_once('../models/Connection.php');
$con= new Connection();
if(isset($_REQUEST['username']) && isset($_REQUEST['password']) ){
    $response=$con->login($_POST['username'],$_POST['password'],'users');
    if($response==0){
        $response=$con->login($_POST['username'],$_POST['password'],'admin');
        if($response==0){
            $logueado='usuario o contraseña invalidos';
            
        header("Location: ../views/login.php?logueado=.$logueado.");
        }else{
            $_SESSION['user']='admin';
            header("Location: ../views/carRegister.php");
        }
    }else{
        $_SESSION['user']='common';
        header("Location: ../views/autos.php");
    }
}else{
    echo 'Bad Access';
}
