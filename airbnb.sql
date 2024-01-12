-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 08:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airbnb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `Lastname`, `Email`, `PhoneNumber`, `password`) VALUES
(1, 'nrbrts', 'asd', 'admin@admin', '1111', '$2y$10$7UN078qSGmzWhcD7FKfBi.9'),
(2, '1231', '123323', 'admin@admin.lv', '777', '$2y$10$4MSAVyRKWII/d3OPRGZZBeC'),
(3, '123', '123', '123123@1234.com', '123123', '$2y$10$q2VQqMMjpJ4R9xMK2WXn5OS'),
(4, '1231231', '123123', 'admin@yahoo.com', '9999123', '$2y$10$/Aspg4aE7V3eezHwAhyg9eC');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `RoomID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `AvailabilityStatus` tinyint(1) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RoomID`, `Name`, `Description`, `Price`, `AvailabilityStatus`, `photo`) VALUES
(33, 'Sauna', 'hot', 49.99, 0, 'https://www.grxstatic.com/4f3rgqwzdznj/1xtUYkoZHlYUxGo6ZGtV6Y/2553cb97d90bff66c45ff99141a44a93/couple_in_sauna-1399342866.jpg?format=pjpg&auto=webp&width=704'),
(54, 'House', 'big bass bonanza', 300.05, 1, 'https://cdn.apartmenttherapy.info/image/upload/v1556716350/stock/8ea241e96504a398f291a31939963e8ba948368c.jpg'),
(123123, 'VIP', 'aprakstssdasdasdasdasd', 99.99, 1, 'https://coolhouseconcepts.com/wp-content/uploads/2021/06/PIC-03-26-678x381.jpg'),
(12354, 'VIP', '1111111111111111111', 99.99, 1, 'https://w7.pngwing.com/pngs/723/859/png-transparent-house-cartoon-house-building-photography-apartment.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
