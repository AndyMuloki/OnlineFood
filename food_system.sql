-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 12:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(50) NOT NULL,
  `ID` int(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `ID`, `Email`, `Password`) VALUES
(1, 5878, 'john@example.com', '1234'),
(2, 5881, 'jane@yahoo.com', '12131'),
(3, 5882, 'admin1@example.com', '1289');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `FoodID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UnitPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `FoodID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image_Orig_Name` varchar(50) NOT NULL,
  `Image_Path_Name` varchar(50) NOT NULL,
  `UnitPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`FoodID`, `Name`, `Image_Orig_Name`, `Image_Path_Name`, `UnitPrice`) VALUES
(1, 'Burger', 'burger1.jpg', '1594370056', 1000),
(2, 'Fries', 'burger3.jpg', '1594370392', 2500),
(3, 'Salsa', 'burger2.jpg', '1594370637', 2000),
(4, 'Scones', '1594369422.jpg', '1594370673', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuID` int(100) NOT NULL,
  `Price` int(50) NOT NULL,
  `FoodID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` int(11) NOT NULL,
  `Order_Date` date NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` char(50) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `FName` char(50) NOT NULL,
  `SName` char(50) NOT NULL,
  `Gender` char(6) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `PhoneNo`, `FName`, `SName`, `Gender`, `Password`) VALUES
(5878, 'john@example.com', 772435341, 'John', 'Doe', 'Male', '1234'),
(5879, 'jack@example.com', 754787933, 'Jack', 'Daniels', 'Male', '56789'),
(5880, 'peter@gmail.com', 774634344, 'Peter', 'Marlboro', 'Male', '91011'),
(5881, 'jane@yahoo.com', 775656390, 'Joan', 'Pierce', 'Female', '3246'),
(5882, 'admin1@example.com', 774567788, 'admin1', '', 'Male', '1289'),
(5883, 'client1@example.com', 2147483647, 'client1', '', 'Male', 'pass1'),
(5884, 'client2@example.com', 782536478, 'client2', '', 'Female', 'word2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuID`),
  ADD UNIQUE KEY `FoodID_2` (`FoodID`),
  ADD KEY `FoodID` (`FoodID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `FoodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5885;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
