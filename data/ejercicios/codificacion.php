<?php
    //Serialize, inserializa, json_encode, json_decode

    $capitales =[
        "España" => "Madrid",
        "Francia" => "Paris"
    ];

    $infortrans = "";//informacion trans
    $infonotrans = "";//Informacion de vuelta a la original

    $infortrans = serialize($capitales);
    echo "<br>Informacion serializada : ";
    var_dump($infortrans);

    echo "<hr>";

    $infortrans = unserialize($infortrans);
    echo "<br>Informacion Deserializada : ";
    var_dump($infortrans);

    echo "<hr>";

    $infortrans = json_encode($capitales);
    echo "<br>Informacion json : ";
    var_dump($infortrans);

    echo "<hr>";

    $infortrans = json_decode($infortrans);
    echo "<br>Informacion original desde json : ";
    var_dump($infortrans);
    