<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header("Location:login.php");

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 shadow">

        <h1 class="text-center">
            Dashboard
        </h1>

        <h4 class="text-center mb-4">

            Bienvenido <?= $_SESSION['usuario'] ?>

        </h4>

        <div class="d-grid gap-3">

            <a href="index.php" class="btn btn-primary">
                Gestión de Libros
            </a>

            <a href="usuarios.php" class="btn btn-success">
                Gestión de Usuarios
            </a>

            <a href="prestamos.php" class="btn btn-warning">
                Gestión de Prestamos
            </a>

            <a href="logout.php" class="btn btn-danger">
                Cerrar Sesion
            </a>

        </div>

    </div>

</div>

</body>

</html>