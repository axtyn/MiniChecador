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
		<strong><center> CONSULTAR DETALLE POR EMPLEADO</center></strong>
		</td>
		</tr>
                
</table>



<form id="form0" name="form0" method="get" enctype="multipart/form-data" action="?">  
  <strong><h4>BUSCADOR</h4></strong>
  <table width="50%" border="0" align="center" class="down1">
  
  <tbody>
  
  <tr>
  <td align="right">Buscar por Nombre:</td>
  <td><span id="sprytextfield1">
  <input name="nombre" class="caja" onkeypress="return soloLetras(event)" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="BUSCANDO POR NO. EMPLEADO"></span></span></td>
  </tr>
    
  <tr>
  <td align="right">Buscar por No.Empleado:</td>
  <td><span id="sprytextfield2">
  <input name="idempleado" class="caja" onkeypress="return soloLetras(event)" type="text" id="idempleado" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="BUSCANDO POR NOMBRE"></span></span></td>
  </tr>

    <tr><td colspan="2"><input type="submit" class="boot" name="buscar" value="BUSCAR"></td></tr>
</form>





                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>No.</th>
   <th>FOTO</th>
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
 $id = $_GET['idempleado'];
 if($id == ""){
    echo "Introduce los datos de búsqueda";
 }
 else
 {

 $sql = "SELECT * FROM empleado WHERE id_empleado = $id";
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
        //echo '<td>'.$row['foto'].'</td>';
        echo '<td>foto</td>';
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

 }
 ?>
 
 </tbody>
</table>