<html xmlns="http://www.w3.org/1999/xhtml"><head><link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">
<link href="css/tablas.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>

<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="calendario/tcal.css" />
<script type="text/javascript" src="calendario/tcal.js"></script>



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
<title>Alta de Personal</title>

</head>
<!-- ALTA EMPLEADO -->
<body>
   <center>
  <form id="form1" name="form1" method="post" enctype="multipart/form-data" action="alta-de-empleado_process.php">  
  <strong><h3>ALTA DE PERSONAL</h3></strong>
  <table width="68%" border="0" align="center" class="down1">
  
  <tbody>
  
  <tr>
  <td align="right">Nombre:</td>
  <td><span id="sprytextfield1">
  <input name="nombre" class="caja" onkeypress="return soloLetras(event)" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
	
  <tr>
  <td align="right">Apellido Paterno:</td>
  <td><span id="sprytextfield2">
  <input name="apellidos1" class="caja" onkeypress="return soloLetras(event)" type="text" id="apellidos" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr>
  <td align="right">Apellido Materno:</td>
  <td>
  <span id="sprytextfield3">
  <input name="apellidos2" class="caja" onkeypress="return soloLetras(event)" type="text" id="apellidos" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span>
  </td>
  </tr>
  
  <tr>
  <td align="right">Foto:</td>
  <td>
  <input type="file" name="foto" id="foto" /><input type="submit" name="cam" value="WebCam"/>
  </td>
  </tr>
  <tr>
  <td align="right">Email:</td>
  <td><span id="sprytextfield4">
  <input name="email" class="caja" onblur="validarEmail(this.value)" type="text" id="email" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr>
  <td align="right">Puesto/Área:</td>
  <td><span id="sprytextfield4">
  <select name="puesto" class="caja" id="puesto">
    <option value=""> ==Selecionar== </option>
    <option value="Ventas">Ventas</option>
    <option value="Edición y Diseño">Edición y Diseño</option>
    <option value="Distribución">Distribución</option>
    <option value="Contabilidad">Contabilidad</option>
    <option value="Administrativo">Administrativo</option>
    <option value="Otro">Otro</option>
  </select>
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>

  <tr>
  <td align="right">Horario:</td>
  <td><span id="sprytextfield4">
  <select name="horario" class="caja" id="email" >
      <option value=""> ==Selecionar== </option>
      <option value="8-18">8-18 hrs</option>
      <option value="9-19">9-19 hrs</option>
      <option value="Abierto">Abierto</option>
  </select>
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>

  <tr>
  <td align="right">Fecha de Ingreso:</td>
  <td><span id="sprytextfield4">
  <input name="fechadeingreso" type="text" id="fechadeingreso" size="28" class="caja tcal">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr><td colspan="2"><input type="submit" class="boot" name="guarda" value="GUARDAR"> <input type="reset" class="boot" name="guarda" value="Limpiar"></td></tr>
  </tbody></table>
  
 
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>


</body></html>