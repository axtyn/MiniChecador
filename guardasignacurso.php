<?php
	include('config.php');
    $id_asistencia      = $_POST['id_asistencia'];
	$id_empleado		= $_POST['id_empleado'];
	$fecha 	            = $_POST['fecha'];
	$notas	            = $_POST['notas'];
    $ubicacion          = $_POST['ubicacion'];
	
	$sql = "INSERT INTO rel_empleado_asistencia (id_asistencia,id_empleado,fecha,notas,ubicacion) VALUES ('".$id_asistencia."','".$id_empleado."','".$fecha."','".$notas."','".$ubicacion."')";

	mysql_query($sql,$conexion);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';

?>