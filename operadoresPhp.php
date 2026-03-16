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

- OPERADORES DE ASIGNACIÓN:
= Asignación
+= Suma Y asigna
-= Resta y asigna
*= Multiplica y asigna
/= Divide y asigna
%= Módulo y asigna

- OPERADORES DE COMPARACIÓN
  Devuelven un dato bool true/false.
  ==    Igual en valor.
  ===   Igual en valor y tipo de dato
  !=    Diferente
  !==   Diferente estricto.
  >     Mayor que
  <     Menor que
  >= Mayor o igual que
  <= Menor o igual que

*/


$numero1 = 7;
$numero2 = 5;

// Operadores ARITMÉTICOS.
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$modulo = $numero1 % $numero2; //resto
$potenciacion = $numero1 ** $numero2;

// Vamos a imprimir:
print('OPERADORES ARITMÉTICOS:') . "<br>";
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
echo "Módulo: " . $modulo . "<br>";
echo "Potencia" . $potenciacion . "<br>";

// Operadores de ASIGNACIÓN.
// Toma más contacto con los CONTADORES.
$valor = 7;
// $valor **= 2;
$valor += 5;
echo $valor ."<br>";
$valor *= 5;
echo $valor . "<br>";
$valor /= 5;
echo $valor . "<br>";
$valor %= 5;
echo $valor ."<br>";

// Operadores de COMPARACIÓN
/* $res = $numero1 == $valor;
echo $res; No nos muestra nada en la pantalla.*/
$a = 15;
$b = 8;
var_dump($a == $b);// == Solo son iguales en valores.
echo("<br>");
var_dump($a === $b);// === Son iguales en valor y tipo de dato.
/* 
  ---- OPERADORES LÓGICOS ------------
&&      AND     Y lógico  (Verdadero solo si las comparaciones son verdaderas.)
||      or      O lógico. (Falso solo si las comparaciones son falsas)
!       NOT     Negación  (Invierte el valor booleano)
*/
echo "<br>";
$x = 2;
$y = 7;
$z = 5;
$res = (!($x <= $y) && ($z != $y)) || !($x == $z);
var_dump($res);

