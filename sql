-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 25 Mars 2017 à 13:18
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `paiement`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `Numsecu` int(15) NOT NULL,
  `Numemploye` int(5) NOT NULL,
  `Type` text NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Addresse` text NOT NULL,
  `CP` int(5) NOT NULL,
  `Ville` text NOT NULL,
  `Emploie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`Numsecu`, `Numemploye`, `Type`, `Nom`, `Prenom`, `Addresse`, `CP`, `Ville`, `Emploie`) VALUES
(1111111111, 111111115, 'Monsieur', 'Amani', 'Bertrand', 'route de ganges', 34000, 'Montpellier', 'Webmaster');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `Employeur` text NOT NULL,
  `Adresse` text NOT NULL,
  `CP` int(5) NOT NULL,
  `Ville` text NOT NULL,
  `SIRET` int(40) NOT NULL,
  `CODENAF` int(40) NOT NULL,
  `URSAFF` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`Employeur`, `Adresse`, `CP`, `Ville`, `SIRET`, `CODENAF`, `URSAFF`) VALUES
('sarl Bs outdoor', '235 avenue des chenes', 30100, 'Ales', 2222554, 11115, 'URSAFF LANGUEDOC ROUSSILON');

-- --------------------------------------------------------

--
-- Structure de la table `feuille`
--

CREATE TABLE `feuille` (
  `NumFeuille` int(40) NOT NULL,
  `Base` int(40) NOT NULL,
  `Partsalariale` int(40) NOT NULL,
  `PartEmployeur` int(40) NOT NULL,
  `SalaireNet` int(40) NOT NULL,
  `SalaireaVerser` int(40) NOT NULL,
  `Sommeaverser` int(40) NOT NULL,
  `NetImposable` int(40) NOT NULL,
  `Periode` date NOT NULL,
  `DateFeuille` date NOT NULL,
  `Dateversement` date NOT NULL,
  `Nombredheure` int(40) NOT NULL,
  `Remunerationbrut` int(40) NOT NULL,
  `NomFeuille` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `feuille`
--

INSERT INTO `feuille` (`NumFeuille`, `Base`, `Partsalariale`, `PartEmployeur`, `SalaireNet`, `SalaireaVerser`, `Sommeaverser`, `NetImposable`, `Periode`, `DateFeuille`, `Dateversement`, `Nombredheure`, `Remunerationbrut`, `NomFeuille`) VALUES
(1, 1184, 292, 479, 898, 898, 898, 953, '2017-02-01', '2017-03-01', '2017-03-01', 152, 1184, 'Bulletin paie Varot kevin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`Numsecu`),
  ADD UNIQUE KEY `Numemploye_2` (`Numemploye`),
  ADD KEY `Numemploye` (`Numemploye`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`SIRET`),
  ADD UNIQUE KEY `SIRET` (`SIRET`);

--
-- Index pour la table `feuille`
--
ALTER TABLE `feuille`
  ADD PRIMARY KEY (`NumFeuille`),
  ADD UNIQUE KEY `NumFeuille` (`NumFeuille`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `Numemploye` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111111117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
