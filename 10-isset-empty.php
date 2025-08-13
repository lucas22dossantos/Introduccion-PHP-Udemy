<?php include 'includes/header.php';

$cliente1 = [];
$cliente2 = array();
$cliente3 = array("Lucas", "Ale", "Carlos", "Hector");

$cliente5 = [
    "nombre" => "Lucas",
    "saldo" => "200"
];

// -- empty
//revisar si un array esta vacio

    var_dump(empty($cliente1)); //true
    var_dump(empty($cliente2)); //true 
    var_dump(empty($cliente3)); //false


echo "<br/>";

// -- isset
// revisa si un arreglo esta crado o definido
var_dump(isset($cliente4));//false

var_dump(isset($cliente1));//true
var_dump(isset($cliente2));//true
var_dump(isset($cliente3));//true

echo "<br/>";

// revisa si una propiedad de un arreglo asociativo existe

var_dump(isset($cliente5["nombre"]));//true
var_dump(isset($cliente5["codigo"]));//false




include 'includes/footer.php';
?>