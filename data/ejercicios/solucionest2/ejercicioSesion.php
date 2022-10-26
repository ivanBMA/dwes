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

    //Crear o unirse a una sesion ya creada
    $array = [$_POST["nombre"], $_POST["contraseña"]];
    session_start();
    $_SESSION["miArray"] = $array;
    
    if($array[0] == "usuario" && $array[1] == "1234"){
        $url = "Location:http://ejercicios.local/solucionest2/bienVenido.php?array=' . $array";
        header($url);
    }
    else if($array[0] == "Admin" && $array[1] == "4467"){
        header('Location:http://ejercicios.local/solucionest2/bienVenido.php');
    }
    else if(!empty($_POST["nombre"])){
        echo "<br><p id='Rojo'> No existe ese usuario</p>";
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>

        <form name="miformu" action="http://ejercicios.local/solucionest2/ejercicioSesion.php" method="post">
            <p>
                <label for="nombre">nombre 1:</label>
                <input type="text" name="nombre" id="numberA" >

            </p>
            <p>
                <label for="nombre">contraseña 1:</label>
                <input type="password" name="contraseña" id="numberA" >

            </p>
            
            <input type="submit" name="envio" value="Enviar">
        </form>
        
    </body>
    </html>