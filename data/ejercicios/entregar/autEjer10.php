<?php
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $operadores = $_POST["nombre"];
        echo "<ul>";
        foreach ($operadores as $operador1) {
            echo "<br> <li> jugador :  " . $operador1 . "</li>";
            
                    
        }
        print_r($operadores);//Muestra los valores con su valor en el vector
        echo "</ul>";   
    }
    else{
        echo "no funciona";
    }