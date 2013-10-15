-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2013 at 12:38 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `android`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `occasion` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(40) NOT NULL,
  `event` varchar(40) NOT NULL,
  PRIMARY KEY (`occasion`,`date`,`time`,`event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`occasion`, `date`, `time`, `venue`, `event`) VALUES
('Acumen', '2013-10-14', '09:00:00', 'A2 hall', 'paper presentation'),
('Acumen', '2013-10-15', '10:30:00', 'Dept lab', 'Coding prelims'),
('Acumen', '2013-10-15', '12:00:00', 'Dept lab', 'Marketing prelims'),
('Acumen', '2013-10-15', '14:45:00', 'CSE201', 'Surprise prelims'),
('Dance if you can', '2013-10-15', '10:00:00', 'a2 hall', 'prelims'),
('Dance if you can', '2013-10-15', '16:00:00', 'Audi3', 'final showdown'),
('Dance if you can', '2013-10-15', '20:00:00', 'a2 hall', 'prize distribution'),
('Infotrek', '2013-10-17', '08:30:00', 'a12hall', 'Inauguration ceremony'),
('Infotrek', '2013-10-17', '20:00:00', 'a2 hall', 'prize distribution'),
('Pragyan', '2013-10-16', '09:00:00', 'a2 hall', 'create'),
('Robowars', '2013-10-16', '10:00:00', 'barn hall', 'written round'),
('Robowars', '2013-10-16', '14:00:00', 'oat ', 'battle ground'),
('Robowars', '2013-10-16', '19:00:00', 'a2 hall', 'prize distribution'),
('Tech Fiesta', '2013-10-15', '08:30:00', 'Audi3', 'Inauguration ceremony'),
('Tech Fiesta', '2013-10-15', '10:30:00', 'Audi3', 'Words war'),
('Tech Fiesta', '2013-10-15', '11:30:00', 'mca Hall', 'Quizzotica'),
('Tech Fiesta', '2013-10-15', '12:30:00', 'Dept lab', 'Semantica'),
('Tech Fiesta', '2013-10-15', '14:30:00', 'Audi3', 'Software presentation'),
('Tech Fiesta', '2013-10-15', '17:30:00', 'Audi3', 'valedictory ');

-- --------------------------------------------------------

--
-- Table structure for table `scheduler`
--

CREATE TABLE IF NOT EXISTS `scheduler` (
  `username` int(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `department` text NOT NULL,
  `occasion` varchar(40) NOT NULL,
  PRIMARY KEY (`username`,`occasion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduler`
--

INSERT INTO `scheduler` (`username`, `password`, `department`, `occasion`) VALUES
(205112046, '', '', ''),
(205112046, 'Nitt203', 'Computer Applications', 'Acumen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
