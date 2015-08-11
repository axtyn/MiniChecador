
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="imagenes/favicon1.ico" />

<link rel="stylesheet"  href="css/layout.css" type="text/css"/>
<title>SISAP - Reloj Checador Digital</title>
<style>
.letras{
 color:#ffffff;
}
</style>
<script type='text/javascript'>

function setIframeHeight( iframeId ) 
{
	var ifDoc, ifRef = document.getElementById( iframeId );
	
	try
	{   
		ifDoc = ifRef.contentWindow.document.documentElement;  
	}
	catch( e )
	{ 
		try
		{ 
			ifDoc = ifRef.contentDocument.documentElement;  
		}
		catch(ee)
		{   
		}  
	}
	
	if( ifDoc )
	{
	ifRef.height = 1;  
	ifRef.height = ifDoc.scrollHeight;
	}
}
</script>
</head>
<body><CENTER/>

					

                        <div class="contentLayout">
                            <div id="content" >
                               
                                    <div class="box tabs themed_box">
                                        <h2 class="box-header">
										RELOJ CHECADOR DIGITAL
										</h2>
                                          
                                        
                                        <div class="box-content">  
										
										<iframe src="Menu.php?Nivel=0" allowtransparency="yes" height="50px"  width="100%"  frameborder="0">
					
					</iframe>
										
                                        <iframe src="Contenido.php" id="admin" name="admin" scrolling="no" width="100%" height="100%"  frameborder="0"  onload = "setIframeHeight(this.id)"></iframe>
                                            </div>
                                    </div>
                                      
                            </div>
                        </div>
</CENTER>
</body>
</html>