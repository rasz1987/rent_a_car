-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2018 a las 18:35:32
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `automoveis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoveis`
--

CREATE TABLE `automoveis` (
  `id` int(11) NOT NULL,
  `modelo_id` int(11) DEFAULT NULL,
  `cor_id` int(11) DEFAULT NULL,
  `disponibilidade` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `automoveis`
--

INSERT INTO `automoveis` (`id`, `modelo_id`, `cor_id`, `disponibilidade`) VALUES
(1, 15, 2, 0),
(2, 8, 1, 0),
(3, 1, 3, 1),
(4, 13, 7, 0),
(5, 4, 4, 1),
(6, 1, 6, 0),
(7, 9, 4, 1),
(8, 1, 3, 1),
(9, 6, 4, 0),
(10, 8, 4, 1),
(11, 4, 1, 1),
(12, 7, 5, 1),
(13, 4, 7, 1),
(14, 2, 6, 0),
(15, 13, 1, 1),
(16, 14, 1, 0),
(17, 7, 2, 1),
(18, 2, 3, 0),
(19, 1, 7, 1),
(20, 8, 4, 0),
(21, 3, 7, 0),
(22, 5, 5, 1),
(23, 11, 1, 1),
(24, 8, 6, 0),
(25, 7, 5, 0),
(26, 14, 5, 0),
(27, 3, 3, 1),
(28, 10, 3, 0),
(29, 11, 2, 1),
(30, 13, 7, 0),
(31, 1, 4, 1),
(32, 15, 4, 1),
(33, 12, 7, 0),
(34, 6, 3, 1),
(35, 8, 7, 1),
(36, 14, 4, 1),
(37, 5, 3, 1),
(38, 14, 5, 1),
(39, 13, 3, 1),
(40, 7, 4, 0),
(41, 1, 5, 1),
(42, 15, 6, 0),
(43, 15, 5, 0),
(44, 12, 7, 0),
(45, 9, 7, 1),
(46, 3, 2, 0),
(47, 1, 2, 1),
(48, 2, 2, 1),
(49, 4, 2, 1),
(50, 3, 3, 1),
(51, 8, 4, 1),
(52, 14, 5, 0),
(53, 1, 4, 0),
(54, 4, 7, 0),
(55, 5, 6, 1),
(56, 1, 7, 1),
(57, 6, 2, 0),
(58, 15, 5, 1),
(59, 11, 7, 1),
(60, 1, 3, 1),
(61, 12, 5, 0),
(62, 10, 5, 1),
(63, 9, 4, 0),
(64, 1, 2, 1),
(65, 4, 3, 1),
(66, 3, 6, 0),
(67, 14, 4, 1),
(68, 15, 6, 0),
(69, 12, 4, 0),
(70, 8, 4, 0),
(71, 3, 4, 0),
(72, 14, 7, 1),
(73, 15, 3, 0),
(74, 2, 7, 0),
(75, 4, 4, 0),
(76, 14, 5, 0),
(77, 15, 4, 1),
(78, 3, 3, 0),
(79, 6, 7, 0),
(80, 3, 7, 1),
(81, 3, 3, 1),
(82, 4, 5, 0),
(83, 12, 7, 1),
(84, 4, 3, 0),
(85, 12, 7, 0),
(86, 12, 7, 1),
(87, 10, 4, 1),
(88, 9, 6, 0),
(89, 7, 4, 1),
(90, 1, 4, 1),
(91, 5, 5, 1),
(92, 7, 2, 0),
(93, 3, 6, 0),
(94, 12, 4, 0),
(95, 11, 2, 0),
(96, 13, 3, 1),
(97, 5, 2, 0),
(98, 3, 1, 0),
(99, 4, 2, 0),
(100, 14, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cores`
--

CREATE TABLE `cores` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cores`
--

INSERT INTO `cores` (`id`, `nome`) VALUES
(1, 'vermelho'),
(2, 'verde'),
(3, 'preto'),
(4, 'branco'),
(5, 'cinzento'),
(6, 'azul'),
(7, 'amarelo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correios`
--

CREATE TABLE `correios` (
  `id` int(11) NOT NULL,
  `correo` varchar(250) DEFAULT NULL,
  `asunto` varchar(150) DEFAULT NULL,
  `mensaje` varchar(1000) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `correios`
--

INSERT INTO `correios` (`id`, `correo`, `asunto`, `mensaje`, `nombre`) VALUES
(29, 'rodolfosifontes1@gmail.com', '0', 'g', 'g');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricantes`
--

CREATE TABLE `fabricantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fabricantes`
--

INSERT INTO `fabricantes` (`id`, `nome`) VALUES
(1, 'Alfa Romeo'),
(2, 'BMW'),
(3, 'Audi'),
(4, 'Ford'),
(5, 'Fiat'),
(6, 'Nissan'),
(7, 'Peugeot'),
(8, 'Mercedes'),
(9, 'Toyota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `fabricante-id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `nome`, `fabricante-id`) VALUES
(1, 'Gulieta', 1),
(2, '320', 2),
(3, '120', 2),
(4, 'A3', 3),
(5, 'A4', 3),
(6, 'Escort', 4),
(7, 'Uno', 5),
(8, 'Qashqai', 6),
(9, 'Micra', 6),
(10, '106', 7),
(11, '308', 7),
(12, 'Classe A', 8),
(13, 'GLA', 8),
(14, 'Corolla', 9),
(15, 'Yaris', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(1500) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
(1, 'rasz1987', 'e10adc3949ba59abbe56e057f20f883e', 'rodolfosifontes1@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-model_idx` (`modelo_id`),
  ADD KEY `fk-color_idx` (`cor_id`);

--
-- Indices de la tabla `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correios`
--
ALTER TABLE `correios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-fabricante_idx` (`fabricante-id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `cores`
--
ALTER TABLE `cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `correios`
--
ALTER TABLE `correios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automoveis`
--
ALTER TABLE `automoveis`
  ADD CONSTRAINT `fk-color` FOREIGN KEY (`cor_id`) REFERENCES `cores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk-model` FOREIGN KEY (`modelo_id`) REFERENCES `modelos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `fk-fabricante` FOREIGN KEY (`fabricante-id`) REFERENCES `fabricantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
