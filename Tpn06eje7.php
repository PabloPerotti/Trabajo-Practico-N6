<?php
class producto {

    public $nombre;
    public $precio;
    public $cantidad;

    public function __construct($nombre, $precio, $cantidad) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;

    }
    public function getinfo(){
        return "El producto ".$this->nombre." tiene un precio de ".$this->precio." y hay ".$this->cantidad." unidades disponibles. ".PHP_EOL;
    }
}
    
$producto1 = new producto("Camiseta", 20, 50);

    echo $producto1->getinfo();
   
    echo PHP_EOL;


?>

