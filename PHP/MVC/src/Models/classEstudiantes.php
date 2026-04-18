<?php

namespace Clases;

class Estudiantes
    {
    private $nombre;
    private $apellido;
    private $edad;
    private $ci;

    function __construct($nombre, $apellido, $edad, $ci)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->ci = $ci;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getCi(){
        return $this->ci;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setCi($ci){
        $this->ci = $ci;
    }

    public function Saludar(){
        return "<br><br>Nombre: $this->nombre\n<br> Apellido: $this->apellido\n<br> Edad: $this->edad\n<br> Ci: $this->ci\n<br>";
    }

    }
?>