<?php
require_once('../models/Connection.php');
$query= new Connection();
$autos=$query->getAutos();
if(sizeOf($autos)>0){
$response='{"Items":[';
foreach($autos as $auto){
    $response=$response.'{';
    $response=$response.'"Marca":"'.$auto['marca'].'",';
    $response=$response.'"Modelo":"'.$auto['modelo'].'",';
    $response=$response.'"Placas":'.$auto['placas'].',';
    $response=$response.'"Capacidad":'.$auto['capacidad'].',';
    $response=$response.'"Color":"'.$auto['color'].'",';
    $response=$response.'"Renta":'.$auto['montorentadia'].',';
    $response=$response.'"Previsualizar":'.'"<input type='."'button'"."class='ui-button ui-widget ui-corner-all' value='Previsualizar' onclick='getPreview(".$auto["placas"].");'".'/>"';
    $response=$response.'},';
}
$response= substr($response,0, strlen($response)-1);
$response=$response."]}";
header('Content-type: application/json');
echo $response;
}else {
    header('Content-type: application/json');
 $response="{Items:[{
     Marca: '',
     Modelo: '',
     Capas: '',
     Capacidad:'',
     Color: '',
     Renta: '',
     Previsualizar: ''
 }]}";   
 echo $response;
}
?>