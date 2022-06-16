-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 juin 2022 à 20:39
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `taratanin`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisations`
--

DROP TABLE IF EXISTS `cotisations`;
CREATE TABLE IF NOT EXISTS `cotisations` (
  `id_cotisations` int(11) NOT NULL AUTO_INCREMENT,
  `montant_cotisations` bigint(20) NOT NULL,
  `date_cotisations` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('pariba','tonden') NOT NULL,
  PRIMARY KEY (`id_cotisations`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cotisations`
--

INSERT INTO `cotisations` (`id_cotisations`, `montant_cotisations`, `date_cotisations`, `role`) VALUES
(1, 6000, '2022-06-10 13:04:32', 'pariba'),
(2, 6000, '2022-06-10 13:04:32', 'pariba'),
(3, 6000, '2022-06-10 13:05:05', 'pariba'),
(4, 6000, '2022-06-10 13:05:05', 'pariba'),
(5, 6000, '2022-06-17 13:05:22', 'pariba');

-- --------------------------------------------------------

--
-- Structure de la table `pariba`
--

DROP TABLE IF EXISTS `pariba`;
CREATE TABLE IF NOT EXISTS `pariba` (
  `id_pariba` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pariba`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pariba`
--

INSERT INTO `pariba` (`id_pariba`, `nom`, `prenom`, `email`, `password`, `adresse`, `telephone`) VALUES
(1, 'dagnogo', 'oumou', 'dagnogooumou@gmail.com', '12345678', 'kati', '90697626');

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

DROP TABLE IF EXISTS `reunion`;
CREATE TABLE IF NOT EXISTS `reunion` (
  `id_reunion` int(11) NOT NULL AUTO_INCREMENT,
  `date_reunion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pariba` int(11) NOT NULL,
  `id_tondenw` int(11) NOT NULL,
  PRIMARY KEY (`id_reunion`),
  KEY `id_pariba` (`id_pariba`),
  KEY `id_tondenw` (`id_tondenw`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reunion`
--

INSERT INTO `reunion` (`id_reunion`, `date_reunion`, `id_pariba`, `id_tondenw`) VALUES
(1, '2022-06-24 13:02:10', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tondenw`
--

DROP TABLE IF EXISTS `tondenw`;
CREATE TABLE IF NOT EXISTS `tondenw` (
  `id_tonden` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_confirm` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tonden`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tondenw`
--

INSERT INTO `tondenw` (`id_tonden`, `nom`, `prenom`, `email`, `password`, `password_confirm`) VALUES
(2, 'MAIGA', 'boureima', 'boureimamaiga@gmail.com', '12345', '12345'),
(3, 'maiga', 'boureima', 'boureimamaiga@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'sissoko', 'amadou', 'amadousissoko@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 'baba', 'TOURE', 'boureimamaiga@gmail.com', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `roles`, `username`, `passwords`, `nom`) VALUES
(9, 'tonden', 'Abdoulaye', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'DIALLO'),
(8, 'tonden', 'Djeneba', 'azerty', 'MAIGA'),
(3, 'pariba', 'Amadou', 'azer', 'SISSOKO'),
(4, 'tonden', 'Adja', 'azerty', 'Coum'),
(7, 'tonden', 'Faty', '7890', 'KONTA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
