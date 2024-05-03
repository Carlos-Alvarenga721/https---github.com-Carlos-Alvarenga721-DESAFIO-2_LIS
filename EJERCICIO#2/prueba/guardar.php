<?php

//Expresiones Regulares
$regex_autor = "/^((VARIOS AUTORES)|(AUTORES VARIOS)|([A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+(?:,\s[A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+)+))$/";

$regex_titulo = "/^[A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+(\s[A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+)*$/";

$regex_num_edicion = "/^\d+(ª|º)+$/";

$regex_lugar_publicacion = "/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/";

$regex_editorial = "/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/";

$regex_anio = "/^\(\d{4}\)$/";

$regex_num_paginas = "/^\d+$/";

$regex_notas = "/^(\s*\S+\s*){1,200}$/";

$regex_isbn = "/^\d{3}-\d{2}-\d{4}-\d{3}-\d$/";


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

    //Manejo de errores
    // Array para almacenar los errores
    $errores = [];

    // Validación de los campos
    if (!preg_match($regex_autor, $autor)) {
        $errores[] = "Formato incorrecto. Ejemplo válido: Apellido1, Nombre1, Apellido2, Nombre2";
    }

    if (!preg_match($regex_titulo, $titulo)) {
        $errores[] = "No se aceptan las comillas en los titulos de libros";
    }

    if (!preg_match($regex_num_edicion, $edicion)) {
        $errores[] = "solo se permiten caraceteres superindices. Ejemplo valido: 1ª o 2º";
    }

    if (!preg_match($regex_lugar_publicacion, $lugar)) {
        $errores[] = "No se aceptan numeros como nombres de lugares";
    }

    if (!preg_match($regex_editorial, $editorial)) {
        $errores[] = "No hay restricciones de formato";
    }

    if (!preg_match($regex_anio, $anio)) {
        $errores[] = "Formato incorrecto. El año debe de ir entre parentesis. Ejemplo válido: (2024)";
    }

    if (!preg_match($regex_num_paginas, $paginas)) {
        $errores[] = "No se aceptan letras ni numeros decimales, solo numeros enteros para el numero de paginas";
    }

    if (!preg_match($regex_notas, $notas)) {
        $errores[] = "No hay restricciones de formato";
    }

    if (!preg_match($regex_isbn, $isbn)) {
        $errores[] = "El formato correcto para el ISBN es (XXX-XX-XXXX-XXX-X), incluyendo el guion de separacion";
    }

    // Si hay errores, redirigir al archivo error.php
    if (!empty($errores)) {
        $_SESSION['errores'] = $errores;
        $_SESSION['form_data'] = $_POST; //guardo los datos en el caso existan errores
        header("Location: error.php");
        exit;

        require 'error.php';
        
        function crear_errores(){

        }
    }
    else{
    $libro = new Libro($autor, $titulo, $edicion, $lugar, $editorial, $anio, $paginas, $notas, $isbn);
    $_SESSION['libros'][] = $libro;
    
    header('Location: mostrar.php');
    }
?>