-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2020 at 01:11 PM
-- Server version: 5.5.62
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20s1_g3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `UID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `AID` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `IID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `BOID` varchar(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `BorrowDate` date NOT NULL,
  `ReturnDate` date DEFAULT NULL,
  `ReturnScheduled` date NOT NULL,
  `Reason` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `BUID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `RID` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `SIN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Brand` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Model` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `UID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `AID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `RID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `IID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `MID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Des` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `BUID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `RID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `IID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `SID` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `IID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`BOID`),
  ADD KEY `borrow_fk_user` (`UID`),
  ADD KEY `borrow_fk_admin` (`AID`),
  ADD KEY `borrow_fk_item` (`RID`,`IID`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`BUID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`IID`),
  ADD KEY `item_fk_room` (`RID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `maintenance_fk_user` (`UID`),
  ADD KEY `maintenance_fk_item` (`RID`,`IID`),
  ADD KEY `maintenance_fk_admin` (`AID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `status_fk_item` (`IID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `type_fk_item` (`IID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_fk_user` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `borrow_fk_admin` FOREIGN KEY (`AID`) REFERENCES `admin` (`AID`),
  ADD CONSTRAINT `borrow_fk_item` FOREIGN KEY (`RID`,`IID`) REFERENCES `item` (`RID`, `IID`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_fk_room` FOREIGN KEY (`RID`) REFERENCES `room` (`RID`);

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_fk_user` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `maintenance_fk_item` FOREIGN KEY (`RID`,`IID`) REFERENCES `item` (`RID`, `IID`),
  ADD CONSTRAINT `maintenance_fk_admin` FOREIGN KEY (`AID`) REFERENCES `admin` (`AID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_fk_building` FOREIGN KEY (`BUID`) REFERENCES `building` (`BUID`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_fk_item` FOREIGN KEY (`IID`) REFERENCES `item` (`IID`);

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_fk_item` FOREIGN KEY (`IID`) REFERENCES `item` (`IID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
