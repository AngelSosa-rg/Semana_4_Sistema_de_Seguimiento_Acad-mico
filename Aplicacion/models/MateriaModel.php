<?php
require_once dirname(__DIR__) . "/config/conexion.php";

class MateriaModel {

    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function getAll() {
        $sql = "SELECT m.*, d.nombre AS docente_nombre, d.apellido AS docente_apellido
                FROM materias m
                LEFT JOIN docentes d ON m.docente_id = d.id
                ORDER BY m.id DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT m.*, d.nombre AS docente_nombre, d.apellido AS docente_apellido
                FROM materias m
                LEFT JOIN docentes d ON m.docente_id = d.id
                WHERE m.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($codigo, $nombre, $descripcion, $docente_id) {
        $sql = "INSERT INTO materias (codigo, nombre, descripcion, docente_id)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$codigo, $nombre, $descripcion, $docente_id]);
    }

    public function actualizar($id, $codigo, $nombre, $descripcion, $docente_id) {
        $sql = "UPDATE materias
                SET codigo = ?, nombre = ?, descripcion = ?, docente_id = ?
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$codigo, $nombre, $descripcion, $docente_id, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM materias WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
