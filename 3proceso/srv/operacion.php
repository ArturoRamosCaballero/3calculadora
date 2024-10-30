<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";

// Recuperar los números y la operación del formulario
$numero1 = isset($_POST['numero1']) ? (float)$_POST['numero1'] : 0;
$numero2 = isset($_POST['numero2']) ? (float)$_POST['numero2'] : 0;
$operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

$resultado = '';

switch ($operacion) {
    case 'sumar':
        $resultado = $numero1 + $numero2;
        break;
    case 'restar':
        $resultado = $numero1 - $numero2;
        break;
    case 'multiplicar':
        $resultado = $numero1 * $numero2;
        break;
    case 'dividir':
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            $resultado = "Error: División por cero.";
        }
        break;
    default:
        $resultado = "Operación no válida.";
        break;
}


devuelveJson($resultado);
?>
