-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `add_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `petid` int(11) NOT NULL,
  `sub_cat` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`add_id`, `userid`, `petid`, `sub_cat`) VALUES
(1, 1, 10, 'Siberian cat');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `buyid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sellerid` int(11) NOT NULL,
  `petid` int(11) NOT NULL,
  `sub_cat` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`buyid`, `userid`, `sellerid`, `petid`, `sub_cat`) VALUES
(1, 1, 1, 5, 'Bull dog'),
(2, 3, 1, 20, 'Cockatoo'),
(3, 4, 1, 6, 'Indian pariah dog'),
(4, 5, 4, 30, 'Hulstlander');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(3) NOT NULL,
  `cat_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `cat_name`) VALUES
(1, 'DOGS'),
(2, 'CATS'),
(4, 'RABBITS'),
(5, 'BIRDS'),
(6, 'HAMSTERS');

-- --------------------------------------------------------

--
-- Table structure for table `pet_info`
--

CREATE TABLE `pet_info` (
  `pet_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` varchar(110) NOT NULL,
  `description` varchar(110) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1' COMMENT '1 for in stock 0 for out of stock'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_info`
--

INSERT INTO `pet_info` (`pet_id`, `sub_cat_id`, `color`, `image`, `price`, `description`, `seller_id`, `status`) VALUES
(2, 2, 'white', 'indian.jpg', '7000', 'cute', 1, b'0'),
(3, 1, 'Brown', 'kombai.jpg', '10000', 'Kombai Dog', 1, b'1'),
(4, 3, 'Black & Brown', 'german.jpg', '20000', 'Black & Brown', 1, b'1'),
(5, 4, 'Brown', 'bull.jpg', '20000', 'bull dog', 1, b'0'),
(6, 5, 'Brown', 'Indian_Pariah_Dog-552x330.jpg', '20000', 'testing', 1, b'0'),
(7, 6, 'white', 'bullki.jpg', '2000', 'testing', 1, b'1'),
(8, 7, 'white', 'semi.jpg', '20000', 'semi persian cat testing discription', 1, b'1'),
(9, 8, 'Black & Brown', 'indian.jpg', '20000', 'Inidan cat testing', 1, b'1'),
(10, 9, 'white and black', 'siberian.jpg', '3000', 'testing', 1, b'1'),
(11, 10, 'white & Brown', 'Himalayan.jpg', '7000', 'testing', 1, b'1'),
(12, 11, 'black', 'Maine-Coon.jpg', '2000', 'testing', 1, b'1'),
(13, 12, 'Brown', 'hollend_loop.jpg', '2000', 'testing', 1, b'1'),
(14, 13, 'white', 'american.png', '2000', 'testing', 1, b'1'),
(15, 14, 'Brown', 'german_p.jpg', '700', 'testing', 1, b'1'),
(16, 15, 'white', 'hulstlander-rabbit.jpg', '700', 'testing', 1, b'1'),
(17, 16, 'Brown', 'english-lop.jpg', '7000', 'testing', 1, b'1'),
(18, 17, 'green', 'lovebirds-pair-5.jpg', '700', 'testing', 1, b'1'),
(19, 18, 'green', 'Eclectus-Parrot.jpg', '3000', 'testing', 1, b'1'),
(20, 19, 'white', 'profile_167_600.jpg', '700', 'testing', 1, b'0'),
(21, 20, 'white', 'fantail_pigeon_OB_2.jpg', '2000', 'stytruytrur', 1, b'1'),
(22, 21, 'white', 'fe820c2a5d56623eb16c545a82d2d71a.jpg', '70', 'testubfgggggg', 1, b'1'),
(23, 22, 'white', 'GettyImages-140212719-56a2bd493df78cf7727964af.jpg', '70', 'testing', 1, b'1'),
(24, 23, 'golden', '1.jpg', '800', 'testing', 1, b'1'),
(25, 24, 'Black & Brown', 'chinese-hamster-e1454329729133.jpg', '20000', 'testing', 1, b'1'),
(26, 25, 'golden', 'hamster-facts-for-kids2.jpg', '800', 'testing', 1, b'1'),
(27, 1, 'Brown', 'kombai-dog-photos-10.jpg', '7000', 'combai', 2, b'1'),
(28, 6, 'white', 'persian.jpg', '20000', 'testing', 3, b'1'),
(29, 26, 'white', 'kombai-dog-photos-10.jpg', '70', 'testing', 1, b'1'),
(30, 15, 'white', 'hulstlander-rabbit.jpg', '20000', 'testing', 4, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `seller_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`seller_id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'anup', '8269663728', 'anup@gmail.com', '111111'),
(2, 'vishal', '8269663728', 'vishal@gmail.com', '111111'),
(3, 'seller1', '4785698745', 'seller1@gmail.com', '111111'),
(4, 'seller2', '7745896587', 'seller2@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_id` int(11) NOT NULL,
  `cat_id` varchar(60) NOT NULL,
  `sub_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_id`, `cat_id`, `sub_name`) VALUES
(1, '1', 'Combai'),
(2, '1', 'Indian Spitz'),
(3, '1', 'German Shepard'),
(4, '1', 'Bull dog'),
(5, '1', 'Indian pariah dog'),
(6, '2', 'Persian cat'),
(7, '2', 'Semi Persian cat'),
(8, '2', 'Indian cat'),
(9, '2', 'Siberian cat'),
(10, '2', 'Himalayan cat'),
(11, '2', 'mainecoon'),
(12, '4', 'Holland Lop'),
(13, '4', 'American Fuzzy Lop'),
(14, '4', 'German Lop'),
(15, '4', 'Hulstlander'),
(16, '4', 'English Lop'),
(17, '5', 'Love birds'),
(18, '5', 'Parrot'),
(19, '5', 'Cockatoo'),
(20, '5', 'Fantail pigeon'),
(21, '6', 'Winter white Dwarf hamsters'),
(22, '6', 'Roborovski hamsters'),
(23, '6', 'Golden hamsters'),
(24, '6', 'Chinese hamsters'),
(25, '6', 'Gansu hamsters'),
(26, '1', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_reg_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_reg_id`, `name`, `email`, `password`) VALUES
(1, 'vishal', 'vishal@gmail.com', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buyid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `buyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pet_info`
--
ALTER TABLE `pet_info`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `seller_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `user_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
