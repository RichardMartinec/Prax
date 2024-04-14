-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 14.Apr 2024, 22:15
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `filmy_du`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `filmy`
--

CREATE TABLE `filmy` (
  `id_film` int(11) NOT NULL,
  `poradie` int(120) NOT NULL,
  `názov_filmu` varchar(120) DEFAULT NULL,
  `žáner` varchar(60) DEFAULT NULL,
  `dĺžka` int(11) DEFAULT NULL,
  `krajina` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `filmy`
--

INSERT INTO `filmy` (`id_film`, `poradie`, `názov_filmu`, `žáner`, `dĺžka`, `krajina`) VALUES
(1, 1, 'Pokus', 'Komedia', 165, 'Francuzsko'),
(3, 2, 'Batman a Robin', 'Drama', 125, 'USA'),
(37, 3, 'Duna 3', 'Drama', 165, 'Francuzsko'),
(38, 4, 'Pokus', 'Detektivka', 165, 'USA'),
(39, 5, 'hhhh', 'Komedia', 125, 'Francuzsko'),
(40, 6, 'Duna 4', 'Sci-fi', 165, 'USA'),
(46, 7, 'Dracula', 'Horror', 165, 'USA');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `jazyk`
--

CREATE TABLE `jazyk` (
  `id_jazyk` int(11) NOT NULL,
  `jazyk_filmu` varchar(60) DEFAULT NULL,
  `titulky` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `jazyk`
--

INSERT INTO `jazyk` (`id_jazyk`, `jazyk_filmu`, `titulky`) VALUES
(1, 'Angličtina', 'SK'),
(2, 'Angličtina', 'CZ'),
(3, 'Francúzština', 'SK'),
(4, 'Francúzština', 'CZ'),
(5, 'Čeština', 'Bez titulkov');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexy pre tabuľku `jazyk`
--
ALTER TABLE `jazyk`
  ADD PRIMARY KEY (`id_jazyk`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pre tabuľku `jazyk`
--
ALTER TABLE `jazyk`
  MODIFY `id_jazyk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
