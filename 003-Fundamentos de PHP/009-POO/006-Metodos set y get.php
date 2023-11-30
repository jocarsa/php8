<?php

    class Entrada{
        private $titulo;
        
        function __construct(){
            $this->titulo = "";
            $this->fecha = "";
            $this->autor = "";
            $this->contenido = "";
            $this->imagen = "";
        }
        function setTitulo($nuevotitulo){
            $this->titulo = $nuevotitulo;
        }
        function getTitulo(){
            return $this->titulo;
        }
    }

    $entrada1 = new Entrada();
    $entrada1->setTitulo("Título de la primera entrada");
    echo $entrada1->getTitulo();

?>