<link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>

<?php
	    error_reporting(0);
		$Nivel = $_GET['Nivel'];
		if($Nivel==0){
		echo ' <ul id="navigation">';
		echo '<li><a href="Contenido.php?Nivel=0" target="admin" class="last">Inicio</a></li>';
		echo '<li><a href="Menu.php?Nivel=1">Empleados</a></li>';
		echo '<li><a href="Menu.php?Nivel=2">Consulta de Registros</a></li>';
		echo '<li><a href="Menu.php?Nivel=3A">Checador E/S</a></li>';
		echo '</ul>';
		}
		if($Nivel==1){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="alta-de-empleado.php" target="admin">Nuevo Empleado</a></li>';
		echo '<li><a href="consultar-todos-los-empleados.php" target="admin">Ver Empleados (Todos)</a></li>';
		$none="none";
		echo '<li><a href="consultar-empleado.php?idempleado=0&nombre=$none&caso=$none" target="admin">Ver Empleado (Individual)</a></li>';

		echo '</ul>';
		}
		
		if($Nivel==2){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		//echo '<li><a href="nuevocurso.php" target="admin">N/D</a></li>';
		echo '<li><a href="consultar-asistencias.php" target="admin">Ver Asistencias (Por Empleado)</a></li>';
		echo '<li><a href="consultar-todas-asistencias.php" target="admin">Ver Asistencias (Todos)</a></li>';
		
		echo '</ul>';
		}

		if($Nivel=='3A'){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="login-checador.php" target="admin">Checador Inteligente</a></li>';
		echo '</ul>';
		}
		
		if($Nivel=='3B'){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="Menu.php?Nivel=3A" class="last">Atras</a></li>';
		echo '<li><a href="checador.php" target="admin">Checador Inteligente</a></li>';
		echo '<li><a href="consultar-ultimos-registros.php" target="admin">Ver últimos ingresos</a></li>';
		//echo '<li><a href="asignarcursoalumno.php" target="admin">Checador Inteligente</a></li>';
		//echo '<li><a href="listalumnoscurso.php" target="admin">Ver últimos registros</a></li>';
		
		echo '</ul>';
		}


 ?>
