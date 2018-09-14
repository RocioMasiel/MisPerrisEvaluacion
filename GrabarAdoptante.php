<?php


include_once './controlador/DaoAdoptante.php';
include_once './modelo/Adoptante.php';

$rut=$_POST["txtRut"];
$nombre=$_POST["txtNombre"];
$direccion=$_POST["txtDireccion"];
$email=$_POST["txtEmail"];
$fecha=$_POST["txtFecha"];
$telefono=$_POST["txtTelefono"];
$region=$_POST["cboRegion"];
$ciudad=$_POST["cboCiudad"];
$vivienda=$_POST["cboVivienda"];

$adoptante=new Adoptante();

$adoptante->setRut($rut);
$adoptante->setNombre($nombre);
$adoptante->setDireccion($direccion);
$adoptante->setEmail($email);
$adoptante->setFecha($fecha);
$adoptante->setTelefono($telefono);
$adoptante->setRegion($region);
$adoptante->setCiudad($ciudad);
$adoptante->setVivienda($vivienda);
        




$dao=new DaoAdoptante();
$filas_afectadas=$dao->GrabarAdoptante($adoptante);
if ($filas_afectadas>0) {
    echo 'Grabo';
} else {
    echo 'No Grabo';
}