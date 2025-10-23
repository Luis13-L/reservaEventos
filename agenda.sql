-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2025 a las 19:06:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbleventos`
--

CREATE TABLE `tbleventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbleventos`
--

INSERT INTO `tbleventos` (`id`, `title`, `descripcion`, `color`, `start`, `end`) VALUES
(1, 'Evento de prueba', 'Pruebas jorge luis', '#13ec3e', '2025-09-19 02:27:39', '2025-09-19 02:27:39'),
(2, '', '', '', '2025-09-19 18:27:39', '2025-09-20 18:27:39'),
(3, 'Evento de prueba', 'Pruebas jorge luis', '#13ec3e', '2025-09-19 02:27:39', '2025-09-19 02:27:39'),
(4, 'Evento de prueba', 'Pruebas jorge luis', '#13ec3e', '2025-09-19 02:27:39', '2025-09-19 02:27:39'),
(5, 'Navidad', 'Pruebas jorge luis', '#13ec3e', '2025-09-19 02:27:39', '2025-09-19 02:27:39'),
(6, 'Navidad', 'holaa', '#26c723', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Navidad', 'holaa', '#26c723', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Navidad', 'holaaa', '#ca982b', '2025-09-19 18:53:00', '2025-09-19 18:53:00'),
(9, 'Navidad 2 ', 'holaa navidad', '#000000', '2025-09-21 12:00:00', '2025-09-21 12:00:00'),
(10, 'Navidad 2 ', 'pruebaaa', '#f71818', '2025-09-22 12:00:00', '2025-09-22 12:00:00'),
(11, 'Navidad 2 ', 'api', '#27ff0a', '2025-09-23 12:00:00', '2025-09-23 12:00:00'),
(12, 'Navidad 2 ', 'nnnn', '#110df8', '2025-09-24 12:00:00', '2025-09-24 12:00:00'),
(13, 'Navidad 2 ', 'holaaa', '#e60a0a', '2025-09-16 12:00:00', '2025-09-16 12:00:00'),
(14, 'Navidad 2 ', 'holaaa', '#e60a0a', '2025-09-16 12:00:00', '2025-09-16 12:00:00'),
(17, 'Prueba Depa', 'Prueba de agenda', '#dd0808', '2025-09-20 15:02:00', '2025-09-20 15:02:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbleventos_salones`
--

CREATE TABLE `tbleventos_salones` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbleventos`
--
ALTER TABLE `tbleventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbleventos_salones`
--
ALTER TABLE `tbleventos_salones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbleventos`
--
ALTER TABLE `tbleventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbleventos_salones`
--
ALTER TABLE `tbleventos_salones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
