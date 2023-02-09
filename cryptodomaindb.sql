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

CREATE DATABASE cryptodomaindb;
use cryptodomaindb;

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

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
  `id_coin` varchar(4) NOT NULL,
  `coin_q` float NOT NULL,
  `cotization` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id_trans`, `id_wallet_send`, `id_wallet_recieve`, `id_coin`, `coin_q`, `cotization`) VALUES
(1, 11, 11, 'BTC', 1, 21127),
(2, 11, 11, 'BTC', 1, 21123.1),
(3, 0, 11, 'BTC', 1, 21107.6),
(4, 8, 11, 'BTC', 1, 21105.5),
(5, 11, 11, 'BTC', 1, 21093.5),
(6, 11, 11, 'BTC', 1, 21096.1),
(7, 11, 11, 'BTC', 0.1, 21102),
(8, 8, 11, 'BTC', 0.1, 21106.1);

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
(0, 0, 'admin@cryptodomain.com', '21232f297a57a5a743894a0e4a801fc3', 'The', 'Admin', '2023-02-01', 'BTC', '', 1, 1),
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
  `json_coins` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`json_coins`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id_wallet`, `id_user`, `json_coins`) VALUES
(0, 0, '{\"EUR\": 1, \"BTC\": 10001, \"ETH\": 15000, \"LUN\": 30000, \"DOGE\": 40000}'),
(8, 8, '{\"EUR\": 0, \"BTC\": 1.1, \"ETH\": 0, \"LUN\": 0, \"DOGE\": 0}'),
(9, 9, '{\"EUR\": 0, \"BTC\": 0, \"ETH\": 0, \"LUN\": 0, \"DOGE\": 0}'),
(10, 10, '{\"EUR\": 0, \"BTC\": 0, \"ETH\": 0, \"LUN\": 0, \"DOGE\": 0}'),
(11, 11, '{\"EUR\": 100340, \"BTC\": 95.9, \"ETH\": 0, \"LUN\": 0, \"DOGE\": 0}'),
(12, 12, '{\"EUR\": 0, \"BTC\": 0, \"ETH\": 0, \"LUN\": 0, \"DOGE\": 0}');

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
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
