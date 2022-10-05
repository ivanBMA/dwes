<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="Procesa.php" method="post">
            <input type="text" id="campo1" name="campo1" placeholders="Inserta un dato"/>
            <input type="submit" value="Enviar"/>
        </form>

        <?php

            $CampoTexto = $_POST['Campo1'];
            echo $CampoTexto;

        ?>

</body>
</html>

