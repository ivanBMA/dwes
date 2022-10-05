<?php

    $var1 =25;
    $var2 = 1;
    const miconst = 100;
    define('nombre', 200);
    echo "Hola que tal estas :D" . "<br>";
    
    echo "la variable es  " . isset($var1) ."<br>";

    if($var1 > $var2){
        echo " a es mayor que b". "<br>";
    }

    else{
        echo "b es mayor que a". "<br>";
    }


    for( $i=0; $i < 11;$i++){
        echo "hola $i" . "<br>";

        if($i > $var2){
            echo " $i es mayor que $var2". "<br>";
        }

        elseif($i == $var2){
            echo " $i es igual que $var2 :DDDDDDDD". "<br>";
        }
    
        else{
            echo "$var2 es mayor que $i". "<br>";
        }

    }

        ?>


