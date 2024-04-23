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
$numStudents = [
    "basic" => [
        "English" => 25,
        "French" => 10,
        "Mandarin" => 8,
        "Russian" => 12,
        "Portuguese" => 30,
        "Japanese" => 90
    ],
    "intermediate" => [
        "English" => 15,
        "French" => 5,
        "Mandarin" => 4,
        "Russian" => 8,
        "Portuguese" => 15,
        "Japanese" => 25
    ],
    "advanced" => [
        "English" => 10,
        "French" => 2,
        "Mandarin" => 1,
        "Russian" => 4,
        "Portuguese" => 10,
        "Japanese" => 67
    ]
]
?>
<table border ='1' class='table table-dark table-hover'>
  <thead>
    <tr>
      <th>Nivel</th>
      <th>Número de Estudiantes de Inglés</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Básico</td>
      <td><?php echo $numStudents['basic']['English']; ?></td>
    </tr>
    <tr>
      <td>Intermedio</td>
      <td><?php echo $numStudents['intermediate']['English']; ?></td>
    </tr>
    <tr>
      <td>Avanzado</td>
      <td><?php echo $numStudents['advanced']['English']; ?></td>
    </tr>
  </tbody>
</table>
<br>
<table border ='1' class='table table-dark table-hover'>
<thead>
    <tr>
      <th>Nivel</th>
      <th>Número de Estudiantes de Francés</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Básico</td>
      <td><?php echo $numStudents['basic']['French']; ?></td>
    </tr>
    <tr>
      <td>Intermedio</td>
      <td><?php echo $numStudents['intermediate']['French']; ?></td>
    </tr>
    <tr>
      <td>Avanzado</td>
      <td><?php echo $numStudents['advanced']['French']; ?></td>
    </tr>
  </tbody>
</table>
<br>
<table border ='1' class='table table-dark table-hover'>
<thead>
    <tr>
      <th>Nivel</th>
      <th>Número de Estudiantes de Mandarin</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Básico</td>
      <td><?php echo $numStudents['basic']['Mandarin']; ?></td>
    </tr>
    <tr>
      <td>Intermedio</td>
      <td><?php echo $numStudents['intermediate']['Mandarin']; ?></td>
    </tr>
    <tr>
      <td>Avanzado</td>
      <td><?php echo $numStudents['advanced']['Mandarin']; ?></td>
    </tr>
  </tbody>
</table>
<br>
<table border ='1' class='table table-dark table-hover'>
<thead>
    <tr>
      <th>Nivel</th>
      <th>Número de Estudiantes de Ruso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Básico</td>
      <td><?php echo $numStudents['basic']['Russian']; ?></td>
    </tr>
    <tr>
      <td>Intermedio</td>
      <td><?php echo $numStudents['intermediate']['Russian']; ?></td>
    </tr>
    <tr>
      <td>Avanzado</td>
      <td><?php echo $numStudents['advanced']['Russian']; ?></td>
    </tr>
  </tbody>
</table>
<br>
<table border ='1' class='table table-dark table-hover'>
<thead>
    <tr>
      <th>Nivel</th>
      <th>Número de Estudiantes de Portugués</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Básico</td>
      <td><?php echo $numStudents['basic']['Portuguese']; ?></td>
    </tr>
    <tr>
      <td>Intermedio</td>
      <td><?php echo $numStudents['intermediate']['Portuguese']; ?></td>
    </tr>
    <tr>
      <td>Avanzado</td>
      <td><?php echo $numStudents['advanced']['Portuguese']; ?></td>
    </tr>
  </tbody>
</table>
<br>
<table border ='1' class='table table-dark table-hover'>
<thead>
    <tr>
      <th>Nivel</th>
      <th>Número de Estudiantes de Japonés</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Básico</td>
      <td><?php echo $numStudents['basic']['Japanese']; ?></td>
    </tr>
    <tr>
      <td>Intermedio</td>
      <td><?php echo $numStudents['intermediate']['Japanese']; ?></td>
    </tr>
    <tr>
      <td>Avanzado</td>
      <td><?php echo $numStudents['advanced']['Japanese']; ?></td>
    </tr>
  </tbody>
</table>
    </body>
    </html>


