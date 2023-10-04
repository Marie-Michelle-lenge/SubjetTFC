-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 oct. 2023 à 12:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sujecttfc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nomAdmin` varchar(20) NOT NULL,
  `post_nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `idDir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idCompt` int(11) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompt`, `pseudo`, `psw`, `matricule`) VALUES
(6, '16lk254', '4321', 16),
(7, '17ki254', '2587', 17),
(8, '18ki2547', '1234', 18);

-- --------------------------------------------------------

--
-- Structure de la table `directeur`
--

CREATE TABLE `directeur` (
  `idDir` int(11) NOT NULL,
  `nomDir` varchar(25) NOT NULL,
  `postnomDir` varchar(25) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `specialite` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `postnom` varchar(15) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `promotion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `postnom`, `prenom`, `promotion`) VALUES
(16, 'lenge', 'kabwang', 'mm', 'L3-GL'),
(17, 'kalaba', 'ilunga', 'alcya', 'L3-GL'),
(18, 'kalaba', 'ilunga', 'alcya', 'L3-GL');

-- --------------------------------------------------------

--
-- Structure de la table `suject`
--

CREATE TABLE `suject` (
  `idSuject` int(11) NOT NULL,
  `intitule` varchar(40) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `problematique` varchar(250) NOT NULL,
  `hypothese` varchar(30) NOT NULL,
  `etatArt` varchar(50) NOT NULL,
  `annAcad` varchar(9) NOT NULL,
  `matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suject`
--

INSERT INTO `suject` (`idSuject`, `intitule`, `theme`, `problematique`, `hypothese`, `etatArt`, `annAcad`, `matricule`) VALUES
(10, 'gestion des stock de la caisse de la gec', 'economie', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '0000-00-0', 18),
(11, 'gestion des stock de la caisse de la gec', 'economie', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '0000-00-0', 18),
(12, 'gestion des stock de la caisse de la gec', 'economie', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '2021-2022', 18),
(13, 'utilisation des stock de la caisse de la', 'economie', 'mauvaise gestion', 'loscj', 'k,eifj', '2021-2022', 18),
(14, 'gestion des stock de la caisse de la gec', 'compte', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '2021-2022', 18),
(15, 'gestion des stock de la caisse de la gec', 'compte', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '2021-2022', 18),
(16, 'gestion des stock de la caisse de la gec', 'compte', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '2021-2022', 18),
(17, 'gestion des stock de la caisse de la gec', 'compte', 'gestion mauvaise de la caisse', 'loscj', 'k,eifj', '2021-2022', 18);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCompt`),
  ADD KEY `matricule` (`matricule`);

--
-- Index pour la table `directeur`
--
ALTER TABLE `directeur`
  ADD PRIMARY KEY (`idDir`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `suject`
--
ALTER TABLE `suject`
  ADD PRIMARY KEY (`idSuject`),
  ADD KEY `matricule` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `directeur`
--
ALTER TABLE `directeur`
  MODIFY `idDir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `suject`
--
ALTER TABLE `suject`
  MODIFY `idSuject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`);

--
-- Contraintes pour la table `suject`
--
ALTER TABLE `suject`
  ADD CONSTRAINT `suject_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
