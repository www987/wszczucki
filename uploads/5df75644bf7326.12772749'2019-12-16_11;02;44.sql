-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Gru 2019, 11:01
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wszczucki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `loc` text COLLATE utf8_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `size` int(11) NOT NULL,
  `owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `data`
--

INSERT INTO `data` (`ID`, `name`, `loc`, `date`, `size`, `owner`) VALUES
(1, 'mmc.xls', 'files/mmc.xls', '2019-08-29 13:11:44', 12, 1),
(12, 'mm2.xlsx', 'files/mm2.xlsx', '2019-08-29 13:27:05', 14463, 1),
(13, 'Update.exe', 'files/Update.exe', '2019-08-29 13:27:29', 1523544, 1),
(14, 'SquirrelSetup.log', 'files/SquirrelSetup.log', '2019-08-29 13:37:01', 685080, 1),
(15, 'app.ico', 'files/app.ico', '2019-08-29 13:37:53', 370070, 1),
(16, 'xampp_start.exe', 'files/1567092093410160603xampp_start.exe', '2019-08-29 17:09:50', 118784, 2),
(17, 'Screenshot_20190829-083730_Samsung Experience Home.jpg', 'files/1567093591837772164Screenshot_20190829-083730_Samsung Experience Home.jpg', '2019-08-29 15:46:31', 87614, 1),
(18, '', 'files/1567094055968601818', '2019-08-29 15:54:15', 0, 1),
(19, 'database.html', 'files/1567094988749135677database.html', '2019-08-29 16:09:48', 3989, 1),
(20, 'login.html', 'files/1567095090224899074login.html', '2019-08-29 16:11:30', 912, 1),
(21, 'login.html', 'files/1567095090224899074login.html', '2019-08-29 16:11:30', 912, 1),
(22, 'w', 'files/1567095772154730985w', '2019-08-29 16:22:52', 0, 1),
(23, 'a', 'files/1567095772154730985a', '2019-08-29 16:22:52', 0, 1),
(24, 'w', 'files/1567095784334726150w', '2019-08-29 16:23:04', 0, 1),
(25, 'a', 'files/1567095784334726150a', '2019-08-29 16:23:04', 0, 1),
(26, '4.jpg', 'files/15670958131434898644.jpg', '2019-08-29 16:23:33', 105306, 1),
(27, 'logout.php', 'files/1567099775887653433logout.php', '2019-08-29 17:29:35', 91, 1),
(28, 'dane.php', 'files/1567099841952289764dane.php', '2019-08-29 17:30:41', 3872, 1),
(29, 'dane.php', 'files/1567259526816054269dane.php', '2019-08-31 13:52:06', 3874, 1),
(30, 'database.php', 'files/1567259526719223044database.php', '2019-08-31 13:52:06', 4017, 1),
(31, 'index.php', 'files/1567259526911591614index.php', '2019-08-31 13:52:06', 1730, 1),
(32, '', 'files/1567259526849323685', '2019-08-31 13:52:06', 0, 1),
(33, 'dane.php', 'files/1567259553703662065dane.php', '2019-08-31 13:52:33', 3874, 1),
(34, 'database.php', 'files/1567259553293240711database.php', '2019-08-31 13:52:34', 4017, 1),
(35, 'index.php', 'files/1567259554731629447index.php', '2019-08-31 13:52:34', 1730, 1),
(36, 'login.php', 'files/1567259554395237130login.php', '2019-08-31 13:52:34', 1407, 1),
(37, 'loginscript.php', 'files/1567259554776099607loginscript.php', '2019-08-31 13:52:34', 1002, 1),
(38, 'logout.php', 'files/1567259554390641179logout.php', '2019-08-31 13:52:34', 91, 1),
(39, 'rotate.php', 'files/1567259554514209868rotate.php', '2019-08-31 13:52:34', 546, 1),
(40, 'sugestie.php', 'files/1567259554631875233sugestie.php', '2019-08-31 13:52:34', 3616, 1),
(41, '', 'files/1567937557289964173', '2019-09-08 10:12:37', 0, 1),
(42, '', 'files/1567937563647284735', '2019-09-08 10:12:43', 0, 1),
(43, 'Screenshot_20190908-221930_Samsung Internet.jpg', 'files/1567974030298487147Screenshot_20190908-221930_Samsung Internet.jpg', '2019-09-08 20:20:30', 721545, 1),
(44, '15679743914402914246429156171928.jpg', 'files/156797444290390261715679743914402914246429156171928.jpg', '2019-09-08 20:27:22', 0, 1),
(45, '', 'files/1568219693699242513', '2019-09-11 16:34:53', 0, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL,
  `maxFileSize` int(11) NOT NULL DEFAULT 204800,
  `maxTotalSize` int(11) NOT NULL DEFAULT 419430400
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `maxFileSize`, `maxTotalSize`) VALUES
(1, 'user', 'user', 209715200, 419430400),
(2, 'founder', '1234', 209715200, 419430400),
(3, 'maciek', 'maciek', 209715200, 419430400);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `data`
--
ALTER TABLE `data`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `owner` (`owner`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
