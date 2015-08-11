<?php
	include('config.php');
	$id = $_GET['Id'];
	
        /*ELIMINAMOS LOS CURSOS QUE TIENE ASIGNADO EL ALUMNO*/
        $sql1 = "delete from rel_empleado_asistencia where id_empleado=".$id;
         mysql_query($sql1,$conexion);
	$sql = "DELETE FROM empleado WHERE id_empleado=".$id;
         mysql_query($sql,$conexion);
	header('Location:consultar-todos-los-empleados.php.php');
 ?>