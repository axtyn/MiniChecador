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

    <div id="help"><img src="../images/arrow-left.png" alt="" class="pulse"></div>
    <div id="help2"><img src="../images/title.png" alt="" class="pulse"></div>
            


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
                </br><input name="Id" class="name" maxlength="3" autofocus required />
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