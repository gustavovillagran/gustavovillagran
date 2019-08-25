<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR </title>
	
</head>
<body>
	 <?php
	 $server = "localhost";
	 $usuario ="root";
	 $contraseña ="";
	 $bdn = "ena";

	 $conexion = mysqli_connect($server,$usuario,$contraseña,$bdn)
	 or die ("ERROR EN LA CONEXION");

	 $cedula= $_POST['txtcedula'];

	  $resultado = mysqli_query($conexion,"DELETE from alumnos where RUT ='$RUT'")
     or die ("ERROR AL ELIMINAR REGISTROS");

     mysqli_close($conexion);
     echo"LOS DATOS HAN SIDO ELIMINADOS CORRECTAMENTE";
     ?>
</body>
</html>