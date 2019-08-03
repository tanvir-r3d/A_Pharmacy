-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2019 at 07:50 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `A_Pharmecy`
--

-- --------------------------------------------------------

--
-- Table structure for table `expanse_category_list`
--

CREATE TABLE `expanse_category_list` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expanse_category_list`
--

INSERT INTO `expanse_category_list` (`id`, `category`, `description`) VALUES
(5, 'Aqua', 'Aqua'),
(6, 'Tissue', 'Tissue'),
(7, 'Travel', 'Travel'),
(8, 'Salary', 'Salary'),
(9, 'Utility', 'Utility'),
(10, 'Fuel', 'Fuel'),
(11, 'Gasolina', 'Gasolina'),
(28, 'QQQQ', 'pp');

-- --------------------------------------------------------

--
-- Table structure for table `expenses_list`
--

CREATE TABLE `expenses_list` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenses_list`
--

INSERT INTO `expenses_list` (`id`, `category`, `amount`) VALUES
(10, 'aqua', '30'),
(14, 'aqua', '50'),
(15, 'fuel', '100'),
(17, 'aqua', '300'),
(18, 'aqua', '5');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(222) NOT NULL,
  `category` varchar(222) NOT NULL,
  `purchase_price` int(20) NOT NULL,
  `selling_price` int(20) NOT NULL,
  `store_box` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `genric_name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `effects` varchar(200) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`id`, `medicine_name`, `category`, `purchase_price`, `selling_price`, `store_box`, `quantity`, `genric_name`, `company`, `effects`, `expire_date`) VALUES
(3, 'Napa', 'tablet', 11, 20, 'Paracetamol', 20, 'Paracetamol', 'Square', 'Fever', '2019-07-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expanse_category_list`
--
ALTER TABLE `expanse_category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses_list`
--
ALTER TABLE `expenses_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expanse_category_list`
--
ALTER TABLE `expanse_category_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `expenses_list`
--
ALTER TABLE `expenses_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
