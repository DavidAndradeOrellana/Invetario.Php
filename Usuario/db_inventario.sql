-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2016 a las 17:26:57
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_inventario`
--
CREATE DATABASE IF NOT EXISTS `db_inventario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`idcategoria` int(11) NOT NULL,
  `nomcategoria` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nomcategoria`) VALUES
(1, 'LACTEOS'),
(2, 'FD'),
(3, 'LA ANITA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadp`
--

CREATE TABLE IF NOT EXISTS `empleadp` (
`Idempleado` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `dui` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `passwor` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleadp`
--

INSERT INTO `empleadp` (`Idempleado`, `nombre`, `direccion`, `telefono`, `dui`, `usuario`, `passwor`) VALUES
(1, 'David Antonio Andrade Orellana', 'col vista hermosa', 78945623, 125478963, 'david', 'andrade');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
`Idmarca` int(11) NOT NULL,
  `nommarca` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`Idmarca`, `nommarca`) VALUES
(1, 'MAIZENA'),
(2, 'NOSE'),
(3, 'OLIVA'),
(4, 'EL DORADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
`Idpais` int(11) NOT NULL,
  `nompais` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Idpais`, `nompais`) VALUES
(1, 'ESTADOS UNIDOS'),
(2, 'MEXICO'),
(3, 'GUATEMALA'),
(4, 'BELICE'),
(5, 'HONDURAS'),
(6, 'EL SALVADOR'),
(7, 'NICARAGUA'),
(8, 'COSTARICA'),
(9, 'PANAMA'),
(10, 'CUBA'),
(11, 'COLOMBIA'),
(12, 'VENEZUELA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`Idproducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `Idmarca` varchar(30) NOT NULL,
  `Idcategoria` varchar(30) NOT NULL,
  `Idproveedor` varchar(30) NOT NULL,
  `fechaven` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Idproducto`, `nombre`, `precio`, `cantidad`, `Idmarca`, `Idcategoria`, `Idproveedor`, `fechaven`) VALUES
(1, 'FGDFGFDGFDGGG', 5269, 58, 'NOSE', '', '', '2016-01-08'),
(2, 'FGDFGFDGFDGGG', 5269, 58, 'NOSE', 'FD', 'MASECA SA', '2016-01-08'),
(3, 'SOYA', 26, 89, 'MAIZENA', 'LACTEOS', 'PETACONES S A', '2016-01-12'),
(4, 'AMOR', 897, 456, 'NOSE', 'LACTEOS', 'PETACONES S A', '2012-01-17'),
(5, 'EL METEDO', 56, 9, 'EL DORADO', 'LA ANITA', 'EL AREVALO SA', '2016-01-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
`Idprovedor` int(11) NOT NULL,
  `nomprovee` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `Idpais` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Idprovedor`, `nomprovee`, `telefono`, `direccion`, `Idpais`, `email`) VALUES
(1, 'PETACONES S A', 26547896, 'SANTA CRUZ PORRILLO SAN VISENTE', 'EL SALVADOR', 'paetacones34@hotmail.com'),
(2, 'MASECA SA', 45896553, 'NOSE', 'ESTADOS UNIDOS', 'fdsfsdfdsfdsfdsf'),
(3, 'EL AREVALO SA', 25867686, 'COL NOSE ', 'MEXICO', 'redt@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
`Idventa` int(11) NOT NULL,
  `Idproducto` varchar(50) NOT NULL,
  `Idmarca` varchar(25) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `fechaventa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `empleadp`
--
ALTER TABLE `empleadp`
 ADD PRIMARY KEY (`Idempleado`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
 ADD PRIMARY KEY (`Idmarca`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
 ADD PRIMARY KEY (`Idpais`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`Idproducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`Idprovedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
 ADD PRIMARY KEY (`Idventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleadp`
--
ALTER TABLE `empleadp`
MODIFY `Idempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
MODIFY `Idmarca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
MODIFY `Idpais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `Idproducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
MODIFY `Idprovedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
MODIFY `Idventa` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
