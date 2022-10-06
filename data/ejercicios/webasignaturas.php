<?php

    include_once "asignatura.php";
    include_once "modulo.php";

    echo "<h1> WEb de asignaturas</h1>";
    $bbdd = new Asignatura("a",6,1);
    Asignatura::setciclo("DAM");
    echo "<br>" .$bbdd;
    echo "<br> BBDD pertenece al ciclo " . Asignatura::getciclo();


    

    
    echo "<h1> WEb de modulo</h1>";
    $dwes = new Modulo("a",5,6);
    Modulo::setciclo("dwes");
    echo"<br>" . $dwes;
    echo "<br> BBDD pertenece al ciclo " . Modulo::getciclo();