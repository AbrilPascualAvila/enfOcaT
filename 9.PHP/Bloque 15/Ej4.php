<?php
function compararContadores() {
    $contadorLocal = 0;         
    static $contadorEstatico = 0; 
    $contadorLocal++;
    $contadorEstatico++;

    echo "Contador local: $contadorLocal | Contador estático: $contadorEstatico\n";
}

// Llamadas múltiples a la función
compararContadores();
compararContadores();
compararContadores();
compararContadores();
?>