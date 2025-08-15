<?php include 'includes/header.php';


function sumar (int $num1, int $num2){
    echo $num1 , "<br>";
  
    echo $num1 + $num2, "<br>"; 
}

sumar(num2: 10, num1: 20);//paremetros nombrados
sumar(num1: 10, num2: 20);

include 'includes/footer.php';