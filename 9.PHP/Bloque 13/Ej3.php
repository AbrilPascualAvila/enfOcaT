<?php
function calculadora($num1, $num2, $operacion) {
    if (!is_scalar($num1) || !is_scalar($num2)) {
        return "Error: ambos parámetros deben ser valores escalares (int o float).";
    }

    if ($operacion == "suma") {
        $resultado = function($a, $b) { return $a + $b; };
    } 
    
    else if ($operacion == "resta") {
        $resultado = function($a, $b) { return $a - $b; };
    } 
    
    else if ($operacion == "multiplicacion") {
        $resultado = function($a, $b) { return $a * $b; };
    } 
    
    else if ($operacion == "division") {
        $resultado = function($a, $b) {
            if ($b == 0) return "Error: no se puede dividir entre cero.";
            return $a / $b;
        };
    } 
    
    else {
        return "Error: operación no válida.";
    }

    return $resultado($num1, $num2);
}

// Poner el dato
echo calculadora(10, 5, "suma") . "\n";
?>

