-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 09:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smilling_star_db`
--
CREATE DATABASE IF NOT EXISTS `smilling_star_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smilling_star_db`;

-- --------------------------------------------------------

--
-- Table structure for table `generate_item_barcode`
--

CREATE TABLE IF NOT EXISTS `generate_item_barcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Maker` varchar(50) NOT NULL,
  `Lantern_Name` varchar(50) NOT NULL,
  `Lantern_Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date_Generate` date NOT NULL,
  `Barcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `generate_item_barcode`
--

INSERT INTO `generate_item_barcode` (`id`, `Lantern_Maker`, `Lantern_Name`, `Lantern_Price`, `Quantity`, `Date_Generate`, `Barcode`) VALUES
(24, 'ROWEL', 'ONE', 200, 95, '2017-02-19', '11702198'),
(25, 'ROWEL', 'TWO', 200, 95, '2017-02-19', '11702199'),
(26, 'ROWEL', 'THREE', 200, 95, '2017-02-19', '117021910'),
(27, 'ROWEL', 'FOUR', 200, 95, '2017-02-19', '117021911'),
(28, 'ROWEL', 'FIVE', 200, 95, '2017-02-19', '117021912'),
(29, 'ROWEL', 'SIX', 200, 95, '2017-02-19', '117021913'),
(30, 'ROWEL', 'STAR', 200, 88, '2017-02-20', '11702201'),
(31, 'ROWEL', 'HAYWARD', 100, 70, '2017-02-20', '117022023'),
(32, 'ROWEL', 'STAR', 200, 0, '2017-02-22', '11702221'),
(33, 'ROWEL', 'ONE', 200, 10, '2017-02-22', '11702228');

-- --------------------------------------------------------

--
-- Table structure for table `new_item`
--

CREATE TABLE IF NOT EXISTS `new_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Name` varchar(50) NOT NULL,
  `Lantern_Price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `new_item`
--

INSERT INTO `new_item` (`id`, `Lantern_Name`, `Lantern_Price`) VALUES
(1, 'STAR', 200),
(2, 'CIRCLECLE', 200),
(3, 'TRIANGLE', 200),
(4, 'FINALLY', 200),
(5, 'ELSE', 200),
(6, 'TRY', 200),
(7, 'GOOD', 200),
(8, 'ONE', 200),
(9, 'TWO', 200),
(10, 'THREE', 200),
(11, 'FOUR', 200),
(12, 'FIVE', 200),
(13, 'SIX', 200),
(14, 'GLENICE', 200),
(15, 'CELLPHONE', 100),
(16, 'BOLA', 100),
(17, 'REXX', 100),
(18, 'HMOES', 100),
(19, 'NINE', 100),
(20, 'MILK', 100),
(21, 'LANTERN', 200),
(22, 'BALLLLLSSSS', 200),
(23, 'HAYWARD', 100),
(24, 'YOURS', 100),
(25, 'OCTAGON', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lantern_maker`
--

CREATE TABLE IF NOT EXISTS `tb_lantern_maker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Maker` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_lantern_maker`
--

INSERT INTO `tb_lantern_maker` (`id`, `Lantern_Maker`) VALUES
(1, 'ROWEL'),
(2, 'GORDON'),
(3, 'KURT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_in`
--

CREATE TABLE IF NOT EXISTS `tb_log_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_log_in`
--

INSERT INTO `tb_log_in` (`id`, `username`, `password`) VALUES
(1, '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sold`
--

CREATE TABLE IF NOT EXISTS `tb_sold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Name` varchar(50) NOT NULL,
  `Lantern_Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Date_Sold` date NOT NULL,
  `barcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `tb_sold`
--

INSERT INTO `tb_sold` (`id`, `Lantern_Name`, `Lantern_Price`, `Quantity`, `Total_Price`, `Date_Sold`, `barcode`) VALUES
(92, 'ONE', 200, 3, 600, '2017-02-19', '11702198'),
(93, 'TWO', 200, 3, 600, '2017-02-19', '11702199'),
(94, 'THREE', 200, 3, 600, '2017-02-19', '117021910'),
(95, 'FOUR', 200, 3, 600, '2017-02-19', '117021911'),
(96, 'FIVE', 200, 3, 600, '2017-02-19', '117021912'),
(97, 'SIX', 200, 3, 600, '2017-02-19', '117021913'),
(98, 'ONE', 200, 2, 400, '2017-02-20', '11702198'),
(99, 'TWO', 200, 2, 400, '2017-02-20', '11702199'),
(100, 'THREE', 200, 2, 400, '2017-02-20', '117021910'),
(101, 'FOUR', 200, 2, 400, '2017-02-20', '117021911'),
(102, 'FIVE', 200, 2, 400, '2017-02-20', '117021912'),
(103, 'SIX', 200, 2, 400, '2017-02-20', '117021913'),
(104, 'STAR', 200, 2, 400, '2017-02-20', '11702201'),
(105, 'HAYWARD', 100, 30, 3000, '2017-02-20', '117022023'),
(106, 'STAR', 200, 20, 4000, '2017-02-22', '11702221'),
(107, 'STAR', 200, 10, 2000, '2017-02-22', '11702201'),
(108, 'ONE', 200, 20, 4000, '2017-02-22', '11702228'),
(109, 'ONE', 200, 10, 2000, '2017-02-23', '11702228');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sold_all`
--

CREATE TABLE IF NOT EXISTS `tb_sold_all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Name` varchar(50) NOT NULL,
  `Lantern_price` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `total_price` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tb_sold_all`
--

INSERT INTO `tb_sold_all` (`id`, `Lantern_Name`, `Lantern_price`, `Quantity`, `total_price`) VALUES
(19, 'ONE', 200, 35, 7000),
(20, 'TWO', 200, 5, 1000),
(21, 'THREE', 200, 5, 1000),
(22, 'FOUR', 200, 5, 1000),
(23, 'FIVE', 200, 5, 1000),
(24, 'SIX', 200, 5, 1000),
(25, 'STAR', 200, 32, 6400),
(26, 'HAYWARD', 100, 30, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_stocks`
--

CREATE TABLE IF NOT EXISTS `tb_stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Lantern_Price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tb_stocks`
--

INSERT INTO `tb_stocks` (`id`, `Lantern_Name`, `Quantity`, `Lantern_Price`) VALUES
(22, 'ONE', 105, 200),
(23, 'TWO', 95, 200),
(24, 'THREE', 95, 200),
(25, 'FOUR', 95, 200),
(26, 'FIVE', 95, 200),
(27, 'SIX', 95, 200),
(28, 'STAR', 88, 200),
(29, 'HAYWARD', 70, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tally`
--

CREATE TABLE IF NOT EXISTS `tb_tally` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lantern_Name` varchar(50) NOT NULL,
  `total_item` int(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `sold_item` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
