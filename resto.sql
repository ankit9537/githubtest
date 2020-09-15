-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 02:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `foods` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `roomtype` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `email`, `address`, `foods`, `type`, `roomtype`, `image`) VALUES
(1, 'Dominoz', 'domninoz@gmail.com', 'surat', NULL, NULL, '', ''),
(2, 'pizzhut123', 'pizza@gmail.com', 'navsari', NULL, NULL, '', ''),
(3, 'spicy', 'spicy@gmail.com', 'vadodara', NULL, NULL, '', ''),
(4, 'rajuomlette', 'rajuomlette@gmail.com', 'vadodara', NULL, NULL, '', ''),
(5, 'tasty', 'tasty@gmail.com', 'vadodara', NULL, NULL, '', ''),
(6, 'chocklate', 'chocklate@gmail.com', 'vadodara', NULL, NULL, '', ''),
(7, 'vinayak', 'vinayak@gmail.com', 'maroli', NULL, NULL, '', ''),
(8, 'chicken', 'chicken@gmail.com', 'navsari', NULL, NULL, '', ''),
(9, 'omlette', 'omlette@gmail.com', 'maroli', NULL, NULL, '', ''),
(10, 'wd', 'patelankit1990@ymail.com', 'wefe', NULL, NULL, '', ''),
(11, 'vinayak vadapau', 'vinayak123@gmail.com', 'maroli', NULL, NULL, '', 'uploads/vkKLv5PGM29yAX6dOHQZaIgRPYjVTqDKuv6ogTSG.jpeg'),
(12, 'crazzy vadapau', 'crazzy@gmail.com', 'navsari', NULL, NULL, '', 'uploads/DwysKB5p4NszND9VzG6PRklRfm0XgNoC34HaTQbA.jpeg'),
(13, 'crazzy vadapau', 'crazzy@gmail.com', 'maroli', NULL, NULL, '', 'uploads/tQ65y2lDUqCZMloVDS7SuctKzqiCTXr78yhRuUOy.jpeg'),
(14, 'chiken masala', 'chiken@yahoo.com', 'navsari', 'chicken tikka', NULL, '', NULL),
(15, 'egg center', 'egg@gmail.com', 'navsari', 'chicken tikka,panner handi', NULL, '', NULL),
(16, 'spicy food', 'spicy@yahoo.co.in', 'navsari', 'chicken tikka', 'Both', '', NULL),
(17, 'kansad', 'kansad@gmail.com', 'maroli', 'chicken masala,panner handi', 'Both', '', NULL),
(18, 'kiwi mojito', 'kiwi@yahoo.com', 'maroli', 'chicken tikka', 'Veg', 'Non AC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'ankit', 'ankit@gmail.com', '123', '9537'),
(3, 'sachin', 'sachin@gmail.com', '123', '333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
