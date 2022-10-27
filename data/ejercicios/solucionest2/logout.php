<?php
    session_start();//Unirme a la sesion

    $_SESSION = array();
    session_destroy();
    setcookie(session_name(), "", time() -72000);

    //echo "<h2>Cerrar sesion :D</h2>";
    //echo "<a href=\"login.php\">cerrar sesion</a>";

    header("Location:login.php");//No se puede imprimir antes de este ningun text