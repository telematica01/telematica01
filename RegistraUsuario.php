<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


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
	<input name="nonusua" type="text" required>
	<br><br>
	
	Ingrese numero de identidad:
	<input name="idusua" type="text" required>
	<br><br>
	
	Género:
	<input name="sexo" type="radio" value="femenino"> F
	<input name="sexo" type="radio" value="masculino"> M
	<br><br>
	
	Fecha de Nacimiento: 
	<input type="date" name="naci" required> 
	<br><br>
	
	Correo eléctronico:
	<input type="email" name="correo">
	<br><br>
	
	Usuario:
	<input name="usua" type="text" required>
	<br><br>
	
	Contraseña:
	<input type="password" name="contra1" value="" required >
	<br><br>
	
	Confirma la contraseña:
	<input type="password" name="contra2" value="" required>
	<br><br>
	

	<br><br>
	<input value="Aceptar" type="submit" name="action_button"/>
	<input value="Cancelar" type="reset" name="reset_button"/>
	
</form>

  <?php
	if (!empty($_POST["action_button"])) {
		$nom=$_REQUEST['nonusua'];
		$cedula=$_REQUEST['idusua'];
		$born=$_REQUEST['naci'];
		$genero=$_REQUEST['sexo'];
		$email=$_REQUEST['correo'];
		$usu=$_REQUEST['usua']; 
		$contraone=$_REQUEST['contra1'];
		$contratwo=$_REQUEST['contra2'];
			if ($contraone==$contratwo)
				{
					$fp = fopen("Usuario.txt", "a+")or die("Error al crear archivo");		
						fputs ($fp, "Nombre Completo: ".$nom);
						fputs ($fp, chr(13).chr(10)); 
						fputs ($fp, "Cedula de identidad: ".$cedula);
						fputs ($fp, chr(13).chr(10));  
						fputs ($fp, "Fecha de nacimiento: ".$born);
						fputs ($fp, chr(13).chr(10)); 
						fputs ($fp, "Género: ".$genero);
						fputs ($fp, chr(13).chr(10)); 
						fputs ($fp, "Correo electronico: ".$email);
						fputs ($fp, chr(13).chr(10)); 
						fputs ($fp, "Nombre de Usuario: ".$usu);
						fputs ($fp, chr(13).chr(10)); 
						fputs ($fp, "Contraseña: " .$contraone);
						fputs ($fp, chr(13).chr(10)); 
						fputs ($fp, ".........................................................................");
						fputs ($fp, chr(13).chr(10)); 
					fclose($fp); 
					echo "Usuario registrado correctamente " ; 
				}else{
					echo "Contraseñas no coinciden, digite nuevamente";
				}	
	} 
	?>

  


</div>



  <div id="footer"> <span>Débora Peña Segura - Todos los Derechos Reservados  </span> 
  </div>

</div>
</body>

</html>


