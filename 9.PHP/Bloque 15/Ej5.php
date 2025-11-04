<?php
    $saludo = "¡Hola, mundo!";
    function mostrarSaludoGlobal () {
        global $saludo;
        print"$saludo";

    }
    mostrarSaludoGlobal ();
?>
