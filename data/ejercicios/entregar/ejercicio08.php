<?php
    $contar=0;
    if(isset($_POST["contar"])){
        $contar = $_POST["contar"];
        $contar++;
    }

    if($contar >= 4 ){
        header('Location:http://ejercicios/entregar/autEjer08.php');
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
    <form name="miformu" action="ejercicio08.php" method="post">
        <p>
            <label for="nombre">Nombre 
            <?php echo $contar; ?>
            <input hidden="hidden" type="number" name="contar" id="numberA" value="<?php echo $contar; ?>" >
            <input type="text" name="nombre" id="numberA" >
        </p>
        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>