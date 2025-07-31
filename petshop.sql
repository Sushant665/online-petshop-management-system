-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 02:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin1', 'Password1'),
(2, 'Admin2', 'Password2'),
(3, 'Admin3', 'Password3');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `pid` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `descr` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`pid`, `img`, `title`, `price`, `descr`, `category`) VALUES
(46, 'image6.jpeg', 'Rottweiler Adult ', 500, 'Wet Food For Dog', 'Dog'),
(47, 'image1.png', 'Boxer adult', 199, 'Wet Food For Dog', 'Dog'),
(48, 'image2.png', 'Mini Digestive Care', 299, 'Dry Food For Dog', 'Dog'),
(49, 'image3.jpeg', 'Maxi Adult', 399, 'Dry Food For Dog', 'Dog'),
(50, 'image5.webp', 'Matisse Kitten', 250, 'Farmina Dry Food', 'Cat'),
(51, 'image2.webp', 'N&D Quinoa-Lamb Adul', 299, 'Farmina Dry Food', 'Cat'),
(52, 'image3.webp', 'Royal Canin Persian ', 299, 'Breed Dry food 1.', 'Cat'),
(53, 'image4.webp', 'Applaws Wet Cat Food', 399, 'Tuna Mousse (70g x 12 Cans)', 'Cat'),
(54, 'image1.webp', 'Matisse Kitten', 350, 'Farmina Dry Food', 'Cat'),
(55, 'image6.webp', 'Applaws Wet Cat Food', 399, 'Tuna Fillet with Whole Anchovy (70g x 12 Pouches)', 'Cat'),
(56, 'image4.png', 'Giant Starte', 298, 'Wet Food For Dog', 'Dog'),
(57, 'image5.jpeg', 'Exigent Care', 380, ' Dry Food For Dog', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_name`, `description`, `qty`, `category`, `size`, `price`, `total_price`, `img`) VALUES
(80, 3, 8, 'Arrow', 'Arrow is a Premium clothing Brand', 1, 'Men', 'Small', 1200.00, 1200.00, 'arrow.webp'),
(104, 7, 12, 'H&M', 'NA', 1, 'Men', 'Small', 2000.00, 2000.00, 'h$m.webp'),
(107, 1, 9, 'Peter England', 'A well fitted formal shirt always makes you look sharp. ', 1, 'Men', 'Small', 999.00, 999.00, 'peter.webp'),
(108, 8, 9, 'Peter England', 'A well fitted formal shirt always makes you look sharp. ', 1, 'Men', 'Small', 999.00, 999.00, 'peter.webp'),
(109, 12, 13, 'Levis', 'NA', 1, 'Men', 'Small', 899.00, 899.00, 'levies.webp'),
(110, 16, 32, 'qwertfji', 'sadzfxcgjk', 1, 'Men', 'Small', 1234.00, 1234.00, 'Puma Snikers.png'),
(111, 17, 13, 'Levis', 'NA', 1, 'Men', 'Small', 899.00, 899.00, 'levies.webp');

-- --------------------------------------------------------

--
-- Table structure for table `clothing_feedback`
--

CREATE TABLE `clothing_feedback` (
  `id` int(11) NOT NULL,
  `overall_experience` int(11) DEFAULT NULL,
  `product_quality` int(11) DEFAULT NULL,
  `website_navigation` int(11) DEFAULT NULL,
  `order_process` int(11) DEFAULT NULL,
  `shipping_delivery` int(11) DEFAULT NULL,
  `customer_service` int(11) DEFAULT NULL,
  `product_range` text DEFAULT NULL,
  `improvement_suggestions` text DEFAULT NULL,
  `recommendation` varchar(3) DEFAULT NULL,
  `additional_comments` text DEFAULT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothing_feedback`
--

INSERT INTO `clothing_feedback` (`id`, `overall_experience`, `product_quality`, `website_navigation`, `order_process`, `shipping_delivery`, `customer_service`, `product_range`, `improvement_suggestions`, `recommendation`, `additional_comments`, `submission_time`) VALUES
(1, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:04:38'),
(2, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:05:40'),
(3, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:05:41'),
(4, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:05:41'),
(5, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:06:42'),
(6, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:08:09'),
(7, 0, 0, 0, 0, 0, 0, '', '', '', '', '2023-12-01 18:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Vrushabh', 'vrushabh.bhabire@zerovaega.in', 'asfsdavsBv', '2023-10-30 07:30:01'),
(11, 'Vrushabh', 'vb@gmail.com', 'xvxzcvxbfd', '2023-10-30 07:35:44'),
(13, 'i want to make a ppt on my mobile application ', 'vb@gmail.com', 'dahadfhd', '2023-10-30 07:36:33'),
(14, 'Vrushabh', 'vrushabh.bhabire@zerovaega.in', 'sfsv', '2023-10-30 07:36:36'),
(19, 'i want to make a ppt on my mobile application ', 'vrushabh.bhabire@zerovaega.in', 'nl.k.mbk', '2023-10-30 07:45:28'),
(21, 'Vrushabh', 'vb@gmail.com', 'ghjj', '2023-10-30 07:47:40'),
(41, 'Vrushabh', 'vrushabbhabire3041@gmail.com', 'zvzvxvXv', '2023-10-30 08:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(50) NOT NULL, 
  `pincode` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `created_at`, `address`, `pincode`, `phone`) VALUES
(3, 'pb', 'pb@gmail.com', '123', '2023-10-28 06:48:05', '', '', ''),
(6, 'yash', 'y@123', '123', '2023-11-06 05:20:38', 'dfgbdsdgxfgh', '456789', '7845654475'),
(9, 'pranjali', 'pb@gmail.com', '123', '2023-11-21 08:09:06', 'chfgcg', '410254', '123654789'),
(12, 'vrushabh', 'vrushabbhabire108@gmail.com', '123', '2023-12-01 12:17:09', 'a/p kurundwad', '416106', '07410104108'),
(16, 'Bobby', 'MeetBobby@Truck.com', 'Bobby@123', '2024-02-26 16:09:52', 'Kasaba Bawada', '544655', '864356465'),
(17, 'pradnya', 'p@gmail.com', '123', '2024-04-18 09:13:34', 'tfyugbinomo', '123456', '1234567899');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user1', 'password1'),
(6, 'vb', 'ruby');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view1`
-- (See below for the actual view)
--
CREATE TABLE `view1` (
`id` int(11)
,`username` varchar(25)
,`password` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view2`
-- (See below for the actual view)
--
CREATE TABLE `view2` (
`id` int(11)
,`username` varchar(25)
,`password` varchar(25)
);

-- --------------------------------------------------------

--
-- Structure for view `view1`
--
DROP TABLE IF EXISTS `view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view1`  AS SELECT `admin`.`id` AS `id`, `admin`.`username` AS `username`, `admin`.`password` AS `password` FROM `admin` ;

-- --------------------------------------------------------

--
-- Structure for view `view2`
--
DROP TABLE IF EXISTS `view2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view2`  AS SELECT `admin`.`id` AS `id`, `admin`.`username` AS `username`, `admin`.`password` AS `password` FROM `admin` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothing_feedback`
--
ALTER TABLE `clothing_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `clothing_feedback`
--
ALTER TABLE `clothing_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

CREATE TABLE signup(
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL

)
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
