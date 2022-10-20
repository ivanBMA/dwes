<?php
    $datos = simplexml_load_file("empleados.xml");
    $apellidos = $datos->xpath("//apellidos");
    $edades = $datos->xpath("//edad");
    
    foreach($apellidos as $apellido){
        echo "<br> Apellido : " . $apellido;
    }

    echo "<hr>";

    foreach($apellidos as $apellido){
        echo "<br> Apellido : " . $apellido;
        print_r($apellido);
    }

    echo "<hr>";

    foreach($edades as $edad){
        echo "<br> edad : " . $edad;
    }

    