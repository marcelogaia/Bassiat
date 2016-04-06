-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2016 at 02:07 PM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bassiat_site`
--
USE `bassiat_site`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `img_1` varchar(127) DEFAULT NULL,
  `img_2` varchar(127) DEFAULT NULL,
  `img_3` varchar(127) DEFAULT NULL,
  `img_4` varchar(127) DEFAULT NULL,
  `img_5` varchar(127) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url_path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `featured_order` tinyint(4) DEFAULT NULL,
  `featured_img` varchar(127) DEFAULT NULL,
  `text_1` text,
  `text_2` text,
  `text_3` text,
  `inside_text_1` text,
  `inside_text_2` text,
  `img_1` varchar(127) DEFAULT NULL,
  `img_2` varchar(127) DEFAULT NULL,
  `img_3` varchar(127) DEFAULT NULL,
  `img_4` varchar(127) DEFAULT NULL,
  `img_5` varchar(127) DEFAULT NULL,
  `img_6` varchar(127) DEFAULT NULL,
  `img_7` varchar(127) DEFAULT NULL,
  `img_8` varchar(127) DEFAULT NULL,
  `img_9` varchar(127) DEFAULT NULL,
  `img_10` varchar(127) DEFAULT NULL,
  `img_11` varchar(127) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_path` (`url_path`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `privilege` tinyint(4) NOT NULL COMMENT '1 - Admin, 2 - Add / Edit, 3 - Add',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
