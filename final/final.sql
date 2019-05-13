-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 03:30 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `start` varchar(20) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `booked_by` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `user_id`, `date`, `start`, `duration`, `booked_by`) VALUES
(5, 1, '1/1/2000', '2pm', '45 min', 'Not Booked'),
(6, 1, '12/2/2017', '2pm', '4 hours', 'Not Booked'),
(7, 1, '5/11/2019', '6pm', '15 minutes', 'Not Booked'),
(9, 1, '5/12/19', '2', '2mins', 'Not Booked'),
(17, 1, '2/6/1995', '2', '2', 'Not Booked'),
(19, 1, '03/15/2022', '2pm', '2 hours', 'Not Booked'),
(20, 1, '03/15/1995', '3pm', '2 and a half hours', 'Not Booked'),
(22, 1, '2/2/2001', '12pm', '45 mins', 'Not Booked'),
(23, 1, '6/25/2019', '5pm', '2 hours', 'Not Booked');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin', '$2y$11$Gc8r9MCb7681qFbgjGBVoOGcGdx3w3uNw3XzBS57i3R8GgZKnDTd6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
