-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 10:34:36
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `e-mail` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`usuario`, `contraseña`, `nombre`, `apellidos`, `e-mail`, `rol`) VALUES
('Ana', 'Ana**', 'Ana', 'Lopez', 'aaa@gmail.com', 'consultor'),
('Carlos', 'Carlos**', 'Carlos', 'Fernandez', 'ccc@gmail.com', 'consultor'),
('Luis', 'Luis**', 'Luis', 'Suárez', 'ddd@gmail.com', 'grabador'),
('Maria', 'Maria**', 'Maria', 'Perez', 'bbb@gmail.com', 'grabador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`usuario`,`contraseña`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


# Privilegios para `consultor`@`localhost`

GRANT USAGE ON *.* TO 'consultor'@'localhost' IDENTIFIED BY PASSWORD '*DA56441D8553DC1BD5A7B37C676111770F38217E';

GRANT SELECT ON `usuarios`.`personas` TO 'consultor'@'localhost';


# Privilegios para `grabador`@`localhost`

GRANT USAGE ON *.* TO 'grabador'@'localhost' IDENTIFIED BY PASSWORD '*42CE4BCDE47DE3666F78E7224AE2223D1FD0338C';

GRANT SELECT, INSERT ON `usuarios`.`personas` TO 'grabador'@'localhost';

ALTER TABLE `personas` CHANGE `contraseña` `contrasenia` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL;