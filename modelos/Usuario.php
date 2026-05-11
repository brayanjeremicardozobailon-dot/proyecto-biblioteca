<?php

include_once "config/conexion.php";

class Usuario{

    private $db;

    public function __construct(){

        $this->db = Conexion::conectar();

    }

    // LISTAR
    public function obtener(){

        $sql = "SELECT * FROM usuarios";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // INSERTAR
    public function insertar($nombre, $dni, $telefono){

        $sql = "INSERT INTO usuarios(nombre, dni, telefono)
                VALUES(:nombre, :dni, :telefono)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":dni", $dni);
        $stmt->bindParam(":telefono", $telefono);

        $stmt->execute();

    }

    // BUSCAR
    public function buscar($id){

        $sql = "SELECT * FROM usuarios WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    // ACTUALIZAR
    public function actualizar($id, $nombre, $dni, $telefono){

        $sql = "UPDATE usuarios
                SET nombre = :nombre,
                    dni = :dni,
                    telefono = :telefono
                WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":dni", $dni);
        $stmt->bindParam(":telefono", $telefono);

        $stmt->execute();

    }

    // ELIMINAR
    public function eliminar($id){

        $sql = "DELETE FROM usuarios WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

    }

}

?>