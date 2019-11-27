-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2019 a las 14:14:37
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `unimarvel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `cod_barras` int(11) NOT NULL,
  `nombre` tinytext,
  `valor` float DEFAULT NULL,
  `descripción` text,
  `foto` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `store`
--

INSERT INTO `store` (`cod_barras`, `nombre`, `valor`, `descripción`, `foto`) VALUES
(1, 'Capitán America', 4800, 'La remera del primer vengador de Marvel, Con un estilo unico y diferente.', '772866-MLA31024701141_062019-O.jpg'),
(2, 'Hulk', 4800, 'Durante la detonación experimental de una bomba gamma, el científico Robert Bruce Banner salva al adolescente Rick Jones, que ha conducido al campo de pruebas; Banner empuja a Jones a una trinchera para salvarlo, pero es golpeado por la explosión, absorbiendo enormes cantidades de radiación gamma. Así es creado Hulk.', '925031-MLA31045987967_062019-O.jpg'),
(3, 'Iron Man', 4800, 'Anthony Stark nació con una inteligencia extrema. Después de la muerte de sus padres cuando tenía 21 años, Stark heredó Stark Industries (en español Industrias Stark). Después de ser herido en una zona de guerra, construyó una armadura que ayudaría a mantenerlo con vida. Stark se dió cuenta que gracias a su armadura, él podía ayudar a la gente, así se convirtió en Iron Man. ', '631402-MLA31125852823_062019-O.jpg'),
(4, 'Thor', 4800, 'El padre de Thor, Odín, decide que su hijo necesita que le enseñe la humildad y, en consecuencia, coloca a Thor (sin recuerdos de la divinidad) en el cuerpo y los recuerdos de un estudiante de medicina humana existente, parcialmente discapacitado, Donald Blake. Después de convertirse en médico y de vacaciones en Noruega, Blake presencia la llegada de una partida de exploración alienígena. Blake huye de los extraterrestres a una cueva. Después de descubrir el martillo de Thor, Mjolnir (disfrazado como un bastón) y golpearlo contra una roca, se transforma en el dios del trueno.', '719649-MLA31116005682_062019-O.jpg'),
(5, 'Spiderman', 4800, 'A Spiderman lo picó una araña radioactiva y lo dotó de una nueva personalidad: el Hombre Araña. ... Spiderman, o Peter Parker, es un superhéroe que se halla a favor de la ley, de la justicia.', '649425-MLA31017104720_062019-O.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE IF NOT EXISTS `talles` (
  `cod_barras` int(11) DEFAULT NULL,
  `talle` tinytext,
  `stock` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`cod_barras`, `talle`, `stock`) VALUES
(1, 'M', 13),
(1, 'S', 15),
(1, 'L', 10),
(1, 'XL', 8),
(2, 'M', 15),
(2, 'S', 15),
(2, 'L', 12),
(2, 'XL', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`cod_barras`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
