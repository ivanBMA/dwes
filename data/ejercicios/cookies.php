<?php

//Funciones con el tiempo en segundos
    time();//Tiempo actual en segundos desde 1970.
    strtotime("+1 day");//
    //unset();  //Caducar las cookies, no las elimina
    
    //Definir una cookie, Siempre antes de imprimir nada por pantalla.
    $miarray = ["hola", 25 , [1,2,3]];
    $inforguardar = serialize($miarray);
    
    //setcookie("primeraCookie", "aceptador", time()+(3600*24));//Un dia.
    setcookie("primeraCookie", "aceptador1", strtotime("+1 minute"));//Una Semana.
    setcookie("SegundaCookie", "aceptador1", time() +60);
    echo "<h1> Mi primera cookie</h1>";

    echo "<br> valor de la cookies : " . $_COOKIE["primeraCookie"];
    echo "<br> valor de la cookies : " . $_COOKIE["SegundaCookie"];


    echo "<br> Numero de cookies creadas " . count($_COOKIE);
