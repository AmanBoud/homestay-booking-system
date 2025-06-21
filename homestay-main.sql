-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 10:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `no_of_nights` varchar(50) NOT NULL,
  `final_price` varchar(500) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `phone` varchar(20) NOT NULL,
  `adhar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `u_name`, `room_type`, `check_in`, `check_out`, `no_of_nights`, `final_price`, `status`, `phone`, `adhar`) VALUES
(23, 'prashanth Bhat', 'Basic', '2022-12-21', '2022-12-22', '1', '300', 1, '9740782911', '2344 4545 5654 5455'),
(24, 'Anish', 'Delux Room', '2022-12-23', '2022-12-25', '2', '2400', 1, '6364668640', '1111 2222 3333 4444'),
(25, 'Akash', 'Simple room', '2022-12-29', '2022-12-31', '2', '4000', 1, '1234556765', '2222 4444 5555 6666');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Anish', 'anish@gmail.com', '3455667678', 'yo yo '),
(9, ' prashanth ', ' prashanth@gmail.com', ' 9740782911 ', 'Prasanna manku'),
(10, ' prashanth Bhat ', ' prashanth@gmail.com', ' 9740782911 ', 'Akash beguda');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ingredients` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `ingredients`, `category`, `price`, `image`) VALUES
(1, 'Burger', 'Cheese burger with onions and tomato ', 'Snacks', '60', 'IMG-639a1530077210.89939975.jpg'),
(2, 'sound Indian thali', ' super avtu', 'Lunch', '120', 'IMG-639a2621927431.54501760.jpg'),
(3, 'Gobi manchuri', 'onions,sos gobi', 'Dinner', '60', 'IMG-639a2654796141.97967502.jpg'),
(4, 'Dosa', 'chatni rave', 'Breakfast', '30', 'IMG-639b36349770b1.98071140.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(5, 'IMG-639a24cb62ba96.63793741.jpg'),
(6, 'IMG-639a24d3418bb4.92328838.jpg'),
(7, 'IMG-639a24d91e0d46.24082289.jpg'),
(8, 'IMG-639b364acd56c7.48138575.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `image_url`) VALUES
(8, 'Sunset amazes', 'IMG-63977d437d3351.03232970.jpg'),
(9, 'This is second slider', 'IMG-63987c0bdb5f64.92525571.jpg'),
(10, 'Amazing homestay', 'IMG-639b35fdb9c822.11284653.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

CREATE TABLE `stay` (
  `id` int(5) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`id`, `room_type`, `description`, `image`, `price`, `status`) VALUES
(1, 'Simple room', 'A homestay is an accommodation where You stay with a local family and live with them. In general, it means that You have Your own room and depending on the family or Your preferences You are becoming ', 'IMG-639e0b58819aa7.61522644.jpg', '2000', 0),
(2, 'Delux Room', 'Homestay (also home stay and home-stay) is a form of hospitality and lodging whereby visitors share a residence with a local of the area (host) to which they are traveling.', 'IMG-639e0ce5145ad9.66147588.jpg', '1200', 0),
(3, 'Basic', 'best and cheap', 'IMG-639e0dd2d65f43.21330522.jpg', '300', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `adhar`, `password`) VALUES
(1, 'prashanth Bhat', 'prashanth@gmail.com', '9740782911', '2344 4545 5654 5455', '1234'),
(4, 'Anish', 'anish@gmail.com', '6364668640', '1111 2222 3333 4444', '123'),
(5, 'Akash', 'akash@gmail.com', '1234556765', '2222 4444 5555 6666', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stay`
--
ALTER TABLE `stay`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
