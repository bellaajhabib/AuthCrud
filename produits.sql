-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Mai 2016 à 12:28
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
`id` int(11) NOT NULL,
  `numDemande` int(11) NOT NULL,
  `objetDemande` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateEmission` date NOT NULL,
  `adresseLivraison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomEmetteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`id`, `numDemande`, `objetDemande`, `dateEmission`, `adresseLivraison`, `nomEmetteur`) VALUES
(9, 5555, 'sdsdsd', '2016-05-07', 'xsscdd', 'sdsdsdsd'),
(10, 5, 'cscscccc', '2016-05-07', 'cscsc', 'ss'),
(11, 1, 'ssdss', '2016-05-07', 'scscsc', 's'),
(12, 1, 'dfdf', '2016-05-07', 'dfdf', 'sfsdfdf'),
(13, 1, 'dfdf', '2016-05-07', 'dfdf', 'dfdf'),
(14, 4, 'wwc', '2016-05-08', 'wxwx', 'habib'),
(15, 1, 'sxs', '2016-05-08', 'sdsd', 'habib');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, '22iaelaqsfgkg880gok0k0ksocscccs', 'Sdz7g1ZC6dUNetrw76IVrKm/88YHn2ynVjTWcuV7YQoMUaqyytTEaa7nDdyjsHmGy3vCjeYkzPW3WLFs8J0RyQ==', '2016-05-08 12:22:33', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:5:"ADMIN";i:1;s:10:"ROLE_ADMIN";}', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
