<?php 
include 'includes/header.php';

// ---------------------------------
// Buscar elementos en un arreglo
// ---------------------------------
$carrito = ["tablet", "computadora", "television"];

// in_array() devuelve true si el valor existe en el array

var_dump(in_array("tablet", $carrito)); // true
var_dump(in_array("disco", $carrito));  // false

echo "<br>";

// ---------------------------------
// Ordenar elementos de un arreglo numérico
// ---------------------------------

$numeros = [10, 2, 3, 5, 4, 1, 7, 8];

sort($numeros);  // Ordena de menor a mayor
rsort($numeros); // Ordena de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// ---------------------------------
// Ordenar un arreglo asociativo
// ---------------------------------

$cliente = [
    "saldo" => 200,
    "tipo"  => "premium",
    "nombre"=> "Lucas"
];

// Ordenar por valores
asort($cliente);  // Ascendente por valor (A-Z)
arsort($cliente); // Descendente por valor (Z-A)

// Ordenar por llaves
ksort($cliente);  // Ascendente por clave (A-Z)
krsort($cliente); // Descendente por clave (Z-A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
?>
