-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 03:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_totom_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `armazen`
--

CREATE TABLE `armazen` (
  `id_armazen` char(10) NOT NULL,
  `naran_armazen` varchar(50) NOT NULL,
  `id_suplier` char(10) NOT NULL,
  `id_produtu` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategoria`
--

CREATE TABLE `kategoria` (
  `id_kategoria` char(10) NOT NULL,
  `naran_kategoria` varchar(50) NOT NULL,
  `id_produtu` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kliente`
--

CREATE TABLE `kliente` (
  `id_kliente` char(10) NOT NULL,
  `naran_kliente` varchar(50) NOT NULL,
  `enderesu` varchar(50) NOT NULL,
  `nu_telfone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` char(10) NOT NULL,
  `id_produtu` char(10) NOT NULL,
  `id_kliente` char(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `data_order` date NOT NULL DEFAULT '2000-01-01',
  `status` enum('Selu Ona','Seidauk Selu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produtu`
--

CREATE TABLE `produtu` (
  `id_produtu` char(10) NOT NULL,
  `naran_produto` varchar(50) NOT NULL,
  `stock` int(100) NOT NULL,
  `folin` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` char(10) NOT NULL,
  `naran_suplier` varchar(50) NOT NULL,
  `data_tama` date NOT NULL DEFAULT '2000-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `armazen`
--
ALTER TABLE `armazen`
  ADD PRIMARY KEY (`id_armazen`),
  ADD KEY `id_suplier` (`id_suplier`),
  ADD KEY `id_produtu` (`id_produtu`);

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id_kategoria`),
  ADD KEY `id_produtu` (`id_produtu`);

--
-- Indexes for table `kliente`
--
ALTER TABLE `kliente`
  ADD PRIMARY KEY (`id_kliente`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_produtu` (`id_produtu`),
  ADD KEY `id_kliente` (`id_kliente`);

--
-- Indexes for table `produtu`
--
ALTER TABLE `produtu`
  ADD PRIMARY KEY (`id_produtu`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `armazen`
--
ALTER TABLE `armazen`
  ADD CONSTRAINT `armazen_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `armazen_ibfk_2` FOREIGN KEY (`id_produtu`) REFERENCES `produtu` (`id_produtu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD CONSTRAINT `kategoria_ibfk_1` FOREIGN KEY (`id_produtu`) REFERENCES `produtu` (`id_produtu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_kliente`) REFERENCES `kliente` (`id_kliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_produtu`) REFERENCES `produtu` (`id_produtu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
