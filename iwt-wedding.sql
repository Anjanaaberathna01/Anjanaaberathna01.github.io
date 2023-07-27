-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt-wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankpaymentpage`
--

CREATE TABLE `bankpaymentpage` (
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uadress` varchar(200) NOT NULL,
  `ucity` varchar(50) NOT NULL,
  `ustate` varchar(50) NOT NULL,
  `uzip` varchar(20) NOT NULL,
  `unameoncard` varchar(100) NOT NULL,
  `ucardnumber` varchar(50) NOT NULL,
  `uexpmonth` varchar(20) NOT NULL,
  `uexpyear` varchar(10) NOT NULL,
  `ucvv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankpaymentpage`
--

INSERT INTO `bankpaymentpage` (`uname`, `uemail`, `uadress`, `ucity`, `ustate`, `uzip`, `unameoncard`, `ucardnumber`, `uexpmonth`, `uexpyear`, `ucvv`) VALUES
('dilaksha', 'dilaksha@gmail.com', 'no.25/galle', 'galle', 'sri lanka', '125643', 'w.v.d.lakshan', '0774732654', '05', '2026', '123'),
('dilaksha', 'dilaksha@gmail.com', 'no.25/galle', 'galle', 'sri lanka', '125643', 'w.v.d.lakshan', '0774732654', '05', '2026', '123');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CID` int(11) NOT NULL,
  `NIC` int(15) DEFAULT NULL,
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pin` int(6) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `upassword` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`CID`, `NIC`, `F_Name`, `L_Name`, `address`, `city`, `pin`, `Email`, `upassword`, `type`, `Contact`) VALUES
(0, NULL, 'Dilaksha', 'Lakshan', NULL, NULL, 0, 'dexler750@gmail.com', '12345', 'user', '07745686235'),
(0, NULL, 'Dilaksha', 'Lakshan', NULL, NULL, 0, 'nipun@gmail.com', '123', 'user', '0774730315');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
