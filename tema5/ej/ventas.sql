-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2022 a las 18:15:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulo` int(11) NOT NULL,
  `descripcion` varchar(25) NOT NULL,
  `precio` varchar(25) NOT NULL,
  `caracteristicas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulo`, `descripcion`, `precio`, `caracteristicas`) VALUES
(1, ' Iphone 12', '850', '64 GB - (PRODUCT)Red'),
(2, ' Iphone X', '359', '256GB - Plata'),
(3, 'Samsung Galaxy S9', '200', '64GB - Negro'),
(4, 'Oppo Find X2 Neo', '351', '256GB - Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idusuario` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `cantidad` int(25) NOT NULL,
  `precio_unitario` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(130) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`, `rol`) VALUES
(3, 'ana', 'cf1af1dd6d8fc37bc20e67ea6239ff3ecb3685bdb43bce6da173a761daaf661a9de2e5a65718501fef8c8ca553ef68e12faf55314f45fd2ba286efe85f771256', 'administrador'),
(4, 'maria', 'cf1af1dd6d8fc37bc20e67ea6239ff3ecb3685bdb43bce6da173a761daaf661a9de2e5a65718501fef8c8ca553ef68e12faf55314f45fd2ba286efe85f771256', 'administrador'),
(5, 'pepe', 'cf1af1dd6d8fc37bc20e67ea6239ff3ecb3685bdb43bce6da173a761daaf661a9de2e5a65718501fef8c8ca553ef68e12faf55314f45fd2ba286efe85f771256', 'consultor'),
(6, 'juan', 'cf1af1dd6d8fc37bc20e67ea6239ff3ecb3685bdb43bce6da173a761daaf661a9de2e5a65718501fef8c8ca553ef68e12faf55314f45fd2ba286efe85f771256', 'consultor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idusuario`,`idarticulo`,`fecha`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
