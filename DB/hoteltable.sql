-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2024 at 12:37 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoteltable`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `mid` int(50) NOT NULL AUTO_INCREMENT,
  `curdate` varchar(50) NOT NULL,
  `breakfast` varchar(50) NOT NULL,
  `lunch` varchar(50) NOT NULL,
  `dinner` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `curdate`, `breakfast`, `lunch`, `dinner`) VALUES
(5, '2024-03-19', 'idly,thosa,chapathi,poori', 'meals,lemon rice,curd rice,veg-rice', 'chapathi,thosa,parotta,idly'),
(6, '2024-03-22', 'tea,coffee,vada,idly,ediyappam,variety dosa', 'veg rice,chicken rice,paroota,white meals, briyani', 'idly,dhosa,chappathi, poori');

-- --------------------------------------------------------

--
-- Table structure for table `tablebooking`
--

CREATE TABLE IF NOT EXISTS `tablebooking` (
  `tid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `people` varchar(50) NOT NULL,
  `table` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `dattym` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tablebooking`
--

INSERT INTO `tablebooking` (`tid`, `name`, `mail`, `mobile`, `people`, `table`, `food`, `dattym`, `amount`, `status`) VALUES
(14, 'rindhi', 'rin@gmail.com', '6374034622', '1', 't1', 'breakfast', '2024-03-21T12:19', '150', 'accepted'),
(18, 'rindhi', 'rin@gmail.com', '6374034622', '8', 't8', 'lunch', '2024-03-22T13:10', '1500', 'paid'),
(19, 'rindhi', 'rin@gmail.com', '6374034622', '1', 't1', 'breakfast', '2024-03-21T12:19', '500', 'accepted'),
(21, 'rs', 'rs@gmail.com', '1234567890', '8', 't8', 'dinner', '2024-03-26T19:00', 'NULL', 'accepted'),
(22, 'rs', 'rs@gmail.com', '1234567890', '8', 't8', 'dinner', '2024-03-26T19:00', '250', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `mail`, `pwd`, `address`, `mobile`) VALUES
(1, 'rindhi', 'rin@gmail.com', '1234', 'cbe', '6374034622'),
(2, 'rs', 'rs@gmail.com', '1234', 'cbe', '1234567890');
