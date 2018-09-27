-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 10:52 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `holders_name` text NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL,
  `card_cvv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `holders_name`, `card_number`, `expiry_date`, `card_cvv`) VALUES
(1, 'irene', '4562', '0000-00-00', '7546'),
(2, 'irene', '4562', '0000-00-00', '7546'),
(3, 'jane juma', '12365', '0000-00-00', '1236'),
(4, 'jane juma', '12365', '0000-00-00', '1236'),
(5, 'staicy', '415236', '0000-00-00', '56425522'),
(6, 'Mercy', '7578', '2018-05-09', '906908'),
(7, 'Julie', '6848', '2017-11-14', '858976'),
(8, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(9, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(10, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(11, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(12, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(13, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(14, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(15, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(16, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(17, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(18, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(19, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456'),
(20, 'Dorcas Andayi', '45698', '2018-05-16', 'BT456');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(40, 'Mary', 'Kamwende', 'marykamwende10@gmail.com', '9996535e07258a7bbfd8b132435c5962'),
(41, 'nuru', 'said', 'saidnurusalmin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(42, 'Halima', 'Hassan', 'halima@hotmail.com', 'halima'),
(43, 'Nasreen', 'Mohammed', 'nasreen@halima.com', 'nasreen'),
(44, 'Mercy', 'Andeso', 'mercy.cfk@gmail.com', 'ccb0eea8a706c4c34a16891f84e7b'),
(45, 'Mercy', 'Andeso', 'mercy.cfk@gmail.com', 'd94453b0977ac4cd5d410694226d15cd'),
(46, 'helisha', 'atieno', 'helisha.cfk@gmail.com', '729acfc3680aadac65c5c3c99c21dc1b'),
(47, 'Halima', 'Hassan', 'halima.cfk@gmail.com', '61f1b95cd7541feddd931ebc738a95c9'),
(48, 'Halima', 'Hassan', 'halima.cfk@gmail.com', '7718c4d9cc11736f566e6bd41e965eb7'),
(49, 'kadra', 'ali', 'alli@gmail.com', '24adb8132d540760ede199a7a97f3d63'),
(50, 'kadra', 'ali', 'alikadra35@gmail.com', 'fe407f962f0209921371db3ecb695535');

-- --------------------------------------------------------

--
-- Table structure for table `ticketing`
--

CREATE TABLE `ticketing` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `departing_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketing`
--

INSERT INTO `ticketing` (`id`, `first_name`, `last_name`, `departing_date`, `source`, `destination`) VALUES
(1, '', '', '2018-05-16 21:00:00.000000', 'Nairobi', 'Mackakos'),
(2, '', '', '2018-05-16 21:00:00.000000', 'Nairobi', 'Mackakos'),
(3, '', '', '2018-05-01 21:00:00.000000', 'Nairobi', 'Busia'),
(4, 'Dorcas', 'Andayi', '2018-05-27 21:00:00.000000', 'Nairobi', 'Busia'),
(5, 'Dorcas', 'Andayi', '2018-05-27 21:00:00.000000', 'Nairobi', 'Busia'),
(6, 'Nasreen', 'Halima', '2018-05-16 21:00:00.000000', 'Nairobi', 'Moshi'),
(7, 'khadija', 'yusuf', '2018-05-14 21:00:00.000000', '...choose...', '...choose...'),
(8, 'khadija', 'yusuf', '2018-05-14 21:00:00.000000', '...choose...', '...choose...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketing`
--
ALTER TABLE `ticketing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ticketing`
--
ALTER TABLE `ticketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
