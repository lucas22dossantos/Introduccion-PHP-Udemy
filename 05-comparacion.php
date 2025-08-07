<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

//mayor que
var_dump( $num1 > $num2); //false
echo "<br/>";

//menor que
var_dump( $num1 < $num2); //true
echo "<br/>";


//mayor o igual que
var_dump( $num1 >= $num2); //false
echo "<br/>";

//menor o igual que
var_dump( $num1 <= $num2); //true
echo "<br/>";

// es igual
var_dump( $num2 == $num4);//true
echo "<br/>";

// es igual (mas estricto)
var_dump( $num2 === $num4);//false
echo "<br/>";


//operador de comparación de igualdad
// devuelve 0 si ambos operandos son iguales, 
//1 si el operando izquierdo es mayor, 
//y -1 si el operando izquierdo es menor. 

var_dump($num1 <=> $num2);



include 'includes/footer.php';

?>