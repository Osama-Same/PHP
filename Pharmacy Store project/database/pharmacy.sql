-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 06:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `PASSWORD` text NOT NULL,
  `EMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `PASSWORD`, `EMAIL`) VALUES
(1, '1234', 'info@pharmacy.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `USER_ID`, `PRODUCT_ID`) VALUES
(6, 2, 13),
(7, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(15) CHARACTER SET utf8 NOT NULL,
  `EMAIL` text NOT NULL,
  `SUBJECT` text NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `NAME`, `EMAIL`, `SUBJECT`, `MESSAGE`) VALUES
(3, 'Hamza Abu Jamos', 'prghamza5991132@gmail.com', 'gg', 'gg'),
(5, 'Hamza Abu Jamos', 'prghamza5991132@gmail.com', 'zxc', 'JKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK'),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'Hamza Abu Jamos', 'prghamza5991132@gmail.com', 'sdfgh', 'dfbn'),
(9, 'Hamza Jamos', 'prghamza5991132@gmail.com', 'TEST', 'sdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(11) NOT NULL,
  `EMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `EMAIL`) VALUES
(1, 'alrahman@gmail.com'),
(2, 'alrahman@gmail.com'),
(3, ''),
(4, 'alrahman@gmail.com'),
(5, 'prghamza5991132@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `USER_ID`, `PRODUCT_ID`) VALUES
(1, 2, 14),
(2, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `NAME` text CHARACTER SET utf8 NOT NULL,
  `PRICE` text CHARACTER SET utf8 NOT NULL,
  `IMAGE` text CHARACTER SET utf8 NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `NAME`, `PRICE`, `IMAGE`, `DESCRIPTION`) VALUES
(1, 'sfvdf drgrfg', '4', 'images/products/1544357092.png', 'rfvagFb'),
(2, 'Long-Term Objectives 876', '2', 'images/products/1544357058.jpg', 'sffbdnbg'),
(3, 'Long-Term Objectives 2', '1', 'images/products/1544357066.jpg', 'rdvffesvg'),
(4, 'Long-Term Objectives 13', '3', 'images/products/1544357035.jpg', 'xc x'),
(5, 'Long-Term Objectives 112', '33', 'images/products/1544357023.jpg', '333'),
(6, 'Long-Term Objectives 1', '33', 'images/products/1544357014.jpg', '333'),
(7, 'Product Name three', '44455', 'images/products/1544356994.jpg', '4444444'),
(8, 'dfvd fbgtbrt', '44455', 'images/products/1544356949.jpg', '4444444'),
(9, 'Product Name Two', '44455', 'images/products/1544356934.jpg', '4444444'),
(11, 'sdfv', '444', 'images/products/1544317866.jpg', 'ss'),
(12, 'Long-Term Objectives 1', '44', 'images/products/1544317829.png', 'zxcvbn'),
(13, 'aaaaaaaaaaaaaaa aaaaaaaaaaaaaa', '222', 'images/products/1544317850.png', 'www'),
(14, 'Product Name one', '1.5', 'images/products/1544313733.png', 'Product Description Product Description Product Description Product');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `PASSWORD` text NOT NULL,
  `NAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PHONE` text CHARACTER SET utf8 NOT NULL,
  `GENDER` text CHARACTER SET utf8 NOT NULL,
  `COUNTRY` text CHARACTER SET utf8 NOT NULL,
  `CITY` text CHARACTER SET utf8 NOT NULL,
  `ADDRESS` text CHARACTER SET utf8 NOT NULL,
  `ZIPCODE` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `PASSWORD`, `NAME`, `EMAIL`, `PHONE`, `GENDER`, `COUNTRY`, `CITY`, `ADDRESS`, `ZIPCODE`) VALUES
(1, '123', 'Hamza Abu Jamous', 'hamza@gmail.com', '0788888888', 'Male', 'Jordan', 'Amman', 'Airport Rd.', '11134'),
(2, '123', 'User First Family Name', 'user@gmail.com', '07999999', 'Female', 'Jordan', 'Amman', 'Airport Rd.', '11134');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
