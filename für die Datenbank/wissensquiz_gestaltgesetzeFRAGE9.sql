-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Dez 2017 um 17:48
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `quiz`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wissensquiz_gestaltgesetze`
--

CREATE TABLE `wissensquiz_gestaltgesetze` (
  `id` char(50) NOT NULL,
  `Bild` char(50) NOT NULL,
  `Bildbeschreibung` varchar(1000) NOT NULL,
  `Frage` char(50) NOT NULL,
  `KORREKTE_ANTWORT` char(50) NOT NULL,
  `AUSWAHL1` char(50) NOT NULL,
  `AUSWAHL2` char(50) NOT NULL,
  `AUSWAHL3` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `wissensquiz_gestaltgesetze`
--

INSERT INTO `wissensquiz_gestaltgesetze` (`id`, `Bild`, `Bildbeschreibung`, `Frage`, `KORREKTE_ANTWORT`, `AUSWAHL1`, `AUSWAHL2`, `AUSWAHL3`) VALUES
('1', 'Bilder\\bild_frage1.jpg', 'Durch Aussparung und Weißraum wird ein Panda dargestellt. Mit schwarzen Kreisen die Ohren, Nase, Augen und Beine. Der Betrachter vervollständigt das Tier automatisch, obwohl es nur angedeutet wird.', 'Welches Gesetz wurde angewandt?', 'Gesetz der Geschlossenheit', 'Gesetz der Nähe', 'Gesetz der Geschlossenheit', 'Gesetz der guten Gestalt'),
('2', 'Bilder\\bild_frage2.jpg', 'Sieben schwarze Kreise kommen wirr im Raum vor. Darüber spannt sich ein Quader in weiß auf und wird erkennbar dadurch, dass jede Ecke jeweils durch einen Kreis hinterlegt ist. Nur die Ecken werden erkenntlich gemacht und man erkennt die Figur durch zusammenführen der Seiten. Der Quader ist eine Grundform, was bei diesem Gesetz wichtig ist, jeder muss die Figur kennen.', 'Welches Gesetz ist hier gut erkennbar?', 'Gesetz der guten Gestalt', 'Gesetz der guten Gestalt', 'Gesetz der Nähe', 'Gesetz der Geschlossenheit'),
('3', 'Bilder\\bild_frage3.jpg', 'Es gibt fünf Zeilen und acht Spalten. Jede Zeile hat abwechselnd einen schwarzen Quader oder einen schwarzen Kreis. Also auf Platz eins ist ein Quader, Platz zwei besitzt einen Kreis, Platz drei wieder einen Quader und so weiter bis Platz acht. Ein Gatter aus regelmäßig angeordneten verschieden aussehenden Teilchen. Das Auge erkennt die Spalten durch die ähnlich aussehenden Elemente.', 'Welches Gesetz ist hier gut erkennbar?', 'Gesetz der Ähnlichkeit', 'Gesetz der Ähnlichkeit', 'Gesetz der Nähe', 'Gesetz der Geschlosseheit'),
('4', 'Bilder\\bild_frage4.png', 'Links kommen mehrere Fische wirr im Raum vor. Auf der rechten Seite formiert sich ein Fischschwarm zu einem größeren Fisch, diese Fische sind sehr nah beieinander. Somit erkennt man den Schwarm nicht als einzelne Fische, sondern als neue Form.', 'Welches Gesetz ist hier gut erkennbar?', 'Gesetz der Nähe', 'Gesetz der Symmetrie', 'Gesetz der guten Gestalt', 'Gesetz der Nähe'),
('5', 'Bilder\\bild_frage5.png', 'Es werden Kreise mit Klammern dargestellt. Eine Klammer öffnet sich und lässt ein wenig Weissraum, danach schließt sie wieder. Das wiederholt sich zwei weitere Male. Der Betrachter erkennt direkt die Mittelachsen durch die Kreise und die resultierende Symmetrie der Klammern.', 'Welches Gesetz wird gezeigt?', 'Gesetz der Symmetrie', 'Gesetz der Nähe', 'Gesetz der Symmetrie', 'Gesetz der Ähnlichkeit'),
('6', 'Bilder\\bild_frage6.png', 'Durch viele Kreise wird eine Welle dargestellt. Erst steigt sie langsam an, hat einen Hochpunkt und fällt wieder mit Schwung. Es entsteht eine harmonische Bewegung in die Leserichtung und sieht gut aus.', 'Welches Gesetz ist ersichtlich?', 'Gesetz der guten Fortsetzung', 'Gesetz der Ähnlichkeit', 'Gesetz der guten Fortsetzung', 'Gesetz der Nähe'),
('7', 'Bilder\\bild_frage7.png', 'Es werden Pfeile in jeweils drei Zeilen angeordnet. Die erste Zeile an Pfeilen zeigt in die rechte Richtung. Die zweite Zeile dann nach links und die letzte dritte wieder nach rechts. So sieht es aus, als würde jede Zeile dazu verdammt sein, eine Richtung zu gehen.', 'Welches Gesetz ist zu erkennen?', 'Gesetz des gemeinsamen Schicksals', 'Gesetz des gemeinsamen Schicksals', 'Gesetz der guten Gestalt', 'Gesetz der Nähe'),
('8', 'Bilder\\bild_frage8.jpg', 'Durch dicke Balken in unterschiedlicher Streckung oder Stauchung wird ein Zebra dargestellt. Die Aneinanderreihung und Wiederholung der selben Balken schließen die Figur zum Ganzen.', 'Welches Gesetz ist zu erkennen?', 'Gesetz der Kontinuität', 'Gesetz der guten Gestalt', 'Gesetz der Kontinuität', 'Gesetz der Symmetrie'),
('9', 'Bilder\\bild_frage9.jpg', 'Eine Linie kringelt sich durch das Bild und wird oben sowie unten angeschnitten. Sie hat also kein wahrnehmbares Ende oder Anfang.', 'Welches Gesetz ist hier gut erkennbar?', 'Gesetz der Kontur', 'Gesetz der Kontur', 'Gesetz des gemeinsamen Schicksals', 'Gesetz der Nähe');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `wissensquiz_gestaltgesetze`
--
ALTER TABLE `wissensquiz_gestaltgesetze`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
