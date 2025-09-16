-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2025 at 01:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(100) DEFAULT NULL,
  `umur` int(100) NOT NULL,
  `prodi` char(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `umur`, `prodi`, `foto`, `id`) VALUES
('Rusdi', 20, 'Business', 'rusdi.jpg', 1),
('Amba', 21, 'IMT', 'amba.jpg', 2),
('Ironi', 22, 'VCD', 'ironi.jpg', 3),
('Disnat', 23, 'Nganggur', 'disnat.jpg', 4),
('Bagas', 19, 'Informatika', 'bagas.jpg', 5),
('Sinta', 20, 'Sistem Informasi', 'sinta.jpg', 6),
('Rizky', 21, 'Teknik Elektro', 'rizky.jpg', 7),
('Dewi', 22, 'Manajemen', 'dewi.jpg\r\n', 8),
('Fajar', 20, 'Teknik Mesin', 'fajar.jpg', 9),
('Laras', 19, 'Akuntansi', 'laras.jpg', 10),
('Andi', 21, 'Ilmu Komunikasi', 'andi.jpg', 11),
('Nadia', 19, 'Desain Produk', 'nadia.jpg', 12),
('Bima', 22, 'Arsitektur', 'bima.jpg', 13),
('Citra', 22, 'Psikologi', 'citra.jpg', 14),
('Rasya', 21, 'Informatika', 'rasya.jpg', 15),
('Edi', 22, 'Sistem Informasi', 'edi.jpg', 16),
('Juan', 20, 'Desain Grafis', 'juan.jpg', 17),
('Mahmud', 24, 'Ekonomi', 'mahmud.jpg', 18),
('Eko', 23, 'Teknik Mesin', 'eko.jpg', 19),
('Farah', 22, 'Psikologi', 'farah.jpg', 20),
('Gilang', 25, 'Hukum', 'gilang.jpg', 21),
('Hana', 21, 'Kedokteran', 'hana.jpg', 22),
('Iqbal', 23, 'Matematika', 'iqbal.jpg', 23),
('Joko', 22, 'Fisika', 'joko.jpg', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
