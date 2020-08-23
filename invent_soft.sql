-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2020 a las 05:52:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `invent.soft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articiculo`
--

CREATE TABLE `articiculo` (
  `codigo_art` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `placa` int(11) NOT NULL,
  `valor_unitario` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articiculo`
--

INSERT INTO `articiculo` (`codigo_art`, `grupo`, `placa`, `valor_unitario`, `id_usu`) VALUES
(0, 0, 0, 0, 1),
(4567, 2, 6789, 30000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion1`
--

CREATE TABLE `descripcion1` (
  `id_descripcion` int(11) NOT NULL,
  `nombre_art` varchar(20) NOT NULL,
  `tamaño` varchar(20) NOT NULL,
  `tipo_elemento` varchar(30) NOT NULL,
  `codigo_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `descripcion1`
--

INSERT INTO `descripcion1` (`id_descripcion`, `nombre_art`, `tamaño`, `tipo_elemento`, `codigo_art`) VALUES
(18, 'SILLA', '13', 'SILLA', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificacion`
--

CREATE TABLE `especificacion` (
  `id_e` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `observacion` text NOT NULL,
  `serial` varchar(30) NOT NULL,
  `fecha_re` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `codigo_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especificacion`
--

INSERT INTO `especificacion` (`id_e`, `marca`, `modelo`, `observacion`, `serial`, `fecha_re`, `codigo_art`) VALUES
(10, 'CASPER', '2017', 'ES COLOR ROJO', 'ABCD4567', '2020-07-10 03:41:33', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `nombre_rol` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_u` int(11) NOT NULL,
  `ambiente` varchar(30) NOT NULL,
  `bloque` varchar(30) NOT NULL,
  `codigo_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_u`, `ambiente`, `bloque`, `codigo_art`) VALUES
(2, 'INFORMATICA 1', 'INFORMATICA', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nombre`, `apellidos`, `telefono`, `correo`, `contraseña`, `id_rol`) VALUES
(1, 'Eldrin', 'Berrio', '3012904016', 'admintics@gmail.com', 'administradortics', 1),
(4, 'Martha Cecilia', 'Velez Maya', '3214567890', 'marthavelezm@gmail.com', '123', 2),
(5, 'Alejandro', 'Toro Castaño', '3236785764', 'soyunilegalhermoso@gmail.com', 'soyilegal', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articiculo`
--
ALTER TABLE `articiculo`
  ADD PRIMARY KEY (`codigo_art`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `descripcion1`
--
ALTER TABLE `descripcion1`
  ADD PRIMARY KEY (`id_descripcion`),
  ADD KEY `codigo_art` (`codigo_art`);

--
-- Indices de la tabla `especificacion`
--
ALTER TABLE `especificacion`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `codigo_art` (`codigo_art`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_u`),
  ADD KEY `codigo_art` (`codigo_art`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripcion1`
--
ALTER TABLE `descripcion1`
  MODIFY `id_descripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `especificacion`
--
ALTER TABLE `especificacion`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripcion1`
--
ALTER TABLE `descripcion1`
  ADD CONSTRAINT `descripcion1_ibfk_1` FOREIGN KEY (`codigo_art`) REFERENCES `articiculo` (`codigo_art`);

--
-- Filtros para la tabla `especificacion`
--
ALTER TABLE `especificacion`
  ADD CONSTRAINT `especificacion_ibfk_1` FOREIGN KEY (`codigo_art`) REFERENCES `articiculo` (`codigo_art`);

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`codigo_art`) REFERENCES `articiculo` (`codigo_art`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
