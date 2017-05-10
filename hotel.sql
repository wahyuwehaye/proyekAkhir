-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 07:45 AM
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
(4, '2017-05-10', 'ngubaid', 'Standard', '08131212121', 'kebumen', '2017-05-11', '2017-05-12', 2, 1, 0, 250000, 250000, 500000, 'Booking Transfer Ke Nomor', 'Check In', '', ' DP', 0),
(5, '2017-05-10', 'ngubaid', 'Family Triple', '08131212121', 'kebumen', '2017-05-18', '2017-05-20', 4, 2, 0, 400000, 1500000, 3200000, 'Booking Transfer Ke Nomor Rekening Mandiri', 'Booking', '', ' DP', 0),
(6, '2017-05-10', 'ngubaid', 'Family Triple', '08131212121', 'kebumen', '2017-05-25', '2017-05-27', 3, 2, 501, 400000, 1500000, 2400000, 'Transfer Ke Nomor Rekening Mandiri', 'Booking', '', ' DP', 0),
(7, '2017-05-10', 'ngubaid', 'Family Suite', '08131212121', 'kebumen', '2017-05-25', '2017-05-27', 3, 2, 601, 450000, 1500000, 2700000, 'Transfer Ke Nomor Rekening Mandiri', 'Booking', '', ' DP', 0),
(8, '2017-05-10', 'ngubaid', 'Standard', '08131212121', 'kebumen', '2017-05-24', '2017-05-26', 1, 2, 101, 250000, 250000, 500000, 'Transfer Ke Nomor Rekening Mandiri', 'Booking', '', ' DP', 0),
(9, '2017-05-10', 'ngubaid', 'Standard', '08131212121', 'kebumen', '2017-05-24', '2017-05-26', 1, 2, 101, 250000, 250000, 500000, 'Transfer Ke Nomor Rekening Mandiri', 'Booking', '', ' DP', 0),
(10, '2017-05-10', 'ngubaid', 'Standard', '08131212121', 'kebumen', '2017-05-24', '2017-05-26', 1, 2, 101, 250000, 250000, 500000, 'Transfer Ke Nomor Rekening Mandiri', 'Check In', '', ' DP', 0),
(11, '2017-05-10', 'ngubaid', 'Standard', '08131212121', 'kebumen', '2017-05-31', '2017-06-02', 2, 2, 102, 250000, 1500000, 1500000, 'Transfer Ke Nomor Rekening Mandiri', 'Check In', '', ' DP', 0),
(12, '2017-05-10', 'ngubaid', 'Standard', '08131212121', 'kebumen', '2017-05-04', '2017-05-06', 3, 2, 103, 250000, 1500000, 1500000, 'Transfer Ke Nomor Rekening Mandiri', 'Check Out', '', 'Lunas', 0),
(13, '2017-05-10', 'ajeng', 'Deluxe', '081312777381', 'bandung', '2017-05-11', '2017-05-13', 2, 2, 201, 249000, 500000, 996000, 'Transfer Ke Nomor Rekening Mandiri', 'Booking', '', 'DP', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buktibayar`
--

CREATE TABLE `buktibayar` (
  `id_bukti` int(5) NOT NULL,
  `bukti` varchar(250) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_transaksi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buktibayar`
--

INSERT INTO `buktibayar` (`id_bukti`, `bukti`, `tgl`, `id_transaksi`) VALUES
(1, 'sdsfsdfsd', '2017-05-07 17:02:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkin_out`
--

CREATE TABLE `checkin_out` (
  `id_check` int(5) NOT NULL,
  `tgl_check` date NOT NULL,
  `no_transaksi` int(10) NOT NULL,
  `total_malam` int(5) NOT NULL,
  `restaurant` varchar(100) NOT NULL,
  `extra_bed` int(5) NOT NULL,
  `lain2` varchar(100) NOT NULL,
  `subtotal` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `paid` int(20) NOT NULL,
  `total_due` int(20) NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_booking` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_tamu`
--

CREATE TABLE `data_tamu` (
  `id_tamu` int(5) NOT NULL,
  `tgl_input` date NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `alamat_tamu` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `tipe_kamar` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `harga_kamar` int(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `jumlah_kamar` int(10) NOT NULL,
  `flag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tamu`
--

INSERT INTO `data_tamu` (`id_tamu`, `tgl_input`, `nama_tamu`, `alamat_tamu`, `no_hp`, `tgl_masuk`, `tgl_keluar`, `tipe_kamar`, `fasilitas`, `harga_kamar`, `status`, `jumlah_kamar`, `flag`) VALUES
(2, '2017-04-26', 'sdsdsds3wew4', 'sdsdwrff', '22222222', '0000-00-00', '0000-00-00', 'eerere', '', 121212, 'zxzada', 0, 'true'),
(4, '2017-04-12', 'admin', 'bandung', '11111', '2017-04-12', '2017-04-14', 'Suite', '', 600000, 'belum lunas mba', 2, ''),
(5, '2017-04-11', 'admin', 'bandungas', '121212', '2017-04-12', '2017-04-14', 'Family', '', 800000, 'lunas', 3, ''),
(6, '2017-04-12', 'admin', 'bandung', '081312555467', '2017-04-26', '2017-04-26', 'Deluxe', '', 550000, 'asas', 3, ''),
(9, '2017-04-12', 'admin', 'bandung', '333', '2017-05-04', '2017-05-06', 'Deluxe', '', 550000, 'c', 3, ''),
(10, '2017-04-12', 'admin', 'bandung', '081312555467', '2017-04-27', '2017-04-28', 'Suite', '', 600000, 'Booking', 3, ''),
(11, '2017-04-17', 'admin', 'bandung', '081312555467', '2017-04-28', '2017-04-29', 'Deluxe', '', 550000, 'Booking', 3, ''),
(13, '2017-04-21', 'ajeng', 'bandung', '081312777381', '2017-04-26', '2017-04-27', 'Deluxe', '', 550000, 'Booking', 2, ''),
(14, '2017-04-21', 'Wahyu Saepuloh', 'bandung pas', '081312555467', '2017-04-25', '2017-04-27', 'Family', '', 800000, 'Lunas', 0, ''),
(15, '2017-04-21', 'Gilang Dirga', 'Banyumas', '08333847323', '2017-04-27', '2017-04-29', 'Family', '', 800000, 'Lunas', 5, ''),
(17, '2017-04-26', 'fsdfds', 'fdhfghgf', '5555555555', '2017-04-05', '2017-04-08', 'Family', '', 800000, 'Lunas', 0, ''),
(18, '2017-04-26', 'Wahyu Saepuloh', 'Banyumas', '081312555467', '2017-05-04', '2017-05-06', 'Family', '', 800000, 'Lunas', 0, ''),
(19, '2017-04-26', 'Grudu', 'bandung utara', '0181312983', '2017-05-04', '2017-05-06', 'Family', '', 800000, 'Lunas', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(5) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `harga_fasilitas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `harga_fasilitas`) VALUES
(1, 'Extra Bed', 100000),
(2, 'Extra Breakfast', 30000),
(3, 'TV', 50000),
(4, 'Laundry', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Nite Audit'),
(2, 'Resepsionis'),
(3, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(5) NOT NULL,
  `nomor_kamar` int(5) NOT NULL,
  `id_fasilitas` int(5) NOT NULL,
  `id_tipe_kamar` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_booking` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nomor_kamar`, `id_fasilitas`, `id_tipe_kamar`, `status`, `id_booking`) VALUES
(27, 101, 0, 1, 'Booking', 0),
(28, 102, 0, 1, 'Booking', 0),
(29, 103, 0, 1, 'Booking', 0),
(30, 104, 0, 1, 'kosong', 0),
(31, 105, 0, 1, 'kosong', 0),
(32, 106, 0, 1, 'kosong', 0),
(33, 107, 0, 1, 'kosong', 0),
(34, 201, 0, 2, 'Booking', 0),
(35, 202, 0, 2, 'kosong', 0),
(36, 203, 0, 2, 'kosong', 0),
(37, 204, 0, 2, 'kosong', 0),
(38, 205, 0, 2, 'kosong', 0),
(39, 206, 0, 2, 'kosong', 0),
(40, 207, 0, 2, 'kosong', 0),
(41, 208, 0, 2, 'kosong', 0),
(42, 209, 0, 2, 'kosong', 0),
(43, 210, 0, 2, 'kosong', 0),
(44, 211, 0, 2, 'kosong', 0),
(45, 212, 0, 2, 'kosong', 0),
(46, 213, 0, 2, 'kosong', 0),
(47, 214, 0, 2, 'kosong', 0),
(48, 215, 0, 2, 'kosong', 0),
(49, 216, 0, 2, 'kosong', 0),
(50, 217, 0, 2, 'kosong', 0),
(51, 218, 0, 2, 'kosong', 0),
(52, 219, 0, 2, 'kosong', 0),
(53, 220, 0, 2, 'kosong', 0),
(54, 221, 0, 2, 'kosong', 0),
(55, 222, 0, 2, 'kosong', 0),
(56, 223, 0, 2, 'kosong', 0),
(57, 224, 0, 2, 'kosong', 0),
(58, 225, 0, 2, 'kosong', 0),
(59, 226, 0, 2, 'kosong', 0),
(60, 227, 0, 2, 'kosong', 0),
(61, 228, 0, 2, 'kosong', 0),
(62, 229, 0, 2, 'kosong', 0),
(63, 230, 0, 2, 'kosong', 0),
(64, 231, 0, 2, 'kosong', 0),
(65, 301, 0, 3, 'kosong', 0),
(66, 302, 0, 3, 'kosong', 0),
(67, 303, 0, 3, 'kosong', 0),
(68, 304, 0, 3, 'kosong', 0),
(69, 401, 0, 4, 'kosong', 0),
(70, 402, 0, 4, 'kosong', 0),
(71, 501, 0, 5, 'kosong', 0),
(72, 502, 0, 5, 'kosong', 0),
(73, 503, 0, 5, 'kosong', 0),
(74, 601, 0, 6, '', 0),
(75, 602, 0, 6, 'kosong', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lapkamar`
--

CREATE TABLE `lapkamar` (
  `id` int(10) NOT NULL,
  `kamar` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapkamar`
--

INSERT INTO `lapkamar` (`id`, `kamar`, `jumlah`, `tgl`) VALUES
(1, 'standar', 5, '2017-05-07'),
(2, 'deluxe', 10, '2017-05-07'),
(3, 'suite', 15, '2017-05-07'),
(4, 'family', 12, '2017-05-07'),
(5, 'superior', 4, '2017-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_user` int(5) NOT NULL,
  `nik` int(15) NOT NULL,
  `id_jabatan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_user`, `nik`, `id_jabatan`) VALUES
(2, 2011291233, 1),
(3, 2011291234, 3),
(4, 2011291235, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_user` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_user`, `alamat`, `phone`) VALUES
(1, 'bandung', '081312555467'),
(5, 'bandung', '081312777381'),
(6, 'cihampelas', '08131827364'),
(7, 'kebumen', '08131212121');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe_kamar` int(5) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `harga_kamar_weekday` int(10) NOT NULL,
  `harga_kamar_weekend` int(11) NOT NULL,
  `penjelasan` varchar(500) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe_kamar`, `nama_kamar`, `harga_kamar_weekday`, `harga_kamar_weekend`, `penjelasan`, `jumlah`) VALUES
(1, 'Standard', 250000, 440000, 'terdapat 2 jenis spring bed yaitu King dan twin. Jenis spring bed King  yaitu spring bed yang berukuran 1,8m x 2m. Jenis Spring Bed Twin yaitu spring bed  berukuran 0,9m x 2m.', 7),
(2, 'Deluxe', 249000, 510000, 'terdapat 2 jenis spring bed yaitu King dan twin. Jenis spring bed King  yaitu spring bed yang berukuran 1,8m x 2m. Jenis Spring Bed Twin yaitu spring bed  berukuran 0,9m x 2m.', 31),
(3, 'Superior', 330000, 540000, 'terdapat 2 jenis spring bed yaitu King dan twin. Jenis spring bed King  yaitu spring bed yang berukuran 1,8m x 2m. Jenis Spring Bed Twin yaitu spring bed  berukuran 0,9m x 2m.', 4),
(4, 'Suite', 350000, 580000, 'terdapat 2 jenis spring bed yaitu King dan twin. Jenis spring bed King  yaitu spring bed yang berukuran 1,8m x 2m. Jenis Spring Bed Twin yaitu spring bed  berukuran 0,9m x 2m.', 2),
(5, 'Family Triple', 400000, 640000, 'terdapat 2 jenis spring bed yaitu King dan twin. Jenis spring bed King  yaitu spring bed yang berukuran 1,8m x 2m. Jenis Spring Bed Twin yaitu spring bed  berukuran 0,9m x 2m.', 3),
(6, 'Family Suite', 450000, 710000, 'terdapat 2 jenis spring bed yaitu King dan twin. Jenis spring bed King  yaitu spring bed yang berukuran 1,8m x 2m. Jenis Spring Bed Twin yaitu spring bed  berukuran 0,9m x 2m.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jenis_kelamin`, `username`, `password`) VALUES
(1, 'admin', 'laki-laki', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'niteaudit', 'perempuan', 'niteaudit', '38809ada4b25fff421c9b886af19d2a7'),
(3, 'keuangan', 'perempuan', 'keuangan', 'a4151d4b2856ec63368a7c784b1f0a6e'),
(4, 'resepsionis', 'perempuan', 'resepsionis', '3aeff485f68b360d076de3d73f9247ad'),
(5, 'ajeng', 'ajeng', 'ajeng', '43317d3fd0d3344a7152250b9fd0dc2f'),
(6, 'gugun', 'gugun', 'gugun', '8705817beca124687368eefdfe615019'),
(7, 'ngubaid', 'ubed', 'ubed', '6212d5318f5fdf0445677251356d3296');

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
-- Indexes for table `buktibayar`
--
ALTER TABLE `buktibayar`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `checkin_out`
--
ALTER TABLE `checkin_out`
  ADD PRIMARY KEY (`id_check`),
  ADD KEY `booking` (`id_booking`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `data_tamu`
--
ALTER TABLE `data_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `tipe_kamar_fk` (`id_tipe_kamar`),
  ADD KEY `fasilitas_foreign` (`id_fasilitas`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `lapkamar`
--
ALTER TABLE `lapkamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `buktibayar`
--
ALTER TABLE `buktibayar`
  MODIFY `id_bukti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `checkin_out`
--
ALTER TABLE `checkin_out`
  MODIFY `id_check` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_tamu`
--
ALTER TABLE `data_tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `lapkamar`
--
ALTER TABLE `lapkamar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_tipe_kamar`) REFERENCES `tipe_kamar` (`id_tipe_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
