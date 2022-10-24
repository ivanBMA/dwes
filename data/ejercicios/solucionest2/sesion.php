<?php
    //Crear o unirse a una sesion ya creada
    session_start();


    //$_SESSION["nombreDeLaVariable"]
    //Contador de visitas

    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 0;
    }
    else{
        $_SESSION["contador"]++; 
    }

    echo "He visitado la paguina " . $_SESSION["contador"] . " veces";
    echo '<a href="sesion2.php">Siguiente paguina</a>';
    