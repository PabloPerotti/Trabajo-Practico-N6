<?php

class Circulo {

    public $radio;

    public function calcularArea(){
        $area = pi() * pow($this->radio, 2);
        return $area;
    }
}
    $circulo = new Circulo();
    $circulo->$radio = rand(1, 100);

    echo "el Area del Circulo es: ". $circulo ->calcularArea();
