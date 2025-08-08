<?php 
include 'includes/header.php';

$nombreCliente = "Lucas E  "; // Tiene espacios al final

// strlen() devuelve la longitud del string, incluyendo espacios
echo "Longitud original: " . strlen($nombreCliente); 
echo "<br/>";

// trim() elimina los espacios en blanco al principio y al final
$texto = trim($nombreCliente);
echo "Longitud sin espacios: " . strlen($texto); 
echo "<br/>";

// strtoupper() convierte a mayúsculas
echo "Mayúsculas: " . strtoupper($nombreCliente); 
echo "<br/>";

// strtolower() convierte a minúsculas
echo "Minúsculas: " . strtolower($nombreCliente); 
echo "<br/>";

// str_replace() reemplaza un texto por otro
echo "Reemplazo: " . str_replace("Lucas", "L", $nombreCliente); 
echo "<br/>";

// strpos() busca la posición de un texto dentro de otro
echo "Posición de 'Lucas': " . strpos($nombreCliente, "Lucas"); 
echo "<br/>";

// Concatenación con punto (.)
$tipoCliente = "Premium";
echo "El cliente es: " . $nombreCliente . "es un cliente " . $tipoCliente; 
echo "<br/>";

// Concatenación con llaves (más limpio)
echo "El cliente es: {$nombreCliente} es un cliente {$tipoCliente}";
echo "<br/>";

include 'includes/footer.php';
?>
