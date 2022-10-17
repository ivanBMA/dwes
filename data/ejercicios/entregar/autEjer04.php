<?php

echo "<br> <h3>Sucesion de fibonachi 10 veces </h3>";
    $var0 = 0;
    $var1 = 1;
    $total = 0;
    echo "<br>   valor :0";

    for($i=0;$i<9;$i++ ){
        
        $total = $var0 + $var1;
        echo "<br >valor :" . $total;
        
        
        $var0 = $var1 ;
        $var1 = $total;
       
    }

   
    