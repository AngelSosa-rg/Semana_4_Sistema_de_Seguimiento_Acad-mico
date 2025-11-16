<?php
require_once __DIR__ . "/../models/MateriaModel.php";
require_once __DIR__ . "/../models/DocenteModel.php";

class MateriaController {

    private string $baseUrl = "/Semana_4_Sistema_de_Seguimiento_Académico/Aplicacion/public/index.php";

    public function index($params = []) {
        $modelo = new MateriaModel();
        $materias = $modelo->getAll();
        require __DIR__ . "/../views/materias/index.php";
    }

    public function crear($params = []) {
        $docentes = (new DocenteModel())->getAll();
        require __DIR__ . "/../views/materias/create.php";
    }

    public function guardar($params) {
        $modelo = new MateriaModel();

        $modelo->guardar(
            $params['codigo']      ?? '',
            $params['nombre']      ?? '',
            $params['descripcion'] ?? '',
            $params['docente_id']  ?? null
        );

        header("Location: {$this->baseUrl}?url=materias");
        exit();
    }

    public function editar($params) {
        $modelo   = new MateriaModel();
        $docenteM = new DocenteModel();

        $id = isset($params['id']) ? (int)$params['id'] : 0;
        if ($id <= 0) {
            die("ID de materia inválido");
        }

        $materia  = $modelo->getById($id);
        if (!$materia) {
            die("Materia no encontrada");
        }

        $docentes = $docenteM->getAll();

        require __DIR__ . "/../views/materias/edit.php";
    }

    public function actualizar($params) {
        $modelo = new MateriaModel();

        $modelo->actualizar(
            $params['id'],
            $params['codigo']      ?? '',
            $params['nombre']      ?? '',
            $params['descripcion'] ?? '',
            $params['docente_id']  ?? null
        );

        header("Location: {$this->baseUrl}?url=materias");
        exit();
    }

    public function eliminar($params) {
        $modelo = new MateriaModel();

        $id = isset($params['id']) ? (int)$params['id'] : 0;
        if ($id > 0) {
            $modelo->eliminar($id);
        }

        header("Location: {$this->baseUrl}?url=materias");
        exit();
    }
}
