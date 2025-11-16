<?php
require_once BASE_PATH . "/config/conexion.php";
require_once dirname(__DIR__) . "/config/conexion.php";

class DocenteModel {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function getAll() {
        $sql = "SELECT * FROM docentes ORDER BY id DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM docentes WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $apellido, $email) {
        $sql = "INSERT INTO docentes (nombre, apellido, email) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $apellido, $email]);
    }

    public function actualizar($id, $nombre, $apellido, $email) {
        $sql = "UPDATE docentes SET nombre = ?, apellido = ?, email = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $apellido, $email, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM docentes WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
