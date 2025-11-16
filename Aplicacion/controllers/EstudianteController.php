<?php
require_once __DIR__ . "/../models/EstudianteModel.php";

class EstudianteController {

    // Ruta al index público
    private string $baseUrl = "/Semana_4_Sistema_de_Seguimiento_Académico/Aplicacion/public/index.php";

    // LISTADO
    public function index($params = []) {
        $modelo = new EstudianteModel();
        $estudiantes = $modelo->getAll();
        require __DIR__ . "/../views/estudiantes/index.php";
    }

    // FORM NUEVO
    public function crear($params = []) {
        require __DIR__ . "/../views/estudiantes/create.php";
    }

    // GUARDAR NUEVO
public function guardar($params) {
    $modelo = new EstudianteModel();

    $resultado = $modelo->guardar(
        $params['codigo']   ?? null,
        $params['nombre']   ?? '',
        $params['apellido'] ?? null,
        $params['email']    ?? ''
    );

    if ($resultado === "duplicado") {
        // Mostrar mensaje y volver al formulario
        $error = "El código ingresado ya existe. Por favor usa uno diferente.";
        require __DIR__ . "/../views/estudiantes/create.php";
        return;
    }

    header("Location: {$this->baseUrl}?url=estudiantes");
    exit();
}

    // FORM EDITAR
    public function editar($params) {
        $modelo = new EstudianteModel();

        // 👇 ahora usamos el id que el router metió en $params['id']
        $id = isset($params['id']) ? (int)$params['id'] : 0;
        if ($id <= 0) {
            die("ID de estudiante inválido");
        }

        $estudiante = $modelo->getById($id);
        if (!$estudiante) {
            die("Estudiante no encontrado");
        }

        require __DIR__ . "/../views/estudiantes/edit.php";
    }

    // ACTUALIZAR REGISTRO
    public function actualizar($params) {
        $modelo = new EstudianteModel();

        $modelo->actualizar(
            $params['id'],
            $params['codigo']   ?? null,
            $params['nombre']   ?? '',
            $params['apellido'] ?? null,
            $params['email']    ?? ''
        );

        header("Location: {$this->baseUrl}?url=estudiantes");
        exit();
    }

    // ELIMINAR
    public function eliminar($params) {
        $modelo = new EstudianteModel();

        $id = isset($params['id']) ? (int)$params['id'] : 0;
        if ($id > 0) {
            $modelo->eliminar($id);
        }

        header("Location: {$this->baseUrl}?url=estudiantes");
        exit();
    }
}
