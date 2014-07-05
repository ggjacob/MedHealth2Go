-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2014 at 10:13 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medhealth2go`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `duration` varchar(10) NOT NULL,
  `meeting_token` varchar(500) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 's',
  PRIMARY KEY (`appointment_id`),
  UNIQUE KEY `meetingToken` (`meeting_token`),
  KEY `provider_id` (`provider_id`,`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `provider_id`, `patient_id`, `start_date_time`, `duration`, `meeting_token`, `status`) VALUES
(1, 1, 2, '2014-06-19 01:43:12', '15', '1', 's'),
(2, 4, 2, '2014-04-09 02:00:00', '30', '12', 's'),
(4, 4, 5, '2014-04-03 03:10:00', '60', '2', 's'),
(5, 1, 5, '2014-04-11 09:30:00', '15', '3', 's'),
(6, 1, -1, '2014-04-09 08:25:00', '30', '4', 's'),
(7, 1, 2, '2014-04-08 07:20:00', '30', '5', 's'),
(8, 4, 5, '2014-04-16 01:05:00', '15', '6', 's'),
(9, 4, 2, '2014-04-01 01:00:00', '15', '8', 's'),
(10, 4, 5, '2014-04-22 01:00:00', '60', '7', 's'),
(11, 4, 2, '2014-04-15 07:00:00', '15', '9', 's'),
(12, 4, 5, '2014-03-31 12:00:00', '30', '10', 's'),
(13, 4, 2, '2014-03-31 12:00:00', '30', '111', 's'),
(14, 4, 2, '2014-04-10 08:25:00', '15', '22', 's'),
(15, 1, 2, '2014-07-02 11:33:33', '15', '11', 's'),
(16, 1, 2, '2014-07-02 11:38:39', '15', '06409663226af2f3114485aa4e0a23b453b3d31fddbca4.86794499', 's'),
(17, 1, 5, '2014-04-08 07:20:00', '30', '5a378f8490c8d6af8647a753812f6e3153b3d3d8b92975.56533608', 's'),
(18, 1, 2, '2014-07-02 04:00:00', '15', '29d1165b61ef7dc62cecf00ea22b1d9353b3d4397ab5c7.44823356', 's'),
(19, 1, 2, '2014-07-02 04:00:00', '15', '64055d56367c68545b1ad9b86faee20c53b3d43a81e0b7.41843781', 's'),
(20, 1, 2, '2014-07-02 12:55:36', '15', 'c6344b0ae32e496be8b1b701e540d56653b3e528775d35.01333661', 's');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `record_num` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `acceptMsg` int(11) NOT NULL DEFAULT '1',
  `role` int(11) NOT NULL,
  `member_since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `role` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `record_num`, `dob`, `phone`, `acceptMsg`, `role`, `member_since`, `active`) VALUES
(1, 'doctor1', '1', 'doctor@doctor.com', 'test', '', '0000-00-00', '', 1, 1, '2014-05-27 04:17:33', 1),
(2, 'patient1', '1', 'patient@patient.com', 'test', '', '0000-00-00', '', 1, 2, '2014-05-27 04:18:30', 1),
(3, 'admin', '1', 'admin@admin.com', 'tester', '', '0000-00-00', '', 1, 4, '2014-05-27 04:19:00', 1),
(4, 'doctor2', '2', 'doctor2@doctor.com', 'test', '', '0000-00-00', '', 1, 1, '2014-05-27 04:19:21', 1),
(5, 'patient2', '2', 'patient2@patient.com', 'test', '', '0000-00-00', '', 1, 2, '2014-05-27 04:19:42', 1),
(6, 'Md Shariful', 'Islam', 'shardif.cse.08@gmail.com', 'testtest', 'asdfasdfasdf', '0000-00-00', '123 789 4566', 0, 2, '2014-07-04 15:34:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `activity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_role_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `role_name`, `role_id`, `activity`) VALUES
(1, 'Provider', 1, 1),
(2, 'Patient', 2, 1),
(3, 'Scheduler', 3, 1),
(4, 'Administrator', 4, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `user_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
