-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 23 juil. 2021 à 11:21
-- Version du serveur :  8.0.25-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4_unicode_ci */;

--
-- Base de données : `famille`
--

-- --------------------------------------------------------

--
-- Structure de la table `famille_tbl`
--

CREATE TABLE `famille_tbl` (
  `id` int NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4_unicode_ci COLLATE utf8 NOT NULL DEFAULT '',
  `prenom` varchar(255) CHARACTER SET utf8mb4_unicode_ci COLLATE utf8 NOT NULL DEFAULT '',
  `statut` varchar(255) CHARACTER SET utf8mb4_unicode_ci COLLATE utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_unicode_ci COLLATE=utf8;

--
-- Déchargement des données de la table `famille_tbl`
--

INSERT INTO `famille_tbl` (`id`, `nom`, `prenom`, `statut`) VALUES
(22, 'Dupond', 'Jean', 'Père'),
(24, 'Dupont', 'Chantal', 'Tante'),
(25, 'Dupond', 'Béber', 'cousin'),
(26, 'Dupond', 'Cyril', 'cousin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `famille_tbl`
--
ALTER TABLE `famille_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `famille_tbl`
--
ALTER TABLE `famille_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
