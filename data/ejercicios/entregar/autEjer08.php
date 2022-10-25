<?php
function redirecciona(){
    //redirect($url);
    //yaf_controller_abstract::redirect($url)
    header('Location:http://ejercicios/entregar/ejercicio08.php');
}
   
    
    if(isset($_GET["nombres"]) && !empty($_GET["nombres"])){
        $nombres = $_GET["nombres"];
        echo "<br> ==>" .$_GET["nombres"];
        echo "<br> ->" . $nombres;
        $frase = "Las cervezas Frias mejor";
        
        echo "<hr>";
        $tok = strtok($nombres, ",");//Separa las palabras por la ,
        
        while ($tok !== false) {
            echo "<br>Word=" . $tok . "<br/>";
            $tok = strtok(",");
        }

        echo "<hr>";
        $tok1 = strtok($frase, " ");//Separa las palabras por la ,
        
        while ($tok1 !== false) {
            echo "<br>Word=" . $tok1 . "<br/>";
            $tok1 = strtok(" ");
        }
    }
        
    else{
      echo "<br>No llego nada";
    }
    
    
    
    




