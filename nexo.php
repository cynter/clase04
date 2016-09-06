<?php 
include_once("estacionamiento.php");
$patente= $_POST['patente'];
$accion=$_POST['accion'];

//echo $patente;
//echo $accion;

header("location: index.php");

if ($accion=="Estacionar") {
	Estacionamiento::Guardar($patente);
}




 ?>