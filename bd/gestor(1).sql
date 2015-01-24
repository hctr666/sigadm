-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2014 a las 17:02:24
-- Versión del servidor: 5.5.36-cll-lve
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `codi_empr` char(8) NOT NULL,
  `codi_area` char(2) NOT NULL,
  `desc_area` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`codi_empr`, `codi_area`, `desc_area`) VALUES
('00000001', '01', 'AUDITORIA INTERNA'),
('00000001', '02', 'COMUNICACIONES'),
('00000001', '03', 'CONTABILIDAD'),
('00000001', '04', 'COSTOS Y PRESUPUESTO'),
('00000001', '05', 'FINANZAS'),
('00000001', '06', 'GERENCIA DE OPERACIONES'),
('00000001', '07', 'GESTION HUMANA'),
('00000001', '08', 'INVESTIGACION Y DESARROLLO'),
('00000001', '09', 'LEGAL'),
('00000001', '10', 'LOGISTICA'),
('00000001', '11', 'MANTENIMIENTO'),
('00000001', '12', 'PRODUCCION'),
('00000001', '13', 'PROYECTOS'),
('00000001', '14', 'SEGURIDAD CIVIL'),
('00000001', '15', 'SISTEMA DE GESTION INTEGRADO'),
('00000001', '16', 'SISTEMAS'),
('00000001', '17', 'SOSTENIBILIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `codi_empr` char(8) NOT NULL,
  `codi_carg` char(2) NOT NULL,
  `desc_carg` varchar(50) NOT NULL,
  `codi_tipo` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`codi_empr`, `codi_carg`, `desc_carg`, `codi_tipo`) VALUES
('00000001', '01', 'ALMACENERO ENVASES Y DESMEROS', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE IF NOT EXISTS `condicion` (
  `codi_empr` char(8) NOT NULL,
  `codi_cond` char(2) NOT NULL,
  `desc_cond` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condicion`
--

INSERT INTO `condicion` (`codi_empr`, `codi_cond`, `desc_cond`) VALUES
('00000001', '01', 'CONTRATO ARTICULO 58 CON PERIODO PRUEBA'),
('00000001', '02', 'CONTRATO ARTICULO 58 SIN PERIODO PRUEBA'),
('00000001', '03', 'CONTRATO POR SUPLENCIA'),
('00000001', '04', 'CONTRATO POR VACACIONES'),
('00000001', '05', 'CONTRATO TEMPORADA ALTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `codi_empr` char(8) NOT NULL,
  `codi_contr` int(11) NOT NULL,
  `codi_trab` int(11) NOT NULL,
  `codi_tipo` char(1) NOT NULL,
  `codi_carg` char(2) NOT NULL,
  `codi_cond` char(2) NOT NULL,
  `fech_inic` date NOT NULL,
  `fech_fin` date NOT NULL,
  `indt_cont` tinyint(1) NOT NULL,
  `mont_cont` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`codi_empr`, `codi_contr`, `codi_trab`, `codi_tipo`, `codi_carg`, `codi_cond`, `fech_inic`, `fech_fin`, `indt_cont`, `mont_cont`) VALUES
('00000001', 1, 1, '1', '01', '01', '2014-01-01', '2014-11-30', 0, 1502);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE IF NOT EXISTS `distrito` (
  `codi_empr` char(8) NOT NULL,
  `codi_dist` char(6) NOT NULL,
  `desc_dist` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`codi_empr`, `codi_dist`, `desc_dist`) VALUES
('00000001', '010101', 'LIMA'),
('00000001', '010801', 'HUACHO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `codi_empr` char(8) NOT NULL,
  `desc_empr` varchar(45) NOT NULL,
  `nruc_empr` char(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codi_empr`, `desc_empr`, `nruc_empr`) VALUES
('00000001', 'EMBOTELLADORA SAN MIGUEL DEL SUR S.A.C', '20413940568');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `codi_empr` char(8) NOT NULL,
  `codi_usua` char(8) NOT NULL,
  `codi_rol` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`codi_empr`, `codi_usua`, `codi_rol`) VALUES
('00000001', '15759927', '2'),
('00000001', '40801418', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `codi_empr` char(8) NOT NULL,
  `codi_rol` char(1) NOT NULL,
  `desc_rol` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`codi_empr`, `codi_rol`, `desc_rol`) VALUES
('00000001', '1', 'USUARIO'),
('00000001', '2', 'ADMINISTRADOR'),
('00000001', '9', 'SISTEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE IF NOT EXISTS `sede` (
  `codi_empr` char(8) NOT NULL,
  `codi_sede` char(2) NOT NULL,
  `desc_sede` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`codi_empr`, `codi_sede`, `desc_sede`) VALUES
('00000001', '01', 'HUAURA'),
('00000001', '02', 'LIMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `codi_empr` char(8) NOT NULL,
  `codi_tipo` char(1) NOT NULL,
  `desc_tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`codi_empr`, `codi_tipo`, `desc_tipo`) VALUES
('00000001', '1', 'EMPLEADO'),
('00000002', '2', 'OBRERO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_trabajador`
--

CREATE TABLE IF NOT EXISTS `tipo_trabajador` (
  `codi_tipo` char(1) NOT NULL,
  `desc_tipo` varchar(45) NOT NULL,
  `codi_empr` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_trabajador`
--

INSERT INTO `tipo_trabajador` (`codi_tipo`, `desc_tipo`, `codi_empr`) VALUES
('1', 'EMPLEADO', '00000001'),
('2', 'OBRERO', '00000001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `codi_empr` char(8) NOT NULL,
  `codi_trab` bigint(20) NOT NULL,
  `codi_sap` char(6) NOT NULL,
  `nume_dni` char(8) NOT NULL,
  `appa_trab` varchar(45) NOT NULL,
  `apma_trab` varchar(45) NOT NULL,
  `nomb_trab` varchar(60) NOT NULL,
  `fech_naci` date NOT NULL,
  `dire_trab` varchar(100) NOT NULL,
  `codi_dist` char(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`codi_empr`, `codi_trab`, `codi_sap`, `nume_dni`, `appa_trab`, `apma_trab`, `nomb_trab`, `fech_naci`, `dire_trab`, `codi_dist`) VALUES
('00000001', 1, '700377', '80009932', 'ALCAZAR', 'CASAICO', 'CARMEN LUZ', '1976-08-09', 'URB PEDRO PORTILLA MZ D LT 21', '010801'),
('00000001', 2, '700330', '28297020', 'ALCAZAR', 'CASAICO', 'CESAR AUGUSTO', '1970-05-02', 'AV 21 DE OCTUBRE NÂ° 132', '010801'),
('00000001', 3, '701270', '43653731', 'ANGLAS', 'CUYA', 'LUDMILA VICTORIA', '1970-09-04', 'JR. BOLIVAR NÂ° 896', '010801'),
('00000001', 4, '700230', '15761086', 'ARTEAGA', 'ESPINOZA', 'HECTOR OSWALDO', '1977-11-03', 'PSJE. TUPAC AMARU NÂ° 122', '010801'),
('00000001', 5, '999999', '40801418', 'CHINGA', 'RAMOS', 'CARLOS', '1979-08-02', 'AV. INDUSTRIAL 565', '010801'),
('00000001', 6, '111111', '98575447', 'CAVERO', 'DUEÃ‘AS', 'BERTONY', '1976-08-25', 'AV. LOS PROCERES 23522', '010101'),
('00000001', 7, '789658', '46855745', 'CHINGA', 'RAMOS', 'JUAN JOSE', '1979-08-02', 'AV. INDUSTRIAL 565', '010801');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codi_empr` char(8) NOT NULL,
  `codi_usua` char(8) NOT NULL,
  `appa_usua` varchar(45) NOT NULL,
  `apma_usua` varchar(45) NOT NULL,
  `nomb_usua` varchar(50) NOT NULL,
  `mail_usua` varchar(100) NOT NULL,
  `logi_usua` varchar(45) NOT NULL,
  `pass_usua` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codi_empr`, `codi_usua`, `appa_usua`, `apma_usua`, `nomb_usua`, `mail_usua`, `logi_usua`, `pass_usua`) VALUES
('00000001', '15759927', 'UBILLUS ', 'CASTILLO', 'VERONICA', '', 'veronica', '1234'),
('00000001', '40801418', 'CHINGA', 'RAMOS', 'CARLOS', 'chinga_carlos@hotmail.com', 'kike', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE IF NOT EXISTS `visita` (
  `codi_empr` char(8) NOT NULL,
  `codi_usua` char(8) NOT NULL,
  `fech_regi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`codi_empr`, `codi_usua`, `fech_regi`) VALUES
('00000001', '40801418', '2014-11-27 16:03:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`codi_empr`,`codi_area`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
 ADD PRIMARY KEY (`codi_empr`,`codi_carg`);

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
 ADD PRIMARY KEY (`codi_empr`,`codi_cond`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
 ADD PRIMARY KEY (`codi_empr`,`codi_dist`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`codi_empr`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
 ADD PRIMARY KEY (`codi_empr`,`codi_usua`,`codi_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
 ADD PRIMARY KEY (`codi_empr`,`codi_rol`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
 ADD PRIMARY KEY (`codi_empr`,`codi_sede`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
 ADD PRIMARY KEY (`codi_empr`,`codi_trab`), ADD UNIQUE KEY `codi_sap` (`codi_sap`), ADD UNIQUE KEY `nume_dni` (`nume_dni`), ADD UNIQUE KEY `codi_sap_2` (`codi_sap`), ADD UNIQUE KEY `nume_dni_2` (`nume_dni`), ADD UNIQUE KEY `nume_dni_3` (`nume_dni`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`codi_empr`,`codi_usua`), ADD UNIQUE KEY `logi_usua` (`logi_usua`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
