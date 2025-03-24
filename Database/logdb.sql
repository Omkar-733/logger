-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 06:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `password`) VALUES
('admin', 4321),
('ram', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `st_pin` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `Labs` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `start` time(6) NOT NULL,
  `end` time(6) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`Labs`, `sem`, `status`, `start`, `end`, `duration`) VALUES
('DBMS', '3-1', 0, '00:00:00.000000', '00:00:00.000000', 4),
('AITT', '3-1', 0, '00:00:00.000000', '00:00:00.000000', 0),
('OPPS', '2-2', 0, '00:00:00.000000', '00:00:00.000000', 0),
('CN', '2-2', 0, '00:00:00.000000', '00:00:00.000000', 0),
('WT', '3-2', 0, '00:00:00.000000', '00:00:00.000000', 0),
('Python', '2-1', 0, '00:00:00.000000', '00:00:00.000000', 5),
('DS', '2-1', 0, '00:00:00.000000', '00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `date` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `lab_name` varchar(20) NOT NULL,
  `st_year` int(10) NOT NULL,
  `st_pin` varchar(20) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `com_no` int(10) NOT NULL,
  `client_id` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `sem` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`date`, `time`, `lab_name`, `st_year`, `st_pin`, `st_name`, `com_no`, `client_id`, `created_at`, `sem`) VALUES
('24/03/25', '22:16:37', 'DBMS', 2022, '22331A0585', 'xyz', 6, '01dbe1d034b169a92fb739ddd5c0cd0973dd45ac0b0e1abb669fc7ab633794fd', '2025-03-24 22:16:37', '3-1'),
('28/12/24', '04:31:00', 'AITT', 2022, '22331A0585', 'xyz', 4, '06beb6ee5adf9f680cd62a851f8b19619999e248078e4a8554ea6616e347cf83', '2024-12-28 16:31:00', '3-1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_year` int(10) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_pin` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `st_phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_year`, `st_name`, `st_pin`, `password`, `gender`, `st_phone`) VALUES
(2022, 'John Doe', '1234576', '1234576', 'Male', 9876543210),
(2022, 'xyz', '22331A0585', '1', 'Female', 999988877),
(2023, 'Bob Brown', '3456778', '3456778', 'Male', 6543210987),
(2022, 'Jane Smith', '6543271', '6543271', 'Female', 8765432109),
(2023, 'Alice Johnson', '7890172', '7890172', 'Female', 7654321098),
(2024, 'Charlie Davis', '9012634', '9012634', 'Other', 5432109876);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_pin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
