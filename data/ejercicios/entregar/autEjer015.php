<?php
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $array = array($_POST["nombre"]);
        $vector=$_POST["nombre"];
        $contador = 0;
        
       
        print_r($array);//Muestra los valores con su valor en el vector
        echo "</ul>";
        
        foreach($vector as $a ){
            echo "<br> Hola persona ". $contador ." : " . $a;
            $contador++;
        }
        
    }
    else{
        echo "no funciona";
    }
    