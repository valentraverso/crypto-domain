-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 05:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptodomaindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE DATABASE cryptodomaindb;
use cryptodomaindb;

CREATE TABLE `coins` (
  `id_coin` int(11) NOT NULL,
  `coin_name` varchar(20) NOT NULL,
  `coin_abv` varchar(4) NOT NULL,
  `img_coin` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_trans` int(11) NOT NULL,
  `id_wallet_send` int(4) NOT NULL,
  `id_wallet_recieve` int(4) NOT NULL,
  `id_coin` int(4) NOT NULL,
  `coin_q` int(10) NOT NULL,
  `cotization` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(4) NOT NULL,
  `id_wallet` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `fav_coin` varchar(4) NOT NULL,
  `avatar` char(100) NOT NULL,
  `status` int(1) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_wallet`, `email`, `password`, `first_name`, `last_name`, `birth_date`, `fav_coin`, `avatar`, `status`, `role`) VALUES
(0, 0, 'admin@cryptodomain.com', '21232f297a57a5a743894a0e4a801fc3', 'El', 'Admin', '2023-02-01', 'BTC', '', 1, 1),
(7, 7, 'asdasd@pepe.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Albert', 'Pepe', '2022-12-01', 'ETH', '', 1, 0),
(8, 8, 'lolito@lolito.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pepita', 'Fdezsssss', '2022-09-17', 'LUN', '', 1, 0),
(9, 9, 'lolito@lolito.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lolito', 'Fdez', '2022-09-17', 'DOGE', '', 1, 0),
(10, 10, 'dayan@dayan.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dayansssssssssss', 'Guay', '2023-02-23', 'DOGE', '', 1, 0),
(11, 11, 'valentino@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Valentino', 'Traverso', '2023-02-10', 'BTC', '', 1, 0),
(12, 12, 'nuevo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Nuevo ', 'Usuario', '2023-01-31', 'BTC', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id_wallet` int(3) NOT NULL,
  `id_user` int(4) NOT NULL,
  `coin_obj` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id_wallet`, `id_user`, `coin_obj`) VALUES
(0, 0, '{\nEUR: 0,\nBTC: 10000,\nETH: 20000,\nLUN: 100000,\nDOGE: 150000,\n}'),
(8, 8, ''),
(9, 9, ''),
(10, 10, ''),
(11, 11, ''),
(12, 12, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id_coin`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id_wallet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;