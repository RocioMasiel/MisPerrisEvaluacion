
<?php

class Animal{
    
    private $id;
    private $nombre;
    private $raza;
    private $edad;
    private $color;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getRaza() {
        return $this->raza;
    }

    function getEdad() {
        return $this->edad;
    }

    function getColor() {
        return $this->color;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setColor($color) {
        $this->color = $color;
    }



    
    
    
    
}