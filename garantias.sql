-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 02:10:29
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
  `numero_orden` int(11) NOT NULL,
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

INSERT INTO `orden` (`id_orden`, `numero_orden`, `sucursal`, `marca`, `chasis`, `fecha_apertura`, `fecha_cierre`, `fecha_envio`, `estado`, `comentario`) VALUES
(1, 111111, 'BALCARCE', 'VW', '8AWDB42H5HT123456', '2017-09-01', '2017-09-01', '2017-09-01', 'PROCESADA', ''),
(3, 222222, 'SALTA', 'VW', '8AWDB45Z6DT123654', '2017-10-01', '2017-10-01', '2017-10-01', 'PENDIENTE', ''),
(8, 777777, 'BALCARCE', 'vw', '8AWDB45Z6DT123654', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(9, 888888, 'COLON', 'AUDI', 'WAUUABBBBBBBBBBBB', '0000-00-00', '0000-00-00', '0000-00-00', 'PENDIENTE', ''),
(10, 444444, 'SALTA', 'VW', '8AWDB45Z6DT123654', '2017-10-01', '2017-10-01', '2017-10-01', 'PENDIENTE', ''),
(11, 111112, 'BALCARCE', 'VW', '8AWDB45Z6DT123654', '2017-10-04', '2017-10-04', '2017-10-04', 'PENDIENTE', 'Comentario'),
(12, 451278, 'COLON', 'AUDI', 'WAUAG16X5HT756243', '2017-11-14', '2017-11-14', '2017-11-14', 'PENDIENTE', 'Este ordentiene comentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id_reclamo` int(11) NOT NULL,
  `id_orden_fk` int(11) NOT NULL,
  `numero_reclamo` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `fecha_reclamo` date NOT NULL,
  `estado` text NOT NULL,
  `MO` decimal(10,2) DEFAULT NULL,
  `material` decimal(10,2) DEFAULT NULL,
  `MO_externa` decimal(10,2) DEFAULT NULL,
  `material_externo` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `lote` varchar(20) NOT NULL,
  `fecha lote` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reclamo`
--

INSERT INTO `reclamo` (`id_reclamo`, `id_orden_fk`, `numero_reclamo`, `tipo`, `fecha_reclamo`, `estado`, `MO`, `material`, `MO_externa`, `material_externo`, `total`, `lote`, `fecha lote`) VALUES
(1, 3, 22222201, '1-10', '2017-11-17', 'PENDIENTE', '0.00', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00'),
(2, 3, 22222202, '7-10', '2017-11-16', 'PENDIENTE', '0.00', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id_reclamo`),
  ADD KEY `id_orden` (`id_orden_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id_reclamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `reclamo_ibfk_1` FOREIGN KEY (`id_orden_fk`) REFERENCES `orden` (`id_orden`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
