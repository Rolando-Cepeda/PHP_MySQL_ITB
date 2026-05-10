<?php
/* 
    Realizar un programa para realizar la tabla de multiplicación.
Ejemplo:

    n = 2
Mostrar:
    2 x 1 = 2
    2 x 2 = 4
    2 x 3 = 6
    2 x 4 = 8
    2 x 5 = 10
    2 x 6 = 12
    2 x 7 = 14
    2 x 8 = 16
    2 x 9 = 18
    2 x 10 = 20
*/

$n = 7;

for($i = 1; $i <= 10; $i++) {
    $resultado = $n * $i;
    echo $n . " x " . $i  ." = " . $resultado;
    echo "<br>";
}
?>