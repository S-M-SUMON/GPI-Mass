-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2024 at 11:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mass_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_member`
--

CREATE TABLE `add_member` (
  `am_id` int NOT NULL,
  `am_name` varchar(100) NOT NULL,
  `sat` varchar(100) NOT NULL DEFAULT '0',
  `sun` varchar(100) NOT NULL DEFAULT '0',
  `mon` varchar(100) NOT NULL DEFAULT '0',
  `tue` varchar(100) NOT NULL DEFAULT '0',
  `wed` varchar(100) NOT NULL DEFAULT '0',
  `thu` varchar(100) NOT NULL DEFAULT '0',
  `fri` varchar(100) NOT NULL DEFAULT '0',
  `sate` varchar(100) NOT NULL DEFAULT '0',
  `total` varchar(9999) NOT NULL DEFAULT '0',
  `amount` varchar(11) NOT NULL DEFAULT '0',
  `am_user_id` varchar(100) NOT NULL,
  `am_username` varchar(100) NOT NULL,
  `am_user_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `add_member`
--

INSERT INTO `add_member` (`am_id`, `am_name`, `sat`, `sun`, `mon`, `tue`, `wed`, `thu`, `fri`, `sate`, `total`, `amount`, `am_user_id`, `am_username`, `am_user_time`) VALUES
(105, 'sanjit', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', ''),
(106, 'sumon', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', ''),
(107, 'sumon', '1', '3', '3', '3', '3', '3', '3', '2', '21', '200', '26', 'sumon', '1724282696'),
(108, 'sumon', '1', '6', '2', '0', '0', '0', '0', '0', '9', '500', '31', 'sanjit', '1725433142'),
(109, 'Rinah Sharp', '4', '8', '0', '0', '0', '0', '0', '0', '12', '0', '31', 'sanjit', '1725433142'),
(110, 'sumon', '0', '0', '0', '0', '0', '0', '0', '0', '0', '500', '31', 'sanjit', '1725433142'),
(111, 'sumon', '1', '3', '3', '3', '2', '1', '2', '3', '18', '300', '26', 'sumon', '1724282696'),
(112, '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '<br />\r\n<b>Warning</b>:  Undefined array key ', '<br />\r\n<b>Warning</b>:  Undefined array key ', '<br />\r\n<b>Warning</b>:  Undefined array key '),
(113, 'Rinah Sharp', '1', '0', '0', '0', '0', '0', '0', '0', '1', '600', '26', 'sumon', '1724282696'),
(114, 'tamim', '0', '0', '0', '0', '0', '0', '0', '0', '0', '400', '26', 'sumon', '1724282696'),
(115, 'shoaib', '0', '0', '0', '0', '0', '0', '0', '0', '0', '600', '26', 'sumon', '1724282696'),
(116, 'sumon', '2', '4', '2', '0', '0', '0', '0', '0', '8', '200', '30', 'ashik', '1724379839');

-- --------------------------------------------------------

--
-- Table structure for table `aunty_bill`
--

CREATE TABLE `aunty_bill` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `month_name` varchar(100) NOT NULL,
  `auth_id` varchar(100) NOT NULL,
  `pament_date` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `aunty_bill`
--

INSERT INTO `aunty_bill` (`id`, `name`, `month_name`, `auth_id`, `pament_date`, `amount`) VALUES
(2, 'sumon fd', 'August', '1', '23 Aug 2024', '200'),
(3, 'sumon@', 'August', '2', '23 Aug 2024', '0'),
(4, '090', 'August', '2', '23 Aug 2024', '0'),
(6, 'asdfghjklqx', 'August', '2', '23 Aug 2024', '0'),
(7, 'sumon', 'August', '1', '07 Sep 2024', '20'),
(8, 'sumon fd', 'August', '1', '04 Sep 2024', '200'),
(9, 'sumon', 'September', '3', '07 Sep 2024', '200'),
(10, 'kutu kutu', 'September', '3', '07 Sep 2024', '200');

-- --------------------------------------------------------

--
-- Table structure for table `aunty_bill_month`
--

CREATE TABLE `aunty_bill_month` (
  `id` int NOT NULL,
  `month_name` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `aunty_bill_month`
--

INSERT INTO `aunty_bill_month` (`id`, `month_name`, `date`, `time`) VALUES
(1, 'August', '23-08-24', '1724380985'),
(2, 'August', '23-08-24', '1724380988'),
(3, 'September', '04-09-24', '1725433500');

-- --------------------------------------------------------

--
-- Table structure for table `khori_bill`
--

CREATE TABLE `khori_bill` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `month_name` varchar(100) NOT NULL,
  `auth_id` varchar(11) NOT NULL,
  `pament_date` varchar(100) NOT NULL,
  `amount` varchar(200) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `khori_bill`
--

INSERT INTO `khori_bill` (`id`, `name`, `month_name`, `auth_id`, `pament_date`, `amount`) VALUES
(25, 'sumon', 'August', '65', '23 Aug 2024', '30'),
(26, 'asdfghjklqx', 'August', '65', '23 Aug 2024', '300'),
(27, 'sumon', 'September', '68', '07 Sep 2024', '12'),
(28, 'sumon', 'September', '68', '07 Sep 2024', '500');

-- --------------------------------------------------------

--
-- Table structure for table `khori_bill_month`
--

CREATE TABLE `khori_bill_month` (
  `id` int NOT NULL,
  `month_name` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `khori_bill_month`
--

INSERT INTO `khori_bill_month` (`id`, `month_name`, `date`, `time`) VALUES
(65, 'August', '23-08-24', '1724379744'),
(66, 'August', '23-08-24', '1724380190'),
(67, 'August', '23-08-24', '1724380191'),
(68, 'September', '07-09-24', '1725743928');

-- --------------------------------------------------------

--
-- Table structure for table `total_cost`
--

CREATE TABLE `total_cost` (
  `cost_id` int NOT NULL,
  `bar_name` varchar(11) NOT NULL,
  `item` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `amount` varchar(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `user_time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `total_cost`
--

INSERT INTO `total_cost` (`cost_id`, `bar_name`, `item`, `date`, `amount`, `user_id`, `user_name`, `user_time`) VALUES
(44, 'রবিবার', 'মাছ', '04 Sep 2024', '500', '31', 'sanjit', '1725433142'),
(45, 'রবিবার', 'mach', '04 Sep 2024', '500', '31', 'sanjit', '1725433142'),
(46, 'রবিবার', 'মাছ', '07 Sep 2024', '200', '26', 'sumon', '1724282696'),
(47, 'শনিবার', 'ডাউল', '07 Sep 2024', '500', '26', 'sumon', '1724282696'),
(50, 'শনিবার', 'মাছ', '07 Sep 2024', '500', '26', 'sumon', '1724282696'),
(51, 'মঙ্গলবার', 'ডাউল', '07 Sep 2024', '500', '26', 'sumon', '1724282696'),
(52, 'shonibar', 'মাছ', '07 Sep 2024', '500', '30', 'ashik', '1724379839');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `username`, `time`, `date`, `password`, `role`) VALUES
(26, 'S M', 'Sumon', 'sumon', '1724282696', '21-Aug-2024', '023267', '1'),
(28, 'md', 'anisur', 'anisur', '1724282963', '21-Aug-2024', '023267', '3'),
(29, 'MD', 'Tamim', 'tamim', '1724284737', '21-Aug-2024', '023267', '4'),
(30, 'ashik', 'sheik', 'ashik', '1724379839', '23-Aug-2024', '023267', '2'),
(31, 'sanjit', 'roy', 'sanjit', '1725433142', '04-Sep-2024', '023267', '2'),
(32, 'sanjit', 'roy', 'sanjit', '1725434249', '04-Sep-2024', '023267', '2'),
(33, 'ashik', 'sheik', 'ashik', '1725749328', '07-Sep-2024', '023267', '2'),
(34, 'ashik', 'sheik', 'ashik', '1725749345', '07-Sep-2024', '023267', '2'),
(35, 'sanjit', 'roy', 'sanjit', '1725749878', '07-Sep-2024', '023267', '2'),
(36, 'ashik', 'sheik', 'ashik', '1725750134', '07-Sep-2024', '023267', '2'),
(37, 'ashik', 'sheik', 'ashik', '1725750137', '07-Sep-2024', '023267', '2'),
(38, 'ashik', 'sheik', 'ashik', '1725750139', '07-Sep-2024', '023267', '2'),
(39, 'ashik', 'sheik', 'ashik', '1725750140', '07-Sep-2024', '023267', '2'),
(40, 'ashik', 'sheik', 'ashik', '1725750143', '07-Sep-2024', '023267', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_member`
--
ALTER TABLE `add_member`
  ADD PRIMARY KEY (`am_id`);

--
-- Indexes for table `aunty_bill`
--
ALTER TABLE `aunty_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aunty_bill_month`
--
ALTER TABLE `aunty_bill_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khori_bill`
--
ALTER TABLE `khori_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khori_bill_month`
--
ALTER TABLE `khori_bill_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_cost`
--
ALTER TABLE `total_cost`
  ADD PRIMARY KEY (`cost_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_member`
--
ALTER TABLE `add_member`
  MODIFY `am_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `aunty_bill`
--
ALTER TABLE `aunty_bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `aunty_bill_month`
--
ALTER TABLE `aunty_bill_month`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khori_bill`
--
ALTER TABLE `khori_bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `khori_bill_month`
--
ALTER TABLE `khori_bill_month`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `total_cost`
--
ALTER TABLE `total_cost`
  MODIFY `cost_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
