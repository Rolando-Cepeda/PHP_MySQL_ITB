<?php
/* 
    SIMULADOR DE CAJERO AUTOMÁTICO.
Un cliente tiene 1000 € en su cuenta.
Puede retirar dinero hasta que su saldo llegue a 0.

*/

$saldo = 1000;

/* while($saldo > 0) {
    echo "Saldo actual: $saldo € <br>";
    
    $retiro = $_POST["retirar"];// Recoge los datos del input en html.

    if($retiro <= $saldo) {
        $saldo -= $retiro;
        echo "Retiro realizado. Saldo: $saldo";
    } else {
        echo "Fondos insuficientes";
    }

} */

/* 
CÓDIGO para que no nos dé BUCLE INFINITO:
<?php
session_start();

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000;
}

if (isset($_POST['retirar'])) {
    $retiro = $_POST['retirar'];

    if ($retiro <= $_SESSION['saldo']) {
        $_SESSION['saldo'] -= $retiro;
        echo "Retiro realizado. Saldo actual: ".$_SESSION['saldo']."<br>";
    } else {
        echo "Fondos insuficientes<br>";
    }
}

echo "Saldo actual: ".$_SESSION['saldo'];
?>

*/
$retiro = $_POST['retirar'];
if ($retiro <= $saldo) {
    $saldo = $saldo - $retiro; //saldo -= $retiro;
    echo "Retiro realizado con éxito. Saldo: $saldo";
} else {
    echo "Fondos insuficientes. ";
}
?>

<!-- Para recepcionar datos, vamos a trabajar desde un formulario. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_3_Bucles</title>
</head>
<body>
    <form action="ejercicio_3_bucles.php" method="POST">
        <label for="">Ingrese monto a retirar</label>
        <input type="number" name="retirar">
        <br>
        <br>
        <button type="submit">Retirar</button>
    </form>
</body>
</html>