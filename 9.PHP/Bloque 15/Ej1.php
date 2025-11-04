<?php
    $nombre = "Abril Pascual";

    function saludarGlobal() {
        global $nombre; // Makes the global $nombre accessible
        print $nombre;
    }

    saludarGlobal();
?>