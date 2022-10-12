-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 12, 2022 alle 11:58
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

DELIMITER $$
--
-- Funzioni
--
CREATE DEFINER=`root`@`localhost` FUNCTION `prezzo` (`arrivo` DATE, `partenza` DATE, `tipo` ENUM('singola','doppia','matrimoniale','tripla')) RETURNS DECIMAL(7,2) READS SQL DATA BEGIN
        DECLARE varData DATE;
        DECLARE varTotale DECIMAL(7,2) default 0;
        DECLARE varPrezzo DECIMAL(7,2);
        SET varData = arrivo;
        WHILE varData < partenza DO
                SELECT prezzo INTO varPrezzo FROM prezzi
                WHERE varData BETWEEN periodoDal AND periodoAl
                AND tipoCamera = tipo;
                SET varTotale = varTotale + varPrezzo;
                SET varData = DATE_ADD(varData,INTERVAL 1 day);
        END WHILE;
        return varTotale;
END$$

DELIMITER ;

--
-- Dump dei dati per la tabella `camere`
--

INSERT INTO `camere` (`numero`, `piano`, `tipo`, `lettiAggiunti`, `optionals`) VALUES
(101, 1, 'singola', '', 'ariaCondizionata'),
(102, 1, 'doppia', '', 'ariaCondizionata,vistaMare,tv'),
(103, 1, 'doppia', 'terzo', 'ariaCondizionata,vistaMare,tv'),
(104, 1, 'matrimoniale', 'terzo,quarto', 'ariaCondizionata'),
(201, 2, 'matrimoniale', 'terzo', 'ariaCondizionata,vistaMare,tv'),
(202, 2, 'matrimoniale', 'terzo', 'ariaCondizionata,vistaMare,tv'),
(203, 2, 'matrimoniale', 'terzo,quarto', 'ariaCondizionata'),
(301, 3, 'matrimoniale', 'terzo', 'ariaCondizionata,vistaMare,tv'),
(302, 3, 'matrimoniale', 'terzo', 'ariaCondizionata,vistaMare,tv'),
(303, 3, 'matrimoniale', 'terzo,quarto', 'ariaCondizionata'),
(401, 4, 'singola', '', 'fumatori'),
(402, 4, 'tripla', 'quarto', 'fumatori,vistaMare'),
(403, 4, 'tripla', 'quarto', 'fumatori');

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`id`, `nominativo`, `indirizzo`, `telefono`) VALUES
(1, 'Rossi Mario', 'via Manzi, 2 - 00153 Roma', '06 86123920');

--
-- Dump dei dati per la tabella `prezzi`
--

INSERT INTO `prezzi` (`periodoDal`, `periodoAl`, `tipoCamera`, `prezzo`) VALUES
('2006-05-01', '2006-05-31', 'singola', '50.00'),
('2006-05-01', '2006-05-31', 'doppia', '90.00'),
('2006-05-01', '2006-05-31', 'matrimoniale', '90.00'),
('2006-05-01', '2006-05-31', 'tripla', '130.00'),
('2006-06-01', '2006-06-30', 'singola', '55.00'),
('2006-06-01', '2006-06-30', 'doppia', '95.00'),
('2006-06-01', '2006-06-30', 'matrimoniale', '95.00'),
('2006-06-01', '2006-06-30', 'tripla', '140.00'),
('2006-07-01', '2006-07-31', 'singola', '65.00'),
('2006-07-01', '2006-07-31', 'doppia', '120.00'),
('2006-07-01', '2006-07-31', 'matrimoniale', '120.00'),
('2006-07-01', '2006-07-31', 'tripla', '160.00'),
('2006-08-01', '2006-08-31', 'singola', '80.00'),
('2006-08-01', '2006-08-31', 'doppia', '150.00'),
('2006-08-01', '2006-08-31', 'matrimoniale', '150.00'),
('2006-08-01', '2006-08-31', 'tripla', '200.00'),
('2006-09-01', '2006-09-30', 'singola', '50.00'),
('2006-09-01', '2006-09-30', 'doppia', '90.00'),
('2006-09-01', '2006-09-30', 'matrimoniale', '90.00'),
('2006-09-01', '2006-09-30', 'tripla', '130.00');

--
-- Dump dei dati per la tabella `supplementi`
--

INSERT INTO `supplementi` (`codice`, `voce`, `prezzo`) VALUES
(1, 'culla', '8.00'),
(2, 'letto aggiuntivo', '30.00'),
(3, 'uso singola', '-15.00'),
(4, 'bed&breakfast', '-10.00'),
(5, 'pensione completa', '5.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
