<?php
	include('config.php');
	$nombre	 	= $_POST['nombre'];
	$apellidos1 = $_POST['apellidos1'];
	$apellidos2 = $_POST['apellidos2'];
	$email      = $_POST['email'];
    $puesto      = $_POST['puesto'];
    $horario     = $_POST['horario'];
    $fecha_ingreso  = $_POST['fechadeingreso'];
	
	$sql = "INSERT INTO empleado (nombre,apellido_paterno,apellido_materno,correo, puesto, horario, fecha_ingreso)
     VALUES ('".$nombre."','".$apellidos1."','".$apellidos2."','".$email."','".$puesto."','".$horario."','".$fecha_ingreso."')";
	mysql_query($sql,$conexion);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
 ?>