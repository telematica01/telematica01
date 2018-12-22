<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
date_default_timezone_set('America/Costa_Rica'); // Zona Horaria
$fecha=date("d / F / Y -  h:i:s A"); // Solicitamos la fecha y lo almacenamos en esa varibale

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Africa Mia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css.css" media="screen" />
</head>

<body>

<div id="container"> 

  <div id="header" >
  
    <div class="headtitle">Africa Mia</div>
	 
  </div>
  
  <div id="content" > 
<center>
	<form name="formulario" method="POST" action="" >
	<br><br><br><br>
		 	<label for="user">Digite su usuario:</label>
			<input name="user" type="text" required> 
			<br><br>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="contra">Digite su clave de acceso:</label>
			<input type="password" name="contra" required>
			<br><br><br><br>
			
			Ingreso:  
			<?php echo date("d / F / Y -  h:i:s A");?>
			<br><br><br>
			
			<input type="submit" name="aceptar" value="Ingresar">
			<input type="reset" name="cancelar" value="Cancelar">
	</form>
</center>
  </div>



  <div id="footer"> <span>Débora Peña Segura - Todos los Derechos Reservados  </span> 
  </div>

</div>
</body>
</html>


<?php
if (!empty($_POST["aceptar"])) {
	$fp = fopen("BitacoraUsuario.txt", "a+") or die("Error al crear archivo"); 

		fputs ($fp, "Nombre de usuario: " .$_REQUEST['user']);
		fputs ($fp, chr(13).chr(10)); 
		fputs ($fp, "Contraseña:" .$_REQUEST['contra']);
		fputs ($fp, chr(13).chr(10));	
		
		
			echo "Ingreso: ";
			$fecha=date("d / F / Y -  h:i:s A");
			echo $fecha;
			echo "<br>";
		fputs ($fp,"Ingreso: " .$fecha);
		fputs ($fp, chr(13).chr(10));	
		fputs ($fp, "............................................................................. ");
		fputs ($fp, chr(13).chr(10));	
fclose($fp);
header('Location:Principal.php');  
}
?>