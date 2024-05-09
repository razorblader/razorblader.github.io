-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2024 a las 00:40:00
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
-- Base de datos: `noventamin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`, `password`) VALUES
(3, 'TEST', 'test@gmail.com', '5512464879', 'Cuautitlan EdoMex', '2024-05-08 16:32:30', '2024-05-08 16:32:30', '', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 0, 3, 1),
(2, 2, 3, 1),
(3, 2, 2, 1),
(4, 3, 2, 1),
(5, 4, 5, 1),
(6, 5, 1, 1),
(7, 6, 1, 1),
(8, 7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `image_url` varchar(99) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `status`, `image_url`, `category`) VALUES
(1, 'Manchester United', 'La camiseta emblemática del club, con colores vibrantes y un ajuste cómodo para usar en cualquier ocasión', 1995.00, '1', 'manunited.png', 'premier'),
(2, 'Manchester City', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'mancity.png', 'premier'),
(3, 'Liverpool', 'La camiseta emblemática del club, con colores vibrantes y un ajuste cómodo para usar en cualquier ocasión', 1995.00, '1', 'liverpool.png', 'premier'),
(4, 'Chelsea', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'chelsea.png', 'premier'),
(5, 'Arsenal', 'La camiseta emblemática del club, con colores vibrantes y un ajuste cómodo para usar en cualquier ocasión.', 1995.00, '1', 'arsenal.png', 'premier'),
(6, 'Tottenham Hotspur', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'tottenham.png', 'premier'),
(7, 'Leicester City', 'La camiseta emblemática del club, con colores vibrantes y un ajuste cómodo para usar en cualquier ocasión.', 1995.00, '1', 'leister.png', 'premier'),
(8, 'West Ham United', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'westham.png', 'premier'),
(9, 'Wolverhampton Wanderers', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'wolves.png', 'premier'),
(10, 'Real Madrid', 'La camiseta emblemática del club, con colores vibrantes y un ajuste cómodo para usar en cualquier ocasión', 1995.00, '1', 'realmadrid.png', 'liga'),
(11, 'Futbol Club Barcelona', 'Confeccionado con tejidos de alta calidad que proporcionan una sensación de comodidad y transpirabilidad ', 1995.00, '1', 'fcb.png', 'liga'),
(12, 'Atletico de Madrid', 'Su diseño ergonómico y ajuste ceñido ofrecen una libertad de movimiento sin restricciones', 1995.00, '1', 'atleti.png', 'liga'),
(13, 'Betis', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'betis.png', 'liga'),
(14, 'Atlethic de Bilbao', 'Confeccionado con tejidos de alta calidad que proporcionan una sensación de comodidad y transpirabilidad ', 1995.00, '1', 'bilbao.png', 'liga'),
(15, 'Girona FC', 'Su diseño ergonómico y ajuste ceñido ofrecen una libertad de movimiento sin restricciones', 1995.00, '1', 'girona.png', 'liga'),
(16, 'Real Sociedad', 'Confeccionado con tejidos de alta calidad que proporcionan una sensación de comodidad y transpirabilidad ', 1995.00, '1', 'realsociedad.png', 'liga'),
(17, 'Sevilla', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'sevilla.png', 'liga'),
(19, 'Villareal', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'villareal.png', 'liga'),
(20, 'Inter', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'inter.png', 'serie'),
(21, 'AC Milan', 'Confeccionado con tejidos de alta calidad que proporcionan una sensación de comodidad y transpirabilidad ', 1995.00, '1', 'milan.png', 'serie'),
(22, 'Atalanta', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'atalanta.png', 'serie'),
(23, 'Fiorentina', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'fliorentina.png', 'serie'),
(24, 'Juventus', 'Su diseño ergonómico y ajuste ceñido ofrecen una libertad de movimiento sin restricciones', 1995.00, '1', 'juventus.png', 'serie'),
(25, 'Lazio', 'Confeccionado con tejidos de alta calidad que proporcionan una sensación de comodidad y transpirabilidad ', 1995.00, '1', 'lazio.png', 'serie'),
(26, 'Napoli', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'napoli.png', 'serie'),
(28, 'Sampdoria', 'Su diseño ergonómico y ajuste ceñido ofrecen una libertad de movimiento sin restricciones', 1995.00, '1', 'sampdoria.png', 'serie'),
(29, 'Torino', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'torino.png', 'serie'),
(31, 'Bayern Munich', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'bayern.png', 'bundes'),
(32, 'Borussia Dormunt', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'borussia.png', 'bundes'),
(33, 'Frankfurt', 'Su diseño ergonómico y ajuste ceñido ofrecen una libertad de movimiento sin restricciones', 1995.00, '1', 'frankfurt.png', 'bundes'),
(34, 'Hertha', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'Hertha.png', 'bundes'),
(35, 'Leipzing', 'Confeccionado con tejidos de alta calidad que proporcionan una sensación de comodidad y transpirabilidad ', 1995.00, '1', 'leipzing.png', 'bundes'),
(36, 'Bayern Leverkusen', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'leverkusen.png', 'bundes'),
(37, 'Monchengladbach', 'La camiseta de casa de este año, con detalles únicos y el escudo del equipo en el pecho.', 1995.00, '1', 'monchengladbach.png', 'bundes'),
(39, 'VFB', 'El jersey perfecto para mostrar tu apoyo en cada partido, con tecnología de última generación para un rendimiento óptimo', 1995.00, '1', 'vfb.png', 'bundes'),
(40, 'Wolfsburg', 'Su diseño ergonómico y ajuste ceñido ofrecen una libertad de movimiento sin restricciones', 1995.00, '1', 'Wolfsburg.png', 'bundes'),
(41, 'Jersey Nike Futbol Club América ', '', 1995.00, '1', 'ame.png', 'america'),
(42, 'Gorra Club América', '', 379.00, '1', 'gorra.png', 'america'),
(43, 'Balón Club América', '', 449.00, '1', 'baloname.png', 'america'),
(44, 'Jersey Nike Futbol Chivas ', '', 1995.00, '1', 'chiva.png', 'chivas'),
(45, 'Gorra Chivas', '', 359.00, '1', 'gorrach.png', 'chivas'),
(46, 'Balón Chivas', '', 389.00, '1', 'balonch.png', 'chivas'),
(47, 'Jersey Nike Futbol Cruz Azul', '', 1995.00, '1', 'azul.png', 'azul'),
(48, 'Gorra Cruz Azul', '', 429.00, '1', 'gorraazul.png', 'azul'),
(49, 'Balón Cruz Azul', '', 329.00, '1', 'azulbal.png', 'azul'),
(50, 'Balón Adidas oficial CHAMPIONS LEAGUE', 'Desde pases precisos hasta tiros al arco, este balón te inspira a alcanzar nuevos niveles de excelencia en cada toque.', 689.00, '1', 'ball.png', 'ball'),
(51, 'Balón De Fútbol Puma Orbita La Liga 1', 'Un balón de fútbol que encapsula la esencia del juego con su diseño aerodinámico y su construcción de alta calidad este balón te inspira a alcanzar nuevos niveles de excelencia en cada toque', 389.00, '1', 'ball1.png', 'ball'),
(52, ' Fussballliebe Sala Euro 2024', 'Confeccionado con los mejores materiales para garantizar un vuelo preciso y una sensación de control excepcional, este balón te permite expresar tu habilidad y creatividad en el campo.', 584.00, '1', 'ball2.png', 'ball'),
(53, 'Tenis De Fútbol Nike Mercurial Superfly Vii Academy Tf Jr', 'Con tecnología innovadora, este calzado está diseñado para ayudarte a alcanzar tu máximo potencial en cada partido. ', 929.00, '1', 'teni.png', 'tenis'),
(54, 'Tenis para Fútbol rápido Puma One TT', 'Un tenis de fútbol diseñado para ofrecer un rendimiento óptimo en el campo, con una combinación perfecta de tracción, comodidad y durabilidad', 929.00, '1', 'teni1.png', 'tenis'),
(55, 'Tenis De Futbol Nike Mercurial Superfly 7 Academy South México City Tf', 'Deja a atrás a tus rivales jugando con este par de Tenis de futbol Nike Mercurial Superfly 7 Academy South México City TF ', 1049.00, '1', 'teni2.png', 'tenis'),
(56, 'Guantes de Portero Adidas Ace Junior', 'Guante adidas de iniciación. Inspirado en la gama Ace Junior que vuelve, y no lo hace sólo en botas, la gama de guantes también se renueva. ', 459.00, '1', 'guante.png', 'guantes'),
(57, 'Guantes de Portero Adidas Ace Junior II', 'Guantes Adidas, elegidos por algunos de los mejores porteros del mundo como David de Gea, Keylor Navas, Manuel Neuer o Iker Casillas', 459.00, '1', 'guante1.png', 'guantes'),
(58, 'Guantes de Portero Adidas ', 'Un par de guantes de fútbol diseñados para brindarte un agarre excepcional y una protección confiable en cada intervención.', 369.00, '1', 'guante2.png', 'guantes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
