<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Usuarios</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h1>Lista de Usuarios</h1>

<a href="usuarios.php?action=crear"
class="btn btn-primary mb-3">

    Nuevo Usuario

</a>

<table class="table table-bordered table-hover">

<tr>

    <th>ID</th>
    <th>Nombre</th>
    <th>DNI</th>
    <th>Telefono</th>
    <th>Acciones</th>

</tr>

<?php foreach($datos as $d){ ?>

<tr>

    <td><?= $d['id'] ?></td>
    <td><?= $d['nombre'] ?></td>
    <td><?= $d['dni'] ?></td>
    <td><?= $d['telefono'] ?></td>

    <td>

        <a href="usuarios.php?action=editar&id=<?= $d['id'] ?>"
        class="btn btn-warning btn-sm">

            Editar

        </a>

        <a href="usuarios.php?action=eliminar&id=<?= $d['id'] ?>"
        class="btn btn-danger btn-sm">

            Eliminar

        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>

</html>