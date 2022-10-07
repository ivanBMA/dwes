<?php
    $url = "http://ejercicios/ejercicio2.html";

    function redirecciona(){
        //redirect($url);
        //yaf_controller_abstract::redirect($url)
        header('Location:http://ejercicios.local/ejer4.html');
    }

    function sumar($numeroA , $numeroB){
        $resultado = $numeroA + $numeroB;
        echo "la suma da: " . $resultado;
    }

    function restar($numeroA , $numeroB){
        $resultado = $numeroA - $numeroB;
        echo "la resta da: " . $resultado;
    }

    function multiplicar($numeroA , $numeroB){
        $resultado = $numeroA * $numeroB;
        echo "la multiplicar da: " . $resultado;
    }

    function dividir($numeroA , $numeroB){
        $resultado = $numeroA / $numeroB;
        echo "la dividir da: " . $resultado;
    }
    
    if(isset($_POST["envio"]) && !empty($_POST["envio"])){
        if(isset($_POST["numberA"]) && !empty($_POST["numberA"]) && isset($_POST["numberB"]) && !empty($_POST["numberB"]) ){
            $numeroA = $_POST["numberA"];
            echo "numeroA: " . $numeroA;
            $numeroB = $_POST["numberB"];
            echo " numeroB: " . $numeroB;
            $_POST["operadores"];
            
            
                if(isset($_POST["operadores"]) && !empty($_POST["operadores"])){
                    $operador = $_POST["operadores"];
                    echo " operadores: " . $operador . "| ";
                    
                    if($operador == "sumar"){
                        sumar($numeroA , $numeroB);
                    }
                    else if($operador == "restar"){
                        restar($numeroA , $numeroB);
                    }
                    else if($operador == "multiplicar"){
                        multiplicar($numeroA , $numeroB);
                    }
                    else{
                        dividir($numeroA , $numeroB);
                    }
            }
            else{
                echo "no funciona";
            }

        }
        
        
    }
    else{
        redirecciona();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
    <body>
       

        <form name="miformu" action="/ejer4.html" method="post">
            <input type="submit" name="envio" value="return">
        </form>

    </body>
</html>