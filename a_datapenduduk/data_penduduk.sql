-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 12:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sid_parampuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `status_perkawinan` varchar(30) NOT NULL,
  `gol_darah` varchar(12) NOT NULL,
  `status_sosial` varchar(100) NOT NULL,
  `kategori_sosial` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `bapak` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nama`, `nik`, `jenis_kelamin`, `kk`, `tempat`, `tanggal_lahir`, `alamat`, `rt_rw`, `dusun`, `desa`, `kecamatan`, `agama`, `pendidikan`, `kewarganegaraan`, `status_perkawinan`, `gol_darah`, `status_sosial`, `kategori_sosial`, `pekerjaan`, `bapak`, `ibu`) VALUES
(8, 'IVAN HADI', '5208032102950001', 'L', '5208032102950001', 'LOMBOK BARAT', '21 FEBRUARI 1995', 'LOMBOK UTARA', '02/01', 'JELANTIK', 'DANGIANG', 'KAYANGAN', 'ISLAM', 'S1', 'INDONESIA', 'MENIKAH', 'AB', 'AYAH', 'BIASA AJA', 'PROGRAMER', 'MUSTAIF', 'AYUNI'),
(9, 'WAHID', '5208032102950001', 'L', '5208032102950001', 'LOMBOK UTARA', '21 FEBRUARI 1995', 'LOMBOK UTARA', '02/01', 'JELANTIK', 'DANGIANG', 'KAYANGAN', 'ISLAM', 'S1', 'INDONESIA', 'MENIKAH', 'AB', 'BIASA AJA', 'BIASA AJA', 'PROGRAMER', 'MUSTAIF', 'AYUNI'),
(10, 'IWAN', '5208032102950001', 'L', '5208032102950001', 'LOMBOK TENGAH', '21 FEBRUARI 1995', 'LOMBOK TENGAH', '02/01', 'PUYUNG', 'PUYUNG', 'JONGGAT', 'ISLAM', 'S1', 'INDONESIA', 'MENIKAH', 'B', 'AYAH', 'BIASA AJA', 'PROGRAMER', 'MUSTAIF', 'AYUNI'),
(11, 'OPIN', '5208032102950001', 'L', '5208032102950001', 'LOMBOK TENGAH', '21 FEBRUARI 1995', 'LOMBOK UTARA', '02/01', 'JELANTIK', 'DANGIANG', 'KAYANGAN', 'ISLAM', 'S1', 'INDONESIA', 'MENIKAH', 'AB', 'AYAH', 'BIASA AJA', 'PROGRAMER', 'MUSTAIF', 'AYUNI'),
(13, 'FAQIH', '5208032102950001', 'L', '-', 'MATARAM', '21 FEBRUARI 1995', 'LOMBOK UTARA', '02/01', 'JELANTIK', 'DANGIANG', 'KAYANGAN', 'ISLAM', 'S1', 'INDONESIA', 'BELUM KAWIN', 'AB', 'ANAK', 'BIASA AJA', 'PROGRAMER', 'MUSTAIF', 'AYUNI'),
(14, 'HAFSAH', '5208032102950001', 'P', '-', 'LOMBOK TIMUR', '21 FEBRUARI 1995', 'LOMBOK UTARA', '02/01', 'JELANTIK', 'DANGIANG', 'KAYANGAN', 'ISLAM', 'S1', 'INDONESIA', 'BELUM KAWIN', 'AB', 'ANAK', 'BIASA AJA', 'PROGRAMER', 'MUSTAIF', 'AYUNI'),
(15, 'ABDURRAHMAN WAHID', '0988377365337', 'L', '-', 'LOMBOK BARAT', '30-12-1999', 'DUSUN JELANTIK', '02/01', 'JELANTIK', 'Dangiang', 'KAYANGAN', 'ISLAM', 'SMA', 'INDONESIA', 'Belum Kawin', 'B', 'ANAK', 'SDFS', 'MAHASISWA', 'MUSTAIF', 'AYUNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





CREATE TABLE `data_penduduk` (
  `id` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(20) NULL,
  `kk` varchar(20) NULL,
  `tempat` varchar(100) NULL,
  `tanggal_lahir` varchar(50) NULL,
  `jenis_kelamin` varchar(50) NULL,
  `alamat` varchar(200) NULL,
  `rt` varchar(50) NULL,
  `rw` varchar(50) NULL,
  `dusun` varchar(50) NULL,
  `desa` varchar(50) NULL,
  `kecamatan` varchar(50) NULL,
  `agama` varchar(30) NULL,
  `pendidikan` varchar(100) NULL,
  `kewarganegaraan` varchar(30) NULL,
  `status_perkawinan` varchar(30) NULL,
  `gol_darah` varchar(12) NULL,
  `status_sosial` varchar(100) NULL,
  `kategori_sosial` varchar(100) NULL,
  `pekerjaan` varchar(100) NULL,
  `bapak` varchar(100) NULL,
  `ibu` varchar(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
