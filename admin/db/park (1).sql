-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 06:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricing_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adult_price` varchar(100) NOT NULL,
  `child_price` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricing_id`, `name`, `adult_price`, `child_price`, `date_created`) VALUES
(1, 'ride 1(motorcycle)', '5000', '400', '2022-07-22'),
(2, 'ride2(car riding)', '300', '250', '2022-07-21'),
(5, 'ride 5', '50', '30', '2022-07-29'),
(7, 'Jonathan ', '4', '6', '2022-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `ride_id` int(100) NOT NULL,
  `t_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`ride_id`, `t_id`, `name`, `description`, `date_created`) VALUES
(3, 0, 'ride 2', 'nice', '2022-07-21'),
(4, 0, 'ride12', 'diving', '2022-07-14'),
(6, 0, 'ride 3', 'swimming', '2022-07-05'),
(7, 0, 'motorcycle', 'rolling', '2022-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `t_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `no_adults` varchar(100) NOT NULL,
  `no_childs` varchar(100) NOT NULL,
  `adult_price` varchar(100) NOT NULL,
  `child_price` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `amount_tendered` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`t_id`, `name`, `no_adults`, `no_childs`, `adult_price`, `child_price`, `total_amount`, `amount_tendered`, `balance`, `date_created`) VALUES
(6, 'jonathan', '3', '2', '500', '400', '2300', '3000', '700', '2022-07-24 00:00:00'),
(7, 'william', '1', '1', '400', '300', '700', '700', '0', '2022-07-24 00:00:00'),
(8, 'william', '1', '1', '400', '300', '700', '700', '0', '2022-07-24 00:00:00'),
(9, 'boniface', '2', '3', '500', '100', '1300', '1500', '200', '2022-07-25 00:00:00'),
(10, 'philiph', '1', '1', '100', '50', '150', '200', '50', '2022-07-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_items`
--

CREATE TABLE `ticket_items` (
  `ticket_no` int(100) NOT NULL,
  `pricing_id` int(100) NOT NULL,
  `ride_id` int(100) NOT NULL,
  `t_id` int(100) NOT NULL,
  `visitor_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user',
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`, `photo`) VALUES
(30, 'zipporah13', 'zipporah@gmail.com', '$2y$10$pchSSL4Lz.1SvSJlf57r6Oh.st0PX99FQ.zIli.P.pfC5u1BZbIpW', 'user', ''),
(31, 'willy123', 'w@gmail.com', '$2y$10$WXnKKySjE9Sp0docbifGEO3Q3BSraEwUBMv27iq6poQoKjAe0JXoG', 'user', ''),
(32, 'precious', 'pre1@gmail.com', '$2y$10$WU/LTwdK4Bk.C2r6a/vXoOHGVweIXGfB3vc1fkfxMFAU7oftgzcqy', 'user', ''),
(36, 'ruth', 'r@gmil.com', '$2y$10$wP2/xqgM9q1E0Ky0DSaBjuDWv6cfQN42wOAfA/FErLuWUxtpwGXg2', 'user', ''),
(43, 'wajackoya', 'w2@gmail.com', '$2y$10$wfpThA8lMZkHGEBUnrzMcudst.Zo2itp0hONVY7aDxOT.7LBlEBTW', 'user', ''),
(45, 'zipporah13', 'zipporahz@gmail.com', '$2y$10$b92eA92YScf/PXEHQsrnwO8/mA4vtTatAsa8X44GNrATEtmVrLJOC', 'user', ''),
(46, 'precious jonah', 'p@gmail.com', '$2y$10$1SlFjJYb9/Ujszbl.lIxT.2A9Y5YJDXK50fXUS7JU9HnqsJPYQTQm', 'user', ''),
(52, 'philiphp', 'p11@gmail.com', '$2y$10$FLPqo.SnFWgC5SLilD1gWOhQ55RKJnGLo3qBBK.CR76ZijMz5Y4bS', 'user', ''),
(53, 'puru', 'puru@gmail.com', '$2y$10$iNME1qd/Azfvgv.8xxsssuh4rcXglPwQTdEgA8bSS0JzDhWzras/e', 'user', ''),
(57, 'ndinda', 'ndinda@gmail.com', '$2y$10$mwJe82Q35AYLZ0A3hEqd7uD43cGUIiNZP.DrB8pcyWv/r1kmmMT42', 'user', 'user_img/835_'),
(58, 'jonah1', 'jonah1@gmail.com', '$2y$10$UbIFOCL7lS5kfQPFevcbpOKoM6wQWndlxvGuV2vJTSYc0S2Rbg8B2', 'admin', 'user_img/410_'),
(62, 'admin', 'admin@gmail.com', '$2y$10$4jSeQPVvjbWaNmsYSkGucutjUCXZgUxnBejaMYCrV4CQhxNx3kLhm', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `vistors`
--

CREATE TABLE `vistors` (
  `vistors_id` int(100) NOT NULL,
  `ticket_no` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `idno` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `vdate` date NOT NULL,
  `vtime` time NOT NULL,
  `photo` varchar(100) NOT NULL,
  `car_no` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `vistors`
--

INSERT INTO `vistors` (`vistors_id`, `ticket_no`, `fullname`, `idno`, `gender`, `phoneno`, `vdate`, `vtime`, `photo`, `car_no`, `payment_status`) VALUES
(7, 0, 'zipporah muthini ', '345678', 'female', '233456789', '2022-07-27', '18:28:00', 'uploads/70332_ziporah1.jpg', 'KBF 567J', 'paid'),
(9, 0, 'william makhanu', '5576898', 'male', '5566878544', '2022-07-13', '05:00:00', 'uploads/64356_2page-img2.jpg', 'willy', 'not paid'),
(10, 0, 'ruth maede 123', '36652186', 'female', '0757177738', '2022-07-03', '15:20:00', 'uploads/42231_2page-img3.jpg', 'KCJ123 H', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ticket_items`
--
ALTER TABLE `ticket_items`
  ADD PRIMARY KEY (`ticket_no`),
  ADD KEY `pricing_id` (`pricing_id`,`ride_id`,`t_id`,`visitor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- Indexes for table `vistors`
--
ALTER TABLE `vistors`
  ADD PRIMARY KEY (`vistors_id`),
  ADD KEY `ticket_no` (`ticket_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `pricing_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `ride_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ticket_items`
--
ALTER TABLE `ticket_items`
  MODIFY `ticket_no` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `vistors`
--
ALTER TABLE `vistors`
  MODIFY `vistors_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
