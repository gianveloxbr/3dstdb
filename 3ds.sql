-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Nov-2018 às 16:00
-- Versão do servidor: 5.7.10-log
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3ds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `db`
--

DROP TABLE IF EXISTS `db`;
CREATE TABLE IF NOT EXISTS `db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gameName` varchar(300) DEFAULT NULL,
  `gameDesc` text,
  `ciaLink` varchar(600) DEFAULT NULL,
  `qr` varchar(1000) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `gameBox` varchar(300) DEFAULT NULL,
  `releaseDate` datetime DEFAULT NULL,
  `region` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `db`
--

INSERT INTO `db` (`id`, `gameName`, `gameDesc`, `ciaLink`, `qr`, `genre`, `gameBox`, `releaseDate`, `region`) VALUES
(1, 'Cave Story', 'Cave Story is an Action-Adventure game Developed and Published by Nicalis, Inc.', 'https://drive.google.com/uc?export=download&id=1sSRYCcCQdDNhky5eDooHFofwj8N2x-CA', 'Cave Story.png', 'Action , Adventure', 'cave.png', '2012-10-04 00:00:00', 'EUR , USA'),
(2, 'Zombie Panic in Wonderland DX', 'The Deluxe Version for Nintendo 3DS of the successful Zombie Panic in Wonderland!\r\n\r\nDon’t miss it! The game is completely renewed for this version!\r\n\r\nAmazing graphics!\r\nExtra stages and extended story!\r\nExclusive enemies!\r\nYou can use 2 different control systems which are perfectly adapted for the Nintendo 3DS!\r\nMaximized playability!\r\nLet’s set out on a grand adventure to save the Wonderland from the zombies destroying all in your way!\r\n\r\nThe world of the fairy tales has been invaded by a plague of strange zombies wondering and spreading an amorous and unpleasant scent. Returning home for the first time in years, Momotaro (Peach Boy) comes upon this weird scent and feels urged to get to the bottom of the problem.\r\n\r\nArmed with powerful weapons, Momotaro goes through the most popular fairy tales, where also he meets allies who help him to defeat the craziest zombies full of love you have ever seen.', 'https://drive.google.com/uc?export=download&id=191FXGnJmB1tXzz0cO6n5r-DLpPM6v4g1', 'Zombie Panic in Wonderland DX.png', 'Action , Adventure', 'zombie.png', '2014-10-30 00:00:00', 'USA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
