-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2014 at 09:56 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `contact_name`, `address`, `city`, `zipcode`) VALUES
(1, 'William J Randall', 'Billy Randall', '555 Main st', 'Boston', '11111'),
(2, 'Jennifer Sheehan', 'Jen Sheehan', '444 Mass Ave', 'Boston', '11111'),
(3, 'Jason Smith', 'Jason Smith', '555 School st', 'Brooklyn', '22222'),
(4, 'Michael Andrews', 'Mike Andrews', '777 Lafayette Lane', 'Miami', '33333');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `contact_name`, `address`, `city`, `zipcode`) VALUES
(1, 'ABC Vending', 'Mike Thompson', '444 Drivefast Lane', 'Detroit', '33333'),
(2, 'DEF Vending', 'Kelly Williams', '555 Lake Drive', 'Miami', '77777'),
(3, 'GHI Vending', 'Lars Jackson', '888 Greenwood Ave', 'Boston', '11111'),
(4, 'JKL Vending', 'Bob Stanwood', '899 River Landing', 'Boston', '11111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
