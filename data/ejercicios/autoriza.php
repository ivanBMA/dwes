<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h1>Paguina de chequeo de creadenciales</h1>
        <h2>si has llegado aqui eres que heres un heroe</h2>

        <?php

        if (isset($_POST["nombreusu"]) && !empty($_POST["nombreusu"])) {
            $usuaio = $_POST["nombreusu"];
            echo "<br> usuario introducido : " . $usuaio;
        } else {
            echo "<br> <h3 style=color:#FF0000>EL nombre del usuario no se a introducido </h3>";
        }
        if (!empty($_POST["passwwd"])) {
            $pasword = $_POST["nombreusu"];
            echo "<br> la contraseña del usuario es : <h2>" . $pasword . "</h2>";
        } else {
            echo "<br> <h3 style=color:#FF0000>la contraseña esta vacia</h3>";
        }



        echo "<br> aceptar Terminos y condiciones :  " . ($_POST["checkbox1"]);
        echo "<br> javas :  " . ($_POST["checkbox2"]);
        echo "<br> php :  " . ($_POST["checkbox3"]);
        echo "<br> c++ :  " . ($_POST["checkbox4"]);

        if (isset($_POST["checkbox"]) && !empty($_POST["checkbox"])) {
            $asignaturas = $_POST["checkbox"];

            foreach ($asignaturas as $asignatura) {
                echo "<br> te encanta el modulo de :  " . $asignatura;
            }
        }

        //recoguida datos RadioButton

        if (isset($_POST["envio"])) {
            $equipobasket = $_POST["equipo"];
            if (!empty($equipobasket)) {
                echo    "<br> tu equipo de basket preferidos es " . $equipobasket;
            } else {
                echo    "<br> No has elegido ninguno equipo";
            }
        }

        //Recoguida de listas desplegables

        if (isset($_POST["envio"])) {
            $menuPreferido = $_POST["menus"];
            if (!empty($menuPreferido)) {
                echo    "<br> tu menu preferido es " . $menuPreferido;
            } else {
                echo    "<br> No has elegido menu";
            }
        }

        //Recoguida de listas desplegables de menus

        if (isset($_POST["envio"])) {
            $menuPreferidos = $_POST["menusm"];

            if (!empty($menuPreferidos)) {
                echo    "<br> tu menu preferido es <ul>";
                foreach ($menuPreferidos as $menusm)
                    echo    "<br> <li> " . $menusm . "</li>";
            } else {
                echo    "<br> No has elegido menu";
            }
            echo    "</ul>";
        }

        if (isset($_POST["envio"])) {
            $titulo = $_POST["ip"];
            if (!empty($_POST["ip"])) {
                echo "<br> la ip : " . $titulo;
            } else {
                echo "<br> <h3 style=color:#FF0000>no se a introducido la ip </h3>";
            }
        }

        ?>

    </body>

</html>