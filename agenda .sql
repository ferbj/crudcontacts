-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2016 a las 06:06:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `personaId` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sexo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`personaId`, `nombre`, `apellido`, `telefono`, `direccion`, `email`, `sexo`) VALUES
(1, ' Guillermo', 'Romero', '00542545123', 'Argentina 1234', 'guille.romero@gmail.com', 'M'),
(3, 'Pedrito ', 'Los Palotes', '58785421', 'Colmena 2540', 'pedritopalotes@gmail.com', 'M'),
(105, 'Halla', 'Walton', '(209) 411-9576', 'P.O. Box 942, 9073 Ac Ave', 'dictum.eu.eleifend@eget.net', 'M'),
(106, 'Alec', 'Bates', '(663) 455-0924', 'Ap #322-8157 Donec Rd.', 'rutrum.non@laoreetipsum.edu', 'M'),
(107, 'Chelsea', 'Hardy', '(141) 414-5167', '2670 Ullamcorper, Street', 'sit.amet@eleifendnon.co.uk', 'M'),
(108, 'Akeem', 'Mitchell', '(823) 930-5790', 'P.O. Box 663, 4107 Scelerisque Av.', 'Morbi@nec.co.uk', 'M'),
(109, 'Rana', 'Patterson', '(168) 453-2783', '7577 Porttitor Rd.', 'eu.eleifend@mauris.ca', 'M'),
(111, 'Cedric', 'Cortez', '(625) 495-7746', 'Ap #656-2645 Semper Street', 'Sed.pharetra@scelerisque.co.uk', 'M'),
(112, 'Casey', 'Emerson', '(832) 338-0273', '341-9983 Sed Av.', 'parturient.montes@arcu.ca', 'M'),
(113, 'Virginia', 'Vaughn', '(861) 239-1688', '8407 Vivamus Street', 'Donec.est.mauris@velitegetlaoreet.net', 'M'),
(115, 'Anjolie', 'Holland', '(716) 940-1751', 'P.O. Box 607, 172 Ullamcorper. St.', 'et.ultrices.posuere@leoelementum.org', 'M'),
(116, 'Maya', 'Pearson', '(632) 320-4265', 'Ap #873-5646 Pellentesque Rd.', 'eget.venenatis.a@venenatis.ca', 'M'),
(117, 'Destiny', 'Haney', '(542) 984-2748', '140-8960 Dolor Av.', 'massa.non.ante@facilisiseget.ca', 'M'),
(118, 'Leigh', 'Deleon', '(124) 265-7972', 'Ap #691-4835 Dui Rd.', 'elit@bibendumullamcorper.co.uk', 'M'),
(119, 'Magee', 'Lowery', '(222) 812-5482', 'Ap #350-1934 Orci. Road', 'Maecenas@ornareegestas.net', 'M'),
(120, 'Dane', 'Spears', '(652) 299-7323', '1501 Eleifend Road', 'non@Donecnibh.edu', 'M'),
(121, 'Lucy', 'Sampson', '(738) 462-4048', 'Ap #292-7703 Luctus Rd.', 'eget.metus.In@diam.net', 'M'),
(122, 'Boris', 'Spence', '(559) 563-5638', 'P.O. Box 174, 7493 Molestie Road', 'justo.nec@eu.net', 'M'),
(123, 'Uma', 'Ashley', '(436) 421-9560', '6908 Consequat St.', 'suscipit.nonummy@telluslorem.org', 'M'),
(124, 'Vera', 'Ayala', '(704) 672-1769', '5562 Ante Rd.', 'lectus.a.sollicitudin@ipsum.org', 'M'),
(125, 'Amos', 'Shepherd', '(652) 978-0059', 'P.O. Box 286, 2676 Amet Rd.', 'ullamcorper.nisl.arcu@quismassa.com', 'M'),
(126, 'Karina', 'Ball', '(551) 500-7844', '4369 Est Ave', 'orci@Donecfeugiat.edu', 'M'),
(129, 'Caldwell', 'Joyner', '(856) 743-2748', 'Ap #750-7378 Augue Rd.', 'vulputate@Aliquam.org', 'M'),
(130, 'Tanner', 'Murphy', '(540) 389-3659', 'P.O. Box 794, 2729 Egestas Avenue', 'sagittis@dis.ca', 'M'),
(131, 'Wyatt', 'Craig', '(204) 568-7710', '665-7859 Malesuada Ave', 'amet@nunc.ca', 'M'),
(132, 'Cailin', 'Terrell', '(954) 410-0792', 'Ap #564-7861 Ut, Rd.', 'rutrum@liberoDonec.com', 'M'),
(133, 'Myles', 'Goodwin', '(891) 907-9721', 'Ap #282-3679 Rutrum Rd.', 'eget@euismodet.edu', 'M'),
(135, 'Neve', 'Carr', '(519) 276-7368', 'Ap #355-5978 Dis Rd.', 'penatibus.et.magnis@egestaslacinia.co.uk', 'M'),
(136, 'Josiah', 'Sargent', '(251) 920-4016', '685-154 Nec, Av.', 'sagittis@ac.net', 'M'),
(137, 'Aimee', 'Harrell', '(299) 722-5577', 'Ap #696-5758 Et Avenue', 'eget.ipsum.Suspendisse@vulputatemauris.org', 'M'),
(138, 'Josephine', 'Kelly', '(101) 531-1769', 'P.O. Box 972, 9172 Nec, Street', 'hendrerit.consectetuer.cursus@ullamcorperviverraMaecenas.edu', 'M'),
(139, 'Ulysses', 'Oneil', '(864) 167-4249', '206-3641 Sagittis. Road', 'Sed@duiin.net', 'M'),
(140, 'Nina', 'Wilson', '(464) 284-2299', 'P.O. Box 576, 9489 Ipsum Street', 'neque@maurissagittis.ca', 'M'),
(141, 'Idola', 'Mcdonald', '(603) 628-1096', 'Ap #768-6513 Risus Avenue', 'nunc.id.enim@pretiumaliquetmetus.ca', 'M'),
(142, 'Regina', 'Murray', '(347) 599-3233', '609-6360 Ut Road', 'Curabitur.ut.odio@turpis.com', 'F'),
(143, 'Malik', 'Wall', '(572) 687-8142', '5186 Ipsum St.', 'penatibus.et.magnis@tinciduntduiaugue.net', 'M'),
(144, 'Wesley', 'Garrett', '(334) 423-3528', 'Ap #669-8041 Purus. Ave', 'pellentesque.tellus@odioEtiam.ca', 'M'),
(145, 'Lara', 'Barker', '(754) 835-9528', '2556 Amet Street', 'venenatis@sit.org', 'M'),
(146, 'Sharon', 'Lynn', '(616) 281-1687', '9140 Nulla St.', 'dui.Cras.pellentesque@utpharetra.edu', 'M'),
(147, 'Daphne', 'Craft', '(112) 675-2966', 'P.O. Box 956, 2679 Morbi St.', 'porttitor.scelerisque.neque@aneque.co.uk', 'M'),
(148, 'Gemma', 'Coleman', '(951) 117-5666', '395-1089 Accumsan St.', 'sit.amet.risus@anteNuncmauris.edu', 'M'),
(149, 'Fritz', 'Jimenez', '(664) 546-0745', 'Ap #188-6896 Inceptos Ave', 'imperdiet.non@Donec.com', 'M'),
(150, 'Regan', 'Donaldson', '(647) 451-8088', '3063 Malesuada Rd.', 'sem.mollis@idrisus.edu', 'M'),
(151, 'Ivan', 'Howard', '(227) 635-0793', '1116 Vitae St.', 'tellus@Proin.ca', 'M'),
(152, 'Jolie', 'Rowe', '(850) 593-0799', 'P.O. Box 522, 9563 Enim Av.', 'cursus.Nunc.mauris@anteipsumprimis.org', 'M'),
(153, ' Tanya', 'Abbott', '902664-2559', '5016 Maecenas Rd.', 'convallis@turpisegestas.net', 'F'),
(154, 'Kylan', 'Gilmore', '(815) 719-7647', '207 Dolor St.', 'malesuada.fringilla@Nuncquis.edu', 'M'),
(155, 'Axel', 'Mcbride', '(701) 200-9602', 'P.O. Box 700, 7079 Nisi Ave', 'a.aliquet.vel@Fuscealiquet.edu', 'M'),
(156, 'Omar', 'Hogan', '(493) 872-3720', '3848 Nascetur Rd.', 'orci@fermentum.ca', 'M'),
(157, 'Winter', 'Mendoza', '(492) 513-0912', 'P.O. Box 713, 5403 Phasellus Ave', 'laoreet@velpede.edu', 'M'),
(158, 'Ayanna', 'Scott', '(901) 778-3801', '814-7558 Sodales St.', 'eros.Proin.ultrices@fringilla.co.uk', 'M'),
(160, 'Russell', 'Lynch', '(637) 788-1612', 'Ap #750-7021 A Avenue', 'est@montes.edu', 'M'),
(161, 'Georgia', 'Gates', '(610) 198-9872', '895-398 Commodo Avenue', 'eleifend.vitae@est.edu', 'M'),
(162, 'Hedy', 'Hicks', '(383) 258-9615', 'Ap #189-1281 Aenean Rd.', 'diam@sitamet.com', 'M'),
(164, 'Graiden', 'Wright', '(633) 648-7709', '918-114 Pulvinar Rd.', 'magna.a.tortor@erat.co.uk', 'M'),
(165, 'Ahmed', 'Castaneda', '(696) 892-7606', 'Ap #561-7903 Ad St.', 'quis.accumsan.convallis@interdum.edu', 'M'),
(166, 'Renee', 'Day', '(662) 503-1470', '9982 Nibh. Rd.', 'non.dapibus.rutrum@volutpatNulladignissim.edu', 'M'),
(167, 'Isadora', 'Mosley', '(708) 808-1764', 'Ap #703-5708 Urna Ave', 'ac.urna@montesnascetur.com', 'M'),
(168, 'Daniel', 'Lee', '(277) 937-0175', '346-1495 Arcu. Avenue', 'lobortis.Class.aptent@consectetueripsum.com', 'M'),
(170, 'Mara', 'Burton', '(285) 917-9514', 'P.O. Box 919, 4816 Dignissim Ave', 'est.arcu@ametante.org', 'M'),
(171, 'Claudia', 'Miller', '(506) 240-3810', '784-6878 Sagittis St.', 'quis.diam.Pellentesque@PhasellusnullaInteger.edu', 'M'),
(173, 'Maxwell', 'Mckee', '(541) 329-6885', '939 Fermentum Ave', 'id.risus.quis@suscipit.net', 'M'),
(174, 'Ainsley', 'Pittman', '(467) 179-0754', '3074 Odio, Road', 'ac@tristique.org', 'M'),
(175, ' Lillian', 'Velazquez', '745650-2424', '993-7194 Lectus. Rd.', 'ad.litora.torquent@Aliquam.co.uk', 'F'),
(176, 'Macaulay', 'Hopkins', '(568) 311-9575', '483-4829 Ante St.', 'volutpat.Nulla.dignissim@ad.ca', 'M'),
(178, 'Audra', 'Hayden', '(127) 686-6154', '909-7243 Amet, Av.', 'penatibus.et@egetvolutpatornare.org', 'M'),
(179, 'Chantale', 'Carrillo', '(642) 705-9700', '679-8658 Egestas St.', 'lacinia@commodoauctorvelit.edu', 'M'),
(180, 'Morgan', 'Herman', '(678) 628-1294', '232-1873 Et Avenue', 'feugiat.Lorem.ipsum@Proin.edu', 'M'),
(181, 'Lillith', 'Munoz', '(217) 472-5181', '699-701 Nec Ave', 'purus.Nullam.scelerisque@euismodac.net', 'M'),
(182, 'Jerome', 'Padilla', '(526) 389-7480', 'Ap #775-3139 Sed Avenue', 'eget@Suspendissealiquetmolestie.com', 'M'),
(183, 'Sonia', 'Griffith', '(890) 429-2675', '8359 Maecenas Ave', 'dui@magnisdis.com', 'M'),
(184, 'Sonia', 'Nguyen', '(671) 161-7666', 'P.O. Box 398, 7956 Malesuada St.', 'nisi@massaMauris.ca', 'M'),
(185, 'Herrod', 'Dyer', '(209) 478-1665', '2386 Ante, St.', 'Sed.id@Suspendissesed.com', 'M'),
(186, 'Xavier', 'Valentine', '(424) 334-2545', 'Ap #148-4448 Mauris Rd.', 'ornare.libero@vehiculaet.org', 'M'),
(187, 'Blaine', 'Hardy', '(480) 550-4139', 'P.O. Box 780, 6647 Fermentum Ave', 'ipsum@Duisat.co.uk', 'M'),
(188, 'Wendy', 'Gonzales', '(193) 247-9590', '1576 Ut Rd.', 'cubilia@quam.com', 'M'),
(190, 'Jeanette', 'Vasquez', '(477) 375-0905', '684-747 Mollis. St.', 'Cras.dolor@eu.edu', 'M'),
(192, 'Georgia', 'Horn', '(135) 548-6114', 'P.O. Box 728, 1018 Risus. Ave', 'ac@eratEtiamvestibulum.co.uk', 'M'),
(193, 'Allen', 'Dale', '(456) 318-2160', 'Ap #662-6744 Senectus Ave', 'sem.elit@arcu.ca', 'M'),
(194, 'Mona', 'Rose', '(888) 603-0075', '119 Cras Rd.', 'dapibus@ipsum.com', 'M'),
(195, 'Claudia', 'Moses', '(907) 359-5248', '108-1056 Curabitur Avenue', 'eu.ligula.Aenean@mauris.org', 'M'),
(196, 'Dacey', 'Oconnor', '(426) 381-6199', 'Ap #631-3023 Phasellus Street', 'tincidunt@Nullamsuscipitest.com', 'M'),
(197, 'Hayley', 'Roman', '(985) 934-1016', '278-1119 Metus. Avenue', 'purus@eratVivamus.ca', 'M'),
(198, 'Quon', 'Malone', '(246) 303-5859', 'Ap #538-9342 Fusce Road', 'dictum.Phasellus.in@maurisIntegersem.org', 'M'),
(199, 'Wyoming', 'Wilkinson', '(665) 199-1593', 'Ap #531-1419 At, Road', 'feugiat@sodalesnisi.edu', 'M'),
(201, 'Acton', 'Cooke', '(260) 410-1665', '552-3757 Ante Street', 'diam@ac.ca', 'M'),
(202, 'Zachery', 'Sims', '(793) 872-4783', 'Ap #441-3862 Odio. Av.', 'magna@urna.org', 'M'),
(203, 'Dahlia', 'Savage', '(839) 157-1341', 'Ap #839-7845 Amet, Rd.', 'sapien.imperdiet@infaucibusorci.org', 'M'),
(209, 'Daniel', 'Plenge Flores', '98098211', 'Calle Rio Chotano 254', 'danielplenge@hotmail.com', 'M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`personaId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `personaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
