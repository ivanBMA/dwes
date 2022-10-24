<?php
    if(isset($_POST["idioma"]) && isset($_POST["marca"])){
        $idioma = $_POST["idioma"];
        $marca = $_POST["marca"];

        $mensajeIdiom ="";
        $mensajeMarca = "";
        switch($idioma){
            case "es":
                $mensajeIdiom ="Bienvenido, querido usuario";
                $mensajeMarca = "Tu marca de coche favorita es : ";
            break;
            case "en":
                $mensajeIdiom ="Welcome, dear user. ";
                $mensajeMarca = "you favorite car brand is : ";
            break;
            case "de":
                $mensajeIdiom ="Wilcomer lieber Benutzer";
                $mensajeMarca = "Ihre Lieblingsautomarke ist : ";
            break;

            default:
                $mensajeIdiom ="Bienvenido, querido usuario";
                $mensajeMarca = "Tu marca de coche favorita es : ";
        
        }

        $mensajeCoche = $mensajeCoche .$marca;
        echo "<h2>" . $mensajeIdiom ." </h2>" ;
        echo "<h2>" . $mensajeMarca ." </h2>" ;
    }
    else{
        //No existen cookies
        setcookie("idioma" , '' , time()-7200);
        setcookie("marca" , '' , time()-7200);
        echo "<h3> Debe seleccionar algunos datos</h3>";
        echo "<a href=\"idioma.html\">volver al inicio</a>";
    }