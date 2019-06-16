-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 07:10 PM
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
  `password` varchar(2050) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(3, 'abhi', '$2y$10$eQI9S0.tIzRDFtZoYHVANe9P0ngxhThjImPGgJYhOBP.AGW2EqQmW', '');

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
(2, 2, 'sculpture 1', '/artisan/assest/art/scul1.jpg', 'undeclare', '', '90000'),
(3, 2, 'sculpture 2', '/artisan/assest/art/scul2.jpg', 'undeclare', '', '95000'),
(4, 2, 'sculpture 3', '/artisan/assest/art/scul3.jpg', 'undeclare', '', '195000'),
(5, 2, 'sculpture 4', '/artisan/assest/art/scul4.jpg', 'undeclare', '', '199000'),
(6, 2, 'sculpture 6', '/artisan/assest/art/scul5.jpg', 'undeclare', '', '185000'),
(7, 2, 'sculpture 7', '/artisan/assest/art/scul6.jpg', 'undeclare', '', '2390000'),
(8, 2, 'sculpture 8', '/artisan/assest/art/scul7.jpg', 'undeclare', '', '185000'),
(9, 2, 'sculpture 9', '/artisan/assest/art/scul8.jpg', 'undeclare', '', '990000'),
(10, 2, 'sculpture 10', '/artisan/assest/art/scul9.jpg', 'undeclare', '', '295000'),
(11, 2, 'sculpture 11', '/artisan/assest/art/scul10.jpg', 'undeclare', '', '180000'),
(12, 2, 'sculpture 12', '/artisan/assest/art/scul11.jpg', 'undeclare', '', '123000'),
(13, 2, 'sculpture 13', '/artisan/assest/art/scul12.jpg', 'undeclare', '', '145000'),
(14, 2, 'sculpture 14', '/artisan/assest/art/scul13.jpg', 'undeclare', '', '90000'),
(15, 2, 'sculpture 15', '/artisan/assest/art/scul14.jpg', 'undeclare', '', '199000'),
(18, 1, 'painting 1', '/artisan/assest/art/pain1.jpg', 'undeclare', '', '90000'),
(19, 1, 'painting 2', '/artisan/assest/art/pain2.jpg', 'undeclare', '', '199000'),
(20, 1, 'painting 3', '/artisan/assest/art/pain3.jpg', 'undeclare', '', '185000'),
(21, 1, 'painting 4', '/artisan/assest/art/pain4.jpg', 'undeclare', '', '290000'),
(22, 1, 'painting 5', '/artisan/assest/art/pain5.jpg', 'undeclare', '', '2390000'),
(23, 1, 'painting 6', '/artisan/assest/art/pain6.jpg', 'undeclare', '', '95000'),
(24, 1, 'painting 7', '/artisan/assest/art/pain7.jpg', 'undeclare', '', '195000'),
(25, 1, 'painting 8', '/artisan/assest/art/pain8.jpg', 'undeclare', '', '299000'),
(26, 1, 'painting 9', '/artisan/assest/art/pain9.jpg', 'undeclare', '', '185000'),
(27, 1, 'painting 10', '/artisan/assest/art/pain10.jpg', 'undeclare', '', '299000'),
(28, 1, 'Painting 11', '/artisan/assest/art/pain11.jpg', 'undeclare', '', '190000'),
(29, 1, 'painting 12', '/artisan/assest/art/images (1).jpg', 'undeclare', '', '1390000'),
(30, 1, 'painting 13', '/artisan/assest/art/images (2).jpg', 'undeclare', '', '925000'),
(31, 1, 'painting 14', '/artisan/assest/art/images (4).jpg', 'undeclare', '', '245000'),
(32, 1, 'painting 15', '/artisan/assest/art/images (5).jpg', 'undeclare', '', '290000'),
(33, 1, 'painting 16', '/artisan/assest/art/images.jpg', 'undeclare', '', '199000'),
(34, 1, 'painting 17', '/artisan/assest/art/images (3).jpg', 'undeclare', '', '880000'),
(35, 3, 'water painting 1', '/artisan/assest/art/wat1.jpg', 'undeclare', '', '199000'),
(36, 3, 'water painting 2', '/artisan/assest/art/wat2.jpg', 'undeclare', '', '185000'),
(37, 3, 'water painting 3', '/artisan/assest/art/wat3.jpg', 'undeclare', '', '90000'),
(38, 3, 'water painting 4', '/artisan/assest/art/wat4.jpg', 'undeclare', '', '1390000'),
(39, 3, 'water painting 5', '/artisan/assest/art/wat5.jpg', 'undeclare', '', '195000'),
(40, 3, 'water painting 6', '/artisan/assest/art/wat6.jpg', 'undeclare', '', '799000'),
(41, 3, 'water painting 7', '/artisan/assest/art/wat7.jpg', 'undeclare', '', '75000'),
(42, 3, 'water painting 8', '/artisan/assest/art/wat8.jpg', 'undeclare', '', '90000'),
(43, 3, 'water painting 9', '/artisan/assest/art/wat9.jpg', 'undeclare', '', '195000'),
(44, 3, 'water painting 10', '/artisan/assest/art/wat10.jpg', 'undeclare', '', '1490000'),
(45, 3, 'water painting 11', '/artisan/assest/art/wat11.jpg', 'undeclare', '', '98000'),
(46, 3, 'water painting 12', '/artisan/assest/art/wat12.jpg', 'undeclare', '', '299000'),
(47, 3, 'water painting 13', '/artisan/assest/art/wat13.jpg', 'undeclare', '', '185000'),
(48, 3, 'water painting 14', '/artisan/assest/art/wat14.jpg', 'undeclare', '', '2390000'),
(49, 3, 'water painting 15', '/artisan/assest/art/wat15.jpg', 'undeclare', '', '99000'),
(50, 3, 'water painting 16', '/artisan/assest/art/wat16.jpg', 'undeclare', '', '860000'),
(51, 3, 'water painting 17', '/artisan/assest/art/wat17.jpg', 'undeclare', '', '199000'),
(52, 6, 'Artifacts 1', '/artisan/assest/art/arti1.jpg', 'undeclare', '', '199000'),
(53, 6, 'Artifacts 2', '/artisan/assest/art/arti2.jpg', 'undeclare', '', '185000'),
(54, 6, 'Artifacts 3', '/artisan/assest/art/arti3.jpg', 'undeclare', '', '190000'),
(55, 6, 'Artifacts 4', '/artisan/assest/art/arti4.jpg', 'undeclare', '', '290000'),
(56, 6, 'Artifacts 5', '/artisan/assest/art/arti5.jpg', 'undeclare', '', '175000'),
(57, 6, 'Artifacts 6', '/artisan/assest/art/arti6.jpg', 'undeclare', '', '190000'),
(58, 6, 'Artifacts 7', '/artisan/assest/art/arti7.jpg', 'undeclare', '', '390000'),
(59, 6, 'Artifacts 8', '/artisan/assest/art/arti8.jpg', 'undeclare', '', '342000'),
(60, 6, 'Artifacts 9', '/artisan/assest/art/arti9.jpg', 'undeclare', '', '186000'),
(61, 6, 'Artifacts 10', '/artisan/assest/art/arti10.jpg', 'undeclare', '', '199000'),
(62, 6, 'Artifacts 11', '/artisan/assest/art/arti11.jpg', 'undeclare', '', '165000'),
(63, 6, 'Artifacts 12', '/artisan/assest/art/arti12.jpg', 'undeclare', '', '770000'),
(64, 6, 'Artifacts 13', '/artisan/assest/art/arti13.jpg', 'undeclare', '', '198000'),
(65, 6, 'Artifacts 14', '/artisan/assest/art/arti14.jpg', 'undeclare', '', '90000'),
(67, 7, 'Landscapes 1', '/artisan/assest/art/land1.jpg', 'undeclare', '', '150000'),
(68, 7, 'Landscapes 2', '/artisan/assest/art/land2.jpg', 'undeclare', '', '185000'),
(69, 7, 'Landscapes 3', '/artisan/assest/art/land3.jpg', 'undeclare', '', '90000'),
(70, 7, 'Landscapes 4', '/artisan/assest/art/land4.jpg', 'undeclare', '', '190000'),
(71, 7, 'Landscapes 5', '/artisan/assest/art/land5.jpg', 'undeclare', '', '2390000'),
(72, 7, 'Landscapes 6', '/artisan/assest/art/land6.jpg', 'undeclare', '', '1700000'),
(73, 7, 'Landscapes 7', '/artisan/assest/art/land7.jpg', 'undeclare', '', '880000'),
(74, 7, 'Landscapes 8', '/artisan/assest/art/land8.jpg', 'undeclare', '', '890000'),
(75, 7, 'Landscapes 9', '/artisan/assest/art/land9.jpg', 'undeclare', '', '199000'),
(76, 7, 'Landscapes 10', '/artisan/assest/art/land10.jpg', 'undeclare', '', '80000'),
(77, 7, 'Landscapes 11', '/artisan/assest/art/land11.jpg', 'undeclare', '', '198000'),
(79, 7, 'Landscapes 12', '/artisan/assest/art/land12.jpg', 'undeclare', '', '90000'),
(80, 7, 'Landscapes 13', '/artisan/assest/art/land13.jpg', 'undeclare', '', '165000'),
(81, 8, 'Caligraphy 1', '/artisan/assest/art/calli1.jpg', 'undeclare', '', '199000'),
(82, 8, 'Caligraphy 2', '/artisan/assest/art/calli2.jpg', 'undeclare', '', '185000'),
(83, 8, 'Caligraphy 3', '/artisan/assest/art/calli3.jpg', 'undeclare', '', '760000'),
(84, 8, 'Caligraphy 4', '/artisan/assest/art/calli4.jpg', 'undeclare', '', '159000'),
(85, 8, 'Caligraphy 5', '/artisan/assest/art/calli5.jpg', 'undeclare', '', '192000'),
(86, 8, 'Caligraphy 6', '/artisan/assest/art/calli6.jpg', 'undeclare', '', '590000'),
(87, 8, 'Caligraphy 7', '/artisan/assest/art/calli7.jpg', 'undeclare', '', '155000'),
(88, 8, 'Caligraphy 8', '/artisan/assest/art/calli8.jpg', 'undeclare', '', '980000'),
(89, 8, 'Caligraphy 9', '/artisan/assest/art/calli9.jpg', 'undeclare', '', '185000'),
(90, 8, 'Caligraphy 10', '/artisan/assest/art/calli10.jpg', 'undeclare', '', '197000'),
(91, 8, 'Caligraphy 11', '/artisan/assest/art/calli11.jpg', 'undeclare', '', '135000'),
(92, 8, 'Caligraphy 12', '/artisan/assest/art/calli12.png', 'undeclare', '', '770000'),
(94, 8, 'Caligraphy 14', '/artisan/assest/art/calli14.jpg', 'undeclare', '', '155000'),
(95, 8, 'Caligraphy 15', '/artisan/assest/art/calli15.jpg', 'undeclare', '', '125000'),
(96, 9, 'Mosaic painting 1', '/artisan/assest/art/mosa1.jpg', 'undeclare', '', '199000'),
(97, 9, 'Mosaic painting 2', '/artisan/assest/art/mosa2.jpg', 'undeclare', '', '185000'),
(98, 9, 'Mosaic painting 3', '/artisan/assest/art/mosa3.jpg', 'undeclare', '', '780000'),
(99, 9, 'Mosaic painting 4', '/artisan/assest/art/mosa4.jpg', 'undeclare', '', '165000'),
(100, 9, 'Mosaic painting 5', '/artisan/assest/art/mosa5.jpg', 'undeclare', '', '159000'),
(101, 9, 'Mosaic painting 6', '/artisan/assest/art/mosa7.jpg', 'undeclare', '', '194000'),
(102, 9, 'Mosaic painting 7', '/artisan/assest/art/mosa8.jpg', 'undeclare', '', '129000'),
(103, 9, 'Mosaic painting 8', '/artisan/assest/art/mosa9.jpg', 'undeclare', '', '390000'),
(104, 9, 'Mosaic painting 9', '/artisan/assest/art/mosa10.jpg', 'undeclare', '', '189000'),
(105, 9, 'Mosaic painting 10', '/artisan/assest/art/mosa11.jpg', 'undeclare', '', '189000'),
(106, 9, 'Mosaic painting 11', '/artisan/assest/art/mosa12.jpg', 'undeclare', '', '145000'),
(107, 9, 'Mosaic painting 12', '/artisan/assest/art/mosa13.jpg', 'undeclare', '', '2390000'),
(108, 9, 'Mosaic painting 13', '/artisan/assest/art/mosa14.jpg', 'undeclare', '', '180000'),
(109, 9, 'Mosaic painting 14', '/artisan/assest/art/mosa15.jpg', 'undeclare', '', '199000'),
(110, 10, 'Abstract 1', '/artisan/assest/art/abstract1.jpg', 'undeclare', '', '199000'),
(111, 10, 'Abstract 2', '/artisan/assest/art/abstract2.jpg', 'undeclare', '', '185000'),
(112, 10, 'Abstract 3', '/artisan/assest/art/abstract3.jpg', 'undeclare', '', '90000'),
(113, 10, 'Abstract 4', '/artisan/assest/art/abstract4.jpg', 'undeclare', '', '390000'),
(114, 10, 'Abstract 5', '/artisan/assest/art/abstract5.jpg', 'undeclare', '', '99000'),
(115, 10, 'Abstract 6', '/artisan/assest/art/abstract6.jpg', 'undeclare', '', '780000'),
(116, 10, 'Abstract 7', '/artisan/assest/art/abstract7.jpg', 'undeclare', '', '690000'),
(117, 10, 'Abstract 8', '/artisan/assest/art/abstract8.jpg', 'undeclare', '', '149000'),
(118, 10, 'Abstract 9', '/artisan/assest/art/abstract9.jpg', 'undeclare', '', '190000'),
(119, 10, 'Abstract 10', '/artisan/assest/art/abstract10.jpg', 'undeclare', '', '186000'),
(120, 10, 'Abstract 11', '/artisan/assest/art/abstract11.jpg', 'undeclare', '', '177000'),
(121, 10, 'Abstract 12', '/artisan/assest/art/abstract12.jpg', 'undeclare', '', '155000'),
(122, 10, 'Abstract 13', '/artisan/assest/art/abstract13.jpg', 'undeclare', '', '890000'),
(123, 11, 'Ceramics 1', '/artisan/assest/art/cera1.jpg', 'undeclare', '', '185000'),
(124, 11, 'Ceramics 2', '/artisan/assest/art/cera2.jpg', 'undeclare', '', '169000'),
(125, 11, 'Ceramics 3', '/artisan/assest/art/cera3.jpg', 'undeclare', '', '187000'),
(126, 11, 'Ceramics 4', '/artisan/assest/art/cera4.jpg', 'undeclare', '', '105000'),
(127, 11, 'Ceramics 5', '/artisan/assest/art/cera5.jpg', 'undeclare', '', '165000'),
(128, 11, 'Ceramics 6', '/artisan/assest/art/cera6.jpg', 'undeclare', '', '134000'),
(129, 11, 'Ceramics 7', '/artisan/assest/art/cera7.jpg', 'undeclare', '', '159000'),
(130, 11, 'Ceramics 9', '/artisan/assest/art/cera8.jpg', 'undeclare', '', '550000'),
(131, 11, 'Ceramics 10', '/artisan/assest/art/cera9.jpg', 'undeclare', '', '870000'),
(132, 11, 'Ceramics 11', '/artisan/assest/art/cera10.jpg', 'undeclare', '', '790000'),
(133, 11, 'Ceramics 12', '/artisan/assest/art/cera11.jpg', 'undeclare', '', '166000'),
(134, 11, 'Ceramics 13', '/artisan/assest/art/cera12.jpg', 'undeclare', '', '159000'),
(135, 11, 'Ceramics 14', '/artisan/assest/art/cera13.jpg', 'undeclare', '', '85000'),
(136, 12, 'Traditional painting 1', '/artisan/assest/art/trade1.jpg', 'undeclare', '', '185000'),
(137, 12, 'Traditional painting 2', '/artisan/assest/art/trade2.jpg', 'undeclare', '', '199000'),
(138, 12, 'Traditional painting 3', '/artisan/assest/art/trade3.jpg', 'undeclare', '', '2390000'),
(139, 12, 'Traditional painting 4', '/artisan/assest/art/trade4.jpg', 'undeclare', '', '145000'),
(140, 12, 'Traditional painting 5', '/artisan/assest/art/trade5.jpg', 'undeclare', '', '196000'),
(141, 12, 'Traditional painting 6', '/artisan/assest/art/trade6.jpg', 'undeclare', '', '179000'),
(142, 12, 'Traditional painting 7', '/artisan/assest/art/trade7.jpg', 'undeclare', '', '2390000'),
(143, 12, 'Traditional painting 8', '/artisan/assest/art/trade8.jpg', 'undeclare', '', '185000'),
(144, 12, 'Traditional painting 9', '/artisan/assest/art/trade9.jpg', 'undeclare', '', '190000'),
(145, 12, 'Traditional painting 10', '/artisan/assest/art/trade10.jpg', 'undeclare', '', '1390000'),
(147, 12, 'Traditional painting 12', '/artisan/assest/art/trade12.jpg', 'undeclare', '', '90000'),
(148, 12, 'Traditional painting 13', '/artisan/assest/art/trade13.jpg', 'undeclare', '', '175000'),
(149, 12, 'Traditional painting 14', '/artisan/assest/art/trade14.jpg', 'undeclare', '', '970000'),
(150, 12, 'Traditional painting 15', '/artisan/assest/art/trade15.jpg', 'undeclare', '', '185000'),
(151, 13, 'Visual arts 1', '/artisan/assest/art/visa1.jpg', 'undeclare', '', '110000'),
(152, 13, 'Visual arts 2', '/artisan/assest/art/visa2.jpg', 'undeclare', '', '199000'),
(153, 13, 'Visual arts 3', '/artisan/assest/art/visa3.jpg', 'undeclare', '', '385000'),
(154, 13, 'Visual arts 4', '/artisan/assest/art/visa4.jpg', 'undeclare', '', '90000'),
(155, 13, 'Visual arts 5', '/artisan/assest/art/visa5.jpg', 'undeclare', '', '198000'),
(156, 13, 'Visual arts 6', '/artisan/assest/art/visa6.jpg', 'undeclare', '', '165000'),
(157, 13, 'Visual arts 7', '/artisan/assest/art/visa7.jpg', 'undeclare', '', '550000'),
(158, 13, 'Visual arts 8', '/artisan/assest/art/visa8.jpg', 'undeclare', '', '175000'),
(159, 13, 'Visual arts 9', '/artisan/assest/art/visa9.jpg', 'undeclare', '', '995000'),
(160, 13, 'Visual arts 10', '/artisan/assest/art/visa10.jpg', 'undeclare', '', '90000'),
(161, 13, 'Visual arts 11', '/artisan/assest/art/visa11.jpg', 'undeclare', '', '190000'),
(162, 13, 'Visual arts 12', '/artisan/assest/art/visa12.jpg', 'undeclare', '', '850000'),
(163, 13, 'Visual arts 13', '/artisan/assest/art/visa13.jpg', 'undeclare', '', '122000'),
(164, 13, 'Visual arts 14', '/artisan/assest/art/visa14.jpg', 'undeclare', '', '585000'),
(165, 1, 'Paintint 0', '/artisan/assest/art/paint1.jpg', 'paint', '', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `shipping_add` varchar(256) NOT NULL,
  `ordered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` text NOT NULL,
  `product_title` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `shipping_address` varchar(256) NOT NULL,
  `order_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `email`, `product_title`, `price`, `shipping_address`, `order_at`) VALUES
(1, 'rash', 'rashmi@mail.com', 'water painting 2', '185000', '23, bataliyan bhopal india', '2019-06-15 06:05:40'),
(8, 'abhi', 'abhi@mail.com', 'sculpture 2', '95000', 'vishwakarma nagar Bagsewaniya', '2019-06-15 06:22:42'),
(14, 'rash', 'rashmi@mail.com', 'Landscapes 2', '185000', '23, bataliyan bhopal india', '2019-06-15 06:26:02'),
(15, 'rash', 'rashmi@mail.com', 'Ceramics 2', '169000', '23, bataliyan bhopal india', '2019-06-15 06:39:33'),
(16, 'abhi', 'abhi@mail.com', 'sculpture 2', '95000', 'vishwakarma nagar Bagsewaniya', '2019-06-15 07:23:28');

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
(3, 'Abhi', 'abhishek', 'abhi@gmail.com', '202cb962ac59075b964b07152d234b70', '460,Bagsewaniya,bhopal,m.p. india', '2019-05-01 12:28:10'),
(4, 'Ankush', 'ankush', 'ankush@m.com', 'e10adc3949ba59abbe56e057f20f883e', 'Barkheda pathani', '2019-05-03 13:24:51'),
(5, 'rashmi', 'rash', 'rashmi@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '23, bataliyan bhopal india', '2019-05-03 14:14:47'),
(6, 'Abhishek', 'abhi', 'abhi@mail.com', '202cb962ac59075b964b07152d234b70', 'vishwakarma nagar Bagsewaniya', '2019-06-02 19:12:43');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artifacts`
--
ALTER TABLE `artifacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `thumb`
--
ALTER TABLE `thumb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
