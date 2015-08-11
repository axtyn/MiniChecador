<link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>

<?php
	    error_reporting(0);
		$Nivel = $_GET['Nivel'];
		if($Nivel==0){
		echo ' <ul id="navigation">';
		echo '<li><a href="Contenido.php?Nivel=0" target="admin" class="last">Inicio</a></li>';
		echo '<li><a href="Menu.php?Nivel=1">Empleados</a></li>';
		echo '<li><a href="Menu.php?Nivel=2">Consulta de Registros</a></li>';
		echo '<li><a href="Menu.php?Nivel=3">Checador E/S</a></li>';
		echo '</ul>';
		}
		if($Nivel==1){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="registraralumno.php" target="admin">Nuevo Empleado</a></li>';
		echo '<li><a href="listalumnos.php" target="admin">Ver Empleados</a></li>';
		
		echo '</ul>';
		}
		
		if($Nivel==2){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="nuevocurso.php" target="admin">N/D</a></li>';
		echo '<li><a href="listacurso.php" target="admin">Ver Historial Asistencias</a></li>';
		
		echo '</ul>';
		}
		
		if($Nivel==3){
		echo ' <ul id="navigation">';
		echo '<li><a href="Menu.php?Nivel=0" class="last">Inicio</a></li>';
		echo '<li><a href="asignarcursoalumno.php" target="admin">Checador Inteligente</a></li>';
		echo '<li><a href="listalumnoscurso.php" target="admin">Ver últimos registros</a></li>';
		
		echo '</ul>';
		}


 ?>
