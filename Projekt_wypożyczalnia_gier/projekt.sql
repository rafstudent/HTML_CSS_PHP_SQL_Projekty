-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Cze 2018, 13:38
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry`
--

CREATE TABLE `gry` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Rodzaj` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Tworca` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Cena` int(20) NOT NULL,
  `Sztuki` int(5) NOT NULL,
  `Nowe` varchar(50) NOT NULL,
  `Uzywane` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `gry`
--

INSERT INTO `gry` (`id`, `Nazwa`, `Rodzaj`, `Tworca`, `Cena`, `Sztuki`, `Nowe`, `Uzywane`) VALUES
(14, 'WieÅ›min', 'Przygodowa', 'Nie wiem', 150, 13, '+', '+');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `Imie` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Adres` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id`, `Imie`, `Nazwisko`, `Adres`) VALUES
(3, 'Marian', 'Marianowy', 'Miastowy'),
(5, 'Artur', 'Kowalski', 'Miasto');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyprzedane`
--

CREATE TABLE `wyprzedane` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Rodzaj` set('Strzelanka','RPG','Przygodowa','Sportowa') CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Tworca` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Cena` int(20) NOT NULL,
  `Sztuki` int(5) NOT NULL,
  `Nowe` varchar(50) NOT NULL,
  `Uzywane` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gry`
--
ALTER TABLE `gry`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wyprzedane`
--
ALTER TABLE `wyprzedane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gry`
--
ALTER TABLE `gry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `wyprzedane`
--
ALTER TABLE `wyprzedane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
