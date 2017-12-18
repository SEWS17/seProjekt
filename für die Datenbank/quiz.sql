-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 12:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `abschlusstest_lückentext_gestaltgesetze`
--

CREATE TABLE `abschlusstest_lückentext_gestaltgesetze` (
  `id` int(11) NOT NULL,
  `Aufgabe` char(100) NOT NULL,
  `TEXT1` char(100) NOT NULL,
  `1AUSWAHL1` char(50) NOT NULL,
  `1AUSWAHL2` char(50) NOT NULL,
  `1AUSWAHL3` char(50) NOT NULL,
  `1KORREKTE_ANTWORT` char(50) NOT NULL,
  `TEXT2` char(100) NOT NULL,
  `2AUSWAHL1` char(50) NOT NULL,
  `2AUSWAHL2` char(50) NOT NULL,
  `2AUSWAHL3` char(50) NOT NULL,
  `2KORREKTE_ANTWORT` char(50) NOT NULL,
  `TEXT3` char(100) NOT NULL,
  `3AUSWAHL1` char(50) NOT NULL,
  `3AUSWAHL2` char(50) NOT NULL,
  `3AUSWAHL3` char(50) NOT NULL,
  `3KORREKTE_ANTWORT` char(50) NOT NULL,
  `TEXT4` char(100) NOT NULL,
  `4AUSWAHL1` char(50) NOT NULL,
  `4AUSWAHL2` char(50) NOT NULL,
  `4AUSWAHL3` char(50) NOT NULL,
  `4KORREKTE_ANTWORT` char(50) NOT NULL,
  `TEXT5` char(100) NOT NULL,
  `5AUSWAHL1` char(50) NOT NULL,
  `5AUSWAHL2` char(50) NOT NULL,
  `5AUSWAHL3` char(50) NOT NULL,
  `5KORREKTE_ANTWORT` char(50) NOT NULL,
  `TEXT6` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abschlusstest_lückentext_gestaltgesetze`
--

INSERT INTO `abschlusstest_lückentext_gestaltgesetze` (`id`, `Aufgabe`, `TEXT1`, `1AUSWAHL1`, `1AUSWAHL2`, `1AUSWAHL3`, `1KORREKTE_ANTWORT`, `TEXT2`, `2AUSWAHL1`, `2AUSWAHL2`, `2AUSWAHL3`, `2KORREKTE_ANTWORT`, `TEXT3`, `3AUSWAHL1`, `3AUSWAHL2`, `3AUSWAHL3`, `3KORREKTE_ANTWORT`, `TEXT4`, `4AUSWAHL1`, `4AUSWAHL2`, `4AUSWAHL3`, `4KORREKTE_ANTWORT`, `TEXT5`, `5AUSWAHL1`, `5AUSWAHL2`, `5AUSWAHL3`, `5KORREKTE_ANTWORT`, `TEXT6`) VALUES
(1, 'Bitte fülle den Lückentext über das Gesetz der Gleichheit aus!', 'Buttons haben die gleiche prägnante', 'Kontur', 'Form', 'Größe', 'Form', 'und sind dadurch von\r\nden anderen Elementen', 'farblich', 'räumlich', 'zeitlich', 'farblich', 'auf der Seite', 'beim genauen hinschauen', 'eindeutig', 'wahrscheinlich', 'eindeutig', 'abgesetzt. Trotz großer Distanzen zwischen den Buttons erkennt der Benutzer\r\ndiese', 'Gleichwertigkeit', 'Identität', 'Ähnlichkeit', 'Ähnlichkeit', 'und fasst sie zu einer funktionellen Gruppe\r\nzusammen - was in diesem Beispiel auch gewünscht und', 'ungewöhnlich', 'sinnvoll', 'sicher', 'sinnvoll', 'ist.');

-- --------------------------------------------------------

--
-- Table structure for table `wissensquiz_dialoggestaltung`
--

CREATE TABLE `wissensquiz_dialoggestaltung` (
  `id` char(50) NOT NULL,
  `Bild` char(50) NOT NULL,
  `Bildbeschreibung` varchar(100) NOT NULL,
  `Frage` char(50) NOT NULL,
  `KORREKTE_ANTWORT` char(50) NOT NULL,
  `AUSWAHL1` char(50) NOT NULL,
  `AUSWAHL2` char(50) NOT NULL,
  `AUSWAHL3` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wissensquiz_dialoggestaltung`
--

INSERT INTO `wissensquiz_dialoggestaltung` (`id`, `Bild`, `Bildbeschreibung`, `Frage`, `KORREKTE_ANTWORT`, `AUSWAHL1`, `AUSWAHL2`, `AUSWAHL3`) VALUES
('1', 'logo.jpg', '1', '1', '1', '2', '1', '3');

INSERT INTO `wissensquiz_dialoggestaltung` (`id`, `Bild`, `Bildbeschreibung`, `Frage`, `KORREKTE_ANTWORT`, `AUSWAHL1`, `AUSWAHL2`, `AUSWAHL3`) VALUES
('2', 'DQuiz2.jpg', 'Die Grafik zeigt verschiedene Reiter eines Programmes. Einer dieser Reiter ist ausgeklappt und bietet weitere Optionen an. Neben den Optionen ist jeweils ein Tastenkürzel angegeben.', 'Welches Gesetz ist zu erkennen?', 'Biete erfahrenen Nutzern Abkürzungen an.', 'Dialoge sollten abgeschlossen sein.', 'Biete erfahrenen Nutzern Abkürzungen an.', 'Biete informatives Feedback.'),
('3', 'DQuiz3.jpg', 'Ein Fenster zeigt an, dass es unmöglich ist eine Datei mit Sonderzeichen im Namen abzuspeichern.', 'Benenne das dargestellte Dialoggesetz', 'Biete einfache Fehlerbehandlung.', 'Biete erfahrenen Nutzern Abkürzungen an.', 'Dialoge sollten abgeschlossen sein.', 'Biete einfache Fehlerbehandlung.'),
('4', 'DQuiz4.jpg', 'Das Bild zeigt ein Installationsfenster, der Nutzer muss bestätigen, dass er mit der Installation fortfahren möchte und den AGBs zustimmt.', 'Welches Gesetz wird hier klar gezeigt?', 'Unterstütze benutzergesteuerten Dialog.', 'Unterstütze benutzergesteuerten Dialog.', 'Biete informatives Feedback.', 'Biete einfache Fehlerbehandlung.'),
('5', 'DQuiz5.jpg', 'Eine unübersichtliche Webseite ist zu erkennen, die mit vielen Farben, verschiedenen Fonts und keiner erkennbaren Systematik aufgebaut ist.', 'Welches Gesetz wurde hier offensichtlich nicht beachtet?', 'Reduziere die Belastung des Kurzzeitgedächtnisses.', 'Dialoge sollten abgeschlossen sein.', 'Biete erfahrenen Nutzern Abkürzungen an.', 'Reduziere die Belastung des Kurzzeitgedächtnisses.'),
('6', 'DQuiz6.jpg', 'Ein nach Links weisender Pfeil-Icon ist angewählt.', 'Wie lautet das dargestellte Gesetz?', 'Biete einfache Rücksetzmöglichkeiten.', 'Unterstütze benutzergesteuerten Dialog.', 'Biete informatives Feedback.', 'Biete einfache Rücksetzmöglichkeiten.'),
('7', 'DQuiz7.jpg', 'Eine überladene Webseite bewirbt zu verkaufende Produkte, die nach keinem erkennbaren Muster angeordnet sind. Sie sind unterschiedlich groß und haben unterschiedliche Farben.', 'Welches Dialoggesetz missachtet diese Webseite?', 'Versuche Konsistenz zu erreichen.', 'Biete einfache Fehlerbehandlung.', 'Versuche Konsistenz zu erreichen.', 'Dialoge sollten abgeschlossen sein.'),
('8', 'DQuiz8.jpg', 'Eine Fehlermeldung zeigt an: Geben sie mindestens einen Empfänger an.', 'Um welches Gesetz der Dialoggestaltung handelt es sich hier?', 'Biete informatives Feedback.', 'Biete informatives Feedback.', 'Versuche Konsistenz zu erreichen.', 'Biete erfahrenen Nutzern Abkürzungen an.');



UPDATE 'wissensquiz_dialoggestaltung'SET Bild ='DQuiz1.jpg', Bildbeschreibung = 'Ein Installationsfenster bietet die Möglichkeit an, das Setup abzubrechen, fortzufahren oder den Rechner herunterzufahren.', Frage= 'Welches Dialoggesetz wird hier abgebildet?', KORREKTE_ANTWORT = 'Dialoge sollten abgeschlossen sein.', AUSWAHL1='Dialoge sollten abgeschlossen sein.'; AUSWAHL2='Versuche Konsistenz zu erreichen.', AUSWAHL3='Biete erfahrenen Nutzern Abkürzungen an.' WHERE 'id' = '1' ;

-- --------------------------------------------------------

--
-- Table structure for table `wissensquiz_gestaltgesetze`
--

CREATE TABLE `wissensquiz_gestaltgesetze` (
  `id` char(50) NOT NULL,
  `Bild` char(50) NOT NULL,
  `Bildbeschreibung` varchar(100) NOT NULL,
  `Frage` char(50) NOT NULL,
  `KORREKTE_ANTWORT` char(50) NOT NULL,
  `AUSWAHL1` char(50) NOT NULL,
  `AUSWAHL2` char(50) NOT NULL,
  `AUSWAHL3` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wissensquiz_gestaltgesetze`
--

INSERT INTO `wissensquiz_gestaltgesetze` (`id`, `Bild`, `Bildbeschreibung`, `Frage`, `KORREKTE_ANTWORT`, `AUSWAHL1`, `AUSWAHL2`, `AUSWAHL3`) VALUES
('1', 'Bilder\\bild_frage1.jpg', '', 'Welches Gesetz wurde angewandt?', 'Gesetz der Geschlossenheit', 'Gesetz der Nähe', 'Gesetz der Geschlossenheit', 'Gesetz der guten Gestalt'),
('2', 'Bilder\\bild_frage2.jpg', '', 'Welches Gesetz ist hier gut erkennbar?', 'Gesetz der guten Gestalt', 'Gesetz der guten Gestalt', 'Gesetz der Nähe', 'Gesetz der Geschlossenheit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wissensquiz_dialoggestaltung`
--
ALTER TABLE `wissensquiz_dialoggestaltung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wissensquiz_gestaltgesetze`
--
ALTER TABLE `wissensquiz_gestaltgesetze`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
