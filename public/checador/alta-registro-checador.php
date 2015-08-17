<?php
  include('../../database/config/index.php');
  $id_asistencia      = $_POST['id_asistencia'];
  $id_empleado        = $_POST['id_empleado'];
  $fecha              = $_POST['fecha_actual'];
  $notas              = $_POST['notas'];
  $ubicacion          = $_POST['ubicacion'];
  
  $sql = "INSERT INTO rel_empleado_asistencia (id_asistencia,id_empleado,fecha,notas,ubicacion) VALUES ('".$id_asistencia."','".$id_empleado."','".$fecha."','".$notas."','".$ubicacion."')";

  mysql_query($sql,$conexion);

  $mensajes = array(
  'Excelente Día', 
  '¡Ánimo!, este puede ser tu mejor día',
  'Cada día se escribe una historia nueva',
  '¡ Hoy puedes ser mejor que ayer !',
  '¡ Vive al Máximo !',
  'Hoy regala una sonrisa.'
);
 
$todo=(count($mensajes)-1);
$num=rand(0,$todo);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MUSYS</title>
    <link rel="stylesheet" href="../css/checador.css">
    
   <script type="text/javascript">

window.onload = function() {
  despegar();
}

function despegar() { 
  var contar = 7 //valor inicial. 
cuenta = document.getElementById("cuenta"); //elemento donde escribimos la cuenta atrás 

      function cuentaAtras() { 
         contar -=1; //variar el número de la cuenta
         cuenta.innerHTML = contar; //escribir el número
                 if (contar <= 0) { //cuando llegamos a 0...
            clearInterval(ignicion) //parar la cuenta atrás.
            window.location="index.php"; 
            }
     } 
     cuentaAtras() //llamada a la función de cuenta atrás
          //repetir la función cuenta atrás cada segundo
     ignicion = setInterval(cuentaAtras,1000);
}

</script>
</head>
<body>  

    <div id="interface">
        <div id="container">
            <div id="head">
                <div id="logo"><img src="../images/Logotipo-Mini.png" width="90px" height="90px" alt="ATENEA PHARMA"></div>
                <div id="mensaje-ok">¡ REGISTRO CORRRECTO !</div>
            </div> 
            <div id="imagen-ok">
              <?php 
                    echo $mensajes[$num];
                    echo '</br>';
                    echo '</br><img src="../images/correcto.gif" width="150px"/>'; 
              ?>
            </div>
            <div id="footer">
                <br> +++ Un momento por favor  <span align="center" id="cuenta"> </span> +++</br>
            </div> 
        </div>
    </div>

</body>
</html>
