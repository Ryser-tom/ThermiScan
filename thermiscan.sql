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


-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `idVideo` int(11) NOT NULL AUTO_INCREMENT,
  `dateVideo` datetime NOT NULL,
  `nomVideo` varchar(100) NOT NULL,
  `nomDossier` varchar(100) NOT NULL,
  `IdCamera` int(11) NOT NULL,
  `Iduser` int(11) NOT NULL,
  PRIMARY KEY (`idVideo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=54 ;

--
-- Contenu de la table `video`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
