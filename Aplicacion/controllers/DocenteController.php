<?php
require_once __DIR__ . "/../models/DocenteModel.php";

class DocenteController {

    public function index() {
        $modelo = new DocenteModel();
        $docentes = $modelo->getAll();

        require __DIR__ . "/../views/docentes/index.php";
    }

    public function crear() {
        require __DIR__ . "/../views/docentes/create.php";
    }

    public function guardar($params) {
        $modelo = new DocenteModel();
        $modelo->guardar(
            $params['nombre'],
            $params['apellido'],
            $params['email']
        );
        
        header("Location: index.php?controller=docente&action=index");
        exit();
    }

    public function editar($params) {
        $modelo = new DocenteModel();
        $docente = $modelo->getById($params['id']);
        
        require __DIR__ . "/../views/docentes/edit.php";
    }

    public function actualizar($params) {
        $modelo = new DocenteModel();
        $modelo->actualizar(
            $params['id'],
            $params['nombre'],
            $params['apellido'],
            $params['email']
        );

        header("Location: index.php?controller=docente&action=index");
        exit();
    }

    public function eliminar($params) {
        $modelo = new DocenteModel();
        $modelo->eliminar($params['id']);

        header("Location: index.php?controller=docente&action=index");
        exit();
    }
}
