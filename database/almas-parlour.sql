-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 12:07 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almas_parlour`
--
CREATE DATABASE IF NOT EXISTS `almas_parlour` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `almas_parlour`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `username`, `password`, `date_created`) VALUES
(1, 'admin@almasparlour.co.ke', '$2y$10$V6k5PgvrgiabnbOHTXJZL.KtsSCHfPOPA3SZYbzR5V9ZsqPhyMW6.', '2017-12-02 17:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `cart_basket`
--

CREATE TABLE `cart_basket` (
  `cart_id` int(11) NOT NULL,
  `user_id` varchar(70) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cart_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `item_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_basket`
--

INSERT INTO `cart_basket` (`cart_id`, `user_id`, `item_id`, `quantity`, `cart_date`, `status`, `item_price`) VALUES
(19, '1', 33, 1, '2018-01-13 18:32:08', 'carted', '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `fav_items`
--

CREATE TABLE `fav_items` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `fav_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav_items`
--

INSERT INTO `fav_items` (`fav_id`, `user_id`, `item_id`, `fav_date`) VALUES
(7, 1, 24, '2017-12-07 12:10:00'),
(8, 1, 33, '2017-12-07 12:10:17'),
(9, 1, 20, '2018-01-12 02:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `items_list`
--

CREATE TABLE `items_list` (
  `item_id` int(11) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `additional_info` longtext NOT NULL,
  `color` varchar(20) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_size` varchar(10) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_list`
--

INSERT INTO `items_list` (`item_id`, `item_code`, `item_name`, `type`, `description`, `additional_info`, `color`, `image_path`, `item_price`, `item_size`, `item_quantity`, `upload_date`) VALUES
(3, 'APDR158789', 'Prom Mini Dress', 'dress', 'black mini dress ', 'Good for prom', 'black', 'items-images/dresses/dress-image-1.jpg', '2000.75', '', 0, '2017-11-27 15:24:23'),
(4, 'APDR158790', 'Prom Long Dress', 'dress', 'red long dress ', 'Good for prom', 'red', 'items-images/dresses/dress-image-2.jpg', '0.00', 'L', 1, '2017-11-27 15:25:50'),
(5, 'APDR158791', 'Prom Long Dress', 'dress', 'blue long dress ', 'Good for prom', 'blue', 'items-images/dresses/dress-image-3.jpg', '0.00', '', 0, '2017-11-27 15:26:37'),
(6, 'APDR158792', 'Prom Long Dress', 'dress', 'pink long dress ', 'Good for prom', 'pink', 'items-images/dresses/dress-image-4.jpg', '0.00', '', 0, '2017-11-27 15:27:20'),
(7, 'APDR158793', 'Prom Long Dress', 'dress', 'cream long dress ', 'Good for prom', 'cream', 'items-images/dresses/dress-image-5.jpg', '0.00', '', 0, '2017-11-27 15:27:48'),
(8, 'APDR158794', 'Prom Long Dress', 'dress', 'black long dress ', 'Good for prom', 'black', 'items-images/dresses/dress-image-6.jpg', '0.00', '', 0, '2017-11-27 15:28:20'),
(9, 'APNG158770', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'pink', 'items-images/nightgowns/nightgown-image-1.jpg', '0.00', '', 0, '2017-11-27 15:31:38'),
(10, 'APNG158771', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'black white', 'items-images/nightgowns/nightgown-image-2.jpg', '0.00', '', 14, '2017-11-27 15:32:17'),
(12, 'APNG158773', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'pink', 'items-images/nightgowns/nightgown-image-4.jpg', '0.00', '', 0, '2017-11-27 15:33:29'),
(13, 'APNG158774', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'light-blue', 'items-images/nightgowns/nightgown-image-5.jpg', '0.00', '', 12, '2017-11-27 15:33:47'),
(14, 'APNG158775', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'white', 'items-images/nightgowns/nightgown-image-6.jpg', '0.00', '', 0, '2017-11-27 15:34:13'),
(15, 'APCM178960', 'Cosmetic For Women', 'cosmetics', 'Cosmetics for women', 'Cosmetics', 'black', 'items-images/cosmetics/cosmetics-image-1.jpg', '0.00', '', 0, '2017-11-27 15:36:22'),
(16, 'APCM178961', 'Cosmetic For Women', 'cosmetics', 'Cosmetics for women', 'Cosmetics', 'blue', 'items-images/cosmetics/cosmetics-image-2.jpg', '0.00', '', 20, '2017-11-27 15:37:00'),
(17, 'APCM178962', 'Cosmetic For Women', 'cosmetics', 'Cosmetics for women', 'Cosmetics', 'pink', 'items-images/cosmetics/cosmetics-image-3.jpg', '0.00', '', 0, '2017-11-27 15:37:18'),
(18, 'APCM178963', 'Cosmetic For Women', 'cosmetics', 'Cosmetics for women', 'Cosmetics', 'green', 'items-images/cosmetics/cosmetics-image-4.jpg', '0.00', '', 0, '2017-11-27 15:37:36'),
(19, 'APCM178964', 'Cosmetic For Women', 'cosmetics', 'Cosmetics for women', 'Cosmetics', 'purple', 'items-images/cosmetics/cosmetics-image-5.jpg', '0.00', '', 0, '2017-11-27 15:37:59'),
(20, 'APCM178965', 'Cosmetic For Women', 'cosmetics', 'Cosmetics for women', 'Cosmetics', 'brown', 'items-images/cosmetics/cosmetics-image-6.jpg', '0.00', '', 0, '2017-11-27 15:38:27'),
(21, 'APJS168943', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'black', 'items-images/jumpsuits/jumpsuit-image-1.jpg', '1000.00', '', 0, '2017-11-27 15:41:47'),
(22, 'APJS168944', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'black', 'items-images/jumpsuits/jumpsuit-image-2.jpg', '3000.70', '', 0, '2017-11-27 15:42:00'),
(23, 'APJS168945', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'black', 'items-images/jumpsuits/jumpsuit-image-3.jpg', '5000.75', '', 0, '2017-11-27 15:42:19'),
(24, 'APJS168946', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'red', 'items-images/jumpsuits/jumpsuit-image-4.jpg', '6000.00', '', 13, '2017-11-27 15:42:34'),
(25, 'APJS168947', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'cream', 'items-images/jumpsuits/jumpsuit-image-5.jpg', '2500.00', '', 0, '2017-11-27 15:43:02'),
(26, 'APJS168948', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'black', 'items-images/jumpsuits/jumpsuit-image-6.jpg', '3000.50', '', 0, '2017-11-27 15:43:22'),
(29, 'APDR523654', 'long black dress', 'dress', 'black long dress for formal and informal functions', 'beautiful black dress', 'green', 'items-images/dresses/dress_type.jpg', '3000.00', '', 0, '2017-12-02 23:06:27'),
(33, 'APJS523654', 'Jumpsuit For Sale', 'jumpsuits', 'Checkered jumpsuit black and white', 'Checkered jumpsuit black and white', 'black', 'items-images/jumpsuits/A-Crossing-belt-Jumpsuit.-300x300.jpg', '5000.00', '', 16, '2017-12-03 00:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `kenya_counties`
--

CREATE TABLE `kenya_counties` (
  `county_id` int(11) NOT NULL,
  `county_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kenya_counties`
--

INSERT INTO `kenya_counties` (`county_id`, `county_name`) VALUES
(1, 'Mombasa\r\n'),
(2, 'Kwale\r\n'),
(3, 'Kilifi\r\n'),
(4, 'Tana River\r\n'),
(5, 'Lamu\r\n'),
(6, 'Taita-Taveta\r\n'),
(7, 'Garissa\r\n'),
(8, 'Wajir\r\n'),
(9, 'Mandera\r\n'),
(10, 'Marsabit\r\n'),
(11, 'Isiolo\r\n'),
(12, 'Meru\r\n'),
(13, 'Tharaka-Nithi\r\n'),
(14, 'Embu\r\n'),
(15, 'Kitui\r\n'),
(16, 'Machakos\r\n'),
(17, 'Makueni\r\n'),
(18, 'Nyandarua\r\n'),
(19, 'Nyeri\r\n'),
(20, 'Kirinyaga\r\n'),
(21, 'Murang\'a'),
(22, 'Kiambu\r\n'),
(23, 'Turkana\r\n'),
(24, 'West Pokot\r\n'),
(25, 'Samburu\r\n'),
(26, 'Trans Nzoia\r\n'),
(27, 'Uasin Gishu\r\n'),
(28, 'Elgeyo-Marakwet\r\n'),
(29, 'Nandi\r\n'),
(30, 'Baringo\r\n'),
(31, 'Laikipia\r\n'),
(32, 'Nakuru\r\n'),
(33, 'Narok\r\n'),
(34, 'Kajiado\r\n'),
(35, 'Kericho\r\n'),
(36, 'Bomet\r\n'),
(37, 'Kakamega\r\n'),
(38, 'Vihiga\r\n'),
(39, 'Bungoma\r\n'),
(40, 'Busia\r\n'),
(41, 'Siaya\r\n'),
(42, 'Kisumu'),
(43, 'Homa Bay\r\n'),
(44, 'Migori'),
(45, 'Kisii'),
(46, 'Nyamira\r\n'),
(47, 'Nairobi City\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `msg_status` varchar(10) NOT NULL,
  `send_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender_id`, `receiver_id`, `message`, `msg_status`, `send_date`) VALUES
(1, 1, 1, 'this is a test message, do not reply', 'unread', '2017-12-07 07:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `newletters_id` int(11) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `newletter_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`newletters_id`, `user_email`, `newletter_date`) VALUES
(1, 'margaiwangara@gmail.com', '2017-12-10 07:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_message` longtext,
  `review_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(70) DEFAULT NULL,
  `surname` varchar(70) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `adress_name` longtext,
  `adress` longtext,
  `adress_two` longtext,
  `postal_code` varchar(10) DEFAULT NULL,
  `user_tel` varchar(20) DEFAULT NULL,
  `confirm_code` varchar(100) DEFAULT NULL,
  `confirmed` varchar(100) DEFAULT NULL,
  `pass_reset_code` varchar(100) DEFAULT NULL,
  `pass_reset_confirmed` varchar(100) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `username`, `firstname`, `surname`, `email`, `password`, `city`, `adress_name`, `adress`, `adress_two`, `postal_code`, `user_tel`, `confirm_code`, `confirmed`, `pass_reset_code`, `pass_reset_confirmed`, `creation_date`) VALUES
(1, 'Margai96', 'Abdulkarim Margai', 'Wangara', 'margaiwangara@gmail.com', '$2y$10$VVZlO/G1AVvDEa5ZySzdt.XMHRXhBlyDzzCHahCdetdoaCl64ndr6', 'Kakamega', '', '50102 64 Mumias', '50102 64 Mumias', '50102', '', '0', '1', '0', '1', '2017-11-26 18:45:45'),
(2, 'Keithlas95', 'keithlas', 'wangara', 'keithlas@wangaras.com', '$2y$10$wR7IDVdbY910DIQfy7XMbODsB0xpY5Mg8slHE2CC513kRKaU68ZsK', '', '', '', NULL, NULL, NULL, '0', '1', '0', '1', '2017-11-26 20:47:08'),
(3, '', '', '', 'habibdukuly@gmail.com', '$2y$10$VVZlO/G1AVvDEa5ZySzdt.XMHRXhBlyDzzCHahCdetdoaCl64ndr6', '', '', '', NULL, NULL, NULL, '0', '1', '', '', '2017-11-28 15:27:52'),
(4, '', '', '', 'alikeen@almasparlour.co.ke', '$2y$10$l/J6B4bvwNBA1moJNhrueeAFGeKWiSNVNsBMvHmmMVY1kfWaRVZja', '', '', '', NULL, NULL, NULL, '0', '1', '', '', '2017-11-28 17:57:06'),
(7, '', '', '', 'trialrun@three.com', '$2y$10$9vUJ14hueXInqZyEGml00ORyz6m816BU818ITI3aN6/mjFCXvkYsu', '', '', '', NULL, NULL, NULL, '411660109', '0', '', '', '2017-11-29 07:10:24'),
(8, '', '', '', 'abdulwangara@almasparlour.co.ke', '$2y$10$yNnkLq/3JvHpRDqPGAAy6.sixJ0XnbVA.2ZWdIJ5xxB7vYcQ.ozQW', '', '', '', NULL, NULL, NULL, '995591502', '0', '', '', '2017-11-29 08:00:16'),
(9, '', '', '', 'sallyambila@almasparlour.co.ke', '$2y$10$OABaRNurjJQmsQkU19ziHOI2MU/wLAMG0D3Lu.1kT3yfQTZ3pnob.', '', '', '', NULL, NULL, NULL, '764387311', '0', '', '', '2017-11-29 08:09:11'),
(10, '', '', '', 'jacob@ug.com', '$2y$10$KbU314pBM9J1ixJImTcLIelp4Fd4nOs8wwu2TKZ7F3DMnsJqk6m3e', '', '', '', NULL, NULL, NULL, '0', '1', '', '', '2017-11-29 08:37:22'),
(12, 'Margai96', NULL, NULL, 'mwangara@gmail.com', '$2y$10$HQsbbp1BKfG7rXvqmmTHk.YdP221ekmug6ZZkn5TnelYSBjci6BMS', NULL, NULL, NULL, NULL, NULL, NULL, 'b05b5d0a3ad2d083830ace2c4e85e10c', '0', NULL, NULL, '2018-01-06 18:16:37'),
(14, 'Keithlas95', NULL, NULL, 'keithlas@gmail.com', '$2y$10$C1vBkcPK94ZM0WM20rqgHO5cb3x1JtxH6p0u2i.PNsUVyXqZedwci', NULL, NULL, NULL, NULL, NULL, NULL, '38aaa3ce540d074216c067eb7657f6a9', '0', NULL, NULL, '2018-01-06 18:26:09'),
(15, 'Salma2000', NULL, NULL, 'salmawangara@wangaracorp.com', '$2y$10$9MLB.1nuZB4JD6xTk6p0MuNbOA.ziBSjKkcp2UOxXv3JpfEKikUeq', NULL, NULL, NULL, NULL, NULL, NULL, 'd2400428465b9d107bef334298d12c3b', '0', NULL, NULL, '2018-01-06 18:31:16'),
(16, 'Fatma1999', NULL, NULL, 'fatmanelima@wangaracorp.com', '$2y$10$rba5ZXUNTAkF4.zG1wWmNeGrfS8o3Lx/A1lQ90WGf0evOHg/GRQCq', NULL, NULL, NULL, NULL, NULL, NULL, '2a5664a424cc87f17a3c8b806f68d4f3', '0', NULL, NULL, '2018-01-06 18:35:47'),
(17, 'Sadam1993', NULL, NULL, 'sadam@wangaracorp.com', '$2y$10$GBNx0UrivYDxv55.2lJOsefH6z5CXvnjDM.9ZgIrSVgIjbw4JZ.wu', NULL, NULL, NULL, NULL, NULL, NULL, '1ea4d268990acfdbeab2aba2e263b480', '0', NULL, NULL, '2018-01-06 18:37:28'),
(18, 'abdulM1995', NULL, NULL, 'abdulmargai@gmail.com', '$2y$10$7BLwqMA5nYTIUq1McE8qNOZ0x1xCde.MYTeck.euZHDTaYJ1aCKm6', NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', NULL, NULL, '2018-01-06 19:34:01'),
(19, 'Sally1995', NULL, NULL, 'sallyambila@gmail.com', '$2y$10$O7sxHi3waz/RFB/FZ7OWneMG.eQzgQrxf0rOtN/.RQNmunGwxSUKm', NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', NULL, NULL, '2018-01-07 18:23:45'),
(20, 'JamesFranko90', 'james', 'franko', 'jfranko@hollywood.com', '$2y$10$tRJ1Ixu5yBFaBzhTFYu4neAEFChhMOSs5ZksaAzK0k8IHxVgHQ/SK', NULL, NULL, NULL, NULL, NULL, NULL, 'cafaf740eb3c543300227c7b2ed44e56', '0', NULL, NULL, '2018-01-10 11:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_traffic`
--

CREATE TABLE `user_traffic` (
  `ip_id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_traffic`
--

INSERT INTO `user_traffic` (`ip_id`, `ip`, `visit_date`) VALUES
(1, '127.0.0.1', '2017-12-08 12:09:22'),
(2, '127.0.0.1', '2017-12-08 12:18:07'),
(3, '127.0.0.1', '2017-12-08 12:18:22'),
(4, '127.0.0.1', '2017-12-08 12:18:25'),
(5, '127.0.0.1', '2017-12-08 12:19:10'),
(6, '127.0.0.1', '2017-12-08 12:19:37'),
(7, '127.0.0.1', '2017-12-08 12:22:58'),
(8, '127.0.0.1', '2017-12-08 12:23:35'),
(9, '127.0.0.1', '2017-12-08 12:24:40'),
(10, '127.0.0.1', '2017-12-08 12:25:13'),
(11, '127.0.0.1', '2017-12-08 12:25:16'),
(12, '127.0.0.1', '2017-12-08 12:25:18'),
(13, '127.0.0.1', '2017-12-08 12:25:21'),
(14, '127.0.0.1', '2017-12-08 12:25:23'),
(15, '127.0.0.1', '2017-12-08 12:25:56'),
(16, '127.0.0.1', '2017-12-08 12:25:58'),
(17, '127.0.0.1', '2017-12-08 12:26:01'),
(18, '127.0.0.1', '2017-12-08 12:26:03'),
(19, '192.25.41.53', '2017-12-08 13:02:06'),
(20, '365.25.41.25', '2017-12-08 13:04:48'),
(21, '127.0.0.1', '2017-12-08 19:17:16'),
(22, '127.0.0.1', '2017-12-08 19:19:01'),
(23, '127.0.0.1', '2017-12-08 19:49:06'),
(24, '127.0.0.1', '2017-12-08 20:02:23'),
(25, '127.0.0.1', '2017-12-10 07:32:31'),
(26, '127.0.0.1', '2017-12-10 07:38:57'),
(27, '127.0.0.1', '2017-12-10 07:39:22'),
(28, '127.0.0.1', '2017-12-10 07:39:47'),
(29, '127.0.0.1', '2017-12-10 07:39:59'),
(30, '127.0.0.1', '2017-12-10 07:43:14'),
(31, '127.0.0.1', '2017-12-10 07:45:22'),
(32, '127.0.0.1', '2017-12-10 07:47:16'),
(33, '127.0.0.1', '2017-12-10 07:47:46'),
(34, '127.0.0.1', '2017-12-10 07:48:46'),
(35, '127.0.0.1', '2017-12-10 07:48:52'),
(36, '127.0.0.1', '2017-12-10 07:48:54'),
(37, '127.0.0.1', '2017-12-10 07:50:09'),
(38, '127.0.0.1', '2017-12-10 07:50:12'),
(39, '127.0.0.1', '2017-12-10 07:51:12'),
(40, '127.0.0.1', '2017-12-10 07:52:03'),
(41, '127.0.0.1', '2017-12-10 07:52:54'),
(42, '127.0.0.1', '2017-12-10 07:53:23'),
(43, '127.0.0.1', '2017-12-10 07:54:01'),
(44, '127.0.0.1', '2017-12-10 07:54:04'),
(45, '127.0.0.1', '2017-12-10 07:54:06'),
(46, '127.0.0.1', '2017-12-10 07:54:41'),
(47, '127.0.0.1', '2017-12-10 07:55:21'),
(48, '127.0.0.1', '2017-12-10 07:55:55'),
(49, '127.0.0.1', '2017-12-10 07:56:47'),
(50, '127.0.0.1', '2017-12-10 07:57:19'),
(51, '127.0.0.1', '2017-12-10 08:01:01'),
(52, '127.0.0.1', '2017-12-10 08:06:49'),
(53, '127.0.0.1', '2017-12-10 08:07:11'),
(54, '127.0.0.1', '2017-12-10 08:07:13'),
(55, '127.0.0.1', '2017-12-10 08:07:16'),
(56, '127.0.0.1', '2017-12-10 08:08:18'),
(57, '127.0.0.1', '2017-12-10 08:08:20'),
(58, '127.0.0.1', '2017-12-10 08:08:22'),
(59, '127.0.0.1', '2017-12-10 08:08:24'),
(60, '127.0.0.1', '2017-12-10 08:08:27'),
(61, '127.0.0.1', '2017-12-10 08:08:29'),
(62, '127.0.0.1', '2017-12-10 08:08:31'),
(63, '127.0.0.1', '2017-12-10 08:08:33'),
(64, '127.0.0.1', '2017-12-10 08:08:35'),
(65, '127.0.0.1', '2017-12-10 08:08:37'),
(66, '127.0.0.1', '2017-12-10 08:08:39'),
(67, '127.0.0.1', '2017-12-10 08:08:41'),
(68, '127.0.0.1', '2017-12-10 08:08:48'),
(69, '127.0.0.1', '2017-12-10 08:08:50'),
(70, '127.0.0.1', '2017-12-10 08:08:53'),
(71, '127.0.0.1', '2017-12-10 08:08:57'),
(72, '127.0.0.1', '2017-12-10 08:09:00'),
(73, '127.0.0.1', '2017-12-10 08:10:45'),
(74, '127.0.0.1', '2017-12-10 08:11:47'),
(75, '127.0.0.1', '2017-12-10 08:11:49'),
(76, '127.0.0.1', '2017-12-10 08:11:52'),
(77, '127.0.0.1', '2017-12-10 08:11:54'),
(78, '127.0.0.1', '2017-12-10 08:11:56'),
(79, '127.0.0.1', '2017-12-10 08:11:58'),
(80, '127.0.0.1', '2017-12-10 08:13:04'),
(81, '127.0.0.1', '2017-12-10 08:15:30'),
(82, '127.0.0.1', '2017-12-10 08:26:59'),
(83, '127.0.0.1', '2017-12-10 08:27:45'),
(84, '127.0.0.1', '2017-12-10 08:28:08'),
(85, '127.0.0.1', '2017-12-10 08:28:10'),
(86, '127.0.0.1', '2017-12-10 08:28:12'),
(87, '127.0.0.1', '2017-12-10 08:39:38'),
(88, '127.0.0.1', '2017-12-10 08:40:04'),
(89, '127.0.0.1', '2017-12-10 08:42:02'),
(90, '127.0.0.1', '2017-12-10 08:43:00'),
(91, '127.0.0.1', '2017-12-10 08:43:01'),
(92, '127.0.0.1', '2017-12-10 08:43:05'),
(93, '127.0.0.1', '2017-12-10 08:43:07'),
(94, '127.0.0.1', '2017-12-10 08:46:15'),
(95, '127.0.0.1', '2017-12-10 08:46:31'),
(96, '127.0.0.1', '2017-12-12 09:11:42'),
(97, '127.0.0.1', '2017-12-12 09:16:49'),
(98, '127.0.0.1', '2017-12-12 09:17:15'),
(99, '127.0.0.1', '2017-12-12 09:22:31'),
(100, '127.0.0.1', '2017-12-12 09:24:33'),
(101, '127.0.0.1', '2018-01-05 19:30:05'),
(102, '127.0.0.1', '2018-01-05 19:33:37'),
(103, '127.0.0.1', '2018-01-05 19:38:30'),
(104, '127.0.0.1', '2018-01-05 19:48:08'),
(105, '127.0.0.1', '2018-01-05 19:49:31'),
(106, '127.0.0.1', '2018-01-05 19:51:37'),
(107, '127.0.0.1', '2018-01-05 19:52:52'),
(108, '127.0.0.1', '2018-01-06 19:44:45'),
(109, '127.0.0.1', '2018-01-06 19:48:08'),
(110, '127.0.0.1', '2018-01-06 20:08:34'),
(111, '127.0.0.1', '2018-01-06 23:57:48'),
(112, '127.0.0.1', '2018-01-07 00:23:14'),
(113, '127.0.0.1', '2018-01-07 09:50:57'),
(114, '127.0.0.1', '2018-01-07 10:01:29'),
(115, '127.0.0.1', '2018-01-07 14:14:26'),
(116, '127.0.0.1', '2018-01-10 14:47:18'),
(117, '127.0.0.1', '2018-01-10 17:02:07'),
(118, '127.0.0.1', '2018-01-10 17:16:23'),
(119, '127.0.0.1', '2018-01-10 17:17:32'),
(120, '127.0.0.1', '2018-01-10 17:17:43'),
(121, '127.0.0.1', '2018-01-10 17:19:51'),
(122, '127.0.0.1', '2018-01-10 17:23:00'),
(123, '127.0.0.1', '2018-01-10 17:26:43'),
(124, '127.0.0.1', '2018-01-10 17:38:40'),
(125, '127.0.0.1', '2018-01-10 17:39:30'),
(126, '127.0.0.1', '2018-01-10 17:41:51'),
(127, '127.0.0.1', '2018-01-10 17:44:37'),
(128, '127.0.0.1', '2018-01-10 18:08:32'),
(129, '127.0.0.1', '2018-01-10 18:09:37'),
(130, '127.0.0.1', '2018-01-10 18:10:03'),
(131, '127.0.0.1', '2018-01-10 18:10:32'),
(132, '127.0.0.1', '2018-01-10 18:11:05'),
(133, '127.0.0.1', '2018-01-10 18:11:22'),
(134, '127.0.0.1', '2018-01-10 18:12:22'),
(135, '127.0.0.1', '2018-01-10 18:13:06'),
(136, '127.0.0.1', '2018-01-10 18:19:57'),
(137, '127.0.0.1', '2018-01-10 18:20:21'),
(138, '127.0.0.1', '2018-01-10 18:21:32'),
(139, '127.0.0.1', '2018-01-10 18:26:16'),
(140, '127.0.0.1', '2018-01-10 18:30:16'),
(141, '127.0.0.1', '2018-01-10 18:31:37'),
(142, '127.0.0.1', '2018-01-10 18:32:04'),
(143, '127.0.0.1', '2018-01-10 18:33:16'),
(144, '127.0.0.1', '2018-01-10 18:33:45'),
(145, '127.0.0.1', '2018-01-10 18:44:10'),
(146, '127.0.0.1', '2018-01-10 18:45:06'),
(147, '127.0.0.1', '2018-01-10 18:48:42'),
(148, '127.0.0.1', '2018-01-10 18:53:51'),
(149, '127.0.0.1', '2018-01-10 18:54:56'),
(150, '127.0.0.1', '2018-01-10 19:12:24'),
(151, '127.0.0.1', '2018-01-10 19:24:44'),
(152, '127.0.0.1', '2018-01-10 19:25:40'),
(153, '127.0.0.1', '2018-01-10 19:34:51'),
(154, '127.0.0.1', '2018-01-10 19:35:46'),
(155, '127.0.0.1', '2018-01-10 19:36:14'),
(156, '127.0.0.1', '2018-01-10 19:38:41'),
(157, '127.0.0.1', '2018-01-10 20:02:12'),
(158, '127.0.0.1', '2018-01-10 20:02:43'),
(159, '127.0.0.1', '2018-01-10 20:03:55'),
(160, '127.0.0.1', '2018-01-10 20:40:56'),
(161, '127.0.0.1', '2018-01-11 12:15:53'),
(162, '127.0.0.1', '2018-01-11 12:21:33'),
(163, '127.0.0.1', '2018-01-11 12:23:24'),
(164, '127.0.0.1', '2018-01-11 12:24:04'),
(165, '127.0.0.1', '2018-01-11 12:25:47'),
(166, '127.0.0.1', '2018-01-11 12:25:58'),
(167, '127.0.0.1', '2018-01-11 12:26:03'),
(168, '127.0.0.1', '2018-01-11 12:26:21'),
(169, '127.0.0.1', '2018-01-11 12:27:36'),
(170, '127.0.0.1', '2018-01-11 12:30:32'),
(171, '127.0.0.1', '2018-01-11 12:31:15'),
(172, '127.0.0.1', '2018-01-11 12:32:08'),
(173, '127.0.0.1', '2018-01-11 12:32:35'),
(174, '127.0.0.1', '2018-01-11 12:33:31'),
(175, '127.0.0.1', '2018-01-11 12:35:13'),
(176, '127.0.0.1', '2018-01-11 12:36:28'),
(177, '127.0.0.1', '2018-01-11 12:37:09'),
(178, '127.0.0.1', '2018-01-11 12:41:19'),
(179, '127.0.0.1', '2018-01-11 12:42:04'),
(180, '127.0.0.1', '2018-01-11 12:42:14'),
(181, '127.0.0.1', '2018-01-11 12:48:46'),
(182, '127.0.0.1', '2018-01-11 12:49:36'),
(183, '127.0.0.1', '2018-01-11 12:49:53'),
(184, '127.0.0.1', '2018-01-11 12:50:16'),
(185, '127.0.0.1', '2018-01-11 12:53:01'),
(186, '127.0.0.1', '2018-01-11 12:53:27'),
(187, '127.0.0.1', '2018-01-11 13:09:31'),
(188, '127.0.0.1', '2018-01-11 13:13:08'),
(189, '127.0.0.1', '2018-01-11 13:14:03'),
(190, '127.0.0.1', '2018-01-11 13:15:16'),
(191, '127.0.0.1', '2018-01-11 13:17:35'),
(192, '127.0.0.1', '2018-01-11 13:28:49'),
(193, '127.0.0.1', '2018-01-11 13:30:18'),
(194, '127.0.0.1', '2018-01-11 13:30:53'),
(195, '127.0.0.1', '2018-01-11 13:32:02'),
(196, '127.0.0.1', '2018-01-11 13:32:02'),
(197, '127.0.0.1', '2018-01-11 13:32:02'),
(198, '127.0.0.1', '2018-01-11 13:32:02'),
(199, '127.0.0.1', '2018-01-11 13:32:08'),
(200, '127.0.0.1', '2018-01-11 13:33:17'),
(201, '127.0.0.1', '2018-01-11 13:34:27'),
(202, '127.0.0.1', '2018-01-11 13:35:01'),
(203, '127.0.0.1', '2018-01-11 13:35:32'),
(204, '127.0.0.1', '2018-01-11 13:35:45'),
(205, '127.0.0.1', '2018-01-11 13:36:00'),
(206, '127.0.0.1', '2018-01-11 13:36:18'),
(207, '127.0.0.1', '2018-01-11 13:36:44'),
(208, '127.0.0.1', '2018-01-11 13:37:38'),
(209, '127.0.0.1', '2018-01-11 13:37:49'),
(210, '127.0.0.1', '2018-01-11 13:38:26'),
(211, '127.0.0.1', '2018-01-11 13:38:39'),
(212, '127.0.0.1', '2018-01-11 13:38:49'),
(213, '127.0.0.1', '2018-01-11 13:39:42'),
(214, '127.0.0.1', '2018-01-11 13:41:07'),
(215, '127.0.0.1', '2018-01-11 13:45:01'),
(216, '127.0.0.1', '2018-01-11 13:48:40'),
(217, '127.0.0.1', '2018-01-11 13:48:59'),
(218, '127.0.0.1', '2018-01-11 13:49:03'),
(219, '127.0.0.1', '2018-01-11 13:51:25'),
(220, '127.0.0.1', '2018-01-11 13:54:10'),
(221, '127.0.0.1', '2018-01-11 13:55:13'),
(222, '127.0.0.1', '2018-01-11 14:00:20'),
(223, '127.0.0.1', '2018-01-11 14:01:26'),
(224, '127.0.0.1', '2018-01-11 14:02:46'),
(225, '127.0.0.1', '2018-01-11 14:02:46'),
(226, '127.0.0.1', '2018-01-11 14:02:50'),
(227, '127.0.0.1', '2018-01-11 14:05:18'),
(228, '127.0.0.1', '2018-01-11 14:13:30'),
(229, '127.0.0.1', '2018-01-11 14:17:10'),
(230, '127.0.0.1', '2018-01-11 14:20:15'),
(231, '127.0.0.1', '2018-01-11 14:21:16'),
(232, '127.0.0.1', '2018-01-11 14:24:31'),
(233, '127.0.0.1', '2018-01-11 14:26:24'),
(234, '127.0.0.1', '2018-01-11 14:28:47'),
(235, '127.0.0.1', '2018-01-11 14:30:10'),
(236, '127.0.0.1', '2018-01-11 14:31:34'),
(237, '127.0.0.1', '2018-01-11 14:47:29'),
(238, '127.0.0.1', '2018-01-11 14:49:37'),
(239, '127.0.0.1', '2018-01-11 14:49:39'),
(240, '127.0.0.1', '2018-01-11 14:51:16'),
(241, '127.0.0.1', '2018-01-11 14:53:08'),
(242, '127.0.0.1', '2018-01-11 14:54:26'),
(243, '127.0.0.1', '2018-01-11 14:54:52'),
(244, '127.0.0.1', '2018-01-11 14:57:37'),
(245, '127.0.0.1', '2018-01-11 14:58:20'),
(246, '127.0.0.1', '2018-01-11 14:58:20'),
(247, '127.0.0.1', '2018-01-11 14:58:24'),
(248, '127.0.0.1', '2018-01-11 14:58:38'),
(249, '127.0.0.1', '2018-01-11 14:59:38'),
(250, '127.0.0.1', '2018-01-11 15:02:20'),
(251, '127.0.0.1', '2018-01-11 15:03:34'),
(252, '127.0.0.1', '2018-01-11 15:04:46'),
(253, '127.0.0.1', '2018-01-11 15:07:42'),
(254, '127.0.0.1', '2018-01-11 15:07:42'),
(255, '127.0.0.1', '2018-01-11 15:07:46'),
(256, '127.0.0.1', '2018-01-11 15:10:24'),
(257, '127.0.0.1', '2018-01-11 15:12:35'),
(258, '127.0.0.1', '2018-01-11 15:15:49'),
(259, '127.0.0.1', '2018-01-11 15:16:27'),
(260, '127.0.0.1', '2018-01-11 15:17:42'),
(261, '127.0.0.1', '2018-01-11 15:19:33'),
(262, '127.0.0.1', '2018-01-11 15:35:59'),
(263, '127.0.0.1', '2018-01-11 15:36:15'),
(264, '127.0.0.1', '2018-01-11 15:41:14'),
(265, '127.0.0.1', '2018-01-11 15:41:27'),
(266, '127.0.0.1', '2018-01-11 15:41:36'),
(267, '127.0.0.1', '2018-01-11 15:46:47'),
(268, '127.0.0.1', '2018-01-11 15:47:16'),
(269, '127.0.0.1', '2018-01-11 15:47:47'),
(270, '127.0.0.1', '2018-01-11 15:47:52'),
(271, '127.0.0.1', '2018-01-11 15:47:55'),
(272, '127.0.0.1', '2018-01-11 15:47:58'),
(273, '127.0.0.1', '2018-01-11 17:29:57'),
(274, '127.0.0.1', '2018-01-11 17:30:27'),
(275, '127.0.0.1', '2018-01-11 17:35:51'),
(276, '127.0.0.1', '2018-01-11 17:36:03'),
(277, '127.0.0.1', '2018-01-11 17:36:10'),
(278, '127.0.0.1', '2018-01-11 17:36:23'),
(279, '127.0.0.1', '2018-01-11 17:36:32'),
(280, '127.0.0.1', '2018-01-11 17:50:08'),
(281, '127.0.0.1', '2018-01-11 21:36:47'),
(282, '127.0.0.1', '2018-01-11 22:04:17'),
(283, '127.0.0.1', '2018-01-11 22:27:50'),
(284, '127.0.0.1', '2018-01-11 22:39:41'),
(285, '127.0.0.1', '2018-01-11 22:40:02'),
(286, '127.0.0.1', '2018-01-11 23:44:45'),
(287, '127.0.0.1', '2018-01-11 23:45:51'),
(288, '127.0.0.1', '2018-01-11 23:58:41'),
(289, '127.0.0.1', '2018-01-11 23:58:59'),
(290, '127.0.0.1', '2018-01-12 00:01:17'),
(291, '127.0.0.1', '2018-01-12 00:02:14'),
(292, '127.0.0.1', '2018-01-12 01:34:32'),
(293, '127.0.0.1', '2018-01-12 01:36:28'),
(294, '127.0.0.1', '2018-01-12 01:36:47'),
(295, '127.0.0.1', '2018-01-12 01:36:50'),
(296, '127.0.0.1', '2018-01-12 01:37:17'),
(297, '127.0.0.1', '2018-01-12 01:37:24'),
(298, '127.0.0.1', '2018-01-12 01:37:39'),
(299, '127.0.0.1', '2018-01-12 01:37:44'),
(300, '127.0.0.1', '2018-01-12 01:38:12'),
(301, '127.0.0.1', '2018-01-12 01:38:16'),
(302, '127.0.0.1', '2018-01-12 12:17:57'),
(303, '127.0.0.1', '2018-01-12 14:05:46'),
(304, '127.0.0.1', '2018-01-12 14:06:41'),
(305, '127.0.0.1', '2018-01-12 15:15:35'),
(306, '127.0.0.1', '2018-01-12 15:16:07'),
(307, '127.0.0.1', '2018-01-12 15:16:52'),
(308, '127.0.0.1', '2018-01-12 15:17:54'),
(309, '127.0.0.1', '2018-01-12 15:18:08'),
(310, '127.0.0.1', '2018-01-12 15:37:12'),
(311, '127.0.0.1', '2018-01-12 19:32:31'),
(312, '127.0.0.1', '2018-01-12 19:32:35'),
(313, '127.0.0.1', '2018-01-12 19:33:01'),
(314, '127.0.0.1', '2018-01-12 19:33:39'),
(315, '127.0.0.1', '2018-01-12 19:33:45'),
(316, '127.0.0.1', '2018-01-12 19:33:50'),
(317, '127.0.0.1', '2018-01-12 19:34:04'),
(318, '127.0.0.1', '2018-01-12 19:34:06'),
(319, '127.0.0.1', '2018-01-12 19:34:49'),
(320, '127.0.0.1', '2018-01-12 19:34:53'),
(321, '127.0.0.1', '2018-01-12 19:36:25'),
(322, '127.0.0.1', '2018-01-12 19:36:43'),
(323, '127.0.0.1', '2018-01-12 19:36:48'),
(324, '127.0.0.1', '2018-01-12 19:37:28'),
(325, '127.0.0.1', '2018-01-12 19:37:48'),
(326, '127.0.0.1', '2018-01-12 19:38:42'),
(327, '127.0.0.1', '2018-01-12 19:39:20'),
(328, '127.0.0.1', '2018-01-12 19:41:36'),
(329, '127.0.0.1', '2018-01-12 19:41:41'),
(330, '127.0.0.1', '2018-01-12 19:41:48'),
(331, '127.0.0.1', '2018-01-12 19:41:59'),
(332, '127.0.0.1', '2018-01-12 19:42:03'),
(333, '127.0.0.1', '2018-01-12 19:42:11'),
(334, '127.0.0.1', '2018-01-12 19:42:14'),
(335, '127.0.0.1', '2018-01-12 19:42:18'),
(336, '127.0.0.1', '2018-01-12 19:42:21'),
(337, '127.0.0.1', '2018-01-12 19:43:09'),
(338, '127.0.0.1', '2018-01-12 19:43:09'),
(339, '127.0.0.1', '2018-01-12 19:43:09'),
(340, '127.0.0.1', '2018-01-12 19:45:52'),
(341, '127.0.0.1', '2018-01-12 19:46:23'),
(342, '127.0.0.1', '2018-01-12 19:47:30'),
(343, '127.0.0.1', '2018-01-12 19:47:35'),
(344, '127.0.0.1', '2018-01-12 19:47:40'),
(345, '127.0.0.1', '2018-01-12 19:47:44'),
(346, '127.0.0.1', '2018-01-12 19:47:48'),
(347, '127.0.0.1', '2018-01-12 19:47:51'),
(348, '127.0.0.1', '2018-01-12 20:00:57'),
(349, '127.0.0.1', '2018-01-12 20:01:38'),
(350, '127.0.0.1', '2018-01-12 20:02:25'),
(351, '127.0.0.1', '2018-01-12 20:03:09'),
(352, '127.0.0.1', '2018-01-12 20:04:48'),
(353, '127.0.0.1', '2018-01-12 20:08:26'),
(354, '127.0.0.1', '2018-01-12 20:10:11'),
(355, '127.0.0.1', '2018-01-12 20:10:55'),
(356, '127.0.0.1', '2018-01-12 20:10:59'),
(357, '127.0.0.1', '2018-01-12 20:13:15'),
(358, '127.0.0.1', '2018-01-12 20:14:34'),
(359, '127.0.0.1', '2018-01-12 20:15:24'),
(360, '127.0.0.1', '2018-01-12 20:17:34'),
(361, '127.0.0.1', '2018-01-12 20:26:58'),
(362, '127.0.0.1', '2018-01-12 20:27:40'),
(363, '127.0.0.1', '2018-01-12 20:28:31'),
(364, '127.0.0.1', '2018-01-12 20:30:18'),
(365, '127.0.0.1', '2018-01-12 21:09:48'),
(366, '127.0.0.1', '2018-01-12 21:10:15'),
(367, '127.0.0.1', '2018-01-12 21:14:29'),
(368, '127.0.0.1', '2018-01-12 21:17:21'),
(369, '127.0.0.1', '2018-01-12 21:18:15'),
(370, '127.0.0.1', '2018-01-12 21:18:52'),
(371, '127.0.0.1', '2018-01-12 21:19:37'),
(372, '127.0.0.1', '2018-01-12 21:21:02'),
(373, '127.0.0.1', '2018-01-12 21:21:34'),
(374, '127.0.0.1', '2018-01-12 21:21:42'),
(375, '127.0.0.1', '2018-01-12 21:29:47'),
(376, '127.0.0.1', '2018-01-12 21:32:33'),
(377, '127.0.0.1', '2018-01-12 22:41:35'),
(378, '127.0.0.1', '2018-01-12 22:41:47'),
(379, '127.0.0.1', '2018-01-12 22:42:22'),
(380, '127.0.0.1', '2018-01-12 22:45:08'),
(381, '127.0.0.1', '2018-01-12 22:51:23'),
(382, '127.0.0.1', '2018-01-12 22:51:28'),
(383, '127.0.0.1', '2018-01-12 22:51:33'),
(384, '127.0.0.1', '2018-01-13 00:12:23'),
(385, '127.0.0.1', '2018-01-13 00:12:40'),
(386, '127.0.0.1', '2018-01-13 17:55:49'),
(387, '127.0.0.1', '2018-01-13 18:00:51'),
(388, '127.0.0.1', '2018-01-13 18:00:51'),
(389, '127.0.0.1', '2018-01-13 18:26:48'),
(390, '127.0.0.1', '2018-01-13 18:27:34'),
(391, '127.0.0.1', '2018-01-13 18:27:47'),
(392, '127.0.0.1', '2018-01-13 18:29:15'),
(393, '127.0.0.1', '2018-01-13 18:30:39'),
(394, '127.0.0.1', '2018-01-13 18:30:58'),
(395, '127.0.0.1', '2018-01-13 18:31:47'),
(396, '127.0.0.1', '2018-01-13 18:32:04'),
(397, '127.0.0.1', '2018-01-13 18:32:16'),
(398, '127.0.0.1', '2018-01-13 18:38:23'),
(399, '127.0.0.1', '2018-01-13 18:39:55'),
(400, '127.0.0.1', '2018-01-13 18:39:55'),
(401, '127.0.0.1', '2018-01-13 18:41:17'),
(402, '127.0.0.1', '2018-01-13 18:41:46'),
(403, '127.0.0.1', '2018-01-13 18:42:00'),
(404, '127.0.0.1', '2018-01-13 18:42:04'),
(405, '127.0.0.1', '2018-01-13 18:42:48'),
(406, '127.0.0.1', '2018-01-13 18:43:12'),
(407, '127.0.0.1', '2018-01-13 18:44:17'),
(408, '127.0.0.1', '2018-01-13 18:46:46'),
(409, '127.0.0.1', '2018-01-13 19:20:59'),
(410, '127.0.0.1', '2018-01-13 20:00:11'),
(411, '127.0.0.1', '2018-01-13 20:02:49'),
(412, '127.0.0.1', '2018-01-13 20:03:56'),
(413, '127.0.0.1', '2018-01-13 20:58:13'),
(414, '127.0.0.1', '2018-01-13 20:59:21'),
(415, '127.0.0.1', '2018-01-13 21:03:05'),
(416, '127.0.0.1', '2018-01-13 21:03:22'),
(417, '127.0.0.1', '2018-01-13 21:04:26'),
(418, '127.0.0.1', '2018-01-13 21:06:28'),
(419, '127.0.0.1', '2018-01-13 21:08:36'),
(420, '127.0.0.1', '2018-01-13 21:09:34'),
(421, '127.0.0.1', '2018-01-13 22:35:14'),
(422, '127.0.0.1', '2018-01-13 22:35:21'),
(423, '127.0.0.1', '2018-01-13 22:35:39'),
(424, '127.0.0.1', '2018-01-13 22:40:00'),
(425, '127.0.0.1', '2018-01-13 22:40:48'),
(426, '127.0.0.1', '2018-01-13 22:47:20'),
(427, '127.0.0.1', '2018-01-13 22:49:10'),
(428, '127.0.0.1', '2018-01-13 22:49:57'),
(429, '127.0.0.1', '2018-01-13 23:00:24'),
(430, '127.0.0.1', '2018-01-13 23:00:24'),
(431, '127.0.0.1', '2018-01-13 23:00:24'),
(432, '127.0.0.1', '2018-01-13 23:00:24'),
(433, '127.0.0.1', '2018-01-13 23:00:24'),
(434, '127.0.0.1', '2018-01-13 23:01:54'),
(435, '127.0.0.1', '2018-01-13 23:05:41'),
(436, '127.0.0.1', '2018-01-13 23:37:23'),
(437, '127.0.0.1', '2018-01-13 23:37:34'),
(438, '127.0.0.1', '2018-01-13 23:39:22'),
(439, '127.0.0.1', '2018-01-13 23:39:22'),
(440, '127.0.0.1', '2018-01-13 23:40:53'),
(441, '127.0.0.1', '2018-01-13 23:41:07'),
(442, '127.0.0.1', '2018-01-13 23:42:14'),
(443, '127.0.0.1', '2018-01-13 23:42:22'),
(444, '127.0.0.1', '2018-01-13 23:43:41'),
(445, '127.0.0.1', '2018-01-13 23:43:41'),
(446, '127.0.0.1', '2018-01-13 23:43:45'),
(447, '127.0.0.1', '2018-01-13 23:44:55'),
(448, '127.0.0.1', '2018-01-13 23:44:56'),
(449, '127.0.0.1', '2018-01-13 23:44:56'),
(450, '127.0.0.1', '2018-01-13 23:45:00'),
(451, '127.0.0.1', '2018-01-13 23:45:39'),
(452, '127.0.0.1', '2018-01-13 23:47:17'),
(453, '127.0.0.1', '2018-01-13 23:48:26'),
(454, '127.0.0.1', '2018-01-13 23:48:43'),
(455, '127.0.0.1', '2018-01-13 23:49:25'),
(456, '127.0.0.1', '2018-01-13 23:49:29'),
(457, '127.0.0.1', '2018-01-13 23:50:02'),
(458, '127.0.0.1', '2018-01-13 23:51:35'),
(459, '127.0.0.1', '2018-01-13 23:52:18'),
(460, '127.0.0.1', '2018-01-13 23:54:32'),
(461, '127.0.0.1', '2018-01-13 23:55:43'),
(462, '127.0.0.1', '2018-01-13 23:56:51'),
(463, '127.0.0.1', '2018-01-14 00:03:41'),
(464, '127.0.0.1', '2018-01-14 00:04:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_basket`
--
ALTER TABLE `cart_basket`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `fav_items`
--
ALTER TABLE `fav_items`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `items_list`
--
ALTER TABLE `items_list`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `kenya_counties`
--
ALTER TABLE `kenya_counties`
  ADD PRIMARY KEY (`county_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`newletters_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_traffic`
--
ALTER TABLE `user_traffic`
  ADD PRIMARY KEY (`ip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart_basket`
--
ALTER TABLE `cart_basket`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `fav_items`
--
ALTER TABLE `fav_items`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `items_list`
--
ALTER TABLE `items_list`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `kenya_counties`
--
ALTER TABLE `kenya_counties`
  MODIFY `county_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `newletters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_traffic`
--
ALTER TABLE `user_traffic`
  MODIFY `ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;--
-- Database: `bolt`
--
CREATE DATABASE IF NOT EXISTS `bolt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bolt`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, 'BOLT2', 'Cap', 'A sleek, tonal stitched cap for runners. The plain texture and unique design will help runners to concentrate more on running and less on their hair. The combbination of casual and formal look is just brilliant.', 200, 3, 600, '2017-12-02 10:45:47', 'sjobs@apple.com'),
(13, 'BOLT3', 'Sports Band', 'The Sports Band collection features highly polished stainless steel and space black stainless steel cases. The display is protected by sapphire crystal. And there is a choice of three different leather bands.', 1000, 1, 1000, '2017-12-02 10:45:47', 'sjobs@apple.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'BOLT1', 'Sports Shoes', 'With a clean vamp, tonal stitch details throughout, and a unique formstripe finish, the all new sports shoes fits the needs of multiple running consumers by offering an athletic and a lifestyle look.', 'sports_shoes.jpg', 26, '5000.00'),
(2, 'BOLT2', 'Cap', 'A sleek, tonal stitched cap for runners. The plain texture and unique design will help runners to concentrate more on running and less on their hair. The combbination of casual and formal look is just brilliant.', 'cap.jpg', 4, '200.00'),
(3, 'BOLT3', 'Sports Band', 'The Sports Band collection features highly polished stainless steel and space black stainless steel cases. The display is protected by sapphire crystal. And there is a choice of three different leather bands.', 'sports_band.jpg', 33, '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'sjobs@apple.com', 'steve', 'user'),
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 101010, 'admin@admin.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `khan_store`
--
CREATE DATABASE IF NOT EXISTS `khan_store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `khan_store`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(1, 1, '0', 0, 'Samsung Dous 2', 'samsung mobile.jpg', 1, 5000, 5000),
(2, 2, '0', 0, 'iPhone 5s', 'iphone mobile.jpg', 1, 25000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wears'),
(3, 'Mens Wear'),
(4, 'Kids Wear'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(7, 'Electronics Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 2, 'Samsung Dous 2', 5000, 'Samsung Dous 2 sgh ', 'samsung mobile.jpg', 'samsung mobile electronics'),
(2, 1, 3, 'iPhone 5s', 25000, 'iphone 5s', 'iphone mobile.jpg', 'mobile iphone apple'),
(3, 1, 3, 'iPad', 30000, 'ipad apple brand', 'ipad.jpg', 'apple ipad tablet'),
(4, 1, 3, 'iPhone 6s', 32000, 'Apple iPhone ', 'iphone.jpg', 'iphone apple mobile'),
(5, 1, 2, 'iPad 2', 10000, 'samsung ipad', 'ipad 2.jpg', 'ipad tablet samsung'),
(6, 1, 1, 'Hp Laptop r series', 35000, 'Hp Red and Black combination Laptop', 'k2-_ed8b8f8d-e696-4a96-8ce9-d78246f10ed1.v1.jpg-bc204bdaebb10e709a997a8bb4518156dfa6e3ed-optim-450x450.jpg', 'hp laptop '),
(7, 1, 1, 'Laptop Pavillion', 50000, 'Laptop Hp Pavillion', '12039452_525963140912391_6353341236808813360_n.png', 'Laptop Hp Pavillion'),
(8, 1, 4, 'Sony', 40000, 'Sony Mobile', 'sony mobile.jpg', 'sony mobile'),
(9, 1, 3, 'iPhone New', 12000, 'iphone', 'white iphone.png', 'iphone apple mobile'),
(10, 2, 6, 'Red Ladies dress', 1000, 'red dress for girls', 'red dress.jpg', 'red dress '),
(11, 2, 6, 'Blue Heave dress', 1200, 'Blue dress', 'images.jpg', 'blue dress cloths'),
(12, 2, 6, 'Ladies Casual Cloths', 1500, 'ladies casual summer two colors pleted', '7475-ladies-casual-dresses-summer-two-colors-pleated.jpg', 'girl dress cloths casual'),
(13, 2, 6, 'SpringAutumnDress', 1200, 'girls dress', 'Spring-Autumn-Winter-Young-Ladies-Casual-Wool-Dress-Women-s-One-Piece-Dresse-Dating-Clothes-Medium.jpg_640x640.jpg', 'girl dress'),
(14, 2, 6, 'Casual Dress', 1400, 'girl dress', 'download.jpg', 'ladies cloths girl'),
(15, 2, 6, 'Formal Look', 1500, 'girl dress', 'shutterstock_203611819.jpg', 'ladies wears dress girl'),
(16, 3, 6, 'Sweter for men', 600, '2012-Winter-Sweater-for-Men-for-better-outlook', '2012-Winter-Sweater-for-Men-for-better-outlook.jpg', 'black sweter cloth winter'),
(17, 3, 6, 'Gents formal', 1000, 'gents formal look', 'gents-formal-250x250.jpg', 'gents wear cloths'),
(19, 3, 6, 'Formal Coat', 3000, 'ad', 'images (1).jpg', 'coat blazer gents'),
(20, 3, 6, 'Mens Sweeter', 1600, 'jg', 'Winter-fashion-men-burst-sweater.png', 'sweeter gents '),
(21, 3, 6, 'T shirt', 800, 'ssds', 'IN-Mens-Apparel-Voodoo-Tiles-09._V333872612_.jpg', 'formal t shirt black'),
(22, 4, 6, 'Yellow T shirt ', 1300, 'yello t shirt with pant', '1.0x0.jpg', 'kids yellow t shirt'),
(23, 4, 6, 'Girls cloths', 1900, 'sadsf', 'GirlsClothing_Widgets.jpg', 'formal kids wear dress'),
(24, 4, 6, 'Blue T shirt', 700, 'g', 'images.jpg', 'kids dress'),
(25, 4, 6, 'Yellow girls dress', 750, 'as', 'images (3).jpg', 'yellow kids dress'),
(26, 4, 6, 'Skyblue dress', 650, 'nbk', 'kids-wear-121.jpg', 'skyblue kids dress'),
(27, 4, 6, 'Formal look', 690, 'sd', 'image28.jpg', 'formal kids dress'),
(32, 5, 0, 'Book Shelf', 2500, 'book shelf', 'furniture-book-shelf-250x250.jpg', 'book shelf furniture'),
(33, 6, 2, 'Refrigerator', 35000, 'Refrigerator', 'CT_WM_BTS-BTC-AppliancesHome_20150723.jpg', 'refrigerator samsung'),
(34, 6, 4, 'Emergency Light', 1000, 'Emergency Light', 'emergency light.JPG', 'emergency light'),
(35, 6, 0, 'Vaccum Cleaner', 6000, 'Vaccum Cleaner', 'images (2).jpg', 'Vaccum Cleaner'),
(36, 6, 5, 'Iron', 1500, 'gj', 'iron.JPG', 'iron'),
(37, 6, 5, 'LED TV', 20000, 'LED TV', 'images (4).jpg', 'led tv lg'),
(38, 6, 4, 'Microwave Oven', 3500, 'Microwave Oven', 'images.jpg', 'Microwave Oven'),
(39, 6, 5, 'Mixer Grinder', 2500, 'Mixer Grinder', 'singer-mixer-grinder-mg-46-medium_4bfa018096c25dec7ba0af40662856ef.jpg', 'Mixer Grinder'),
(40, 2, 6, 'Formal girls dress', 3000, 'Formal girls dress', 'girl-walking.jpg', 'ladies'),
(45, 1, 2, 'Samsung Galaxy Note 3', 10000, '0', 'samsung_galaxy_note3_note3neo.JPG', 'samsung galaxy Note 3 neo'),
(46, 1, 2, 'Samsung Galaxy Note 3', 10000, '', 'samsung_galaxy_note3_note3neo.JPG', 'samsung galxaxy note 3 neo');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'demo', 'demo', 'demo@gmal.com', '12345', '123456789', 'Kolkata', 'VIP Road'),
(2, 'Rizwan', 'Khan', 'rizwankhan.august16@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9832268432', 'Hutton Road', 'Kolkata'),
(3, 'Rizwan', 'Khan', 'salmankhan@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8389080182', 'Hutton Road', 'Asansol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;--
-- Database: `mystore`
--
CREATE DATABASE IF NOT EXISTS `mystore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mystore`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `last_log_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_log_date`) VALUES
(1, 'tarun', 'poopoo', '2014-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `login` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `security` text NOT NULL,
  `securityanswer` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`login`, `password`, `name`, `id`, `mobile`, `security`, `securityanswer`, `email`, `address`, `city`, `state`, `pin`) VALUES
('sai018', 'tarun', 'Sai', 11, '9704159596', 'What is your nick name?', 'sahuu', 'some@gmail.com', 'E31156', 'HYDERABAD', 'Andhra', '500032'),
('sumit', 'sumitmau', 'Sumit', 12, '9704159593', 'What is your pet name?', 'Tomy', 'tarun1995gupta@gmail.com', 'E316', 'HYDERABAD', 'Andhra', '500032');

-- --------------------------------------------------------

--
-- Table structure for table `customer_cart`
--

CREATE TABLE `customer_cart` (
  `cartid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_cart`
--

INSERT INTO `customer_cart` (`cartid`, `productid`, `customerid`, `product_name`, `details`, `price`, `quantity`, `date_added`) VALUES
(4, 19, 11, 'Puma Contest Lite Sneakers', 'Puma Shoes at cheap Price', 28.99, 1, '2014-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `details` text NOT NULL,
  `category` varchar(16) NOT NULL,
  `subcategory` varchar(16) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `details`, `category`, `subcategory`, `date_added`) VALUES
(19, 'Puma Contest Lite Sneakers', 28.99, 'Puma Shoes at cheap Price', 'Clothing', '', '2014-11-10'),
(20, 'Diesel Magnete Boots', 199, 'High quality shoes from Diesel designed for YOU.', 'Clothing', '', '2014-11-10'),
(21, 'Clarks Newton Energy Boat Shoes', 18.65, 'Very Cheap Shoes.', 'Footwear', '', '2014-11-10'),
(22, 'Puma Drifter Road III Flip Flops', 9.99, 'Amazing made for you.', 'Footwear', '', '2014-11-10'),
(24, 'Uditva Men\'s Churidar & Kurta Set', 12.75, 'Traditional Wear', 'Clothing', '', '2014-11-10'),
(25, 'Platinum Studio Solid Men\'s Waistcoat', 14.99, 'Solid Men\'s Waistcoat', 'Clothing', '', '2014-11-10'),
(26, 'Fastrack Sports Analog Watch', 25, 'Analog Watch - For Men', 'Watches', '', '2014-11-10'),
(27, 'Fossil NATE Analog Watch', 25.45, 'Fossil NATE Analog Watch - For Men', 'Watches', '', '2014-11-10'),
(28, 'Martian Notifier Smart Watch', 43.54, 'Martian Notifier Smart Watch from Switzerland', 'Watches', '', '2014-11-10'),
(29, 'Butterflies Perforated Design Hand Bag', 100, 'Butterflies Perforated Design Hand Bag', 'HandBag', '', '2014-11-10'),
(30, 'Butterflies Elegant Hand Bag', 120.99, 'Butterflies Elegant Hand Bag', 'HandBag', '', '2014-11-10'),
(31, 'Butterflies Laser Cut Hand Bag', 58.34, 'Butterflies Laser Cut Designer Hand Bag', 'HandBag', '', '2014-11-10'),
(32, 'Anna Andre Paris Pure Eau de Toilette - 100 ml', 45.99, 'Anna Andre Paris Pure Eau de Toilette - 100 ml', 'Perfumes', '', '2014-11-10'),
(33, 'Elizabeth Arden Beauty Eau de Toilette - 100 ml', 15.54, 'Elizabeth Arden Beauty Eau de Toilette - 100 ml', 'Perfumes', '', '2014-11-10'),
(34, 'Davidoff Cool Water Eau de Toilette', 12.87, 'Davidoff Cool Water Eau de Toilette', 'Perfumes', '', '2014-11-10'),
(35, 'Paco Rabanne Black XS Eau de Toilette', 134, 'Paco Rabanne Black XS Eau de Toilette', 'Perfumes', '', '2014-11-10'),
(36, 'BlueStone The Carysa Gold Diamond, Peridot Ring', 134.99, 'BlueStone The Carysa Gold Diamond, Peridot Ring', 'Jewellery', '', '2014-11-10'),
(37, 'CaratLane Fiore Rose Gold Necklace', 456.67, 'CaratLane Fiore Rose Gold Necklace', 'Jewellery', '', '2014-11-10'),
(38, 'CaratLane La FoisFor Her Gold Diamond Ring', 256.87, 'CaratLane La FoisFor Her Gold Diamond Ring', 'Jewellery', '', '2014-11-10'),
(39, 'Spiky Stylish Wayfarer Sunglasses', 10, 'Spiky Stylish Wayfarer Sunglasses', 'Sunglasses', '', '2014-11-10'),
(40, 'EYELOVEYOU Over-sized Sunglasses', 20, 'EYELOVEYOU Over-sized Sunglasses', 'Sunglasses', '', '2014-11-10'),
(41, 'Angel Glitter Purple Rainbow, Blue Bow Kids Wayfarer Sunglasses', 25, 'Angel Glitter Purple Rainbow, Blue Bow Kids Wayfarer Sunglasses', '', '', '2014-11-10'),
(42, 'What If?: Serious Scientific Answers to Absurd Hypothetical Questions', 5, 'What If?: Serious Scientific Answers to Absurd Hypothetical Questions', 'EBooks', '', '2014-11-10'),
(43, 'The Lost Hero (Heroes of Olympus Book 1)', 16, 'The Lost Hero (Heroes of Olympus Book 1)', 'EBooks', '', '2014-11-10'),
(44, 'The Monk Who Sold His Ferrari', 15, 'The Monk Who Sold His Ferrari: A Fable About Fulfilling Your Dreams & Reaching Your Destiny', 'Clothing', '', '2014-11-10'),
(45, 'The Kill List', 25, 'The Kill List', 'EBooks', '', '2014-11-10'),
(46, 'Divergent', 20.99, 'Divergent', 'DVD', '', '2014-11-10'),
(47, 'Frozen', 40.55, 'Frozen Animation', 'DVD', '', '2014-11-10'),
(48, 'The Sound Of Music', 21.65, 'The Sound Of Music (45th Anniversary Edition)', 'DVD', '', '2014-11-10'),
(49, 'Pokemon Alpha Sapphire', 35.75, 'Pokemon Alpha Sapphire', 'Gaming', '', '2014-11-10'),
(50, 'Ultimate Action Triple Pack', 25.99, 'Ultimate Action Triple Pack (Includes 3 Games)', 'Gaming', '', '2014-11-10'),
(51, 'Total War: Rome II', 9.99, 'Total War: Rome II', 'Gaming', '', '2014-11-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`,`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `customer_cart`
--
ALTER TABLE `customer_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customer_cart`
--
ALTER TABLE `customer_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;--
-- Database: `new_db`
--
CREATE DATABASE IF NOT EXISTS `new_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `new_db`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
