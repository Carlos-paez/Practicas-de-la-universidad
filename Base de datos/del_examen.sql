-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2026 at 02:58 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `del_examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int NOT NULL,
  `cedula` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `cedula`, `nombre`, `apellido`) VALUES
(1, 31470100, 'Carlos', 'Páez'),
(2, 31470100, 'José', 'Pérez'),
(3, 31470100, 'José', 'Pérez'),
(4, 32476300, 'Antonio', 'Galindex');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id` int NOT NULL,
  `Nom_materia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id`, `Nom_materia`) VALUES
(1, 'Programación II'),
(2, 'Base de datos'),
(3, 'Formación critica'),
(4, 'Actividades acreditables');

-- --------------------------------------------------------

--
-- Table structure for table `puente`
--

CREATE TABLE `puente` (
  `id` int NOT NULL,
  `fk_estudiante` int NOT NULL,
  `fk_seccion` int NOT NULL,
  `fk_materia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `puente`
--

INSERT INTO `puente` (`id`, `fk_estudiante`, `fk_seccion`, `fk_materia`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 4, 3, 2),
(4, 3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seccion`
--

CREATE TABLE `seccion` (
  `id` int NOT NULL,
  `num_seccion` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seccion`
--

INSERT INTO `seccion` (`id`, `num_seccion`) VALUES
(1, '2403'),
(2, '2403'),
(3, '3403'),
(4, '4403');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puente`
--
ALTER TABLE `puente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_puente_estudiante` (`fk_estudiante`),
  ADD KEY `fk_puente_seccion` (`fk_seccion`),
  ADD KEY `fk_puente_materia` (`fk_materia`);

--
-- Indexes for table `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `puente`
--
ALTER TABLE `puente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `puente`
--
ALTER TABLE `puente`
  ADD CONSTRAINT `fk_puente_estudiante` FOREIGN KEY (`fk_estudiante`) REFERENCES `estudiantes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_puente_materia` FOREIGN KEY (`fk_materia`) REFERENCES `materia` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_puente_seccion` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
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
FROM Puente p
INNER JOIN Estudiantes e ON p.fk_estudiante = e.id
INNER JOIN Seccion s ON p.fk_seccion = s.id
INNER JOIN Materia m ON p.fk_materia = m.id;
