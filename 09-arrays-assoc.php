<?php 
include 'includes/header.php';

// Array asociativo con datos del cliente
$cliente = [
    "nombre" => "Lucas",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium",
        "disponible" => 100
    ]
];

// Mostrar el array completo (formato legible en <pre>)
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Acceder a un elemento por su clave
echo "Nombre: " . $cliente["nombre"] . "<br/>";

// Acceder a un elemento dentro de un array anidado
echo "Tipo de cliente: " . $cliente["informacion"]["tipo"] . "<br/>";

// Agregar un nuevo elemento al array
$cliente["codigo"] = 12345678;

// Mostrar el array actualizado
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
?>
