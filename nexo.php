<?php 
include_once("estacionamiento.php");
$patente= $_POST['patente'];
$accion=$_POST['accion'];

//echo $patente;
//echo $accion;

//header("location: index.php");

if ($accion=="Estacionar") {
	Estacionamiento::Guardar($patente);
}elseif ($accion=="Sacar") {
	Estacionamiento::Sacar($patente);
	
} else{
	$miLista = array();
	$miLista =Estacionamiento::Leer();

	var_dump($miLista);
}

 ?>