-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Ven 21 Juin 2013 à 08:58
-- Version du serveur: 5.5.27
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `parc_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `ordinateurs`
--

DROP TABLE IF EXISTS `ordinateurs`;
CREATE TABLE IF NOT EXISTS `ordinateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` char(15) NOT NULL,
  `mac` char(17) NOT NULL,
  `nom` char(15) NOT NULL,
  `salle` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Contenu de la table `ordinateurs`
--

INSERT INTO `ordinateurs` (`id`, `ip`, `mac`, `nom`, `salle`) VALUES
(47, '178.17.5.4', '00:1a:73:7d:e0:eb', 'pc-x', 2),
(45, '172.17.5.2', '00:14:6c:65:86:ab', 'pc-w', 2),
(16, '172.17.4.21', '00:0d:56:c2:f2:5a', 'pc-01', 2),
(17, '192.17.4.22', '00:0d:56:c2:f3:a7', 'pc-02', 1),
(18, '172.17.4.23', '00:0d:56:c2:e8:4d', 'pc-03', 1),
(22, '172.17.4.27', '00:0d:56:c2:f3:ad', 'pc-07', 1),
(23, '178.17.4.28', '00:11:85:10:f4:bf', 'pc-08', 2),
(24, '172.17.4.29', '00:11:85:11:01:2b', 'pc-09', 1),
(25, '172.17.4.30', '00:11:85:14:4e:37', 'pc-10', 1),
(26, '192.17.4.31', '00:11:85:14:4d:99', 'pc-11', 1),
(27, '172.17.4.32', '00:11:85:62:71:05', 'pc-12', 1),
(28, '172.17.4.33', '00:11:85:14:4e:22', 'pc-13', 1),
(29, '176.17.4.34', '00:11:85:14:4d:ab', 'pc-14', 1),
(30, '172.17.4.35', '00:0f:b5:85:0c:21', 'pc-15', 3),
(31, '168.17.4.36', '00:14:85:7d:d2:35', 'pc-16', 3),
(32, '172.17.4.37', '00:14:85:7a:a9:8c', 'pc-17', 3),
(79, '178.17.4.38', '00:14:85:7D:CF:AA', 'pc-18', 4),
(34, '178.17.4.39', '00:14:85:79:78:fa', 'pc-19', 4),
(39, '172.17.4.43', '00:14:85:7a:78:dc', 'pc-23', 3),
(40, '172.17.4.44', '00:14:85:7a:78:a5', 'pc-24', 3),
(41, '172.17.4.45', '00:14:85:7a:78:de', 'pc-25', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
