<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="calendario/tcal.css" />
<script type="text/javascript" src="calendario/tcal.js"></script>
<?php
	
	include('config.php');
	$a 		= $_GET['Id'];
	
    /*
	$idexis = "";
	
	

	#obtenemos que materia ya fue asignado para no mostrarlo en el combo
	$idexiste = "SELECT id_asistencia FROM rel_empleado_asistencia WHERE id_empleado=".$a;
	$rsexiste = mysql_query($idexiste,$conexion);
	if(mysql_num_rows($rsexiste)!=0){
		while($rowxx = mysql_fetch_assoc($rsexiste)){
			$idexis = $idexis.$rowxx['id_asistencia'].',';
		}
	}
	*/
	
?>
<form id="form1" name="form1" method="post" action="guardasignacurso.php">  
  <center><strong>CHECADOR INTELIGENTE - BUENOS DIAS [ <?php echo $a; ?> ]</strong>
  <table width="50%" border="0" align="center"  class="down1">
  
  <tr>
  <td align="right">Actividad:</td>
  <td>
  <input type="hidden" name="id_empleado" id="id_empleado" value="<?php echo $a; ?>"/>
  
  <select name="id_asistencia" id="id_asistencia" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
	//$materia	= "SELECT * FROM asistencia WHERE id_asistencia NOT IN(".$idexis."0) ";
  $materia = "SELECT * FROM asistencia  ";
	$rsmateria	= mysql_query($materia,$conexion);
	if(mysql_num_rows($rsmateria) != 0){
		while($rowx	= mysql_fetch_assoc($rsmateria)){
		echo '<option value="'.$rowx['id_asistencia'].'">'.$rowx['actividad'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
  
  <tr>
  <td align="right">Fecha:</td>
  <td><span id="sprytextfield2">
  <input type="text" name="fecha" id="fecha" size="28" class="tcal"/>
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"/></span></span></td>
  </tr>
  <tr>
  <td align="right">Notas:</td>
  <td>
    <input type="text" name="notas" id="notas" size="28"  />
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"/></span></span></td>
  </tr>
  
  <tr>
  <td colspan="2">
  <input type="button" style="cursor: pointer;" class="boot" onclick="javascript:window.history.back();" value="REGRESAR" /> 
  <input type="submit" style="cursor: pointer;"  class="boot"  name="guarda" value="GUARDAR" />
  </td>
  </tr>

  <input type="hidden" name="ubicacion" id="ubicacion" value="Oficina (Business Consultant)"/>


  </table>
  </center>
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
	</script>
</form>