-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 11:04 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`user_id`, `password`) VALUES
('emp001', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `emp_report`
--

CREATE TABLE `emp_report` (
  `firstname` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_report`
--

INSERT INTO `emp_report` (`firstname`, `message`) VALUES
('arun', 'Hi, Arun we are coming to resolve the problem.'),
('arun', 'Hi, Arun we are coming to resolve the problem.');

-- --------------------------------------------------------

--
-- Table structure for table `public_login`
--

CREATE TABLE `public_login` (
  `user_id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_login`
--

INSERT INTO `public_login` (`user_id`, `password`) VALUES
('pub001', 'public'),
('pub002', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `public_report`
--

CREATE TABLE `public_report` (
  `firstname` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_report`
--

INSERT INTO `public_report` (`firstname`, `message`) VALUES
('arun', 'there is a small water problem in m block.'),
('arun', 'there is a small water problem in m block.'),
('Krishna', 'We need a water tanker in sector 4.');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`username`, `password`, `email`) VALUES
('sravan', 'sravan', 'ksravan605@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
