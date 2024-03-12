-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 07:59 AM
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
-- Database: `realwayanad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'realwayanad', 'ReAlway36519');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `pname` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `images`, `pname`, `name`, `price`, `mail`, `place`, `url`, `phone`, `txt`) VALUES
(2, '2dd2bc714748d34f9e58c617a298a285.jpg', 'New house', 'unknown', '1.40 cr negotiable', 'info@gmail.com', '', 'Newhouse', '+971507611980', '<p>New house ,sq feet 2900,25 cent,6 bedrooms,4 bathrooms,15 cents asking price 1.40&nbsp;cr&nbsp;negotiable</p>'),
(3, '348a766d6d301898d017b184cb750cdc.jpg', '7 cents,1350 sq feet', 'unknown', '40 negotiable', 'info@gmail.com', '', '7cents1350sqfeet', '+971507611980', '<p>7 cents,1350 sq feet,3 bedrooms, 3 bathrooms, asking price&nbsp;40&nbsp;negotiable</p>'),
(4, 'a37e5f114565f774288951afd899ae2a.jpg', '10 cents house', 'unknown', ' 85 lakhs negotiable', 'info@gmail.com', '', '10centshouse', '+971507611980', '<p>10 cents,2550 sq feet,4 bedrooms,4 bathrooms, asking price 85 lakhs&nbsp;negotiable</p>');

-- --------------------------------------------------------

--
-- Table structure for table `small_plot`
--

CREATE TABLE `small_plot` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `pname` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `small_plot`
--

INSERT INTO `small_plot` (`id`, `images`, `pname`, `name`, `price`, `mail`, `place`, `url`, `phone`, `txt`) VALUES
(2, 'c7e18af135cfa479282ae328011e792d.jpg', '11.5 cents of land', 'unknown', '36 negotiable', 'info@gmail.com', 'wayanad', '115centsofland', '+971507611980', '<p>11.5 cents of land,1650 sq feet,3 bedrooms,3 bathrooms , asking price&nbsp;36&nbsp;negotiable</p>'),
(3, '92c29bea1c3dbdf121ba5e3790d9365b.jpg', '3 plots for sale', 'unknown', '1.50 per cent', 'info@gmail.com', 'wayanad', '3plotsforsale', '+971507611980', '<p>3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent,&nbsp;negotiable</p>'),
(4, '548807a0bfa67d08704cdd0d5743f23d.jpg,55484ff6eb856417c7e33a56c4cb5c44.jpg,15d9822fa6d32d8860f2c89cfa008072.jpg', '3 acres land', 'unknown', '45 lakhs per acre', 'info@gmail.com', 'wayanad', '3acresland', '+971507611980', '<p>3 acres land, asking price 45 lakhs per acre&nbsp;negotiable</p>');

-- --------------------------------------------------------

--
-- Table structure for table `villa`
--

CREATE TABLE `villa` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `pname` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `villa`
--

INSERT INTO `villa` (`id`, `images`, `pname`, `name`, `price`, `mail`, `place`, `url`, `phone`, `txt`) VALUES
(1, 'e25dbe430d832025ed1eafc3ad37aec9.jpg', 'villa-demo', 'unknown', '1.40 cr negotiable', 'info@gmail.com', 'wayanad', 'villa', '+971507611980', '<p>New house ,sq feet 2900,25 cent,6 bedrooms,4 bathrooms,15 cents asking price 1.40&nbsp;cr&nbsp;negotiable</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `small_plot`
--
ALTER TABLE `small_plot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villa`
--
ALTER TABLE `villa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `small_plot`
--
ALTER TABLE `small_plot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `villa`
--
ALTER TABLE `villa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
