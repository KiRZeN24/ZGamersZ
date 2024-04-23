-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 19:48:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zgamersz`
--
CREATE DATABASE IF NOT EXISTS `zgamersz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zgamersz`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `plataforma` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `nombre`, `precio`, `plataforma`, `imagen`) VALUES
(1, 'Star Wars Jedi: Survivor', 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg'),
(2, 'Marvel\'s Midnight Suns', 21.64, 'Xbox', 'img/marvel-s-midnight-suns-.jpg'),
(3, 'Like a Dragon: Ishin!', 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg'),
(4, 'Forspoken', 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg'),
(5, 'Watch Dogs Legion', 8.12, 'PC', 'img/watch-dogs-legion-pc-juego-ubisoft-connect-europe-cover.jpg'),
(6, 'F1 23', 79.99, 'PC', 'img/f1-23-pc-juego-steam-cover.jpg'),
(7, 'Final Fantasy XVI', 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg'),
(8, 'Ghostrunner', 5.54, 'PC', 'img/ghostrunner-pc-juego-steam-cover.jpg'),
(9, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` float NOT NULL,
  `plataforma` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nombre`, `precio`, `cantidad`, `total`, `plataforma`, `imagen`, `email`) VALUES
(5, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', ''),
(6, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 1, 65.49, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', ''),
(7, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', ''),
(8, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 1, 65.49, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', ''),
(9, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', ''),
(10, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', ''),
(11, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(12, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(13, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(14, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(15, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(16, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(17, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(18, 'Star Wars Jedi: Survivor', 49.99, 2, 99.98, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(19, 'Star Wars Jedi: Survivor', 49.99, 2, 99.98, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(20, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(21, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 5, 327.45, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', 'carlos@carlos.es'),
(22, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(23, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 5, 327.45, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', 'carlos@carlos.es'),
(24, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(25, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 5, 327.45, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', 'carlos@carlos.es'),
(26, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(27, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 5, 327.45, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', 'carlos@carlos.es'),
(28, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es'),
(29, 'The Legend of Zelda: Tears of the Kingdom', 65.49, 5, 327.45, 'Nintendo', 'img/the-legend-of-zelda-tears-of-the-kingdom-switch-switch-juego-nintendo-eshop-europe-cover.jpg', 'carlos@carlos.es'),
(30, 'Like a Dragon: Ishin!', 41.99, 1, 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg', 'carlos@carlos.es'),
(31, 'Forspoken', 43.92, 1, 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg', 'carlos@carlos.es'),
(32, 'Final Fantasy XVI', 79.99, 1, 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg', 'carlos@carlos.es'),
(33, 'F1 23', 79.99, 6, 479.94, 'PC', 'img/f1-23-pc-juego-steam-cover.jpg', 'alonso@alonso.es'),
(34, 'Like a Dragon: Ishin!', 41.99, 1, 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg', 'carlos@carlos.es'),
(35, 'Forspoken', 43.92, 1, 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg', 'carlos@carlos.es'),
(36, 'Final Fantasy XVI', 79.99, 1, 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg', 'carlos@carlos.es'),
(37, 'Like a Dragon: Ishin!', 41.99, 1, 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg', 'carlos@carlos.es'),
(38, 'Forspoken', 43.92, 1, 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg', 'carlos@carlos.es'),
(39, 'Final Fantasy XVI', 79.99, 1, 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg', 'carlos@carlos.es'),
(40, 'Like a Dragon: Ishin!', 41.99, 1, 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg', 'carlos@carlos.es'),
(41, 'Forspoken', 43.92, 1, 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg', 'carlos@carlos.es'),
(42, 'Final Fantasy XVI', 79.99, 1, 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg', 'carlos@carlos.es'),
(43, 'Like a Dragon: Ishin!', 41.99, 1, 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg', 'carlos@carlos.es'),
(44, 'Forspoken', 43.92, 1, 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg', 'carlos@carlos.es'),
(45, 'Final Fantasy XVI', 79.99, 1, 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg', 'carlos@carlos.es'),
(46, 'Like a Dragon: Ishin!', 41.99, 1, 41.99, 'PlayStation', 'img/like-a-dragon-ishin.jpg', 'carlos@carlos.es'),
(47, 'Forspoken', 43.92, 1, 43.92, 'PlayStation', 'img/forspoken-pc-juego-steam-europe-cover.jpg', 'carlos@carlos.es'),
(48, 'Final Fantasy XVI', 79.99, 1, 79.99, 'PlayStation', 'img/final-fantasy-xvi-pc-juego-cover.jpg', 'carlos@carlos.es'),
(49, 'Star Wars Jedi: Survivor', 49.99, 1, 49.99, 'PlayStation', 'img/star-wars-jedi-survivor.jpg', 'carlos@carlos.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `pass`) VALUES
(2, 'Carlos', 'carlos@carlos.es', '1234'),
(3, 'Alonso', 'alonso@alonso.es', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
