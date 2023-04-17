<?php
class libro {

    public $titulo;
    public $autor;
    public $editorial;

    public function mostrarInformacion(){
        echo "Titulo: " . $this->titulo.PHP_EOL;
        echo "Autor: " . $this->autor.PHP_EOL;
        echo "Editorial: " . $this->editorial.PHP_EOL;

    }
}

$libro = new libro();
$libro->titulo = "harry potter".PHP_EOL;
$libro->autor = "J.K. Rowling".PHP_EOL;
$libro->editorial = "Rowling".PHP_EOL;
$libro->mostrarInformacion();
?>