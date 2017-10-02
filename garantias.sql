-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2017 a las 01:37:35
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `garantias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id_orden` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `sucursal` text NOT NULL,
  `marca` text NOT NULL,
  `chasis` text NOT NULL,
  `fecha_apertura` date NOT NULL,
  `fecha_cierre` date NOT NULL,
  `fecha_envio` date NOT NULL,
  `estado` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id_orden`, `numero`, `sucursal`, `marca`, `chasis`, `fecha_apertura`, `fecha_cierre`, `fecha_envio`, `estado`, `comentario`) VALUES
(1, 111111, 'BALCARCE', 'VW', '8AWDB42H5HT123456', '2017-09-01', '2017-09-01', '2017-09-01', 'PROCESADA', ''),
(2, 123, 'kjk', 'deffefeff', 'kekwek', '2017-10-01', '2017-10-01', '2017-10-01', 'PENDIENTE', ''),
(3, 222222, 'SALTA', 'VW', '8AWDB45Z6DT123654', '2017-10-01', '2017-10-01', '2017-10-01', 'PENDIENTE', ''),
(4, 0, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(5, 333333, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(6, 999999, '', '', 'ygtsts', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(7, 555555, '', '', 'ghtfghjAAAAAaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(8, 777777, 'BALCARCE', 'vw', '8AWDB45Z6DT123654', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(9, 888888, 'COLON', 'AUDI', 'WAUUABBBBBBBBBBBB', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(10, 444444, 'SALTA', 'VW', '8AWDB45Z6DT123654', '2017-10-01', '2017-10-01', '2017-10-01', 'PENDIENTE', ''),
(11, 111112, 'BALCARCE', 'VW', '8AWDB45Z6DT123654', '2017-10-04', '2017-10-04', '2017-10-04', 'PENDIENTE', 'Comentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id_reclamo` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `numero_reclamo` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `fecha_reclamo` date NOT NULL,
  `estado` text NOT NULL,
  `MO` decimal(10,2) DEFAULT NULL,
  `material` decimal(10,2) DEFAULT NULL,
  `MO_externa` decimal(10,2) DEFAULT NULL,
  `material_externo` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `lote` int(11) NOT NULL,
  `fecha lote` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`id_reclamo`),
  ADD KEY `id_orden` (`id_orden`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD CONSTRAINT `reclamos_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `orden` (`id_orden`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
