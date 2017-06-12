-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 10:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(5) NOT NULL,
  `tgl_input` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe_kamar` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_kamar` int(10) NOT NULL,
  `jumlah_malam` int(5) NOT NULL,
  `nomor_kamar` int(5) NOT NULL,
  `harga` int(15) NOT NULL,
  `dp` int(15) NOT NULL,
  `total` int(20) NOT NULL,
  `metode_bayar` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_kartu` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `tgl_input`, `nama`, `tipe_kamar`, `no_hp`, `alamat`, `tgl_masuk`, `tgl_keluar`, `jumlah_kamar`, `jumlah_malam`, `nomor_kamar`, `harga`, `dp`, `total`, `metode_bayar`, `status`, `no_kartu`, `ket`, `id_user`) VALUES
(2, '2017-06-07', 'ngubaid', 'Deluxe', '08131212121', 'kebumen', '2017-06-15', '0000-00-00', 1, 1, 201, 249000, 120000, 249000, 'Transfer Ke Nomor Rekening BRI', 'Check Out', '', 'Lunas', 0),
(3, '2017-06-07', 'Wahyu Saepuloh', 'Family Suite', '081312555467', 'bandung', '2017-06-11', '0000-00-00', 1, 1, 601, 710000, 1000, 710000, 'Debit', 'Check Out', '343432', 'Lunas', 0),
(4, '2017-06-07', 'ngubaid', 'Family Suite', '08131212121', 'kebumen', '2017-06-29', '2017-06-30', 1, 1, 602, 450000, 120000, 450000, 'Transfer Ke Nomor Rekening BNI', 'Check In', '', 'DP', 0),
(5, '2017-06-07', 'drupadi', 'Deluxe', '1', 'bandung', '2017-06-27', '2017-06-29', 1, 2, 201, 249000, 250000, 498000, 'Transfer Ke Nomor Rekening BRI', 'Booking', '', 'DP', 0),
(6, '2017-06-07', 'drupadi', 'Family Suite', '1', 'bandung', '2017-06-27', '2017-06-28', 2, 1, 601, 450000, 120000, 900000, 'Transfer Ke Nomor Rekening BNI', 'Booking', '', 'DP', 0),
(7, '2017-06-11', 'admin', 'Deluxe', '081312555467', 'bandung', '2017-06-21', '2017-06-23', 2, 2, 202, 249000, 498000, 996000, 'Transfer Ke Nomor Rekening BCA', 'Booking', '', 'DP', 0),
(8, '2017-06-11', 'drupadi', 'Deluxe', '1', 'bandung', '2017-06-19', '2017-06-21', 1, 2, 203, 249000, 498000, 498000, 'Transfer Ke Nomor Rekening BRI', 'Booking', '', 'Lunas', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
