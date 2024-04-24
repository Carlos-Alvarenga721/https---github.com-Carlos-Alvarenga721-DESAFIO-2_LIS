<?php
session_start();

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
    //CREACION DEL DOCUMENTO HTML A IMPRIMIR
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>Mostrar Libros</title>';
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">';
    echo '<style>';
    echo '.table-container {';
    echo '    margin: 20px;';
    echo '}';
    echo '.table thead th {';
    echo '    background-color: #007bff;';
    echo '    color: white;';
    echo '}';
    echo '.table tbody td:not(:first-child), .table tbody td:nth-child(2) {';
    echo '    color: white;';
    echo '}';
    echo '.autor {';
    echo '    color: white;';
    echo '}';
    echo '</style>';
    echo '</head>';
    echo '<body class="bg-info text-warning">';
    echo '<div class="container mt-5 table-container">';
    echo '<h2 class="mt-5 mb-5 text-warning text-center">Lista de Libros <i class="bi bi-book"></i></h2>';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Autor</th>';
    echo '<th>Título</th>';
    echo '<th>Edición</th>';
    echo '<th>Lugar de Publicación</th>';
    echo '<th>Editorial</th>';
    echo '<th>Año de Edición</th>';
    echo '<th>Número de Páginas</th>';
    echo '<th>Notas</th>';
    echo '<th>ISBN</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    if (isset($_SESSION['libros'])) {
        foreach ($_SESSION['libros'] as $libro) {
            echo '<tr>';
            echo '<td class="autor">' . $libro->getAutor() . '</td>';
            echo '<td>' . $libro->getTitulo() . '</td>';
            echo '<td>' . $libro->getNumEdicion() . '</td>';
            echo '<td>' . $libro->getLugar() . '</td>';
            echo '<td>' . $libro->getEditorial() . '</td>';
            echo '<td>' . $libro->getAnio() . '</td>';
            echo '<td>' . $libro->getNumPaginas() . '</td>';
            echo '<td>' . $libro->getNotas() . '</td>';
            echo '<td>' . $libro->getIsbn() . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="9">No hay libros ingresados.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '<div class="text-center"><button type="submit" class="btn btn-warning" onclick="window.location.href = \'index.php\';">Redirigir al Index</button></div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';

    
?>


