-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 05:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'abhi', '21232f297a57a5a743894a0e4a801fc3', 'abhishek soni');

-- --------------------------------------------------------

--
-- Table structure for table `artifacts`
--

CREATE TABLE `artifacts` (
  `id` int(10) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `title` varchar(70) NOT NULL,
  `image_url` text NOT NULL,
  `artist_name` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `price` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artifacts`
--

INSERT INTO `artifacts` (`id`, `cat_id`, `title`, `image_url`, `artist_name`, `content`, `price`) VALUES
(1, 1, 'untilted', '/artisan/assest/art/download (5).jpg', 'undeclare', '', '125000');

-- --------------------------------------------------------

--
-- Table structure for table `thumb`
--

CREATE TABLE `thumb` (
  `id` int(11) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thumb`
--

INSERT INTO `thumb` (`id`, `image_url`, `title`) VALUES
(1, 'http://localhost/artisan/img/thumb/painting.jpg', 'Painting'),
(2, 'http://localhost/artisan/img/thumb/sclupture.jpg', 'Sculpture'),
(3, 'http://localhost/artisan/img/thumb/water-painting.jpg', 'Water Painting'),
(4, 'http://127.0.0.1/artisan/img/thumb/potraits.jpg', 'Potraits'),
(5, 'http://127.0.0.1/artisan/img/thumb/waterArts.jpg', 'Water Arts'),
(6, 'http://127.0.0.1/artisan/img/thumb/artifactes.jfif', 'Artifacts'),
(7, 'http://127.0.0.1/artisan/img/thumb/lanndscapes.jfif', 'Landscapes'),
(8, 'http://127.0.0.1/artisan/img/thumb/caligraphy.jpg', 'Caligraphy'),
(9, 'http://127.0.0.1/artisan/img/thumb/mosaic.jpg', 'Mosic Painting'),
(10, 'http://127.0.0.1/artisan/img/thumb/abstract.jpg', 'Abstract'),
(11, 'http://localhost/artisan/img/thumb/cremics.jpg', 'Ceramics'),
(12, 'http://localhost/artisan/img/thumb/traditional.jpg', 'traditional paintings'),
(13, '/artisan/assest/category/download (5).jpg', 'Visual Art');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `email`, `password`, `address`, `created_at`) VALUES
(3, 'Abhi', 'abhishek', 'a@m.com', '202cb962ac59075b964b07152d234b70', 'hhhh', '2019-05-01 12:28:10'),
(4, 'Ankush', 'ankush', 'ankush@m.com', 'e10adc3949ba59abbe56e057f20f883e', 'kahi ka bhi le le ', '2019-05-03 13:24:51'),
(5, 'Rashmi', 'rash', 'rashmi@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hhh', '2019-05-03 14:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artifacts`
--
ALTER TABLE `artifacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thumb`
--
ALTER TABLE `thumb`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artifacts`
--
ALTER TABLE `artifacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thumb`
--
ALTER TABLE `thumb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
