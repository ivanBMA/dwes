<?php
    session_start();
    if(!isset($_SESSION["loginOk"])){
        header("Location:http://ejercicios.local/solucionest2/login.php");
    }

    echo " <h1>Bienvenido a la página : ". 
        $_SESSION["loginOk"]["nombreUsu"]."</h1>";
    echo "<br> <h1>El rol es : ". 
        $_SESSION["loginOk"]["rol"]."</h1>";
    echo "<br><br>";
    echo "<a href=\"logout.php\">cerrar sesion</a>";

    