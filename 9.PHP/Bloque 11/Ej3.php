<?php
// 1️⃣ Declaramos el array asociativo con frameworks y versiones
$frameworksPHP = [
    "Laravel" => "9.x",
    "Symfony" => "6.x",
    "CodeIgniter" => "4.x"
];

// 2️⃣ Mostramos información usando interpolación con {}
echo "El framework Laravel tiene la versión {$frameworksPHP['Laravel']}.<br>";
echo "El framework Symfony tiene la versión {$frameworksPHP['Symfony']}.<br>";
echo "El framework CodeIgniter tiene la versión {$frameworksPHP['CodeIgniter']}.<br>";

// 3️⃣ Añadimos un nuevo framework
$frameworksPHP["Zend Framework"] = "3.x";

// 4️⃣ Mostramos el nuevo framework añadido
echo "El framework Zend Framework tiene la versión {$frameworksPHP['Zend Framework']}.<br>";

// 5️⃣ Mostramos el nombre del último framework del array
$ultimoFramework = array_key_last($frameworksPHP);
echo "El último framework añadido es {$ultimoFramework}.<br>";
?>
