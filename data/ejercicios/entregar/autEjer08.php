<?php
function redirecciona(){
    //redirect($url);
    //yaf_controller_abstract::redirect($url)
    header('Location:http://ejercicios/entregar/ejercicio08.php');
}
   
    

    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        $array = array($_POST["nombre"]);
        $vector=$_POST["nombre"];
        
       $contar++;
        if($contar < 4){
            redirecciona($contar);
        }
        else{


            print_r($array);//Muestra los valores con su valor en el vector
        echo "</ul>";
        
        foreach($vector as $a){
            echo "<br> El nombre del pais es : " . $a;
        }
        }
        
        
    }
    else{
      
    }
    
    
    
    




