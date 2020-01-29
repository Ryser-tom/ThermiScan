-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Janvier 2020 à 13:32
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `thermiscan`
--

-- --------------------------------------------------------

--
-- Structure de la table `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `idCamera` int(11) NOT NULL AUTO_INCREMENT,
  `nomCamera` varchar(100) NOT NULL,
  `IdUser` int(11) NOT NULL,
  PRIMARY KEY (`idCamera`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `camera`
--

INSERT INTO `camera` (`idCamera`, `nomCamera`, `IdUser`) VALUES
(9, 'camera lorenzo 2', 1),
(8, 'camera lorenzo 1', 1),
(7, 'camera num 4', 2),
(6, 'camera num 1', 2),
(10, 'camera lorenzo 3', 1),
(11, 'camera lorenzo 4', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`IdUser`, `username`, `password`) VALUES
(1, 'lorenzo', '8451ba8a14d79753d34cb33b51ba46b4b025eb81'),
(2, 'lorenzo1', '8451ba8a14d79753d34cb33b51ba46b4b025eb81');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `idVideo` int(11) NOT NULL AUTO_INCREMENT,
  `dateVideo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nomVideo` varchar(100) NOT NULL,
  `IdCamera` int(11) NOT NULL,
  `Iduser` int(11) NOT NULL,
  PRIMARY KEY (`idVideo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`idVideo`, `dateVideo`, `nomVideo`, `IdCamera`, `Iduser`) VALUES
(7, '0000-00-00 00:00:00', 'test2', 9, 0),
(12, '2020-01-15 15:33:02', 'test3', 8, 0),
(13, '2020-01-15 15:34:17', 'test video', 11, 0),
(14, '2020-01-15 15:45:12', 'zjjzt', 9, 1),
(15, '2020-01-15 15:59:42', 'video de test', 9, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
