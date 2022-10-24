<?php
    if(isset($_POST["Pais"]) && !empty($_POST["Pais"])){
        $array = array($_POST["Pais"]);
        $vector=$_POST["Pais"];
        
       
        print_r($array);//Muestra los valores con su valor en el vector
        echo "</ul>";
        
        foreach($vector as $a){
            echo "<br> El nombre del pais es : " . $a;
        }
        
    }
    else{
        echo "no funciona";
    }
    