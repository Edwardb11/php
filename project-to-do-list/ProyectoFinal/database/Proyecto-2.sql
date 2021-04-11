-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-04-2021 a las 17:09:32
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idestudiante` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `nombre`, `apellido`, `email`, `password`, `estado`) VALUES
(3, 'Laura', 'Brito', 'laura@ucateci.com', '123456', 'A'),
(4, 'Edward', 'Brito', 'edwardbrito@ucateci.com', '123456', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idprofesor` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nombre`, `apellido`, `email`, `password`, `estado`) VALUES
(2, 'Harold', 'Tejada', 'harold@ucateci.com', '123456', 'A'),
(3, 'Maria', 'Brito', 'maria@hotmail.com', '123456', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `idtarea` int(11) NOT NULL,
  `profesor_idprofesor` int(11) NOT NULL,
  `estudiante_idestudiante` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `descripción` varchar(255) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estado_tarea` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`idtarea`, `profesor_idprofesor`, `estudiante_idestudiante`, `titulo`, `descripción`, `contenido`, `fecha_entrega`, `estado_tarea`, `estado`) VALUES
(1, 2, 4, 'Tarea N. 1', 'Investigación sobre php', '', '2021-05-11', 'I', ' '),
(11, 2, 3, 'Tarea N. 2', 'Investigación sobre operadores lógicos ', '', '2020-09-11', 'I', ' '),
(14, 2, 4, 'Investigación N. 1', 'Mysqli', '', '2021-09-11', 'I', ' '),
(15, 2, 3, 'Investigación N. 2', 'Areas de programación ', '', '2020-09-11', 'I', ' '),
(16, 2, 4, 'Desarrollo web', 'Desarrollador Frond-end  y back-end.', '', '2020-09-11', 'A', ' ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idestudiante`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idprofesor`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`idtarea`),
  ADD KEY `profesor-tarea` (`profesor_idprofesor`),
  ADD KEY `estudiante-tarea` (`estudiante_idestudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idestudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idprofesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `idtarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `estudiante-tarea` FOREIGN KEY (`estudiante_idestudiante`) REFERENCES `estudiante` (`idestudiante`),
  ADD CONSTRAINT `profesor-tarea` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
