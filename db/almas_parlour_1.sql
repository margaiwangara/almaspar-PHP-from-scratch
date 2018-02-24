-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 12:36 PM
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
(6, '1', 29, 3, '2017-12-06 08:16:13', 'carted', '9000.00'),
(3, '1', 33, 1, '2017-12-06 08:09:20', 'carted', '5000.00'),
(4, '1', 33, 1, '2017-12-06 08:11:13', 'carted', '5000.00'),
(5, '1', 33, 5, '2017-12-06 08:15:15', 'carted', '25000.00'),
(7, '1', 29, 3, '2017-12-06 08:18:20', 'carted', '9000.00'),
(8, '1', 29, 1, '2017-12-06 08:32:54', 'carted', '3000.00'),
(9, '1', 29, 14, '2017-12-06 08:34:17', 'carted', '42000.00'),
(10, '2', 24, 2, '2017-12-06 09:24:10', 'carted', '12000.00'),
(11, '2', 4, 1, '2017-12-06 09:27:56', 'carted', '0.00'),
(12, '2', 4, 4, '2017-12-06 09:28:06', 'carted', '0.00'),
(13, '2', 4, 5, '2017-12-06 09:28:19', 'carted', '0.00'),
(14, '2', 4, 1, '2017-12-06 09:28:35', 'carted', '0.00'),
(15, '2', 24, 5, '2017-12-06 09:29:46', 'carted', '30000.00');

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
(8, 1, 33, '2017-12-07 12:10:17');

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
(4, 'APDR158790', 'Prom Long Dress', 'dress', 'red long dress ', 'Good for prom', 'red', 'items-images/dresses/dress-image-2.jpg', '0.00', '', 1, '2017-11-27 15:25:50'),
(5, 'APDR158791', 'Prom Long Dress', 'dress', 'blue long dress ', 'Good for prom', 'blue', 'items-images/dresses/dress-image-3.jpg', '0.00', '', 0, '2017-11-27 15:26:37'),
(6, 'APDR158792', 'Prom Long Dress', 'dress', 'pink long dress ', 'Good for prom', 'pink', 'items-images/dresses/dress-image-4.jpg', '0.00', '', 0, '2017-11-27 15:27:20'),
(7, 'APDR158793', 'Prom Long Dress', 'dress', 'cream long dress ', 'Good for prom', 'cream', 'items-images/dresses/dress-image-5.jpg', '0.00', '', 0, '2017-11-27 15:27:48'),
(8, 'APDR158794', 'Prom Long Dress', 'dress', 'black long dress ', 'Good for prom', 'black', 'items-images/dresses/dress-image-6.jpg', '0.00', '', 0, '2017-11-27 15:28:20'),
(9, 'APNG158770', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'pink', 'items-images/nightgowns/nightgown-image-1.jpg', '0.00', '', 0, '2017-11-27 15:31:38'),
(10, 'APNG158771', 'Comfy NightGown', 'nightgown', 'Comfortable nightgowns', 'Just Nightgowns', 'black white', 'items-images/nightgowns/nightgown-image-2.jpg', '0.00', '', 0, '2017-11-27 15:32:17'),
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
(24, 'APJS168946', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'red', 'items-images/jumpsuits/jumpsuit-image-4.jpg', '6000.00', '', 8, '2017-11-27 15:42:34'),
(25, 'APJS168947', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'cream', 'items-images/jumpsuits/jumpsuit-image-5.jpg', '2500.00', '', 0, '2017-11-27 15:43:02'),
(26, 'APJS168948', 'Jumpsuits for women', 'jumpsuits', 'Jumpsuits for women, comfortable', 'Comfortable', 'black', 'items-images/jumpsuits/jumpsuit-image-6.jpg', '3000.50', '', 0, '2017-11-27 15:43:22'),
(29, 'APDR523654', 'long black dress', 'dress', 'black long dress for formal and informal functions', 'beautiful black dress', 'green', 'items-images/dresses/dress_type.jpg', '3000.00', '', 0, '2017-12-02 23:06:27'),
(33, 'APJS523654', 'Jumpsuit For Sale', 'jumpsuits', 'Checkered jumpsuit black and white', 'Checkered jumpsuit black and white', 'black', 'items-images/jumpsuits/A-Crossing-belt-Jumpsuit.-300x300.jpg', '5000.00', '', 0, '2017-12-03 00:29:15');

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
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `surname` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `adress_name` longtext NOT NULL,
  `adress` longtext NOT NULL,
  `confirm_code` varchar(100) NOT NULL,
  `confirmed` varchar(100) NOT NULL,
  `pass_reset_code` varchar(100) NOT NULL,
  `pass_reset_confirmed` varchar(100) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `name`, `surname`, `email`, `password`, `city`, `adress_name`, `adress`, `confirm_code`, `confirmed`, `pass_reset_code`, `pass_reset_confirmed`, `creation_date`) VALUES
(1, 'Margai', 'Wangara', 'margaiwangara@gmail.com', '$2y$10$UctYK9r7LMopqs2mbEnYEOInuNpp/9CS2JUAcTjxGTUufYSF9OGU6', 'Kisumu', '', '', '0', '1', '', '', '2017-11-26 18:45:45'),
(2, 'keithlas', 'wangara', 'keithlas@wangaras.com', '$2y$10$aaR1yNxpir7TY2YwNYxhSu1Egm9l5LbVI8HBl42P7j9OlmnxIdPYC', '', '', '', '0', '1', '', '', '2017-11-26 20:47:08'),
(3, '', '', 'habibdukuly@gmail.com', '$2y$10$VVZlO/G1AVvDEa5ZySzdt.XMHRXhBlyDzzCHahCdetdoaCl64ndr6', '', '', '', '0', '1', '', '', '2017-11-28 15:27:52'),
(4, '', '', 'alikeen@almasparlour.co.ke', '$2y$10$l/J6B4bvwNBA1moJNhrueeAFGeKWiSNVNsBMvHmmMVY1kfWaRVZja', '', '', '', '0', '1', '', '', '2017-11-28 17:57:06'),
(7, '', '', 'trialrun@three.com', '$2y$10$9vUJ14hueXInqZyEGml00ORyz6m816BU818ITI3aN6/mjFCXvkYsu', '', '', '', '411660109', '0', '', '', '2017-11-29 07:10:24'),
(8, '', '', 'abdulwangara@almasparlour.co.ke', '$2y$10$yNnkLq/3JvHpRDqPGAAy6.sixJ0XnbVA.2ZWdIJ5xxB7vYcQ.ozQW', '', '', '', '995591502', '0', '', '', '2017-11-29 08:00:16'),
(9, '', '', 'sallyambila@almasparlour.co.ke', '$2y$10$OABaRNurjJQmsQkU19ziHOI2MU/wLAMG0D3Lu.1kT3yfQTZ3pnob.', '', '', '', '764387311', '0', '', '', '2017-11-29 08:09:11'),
(10, '', '', 'jacob@ug.com', '$2y$10$KbU314pBM9J1ixJImTcLIelp4Fd4nOs8wwu2TKZ7F3DMnsJqk6m3e', '', '', '', '0', '1', '', '', '2017-11-29 08:37:22');

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
(18, '127.0.0.1', '2017-12-08 12:26:03');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `fav_items`
--
ALTER TABLE `fav_items`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items_list`
--
ALTER TABLE `items_list`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_traffic`
--
ALTER TABLE `user_traffic`
  MODIFY `ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;--
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
