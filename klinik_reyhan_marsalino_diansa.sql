-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 11:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_reyhan_marsalino_diansa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `ID_Dokter` char(11) NOT NULL,
  `ID_Departemen` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Tgl_Lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`ID_Dokter`, `ID_Departemen`, `Nama`, `Alamat`, `Tgl_Lahir`) VALUES
('24614f36689', 'UMUM', 'Dr. Bambang', 'Malang', '2022-11-18'),
('7ec3a0fbc44', 'GIGI', 'Lutfi', 'Malang', '2022-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `No_Rm` char(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('laki-laki','perempuan') NOT NULL,
  `Pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`No_Rm`, `Nama`, `Alamat`, `Tgl_Lahir`, `Jenis_Kelamin`, `Pekerjaan`) VALUES
('3ab38a56124', 'Reyhan MD', 'Malang', '2022-11-17', 'laki-laki', 'siswa'),
('7194dfad348', 'Ahmad ', 'Kediri', '2022-11-10', 'laki-laki', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tindakan`
--

CREATE TABLE `tabel_tindakan` (
  `No_reg` char(11) NOT NULL,
  `ID_Dokter` char(11) NOT NULL,
  `Jam` time NOT NULL,
  `Diagnosa` text NOT NULL,
  `Tindakan_Kedokteran` text NOT NULL,
  `No_Ruang` int(11) NOT NULL,
  `Keterangan` text NOT NULL,
  `No_Rm` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_tindakan`
--

INSERT INTO `tabel_tindakan` (`No_reg`, `ID_Dokter`, `Jam`, `Diagnosa`, `Tindakan_Kedokteran`, `No_Ruang`, `Keterangan`, `No_Rm`) VALUES
('61a237f7b2b', '24614f36689', '11:30:04', 'muntaber', 'infus', 1231, 'rawat inap', '3ab38a56124'),
('9ec28d0f8cb', '24614f36689', '11:12:23', 'patah tulang', 'bidai', 125, 'rawat jalan', '3ab38a56124'),
('e8b12a86723', '7ec3a0fbc44', '11:14:05', 'sakit gigi', 'cabut gigi', 122, 'rawat jalan', '7194dfad348');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`ID_Dokter`),
  ADD KEY `ID_Departemen` (`ID_Departemen`);

--
-- Indexes for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`No_Rm`);

--
-- Indexes for table `tabel_tindakan`
--
ALTER TABLE `tabel_tindakan`
  ADD PRIMARY KEY (`No_reg`),
  ADD KEY `ID_Dokter` (`ID_Dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
