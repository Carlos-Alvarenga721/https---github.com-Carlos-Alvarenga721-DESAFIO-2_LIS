<?php

class Libros{

    //Propiedades / Fields
    private $autor;
    private $titulo_libro;
    private $num_edicion;
    private $lugar_publicacion;
    private $editorial;
    private $num_paginas;
    private $notas;
    private $isbn;
    private $cantidad;

    //Constructor
    public function __construct($autor,$titulo_libro,$num_edicion,$lugar_publicacion,$editorial,$num_paginas,$notas,$isbn,$cantidad)
    {
        $this->autor = $autor;
    }

    //Getter and Setter methods

    //AUTOR
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    //TITULO
    public function getTitulo(){
        return $this->titulo_libro;
    }
    public function setAutor1($titulo_libro){
        $this->autor = $titulo_libro;
    }
    //Numero de Edicion
    public function getNumEdicion(){
        return $this->num_edicion;
    }
    public function setNumEdicion($num_edicion){
        $this->autor = $num_edicion;
    }

}