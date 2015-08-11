<?php
	include('config.php');
	$id = $_GET['Id'];
	$nombre     = "";
	$apellidos1 = "";
	$apellidos2 = "";
	$email      = "";
  $horario    = "";
	
	$sql = "SELECT * FROM empleado WHERE id_empleado=".$id;
   $rs  = mysql_query($sql,$conexion);
	if(mysql_num_rows($rs) !=0 ){
		$row=mysql_fetch_assoc($rs);
		$nombre 	= $row['nombre'];
		$apellidos1 = $row['apellido_paterno'];
		$apellidos2 = $row['apellido_materno'];
    $email = $row['correo'];
		$horario  = $row['horario'];
	}
	
 ?>
 
 <html xmlns="http://www.w3.org/1999/xhtml"><head><link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">
<link href="css/tablas.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>

<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">




<style>
.caja{
	display: inline-block;
	margin: 5px;
	border: 1px solid #dadada;
	background-color: #eaeaea;
	padding: 3px;
	color: #404040;
	width: 250px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Registrar Alumno</title>

</head>

<body>
   <center>
  <form id="form1" name="form1" method="post" action="guardaredicionalumno.php">  
  <strong><h3>EDITAR ALUMNO</h3></strong>
  <table width="68%" border="0" align="center" class="down1">
   <input name="id" class="caja"  value="<?php echo $id;?>" type="hidden" id="id"/>
  <tbody>
  
  <tr>
  <td align="right">Nombre:</td>
  <td><span id="sprytextfield1">
  <input name="nombre" class="caja" onkeypress="return soloLetras(event)" value="<?php echo $nombre;?>" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
	
  <tr>
  <td align="right">Apellido Paterno:</td>
  <td><span id="sprytextfield2">
  <input name="apellidos1" class="caja" value="<?php echo $apellidos1;?>" onkeypress="return soloLetras(event)" type="text" id="apellidos" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr>
  <td align="right">Apellido Paterno:</td>
  <td>
  <span id="sprytextfield3">
  <input name="apellidos2" class="caja" value="<?php echo $apellidos2;?>" onkeypress="return soloLetras(event)" type="text" id="apellidos" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span>
  </td>
  </tr>
  
  <tr>
  <td align="right">Email:</td>
  <td><span id="sprytextfield4">
  <input name="email" class="caja" value="<?php echo $email;?>" onblur="validarEmail(this.value)" type="text" id="email" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr>
  <td align="right">Horario:</td>
  <td><span id="sprytextfield4">
  <input name="horario" class="caja" value="<?php echo $horario;?>" type="text" id="horario" size="10" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr><td colspan="2"><input type="submit" class="boot" name="guarda" value="GUARDAR"> <input type="button" class="boot" onclick="javascript:window.history.back();" name="guarda" value="REGRESAR"></td></tr>
  </tbody></table>
  
 
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>


</body></html>