-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-09-2018 a las 07:37:46
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `misperris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptante`
--

CREATE TABLE IF NOT EXISTS `adoptante` (
  `rut` varchar(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `idRegion` int(10) NOT NULL,
  `idCiudad` int(11) NOT NULL,
  `idTipoVivienda` int(11) NOT NULL,
  PRIMARY KEY (`rut`),
  KEY `idCiudad_idx` (`idCiudad`),
  KEY `IdTipoVivienda_idx` (`idTipoVivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adoptante`
--

INSERT INTO `adoptante` (`rut`, `nombre`, `direccion`, `email`, `fecha`, `telefono`, `idRegion`, `idCiudad`, `idTipoVivienda`) VALUES
('1212121', 'sdsdsd', 'dsdsd', 'dsa@cd.cl', '2018-09-20', 4324234, 6, 11, 2),
('43432', 'dsdsd', 'dsdsd', 'dsa@cd.cl', '2018-09-28', 344324, 10, 26, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `idAnimal` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `raza` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `color` varchar(45) NOT NULL,
  PRIMARY KEY (`idAnimal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`idAnimal`, `nombre`, `raza`, `edad`, `color`) VALUES
(2, 'caiman', 'asesina', 10, ''),
(5, 'df', 'sds', 2, ''),
(5066, 'vfv', 'cfsd', 2, ''),
(54556, 'sfdsf', 'fdfsd', 3, ''),
(564654, 'dsdasd', 'wrer', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `idCiudad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idCiudad`),
  KEY `idRegion_idx` (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `nombre`, `idRegion`) VALUES
(1, 'Arica', 2),
(2, 'Camarones', 2),
(3, 'Calama', 3),
(4, 'Antofagasta', 4),
(5, 'Tocopilla', 4),
(6, 'Copiapo', 5),
(7, 'Caldera', 5),
(8, 'Alto del Carmen', 5),
(9, 'La Serena', 6),
(10, 'Illapel', 6),
(11, 'Coquimbo', 6),
(12, 'Viña del Mar', 7),
(13, 'Quintero', 7),
(14, 'Villa Alemana', 7),
(15, 'Machali', 8),
(16, 'Peumo', 8),
(17, 'Pichilemu', 8),
(18, 'Curico', 9),
(19, 'Sagrada Familia', 9),
(20, 'Constitucion', 9),
(21, 'Linares', 9),
(22, 'Parral', 9),
(23, 'Lebu', 10),
(24, 'Arauco', 10),
(25, 'Los Alamos', 10),
(26, 'Concepcion', 10),
(27, 'Talcahuano ', 10),
(28, 'Los Angeles', 10),
(29, 'Santa Barbara', 10),
(30, 'Loncoche', 11),
(31, 'Lumaco', 11),
(32, 'Angol', 11),
(33, '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `idRegion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`idRegion`, `nombre`) VALUES
(1, 'Region Metropolitana'),
(2, 'XV de Arica y Parinacota'),
(3, 'I de Tarapacá'),
(4, 'Antofagasta'),
(5, 'Atacama'),
(6, 'Coquimbo'),
(7, 'Valparaiso'),
(8, 'O''Higgins'),
(9, 'Maule'),
(10, 'Bio Bio'),
(11, 'Araucania'),
(12, 'XIV de los Ríos'),
(13, 'X de los Lagos'),
(14, 'XI Aisén '),
(15, 'XII de Magallanes y Antártica Chilena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovivienda`
--

CREATE TABLE IF NOT EXISTS `tipovivienda` (
  `idTipoVIvienda` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoVIvienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipovivienda`
--

INSERT INTO `tipovivienda` (`idTipoVIvienda`, `tipo`) VALUES
(1, 'Casa con patio grande'),
(2, 'Casa con patio pequeno'),
(3, 'Casa sin patio'),
(4, 'Departamento');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoptante`
--
ALTER TABLE `adoptante`
  ADD CONSTRAINT `idCiudad` FOREIGN KEY (`idCiudad`) REFERENCES `ciudad` (`idCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdTipoVivienda` FOREIGN KEY (`idTipoVivienda`) REFERENCES `tipovivienda` (`idTipoVIvienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `idRegion` FOREIGN KEY (`idRegion`) REFERENCES `region` (`idRegion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
