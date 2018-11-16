-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2018 a las 13:44:27
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `coment` text NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `coment`, `id_pelicula`, `id_usuario`) VALUES
(1, 'Esta pelicula es genial test', 10, 3),
(10, 'Esta pelicula es genial test', 10, 3),
(11, 'Esta pelicula es genial test', 10, 3),
(12, 'Esta pelicula es genial test', 10, 3),
(13, 'Esta pelicula es genial test', 10, 3),
(14, 'Esta pelicula es genial test777777', 10, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` text NOT NULL,
  `cantidad_peliculas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre_genero`, `cantidad_peliculas`) VALUES
(11, 'Accion', 300),
(13, 'Comedia', 1500),
(14, 'Drama ', 150),
(15, 'Suspenso', 125),
(17, 'TEst', 44),
(18, 'Test', 1500),
(19, 'Test', 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_peliculas` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `año` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_peliculas`, `nombre`, `año`, `valoracion`, `duracion`, `id_genero`) VALUES
(10, 'The Fault in Our Stars', 2014, 125, 3, 15),
(13, 'Misión imposible: Fallout', 2018, 4, 148, 11),
(14, 'John Wick', 2014, 4, 101, 11),
(16, '¿Qué pasó ayer?', 2009, 3, 115, 13),
(17, 'Noche de juegos', 2018, 3, 100, 13),
(18, 'Moonlight', 2016, 4, 115, 14),
(19, 'Fragmentado', 2016, 5, 117, 15),
(20, 'Inception', 2010, 5, 150, 15),
(21, 'Test', 2019, 125, 3, 15),
(22, 'The Fault in Our Stars', 2014, 125, 3, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `admin` int(11) NOT NULL,
  `email` text NOT NULL,
  `clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `admin`, `email`, `clave`) VALUES
(3, 'RJA', 1, 'rodrigoaguilar96@gmail.com', '$2y$10$SFc9jHz9zULN.p/4viNnK.ecV76Lvqda0o1JBjDWNlexm.TND6iwW'),
(4, 'Test', 1, '123@hotmail.com', '$2y$10$/Kgwe6jySeOzYitnIqqbAOiPvDncXWwYvPIeGin6T0kUfsrB9XrF.'),
(5, 'Test2', 0, 'rodrigoaguilar96@gmail.com', '$2y$10$LRhsHQ1lZv5w10O8iBdOLOnSwPvSanTko.5qyEXFX5W2.yxSyCk5a'),
(10, 'Test3', 0, '123@hotmail.com', '$2y$10$27jbRqD.M1Ab3sP5ssZszOB9HnWuDbD5Wmyq2lkDtGl0yi45F/KrK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_peliculas`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_peliculas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_peliculas`);

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
