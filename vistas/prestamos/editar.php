<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Editar Prestamo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h1>Editar Prestamo</h1>

<form method="POST">

    <label>ID Usuario</label>

    <input type="number"
    name="usuario_id"
    value="<?= $dato['usuario_id'] ?>"
    class="form-control">

    <br>

    <label>ID Libro</label>

    <input type="number"
    name="libro_id"
    value="<?= $dato['libro_id'] ?>"
    class="form-control">

    <br>

    <label>Fecha Prestamo</label>

    <input type="datetime-local"
    name="fecha_prestamo"
    value="<?= $dato['fecha_prestamo'] ?>"
    class="form-control">

    <br>

    <label>Fecha Devolucion</label>

    <input type="datetime-local"
    name="fecha_devolucion"
    value="<?= $dato['fecha_devolucion'] ?>"
    class="form-control">

    <br>

    <button type="submit"
    class="btn btn-warning">

        Actualizar

    </button>

</form>

</body>

</html>