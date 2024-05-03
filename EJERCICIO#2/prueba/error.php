
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error en los datos ingresados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-dark d-flex justify-content-center align-items-center">
    <div class="container bg-secondary rounded p-5 text-center danger-emphasis">
    <h1 class="text-warning">Error en los datos ingresados</h1>

    <img src="https://img.freepik.com/vector-premium/libro-dibujos-animados-triste-educacion-icono-ilustracion-vectorial_444196-760.jpg" alt="Libro" class="mt-3">

    <h4 class="text-warning">Aqui te muestro alguno de los errores que cometiste:</h4>;

    <ul>
        <?php
        session_start();

        if (isset($_SESSION['errores'])) {
            $errores = $_SESSION['errores'];
            
            foreach ($errores as $error) {
                echo '<li><h5 class="text-info">$error<h5></li>';
            }
           
            // Limpiar los errores después de mostrarlos
            unset($_SESSION['errores']);
        } else {
            echo '<li>No se encontraron errores.</li>';
        }
        ?>
    </ul>
    <!--<p><a href="index.php">Volver al formulario</a></p>-->   
    <?php   
    echo '<div class="text-center"><button type="submit" class="btn btn-warning" onclick="window.location.href = \'index.php\';">Redirigir al Index</button></div>'
    ?> 
    </div>
</body>
</html>
