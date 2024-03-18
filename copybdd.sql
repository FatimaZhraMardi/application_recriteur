-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 16 mars 2024 à 14:42
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
-- Base de données : `recritement`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `salaire` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `condiat`
--

CREATE TABLE `condidat` (
  `id_condidat` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tel` int(10) NOT NULL,
  `adress` text NOT NULL,
  `civilite` text NOT NULL,
  `pays` text NOT NULL,
  `ville` text NOT NULL,
  `domaine` text NOT NULL,
  `fonction` text NOT NULL,
  `formation` text NOT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entrprose`
--

CREATE TABLE `entrprise` (
  `id_entro` int(11) NOT NULL,
  `non_entro` text NOT NULL,
  `demaine` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recreteur`
--

CREATE TABLE `recruteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tel` int(10) NOT NULL,
  `adress` text NOT NULL,
  `civilite` text NOT NULL,
  `nomEntreprise` text NOT NULL,
  `domaine` text NOT NULL,
  `pays` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `condiat`
--
ALTER TABLE `condiat`
  ADD PRIMARY KEY (`id_condidat`);

--
-- Index pour la table `entrprose`
--
ALTER TABLE `entrprose`
  ADD PRIMARY KEY (`id_entro`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entrprose`
--
ALTER TABLE `entrprose`
  MODIFY `id_entro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
