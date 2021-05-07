-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 mai 2021 à 16:02
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_employes`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(10) NOT NULL,
  `dateParution` date NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `idUser` int(10) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `noemp` int(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) NOT NULL,
  `date_ajout` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`noemp`, `nom`, `prenom`, `emploi`, `sup`, `embauche`, `sal`, `comm`, `noserv`, `date_ajout`) VALUES
(1000, 'LEROY', 'PAUL', 'PRESIDENT', NULL, '1987-10-25', 55005.50, NULL, 1, '2021-04-20'),
(1100, 'DELPIERRE', 'DOROTHEE', 'SECRETAIRE', 1000, '1987-10-25', 12351.24, NULL, 1, '2021-04-20'),
(1101, 'DUMONT', 'LOUIS', 'VENDEUR', 1300, '1987-10-25', 9047.90, 0.00, 1, '2021-04-20'),
(1102, 'MINET', 'MARC', 'VENDEUR', 1300, '1987-10-25', 8085.81, 17230.00, 1, '2021-04-20'),
(1104, 'NYS', 'ETIENNE', 'TECHNICIEN', 1200, '1987-10-25', 12342.23, NULL, 1, '2021-04-20'),
(1105, 'DENIMAL', 'JEROME', 'COMPTABLE', 1600, '1987-10-25', 15746.57, NULL, 1, '2021-04-20'),
(1200, 'LEMAIRE', 'GUY', 'DIRECTEUR', 1000, '1987-03-11', 36303.63, NULL, 2, '2021-04-20'),
(1201, 'MARTIN', 'JEAN', 'TECHNICIEN', 1200, '1987-06-25', 11235.12, NULL, 2, '2021-04-20'),
(1202, 'DUPONT', 'JACQUES', 'TECHNICIEN', 1200, '1988-10-30', 10313.03, NULL, 2, '2021-04-20'),
(1300, 'LENOIR', 'GERARD', 'DIRECTEUR', 1000, '1987-04-02', 31353.14, 13071.00, 3, '2021-04-20'),
(1301, 'GERARD', 'ROBERT', 'VENDEUR', 1300, '1999-04-16', 7694.77, 12430.00, 3, '2021-04-20'),
(1303, 'MASURE', 'EMILE', 'TECHNICIEN', 1200, '1988-06-17', 10451.05, NULL, 3, '2021-04-20'),
(1500, 'DUPONT', 'JEAN', 'DIRECTEUR', 1000, '1987-10-23', 28434.84, NULL, 5, '2021-04-20'),
(1501, 'DUPIRE', 'PIERRE', 'ANALYSTE', 1500, '1984-10-24', 23102.31, NULL, 5, '2021-04-20'),
(1502, 'DURAND', 'BERNARD', 'PROGRAMMEUR', 1500, '1987-07-30', 13201.32, NULL, 5, '2021-04-20'),
(1503, 'DELNATTE', 'LUC', 'PUPITREUR', 1500, '1999-01-15', 8801.01, NULL, 5, '2021-04-20'),
(1600, 'LAVARE', 'PAUL', 'DIRECTEUR', 1000, '1991-12-13', 31238.12, NULL, 6, '2021-04-20'),
(1601, 'CARON', 'ALAIN', 'COMPTABLE', 1600, '1985-09-16', 33003.30, NULL, 6, '2021-04-20'),
(1602, 'DUBOIS', 'JULES', 'VENDEUR', 1300, '1990-12-20', 9520.95, 35535.00, 6, '2021-04-20'),
(1603, 'MOREL', 'ROBERT', 'COMPTABLE', 1600, '1985-07-18', 33003.30, NULL, 6, '2021-04-20'),
(1604, 'HAVET', 'ALAIN', 'VENDEUR', 1300, '1991-01-01', 9388.94, 33415.00, 6, '2021-04-20'),
(1605, 'RICHARD', 'JULES', 'COMPTABLE', 1600, '1985-10-22', 33503.35, NULL, 5, '2021-04-20'),
(1615, 'DUPREZ', 'JEAN', 'BALAYEUR', 1000, '1998-10-22', 6000.60, NULL, 5, '2021-04-20'),
(1616, 'BOUMAZZOUGH', 'MOHAMED', 'CANTINE', 1200, '2021-05-04', 2000.00, NULL, 1, '2021-05-04'),
(1617, 'BOUMAZZOUGH', 'MOHAMED', 'SECRETARIAT', 1200, '2021-05-04', 2000.00, NULL, 1, '2021-05-04'),
(1618, 'BOUMAZZOUGH', 'MOHAMED', 'CANTINE', 1200, '2021-05-04', 2000.00, 0.00, 2, '2021-05-04'),
(1619, 'BOUMAZZOUGH', 'MOHAMED', 'EMPLOYE', 1200, '2021-05-04', 2000.00, 0.00, 5, '2021-05-04');

-- --------------------------------------------------------

--
-- Structure de la table `employes2`
--

CREATE TABLE `employes2` (
  `noemp` int(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) NOT NULL,
  `date_ajout` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes2`
--

INSERT INTO `employes2` (`noemp`, `nom`, `prenom`, `emploi`, `sup`, `embauche`, `sal`, `comm`, `noserv`, `date_ajout`) VALUES
(1000, 'LEROY', 'PAUL', 'PRESIDENT', NULL, '1987-10-25', 55005.50, NULL, 1, '2021-04-20'),
(1100, 'DELPIERRE', 'DOROTHEE', 'SECRETAIRE', 1000, '1987-10-25', 12351.24, NULL, 1, '2021-04-20'),
(1101, 'DUMONT', 'LOUIS', 'VENDEUR', 1300, '1987-10-25', 9047.90, 0.00, 1, '2021-04-20'),
(1102, 'MINET', 'MARC', 'VENDEUR', 1300, '1987-10-25', 8085.81, 17230.00, 1, '2021-04-20'),
(1104, 'NYS', 'ETIENNE', 'TECHNICIEN', 1200, '1987-10-25', 12342.23, NULL, 1, '2021-04-20'),
(1105, 'DENIMAL', 'JEROME', 'COMPTABLE', 1600, '1987-10-25', 15746.57, NULL, 1, '2021-04-20'),
(1200, 'LEMAIRE', 'GUY', 'DIRECTEUR', 1000, '1987-03-11', 36303.63, NULL, 2, '2021-04-20'),
(1201, 'MARTIN', 'JEAN', 'TECHNICIEN', 1200, '1987-06-25', 11235.12, NULL, 2, '2021-04-20'),
(1202, 'DUPONT', 'JACQUES', 'TECHNICIEN', 1200, '1988-10-30', 10313.03, NULL, 2, '2021-04-20'),
(1300, 'LENOIR', 'GERARD', 'DIRECTEUR', 1000, '1987-04-02', 31353.14, 13071.00, 3, '2021-04-20'),
(1301, 'GERARD', 'ROBERT', 'VENDEUR', 1300, '1999-04-16', 7694.77, 12430.00, 3, '2021-04-20'),
(1303, 'MASURE', 'EMILE', 'TECHNICIEN', 1200, '1988-06-17', 10451.05, NULL, 3, '2021-04-20'),
(1500, 'DUPONT', 'JEAN', 'DIRECTEUR', 1000, '1987-10-23', 28434.84, NULL, 5, '2021-04-20'),
(1501, 'DUPIRE', 'PIERRE', 'ANALYSTE', 1500, '1984-10-24', 23102.31, NULL, 5, '2021-04-20'),
(1502, 'DURAND', 'BERNARD', 'PROGRAMMEUR', 1500, '1987-07-30', 13201.32, NULL, 5, '2021-04-20'),
(1503, 'DELNATTE', 'LUC', 'PUPITREUR', 1500, '1999-01-15', 8801.01, NULL, 5, '2021-04-20'),
(1600, 'LAVARE', 'PAUL', 'DIRECTEUR', 1000, '1991-12-13', 31238.12, NULL, 6, '2021-04-20'),
(1601, 'CARON', 'ALAIN', 'COMPTABLE', 1600, '1985-09-16', 33003.30, NULL, 6, '2021-04-20'),
(1602, 'DUBOIS', 'JULES', 'VENDEUR', 1300, '1990-12-20', 9520.95, 35535.00, 6, '2021-04-20'),
(1603, 'MOREL', 'ROBERT', 'COMPTABLE', 1600, '1985-07-18', 33003.30, NULL, 6, '2021-04-20'),
(1604, 'HAVET', 'ALAIN', 'VENDEUR', 1300, '1991-01-01', 9388.94, 33415.00, 6, '2021-04-20'),
(1605, 'RICHARD', 'JULES', 'COMPTABLE', 1600, '1985-10-22', 33503.35, NULL, 5, '2021-04-20'),
(1615, 'DUPREZ', 'JEAN', 'BALAYEUR', 1000, '1998-10-22', 6000.60, NULL, 5, '2021-04-20'),
(1616, 'BOUMAZZOUGH', 'MOHAMED', 'EMPLOYE', 1200, '2021-04-29', 2000.00, NULL, 2, '2021-04-29'),
(1617, 'BOUMAZZOUGH', 'MOHAMED', 'SALARIE', 1000, '2021-04-30', 4000.00, NULL, 7, '2021-04-30'),
(1618, 'MOHAMED', 'BOUMAZZOUGH', 'EMPLOYE', 1000, '2021-04-30', 5000.00, NULL, 6, '2021-04-30');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `noserv` int(2) NOT NULL,
  `service` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`noserv`, `service`, `ville`) VALUES
(1, 'DIRECTION', 'PARIS'),
(2, 'LOGISTIQUE', 'SECLIN'),
(3, 'VENTES', 'ROUBAIX'),
(4, 'FORMATION', 'VILLENEUVE D\'ASCQ'),
(5, 'INFORMATIQUE', 'LILLE'),
(6, 'COMPTABILITE', 'LILLE'),
(7, 'TECHNIQUE', 'ROUBAIX');

-- --------------------------------------------------------

--
-- Structure de la table `services2`
--

CREATE TABLE `services2` (
  `noserv` int(2) NOT NULL,
  `service` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services2`
--

INSERT INTO `services2` (`noserv`, `service`, `ville`) VALUES
(1, 'DIRECTION', 'PARIS'),
(2, 'LOGISTIQUE', 'SECLIN'),
(3, 'VENTES', 'ROUBAIX'),
(4, 'FORMATION', 'VILLENEUVE D\'ASCQ'),
(5, 'INFORMATIQUE', 'LILLE'),
(6, 'COMPTABILITE', 'LILLE'),
(7, 'TECHNIQUE', 'ROUBAIX');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(4) NOT NULL,
  `nom_user` varchar(30) NOT NULL,
  `hash_password` varchar(255) NOT NULL,
  `profil` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom_user`, `hash_password`, `profil`) VALUES
(1, 'boumazzough', 'mohamed', 'user'),
(2, 'mohamed', '110022', 'user'),
(3, 'bouma', '11002200', 'user'),
(5, 'mohamed2', '$2y$10$mEPhh0AVmV5/B4MwHbUXIuVdreEnIjza1jI1GxWY.9GmBM6H3oQpq', 'admin'),
(6, 'mohamed', '$2y$10$lzM.0jZQIGEvnXkLs7FHqOqEVI80KUHTKzdICSs6zHrKBGXpP5Ld6', 'user'),
(7, 'mohamed3', '$2y$10$NReVae3NtF1diR3NUHzCbedZtlV/yg3EUZ0K/1cheO2QbdR7rS/iO', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur2`
--

CREATE TABLE `utilisateur2` (
  `id` int(4) NOT NULL,
  `nom_user` varchar(30) NOT NULL,
  `hash_password` varchar(255) NOT NULL,
  `profil` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur2`
--

INSERT INTO `utilisateur2` (`id`, `nom_user`, `hash_password`, `profil`) VALUES
(1, 'boumazzough', 'mohamed', 'admin'),
(2, 'mohamed', '110022', 'user'),
(3, 'bouma', '11002200', 'user'),
(4, 'mohamed2', '110022', 'user'),
(5, 'mohamed3', '110022', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`noemp`),
  ADD KEY `noserv` (`noserv`),
  ADD KEY `sup` (`sup`);

--
-- Index pour la table `employes2`
--
ALTER TABLE `employes2`
  ADD PRIMARY KEY (`noemp`),
  ADD KEY `noserv` (`noserv`),
  ADD KEY `sup` (`sup`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`noserv`);

--
-- Index pour la table `services2`
--
ALTER TABLE `services2`
  ADD PRIMARY KEY (`noserv`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur2`
--
ALTER TABLE `utilisateur2`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_ibfk_1` FOREIGN KEY (`noserv`) REFERENCES `services` (`noserv`),
  ADD CONSTRAINT `employes_ibfk_2` FOREIGN KEY (`sup`) REFERENCES `employes` (`noemp`);

--
-- Contraintes pour la table `employes2`
--
ALTER TABLE `employes2`
  ADD CONSTRAINT `employes2_ibfk_1` FOREIGN KEY (`noserv`) REFERENCES `services2` (`noserv`),
  ADD CONSTRAINT `employes2_ibfk_2` FOREIGN KEY (`sup`) REFERENCES `employes2` (`noemp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
