<?php
    abstract class Publicacion{
        protected $titulo;
        
        function __construct($nuevotitulo,$nuevocontenido,$nuevafecha,$nuevoautor,$nuevaimagen){
            $this->titulo = $nuevotitulo;
            $this->fecha = $nuevafecha;
            $this->autor = $nuevoautor;
            $this->contenido = $nuevocontenido;
            $this->imagen = $nuevaimagen;
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
        function dameMenu(){
            return '
                <li><a href="?p='.$this->titulo.'">'.$this->titulo.'</a></li>
            ';
        }
    }
    class Entrada extends Publicacion{
        function damePublicacion(){
            return '
                <article>
                    <img src="photo/'.$this->imagen.'">
                    <h3>'.$this->titulo.'</h3>
                    <time>'.$this->fecha.'</time>
                    <p>'.$this->autor.'</p>
                    <p>'.$this->contenido.'</p>
                </article>
                ';
        }
    }
    
?>