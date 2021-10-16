-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 07:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `PH_NO` int(15) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ACCOUNT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_info`
--

CREATE TABLE `property_info` (
  `BEDROOM` int(1) DEFAULT NULL,
  `LIVING` int(1) DEFAULT NULL,
  `KITCHEN` int(1) DEFAULT NULL,
  `ACCOUNT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_photos`
--

CREATE TABLE `property_photos` (
  `PROPERTY_PHOTO1` mediumblob NOT NULL,
  `PROPERTY_PHOTO2` mediumblob DEFAULT NULL,
  `PROPERTY_PHOTO3` mediumblob DEFAULT NULL,
  `PROPERTY_PHOTO4` mediumblob DEFAULT NULL,
  `PROPERTY_PHOTO5` mediumblob DEFAULT NULL,
  `ACCOUNT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE `transaction_info` (
  `TRANSACTION_ID` int(20) NOT NULL,
  `SELLER_ID` int(20) NOT NULL,
  `BUYER_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verification_docs`
--

CREATE TABLE `verification_docs` (
  `AADHAR_NO` int(12) NOT NULL,
  `PAN_NO` varchar(20) NOT NULL,
  `ADDRESS_PROOF` mediumblob NOT NULL,
  `PHOTO_ID` mediumblob NOT NULL,
  `ACCOUNT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `property_info`
--
ALTER TABLE `property_info`
  ADD KEY `ACCOUNT_ID` (`ACCOUNT_ID`);

--
-- Indexes for table `property_photos`
--
ALTER TABLE `property_photos`
  ADD KEY `ACCOUNT_ID` (`ACCOUNT_ID`);

--
-- Indexes for table `verification_docs`
--
ALTER TABLE `verification_docs`
  ADD KEY `ACCOUNT_ID` (`ACCOUNT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_info`
--
ALTER TABLE `property_info`
  ADD CONSTRAINT `property_info_ibfk_1` FOREIGN KEY (`ACCOUNT_ID`) REFERENCES `account_details` (`ACCOUNT_ID`);

--
-- Constraints for table `property_photos`
--
ALTER TABLE `property_photos`
  ADD CONSTRAINT `property_photos_ibfk_1` FOREIGN KEY (`ACCOUNT_ID`) REFERENCES `account_details` (`ACCOUNT_ID`);

--
-- Constraints for table `verification_docs`
--
ALTER TABLE `verification_docs`
  ADD CONSTRAINT `verification_docs_ibfk_1` FOREIGN KEY (`ACCOUNT_ID`) REFERENCES `account_details` (`ACCOUNT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
