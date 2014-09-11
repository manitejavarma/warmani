
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2014 at 02:42 PM
-- Server version: 5.1.66
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u969003719_mani`
--

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `following` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`email`, `following`) VALUES
('saiteja10294@gmail.com', 'madduakhil@gmail.com'),
('saiteja10294@gmail.com', 'akhilhotboy@gmail.com'),
('saiteja10294@gmail.com', 'manitejavarma@yahoo.com'),
('Charan.marikala@gmail.com', 'manitejavarma@yahoo.com'),
('Charan.marikala@gmail.com', 'madduakhil@gmail.com'),
('Charan.marikala@gmail.com', 'akhilhotboy@gmail.com'),
('manitejavarma@yahoo.com', 'Charan.marikala@gmail.com'),
('muthyalaakhil2396@gmail.com', 'Charan.marikala@gmail.com'),
('manitejavarma@yahoo.com', 'saiteja10294@gmail.com'),
('manitejavarma@yahoo.com', 'akhilhotboy@gmail.com'),
('manitejavarma@yahoo.com', 'muthyalaakhil2396@gmail.com'),
('manitejavarma@yahoo.com', 'madduakhil@gmail.com'),
('vivekveera666@gmail.com', 'manitejavarma@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `username`, `password`, `email`) VALUES
(1, 'maniteja', 'varma', 'Maniteja varma', 'password', 'manitejavarma@yahoo.com'),
(2, 'akhil', 'maddu', 'Akhil maddu', 'password', 'madduakhil@gmail.com'),
(3, 'akhil', 'pandey', 'Akhil pandey', 'jaffa123', 'akhilhotboy@gmail.com'),
(4, 'saiteja', 'malyala', 'Saiteja malyala', '', 'saiteja10294@gmail.com'),
(8, 'akhil', 'akhil', 'Akhil akhil', 'akhilakhil', 'muthyalaakhil2396@gmail.com'),
(7, 'Charan', 'Marikala', 'Charan Marikala', '974', 'Charan.marikala@gmail.com'),
(9, 'vivek ', 'veera', 'Vivek  veera', 'password', 'vivekveera666@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`sno`, `email`, `post`, `doc`) VALUES
(7, 'Charan.marikala@gmail.com', 'Hello mad man world', '2014-08-25 17:12:17'),
(5, 'manitejavarma@yahoo.com', 'hiii  im mani', '2014-07-03 17:26:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
