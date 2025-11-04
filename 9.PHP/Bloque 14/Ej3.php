<?php
    class MyNumber {
        private float $value;
        
            public function __construct(float $value) {
                $this-> value = $value;
            }
            
            public function intValue(): int {
                return (int) $this->value; // Casting directo
            }
    }
            
        $number = new MyNumber(42.75);
        echo "El valor entero es: " . $number->intValue() . "<br>";
    ?>