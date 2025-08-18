<?php include 'includes/header.php';


//php y javascript se pueden cominicar por medio de JSON.

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
     ],
     [
        "nombre" => "Televisión 24",
        "precio" => 300,
        "disponible" => true
     ],
     [
        "nombre" => "Monitor Curvo",
        "precio" => 400,
        "disponible" => false
     ]

];

echo "<pre>";
var_dump($productos);
 

//json_encode() convierte un arrreglo a string
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //podemos colocar el tipo de conversion
var_dump($json);


//json_decode() convierte un string a arrreglo
$dejson = json_decode($json, JSON_UNESCAPED_UNICODE); //podemos colocar el tipo de conversion
var_dump($dejson );

echo "</pre>";

include 'includes/footer.php';
?>