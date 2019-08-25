<!DOCTYPE html>
<html>


<head>
	<title>Registrar alumno</title>
	<link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
    <fieldset>
    <form  action="registraralumno.php" method="POST">
        <div style="width:500px; padding:3px;">
            <p>REGISTRO DE ALUMNOS</P>
      
    	 NOMBRES:  <label><input type="text" name="txtNOMBRES"></label>
       
         APELLIDO: <label><input type="text" name="txtAPELLIDOS"></label><br>
        <br>
        EDAD:<label><input type="text" name="txtEDAD"></label>
        
       
        RUT: <label><input type="text" name="txtRUT"></label><br>
        <br>
        
       TELEFONO: <label><input type="text" name="txtTELEFONO"></label>
        
       
        DIRECCION: <label><input type="text" name="txtDIRECCION"></label><br>
        <br>
        
       FECHA_NACIMIENTO: <label><input type="text" name="txtFECHA_NACIMIENTO"></label><br>
        <br>
       PAIS: <label><input type="text" name="txtPAIS"></label>
        CIUDAD: <label><input type="text" name="txtCIUDAD"></label><br>
        <br>
      PROVINCIA: <label><input type="text" name="txtPROVINCIA"></label>
       
       
       SEXO:
        <select name="cmbSEXO">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select><br>
        <br>

        <input type="submit" value="Registrar"   name="btnregistrar">
        <br>
        <br>
         <li><a href="menu.php">volver al menu principal</a></li>
      </div> 
    </form>
</fieldset>
<html>
<head>
    <title>Registrar alumno</title>
    <link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
      <fieldset>
    <form  action="eliminar.php" method="POST"     >
        <p>ELIMINAR ALUMNO</P> 
    RUT: <label><input type="text" name="txtRUT"> </label><br/>
     <br>
     <br>
     <input type="submit" value="eliminar registro"   name="btneliminar">
     <br>
     <br>
    </form>
     </fieldset>
   </head>
<body>
</html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
      <fieldset>
    <form  action="alumnoactualizado.php" method="POST"     >
         <p>ACTUALIZAR  ALUMNO</P>
    RUT: <label><input type="text" name="txtRUT"> </label><br/>
     <br>
     <br>
     <input type="submit" value="actualizar registro"   name="btactualizar">
     <br>
     <br>
    </form>
     </fieldset>
   </head>
<body>

</html>