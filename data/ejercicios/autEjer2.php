<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
    <body>
        
        <?php
        /*https://rafacabeza.gitbook.io/dws/php*/

            if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
                $titulo = $_POST["nombre"];
                if($titulo == "juan" || $titulo == "pedro"){}
                echo "<br> te saludo : " . $titulo;
            }
            else{
                echo "<br> <h3 style=color:#FF0000>EL titulo no se a introducido </h3>" ;
                header('Location: [/ejercicio2.html')];
                exit;
            }

            
        ?>

        <form name="miformu" action="/ejercicio2.html" method="post">
            <input type="submit" name="envio" value="return">
        </form>

    </body>
</html>