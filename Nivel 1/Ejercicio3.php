<?php
// PARTE A)
$x = 5;
$y = 4;
$n = 2.5;
$m = 7.0;
$num1 = 6;
$num2 = 3;
$operador = "+";

echo $x . " " . $y . "<br>" // Muestra X e Y
. ($x + $y) . "<br>" // Operaciones con X e Y
. ($x - $y) . "<br>"
. ($x * $y) . "<br>"
. ($x / $y) . "<br>"
. ($x % $y) . "<br>"
. $n . " " . $m . "<br>" // Muestra N y M
. ($n + $m) . "<br>" // Operaciones con N y M
. ($n - $m) . "<br>"
. ($n * $m) . "<br>"
. ($n / $m) . "<br>"
. ($n % $m) . "<br>"
. $x * 2 . "<br>" // Doble de cada una
. $y * 2 . "<br>"
. $n * 2 . "<br>"
. $m * 2 . "<br>"
. $x + $y + $n + $m . "<br>" // Suma de todas
. ($x * $y * $n * $m) . "<br>"; // Producto de todas

// PARTE B)

function calculadora ($num1, $num2, $operador) {

   switch ($operador) {
       case "+":
           return $num1 + $num2;
           break;
       case "-":
           return $num1 - $num2;
           break;
       case "*":
           return $num1 * $num2;
           break;
       case "/":
           if ($num2 != 0) {
               return $num1 / $num2;
           } else {
               return "Error: División por cero.";
           }
           break;
       default:
           return "Error: Operador no válido.";
    }
}

?>