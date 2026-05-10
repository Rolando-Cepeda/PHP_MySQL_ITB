<?php
// Comentarios de una sola línea.
/* Comentarios de varias líneas. */

/* 
    VARIABLES EN PHP 8
Una variable es un espacio en la memoria del servidor
que se utiliza para almacenar datos que pueden cambiar
durante la ejecución del programa. 
*/

//Definir una variable.
$edad = 24;
$edad_Persona = 24;// No recomendada, mezcla guiones con mayusculas.
$edadPersona = 24;//Por convención las variables deben empezar pr minúsculas.

/* 
REGLAS PARA NOMBRAR LAS VARIABLES
    - Deben comenzar con $
    - El nombre debe comenzar con letra o guión bajo
    - No pueden comenzar con números.
    - No pueden tener espacios.
    - PHP distingue (sensible) mayúsculas y minúsculas
*/
$nombre = "Rolando Cepeda";
echo $nombre;
echo "<br>"; // Salto de la línea.
echo $edad;
echo "<br>";

// Concatenación (Unir)
echo "Nombre del Desarrollador: " . $nombre;
echo "<br>";
echo "Edad: " . $edad . " años";

/* 
        TIPOS DE DATOS PRIMITIVOS
- string        cadena de texto         "Rolando Cepeda"
- int           número entero           77
-float          número con decimal      3.22
- bool          Valor Lógico            true/flase
        TIPOS DE DATOS COMPUESTOS
- array
- object
        TIPOS DE DATOS ESPECIALES
- NULL
- resource
*/
$precio = 19.86; //float
$es_mayor_de_edad = true; //bool
echo "<br>";
echo "Precio: " . $precio;
echo "<br>";
echo "Mayor de edad: " . $es_mayor_de_edad;    
// Aquí no se cierra php, porque solo vamos a usar lenguaje PHP.
