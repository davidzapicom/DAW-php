SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `idpersona` int(5) NOT NULL,
  `idimagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `agenda` (`id`, `fecha`, `hora`, `idpersona`, `idimagen`) VALUES
(1, '2022-03-20', '09:00:00', 1, 2),
(2, '2022-03-20', '09:00:00', 1, 3),
(3, '2022-03-20', '21:00:00', 1, 5),
(4, '2022-03-20', '13:00:00', 2, 7),
(5, '2022-03-20', '18:00:00', 1, 6);

CREATE TABLE `imagenes` (
  `idimagen` int(5) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `imagen` varchar(80) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `imagenes` (`idimagen`, `categoria`, `imagen`, `descripcion`) VALUES
(1, 'aseo', 'imagenes\bannarse.jpg', 'imagen que representa el baño'),
(3, 'alimentacion', 'imagenes\desayunamos.jpg', 'imagen que representa el desay'),
(4, 'tareas escolares', 'imagenes\dibujar.jpg', 'imagen que representa dibujar'),
(5, 'descanso', 'imagenes\dormir.jpg', 'imagen que representa ir a dor'),
(6, 'tareas escolares', 'imagenes\ir-cole.jpg', 'imagen que representa ir al co'),
(7, 'ocio', 'imagenes\jugar.jpg', 'imagen que representa las hora'),
(8, 'aseo', 'imagenes\lavar-dientes.jpg', 'imagen que representa lavar lo'),
(9, 'aseo', 'imagenes\lavar-manos.jpg', 'imagen que representa lavar ma'),
(10, 'tareas escolares', 'imagenes\leer.jpg', 'imagen que representa lectura');

CREATE TABLE `personas` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `personas` (`idpersona`, `nombre`, `apellidos`, `edad`) VALUES
(1, 'Carlos', 'Perez', 5),
(2, 'Juan', 'Lopez', 7),
(3, 'Manuel', 'Fernandez', 10);

ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagen`);

ALTER TABLE `personas`
  ADD PRIMARY KEY (`idpersona`);

ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `imagenes`
  MODIFY `idimagen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `personas`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

