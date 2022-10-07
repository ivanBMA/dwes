<?php
/*https://rafacabeza.gitbook.io/dws/php*/
    $url = "http://ejercicios/ejercicio2.html";

    function redirecciona(){
        //redirect($url);
        //yaf_controller_abstract::redirect($url)
        header('Location:http://ejercicios.local/ejercicio2.html');
    }

    
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $titulo = $_POST["nombre"];
        if($titulo == "juan" || $titulo == "pedro"){
            if($a1=strlen($titulo) <=3){
                redirecciona();
            }
            else{
                echo "<br> te saludo : " . $titulo;
            }
            
            
        }
        
        else{
            redirecciona();
        }
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
       

        <form name="miformu" action="/ejercicio2.html" method="post">
            <input type="submit" name="envio" value="return">
        </form>

    </body>
</html>