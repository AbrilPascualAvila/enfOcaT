<?php
    function contadorEstatico() {
        static $count = 0;
        $count++;
        return $count;
    }

    $resultado = contadorEstatico();
    echo "El número de llamadas es: $resultado\n";

    $resultado = contadorEstatico();
    $resultado = contadorEstatico();
    $resultado = contadorEstatico();

    echo "El número de llamadas es: $resultado\n";
?>
