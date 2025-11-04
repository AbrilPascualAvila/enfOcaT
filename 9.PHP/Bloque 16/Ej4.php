<?php
    $datos = [
        "nombre" => "Ana",
        "edad" => 25,
        "pais" => "España"
    ];

    foreach ($datos as $clave => $valor) {
        $$clave = $valor; 
    }

    echo "Nombre: $nombre\n";
    echo "Edad: $edad\n";
    echo "País: $pais\n";
?>