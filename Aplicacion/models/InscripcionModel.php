<?php
require_once dirname(__DIR__) . "/config/conexion.php";

class InscripcionModel {

    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function getAll() {
        $sql = "SELECT i.*,
                       e.nombre AS estudiante_nombre,
                       e.apellido AS estudiante_apellido,
                       m.nombre AS materia_nombre
                FROM inscripciones i
                JOIN estudiantes e ON i.estudiante_id = e.id
                JOIN materias m ON i.materia_id = m.id
                ORDER BY i.id DESC";

        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT i.*,
                       e.nombre AS estudiante_nombre,
                       e.apellido AS estudiante_apellido,
                       m.nombre AS materia_nombre
                FROM inscripciones i
                JOIN estudiantes e ON i.estudiante_id = e.id
                JOIN materias m ON i.materia_id = m.id
                WHERE i.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($estudiante_id, $materia_id, $periodo) {
        $sql = "INSERT INTO inscripciones (estudiante_id, materia_id, periodo)
                VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$estudiante_id, $materia_id, $periodo]);
    }

    public function actualizar($id, $estudiante_id, $materia_id, $periodo) {
        $sql = "UPDATE inscripciones
                SET estudiante_id = ?, materia_id = ?, periodo = ?
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$estudiante_id, $materia_id, $periodo, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM inscripciones WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
