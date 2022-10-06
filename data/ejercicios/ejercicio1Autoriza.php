<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
    <body>
        <?php

            if(isset($_POST["Titulo"]) && !empty($_POST["Titulo"])){
                $titulo = $_POST["Titulo"];
                echo "<br> El titulo introducido : " . $titulo;
            }
            else{
                echo "<br> <h3 style=color:#FF0000>EL titulo no se a introducido </h3>" ;
            }

            if(!empty($_POST["autor"])){
                $autor = $_POST["autor"];
                echo "<br> el autor es : " . $autor;
            }
            else{
                echo "<br> <h3 style=color:#FF0000> el autor esta vacia</h3>" ;
            }

            if(!empty($_POST["editorial"])){
                $editorial = $_POST["editorial"];
                echo "<br> el editorial es : " . $editorial;
            }
            else{
                echo "<br> <h3 style=color:#FF0000> la editorial esta vacia</h3>" ;
            }
            
            if(!empty($_POST["paguinas"])){
                $paguinas = $_POST["paguinas"];
                echo "<br> las paguinas son : " . $paguinas;
            }
            else{
                echo "<br> <h3 style=color:#FF0000> las paguinas estan vacias</h3>" ;
            }

            if(isset($_POST["envio"])){
                $titulo = $_POST["ip"];
                if(!empty($_POST["ip"])){
                    echo "<br> la ip : " . $titulo;
                }
                else{
                    echo "<br> <h3 style=color:#FF0000>no se a introducido la ip </h3>" ;
                }
               
            }
            


        ?>
    </body>
</html>