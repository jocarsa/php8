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
            if(strlen($nuevotitulo) > 10){
                $this->titulo = $nuevotitulo;
            }else{
                $this->titulo = "error";
            }
        }
        function getTitulo(){
            return $this->titulo;
        }
    }

    $entrada1 = new Entrada();
    $entrada1->setTitulo("Título");
    echo $entrada1->getTitulo();

?>