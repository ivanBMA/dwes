<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombreadmin = "pedro lopez";

        include "footer.php";//no para la ejecucion
        require "footer.php";//si para la ejecucion de la paguina en caso de error
        require_once "footer.php";
        echo "<br> El mnombre del admin es :" . $nombreadmin;



    ?>    
    
</body>
</html>