-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2023 a las 17:58:39
-- Versión del servidor: 10.11.3-MariaDB
-- Versión de PHP: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_soluciones_integrales_sl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_aseguradoras`
--

CREATE TABLE `tabla_aseguradoras` (
  `id_aseguradora` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cif` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persona` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tabla_aseguradoras`
--

INSERT INTO `tabla_aseguradoras` (`id_aseguradora`, `domicilio`, `cif`, `telefono`, `mail`, `persona`) VALUES
('Linea Directa S.A.	', 'C/ Isaac Newton, 7', 'A80871031', '917002005', 'seguros_hogar@lineadirecta.com', 'Jorge Sanchez'),
('Mapfre, SA', 'Carretera Pozuelo de Alarcon, 52', 'A08055741', '915812318', 'seguro_hogar@mapfre.com', 'Miguel Fernandez'),
('Santa Lucia S.A.', 'Plaza de España, 15', 'A28039790', '915301042', 'santalucia@santalucia.es', 'Andrea Gomez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_asegurados`
--

CREATE TABLE `tabla_asegurados` (
  `id_asegurado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio_rep` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tabla_asegurados`
--

INSERT INTO `tabla_asegurados` (`id_asegurado`, `direccion`, `telefono`, `domicilio_rep`) VALUES
('Antonio García Olmos', 'Pg. de St. Joan, 46', '+34647230018', 'Pg. de St. Joan, 46'),
('Carmen González Jiménez', 'C/ de Girona, 124', '+34685642584', 'C/ de Girona, 124'),
('Daniel Martín García', 'C/ del Rosselló, 240', '+34642687591', 'C/ del Rosselló, 240'),
('Francisco Martínez', 'C/ d\'Aragó, 343', '+34615247764', 'C/ d\'Aragó, 343'),
('Isabel Pérez', 'C/ de Bolívia, 224', '+34608470018', 'C/ de Bolívia, 224'),
('Javier Gómez', 'C/ de Roger de Llúria, 110', '+34666458745', 'C/ de Roger de Llúria, 110'),
('Josefa Fernández', 'C/ de Pau Claris, 168', '+34648592751', 'C/ de Pau Claris, 168'),
('Laura Sánchez', 'C. del Bruc, 146', '+34635629458', 'C. del Bruc, 146'),
('Manuel Rodríguez', 'Av. Diagonal, 296', '+34613324078', 'Av. Diagonal, 296'),
('María Carmen López', 'Via Laietana, 48', '+34623238845', 'Via Laietana, 48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_averias`
--

CREATE TABLE `tabla_averias` (
  `id_averia` int(100) NOT NULL,
  `id_nombre_aseguradora` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_nombre_asegurado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(750) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_nombre_usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tabla_averias`
--

INSERT INTO `tabla_averias` (`id_averia`, `id_nombre_aseguradora`, `id_nombre_asegurado`, `fecha`, `descripcion`, `imagen`, `id_nombre_usuario`) VALUES
(1, 'Linea Directa S.A.	', 'Carmen González Jiménez', '2023-08-10', 'Reparación puerta de ingreso y ventanas traseras', 'imagen2.png', 'admin'),
(2, 'Santa Lucia S.A.', 'Antonio García Olmos', '2023-08-13', 'Cambio de pisos cocina y baño. Reparación cañería.', 'foto56.png', 'admin'),
(3, 'Linea Directa S.A.	', 'Daniel Martín García', '2023-07-12', 'Pintura exteriror e interior. Reparación completa de techo', 'imagen_025.png', 'usuario1'),
(4, 'Mapfre, SA', 'Francisco Martínez', '2023-08-15', 'Cambio de cristal y ventana delantera. Pintura interior', 'foto44.png', 'usuario3'),
(5, 'Mapfre, SA', 'Francisco Martínez', '2023-08-16', 'Reemplazo de tubería y reparación baño', 'imagen04.png', 'usuario3'),
(6, 'Santa Lucia S.A.', 'Isabel Pérez', '2023-08-17', 'Cambio de pisos living principal. Pintura interior', 'foto58.png', 'usuario2'),
(7, 'Linea Directa S.A.	', 'Javier Gómez', '2023-08-17', 'Cambio de ventana dormitorio y puerta principal', '', 'usuario2'),
(8, 'Mapfre, SA', 'Josefa Fernández', '2023-08-18', 'Reforma completa cocina y baño', 'foto_77.png', 'admin'),
(9, 'Santa Lucia S.A.', 'Laura Sánchez', '2023-08-19', 'Reparación ventana living y puerta trasera', 'foto015.png', 'usuario4'),
(10, 'Santa Lucia S.A.', 'Manuel Rodríguez', '2023-08-21', 'Trabajo de pintura interior y exterior', '', 'usuario1'),
(11, 'Linea Directa S.A.	', 'Daniel Martín García', '2023-08-21', 'Cambio de pisos living y cocina', 'imagen401.png', 'usuario3'),
(12, 'Mapfre, SA', 'Josefa Fernández', '2023-08-22', 'Reparación de aberturas posteriores. Remodelación cocina', 'imagen001.png', 'usuario1'),
(13, 'Linea Directa S.A.	', 'María Carmen López', '2023-08-24', 'Pintura exteriror e interior. Reparación completa de techo', 'foto63.png', 'usuario2'),
(14, 'Santa Lucia S.A.', 'Antonio García Olmos', '2023-08-23', 'Reparacion de baño y eliminación de humedad en pared. Pintura interior', 'imagen900.png', 'usuario4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuarios`
--

CREATE TABLE `tabla_usuarios` (
  `id_usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTRA` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privilegio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tabla_usuarios`
--

INSERT INTO `tabla_usuarios` (`id_usuario`, `CONTRA`, `privilegio`) VALUES
('admin', 'admin', 'administrador'),
('usuario1', 'contra123', 'usuario'),
('usuario2', 'contra123', 'usuario'),
('usuario3', 'contra123', 'administrador'),
('usuario4', 'contra123', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_aseguradoras`
--
ALTER TABLE `tabla_aseguradoras`
  ADD PRIMARY KEY (`id_aseguradora`);

--
-- Indices de la tabla `tabla_asegurados`
--
ALTER TABLE `tabla_asegurados`
  ADD PRIMARY KEY (`id_asegurado`);

--
-- Indices de la tabla `tabla_averias`
--
ALTER TABLE `tabla_averias`
  ADD PRIMARY KEY (`id_averia`),
  ADD KEY `id_nombre_aseguradora` (`id_nombre_aseguradora`),
  ADD KEY `id_nombre_asegurado` (`id_nombre_asegurado`),
  ADD KEY `id_nombre_usuario` (`id_nombre_usuario`);

--
-- Indices de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_averias`
--
ALTER TABLE `tabla_averias`
  MODIFY `id_averia` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tabla_averias`
--
ALTER TABLE `tabla_averias`
  ADD CONSTRAINT `tabla_averias_ibfk_1` FOREIGN KEY (`id_nombre_aseguradora`) REFERENCES `tabla_aseguradoras` (`id_aseguradora`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tabla_averias_ibfk_2` FOREIGN KEY (`id_nombre_asegurado`) REFERENCES `tabla_asegurados` (`id_asegurado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tabla_averias_ibfk_3` FOREIGN KEY (`id_nombre_usuario`) REFERENCES `tabla_usuarios` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
