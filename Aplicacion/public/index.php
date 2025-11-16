<?php
define('BASE_PATH', dirname(__DIR__));

// Activar errores (solo desarrollo)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Cargar conexión
require_once "../config/conexion.php";

// Cargar controladores
require_once "../controllers/EstudianteController.php";
require_once "../controllers/MateriaController.php";
require_once "../controllers/NotaController.php";
require_once "../controllers/InscripcionController.php";
require_once "../controllers/DocenteController.php";

// Obtener URL
$url = isset($_GET['url']) ? $_GET['url'] : "";

// Separar controlador/método
$partes = explode("/", $url);

// Nombre "crudo" del controlador desde la URL (plural)
$rawControlador = !empty($partes[0]) ? $partes[0] : "estudiantes";
$metodo         = isset($partes[1]) ? $partes[1] : "index";

// Normalizar nombre de controlador (singular)
if ($rawControlador === 'inscripciones') {
    // caso especial: inscripciones -> inscripcion
    $controlador = 'inscripcion';
} else {
    // para estudiantes, materias, notas, docentes
    $controlador = rtrim($rawControlador, 's');
}

// Parámetros (GET + POST)
$params = array_merge($_GET, $_POST);

// Si hay un tercer segmento en la URL, lo tratamos como ID
// ejemplo: inscripciones/editar/3  ->  id = 3
if (isset($partes[2]) && $partes[2] !== '') {
    $params['id'] = $partes[2];
}

// Nombre de la clase de controlador
$nombreControlador = ucwords($controlador) . "Controller";

// Verificar si existe el controlador
if (!file_exists("../controllers/" . $nombreControlador . ".php")) {
    echo "Controlador no encontrado";
    exit;
}

// Instanciar controlador
$controladorObj = new $nombreControlador();

// Verificar si existe el método
if (!method_exists($controladorObj, $metodo)) {
    echo "Método no encontrado";
    exit;
}

// Ejecutar el método
$controladorObj->$metodo($params);
