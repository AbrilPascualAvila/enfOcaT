<?php
    // Crear las variables dinámicas
    for ($i = 1; $i <= 5; $i++) {
        $$nombre = "Variable dinámica número $i";
        ${"var$i"} = "Variable dinámica número $i";
    }

    // Imprimir las variables
    for ($i = 1; $i <= 5; $i++) {
        echo ${"var$i"} . "\n";
    }
?>