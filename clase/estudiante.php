<?php
class estudiante extends persona {
    public $carrera;
    public $semestre;


    public function __construct($nombre, $apellido, $edad, $correo, $carrera, $semestre) {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->carrera = $carrera;
        $this->semestre = $semestre;
    }

    public function saludar() {
        return parent::saludar() . "Mi Carrera es: " . $this->carrera . "<br>" . "Mi Semestre es: " . $this->semestre . "<br>";
    }
}
?>