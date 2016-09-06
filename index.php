<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" >
	<link rel="stylesheet" type="text/css" href="css/animacion.css">


</head>

<body  style="background: <?php  echo $_GET['color'];?>">
	<div class="CAjaInicio">
		<form  id="FormIngreso" method="post" action="nexo.php">
			<input type="text" name="patente">
			<input type="submit" name="accion" class="MiBotonUTNMenuInicio" value="Estacionar" >
			<input type="submit" name="accion" class="MiBotonUTNMenuInicio" value="Salir" >

		</form>
	</div>
		

</body>
</html>