<?php
    $datos = simplexml_load_file("empleados.xml");
    if($datos == false){
        echo "<br> No se ha podido leer el xml";
        exit();
    }
    echo "<hr>";

    var_dump($datos);
    echo "<br> Recorro el fichero";

    echo "<hr>";

    foreach($datos as $dato){
        print_r($dato);
    }

    echo "<hr>";

    print_r($dato);

    echo "<hr>";