-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 mai 2025 à 12:37
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_projets`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task_id` int NOT NULL,
  `user_id` int NOT NULL,
  `contenu` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `task_id` (`task_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `task_id`, `user_id`, `contenu`, `created_at`) VALUES
(1, 1, 2, 'Merci de valider la maquette avant vendredi.', '2025-05-06 11:00:54');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `description` text,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `statut` enum('en_attente','en_cours','termine') DEFAULT 'en_attente',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `nom`, `description`, `date_debut`, `date_fin`, `statut`, `created_at`) VALUES
(1, 'Refonte site web', 'Refonte du site pour le client X.', '2025-05-01', '2025-06-15', 'en_cours', '2025-05-06 11:00:54'),
(2, 'Refonte identité visuelle', 'Nouveau logo, charte graphique et supports marketing.', '2024-05-25', '2024-06-24', 'en_cours', '2024-05-13 22:00:00'),
(3, 'Mise en conformité RGPD', 'Audit de conformité et sécurisation des données.', '2024-03-14', '2024-08-02', 'termine', '2024-02-28 23:00:00'),
(4, 'Recherche nouveaux fournisseurs', 'Prospection et évaluation de fournisseurs étrangers.', '2024-03-01', '2024-04-17', 'termine', '2024-02-12 23:00:00'),
(5, 'Développement application mobile', 'Création d’une application mobile pour un service innovant.', '2024-02-29', '2024-05-04', 'en_cours', '2024-02-14 23:00:00'),
(6, 'Organisation salon professionnel', 'Logistique et organisation pour un salon du secteur.', '2024-10-04', '2024-11-08', 'en_attente', '2024-10-03 22:00:00'),
(7, 'Rénovation bureaux', 'Modernisation des espaces de travail.', '2024-09-16', '2025-02-19', 'en_attente', '2024-08-22 22:00:00'),
(8, 'Recherche nouveaux fournisseurs', 'Prospection et évaluation de fournisseurs étrangers.', '2025-01-26', '2025-06-15', 'en_attente', '2025-01-16 23:00:00'),
(9, 'Création d’un podcast', 'Développement et lancement d’un podcast corporate.', '2024-10-20', '2024-12-24', 'termine', '2024-10-07 22:00:00'),
(10, 'Campagne marketing été', 'Lancement d’une campagne publicitaire pour la saison estivale.', '2024-10-31', '2025-04-21', 'en_cours', '2024-10-06 22:00:00'),
(11, 'Mise en conformité RGPD', 'Audit de conformité et sécurisation des données.', '2024-02-10', '2024-05-31', 'en_cours', '2024-01-24 23:00:00'),
(12, 'Rénovation bureaux', 'Modernisation des espaces de travail.', '2024-01-19', '2024-07-09', 'en_attente', '2024-01-06 23:00:00'),
(13, 'Mise en conformité RGPD', 'Audit de conformité et sécurisation des données.', '2025-01-01', '2025-03-05', 'en_attente', '2024-12-16 23:00:00'),
(14, 'Migration vers le cloud', 'Transfert des services internes vers une infrastructure cloud.', '2024-02-21', '2024-07-21', 'termine', '2024-02-03 23:00:00'),
(15, 'Refonte identité visuelle', 'Nouveau logo, charte graphique et supports marketing.', '2024-04-18', '2024-07-18', 'en_attente', '2024-04-12 22:00:00'),
(17, 'Campagne marketing été', 'Lancement d’une campagne publicitaire pour la saison estivale.', '2024-07-01', '2024-08-21', 'en_cours', '2024-06-18 22:00:00'),
(18, 'Migration vers le cloud', 'Transfert des services internes vers une infrastructure cloud.', '2024-05-08', '2024-10-06', 'termine', '2024-04-21 22:00:00'),
(19, 'Déploiement CRM', 'Mise en place d’un outil de gestion de la relation client.', '2024-08-25', '2024-10-18', 'en_cours', '2024-08-13 22:00:00'),
(20, 'Refonte identité visuelle', 'Nouveau logo, charte graphique et supports marketing.', '2024-04-26', '2024-06-10', 'en_attente', '2024-03-30 23:00:00'),
(21, 'Développement application mobile', 'Création d’une application mobile pour un service innovant.', '2024-07-27', '2024-11-05', 'termine', '2024-07-15 22:00:00'),
(22, 'Déploiement CRM', 'Mise en place d’un outil de gestion de la relation client.', '2024-04-30', '2024-08-02', 'en_attente', '2024-04-02 22:00:00'),
(23, 'Déploiement CRM', 'Mise en place d’un outil de gestion de la relation client.', '2024-05-28', '2024-09-20', 'en_attente', '2024-05-25 22:00:00'),
(24, 'Organisation salon professionnel', 'Logistique et organisation pour un salon du secteur.', '2024-10-08', '2025-01-18', 'en_cours', '2024-10-07 22:00:00'),
(25, 'Déploiement CRM', 'Mise en place d’un outil de gestion de la relation client.', '2024-05-08', '2024-09-29', 'en_attente', '2024-04-25 22:00:00'),
(26, 'Création d’un podcast', 'Développement et lancement d’un podcast corporate.', '2024-09-21', '2025-03-08', 'en_attente', '2024-08-27 22:00:00'),
(27, 'Création d’un podcast', 'Développement et lancement d’un podcast corporate.', '2024-09-16', '2025-02-28', 'termine', '2024-09-12 22:00:00'),
(28, 'Migration vers le cloud', 'Transfert des services internes vers une infrastructure cloud.', '2024-04-17', '2024-06-19', 'en_cours', '2024-03-29 23:00:00'),
(29, 'Campagne marketing été', 'Lancement d’une campagne publicitaire pour la saison estivale.', '2024-11-19', '2025-04-15', 'en_attente', '2024-11-02 23:00:00'),
(30, 'Mise en conformité RGPD', 'Audit de conformité et sécurisation des données.', '2024-10-30', '2025-01-09', 'en_cours', '2024-10-21 22:00:00'),
(31, 'Migration vers le cloud', 'Transfert des services internes vers une infrastructure cloud.', '2024-08-20', '2025-01-10', 'termine', '2024-07-31 22:00:00'),
(32, 'Migration vers le cloud', 'Transfert des services internes vers une infrastructure cloud.', '2024-07-22', '2024-09-02', 'en_cours', '2024-06-23 22:00:00'),
(33, 'Campagne marketing été', 'Lancement d’une campagne publicitaire pour la saison estivale.', '2024-05-08', '2024-08-22', 'en_attente', '2024-04-26 22:00:00'),
(34, 'Rénovation bureaux', 'Modernisation des espaces de travail.', '2024-08-07', '2024-09-24', 'termine', '2024-07-30 22:00:00'),
(35, 'Développement application mobile', 'Création d’une application mobile pour un service innovant.', '2024-08-21', '2024-11-05', 'en_cours', '2024-08-14 22:00:00'),
(36, 'Migration vers le cloud', 'Transfert des services internes vers une infrastructure cloud.', '2024-01-21', '2024-06-26', 'en_attente', '2024-01-02 23:00:00'),
(37, 'Organisation salon professionnel', 'Logistique et organisation pour un salon du secteur.', '2024-01-27', '2024-06-17', 'termine', '2024-01-05 23:00:00'),
(38, 'Déploiement CRM', 'Mise en place d’un outil de gestion de la relation client.', '2025-01-30', '2025-06-21', 'termine', '2025-01-11 23:00:00'),
(39, 'Développement application mobile', 'Création d’une application mobile pour un service innovant.', '2024-06-03', '2024-07-31', 'en_attente', '2024-05-18 22:00:00'),
(40, 'Création d’un podcast', 'Développement et lancement d’un podcast corporate.', '2025-01-31', '2025-04-11', 'en_cours', '2025-01-13 23:00:00'),
(41, 'Mise en conformité RGPD', 'Audit de conformité et sécurisation des données.', '2024-06-02', '2024-10-19', 'en_cours', '2024-05-06 22:00:00'),
(42, 'Création d’un podcast', 'Développement et lancement d’un podcast corporate.', '2024-06-09', '2024-10-31', 'termine', '2024-05-27 22:00:00'),
(43, 'Campagne marketing été', 'Lancement d’une campagne publicitaire pour la saison estivale.', '2024-07-14', '2024-12-11', 'termine', '2024-07-03 22:00:00'),
(44, 'Recherche nouveaux fournisseurs', 'Prospection et évaluation de fournisseurs étrangers.', '2024-01-16', '2024-02-28', 'en_attente', '2023-12-27 23:00:00'),
(45, 'Organisation salon professionnel', 'Logistique et organisation pour un salon du secteur.', '2024-05-12', '2024-11-07', 'en_attente', '2024-05-04 22:00:00'),
(46, 'Création d’un podcast', 'Développement et lancement d’un podcast corporate.', '2024-10-24', '2025-04-12', 'en_attente', '2024-10-06 22:00:00'),
(47, 'Mise en conformité RGPD', 'Audit de conformité et sécurisation des données.', '2024-08-01', '2024-12-11', 'en_attente', '2024-07-23 22:00:00'),
(52, 'Test Projet Creation', 'test', '0000-00-00', '0000-00-00', 'termine', NULL),
(53, 'Test Projet Creation', 'test', '0000-00-00', '0000-00-00', 'en_attente', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `project_user`
--

DROP TABLE IF EXISTS `project_user`;
CREATE TABLE IF NOT EXISTS `project_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `project_user`
--

INSERT INTO `project_user` (`id`, `project_id`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `titre` varchar(150) NOT NULL,
  `description` text,
  `statut` enum('a_faire','en_cours','terminee') DEFAULT 'a_faire',
  `date_limite` date DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `titre`, `description`, `statut`, `date_limite`, `user_id`, `created_at`) VALUES
(1, 1, 'Maquette design', 'Créer la maquette du site web', 'en_cours', '2025-05-10', 3, '2025-05-06 11:00:54'),
(2, 1, 'Développement front', 'Coder le front-end en HTML/CSS/JS', 'a_faire', '2025-05-20', 3, '2025-05-06 11:00:54'),
(4, 52, 'test', 'test 2', '', '2025-05-07', 7, '2025-05-06 22:00:00'),
(5, 52, 'test', 'test', 'a_faire', '2025-05-07', 7, '2025-05-06 22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` enum('admin','chef_projet','collaborateur') DEFAULT 'collaborateur',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `role`, `created_at`) VALUES
(1, 'Durand', 'Alice', 'alice@example.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f', 'admin', '2025-05-06 11:00:54'),
(2, 'Martin', 'Bob', 'bob@example.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f', 'chef_projet', '2025-05-06 11:00:54'),
(3, 'Dupont', 'Charlie', 'charlie@example.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f', 'collaborateur', '2025-05-06 11:00:54'),
(7, 'SAENZ', 'Quentin', 'Quentin@gmail.com', '$2y$10$6ojzA8cREEbh8grOpnp1YOknOajItIf23NWVL2ZJobuuhPuZzfTIK', '', '2025-05-06 22:00:00'),
(6, 'LANDE', 'Vincent', 'vincent.blueeyes@gmail.com', '$2y$10$kaK4MrBVFQo6yOKrvt3BreznHRN/XoCUVIiDlGwFmFFgAS9td6h8q', '', '2025-05-06 22:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
