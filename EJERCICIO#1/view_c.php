
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Número de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color :  black;
        }
    </style>
</head>
<body>
<h1 style ="color : white" class="display-1">Academia de Idiomas</h1>
<?php
$academy = [
    "basico" => [
        "ingles" => 25,
        "frances" => 10,
        "mandarin" => 8,
        "ruso" => 12,
        "portugues" => 30,
        "japones" => 90
    ],
    "intermedio" => [
        "ingles" => 30,
        "frances" => 15,
        "mandarin" => 90,
        "ruso" => 25,
        "portugues" => 15,
        "japones" => 25
    ],
    "avanzado" => [
        "ingles" => 10,
        "frances" => 2,
        "mandarin" => 1,
        "ruso" => 4,
        "portugues" => 10,
        "japones" => 67
    ]
];
    
$idiomas = ["ingles", "frances", "mandarin", "ruso", "portugues", "japones"];

foreach ($idiomas as $idioma) {
    
    echo "<table border ='10' class='table table-dark table-hover'>";
    echo '<tr><th colspan="3">' . ucfirst($idioma) . '</th></tr>';
    echo '<tr><th>Nivel</th><th>Número de alumnos</th></tr>';
    

    foreach ($academy as $nivel => $datos) {
        if (array_key_exists($idioma, $datos)) {
            echo '<tr><td>' . ucfirst($nivel) . '</td><td>' . $datos[$idioma] . '</td></tr>';
        }
    }

    echo '</table>';
    echo '<br>';
}
    
?>

    </body>
    </html>
    

