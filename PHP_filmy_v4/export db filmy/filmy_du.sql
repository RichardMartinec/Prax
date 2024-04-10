-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 10.Apr 2024, 23:25
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
  `názov_filmu` varchar(120) DEFAULT NULL,
  `žáner` varchar(60) DEFAULT NULL,
  `dĺžka` int(11) DEFAULT NULL,
  `krajina` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `filmy`
--

INSERT INTO `filmy` (`id_film`, `názov_filmu`, `žáner`, `dĺžka`, `krajina`) VALUES
(1, 'Free guy', 'Komedia', 120, 'USA'),
(2, 'Pán prsteňov', 'Fantasy', 240, 'USA'),
(3, 'Tvorca', 'Sci-fi', 120, 'USA'),
(4, 'Temný rytier', 'Komiks', 160, 'USA'),
(7, 'Duna 2', 'Sci-fi', 165, 'USA'),
(10, 'Pokus', 'Komedia', 125, 'USA'),
(12, 'Duna', 'Sci-fi', 165, 'USA'),
(14, 'Duna 3', 'Sci-fi', 125, 'USA'),
(15, 'Duna 4', 'Fantasy', 165, 'USA'),
(16, 'Francuzska spojka', 'Detektivka', 125, 'Francuzsko'),
(17, 'La Dolce Vita', 'Drama', 95, 'Taliansko');

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

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `moje`
--

CREATE TABLE `moje` (
  `id_poradie` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `hodnotenie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `moje`
--

INSERT INTO `moje` (`id_poradie`, `id_film`, `hodnotenie`) VALUES
(1, 1, 8),
(2, 2, 9),
(3, 3, 8),
(4, 4, 10);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `prehľad`
--

CREATE TABLE `prehľad` (
  `id_prehľad` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `id_jazyk` int(11) DEFAULT NULL,
  `stream` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `prehľad`
--

INSERT INTO `prehľad` (`id_prehľad`, `id_film`, `id_jazyk`, `stream`) VALUES
(1, 1, 1, 'Netflix'),
(2, 1, 2, 'HBO'),
(3, 2, 1, 'Netflix'),
(4, 2, 3, 'Netflix'),
(5, 3, 2, 'Netflix'),
(6, 3, 4, 'HBO'),
(7, 4, 1, 'Netflix'),
(8, 4, 5, 'HBO');

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
-- Indexy pre tabuľku `moje`
--
ALTER TABLE `moje`
  ADD PRIMARY KEY (`id_poradie`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexy pre tabuľku `prehľad`
--
ALTER TABLE `prehľad`
  ADD PRIMARY KEY (`id_prehľad`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_jazyk` (`id_jazyk`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pre tabuľku `jazyk`
--
ALTER TABLE `jazyk`
  MODIFY `id_jazyk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `moje`
--
ALTER TABLE `moje`
  MODIFY `id_poradie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `prehľad`
--
ALTER TABLE `prehľad`
  MODIFY `id_prehľad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `moje`
--
ALTER TABLE `moje`
  ADD CONSTRAINT `moje_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `filmy` (`id_film`);

--
-- Obmedzenie pre tabuľku `prehľad`
--
ALTER TABLE `prehľad`
  ADD CONSTRAINT `prehľad_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `filmy` (`id_film`),
  ADD CONSTRAINT `prehľad_ibfk_2` FOREIGN KEY (`id_jazyk`) REFERENCES `jazyk` (`id_jazyk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
