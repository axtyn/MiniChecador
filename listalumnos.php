<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editaralumno.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminaralumno.php?Id="+id;
	}else{
	
	}
	
}
</script>
<small><font color="red">* Al eliminar un Empleado también se elimina su historial de registros.</font></small>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> LISTA DE EMPLEADOS DE ATENEA PHARMA & BUSINESS CONSULTANT </center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>No.</th>
   <th>NOMBRE</th>
   <th>APELLIDO PATERNO</th>
   <th>APELLIDO MATERNO</th>
   <th>CORREO</th>
   <th>PUESTO</th>
   <th>HORARIO</th>
   <th>FECHA DE INGRESO</th>
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
		
		
		
		
	
		
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/actions-edit.png" onclick="editar('.$row['id_empleado'].')"/>  ';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['id_empleado'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido_paterno'].'</td>';
		echo '<td>'.$row['apellido_materno'].'</td>';
		echo '<td>'.$row['correo'].'</td>';
		echo '<td>'.$row['puesto'].'</td>';
		echo '<td>'.$row['horario'].'</td>';
		echo '<td>'.$row['fecha_ingreso'].'</td>';
		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>