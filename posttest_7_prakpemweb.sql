-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 02:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest_7_prakpemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telepon` int(12) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `nama_lengkap`, `tgl_lahir`, `telepon`, `psw`) VALUES
(1, 'budimanperwira@gmail.com', 'Budiman', 'Budiman Perwira', '2002-10-06', 2147483647, '$2y$10$/7VRBFfXwy2xtXKwGBxDNeUzdpFMbf0cQPLoNgCXt.H40XzZ4kfgG'),
(2, 'bonibona@gmail.com', 'BonaBoni', 'Boni Bona', '2003-11-09', 2147483647, '$2y$10$TaUyubxk0BVCJcvlEkXtWuqpTw3JTv/NMUjDj3Z4W3mU80U4xT9yK');

-- --------------------------------------------------------

--
-- Table structure for table `menu_cupcakes`
--

CREATE TABLE `menu_cupcakes` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `topping` varchar(20) NOT NULL,
  `gula` varchar(15) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(15) NOT NULL,
  `produksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_cupcakes`
--

INSERT INTO `menu_cupcakes` (`id`, `gambar`, `nama`, `topping`, `gula`, `harga`, `stok`, `produksi`) VALUES
(1, 'Triple Berry.jpg', 'Triple Berry', '3 Berry', 'Less Sugar', 20000, 25, '02-11-22 17:14:35 pm'),
(2, 'Chocolate Butter.jpg', 'Chocolate Butter', 'Ceres and Cream', 'Normal Sugar', 25000, 10, '02-11-22 17:15:24 pm'),
(3, 'Vanilla Cupcakes.jpg', 'Vanilla Cupcakes', 'Sprinkle', 'Normal Sugar', 23500, 15, '02-11-22 17:16:43 pm'),
(4, 'Cookie Monster.jpg', 'Cookie Monster', 'Cookies', 'Normal Sugar', 26000, 20, '02-11-22 17:17:12 pm'),
(5, 'Oreo Cupcakes.jpg', 'Oreo Cupcakes', 'Oreo Cream', 'Normal Sugar', 24000, 10, '02-11-22 17:17:56 pm'),
(6, 'Strawberry Cream.jpg', 'Strawberry Cream', 'Strawberry', 'Less Sugar', 28000, 20, '02-11-22 17:18:33 pm'),
(7, 'Red Velvet.jpg', 'Red Velvet', 'Cream Cheese', 'Normal Sugar', 35000, 10, '02-11-22 17:19:12 pm'),
(8, 'Pumpkin Cupcakes.jpg', 'Pumpkin Cupcakes', 'Cinnamon Stick', 'Less Sugar', 28000, 15, '02-11-22 17:19:55 pm'),
(9, 'Dark Chocolate.jpg', 'Dark Chocolate', 'Pistachio', 'Less Sugar', 35000, 18, '02-11-22 17:20:27 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_cupcakes`
--
ALTER TABLE `menu_cupcakes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_cupcakes`
--
ALTER TABLE `menu_cupcakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
