<?php
    /*Crear un entorno de login
        -La paguina de login:Usuario y password
            -Usuario = usuario
            password = 1234 --> ok , rol-0

            -Usuario Admin
            password - 4467 -> ok , rol-1

            -Si no => muestre mensaje login erronea

        -Si logion ok => principal.php . Bienvenido usuario
        
            -Enlace logout.php
            
        -Logout.php => Cerrar la sesion y enlace/redireccion a login.php
    */

    if(!isset($_POST["nombre"]) && !isset($_POST["contraseña"])){
        $nombre = $_POST["nombre"];
        $contraseña = $_POST["contraseña"];

        if($nombre == 'usuario' && $contraseña == '1234'){
            echo "bien Usuario";
        }
        else if($nombre == 'Admin' && $contraseña == '4467'){
            echo "bien ADmin";
        }
        else{
            echo "Login erroneo";
        }
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
    <form name="miformu" action="/solucionest2/ejercicioSesion.php" method="post">
        <p>
            <label for="nombre">nombre 1:</label>
            <input type="text" name="nombre[]" id="numberA" >

        </p>
        <p>
            <label for="nombre">contraseña 1:</label>
            <input type="password" name="contraseña[]" id="numberA" >

        </p>
        <p>
            <label for="nombre">nombre 2:</label>
            <input type="text" name="nombre[]" id="numberA" >

        </p>
        <p>
            <label for="nombre">contraseña 2:</label>
            <input type="password" name="contraseña[]" id="numberA" >

        </p>
        
        <input type="submit" name="envio" value="Enviar">
    </form>
        
    </body>
    </html>