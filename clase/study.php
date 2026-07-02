<?php 

require_once "persona.php";

class study extends persona 
{
  public function saludar()
  {
    return "Hola, soy estudiante:" . $this->nombre;
  }
}


?>