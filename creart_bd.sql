-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 12 Mai 2015 à 13:28
-- Version du serveur: 5.1.53
-- Version de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `creart_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `Msg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Sender` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Msg_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`Msg_ID`, `Sender`, `Message`) VALUES
(11, 'Ghada', 'Salut'),
(12, 'Safwene', 'Salut Ã§a va ?'),
(13, 'Bayrem', 'wini il 5Ã©dma mta3 il web ? '),
(14, 'Safwene', '3and praty !!!!!!!'),
(15, 'ghada', 'praty manajamch yji\n'),
(16, 'fmsqj', 'fsmljsfq'),
(17, 'fmsqj', 'kqfmlsjfqmljfqs');

-- --------------------------------------------------------

--
-- Structure de la table `cinema`
--

CREATE TABLE IF NOT EXISTS `cinema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_cinema` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL,
  `taux_rating` double NOT NULL,
  `nb_view` int(11) NOT NULL,
  `video_extension` varchar(255) NOT NULL,
  `changes` varchar(255) NOT NULL,
  `work` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `membre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `cinema`
--

INSERT INTO `cinema` (`id`, `title_cinema`, `kind`, `description`, `date_pub`, `taux_rating`, `nb_view`, `video_extension`, `changes`, `work`, `id_user`, `membre`) VALUES
(27, 'first_verstion', 'bool shit ', 'aaaaa', '2015-05-10 18:53:08', 0, 0, 'mp4', 'The First Version', 36, 38, ''),
(28, 'a new version', 'wow', 'aaaa', '2015-05-10 18:53:49', 0, 0, 'webm', 'all of it', 36, 38, ''),
(29, 'essaaiii', 'zcfcz', 'asa', '2015-05-10 21:50:51', 0, 0, 'webm', 'The First Version', 39, 38, '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_cinema`
--

CREATE TABLE IF NOT EXISTS `commentaires_cinema` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `membre_commentaire` varchar(255) NOT NULL,
  `corps_commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=288 ;

--
-- Contenu de la table `commentaires_cinema`
--

INSERT INTO `commentaires_cinema` (`id_commentaire`, `id_article`, `membre_commentaire`, `corps_commentaire`, `date_commentaire`) VALUES
(262, 2, 'Safwene', 'TEST TEST ', '2015-05-01 16:49:09'),
(263, 2, 'Safwene', 'TEST TEST ', '2015-05-01 16:49:14'),
(264, 2, 'safwene', 'dsqlfh ', '2015-05-01 16:56:34'),
(265, 2, 'Snizer', ' TEST', '2015-05-01 17:18:15'),
(266, 2, 'Snizer', ' SALUT', '2015-05-01 17:19:16'),
(267, 2, 'Snizer', ' salut ', '2015-05-01 17:19:46'),
(268, 2, 'Snizer', ' sqd', '2015-05-01 17:19:57'),
(269, 2, 'Snizer', ' dq', '2015-05-01 17:20:40'),
(270, 14, 'Snizer', ' fq', '2015-05-01 17:20:51'),
(271, 12, 'Snizer', ' TEST ', '2015-05-01 18:50:46'),
(272, 11, 'Snizer', ' dqs', '2015-05-01 19:19:34'),
(273, 2, 'Snizer', ' TEST FINAL', '2015-05-01 19:34:30'),
(274, 2, 'Snizer', ' sdq', '2015-05-01 22:59:20'),
(275, 2, 'Snizer', ' SALUT ZATOUL !', '2015-05-02 14:18:22'),
(276, 2, 'Snizer', ' SALUT ZATOUL !', '2015-05-02 14:18:22'),
(277, 2, 'Snizer', ' SALUT ZATOUL !', '2015-05-02 14:18:22'),
(278, 2, 'Snizer', ' SALUT ZATOUL !', '2015-05-02 14:18:28'),
(279, 2, 'Snizer', ' SALUT ZATOUL !', '2015-05-02 14:18:28'),
(280, 2, 'Snizer', ' SALUT ZATOUL !', '2015-05-02 14:18:28'),
(281, 2, 'Snizer', ' hey !', '2015-05-02 14:18:37'),
(282, 15, 'atef32', ' vcccc', '2015-05-02 18:46:50'),
(283, 24, 'Safwene ben aich', 'this comment is the first one', '2015-05-10 17:34:58'),
(284, 25, 'Safwene ben aich', 'blablablabla', '2015-05-10 17:39:47'),
(285, 24, 'snizer', ' nyahahahaha\n', '2015-05-10 18:40:12'),
(286, 27, 'atef azzouz', 'a comment', '2015-05-10 18:53:24'),
(287, 29, 'atef azzouz', 'vfd', '2015-05-10 21:57:29');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_literature`
--

CREATE TABLE IF NOT EXISTS `commentaires_literature` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `membre_commentaire` varchar(255) NOT NULL,
  `corps_commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commentaires_literature`
--

INSERT INTO `commentaires_literature` (`id_commentaire`, `id_article`, `membre_commentaire`, `corps_commentaire`, `date_commentaire`) VALUES
(1, 1, 'atef', 'fsqk ', '2015-04-27 20:40:09'),
(2, 1, 'Snizer', ' salut !', '2015-05-01 23:26:35'),
(3, 6, 'atef azzouz', 'this is a great job thanks duude ', '2015-05-10 18:48:42'),
(4, 8, 'atef azzouz', 'asa', '2015-05-10 21:43:32');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_music`
--

CREATE TABLE IF NOT EXISTS `commentaires_music` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `membre_commentaire` varchar(255) NOT NULL,
  `corps_commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `commentaires_music`
--

INSERT INTO `commentaires_music` (`id_commentaire`, `id_article`, `membre_commentaire`, `corps_commentaire`, `date_commentaire`) VALUES
(1, 1, 'Snizer', ' TrÃ¨s bonne sÃ©rie.', '2015-05-01 22:56:40'),
(2, 1, 'Snizer', ' TrÃ¨s bonne sÃ©rie.', '2015-05-01 22:56:41'),
(3, 1, 'Snizer', ' TrÃ¨s bonne sÃ©rie.', '2015-05-01 22:56:41'),
(4, 1, 'Snizer', ' TrÃ¨s bonne sÃ©rie.', '2015-05-01 22:56:44'),
(5, 1, 'Snizer', ' TrÃ¨s bonne sÃ©rie.', '2015-05-01 22:56:44'),
(6, 1, 'Snizer', ' TrÃ¨s bonne sÃ©rie.', '2015-05-01 22:56:44'),
(7, 1, 'Snizer', ' salut !', '2015-05-01 22:56:51'),
(8, 2, 'atef32', ' test com', '2015-05-02 17:22:37'),
(9, 2, 'atef32', ' test com', '2015-05-02 17:22:41'),
(10, 2, 'atef32', ' test2', '2015-05-02 18:37:41'),
(11, 2, 'Safwene ben aich', 'praty is the best ', '2015-05-10 17:45:08'),
(12, 4, 'atef azzouz', 'adsd kjsd', '2015-05-10 20:50:37');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_photography`
--

CREATE TABLE IF NOT EXISTS `commentaires_photography` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `membre_commentaire` varchar(255) NOT NULL,
  `corps_commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commentaires_photography`
--

INSERT INTO `commentaires_photography` (`id_commentaire`, `id_article`, `membre_commentaire`, `corps_commentaire`, `date_commentaire`) VALUES
(1, 2, 'Snizer', ' SALUT !', '2015-05-01 23:07:53'),
(2, 6, 'atef azzouz', 'this is the first comment ever fuck it i m fed up ', '2015-05-10 18:55:55'),
(3, 6, 'atef azzouz', 'yeah you should be !! ', '2015-05-10 18:56:29'),
(4, 12, 'atef azzouz', 'ASASA', '2015-05-10 21:43:13');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `ticketprice` varchar(30) NOT NULL,
  `ticketlink` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `participe_nb` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `eventname`, `category`, `adresse`, `date`, `duration`, `starttime`, `endtime`, `timezone`, `ticketprice`, `ticketlink`, `description`, `participe_nb`, `username`) VALUES
(1, 'concert', 'music', 'el ghazela', '2015-04-22', 2, '00:00:00', '00:00:00', '3', '3', '', 'nicee event', 6, 'pooz'),
(2, 'jazz à tabarka', 'music', 'tabarka', '2015-04-22', 6, '00:00:00', '00:00:00', '"3', '3', '3', 'azzz', 4, 'azzz');

-- --------------------------------------------------------

--
-- Structure de la table `literature`
--

CREATE TABLE IF NOT EXISTS `literature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_literature` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL,
  `taux_rating` double NOT NULL,
  `nb_view` int(11) NOT NULL,
  `literature_extension` varchar(255) NOT NULL,
  `changes` varchar(255) NOT NULL,
  `work` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `membre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `literature`
--

INSERT INTO `literature` (`id`, `title_literature`, `kind`, `description`, `date_pub`, `taux_rating`, `nb_view`, `literature_extension`, `changes`, `work`, `id_user`, `membre`) VALUES
(6, 'aaaa', 'work', 'work', '2015-05-10 18:46:27', 0, 0, 'pdf', 'The First Version', 35, 38, ''),
(7, 'sparta', 'sparta', 'sparta', '2015-05-10 18:49:13', 0, 0, 'txt', 'sparta', 35, 38, ''),
(8, 'zzz', 'zzz', 'zzz', '2015-05-10 18:51:33', 0, 0, 'txt', 'zzz', 35, 38, '');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `user_name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`user_name`, `date`, `subject`, `content`, `id`) VALUES
('aa', '', 'a', 'a', 2),
('a', '', 'a', 'a', 3),
('atef32', '28-04-2015', 'nnbabz', 'azeeeee', 4);

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_music` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL,
  `taux_rating` double NOT NULL,
  `nb_view` int(11) NOT NULL,
  `music_extension` varchar(255) NOT NULL,
  `changes` varchar(255) NOT NULL,
  `work` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `membre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `music`
--

INSERT INTO `music` (`id`, `title_music`, `kind`, `description`, `date_pub`, `taux_rating`, `nb_view`, `music_extension`, `changes`, `work`, `id_user`, `membre`) VALUES
(4, 'aaa', 'aaa', 'aaaa', '2015-05-10 19:05:21', 0, 0, 'mp3', 'The First Version', 38, 38, ''),
(5, 'dvbqvcxw', 'xqcvxwcv', 'CWW', '2015-05-10 22:07:55', 0, 0, 'mp3', 'VD<CV', 38, 38, ''),
(6, 'GHADA', 'as', 'wxc', '2015-05-10 22:08:31', 0, 0, 'mp3', 'cx', 38, 38, '');

-- --------------------------------------------------------

--
-- Structure de la table `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
  `id_opinion` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `report` int(11) NOT NULL,
  `signal_content` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id_opinion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `opinion`
--

INSERT INTO `opinion` (`id_opinion`, `id_user`, `id_item`, `rating`, `report`, `signal_content`, `type`) VALUES
(1, 1, 4, 4, 1, 'AZZ', ''),
(2, 1, 4, 5, 1, 'ZZZZZZ', ''),
(5, 5, 5, 0, 0, 'ZZZ', ''),
(7, 7, 5, 5, 1, 'TTT', ''),
(8, 3, 1, 3, 1, 'aazzz', 'cinema'),
(9, 3, 1, 4, 1, '', 'literature'),
(10, 38, 17, 0, 1, 'zzzzz', 'cinema'),
(11, 38, 24, 3, 0, '', 'cinema');

-- --------------------------------------------------------

--
-- Structure de la table `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `id_events` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participate`
--

INSERT INTO `participate` (`id_events`, `username`) VALUES
(2, 'atef32'),
(1, 'atef32'),
(4, 'atef32');

-- --------------------------------------------------------

--
-- Structure de la table `photography`
--

CREATE TABLE IF NOT EXISTS `photography` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_photography` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL,
  `taux_rating` double NOT NULL,
  `nb_view` int(11) NOT NULL,
  `photography_extension` varchar(255) NOT NULL,
  `changes` varchar(255) NOT NULL,
  `work` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `membre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `photography`
--

INSERT INTO `photography` (`id`, `title_photography`, `kind`, `description`, `date_pub`, `taux_rating`, `nb_view`, `photography_extension`, `changes`, `work`, `id_user`, `membre`) VALUES
(6, 'azerty', 'azerty', 'azerty', '2015-05-10 18:55:14', 0, 0, 'jpg', 'The First Version', 37, 38, ''),
(7, 'blablabla', 'blablabla', 'blablabla', '2015-05-10 18:56:53', 0, 0, 'jpg', 'blablabla', 37, 38, ''),
(12, 'zzz', 'hhhhzzzz', 'fuck this shiiit i gona kill my self ', '2015-05-10 19:01:58', 0, 2, 'jpg', 'blow zzzz', 37, 38, '');

-- --------------------------------------------------------

--
-- Structure de la table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `ip` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stats`
--

INSERT INTO `stats` (`ip`, `date`, `hits`, `online`) VALUES
('127.0.0.1', '0000-00-00', 69, '1429457700'),
('127.0.0.1', '0000-00-00', 35, '1429536106'),
('127.0.0.1', '0000-00-00', 5, '1429616920'),
('127.0.0.1', '0000-00-00', 22, '1429717430'),
('127.0.0.1', '0000-00-00', 1, '1429717477'),
('127.0.0.1', '0000-00-00', 1, '1429717481'),
('127.0.0.1', '0000-00-00', 1, '1429717484'),
('127.0.0.1', '22-04-2015', 50, '1429721310'),
('127.0.0.1', '23-04-2015', 6, '1429794672'),
('127.0.0.1', '25-04-2015', 190, '1429989145'),
('127.0.0.1', '26-04-2015', 3, '1430091695'),
('127.0.0.1', '27-04-2015', 41, '1430160248'),
('127.0.0.1', '28-04-2015', 8, '1430211583'),
('127.0.0.1', '29-04-2015', 28, '1430316619'),
('127.0.0.1', '05-05-2015', 6, '1430869965'),
('127.0.0.1', '10-05-2015', 1, '1431256666');

-- --------------------------------------------------------

--
-- Structure de la table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `interested` varchar(100) DEFAULT NULL,
  `cle` varchar(100) NOT NULL,
  `actif` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `subscriber`
--

INSERT INTO `subscriber` (`id`, `name`, `email`, `username`, `pwd`, `birthday`, `gender`, `mobile`, `country`, `pic`, `interested`, `cle`, `actif`) VALUES
(0, '', '', 'admin', 'admin', '0000-00-00', '', 0, '', NULL, NULL, '', 1),
(25, 'aymen praty', 'aymen@praty.com', 'aymen', '123', '1992-07-04', 'm', 22589630, 'null', '', 'cinema music  ', '', NULL),
(27, 'marcelo', 'marc@live.fr', 'marcelo', '123', '2015-04-22', 'm', 52147258, 'TN', '', ' music  ', '', NULL),
(28, 'malek azzouz', 'malek.azzouz@esprit.tn', 'maliko', '90', '1990-01-01', 'm', 22545442, 'TN', '', '  photography ', '', NULL),
(30, 'mohamed azzouz', 'mohamed@yahoo.fr', 'med', '123', '1955-05-17', 'm', 98264718, 'TN', 'uploads_user_pic/11134459_1001406669877443_1815680269_n.jpg', '   literature', '', NULL),
(35, 'Safwene ben aich', 'safwene.benaich@esprit.tn', 'Snizer', '1', '1995-01-31', 'null', 92657478, 'TN', 'uploads_user_pic/', 'cinema   ', '2e7d48481d9ef03b12e730312deace34', 1),
(39, 'atef azzouz', 'atef.azzouz@esprit.tn', 'atef32', '123', '1994-06-04', 'Male', 55264040, 'TN', 'uploads_user_pic/10996067_362639440600062_8584335209074696793_n.jpg', 'cinema  photography ', '36443f749575cb6e7210256c746ad34c', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `mobile` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `interest` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--


-- --------------------------------------------------------

--
-- Structure de la table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
  `id_view` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type_item` text NOT NULL,
  PRIMARY KEY (`id_view`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `view`
--

INSERT INTO `view` (`id_view`, `id_user`, `id_item`, `type_item`) VALUES
(5, 38, 29, 'cinema'),
(6, 38, 6, 'music'),
(7, 35, 29, 'cinema'),
(8, 35, 6, 'music'),
(9, 35, 12, 'photography'),
(10, 35, 28, 'cinema'),
(11, 38, 27, 'cinema'),
(12, 38, 4, 'music'),
(13, 38, 8, 'literature'),
(14, 38, 12, 'photography');

-- --------------------------------------------------------

--
-- Structure de la table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id_work` int(11) NOT NULL AUTO_INCREMENT,
  `work_name` text NOT NULL,
  `item` int(11) NOT NULL,
  `work_type` text NOT NULL,
  PRIMARY KEY (`id_work`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `work`
--

INSERT INTO `work` (`id_work`, `work_name`, `item`, `work_type`) VALUES
(31, 'aaze', 4, 'Photography'),
(32, 'qqq', 5, 'Photography'),
(33, 'aaa', 26, 'Cinema'),
(34, 'aaa', 5, 'Literature'),
(35, 'literature_test', 6, 'Literature'),
(36, 'The lord of the ring', 27, 'Cinema'),
(37, 'azerty', 6, 'Photography'),
(38, 'aaa', 4, 'Music'),
(39, 'essai', 29, 'Cinema');
