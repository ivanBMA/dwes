<?php
    class Modulo extends Asignatura{
        private $codigo = null;
        
        
        function __construct($nombre, $numeroCredito,$codigo)
        {
            parent::__construct($nombre,$numeroCredito);
            $this->codigo = $codigo;
        }

        function getcodigo(){
            return $this->codigo;
        }
        function setcodigo($nuevocod){
            $this->codigo = $nuevocod;
        }

        function __toString(){
            return "<br>Datos del modulo " 
            . "<br> nombre asignatura " 
            . $this->getnombre()
            . "<br> numero credito: " . $this->getnumeroCredito()
            . "<br> codigo del modulo: " . $this->codigo;
        }

    }