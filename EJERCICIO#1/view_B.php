<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Matriz</title>
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
        $matriz = array(
    array(25, 10, 8, 12, 30, 90), // Nivel básico
    array(15, 5, 4, 8, 15, 25), // Nivel intermedio
    array(10, 2, 1, 4, 10, 67) // Nivel avanzado
);


        echo "<table border ='1' class='table table-dark table-hover'>";
        echo "<tr><th>Nivel de Estudiantes</th>";
        echo "<th>Inglés</th>";
        echo "</tr>";
        echo "<tr><td>Básico</td>";
        echo "<td>" . $matriz[0][0] . "</td>";
        echo "</tr>";
        echo "<tr><td>Intermedio</td>";
        echo "<td>" . $matriz[1][0] . "</td>";
        echo "</tr>";
        echo "<tr><td>Avanzado</td>";
        echo "<td>" . $matriz[2][0] . "</td>";
        echo "</tr>";
        echo "</table>";

        echo "<br>";

        echo "<table border ='1' class='table table-dark table-hover'>";
        echo "<tr><th>Nivel de Estudiantes</th>";
        echo "<th>Francés</th>";
        echo "</tr>";
        echo "<tr><td>Básico</td>";
        echo "<td>" . $matriz[0][1] . "</td>";
        echo "</tr>";
        echo "<tr><td>Intermedio</td>";
        echo "<td>" . $matriz[1][1] . "</td>";
        echo "</tr>";
        echo "<tr><td>Avanzado</td>";
        echo "<td>" . $matriz[2][1] . "</td>";
        echo "</tr>";
        echo "</table>";

        echo "<br>";

        echo "<table border ='1' class='table table-dark table-hover'>";
        echo "<tr><th>Nivel de Estudiantes</th>";
        echo "<th>Mandarin</th>";
        echo "</tr>";
        echo "<tr><td>Básico</td>";
        echo "<td>" . $matriz[0][2] . "</td>";
        echo "</tr>";
        echo "<tr><td>Intermedio</td>";
        echo "<td>" . $matriz[1][2] . "</td>";
        echo "</tr>";
        echo "<tr><td>Avanzado</td>";
        echo "<td>" . $matriz[2][2] . "</td>";
        echo "</tr>";
        echo "</table>";

        echo "<br>";

        
        echo "<table border ='1' class='table table-dark table-hover'>";
        echo "<tr><th>Nivel de Estudiantes</th>";
        echo "<th>Ruso</th>";
        echo "</tr>";
        echo "<tr><td>Básico</td>";
        echo "<td>" . $matriz[0][3] . "</td>";
        echo "</tr>";
        echo "<tr><td>Intermedio</td>";
        echo "<td>" . $matriz[1][3] . "</td>";
        echo "</tr>";
        echo "<tr><td>Avanzado</td>";
        echo "<td>" . $matriz[2][3] . "</td>";
        echo "</tr>";
        echo "</table>";

        echo "<br>";

        echo "<table border ='1' class='table table-dark table-hover'>";
        echo "<tr><th>Nivel de Estudiantes</th>";
        echo "<th>Portugues</th>";
        echo "</tr>";
        echo "<tr><td>Básico</td>";
        echo "<td>" . $matriz[0][4] . "</td>";
        echo "</tr>";
        echo "<tr><td>Intermedio</td>";
        echo "<td>" . $matriz[1][4] . "</td>";
        echo "</tr>";
        echo "<tr><td>Avanzado</td>";
        echo "<td>" . $matriz[2][4] . "</td>";
        echo "</tr>";
        echo "</table>";

        echo "<br>";

        echo "<table border ='1' class='table table-dark table-hover'>";
        echo "<tr><th>Nivel de Estudiantes</th>";
        echo "<th>Japones</th>";
        echo "</tr>";
        echo "<tr><td>Básico</td>";
        echo "<td>" . $matriz[0][5] . "</td>";
        echo "</tr>";
        echo "<tr><td>Intermedio</td>";
        echo "<td>" . $matriz[1][5] . "</td>";
        echo "</tr>";
        echo "<tr><td>Avanzado</td>";
        echo "<td>" . $matriz[2][5] . "</td>";
        echo "</tr>";
        echo "</table>";

        echo "<br>";
        ?>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    
