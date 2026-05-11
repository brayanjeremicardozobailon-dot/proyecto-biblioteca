<?php

session_start();

include_once "config/conexion.php";

$error = "";

if($_POST){

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $conn = Conexion::conectar();

    $sql = "SELECT * FROM usuarios_sistema
            WHERE usuario = :usuario
            AND password = :password";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":password", $password);

    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if($resultado){

        $_SESSION['usuario'] = $resultado['usuario'];

        header("Location:dashboard.php");

    }else{

        $error = "Usuario o contraseña incorrectos";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card mt-5 p-4 shadow">

                <h2 class="text-center mb-4">
                    Iniciar Sesión
                </h2>

                <form method="POST">

                    <label>Usuario</label>

                    <input
                    type="text"
                    name="usuario"
                    class="form-control">

                    <br>

                    <label>Contraseña</label>

                    <input
                    type="password"
                    name="password"
                    class="form-control">

                    <br>

                    <button
                    type="submit"
                    class="btn btn-primary w-100">

                        Ingresar

                    </button>

                </form>

                <br>

                <div class="text-danger text-center">

                    <?= $error ?>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>