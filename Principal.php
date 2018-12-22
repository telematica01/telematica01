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
      <li><a href="#" title="">Inicio</a></li>
	  <li><a href="RegistraTurista.php" title="">Registrar Turista</a></li>
	  <li><a href="VerTuris.php" title="">Ver Turista</a></li>
      <li><a href="RegistraUsuario.php" title="">Ingresar Usuario</a></li>
      <li><a href="VerUsuario.php" title="">Ver usuarios</a></li>
	  <li><a href="VerUsua.php" title="">Bitacora Usuario</a></li>
      <li><a href="Login.php" title="">Salir</a></li>
    </ul>
  </div>


  <div id="content"> 

	<br><br>
	<h3>Mision</h3>
	<p><h4>Contribuir a la protección del ambiente, promoviendo el conocimiento y sensibilización sobre la biodiversidad 
	mediante la creación de experiencias inolvidables, la ejecución de programas de investigación científica, educación, 
	manejo y crianza de fauna y flora aplicados a la conservación de especies animales, vegetales y ecosistemas.</h4></p>
	
	<br><br>
	<h3>Visión</h3>
	<p><h4>Ser una institución zoológica líder, que promueva la investigación, educación, recreación, manejo, crianza y conservación de la biodiversidad.</h4></p>

	<br> <br>
	<h3>Valores</h3>
	<h4> ° Todas nuestras acciones están inspiradas en la naturaleza.</h4>
	<h4> ° Protegemos la vida silvestre con pasión.</h4></p>
	<h4> ° Trabajamos en equipo y nos gusta la cooperación.</h4></p>
	<h4> ° Nos encanta trabajar con gente y nos importa su bienestar.</h4>
	<h4> ° Compartimos nuestras capacidades y talentos sin reservas.</h4>
	<h4> ° Innovamos con creatividad para dejar huella. </h4>
	
  </div>



  <div id="footer"> <span>Débora Peña Segura - Todos los Derechos Reservados  </span> 
  </div>

</div>
</body>
</html>
