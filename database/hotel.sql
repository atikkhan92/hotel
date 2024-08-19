-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `hotel`
--

--
-- ----------------------------------------
--

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_contect` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_name`, `user_email`, `user_password`, `user_contect`) VALUES
(1, 'Nevil', 'parmarnevil@gmail.com', '123', '7284962773'),
(2, 'Bansi', 'jimuliyabansi@gmail.com', '123', '1234567890');



-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(15) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `user_name`, `password`) VALUES
(1, 'Hotel President', '2724');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `bed_id` int(15) NOT NULL,
  `bed_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`bed_id`, `bed_name`) VALUES
(1, 'SINGLE BED'),
(2, 'DOUBLE BED'),
(3, 'FAMILY ROOM');


-- ------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Hotel President', 'info@hotelpresidentgmail.in', '0288-2558493 / 0288-2557491', 'Teen Batti,Town Hall,Jamnagar-361001');

-- ----------------------------------------------------


--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(15) NOT NULL,
  `welcome_title` varchar(200) NOT NULL,
  `welcome_text` longtext NOT NULL,
  `ph_number` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `welcome_title`, `welcome_text`, `ph_number`, `email`, `address`) VALUES
(1, '[ WELCOME TO HOTEL PRESIDENT ]', 'Hotel President is first class full service hotel. The concept & feel of the hotel is to create a comfort and luxury
', '0288-2558493 / 0288-2557491', 'info@hotelpresidentgmail.in', 'Teen Batti,Town Hall,Jamnagar-361001');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `room_id` int(15) NOT NULL,
  `b_id` int(15) NOT NULL,
  `room_number` varchar(150) NOT NULL,
  `room_option` varchar(200) NOT NULL,
  `room_price` varchar(300) NOT NULL,
  `room_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`room_id`, `b_id`, `room_number`, `room_option`, `room_price`, `room_status`) VALUES
(1, 1, '1', 'NON AC', '700','Available'),
(2, 1, '2', 'AC', '1000','Available'),
(3, 1, '3', 'LUXURY', '1300','Available'),
(4, 1, '4', 'ROYAL SUITE', '1600','Available'),
(5, 1, '5', 'KING SUITE', '1900','Available'),
(6, 2, '6', 'NON AC', '2200', 'Available'),
(7, 2, '7', 'AC', '2500', 'Available'),
(8, 2, '8', 'LUXURY', '2800', 'Available'),
(9, 2, '9', 'ROYAL SUITE', '3100', 'Available'),
(10, 2, '10', 'KING SUITE', '3400', 'Available'),
(11, 3, '11', 'NON AC', '3700', 'Available'),
(12, 3, '12', 'AC', '4000', 'Available'),
(13, 3, '13', 'LUXARY', '4300', 'Available'),
(14, 3, '14', 'ROYAL SUITE', '4600', 'Available'),
(15, 3, '15', 'KING SUITE', '5000', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(220) NOT NULL,
  `in` date NOT NULL,
  `out` date NOT NULL,
  `phoneno` varchar(222) NOT NULL,
  `buy_id` varchar(210) NOT NULL,
  `r_no` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`,`in`,`out`, `phoneno`, `buy_id`, `r_no`) VALUES
(1, 'abc', 'abc@gmail.com','25/07/2022','28/07/2022', '9408533355', '2', '5');

-- -------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `detail`) VALUES
(1, 'Hotel President', 'Hotel President offer guests an extraordinary place that is created by combining unique architecture and structure, expressive decor and artistry, and magnificent features all in one great location.
				 Add great service to this and the result is an extraordinary experience that would make your memory of Hotel a long and lasting one.
In HOTEL PRESIDENT youre always among friends and can look forward to the most enjoyable experience in comfort. Youre sure to come again.
Hotel is first class full service business hotel. The concept and feel of the hotel is to create an oasis of comfort and luxury.
The Hotel with 15 well appointed rooms with ample seating including the splendid restaurant, multi functional hall & conference hall with luxurious facilities offers all the requirements of a modern business traveler.');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`bed_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `bed_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `room_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;  
COMMIT;

