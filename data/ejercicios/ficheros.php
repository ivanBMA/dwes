<?php
    $nombreFi = "modulosDwes.txt";
    $fp = fopen($nombreFi, "r");//True si no hay problemas.(ABRIR FICHEROS)

    if(!$fp){
        echo "<br> No he podido leer el fichero ";
    }
    else{
        //Leer el fichero.
        

        /*
        //1 Caracter a caracter fgetc
        while(!feof($fp)){//Escribir caracter a caracter
            $caracter = fgetc($fp);
            if($caracter == "\n"){
                echo "<br>";
            }
            echo $caracter;
        }
        //2 Escribir linea a linea fgets
        while(!feof($fp)){
            $linea = fgets($fp);
            
            echo $linea . "<br>";
        }

        

        //3 Escribir todo fread
        $contenido = fread($fp, filesize($nombreFi));
        print_r($contenido);
        */
        

    }
    echo "<br> Cerrando el fichero ...";
    fclose($fp);//Cerrar Fichero (!IMPORTANTE¡)

    //4 Escribir 
    $fp2 = fopen($nombreFi, "a");
    if(!$fp2){
        echo "<br> NO he podido escribir el fichero ";
    }
    else{//true si no hay problemas
        $textoAlInsertar = "Esto es otra linea." . PHP_EOL;
        fwrite($fp2, $textoAlInsertar);
        fclose($fp2);
    }
    