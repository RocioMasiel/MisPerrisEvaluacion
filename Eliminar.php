<?php

include_once 'controlador/DaoAnimal.php';
$dao=new DaoAnimal();
$id=$_GET["id"];
$resp=$dao->Eliminar($id);
//redireccionar
header("location:ListadoAnimal.php");