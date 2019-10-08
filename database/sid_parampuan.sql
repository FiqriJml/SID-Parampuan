-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 05:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id_dusun` int(12) NOT NULL,
  `nama_dusun` varchar(100) NOT NULL,
  `kadus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`, `kadus`) VALUES
(1, 'DUSUN JELANTIK', 'NASIPUDIN'),
(2, 'DANGIANG TIMUR', 'HAJI EDI'),
(3, 'KEBON KUNYIT', 'CAHYO ST');

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil` int(12) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `alamat_desa` varchar(200) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `kades` varchar(100) NOT NULL,
  `jabatan_kades` varchar(100) NOT NULL,
  `sekdes` varchar(100) NOT NULL,
  `jabatan_sekdes` varchar(100) NOT NULL,
  `kasi_pemerintahan` varchar(100) NOT NULL,
  `kasi_kesejahteraan` varchar(100) NOT NULL,
  `kasi_pelayanan` varchar(100) NOT NULL,
  `kaur_tu` varchar(100) NOT NULL,
  `kaur_keuangan` varchar(100) NOT NULL,
  `kaur_perencanaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_desa`
--

INSERT INTO `profil_desa` (`id_profil`, `nama_desa`, `alamat_desa`, `kode_pos`, `logo`, `kades`, `jabatan_kades`, `sekdes`, `jabatan_sekdes`, `kasi_pemerintahan`, `kasi_kesejahteraan`, `kasi_pelayanan`, `kaur_tu`, `kaur_keuangan`, `kaur_perencanaan`) VALUES
(2, 'PARAMPUAN', 'LABUAPI', '83363', 'fd456406745d816a45cae554c788e754.png', 'IVAN HADI', 'KEPALA DESA', 'ADELIA SAPUTRI', 'SEKRETARIS DESA', 'WAHYUDI', 'ZIKRULLAH', 'ISMAIL', 'ILHAM', 'JAYADI', 'AMINI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Ivan Hadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id_dusun`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id_dusun` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
