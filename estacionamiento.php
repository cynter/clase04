<?php 
class Estacionamiento 
{
	

	public static function Guardar($patente)
	{
		//echo $patente;

		$miArchivo = fopen("estacionado.txt", "a"); //apertura de archivo
		//fecha
		$fecha= date("Y-m-d H:i:s");
		$reglon="$patente"."=>"."$fecha"."\n";
		
		fwrite($miArchivo, $reglon);
		fclose($miArchivo);

	}

	public static function Leer() 
	{
		$listadoAutos = array ();

		$miArchivo = fopen("estacionado.txt", "r");
		 //FEOF-->devuelve si finalizo el archivo,devuelve true o false si se acabo o no

		while (!(feof($miArchivo))) {
			$reglon = fgets($miArchivo);
			$auto =explode("=>", "$reglon"); //auto va a tener sub 0 y sub 1
			//echo "<br> $reglon";
			if ($auto[0]!=" ") {
				$listadoAutos[]=$auto;				
			}

			//echo $auto[0]."<br>";
		}

		fclose($miArchivo);
		return $listadoAutos;
	}

	public static function Sacar($patente) {

		$listadoEstacionados = Estacionamiento::Leer();

		foreach ($listadoEstacionados as $auto) {
			if ($auto[0]==$patente) {
				$inicio=$auto[1];
				$ahora=date("Y-m-d H:i:s");
				$diferencia=strtotime($ahora) - strtotime($inicio);
				$importe = $diferencia * 10; // se guarda en ticket.txt

				echo $importe;
			}
		}

	}




}


 ?>