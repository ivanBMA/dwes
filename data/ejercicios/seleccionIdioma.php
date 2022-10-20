<?php
    if(isset($_POST["idioma"]) && !empty($_POST["idioma"])){
        $operador = $_POST["idioma"];
        echo "<ul>";
        if($operador == "Español" ){
            echo "Que pasa co";
        }
        else if($operador == "Ingles" ){
            echo "Welcome to the jungle";
        }
        else{
            echo "Kartofhen";
        }  
    }
    else{
        echo "no funciona";
    }