<?php

require_once __DIR__ . '/vendor/autoload.php';
$a=$_GET['velocidad'];
$b=$_GET['direccion'];
//--------------------------------------

$client = new MongoDB\Client(
    'mongodb+srv://yuri:123@cluster0.kkviz.mongodb.net/pronostico?retryWrites=true&w=majority');

$tb=$client->pronostico->araucaclima;
/*
$filter= ['$and'=>
            [
                ['VelocidaddelViento'=>['$eq'=>$a]],
                ['DirecciondelViento'=>['$eq'=>$b]]
            ]
        ];

$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);
/*$registro=array(
"iduser"=>"1458",
"fecha"=>"1/1/2033",
"puntaje"=>"14589"
);*/

//$resultado=$tb->insertOne($registro);
//echo $resultado->getInsertedCount();




?>