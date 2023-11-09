-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 oct. 2023 à 23:13
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
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `email`, `password`) VALUES
(3, 'michael@esisalama.org', 'mich4321'),
(4, 'michelle@esisalama.org', 'mich1234'),
(5, 'allegra@esisalama.org', 'all9876');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idCompt` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `matricule` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompt`, `pseudo`, `psw`, `matricule`) VALUES
(12, '17lk266', 'mm1234', '17'),
(13, '17TB463', '1234', '17TB463'),
(14, '20LK266', '1234', '20LK266'),
(15, '18MA524', '1234', '18MA524'),
(16, '17LP214', '', '17LP214'),
(17, '17TM524', '1234', '17TM524'),
(18, '17NR214', '1234', '17NR214'),
(19, '17TM658', '1234', '17TM658'),
(20, '17BA145', '1234', '17BA145'),
(21, '17KK258', '1234', '17KK258'),
(22, '18KK214', '1234', '18KK214'),
(23, '18NG178', '1234', '18NG178'),
(24, '18CY247', '1234', '18CY247'),
(25, '18BB129', '1234', '18BB129'),
(26, '18TT248', '1234', '18TT248'),
(27, '18KM124', '1234', '18KM124'),
(28, '18MB186', '1234', '18MB186'),
(29, '17MK248', '1234', '17MK248'),
(30, '19BB145', '1234', '19BB145'),
(31, '19FK123', '1234', '19FK123'),
(32, '19KT127', '1234', '19KT127'),
(33, '19KK271', '1234', '19KK271'),
(34, '19MT245', '1234', '19MT245'),
(35, '18BK247', '1234', '18BK247'),
(36, '19KF246', '1234', '19KF246'),
(37, '19CM178', '1234', '19CM178'),
(38, '19CN285', '1234', '19CN285'),
(39, '18NM128', '1234', '18NM128'),
(40, '19IK204', '1234', '19IK204'),
(41, '18MG124', '1234', '18MG124'),
(42, '19TK857', '1243', '19TK857'),
(43, '19MZ145', '1234', '19MZ145'),
(44, '19MT415', '1234', '19MT415'),
(45, '16ML185', '1234', '16ML185'),
(46, '19TM341', '1234', '19TM341'),
(47, '16MK524', '1234', '16MK524'),
(48, '21TM124', '1234', '21TM124'),
(49, '16ZM854', '1234', '16ZM854'),
(50, '16TM157', '1234', '16TM157'),
(51, '16NM258', '1234', '16NM258'),
(52, '16NK124', '1234', '16NK124'),
(53, '', '1234', ''),
(54, '17ML265', '1234', '17ML265'),
(55, '18NS157', '1234', '18NS157'),
(56, '19BN157', '1234', '19BN157'),
(57, '18KU527', '1234', '18KU527'),
(58, '16KB985', '1234', '16KB985'),
(59, '18TM425', '1234', '18TM425'),
(60, '20MM185', '12234', '20MM185'),
(61, '20KK258', '1234', '20KK258'),
(62, '20MK524', '1234', '20MK524');

-- --------------------------------------------------------

--
-- Structure de la table `directeur`
--

CREATE TABLE `directeur` (
  `idDir` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `postnom` varchar(40) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `specialite` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `directeur`
--

INSERT INTO `directeur` (`idDir`, `nom`, `postnom`, `prenom`, `specialite`) VALUES
(1, 'lunda', 'kasumba', 'patient', 'administration systeme');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `postnom` varchar(15) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `idpromo` int(11) NOT NULL,
  `idfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `postnom`, `prenom`, `idpromo`, `idfil`) VALUES
('', 'MWANAKAHAMBO ', 'LUKATULA ', 'deoel', 4, 2),
('16KB985', 'KABWITA ', 'BUKASA ', 'Damas', 4, 7),
('16MK524', 'MULONGO ', 'KASONGO ', 'Vanessa', 4, 4),
('16ML185', 'MWANAKAHAMBO ', 'LUKATULA ', 'deoel', 4, 4),
('16NK124', 'NSEWU ', 'KASONGO ', 'Naomie', 4, 2),
('16NM258', 'NKELENDE ', 'MWADI ', 'Bénédicte ', 4, 2),
('16TM157', 'TELA ', 'MATONDO ', 'Nathan', 4, 2),
('16ZM854', 'ZENGIL ', 'MUSHID ', 'Rodrigue', 4, 4),
('17', 'lunda', 'ilunga', 'Glory', 4, 2),
('17BA145', 'BUKULA ', 'AMBEL ', 'Charnelle', 4, 5),
('17KK258', 'KABALWE ', 'KIKULA ', 'Folsy', 4, 5),
('17LP214', 'LUFATA', 'PUTA', 'Blandine', 4, 6),
('17MK248', 'MUPELA ', 'KABULULE ', 'Aladin', 4, 4),
('17ML265', 'MWANAKAHAMBO ', 'LUKATULA ', 'deoel', 4, 2),
('17NR214', 'NYOTA ', 'ROSE ', 'Myriam', 4, 5),
('17TB463', 'TSHIPAMABA', 'BULAMBA', 'Micheal', 4, 4),
('17TM524', 'TSHIKAMA ', 'MWABILAYI ', 'John', 4, 5),
('17TM658', 'TSHIABU ', 'MUTOMBO ', 'Ritha', 4, 5),
('18', 'kalaba', 'ilunga', 'alcya', 4, 2),
('18BB129', 'BANGOY', 'BEGU ', 'Aristote ', 4, 5),
('18BK247', 'BANZA ', 'KIZIMU ', 'Sarah', 4, 4),
('18CY247', 'CHARLOTTE ', 'YOMBO ', 'Chaty', 4, 5),
('18KK214', 'KASONG ', 'KUND ', 'Jean-Marie', 4, 5),
('18KM124', 'KATUTA ', 'MIFUNGA ', 'Therry', 4, 5),
('18KU527', 'KYABU ', 'UMBA ', 'Gabriel', 4, 7),
('18MA524', 'Masengo', 'asis', 'plamedi', 4, 7),
('18MB186', 'MBIOLA', 'BIBOYI ', 'Jennie ', 4, 5),
('18MG124', 'MWEWA ', 'GASTON ', 'Gaston ', 4, 4),
('18NG178', 'NGOYA ', 'UPIT ', 'Lodi', 4, 5),
('18NM128', 'NGALULA ', 'MUKUMADI ', 'Sacrée ', 4, 4),
('18NS157', 'NGIZI ', 'SUMBU ', 'Roc', 4, 7),
('18TM425', 'TSHIKUDI ', 'MWANANA ', 'Sun', 4, 7),
('18TT248', 'TSHIDIBI ', 'TSHENDA ', 'CHRISTELLE', 4, 5),
('19BB145', 'BANSOBA ', 'BWIZA ', 'Joelle ', 4, 4),
('19BN157', 'BUKASA ', 'NGOY ', 'Patrick', 4, 7),
('19CM178', 'Christine ', 'MUMBA ', 'LEA ', 4, 4),
('19CN285', 'CHIHANZA ', 'NABINTU ', 'Irène ', 4, 4),
('19FK123', 'FOSEKA ', 'KAPITANGO ', 'Florian', 4, 4),
('19IK204', 'ILUNGA ', 'KABEYA ', 'Junior', 4, 4),
('19KF246', 'KUMBA ', 'FITIMA ', 'Mireille', 4, 4),
('19KK271', 'KILUBA ', 'KUNDA ', 'Ezeckiel', 4, 4),
('19KT127', 'KABWANGA ', 'TSHANGA ', 'Lyna', 4, 4),
('19MT245', 'MAFIK ', 'TETEK ', 'Lena', 4, 4),
('19MT415', 'MAFIK ', 'TETEK ', 'Lena', 4, 4),
('19MZ145', 'MUYA ', 'ZAINA ', 'Falonne ', 4, 4),
('19TK857', 'TSHITITA ', 'KALONJI', 'Melissa  ', 4, 4),
('19TM341', 'TSHIVUWA ', 'MUZAILA ', 'MUZAILA ', 4, 4),
('20', 'LENGE', 'kabwang', 'MARIE-MICHELLE', 4, 2),
('20KK258', 'KABEYA ', 'KALEKESHA ', 'Bayllon', 4, 7),
('20LK266', 'Lenge', 'kalala', 'MM', 4, 5),
('20MK524', 'MAWANDA ', 'KABASELE ', 'Lionel', 4, 7),
('20MM185', 'MUDIMBI ', 'MUKENGE ', 'Ruffin', 4, 7),
('21TM124', 'TSHIBANDA ', 'MULAJI ', 'Henock', 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `name`) VALUES
(2, 'genie_logiciel'),
(4, 'management et systeme informatique'),
(5, 'design'),
(6, 'telecom'),
(7, 'administration systeme');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `name` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `name`) VALUES
(4, 'L4');

-- --------------------------------------------------------

--
-- Structure de la table `suject`
--

CREATE TABLE `suject` (
  `idSuject` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `problematique` varchar(250) NOT NULL,
  `hypothese` varchar(30) NOT NULL,
  `etatArt` varchar(50) NOT NULL,
  `annAcad` varchar(9) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `idtheme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suject`
--

INSERT INTO `suject` (`idSuject`, `intitule`, `problematique`, `hypothese`, `etatArt`, `annAcad`, `matricule`, `idtheme`) VALUES
(21, 'gestion des stock de la caisse de la gec', 'gestion mauvaise de la caisse', 'mainenance', 'maintenace', '2021-2022', NULL, 1),
(22, 'gestion des stock de la caisse de la gec', 'gestion mauvaise de la caisse', 'mainenance', 'maintenace', '2021-2022', NULL, 1),
(23, 'gestion des stock de la caisse de la gec', 'gestion mauvaise de la caisse', 'mainenance', 'maintenace', '2021-2022', NULL, 1),
(24, 'gestion des stock de la caisse de la gec', 'mauvaise gestion', 'mainenance', 'NON VALIDE', '2021-2022', NULL, 2),
(25, 'gestion des stock de la caisse de la gec', 'gestion mauvaise de la caisse', 'mainenance', 'VALIDE', '2021-2022', '17', 1),
(26, 'gerer la consommation du courant a la snel', 'probleme du courant', 'gerer le courant', 'NON VALIDE', '2022-2023', '17', 3),
(27, 'IA dans le numerique', 'manque d\'idee dans le numerique', 'IA', 'VALIDE', '2023-2024', '20LK266', 4),
(28, 'APPLICATIVE DE LA REALISATION D\'UNE CHAISE ET D\'UNE TABLE EN MENUISERIE', 'manque d\'inspiration et d\'illustration dans la menuiserie', 'design des matriaux', 'VALIDE', '2011-2012', '17TM524', 5),
(29, 'REAMENAGEMENT ET DECORATION INTERIEUR DE LA MAISON COMMUNALE', 'manque d\'innovation', 'CAS DE LA COMMUNE DE KAMPEMBA', 'VALIDE', '2023-2024', '17NR214', 5),
(30, 'AMELIORATION DE L\'IDENTITE VISUELLE D\'UNE ENTREPRISE D\'ARCHITECTURE', 'manque d\'identification visuelle des entreprise', 'CAS D\'ARCHICONSTRUCTION', 'VALIDE', '2023-2024', '17TM658', 5),
(31, 'DIDACTICIEL SUR LES LIVRES DE LA BIBLE ET SES REDACTEURS', 'geograohie de la bible et des auteurs des livres', 'livres et auteurs de la bible', 'VALIDE', '2021-2022', '17BA145', 5),
(32, 'MISE EN PLACE D\'UN SITE WEB D\'APPRENTISSAGE DE LA MODELISATION 3D', 'modelisation 3D', 'apprendre a modeliser ent troi', 'VALIDE', '2022-2023', '17KK258', 5),
(33, 'CAMPAGNE DE SENSIBILISATION CONTRE LE PALUDISME DANS LA PROVINCE DU LUALABA', 'manque de sensibilisation', 'Cas de la commune MANIKA', 'VALIDE', '2021-2022', '18KK214', 5),
(34, 'LIVRE D\'APPRENTISSAGE', 'manque d\'aprentissage', 'Cas d\'analphabètes français', 'VALIDE', '2021-2022', '18CY247', 5);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `designation` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `designation`) VALUES
(1, 'economie'),
(2, 'administration systeme'),
(3, 'electricite'),
(4, 'Intelligence artificielle'),
(5, 'Design');

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
  ADD KEY `compte_ibfk_1` (`matricule`);

--
-- Index pour la table `directeur`
--
ALTER TABLE `directeur`
  ADD PRIMARY KEY (`idDir`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `fk_etudiant_filiere` (`idfil`),
  ADD KEY `fk_etudiant_promotion` (`idpromo`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suject`
--
ALTER TABLE `suject`
  ADD PRIMARY KEY (`idSuject`),
  ADD KEY `fk_suject_theme` (`idtheme`),
  ADD KEY `suject_ibfk_1` (`matricule`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `directeur`
--
ALTER TABLE `directeur`
  MODIFY `idDir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `suject`
--
ALTER TABLE `suject`
  MODIFY `idSuject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_etudiant_filiere` FOREIGN KEY (`idfil`) REFERENCES `filiere` (`id`),
  ADD CONSTRAINT `fk_etudiant_promotion` FOREIGN KEY (`idpromo`) REFERENCES `promotion` (`id`);

--
-- Contraintes pour la table `suject`
--
ALTER TABLE `suject`
  ADD CONSTRAINT `fk_suject_theme` FOREIGN KEY (`idtheme`) REFERENCES `theme` (`id`),
  ADD CONSTRAINT `suject_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
