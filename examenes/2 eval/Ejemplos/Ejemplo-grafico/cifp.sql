create table usuarios(  id integer auto_increment primary key, 
                        nombre varchar(20) not null,
                        apellidos varchar(40) not null,
                        login varchar(10),
                        password varchar(10),
                        rol LONGTEXT NOT NULL
                        localidad varchar(20) ) ENGINE=INNODB;

create table notas(     alumno integer,
                        asignatura varchar(20),
                        fecha date,
                        nota decimal(5,2),
                        primary key(alumno,asignatura,fecha),
                        foreign key(alumno) references usuarios(id) ) ENGINE=INNODB;



INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `login`, `password`,`rol`,`localidad`) VALUES (NULL, 'Juan', 'Pérez', 'Juan', '123','alumno','Oviedo'), (NULL, 'Yolanda', 'López', 'Yolanda', '123', 'alumno', 'Oviedo'),
(NULL, 'María', 'López', 'María', '123', 'alumno','Oviedo'), (NULL, 'Luis', 'Alvarez', 'Luis', '123','alumno','Oviedo'), (NULL, 'Teresa', 'Ramírez', 'Teresa', '123','alumno', 'Oviedo'),
(NULL, 'Cristina', 'Álvarez', 'Cristina', '123','alumno', 'Gijón'), (NULL, 'Sandra ', 'Menéndez', 'Sandra', '123','alumno', 'Gijón'), (NULL, 'Lucia ', 'Menéndez', 'Lucia', '123','director', 'Gijón');

INSERT INTO `notas` (`alumno`, `asignatura`, `fecha`, `nota`) VALUES ('1', 'Lengua', '2016-11- 01', '8,35'),
('2', 'Lengua', '2016-11- 01', '7,90'), 
('2', 'Matemáticas', '2016- 11-10', '3,90'), 
('3', 'Lengua', '2016-11- 01', '6,30'),
('3', 'Matemáticas', '2016- 11-10', '4,80');

INSERT INTO `notas` (`alumno`, `asignatura`, `fecha`, `nota`) VALUES ('4', 'Lengua', '2016-11-01', '7.50'),
('4', 'Matemáticas', '2016-11-10', '6.10'),
('5', 'Lengua', '2016-11-01', '6.8'),
('5', 'Matemáticas', '2016-11-10', '9.5'),
('6', 'Lengua', '2016-11-01', '6.8'),
('6', 'Matemáticas', '2016-11-10', '9.5'),
('7', 'Lengua', '2016-11-01', '3.2'),
('7', 'Matemáticas', '2016-11-10', '9.5');