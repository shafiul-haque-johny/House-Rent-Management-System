-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 07:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_date` varchar(20) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `c_name`, `c_address`, `email`, `DOB`, `password`, `owner_id`, `phone`) VALUES
(454, 'Captain Johny', 'dhaka', 'johny@gamil.com', '1-5-2016', '789456', NULL, '01799382811'),
(455, 'Saem Sarkar', '213efdf', 'seam12@gmail.com', '2009-06-10', '5454545', NULL, '01799382811'),
(459, 'shafiul haque', 'Mohammadpur,dhaka', 'mhaque171319@bscse.uiu.ac.bd', '1997-11-16', '555', NULL, '01799382811');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `NID` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`id`, `name`, `email`, `age`, `address`, `contact`, `image`, `NID`, `occupation`) VALUES
(3, 'Md.Shafiul Haque ', 'mhaque171319@bscse.uiu.ac.bd', '23', 'Mohammadpur, Dhaka', '448147147', 'img/documentation/IMG_2122.jpg', '1218193', 'Student'),
(4, 'johny', 'gtgghaque@gmail.com', '23', 'Mohammadpur, Dhaka', '56236536', 'img/documentation/IMG_8146.JPG', '1218194', 'Student'),
(6, 'captain', 'shafiulhaque@gmail.com', '23', 'Mohammadpur, Dhaka', '56236536', 'img/documentation/person_4.jpg', '1218197', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `city` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `location_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`city`, `area`, `postal_code`, `location_id`, `client_id`, `owner_id`) VALUES
('dhaka', 'paltan', 1000, 0, NULL, NULL),
('dhaka', 'mirpur', 1216, 1, NULL, NULL),
('dhaka', 'ramna', 1217, 3, NULL, NULL),
('dhaka', 'Sabujbag', 1214, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `owner_name`, `address`, `email`, `DOB`, `Password`, `phone`) VALUES
(14, 'Rafia Rifa', 'NotunBazar,Dhaka', 'rrifa171204bscse.uiu.ac.bd', '1-11-1998', '502011', ' 01689418959'),
(17, 'shafiul haque johny', 'Mohammadpur', 'shafiulhaque@gmail.com', '1-11-1998', '555', '01673357792'),
(18, 'Shafiul Haque', 'Mohammadpur,Dhaka', 'bafhaque@gmail.com', '1-11-1998', '123', ' 01799382811'),
(19, 'Tonmoy Roy', 'FLAT#D-8, HOUSE#289, 290, 290/1, ROAD#8A (NEW),', 'tonmoy3991@hotmail.com', '01/01/2000', '1234', ' 8801815444806'),
(20, 'Asif', 'Kolabagan', 'asif.ahmed@gmail.com', '01/01/2000', '4321', ' 9124810');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_date` varchar(20) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_date`, `payment_id`, `amount`, `client_id`, `owner_id`) VALUES
('1-12-19', 121, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `images1` varchar(200) NOT NULL,
  `images2` varchar(200) NOT NULL,
  `room_discription` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_price`, `address`, `images`, `images1`, `images2`, `room_discription`, `city`, `area`, `payment_id`, `owner_id`, `client_id`, `location_id`, `status`) VALUES
(1, 5000, 'FLAT#D-8, HOUSE#289, 290, 290/1, ROAD#8A (NEW),', 'Annotation 2020-07-20 123416.png', 'Screenshot (108).png', 'Screenshot (106).png', 'On window and Beranda', 'Dhaka', 'Dhanmondi', NULL, 19, NULL, NULL, 0),
(5, 5000, 'Lake circus', '011 1712 58.png', 'Annotation 2020-07-20 123416.png', 'Annotation 2020-08-08 091640.png', 'Attached Bathrrom', 'D', 'Kolabagan', NULL, 19, NULL, NULL, 0),
(33, 25000, 'Mirpur, Dhaka', 'image_5.jpg', 'image_7.jpg', 'image_4.jpg', '3 Bed Room, 1 Kitchen, 1 Drawing, 1 Balcony', 'Dhaka', 'Mirpur', NULL, 18, NULL, NULL, 1),
(34, 25000, 'Dhanmondi, Dhaka', 'image_3.jpg', 'image_6.jpg', 'bg_2.jpg', '3 Bed Room, 1 Drawing, 1 Dining, 1 Kitchen, 1 Balc', 'Dhaka', 'Dhanmondi', NULL, 18, NULL, NULL, 0),
(35, 25000, 'Khilgoan', 'image_1.jpg', 'image_2.jpg', 'image_5.jpg', '3 Bed Room, 1 Kitchen, 1 Drawing, 1 Dining, 1 Balc', 'Dhaka', 'Khilgoan', NULL, 18, NULL, NULL, 1),
(78, 10000, 'NotunBazar,Badda,Dhaka', 'bg_2.jpg', 'bg.jpg', 'image_1.jpg', '2 Bed Room,1 Dining,1 kitchen', 'dhaka', 'Badda,Dhaka', NULL, 14, NULL, 0, 0),
(111, 5000, 'FLAT#D-8, HOUSE#289, 290, 290/1, ROAD#8A (NEW),', 'download.jpg', 'download.jpg', 'download.jpg', 'South veiwing verand', 'Dhaka', 'Dhanmondi', NULL, 19, NULL, NULL, 1),
(132, 5000, 'House no. 315/3, Road no. 8/a', 'klara_church_stockholm-wallpaper-1366x768 - Copy.jpg', 'klara_church_stockholm-wallpaper-1366x768 - Copy.jpg', 'klara_church_stockholm-wallpaper-1366x768 - Copy.jpg', '2 bedroom, 1 bathroom, 1 veranda', 'Dhaka', 'Dhanmondi', NULL, 19, NULL, NULL, 0),
(156, 4000, 'House no. 420, Road no. 15, Halishohor, Chittagong', '365073.jpg', '365073.jpg', '365073.jpg', 'South Facing veranda, @ bedroom, Dining room, Livi', 'Chittagong', 'Halishohor', NULL, 19, NULL, NULL, 0),
(6542, 20000, '3/22,Block-D,Salimullah Road,Mohammadpur,Dhaka', 'watch_dogs_2_wrench-wallpaper-7680x4320.jpg', 'watch_dogs_2_wrench-wallpaper-7680x4320.jpg', 'klara_church_stockholm-wallpaper-1366x768 - Copy.jpg', '2 Bed Room,1 Drawing,1 Dining,1 kitchen', 'dhaka', 'Mohammadpur', NULL, 17, NULL, NULL, 1),
(12345, 20000, '3/20,Block-D,Salimullah Road,Mohammadpur,Dhaka', 'image_8.jpg', 'image_7.jpg', 'image_1.jpg', '2 Bed Room,1 Drawing,1 Dining,1 kitchen', 'dhaka', 'Mohammadpur', NULL, 14, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`,`phone`),
  ADD UNIQUE KEY `owner_id` (`owner_id`),
  ADD UNIQUE KEY `owner_id_2` (`owner_id`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`),
  ADD UNIQUE KEY `owner_id` (`owner_id`,`email`,`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
