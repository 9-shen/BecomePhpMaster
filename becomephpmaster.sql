-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 06 Juillet 2015 à 20:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `becomephpmaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'jQuery'),
(24, 'Php 5'),
(25, 'Lavarel'),
(32, 'Java j2ee'),
(33, 'Java EE'),
(34, 'javascript'),
(35, 'zz');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(25) NOT NULL,
  `comment_date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(7, 18, 'Nouaman ', 'bentaj@nouaman.fr', 'hello', 'approve', '2015-06-28'),
(8, 18, 'Nouaman ', 'bentaj@nouaman.fr', 'hello', 'approve', '2015-06-28'),
(9, 18, 'Nouaman ', 'bentaj@nouaman.fr', 'hello', 'unapprove', '2015-06-28'),
(10, 18, 'Nouaman ', 'bentaj@nouaman.fr', 'hello', 'unapprove', '2015-06-28'),
(11, 18, 'Nouaman ', 'bentaj@nouaman.fr', 'sdsdgf', 'unapprove', '2015-06-28');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(8, 3, 'JavaScript Course', 'Nouaman B', '2015-07-06', '10931297_1579451738958853_3465215624371130915_n.jpg', '<p>lorem ipsum tolla</p>', 'javascript, lynda', '4', 'published'),
(10, 3, 'JavaScript Course', 'Lynda', '2015-07-06', '10616087_1526585894245438_7193493338589258794_n.jpg', '<p>jkk</p>', 'javascript, lynda', '4', 'published'),
(17, 3, 'Nouaman CMs PHP Course is Awesome', '9-shen', '2015-07-01', '10431445_1563120897258604_4515950452846856555_n.jpg', '', 'Nouaman, php', '4', 'published'),
(20, 24, 'Nouaman CMs PHP Course is Awesome', 'Lynda', '2015-07-06', '10991423_1593412980896062_3044015862045272327_n.jpg', '<p>Nouaman CMs PHP Course is Awesome</p>', 'php', '', 'published');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(1000) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randsalt`) VALUES
(1, 'admin', 'admin', 'nouaman', 'bentaj', 'admin@admin.com', '', 'admin', ''),
(3, '9-shen', 'admin', 'Nouamans', 'Naciri', 'admin@lomp.fr', '', 'admin', ''),
(7, 'Root', 'root123', 'Root', 'Root', 'Root@root.com', '', 'subscriber', ''),
(8, 'bentaj', 'root123', 'Nouaman', 'Bentaj', 'admin@lop.fr', '', 'subscriber', ''),
(9, 'bentaj', 'admin', 'bentaj', 'bentaj', 'bentaj@bentaj.fr', '', 'admin', '$2y$10$iusesomecrazystring22'),
(10, 'Pchket', 'admin', '', '', 'admin@admin.fg', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(11, 'Pchket', '$1$hP/.WY0.$SYyl0Se05siNk2Z/oEzNf/', '', '', 'admin@admin.fg', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(12, 'Test', '$1$ny..kZ4.$RyAGy5jU9wzKS80D6jAcv1', '', '', 'test@test.org', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(13, 'demo', '$1$dH1.iJ1.$pYUHgPVC4kCm2cbrj4Jsr/', '', '', 'demo@demo.fr', '', 'subscriber', '$2y$10$iusesomecrazystring22'),
(14, 'nouamanb', '$1$Yx..BL1.$7iwl7RS79I7L/tgEYrQB01', '', '', 'nouamanb@nouaman.be', '', 'subscriber', '$2y$10$iusesomecrazystrings22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
