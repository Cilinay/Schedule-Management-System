-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 04, 2024 at 03:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `birthday` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `lastLogIn` bigint(20) NOT NULL,
  `dateCreated` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `lastName`, `firstName`, `middleName`, `birthday`, `address`, `mobile`, `lastLogIn`, `dateCreated`) VALUES
(5, 'lina@mail.com', 'lina@mail.com', 'TGluYQ==', 'Ignacio', 'Lina', 'Cadias', '2004-06-23', 'Calamba', '09948347535', 1729659156, 1729659156),
(6, 'ignacio@mail.com', 'ignacio@mail.com', 'MTIzNA==', 'Ignacio', 'Lina', 'Cadias', '2004-06-23', 'Calamba', '09948347535', 1730077644, 1730077644),
(7, 'hinata@mail.com', 'hinata@mail.com', 'aGluYXRh', 'Hyuga', 'Hinata', '', '2001-01-01', 'Konoha', '09948347535', 1730258124, 1730258124),
(8, 'neji@mail.com', 'neji@mail.com', 'bmVqaQ==', 'Hyuga', 'Neji', '', '2000-02-01', 'Hidden Leaf', '09948347535', 1730680446, 1730680446);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
