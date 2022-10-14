<?php
    if(isset($_POST["numero"]) && !empty($_POST["numero"])){
        $numero = $_POST["numero"];
        for($i = 1 ;$i <= 10;$i++){
            if($i % $numero  == 0){
                echo "<br>" .$i  . " Es divisble entre " . $numero;
            }
            else{
                
            }
        }
    }