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
$edad = 45;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad";
}
echo "<br>";
// Verificar si 2 números son iguales o cuál es el mayor.
$n1 = 7;
$n2 = 15;

if ($n1 == $n2) {
    echo "Ambos números son iguales.";
} else if ($n1 > $n2) {
    echo $n1 . ' Es mayor';
} else {
    echo $n2 . ' Es mayor';
}

echo "<br>";
// Indicar si 3 números son iguales o cuál es el mayor.
$num1 = 27;
$num2 = 115;
$num3 = 18;
if ($num1 == $num2 && $num2 == $num3) {
    echo "Los tres números son iguales";
} else if ($num1 > $num2 && $num1 > $num3) {
    echo $num1 . " es mayor";
} else if ($num2 > $num3) {
    echo $num2 . " es mayor";
} else {
    echo $num3 . " es mayor";
}

echo "<br>";
// switch() -> Evalúa una variable contra múltiples opciones.
// 1 = Lunes    2 = Martes ... 7 = domingo 
$dia = 12;
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5;
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "No existe el día";
}
/* 
        --- CALCULADORA ---
        1. Sumar
        2. Restar
        3. Nultiplicar
        4. Dividir
        Elija una opción: 3
*/

/* 
match es una estructura introducida en PHP 8 que funciona
similar a switch pero:
    - Más seguro.
    - No necesita break.
    - Devuelve un valor.
    - Comparación estricta ===
*/

echo "<br>";
echo "<br>";

$opcion = "A";
$resultado = match ($opcion) {
    'A' => "Registrar datos",
    'B' => "Modificar datos",
    'C' => "Eliminar datos",
    default => "Opción inválida"
};
echo $resultado;

echo "<br>";
echo "<br>";

// Operador Ternario -> Forma abreviada de escribir un if-else
// Verificar si un número es entero o negativo.
$num = -5;
$res = ($num > 0) ? "Positivo" : "Negativo";
echo $res;
echo "<br>";
echo "<br>";

/* Operador de fusion nula.
El operador ?? verifica si una variable EXISTE o es NULL.
Muy usado con FORMULARIOS o datos de usuario. */
// SINTAXIS
// $variable = vlalor1 ?? valor2;


/* A traves del método $_GEt esta enviando los datos del formulario
a este archivo mediante su atributo name */
$nombre = $_GET['nombre'] ?? "Invitad@";
echo $nombre;
?>

<!-- Formulario -->
<!DOCTYPE html>
<html lang="es"> <!-- RAIZ -->

<head> <!-- CABECERA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de datos</title>
</head>

<body>
    <h1>Registro de datos</h1>
    <form action="condicionales.php" method="GET">
        <input type="text" name="nombre">
        <button type="submit">Registrar</button>
    </form>
</body>

</html>