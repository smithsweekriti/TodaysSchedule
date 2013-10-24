-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2013 at 11:33 AM
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
  `sno` int(11) NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(40) NOT NULL,
  `event` varchar(40) NOT NULL,
  PRIMARY KEY (`occasion`,`date`,`time`,`event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`occasion`, `date`, `sno`, `time`, `venue`, `event`) VALUES
('1', '0000-00-00', 2013, '09:00:00', 'CSE201', 'Coding'),
('Acumen', '2013-10-14', 1, '09:00:00', 'A2 hall', 'paper presentation'),
('Acumen', '2013-10-24', 2, '10:30:00', 'Dept lab', 'Coding prelims'),
('Acumen', '2013-10-24', 3, '12:00:00', 'Dept lab', 'Marketing prelims'),
('Acumen', '2013-10-24', 4, '14:45:00', 'CSE201', 'Surprise prelims'),
('Dance if you can', '2013-10-24', 1, '10:00:00', 'a2 hall', 'prelims'),
('Dance if you can', '2013-10-24', 2, '16:00:00', 'Audi3', 'final showdown'),
('Dance if you can', '2013-10-24', 3, '20:00:00', 'a2 hall', 'prize distribution'),
('Infotrek', '2013-10-17', 1, '08:30:00', 'a12hall', 'Inauguration ceremony'),
('Infotrek', '2013-10-17', 2, '20:00:00', 'a2 hall', 'prize distribution'),
('Pragyan', '2013-10-16', 1, '09:00:00', 'a2 hall', 'create'),
('Robowars', '2013-10-16', 1, '10:00:00', 'barn hall', 'written round'),
('Robowars', '2013-10-16', 2, '14:00:00', 'oat ', 'battle ground'),
('Robowars', '2013-10-16', 3, '19:00:00', 'a2 hall', 'prize distribution'),
('Tech Fiesta', '2013-10-25', 1, '08:30:00', 'Audi3', 'Inauguration ceremony'),
('Tech Fiesta', '2013-10-25', 2, '10:30:00', 'Audi3', 'Words war'),
('Tech Fiesta', '2013-10-25', 3, '11:30:00', 'mca Hall', 'Quizzotica'),
('Tech Fiesta', '2013-10-25', 4, '12:30:00', 'Dept lab', 'Semantica'),
('Tech Fiesta', '2013-10-25', 5, '14:30:00', 'Audi3', 'Software presentation'),
('Tech Fiesta', '2013-10-25', 6, '17:30:00', 'Audi3', 'valedictory '),
('Techkriti', '2013-10-24', 2013, '14:30:00', 'CSE201', 'Debugging');

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
(205112013, 'arun', 'Architecture', 'Infotrek'),
(205112013, 'arun', 'Architecture', 'Pragyan'),
(205112013, 'arun', 'Architecture', 'Tech Fiesta'),
(205112046, 'shagun@1985', 'Computer Applications', 'Acumen'),
(205112046, 'shagun@1985', 'Computer Applications', 'Dance if you can'),
(205112046, 'shagun@1985', 'Computer Applications', 'Robowars'),
(205112046, 'shagun@1985', 'Computer Applications', 'Techkriti');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
