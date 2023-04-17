<?php

class Coche {
    public $marca;
    public $modelo;
    public $color;
    
    public function mostrarInformacion() {
        echo "Marca: " . $this->marca .PHP_EOL;
        echo "Modelo: " . $this->modelo .PHP_EOL;
        echo "Color: " . $this->color .PHP_EOL;
    }
}

// Crear objeto Coche con valores aleatorios
$coche = new Coche();
$coche->marca = "Toyota";
$coche->modelo = "Corolla";
$coche->color = "Rojo";

// Mostrar información completa del coche
$coche->mostrarInformacion();




?>