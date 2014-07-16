-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2014 a las 03:40:14
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_inmobiliaria`
--
CREATE DATABASE IF NOT EXISTS `db_inmobiliaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_inmobiliaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

DROP TABLE IF EXISTS `barrio`;
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

DROP TABLE IF EXISTS `ciudad`;
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

DROP TABLE IF EXISTS `departamento`;
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

DROP TABLE IF EXISTS `destacados`;
CREATE TABLE IF NOT EXISTS `destacados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_INMUEBLE` (`id_inmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `id_cliente`, `id_agente`, `id_inmueble`, `titulo`, `fecha_hora_desde`, `fecha_hora_hasta`) VALUES
(11, 4, 3, 22, 'nueva visita', '2014-07-24 12:00:00', '2014-07-15 05:00:00'),
(12, 4, 3, 23, 'nueva cita', '2014-07-23 11:00:00', '2014-07-17 01:00:00'),
(13, 8, 3, 25, 'otra visita', '2014-07-23 12:00:00', '2014-07-23 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `ruta` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_INMUEBLE` (`id_inmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `id_inmueble`, `ruta`, `descripcion`) VALUES
(7, 22, '839242apartamentos1.jpg', 'habitacion'),
(8, 22, '311816apartamento-sion_0.jpg', 'comedor'),
(9, 22, '577053apartamentos-nuevos-caaveral-proyecto-tayrona-21465395.jpg', 'plano'),
(10, 23, '681066apartamentosdeluxo.jpg', 'comedor'),
(11, 23, '719107images.jpg', 'cuarto'),
(12, 23, '351422apartamento-de-luxo-13.jpg', 'balcon'),
(13, 24, '841027quinta+do+horto-living+apartamento+130m2-g.jpg', 'living-comedor'),
(14, 24, '154849imagemDELAS projetoGERSONDUTRA2.jpg', 'habitacion'),
(15, 24, '140951imagemDELAS projetoGERSONDUTRA2.jpg', 'habitacion'),
(16, 24, '923095images (11).jpg', 'plano'),
(17, 25, '6446742.jpg', 'comedor'),
(18, 25, '872668descarga (1).jpg', 'plano'),
(21, 27, '947320apartamentos-nuevos-caaveral-proyecto-tayrona-21465395.jpg', 'plano'),
(22, 28, '471640sevitur-apartamentos.jpg', 'living'),
(23, 28, '855639descarga (1).jpg', 'plano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

DROP TABLE IF EXISTS `inmuebles`;
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
  `prestamo_bancario` tinyint(1) DEFAULT NULL,
  `cantidad_banios` int(11) DEFAULT NULL,
  `cantidad_habitaciones` int(11) DEFAULT NULL,
  `superficie` int(11) DEFAULT NULL,
  `imagen_portada` text COLLATE utf8_spanish_ci,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_barrio` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `operacion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `destacado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USUARIO` (`id_usuario`),
  KEY `FK_BARRIO` (`id_barrio`),
  FULLTEXT KEY `busqueda` (`nombre`,`direccion`,`titulo`,`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `id_usuario`, `nombre`, `valor`, `estado`, `direccion`, `titulo`, `descripcion`, `amueblado`, `garage`, `jardin`, `parrillero`, `piso`, `tipo`, `prestamo_bancario`, `cantidad_banios`, `cantidad_habitaciones`, `superficie`, `imagen_portada`, `fecha_creacion`, `id_barrio`, `activo`, `operacion`, `destacado`) VALUES
(22, 4, 'nueva casa', 250000, 'Reciclado', 'nueva 1234', 'nueva casa punta carretas', 'nueva casa a extrenar', 0, 1, 1, 0, 2, 'Casa', 1, 2, 4, 120000, '566314mattisplus-propiedades_51757a6d9fd77-681x532.jpg', '2014-07-16 00:20:06', 6, 0, 'VENTA', 1),
(23, 6, 'alquiler apto', 14000, 'Reciclado', 'herrara 1342 ap 201', 'Apto a estrenar de Parque rodo', 'nuevo apartamento en parque rodo a pasitos de la rambla, muy amplio.', 0, 0, 0, 0, 1, 'Apto', 0, 1, 2, 60, '6429163.jpg', '2014-07-16 00:32:16', 5, 1, 'ALQUILER', NULL),
(24, 4, 'Apto Reducto', 500000, 'A Estrenar', 'Continuacion Abayuba 2582/201 Block L', 'Apartamento Modesto en Reducto', 'Apto a Estrenar para estudiantes de Tecnologo', 0, 0, 0, 0, 1, 'Apto', 1, 2, 4, 90, '148971aptos.jpg', '2014-07-16 00:36:52', 41, 1, 'VENTA', NULL),
(25, 1, 'casa', 16000, 'Reparaciones Menores', 'aconcagua 1233', 'casa en malvin', 'casa para alquilar, muy buen barrio.', 0, 0, 0, 1, 1, 'Casa', 0, 2, 3, 80, '911834apartamentos-en-menorca-son-bou.jpg', '2014-07-16 00:55:12', 10, NULL, 'ALQUILER', 0),
(27, 1, 'Apartamento', 78888, 'Para Reciclar', 'aconcagua 1233', 'Oportunidad en Pocitos', 'Apartamento a reciclar.', 0, 0, 0, 0, 1, 'Apto', 1, 1, 2, 80, '800048casa-ou-apartamento-1.jpg', '2014-07-16 01:02:46', 7, NULL, 'VENTA', NULL),
(28, 6, 'nuevo immueble', 250000, 'A Estrenar', '18 de Julio 3433', 'Casa Nueva en centro', 'Apartamento Nuevo en el centro.', 0, 0, 0, 0, 1, 'Apto', 0, 2, 4, 145, '831497big_138329.jpg', '2014-07-16 01:04:51', 1, NULL, 'ALQUILER', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

DROP TABLE IF EXISTS `operacion`;
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

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Administrativo'),
(3, 'Agente'),
(4, 'Comprador'),
(5, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `tipo` enum('Solicitud Informacion','Solicitud Publicacion','Admin') COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` enum('Pendiente','Leida') COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `nombre`, `telefono`, `email`, `descripcion`, `tipo`, `estado`) VALUES
(1, 'Gaston', '099999999', 'gbg933@hotmail.com', 'prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba ', 'Solicitud Informacion', 'Leida'),
(2, 'Nacho', '022222222', 'nacho@nacho,com', 'quiero quiero quiero quiero quiero quiero quiero quiero quiero quiero', 'Solicitud Publicacion', 'Pendiente'),
(3, 'Jose', '09992222', 'gbg933@hotmail.com', 'quiero agregar una casa..', 'Solicitud Informacion', 'Pendiente'),
(4, 'marta', '222222', 'gbg933@hotmail.com', 'sadasdasdasd', 'Solicitud Informacion', 'Leida'),
(5, 'Maria', '2210722222', 'gbg933@hotmail.com', 'quiero publicar una casa...', 'Solicitud Publicacion', 'Pendiente'),
(6, 'Jose', '09999999', 'gbg933@hotmail.com', 'La verdad que re bn', 'Solicitud Informacion', 'Leida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
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

DROP TABLE IF EXISTS `usuarios`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `ci`, `telefono`, `email`, `nick`, `pass`, `id_rol`) VALUES
(1, 'admin', 'admin', '11111111', '', '', 'admin', 'admin', 1),
(2, 'administra', 'administrativo', '46074340', '099797510', '', 'administrativo', 'administrativo', 2),
(3, 'agente', 'agente', '46074340', '099797510', '', 'agente', 'agente', 3),
(4, 'Gaston', 'Baldenegro', '44534681', '099394334', 'gbg933@hotmail.com', 'gbg933', '12345678', 5),
(6, 'jose', 'barboza', '3333333', '099394334', 'gbg933@hotmail.com', 'jose22', 'gasgas', 5),
(7, 'nacho', 'alamon', '4444444', '099999999', 'nacho@nacho.com', 'nacholibre', 'paspas', 5),
(8, 'Gaston', 'Baldenegro', '44534681', '099394334', 'gbg933@gmail.com', 'gbg933', '12345678', 5);

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
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
