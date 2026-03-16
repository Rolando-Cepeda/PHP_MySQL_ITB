<?php
/*  
    ESTRUCTURAS CONDICIIONALES.
La estructura condicional ejecuta un bucle de código bajo
una condicón, si es verdadera ejecuta un bloque y si es
falsa ejecuta otro bloque de código.

En PHP8 existen varias estructuras condicionales:
1. if
2. if - else
3. if ... elseif ... if
4. switch
5. match(introducido en php8)
6. Operador ternario ? :
7. Operador de fusión nula ?? (muy usado junto a condicionales.)
*/


// Realiza un programa para verificar si una persona es mayor o menor de edad.
$edad = 7;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
}
else {
    echo "Eres menor de edad";
}
?>