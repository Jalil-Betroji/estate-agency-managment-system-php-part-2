-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 11:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `announces`
--

CREATE TABLE `announces` (
  `Announce_ID` int(11) NOT NULL,
  `Client_ID` int(11) DEFAULT NULL,
  `Title` varchar(30) NOT NULL,
  `Area` int(100) NOT NULL,
  `Rooms` int(5) NOT NULL,
  `Bathrooms` int(5) NOT NULL,
  `Price` int(20) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Code_Postal` int(20) NOT NULL,
  `House_Number` varchar(10) NOT NULL,
  `House_Floor` varchar(10) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Publication_date` date NOT NULL,
  `last_modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announces`
--

INSERT INTO `announces` (`Announce_ID`, `Client_ID`, `Title`, `Area`, `Rooms`, `Bathrooms`, `Price`, `Country`, `City`, `Code_Postal`, `House_Number`, `House_Floor`, `Type`, `Category`, `Publication_date`, `last_modification_date`) VALUES
(2, 18, 'Entire villa hosted by Vincent', 500, 3, 2, 43434, 'Morocco', 'Tanger', 91000, '2', '21', 'Villa', 'Rent', '2023-02-02', '2023-02-09'),
(3, 18, 'villa in casablanca ', 200, 3, 2, 2212, 'spain', 'Tanger', 91000, '2', '21', 'Villa', 'Rent', '2023-02-09', '2023-02-16'),
(4, 18, 'best designed tripe house', 230, 5, 3, 12345, 'Morocco', 'Tanger', 91000, '1', '1', 'Villa', 'Rent', '2023-02-21', '2023-02-22'),
(5, 18, 'best designed house in tanger', 521, 2, 2, 43434, 'Morocco', 'Tetouan', 12000, '2', '21', 'Appartment', 'Sell', '2023-02-22', '2023-02-27'),
(6, 18, 'A Luxury house in chefchaouen', 652, 6, 2, 234211, 'Morocco', 'Casablanca', 213111, '1', '1', 'Villa', 'Rent', '2023-02-21', '2023-02-22'),
(7, 8, 'luxury house in tetouan ', 874, 8, 3, 197526, 'Morocco', 'Tetouan', 651321, '2', '21', 'Appartment', 'Sell', '2023-02-08', '2023-02-09'),
(8, 18, 'Villa in rabat for sell', 332, 5, 3, 12345, 'Morocco', 'Tanger', 91000, '1', '1', 'Villa', 'Rent', '2023-02-07', '2023-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(10) DEFAULT NULL,
  `CIN` varchar(15) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Code_Postal` varchar(50) NOT NULL,
  `Account_Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_ID`, `First_Name`, `Last_Name`, `Email`, `Phone`, `CIN`, `Country`, `City`, `Address`, `Password`, `Code_Postal`, `Account_Type`) VALUES
(1, 'Jalil', 'Betroji', 'betroji.jalil.solicode@gmail.com', 651782276, 'GM111111', 'Morocco', 'Tanger', 'Tanger-ahlan', 'Jalil@2021', '91000', 'Seller'),
(3, 'outhman', 'moumou', 'moumou@gmail.com', 765324562, 'HY7878383', 'Germany', 'Rachfold', '1200 , rachfol- germany', '123456789', '12000', 'Company'),
(4, 'hamid', 'achoau', 'hamid@gmail.com', 656231453, 'FG12345', 'spain', 'madrid', '1552 , Madrid - spain', '123456789', '12555', 'Seller'),
(5, 'Soudian', 'elkebdani', 'soufian@gmail.com', 543215624, 'FG42761', 'belgiaue', 'belgique', '127674 ,belgique - belgique', '123456789', '1211211', 'Seller'),
(8, 'Moumou', 'moumou', 'moumoumoumou@gmail.com', 543215624, 'FG42761', 'belgiaue', 'belgique', '123 BELGIQUE TANGER', '123456789', '1211211', 'Seller'),
(9, 'Jalil', 'Betroji', 'betroji.jalil.solicode@gmail.com', 10, '44444', '44444', '4444', '44444', '444', '444', 'Company'),
(10, 'Jalil', 'Betroji', 'betroji.jalil.solicode@gmail.com', 10, '44444', '44444', '4444', '44444', '444', '444', 'Company'),
(16, 'Jalil', 'Betroji', 'jali1l.betroji@gmail.com', 223323232, 'FG1212', 'Morocco', 'tanger', 'tanger ahlan solicode', '$2y$10$3vYH9M8nCtquccHDnoajN.pkMKmzorSmXevK2pyMTPj7KGVhtnE8W', '444', 'Seller'),
(18, 'Jalil', 'Betroji', 'jalil.betroji@gmail.com', 655555555, 'FG1212', 'Morocco', 'tanger', '91000, Morocco-tanger', '$2y$10$X/T/4MjnW5pW6Xm8yovxQ.T21jIhPOz4w9ILzRTFi1xMfuO9lecMa', '91000', 'Seller');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Image_ID` int(11) NOT NULL,
  `Announce_ID` int(11) DEFAULT NULL,
  `Image_Path` varchar(1000) DEFAULT NULL,
  `Image_Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Image_ID`, `Announce_ID`, `Image_Path`, `Image_Type`) VALUES
(1, 2, 'pic1.jpg', '1'),
(9, 3, 'pic2.jpg', '1'),
(11, 4, 'pic3.jpg', '1'),
(12, 5, 'pic4.jpg', '1'),
(13, 6, 'pic5.jpg', '1'),
(14, 7, 'pic6.jpg', '1'),
(15, 8, 'pic7.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announces`
--
ALTER TABLE `announces`
  ADD PRIMARY KEY (`Announce_ID`),
  ADD KEY `Client_ID` (`Client_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Image_ID`),
  ADD KEY `Announce_ID` (`Announce_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announces`
--
ALTER TABLE `announces`
  MODIFY `Announce_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Image_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announces`
--
ALTER TABLE `announces`
  ADD CONSTRAINT `announces_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`Announce_ID`) REFERENCES `announces` (`Announce_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
