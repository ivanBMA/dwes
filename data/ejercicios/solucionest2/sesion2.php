<?php
    session_start();
    echo "<br> Esta es la paguina 2";
    echo "<br>He visitado la paguina " . $_SESSION["contador"] . " veces";

    //Esto cierra la sesion.
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),'', time()-15,"/");

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