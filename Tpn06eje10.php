<?php

class Persona {
    public $nombre;
    public $edad;
    public $genero;

    public function mostrarInformacion() {
        echo "Nombre : " . $this->nombre.PHP_EOL;
        echo "Edad : " . $this->edad.PHP_EOL;
        echo "Genero : " . $this->genero.PHP_EOL;
    }
}
$Persona = new Persona();
$Persona->nombre = "Juan";
$Persona->edad = "20";
$Persona->genero = "Hombre";
$persona->mostrarInformacion(); 
?>