<?php
    session_start();
    $usuarioContra = $_SESSION["miArray"];
    $nombre ="";
    $contraseña ="";
    /*
    foreach($usuarioContra as $separar){
        echo " <h1>Bienvenido a la paguina</h1>" . $separar;
    }
    */

    for($i = 0; $i <=1;$i++){
        if($i == 0){
            $nombre =$usuarioContra[$i];
        }
        if($i == 1){
            $contraseña =$usuarioContra[$i];
        }
    }

    echo "<h1>Hola : " . $nombre . " con la contraseña " .  $contraseña . "</h1>";
