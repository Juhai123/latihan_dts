-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 12:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jk`, `alamat`) VALUES
(368, 'Maya', 'Perempuan', 'Desa sei piitung'),
(900, 'Doni', 'Laki-Laki', 'Desa dimana'),
(1234, 'Helman', 'Laki-Laki', 'Desa sei seluang pasar'),
(9090, 'Amin', 'Laki-Laki', 'Desa dimana');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `kategori`, `jumlah`) VALUES
(45, 'Sindrom', 'IPA', 7),
(234, 'Fiksi', 'Bahasa Indonesia', 6),
(879, 'Dunia', 'IPA', 9),
(3434, 'Clasic', 'Bahasa Indonesia', 7),
(9087, 'Sastra', 'Bahasa Indonesia', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `telat` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `denda_buku` int(100) NOT NULL,
  `denda_telat` int(100) NOT NULL,
  `total_denda` int(10) NOT NULL,
  `status_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `telat`, `keterangan`, `denda_buku`, `denda_telat`, `total_denda`, `status_buku`) VALUES
(3461, 9090, 9087, '2021-12-31', '2021-12-31', '1381', 'Tidak Ada', 0, 1381000, 1381000, 'Kembali'),
(3462, 1234, 3434, '2021-12-31', '2021-12-31', '1381', 'Rusak', 30000, 1381000, 1411000, 'Kembali'),
(3464, 900, 879, '2021-12-31', '2021-12-31', '1381', 'Tidak Ada', 0, 1381000, 1381000, 'Pinjam'),
(3465, 900, 3434, '2021-12-31', '2021-12-31', '1381', 'Tidak Ada', 0, 1381000, 1381000, 'Kembali'),
(3468, 900, 234, '2021-12-31', '2021-12-31', '1381', '', 0, 1381000, 1381000, 'Pinjam'),
(3470, 368, 45, '2022-01-01', '2022-01-01', '1382', 'Tidak Ada', 0, 1382000, 1382000, 'Kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9091;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9088;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3471;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
