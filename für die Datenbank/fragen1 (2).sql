-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 11:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wissensquiz`
--

-- --------------------------------------------------------


/* Erstellen Sie die Datenbank Wissensquiz (z.B.) und übernehmen Sie die hier aufgeführte Tabelle in ihrem SQL-Fenster*/



--
-- Table structure for table `fragen`
--

CREATE TABLE `fragen` (
  `id` char(50) NOT NULL,
  `Bild` char(50) NOT NULL,
  `Frage` char(50) NOT NULL,
  `KORREKTE_ANTWORT` char(50) NOT NULL,
  `AUSWAHL1` char(50) NOT NULL,
  `AUSWAHL2` char(50) NOT NULL,
  `AUSWAHL3` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fragen`
--

INSERT INTO `fragen` (`id`, `Bild`, `Frage`, `KORREKTE_ANTWORT`, `AUSWAHL1`, `AUSWAHL2`, `AUSWAHL3`) VALUES
('1', 'Bilder\\bild_frage1.jpg', 'Welches Gesetz wurde angewandt?', 'Gesetz der Geschlossenheit', 'Gesetz der Nähe', 'Gesetz der Geschlossenheit', 'Gesetz der guten Gestalt'),
('2', 'Bilder\\bild_frage2.jpg', 'Welches Gesetz ist hier gut erkennbar?', 'Gesetz der guten Gestalt', 'Gesetz der guten Gestalt', 'Gesetz der Nähe', 'Gesetz der Geschlossenheit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
