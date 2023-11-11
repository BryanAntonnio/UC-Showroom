-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 05:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showrom`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `id_card` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `alamat`, `telp`, `id_card`) VALUES
(1, 'Agus', 'Mulyorejo', '89230123', '89230123'),
(2, 'Budi', 'Wonorejo', '0827318231', '0827318231'),
(3, 'Tiffany', 'Manyar', '081234567890', '0129301257');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `model` varchar(10) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `penumpang` int(2) DEFAULT NULL,
  `manufaktur` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `bahan_bakar` varchar(20) DEFAULT NULL,
  `luas_bagasi` int(11) DEFAULT NULL,
  `jml_roda` int(11) DEFAULT NULL,
  `luas_kargo` int(11) DEFAULT NULL,
  `ukuran_bagasi` int(11) DEFAULT NULL,
  `kapasitas_mesin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenis`, `nama`, `model`, `tahun`, `penumpang`, `manufaktur`, `harga`, `bahan_bakar`, `luas_bagasi`, `jml_roda`, `luas_kargo`, `ukuran_bagasi`, `kapasitas_mesin`) VALUES
(6, 'MOBIL', NULL, 'Brio', 2021, 5, 'Honda', 210000000, 'Bensin', 200, 0, 0, 0, 0),
(7, 'TRUK', NULL, 'Truck', 2019, 3, 'TOYOTA', 197000000, '', 0, 8, 1000, 0, 0),
(9, 'MOBIL', NULL, 'Stargazer', 2023, 7, 'Hyundai', 260000000, 'Pertalite', 300, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `customer` int(11) DEFAULT NULL,
  `kendaraan` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `customer`, `kendaraan`, `harga`) VALUES
(5, 0, 1, 100000000),
(6, 1, 6, 210000000),
(7, 1, 7, 197000000),
(8, 3, 9, 260000000),
(9, 3, 6, 210000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
