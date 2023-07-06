-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 11:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootstrap_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_uname` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_uname`, `admin_email`, `admin_pwd`) VALUES
(1, 'admin', 'admin@mail.com', '$2y$10$AFMhdlwEaWjjBzoCfdq62uNQqopNGW4vk8GXrDBNGKPAgB0mON0TC');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(50) NOT NULL,
  `iata` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`, `iata`) VALUES
('Mumbai', 'BOM'),
('Delhi', 'DEL'),
('Bangalore', 'BLR'),
('Hyderabad', 'HYD'),
('Chennai', 'MAA'),
('Kolkata', 'CCU'),
('Pune', 'PNQ'),
('Ahmedabad', 'AMD'),
('Surat', 'STV'),
('Jaipur', 'JAI'),
('Lucknow', 'LKO'),
('Kanpur', 'KNU'),
('Nagpur', 'NAG'),
('Visakhapatnam', 'VTZ'),
('Bhopal', 'BHO'),
('Patna', 'PAT'),
('Ludhiana', 'LUH'),
('Agra', 'AGR'),
('Nashik', 'ISK'),
('Vadodara', 'BDQ'),
('Gorakhpur', 'GOP'),
('Varanasi', 'VNS'),
('Thiruvananthapuram', 'TRV'),
('Meerut', 'QME'),
('Rajkot', 'RAJ'),
('Jamshedpur', 'IXW'),
('Madurai', 'IXM'),
('Dhanbad', 'DBD'),
('Raipur', 'RPR'),
('Kota', 'KTU'),
('Guwahati', 'GAU'),
('Chandigarh', 'IXC'),
('Solapur', 'SSE'),
('Hubli-Dharwad', 'HBX'),
('Bareilly', 'BEK'),
('Moradabad', 'MBB'),
('Mysore', 'MYQ'),
('Gurgaon', 'DEL'),
('Aligarh', 'IXD'),
('Jalandhar', 'QJU'),
('Tiruchirappalli', 'TRZ'),
('Bhubaneswar', 'BBI'),
('Salem', 'SXV'),
('Warangal', 'WGC'),
('Guntur', 'GNT'),
('Dehradun', 'DED'),
('Jammu', 'IXJ'),
('Imphal', 'IMF'),
('Amravati', 'IXA'),
('Ranchi', 'IXR'),
('Allahabad', 'IXD'),
('Hubballi', 'HBX'),
('Ujjain', 'UJN'),
('Jamnagar', 'JGA'),
('Sangli', 'SGL'),
('Belagavi', 'IXG'),
('Tirunelveli', 'TCR'),
('Mangalore', 'IXE'),
('Ambattur', 'IXM'),
('Bhagalpur', 'BGP'),
('Shivamogga', 'SXV'),
('Cuttack', 'IXC'),
('Kakinada', 'IXK'),
('Ajmer', 'KQH'),
('Gulbarga', 'GBI'),
('Sagar', 'SGO'),
('Gandhinagar', 'AMD'),
('Yamunanagar', 'DED'),
('Anantapur', 'ATP'),
('Kurnool', 'KJB'),
('Kadapa', 'CDP'),
('Ongole', 'OGL'),
('Burhanpur', 'BUP'),
('Shillong', 'SHL');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `q1` varchar(250) NOT NULL,
  `q2` varchar(20) NOT NULL,
  `q3` varchar(250) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fleet`
--

CREATE TABLE `fleet` (
  `fleet_id` int(11) NOT NULL,
  `fleet_name` varchar(20) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fleet`
--

INSERT INTO `fleet` (`fleet_id`, `fleet_name`, `seats`) VALUES
(1, 'Skyliner', 78),
(2, 'Aerojet', 180),
(3, 'Wingstar', 186),
(4, 'Jetstream', 232);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `arrival_date` date NOT NULL,
  `arrival_time` time NOT NULL,
  `fleet` varchar(20) NOT NULL,
  `seats` varchar(110) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `admin_id`, `departure`, `departure_date`, `departure_time`, `arrival`, `arrival_date`, `arrival_time`, `fleet`, `seats`, `duration`, `price`, `status`) VALUES
(248, 1, 'Mumbai', '2023-05-01', '13:00:00', 'Delhi', '2023-05-01', '15:00:00', 'Aerojet', '180', '2h 00m', '3386', ''),
(249, 1, 'Varanasi', '2023-05-05', '00:35:00', 'Guwahati', '2023-05-05', '05:31:00', 'Jetstream', '232', '4h 56m', '3299', NULL),
(250, 1, 'Jaipur', '2023-06-17', '04:10:00', 'Hubli-Dharwad', '2023-06-17', '08:54:00', 'Skyliner', '78', '4h 44m', '9931', NULL),
(251, 1, 'Nashik', '2023-07-09', '12:45:00', 'Ambattur', '2023-07-09', '15:56:00', 'Wingstar', '186', '3h 11m', '3769', NULL),
(252, 1, 'Sangli', '2023-07-01', '15:50:00', 'Raipur', '2023-07-01', '19:34:00', 'Skyliner', '78', '3h 44m', '1773', NULL),
(253, 1, 'Patna', '2023-04-30', '19:20:00', 'Shivamogga', '2023-04-30', '23:19:00', 'Skyliner', '78', '3h 59m', '6877', NULL),
(254, 1, 'Sangli', '2023-07-11', '02:40:00', 'Kota', '2023-07-11', '04:05:00', 'Skyliner', '78', '1h 25m', '5685', NULL),
(255, 1, 'Moradabad', '2023-04-21', '03:20:00', 'Lucknow', '2023-04-21', '06:26:00', 'Jetstream', '232', '3h 6m', '2952', NULL),
(256, 1, 'Lucknow', '2023-07-12', '11:40:00', 'Bhopal', '2023-07-12', '15:08:00', 'Aerojet', '180', '3h 28m', '5344', NULL),
(257, 1, 'Jamnagar', '2023-06-04', '16:50:00', 'Burhanpur', '2023-06-04', '19:02:00', 'Jetstream', '232', '2h 12m', '8819', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gift_vouchers`
--

CREATE TABLE `gift_vouchers` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `passenger_profile`
--

CREATE TABLE `passenger_profile` (
  `ticket_id` int(11) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `mobile` varchar(110) NOT NULL,
  `dob` date NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `passenger_profile`
--

INSERT INTO `passenger_profile` (`ticket_id`, `passenger_id`, `user_id`, `flight_id`, `mobile`, `dob`, `f_name`, `m_name`, `l_name`) VALUES
(0, 1, 9, 248, '8779613923', '2023-04-17', 'Tushar', 'Ramesh', 'Nagar'),
(0, 2, 9, 253, '7977178915', '2023-04-05', 'Prashant', 'Ramesh', 'Nagar'),
(0, 3, 9, 249, '4564546542', '2023-04-05', 'Anthony', 'Edward', 'Stark');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_no` varchar(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `expire_date` varchar(5) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwd_reset_id` int(11) NOT NULL,
  `pwd_reset_email` varchar(50) NOT NULL,
  `pwd_reset_selector` varchar(80) NOT NULL,
  `pwd_reset_token` varchar(120) NOT NULL,
  `pwd_reset_expires` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `cost` int(11) NOT NULL,
  `class` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `flight_id`, `user_id`, `booking_date`, `seat_no`, `cost`, `class`) VALUES
(42, 248, 9, '0000-00-00 00:00:00', '32', 3386, 'eco'),
(43, 253, 9, '0000-00-00 00:00:00', '48', 6877, 'eco'),
(44, 249, 9, '0000-00-00 00:00:00', '58', 3299, 'eco');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(9, 'tusharnagar', '321tusharnaagar@gmail.com', '$2y$10$obQPDLWMVikk8D7Kb9jDweT1/rv/bAuvHzrYy414sWab2bafAJXQG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `fleet`
--
ALTER TABLE `fleet`
  ADD PRIMARY KEY (`fleet_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `gift_vouchers`
--
ALTER TABLE `gift_vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_profile`
--
ALTER TABLE `passenger_profile`
  ADD PRIMARY KEY (`passenger_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwd_reset_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fleet`
--
ALTER TABLE `fleet`
  MODIFY `fleet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `gift_vouchers`
--
ALTER TABLE `gift_vouchers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passenger_profile`
--
ALTER TABLE `passenger_profile`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwd_reset_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `passenger_profile`
--
ALTER TABLE `passenger_profile`
  ADD CONSTRAINT `passenger_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `passenger_profile_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
