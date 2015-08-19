<!-- LIBRERIAS JAVASCRIPT -->



<!--REFRESCAR PAGINA ACTUAL CADA X SEGUNDOS -->
    <script type="text/javascript"> 
    function redireccionar(){ 
      window.location.reload(true); 
    }  
    setTimeout ("redireccionar()", 18000000); // 1 segundo es igual a 1000
    </script> 
     
    <!--SLIDER-->
    <script src="js/jquery.min.jsX"></script>
    <script src="js/responsiveslides.js"></script>
    <script>
    jQuery.noConflict();
    jQuery(function () {
      jQuery("#slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 962,
        namespace: "centered-btns"
      });
    });
  </script> 


<!-- MOSTRAR FECHA Y HORA -->
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