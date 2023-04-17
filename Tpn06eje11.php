<?php
class Banco {
    public $nombre;
    public $cantidadDinero;

    public function depositar($cantidad) {
        $this->cantidadDinero += $cantidad;
    }

    public function retirar($cantidad) {
        if ($cantidad <= $this->cantidadDinero) {
            $this->cantidadDinero -= $cantidad;
        } else {
            echo "Error: Fondos insuficientes.".PHP_EOL;
        }
    }
}

// Crear objeto Banco con un valor inicial de dinero
$banco = new Banco();
$banco->nombre = "Mi banco";
$banco->cantidadDinero = 1000;

// Realizar algunas operaciones de depósito y retiro
$banco->depositar(500);
$banco->retirar(200);
$banco->retirar(1500);

// Mostrar saldo final en pantalla
echo "El saldo final de " . $banco->nombre . " es: " . $banco->cantidadDinero .PHP_EOL;
?>


