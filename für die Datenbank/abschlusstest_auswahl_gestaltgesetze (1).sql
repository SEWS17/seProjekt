-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Dez 2017 um 15:28
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
-- Tabellenstruktur für Tabelle `abschlusstest_auswahl_gestaltgesetze`
--

CREATE TABLE `abschlusstest_auswahl_gestaltgesetze` (
  `id` int(11) NOT NULL,
  `ATEXT` varchar(900) NOT NULL,
  `BildBeschreibung` varchar(1000) NOT NULL,
  `BildBearbeitung2` varchar(1000) NOT NULL,
  `BILD1` char(50) NOT NULL,
  `BILD2` char(50) NOT NULL,
  `KORREKTE_ANTWORT` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `abschlusstest_auswahl_gestaltgesetze`
--

INSERT INTO `abschlusstest_auswahl_gestaltgesetze` (`id`, `ATEXT`, `BildBeschreibung`, `BildBearbeitung2`, `BILD1`, `BILD2`, `KORREKTE_ANTWORT`) VALUES
(1, 'Das Gesetz der Nähe ist das einfachste Gestaltgesetz - was nicht so zu verstehen ist, es sei damit auch das unwichtigste. Verstöße gegen das Gesetz der Nähe können verheerende Auswirkungen auf die Verständlichkeit einer Website oder Benutzeroberfläche haben. Das betrifft nicht nur Buttons und Grafiken, sondern auch das Layout von Texten bzw. Links. Wie kann man sich einen solchen "Verstoß" vorstellen? Bitte wähle in diesem Beispiel wie das Gesetz der Nähe nicht(!) verstanden wird!', 'Das Bild zeigt eine Liste von Links. Diese haben noch Unterkategorien und stehen direkt daruntergeschrieben. Dann erfolgt ein wenig Platz zum nächsten Link.', 'Das zweite Bild stellt die Links direkt untereinander geschrieben dar. Kein Weißraum und kein Platz, sehr ungeordnet, werden allerdings mit einem Rahmen verziert.', 'Bilder/GdNaehe.png', 'Bilder/GdNaehe2.png', 'auswahl1'),
(3, 'In der Praxis ist das Gesetz der Geschlossenheit besonders interessant, wenn viele Informationen angezeigt werden müssen, die sich auf mehrere Oberbegriffe oder Überschriften verteilen. Betrachten hierzu die zwei Screenshots einer Wettervorhersage auf einer Webseite. Welche Abbildung zeigt das Gesetz der Geschlossenheit am ehesten?', 'Das erste Bild zeigt Wetter-Icons nebeneinander gestellt, ohne Abgrenzung zueinander.', 'Das zweite Bild zeigt die Wetter-Icons nebeneinander gestellt, jedoch einzeln umrahmt.', 'Bilder/GdGeschlossenheit.gif', 'Bilder/GdGeschlossenheit2.gif', 'auswahl2'),
(5, 'Das Gesetz der guten Fortsetzung ist wichtig bei der Ausrichtung von Elementen und spielt im Webdesign eine große Rolle. Alle Elemente sollten an Fluchtlinien ausgerichtet sein. Durch Alignierung lässt sich die Anzahl der Fluchtlinien verringern, was für eine übersichtlichere und geordnetere Darstellung sorgt. Die Folgenden Bilder zeigen zum einen Links die wie in einem Fließtext umgebrochen sind und Menüpunkte einer Navigation. Welches dieser zwei Beispiele zeigt das Gesetz der guten Fortsetzung am ehesten?', 'Im ersten Bild wird ein Block dargestellt, der eine Überschrift enthält. Darunter werden Wörter aufgelistet, die durch Kommas getrennt werden. Eine Kontur umschließt den gesamten Inhalt.', 'Im zweiten Bild werden die gleichen Wörter aufgelistet, jedoch getrennt voneinander durch ihre Darstellung. Das heißt die Worte werden anhand von Achsen aufgereiht und haben einen Zeilenumbruch. Viel Weißraum entsteht zwischen den Worten und unterhalb, somit sind keine Kommas notwendig. Die Ordnung hält sich an ein Gesetz.', 'Bilder/GdFortsetzung1.gif', 'Bilder/GdFortsetzung22.gif', 'auswahl2'),
(7, 'Wir bekommen durch das Gesetz der Symmetrie (und natürlich dessen Anwendung) mehr Ordnung und Übersicht in unsere Website. Und das Design der Website wirkt harmonischer.\r\n\r\n\r\n\r\nAuf dieser Seite sollen die Produktboxen besonders hervorgehoben werden, welches dieser zwei Beispiele weist das Gesetz der Symmetrie auf?', 'Im ersten Bild werden Bücher nebeneinander angereiht. Also vier gleiche Exemplare, die auf dem selben Niveau angeordnet sind.', 'In diesem Bild werden die selben Bücher dargestellt, nur willkürlich auf dem Hintergrund verteilt.', 'Bilder/Gdsymmetrie2.jpeg', 'Bilder/Gdsymmetrie.jpeg', 'auswahl2'),
(9, 'Das Gesetz der Kontur ist kontrastbehaftet. Werden beispielsweise Bilder verwendet, um einen Header darzustellen, werden Konturen ausgelassen, um Worte abzubilden. Das Gesetz wird auch das „Gesetz der Innenseite“ genannt, also alles was Konturen bekommt, sei es ein Rahmen, oder eben im Beispiel davor, das Bild im Header.\r\n\r\nNachfolgend sind 2 Beispiele von verschiedene Webseiten abgebildet. Welches Beispiel zeigt den wahren design profi?', 'Das Bild zeigt eine wunderschön gestaltete Navigationsleiste anhand einer Fotografie. Der beinhaltende Text, sowie der Button sind im selben weiß wie der Hintergrund des Bodies. So entsteht durch das Bild eine Umrahmung des Texts.', 'Im zweiten Bild sieht man Mark''s Webseite. Diese ist schlicht hässlich und nicht benutzergerecht gestaltet. Sie ist grau und beinhaltet eine Tabelle aus den 90''ern. Die Navileiste ist einfach weiß und mit schwarzen Text ausgestattet, wobei der Body die Farbe grau aufweist. Dieses Design ist eine schändliche Grabstätte für Gestalterherzen.', 'Bilder/kontur1.jpeg', 'Bilder/kontur.png', 'auswahl2');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `abschlusstest_auswahl_gestaltgesetze`
--
ALTER TABLE `abschlusstest_auswahl_gestaltgesetze`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
