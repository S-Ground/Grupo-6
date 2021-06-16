-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 06:25:16
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--
CREATE DATABASE IF NOT EXISTS `php_login_database` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `php_login_database`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `humedad` int(11) DEFAULT NULL,
  `ph` int(4) DEFAULT NULL,
  `presion` decimal(5,0) DEFAULT NULL,
  `uv` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `fecha`, `temperatura`, `humedad`, `ph`, `presion`, `uv`) VALUES
(1, '2021-06-01 04:00:00', 20, 40, 1, '1', 5),
(2, '2021-06-12 04:00:00', 12, 22, 3, '0', 3),
(0, '2021-06-09 23:48:45', 12, 16, 2, '44', 6),
(0, '2021-06-09 23:49:22', 12, 55, 2, '43', 6),
(3, '2021-06-09 23:49:22', 12, 55, 2, '43', 6),
(4, '2021-06-07 23:49:22', 10, 50, 2, '40', 4),
(5, '2021-06-04 23:49:22', 22, 34, 1, '30', 1),
(6, '2021-06-18 00:16:55', 10, 10, 10, '10', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_organizacion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clave` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellido`, `nombre_organizacion`, `clave`) VALUES
(1, '20064705-k', 'Gustavo', 'Igor', 'PapasMaill', 'lalala123'),
(2, '1', '1', '1', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
