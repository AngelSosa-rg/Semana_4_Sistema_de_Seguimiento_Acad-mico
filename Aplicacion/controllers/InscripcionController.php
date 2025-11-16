<?php
require_once __DIR__ . "/../models/InscripcionModel.php";
require_once __DIR__ . "/../models/EstudianteModel.php";
require_once __DIR__ . "/../models/MateriaModel.php";

class InscripcionController {

    private string $baseUrl = "/Semana_4_Sistema_de_Seguimiento_Académico/Aplicacion/public/index.php";

    public function index($params = []) {
        $modelo = new InscripcionModel();
        $inscripciones = $modelo->getAll();
        require __DIR__ . "/../views/inscripciones/index.php";
    }

    public function crear($params = []) {
        $estudiantes = (new EstudianteModel())->getAll();
        $materias    = (new MateriaModel())->getAll();
        require __DIR__ . "/../views/inscripciones/create.php";
    }

    public function guardar($params) {
        $modelo = new InscripcionModel();

        $modelo->guardar(
            $params['estudiante_id'],
            $params['materia_id'],
            $params['periodo'] ?? ''
        );

        header("Location: {$this->baseUrl}?url=inscripciones");
        exit();
    }

    public function editar($params) {
        $modeloIns = new InscripcionModel();
        $modeloEst = new EstudianteModel();
        $modeloMat = new MateriaModel();

        $id = isset($params['id']) ? (int)$params['id'] : 0;
        if ($id <= 0) {
            die("ID de inscripción inválido");
        }

        $inscripcion = $modeloIns->getById($id);
        if (!$inscripcion) {
            die("Inscripción no encontrada");
        }

        $estudiantes = $modeloEst->getAll();
        $materias    = $modeloMat->getAll();

        require __DIR__ . "/../views/inscripciones/edit.php";
    }

    public function actualizar($params) {
        $modelo = new InscripcionModel();

        $modelo->actualizar(
            $params['id'],
            $params['estudiante_id'],
            $params['materia_id'],
            $params['periodo'] ?? ''
        );

        header("Location: {$this->baseUrl}?url=inscripciones");
        exit();
    }

    public function eliminar($params) {
        $modelo = new InscripcionModel();
        $modelo->eliminar($params['id']);
        header("Location: {$this->baseUrl}?url=inscripciones");
        exit();
    }
}
