<?php
$nombre = "Bob";
$entero = 1;        // sin comillas, es un entero
$decimal = 1.1;     // sin comillas, es un float
$booleano = true;   // booleano
$cadena = "Bob";    // string
$array = array(1, 2, 3); // array
$nulo = null;       // null

echo "nombre: " . gettype($nombre) . "\n";
echo "entero: " . gettype($entero) . "\n";
echo "decimal: " . gettype($decimal) . "\n";
echo "booleano: " . gettype($booleano) . "\n";
echo "cadena: " . gettype($cadena) . "\n";
echo "array: " . gettype($array) . "\n";
echo "nulo: " . gettype($nulo) . "\n";
?>
