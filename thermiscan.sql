-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 19 Février 2020 à 15:26
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `camera`
--

INSERT INTO `camera` (`idCamera`, `nomCamera`, `IdUser`) VALUES
(9, 'camera lorenzo 2', 1),
(8, 'camera lorenzo 1', 1),
(7, 'camera num 4', 2),
(6, 'camera num 1', 2),
(10, 'camera lorenzo 3', 1),
(11, 'camera lorenzo 4', 1),
(12, 'camera kevin 1', 3),
(13, 'camera num 2 kevin', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`IdUser`, `username`, `password`) VALUES
(1, 'lorenzo', '8451ba8a14d79753d34cb33b51ba46b4b025eb81'),
(2, 'lorenzo1', '8451ba8a14d79753d34cb33b51ba46b4b025eb81'),
(3, 'kevin', '8451ba8a14d79753d34cb33b51ba46b4b025eb81');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `idVideo` int(11) NOT NULL AUTO_INCREMENT,
  `dateVideo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nomVideo` varchar(100) NOT NULL,
  `nomDossier` varchar(100) NOT NULL,
  `IdCamera` int(11) NOT NULL,
  `Iduser` int(11) NOT NULL,
  PRIMARY KEY (`idVideo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`idVideo`, `dateVideo`, `nomVideo`, `nomDossier`, `IdCamera`, `Iduser`) VALUES
(22, '2020-02-19 15:01:08', 'test2', '77be23236533eae538668ec5d257526f6260b7e3', 7, 2),
(21, '2020-02-19 14:13:18', 'wadddadda', '499b981de8855a6c99921e353ad5dd61dd201713', 7, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
