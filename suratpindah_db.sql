-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 08:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratpindah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_meninggal`
--

CREATE TABLE `tb_meninggal` (
  `id_meninggal` int(233) NOT NULL,
  `nik` varchar(150) NOT NULL,
  `tanggal_meninggal` varchar(20) NOT NULL,
  `penyebab` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `id_mutasi` int(233) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tanggal_mutasi` varchar(120) NOT NULL,
  `alamat_mutasi` varchar(120) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `status_mutasi` varchar(20) NOT NULL COMMENT '1:masuk\r\n2:pindah\r\n',
  `status_permintaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(233) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL COMMENT '1:ada\r\n2:tdk ada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(233) NOT NULL,
  `nama_user` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `username` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL,
  `role_id` int(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_meninggal`
--
ALTER TABLE `tb_meninggal`
  ADD PRIMARY KEY (`id_meninggal`);

--
-- Indexes for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_meninggal`
--
ALTER TABLE `tb_meninggal`
  MODIFY `id_meninggal` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  MODIFY `id_mutasi` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD CONSTRAINT `tb_mutasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
