<?php 
	include('config.php');
	$id         = $_POST['id'];
	//$foto 	= $_POST['foto'];
	$nombre	 	= $_POST['nombre'];
	$apellidos1 = $_POST['apellidos1'];
	$apellidos2 = $_POST['apellidos2'];
	$email      = $_POST['email'];
	$horario    = $_POST['horario'];
	
	$sql = "UPDATE empleado SET nombre='".$nombre."',apellido_paterno='".$apellidos1."',apellido_materno='".$apellidos2."',correo='".$email."',horario='".$horario."' WHERE id_empleado=".$id;
	mysql_query($sql,$conexion);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Actualizada Correctamente.</center>';
?>