<?php
require_once dirname(__DIR__) . "/config/conexion.php";

class EstudianteModel {

    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function getAll() {
        $sql = "SELECT * FROM estudiantes ORDER BY id DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM estudiantes WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

public function guardar($codigo, $nombre, $apellido, $email) {
    $sql = "INSERT INTO estudiantes (codigo, nombre, apellido, email)
            VALUES (?, ?, ?, ?)";
    $stmt = $this->db->prepare($sql);

    try {
        return $stmt->execute([$codigo, $nombre, $apellido, $email]);
    } catch (PDOException $e) {
        // Error 23000 = duplicado o violación de llave única
        if ($e->getCode() === "23000") {
            return "duplicado";
        }
        throw $e; // otros errores sí deben lanzarse
    }
}

    public function actualizar($id, $codigo, $nombre, $apellido, $email) {
        $sql = "UPDATE estudiantes
                SET codigo = ?, nombre = ?, apellido = ?, email = ?
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$codigo, $nombre, $apellido, $email, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM estudiantes WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
