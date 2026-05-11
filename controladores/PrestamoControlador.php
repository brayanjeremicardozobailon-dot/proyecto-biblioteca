<?php

include_once "modelos/Prestamo.php";

class PrestamoControlador{

    private $modelo;

    public function __construct(){

        $this->modelo = new Prestamo();

    }

    // LISTAR
    public function inicio(){

        $datos = $this->modelo->obtener();

        include_once "vistas/prestamos/index.php";

    }

    // CREAR
    public function crear(){

        if($_POST){

            $usuario_id = $_POST['usuario_id'];
            $libro_id = $_POST['libro_id'];
            $fecha_prestamo = $_POST['fecha_prestamo'];
            $fecha_devolucion = $_POST['fecha_devolucion'];

            $this->modelo->insertar(
                $usuario_id,
                $libro_id,
                $fecha_prestamo,
                $fecha_devolucion
            );

            header("Location:prestamos.php");

        }

        include_once "vistas/prestamos/crear.php";

    }

    // EDITAR
    public function editar(){

        $id = $_GET['id'];

        if($_POST){

            $usuario_id = $_POST['usuario_id'];
            $libro_id = $_POST['libro_id'];
            $fecha_prestamo = $_POST['fecha_prestamo'];
            $fecha_devolucion = $_POST['fecha_devolucion'];

            $this->modelo->actualizar(
                $id,
                $usuario_id,
                $libro_id,
                $fecha_prestamo,
                $fecha_devolucion
            );

            header("Location:prestamos.php");

        }

        $dato = $this->modelo->buscar($id);

        include_once "vistas/prestamos/editar.php";

    }

    // ELIMINAR
    public function eliminar(){

        $id = $_GET['id'];

        $this->modelo->eliminar($id);

        header("Location:prestamos.php");

    }

}

?>