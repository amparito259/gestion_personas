<?php

require_once "../clase/persona.php";

$persona1 = new persona("luz", "chaparro", 28, "luz@example.com");
$persona2 = new persona("Juan", "Pérez", 30, "juan@example.com");



echo $persona1->saludar();
echo $persona2->saludar();


?>