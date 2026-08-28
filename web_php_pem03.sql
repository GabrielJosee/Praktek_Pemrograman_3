-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2026 at 03:52 AM
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
-- Database: `web_php_pem03`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `skill`, `nilai`, `urutan`) VALUES
(1, 'Pemrograman', 80, 1),
(2, 'PLC', 60, 3),
(3, 'CAD', 80, 4),
(4, 'Gambar Elektrik', 90, 2),
(5, 'Robotika', 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(2, 'Jose', 'gjosfabian@gmail.com', 'Kenalan', 'dasdadsad', '2026-08-27 13:36:50'),
(3, 'Jose', 'dadadsa@gmail.com', 'dasdsa', 'dasdsadas', '2026-08-27 13:37:34'),
(4, 'dsadas', 'dasda@gmail.com', 'dskaodkas', 'dksalfjakslf', '2026-08-27 13:43:33'),
(5, 'dsfdsfs', 'gjosfabian@gmail.com', 'fdsfsd', 'fdsfds', '2026-08-27 13:44:30'),
(6, 'Jose', 'dadasdjsai@gmail.com', 'Ikan', 'aku mau beli', '2026-08-27 19:11:20'),
(7, 'Ilhan', 'ilhamdemam@gmail.com', 'Makanan', 'Aku mau makan dong', '2026-08-28 08:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `keterangan` text NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `keterangan`, `icon`) VALUES
(1, 'Web Development', 'Membangun website yang responsif, modern, dan user-friendly menggunakan teknologi terbaru.', 'bi bi-code-slash'),
(2, 'Embedded Systems', 'Merancang dan memprogram sistem mikrokontroler (Arduino/ESP32) untuk solusi IoT dan otomasi.', 'bi bi-cpu'),
(3, 'PLC Programming', 'Memprogram dan mengkonfigurasi Programmable Logic Controller (PLC) untuk sistem otomasi industri dan kontrol mesin.', 'bi bi-diagram-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
