-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-01-2023 a las 15:33:30
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso_php_inicial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

DROP TABLE IF EXISTS `jugadores`;
CREATE TABLE IF NOT EXISTS `jugadores` (
  `id_jugador` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `dorsal` tinyint DEFAULT NULL,
  `posicion` varchar(20) DEFAULT NULL,
  `edad` tinyint DEFAULT NULL,
  PRIMARY KEY (`id_jugador`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id_jugador`, `nombre`, `apellido`, `dorsal`, `posicion`, `edad`) VALUES
(87, 'Emiliano', 'Martinez', 23, 'Arquero', 30),
(88, 'Gerónimo', 'Rulli', 12, 'Arquero', 30),
(89, 'Franco', 'Armani', 1, 'Arquero', 36),
(90, 'Cristian', 'Romero', 13, 'Defensor Central', 24),
(91, 'Lisandro', 'Martinez', 25, 'Defensor Central', 24),
(92, 'Germán', 'Pezzella', 6, 'Defensor Central', 31),
(93, 'Nicolás', 'Otamendi', 19, 'Defensor Central', 34),
(94, 'Marcos', 'Acuña', 8, 'Lateral Izquierdo', 31),
(95, 'Nicolás', 'Tagliafico', 3, 'Lateral Izquierdo', 30),
(96, 'Juan', 'Foyth', 2, 'Lateral Derecho', 24),
(97, 'Nahuel', 'Molina', 26, 'Lateral Derecho', 24),
(99, 'Gonzalo', 'Montiel', 4, 'Lateral Derecho', 25),
(100, 'Guido ', 'Rodriguez', 18, 'Mediocampista', 28),
(101, 'Leandro', 'Paredes', 5, 'Mediocampista', 28),
(102, 'Enzo', 'Fernandez', 24, 'Mediocampista', 21),
(103, 'Alexis', 'Mac Allister', 20, 'Volante izquierdo', 24),
(104, 'Rodrigo', 'De Paul', 7, 'Volante derecho', 28),
(105, 'Exequiel', 'Palacios', 14, 'Mediocampista', 24),
(106, 'Thiago', 'Almada', 16, 'Mediapunta', 21),
(107, 'Papu', 'Gómez', 17, 'Extremo izquierdo', 34),
(108, 'Lionel', 'Messi', 10, 'Extremo derecho', 35),
(109, 'Angel', 'Correa', 15, 'Extremo derecho', 27),
(110, 'Angel', 'Di Maria', 11, 'Extremo derecho', 34),
(111, 'Paulo', 'Dybala', 21, 'Mediapunta', 29),
(112, 'Lautaro', 'Martinez', 22, 'Delantero centro', 25),
(113, 'Julian', 'Alvarez', 9, 'Delantero centro', 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
