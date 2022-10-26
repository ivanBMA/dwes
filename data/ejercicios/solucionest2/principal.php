<?php
    session_start();
    $usuarioContra = $_SESSION["loginOk"];
    $nombre ="";
    $contraseña ="";
    echo " <h1>Bienvenido a la página</h1>";
    foreach($usuarioContra as $separar){
        echo "<br><h2><center>" . $separar . "</center></h2>";
    }
    
    /*
    for($i = 0; $i <=1;$i++){
        if($i == 0){
            $nombre =$usuarioContra[$i];
        }
        if($i == 1){
            $contraseña =$usuarioContra[$i];
        }
    }

    echo "<h1>Hola : " . $nombre . " con la contraseña " .  $contraseña . "</h1>";
*/