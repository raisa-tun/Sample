-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 12:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('DIU', '123');

-- --------------------------------------------------------

--
-- Table structure for table `csetable`
--

CREATE TABLE `csetable` (
  `Classroom no.` varchar(20) NOT NULL,
  `Time schedule` varchar(20) NOT NULL,
  `Available/Block` varchar(20) NOT NULL,
  `Teacher Initial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt5table`
--

CREATE TABLE `dt5table` (
  `Classroom no.` varchar(20) NOT NULL,
  `Time schedule` varchar(20) NOT NULL,
  `Available/Block` varchar(20) NOT NULL,
  `Teacher Initial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintable`
--

CREATE TABLE `maintable` (
  `Classroom no.` varchar(20) NOT NULL,
  `Time schedule` varchar(20) NOT NULL,
  `Available/Block` varchar(20) NOT NULL,
  `Teacher Initial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `Email`, `Password`, `Category`) VALUES
('tun', 'raisa26tabassum@gmai', '123', 'on'),
('spark', 'tabassum15-6022@diu.', '345', 'on'),
('nos', 'noshin.tabassum852@g', '567', 'on'),
('labib', 'labib@gmail.om', '678', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Username` varchar(20) NOT NULL,
  `Purpose` varchar(20) NOT NULL,
  `Room` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Username`, `Purpose`, `Room`, `Contact`, `Email`, `Password`) VALUES
('tun', 'dcv', '304', '2345', 'raisa26tabassum@gmai', '123');

-- --------------------------------------------------------

--
-- Table structure for table `visitordt5`
--

CREATE TABLE `visitordt5` (
  `Username` varchar(20) NOT NULL,
  `Purpose` varchar(20) NOT NULL,
  `Room` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitordt5`
--

INSERT INTO `visitordt5` (`Username`, `Purpose`, `Room`, `Contact`, `Email`, `Password`) VALUES
('spark', 'dgf', '243', 'zxc', 'noshin.tabassum852@g', '123');

-- --------------------------------------------------------

--
-- Table structure for table `visitormain`
--

CREATE TABLE `visitormain` (
  `Username` varchar(20) NOT NULL,
  `Purpose` varchar(20) NOT NULL,
  `Room` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
