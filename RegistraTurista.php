<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
date_default_timezone_set('America/Costa_Rica'); // Zona Horaria
$fecha=date("d/m/Y"); // Solicitamos la fecha y lo almacenamos en esa varibale

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>APrincipal/frica Mia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css.css" media="screen" />
</head>

<body>

<div id="container"> 

  <div id="header">
     <div class="headtitle">Africa Mia<?php echo date("d/F/Y - h:i:s A");?></div>
  </div>

  <div id="menu"> 
    <ul>
      <li><a href="Principal.php" title="">Inicio</a></li>
	  <li><a href="RegistraTurista.php" title="">Registrar Turista</a></li>
	  <li><a href="VerTuris.php" title="">Ver Turista</a></li>
      <li><a href="RegistraUsuario.php" title="">Ingresar Usuario</a></li>
      <li><a href="VerUsuario.php" title="">Ver usuarios</a></li>
	  <li><a href="VerUsua.php" title="">Bitacora Usuario</a></li>
      <li><a href="Login.php" title="">Salir</a></li>
    </ul>
  </div>


  <div id="content"> 

<form name="formulario" method="POST" action="">
	<br>
	Ingrese nombre:
	<input name="nomturis" type="text" required>
	<br><br>
	
	Ingrese numero de identidad:
	<input name="idturis" type="text" required>
	<br><br>
	
	Género:
	<input name="sexo" type="radio" value="femenino"> F
	<input name="sexo" type="radio" value="masculino"> M
	<br><br>
	
	Fecha de Registro: 
	<input type="text" name="fecha" value=" <?php echo $fecha; ?> " readonly> 
	<br><br>
	
	Desea Almuerzo:
	<input name="almuerzo" type="radio" value="si"> Si
	<input name="almuerzo" type="radio" value="no"> No
	<br><br>
	
	Seleccione el paquete:
	<select name="paquete">
	<option value="Pura Vida">Pura Vida</option>
	<option value="Half Day">Half Day</option>
	<option value="Full Day">Full Day</option>
	</select>
	
	<br><br>
	<input value="Aceptar" type="submit" name="action_button"/>
	<input value="Cancelar" type="reset" name="reset_button"/>
	
</form>
  </div>



  <div id="footer"> <span>Débora Peña Segura - Todos los Derechos Reservados  </span> 
  </div>

</div>
</body>

</html>

  <?php
if (!empty($_POST["action_button"])) {
				$fp = fopen("BitacoraTurista.txt", "a+") or die("Error al crear archivo"); 
			$nomt=$_REQUEST['nomturis'];
			$idt=$_REQUEST['idturis'];
			$sex=$_REQUEST['sexo'];
			$dia=$_REQUEST['fecha'];
			$almu=$_REQUEST['almuerzo'];
			$paq=$_REQUEST['paquete']; 
			
			$PVida=37;
			$HDay=52;
			$FDay=68;
			$total1=$PVida+ 4;
			$total2=$HDay + 4;
			$total3=$FDay + 4;
			
			fputs ($fp, "Nombre Turista: ".$nomt);
			fputs ($fp, chr(13).chr(10)); 
			fputs ($fp, "Cedula de identidad del turista: ".$idt);
			fputs ($fp, chr(13).chr(10));  
			fputs ($fp, "Sexo: ".$sex);
			fputs ($fp, chr(13).chr(10)); 
			fputs ($fp, "Fecha registro: ".$dia);
			fputs ($fp, chr(13).chr(10)); 
			fputs ($fp, "Almuerzo: ".$almu);
			fputs ($fp, chr(13).chr(10)); 
			fputs ($fp, "Tipo de paquete: ".$paq);
			fputs ($fp, chr(13).chr(10)); 
			
			
				
				if ($almu=="si" && $paq=="Pura Vida")
				{
					fputs ($fp, "Total a pagar:" .$total1);
				}
				
				if($almu=="si" && $paq=="Half Day")
				{
					fputs ($fp, "Total a pagar:" .$total2);
				}

				if ($almu=="si" && $paq=="Full Day")
				{
					fputs ($fp, "Total a pagar:" .$total3);
				}
				
				else{
					

				if ($almu=="no" && $paq=="Pura Vida")
				{fputs($fp, "Total a pagar:" .$PVida);}
				  
				
				if($almu=="no" && $paq=="Half Day")
				{fputs($fp, "Total a pagar:" .$HDay);}
				
				if ($almu=="no" && $paq=="Full Day")				
				{fputs($fp, "Total a pagar:" .$FDay);}	
				}
			

			fputs ($fp, chr(13).chr(10)); 
			
		
			fputs ($fp, ".........................................................................");
			fputs ($fp, chr(13).chr(10)); 
			echo "Se creo el registro del paciente correctamente ...";
			
			
fclose($fp); 
} 
?>

