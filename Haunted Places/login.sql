-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2023 at 05:07 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `email`, `password`) VALUES
(1, 'kartiki', 'kartiki@gmail.com', '1234'),
(2, 'vaishnavi', 'vaishnavi@gmail.com', '1234567'),
(3, 'chaitu', 'chaitu@gmail.com', '1212'),
(4, 'shubhu', 'shubhu@gmail.com', 'chaitu'),
(5, 'adjsjadsaba', 'kartiki@gmail.com', '123456789'),
(6, 'Ashu', 'Ashutosh@gmail.com', '12345'),
(7, 'Shreyas', 'shreyas@gamil.com', '0910'),
(8, 'deepu', 'deepu@gmail.com', 'neha'),
(9, 'shraddha ', 'kambleshraddha112@gmail.com', '0235'),
(10, 'Chaitrali', 'chaitu@gmail.com', '2342'),
(11, 'Om Shinde', 'omshinde1819@gmail.com', 'omi'),
(12, 'Om Shinde', 'omshinde1819@gmail.com', 'omi'),
(13, 'Om Shinde', 'admin@gmail.com', 'admin'),
(14, 'om', 'admin@gmail.com', 'admin'),
(15, 'omi', 'deepu', 'neha');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
