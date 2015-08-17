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
            <form id="formulario" name="form1" method="get" action="checador.php">
                </br><input name="Id" class="name" maxlength="2" autofocus required />
                </br><input name="ok" class="btn" type="submit" value="PRESS" />
            </form>
            <div id="footer">
                Solicitar Registro al Sistema
                </br>Reporte de Fallas: checador@ateneapharma.com
            </div> 
        </div>
    </div>

</body>
</html>