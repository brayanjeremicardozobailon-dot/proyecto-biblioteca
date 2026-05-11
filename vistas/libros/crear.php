<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Nuevo Libro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h1>Nuevo Libro</h1>

<form method="POST">

    <label>Titulo</label>

    <input type="text"
    name="titulo"
    class="form-control">

    <br>

    <label>Autor</label>

    <input type="text"
    name="autor"
    class="form-control">

    <br>

    <label>Categoria</label>

    <input type="text"
    name="categoria"
    class="form-control">

    <br>

    <label>Stock</label>

    <input type="number"
    name="stock"
    class="form-control">

    <br>

    <button type="submit"
    class="btn btn-success">

        Guardar

    </button>

</form>

</body>

</html>