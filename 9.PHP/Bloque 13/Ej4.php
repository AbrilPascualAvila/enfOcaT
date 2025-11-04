<?php
    $persona = array(
        "nombre" => "Emily Taylor-Johnson",
        "edad" => 25,
        "ubicacion" => "Los Sants",
        "profesion" => "Camarera",
        "intereses" => array("tecnología", "baile", "ciencia")
    );

    echo "<h3>Contenido completo del array:</h3>";
    print_r($persona);
    echo "<br><br>";

    echo "<h3>Nombre y edad:</h3>";
    echo "Nombre: " . $persona["nombre"] . "<br>";
    echo "Edad: " . $persona["edad"] . "<br><br>";

    $persona["ubicacion"] = "Barcelona";
    echo "<h3>Array actualizado (ubicación modificada):</h3>";
    print_r($persona);
    echo "<br><br>";

    $persona["intereses"][] = "videojuegos";
    echo "<h3>Lista de intereses actualizada:</h3>";
    print_r($persona["intereses"]);
    echo "<br><br>";

    echo "<h3>Verificación de la clave 'edad':</h3>";
    if (array_key_exists("edad", $persona)) {
        echo "La clave 'edad' está presente en el array.";
    } else {
        echo "La clave 'edad' no está presente en el array.";
    }
?>
