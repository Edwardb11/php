-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-04-2021 a las 17:09:43
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
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `grupoid` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`grupoid`, `descripcion`, `estado`) VALUES
(1, 'Estudiante', 'A'),
(8, 'Administrador', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `userid` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grupoid` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`userid`, `username`, `email`, `password`, `grupoid`, `estado`) VALUES
(1, '$2y$10$yEnxFkJJfdhwHDWWjn3psOhxdF2pOGEOjLF03W7FSeBYO1YYAvubu', 'admin@ucateci.com', '$2y$10$mDr5KbXnYWsJ.zG/1iu4nOj6DkfUHPyesR6X5OQSDUi0bVa2.SogW', 8, 'I'),
(2, 'estudiante', 'estudiante@ucateci.com', '$2y$10$uHxkyjpzf9vWAyFRAreg5.K.Qs8CI9q7HQP9irH.Mlh/XdTNXzZMK', 2, 'A'),
(3, 'Edward', 'edward@hotmail.com', '$2y$10$eUqG7Byqm1ZI7YaNbZMK2ujWC/pjiO5bwg3M50nQjHrNVd0TTPuBa', 8, 'A'),
(4, '$2y$10$y4mzlAlTCFu2StJUcb5Jkesxyx1PHBw9jMZRIE0L9diRCf6rlFZyC', 'Manuel@gmail.com', '$2y$10$GJq1V5OqlHFKokQwLpfTyuOVcgVG9Rwqs0WJAnLqkpqm5lJ5GoNlK', 1, 'I'),
(5, '$2y$10$003ejw6Uw1uL1bDcMS5YVeBi/aDDg.u4KN7a1gjF4CIFZXHGyfZpy', 'edwardbrito11@hotmail.com', '$2y$10$gGTYD4ePQQ.9vLsYtWtybOLHToxP5t0CuLhAFzoYJnE1gDQzD4En.', 1, 'A'),
(6, '$2y$10$VUhcA744xNBdX2EWlap.zOOdRnEk.g3NELOZpY56dl8/971RUuOBu', 'edw@hot.com', '12', 1, 'A'),
(25, 'Jordan Lane', 'jorda@gmail.com', '$2y$10$ciFY/K5qr4fs/WkhTUo8gu4gkEnm93ou.re4mcO/DAmI5325mRa8.', 8, 'I');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`grupoid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `grupoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
