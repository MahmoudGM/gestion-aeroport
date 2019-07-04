-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Avril 2015 à 13:51
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_appareils`
--

-- --------------------------------------------------------

--
-- Structure de la table `aeropot`
--

CREATE TABLE IF NOT EXISTS `aeropot` (
`code_aeroport` int(11) NOT NULL,
  `nom_aeroport` varchar(100) NOT NULL,
  `categorie` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `appareil`
--

CREATE TABLE IF NOT EXISTS `appareil` (
`matricule` int(11) NOT NULL,
  `cap_nb_place` int(11) NOT NULL,
  `poids_tt` float NOT NULL,
  `dimension` float NOT NULL,
  `vitesse_max` float NOT NULL,
  `altitude_max` float NOT NULL,
  `code-aeroport` int(11) NOT NULL,
  `id-constructeur` int(11) NOT NULL,
  `id-type` int(11) NOT NULL,
  `num-comp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compagnie`
--

CREATE TABLE IF NOT EXISTS `compagnie` (
`num-comp` int(11) NOT NULL,
  `nom_compagnie` varchar(100) NOT NULL,
  `tel` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pays` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `config-type`
--

CREATE TABLE IF NOT EXISTS `config-type` (
  `id-type` int(11) NOT NULL,
  `id-config` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
`id-config` int(11) NOT NULL,
  `nbre_place_economique` int(11) NOT NULL,
  `nbre_place_affaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `constructeur`
--

CREATE TABLE IF NOT EXISTS `constructeur` (
`id_constucteur` int(11) NOT NULL,
  `nom_constructeur` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
`id_fact` int(11) NOT NULL,
  `num-fact` int(11) NOT NULL,
  `montant` float NOT NULL,
  `,date_emission` date NOT NULL,
  `date_limite_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `num-comp` int(11) NOT NULL,
  `matricul` int(11) NOT NULL,
  `date-debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `nb_heur` int(11) NOT NULL,
  `prix_heur` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
`id_personnel` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` int(10) NOT NULL,
  `dateness` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rappel`
--

CREATE TABLE IF NOT EXISTS `rappel` (
`num_rappel` int(11) NOT NULL,
  `date_rappel` date NOT NULL,
  `etat_rappel` varchar(100) NOT NULL,
  `id_reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE IF NOT EXISTS `reglement` (
`id-reg` int(11) NOT NULL,
  `date_reglement` date NOT NULL,
  `montant_reg` float NOT NULL,
  `mode` varchar(100) NOT NULL,
  `id_fact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id-type` int(11) NOT NULL,
  `nom_type` varchar(100) NOT NULL,
  `id_config` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aeropot`
--
ALTER TABLE `aeropot`
 ADD PRIMARY KEY (`code_aeroport`);

--
-- Index pour la table `appareil`
--
ALTER TABLE `appareil`
 ADD PRIMARY KEY (`matricule`), ADD KEY `code-aeroport` (`code-aeroport`), ADD KEY `id-constructeur` (`id-constructeur`), ADD KEY `id-type` (`id-type`), ADD KEY `num-comp` (`num-comp`);

--
-- Index pour la table `compagnie`
--
ALTER TABLE `compagnie`
 ADD PRIMARY KEY (`num-comp`);

--
-- Index pour la table `config-type`
--
ALTER TABLE `config-type`
 ADD PRIMARY KEY (`id-type`,`id-config`);

--
-- Index pour la table `configuration`
--
ALTER TABLE `configuration`
 ADD PRIMARY KEY (`id-config`);

--
-- Index pour la table `constructeur`
--
ALTER TABLE `constructeur`
 ADD PRIMARY KEY (`id_constucteur`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
 ADD PRIMARY KEY (`id_fact`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`num-comp`,`matricul`), ADD KEY `num-comp` (`num-comp`,`matricul`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
 ADD PRIMARY KEY (`id_personnel`), ADD KEY `matricule` (`matricule`);

--
-- Index pour la table `rappel`
--
ALTER TABLE `rappel`
 ADD PRIMARY KEY (`num_rappel`), ADD KEY `id_reg` (`id_reg`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
 ADD PRIMARY KEY (`id-reg`), ADD KEY `id_fact` (`id_fact`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id-type`), ADD KEY `id_config` (`id_config`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aeropot`
--
ALTER TABLE `aeropot`
MODIFY `code_aeroport` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `appareil`
--
ALTER TABLE `appareil`
MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `compagnie`
--
ALTER TABLE `compagnie`
MODIFY `num-comp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `configuration`
--
ALTER TABLE `configuration`
MODIFY `id-config` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `constructeur`
--
ALTER TABLE `constructeur`
MODIFY `id_constucteur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
MODIFY `id_fact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rappel`
--
ALTER TABLE `rappel`
MODIFY `num_rappel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
MODIFY `id-reg` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
MODIFY `id-type` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
