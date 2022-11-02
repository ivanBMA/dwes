<?php

    function devolver(){
        header('Location:ejercicio12.html');
    }

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $nombre = $_POST["nombre"];
         if($nombre == "ivan"){
            echo "hola " . $nombre . " que tal estas.";
            
         }else{
            devolver();
         }
    }
    else{
        echo "no envia";
    }