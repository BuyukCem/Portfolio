-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  db5000052874.hosting-data.io
-- Généré le :  Mer 17 Avril 2019 à 22:13
-- Version du serveur :  5.7.25-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbs47803`
--
DROP DATABASE IF EXISTS `dbs47803`;
CREATE DATABASE IF NOT EXISTS `dbs47803` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbs47803`;

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE `adherent` (
  `nomadh` varchar(50) DEFAULT NULL,
  `prenomadh` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `quotientfam` int(11) DEFAULT NULL,
  `numadh` int(11) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `typeuser` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adherent`
--

INSERT INTO `adherent` (`nomadh`, `prenomadh`, `login`, `mdp`, `adresse`, `mail`, `quotientfam`, `numadh`, `tel`, `typeuser`) VALUES
('test', 'test', 'test', 'test', '10 allée de castillon', 'test@test.com', 2, 1, '0604436568', 0);

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE `administrateur` (
  `idadmin` int(11) NOT NULL,
  `loginadmin` varchar(40) DEFAULT NULL,
  `mdp` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `loginadmin`, `mdp`) VALUES
(1, 'cem', 'cem');

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

DROP TABLE IF EXISTS `hebergement`;
CREATE TABLE `hebergement` (
  `aile` varchar(1) DEFAULT NULL,
  `etage` int(11) DEFAULT NULL,
  `numheberg` int(11) NOT NULL,
  `numtype` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `date_arrivee` date DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `nbpersonne` int(11) DEFAULT NULL,
  `etatreserv` varchar(50) DEFAULT NULL,
  `menage` tinyint(1) DEFAULT NULL,
  `restauration` varchar(50) DEFAULT NULL,
  `activites` tinyint(1) DEFAULT NULL,
  `datereserv` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tarifreserv` double DEFAULT NULL,
  `numreserv` int(11) NOT NULL,
  `numadherent` int(11) DEFAULT NULL,
  `numheberg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typehebergement`
--

DROP TABLE IF EXISTS `typehebergement`;
CREATE TABLE `typehebergement` (
  `capacite` int(11) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `numtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`numadh`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD PRIMARY KEY (`numheberg`),
  ADD KEY `numtype` (`numtype`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numreserv`),
  ADD UNIQUE KEY `numheberg` (`numheberg`),
  ADD KEY `numadherent` (`numadherent`);

--
-- Index pour la table `typehebergement`
--
ALTER TABLE `typehebergement`
  ADD PRIMARY KEY (`numtype`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `numadh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `hebergement`
--
ALTER TABLE `hebergement`
  MODIFY `numheberg` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numreserv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `typehebergement`
--
ALTER TABLE `typehebergement`
  MODIFY `numtype` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD CONSTRAINT `hebergement_ibfk_1` FOREIGN KEY (`numtype`) REFERENCES `typehebergement` (`numtype`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`numheberg`) REFERENCES `hebergement` (`numheberg`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`numadherent`) REFERENCES `adherent` (`numadh`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
