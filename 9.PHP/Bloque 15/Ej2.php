<?php
function multiplicarPorDos($numero) {
    $resultado = $numero * 2;
    return $resultado;
}

$valor = 5;
$resultado = multiplicarPorDos($valor);

echo "El resultado es: $resultado";
?>