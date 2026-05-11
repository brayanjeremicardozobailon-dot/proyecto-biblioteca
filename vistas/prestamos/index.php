<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Prestamos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h1>Lista de Prestamos</h1>

<a href="prestamos.php?action=crear"
class="btn btn-primary mb-3">

    Nuevo Prestamo

</a>

<table class="table table-bordered table-hover">

<tr>

    <th>ID</th>
    <th>Usuario</th>
    <th>Libro</th>
    <th>Fecha Prestamo</th>
    <th>Fecha Devolucion</th>
    <th>Acciones</th>

</tr>

<?php foreach($datos as $d){ ?>

<tr>

    <td><?= $d['id'] ?></td>
    <td><?= $d['usuario_id'] ?></td>
    <td><?= $d['libro_id'] ?></td>
    <td><?= $d['fecha_prestamo'] ?></td>
    <td><?= $d['fecha_devolucion'] ?></td>

    <td>

        <a href="prestamos.php?action=editar&id=<?= $d['id'] ?>"
        class="btn btn-warning btn-sm">

            Editar

        </a>

        <a href="prestamos.php?action=eliminar&id=<?= $d['id'] ?>"
        class="btn btn-danger btn-sm">

            Eliminar

        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>

</html>