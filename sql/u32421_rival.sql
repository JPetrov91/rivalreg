-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2017 at 11:27 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u32421_rival`
--

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gold` int(4) NOT NULL,
  `oil` int(4) NOT NULL,
  `ore` int(4) NOT NULL,
  `current_gold` int(4) NOT NULL,
  `current_oil` int(4) NOT NULL,
  `current_ore` int(4) NOT NULL,
  `number_of_players` int(7) NOT NULL,
  `number_of_residence` int(7) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `gold`, `oil`, `ore`, `current_gold`, `current_oil`, `current_ore`, `number_of_players`, `number_of_residence`, `region_name`) VALUES
(1, 344, 657, 556, 231, 321, 213, 33, 44, 'Рига');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `name`) VALUES
(1, 'Нефть'),
(2, 'Руда'),
(3, 'Деньги');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `budget_gold` int(11) NOT NULL DEFAULT '0',
  `budget_money` int(11) NOT NULL DEFAULT '0',
  `budget_oil` int(11) NOT NULL DEFAULT '0',
  `budget_ore` int(11) NOT NULL DEFAULT '0',
  `people_count` int(5) NOT NULL DEFAULT '0',
  `citizens_count` int(5) NOT NULL DEFAULT '0',
  `party_count` int(5) NOT NULL DEFAULT '0',
  `regions_count` int(5) NOT NULL DEFAULT '0',
  `borders` tinyint(1) NOT NULL DEFAULT '0',
  `residence_for_work` tinyint(1) NOT NULL DEFAULT '0',
  `free_residence` tinyint(1) NOT NULL DEFAULT '1',
  `parliament_form` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE IF NOT EXISTS `storage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oil_quant` int(11) NOT NULL,
  `ore_quant` int(11) NOT NULL,
  `gun_quant` int(11) NOT NULL,
  `antitank_quant` int(11) NOT NULL,
  `rocket_quant` int(11) NOT NULL,
  `grenadelaunchers_quant` int(11) NOT NULL,
  `stormtroopers` int(11) NOT NULL,
  `energetics` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `oil_quant`, `ore_quant`, `gun_quant`, `antitank_quant`, `rocket_quant`, `grenadelaunchers_quant`, `stormtroopers`, `energetics`) VALUES
(1, 121313, 35345, 34535, 345345, 3453, 345, 345, 345345);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `login`, `password`, `email`) VALUES
(1, 'fgfdg', 'gdgdf', 'dgdf'),
(2, 'лорл', 'рлор', 'рлрл'),
(3, 'лорлhgh', 'рлор', 'рлрл'),
(4, 'лорлhiiigh', 'рлор', 'рлрл'),
(5, 'ytytлорлhiiigh', 'рлор', 'рлрл'),
(6, 'gdfg', 'fdg', 'dfgf'),
(7, 'hghgytytлорлhiiighhhh', 'рлор', 'рлрл'),
(8, 'fgf', 'dfgfg', 'fgd'),
(9, 'Adolf Hitler', 'Stalinsosethui', 'furer@thirdreich.de');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `level` int(4) NOT NULL DEFAULT '1',
  `strength` int(5) NOT NULL DEFAULT '0',
  `knowledge` int(5) NOT NULL DEFAULT '0',
  `endurance` int(5) NOT NULL DEFAULT '0',
  `current_energy` int(3) NOT NULL DEFAULT '0',
  `max_energy` int(3) NOT NULL DEFAULT '200',
  `money` int(15) NOT NULL DEFAULT '100',
  `gold` int(15) NOT NULL DEFAULT '10',
  `experience` int(15) NOT NULL DEFAULT '0',
  `currentRegionID` varchar(30) NOT NULL DEFAULT '0',
  `residenceRegionID` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `level`, `strength`, `knowledge`, `endurance`, `current_energy`, `max_energy`, `money`, `gold`, `experience`, `currentRegionID`, `residenceRegionID`) VALUES
(1, 'UraPidor', '123456', '', 'UraPidor', 5, 5, 8, 9, 50, 0, 255, 12, 666, 'Воронеж', 'Воронеж'),
(2, 'zhorik', 'zhorik', 'zhorik@mail.ru', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ываыва', 'цукцук'),
(3, 'Adolf Hitler', 'Stalinsosethui', 'furer@thirdreich.de', NULL, 1, 0, 0, 0, 0, 200, 100, 10, 0, '0', '0'),
(5, 'hfgh', 'hfghf', 'fghfh', NULL, 1, 0, 0, 0, 0, 200, 100, 10, 0, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE IF NOT EXISTS `weapons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `damage` int(5) NOT NULL,
  `energy_for_shoot` int(11) NOT NULL,
  `money_required` int(11) NOT NULL,
  `gold_required` int(11) NOT NULL,
  `oil_required` int(11) NOT NULL,
  `ore_required` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
