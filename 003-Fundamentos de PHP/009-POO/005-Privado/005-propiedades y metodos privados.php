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
        
    }

    $entrada1 = new Entrada();
    $entrada1->titulo = "Título de la primera entrada";
    echo $entrada1->titulo;

?>