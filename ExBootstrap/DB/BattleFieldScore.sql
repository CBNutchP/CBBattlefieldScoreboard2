-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2015 at 10:34 AM
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
(1);

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
(1, 'A', ''),
(1, 'B', ''),
(1, 'C', ''),
(1, 'D', ''),
(1, 'E', '1'),
(1, 'F', '1'),
(1, 'G', ''),
(1, 'H', '');

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
(1, 'A', 3),
(1, 'B', 9),
(1, 'C', 11),
(1, 'D', 232),
(1, 'E', 0),
(1, 'F', 0),
(1, 'G', 66),
(1, 'H', 232);

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `Team` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Team`
--

INSERT INTO `Team` (`Team`) VALUES
('BLUE'),
('CYAN'),
('GREEN'),
('ORANGE'),
('PINK'),
('PURPLE'),
('RED'),
('YELLOW');

-- --------------------------------------------------------

--
-- Table structure for table `TurnTb`
--

CREATE TABLE IF NOT EXISTS `TurnTb` (
  `Turn` int(2) NOT NULL,
  `Team` varchar(1) NOT NULL,
  `Commander1` varchar(1) NOT NULL,
  `Commander2` varchar(1) NOT NULL,
  `PIT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TurnTb`
--

INSERT INTO `TurnTb` (`Turn`, `Team`, `Commander1`, `Commander2`, `PIT`) VALUES
(1, 'A', '', '', 3),
(1, 'B', '', '', 9),
(1, 'C', '', '', 2),
(1, 'D', '', '', 232),
(1, 'E', 'A', 'A', -2),
(1, 'F', 'A', 'A', -2),
(1, 'G', '', '', 66),
(1, 'H', '', '', 232);

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
-- Indexes for table `Team`
--
ALTER TABLE `Team`
  ADD PRIMARY KEY (`Team`);

--
-- Indexes for table `TurnTb`
--
ALTER TABLE `TurnTb`
  ADD PRIMARY KEY (`Turn`,`Team`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
