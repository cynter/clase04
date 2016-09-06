<?php 
class Estacionamiento 
{
	

	public static function Guardar($patente)
	{
		//echo $patente;

		$miArchivo = fopen("estacionado.txt", "a"); //apertura de archivo
		//fecha
		$fecha= date("Y-m-d H:i:s");
		$reglon="$patente"."$fecha"."\n";
		
		fwrite($miArchivo, $reglon."\n");
		fclose($miArchivo);

	}



}


 ?>