-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 06:35 PM
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
-- Database: `pets_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `pet_id` int(11) NOT NULL,
  `pet_name` text NOT NULL,
  `owner_name` text NOT NULL,
  `services` varchar(50) NOT NULL,
  `appoinment_date` date NOT NULL,
  `appoinment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grooming`
--

INSERT INTO `grooming` (`pet_id`, `pet_name`, `owner_name`, `services`, `appoinment_date`, `appoinment_time`) VALUES
(1, 'qwert', 'mandar', 'cleaning', '0000-00-00', '0000-00-00 00:00:00'),
(2, 'qwert', 'mandar', 'bathing', '0000-00-00', '0000-00-00 00:00:00'),
(3, 'ashutosh', 'vivek', 'hairstyling', '2024-06-03', '2024-06-03 17:25:00'),
(4, 'ashutosh', 'vivek', 'bathing', '2024-06-14', '2024-06-14 16:28:00'),
(5, 'ashutosh', 'mandar', 'hairstyling', '2024-06-21', '2024-06-21 15:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare`
--

CREATE TABLE `healthcare` (
  `pet_id` int(11) NOT NULL,
  `pet_name` text NOT NULL,
  `owner_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthcare`
--

INSERT INTO `healthcare` (`pet_id`, `pet_name`, `owner_name`, `email`, `phone`, `date`, `message`) VALUES
(1, 'vivek', 'mandar', 'abc@gmail.com', '1234567890', '0000-00-00', 'asdfghjk'),
(3, 'vivek', 'Vivek Jadhav', 'vivekjadhav6088@gmail.com', '07028608839', '2024-05-31', 'ewrdgkhl'),
(4, 'vivek', 'mandar', 'tejas@gmail.com', '9876543210', '2024-06-02', 'qwedfgbhnm');

-- --------------------------------------------------------

--
-- Table structure for table `traning`
--

CREATE TABLE `traning` (
  `pet_id` int(11) NOT NULL,
  `pet_name` text NOT NULL,
  `owner_name` text NOT NULL,
  `choose_trainer` text NOT NULL,
  `appoinment_date` date NOT NULL,
  `appoinment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traning`
--

INSERT INTO `traning` (`pet_id`, `pet_name`, `owner_name`, `choose_trainer`, `appoinment_date`, `appoinment_time`) VALUES
(1, 'qwert', 'mandar', 'jane-smith', '2024-06-01', '0000-00-00 00:00:00'),
(2, 'tejas', 'mandar', 'jane-smith', '2024-06-08', '2024-06-08 16:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `healthcare`
--
ALTER TABLE `healthcare`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `traning`
--
ALTER TABLE `traning`
  ADD PRIMARY KEY (`pet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grooming`
--
ALTER TABLE `grooming`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `healthcare`
--
ALTER TABLE `healthcare`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traning`
--
ALTER TABLE `traning`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
