-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 05:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `jenis` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nis` int(10) NOT NULL,
  `npu` int(20) NOT NULL,
  `paud` varchar(8) NOT NULL,
  `tk` varchar(8) NOT NULL,
  `skhun` int(16) NOT NULL,
  `ijazah` int(16) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `cita` varchar(30) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nik` int(16) NOT NULL,
  `tl` varchar(31) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `bk` varchar(30) NOT NULL,
  `jalan` varchar(31) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `dusun` varchar(31) NOT NULL,
  `desa` varchar(31) NOT NULL,
  `kecamatan` varchar(31) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `tinggal` varchar(25) NOT NULL,
  `transportasi` varchar(25) NOT NULL,
  `nohp` int(28) NOT NULL,
  `notelp` int(31) NOT NULL,
  `email` varchar(31) NOT NULL,
  `kps` varchar(8) NOT NULL,
  `nokps` int(16) DEFAULT NULL,
  `kwn` varchar(16) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `khusus_ayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `khusus_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`jenis`, `tgl_masuk`, `nis`, `npu`, `paud`, `tk`, `skhun`, `ijazah`, `hobi`, `cita`, `nama`, `jk`, `nisn`, `nik`, `tl`, `tgl_lahir`, `agama`, `bk`, `jalan`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kodepos`, `tinggal`, `transportasi`, `nohp`, `notelp`, `email`, `kps`, `nokps`, `kwn`, `namaayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `khusus_ayah`, `namaibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `khusus_ibu`) VALUES
('Siswa Baru', '2022-05-18', 28987982, 188179, 'Tidak', 'Ya', 2147483647, 2147483647, 'Kesenian', 'Seni/Lukis', 'Athallah Bariq Hidayat', 'Laki-laki', 800183981, 183719379, 'Surabaya', '2001-05-18', 'Islam', 'Tidak', 'Banyuwangi', 3, 3, 'Krajan', '', 'Muncar', 68472, 'Orang Tua', 'Jalan Kaki', 2147483647, 2147483647, 'athahdyt@gmail.com', 'Tidak', 0, 'Indonesia', 'Taufik Hidayat', '1974-04-24', 'SMA', 'Swasta', '3', 'Tidak', 'Ririn Wulandari', '1974-12-09', 'D3', 'PNS', '3', 'Tidak'),
('Siswa Baru', '2000-05-18', 28987982, 188179, 'Tidak', 'Ya', 2147483647, 2147483647, 'Kesenian', 'TNI/POLRI', 'Athallah Bariq Hidayat', 'Laki-laki', 800183981, 183719379, 'Surabaya', '2001-05-18', 'Islam', 'Tidak', 'bwi', 3, 3, 'Krajan', '', 'Muncar', 68472, 'Orang Tua', 'Jalan Kaki', 2147483647, 2147483647, 'athahdyt@gmail.com', 'Ya', 12389829, 'Indonesia', 'Taufik Hidayat', '1974-04-24', 'TDS', 'Wiraswasta', '3', 'Tidak', 'Ririn Wulandari', '1974-12-09', 'D3', 'PNS', '4', 'Tidak'),
('Siswa Baru', '2000-05-18', 28987982, 188179, 'Tidak', 'Ya', 2147483647, 2147483647, 'Kesenian', 'Seni/Lukis', 'Athallah Bariq Hidayat', 'Laki-laki', 800183981, 183719379, 'Surabaya', '2001-05-18', 'Islam', 'Tidak', 'Banyuwangi', 3, 3, 'Krajan', '', 'Muncar', 68472, 'Orang Tua', 'Jalan Kaki', 2147483647, 2147483647, 'athahdyt@gmail.com', 'Ya', 12389829, 'Indonesia', 'Taufik Hidayat', '1974-04-24', 'SMA', 'Wiraswasta', '3', 'Tidak', 'Ririn Wulandari', '1974-12-09', 'D3', 'PNS', '3', 'Tidak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
