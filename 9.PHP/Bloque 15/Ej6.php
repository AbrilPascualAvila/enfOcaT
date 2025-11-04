<?php
$factor = 10; // Variable global

function calcularProducto($numero) {
    // Opción 1: usar 'global'
    global $factor;

    $producto = $numero * $factor;
    return $producto;
}


$resultado1 = calcularProducto(5);
$resultado2 = calcularProducto(2);
$resultado3 = calcularProducto(7);

echo "5 x $factor = $resultado1\n";
echo "2 x $factor = $resultado2\n";
echo "7 x $factor = $resultado3\n";
?>