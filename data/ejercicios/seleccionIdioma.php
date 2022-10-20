<?php

//Cookies
$miarray = $_POST["idioma"];
$idioma = serialize($miarray);

$miarray = $_POST["marca"];
$marca = serialize($miarray);

setcookie("PrimeraCokkie", $idioma, time() + 60);
setcookie("SegundaCookie", $marca, time() + 60);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="seleccionIdioma.css">
    <meta http-equiv="Refresh" content="2; url='http://ejercicios.local/seleccionIdioma.html'">
</head>

<body>
    <header>
        <h2>Hola Usuaro</h2>
    </header>
    <section>
        <?php
        echo "<br> valor de la cookies : " . $_COOKIE["PrimeraCokkie"];
        echo "<br> valor de la cookies : " . $_COOKIE["SegundaCookie"];

        echo "<br> Numero de cookies creadas " . count($_COOKIE);

        //Fin de cookies

        if (isset($_POST["idioma"]) && !empty($_POST["idioma"])) {
            $operador = $_POST["idioma"];
            if ($operador == "Español") {
                echo "Que pasa co";
            } else if ($operador == "Ingles") {
                echo "Welcome to the jungle";
            } else {
                echo "Kartofhen";
            }
        } else {
            echo "no funciona";
        }
        echo "<br> Tu marca de coche Preferida es : " . $_POST["marca"];
        

        ?>
    </section>
    <footer>footer</footer>


</body>

</html>