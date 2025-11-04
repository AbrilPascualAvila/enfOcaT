<?php
	$values = ["123abc","42.99",true,false,null,"abc123",[1, 2, 3]];

    foreach ($values as $value) {
    if (is_array($value)) {
        echo "'Array': No se puede convertir un array a entero." . "<br>";
    } else {
        echo "(int) '$value': " . (int) $value . "<br>";
    }
}

?>