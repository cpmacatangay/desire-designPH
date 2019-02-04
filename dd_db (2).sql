-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2018 at 04:49 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `hire_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `bill_due_date` date NOT NULL,
  `bill_payment` decimal(5,2) NOT NULL,
  `bill_desc` varchar(255) NOT NULL,
  `bill_status` varchar(255) NOT NULL,
  PRIMARY KEY (`bill_id`),
  UNIQUE KEY `hire_id` (`hire_id`),
  KEY `hire_id_2` (`hire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `cart_total_price` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`),
  UNIQUE KEY `temp_id` (`temp_id`),
  UNIQUE KEY `cart_id` (`cart_id`),
  KEY `temp_id_2` (`temp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_desc` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

DROP TABLE IF EXISTS `designer`;
CREATE TABLE IF NOT EXISTS `designer` (
  `des_id` int(11) NOT NULL AUTO_INCREMENT,
  `des_desc` varchar(255) NOT NULL,
  `des_skills` varchar(255) NOT NULL,
  `des_portfolio` longblob NOT NULL,
  `paypal_add` varchar(255) NOT NULL,
  PRIMARY KEY (`des_id`),
  UNIQUE KEY `des_id` (`des_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `design_submission`
--

DROP TABLE IF EXISTS `design_submission`;
CREATE TABLE IF NOT EXISTS `design_submission` (
  `design_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_id` int(11) NOT NULL,
  `design_files` longblob NOT NULL,
  PRIMARY KEY (`design_id`),
  UNIQUE KEY `proj_id` (`proj_id`),
  UNIQUE KEY `design_id` (`design_id`),
  KEY `proj_id_2` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

DROP TABLE IF EXISTS `hire`;
CREATE TABLE IF NOT EXISTS `hire` (
  `hire_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `hire_payment` decimal(5,2) NOT NULL,
  `hire_end_date` date NOT NULL,
  PRIMARY KEY (`hire_id`),
  UNIQUE KEY `client_id` (`client_id`),
  UNIQUE KEY `des_id` (`des_id`),
  UNIQUE KEY `proj_id` (`proj_id`),
  KEY `client_id_2` (`client_id`),
  KEY `des_id_2` (`des_id`),
  KEY `proj_id_2` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `timestamp` date NOT NULL,
  PRIMARY KEY (`inbox_id`),
  UNIQUE KEY `inbox_id` (`inbox_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

DROP TABLE IF EXISTS `package_type`;
CREATE TABLE IF NOT EXISTS `package_type` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_rate` decimal(5,2) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`package_id`),
  UNIQUE KEY `package_id` (`package_id`),
  UNIQUE KEY `proj_id` (`proj_id`),
  KEY `proj_id_2` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_id` int(11) NOT NULL,
  `timestamp` date NOT NULL,
  `payment_total` decimal(5,2) NOT NULL,
  PRIMARY KEY (`payment_id`),
  UNIQUE KEY `proj_id` (`proj_id`),
  UNIQUE KEY `payment_id` (`payment_id`),
  KEY `proj_id_2` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_name` varchar(255) NOT NULL,
  `proj_desc` varchar(255) NOT NULL,
  `proj_category` varchar(255) NOT NULL,
  `proj_files` longblob NOT NULL,
  `proj_package` varchar(255) NOT NULL,
  PRIMARY KEY (`proj_id`),
  UNIQUE KEY `proj_id` (`proj_id`),
  KEY `proj_id_2` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `timestamp` date NOT NULL,
  PRIMARY KEY (`purchase_id`),
  UNIQUE KEY `temp_id` (`temp_id`),
  UNIQUE KEY `purchase_id` (`purchase_id`),
  KEY `temp_id_2` (`temp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `user_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` date NOT NULL,
  `user_rate` decimal(2,2) NOT NULL,
  `rated_by` varchar(255) NOT NULL,
  PRIMARY KEY (`user_review_id`),
  UNIQUE KEY `user_review_id` (`user_review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_name` varchar(255) NOT NULL,
  `temp_desc` varchar(255) NOT NULL,
  `temp_files` longblob NOT NULL,
  `temp_price` decimal(5,2) NOT NULL,
  `temp_timestamp` date NOT NULL,
  `temp_category` varchar(255) NOT NULL,
  PRIMARY KEY (`temp_id`),
  UNIQUE KEY `temp_id` (`temp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
CREATE TABLE IF NOT EXISTS `user_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_desc` varchar(255) NOT NULL,
  `timestamp` date NOT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `log_id` (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

DROP TABLE IF EXISTS `user_verification`;
CREATE TABLE IF NOT EXISTS `user_verification` (
  `verification_id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` date NOT NULL,
  `skype_name` varchar(255) NOT NULL,
  PRIMARY KEY (`verification_id`),
  UNIQUE KEY `verification_id` (`verification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`hire_id`) REFERENCES `hire` (`hire_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`temp_id`) REFERENCES `template` (`temp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `design_submission`
--
ALTER TABLE `design_submission`
  ADD CONSTRAINT `design_submission_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hire`
--
ALTER TABLE `hire`
  ADD CONSTRAINT `hire_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hire_ibfk_2` FOREIGN KEY (`des_id`) REFERENCES `designer` (`des_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hire_ibfk_3` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_type`
--
ALTER TABLE `package_type`
  ADD CONSTRAINT `package_type_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`temp_id`) REFERENCES `template` (`temp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
