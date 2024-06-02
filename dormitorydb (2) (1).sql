-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 12:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dormitorydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `announcement_id` int(11) NOT NULL,
  `Announcement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bills_tbl`
--

CREATE TABLE `bills_tbl` (
  `Bill_id` int(11) NOT NULL,
  `Room_Number` int(20) NOT NULL,
  `Electric` bigint(11) NOT NULL,
  `Water` bigint(11) NOT NULL,
  `Rent` bigint(11) NOT NULL,
  `Due_Date` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills_tbl`
--

INSERT INTO `bills_tbl` (`Bill_id`, `Room_Number`, `Electric`, `Water`, `Rent`, `Due_Date`, `Status`) VALUES
(1, 1, 500, 400, 10000, '2022-05-06', 'Not Paid'),
(2, 2, 5000, 500, 10000, '2022-04-05', 'Paid'),
(3, 3, 293, 300, 10800, '2022-04-05', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE `complaint_tbl` (
  `Complaint_ID` int(11) NOT NULL,
  `Room_Number` int(11) NOT NULL,
  `Complaint` text NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Date_of_Complaint` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(11) NOT NULL,
  `Payment_Method` varchar(20) NOT NULL,
  `Type_of_Payment` varchar(11) NOT NULL,
  `Amount_to_Pay` int(10) NOT NULL,
  `Amount_of_Pay` int(10) NOT NULL,
  `Room_Number` int(10) NOT NULL,
  `Period` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionID`, `Payment_Method`, `Type_of_Payment`, `Amount_to_Pay`, `Amount_of_Pay`, `Room_Number`, `Period`) VALUES
(1, 'Cash', 'Electric', 500, 500, 1, 'Feb 28 2023 - March 28 2023 '),
(2, 'Paymaya', 'Rent', 11000, 11000, 2, 'June 7 2023 - July 7 2023'),
(3, 'Cash', 'Electric', 300, 300, 1, 'June 7 2023 - July 7 2023'),
(4, 'Gcash', 'Water', 500, 500, 4, 'June 7 2023 - July 7 2023'),
(5, 'Cash', 'Water', 500, 500, 3, 'June 7 2023 - July 7 2023'),
(6, 'Cash', 'Electric', 600, 500, 3, 'June 7 2023 - July 7 2023'),
(7, 'Cash', 'Electric', 600, 800, 3, 'June 7 2023 - July 7 2023'),
(8, 'Cash', 'Electric', 600, 800, 3, 'June 7 2023 - July 7 2023'),
(9, 'Cash', 'Electric', 600, 800, 3, 'June 7 2023 - July 7 2023');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `User_Type` varchar(15) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Fingerprint_ID` int(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`ID`, `Name`, `Email`, `Password`, `Age`, `Address`, `User_Type`, `Phone`, `Fingerprint_ID`) VALUES
(14, 'martin caponpon', 'admin', '1234', 20, 'San Juan', 'admin', '09694560912', 0),
(15, 'menard caponpon', 'tenant', '12345', 21, 'San Juan', 'tenants', '09952001587', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `bills_tbl`
--
ALTER TABLE `bills_tbl`
  ADD PRIMARY KEY (`Bill_id`);

--
-- Indexes for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  ADD PRIMARY KEY (`Complaint_ID`),
  ADD KEY `Room_Number` (`Room_Number`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bills_tbl`
--
ALTER TABLE `bills_tbl`
  MODIFY `Bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  MODIFY `Complaint_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
