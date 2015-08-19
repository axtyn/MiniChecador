<?php
$nom = "H";
$ruta = 'public/images/fotos/'.$nom.'.jpg';

$jpg = base64_decode($_POST["data"]);
$file = fopen($ruta, "w");

if($file){
        // Debe tener permiso de escritura.
    fwrite($file, $jpg);
    fclose($file);
    echo "ok";
      echo json_encode(array('jpg' => 1));
}
else{
    echo "Error al abrir archivo";
}
 


?>