<?php

class Perro {
    public $raza;
    public $edad;
    public $color;

}
// Instanciar un objeto de la clase Perro
$mi_perro = new Perro();
$mi_perro->raza = "Labrador";
$mi_perro->edad = 2;
$mi_perro->color = "Negro";

// Mostrar los atributos del perro en pantalla
echo "Mi perro es de raza ".$mi_perro->raza.", tiene ".$mi_perro->edad." años y es de color ".$mi_perro->color.".";

?>
