-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2019 a las 19:21:49
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cuspide`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `ISBN` int(11) NOT NULL,
  `TITULO` text NOT NULL,
  `AUTOR` text NOT NULL,
  `EDITORIAL` text NOT NULL,
  `GENERO` text NOT NULL,
  `TAPA` text NOT NULL,
  `RESUMEN` text NOT NULL,
  `STOCK` int(11) NOT NULL,
  `PRECIO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ISBN`, `TITULO`, `AUTOR`, `EDITORIAL`, `GENERO`, `TAPA`, `RESUMEN`, `STOCK`, `PRECIO`) VALUES
(101014, 'CARRIE\r\n', 'Stephen King\r\n', 'Debolsillo\r\n', 'Terror\r\n', 'carrie.jpg', 'El escalofriante caso de una joven de apariencia insignificante que se transformó en un ser de poderes anormales, sembrando el terror en la ciudad. Con pulso mágico para mantener la tensión a lo largo de todo el libro, Stephen King narra la atormentada adolescencia de Carrie, y nos envuelve en una atmósfera sobrecogedora cuando la muchacha realiza una serie de descubrimientos hasta llegar al terrible momento de la venganza. Esta novela fue llevada al cine con un inmenso éxito de público y crítica.\r\n', 4, 895),
(123456, 'EL ALQUIMISTA', 'Paulo Coelho\r\n', 'Planeta\r\n', 'Novela\r\n', 'alquimista.jpg\r\n', 'Cuando una persona desea realmente algo, el Universo entero conspira para que pueda realizar su sueño. Basta con aprender a escuchar los dictados del corazón y a descifrar el lenguaje que está más allá de las palabras. El Alquimista relata la historia de Santiago, un joven pastor andaluz que viaja desde su tierra natal hacia el desierto egipcio en busca de un tesoro oculto en las pirámides. Nadie sabe lo que contiene el tesoro, ni si Santiago será capaz de superar los obstáculos del camino. Pero lo que comienza como un viaje en busca de riquezas se convierte en un descubrimiento del tesoro interior.\n', 21, 789),
(369852, 'MARTÍN FIERRO\r\n', 'José Hernández\r\n', 'Alianza Editorial\r\n', 'Literatura\r\n', 'martinfierro.jpg\r\n', 'Se trata de un gaucho trabajador de las pampas bonaerenses, que vive con su mujer y dos hijos, es reclutado forzosamente para servir en un fortín e integrar las milicias que luchaban defendiendo la frontera argentina contra los indígenas, dejando desamparada a su familia.\r\n', 8, 526),
(741258, 'CAZADOR DE SUEÑOS\r\n', 'Stephen King\r\n', 'Plaza James\r\n', 'Terror\r\n', 'cazador.jpg\r\n', 'Había una vez cuatro chicos, compañeros en todo, que decidieron proteger a un chico indefenso atormentado por el tirano del colegio. Su acción marcó un cambio decisivo en sus vidas. Un cambio tan grande, que tardarían veinticinco años en entender su importancia... Ahora son adultos, con más problemas y más desilusiones, pero una vez al año se reúnen para cazar en los bosques de Maine. Este año, un desconocido entra en su cabaña y, aturdido y confuso, balbucea frases incomprensibles sobre extrañas luces en el cielo. En poco tiempo, los cuatro amigos se encuentran en medio de una lucha terrorífica contra seres de otro mundo. La única posibilidad de salvación radica en encontrar a aquel amigo del pasado, el que sabía cazar sueños y que sabrá también frustrar los sueños de los invasores... Una obra maestra del terror y una historia de ternura y amistad profunda.\r\n', 16, 874),
(784123, 'HARRY POTTER  y la piedra filosofal\r\n', 'J.K. Rowling\r\n', 'Salamandra\r\n', 'Novela', 'potter.jpg\r\n', 'El día de su cumpleaños, Harry Potter descubre que es hijo de dos conocidos hechiceros, de los que ha heredado poderes mágicos. Debe asistir a una famosa escuela de magia y hechicería, donde entabla una amistad con dos jóvenes que se convertirán en sus compañeros de aventura. Durante su primer año en Hogwarts, descubre que un malévolo y poderoso mago llamado Voldemort está en busca de una piedra filosofal que alarga la vida de quien la posee.\r\n', 15, 1236),
(895712, 'SIETE FUEGOS - Mi cocina argentina\r\n', 'Francis Mallmann\r\n', 'Alfaomega\r\n', 'Gastronomía\r\n', 'sietefuegos.jpg', 'Francis Mallmann es, sin duda, el chef más genial de la Argentina. Es también, desde luego, el más famoso, el más original y el de mayor éxito, tanto por su trayectoria como cocinero y dueño de restaurantes como por los premios que ha recibido. Dueño de una personalidad única, este auténtico poeta de la cocina combina a la perfección la palabra, el paisaje, los ingredientes, la cocción y el arte del buen comer y el buen vivir.\r\n', 23, 3586),
(985632, 'EL SEÑOR DE LOS ANILLOS - La comunidad del anillo\r\n', 'J.R.R. Tolkien\r\n', 'Planeta\r\n', 'Novela\r\n', 'sr_anillos.jpg', 'Primera parte de la trilogía de El Señor de los Anillos: ''En la adormecida e idílica Comarca, un joven hobbit recibe un encargo: custodiar el Anillo Único y emprender el viaje para su destrucción en las Grietas del Destino''. A pesar de ser un libro de aventuras, con elfos y gnomos, está considerado como uno de los más grandes trabajos literarios del s. XX.\r\n', 10, 987),
(987654, 'DISEÑO DE BASES DE DATOS - Problemas resueltos\r\n', 'Adoración de Miguel y otros\r\n', 'Alfaomega\r\n', 'Informática\r\n', 'basedatos.jpg', 'En el libro mediante una colección de 50 problemas se ponen en práctica los conceptos teóricos sobre metodologías de desarrollo de Bases de Datos, análisis conceptual utilizando el modelo E/R, diseño lógico empleando el modelo relacional, teoría de normalización de relaciones y Bases de Datos distribuidas. Cada capítulo incluye una introducción con una panorámica de los aspectos teóricos requeridos para poder resolver los problemas propuestos.\r\n', 35, 2356);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ISBN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
