<?php

include_once "config/conexion.php";

class Libro{

    private $db;

    public function __construct(){

        $this->db = Conexion::conectar();

    }

    // LISTAR
    public function obtener(){

        $sql = "SELECT * FROM libros";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // INSERTAR
    public function insertar($titulo, $autor, $categoria, $stock){

        $sql = "INSERT INTO libros(titulo, autor, categoria, stock)
                VALUES(:titulo, :autor, :categoria, :stock)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":stock", $stock);

        $stmt->execute();

    }

    // BUSCAR POR ID
    public function buscar($id){

        $sql = "SELECT * FROM libros WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    // ACTUALIZAR
    public function actualizar($id, $titulo, $autor, $categoria, $stock){

        $sql = "UPDATE libros
                SET titulo = :titulo,
                    autor = :autor,
                    categoria = :categoria,
                    stock = :stock
                WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":stock", $stock);

        $stmt->execute();

    }

    // ELIMINAR
    public function eliminar($id){

        $sql = "DELETE FROM libros WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

    }

}

?>