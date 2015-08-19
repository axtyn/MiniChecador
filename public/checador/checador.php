<?php
    include('../../database/config/index.php');
    $Id = $_GET['Id'];
    //$format = "Y-m-d H:i:s";
    //$zona = date_default_timezone_get() ;
     $time = time();
     $FechaActual = date("Y-m-d H:i:s", $time);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MUSYS</title>
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/checador.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1"/>
    <?php include("../library.php");  ?>
</head>
<body onload="mueveReloj()">  
    <div id="help3"><img src="../images/mensaje-activ.png" alt="" class="pulse"></div>

    <div id="copy">
            <h1>MUSYS (Beta Version 0.06) </h1>
            <h2>Desarrollado por Eduardo M.</h2>
    </div>

    <div id="interface" class="slideDown">
        <div id="container">
            <div id="head">
                <div id="logo"><img src="../images/Logotipo-Mini.png" width="90px" height="90px" alt="ATENEA PHARMA"></div>
                <div id="info"><span id="livedatetime"></span></br><span id="liveclock"></span></div>
            </div> 

            <form id="formulario2" name="form2" method="post" action="alta-registro-checador.php">  
                <input type="hidden" name="id_empleado" id="id_empleado" value="<?php echo $Id; ?>"/>
                <input type="hidden" name="fecha_actual" id="fecha" value="<?php echo $FechaActual; ?> "/>
                <input type="hidden" name="ubicacion" id="ubicacion" value="Oficina (Business Consultant)"/>
                <?php
                    $sql = "SELECT nombre, apellido_paterno, apellido_materno FROM empleado WHERE id_empleado = '$Id'";
                     $rs  = mysql_query($sql,$conexion);
                        if(mysql_num_rows($rs) !=0 ){
                            while($row=mysql_fetch_assoc($rs)){
                                $nombre_parcial= $row['nombre'].' '.$row['apellido_paterno'];
                            }    
                        }else{
                            echo '<p align="center" style="color: white;"><img src="../images/id-no-existe" alt="ESTE ID NO EXISTE"></p>';
                            //header('refresh: 5; url=index.php');
                            //header('Location: index.php');
                            echo '<input type="button" style="cursor: pointer;" class="btn" onclick="javascript:window.history.back();" value="Cancelar" /> ';
                            exit;
                        }

                ?>

                <div id="saludo"><?php if(mysql_num_rows($rs)) echo '<script src="../js/saludo.js"> </script>'.$nombre_parcial .' [ ' . $Id . ' ]'; else echo'';?></div>
                    <select name="id_asistencia" id="items" autofocus >
                    <option value="0">--- SELECCIONE ACTIVIDAD ---</option>
                      <?php
                        //$materia  = "SELECT * FROM asistencia WHERE id_asistencia NOT IN(".$idexis."0) ";
                      $activ = "SELECT * FROM asistencia  ";
                        $rsactiv  = mysql_query($activ,$conexion);
                        if(mysql_num_rows($rsactiv) != 0){
                            while($rowx = mysql_fetch_assoc($rsactiv)){
                            echo '<option value="'.$rowx['id_asistencia'].'">'.$rowx['actividad'].'</option>';
                            }
                        }else{
                            echo '<option value="0">--- NO DISPONIBLE ---</option>';
                        }
                      ?>
                    </select>
                
                
                <input type="submit" style="cursor: pointer;"  class="btn"  name="ok" value="OK" />
                </br>
                <input type="text" name="notas" id="notas" size="100" placeholder=" ¿ Alguna nota que anexar ? "/>
                <input type="button" style="cursor: pointer;" class="btn" onclick="javascript:window.history.back();" value="Cancelar" /> 
            </form>
        </div>
    </div>
</body>
</html>