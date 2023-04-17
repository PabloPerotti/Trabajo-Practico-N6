<?php

class Persona {
    public $nombre;
    public $edad;
    public $genero;

}
$persona1 = new Persona();
$persona1->nombre = "Juan";
$persona1->edad = 30;
$persona1->genero = "Masculino";

$persona2 = new Persona();
$persona2->nombre = "Ana";
$persona2->edad = 25;
$persona2->genero = "Femenino";

$persona3 = new Persona();
$persona3->nombre = "Pedro";
$persona3->edad = 40;
$persona3->genero = "Masculino";

// Mostrar los atributos de cada objeto en pantalla
echo "Persona 1: ".$persona1->nombre." tiene ".$persona1->edad." años y es ".$persona1->genero.PHP_EOL;
echo "Persona 2: ".$persona2->nombre." tiene ".$persona2->edad." años y es ".$persona2->genero.PHP_EOL;
echo "Persona 3: ".$persona3->nombre." tiene ".$persona3->edad." años y es ".$persona3->genero.PHP_EOL;

?>
