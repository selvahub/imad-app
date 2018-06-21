-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 08:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'auwfar', 'f0a047143d1da15b630c73f0256d5db0', 'Achmad Chadil Auwfar', 'Koala.jpg'),
(2, 'ozil', 'f4e404c7f815fc68e7ce8e3c2e61e347', 'Mesut ', 'profil2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `payment_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `payment_amount`) VALUES
(3, 'Blitarg6', 5),
(17, 'Jakarta', 0),
(21, 'Surabaya', 0),
(22, 'Paris', 0),
(24, 'Swizz', 0),
(25, 'Blitarg6', 1),
(26, 'Blitarg6', 1),
(27, 'Blitarg6', 1),
(28, 'Blitarg6', 1),
(29, 'adf', 2),
(30, 'Blitarg6', 29),
(31, 'Blitarg6', 1),
(32, 'Blitarg6', 1),
(33, 'skafd', 0),
(34, 'Blitarg6', 122),
(35, 'Blitarg6', 124),
(36, 'Blitarg6', 45),
(37, 'Blitarg6', 45),
(38, 'Blitarg6', 221),
(39, 'Blitarg6', 321),
(40, 'kkarthik', 10),
(41, 'asd', 333),
(42, 'Blitarg6', 0),
(43, 'Shiva', 4),
(44, 'Blitarg6', 4),
(45, 'Blitarg6', 100),
(46, '', 20000),
(47, '', 20000),
(48, '', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) NOT NULL,
  `transaction_id` text,
  `payment_amount` text NOT NULL,
  `payment_mode` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  `datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `transaction_id`, `payment_amount`, `payment_mode`, `user_id`, `service_id`, `datetime`) VALUES
(62, 'R091455661', '20000', 'NetBanking', 2, 1, '25-05-2015'),
(63, 'T10008294', '100000', 'Online', 1, 1, '25-05-1994'),
(64, 'T10008294', '5000', 'Online', 2, 1, '25-05-1994'),
(65, 'T100082945', '5000', 'Cheque', 1, 1, 'June 10, 2018, 9:08 pm IST'),
(66, 'T10008294m', '5000', 'Online', 1, 2, 'June 10, 2018, 9:24 pm IST');

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `id` bigint(20) NOT NULL,
  `payment_amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenthistory`
--

INSERT INTO `paymenthistory` (`id`, `payment_amount`) VALUES
(1, 'ewewe');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` text NOT NULL,
  `paymentamount` text,
  `transaction_id` text,
  `paymentmode` text,
  `user_id` text,
  `service_id` text,
  `datetime` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `paymentamount`, `transaction_id`, `paymentmode`, `user_id`, `service_id`, `datetime`) VALUES
('10', 'Antony Febriansyah Hartono', '082199568540', '1', '2', '1', '1'),
('11', 'Hafizh Asrofil Al Banna', '087859615271', '1', '1', '1', '1'),
('12', 'Faiq Fajrullah', '085736333728', '1', '1', '2', '1'),
('3', 'Mustofa Halim', '081330493322', '1', '1', '3', '1'),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', '1', '1', '2', '1'),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', '3', '1', '2', '2'),
('7', 'Achmad Chadil Auwfar', '08984119934', '2', '1', '1', '1'),
('8', 'Rizal Ferdian', '087777284179', '1', '1', '3', '1'),
('9', 'Redika Angga Pratama', '083834657395', '1', '1', '3', '1'),
('2', 'Wawan Dwi Prasetyo', '085745966707', '4', '1', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'Quaterly'),
(3, 'Keuangan'),
(4, 'Produk'),
(5, 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_type`) VALUES
(1, 'GST Registration'),
(2, 'Income Tax filling');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`) VALUES
(1, 'Laal'),
(2, 'Raav'),
(3, 'Setty'),
(4, 'Singh'),
(5, 'Sharma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
