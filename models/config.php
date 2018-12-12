<?php

require_once("./queries.php");

$start= new Query();
// $res=$start->search('test','name','Juan');
// $restall=$start->searchall('autos');

// $res2=$start->login('s@gmail.com','holamundo');

// var_dump($res2);

$rest2=$start->saveData('prueba', 'cheko', 'rosas', 'Romero', '2721458764', 'Mi casa', '123M45', 'prueeba@gmail.com');

var_dump($rest2);

// foreach($res as $resul){
//     echo 'Primer consulta<br>';
//     echo $resul["name"];
//     echo '<br>';
//     echo $resul["firstName"];
//     echo '<br>';
//     echo $resul["secondName"];
//     echo '<br>';
//     echo $resul["age"];
//     echo '<br><br>';
// }

// foreach($restall as $rest){
//     echo '<br><br>Segunda consulta<br>';
//     echo $rest["name"];
//     echo '<br>';
//     echo $rest["firstName"];
//     echo '<br>';
//     echo $rest["secondName"];
//     echo '<br>';
//     echo $rest["age"];

// }