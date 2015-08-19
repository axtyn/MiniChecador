<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery.js" type="text/javascript"></script>
    <!-- *** -->
 <script>
            $(function() {
                var cxt = canvas.getContext("2d");
                canvas = document.getElementById("canvas");
                video = document.getElementById("video");
 
                if(!navigator.getUserMedia)
                    navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
                if(!window.URL)
                    window.URL = window.webkitURL;
 
                if (navigator.getUserMedia) {
                    navigator.getUserMedia({
                        "video" : true,
                        "audio": false
                    }, function(stream) {
                        video.src = window.URL.createObjectURL(stream);
                        video.play();
                    },function(err){
                        console.log("Ocurrió el siguiente error: " + err);
                    });
                }
                else{
                    alert("getUserMedia no disponible");
                    return;
                }
 
                // Evento click para capturar una foto.
                $("#toggle").click(function() {
                    cxt.drawImage(video, 0, 0, 200, 150);
                });
 
                // Evento click para enviar la foto al servidor.
                $("#enviar").click(function() {
                    var data = canvas.toDataURL("image/jpeg");
 
                    // Separamos el "data:image/jpeg;base64,"
                    var info = data.split(",", 2);
                    $.ajax({
                        type : "POST",
                        url : "guardar-foto-webcam.php",
                        data : {
                            type : info[0],
                            data : info[1]
                        },

                        success : function(result) {
                            console.log("result:", result);
                        }
                    });
                });
            });
        </script>
  <!-- *** -->
  <style>
  * {
  margin:0;
  padding:0;
  font-family:"Helvetica Neue", Helvetica, Sans-serif;
  word-spacing:-2px;
}

h1 {
  font-size:40px;
  font-weight:bold;
  color:#191919;
  -webkit-font-smoothing: antialiased;
}

h2 {
  font-weight:normal;
  font-size:20px;
  color:#888;
  padding:5px 0;
}

.message {
background:#181818;
color:#FFF;
position: absolute;
top: -250px;
left: 0;
width: 100%;
height: 250px;
padding: 20px;
transition: top 300ms cubic-bezier(0.17, 0.04, 0.03, 0.94);
overflow: hidden;
box-sizing: border-box;
  
}

.message h1 {
  color:#FFF;
}

#toggle {
  position:absolute;
  appearance:none;
  cursor:pointer;
  left:-100%;
  top:-100%;
}

#toggle + label {
  position:absolute;
  cursor:pointer;
  padding:10px;
  background: #26ae90;
width: 100px;
border-radius: 3px;
padding: 8px 10px;
color: #FFF;
line-height:20px;
font-size:12px;
text-align:center;
-webkit-font-smoothing: antialiased;
cursor: pointer;
  margin:20px 50px;
  transition:all 500ms ease;
}
#toggle + label:after {
  content:"Tomar Foto" 
}

.container {
transition: margin 300ms cubic-bezier(0.17, 0.04, 0.03, 0.94);
  padding:5em 3em;
}

#toggle:checked ~ .message {
  top: 0;
}

#toggle:checked ~ .container {
  margin-top: 250px;
}

#toggle:checked + label {
  background:#dd6149;
}

#toggle:checked + label:after {
  content:"Close"
}
</style>
    
</head>
<body>
    <!--
    <video id="video" width="200" height="150" autoplay="autoplay"></video>
    </br><button id="foto">Tomar Foto!</button>
    </br><canvas id="canvas" width="200" height="150"></canvas>
    </br><button id="enviar">Enviar Foto!</button>
        -->
<input type="checkbox" name="toggle" id="toggle" />
<label for="toggle"></label>



<div class="container">

<video id="video" width="200" height="150" autoplay="autoplay"></video>
 
</div>


  
<div class="message">
</br><canvas id="canvas" width="200" height="150"></canvas>
</br><button id="enviar">Guardar Foto</button>
  


</div>


</body>
</html>