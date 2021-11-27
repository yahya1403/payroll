-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `uname`, `pass`, `created_at`) VALUES
(1, 'admin', 'admin', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `id` int(11) NOT NULL,
  `ad_code` varchar(200) NOT NULL,
  `ad_name` varchar(500) NOT NULL,
  `ad_flag` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`id`, `ad_code`, `ad_name`, `ad_flag`, `created_at`, `updated_at`) VALUES
(1, 'adcode', 'ad1', 'adf', '2021-11-24 14:32:31', '2021-11-24 14:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `emp_code` int(11) NOT NULL,
  `bank_code` varchar(200) NOT NULL,
  `branch_code` varchar(200) NOT NULL,
  `acc_number` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `emp_code`, `bank_code`, `branch_code`, `acc_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'b001', 'br01', 'ac01', '2021-11-27 03:12:05', '2021-11-27 03:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(200) NOT NULL,
  `branch_code` varchar(100) NOT NULL,
  `acc_code` varchar(100) NOT NULL,
  `bsp_code` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_name`, `branch_code`, `acc_code`, `bsp_code`, `created_at`, `updated_at`) VALUES
(1, 'b1', 'code1', 'a1', 'depname', '2021-11-23 14:40:50', '2021-11-23 14:40:50'),
(4, 'sample', 'sampleb1', 'sample', 'sample', '2021-11-25 14:12:36', '2021-11-25 14:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dep_code` varchar(200) NOT NULL,
  `dep_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_code`, `dep_name`, `created_at`, `updated_at`) VALUES
(1, 'depcode', 'depname', '2021-11-22 14:59:07', '2021-11-22 14:59:07'),
(3, 'sampledep', 'sampledep', '2021-11-25 14:12:21', '2021-11-25 14:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `div_code` varchar(50) NOT NULL,
  `div_name` varchar(200) NOT NULL,
  `acc_code` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `div_code`, `div_name`, `acc_code`, `created_at`, `updated_at`) VALUES
(1, 'code1', 'division', 'account', '2021-11-21 04:48:47', '2021-11-21 04:48:47'),
(5, 'sample', 'sample', 'sample', '2021-11-25 14:12:04', '2021-11-25 14:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_code` varchar(100) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `division` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `occupation` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `d_o_b` varchar(50) NOT NULL,
  `date_of_join` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `emp_address` varchar(500) NOT NULL,
  `basic_pay` varchar(20) NOT NULL,
  `income_tax` varchar(20) NOT NULL,
  `npf` varchar(50) NOT NULL,
  `npf_per` varchar(20) NOT NULL,
  `npf_number` varchar(20) NOT NULL,
  `emp_type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_code`, `first_name`, `surname`, `gender`, `division`, `department`, `occupation`, `branch`, `d_o_b`, `date_of_join`, `mobile_no`, `emp_address`, `basic_pay`, `income_tax`, `npf`, `npf_per`, `npf_number`, `emp_type`, `created_at`, `updated_at`) VALUES
(1, 'emp1', 'md', 'yahya', 'male', 1, 1, 1, 1, '2021-11-10', '2021-11-24', '1234567890', '232 dsd', '200', '2', '200', '10', 'N001', 'full-time', '2021-11-25 13:54:27', '2021-11-25 13:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `leave_master`
--

CREATE TABLE `leave_master` (
  `id` int(11) NOT NULL,
  `leave_code` varchar(200) NOT NULL,
  `pp_ending` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `from_date` varchar(100) NOT NULL,
  `to_date` varchar(100) NOT NULL,
  `hours` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id` int(11) NOT NULL,
  `occu_name` varchar(200) NOT NULL,
  `occu_code` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id`, `occu_name`, `occu_code`, `created_at`, `updated_at`) VALUES
(1, 'occupation', 'code', '2021-11-23 15:08:17', '2021-11-23 15:08:17'),
(4, 'sample', 'sampleocc', '2021-11-25 14:12:47', '2021-11-25 14:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_master`
--
ALTER TABLE `leave_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leave_master`
--
ALTER TABLE `leave_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
