<?php

    include_once "manejadorExcepciones.php";
    //Calcula el inverso del numero pasado como parametro
    function inverso($num){
        if($num == 0){
            throw new MiExcepcion("No se puede dividir por cero");
        }
        return 1/$num;
    }//

    //Primer try catch
    try{
        echo "El inverso del numero 5 es : " . inverso(5);
    }
    catch(Exception $e){
        echo "<br> La razon de la excepcion es : " . $e -> getMessage();
    }
    finally{
        echo "<br> Esto siempre se ejecuta. ";
        echo "<hr> ";
    }

    //Segundo try catch
    try{
        echo "El inverso del numero 5 es : " . inverso(0);
    }
    catch(MiExcepcion $e){
        echo "<br> La razon de la excepcion es : " . $e -> errorPersonalizado();
    }
    finally{
        echo "<br> Esto se ejecuta por 2 vez. ";
        echo "<hr> ";
    }