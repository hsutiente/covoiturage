-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 04 Avril 2014 à 00:12
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
('02295e1ab5fbab40eeed545305c77daf', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392631629, ''),
('1fc851428747911c9667c27b03277a66', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396456660, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('31825099252c9fb07f970920cd1e6d47', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396459074, ''),
('36848fb3e8562dcdcc6d1befae2f4d13', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396550990, ''),
('5ad6c88431f98ce2a822560e344cc355', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396455851, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";s:4:"test";s:4:"test";}'),
('61a03336aeaa1702035ba7c19df83647', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392631296, ''),
('6778eff63c52979ac3da64fcd02e4a65', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392763604, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('853f5c10169163a4fdc1542edae39efd', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1395649439, ''),
('915e5d1ef5a1bddca6db265c5c7b4bce', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396475805, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('9657564a0d34dfca43c4bc1ecae0d984', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396562837, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('9a11abf1c50a1e88289eb6561ab59eec', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36', 1393210636, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('9b2d5f67e697da59b524029b0df854ba', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396489458, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";s:4:"test";s:4:"test";}'),
('9be8475f925ce239e26e904b8281b94b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396506513, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('a2921080a8734233b2fd213f05085e63', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1395389303, 'a:2:{s:14:"pseudoConnecte";s:10:"testPourri";s:4:"test";s:4:"test";}'),
('ab1edd6094510e4018e93893ed0d0366', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396549496, 'a:1:{s:14:"pseudoConnecte";s:10:"testPourri";}'),
('af296b60134264e7850ffc0d2749dbf7', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1395647087, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";s:4:"test";s:4:"test";}'),
('b0f5b5c0d6a3a4024152a856138f3a3a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396551485, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:8:"Valentin";}'),
('bb7206d62d0bd34984b481a075baec34', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392632237, ''),
('bf424eaefd7a48429c41dd90a97a8549', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392631930, ''),
('c7719349a11118dd15c1cff5dfd75a0f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.149 Safari/537.36', 1394794337, ''),
('cb391e777ffe0820d74a54ba84e2afae', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1395647747, ''),
('cdba596dd537d8e076ac83ac72b5aab2', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396456197, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('d8ec09e91b06393f85bc85335bc6c44e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396455505, ''),
('db8988c1600ac7bc567eeade0db698e0', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396457407, ''),
('df54a494458fdd1b27742bd9edd09ff9', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 1392763604, ''),
('e16d3274953b52c9802808cb8c6e5475', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396454999, 'a:3:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";s:4:"test";s:4:"test";}'),
('e6d85268300c83374a804af0fc382633', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396506884, 'a:2:{s:9:"user_data";s:0:"";s:14:"pseudoConnecte";s:10:"testPourri";}'),
('ed66d19e803e9e0d6f6cf6a3774b1f61', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396458691, ''),
('eed44465c99f132cabc3f78a54460d25', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1396456983, ''),
('f2924a3636123efef9ca53027749907b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36', 1395647396, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`id`, `idConducteur`, `idTrajet`, `idParticipant`) VALUES
(5, 37, 31, 37),
(6, 37, 31, 37),
(9, 37, 31, 37),
(10, 37, 31, 37),
(11, 37, 31, 37);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`id`, `dateDepart`, `nbPlace`, `nbKilometres`, `idPreference`, `villeDepart`, `idConducteur`) VALUES
(18, '2014-04-01', NULL, NULL, NULL, 'Méricourt', 36),
(19, '2014-04-09', NULL, NULL, NULL, 'Harnes', 36),
(20, '2014-04-02', NULL, NULL, NULL, 'Rouvroy', 36),
(21, '2014-04-09', NULL, NULL, NULL, 'bruay la buissiere', 36),
(22, '2014-04-15', NULL, NULL, NULL, 'Noyelles sous lens', 36),
(23, '2014-04-08', NULL, NULL, NULL, 'liévin', 36),
(24, '2014-04-09', NULL, NULL, NULL, 'Grenay', 36),
(25, '2014-04-10', NULL, NULL, NULL, 'Avion', 36),
(27, '2014-04-15', NULL, NULL, NULL, 'Lille', 36),
(29, '2014-04-15', NULL, NULL, NULL, 'Béthune', 36),
(30, '2014-04-24', NULL, NULL, NULL, 'Méricourt', 36),
(31, '2014-04-23', NULL, NULL, NULL, 'harnes', 37),
(32, '2014-04-28', NULL, NULL, NULL, 'Méricourt', 37),
(33, '2014-04-29', NULL, NULL, NULL, 'Béthune', 36);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `nom`, `prenom`, `telephone`, `email`, `fonction`, `description`, `idDepartement`, `sexe`) VALUES
(36, 'Valentin', 'a459ab42b5c4a7c1ee95528dd91924ea0b3485d2', NULL, NULL, NULL, 'vlaour@gmail.com', 'Etudiant', NULL, NULL, ''),
(37, 'UtilisateurTest', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 'Utilisateurtest@test.fr', 'Etudiant', NULL, NULL, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `codePostal`) VALUES
(4, 'Votre ville', 0),
(5, 'Votre ville', 0),
(6, 'Ville de merde', 12345),
(7, 'VIlle pourrave', 12345),
(8, 'aaaa', NULL),
(9, 'aaaaa', NULL),
(10, 'aaaaa', NULL),
(11, 'aaaa', NULL),
(12, 'Lens', NULL),
(13, 'ddfff', NULL),
(14, 'ddfff', NULL),
(15, 'ddfff', NULL),
(16, 'Blaireauville', NULL),
(17, 'Mericourt', NULL),
(18, 'Méricourt', NULL),
(19, 'aaa', NULL),
(20, 'aaa', NULL),
(21, 'aaa', NULL),
(22, 'aaa', NULL),
(23, 'Mericourt', NULL),
(24, 'aaaa', NULL),
(25, 'Méricourt', NULL),
(26, 'Paris', NULL),
(27, 'Arleux en gohelle', NULL),
(28, 'Arleux en gohelle', NULL),
(29, 'Méricourt', NULL),
(30, 'Harnes', NULL),
(31, 'Rouvroy', NULL),
(32, 'bruay la buissiere', NULL),
(33, 'Noyelles sous lens', NULL),
(34, 'liévin', NULL),
(35, 'Grenay', NULL),
(36, 'Avion', NULL),
(37, 'Béthunes', NULL),
(38, 'Lille', NULL),
(39, 'Béthunes nord pas de calais', NULL),
(40, 'Béthune', NULL),
(41, 'Méricourt', NULL),
(42, 'harnes', NULL),
(43, 'Méricourt', NULL),
(44, 'Béthune', NULL);
