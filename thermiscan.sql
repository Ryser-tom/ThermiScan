-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Mars 2020 à 14:17
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `camera`
--

INSERT INTO `camera` (`idCamera`, `nomCamera`, `IdUser`) VALUES
(17, 'camera R105', 4),
(16, 'test2', 2),
(15, 'camera num 1', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`IdUser`, `username`, `password`) VALUES
(1, 'lorenzo', '8451ba8a14d79753d34cb33b51ba46b4b025eb81'),
(2, 'lorenzo1', '8451ba8a14d79753d34cb33b51ba46b4b025eb81'),
(3, 'kevin', '8451ba8a14d79753d34cb33b51ba46b4b025eb81'),
(4, 'prÃ©sentation', '52d166edfc5ee6a6413333ea67be0eb40d467a72');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=54 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`idVideo`, `dateVideo`, `nomVideo`, `nomDossier`, `IdCamera`, `Iduser`) VALUES
(44, '2020-02-26 15:57:48', 'test', '8f2a87f94b24f175893da64e0cf2e6358de4cb85', 15, 2),
(45, '2020-03-04 14:17:13', 'blobinard', '9735dc8dd6efe7c16fe9a51f449b764ff4631edd', 16, 2),
(46, '2020-03-04 15:10:22', 'blo2', 'ab593ecdcd50504b2041f4dc5919e88a1d908db4', 16, 2),
(47, '2020-03-04 15:14:50', 'wdada', '1228e58f4eba343605ccd84cce9cb41f97007260', 16, 2),
(48, '2020-03-04 15:21:34', 'plouf', '79385f52de771095c5316f0f9fdf60c50b9e9f04', 16, 2),
(49, '2020-03-04 15:26:22', 'win', 'b9091ab6ed65a7881cfb08b9eb82e75b847a12ca', 16, 2),
(50, '2020-03-04 15:31:30', 'gawen', 'bb75c3778bf63533e900aee43c851def6b5cdcf9', 16, 2),
(51, '2020-03-04 15:59:15', 'test66', 'bd37dd2e9485357527005e2e7f080969294cdf73', 16, 2),
(52, '2020-03-04 15:59:23', 'wdawdw', '2ce94d4ba062a9c339d953e788ebb25d8271aed6', 16, 2),
(53, '2020-03-11 14:10:24', 'video_de_test', 'c89cbc982aaa129e3b177755c80dab5e7b427694', 17, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
