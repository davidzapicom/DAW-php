-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2020 a las 10:58:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclubphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rented` tinyint(1) NOT NULL DEFAULT '0',
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `title`, `year`, `director`, `poster`, `rented`, `synopsis`, `nota`) VALUES
(21, 'El padrino', '1972', 'Francis Ford Coppola', 'https://image.posterlounge.es/images/big/1878326.jpg', 0, 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.', 5),
(22, 'El Padrino. Parte II', '1974', 'Francis Ford Coppola', 'https://image.posterlounge.es/images/l/1883402.jpg', 0, 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.', 10),
(23, 'La lista de Schindler', '1993', 'Steven Spielberg', 'http://es.web.img2.acsta.net/r_1920_1080/pictures/14/02/27/09/35/442750.jpg', 0, 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.', 7),
(24, 'Pulp Fiction', '1994', 'Quentin Tarantino', 'https://image.posterlounge.es/images/big/1875927.jpg', 1, 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín. ', 3),
(25, 'Cadena perpetua', '1994', 'Frank Darabont', 'http://ia.media-imdb.com/images/M/MV5BODU4MjU4NjIwNl5BMl5BanBnXkFtZTgwMDU2MjEyMDE@._V1_SX214_AL_.jpg', 1, 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.', 7),
(26, 'El golpe', '1973', 'George Roy Hill', 'https://pics.filmaffinity.com/the_sting-333620255-large.jpg', 0, 'Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster (Robert Shaw). Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.', 2),
(27, 'La vida es bella', '1997', 'Roberto Benigni', 'http://ia.media-imdb.com/images/M/MV5BMTQwMTM2MjE4Ml5BMl5BanBnXkFtZTgwODQ2NTYxMTE@._V1_SX214_AL_.jpg', 1, 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intención de abrir una librería. Allí conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego.', 9),
(28, 'Uno de los nuestros', '1990', 'Martin Scorsese', 'http://ia.media-imdb.com/images/M/MV5BMTY2OTE5MzQ3MV5BMl5BanBnXkFtZTgwMTY2NTYxMTE@._V1_SX214_AL_.jpg', 0, 'Henry Hill, hijo de padre irlandés y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gángsters de su barrio, donde la mayoría de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece años, Henry decide abandonar la escuela y entrar a formar parte de la organización mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irá subiendo de categoría. ', 10),
(29, 'Alguien voló sobre el nido del cuco', '1975', 'Milos Forman', 'http://ia.media-imdb.com/images/M/MV5BMTk5OTA4NTc0NF5BMl5BanBnXkFtZTcwNzI5Mzg3OA@@._V1_SY317_CR12,0,214,317_AL_.jpg', 0, 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico. La inflexible disciplina del centro acentúa su contagiosa tendencia al desorden, que acabará desencadenando una guerra entre los pacientes y el personal de la clínica con la fría y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellón está en juego.', 8),
(30, 'American History X', '1998', 'Tony Kaye', 'http://ia.media-imdb.com/images/M/MV5BMjMzNDUwNTIyMF5BMl5BanBnXkFtZTcwNjMwNDg3OA@@._V1_SY317_CR17,0,214,317_AL_.jpg', 0, 'Derek (Edward Norton), un joven \"skin head\" californiano de ideología neonazi, fue encarcelado por asesinar a un negro que pretendía robarle su furgoneta. Cuando sale de prisión y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeño (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a él lo condujo a la cárcel.', 1),
(31, 'Sin perdón', '1992', 'Clint Eastwood', 'http://ia.media-imdb.com/images/M/MV5BMTkzNTc0NDc4OF5BMl5BanBnXkFtZTcwNTY1ODg3OA@@._V1_SY317_CR5,0,214,317_AL_.jpg', 0, 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades económicas para sacar adelante a su hijos. Su única salida es hacer un último trabajo. En compañía de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrá que matar a dos hombres que cortaron la cara a una prostituta.', 9),
(32, 'El precio del poder', '1983', 'Brian De Palma', 'http://ia.media-imdb.com/images/M/MV5BMjAzOTM4MzEwNl5BMl5BanBnXkFtZTgwMzU1OTc1MDE@._V1_SX214_AL_.jpg', 0, 'Tony Montana es un emigrante cubano frío y sanguinario que se instala en Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la cúpula de una organización de narcos.', 0),
(33, 'El pianista', '2002', 'Roman Polanski', 'http://ia.media-imdb.com/images/M/MV5BMTc4OTkyOTA3OF5BMl5BanBnXkFtZTYwMDIxNjk5._V1_SX214_AL_.jpg', 1, 'Wladyslaw Szpilman, un brillante pianista polaco de origen judío, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportación gracias a la ayuda de algunos amigos. Pero tendrá que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendrá que afrontar constantes peligros.', 0),
(34, 'Seven', '1995', 'David Fincher', 'http://ia.media-imdb.com/images/M/MV5BMTQwNTU3MTE4NF5BMl5BanBnXkFtZTcwOTgxNDM2Mg@@._V1_SX214_AL_.jpg', 1, 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, está a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrán que colaborar en la resolución de una serie de asesinatos cometidos por un psicópata que toma como base la relación de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las víctimas, sobre los que el asesino se ensaña de manera impúdica, se convertirán para los policías en un enigma que les obligará a viajar al horror y la barbarie más absoluta.', 0),
(35, 'El silencio de los corderos', '1991', 'Jonathan Demme', 'http://ia.media-imdb.com/images/M/MV5BMTQ2NzkzMDI4OF5BMl5BanBnXkFtZTcwMDA0NzE1NA@@._V1_SX214_AL_.jpg', 0, 'El FBI busca a \"Buffalo Bill\", un asesino en serie que mata a sus víctimas, todas adolescentes, después de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psicópatas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la cárcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misión será intentar sacarle información sobre los patrones de conducta de \"Buffalo Bill\".', 5),
(36, 'La naranja mecánica', '1971', 'Stanley Kubrick', 'http://ia.media-imdb.com/images/M/MV5BMTY3MjM1Mzc4N15BMl5BanBnXkFtZTgwODM0NzAxMDE@._V1_SY317_CR0,0,214,317_AL_.jpg', 0, 'Gran Bretaña, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos más salvajes apaleando, violando y aterrorizando a la población. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisión, se someterá voluntariamente a una innovadora experiencia de reeducación que pretende anular drásticamente cualquier atisbo de conducta antisocial.', 0),
(37, 'La chaqueta metálica', '1987', 'Stanley Kubrick', 'http://ia.media-imdb.com/images/M/MV5BMjA4NzY4ODk4Nl5BMl5BanBnXkFtZTgwOTcxNTYxMTE@._V1_SX214_AL_.jpg', 1, 'Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. Allí está el sargento Hartman, duro e implacable, cuya única misión en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los jóvenes están preparados para soportar sus métodos. ', 0),
(38, 'Blade Runner', '1982', 'Ridley Scott', 'http://ia.media-imdb.com/images/M/MV5BMTA4MDQxNTk2NDheQTJeQWpwZ15BbWU3MDE2NjIyODk@._V1_SX214_AL_.jpg', 1, 'A principios del siglo XXI, la poderosa Tyrell Corporation creó, gracias a los avances de la ingeniería genética, un robot llamado Nexus 6, un ser virtualmente idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. Después de la sangrienta rebelión de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de policía, los Blade Runners, tenían órdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecución, se le llamaba \"retiro\". ', 8),
(39, 'Taxi Driver', '1976', 'Martin Scorsese', 'http://ia.media-imdb.com/images/M/MV5BMTQ1Nzg3MDQwN15BMl5BanBnXkFtZTcwNDE2NDU2MQ@@._V1_SY317_CR9,0,214,317_AL_.jpg', 0, 'Para sobrellevar el insomnio crónico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los demás, se pasa los días en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campaña política. Pero lo que realmente obsesiona a Travis es comprobar cómo la violencia, la sordidez y la desolación dominan la ciudad. Y un día decide pasar a la acción.', 0),
(40, 'El club de la lucha', '1999', 'David Fincher', 'http://ia.media-imdb.com/images/M/MV5BMjIwNTYzMzE1M15BMl5BanBnXkFtZTcwOTE5Mzg3OA@@._V1_SX214_AL_.jpg', 1, 'Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrá un éxito arrollador.', 6),
(41, 'El curioso caso de Benjamin Button', '2008', 'David Fincher', 'http://es.web.img2.acsta.net/r_1920_1080/medias/nmedia/18/67/78/06/19028753.jpg', 0, 'Benjamin Button nace como un hombre mayor en Nueva Orleans y rejuvenece. Poco a poco, se familiariza con la naturaleza del amor y la muerte.', 0),
(43, 'El paciente inglÃ©s', '1997', 'Anthony Minghella', 'imagenes/elpacienteingles.jpg', 1, 'Historia ganadora de varios premios Oscar, sobre un sobreviviente en un accidente aÃ©reo y su trÃ¡gico romance.', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `password`) VALUES
(1, 'yolanda', 'yolandaiglesias@cifpaviles.org', 'yolanda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
