<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Nuevo Usuario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h1>Nuevo Usuario</h1>

<form method="POST">

    <label>Nombre</label>

    <input type="text"
    name="nombre"
    class="form-control">

    <br>

    <label>DNI</label>

    <input type="text"
    name="dni"
    class="form-control">

    <br>

    <label>Telefono</label>

    <input type="text"
    name="telefono"
    class="form-control">

    <br>

    <button type="submit"
    class="btn btn-success">

        Guardar

    </button>

</form>

</body>

</html>