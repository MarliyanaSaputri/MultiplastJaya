-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 08:03 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiplast`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL,
  `kd_selector` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `level`, `kd_selector`) VALUES
('mar', '032798', '1', '032798'),
('admin', 'admin', 'admin', '99756'),
('user', 'user', 'user', '-');

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `kd_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `berat(gr)` int(5) NOT NULL,
  `stok_qty` varchar(20) NOT NULL,
  `diameter` varchar(15) NOT NULL,
  `panjang` varchar(15) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`kd_barang`, `nama_barang`, `berat(gr)`, `stok_qty`, `diameter`, `panjang`, `harga`) VALUES
('P0002', 'FOUR POINT BODY L', 0, '', '', '', 30),
('P0003', 'shinzui facial wash', 9, '9', '9', '9', 90),
('P0004', 'JF ANTI ACNE ', 2, '90000', '19', '9', 44),
('P0005', 'JF ANTI ACNE CARE ', 8, '100', '10', '6', 10);

-- --------------------------------------------------------

--
-- Table structure for table `master_custumer`
--

CREATE TABLE `master_custumer` (
  `kd_custumer` varchar(10) NOT NULL,
  `nama_custumer` varchar(20) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `kota_kantor` varchar(30) NOT NULL,
  `kota_pengirim` varchar(30) NOT NULL,
  `telp_kantor` varchar(30) NOT NULL,
  `telp_pengirim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_custumer`
--

INSERT INTO `master_custumer` (`kd_custumer`, `nama_custumer`, `alamat_kantor`, `alamat_pengiriman`, `kota_kantor`, `kota_pengirim`, `telp_kantor`, `telp_pengirim`) VALUES
('C0002', 'PT.REMBAKA', 'SURABAYA', 'SURABAYA', 'SURABAYA', 'SURABAYA', '031888', '0318889'),
('CS002', 'Budi jaya', 'Surabaya', 'surabaya', 'surabaya', 'surabaya', '09788', '98896'),
('CS009', 'SDM', 'JL RAYA RUNGKUT INDUSTRI', 'JL RAYA RUNGKUT INDUSTRI', 'SURABAYA', 'SURABAYA', '097888', '08292'),
('L0002', '1', '1', '1', '1', '1', '1', '1'),
('P0003', 'PT.BINA KARYA PRIMA', 'SURABAYA', 'SURABAYA', 'SURABAYA', 'SURABAYA', '0318998', '031888'),
('P0004', 'PT.BINA BANGSA', 'JAKARTA PUSAT', 'JAKARTA', 'JAKARTA', 'JAKARTA', '03189000', '03188990');

-- --------------------------------------------------------

--
-- Table structure for table `master_karyawan`
--

CREATE TABLE `master_karyawan` (
  `nik` int(15) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `bagian` varchar(10) NOT NULL,
  `kd_selector` int(11) NOT NULL,
  `jabatan` varchar(11) NOT NULL,
  `gaji_perjam` int(11) NOT NULL,
  `gaji_borongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_karyawan`
--

INSERT INTO `master_karyawan` (`nik`, `nama_karyawan`, `bagian`, `kd_selector`, `jabatan`, `gaji_perjam`, `gaji_borongan`) VALUES
(20180418, 'AHMAD SYARIFUDDIN', 'QC ', 0, '0', 0, 0),
(1998032701, 'marliyana saputriii', 'selector', 32798, 'selector', 12000, 0),
(2147483647, 'linaa', 'cappinga', 0, '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_selector`
--

CREATE TABLE `master_selector` (
  `kd_selector` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nik` int(11) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `kd_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kd_custumer` varchar(30) NOT NULL,
  `hasil_jadi` varchar(15) NOT NULL,
  `reject` int(11) NOT NULL,
  `jenis_trx` varchar(4) DEFAULT 'br',
  `jumlah_jam` int(10) DEFAULT '2',
  `harga` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `qty` int(10) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_selector`
--

INSERT INTO `master_selector` (`kd_selector`, `tanggal`, `nik`, `nama_karyawan`, `kd_barang`, `nama_barang`, `kd_custumer`, `hasil_jadi`, `reject`, `jenis_trx`, `jumlah_jam`, `harga`, `total`, `qty`, `keterangan`) VALUES
('0', '2018-08-09', 1998032701, 'marliyana saputri', 'P0003', 'GRAND INA S.Gm', 'BUDI JAYA ', '780', 1, 'hr', 1, 90, 70200, NULL, NULL),
('9999', '2018-08-09', 1998032701, 'marliyana saputri', 'P0003', 'FOUR POINT BODY L', 'BUDI JAYA ', '780', 1, 'hr', 1, 90, 70200, NULL, NULL),
('P0005', '0000-00-00', 1998032701, 'marliyana saputri', 'P0001', 'GRAND INA S.Gm', 'BUDI JAYA ', '15000', 1, 'br', 2, 20, 300000, NULL, NULL),
('SE000001', '2018-08-09', 1998032701, 'marliyana saputri', 'P0003', 'FOUR POINT BODY L', 'BUDI JAYA ', '780', 1, 'hr', 1, 90, 70200, NULL, NULL),
('SE0001', '2018-08-16', 1998032704, 'Agustinus', 'P0002', 'FOUR POINT BODY L', 'BUDI JAYA ', '15000', 2, 'br', 1, 30, 450000, NULL, NULL),
('SE001000', '2018-08-09', 1998032701, 'marliyana saputri', 'P0003', 'FOUR POINT BODY L', 'BUDI JAYA ', '780', 1, 'hr', 1, 90, 70200, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `kd_harga` int(20) NOT NULL,
  `kd_barang` int(20) NOT NULL,
  `kd_custumer` int(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `master_custumer`
--
ALTER TABLE `master_custumer`
  ADD PRIMARY KEY (`kd_custumer`);

--
-- Indexes for table `master_karyawan`
--
ALTER TABLE `master_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `master_selector`
--
ALTER TABLE `master_selector`
  ADD PRIMARY KEY (`kd_selector`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
