create database pruebas_original;
use pruebas_original;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `estudiantes` (
  `id` int NOT NULL,
  `cedula` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `estudiantes` (`id`, `cedula`, `nombre`, `apellido`) VALUES
(1, 31470100, 'Carlos', 'Páez'),
(2, 31470101, 'José', 'Pérez'),
(3, 31470102, 'María', 'González'),
(4, 32476300, 'Antonio', 'Galindex'),
(5, 28901234, 'Laura', 'Martínez'),
(6, 30123456, 'Pedro', 'Rodríguez'),
(7, 27654321, 'Ana', 'López'),
(8, 31234567, 'Diego', 'Fernández'),
(9, 29876543, 'Sofía', 'Castillo'),
(10, 30567890, 'Miguel', 'Torres'),
(11, 28765432, 'Valentina', 'Reyes'),
(12, 31987654, 'Andrés', 'Morales'),
(13, 29345678, 'Camila', 'Ortiz'),
(14, 30876543, 'Javier', 'Silva'),
(15, 28123456, 'Gabriela', 'Cruz'),
(16, 31678901, 'Felipe', 'Vargas'),
(17, 29543210, 'Isabella', 'Mendoza'),
(18, 30345678, 'Santiago', 'Rivas'),
(19, 28456789, 'Luciana', 'Peña'),
(20, 31123456, 'Emilio', 'Cabrera');






CREATE TABLE `materia` (
  `id` int NOT NULL,
  `Nom_materia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `materia` (`id`, `Nom_materia`) VALUES
(1, 'Programación II'),
(2, 'Base de datos'),
(3, 'Formación crítica'),
(4, 'Actividades acreditables'),
(5, 'Matemática I'),
(6, 'Inglés técnico'),
(7, 'Sistemas operativos'),
(8, 'Redes de computadoras'),
(9, 'Arquitectura del computador'),
(10, 'Ética profesional'),
(11, 'Taller de programación'),
(12, 'Estadística');







CREATE TABLE `puente` (
  `id` int NOT NULL,
  `fk_estudiante` int NOT NULL,
  `fk_seccion` int NOT NULL,
  `fk_materia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `puente` (`id`, `fk_estudiante`, `fk_seccion`, `fk_materia`) VALUES
-- Estudiante 1: Carlos Páez
(1, 1, 1, 1),
(2, 1, 1, 2),
(5, 1, 1, 5),
(6, 1, 2, 7),
-- Estudiante 2: José Pérez
(7, 2, 1, 1),
(8, 2, 1, 2),
(9, 2, 1, 6),
-- Estudiante 3: María González
(4, 3, 2, 3),
(10, 3, 2, 4),
(11, 3, 2, 8),
-- Estudiante 4: Antonio Galindex
(3, 4, 3, 2),
(12, 4, 3, 5),
(13, 4, 3, 9),
-- Estudiante 5: Laura Martínez
(14, 5, 1, 1),
(15, 5, 1, 5),
(16, 5, 2, 10),
-- Estudiante 6: Pedro Rodríguez
(17, 6, 4, 2),
(18, 6, 4, 6),
(19, 6, 5, 11),
-- Estudiante 7: Ana López
(20, 7, 4, 1),
(21, 7, 4, 3),
(22, 7, 5, 7),
-- Estudiante 8: Diego Fernández
(23, 8, 2, 2),
(24, 8, 2, 8),
(25, 8, 2, 5),
-- Estudiante 9: Sofía Castillo
(26, 9, 3, 4),
(27, 9, 3, 9),
(28, 9, 3, 1),
-- Estudiante 10: Miguel Torres
(29, 10, 5, 2),
(30, 10, 5, 6),
(31, 10, 5, 12),
-- Estudiante 11: Valentina Reyes
(32, 11, 1, 3),
(33, 11, 1, 7),
(34, 11, 2, 10),
-- Estudiante 12: Andrés Morales
(35, 12, 4, 1),
(36, 12, 4, 5),
(37, 12, 6, 8),
-- Estudiante 13: Camila Ortiz
(38, 13, 6, 2),
(39, 13, 6, 11),
(40, 13, 6, 4),
-- Estudiante 14: Javier Silva
(41, 14, 5, 9),
(42, 14, 5, 12),
(43, 14, 7, 1),
-- Estudiante 15: Gabriela Cruz
(44, 15, 7, 2),
(45, 15, 7, 6),
(46, 15, 7, 10),
-- Estudiante 16: Felipe Vargas
(47, 16, 3, 3),
(48, 16, 3, 5),
(49, 16, 8, 7),
-- Estudiante 17: Isabella Mendoza
(50, 17, 8, 1),
(51, 17, 8, 8),
(52, 17, 8, 11),
-- Estudiante 18: Santiago Rivas
(53, 18, 6, 2),
(54, 18, 6, 4),
(55, 18, 6, 9),
-- Estudiante 19: Luciana Peña
(56, 19, 4, 3),
(57, 19, 4, 12),
(58, 19, 5, 6),
-- Estudiante 20: Emilio Cabrera
(59, 20, 2, 1),
(60, 20, 7, 5),
(61, 20, 7, 10);








CREATE TABLE `seccion` (
  `id` int NOT NULL,
  `num_seccion` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `seccion` (`id`, `num_seccion`) VALUES
(1, '2401'),
(2, '2402'),
(3, '2403'),
(4, '3401'),
(5, '3402'),
(6, '3403'),
(7, '4401'),
(8, '4402');





CREATE TABLE `notas` (
  `id` int NOT NULL,
  `fk_puente` int NOT NULL,
  `fk_evaluacion` int NOT NULL,
  `nota` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `notas` (`id`, `fk_puente`, `fk_evaluacion`, `nota`) VALUES
-- Notas de Carlos Páez
(1, 1, 2, 18),
(2, 2, 1, 20),
(5, 1, 4, 15),
(6, 1, 6, 19),
(7, 2, 2, 17),
(8, 2, 6, 14),
(9, 5, 1, 12),
(10, 5, 3, 16),
(11, 6, 2, 10),
(12, 6, 5, 13),
-- Notas de José Pérez
(13, 7, 1, 15),
(14, 7, 2, 16),
(15, 8, 1, 18),
(16, 8, 4, 20),
(17, 9, 3, 14),
-- Notas de María González
(4, 4, 1, 8),
(18, 10, 2, 19),
(19, 10, 5, 17),
(20, 11, 1, 11),
(21, 11, 6, 13),
-- Notas de Antonio Galindex
(3, 3, 3, 15),
(22, 12, 1, 20),
(23, 12, 4, 18),
(24, 13, 2, 16),
(25, 13, 5, 14),
-- Notas de Laura Martínez
(26, 14, 2, 17),
(27, 14, 6, 15),
(28, 15, 1, 13),
(29, 15, 3, 12),
(30, 16, 4, 19),
-- Notas de Pedro Rodríguez
(31, 17, 1, 14),
(32, 17, 5, 11),
(33, 18, 2, 16),
(34, 19, 3, 10),
(35, 19, 6, 12),
-- Notas de Ana López
(36, 20, 2, 18),
(37, 21, 1, 20),
(38, 22, 4, 15),
(39, 22, 5, 17),
-- Notas de Diego Fernández
(40, 23, 1, 19),
(41, 23, 3, 16),
(42, 24, 2, 14),
(43, 24, 6, 12),
(44, 25, 4, 18),
-- Notas de Sofía Castillo
(45, 26, 2, 15),
(46, 27, 1, 13),
(47, 27, 5, 11),
(48, 28, 3, 17),
-- Notas de Miguel Torres
(49, 29, 1, 12),
(50, 29, 4, 10),
(51, 30, 2, 18),
(52, 31, 6, 20),
-- Notas de Valentina Reyes
(53, 32, 1, 9),
(54, 32, 3, 14),
(55, 33, 2, 16),
(56, 34, 5, 19),
-- Notas de Andrés Morales
(57, 35, 2, 20),
(58, 35, 6, 18),
(59, 36, 1, 15),
(60, 37, 4, 13),
-- Notas de Camila Ortiz
(61, 38, 1, 17),
(62, 38, 3, 15),
(63, 39, 2, 12),
(64, 40, 5, 11),
-- Notas de Javier Silva
(65, 41, 2, 14),
(66, 41, 6, 16),
(67, 42, 1, 19),
(68, 43, 4, 10),
-- Notas de Gabriela Cruz
(69, 44, 1, 18),
(70, 44, 3, 16),
(71, 45, 2, 14),
(72, 46, 5, 13),
-- Notas de Felipe Vargas
(73, 47, 2, 12),
(74, 48, 1, 11),
(75, 48, 4, 15),
(76, 49, 6, 20),
-- Notas de Isabella Mendoza
(77, 50, 1, 16),
(78, 50, 3, 14),
(79, 51, 2, 19),
(80, 52, 5, 17),
-- Notas de Santiago Rivas
(81, 53, 2, 13),
(82, 53, 6, 15),
(83, 54, 1, 18),
(84, 55, 4, 20),
-- Notas de Luciana Peña
(85, 56, 1, 11),
(86, 56, 3, 9),
(87, 57, 2, 17),
(88, 58, 5, 14),
-- Notas de Emilio Cabrera
(89, 59, 2, 20),
(90, 59, 6, 18),
(91, 60, 1, 14),
(92, 61, 4, 16);





CREATE TABLE `evaluaciones` (
  `id` int NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `evaluaciones` (`id`, `tipo`) VALUES
(1, 'Escrita'),
(2, 'Practica'),
(3, 'Exposición'),
(4, 'Taller'),
(5, 'Proyecto'),
(6, 'Quiz');



ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `puente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_puente_estudiante` (`fk_estudiante`),
  ADD KEY `fk_puente_seccion` (`fk_seccion`),
  ADD KEY `fk_puente_materia` (`fk_materia`);

ALTER TABLE `notas`
  ADD KEY `fk_notas_puenta` (`fk_puente`),
  ADD KEY `fk_notas_evaluaciones` (`fk_evaluacion`);

ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `estudiantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `materia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `puente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

ALTER TABLE `seccion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `evaluaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `puente`
  ADD CONSTRAINT `fk_puente_estudiante` FOREIGN KEY (`fk_estudiante`) REFERENCES `estudiantes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_puente_materia` FOREIGN KEY (`fk_materia`) REFERENCES `materia` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_puente_seccion` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `notas`
  ADD CONSTRAINT `fk_notas_puente` FOREIGN KEY (`fk_puente`) REFERENCES `puente` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_notas_evaluaciones` FOREIGN KEY (`fk_evaluacion`) REFERENCES `evaluaciones` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







SELECT
  p.id AS id_puente,
  e.cedula,
  e.nombre,
  e.apellido,
  s.num_seccion,
  m.Nom_materia
FROM puente p
INNER JOIN estudiantes e ON p.fk_estudiante = e.id
INNER JOIN seccion s ON p.fk_seccion = s.id
INNER JOIN materia m ON p.fk_materia = m.id;





SELECT
  n.id AS id_notas,
  p.fk_estudiante,
  p.fk_materia,
  e.tipo,
  n.nota
FROM notas n
INNER JOIN puente p ON n.fk_puente = p.id
INNER JOIN evaluaciones e ON n.fk_evaluacion = e.id;



SELECT
  p.id AS id_puente,
  e.nombre,
  s.num_seccion,
  m.Nom_materia
FROM puente p
INNER JOIN estudiantes e ON p.fk_estudiante = e.id
INNER JOIN seccion s ON p.fk_seccion = s.id
INNER JOIN materia m ON p.fk_materia = m.id;
