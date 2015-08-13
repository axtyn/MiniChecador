<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function inscribir(id){
	window.location="checador.php?Id="+id;
}

</script>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> ÚLTIMOS REGISTROS </center></strong>
		</td>
		</tr>
		</table>
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th>FOLIO</th>
   <th>NOMBRE</th>
   <th>APELLIDOS</th>
   <th>HORARIO</th>
   <th>ULTIMA ACTIVIDAD</th>
   <th>FECHA / HORA</th>
   <th>NOTAS</th>
   <th>UBICACIÓN</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;	
 $sql = "SELECT e.*, a.actividad, rea.*
		FROM rel_empleado_asistencia rea
		INNER JOIN empleado e 
		ON e.id_empleado = rea.id_empleado
		INNER JOIN asistencia a
		ON a.id_asistencia = rea.id_asistencia
		GROUP BY rea.id_asistencia
		ORDER BY e.nombre";

$rs  = mysql_query($sql,$conexion);
 if(mysql_num_rows($rs) !=0 ){
	while($row=mysql_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		
		echo '<tr class="'.$class.'">';
		//echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['id_check'].'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido_paterno'].' '.$row['apellido_materno'].'</td>';
		echo '<td>'.$row['horario'].'</td>';
		echo '<td>'.$row['actividad'].'</td>';
		echo '<td>'.$row['fecha'].'</td>';
		echo '<td>'.$row['notas'].'</td>';
		echo '<td>'.$row['ubicacion'].'</td>';
		
		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>