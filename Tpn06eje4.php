<?php
//4. Crea una clase "Rectángulo" con los atributos base y altura, y un método para calcular el área del 
//   rectángulo. Crea un objeto de tipo "Rectángulo" con valores aleatorios y muestra su área en 
//   pantalla.
class rectangulo {
    public $base;
    public $altura;

    public function calcularArea(){
        return $this->base * $this->altura;

    }
    
}
$mi_rectangulo = new rectangulo();
$mi_rectangulo->base = rand(1,10);
$mi_rectangulo->altura = rand(1,10);

// Calcular y mostrar el área del rectángulo en pantalla
echo "El área del rectángulo de base ".$mi_rectangulo->base." y altura ".$mi_rectangulo->altura." es ".$mi_rectangulo->calcularArea().".";


?>