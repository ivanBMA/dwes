<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Informacion del fichero: </h2>

    <?php

        if(isset($_POST["envio"])){
            echo "<br><hr>nombre del fichero : " . $_FILES["myfile"]["name"];
            echo "<br><hr>Extension del fichero : " . $_FILES["myfile"]["type"];
            echo "<br><hr>Tamaño del fichero : " . $_FILES["myfile"]["size"];
            echo "<br><hr>nombre del fichero Temporarl : " . $_FILES["myfile"]["tmp_name"];
            echo "<br><hr>nombre del fichero Temporarl : " . $_FILES["myfile"][$file_get_contents];

            //Subir ficheros a una carpeta en concreto
            $destino = "subidos/" .  $_FILES["myfile"]["name"];
            $flag = move_uploaded_file( $_FILES["myfile"]["tmp_name"] , $destino);

            echo $flag ? "Fichero subido correctamente":"Fallo de la subida";


        }else{
            echo "<p> No se ha enviado nada </p>";
        }

    ?>
    
</body>
</html>