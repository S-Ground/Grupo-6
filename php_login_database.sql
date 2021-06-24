-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2021 a las 07:15:18
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
(231, '2021-06-24 10:18:58', 1, 100, 7, '589', 2),
(232, '2021-06-24 10:18:59', 9, 92, 7, '210', 3),
(233, '2021-06-24 10:19:00', 9, 15, 5, '438', 6),
(234, '2021-06-24 10:19:03', 18, 58, 11, '691', 5),
(235, '2021-06-24 10:19:06', 13, 65, 7, '431', 6),
(236, '2021-06-24 10:19:08', 2, 47, 7, '324', 11),
(237, '2021-06-24 10:19:08', 3, 34, 5, '892', 1),
(238, '2021-06-24 10:19:09', 14, 92, 7, '1155', 6),
(239, '2021-06-24 10:19:09', 0, 53, 9, '487', 3),
(240, '2021-06-24 10:19:09', 7, 4, 11, '144', 7),
(241, '2021-06-24 10:19:09', 15, 75, 14, '253', 8),
(242, '2021-06-24 10:19:10', -5, 43, 11, '412', 8),
(243, '2021-06-24 10:19:10', -5, 36, 11, '854', 7),
(244, '2021-06-24 10:19:10', 0, 96, 7, '287', 6),
(245, '2021-06-24 10:19:11', 13, 67, 7, '1144', 6),
(246, '2021-06-24 10:19:11', -4, 73, 0, '386', 10),
(247, '2021-06-24 10:19:11', 4, 40, 6, '733', 8),
(248, '2021-06-24 10:19:11', 16, 48, 12, '441', 1),
(249, '2021-06-24 10:19:12', -4, 9, 2, '810', 1),
(250, '2021-06-24 10:34:08', 11, 7, 0, '1125', 8),
(251, '2021-06-24 10:34:12', -2, 62, 8, '432', 3),
(252, '2021-06-24 10:38:30', 6, 88, 11, '1013', 3),
(253, '2021-06-24 10:42:01', -3, 8, 6, '814', 6),
(254, '2021-06-24 10:43:56', 3, 33, 8, '640', 3),
(255, '2021-06-24 10:43:59', 9, 5, 11, '1027', 11),
(256, '2021-06-24 10:44:01', -2, 42, 10, '957', 3);

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
