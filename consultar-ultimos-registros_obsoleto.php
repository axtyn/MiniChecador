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
   <th></th>
   <th>ID</th>
   <th>NOMBRE</th>
   <th>APELLIDOS</th>
   <th>HORARIO</th>
   <th>ULTIMA ACTIVIDAD</th>
   <th>FECHA</th>
   <th>NOTAS</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM empleado order by id_empleado";
 $rs  = mysql_query($sql,$conexion);
 if(mysql_num_rows($rs) !=0 ){
	while($row=mysql_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		
		$id_asistencia= "";
		$sqlx = "SELECT * FROM rel_empleado_asistencia WHERE id_empleado=".$row['id_empleado'];		
		$rsx  = mysql_query($sqlx,$conexion);
		if(mysql_num_rows($rsx)!=0){
			while($rowx = mysql_fetch_assoc($rsx)){
				$id_asistencia= $id_asistencia.$rowx['id_asistencia'].',';
			}
		}
		
		$check_in_1 = "";
		$check_in_2 = "";
		$check_in_3 = "";
		$check_in_4 = "";
	    #obtenemos asistencias que existe.
		$sqlrs = "SELECT * FROM asistencia WHERE id_asistencia IN (".$id_asistencia."0)";
		$rsxs  = mysql_query($sqlrs,$conexion);
		if(mysql_num_rows($rsxs)!=0){
			while($rowxs = mysql_fetch_assoc($rsxs)){
				$check_in_1 = $check_in_1.$rowxs['actividad'];
			}
		}else {
                    $check_in  = " ";
                }
		
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/inscribe.jpg" onclick="inscribir('.$row['id_empleado'].')"/>  ';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido_paterno'].' '.$row['apellido_materno'].'</td>';
		echo '<td>'.$row['horario'].'</td>';
		echo '<td>'.$check_in_1.'</td>';
		echo '<td>'.$rowxs['fecha'].'</td>';
		echo '<td>'.$rowxs['notas'].'</td>';
		echo '<td>'.$rowxs['ubicacion'].'</td>';
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>