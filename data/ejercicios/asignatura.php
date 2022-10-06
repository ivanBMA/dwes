<?php
/*

    Conceptos Generales:
        -sobreescritura (metodos)
        -> mismo nombre con mismo numero de parametros
        -> Clase figura -> metodo calcular_area
        -> Clase circulo -< metodo calcular area
        -> clase cuadrado -> metodo calcular_area

        -Sobrecargar (metodos)
        -> mismo metodo con diferentes numeros de parametros

        -sobre cargar (constructor)
            -Diferentes constructores con el mismo nombre con deif paramentos.

        -poliformismos
        -> un objeto que se comporta como otro.
            -casting
            -sobreescritura
            -SobreCarga
            -LigaduraDinamica

    PHP:
        -SobreEscritura:SI
        -Polimorfismo:Si

        -SobreCarga:No
        -SobreCarga-Constructores:No
        -Public, private ,protected, por defecto (PUBLIC)

    NOTACION:
        -Nombre clases:UpperCamelCase (PascalCase)
        -nombre metodos: lowerCamelCase
        java: this.attr
        php: $this->attr
        

*/

class Asignatura{
    private $nombre = null;
    private $numeroCredito = null;
    private static $ciclo = null;

    public function __construct($nombre, $numeroCredito)
    {
        $this->nombre = $nombre;
        $this->numeroCredito = $numeroCredito;
       
        
    }


    function getnombre(){
        return $this->nombre;
    }

    function setnombre($nombre){
        $this->nombre = $nombre;

    }

    function getnumeroCredito(){
        return $this->numeroCredito;
    }

    function setnumeroCredito($numeroCredito){
        $this->numeroCredito = $numeroCredito;

    }

    static function getciclo(){
        return self::$ciclo;
    }

    static function setciclo($nomciclo){
        self::$ciclo = $nomciclo;

    }

    function __toString(){
        return "<br>Datos de la asignatura " 
        . "<br> nombre asignatura" 
        . $this->nombre
        . "<br> numero credito: " . $this->numeroCredito;
    }

}
