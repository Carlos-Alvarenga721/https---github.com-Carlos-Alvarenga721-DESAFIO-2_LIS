
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

<style>
    *{
        background-color: black !important;
    }
</style>
</head>
<body class="bg-success">
    <h1 class="fs-1 text-warning">Errores encontrados:</h1>
    <ul>
        <?php
        session_start();

        if (isset($_SESSION['errores'])) {
            $errores = $_SESSION['errores'];
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            // Limpiar los errores después de mostrarlos
            unset($_SESSION['errores']);
        } else {
            echo "<li>No se encontraron errores.</li>";
        }
        ?>
    </ul>
    <p><a href="index.php">Volver al formulario</a></p>
</body>
</html>
