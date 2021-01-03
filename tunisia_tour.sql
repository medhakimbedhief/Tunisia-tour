-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 03 jan. 2021 à 14:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tunisia_tour`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  `article` varchar(500) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `article`, `image`) VALUES
(26, 'blog 1', '<p>Lorem Ipsum est un texte d&#39;espace r&eacute;serv&eacute; couramment utilis&eacute; dans les industries graphique, imprim&eacute;e et &eacute;ditoriale pour pr&eacute;visualiser les mises en page et les maquettes visuelles</p>\r\n', 'Capture.PNG'),
(27, 'blog2', '<p>Lorem Ipsum est un texte d&#39;espace r&eacute;serv&eacute; couramment utilis&eacute; dans les industries graphique, imprim&eacute;e et &eacute;ditoriale pour pr&eacute;visualiser les mises en page et les maquettes visuelles</p>\r\n', 'blog 2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `camping`
--

DROP TABLE IF EXISTS `camping`;
CREATE TABLE IF NOT EXISTS `camping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `cout` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `camping`
--

INSERT INTO `camping` (`id`, `nom`, `region`, `photo`, `information`, `DateDebut`, `DateFin`, `cout`) VALUES
(27, 'camping', 'tozeur', 'tÃ©lÃ©chargement.jpg', 'tesst', '2021-01-02', '2021-01-04', 120000);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `text` varchar(2000) NOT NULL,
  `id_b` int(8) NOT NULL,
  `nom_u` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `text`, `id_b`, `nom_u`) VALUES
(12, ' Lorem Ipsum est un texte d\'espace réservé couramment utilisé dans les industries graphique, imprimée et éditoriale pour prévisualiser les mises en page et les maquettes visuelles', 27, 'asma'),
(13, ' joli blog ', 26, 'med'),
(15, ' un bon sujet', 26, 'gd'),
(17, ' great blog', 27, 'gd'),
(20, ' gg', 26, 'asma'),
(29, ' grfe', 26, 'asma'),
(38, ' mauvais blog ', 26, 'med'),
(39, ' bad blog , i don\'t like it', 27, 'med'),
(41, 'great', 26, 'med'),
(55, '', 26, 'med');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idchoix` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `panier_ibfk_1` (`iduser`),
  KEY `panier_ibfk_3` (`idchoix`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `randonnee`
--

DROP TABLE IF EXISTS `randonnee`;
CREATE TABLE IF NOT EXISTS `randonnee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cout` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `randonnee`
--

INSERT INTO `randonnee` (`id`, `nom`, `region`, `date`, `photo`, `description`, `cout`) VALUES
(3, 'randonne', 'tozeur', '2021-01-03', 'tÃ©lÃ©chargement.jpg', 'just test', 120),
(4, 'camping', 'mahdia', '2021-01-15', 'tÃ©lÃ©chargement.jpg', 'belllah ekhdeem', 120);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CIN` int(8) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `telephone` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `CIN`, `nom`, `prenom`, `telephone`, `email`, `login`, `password`) VALUES
(5, 78984565, 'ctvybu', 'X', 78984561, 'medhakimbedhief@gmail.com', 'asma', '123'),
(6, 78945612, 'Hakim', 'Bedhief', 74185296, 'medhakimbedhief@gmail.com', 'hakim', '123'),
(7, 1234567898, 'Xctyvub', 'Xcvubin', 79465123, 'hngfbdvsc@gmail.com', 'vvvd', '123'),
(8, 12345688, 'Med', 'Kjz', 147855963, 'medhakimbedhief@gmail.com', 'med', '123'),
(9, 41389494, 'Ghada', 'Llo', 78945612, 'hngfbdvsc@gmail.com', 'gd', '123');

-- --------------------------------------------------------

-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL, 
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nom`, `photo`, `description`, ) VALUES
(27, 'nabeul', 'tÃ©lÃ©chargement.jpg', 'ttt');

-- --------------------------------------------------------





--
-- Structure de la table `voyages`
--

DROP TABLE IF EXISTS `voyages`;
CREATE TABLE IF NOT EXISTS `voyages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(150) NOT NULL,
  `prix` float NOT NULL,
  `depart` date NOT NULL,
  `retour` date NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`id`, `destination`, `prix`, `depart`, `retour`, `image`) VALUES
(1, 'chihemek', 1500, '2020-12-23', '2020-12-27', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`idchoix`) REFERENCES `camping` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_3` FOREIGN KEY (`idchoix`) REFERENCES `randonnee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
  ADD CONSTRAINT `panier_ibfk_4` FOREIGN KEY (`idchoix`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
