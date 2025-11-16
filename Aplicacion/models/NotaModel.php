<?php
require_once dirname(__DIR__) . "/config/conexion.php";

class NotaModel {

    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    public function getAll() {
        $sql = "SELECT n.*, 
                       e.nombre AS estudiante_nombre, 
                       e.apellido AS estudiante_apellido,
                       m.nombre AS materia_nombre,
                       i.periodo
                FROM notas n
                JOIN inscripciones i ON n.inscripcion_id = i.id
                JOIN estudiantes e ON i.estudiante_id = e.id
                JOIN materias m ON i.materia_id = m.id
                ORDER BY n.id DESC";

        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT n.*, 
                       e.nombre AS estudiante_nombre, 
                       e.apellido AS estudiante_apellido,
                       m.nombre AS materia_nombre,
                       i.periodo
                FROM notas n
                JOIN inscripciones i ON n.inscripcion_id = i.id
                JOIN estudiantes e ON i.estudiante_id = e.id
                JOIN materias m ON i.materia_id = m.id
                WHERE n.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($inscripcion_id, $tipo, $valor, $peso) {
        $sql = "INSERT INTO notas (inscripcion_id, tipo, valor, peso)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$inscripcion_id, $tipo, $valor, $peso]);
    }

    public function actualizar($id, $inscripcion_id, $tipo, $valor, $peso) {
        $sql = "UPDATE notas
                SET inscripcion_id = ?, tipo = ?, valor = ?, peso = ?
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$inscripcion_id, $tipo, $valor, $peso, $id]);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM notas WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
