-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Juin 2015 à 14:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `machouille`
--

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `state` int(11) NOT NULL DEFAULT '0',
  `datecreation` date NOT NULL,
  `datefinish` date NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` int(11) NOT NULL DEFAULT '1',
  `img` varchar(40) DEFAULT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `category`, `img`, `desc`) VALUES
(1, 2, 'Fraise-Framboise-Poulet', 1, 'bb4.jpg', ''),
(2, 50, 'Fraise-Chocolat-Banane', 1, 'bb5.jpg', ''),
(5, 15, 'Grenadine - Menthe - Poire', 3, 'bb4.jpg', ''),
(6, 2, 'Grenadine - Pruneaux - Mandarine', 3, 'bb2.jpg', ''),
(8, 5, 'Fraise façon crumble', 2, 'bb3.jpg', ''),
(9, 7, 'Pomme', 3, 'bb6.jpg', ''),
(10, 10, 'Pruneaux d''Agen', 3, 'cg8.jpg', ''),
(11, 7, 'Menthe Forte', 3, 'cg9.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `productcategory`
--

CREATE TABLE IF NOT EXISTS `productcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `productcategory`
--

INSERT INTO `productcategory` (`id`, `name`) VALUES
(1, 'tri-gout'),
(2, 'cremeux'),
(3, 'fruit');

-- --------------------------------------------------------

--
-- Structure de la table `productodered`
--

CREATE TABLE IF NOT EXISTS `productodered` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `idproduct` int(11) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `datebirth` date DEFAULT NULL,
  `adress` text,
  `category` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `firstname`, `lastname`, `datebirth`, `adress`, `category`) VALUES
(1, 'admin', 'admin', NULL, NULL, '2013-07-02', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `usercategory`
--

CREATE TABLE IF NOT EXISTS `usercategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `usercategory`
--

INSERT INTO `usercategory` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'particulier'),
(3, 'distributeur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
