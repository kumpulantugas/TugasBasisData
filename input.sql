-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 08:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `input`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nilai` text NOT NULL,
  `catatan` text NOT NULL,
  `opsi` varchar(255) NOT NULL,
  `nyatet` text NOT NULL,
  `kerjasama` varchar(255) NOT NULL,
  `namapt` varchar(255) NOT NULL,
  `jabatpt` varchar(255) NOT NULL,
  `mitrapt` varchar(255) NOT NULL,
  `jabmitpt` varchar(255) NOT NULL,
  `opsides` varchar(255) NOT NULL,
  `catatjenis` text NOT NULL,
  `opsijenis` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `catatijazah` text NOT NULL,
  `opsiijazah` varchar(255) NOT NULL,
  `catatmitra` text NOT NULL,
  `opsimitra` varchar(255) NOT NULL,
  `nilaicalon` text NOT NULL,
  `catatcalon` text NOT NULL,
  `opsicalon` varchar(255) NOT NULL,
  `nilaiseleksi` text NOT NULL,
  `catatseleksi` text NOT NULL,
  `opsiseleksi` varchar(255) NOT NULL,
  `nilaibayar` text NOT NULL,
  `catatbayar` text NOT NULL,
  `opsibayar` varchar(255) NOT NULL,
  `catatjadwal` text NOT NULL,
  `opsijadwal` varchar(255) NOT NULL,
  `catatsurat` text NOT NULL,
  `opsisurat` varchar(255) NOT NULL,
  `nilaistudi` text NOT NULL,
  `catatstudi` text NOT NULL,
  `opsistudi` text NOT NULL,
  `moa` varchar(255) NOT NULL,
  `catatmoa` text NOT NULL,
  `opsimoa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
