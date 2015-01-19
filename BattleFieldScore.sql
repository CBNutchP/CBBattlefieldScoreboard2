-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2015 at 04:11 AM
-- Server version: 5.6.22
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `BattleFieldScore`
--

-- --------------------------------------------------------

--
-- Table structure for table `CountTurn`
--

CREATE TABLE IF NOT EXISTS `CountTurn` (
  `Turn` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CountTurn`
--

INSERT INTO `CountTurn` (`Turn`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

-- --------------------------------------------------------

--
-- Table structure for table `KO`
--

CREATE TABLE IF NOT EXISTS `KO` (
  `Turn` int(11) NOT NULL,
  `Team` varchar(1) NOT NULL,
  `KO` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `KO`
--

INSERT INTO `KO` (`Turn`, `Team`, `KO`) VALUES
(0, '', ''),
(1, 'A', ''),
(1, 'B', ''),
(1, 'C', ''),
(1, 'D', ''),
(1, 'E', ''),
(1, 'F', ''),
(1, 'G', ''),
(1, 'H', ''),
(2, 'A', ''),
(2, 'B', ''),
(2, 'C', ''),
(2, 'D', ''),
(2, 'E', ''),
(2, 'F', ''),
(2, 'G', ''),
(2, 'H', ''),
(3, 'A', ''),
(3, 'B', '1'),
(3, 'C', ''),
(3, 'D', ''),
(3, 'E', ''),
(3, 'F', ''),
(3, 'G', ''),
(3, 'H', ''),
(4, 'A', ''),
(4, 'B', '1'),
(4, 'C', ''),
(4, 'D', ''),
(4, 'E', ''),
(4, 'F', ''),
(4, 'G', ''),
(4, 'H', ''),
(5, 'A', ''),
(5, 'B', '1'),
(5, 'C', ''),
(5, 'D', ''),
(5, 'E', ''),
(5, 'F', ''),
(5, 'G', ''),
(5, 'H', ''),
(6, 'A', ''),
(6, 'B', ''),
(6, 'C', ''),
(6, 'D', ''),
(6, 'E', ''),
(6, 'F', ''),
(6, 'G', ''),
(6, 'H', ''),
(7, 'A', ''),
(7, 'B', ''),
(7, 'C', ''),
(7, 'D', ''),
(7, 'E', ''),
(7, 'F', ''),
(7, 'G', ''),
(7, 'H', ''),
(8, 'A', ''),
(8, 'B', ''),
(8, 'C', ''),
(8, 'D', ''),
(8, 'E', ''),
(8, 'F', ''),
(8, 'G', ''),
(8, 'H', ''),
(9, 'A', ''),
(9, 'B', ''),
(9, 'C', ''),
(9, 'D', ''),
(9, 'E', ''),
(9, 'F', ''),
(9, 'G', ''),
(9, 'H', ''),
(10, 'A', ''),
(10, 'B', ''),
(10, 'C', ''),
(10, 'D', ''),
(10, 'E', ''),
(10, 'F', ''),
(10, 'G', ''),
(10, 'H', ''),
(11, 'A', ''),
(11, 'B', ''),
(11, 'C', ''),
(11, 'D', ''),
(11, 'E', ''),
(11, 'F', ''),
(11, 'G', ''),
(11, 'H', ''),
(12, 'A', ''),
(12, 'B', ''),
(12, 'C', ''),
(12, 'D', ''),
(12, 'E', ''),
(12, 'F', ''),
(12, 'G', ''),
(12, 'H', ''),
(13, 'A', ''),
(13, 'B', ''),
(13, 'C', ''),
(13, 'D', ''),
(13, 'E', ''),
(13, 'F', ''),
(13, 'G', ''),
(13, 'H', ''),
(14, 'A', ''),
(14, 'B', ''),
(14, 'C', ''),
(14, 'D', ''),
(14, 'E', ''),
(14, 'F', ''),
(14, 'G', ''),
(14, 'H', ''),
(15, 'A', ''),
(15, 'B', ''),
(15, 'C', ''),
(15, 'D', ''),
(15, 'E', ''),
(15, 'F', ''),
(15, 'G', ''),
(15, 'H', '');

-- --------------------------------------------------------

--
-- Table structure for table `PenaltyTb`
--

CREATE TABLE IF NOT EXISTS `PenaltyTb` (
  `Turn` int(2) NOT NULL,
  `Team` varchar(1) NOT NULL,
  `Foul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PenaltyTb`
--

INSERT INTO `PenaltyTb` (`Turn`, `Team`, `Foul`) VALUES
(0, '', 0),
(0, 'B', 0),
(0, 'D', 0),
(0, 'E', 0),
(1, 'A', -3),
(1, 'B', 0),
(1, 'C', 0),
(1, 'D', 0),
(1, 'E', -1),
(1, 'F', 0),
(1, 'G', 0),
(1, 'H', 0),
(2, 'A', 0),
(2, 'B', 0),
(2, 'C', 0),
(2, 'D', 0),
(2, 'E', 0),
(2, 'F', 0),
(2, 'G', 0),
(2, 'H', 0),
(3, 'A', 0),
(3, 'B', 0),
(3, 'C', 0),
(3, 'D', 0),
(3, 'E', 0),
(3, 'F', 0),
(3, 'G', 0),
(3, 'H', 0),
(4, 'A', 0),
(4, 'B', 0),
(4, 'C', 0),
(4, 'D', 0),
(4, 'E', 0),
(4, 'F', 0),
(4, 'G', 0),
(4, 'H', 0),
(5, 'A', 0),
(5, 'B', 0),
(5, 'C', 0),
(5, 'D', 0),
(5, 'E', 0),
(5, 'F', 0),
(5, 'G', 0),
(5, 'H', 0),
(6, 'A', 0),
(6, 'B', 0),
(6, 'C', 0),
(6, 'D', 0),
(6, 'E', 0),
(6, 'F', 0),
(6, 'G', 0),
(6, 'H', 0),
(7, 'A', 0),
(7, 'B', 0),
(7, 'C', 0),
(7, 'D', 0),
(7, 'E', 0),
(7, 'F', 0),
(7, 'G', 0),
(7, 'H', 0),
(8, 'A', 0),
(8, 'B', 0),
(8, 'C', 0),
(8, 'D', 0),
(8, 'E', 0),
(8, 'F', 0),
(8, 'G', 0),
(8, 'H', 0),
(9, 'A', 0),
(9, 'B', 0),
(9, 'C', 0),
(9, 'D', 0),
(9, 'E', 0),
(9, 'F', 0),
(9, 'G', 0),
(9, 'H', 0),
(10, 'A', 0),
(10, 'B', 0),
(10, 'C', 0),
(10, 'D', 0),
(10, 'E', 0),
(10, 'F', 0),
(10, 'G', 0),
(10, 'H', 0),
(11, 'A', 0),
(11, 'B', 0),
(11, 'C', 0),
(11, 'D', 0),
(11, 'E', 0),
(11, 'F', 0),
(11, 'G', 0),
(11, 'H', 0),
(12, 'A', 0),
(12, 'B', 0),
(12, 'C', 0),
(12, 'D', 0),
(12, 'E', 0),
(12, 'F', 0),
(12, 'G', 0),
(12, 'H', 0),
(13, 'A', 0),
(13, 'B', 0),
(13, 'C', 0),
(13, 'D', 0),
(13, 'E', 0),
(13, 'F', 0),
(13, 'G', 0),
(13, 'H', 0),
(14, 'A', 0),
(14, 'B', 0),
(14, 'C', 0),
(14, 'D', 0),
(14, 'E', 0),
(14, 'F', 0),
(14, 'G', 0),
(14, 'H', 0),
(15, 'A', 0),
(15, 'B', 0),
(15, 'C', 0),
(15, 'D', 0),
(15, 'E', 0),
(15, 'F', 0),
(15, 'G', 0),
(15, 'H', 0);

-- --------------------------------------------------------

--
-- Table structure for table `TurnTb`
--

CREATE TABLE IF NOT EXISTS `TurnTb` (
  `Turn` int(2) NOT NULL,
  `Team` varchar(1) NOT NULL,
  `Commander1` varchar(1) NOT NULL,
  `Commannder2` varchar(1) NOT NULL,
  `PIT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TurnTb`
--

INSERT INTO `TurnTb` (`Turn`, `Team`, `Commander1`, `Commannder2`, `PIT`) VALUES
(1, 'A', 'A', 'A', 0),
(1, 'B', 'A', 'D', -4),
(1, 'C', 'A', 'A', 9),
(1, 'D', 'A', 'D', 1),
(1, 'E', 'D', 'A', 0),
(1, 'F', 'D', 'D', -5),
(1, 'G', 'A', 'A', 3),
(1, 'H', 'D', 'D', 0),
(2, 'A', '', '', -5),
(2, 'B', 'A', 'D', 1),
(2, 'C', 'D', 'D', 0),
(2, 'D', '', '', 0),
(2, 'E', '', '', 0),
(2, 'F', '', '', 0),
(2, 'G', '', '', 0),
(2, 'H', '', '', 0),
(3, 'A', '', '', -5),
(3, 'B', 'A', 'D', 1),
(3, 'C', 'D', 'D', 0),
(3, 'D', 'C', 'C', 0),
(3, 'E', 'A', 'A', 3),
(3, 'F', '', '', 0),
(3, 'G', '', '', 0),
(3, 'H', '', '', 0),
(4, 'A', '', '', -5),
(4, 'B', 'A', 'D', 1),
(4, 'C', 'D', 'D', 0),
(4, 'D', 'C', 'C', 0),
(4, 'E', 'A', 'A', 3),
(4, 'F', '', '', 0),
(4, 'G', '', '', 0),
(4, 'H', '', '', 0),
(5, 'A', '', '', -5),
(5, 'B', 'A', 'D', 1),
(5, 'C', 'D', 'D', 0),
(5, 'D', 'C', 'C', 0),
(5, 'E', 'A', 'A', 3),
(5, 'F', '', '', 0),
(5, 'G', '', '', 0),
(5, 'H', '', '', 0),
(6, 'A', '', '', 0),
(6, 'B', 'A', 'D', 1),
(6, 'C', 'D', 'D', 0),
(6, 'D', 'C', 'C', 0),
(6, 'E', 'A', 'A', 3),
(6, 'F', '', '', 0),
(6, 'G', '', '', 0),
(6, 'H', '', '', 0),
(7, 'A', '', '', 0),
(7, 'B', 'A', 'D', 1),
(7, 'C', 'D', 'D', 0),
(7, 'D', 'C', 'C', 0),
(7, 'E', 'A', 'A', 3),
(7, 'F', '', '', 0),
(7, 'G', '', '', 0),
(7, 'H', '', '', 0),
(8, 'A', '', '', 0),
(8, 'B', 'A', 'D', 1),
(8, 'C', 'D', 'D', 0),
(8, 'D', 'C', 'C', 0),
(8, 'E', 'A', 'A', 3),
(8, 'F', '', '', 0),
(8, 'G', '', '', 0),
(8, 'H', '', '', 0),
(9, 'A', '', '', 0),
(9, 'B', 'A', 'D', 1),
(9, 'C', 'D', 'D', 0),
(9, 'D', 'C', 'C', 0),
(9, 'E', 'A', 'A', 3),
(9, 'F', '', '', 0),
(9, 'G', '', '', 0),
(9, 'H', '', '', 0),
(10, 'A', '', '', 0),
(10, 'B', '', '', 0),
(10, 'C', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CountTurn`
--
ALTER TABLE `CountTurn`
  ADD PRIMARY KEY (`Turn`);

--
-- Indexes for table `KO`
--
ALTER TABLE `KO`
  ADD PRIMARY KEY (`Turn`,`Team`);

--
-- Indexes for table `PenaltyTb`
--
ALTER TABLE `PenaltyTb`
  ADD PRIMARY KEY (`Turn`,`Team`);

--
-- Indexes for table `TurnTb`
--
ALTER TABLE `TurnTb`
  ADD PRIMARY KEY (`Turn`,`Team`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
