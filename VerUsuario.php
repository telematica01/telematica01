<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
date_default_timezone_set('America/Costa_Rica'); // Zona Horaria
$fecha=date("d/m/Y -  h:i:s A"); // Solicitamos la fecha y lo almacenamos en esa varibale

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
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
      <li><a href="Login.php" title="">Salir </a></li>
    </ul>
  </div>


  <div id="content"> 
<?php
	
			$texto = file_get_contents("Usuario.txt"); 
			$texto = nl2br($texto); 
			echo $texto;
			
	?>
  </div>



  <div id="footer"> <span>Débora Peña Segura - Todos los Derechos Reservados  </span> 
  </div>

</div>
</body>

</html>

  