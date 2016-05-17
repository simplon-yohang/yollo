-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 16 Mai 2016 à 14:17
-- Version du serveur: 5.5.47-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `trello`
--

-- --------------------------------------------------------

--
-- Structure de la table `pr`
--

CREATE TABLE IF NOT EXISTS `pr` (
  `idProjet` int(11) NOT NULL AUTO_INCREMENT,
  `projet` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `login` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idProjet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `pr`
--

INSERT INTO `pr` (`idProjet`, `projet`, `login`) VALUES
(1, 'fifty', 'yoyo'),
(2, 'simplon', 'yoyo'),
(3, 'naddrible', 'yoyo'),
(4, 'trello', 'yog'),
(5, 'yg', 'yog'),
(6, 'test', 'dark'),
(7, 'futur', 'yoyo');

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `idTache` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tache` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `dateCreation` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `login` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `projet` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idTache`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=29 ;

--
-- Contenu de la table `todo`
--

INSERT INTO `todo` (`idTache`, `titre`, `tache`, `dateCreation`, `login`, `projet`) VALUES
(2, 'manger', 'tacos', '2/3/16', 'yog', 'trello'),
(3, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'bad'),
(4, 'rouler', 'velo', '2/3/16', 'yog', 'yg'),
(5, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'bad'),
(6, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'bad'),
(7, 'coder', 'apple', '2/3/16', 'yog', 'yg'),
(8, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'test'),
(9, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'test'),
(10, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'test'),
(11, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'test'),
(12, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'test'),
(13, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'test'),
(14, 'reposer', 'dormir', '3/03/16 15:23', 'dark', 'bad'),
(15, 'travailler', 'dur', ' 3/03/16   17:11 ', 'yoyo', 'fifty'),
(16, 'conduire', 'voiture', ' 3/03/16   17:13 ', 'yoyo', 'fifty'),
(17, 'rentrer', 'maison', ' 3/03/16   17:33 ', 'yoyo', 'simplon'),
(18, 'voyager', 'beaucoup', ' 3/03/16   17:36 ', 'yoyo', 'simplon'),
(19, '', NULL, NULL, 'yoyo', ''),
(20, '', NULL, NULL, 'yoyo', ''),
(21, '', '', NULL, 'yoyo', ''),
(22, 'live', 'alone', ' 5/03/16   12:38 ', 'yoyo', 'naddrible'),
(23, 'fuck', 'off', ' 6/03/16   15:30 ', 'yoyo', 'naddrible'),
(24, 'lointain', 'avenir', ' 7/03/16   15:31 ', 'yoyo', 'futur'),
(25, 'ol', 'lyon', ' 8/03/16   13:09 ', 'yoyo', 'naddrible'),
(26, 'nwa', 'nba', ' 23/03/16   15:14 ', 'yoyo', 'fifty'),
(27, 'travail', 'michelyo', ' 3/05/16   15:29 ', 'yoyo', 'fifty'),
(28, 'the text', 'simplon lyon', ' 4/05/16   18:23 ', 'yoyo', 'futur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`iduser`, `login`, `password`) VALUES
(1, 'edsfg', 'zsqedrf'),
(2, ':login', ':password'),
(6, 'yog', 'han'),
(7, 'yoyo', 'gran'),
(8, 'dark', 'vador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
