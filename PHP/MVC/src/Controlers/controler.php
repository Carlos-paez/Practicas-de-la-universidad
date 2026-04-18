<?php

require_once __DIR__ . '/../Models/classEstudiantes.php';

use Clases\Estudiantes;

$nombre = "Carlos";
$apellido = "Paez";
$edad = 19;
$ci = 31470100;

$estudiante_cargado = new Estudiantes($nombre, $apellido, $edad, $ci);

function vista()
{
    global $estudiante_cargado;
    echo $estudiante_cargado->Saludar();
}

?>