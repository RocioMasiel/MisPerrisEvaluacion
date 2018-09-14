<?php

include_once 'conexion.php';
include_once 'modelo/Adoptante.php';


class DaoAdoptante {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function GrabarAdoptante($adoptante) {
        try {
            $sql="insert into adoptante "
                    . "values('@rut','@nom','@dir','@em','@fec','@tel','@reg','@ciu','@viv')";
            $sql= str_replace("@rut", $adoptante->getRut(), $sql);
            $sql= str_replace("@nom", $adoptante->getNombre(), $sql);
            $sql= str_replace("@dir", $adoptante->getDireccion(), $sql);
            $sql= str_replace("@em", $adoptante->getEmail(), $sql);
            $sql= str_replace("@fec", $adoptante->getFecha(), $sql);
            $sql= str_replace("@tel", $adoptante->getTelefono(), $sql);
            $sql= str_replace("@reg", $adoptante->getRegion(), $sql);
            $sql= str_replace("@ciu", $adoptante->getCiudad(), $sql);
            $sql= str_replace("@viv", $adoptante->getVivienda(), $sql);
            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}