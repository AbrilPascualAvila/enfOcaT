<?php
    $archivo = @fopen("/file.txt", "r");

    var_dump($archivo);

    if ($archivo) {
        $content = fread($archivo, filesize("file.txt"));

        echo $content;

        fclose($archivo); 
    }

    else {
        echo "No se pudo abrir el archivo.";
    }
    
?>

