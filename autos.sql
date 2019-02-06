-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2019 a las 16:58:06
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `email` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `contrasena`) VALUES
(0, 'pruebas@gmail.com', 'Holamundo1250'),
(1, 'prueba@gmail.com', 'Holamundo1250');

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
  `caracteristicas` varchar(1000) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`placas`, `modelo`, `marca`, `capacidad`, `color`, `montorentadia`, `estatus`, `caracteristicas`, `imagen`) VALUES
(123, 'camaro', 'chevrolet', 4, 'oscuro', 123, 'enable', '[clima,usb]', 'https://i.pinimg.com/originals/8b/29/3a/8b293a344b873daf87aa225c8203c149.jpg'),
(123123, '2018', 'mustang', 4, 'oscuro', 123, 'enable', '[clima,automatico,seguros,usb]', 'https://cochesclasicosdehoy.files.wordpress.com/2013/10/1965_ford_mustang_fastback_concept-01.jpg?w=1024'),
(99999999, 'mustang', 'ford', 4, 'rojo', 124, 'enable', '[clima,automatico,seguros,usb]', 'https://autoproyecto.com/wp-content/uploads/2018/08/Los-mejores-comerciales-de-autos-cl%C3%A1sicos.jpg');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
