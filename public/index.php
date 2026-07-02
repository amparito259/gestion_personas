<?php

require_once "../clase/persona.php";
require_once "../clase/estudiante.php";

$persona1 = new persona("luz", "chaparro", 28, "luz@example.com");
$persona2 = new persona("Juan", "Pérez", 30, "juan@example.com");
$estudiante1 = new estudiante("Ana", "García", 22, "ana@example.com", "Ingeniería", 5);


echo $persona1->saludar();
echo $persona2->saludar();
echo $estudiante1->saludar();

?>