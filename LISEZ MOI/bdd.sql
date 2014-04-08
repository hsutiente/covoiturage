-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 08 Avril 2014 à 16:46
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
('106fe3bf192c007124e40240484fde58', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396786062, ''),
('11f9209bb3cacefe3a1bb18362b30be0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396759386, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:6:"Loubna";}'),
('4db752283c5e0b9377bb0314999934af', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396785748, 'a:1:{s:14:"pseudoConnecte";s:8:"valentin";}'),
('93e29f1778e24fbf32f1c3b058cb968d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396786062, ''),
('a4edd7fbb3e94b9e244b18003971e5d3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396953142, ''),
('bd9c748cf9c477cc730d0218946a3f9c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396952772, ''),
('bed3270d135ee66d2779ad748619b2fb', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396795917, ''),
('c7810ea4a68e7c5c356ab780a75ccddf', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396754166, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('e6fa7e68995f75fc2c0d105904680c08', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396760368, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('fc35ef10fe4c8fc6953cb1aa79f878ae', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396968142, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:7:"QUentin";s:4:"test";s:4:"test";}');

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
  `message` varchar(5000) DEFAULT NULL,
  `destinataire` int(11) DEFAULT NULL,
  `expediteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `sujet`, `message`, `destinataire`, `expediteur`) VALUES
(26, 'test sujet', 'Message de quentin : test message', 39, 39);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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
(17, 36, 52, 39),
(18, 36, 52, 39),
(19, 36, 49, 39),
(20, 36, 45, 39);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
(13, 'non', 'non', 'non', 'non', 'non', 52),
(14, 'non', 'non', 'non', 'non', 'non', 53),
(15, 'non', 'non', 'non', 'non', 'non', 54),
(16, 'non', 'non', 'non', 'non', 'non', 55),
(17, 'non', 'non', 'non', 'non', 'non', 56),
(18, 'non', 'non', 'non', 'non', 'non', 57),
(19, 'non', 'non', 'non', 'non', 'non', 58);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`id`, `dateDepart`, `nbPlace`, `nbKilometres`, `idPreference`, `villeDepart`, `idConducteur`) VALUES
(45, '2014-04-03', NULL, NULL, NULL, 'Harnes', 36),
(46, '2014-04-04', NULL, NULL, NULL, 'Arleux en gohelle', 36),
(47, '2014-04-03', NULL, NULL, NULL, 'Avion', 36),
(48, '2014-04-08', NULL, NULL, NULL, 'Béthune', 36),
(49, '2014-04-17', NULL, NULL, NULL, 'Liévin', 36),
(51, '2014-04-23', NULL, NULL, NULL, 'Rouvroy', 36),
(53, '2014-04-22', NULL, NULL, NULL, 'Mericourt', 36),
(54, '2014-04-29', NULL, NULL, NULL, 'Béthune', 36),
(55, '2014-04-15', NULL, NULL, NULL, 'Arleux en gohelle', 36),
(57, '2014-04-21', NULL, NULL, NULL, 'Méricourt', 36),
(58, '2014-04-16', NULL, NULL, NULL, 'Lens', 36);

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
  `admin` tinyint(1) NOT NULL,
  `banni` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `nom`, `prenom`, `telephone`, `email`, `fonction`, `description`, `idDepartement`, `sexe`, `admin`, `banni`) VALUES
(36, 'Valentin', '03de6c570bfe24bfc328ccd7ca46b76eadaf4334', NULL, NULL, NULL, 'vlaour@gmail.com', 'Etudiant', NULL, NULL, '', 1, 0),
(37, 'UtilisateurTest', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 'Utilisateurtest@test.fr', 'Etudiant', NULL, NULL, '', 0, 0),
(38, 'Loubna', '75dca01832391c098332c8217cb5ca0461ced07c', NULL, NULL, NULL, 'test@test.fr', 'Etudiant', NULL, NULL, '', 0, 0),
(39, 'Quentin', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 'aaa@aaa.aaa', 'Etudiant', NULL, NULL, '', 0, 0),
(40, 'Florian', 'df51e37c269aa94d38f93e537bf6e2020b21406c', NULL, NULL, NULL, 'essai@test.fr', 'Etudiant', NULL, NULL, '', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `codePostal`) VALUES
(64, 'Mericourt', NULL),
(65, 'Béthune', NULL),
(66, 'Arleux en gohelle', NULL),
(67, 'Harnes', NULL),
(68, 'Méricourt', NULL),
(69, 'Lens', NULL);
