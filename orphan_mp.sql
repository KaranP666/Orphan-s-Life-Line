-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 06:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphan_mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_form`
--

CREATE TABLE `ad_form` (
  `fname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `height` int(100) DEFAULT NULL,
  `weight` int(100) DEFAULT NULL,
  `birth_mk` varchar(200) DEFAULT NULL,
  `add_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_form`
--

INSERT INTO `ad_form` (`fname`, `gender`, `age`, `location`, `height`, `weight`, `birth_mk`, `add_info`) VALUES
('KARAN', 'male', 5, 'mulund', 5, 15, 'NOTHING', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` text DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES
('karan', 'gamerbuddy229@gmail.com', 'Hello'),
('varun', 'gamerbuddy229@gmail.com', 'hello'),
('NIKHIL', 'gamerbuddy229@gmail.com', 'HELLO');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `DName` varchar(200) DEFAULT NULL,
  `Contactno` int(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DAddress` varchar(200) DEFAULT NULL,
  `Donation` varchar(200) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DName`, `Contactno`, `Email`, `DAddress`, `Donation`, `Description`) VALUES
('varun', 0, 'vkvk47447@gmail.com', 'jalgaon', 'Toys', 'NOTHING');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
