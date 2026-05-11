<?php

class Conexion{

    public static function conectar(){

        try{

            $conn = new PDO(
                "mysql:host=127.0.0.1;dbname=biblioteca_mvc",
                "root",
                ""
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        }catch(PDOException $e){

            die("Error de conexión: " . $e->getMessage());

        }
    }
}

?>