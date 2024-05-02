<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblioteca</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-dark text-warning">
<div class="container bg-secondary rounded">
    <h1 class="mt-5 mb-5 text-warning text-center">Ingreso de libros <i class="bi bi-book"></i></h1> 
    <form action="guardar.php" method="post" id="formulario">
        <div class="mb-3">
            <label for="autor" class="form-label">Autor del libro</label>
            <input type="text" class="form-control" id="autor" name="autor" value="<?= isset($_POST['autor']) ? htmlspecialchars($_POST['autor']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo del libro</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="edicion" class="form-label">Numero de edicion</label>
            <input type="text" class="form-control" id="edicion" name="edicion" value="<?= isset($_POST['edicion']) ? htmlspecialchars($_POST['edicion']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="lugar" class="form-label">Lugar de publicacion</label>
            <input type="text" class="form-control" id="lugar" name="lugar" value="<?= isset($_POST['lugar']) ? htmlspecialchars($_POST['lugar']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial" value="<?= isset($_POST['editorial']) ? htmlspecialchars($_POST['editorial']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año de Edicion</label>
            <input type="text" class="form-control" id="anio" name="anio" value="<?= isset($_POST['anio']) ? htmlspecialchars($_POST['anio']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="paginas" class="form-label">Numero de paginas</label>
            <input type="text" class="form-control" id="paginas" name="paginas" value="<?= isset($_POST['paginas']) ? htmlspecialchars($_POST['paginas']) : '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="notas" class="form-label">Notas</label>
            <textarea class="form-control" id="notas" name="notas" rows="3" value="<?= isset($_POST['notas']) ? htmlspecialchars($_POST['notas']) : '' ?>" required></textarea>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="<?= isset($_POST['isbn']) ? htmlspecialchars($_POST['isbn']) : '' ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar Libro</button>   
    </form>
</div>
</body>
</html>
