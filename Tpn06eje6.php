<?php
/* 6. Crea una clase "Empleado" con los atributos nombre, salario y un método para calcular el salario 
      anual. Crea un objeto de tipo "Empleado" con valores aleatorios y muestra su salario anual en 
      pantalla.
*/
class Empleado {
    public $salario;
    public $nombre;
    public function calcularSalarioAnual(){
        
        return $this->salario * 12;

    }
}    
    $mi_empleado = new Empleado();
    $mi_empleado->nombre = "Juan Pérez";
    $mi_empleado->salario = rand(1000, 5000);
    
    // Calcular y mostrar el salario anual del empleado en pantalla
    echo "El salario anual de ".$mi_empleado->nombre." es de $".$mi_empleado->calcularSalarioAnual().".";


?>