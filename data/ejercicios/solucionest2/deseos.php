<?php
/*
Lista de deseos
    deseos.php => deplegable : vaqueros
                                telefonos
                                coche
                                collar
                                cd
    Se va mostrando en la misma pagina lo elegido.
        -> sesiones, codificarlo con json.
            -> recuperar de la informacion del json codificado.
*/


//Usuario 1234  => rol = 0
//Admin 4467    => rol = 1 

    
session_start();
    $_SESSION["miArray"] .= "<br>" . $_POST["objetos"];
    
    /*
    $sesionDecodif = json_decode($sesionDecodif);
    //$_SESSION["miArray"][4]="porsche";
    //$sesionDecodif->{'listaDeseo'}[6] = "Lampara";

    $miarray = get_object_vars($sesionDecodif);
    print_r($miarray);
    for($i = 0;$i < count($miarray, COUNT_RECURSIVE);$i++){
        echo "<br> Elemento " . $i . " es " . $miarray["listaDeseo"][$i];
    }
    */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script languaje="Javascript" src="deseos.js"></script>

</head>

<body >
    <h2>Pagina de los Deseos</h2>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <label for="" id="Text1">Desplegable</label>
        <select name="objetos" id="menus" required>
            <option value="vaqueros">vaqueros</option>
            <option value="coche">coche</option>
            <option value="telefono">telefono</option>
            <option value="colla">colla</option>
            <option value="cd">cd</option>

        </select>
        <br>
        <input type="submit" name="envio" value="Acceder">
    </form>

    <?php
        // definimos un array de valores en php
        $arrayPHP = array($_SESSION["miArray"]);//Coje el nombre nuebo
    ?>

    <script type="text/javascript">
        // obtenemos el array de valores mediante la conversion a json del
        // array de php

        var arrayJS = <?php echo json_encode($arrayPHP); ?>;

        // Mostramos los valores del array

        for (var i = 0; i < arrayJS.length; i++){
            document.write(arrayJS[i]);
        }
    </script>
</body>

</html>