-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  db5000052874.hosting-data.io
-- Généré le :  Ven 26 Avril 2019 à 10:15
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

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

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

CREATE TABLE `hebergement` (
  `aile` varchar(1) DEFAULT NULL,
  `etage` int(11) DEFAULT NULL,
  `numheberg` int(11) NOT NULL,
  `numtype` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `hebergement`
--

INSERT INTO `hebergement` (`aile`, `etage`, `numheberg`, `numtype`) VALUES
('A', 1, 1, 1),
('A', 1, 2, 1),
('A', 1, 3, 1),
('A', 1, 4, 1),
('A', 1, 5, 1),
('A', 1, 6, 1),
('A', 1, 7, 1),
('A', 1, 8, 1),
('A', 1, 9, 1),
('A', 1, 10, 1),
('A', 1, 11, 1),
('A', 1, 12, 1),
('A', 1, 13, 1),
('A', 1, 14, 1),
('A', 1, 15, 1),
('A', 1, 16, 1),
('A', 1, 17, 1),
('A', 1, 18, 1),
('A', 1, 19, 1),
('A', 1, 20, 1),
('A', 1, 21, 1),
('A', 1, 22, 1),
('A', 1, 23, 1),
('A', 1, 24, 1),
('A', 1, 25, 1),
('A', 1, 26, 1),
('A', 1, 27, 1),
('A', 1, 28, 1),
('A', 1, 29, 1),
('A', 1, 30, 1),
('A', 1, 31, 1),
('A', 1, 32, 1),
('A', 1, 33, 1),
('A', 1, 34, 1),
('A', 1, 35, 1),
('A', 1, 36, 1),
('A', 1, 37, 1),
('A', 1, 38, 1),
('A', 1, 39, 1),
('A', 1, 40, 1),
('A', 2, 41, 2),
('A', 2, 42, 2),
('A', 2, 43, 2),
('A', 2, 44, 2),
('A', 2, 45, 2),
('A', 2, 46, 2),
('A', 2, 47, 2),
('A', 2, 48, 2),
('A', 2, 49, 2),
('A', 2, 50, 2),
('A', 2, 51, 2),
('A', 2, 52, 2),
('A', 2, 53, 2),
('A', 2, 54, 2),
('B', 3, 55, 3),
('B', 3, 56, 3),
('B', 3, 57, 3),
('B', 3, 58, 3),
('B', 3, 59, 3),
('B', 3, 60, 3),
('B', 3, 61, 3),
('B', 3, 62, 3),
('B', 4, 63, 4),
('B', 4, 64, 4),
('B', 4, 65, 4),
('B', 4, 66, 4),
('B', 4, 67, 4),
('B', 4, 68, 4),
('B', 4, 69, 4),
('B', 4, 70, 4),
('B', 4, 71, 4),
('B', 4, 72, 4),
('B', 4, 73, 4),
('B', 4, 74, 4),
('B', 4, 75, 4),
('B', 4, 76, 4),
('B', 4, 77, 4),
('B', 4, 78, 4),
('B', 4, 79, 4),
('B', 4, 80, 4),
('B', 4, 81, 4),
('B', 4, 82, 4),
('B', 4, 83, 4),
('B', 4, 84, 4),
('B', 4, 85, 4),
('B', 4, 86, 4),
('B', 4, 87, 4),
('B', 4, 88, 4),
('B', 4, 89, 4),
('B', 4, 90, 4),
('B', 4, 91, 4),
('B', 4, 92, 4),
('B', 4, 93, 4),
('B', 4, 94, 4),
('B', 4, 95, 4),
('B', 4, 96, 4),
('B', 4, 97, 4),
('B', 4, 98, 4),
('B', 4, 99, 4),
('B', 4, 100, 4),
('B', 4, 101, 4),
('A', 5, 102, 5);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

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

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`date_arrivee`, `date_depart`, `nbpersonne`, `etatreserv`, `menage`, `restauration`, `activites`, `datereserv`, `tarifreserv`, `numreserv`, `numadherent`, `numheberg`) VALUES
('0000-00-00', '0000-00-00', 3, NULL, 0, 'on', 0, '2019-04-18 09:15:56', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typehebergement`
--

CREATE TABLE `typehebergement` (
  `capacite` int(11) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `numtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `typehebergement`
--

INSERT INTO `typehebergement` (`capacite`, `tarif`, `description`, `numtype`) VALUES
(4, 132, 'entrée, douche et wc, 2 chambres à 2 lits avec coin toilette et balcon.', 1),
(2, 113, 'entrée, douche et wc, 1 lit double', 2),
(6, 156, '3 lits séparés par une cloison mobile avec coin toilette, wc, douche.', 3),
(8, 156, '4 lits séparés par une cloison mobile avec douche, wc et balcon.', 4),
(1, 160, '1logement adapté pour les personnes à mobilité réduite.', 5);

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
  MODIFY `numheberg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numreserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `typehebergement`
--
ALTER TABLE `typehebergement`
  MODIFY `numtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
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
