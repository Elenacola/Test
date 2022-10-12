-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 12, 2022 alle 19:42
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `supplementi`
--

CREATE TABLE `supplementi` (
  `codice` tinyint(3) UNSIGNED NOT NULL,
  `voce` char(20) NOT NULL,
  `prezzo` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `supplementi`
--

INSERT INTO `supplementi` (`codice`, `voce`, `prezzo`) VALUES
(1, 'culla', '8.00'),
(2, 'letto aggiuntivo', '30.00'),
(3, 'uso singola', '-15.00'),
(4, 'bed&breakfast', '-10.00'),
(5, 'pensione completa', '5.00');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `supplementi`
--
ALTER TABLE `supplementi`
  ADD PRIMARY KEY (`codice`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `supplementi`
--
ALTER TABLE `supplementi`
  MODIFY `codice` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
