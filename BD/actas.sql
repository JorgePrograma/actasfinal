-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2022 a las 17:22:54
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `id` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `sitio` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime NOT NULL,
  `tema` varchar(200) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `participantes` varchar(500) NOT NULL,
  `conclusion` varchar(300) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `estadoa` date NOT NULL,
  `fechaa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`id`, `cedula`, `cargo`, `sitio`, `fecha`, `hora`, `tema`, `estado`, `participantes`, `conclusion`, `responsable`, `actividad`, `estadoa`, `fechaa`) VALUES
(1, 1065379371, 'Profesor', 'lorica', '2022-02-03', '0000-00-00 00:00:00', 'los beneficios de los programadores', 'Finalizado', 'josd', 'jsjjf', '', '', '0000-00-00', ''),
(3, 122356, 'Profesor', 'lorica', '2022-02-02', '0000-00-00 00:00:00', 'cualquiera', 'Procesando', '12', '12', 'juans', 'juans', '0000-00-00', '2022-03-16'),
(7, 123, 'Profesor', 'lorica', '2022-12-31', '0000-00-00 00:00:00', 'pedagogia', 'Procesando', 'maria', 'maria es buena', 'maria', 'maria debe ex´poner', '0000-00-00', '2022-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `ida` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `fechaa` date NOT NULL,
  `estadoa` varchar(20) NOT NULL,
  `id_responsable` int(10) NOT NULL,
  `actividad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`ida`, `id_usuario`, `fechaa`, `estadoa`, `id_responsable`, `actividad`) VALUES
(1, 1, '2022-02-19', 'Administrador', 1, '1'),
(2, 10, '2022-03-04', 'sin Iniciar', 0, 'crear pan'),
(3, 2, '2022-02-24', 'sin Iniciar', 0, 'ninguna'),
(4, 9, '0009-09-09', 'sin Iniciar', 9, '9'),
(5, 25, '2022-12-31', 'Procesando', 12, '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `ruc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `razon` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `ruc`, `nombre`, `telefono`, `direccion`, `razon`) VALUES
(1, '71347267', 'Universidad De Cordoba', '925491523', 'Colombia - Cordoba', 'Generando Estudiantes de Calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(10) NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `cedula`, `correo`, `clave`, `rol`, `estado`) VALUES
(1, 'admin', 'admin', 123, 'admin2', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'Funcionario', 1),
(2, 'jose', 'jose', 1234, 'joselito@gmail.com', '3b4bb6dc4b5cd4785cede954ed18246fee7429e8cb77e2179e632a2651b52f52', 'Estudiante', 1),
(4, 'maria', 'maria15', 12345, 'maria@hotmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Profesor', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`ida`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `ida` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
