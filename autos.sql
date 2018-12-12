-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2018 a las 07:03:02
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `placas` int(10) NOT NULL,
  `modelo` text NOT NULL,
  `marca` text NOT NULL,
  `capacidad` int(11) NOT NULL,
  `color` text NOT NULL,
  `montorentadia` float NOT NULL,
  `estatus` text NOT NULL,
  `caracteristicas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`placas`, `modelo`, `marca`, `capacidad`, `color`, `montorentadia`, `estatus`, `caracteristicas`) VALUES
(12123122, 'jsdfksd-as', 'ds-sdfs', 5, 'blue', 120.3, 'enable', 'dfasfdf'),
(12123123, 'jsdfksd-df', 'sd-sdfs', 12, 'red', 124.3, 'enable', 'dfasfdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userautos`
--

CREATE TABLE `userautos` (
  `placas` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `contrasena` text NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `app` varchar(30) NOT NULL,
  `apm` varchar(30) NOT NULL,
  `telefonocasa` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `licencia` varchar(50) NOT NULL,
  `estatus` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`contrasena`, `nombre`, `app`, `apm`, `telefonocasa`, `direccion`, `licencia`, `estatus`, `email`) VALUES
('holamundo', 'Roman', 'Romero', 'Rosano', '2721234589', 'mi casita', '123-345', 'deseable', 'mail@mail.com'),
('holamundo', 'Juan', 'perez', 'martinez', '2721239586745', 'mi casita', '123-eda-123', 'deseable', 'pruebita@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`placas`);

--
-- Indices de la tabla `userautos`
--
ALTER TABLE `userautos`
  ADD PRIMARY KEY (`email`),
  ADD KEY `placas` (`placas`,`email`),
  ADD KEY `placas_2` (`placas`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `userautos`
--
ALTER TABLE `userautos`
  ADD CONSTRAINT `userautos_ibfk_2` FOREIGN KEY (`placas`) REFERENCES `autos` (`placas`),
  ADD CONSTRAINT `userautos_ibfk_3` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
