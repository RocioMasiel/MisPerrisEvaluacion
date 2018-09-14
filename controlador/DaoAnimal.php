<?php

include_once 'conexion.php';
include_once 'modelo/Animal.php';


class DaoAnimal {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function Grabar($animal) {
        try {
            $sql="insert into animal "
                    . "values('@id','@nom','@ra','@ed','@col')";
            $sql= str_replace("@id", $animal->getId(), $sql);
            $sql= str_replace("@nom", $animal->getNombre(), $sql);
            $sql= str_replace("@ra", $animal->getRaza(), $sql);
            $sql= str_replace("@ed", $animal->getEdad(), $sql);
            $sql= str_replace("@col", $animal->getColor(), $sql);
            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function Listar(){
        try {
            $sql="select * from animal";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function Eliminar($id){
        try {
           $sql="delete from animal where idAnimal='$id'";
           return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
    
    public function Buscar($id){
        try {
           $sql="select * from animal where idAnimal='$id'";
           return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
    
    public function Modificar($mascota) {
        try {
            $sql="update animal set nombre='@nom',raza='@ra',edad='@ed',color='@col'"
                    ." where idAnimal='@id'";
            $sql= str_replace("@id", $mascota->getId(), $sql);
            $sql= str_replace("@nom", $mascota->getNombre(), $sql);
            $sql= str_replace("@ra", $mascota->getRaza(), $sql);
            $sql= str_replace("@ed", $animal->getEdad(), $sql);
            $sql= str_replace("@col", $animal->getColor(), $sql);
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
           
        }
        }
}