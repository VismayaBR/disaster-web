-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 11:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp_tb`
--

CREATE TABLE `camp_tb` (
  `camp_id` int(20) NOT NULL,
  `camp_name` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `land_mark` varchar(20) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_tb`
--

INSERT INTO `camp_tb` (`camp_id`, `camp_name`, `area`, `land_mark`, `phone_no`, `email`) VALUES
(1, 'camp 1', 'kozhikode', 'near bus stand', '7589641230', 'camp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `user_name`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'panchayath1', 'panchayath123', 'panchayath'),
(3, 'organizer1', 'org1', 'camporganizer'),
(4, 'volunteer1', 'vol123', 'volunteer'),
(7, 'user', 'user123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tb`
--

CREATE TABLE `notification_tb` (
  `notify_id` int(20) NOT NULL,
  `camp_id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_tb`
--

INSERT INTO `notification_tb` (`notify_id`, `camp_id`, `title`, `message`) VALUES
(1, 1, 'Availability', 'camp1 have somany vacancies');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `o_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `place` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`o_id`, `login_id`, `name`, `email`, `mobile`, `place`, `status`) VALUES
(1, 3, 'organizer1', 'org1@gmail.com', '7425896312', 'calicut', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panchayath`
--

CREATE TABLE `panchayath` (
  `p_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panchayath`
--

INSERT INTO `panchayath` (`p_id`, `login_id`, `username`, `area`, `mobile`, `email`, `status`) VALUES
(1, 2, 'panchyath1', 'kozhikode', '7485962356', 'panchayath1@gmail.co', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `register_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area_id` int(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `login_id` int(20) NOT NULL,
  `approve_status` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_tb`
--

CREATE TABLE `requirements_tb` (
  `requirement_id` int(20) NOT NULL,
  `materials_required` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements_tb`
--

INSERT INTO `requirements_tb` (`requirement_id`, `materials_required`, `quantity`) VALUES
(1, 'water', 100);

-- --------------------------------------------------------

--
-- Table structure for table `service_tb`
--

CREATE TABLE `service_tb` (
  `service_id` int(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tb`
--

INSERT INTO `service_tb` (`service_id`, `heading`, `service`) VALUES
(2, 'vehicle', 'Vehicle services are available for 24 hours');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `login_id`, `email`, `mobile`, `username`, `password`) VALUES
(1, 7, 'user@gmail.com', '0896523147', 'user', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `volnoti`
--

CREATE TABLE `volnoti` (
  `noti_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volnoti`
--

INSERT INTO `volnoti` (`noti_id`, `title`, `content`) VALUES
(1, 'issues', 'having some issues');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `v_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`v_id`, `login_id`, `name`, `email`, `mobile`, `status`) VALUES
(3, 5, 'volunteer1', 'vol1@gmail.om', '1596325874', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp_tb`
--
ALTER TABLE `camp_tb`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `notification_tb`
--
ALTER TABLE `notification_tb`
  ADD PRIMARY KEY (`notify_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `panchayath`
--
ALTER TABLE `panchayath`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `requirements_tb`
--
ALTER TABLE `requirements_tb`
  ADD PRIMARY KEY (`requirement_id`);

--
-- Indexes for table `service_tb`
--
ALTER TABLE `service_tb`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `volnoti`
--
ALTER TABLE `volnoti`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp_tb`
--
ALTER TABLE `camp_tb`
  MODIFY `camp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification_tb`
--
ALTER TABLE `notification_tb`
  MODIFY `notify_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panchayath`
--
ALTER TABLE `panchayath`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `register_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirements_tb`
--
ALTER TABLE `requirements_tb`
  MODIFY `requirement_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_tb`
--
ALTER TABLE `service_tb`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volnoti`
--
ALTER TABLE `volnoti`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
