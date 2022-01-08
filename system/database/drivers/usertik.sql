-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 01:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usertik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dll`
--

CREATE TABLE `dll` (
  `id` int(11) NOT NULL,
  `nrp` int(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `satker` varchar(50) NOT NULL,
  `perihal` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dll`
--

INSERT INTO `dll` (`id`, `nrp`, `nama`, `satker`, `perihal`, `waktu`) VALUES
(1, 123, 'cdw', 'cwc', 'cwc', '2021-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `ht`
--

CREATE TABLE `ht` (
  `id` int(11) NOT NULL,
  `nrp` int(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `satker` varchar(50) NOT NULL,
  `perihal` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ht`
--

INSERT INTO `ht` (`id`, `nrp`, `nama`, `satker`, `perihal`, `waktu`) VALUES
(9, 1233, 'ciniro', 'aas', 'ass', '2021-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `id` int(11) NOT NULL,
  `nrp` int(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `satker` varchar(50) NOT NULL,
  `perihal` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'luvic', 'vinitozummizola@gmail.com', '$2y$10$ROwqR1sG7B4ykR5yHB68retK5pGZQvHfAuaTjMm5Ww0z1bYKjM32W', 1, 1, 1630469236),
(4, 'tes', 'bidtik@gmail.com', '$2y$10$ATM3yEE2tRafcWvWtj091uR8l.PBncoEd0AFXKAl1m/1QMomTM9Qi', 2, 1, 1630638991);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `vicon`
--

CREATE TABLE `vicon` (
  `id` int(11) NOT NULL,
  `nrp` int(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `satker` varchar(50) NOT NULL,
  `perihal` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dll`
--
ALTER TABLE `dll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ht`
--
ALTER TABLE `ht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vicon`
--
ALTER TABLE `vicon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dll`
--
ALTER TABLE `dll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ht`
--
ALTER TABLE `ht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sound`
--
ALTER TABLE `sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vicon`
--
ALTER TABLE `vicon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
