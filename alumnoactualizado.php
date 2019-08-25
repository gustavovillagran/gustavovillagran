<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZACION DE DATOS ALUMNO</title>
	<P>ACTUALIZAR DATOS</P>
</head>
<body>
	<form  action="ACTUALIZAR_DATOS.php" method="POST">
        
     RUT:<input type="text" name="txtRUT"><br/>
     NOMBRES:<input type="text" name="txtNOMBRES"><br/>
     APELLIDOS:<input type="text" name="txtAPELLIDOS"><br>
     EDAD:<input type="text" name="txtEDAD"><br>
     FECHA_NACIMIENTO:<input type="text" name="txtFECHA_NACIMIENTO"><br>
     PAIS:<input type="text" name="txtPAIS"><br>
     CIUDAD:<input type="text" name="txtCIUDAD"><br>
     PROVINCIA:<input type="text" name="txtPROVINCIA"><br>
     TELEFONO:<input type="text" name="txtTELEFONO"><br>
     DIRECCION:<input type="text" name="txtDIRECCION"><br>
     SEXO:
        <select name="cmbSEXO">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select><br>
 <input type="submit" value="ACTUALIZAR DATOS"   name="btnactualizar">

    </form>

</body>
</html>
