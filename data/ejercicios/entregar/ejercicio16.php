<?php
    $contar=0;
    $nombres = "";
    if(isset($_POST["contar"])){
        $contar = $_POST["contar"];
        $nombres = $_POST["nombres"];//Guarda todos los nombres existentes
        $nombre = $_POST["nombre"];//Coje el nombre nuevo
        $nombres .= '<li>' . $nombre . "</li>";//Añade el nombre a todos los nombres
        $contar++;
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
if(!empty($nombre))
    echo "<ul>". $nombres . "</ul>";
 ?>

    <form name="miformu" action="ejercicio16.php" method="post">
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