-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2021 a las 17:34:18
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Base de datos: `php_login_database`
--
CREATE DATABASE IF NOT EXISTS `php_login_database` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `php_login_database`;

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

