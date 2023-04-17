<?php

//3. Crea una clase "Calculadora" con los métodos suma, resta, multiplicación y división. Crea un objeto 
//   de tipo "Calculadora" y muestra el resultado de algunas operaciones aritméticas.



// Definir la clase Calculadora
class Calculadora {
    public function suma($a, $b) {
        return $a + $b;
    }
    public function resta($a, $b) {
        return $a - $b;
    }
    public function multiplicacion($a, $b) {
        return $a * $b;
    }
    public function division($a, $b) {
        if($b == 0) {
            return "No se puede dividir entre cero.";
        }
        else {
            return $a / $b;
        }
    }
}

// Instanciar un objeto de la clase Calculadora
$mi_calculadora = new Calculadora();

// Realizar algunas operaciones aritméticas con la calculadora
echo "4 + 5 = ".$mi_calculadora->suma(4,5).PHP_EOL;
echo "10 - 3 = ".$mi_calculadora->resta(10,3).PHP_EOL;
echo "2 x 6 = ".$mi_calculadora->multiplicacion(2,6).PHP_EOL;
echo "9 / 3 = ".$mi_calculadora->division(9,3).PHP_EOL;
echo "8 / 0 = ".$mi_calculadora->division(8,0).PHP_EOL;

?>
