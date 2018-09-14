<?php

Class Adoptante{
    
    private $rut;
    private $nombre;
    private $direccion;
    private $email;
    private $fecha;
    private $telefono;
    private $region;
    private $Ciudad;
    private $Vivienda;
    
    function __construct() {
        
    }
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEmail() {
        return $this->email;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getRegion() {
        return $this->region;
    }

    function getCiudad() {
        return $this->Ciudad;
    }

    function getVivienda() {
        return $this->Vivienda;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setCiudad($Ciudad) {
        $this->Ciudad = $Ciudad;
    }

    function setVivienda($Vivienda) {
        $this->Vivienda = $Vivienda;
    }



  
    
}