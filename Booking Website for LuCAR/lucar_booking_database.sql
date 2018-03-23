-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 07:50 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucar_booking_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `robot` varchar(100) NOT NULL,
  `pickUp` varchar(100) NOT NULL,
  `dropLoc` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`robot`, `pickUp`, `dropLoc`, `date`, `time`, `id`) VALUES
('Piki-30 Kgs', 'Terminal 1 Gate A', 'Terminal 2 Gate B', '2017-11-16', '12:20', 1),
('Mongo-150 Kgs', 'Terminal 1, Gate 1', 'Terminal 2 Gate B', '2017-11-10', '22:30', 2),
('Pika-50 Kgs', 'Terminal 2, Gate 1', 'Terminal 1, Gate 2', '2017-11-16', '20:30', 3),
('Piki-30 Kgs', 'Terminal 1, Gate 2', 'Terminal 1, Gate 1', '2017-11-11', '23:00', 4),
('Pika-50 Kgs', 'Terminal 1 Gate A', 'Terminal 2 Gate B', '2017-11-14', '02:23', 5),
('Piki-30 Kgs', 'Terminal 1 Gate A', 'Terminal 2 Gate B', '2017-11-17', '22:03', 6),
('Mongo-150 Kgs', 'Terminal 1 Gate A', 'Terminal 2 Gate B', '2017-11-23', '09:08', 7),
('Pika-50 Kgs', 'Terminal 1 Gate A', 'Terminal 2 Gate B', '2017-11-16', '05:05', 8);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `passenger_id` int(4) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `residence` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_details`
--

INSERT INTO `passenger_details` (`passenger_id`, `first_name`, `last_name`, `occupation`, `residence`) VALUES
(1000, 'John', 'Doe', 'Service', 'California'),
(1234, 'Aditya', 'Pathak', 'Student', 'Thane'),
(2000, 'Jane', 'Roe', 'Unemployed', 'Los Angeles'),
(4321, 'Sanket', 'Paratkar', 'Student', 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `ticket_id` int(6) NOT NULL,
  `source` varchar(3) NOT NULL,
  `destination` varchar(3) NOT NULL,
  `boarding` datetime NOT NULL,
  `arrival` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`ticket_id`, `source`, `destination`, `boarding`, `arrival`) VALUES
(123123, 'MUM', 'DEL', '2017-10-15 09:00:00', '2017-10-15 11:00:00'),
(321321, 'DEL', 'MUM', '2017-10-17 18:30:00', '2017-10-17 20:30:00'),
(456456, 'DEL', 'PUN', '2017-10-10 15:00:00', '2017-10-10 17:10:00'),
(789789, 'PUN', 'BAN', '2017-10-20 20:00:00', '2017-10-20 21:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `uid`) VALUES
('adipathak', 'apathak1997@gmail.com', 'test', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
