<?php
class Connection{
private $con;
    public function __construct(){
try{
    $this->con = new PDO('mysql:host=localhost;dbname=autos', 'root', '');

    }catch( PDOException $e){
        echo 'Conexion fallida';
    }
}

public function getAutos(){
$statement = $this->con->prepare('SELECT * FROM autos');
$statement->execute();
$retValue = $statement->fetchAll();
return $retValue;
}

public function login($username, $password){
    $statement = $this->con->prepare("SELECT * FROM users where email='$username' and contrasena='$password'");
    $statement->execute();
    $retValue = $statement->fetchAll();
 return sizeof($retValue);
}

function saveData($contraseña, $nombre, $app, $apm, $telcasa, $direccion, $licencia, $email){

    
    $rest=$this->con->prepare("SELECT * FROM users WHERE email='$email'");
    $rest->execute();

    foreach ($rest as $re){
        $email2=$re["email"];
    }

    if(is_null($rest) || !isset($email2) == $email){
       
        $rest=$this->con->prepare(
            "INSERT INTO `users` (`contrasena`, `nombre`, `app`, `apm`, `telefonocasa`, `direccion`, `licencia`, `estatus`, `email`) 
            VALUES ('$contraseña', '$nombre', '$app', '$apm', '$telcasa', '$direccion', '$licencia', 'deseable', '$email');");
        $rest->execute();
    
            return true;
    }else{
        return false;
    }
}

}

