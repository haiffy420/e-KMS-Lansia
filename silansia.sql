-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 12:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silansia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_adl_barthel`
--

CREATE TABLE `tb_adl_barthel` (
  `no1_barthel` varchar(150) NOT NULL,
  `no2_barthel` varchar(150) NOT NULL,
  `no3_barthel` varchar(150) NOT NULL,
  `no4_barthel` varchar(150) NOT NULL,
  `no5_barthel` varchar(150) NOT NULL,
  `no6_barthel` varchar(150) NOT NULL,
  `no7_barthel` varchar(150) NOT NULL,
  `no8_barthel` varchar(150) NOT NULL,
  `no9_barthel` varchar(150) NOT NULL,
  `no10_barthel` varchar(150) NOT NULL,
  `id_pasien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_pasien` int(255) NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_iadl_lawton`
--

CREATE TABLE `tb_iadl_lawton` (
  `no1_lawton` varchar(150) NOT NULL,
  `no2_lawton` varchar(150) NOT NULL,
  `no3_lawton` varchar(150) NOT NULL,
  `no4_lawton` varchar(150) NOT NULL,
  `no5_lawton` varchar(150) NOT NULL,
  `no6_lawton` varchar(150) NOT NULL,
  `no7_lawton` varchar(150) NOT NULL,
  `no8_lawton` varchar(150) NOT NULL,
  `id_pasien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(255) NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nama_panggilan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jekel` enum('Laki-laki','Perempuan','-') COLLATE utf8_unicode_ci DEFAULT '-',
  `tempat_lh` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kawin` enum('Nikah','Tidak menikah','Janda','Duda','-') COLLATE utf8_unicode_ci DEFAULT '-',
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rw` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `no_telepon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_tinggal` enum('Rumah sendiri','Panti sosial','Rumah anak','Tidak tetap','Lain-lain') COLLATE utf8_unicode_ci DEFAULT 'Lain-lain',
  `agama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `suku` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `didik_akhir` enum('Tidak sekolah','SD','SMP/MTS','SMA/SMK','D3','S1','S2','S3') COLLATE utf8_unicode_ci DEFAULT 'Tidak sekolah',
  `nik` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gol_d` enum('A','B','O','AB','-') COLLATE utf8_unicode_ci DEFAULT '-',
  `hobi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bpjs` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `asuransi_lain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sumber_dn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Sehat','Kurang Sehat','Sakit','Meninggal') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanggung`
--

CREATE TABLE `tb_penanggung` (
  `id_penanggung` int(11) NOT NULL,
  `nama_penanggung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hub_lansia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_pos_p` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_telepon_p` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_pasien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('Administrator','User') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'ADMIN e-KMS Lansia', 'admin', '3be32b59483f5083b4848ed034da6c6446acef3a', 'Administrator'),
(2, 'Pengguna e-KMS Lansia', 'user', '80f0ed2089e14950d85e62ce526e3ded2ab50f3b', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adl_barthel`
--
ALTER TABLE `tb_adl_barthel`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pasien`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_iadl_lawton`
--
ALTER TABLE `tb_iadl_lawton`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pasien_2` (`id_pasien`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_penanggung`
--
ALTER TABLE `tb_penanggung`
  ADD PRIMARY KEY (`id_penanggung`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tb_penanggung`
--
ALTER TABLE `tb_penanggung`
  MODIFY `id_penanggung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
