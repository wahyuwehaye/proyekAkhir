-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 01:54 AM
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
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_kamar` int(10) NOT NULL,
  `dp` int(15) NOT NULL,
  `total` int(20) NOT NULL,
  `metode_bayar` varchar(25) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `restaurant` varchar(100) NOT NULL,
  `extra_bed` int(5) NOT NULL,
  `lain2` varchar(100) NOT NULL,
  `total` int(20) NOT NULL,
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
  `no_kamar` int(5) NOT NULL,
  `id_fasilitas` int(5) NOT NULL,
  `id_tipe_kamar` int(5) NOT NULL,
  `jumlah_kamar` int(5) NOT NULL,
  `id_booking` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Standard', 440000, 500000, 'butuh penjelasan ya?', 8),
(2, 'Deluxe', 510000, 550000, 'apa aja tersedia disini', 8),
(3, 'Superior', 540000, 560000, 'Kamar dengan luas 20 m2, termasuk dengan fasilitas AC, Air panas dan televisi.', 8),
(4, 'Suite', 500000, 600000, 'kamar hanya untuk berdua sajah', 8),
(5, 'Family', 600000, 800000, 'kamarnya luas banget dan pastinya bersih dan ngangenin', 8);

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
  ADD PRIMARY KEY (`no_kamar`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `tipe_kamar_fk` (`id_tipe_kamar`),
  ADD KEY `fasilitas_foreign` (`id_fasilitas`);

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
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT;
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
  MODIFY `no_kamar` int(5) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_tipe_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelanggan` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkin_out`
--
ALTER TABLE `checkin_out`
  ADD CONSTRAINT `checkin_out_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkin_out_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `pegawai` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_tipe_kamar`) REFERENCES `tipe_kamar` (`id_tipe_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_3` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

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
