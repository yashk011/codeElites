-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 05:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scart2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'yash', 'yash');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_address`
--

CREATE TABLE `confirm_order_address` (
  `id2` int(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_order_address`
--

INSERT INTO `confirm_order_address` (`id2`, `firstname`, `lastname`, `email`, `address`, `city`, `pincode`, `contactno`) VALUES
(1, 'yashh', 'khurana', 'vghhg', 'jjnjj', 'hbhbjnbhj', 'hbbnbn', 'bnb n n'),
(0, 'ghsahgs', 'sxgvgxsh', 'khuranayash110.yk@gmail.com', ' bn bn  n', 'Raipur', '788876', '8888787878'),
(0, 'yash', 'khurana', 'khuranayash110.yk@gmail.com', ' bn bn  n', 'Raipur', '788876', '8888787878'),
(0, 'yash', 'khurana', 'khuranayash110.yk@gmail.com', ' bn bn  n', 'Raipur', '788876', '8888787878'),
(0, 'ghsahgs', 'sxgvgxsh', 'khuranayash110.yk@gmail.com', ' bn bn  n', 'Raipur', '788876', '8888787878'),
(0, 'ghsahgs', 'sxgvgxsh', 'khuranayash110.yk@gmail.com', ' bn bn  n', 'Raipur', '788876', '8888787878'),
(2147483647, 'yash', 'sxgvgxsh', 'khuranayash110.yk@gmail.co', ' bn bn  n', 'Raipur', '788876', '8888787878'),
(2147483647, 'arpita', 'gauraha', 'gaur@gmail.com', 'DD Nagar', 'Raipur', '788876', '2222222222'),
(2147483647, 'arpita', 'gauraha', 'gaur@gmail.com', 'DD Nagar', 'Raipur', '788876', '2222222222'),
(2147483647, 'arpita', 'gauraha', 'khuranayash110.yk@gmail.com', 'DD Nagar', 'Raipur', '788876', '8888787878'),
(2147483647, 'yash', 'sxgvgxsh', 'khuranayash110.yk@gmail.com', 'DD Nagar', 'gvhbh', '788876', '9090909090'),
(2147483647, 'yash', 'sxgvgxsh', 'khuranayash110.yk@gmail.com', 'DD Nagar', 'gvhbh', '788876', '9090909090'),
(1234567890, 'yogi', 'upadhyay', 'yogi@gmail.com', 'DD Nagar', 'Raipur', '494001', '7867867869'),
(2147483647, 'monu', 'khurana', 'monu@gmail.com', 'DD Nagar', 'Raipur', '788876', '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(25) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_qty` varchar(5) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_price`, `product_name`, `product_type`, `product_qty`, `product_desc`) VALUES
(13, '/product_image2/234e4c819677e105e7f8950c635fd99eshovel.jpg', 150, 'Shovel', 'Tools', '20', 'Single Piece and Durable'),
(14, '/product_image2/ba939ad90f6ddfa94ae95e8a16e6417cshovel2.jpg', 325, 'Shovel', 'Tools', '30', 'Set of 3 and Cheap'),
(15, '/product_image2/6eda0f248f460404ccfbd7c7a3f76bf4trovel1.jpg', 200, 'Trovel', 'Tools', '30', 'Single Piece'),
(16, '/product_image2/d03ae553a1196d4befc33202258c5e3btrovel2.jpg', 400, 'Trovel', 'Tools', '40', 'Set of 3'),
(17, '/product_image2/03cfe90269689113d7fb7b4ec6d06152ammonium_chloride.jpg', 50, 'Gymnosperms', 'Seeds', '400', 'Nice Quality'),
(18, '/product_image2/770743e8a35b1fa9c1c9e8267fcebc78conifers.jpg', 45, 'Gymnosperms', 'Seeds', '500', 'Healthy'),
(19, '/product_image2/2116470d9b1c97ca47b51ce707edeb99cycad.jpg', 40, 'Gymnosperms', 'Seeds', '300', 'Seeds with Long life'),
(20, '/product_image2/97b65d908323b3570f53f0924373e391Ginkgo.jpg', 123, 'Gymnosperms', 'Seeds', '150', 'Nice '),
(21, '/product_image2/e4a527f21e7db6ccdca29a984a624715grass seed.jpg', 50, 'Angiosperms', 'Seeds', '500', 'Cheap but good'),
(22, '/product_image2/ea987bf166aa0d9321cd8c66484677abpopping_corn.jpg', 123, 'Angiosperms', 'Seeds', '300', 'Poppy Seeds for you'),
(23, '/product_image2/f75900caa1aeb589d6519ee31286cfa6cherry.jpg', 25, 'Angiosperms', 'Seeds', '200', 'Dicots '),
(24, '/product_image2/7aa0d3841c77ef11195c25079006418csunflower.jpg', 50, 'Angiosperms', 'Seeds', '500', 'Nice to plant'),
(25, '/product_image2/f184ece56a9ff91ed628526bc56038b2pump1.jpg', 500, 'Sprayer Pump', 'Tools', '10', 'High Pressure'),
(26, '/product_image2/fc0ee78edf9fb18429be12d36e8a2345sprayer2.jpg', 1000, 'Sprayer Pump', 'Tools', '5', 'Easy to use'),
(27, '/product_image2/8225b126f82559ad7b1781fb72a26d68sowing2.jpg', 5000, 'Plough', 'Tools', '5', 'Easy to use'),
(28, '/product_image2/300adfc1532efc781392fd3e99eedd49sowing2.jpg', 4440, 'Plough', 'Tools', '10', 'Easy to handle'),
(29, '/product_image2/4217d8756ba2d7b85507b366079db959ammonium_chloride.jpg', 400, 'Ammonium Fertillizers', 'Tools', '10', 'Chlorine base'),
(30, '/product_image2/7db195a182524110c15ba8a97bc46356ammonium_sulphate.jpg', 600, 'Ammonium Fertillizers', 'Fertillizers', '10', 'Sulphate Base'),
(31, '/product_image2/ff79be5156b0c69d4001d309730c356dsuperphosphate.png', 150, 'Sulphate Fertillizers', 'Fertillizers', '10', 'Sulphate Base'),
(32, '/product_image2/30bb1c6f906e2ac914b21a63f584d2a671bKZGmn-pL._SL1280_.jpg', 300, 'Phosphate Fertillizers', 'Tools', '3', 'SuperPhosphate'),
(33, '/product_image2/9bc63679dcb7e146408c10a9d0e63394urea.jpg', 150, 'Urea Fertillizers', 'Fertillizers', '20', 'Healthy For Plants'),
(34, '/product_image2/379788dfa708ed5055ecb69cbf1b3971urea-1301294689007.jpg', 300, 'Urea Fertillizers', 'Fertillizers', '7', 'Most High Quality');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `descr` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `iddd` int(25) NOT NULL,
  `cno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`descr`, `price`, `quantity`, `total`, `iddd`, `cno`) VALUES
('55', '', '2222222222', '', 0, ''),
('Seeds', '55', '2', '110', 2147483647, '8888787878'),
('Seeds', '55', '2', '110', 2147483647, '9090909090'),
('Seeds', '55', '2', '110', 2147483647, '9090909090'),
('Seeds', '55', '2', '110', 1234567890, '7867867869'),
('Urea', '22222', '1', '22222', 1234567890, '7867867869'),
('Shovel', '325', '1', '325', 2147483647, '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state` varchar(30) NOT NULL,
  `capital` varchar(30) NOT NULL,
  `soil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state`, `capital`, `soil`) VALUES
('andhra pradesh', 'hyderabad', 'clay'),
('Arunachal Pradesh', '  Itanagar', 'slit'),
('Assam ', ' Dispur', 'loam'),
(' Bihar ', ' Patna', 'sand'),
('Goa  ', 'Panaji', 'sand'),
(' Gujarat ', ' Gandhinagar', 'silt'),
('Haryana ', ' Chandigarh ', 'clay'),
('Himachal Pradesh', '  Shimla', 'loam'),
('Jammu & Kashmir', ' Srinagar (Winter : Jammu)', 'sand'),
(' Karnataka ', ' Bangalooru', 'loam'),
('Kerala ', ' Thiruvananthapuram ', 'silt'),
('Madhya Pradesh', '  Bhopal', 'sand'),
('Maharashtra', ' Mumbai ', 'loam'),
('Manipur', '  Imphal', 'sand'),
('Meghalaya ', ' Shillong ', 'clay'),
('Mizoram', '  Aizawl', 'loam'),
('Nagaland ', ' Kohima', 'silt'),
(' Orissa ', ' Bhubaneswar', 'sand'),
('Punjab', '  Chandigarh', 'silt'),
(' Rajasthan ', 'Jaipur', 'clay'),
('Sikkim', ' Gangtok', 'sand'),
(' Tamil Nadu', '  Chennai', 'loam'),
('Tripura ', ' Agartala ', 'sand'),
('Uttar Pradesh', '  Lucknow', 'loam'),
('West Bengal', '  Kolkata ', 'loam'),
('Chhattisgarh', '  Raipur', 'loam'),
('Uttarakhand ', ' Dehradun', 'silt'),
(' Jharkhand', ' Ranchi', 'loam'),
('chhattisgarh', 'raipur', 'sand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
