<?php
require_once __DIR__ . "/../models/NotaModel.php";
require_once __DIR__ . "/../models/InscripcionModel.php";

class NotaController {

    private string $baseUrl = "/Semana_4_Sistema_de_Seguimiento_Académico/Aplicacion/public/index.php";

    public function index($params = []) {
        $modelo = new NotaModel();
        $notas  = $modelo->getAll();
        require __DIR__ . "/../views/notas/index.php";
    }

    public function crear($params = []) {
        $inscripciones = (new InscripcionModel())->getAll();
        require __DIR__ . "/../views/notas/create.php";
    }

    public function guardar($params) {
        $modelo = new NotaModel();

        $modelo->guardar(
            $params['inscripcion_id'],
            $params['tipo'],
            $params['valor'],
            $params['peso']
        );

        header("Location: {$this->baseUrl}?url=notas");
        exit();
    }

    public function editar($params) {
        $modeloNotas = new NotaModel();
        $modeloIns   = new InscripcionModel();

        $id = isset($params['id']) ? (int)$params['id'] : 0;
        if ($id <= 0) {
            die("ID de nota inválido");
        }

        $nota         = $modeloNotas->getById($id);
        if (!$nota) {
            die("Nota no encontrada");
        }

        $inscripciones = $modeloIns->getAll();

        require __DIR__ . "/../views/notas/edit.php";
    }

    public function actualizar($params) {
        $modelo = new NotaModel();

        $modelo->actualizar(
            $params['id'],
            $params['inscripcion_id'],
            $params['tipo'],
            $params['valor'],
            $params['peso']
        );

        header("Location: {$this->baseUrl}?url=notas");
        exit();
    }

    public function eliminar($params) {
        $modelo = new NotaModel();
        $modelo->eliminar($params['id']);
        header("Location: {$this->baseUrl}?url=notas");
        exit();
    }
}
