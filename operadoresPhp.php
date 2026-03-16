<?php
// Operadores en PHP
/* 
    OPERADORES ARITMÉTICOS
+ Suma
- Resta
* Multiplicación
/ División
% Módulo
** Potenciación
*/

$numero1 = 7;
$numero2 = 5;

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$modulo = $numero1 % $numero2; //resto
$potenciacion = $numero1 ** $numero2;

// Vamos a imprimir:
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
echo "Módulo: " . $modulo . "<br>";
echo "Potencia" . $potenciacion;
