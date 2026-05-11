<?php

include_once "modelos/Libro.php";

class LibroControlador{

    private $modelo;

    public function __construct(){

        $this->modelo = new Libro();

    }

    // LISTAR
    public function inicio(){

        $datos = $this->modelo->obtener();

        include_once "vistas/libros/index.php";

    }

    // CREAR
    public function crear(){

        if($_POST){

            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $categoria = $_POST['categoria'];
            $stock = $_POST['stock'];

            $this->modelo->insertar($titulo, $autor, $categoria, $stock);

            header("Location:index.php");

        }

        include_once "vistas/libros/crear.php";

    }

    // EDITAR
    public function editar(){

        $id = $_GET['id'];

        if($_POST){

            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $categoria = $_POST['categoria'];
            $stock = $_POST['stock'];

            $this->modelo->actualizar($id, $titulo, $autor, $categoria, $stock);

            header("Location:index.php");

        }

        $dato = $this->modelo->buscar($id);

        include_once "vistas/libros/editar.php";

    }

    // ELIMINAR
    public function eliminar(){

        $id = $_GET['id'];

        $this->modelo->eliminar($id);

        header("Location:index.php");

    }

}

?>