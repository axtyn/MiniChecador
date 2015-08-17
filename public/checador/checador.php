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
    <link rel="stylesheet" href="../css/checador.css">
    <script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return
        
        //FECHA
        var dayNames = new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
        var monthNames = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
                           "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var dt = new Date();
        var y  = dt.getYear();
        // Y2K compliant
        if (y < 1000) y +=1900;
        //document.write(dayNames[dt.getDay()] + " " + dt.getDate() + "  " + " de " + " " + monthNames[dt.getMonth()]  + " del " + y);
         mydatetime=dayNames[dt.getDay()] + " " + dt.getDate() + "  " + " de " + " " + monthNames[dt.getMonth()]  + " del " + y

        //HORA

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='5' face='Arial' ><b><font size='1'></font>"+hours+":"+minutes+":"
         +seconds+" "+dn+"</b></font>"

       

        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("livedatetime").innerHTML=mydatetime
        document.getElementById("liveclock").innerHTML=myclock

        setTimeout("show5()",1000)

         }


        window.onload=show5
         //-->



</script>
</head>
<body onload="mueveReloj()">  
    <div id="copy">
            <h1>MUSYS (Beta Version 0.06) </h1>
            <h2>Desarrollado por Eduardo M.</h2>
    </div>

    <div id="interface">
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
                            echo 'Nombre no Disponible';
                        }

                ?>

                <div id="saludo"><script src="../js/saludo.js"> </script> <?php echo $nombre_parcial .' [ ' . $Id . ' ]';?></div>
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