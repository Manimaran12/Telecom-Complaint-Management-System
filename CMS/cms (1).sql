-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 05:53 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `announce_id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`announce_id`, `type`, `content`) VALUES
('AN66000', 'for login', 'login.php'),
('AN66001', 'put feedback ', 'feedback.php');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `m_no` bigint(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `h_type` enum('2g','3g','4g') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `m_no`, `email`, `address`, `h_type`, `password`) VALUES
('8098135709', 'mani ', 8098135709, 'mani@gmail.com', 'bangalore', '3g', 'mani'),
('8765876578', 'PETER', 8765876578, 'peter@gmail.com', 'bangalore', '', 'peter123'),
('89898980098', 'peter1', 89898980098, 'peter1@gmail.com', 'jsks', '', 'peter123'),
('9090909090', 'nisheeth', 9090909090, 'nish@gmail.com', 'kanniyakumari', '', 'nish123'),
('E11003', 'peter1', 89898980098, 'peter1@gmail.com', 'jsks', '4g', 'peter123'),
('E11004', '', 0, '', '', '', ''),
('E11006', 'kss', 0, 'iss@kjsk.slks', 'skjsj', '', 'kikiki00'),
('E11007', 'kss', 0, 'iss@kjsk.slks', 'skjsj', '', 'kikiki00'),
('E11008', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_id` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_id`, `name`, `email`, `phone`, `address`, `pass`) VALUES
('E33002', 'gjj', 'rwrew', 0, 'jjds', 'kikikikiki');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `email`, `password`) VALUES
(1, 'mani@gmail.com', 'mani');

-- --------------------------------------------------------

--
-- Table structure for table `logu`
--

CREATE TABLE `logu` (
  `id` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `net_id` varchar(100) NOT NULL,
  `reg_id` varchar(100) NOT NULL,
  `complaint_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`net_id`, `reg_id`, `complaint_id`, `user_id`) VALUES
('NET66000', 'UC44000', 'COM99000', 'peter@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `net_com`
--

CREATE TABLE `net_com` (
  `com_id` varchar(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `department` varchar(30) NOT NULL DEFAULT 'network'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `net_com`
--

INSERT INTO `net_com` (`com_id`, `name`, `description`, `department`) VALUES
('COM99000', 'slow data', 'network speed is too slow', 'network'),
('COM99001', 'balance deduction', 'suddenly balance has drop', 'deduction'),
('COM99002', 'caller tune', 'de activate caller tune', 'valad'),
('COM99003', 'no network', 'network is not available', 'network'),
('COM99004', 'indoor network slow', 'network speed is poor while inside of buildeing', '');

-- --------------------------------------------------------

--
-- Table structure for table `raised_com`
--

CREATE TABLE `raised_com` (
  `ucom_id` varchar(100) NOT NULL,
  `com_id` varchar(100) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raised_com`
--

INSERT INTO `raised_com` (`ucom_id`, `com_id`, `user_id`, `department`) VALUES
('UC44000', 'COM99000', 'peter@gmail.com', 'network');

-- --------------------------------------------------------

--
-- Table structure for table `validity`
--

CREATE TABLE `validity` (
  `val_id` varchar(100) NOT NULL,
  `reg_id` varchar(100) NOT NULL,
  `complaint_id` varchar(100) NOT NULL,
  `user_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `value_added`
--

CREATE TABLE `value_added` (
  `va_id` varchar(100) NOT NULL,
  `reg_id` varchar(100) NOT NULL,
  `complaint_id` varchar(100) NOT NULL,
  `user_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`,`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logu`
--
ALTER TABLE `logu`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`net_id`);

--
-- Indexes for table `raised_com`
--
ALTER TABLE `raised_com`
  ADD PRIMARY KEY (`ucom_id`);

--
-- Indexes for table `value_added`
--
ALTER TABLE `value_added`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
