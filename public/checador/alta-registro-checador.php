<?php
  include('../../database/config/index.php');
  $id_asistencia      = $_POST['id_asistencia'];
  $id_empleado        = $_POST['id_empleado'];
  $fecha              = $_POST['fecha_actual'];
  $notas              = $_POST['notas'];
  $ubicacion          = $_POST['ubicacion'];
  
  $sql = "INSERT INTO rel_empleado_asistencia (id_asistencia,id_empleado,fecha,notas,ubicacion) VALUES ('".$id_asistencia."','".$id_empleado."','".$fecha."','".$notas."','".$ubicacion."')";

  mysql_query($sql,$conexion);


switch ($id_asistencia) {
    case 1:
        $mensaje = array(
        'Excelente Día', 
        '¡Hoy puede ser tu mejor día',
        'Cada día se escribe una historia nueva',
        '¡ Hoy puedes ser mejor que ayer !',
        '¡ Vive al Máximo !',
        'Hoy regala una sonrisa.'
        );
        break;
    case 3:
        $mensaje = array(
        'No tardes mucho', 
        'Es mejor estar en la oficina',
        'Regresa pronto'
        );
        break;
    case 4:
        $mensaje = array(
        'Buen Provecho', 
        '¿Me invitas de tu comida?',
        'Ya es hora de comer !!!',
        '¡ A recargar energias !',
        );
        break;
    case 5:
        $mensaje = array(
        '¡Ánimo!, Ya falta poco para salir', 
        'Energías Recargadas',
        'Aún podemos dar un poco más',
        'Di -No- al mal del puerco',
        );
        break;
    case 6:
        $mensaje = array(
        'Ya te habías tardado', 
        '¡Vamos! aún tienes cosas que hacer.',
        'Ya estás de vuelta...'
        );
        break;
    case 8:
        $mensaje= array(
        '¡ Ha sido un excelente día !', 
        '¡ Tu descanso es merecido ',
        'Buen Viaje a casa',
        '¡ Es tiempo de descansar !'
        );
        break;
    default:
        $mensaje= array(
        'OK'
        ); 
        break;
}
  $todo=(count($mensaje)-1);
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
                    echo $mensaje[$num];
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
