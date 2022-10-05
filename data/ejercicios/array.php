<?php

    $miarray = array(1,'hola',200 );
    echo "mi array el elmento 2 es " . $miarray[2];
    echo "<br>" .   "mi array el elmento 1 es " . $miarray[1];
    echo "<br>";
    
    foreach($miarray as $elmto){
        echo "<br>" .   "mi array el elmento 1 es " . $elmto;
    }

    echo "<br>";

    $arry2 = [
        3,
        2,
        4,
        9
    ];

    echo "<br>";

    foreach($arry2 as $elto){
        $elto = $elto * 2;
        echo "<br> valor de eltro : " . $elto;
    }

    echo "<br>";

    print_r($arry2);

    echo "<br>";

    $arry2[] =15;
    echo "<br>";
    print_r($arry2);

    echo "<br>";
    unset($arry2[2]);
    print_r($arry2);

    $mivar   = 5;
    unset($mivar);
    echo "<br> y la posicion 2 ? : " . $arry2[2];

    $arry2[2] = 99;
    echo "<br>";
    print_r($arry2);

    echo "<br> Mostrar valor y vlace de Array: ";
    foreach($arry2 as $k => $v){
        echo "<br> Clave : " . $k . " y valor " . $v;
    }

    for( $i=0; $i <10; $i++){
        echo "<br> i vale $i :" . $i * 3;
    }

    $persona = array(
        "edad" => 23,
        "peso" => 75,
        "casado" => false,
        "dni"  => "26262626L",
        8 => "nss"
    );

    echo "<br> Mostrar valor y vlace de Array: ";
    foreach($persona as $k => $v){
        echo "<br> " . $k . " : " . $v;
    }
    print_r($persona);

    $arrm = [
        0 => [1,3],
        1 => [5,7,8]
    ];

    echo "<br> debe salir 3 " . $arrm[0][1];