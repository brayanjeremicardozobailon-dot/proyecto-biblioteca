<?php

include_once "modelos/Usuario.php";

class UsuarioControlador{

    private $modelo;

    public function __construct(){

        $this->modelo = new Usuario();

    }

    // LISTAR
    public function inicio(){

        $datos = $this->modelo->obtener();

        include_once "vistas/usuarios/index.php";

    }

    // CREAR
    public function crear(){

        if($_POST){

            $nombre = $_POST['nombre'];
            $dni = $_POST['dni'];
            $telefono = $_POST['telefono'];

            $this->modelo->insertar($nombre, $dni, $telefono);

            header("Location:usuarios.php");

        }

        include_once "vistas/usuarios/crear.php";

    }

    // EDITAR
    public function editar(){

        $id = $_GET['id'];

        if($_POST){

            $nombre = $_POST['nombre'];
            $dni = $_POST['dni'];
            $telefono = $_POST['telefono'];

            $this->modelo->actualizar($id, $nombre, $dni, $telefono);

            header("Location:usuarios.php");

        }

        $dato = $this->modelo->buscar($id);

        include_once "vistas/usuarios/editar.php";

    }

    // ELIMINAR
    public function eliminar(){

        $id = $_GET['id'];

        $this->modelo->eliminar($id);

        header("Location:usuarios.php");

    }

}

?>