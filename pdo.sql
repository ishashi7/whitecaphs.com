-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 06:55 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(8, 'shashi', 'shashi@gmail.com', '9100523006', 'Need Help in Building', 'shashi is going good with sweet alert library.'),
(9, 'whitecaps', 'whitecaps@gmail.com', '8885412345', 'Helping in Home Services', 'I am Very much Interested to work with WC');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE IF NOT EXISTS `investor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`id`, `name`, `email`, `phone`, `dob`, `address`) VALUES
(1, 'shashi test', 'testshashi@gmail.com', '8686864770', '2018-06-22', 'Nacharam, Venkataramana Colony,  HMT Nagar, Hyderabad-76');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `orderid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `name`, `phone`, `email`, `service`, `street`, `town`, `state`, `pincode`) VALUES
(9, 7748, 'varun', '9502630805', 'varunv@gmail.com', 'Modular Kitchens', 'Indra Park Lane', 'Himayath Nagar', 'Telangana', '500089'),
(10, 4101, 'shashi', '9618227359', 'shashi30@gmail.com', 'Wardrobes', 'Nagalaxminagar Mallapur', 'Hyderabad', 'Telangana', '500076'),
(11, 4790, 'saiteja', '8523410001', 'teja123@gmail.com', 'Parlors', 'Amberpet Colony', 'Hyderabad', 'Telangana', '500048');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `email`, `phone`, `dob`, `description`, `address`) VALUES
(1, 'Allu arjun', 'arjun123@gmail.com', '9876543210', '2018-06-29', 'Because I don''t know what am doing.', 'Uppal, Near Ring Road, Hyderabad-78.'),
(2, 'Allu arjun', 'arjun123@gmail.com', '9876543210', '2018-06-29', 'Because I don''t know what am doing.', 'Uppal, Near Ring Road, Hyderabad-78.'),
(3, 'mallesh', 'malleshrock@gmail.com', '9618227359', '2018-06-27', 'Because i Love to do Business.', 'LB Nagar, RockTown Colony, Hyderabad-500055.');

-- --------------------------------------------------------

--
-- Table structure for table `proffessional`
--

CREATE TABLE IF NOT EXISTS `proffessional` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proffessional`
--

INSERT INTO `proffessional` (`id`, `name`, `email`, `phone`, `dob`, `skills`, `experience`, `address`) VALUES
(1, 'shashi', 'shashi30@ymail.com', '9100523006', '2018-06-02', 'Painting', 2, 'Jubilee Hills, Road No-10, Hyderabad-76'),
(2, 'shashi', 'shashi30@ymail.com', '9100523006', '2018-06-02', 'Painting', 2, 'Jubilee Hills, Road No-10, Hyderabad-76'),
(3, 'test', 'test@gmail.com', '8686864770', '2018-06-15', 'Cleaning', 1, ' Hitech City, Raheja Mind Space, Hyderabad-78'),
(4, 'test', 'test@gmail.com', '8686864770', '2018-06-15', 'Cleaning', 1, ' Hitech City, Raheja Mind Space, Hyderabad-78'),
(5, 'mallesh', 'malli30@ymail.com', '9618227359', '2018-06-29', 'Handling Orders', 5, 'Ecil, As Roa Nagar, Hyderabad-86'),
(6, 'shashi', 'shashi30@ymail.com', '9100523006', '2018-06-22', 'Cleaning', 1, 'Jubliee Hills');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `email`, `phone`, `dob`, `type`, `products`, `address`) VALUES
(1, 'shashi', 'shashi30@ymail.com', '9100523006', '2018-06-15', 'Agent', 'Paint Boxes', 'Jubliee Hills'),
(2, 'shashi', 'shashi30@test.com', '9502630805', '2018-06-13', 'Agent', 'Lights', ' Plot No.30, Road No -10 Banjara Hills, Hyderabad-78');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `name`, `profile_pic`) VALUES
(1, 'shashi_7', 'shashi30@ymail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'shashi', NULL),
(2, 'pran', 'buggashashi@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'shashi', NULL),
(3, 'snehal_7', 'snehal123@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'snehal', NULL),
(4, 'shashi_12', 'bugga123@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'shashi12', NULL),
(5, 'arjun12', 'arjun123@gmail.com', '123456', 'arjun', NULL),
(6, 'shashi', 'test123@gmail.com', 'hell123', 'test', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proffessional`
--
ALTER TABLE `proffessional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `proffessional`
--
ALTER TABLE `proffessional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
