<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Libros</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h1>Lista de Libros</h1>

<a href="index.php?action=crear"
class="btn btn-primary mb-3">

    Nuevo Libro

</a>

<table class="table table-bordered table-hover">

<tr>

    <th>ID</th>
    <th>Titulo</th>
    <th>Autor</th>
    <th>Categoria</th>
    <th>Stock</th>
    <th>Acciones</th>

</tr>

<?php foreach($datos as $d){ ?>

<tr>

    <td><?= $d['id'] ?></td>
    <td><?= $d['titulo'] ?></td>
    <td><?= $d['autor'] ?></td>
    <td><?= $d['categoria'] ?></td>
    <td><?= $d['stock'] ?></td>

    <td>

        <a href="index.php?action=editar&id=<?= $d['id'] ?>"
        class="btn btn-warning btn-sm">

            Editar

        </a>

        <a href="index.php?action=eliminar&id=<?= $d['id'] ?>"
        class="btn btn-danger btn-sm">

            Eliminar

        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>

</html>