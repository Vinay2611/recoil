-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 02:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recoil`
--

-- --------------------------------------------------------

--
-- Table structure for table `sb_number`
--

CREATE TABLE `sb_number` (
  `id` int(11) NOT NULL,
  `dep` varchar(256) NOT NULL,
  `sector` varchar(256) NOT NULL,
  `sb_number` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `project_owner` varchar(256) NOT NULL,
  `client` varchar(256) NOT NULL,
  `event_description` varchar(256) NOT NULL,
  `event_location` varchar(256) NOT NULL,
  `event_date` varchar(256) NOT NULL,
  `closing_date` varchar(256) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sb_number`
--

INSERT INTO `sb_number` (`id`, `dep`, `sector`, `sb_number`, `date`, `project_owner`, `client`, `event_description`, `event_location`, `event_date`, `closing_date`, `dateTime`) VALUES
(1, 'dept1', 'IT', 'sb10054', '20/7/2019', 'Amit', 'Vmware', 'test description', 'mumbai', '25/07/2019', '25/08/2019', '2019-07-31 12:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `shobiz_travel_request`
--

CREATE TABLE `shobiz_travel_request` (
  `id` int(11) NOT NULL,
  `request_id` varchar(256) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `sb_number` varchar(256) NOT NULL,
  `travel_type` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `airportCarArrPreference` varchar(256) NOT NULL,
  `arrival_date` varchar(256) NOT NULL,
  `arrival_time` varchar(256) NOT NULL,
  `arrival_flight_detail` varchar(256) NOT NULL,
  `airportCarDepPreference` varchar(256) NOT NULL,
  `departure_date` varchar(256) NOT NULL,
  `departure_time` varchar(256) NOT NULL,
  `departure_flight_detail` varchar(256) NOT NULL,
  `car_preference` varchar(256) NOT NULL,
  `local_transfer_date` date NOT NULL,
  `pickup_location` varchar(256) NOT NULL,
  `time_to_report` varchar(256) NOT NULL,
  `guest_contact_details` varchar(256) NOT NULL,
  `drop_location_details` varchar(256) NOT NULL,
  `day_car_preference` varchar(256) NOT NULL,
  `date_transfer_date` varchar(256) NOT NULL,
  `pickup_location_address` varchar(256) NOT NULL,
  `day_report_time_driver` varchar(256) NOT NULL,
  `day_guest_contact_details` varchar(256) NOT NULL,
  `status` enum('Pending','Complete','On Hold','Cancelled') NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `shobiz_travel_request`
--

INSERT INTO `shobiz_travel_request` (`id`, `request_id`, `first_name`, `last_name`, `sb_number`, `travel_type`, `type`, `airportCarArrPreference`, `arrival_date`, `arrival_time`, `arrival_flight_detail`, `airportCarDepPreference`, `departure_date`, `departure_time`, `departure_flight_detail`, `car_preference`, `local_transfer_date`, `pickup_location`, `time_to_report`, `guest_contact_details`, `drop_location_details`, `day_car_preference`, `date_transfer_date`, `pickup_location_address`, `day_report_time_driver`, `day_guest_contact_details`, `status`, `dateTime`) VALUES
(1, '', 'amit', 'pashte', 'SB10245', '', 'Day Use', '', '', '10:00 AM', '', '', '', '10:00 AM', '', '', '0000-00-00', '', '10:00 AM', '', '', '5 seater', '5 seater', 'thane', '1:30 AM', '9967326081', 'Pending', '2019-07-31 12:18:29'),
(2, '543310719', 'amit', 'pashte', 'sb12543', 'Pick up', 'Airport Transfer', '5 seater', '31/07/2019', '10:00 AM', 'ANB145', '', '', '10:00 AM', '', '', '0000-00-00', '', '10:00 AM', '', '', '', '', '', '10:00 AM', '', 'Pending', '2019-07-31 12:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin_users`
--

CREATE TABLE `super_admin_users` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('superadmin','admin') NOT NULL DEFAULT 'admin',
  `registration_date` date DEFAULT NULL,
  `status` enum('Active','Inactive','Disapproved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `super_admin_users`
--

INSERT INTO `super_admin_users` (`admin_id`, `first_name`, `last_name`, `email_id`, `password`, `user_type`, `registration_date`, `status`) VALUES
(1, 'sachin', 'tendulkar', 'super@admin.com', 'superadmin', 'superadmin', '2018-12-18', 'Active'),
(2, 'virat', 'kohli', 'admin@admin.com', 'admin', 'admin', '2018-12-19', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sb_number`
--
ALTER TABLE `sb_number`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shobiz_travel_request`
--
ALTER TABLE `shobiz_travel_request`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `super_admin_users`
--
ALTER TABLE `super_admin_users`
  ADD PRIMARY KEY (`admin_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sb_number`
--
ALTER TABLE `sb_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shobiz_travel_request`
--
ALTER TABLE `shobiz_travel_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `super_admin_users`
--
ALTER TABLE `super_admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
