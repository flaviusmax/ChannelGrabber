-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 26, 2021 la 09:05 PM
-- Versiune server: 10.4.14-MariaDB
-- Versiune PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `channel`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tabel1`
--

CREATE TABLE `tabel1` (
  `id` int(10) NOT NULL,
  `name` varchar(63) NOT NULL,
  `address_line1` varchar(60) NOT NULL,
  `address_line2` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `tabel1`
--

INSERT INTO `tabel1` (`id`, `name`, `address_line1`, `address_line2`) VALUES
(1, 'David', 'Second', 'London'),
(2, 'Steve', 'First', 'Livepool'),
(3, 'Luci', 'The Pricipal 24', 'Livepool'),
(4, 'Joe', 'Second 25', 'London'),
(5, 'Julia', 'Second no 3', 'Cardiff');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `tabel1`
--
ALTER TABLE `tabel1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `tabel1`
--
ALTER TABLE `tabel1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
