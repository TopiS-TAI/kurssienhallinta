-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 01:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurssienhallinta`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurssikirjautumiset`
--

CREATE TABLE `kurssikirjautumiset` (
  `id` int(11) NOT NULL,
  `opiskelija` int(11) NOT NULL,
  `kurssi` int(11) NOT NULL,
  `kirjautumisaika` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurssikirjautumiset`
--

INSERT INTO `kurssikirjautumiset` (`id`, `opiskelija`, `kurssi`, `kirjautumisaika`) VALUES
(1, 37, 1, '2024-08-03 00:00:00'),
(2, 98, 2, '2024-09-25 00:00:00'),
(3, 95, 10, '2024-09-14 00:00:00'),
(4, 58, 9, '2024-08-09 00:00:00'),
(5, 7, 7, '2024-08-18 00:00:00'),
(6, 92, 8, '2024-09-26 00:00:00'),
(7, 26, 1, '2024-08-18 00:00:00'),
(8, 6, 9, '2024-08-05 00:00:00'),
(9, 48, 10, '2024-09-17 00:00:00'),
(10, 95, 3, '2024-08-03 00:00:00'),
(11, 40, 9, '2024-08-24 00:00:00'),
(12, 51, 4, '2024-09-20 00:00:00'),
(13, 53, 9, '2024-08-20 00:00:00'),
(14, 6, 10, '2024-09-07 00:00:00'),
(15, 40, 2, '2024-09-23 00:00:00'),
(16, 80, 6, '2024-08-04 00:00:00'),
(17, 46, 10, '2024-08-31 00:00:00'),
(18, 69, 2, '2024-08-18 00:00:00'),
(19, 97, 3, '2024-09-14 00:00:00'),
(20, 35, 9, '2024-09-19 00:00:00'),
(21, 85, 4, '2024-09-04 00:00:00'),
(22, 19, 4, '2024-09-22 00:00:00'),
(23, 39, 9, '2024-08-30 00:00:00'),
(24, 75, 3, '2024-09-19 00:00:00'),
(25, 90, 8, '2024-09-04 00:00:00'),
(26, 24, 1, '2024-09-26 00:00:00'),
(27, 58, 1, '2024-08-23 00:00:00'),
(28, 16, 3, '2024-08-23 00:00:00'),
(29, 93, 9, '2024-09-18 00:00:00'),
(30, 86, 10, '2024-09-01 00:00:00'),
(31, 52, 7, '2024-09-14 00:00:00'),
(32, 6, 6, '2024-09-21 00:00:00'),
(33, 24, 10, '2024-09-29 00:00:00'),
(34, 37, 7, '2024-08-24 00:00:00'),
(35, 53, 1, '2024-09-29 00:00:00'),
(36, 67, 4, '2024-08-08 00:00:00'),
(37, 98, 8, '2024-08-11 00:00:00'),
(38, 73, 8, '2024-08-26 00:00:00'),
(39, 84, 4, '2024-08-04 00:00:00'),
(40, 72, 5, '2024-09-02 00:00:00'),
(41, 45, 1, '2024-09-14 00:00:00'),
(42, 87, 1, '2024-08-27 00:00:00'),
(43, 30, 6, '2024-08-02 00:00:00'),
(44, 63, 2, '2024-09-04 00:00:00'),
(45, 98, 8, '2024-09-29 00:00:00'),
(46, 5, 3, '2024-09-19 00:00:00'),
(47, 70, 5, '2024-09-08 00:00:00'),
(48, 9, 3, '2024-08-15 00:00:00'),
(49, 47, 9, '2024-09-19 00:00:00'),
(50, 11, 4, '2024-09-20 00:00:00'),
(51, 36, 4, '2024-08-17 00:00:00'),
(52, 95, 10, '2024-08-13 00:00:00'),
(53, 67, 3, '2024-08-05 00:00:00'),
(54, 22, 1, '2024-09-10 00:00:00'),
(55, 2, 6, '2024-09-17 00:00:00'),
(56, 70, 5, '2024-09-29 00:00:00'),
(57, 20, 5, '2024-09-07 00:00:00'),
(58, 11, 7, '2024-08-31 00:00:00'),
(59, 15, 8, '2024-08-21 00:00:00'),
(60, 50, 1, '2024-09-12 00:00:00'),
(61, 77, 6, '2024-09-24 00:00:00'),
(62, 9, 9, '2024-08-05 00:00:00'),
(63, 57, 3, '2024-08-18 00:00:00'),
(64, 82, 3, '2024-08-07 00:00:00'),
(65, 20, 10, '2024-09-30 00:00:00'),
(66, 72, 8, '2024-08-03 00:00:00'),
(67, 37, 3, '2024-08-20 00:00:00'),
(68, 17, 2, '2024-09-19 00:00:00'),
(69, 83, 2, '2024-08-28 00:00:00'),
(70, 20, 9, '2024-09-16 00:00:00'),
(71, 1, 9, '2024-08-14 00:00:00'),
(72, 58, 3, '2024-09-11 00:00:00'),
(73, 66, 5, '2024-09-07 00:00:00'),
(74, 68, 5, '2024-08-31 00:00:00'),
(75, 10, 4, '2024-09-08 00:00:00'),
(76, 57, 1, '2024-09-22 00:00:00'),
(77, 3, 7, '2024-09-11 00:00:00'),
(78, 37, 9, '2024-09-21 00:00:00'),
(79, 90, 10, '2024-08-05 00:00:00'),
(80, 5, 4, '2024-09-29 00:00:00'),
(81, 58, 8, '2024-08-23 00:00:00'),
(82, 57, 5, '2024-08-05 00:00:00'),
(83, 17, 10, '2024-09-15 00:00:00'),
(84, 59, 3, '2024-09-28 00:00:00'),
(85, 83, 7, '2024-08-29 00:00:00'),
(86, 77, 4, '2024-08-01 00:00:00'),
(87, 3, 4, '2024-08-02 00:00:00'),
(88, 92, 8, '2024-08-16 00:00:00'),
(89, 86, 3, '2024-09-14 00:00:00'),
(90, 46, 8, '2024-08-25 00:00:00'),
(91, 16, 7, '2024-09-04 00:00:00'),
(92, 11, 7, '2024-09-08 00:00:00'),
(93, 42, 2, '2024-08-31 00:00:00'),
(94, 85, 9, '2024-09-17 00:00:00'),
(95, 56, 5, '2024-08-04 00:00:00'),
(96, 38, 3, '2024-08-12 00:00:00'),
(97, 18, 7, '2024-09-15 00:00:00'),
(98, 40, 6, '2024-08-28 00:00:00'),
(99, 31, 1, '2024-09-02 00:00:00'),
(100, 49, 3, '2024-09-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kurssit`
--

CREATE TABLE `kurssit` (
  `id` int(11) NOT NULL,
  `nimi` varchar(64) NOT NULL,
  `kuvaus` varchar(255) NOT NULL,
  `aloituspaiva` date NOT NULL,
  `lopetuspaiva` date NOT NULL,
  `opettaja` int(11) NOT NULL,
  `tila` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurssit`
--

INSERT INTO `kurssit` (`id`, `nimi`, `kuvaus`, `aloituspaiva`, `lopetuspaiva`, `opettaja`, `tila`) VALUES
(1, 'Ohjelmoinnin perusteet', 'consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus', '2024-10-11', '2024-11-10', 9, 5),
(2, 'Debuggaus', 'varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis', '2024-09-22', '2024-11-20', 6, 3),
(3, 'Verkko-ohjelmointi', 'vel enim sit amet nunc viverra dapibus nulla suscipit ligula', '2024-09-30', '2024-12-01', 2, 5),
(4, 'Web-teknologiat', 'arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa', '2024-09-11', '2024-11-19', 10, 7),
(5, 'Olio-ohjelmointi', 'non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue', '2024-09-25', '2024-11-04', 6, 6),
(6, 'Projektityöskentely', 'non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis', '2024-10-05', '2024-12-07', 10, 10),
(7, 'Versionhallinta', 'metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam', '2024-10-14', '2024-12-09', 1, 9),
(8, 'Pythonin perusteet', 'elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor', '2024-09-05', '2024-11-28', 9, 4),
(9, 'Javascriptin jatkokurssi', 'lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui', '2024-09-25', '2024-11-16', 8, 1),
(10, 'Tietoturvallinen ohjelmointi', 'in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at', '2024-09-26', '2024-12-12', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `opettajat`
--

CREATE TABLE `opettajat` (
  `id` int(11) NOT NULL,
  `etunimi` varchar(64) NOT NULL,
  `sukunimi` varchar(64) NOT NULL,
  `aine` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opettajat`
--

INSERT INTO `opettajat` (`id`, `etunimi`, `sukunimi`, `aine`) VALUES
(1, 'Jorrie', 'Dack', 'Stronghold'),
(2, 'Emilio', 'Dawbury', 'Zoolab'),
(3, 'Trevar', 'Ivantsov', 'Asoka'),
(4, 'Dahlia', 'Harradine', 'Trippledex'),
(5, 'Linda', 'Headey', 'Stronghold'),
(6, 'Gifford', 'Goodbanne', 'Daltfresh'),
(7, 'Merissa', 'Slaughter', 'Home Ing'),
(8, 'Konstanze', 'Ceyssen', 'Sonair'),
(9, 'Chandra', 'Chawkley', 'Lotlux'),
(10, 'Zacharias', 'Dunsmuir', 'Viva');

-- --------------------------------------------------------

--
-- Table structure for table `opiskelijat`
--

CREATE TABLE `opiskelijat` (
  `id` int(11) NOT NULL,
  `etunimi` varchar(64) NOT NULL,
  `sukunimi` varchar(64) NOT NULL,
  `syntymapaiva` date NOT NULL,
  `vuosikurssi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opiskelijat`
--

INSERT INTO `opiskelijat` (`id`, `etunimi`, `sukunimi`, `syntymapaiva`, `vuosikurssi`) VALUES
(1, 'Taffy', 'Martt', '2000-07-31', 1),
(2, 'Gretal', 'Gerardot', '2000-09-24', 2),
(3, 'Basilio', 'Danahar', '2001-07-23', 2),
(4, 'Veronike', 'Sewart', '2002-03-27', 2),
(5, 'Elise', 'Clementson', '2001-12-02', 1),
(6, 'Rochella', 'Mityushkin', '2005-08-27', 3),
(7, 'Dorrie', 'Godfree', '2001-07-29', 1),
(8, 'Merilee', 'Marielle', '2001-09-01', 3),
(9, 'Brandon', 'Rizon', '2001-06-03', 2),
(10, 'Cullie', 'Frazer', '2005-03-07', 1),
(11, 'Ignacius', 'Stephens', '2003-11-06', 3),
(12, 'Merrielle', 'Malimoe', '2003-10-29', 1),
(13, 'Beitris', 'Bolesma', '2004-03-20', 2),
(14, 'Brandie', 'Corwin', '2005-02-12', 3),
(15, 'Ryan', 'Cumberpatch', '2002-06-01', 3),
(16, 'Karry', 'Slatter', '2001-06-08', 3),
(17, 'Mora', 'Comizzoli', '2005-09-23', 2),
(18, 'Maggi', 'Leopard', '2004-07-16', 3),
(19, 'Will', 'Janssens', '2002-06-17', 3),
(20, 'Calida', 'Bernardon', '2000-12-21', 3),
(21, 'Bernard', 'Desaur', '2005-03-31', 3),
(22, 'Amandy', 'Akerman', '2001-01-29', 1),
(23, 'Lizette', 'Nisbet', '2005-11-04', 1),
(24, 'Jaquenette', 'McGaugan', '2005-11-18', 3),
(25, 'Michele', 'Mustard', '2004-10-22', 1),
(26, 'Noll', 'Coverlyn', '2002-09-20', 3),
(27, 'Gillie', 'Towl', '2002-02-17', 2),
(28, 'Vladamir', 'Gehricke', '2004-07-02', 1),
(29, 'Nerte', 'Andriulis', '2004-07-31', 1),
(30, 'Jude', 'Reboul', '2004-02-18', 3),
(31, 'Dulcy', 'Lafrentz', '2000-12-05', 3),
(32, 'Jdavie', 'Crickmoor', '2004-03-23', 3),
(33, 'Paloma', 'Wilman', '2002-08-10', 2),
(34, 'Eldin', 'Adrain', '2004-05-28', 3),
(35, 'Jillayne', 'Richardt', '2001-02-14', 2),
(36, 'Cristen', 'Cockran', '2003-03-11', 2),
(37, 'Lawry', 'Emons', '2005-06-12', 1),
(38, 'Shannon', 'Dunrige', '2004-05-18', 2),
(39, 'Francesco', 'Fairnie', '2005-09-26', 2),
(40, 'Alyse', 'Tockell', '2001-04-22', 2),
(41, 'Sydel', 'Labbez', '2001-06-27', 2),
(42, 'Nesta', 'Georgievski', '2003-01-24', 3),
(43, 'Nigel', 'Stranger', '2003-09-21', 2),
(44, 'Matelda', 'Shortin', '2004-09-05', 1),
(45, 'Cherey', 'Troyes', '2001-07-16', 3),
(46, 'Dilly', 'Cassells', '2000-06-14', 2),
(47, 'Paddy', 'Jore', '2004-09-17', 1),
(48, 'Lek', 'Burtonshaw', '2003-01-30', 1),
(49, 'Frants', 'Binton', '2004-02-22', 1),
(50, 'Hali', 'Havenhand', '2000-01-21', 3),
(51, 'Evania', 'Corfield', '2003-10-13', 1),
(52, 'Elbertine', 'Rambadt', '2000-03-02', 2),
(53, 'Myranda', 'Sandal', '2000-06-10', 3),
(54, 'Jude', 'Stevings', '2005-04-19', 2),
(55, 'Harlene', 'Whichelow', '2004-04-15', 2),
(56, 'Glory', 'Francesch', '2003-04-18', 1),
(57, 'Alyssa', 'Matley', '2002-12-20', 2),
(58, 'Sutton', 'Alvin', '2001-08-05', 2),
(59, 'Page', 'Pikesley', '2005-06-15', 3),
(60, 'Gilemette', 'Gallally', '2000-02-03', 3),
(61, 'Nicolette', 'Verrico', '2000-06-07', 3),
(62, 'Kayla', 'Clever', '2001-09-29', 2),
(63, 'Aprilette', 'Bigley', '2002-12-06', 1),
(64, 'Arv', 'Sweating', '2001-05-12', 2),
(65, 'Morton', 'Poxson', '2005-07-24', 3),
(66, 'Derick', 'Edison', '2002-10-03', 2),
(67, 'Lorenza', 'Dabney', '2000-06-26', 1),
(68, 'Corette', 'Ronald', '2004-08-22', 1),
(69, 'Sebastian', 'Spraggs', '2003-12-23', 3),
(70, 'Christoph', 'Karlmann', '2002-08-21', 2),
(71, 'Farand', 'Crowdson', '2000-09-16', 1),
(72, 'Gilemette', 'Phizaclea', '2002-03-19', 2),
(73, 'Larina', 'Brittain', '2003-07-10', 1),
(74, 'Ingrim', 'Aspell', '2003-01-06', 2),
(75, 'Lyndsey', 'Brace', '2001-01-18', 1),
(76, 'Martelle', 'Sherwill', '2002-09-09', 1),
(77, 'Dana', 'Pretsel', '2001-09-07', 1),
(78, 'Yoshi', 'Basnall', '2005-11-06', 1),
(79, 'Mella', 'Wickson', '2004-03-11', 3),
(80, 'Robinia', 'Horrell', '2003-08-21', 1),
(81, 'Stevy', 'Bruyns', '2001-08-30', 3),
(82, 'Ervin', 'Glasgow', '2003-08-25', 3),
(83, 'Cybil', 'Towersey', '2003-01-21', 1),
(84, 'Aldis', 'Peppin', '2003-11-08', 1),
(85, 'Dur', 'Sumshon', '2001-01-08', 2),
(86, 'Hugh', 'Grandisson', '2003-02-28', 3),
(87, 'Veronike', 'By', '2000-02-06', 1),
(88, 'Dale', 'Pendlington', '2003-12-13', 1),
(89, 'Eula', 'Ludvigsen', '2004-07-15', 1),
(90, 'Jessamine', 'Rany', '2004-12-01', 3),
(91, 'Mellie', 'McCadden', '2001-12-03', 3),
(92, 'Oralle', 'Connolly', '2004-12-11', 3),
(93, 'Andrea', 'Boutellier', '2002-06-05', 2),
(94, 'Viki', 'Granville', '2004-05-08', 2),
(95, 'Sandie', 'Pike', '2004-03-22', 1),
(96, 'Prudence', 'Pococke', '2003-06-05', 3),
(97, 'Roobbie', 'State', '2002-09-30', 3),
(98, 'Emlen', 'Bradlaugh', '2000-12-28', 2),
(99, 'Roxi', 'Welden', '2002-08-18', 1),
(100, 'Noah', 'Iacovucci', '2002-12-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tilat`
--

CREATE TABLE `tilat` (
  `id` int(11) NOT NULL,
  `nimi` varchar(64) NOT NULL,
  `kapasiteetti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tilat`
--

INSERT INTO `tilat` (`id`, `nimi`, `kapasiteetti`) VALUES
(1, 'A101', 12),
(2, 'A102', 17),
(3, 'A103', 20),
(4, 'A201', 21),
(5, 'A203', 25),
(6, 'A205', 20),
(7, 'A301', 20),
(8, 'A302', 24),
(9, 'Auditorio', 14),
(10, 'Neukkari', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurssikirjautumiset`
--
ALTER TABLE `kurssikirjautumiset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opiskelija` (`opiskelija`),
  ADD KEY `kurssi` (`kurssi`);

--
-- Indexes for table `kurssit`
--
ALTER TABLE `kurssit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opettaja` (`opettaja`),
  ADD KEY `tila` (`tila`);

--
-- Indexes for table `opettajat`
--
ALTER TABLE `opettajat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opiskelijat`
--
ALTER TABLE `opiskelijat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tilat`
--
ALTER TABLE `tilat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurssikirjautumiset`
--
ALTER TABLE `kurssikirjautumiset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `kurssit`
--
ALTER TABLE `kurssit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `opettajat`
--
ALTER TABLE `opettajat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `opiskelijat`
--
ALTER TABLE `opiskelijat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tilat`
--
ALTER TABLE `tilat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kurssikirjautumiset`
--
ALTER TABLE `kurssikirjautumiset`
  ADD CONSTRAINT `kurssikirjautumiset_ibfk_1` FOREIGN KEY (`opiskelija`) REFERENCES `opiskelijat` (`id`),
  ADD CONSTRAINT `kurssikirjautumiset_ibfk_2` FOREIGN KEY (`kurssi`) REFERENCES `kurssit` (`id`);

--
-- Constraints for table `kurssit`
--
ALTER TABLE `kurssit`
  ADD CONSTRAINT `kurssit_ibfk_1` FOREIGN KEY (`opettaja`) REFERENCES `opettajat` (`id`),
  ADD CONSTRAINT `kurssit_ibfk_2` FOREIGN KEY (`tila`) REFERENCES `tilat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
