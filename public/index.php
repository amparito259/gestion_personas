<?php

require_once "../clase/persona.php";
require_once "../clase/estudiante.php";
require_once "../clase/study.php";

$persona1 = new persona("luz", "chaparro", 28, "luz@example.com");
$persona2 = new persona("Juan", "Pérez", 30, "juan@example.com");
$estudiante1 = new estudiante("Ingeniería", 5);
$study1= new study("Carlos", "Gomez", 22, "carlos@example.com");


echo $persona1->saludar();
echo $persona2->saludar();
echo $estudiante1->saludar();
echo $study1->saludar();

?>