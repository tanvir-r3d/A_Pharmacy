-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 04:24 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
(1, 'Ace', 'tablet', 15, 20, 'Paracetamol', 15, 'Paracetamol', 'Square', 'Fever', '2021-10-19'),
(2, 'Aciflix', 'capsule', 20, 35, 'Esmoprazol', 50, 'Esmoprazol', 'Incepta', 'Gastrik', '2021-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
