<?php
declare(strict_types=1);

function restarNumeros(int $a, int $b): string {
    return "El resultado es: " . ($a - $b);
}

echo restarNumeros(10, 4);
?>