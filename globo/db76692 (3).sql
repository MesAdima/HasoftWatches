-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 08:31 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db76692`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`_id`, `fname`, `sname`, `email`, `phone_number`, `isActive`) VALUES
(1, 'Adima', 'Nyodero', 'anyodero@gmail.com', '764325681', 1),
(2, 'Roina', 'Ochieng', 'rochieng@gmail.com', '721321479', 1),
(3, 'Adede', 'Hawi', 'ahawi@gmail.com', '786451267', 1),
(4, 'Nancy', 'Anyika', 'nanyika@gmail.com', '715432678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`_id` int(11) NOT NULL,
  `userID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`_id`, `category_name`, `description`, `isActive`, `icon`) VALUES
(3, 'Sport', 'For the sporty guy', 1, 'futbol-o'),
(4, 'Digital', 'Those who value every second of their time', 1, 'play'),
(5, 'Vintage', 'Old is gold', 1, 'clock-o'),
(6, 'Dress', 'For the girly girl', 1, 'male'),
(7, 'Military', 'Always a good thing to defend your country', 1, 'cog'),
(8, 'Pilot/Flieger', 'Travel the world!', 1, 'plane'),
(9, 'Wrist', 'Oceans, Dolphins', 1, 'clock-o'),
(10, 'Smart', 'The guy', 1, 'apple'),
(11, 'Fashion', 'Don''t we all relate?', 1, 'text-height');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '0',
  `userID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`_id`, `fname`, `sname`, `email`, `phone_no`, `address`, `isActive`, `userID`) VALUES
(1, 'Michael', 'Mwangi', 'm@gmail.com', '716554390', 'Amboseli Estate Next to the palm tree', 1, 1),
(2, 'Serah', 'Mwanzo', 'smwazo@yahoo.com', '713246890', 'Kilimani grove, apartment third from the road', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE IF NOT EXISTS `designers` (
`_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`_id`, `name`, `isActive`) VALUES
(1, 'Armani Exchange', 1),
(2, 'Braun', 1),
(3, 'Cookoo', 1),
(4, 'Daisy Dixon', 1),
(5, 'Elliot Brown', 1),
(6, 'Empirio Armani', 1),
(7, 'Gio Goi', 1),
(8, 'Just Carvalli', 1),
(9, 'Michael Kors', 1),
(10, 'Swiss Emporio', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designerID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`_id`, `name`, `designerID`, `categoryID`, `subcategoryID`, `price`, `image`) VALUES
(9, 'test subject', 6, 9, 3, 50000, '2ca96f47bc1dfa1c16b57b71d23b0c88.jpg'),
(10, 'smart', 5, 10, 6, 50000, '69d12a206ab7bc6341a446a84f0456eb.jpg'),
(11, 'prod', 6, 5, 4, 76800, 'e9581c01c9306156e253d91adedae2f6.jpg'),
(12, 'good one', 7, 4, 3, 65778, '8de33d39217b9e58d1ab869c5e660a71.jpg'),
(13, 'my watch', 10, 10, 5, 45009, '4af29228ad2cfec8198a56c32e3d1336.jpg'),
(14, 'watch test', 1, 5, 3, 35000, '54700167a6f665e045f46d8350ed7f72.jpg'),
(15, 'another vintage', 8, 5, 1, 45600, '009c4a4e0e2d02057c125937e24012e8.jpg'),
(16, 'watch meen', 8, 4, 1, 45000, '4edf7e2478f27530df38ad62a829fa46.jpg'),
(17, 'my watch', 5, 4, 6, 34800, 'fcb466a638c1ffaf99272232365a3408.jpg'),
(18, 'a wrist', 4, 9, 4, 32400, 'fab67371181333ee6f5def0868f48b6e.jpg'),
(19, 'good one', 7, 9, 3, 76400, '370f7d9870e18199085ba2f36a143dac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
`_id` int(11) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`_id`, `sub_category_name`, `isActive`) VALUES
(1, '24-hour clocks and watches', 1),
(2, 'Watch brands', 1),
(3, 'Watch Models', 1),
(4, 'Watch Phones', 1),
(5, 'Smart Watches', 1),
(6, 'Watch Makers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE IF NOT EXISTS `titles` (
`_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
`_id` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`_id`, `custID`, `total`, `date`) VALUES
(1, 1, 148000, '2015-09-04 00:00:00'),
(2, 2, 56000, '2015-09-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE IF NOT EXISTS `transaction_details` (
`_id` int(11) NOT NULL,
  `transactionID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`_id`, `transactionID`, `productID`, `quantity`, `subtotal`) VALUES
(1, 1, 4, 1, 80000),
(2, 1, 5, 1, 68000),
(3, 2, 6, 1, 56000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertypeID` int(11) NOT NULL,
  `activationkey` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`_id`, `username`, `email`, `password`, `usertypeID`, `activationkey`) VALUES
(1, 'briannyagol', 'briannyagol@gmail.com', 'cbd44f8b5b48a51f7dab98abcdf45d4e', 2, 'd9061a7ced3b200edf34fca2c6b21553'),
(3, 'adima', 'adima.nyodero@strathmore.edu', '900150983cd24fb0d6963f7d28e17f72', 2, '04f12a34f6c8a303eb623194fc8da2b2');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
`_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`_id`, `type_name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
 ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
