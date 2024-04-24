<?php

// Validar campos
$autor_valido = preg_match('/^((VARIOS AUTORES)|(AUTORES VARIOS)|([A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+(?:,\s[A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+)+))$/', $_POST['autor']);
$titulo_valido = preg_match('/^[A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+(\s[A-ZÁÉÍÓÚÑÜ][a-záéíóúñü]+)*$/', $_POST['titulo']);
$edicion_valido = preg_match('/^\d+([ªº]|[a-z]+)?$/', $_POST['edicion']);
$lugar_valido = preg_match('/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/', $_POST['lugar']);
$editorial_valida = preg_match('/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/', $_POST['editorial']);
$anio_valido = preg_match('/^\(\d{4}\)$/', $_POST['anio']);
$num_paginas_valido = preg_match('/^\d+$/', $_POST['paginas']);
$notas_valido = preg_match('/^(\s*\S+\s*){1,200}$/', $_POST['notas']);
$isbn_valido = preg_match('/^\d{3}-\d{1}-\d{2}-\d{6}-\d$/', $isbn);

// Crear un array con los mensajes de error
$errores = [];
if (!$autor_valido) $errores['autor'] = 'Formato incorrecto para el autor';
if (!$titulo_valido) $errores['titulo'] = 'Formato incorrecto para el título';
if (!$edicion_valido) $errores['edicion'] = 'Formato incorrecto para el número de edición';
if (!$lugar_valido) $errores['lugar'] = 'Formato incorrecto para el lugar de publicación';
if (!$editorial_valida) $errores['editorial'] = 'Formato incorrecto para la editorial';
if (!$anio_valido) $errores['anio'] = 'Formato incorrecto para el año de edición';
if (!$num_paginas_valido) $errores['paginas'] = 'Formato incorrecto para el número de páginas';
if (!$notas_valido) $errores['notas'] = 'Formato incorrecto para las notas';
if (!$isbn_valido) $errores['isbn'] = 'Formato incorrecto para el ISBN';

// Enviar los errores como respuesta
echo json_encode($errores);

?>