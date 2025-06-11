-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 05:24 PM
-- Server version: 10.4.32-MariaDB
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
-- Database: `db_bidan`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan_kb`
--

CREATE TABLE `catatan_kb` (
  `id_kb` int(11) NOT NULL,
  `ortu_id` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jenis_kb` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `tensi_darah` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catatan_kehamilan`
--

CREATE TABLE `catatan_kehamilan` (
  `id_kehamilan` int(11) NOT NULL,
  `ortu_id` int(11) NOT NULL,
  `kehamilan` int(11) NOT NULL,
  `hpht` date NOT NULL,
  `htp` date NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `riwayat_alergi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catatan_persalinan`
--

CREATE TABLE `catatan_persalinan` (
  `id_persalinan` int(11) NOT NULL,
  `id_catatanKehamilan` int(11) NOT NULL,
  `tgl_persalinan` date NOT NULL,
  `umur_kehamilan` int(11) NOT NULL,
  `penolong_persalinan` varchar(50) NOT NULL,
  `cara_persalinan` varchar(50) NOT NULL,
  `keadaan_ibu` varchar(50) NOT NULL,
  `kondisi_lahir` varchar(50) NOT NULL,
  `asuhan_lahir` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `stok_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`) VALUES
(1, 'Paracetamol', 20),
(2, 'Amoxicilin', 5),
(3, 'Tranaflu', 2),
(4, 'Puyer', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_istri` varchar(50) NOT NULL,
  `nik_istri` varchar(16) NOT NULL,
  `pendidikan_istri` varchar(50) NOT NULL,
  `golDarah_istri` varchar(2) NOT NULL,
  `pekerjaan_istri` varchar(50) NOT NULL,
  `noTelpon_istri` varchar(15) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `nik_suami` varchar(16) NOT NULL,
  `pendidikan_suami` varchar(50) NOT NULL,
  `golDarah_suami` varchar(2) NOT NULL,
  `pekerjaan_suami` varchar(50) NOT NULL,
  `noTelpon_suami` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_istri`, `nik_istri`, `pendidikan_istri`, `golDarah_istri`, `pekerjaan_istri`, `noTelpon_istri`, `nama_suami`, `nik_suami`, `pendidikan_suami`, `golDarah_suami`, `pekerjaan_suami`, `noTelpon_suami`) VALUES
(1, 'Putri Iriyana', '000000000000000', 'SMA', 'A', 'Ibu Rumah Tangga', '0811999000', 'Antung Angi Riansyah', '000000000000000', 'SMA', 'O', 'Karyawan Swasta', '08123123');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(50) NOT NULL,
  `pengguna_level` enum('admin','guest') NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_nama`, `pengguna_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Wahidun', 1),
(3, 'tes', '202cb962ac59075b964b07152d234b70', 'admin', 'Walid', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_anak`
--

CREATE TABLE `t_anak` (
  `id_anak` int(11) NOT NULL,
  `ortu_id` int(11) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `berat_lahir` float NOT NULL,
  `panjang_lahir` float NOT NULL,
  `lingkar_kepala` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan_kb`
--
ALTER TABLE `catatan_kb`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `catatan_kehamilan`
--
ALTER TABLE `catatan_kehamilan`
  ADD PRIMARY KEY (`id_kehamilan`);

--
-- Indexes for table `catatan_persalinan`
--
ALTER TABLE `catatan_persalinan`
  ADD PRIMARY KEY (`id_persalinan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `t_anak`
--
ALTER TABLE `t_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_kb`
--
ALTER TABLE `catatan_kb`
  MODIFY `id_kb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catatan_kehamilan`
--
ALTER TABLE `catatan_kehamilan`
  MODIFY `id_kehamilan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catatan_persalinan`
--
ALTER TABLE `catatan_persalinan`
  MODIFY `id_persalinan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_anak`
--
ALTER TABLE `t_anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
