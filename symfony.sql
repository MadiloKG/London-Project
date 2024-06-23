-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 23 juin 2024 à 16:00
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `email`, `roles`, `password`, `is_verified`) VALUES
(1, 'madilo@mail.com', '[]', '$2y$13$oCjxJoNAt.iRXU0aWbvlQOcwEY/fs18zvB44LFvSiTCoCMwNR0s9W', 0),
(2, 'test@mail.com', '[]', 'azerty11', 0),
(3, 'London@mail.com', '[]', '$2y$13$nSNJ71xVYhjXTi0Smu5JQ.pD3ts2vw5iqEbT3xcY2ttMuBE0G7gL.', 0),
(4, 'seb@mail.com', '[]', '$2y$13$WQlApnr7tv/TxwywExQv0uXEMbxIu2fVGrknf6eTig13MHf2jSgIu', 0),
(6, 'm.azeb@mail.com', '[]', '$2y$13$qg9CRRGpWwd3irUNqwk9dO3nR052vDLpCYu5xH/7erGOiuavkpsFy', 0),
(8, 'test5@mail.com', '[]', '$2y$13$hv3Boz7oeu7b73GVcQsdiOl5kpQhY.YfvYA7/Db4vsgUSBkx0U.1O', 0),
(9, 'mail@mail.com', '[]', '$2y$13$GX7Z1LIaWj5KPZNqpdkMW.tXtyf3rR2s/UqhEhuNxj.l/fs9fjI1u', 0);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_matiere`
--

CREATE TABLE `enseignant_matiere` (
  `enseignant_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignant_matiere`
--

INSERT INTO `enseignant_matiere` (`enseignant_id`, `matiere_id`) VALUES
(1, 2),
(2, 2),
(2, 4),
(3, 4),
(3, 5),
(4, 4),
(4, 5),
(6, 1),
(6, 7),
(8, 2),
(8, 3),
(9, 4),
(9, 5);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`) VALUES
(1, 'Maths'),
(2, 'Anglais'),
(3, 'Dev'),
(4, 'Communication'),
(5, 'Management'),
(6, 'Allemand'),
(7, 'Economie'),
(8, 'Comptabilité');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_81A72FA1E7927C74` (`email`);

--
-- Index pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  ADD PRIMARY KEY (`enseignant_id`,`matiere_id`),
  ADD KEY `IDX_33D1A024E455FCC0` (`enseignant_id`),
  ADD KEY `IDX_33D1A024F46CD258` (`matiere_id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant_matiere`
--
ALTER TABLE `enseignant_matiere`
  ADD CONSTRAINT `FK_33D1A024E455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_33D1A024F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
