<?php

include_once "config/conexion.php";

class Prestamo{

    private $db;

    public function __construct(){

        $this->db = Conexion::conectar();

    }

    // LISTAR
    public function obtener(){

        $sql = "SELECT * FROM prestamos";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // INSERTAR
    public function insertar($usuario_id, $libro_id, $fecha_prestamo, $fecha_devolucion){
    
    $sql = "INSERT INTO prestamos(usuario_id, libro_id, fecha_prestamo, fecha_devolucion) 
            VALUES(:usuario_id, :libro_id, :fecha_prestamo, :fecha_devolucion)";
    
    $stmt = $this->db->prepare($sql);
    
    $stmt->bindParam(":usuario_id", $usuario_id);
    $stmt->bindParam(":libro_id", $libro_id);
    $stmt->bindParam(":fecha_prestamo", $fecha_prestamo);
    $stmt->bindParam(":fecha_devolucion", $fecha_devolucion);
    
    return $stmt->execute();
}

    // BUSCAR
    public function buscar($id){

        $sql = "SELECT * FROM prestamos WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

// ACTUALIZAR
public function actualizar($id, $usuario_id, $libro_id, $fecha_prestamo, $fecha_devolucion){
    
    $sql = "UPDATE prestamos 
            SET usuario_id = :usuario_id, 
                libro_id = :libro_id, 
                fecha_prestamo = :fecha_prestamo, 
                fecha_devolucion = :fecha_devolucion 
            WHERE id = :id";
            
    $stmt = $this->db->prepare($sql);
    
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":usuario_id", $usuario_id);
    $stmt->bindParam(":libro_id", $libro_id);
    $stmt->bindParam(":fecha_prestamo", $fecha_prestamo);
    $stmt->bindParam(":fecha_devolucion", $fecha_devolucion);
    
    return $stmt->execute();
}

    // ELIMINAR
    public function eliminar($id){

        $sql = "DELETE FROM prestamos WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

    }

}

?>