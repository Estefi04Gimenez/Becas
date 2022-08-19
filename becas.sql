-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2022 a las 23:00:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `becas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_estudiantes`
--

CREATE TABLE `datos_estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `solicitud_inscripcion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `certificado_egreso` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `boletin` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `constancia_inscripcion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso_ingreso_aprobado` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `plan_estudio` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `certificado_materias_aprobadas` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cambio_de_carrera` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `año_en_curso` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_instituto` int(11) NOT NULL,
  `id_localizacion_instituto` int(11) NOT NULL,
  `fch_inscripcion` date NOT NULL,
  `fch_modificacion` date NOT NULL,
  `id_personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_personal` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `genero` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fch_nacimiento` date NOT NULL,
  `tel` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cuil` int(11) NOT NULL,
  `fotocopia_dni` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `expediente_anses` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `certificado_nac` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `certificado_domicilio` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `domicilio` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado_academico` int(11) NOT NULL,
  `fch_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(11) NOT NULL,
  `fch_inscripcion` date NOT NULL,
  `id_personal` int(11) NOT NULL,
  `estado_beca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institutos`
--

CREATE TABLE `institutos` (
  `id_instituto` int(11) NOT NULL,
  `instituto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizaciones`
--

CREATE TABLE `localizaciones` (
  `id_localizacion_instuto` int(11) NOT NULL,
  `localizacion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupaciones`
--

CREATE TABLE `ocupaciones` (
  `id_ocupacion` int(11) NOT NULL,
  `ocupacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id_tutor` int(11) NOT NULL,
  `nombre_completo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fotocpia_dni` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `expediente_anses` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `domicilio` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cuil` int(11) NOT NULL,
  `id_ocupacion` int(11) NOT NULL,
  `certificado_haberes` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fch_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores_personales`
--

CREATE TABLE `tutores_personales` (
  `id_tutor` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre_completo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `contrasenna` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_usuario` varchar(1) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_estudiantes`
--
ALTER TABLE `datos_estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`);

--
-- Indices de la tabla `institutos`
--
ALTER TABLE `institutos`
  ADD PRIMARY KEY (`id_instituto`);

--
-- Indices de la tabla `localizaciones`
--
ALTER TABLE `localizaciones`
  ADD PRIMARY KEY (`id_localizacion_instuto`);

--
-- Indices de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  ADD PRIMARY KEY (`id_ocupacion`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id_tutor`);

--
-- Indices de la tabla `tutores_personales`
--
ALTER TABLE `tutores_personales`
  ADD PRIMARY KEY (`id_tutor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_estudiantes`
--
ALTER TABLE `datos_estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institutos`
--
ALTER TABLE `institutos`
  MODIFY `id_instituto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localizaciones`
--
ALTER TABLE `localizaciones`
  MODIFY `id_localizacion_instuto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  MODIFY `id_ocupacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
