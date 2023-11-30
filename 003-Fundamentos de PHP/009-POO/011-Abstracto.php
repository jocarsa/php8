<?php
    abstract class Publicacion{
        private $titulo;
        
        function __construct($nuevotitulo,$nuevocontenido){
            $this->titulo = $nuevotitulo;
            $this->fecha = "";
            $this->autor = "";
            $this->contenido = $nuevocontenido;
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
    class Pagina extends Publicacion{
        
    }
    class Entrada extends Publicacion{
        
    }

    $entrada1 = new Entrada("Título de la entrada","Contenido de la entrada");
    
    

?>