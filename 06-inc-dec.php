<?php 
include 'includes/header.php';

// ------------------------
// Incrementar valores
// ------------------------
echo "<h3>Incrementar</h3>";

$num1 = 30;

// Post-incremento: suma 1 después de usar el valor
$num1++; 
echo "30++ = $num1<br/>";

// También se puede usar: $num1 += 5; (suma y asigna)
$num1 += 5;
echo "Resultado después de sumar 5: $num1<br/>";

// ------------------------
// Decrementar valores
// ------------------------
echo "<h3>Decrementar</h3>";

$num2 = 30;

// Post-decremento: resta 1 después de usar el valor
$num2--; 
echo "30-- = $num2<br/>";

// También se puede usar: $num2 -= 5; (resta y asigna)
$num2 -= 5;
echo "Resultado después de restar 5: $num2<br/>";

include 'includes/footer.php';
?>
