<?php

include_once './controlador/DaoAnimal.php';
include_once './modelo/Animal.php';

$id=$_POST["txtId"];
$nombre=$_POST["txtNombre"];
$raza=$_POST["txtRaza"];
$edad=$_POST["txtEdad"];
$color=$_POST["txtColor"];

$animal=new Animal();

$animal->setId($id);
$animal->setNombre($nombre);
$animal->setRaza($raza);
$animal->setEdad($edad);
$animal->getColor($color);


$dao=new DaoAnimal();
$filas_afectadas=$dao->Modificar($animal);
if ($filas_afectadas>0) {
    echo 'Modifico';
} else {
    echo 'No Modifico';
}

