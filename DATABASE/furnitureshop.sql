-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 03:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnitureshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customfur_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `cat_slug`) VALUES
(1, 'Dining Chair', 'dining-chair'),
(2, 'Dresser', 'dresser'),
(3, 'Cabinet', 'cabinet'),
(4, 'Dining Table', 'dining-table');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `prod_id` int(11) NOT NULL,
  `furniture_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `furniture_price` decimal(18,2) NOT NULL,
  `prod_qty` varchar(30) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`prod_id`, `furniture_name`, `image`, `furniture_price`, `prod_qty`, `slug`, `category_name`) VALUES
(1, 'Lucia Accent Chair', '1.png', '7895.00', '19', 'lucia-accent-chair', 'Chair'),
(2, 'Marem Dining Chair', '2.png', '6743.00', '16', 'marem-dining-chair', 'Chair'),
(3, 'Chaol Book Rack', '3.png', '9967.00', '9', 'chaol-book-rack', 'Cabinet'),
(4, 'Ancora Oak Side Table', '4.jpg', '8921.00', '0', 'ancora-oak-side-table', 'Dresser'),
(5, 'Rimuru Oak Side Table', '5.jpg', '6320.00', '3', 'rimuru-oak-side-table', 'Dresser'),
(6, 'Zariyah Three Way Dresser', '6.jpg', '7542.00', '6', 'zariyah-dresser', 'Dresser'),
(7, 'Hime Kitchen Table', '7.jpg', '20347.00', '4', 'hime-kitchen-table', 'Table'),
(8, 'Cian Dining Chair', '8.jpg', '4231.00', '10', 'cian-dining-chair', 'Chair');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `telphone` int(12) NOT NULL,
  `house_no` int(6) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `barangay` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `totalprice` decimal(10,2) NOT NULL,
  `sf` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `fname`, `lname`, `telphone`, `house_no`, `street_name`, `barangay`, `city`, `province`, `order_date`, `status`, `totalprice`, `sf`) VALUES
(1, 0, '', '', 0, 123, '', 'aaa', '', 'aaa', '0000-00-00 00:00:00', 'Pending', '0.00', '0.00'),
(2, 0, '', '', 0, 123, '', 'aaa', '', 'aaa', '0000-00-00 00:00:00', 'Pending', '0.00', '0.00'),
(3, 0, '', '', 0, 123, '', 'aaa', '', 'aaa', '0000-00-00 00:00:00', 'Pending', '0.00', '0.00'),
(4, 0, '', '', 0, 123, 'aaa', 'aaa', 'aaa', 'aaa', '2019-05-14 06:51:00', 'Pending', '0.00', '0.00'),
(5, 0, '', '', 0, 123, 'aaa', 'aaa', 'aaa', 'aaa', '2019-05-14 06:52:27', 'Pending', '0.00', '0.00'),
(6, 0, '', '', 2147483647, 123, 'aaa', 'aaa', 'aaa', 'aaa', '2019-05-14 06:52:57', 'Pending', '0.00', '0.00'),
(7, 0, '', '', 2147483647, 345, 'gg', 'gg', 'gg', 'gg', '2019-05-14 06:53:38', 'Pending', '0.00', '0.00'),
(8, 0, '', '', 2147483647, 345, 'gg', 'gg', 'gg', 'gg', '2019-05-14 06:57:30', 'Pending', '0.00', '0.00'),
(9, 0, '', '', 2147483647, 345, 'gg', 'gg', 'gg', 'gg', '2019-05-14 06:58:19', 'Pending', '0.00', '0.00'),
(10, 0, '', '', 2147483647, 333, 'qq', 'qq', 'qq', 'qq', '2019-05-14 07:05:35', 'Pending', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `total_qty` varchar(30) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `prod_id`, `prod_qty`, `total_qty`, `total`, `user_id`, `order_id`) VALUES
(33, 2, 1, '19', '6743.00', 0, '1'),
(34, 1, 1, '19', '7895.00', 0, '1'),
(36, 2, 2, '17', '13486.00', 0, '1'),
(37, 2, 1, '16', '6743.00', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Miguel', 'Mateo', 'admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Antonius', 'Lienzo', 'employee', 'employee@admin.com', 'employee', 'fa5473530e4d1a5a1e1eb53d2fedb10c'),
(4, 'aelin', 'ashryver', 'aelin', 'aelin@user.com', 'client', '873954be3971b0f7ca5897011890a0f2'),
(5, 'user', 'user', 'user', 'user@user.com', 'client', 'ee11cbb19052e40b07aac0ca060c23ee'),
(6, 'ivy', 'zdm', 'ivy', 'ivy@user.com', 'client', 'a735c3e8bc21cbe0f03e501a1529e0b4'),
(7, 'a', 'a', 'ff', 'ff@ff.com', 'cuser', '633de4b0c14ca52ea2432a3c8a5c4c31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
