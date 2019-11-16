-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2019 a las 10:49:46
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartilla_vacunacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_identificacions`
--

CREATE TABLE `datos_identificacions` (
  `id` varchar(20) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `matricula_expediente` varchar(30) NOT NULL,
  `sexo` enum('HOMBRE','MUJER') NOT NULL,
  `unidad_medica` int(11) NOT NULL,
  `consultorio` varchar(30) NOT NULL,
  `localidad_nacimiento` varchar(40) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `localidad` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_identificacions`
--

INSERT INTO `datos_identificacions` (`id`, `curp`, `apellido_materno`, `apellido_paterno`, `nombres`, `matricula_expediente`, `sexo`, `unidad_medica`, `consultorio`, `localidad_nacimiento`, `fecha_nacimiento`, `calle`, `numero`, `localidad`, `estado`) VALUES
('GORM001017HDGMNA1', 'GORM001017HDGMNA1', 'GOMEX', 'RENTERIA', 'urango', 'HOLABUENAS', 'HOMBRE', 1414, 'SIMONKEY', 'Durango', '2019-11-13', 'calle cerrada', 244, 'Ocampo', 'Durango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esquema_vacunacion`
--

CREATE TABLE `esquema_vacunacion` (
  `id_vacuna_aplicada` int(10) UNSIGNED NOT NULL,
  `curp` varchar(20) NOT NULL,
  `id_vacuna` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacuna` int(11) NOT NULL,
  `nombre_vacuna` varchar(30) NOT NULL,
  `dosis` varchar(30) NOT NULL,
  `edad_dosis` int(11) NOT NULL,
  `enfermedad_prevenida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_identificacions`
--
ALTER TABLE `datos_identificacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `esquema_vacunacion`
--
ALTER TABLE `esquema_vacunacion`
  ADD PRIMARY KEY (`id_vacuna_aplicada`),
  ADD KEY `vacuna` (`id_vacuna`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`id_vacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `esquema_vacunacion`
--
ALTER TABLE `esquema_vacunacion`
  MODIFY `id_vacuna_aplicada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `id_vacuna` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `esquema_vacunacion`
--
ALTER TABLE `esquema_vacunacion`
  ADD CONSTRAINT `curp` FOREIGN KEY (`curp`) REFERENCES `datos_identificacions` (`id`),
  ADD CONSTRAINT `vacuna` FOREIGN KEY (`id_vacuna`) REFERENCES `vacuna` (`id_vacuna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
