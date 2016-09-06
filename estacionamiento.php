<?php 
class Estacionamiento 
{
	

	public static function Guardar($patente)
	{
		//echo $patente;

		$miArchivo = fopen("estacionado.txt", "a"); //apertura de archivo
		
		fwrite($miArchivo, $patente."\n");

	}



}


 ?>