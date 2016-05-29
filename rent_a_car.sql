-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2015 at 11:32 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rent_a_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id_car` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(20) COLLATE utf8_bin NOT NULL,
  `model` varchar(20) COLLATE utf8_bin NOT NULL,
  `reg_num` varchar(20) COLLATE utf8_bin NOT NULL,
  `horse_powers` int(11) NOT NULL,
  `color` varchar(20) COLLATE utf8_bin NOT NULL,
  `engine` enum('Petrol','Diesel','','') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_car`),
  UNIQUE KEY `horse_powers_2` (`horse_powers`),
  UNIQUE KEY `reg_num` (`reg_num`),
  KEY `horse_powers` (`horse_powers`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id_car`, `brand`, `model`, `reg_num`, `horse_powers`, `color`, `engine`) VALUES
(1, 'Mercedes-Benz', 'C220', 'S1312AZ', 170, 'Silver', 'Diesel'),
(2, 'Mercedes-Benz', 'G55', 'S2165AX', 250, 'Black', 'Petrol'),
(3, 'Mercedes-Benz', 'A140', 'LA265AZ', 110, 'Grey', 'Diesel'),
(4, 'BMW', '520', 'R2165AF', 180, 'Black', 'Diesel'),
(5, 'BMW', '535', 'R2165AQ', 220, 'Black', 'Diesel'),
(6, 'BMW', '750', 'R2165AP', 325, 'Black', 'Diesel'),
(7, 'BMW', 'M6', 'R2111BO', 550, 'Silver', 'Petrol'),
(9, 'Lada', 'Niva', 'P2987RC', 101, 'White', 'Petrol'),
(10, 'Moskvich', 'Aleko', 'R2111RK', 71, 'White', 'Petrol'),
(11, 'VW', 'Bora', 'R2111RO', 120, 'Black', 'Diesel'),
(12, 'VW', 'Golf 2', 'P2111FC', 115, 'Black', 'Petrol'),
(13, 'VW', 'Golf 1', 'P2111SF', 135, 'Black', 'Petrol'),
(14, 'Mazda', '2', 'F2141RK', 90, 'Red', 'Petrol'),
(15, 'Mazda', '6', 'R2511RW', 100, 'Silver', 'Diesel'),
(16, 'Fiat', 'Bravo', 'SF2133R', 82, 'Silver', 'Diesel'),
(17, 'Fiat', 'Brava', 'FS2111R', 98, 'Red', 'Diesel');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `age` tinyint(4) NOT NULL,
  `license_category` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `first_name`, `last_name`, `age`, `license_category`) VALUES
(1, 'Valeri', 'Penev', 22, 'B,A'),
(2, 'Ivan', 'Gelev', 33, 'B,A'),
(3, 'Georgi', 'Ivanov', 55, 'B'),
(4, 'Dimitur', 'Penev', 59, 'C'),
(5, 'Vasil', 'Levski', 18, 'B'),
(6, 'Kameliq', 'Ivanova', 31, 'B,C'),
(7, 'Tony', 'Aleksandrova', 22, 'B'),
(8, 'Gabriela', 'Penev', 35, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `clients_cars`
--

CREATE TABLE IF NOT EXISTS `clients_cars` (
  `client_id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  KEY `client_id` (`client_id`,`cars_id`,`rent_date`,`return_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `clients_cars`
--

INSERT INTO `clients_cars` (`client_id`, `cars_id`, `rent_date`, `return_date`) VALUES
(1, 1, '2014-01-01', '2014-01-31'),
(1, 3, '2014-09-01', '2014-09-20'),
(2, 2, '2014-02-01', '2014-02-27'),
(3, 3, '2014-03-01', '2014-03-31'),
(4, 4, '2014-04-04', '2014-09-21'),
(4, 16, '2015-02-09', '2015-04-25'),
(5, 5, '2014-05-01', '2014-05-29'),
(6, 6, '2014-06-01', '2014-06-15'),
(7, 7, '2014-07-04', '2014-07-20'),
(8, 8, '2014-08-03', '2014-08-29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
