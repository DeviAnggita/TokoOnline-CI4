-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 12:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `gambar`, `created_by`, `created_date`, `updated_by`, `updated_date`, `jenis`) VALUES
(1, 'ipad', 200000, 1, '1637569126_94fc105fe651b1d4e857.png', 1, '2021-11-22 02:18:46', 1, '2021-11-22 02:40:31', 'Elektronik'),
(3, 'Flashdish', 5000000, 2, '1637652126_05e8ff86863bb3f4d655.jpg', 1, '2021-11-23 01:05:35', 1, '2021-11-23 01:22:06', 'Elektronik'),
(4, 'Kipas Angin', 300000, 4, '1637651163_45b9fd28c98feaa128bd.jpeg', 1, '2021-11-23 01:06:03', 1, '2021-12-21 04:55:10', 'Elektronik'),
(5, 'Headset', 500000, 13, '1639629481_829343c10ff71c253a42.png', 1, '2021-11-23 01:06:23', 1, '2021-12-15 22:38:01', 'Elektronik'),
(6, 'Play Statiomn 5', 10000000, 10, '1639917874_1d811442af1b9cba5460.jpg', 1, '2021-12-19 06:44:34', 1, '2021-12-19 06:44:59', 'Elektronik'),
(7, 'Headset XR', 1500000, 20, '1640083887_1d21a5536e581edae530.png', 1, '2021-12-21 04:51:27', NULL, NULL, 'Elektronik'),
(8, 'Ipad X5', 5000000, 10, '1640084181_8887956a4fae87e29f26.png', 1, '2021-12-21 04:56:21', NULL, NULL, 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenisbarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenisbarang`) VALUES
(7, 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_barang` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '20211121224900', 'App\\Database\\Migrations\\User', 'default', 'App', 1637510550, 1),
(2, '20211121225500', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1637510550, 1),
(3, '20211121225600', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1637510550, 1),
(4, '20211121225800', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1637510550, 1),
(5, '20211121225900', 'App\\Database\\Migrations\\TransaksiAlterFk', 'default', 'App', 1637510550, 1),
(6, '20211121230000', 'App\\Database\\Migrations\\KomentarAlterFk', 'default', 'App', 1637510550, 1),
(7, '20211121230100', 'App\\Database\\Migrations\\TransaksiAlterAlamat', 'default', 'App', 1637510550, 1),
(8, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1637631824, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_barang` int(11) UNSIGNED NOT NULL,
  `id_pembeli` int(11) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_barang`, `id_pembeli`, `jumlah`, `total_harga`, `created_by`, `created_date`, `updated_by`, `updated_date`, `alamat`, `ongkir`, `status`) VALUES
(1, 1, 12, 2, 420000, 12, '2021-11-23 07:13:37', NULL, NULL, 'Sragen', 20000, 0),
(2, 3, 12, 4, 20020000, 12, '2021-11-23 07:33:03', NULL, NULL, 'Sragen', 20000, 0),
(3, 3, 12, 1, 5020000, 12, '2021-11-23 07:34:24', NULL, NULL, 'Sragen', 20000, 0),
(4, 3, 12, 3, 15020000, 12, '2021-11-23 07:40:21', NULL, NULL, 'Sragen', 20000, 0),
(5, 4, 12, 2, 620000, 12, '2021-11-23 07:45:05', NULL, NULL, 'Jakarta', 20000, 0),
(6, 5, 12, 1, 520000, 12, '2021-11-23 19:32:28', NULL, NULL, 'Surakarta', 20000, 0),
(7, 4, 12, 1, 320000, 12, '2021-11-23 19:33:21', NULL, NULL, 'Jakarta', 20000, 0),
(8, 1, 12, 2, 420000, 12, '2021-11-23 19:59:05', NULL, NULL, 'Bandung', 20000, 0),
(9, 5, 12, 2, 1020000, 12, '2021-11-23 20:13:17', NULL, NULL, 'Bandung', 20000, 0),
(10, 5, 12, 1, 520000, 12, '2021-11-23 20:19:00', NULL, NULL, 'Bali', 20000, 0),
(11, 5, 1, 3, 1520000, 1, '2021-11-23 20:34:11', NULL, NULL, 'Bali', 20000, 0),
(12, 4, 1, 4, 1220000, 1, '2021-12-15 22:35:02', NULL, NULL, 'Sragen', 20000, 0),
(13, 6, 12, 10, 100020000, 12, '2021-12-19 06:46:10', NULL, NULL, 'Bandung', 20000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `avatar`, `role`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'DeviAnggita', 'a944dea5db1c9694cf2693aa90fa2b16', '619b0987cd8014.57066968', NULL, 0, 0, '2021-11-21 21:07:51', NULL, NULL),
(2, 'DeviAA', 'e63832be2511e868d516aae92ec04c2f', '619b0a4125d327.81347224', NULL, 1, 0, '2021-11-21 21:10:57', NULL, NULL),
(3, 'Anggita', 'bab3849b6b8adf3ed4832fd3f9844604', '619b0b2d089e80.94342986', NULL, 1, 0, '2021-11-21 21:14:53', NULL, NULL),
(4, 'anggita123', 'd5c87785eac4cbd5c5e55c24c621d009', '619b0b605648c9.82902071', NULL, 1, 0, '2021-11-21 21:15:44', NULL, NULL),
(5, 'DeviA', 'adc1b8f2d0054915d9fa443d95405f74', '619b0ba8a5bd68.88376668', NULL, 1, 0, '2021-11-21 21:16:56', NULL, NULL),
(6, 'DeviAA', '03b83f4ece09fa041be3a948a1d74a62', '619b14083c7158.02532620', NULL, 1, 0, '2021-11-21 21:52:40', NULL, NULL),
(7, 'DeviAnggitaAmbarwati', 'fb7c4de7cd13f7e202c742b8f2b16afd', '619ba3513d8289.12633807', NULL, 1, 0, '2021-11-22 08:04:01', NULL, NULL),
(11, 'Anggita123', 'd3603f6643f7d46d75ab4fc32fa5a083', '619c4e895e6978.53290540', NULL, 1, 0, '2021-11-22 20:14:33', NULL, NULL),
(12, 'DeviAnggita123', '5677987fdabcf48776d4b498434a622a', '619c4eb1b8edf5.71969861', NULL, 1, 0, '2021-11-22 20:15:13', NULL, NULL),
(515, 'DeviAnggitaA', '13c65ac9b3d8e0cc2eeab21b29bff048', '619d9a6259c304.76005152', NULL, 1, 0, '2021-11-23 19:50:26', NULL, NULL),
(516, 'DeviAnggita', '4f1a0f33cd0a4f7f9cb335a785b75d2c', '61bac042012393.73174009', NULL, 1, 0, '2021-12-15 22:27:46', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_id_user_foreign` (`id_user`),
  ADD KEY `komentar_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id_pembeli_foreign` (`id_pembeli`),
  ADD KEY `transaksi_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_id_pembeli_foreign` FOREIGN KEY (`id_pembeli`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
