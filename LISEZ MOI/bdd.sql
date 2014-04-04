-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 04 Avril 2014 à 07:38
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `covoiturage`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('08b6657176083355ffb3072af7126b48', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396589857, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:7:"Quentin";s:4:"test";s:4:"test";}'),
('1375088a9a16332ad7a3c220000e9e46', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396589343, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";s:4:"test";s:4:"test";}'),
('17f21a9b0dc618a9d4c2336548f9ef7e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396577893, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('34a1b50e81383ecc922d383dbe638a0e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396570570, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('3c6cc15e3e3ae09b0c010b602e517422', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396570176, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('6c3d2c70b33bec6ecf79c7bdc9b5caa8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396568928, ''),
('87e8eed30f38a1b6cae059d15e1e6c91', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396569773, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:15:"UtilisateurTest";s:4:"test";s:4:"test";}'),
('d4bcddd565ebd6ea3863807e92bff898', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396571363, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"valentin";s:4:"test";s:4:"test";}'),
('e9696362ca33fdce65cf292aca622b13', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396589691, '');

-- --------------------------------------------------------

--
-- Structure de la table `demandeTrajet`
--

CREATE TABLE `demandeTrajet` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idConducteur` int(11) DEFAULT NULL,
  `villeDepart` int(11) DEFAULT NULL,
  `villeArrivee` int(11) DEFAULT NULL,
  `idPreference` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idTrajet` int(11) DEFAULT NULL,
  `lieu` varchar(50) DEFAULT NULL,
  `idVille` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `destinataire` int(11) DEFAULT NULL,
  `expediteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idConducteur` int(11) DEFAULT NULL,
  `idTrajet` int(11) DEFAULT NULL,
  `idParticipant` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`id`, `idConducteur`, `idTrajet`, `idParticipant`) VALUES
(5, 37, 31, 37),
(6, 37, 31, 37),
(9, 37, 31, 37),
(10, 37, 31, 37),
(11, 37, 31, 37),
(12, 36, 33, 36),
(13, 38, 34, 37),
(14, 36, 40, 36),
(15, 36, 41, 36),
(16, 36, 42, 38),
(17, 36, 52, 39);

-- --------------------------------------------------------

--
-- Structure de la table `preference`
--

CREATE TABLE `preference` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fumeur` varchar(3) DEFAULT NULL,
  `musique` varchar(3) DEFAULT NULL,
  `fille` varchar(3) DEFAULT NULL,
  `garcon` varchar(3) DEFAULT NULL,
  `discussion` varchar(3) DEFAULT NULL,
  `idTrajet` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `preference`
--

INSERT INTO `preference` (`id`, `fumeur`, `musique`, `fille`, `garcon`, `discussion`, `idTrajet`) VALUES
(1, 'non', 'non', 'non', 'non', 'non', 40),
(2, 'oui', 'oui', 'oui', 'oui', 'oui', 41),
(3, 'non', 'oui', 'non', 'non', 'non', 42),
(4, 'oui', 'oui', 'non', 'non', 'non', 43),
(5, 'non', 'non', 'non', 'non', 'oui', 44),
(6, 'non', 'non', 'non', 'non', 'non', 45),
(7, 'non', 'non', 'non', 'non', 'non', 46),
(8, 'non', 'non', 'non', 'non', 'non', 47),
(9, 'non', 'non', 'non', 'non', 'non', 48),
(10, 'non', 'non', 'non', 'non', 'non', 49),
(11, 'non', 'non', 'non', 'non', 'non', 50),
(12, 'non', 'non', 'non', 'non', 'non', 51),
(13, 'non', 'non', 'non', 'non', 'non', 52);

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dateDepart` date DEFAULT NULL,
  `nbPlace` int(11) DEFAULT NULL,
  `nbKilometres` int(11) DEFAULT NULL,
  `idPreference` int(11) DEFAULT NULL,
  `villeDepart` varchar(50) NOT NULL,
  `idConducteur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`id`, `dateDepart`, `nbPlace`, `nbKilometres`, `idPreference`, `villeDepart`, `idConducteur`) VALUES
(43, '2014-04-01', NULL, NULL, NULL, 'Méricourt', 36),
(44, '2014-04-02', NULL, NULL, NULL, 'Noyelles sous lens', 36),
(45, '2014-04-03', NULL, NULL, NULL, 'Harnes', 36),
(46, '2014-04-04', NULL, NULL, NULL, 'Arleux en gohelle', 36),
(47, '2014-04-03', NULL, NULL, NULL, 'Avion', 36),
(48, '2014-04-08', NULL, NULL, NULL, 'Béthune', 36),
(49, '2014-04-17', NULL, NULL, NULL, 'Liévin', 36),
(50, '2014-04-28', NULL, NULL, NULL, 'Bruay la buissiere', 36),
(51, '2014-04-23', NULL, NULL, NULL, 'Rouvroy', 36),
(52, '2014-05-21', NULL, NULL, NULL, 'Oppy', 36);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fonction` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `idDepartement` int(11) DEFAULT NULL,
  `sexe` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `nom`, `prenom`, `telephone`, `email`, `fonction`, `description`, `idDepartement`, `sexe`) VALUES
(36, 'Valentin', '03de6c570bfe24bfc328ccd7ca46b76eadaf4334', NULL, NULL, NULL, 'vlaour@gmail.com', 'Etudiant', NULL, NULL, ''),
(37, 'UtilisateurTest', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 'Utilisateurtest@test.fr', 'Etudiant', NULL, NULL, ''),
(38, 'Loubna', '75dca01832391c098332c8217cb5ca0461ced07c', NULL, NULL, NULL, 'test@test.fr', 'Etudiant', NULL, NULL, ''),
(39, 'Quentin', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 'aaa@aaa.aaa', 'Etudiant', NULL, NULL, ''),
(40, 'Florian', 'df51e37c269aa94d38f93e537bf6e2020b21406c', NULL, NULL, NULL, 'essai@test.fr', 'Etudiant', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `codePostal` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

