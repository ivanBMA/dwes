<?php
    if(isset($_POST["Pais"]) && !empty($_POST["Pais"])){
        $array = array($_POST["Pais"]);
        
       
        print_r($array);//Muestra los valores con su valor en el vector
        echo "</ul>";   
    }
    else{
        echo "no funciona";
    }
    