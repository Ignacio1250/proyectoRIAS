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

public function login($username, $password, $table){
    $statement = $this->con->prepare("SELECT * FROM $table where email='$username' and contrasena='$password'");
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

function saveDataCar($placa, $modelo, $marca, $capacidad, $color, $monto, $caracteristicas,$imagen){

    $rest=$this->con->prepare("SELECT * FROM autos WHERE placas='$placa'");
    $rest->execute();

    foreach ($rest as $re){
        $placas=$re["email"];
    }

    if(is_null($rest) || !isset($placas) == $placa){
       
        $content = file_get_contents($imagen);
        $codificado = base64_encode($content);

        $rest=$this->con->prepare(
            "INSERT INTO `autos` (`placas`, `modelo`, `marca`, `capacidad`, `color`, `montorentadia`, `estatus`, `caracteristicas`, `imagen`) 
            VALUES ('$placa', '$modelo', '$marca', '$capacidad', '$color', '$monto', 'enable', '$caracteristicas', '$codificado');");
        $rest->execute();
    
            return true;
    }else{
        return false;
    }

}

function getDataCar($placa){

    $sql=$this->con->prepare("SELECT * FROM autos WHERE placas=:placa");
    $query= $pdo->prepare($sql);
    $query->execute([
    'placa'=> $placa
    ]);
    $row=$query->fetch(PDO::FETCH_ASSOC);

    if(!is_null($row)){
        return $row['imagen'];

    }else{
        return false;
    }


}
}

