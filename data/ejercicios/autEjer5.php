<?php
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $operadores = $_POST["nombre"];

        for( $i=0;$i < 3;$i++){
            $operador =  $operadores[$i];
        echo "<br> nombre " . $i . " : " . $operador . " | ";

        }

        echo "<hr>";

        foreach ($operadores as $operador1) {
            echo "<br> nombre---:  " . $operador1;
        }

        
          
    }
    else{
        echo "no funciona";
    }