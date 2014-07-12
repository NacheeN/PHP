-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2014 a las 00:45:12
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE IF NOT EXISTS `barrio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CIUDAD` (`id_ciudad`),
  KEY `FK_DEPARTAMENTO` (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`id`, `id_departamento`, `id_ciudad`, `nombre`) VALUES
(1, 1, 1, 'Centro'),
(2, 1, 1, 'Barrio Sur'),
(3, 1, 1, 'Cordon'),
(4, 1, 1, 'Palermo'),
(5, 1, 1, 'Parque Rodo'),
(6, 1, 1, 'Punta Carretas'),
(7, 1, 1, 'Pocitos'),
(8, 1, 1, 'Buceo'),
(9, 1, 1, 'Parque Batlle'),
(10, 1, 1, 'Malvin'),
(11, 1, 1, 'Malvin Norte'),
(12, 1, 1, 'Punta Gorda'),
(13, 1, 1, 'Carrasco'),
(14, 1, 1, 'Carrasco Norte'),
(15, 1, 1, 'Baniados de Carrasco'),
(16, 1, 1, 'Maronias'),
(17, 1, 1, 'Flor de Maro'),
(18, 1, 1, 'Las Canteras'),
(19, 1, 1, 'Punta de Rieles'),
(20, 1, 1, 'Jardines del Hipodromo'),
(21, 1, 1, 'Ituzaingo'),
(22, 1, 1, 'Union'),
(23, 1, 1, 'Villa Espanola'),
(24, 1, 1, 'Mercado Modelo'),
(25, 1, 1, 'Castro'),
(26, 1, 1, 'Cerrito de la Victoria'),
(27, 1, 1, 'Las Acacias'),
(28, 1, 1, 'Aires Puros'),
(29, 1, 1, 'Casavalle'),
(30, 1, 1, 'Piedras Blancas'),
(31, 1, 1, 'Manga Toledo Chico'),
(32, 1, 1, 'Paso de las Duranas'),
(33, 1, 1, 'Penarol'),
(34, 1, 1, 'Villa del Cerro'),
(35, 1, 1, 'Casab'),
(36, 1, 1, 'La Paloma'),
(37, 1, 1, 'La Teja'),
(38, 1, 1, 'Prado'),
(39, 1, 1, 'Capurro'),
(40, 1, 1, 'Aguada'),
(41, 1, 1, 'Reducto'),
(42, 1, 1, 'Atahualpa'),
(43, 1, 1, 'Jacinto Vera'),
(44, 1, 1, 'La Figurita'),
(45, 1, 1, 'Larranaga'),
(46, 1, 1, 'La Blanqueada'),
(47, 1, 1, 'Villa Munoz'),
(48, 1, 1, 'La Comercial'),
(49, 1, 1, 'Tres Cruces'),
(50, 1, 1, 'Brazo Oriental'),
(51, 1, 1, 'Sayago'),
(52, 1, 1, 'Conciliacion'),
(53, 1, 1, 'Belvedere'),
(54, 1, 1, 'Nuevo Paris'),
(55, 1, 1, 'Tres Ombues'),
(56, 1, 1, 'Paso de la Arena'),
(57, 1, 1, 'Colon Sureste'),
(58, 1, 1, 'Colon'),
(59, 1, 1, 'Lezica'),
(60, 1, 1, 'Villa Garcia'),
(61, 1, 1, 'Manga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_DEPARTAMENTO` (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `id_departamento`, `nombre`) VALUES
(1, 1, 'Montevideo'),
(2, 2, 'Canelones'),
(3, 3, 'Maldonado'),
(4, 4, 'Salto'),
(5, 5, 'Colonia del Sacramento'),
(6, 6, 'Paysandu'),
(7, 7, 'San Jose de Mayo'),
(8, 8, 'Rivera'),
(9, 9, 'Tacuaremb'),
(10, 10, 'Melo'),
(11, 11, 'Mercedes'),
(12, 12, 'Artigas'),
(13, 13, 'Rocha'),
(14, 14, 'Florida'),
(15, 15, 'Minas'),
(16, 16, 'Durazno'),
(17, 17, 'Fray Bentos'),
(18, 18, 'Treinta y Tres'),
(19, 19, 'Trinidad'),
(20, 1, 'Santiago Vásquez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`) VALUES
(1, 'Montevideo'),
(2, 'Canelones'),
(3, 'Maldonado'),
(4, 'Salto'),
(5, 'Colonia'),
(6, 'Paysandu'),
(7, 'San Jos'),
(8, 'Rivera'),
(9, 'Tacuaremb'),
(10, 'Cerro Largo'),
(11, 'Soriano'),
(12, 'Artigas'),
(13, 'Rocha'),
(14, 'Florida'),
(15, 'Lavalleja'),
(16, 'Durazno'),
(17, 'Rio Negro'),
(18, 'Treinta y Tres'),
(19, 'Flores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_INMUEBLE` (`id_inmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_agente` int(11) NOT NULL,
  `id_inmueble` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_hora_desde` datetime DEFAULT NULL,
  `fecha_hora_hasta` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USUARIO_CLIENTE` (`id_cliente`),
  KEY `FK_USUARIO_AGENTE` (`id_agente`),
  KEY `FK_INMUEBLE` (`id_inmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `ruta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_INMUEBLE` (`id_inmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE IF NOT EXISTS `inmuebles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `estado` enum('A Estrenar','Reciclado','Nuevo','Reparaciones Menores','Impecable','Para Reciclar','En Construccion','En pozo') COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `amueblado` tinyint(1) DEFAULT NULL,
  `garage` tinyint(1) DEFAULT NULL,
  `jardin` tinyint(1) DEFAULT NULL,
  `parrillero` tinyint(1) DEFAULT NULL,
  `piso` int(3) DEFAULT NULL,
  `tipo` enum('Casa','Apto','Local','Terreno','Oficina') COLLATE utf8_spanish_ci DEFAULT NULL,
  `propietario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prestamo_bancario` tinyint(1) DEFAULT NULL,
  `cantidad_banios` int(11) DEFAULT NULL,
  `cantidad_habitaciones` int(11) DEFAULT NULL,
  `superficie` int(11) DEFAULT NULL,
  `imagen_portada` text COLLATE utf8_spanish_ci,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_barrio` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USUARIO` (`id_usuario`),
  KEY `FK_BARRIO` (`id_barrio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `id_usuario`, `nombre`, `valor`, `estado`, `direccion`, `titulo`, `descripcion`, `amueblado`, `garage`, `jardin`, `parrillero`, `piso`, `tipo`, `propietario`, `prestamo_bancario`, `cantidad_banios`, `cantidad_habitaciones`, `superficie`, `imagen_portada`, `fecha_creacion`, `id_barrio`, `activo`) VALUES
(7, 1, 'Apto Reducto', 500000, 'A Estrenar', 'Continuacion Abayuba 2582/201 Block L', 'Casa Nueva en Reducto', 'asssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss asdddd', 1, 0, 0, 0, 4, 'Apto', 'Gonzalo Castro', 1, 2, 5, 120, '1.jpg', '2014-07-01 16:31:57', 1, NULL),
(8, 1, 'nuevo immueble', 78888, 'Reciclado', 'La verdad ni idea 234', 'Primero Siempre', 'no tengo ni idea', 0, 1, 0, 1, 1, 'Apto', 'Jorge Gutierrez', 1, 3, 4, 90, '3.jpg667581', '2014-07-01 16:44:47', 1, NULL),
(9, 1, 'apto ato', 78888, 'Reparaciones Menores', 'nueva 1233', 'Casa Nueva en Reducto', 'jjssddddd', 1, 1, 0, 0, 3, 'Apto', 'Gaston Baldenegro', 0, 3, 6, 244, '9884912.jpg', '2014-07-01 22:53:24', 1, NULL),
(10, 3, 'Inmueble Gonzal', 50000, 'Nuevo', 'Garcia Pintos 1104', 'Inmueble Gonzalo', 'Inmueble Gonzal', 1, 1, 0, 1, 1, 'Casa', 'Gonzalo Castro', 1, 1, 3, 120, '', '2014-07-07 17:22:48', 1, NULL),
(11, 3, 'asdasdasd', 50000, 'A Estrenar', '', '', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '523934DarkSouls2_1600.jpg', '2014-07-07 21:35:29', 1, NULL),
(12, 3, '', NULL, 'A Estrenar', '', '', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '', '2014-07-08 16:45:09', 1, NULL),
(13, 3, '', NULL, 'A Estrenar', '', '', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '', '2014-07-08 16:45:22', 1, NULL),
(14, 3, '', NULL, 'A Estrenar', '', '', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '', '2014-07-08 17:08:24', 1, NULL),
(15, 3, 'asdasd', NULL, 'A Estrenar', '', '', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '465075Camisa 1.jpg', '2014-07-08 19:49:31', 1, NULL),
(16, 3, '', NULL, 'A Estrenar', '', '', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '', '2014-07-08 19:49:59', 1, NULL),
(17, 3, 'asdasdasdas', 3213120000, 'A Estrenar', 'dasdasdasd', 'asdasdas', '', 0, 0, 0, 0, NULL, 'Casa', '', 0, NULL, NULL, NULL, '677633321655.jpg', '2014-07-08 19:53:09', 16, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE IF NOT EXISTS `operacion` (
  `id_usuario` int(11) NOT NULL,
  `id_inmueble` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `tipo` enum('Venta','Alquiler','Alquiler Temporada','Permuta') COLLATE utf8_spanish_ci DEFAULT NULL,
  KEY `FK_USUARIO` (`id_usuario`),
  KEY `FK_INMUEBLE` (`id_inmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Administrativo'),
(3, 'Agente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `tipo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USUARIO` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m140705_233614_creacion_tabla_roles_usuarios_roles', 1404757879),
('m140707_173325_crear_estado_activo_inmueble', 1404757880);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ci` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nick` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `ci`, `telefono`, `email`, `nick`, `pass`, `id_rol`) VALUES
(1, 'admin', 'admin', '11111111', '', '', 'admin', 'admin', 1),
(2, 'administra', 'administrativo', '46074340', '099797510', '', 'administrativo', 'administrativo', 2),
(3, 'agente', 'agente', '46074340', '099797510', '', 'agente', 'agente', 3),
(4, 'gonzalo', 'castro', '46074340', '', '', 'gonza', 'gonza', 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD CONSTRAINT `fk_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dep` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_casc` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `fk_inmueble_destacados` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `inmueble_eventos` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_agente` FOREIGN KEY (`id_agente`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_inm` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD CONSTRAINT `FK_BARRIO` FOREIGN KEY (`id_barrio`) REFERENCES `barrio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD CONSTRAINT `fk_inmu` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_operacion` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
