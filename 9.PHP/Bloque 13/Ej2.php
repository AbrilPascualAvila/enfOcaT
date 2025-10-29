<?php
    $valores = [42, "PHP", 3.14, true, null, [1, 2, 3]];

    foreach ($valores as $valor) {
        if (is_scalar($valor)) {
            echo "El valor " .$valor . " es un tipo escalar: " . gettype($valor) . ".\n";
        } else {
            echo var_export($valor, true) . " NO es un tipo escalar: " . gettype($valor) . ".\n";
        }
    }
?>