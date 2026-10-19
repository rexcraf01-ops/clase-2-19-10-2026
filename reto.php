<?php
$num1 = 10;
$num2 = 5;
$operador = "+";


switch ($operador) {
    case "+":
        echo $num1 + $num2;
        break;
    case "-":
        echo $num1 - $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "/":
        if ($num2 == 0) {
            echo "No se puede dividir entre cero";
        } else {
            echo $num1 / $num2;
        }
        break;
    default:
        echo "Operador no válido";
}
