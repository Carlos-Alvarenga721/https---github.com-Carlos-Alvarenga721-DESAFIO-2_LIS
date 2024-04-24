<?php
class Libro {
    //Propiedades / Fields
    private $autor;
    private $titulo_libro;
    private $num_edicion;
    private $lugar_publicacion;
    private $editorial;
    private $anio;
    private $num_paginas;
    private $notas;
    private $isbn;

    //Constructor
    public function __construct($autor,$titulo_libro,$num_edicion,$lugar_publicacion,$editorial,$anio,$num_paginas,$notas,$isbn)
    {
        $this->autor = $autor;
        $this->titulo_libro = $titulo_libro;
        $this->num_edicion = $num_edicion;
        $this->lugar_publicacion = $lugar_publicacion;
        $this->editorial = $editorial;
        $this->anio = $anio;
        $this->num_paginas = $num_paginas;
        $this->notas = $notas;
        $this->isbn = $isbn;
    }

     //AUTOR
    public function getAutor(){
        return $this->autor;
    }

    //TITULO
    public function getTitulo(){
        return $this->titulo_libro;
    }

    //Numero de Edicion
    public function getNumEdicion(){
        return $this->num_edicion;
    }

    //Lugar de publicacion
    public function getLugar(){
        return $this->lugar_publicacion;
    }

    //Editorial
    public function getEditorial(){
        return $this->editorial;
    }

    //Año de Edicion
    public function getAnio(){
        return $this->anio;
    }

    //Numero de paginas
    public function getNumPaginas(){
        return $this->num_paginas;
    }

    //Notas
    public function getNotas(){
        return $this->notas;
    }

    //ISBN
    public function getIsbn(){
        return $this->isbn;
    }

}

session_start();

if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = [];
}
    //Tomo los datos del formulario
    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $edicion = $_POST["edicion"];
    $lugar = $_POST["lugar"];
    $editorial = $_POST["editorial"];
    $anio = $_POST["anio"];
    $paginas = $_POST["paginas"];
    $notas = $_POST["notas"];
    $isbn = $_POST["isbn"];
    
    $libro = new Libro($autor, $titulo, $edicion, $lugar, $editorial, $anio, $paginas, $notas, $isbn);
    $_SESSION['libros'][] = $libro;
    
    header('Location: mostrar.php');

?>