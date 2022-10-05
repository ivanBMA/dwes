<?php

    $var1 = 6;
    $var2 = 3;

    unset($nombreVariable); //Con esto booras una variable

    function suma($a, $b){
        global $var1,$var2;
        echo "<br> La suma es = " . $var1 ." y " . $var2;

        //Definicion de varibal estatica

        static $variableEstatica = 0;
        echo "<br> El valor de la var estatica es : " . $variableEstatica;
        $variableEstatica++;
        return $a + $b;
    }
   
    echo "<br> La suma 1 es = " . suma(3,5);
    echo "<br> La suma 2 es = " . suma($var1,$var2);

    //Paso de parametros por valor o por referencia(variable)
    function restart($op1, $op2){
        $op1 = $op1 - $op2;
        return $op1;
    }

    echo "<br> LLamada por valor : " . restart(8,3);