<?php

class estudiante extends persona {

    public $carrera;
    public $semestre;


    public function __construct($nombre, $apellido, $edad, $correo, $carrera, $semestre)
    {
        $this->carrera = $carrera;
        $this->semestre = $semestre;
    }

    public function saludar() {
        return  "Mi Carrera es: " . $this->carrera . "<br>" . "Mi Semestre es: " . $this->semestre . "<br>";
    }
}
?>