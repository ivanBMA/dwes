<?php
    $contar=0;
    $nombres = "";
    if(isset($_POST["contar"])){
        $contar = $_POST["contar"];
        $nombres = $_POST["nombres"];//Guarda todos los nombres existentes
        $nombre = $_POST["nombre"];//Coje el nombre nuevo
        $nombres .= $nombre .= ",";//Añade el nombre a todos los nombres
        $contar++;
    }

    if($contar >= 4 ){
        //?nombres=" . $nombres; Envia la variable por la url
        $url="Location:http://ejercicios/entregar/autEjer08.php?nombres=" . $nombres;
        header($url);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    echo $nombres;
 ?>

    <form name="miformu" action="ejercicio08.php" method="post">
        <p>
            <label for="nombre">Nombre 
            <?php echo $contar; ?>
            <input hidden="hidden" type="text"  name="nombres" value="<?php echo $nombres; ?>">
            <input hidden="hidden" type="number" name="contar" value="<?php echo $contar; ?>" >
            <input type="text" name="nombre" id="numberA" >

        </p>
        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>