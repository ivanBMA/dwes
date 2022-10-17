<?php
    $contar =0;
    if(isset($_POST["numero"]) && !empty($_POST["numero"])){
        $numero = $_POST["numero"];

        for($i = 2 ;$i <= $numero ;$i++){
            if( ($numero % $i) == 0){
                echo "<br>" .$i  . " Es divisble entre " . $numero;
                $contar++;
            }
            
    
        }
        if($contar == 2){

            echo " <br> <h3> es Primo </h3><hr>";
        }
    }
     
    