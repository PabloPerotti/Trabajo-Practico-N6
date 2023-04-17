<?php
class Alumno {
    public $nombre;
    public $edad;
    public $calificaciones;

    public function calcularPromedio() {
        $suma = 0;
        foreach ($this->calificaciones as $calificacion) {
            $suma += $calificacion;
        }
        return $suma / count($this->calificaciones);
    }
}

// Crear objeto Alumno con valores aleatorios
$alumno = new Alumno();
$alumno->nombre = "Juan";
$alumno->edad = 20;
$alumno->calificaciones = [8, 7, 9, 10];

// Mostrar el promedio del alumno en pantalla
echo "El promedio de " . $alumno->nombre . " es: " . $alumno->calcularPromedio() . "<br>";

// Modificar una calificación y mostrar el nuevo promedio
$alumno->calificaciones[2] = 6;
echo "El nuevo promedio de " . $alumno->nombre . " es: " . $alumno->calcularPromedio() . "<br>";
?>
