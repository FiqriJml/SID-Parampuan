-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 01:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

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
  `nik` varchar(20) DEFAULT NULL,
  `kk` varchar(20) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `rt` varchar(50) DEFAULT NULL,
  `rw` varchar(50) DEFAULT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(30) DEFAULT NULL,
  `status_perkawinan` varchar(30) DEFAULT NULL,
  `gol_darah` varchar(12) DEFAULT NULL,
  `status_sosial` varchar(100) DEFAULT NULL,
  `kategori_sosial` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `bapak` varchar(100) DEFAULT NULL,
  `ibu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nama`, `nik`, `kk`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `agama`, `pendidikan`, `kewarganegaraan`, `status_perkawinan`, `gol_darah`, `status_sosial`, `kategori_sosial`, `pekerjaan`, `bapak`, `ibu`) VALUES
(1, 'Sahidun', '5201083112780256', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'A', 'Suami', 'Miskin', 'Petani', NULL, NULL),
(2, 'Sholatiah', '5201087112830225', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMP', 'Indo', 'Janda', 'AB', 'Istri', 'Sejahtera', 'Pedagang', NULL, NULL),
(3, 'Rame', '3252010820012002', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'B', 'Suami', 'Miskin', 'Tukang', NULL, NULL),
(4, 'Sahati', '5201087112740085', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SD', 'Indo', 'Kawin', 'B', 'Suami', 'Miskin', 'Tukang', NULL, NULL),
(5, 'Sahdi', '5201082702860002', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMP', 'Indo', 'Kawin', 'A', 'Suami', 'Miskin', 'Tukang', NULL, NULL),
(6, 'Halimatusadiah', '5201084406920005', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'O', 'Istri', 'Miskin', 'Pedagang', NULL, NULL),
(7, 'Jumine', '5201080107680031', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '01', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMP', 'Indo', 'Kawin', 'A', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(8, 'Tiaseh', '5201081772700215', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'AB', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(9, 'Ridwan', '5201080707930001', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'B', 'Suami', 'Miskin', 'Petani', NULL, NULL),
(10, 'Sinarmi', '5201084707810001', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'B', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(11, 'Rumase', '5201084106620010', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'A', 'Suami', 'Miskin', 'Petani', NULL, NULL),
(12, 'Saipah', '5201080107720285', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'O', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(13, 'Rinaseh', '5201080410777021', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'A', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(14, 'Supiani', '5201084107940186', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'AB', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(15, 'Sahdin', '5201083112880003', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '02', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'B', 'Suami', 'Miskin', 'Petani', NULL, NULL),
(16, 'Seriati', '5201087112890137', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'B', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(17, 'Muhammad Taufik', '5201080304700003', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'A', 'Suami', 'Miskin', 'Petani', NULL, NULL),
(18, 'Mardiah', '5201084103830006', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'O', 'Istri', 'Miskin', 'Petani', NULL, NULL),
(19, 'Amaq Atimin', '5201080107570078', '5201083002650340', 'Perampuan', '12/31/1995', 'P', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Belum Kawin', 'A', 'Anak', 'Miskin', 'Petani', NULL, NULL),
(20, 'Asimah', '5201084107620258', '5201083002650340', 'Perampuan', '8/31/1995', 'P', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Belum Kawin', 'AB', 'Anak', 'Sejahtera', 'Petani', NULL, NULL),
(21, 'Komang', '5201080107600028', '5201083002650340', 'Perampuan', '2/18/1986', 'L', 'Jalan Gunung Pengsong', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Hindu', 'SMA', 'Indo', 'Belum Kawin', 'B', 'Anak', 'Sejahtera', 'Petani', NULL, NULL),
(22, 'Ketut', '5201080107720268', '5201083002650340', 'Perampuan', '12/31/1975', 'L', 'Jalan Gunung Pengsong', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Hindu', 'SMA', 'Indo', 'Kawin', 'B', 'Bapak', 'Sejahtera', 'Petani', NULL, NULL),
(23, 'Nyoman', '5201084107750074', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Jalan Gunung Pengsong', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Hindu', 'SMA', 'Indo', 'Kawin', 'A', 'Ibu', 'Sejahtera', 'Petani', NULL, NULL),
(24, 'Selamin', '5201083112600126', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'O', 'Istri', 'Sejahtera', 'Petani', NULL, NULL),
(25, 'Serine', '5201086005700005', '5201083002650340', 'Perampuan', '12/31/1975', 'P', 'Karang Bayan', '03', '00', 'Karang Bayan', 'Perampuan', 'Labuapi', 'Islam', 'SMA', 'Indo', 'Kawin', 'O', 'Istri', 'Sejahtera', 'Petani', NULL, NULL);

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
(3, 'KEBON KUNYIT', 'CAHYO ST'),
(4, '', ''),
(5, '', '');

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
(1, 'PARAMPUAN', 'LABUAPI', '83363', 'fd456406745d816a45cae554c788e754.png', 'IVAN HADI', 'KEPALA DESA', 'ADELIA SAPUTRI', 'SEKRETARIS DESA', 'WAHYUDI', 'ZIKRULLAH', 'ISMAIL', 'ILHAM', 'JAYADI', 'AMINI');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_surat` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `tanggal`, `jenis_surat`, `id_user`, `id_penduduk`, `keperluan`, `file`) VALUES
(11, '2019-10-10', 'Surat Keterangan Usaha', 1, 19, '', '5201080107570078_Surat Keterangan Usaha.pdf'),
(14, '2019-10-10', 'Surat Keterangan Penghasilan', 1, 24, '', '5201083112600126_Surat Keterangan Penghasilan.pdf'),
(15, '2019-10-10', 'Surat Keterangan Belum Menikah', 1, 24, 'Daftar Kerja', '5201083112600126_Surat Keterangan Belum Menikah.pdf');

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
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id_dusun` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
