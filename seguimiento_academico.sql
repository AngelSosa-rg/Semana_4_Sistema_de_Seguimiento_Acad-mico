-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2025 a las 06:18:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguimiento_academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'María', 'Pérez', 'mperez@colegio.edu', NULL, '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(2, 'Carlos', 'González', 'cgonzalez@colegio.edu', NULL, '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(3, 'Andrea', 'López', 'alopez@colegio.edu', '0991110011', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(4, 'Jorge', 'Salazar', 'jsalazar@colegio.edu', '0991110022', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(5, 'Patricia', 'Mendoza', 'pmendoza@colegio.edu', '0991110033', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(6, 'Ricardo', 'Vera', 'rvera@colegio.edu', '0991110044', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(7, 'Sofía', 'Acosta', 'sacosta@colegio.edu', '0991110055', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(8, 'Fernando', 'Mora', 'fmora@colegio.edu', '0991110066', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(9, 'Julia', 'Chávez', 'jchavez@colegio.edu', '0991110077', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(10, 'Roberto', 'Paredes', 'rparedes@colegio.edu', '0991110088', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(11, 'Elena', 'Ríos', 'erios@colegio.edu', '0991110099', '2025-11-16 05:14:43', '2025-11-16 05:14:43'),
(12, 'Gabriel', 'Torres', 'gtorres@colegio.edu', '0991110100', '2025-11-16 05:14:43', '2025-11-16 05:14:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `codigo`, `nombre`, `apellido`, `email`, `telefono`, `fecha_nacimiento`, `created_at`, `updated_at`) VALUES
(1, 'EST-0001', 'Luis', 'Ramírez', 'lramirez@mail.com', NULL, NULL, '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(2, 'EST-0002', 'Alex', 'Rodriguez', 'rodrial@mail.com', NULL, NULL, '2025-11-16 01:39:13', '2025-11-16 04:57:22'),
(4, 'EST-0006', 'Angel', 'Sosa', 'sebas--tian36@hotmail.com', NULL, NULL, '2025-11-16 04:16:36', '2025-11-16 04:16:36'),
(6, 'EST-0030', 'Miguel', 'Lozano', 'mlozano@mail.com', '0981110001', '2007-03-12', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(7, 'EST-0007', 'Daniela', 'Santos', 'dsantos@mail.com', '0981110002', '2006-11-05', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(8, 'EST-0008', 'Javier', 'Camacho', 'jcamacho@mail.com', '0981110003', '2007-01-22', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(9, 'EST-0009', 'Verónica', 'Pazmiño', 'vpazmino@mail.com', '0981110004', '2006-09-30', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(10, 'EST-0010', 'Samuel', 'Ortega', 'sortega@mail.com', '0981110005', '2007-05-17', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(11, 'EST-0011', 'Nicole', 'Ibarra', 'nibarra@mail.com', '0981110006', '2007-02-14', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(12, 'EST-0012', 'Kevin', 'Serrano', 'kserrano@mail.com', '0981110007', '2006-07-18', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(13, 'EST-0013', 'Camila', 'Romero', 'cromero@mail.com', '0981110008', '2007-08-10', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(14, 'EST-0014', 'Santiago', 'Núñez', 'snunez@mail.com', '0981110009', '2006-12-01', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(15, 'EST-0015', 'Andrea', 'Macias', 'amacias@mail.com', '0981110010', '2007-06-22', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(16, 'EST-0016', 'Josué', 'García', 'jgarcia@mail.com', '0981110011', '2007-04-09', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(17, 'EST-0017', 'Karla', 'Valencia', 'kvalencia@mail.com', '0981110012', '2006-10-19', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(18, 'EST-0018', 'Raúl', 'Cedeño', 'rcedeno@mail.com', '0981110013', '2007-03-03', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(19, 'EST-0019', 'Melissa', 'Quito', 'mquito@mail.com', '0981110014', '2007-07-25', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(20, 'EST-0020', 'Esteban', 'Loor', 'eloor@mail.com', '0981110015', '2007-09-15', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(21, 'EST-0021', 'Sara', 'Montenegro', 'smontenegro@mail.com', '0981110016', '2006-11-11', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(22, 'EST-0022', 'Bryan', 'Sanchez', 'bsanchez@mail.com', '0981110017', '2007-01-08', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(23, 'EST-0023', 'Lucía', 'Mejía', 'lmejia@mail.com', '0981110018', '2007-02-27', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(24, 'EST-0024', 'Diego', 'Bermúdez', 'dbermudez@mail.com', '0981110019', '2007-05-05', '2025-11-16 05:14:59', '2025-11-16 05:14:59'),
(25, 'EST-0025', 'Valeria', 'Cuenca', 'vcuenca@mail.com', '0981110020', '2007-04-28', '2025-11-16 05:14:59', '2025-11-16 05:14:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `fecha_inscripcion` date DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id`, `estudiante_id`, `materia_id`, `periodo`, `fecha_inscripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-1', '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(2, 1, 2, '2025-1', '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(3, 2, 2, '2025-1', '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 04:47:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `docente_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `codigo`, `nombre`, `descripcion`, `docente_id`, `created_at`, `updated_at`) VALUES
(1, 'MAT101', 'Matemáticas I', 'Álgebra y trigonometría', 1, '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(2, 'FIS101', 'Física I', 'Mecánica básica', 2, '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(3, 'FIS105', 'FISICA II', 'Segundo nivel de Fisica', 2, '2025-11-16 04:35:50', '2025-11-16 05:02:30'),
(4, 'MAT102', 'Matemáticas II', 'Cálculo diferencial', 3, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(5, 'MAT201', 'Matemáticas III', 'Cálculo integral', 3, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(6, 'FIS201', 'Física II', 'Electricidad y magnetismo', 2, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(7, 'QUI101', 'Química I', 'Fundamentos de química', 4, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(8, 'QUI201', 'Química II', 'Reacciones avanzadas', 4, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(9, 'BIO101', 'Biología I', 'Bases de biología general', 5, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(10, 'BIO201', 'Biología II', 'Genética básica', 5, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(11, 'HIS101', 'Historia I', 'Historia universal', 6, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(12, 'HIS201', 'Historia II', 'Historia contemporánea', 6, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(13, 'LEN101', 'Lengua y Literatura I', 'Comprensión y redacción', 7, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(14, 'LEN201', 'Lengua y Literatura II', 'Lectura crítica y ensayo', 7, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(15, 'ING101', 'Inglés I', 'Introducción al idioma inglés', 8, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(16, 'ING201', 'Inglés II', 'Gramática intermedia', 8, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(17, 'PROG101', 'Programación I', 'Introducción a la programación', 9, '2025-11-16 05:15:05', '2025-11-16 05:15:05'),
(18, 'PROG201', 'Programación II', 'Estructuras de datos', 9, '2025-11-16 05:15:05', '2025-11-16 05:15:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `inscripcion_id` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `valor` decimal(5,2) NOT NULL,
  `peso` decimal(4,2) DEFAULT 1.00,
  `fecha` date DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `inscripcion_id`, `tipo`, `valor`, `peso`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 1, 'Parcial 1', 78.50, 1.00, '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(2, 1, 'Parcial 2', 85.00, 1.00, '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(3, 2, 'Parcial 1', 90.00, 1.00, '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 01:39:13'),
(4, 3, 'Parcial 1', 65.00, 1.00, '2025-11-15', '2025-11-16 01:39:13', '2025-11-16 01:39:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estudiante_id` (`estudiante_id`,`materia_id`,`periodo`),
  ADD KEY `fk_insc_mat` (`materia_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `fk_materia_docente` (`docente_id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nota_insc` (`inscripcion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `fk_insc_est` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_insc_mat` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `fk_materia_docente` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_nota_insc` FOREIGN KEY (`inscripcion_id`) REFERENCES `inscripciones` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
