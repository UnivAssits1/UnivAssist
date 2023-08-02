-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 10:30 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kategori` varchar(45) NOT NULL,
  `ukuran_kamar` varchar(45) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `memori` varchar(45) DEFAULT NULL,
  `processor` varchar(45) DEFAULT NULL,
  `ISBN` varchar(45) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tahun` varchar(45) DEFAULT NULL,
  `pengarang` varchar(45) DEFAULT NULL,
  `halaman` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penyedia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama`, `kategori`, `ukuran_kamar`, `jumlah`, `harga`, `gambar`, `ram`, `memori`, `processor`, `ISBN`, `bahasa`, `tahun`, `pengarang`, `halaman`, `created_at`, `updated_at`, `penyedia_id`) VALUES
(13, 'Kost Reguler', 'kost', '3 x 3 M', 5, 500000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 'Acer Nitro 5', 'laptop', NULL, 2, 700000, NULL, '16', '500 GB', 'ryzen 5', NULL, NULL, '2021', NULL, NULL, NULL, NULL, 2),
(15, 'Pemrograman Web dengan PHP', 'buku', NULL, 1, 40000, NULL, NULL, NULL, NULL, '576665432211', 'Indonesia', '2003', 'Robby Tan', '500', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `user_NIK` varchar(45) NOT NULL,
  `item_id` int(11) NOT NULL,
  `lama_sewa` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_NIK` varchar(45) NOT NULL,
  `waktu` datetime NOT NULL,
  `metode` varchar(45) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penyedia`
--

CREATE TABLE `penyedia` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penyedia`
--

INSERT INTO `penyedia` (`id`, `nama`, `telepon`, `gambar`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Bu Haji', '054537372', NULL, NULL, NULL, NULL),
(2, 'Sewa Laptop Murah', '0353525', NULL, 'Jl. Bakjer 5', NULL, NULL),
(3, 'Buku Kooleah', '062356662', NULL, 'Jl. Pegangsaan no.10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NIK` varchar(45) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `negara` varchar(45) NOT NULL,
  `provinsi` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `telepon` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_ktm` varchar(255) DEFAULT NULL,
  `NRP` varchar(45) DEFAULT NULL,
  `Universitas` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NIK`, `role`, `password`, `nama`, `alamat`, `negara`, `provinsi`, `kota`, `telepon`, `email`, `foto`, `foto_ktp`, `foto_ktm`, `NRP`, `Universitas`, `created_at`, `updated_at`) VALUES
('8346202839', 'user', '$2y$10$3fMYWcaiTiwV8FJhSU7Ai.RQH84EmEbC0yKQ5cuBudzDdEghgpywK', 'dimas', 'Jl. Geger Kalong no.55', 'Indonesia', 'Jawa Barat', 'Bandung', '0895999972', 'dimz@gmail.com', NULL, NULL, NULL, '2172001', 'Universitas Kristen Maranatha', NULL, NULL),
('8346202850', 'admin', '$2y$10$3fMYWcaiTiwV8FJhSU7Ai.RQH84EmEbC0yKQ5cuBudzDdEghgpywK', 'admin1', 'Jl.A', 'Indonesia', 'Jawa Barat', 'Bandung', '0895999973', 'admin1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('917726261261', 'user', '$2y$10$6Ek23aP0X7f/IKqMCMXiC.fTzkG3R5H4EWUzsG43Pk3zpa/5Wq9dy', 'Yehezkiel David', 'Jl. Cimahi no.22', 'Indonesia', 'Jawa Barat', 'Bandung', '08625214', '2172003@maranatha.ac.id', NULL, NULL, NULL, '217003', 'UNiversitas Kristen Maranatha', '2023-08-02 01:16:06', '2023-08-02 01:16:06'),
('aa', 'user', '$2y$10$q9oZngsyvySjsZTxBbPgTOjEn4ShPZACitXKQ6Wwrul0Y5gjJ4qnO', 'aaa', 'aa', 'aa', 'aa', 'aa', 'aa', '2172003@maranatha.ac.id', NULL, NULL, NULL, 'aa', 'aa', '2023-08-02 00:00:09', '2023-08-02 00:00:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`,`penyedia_id`),
  ADD KEY `fk_item_penyedia1_idx` (`penyedia_id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`user_NIK`,`item_id`),
  ADD KEY `fk_user_has_item_item1_idx` (`item_id`),
  ADD KEY `fk_user_has_item_user1_idx` (`user_NIK`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`,`user_NIK`),
  ADD KEY `fk_order_user1_idx` (`user_NIK`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`item_id`),
  ADD KEY `fk_order_has_item_item1_idx` (`item_id`),
  ADD KEY `fk_order_has_item_order1_idx` (`order_id`);

--
-- Indexes for table `penyedia`
--
ALTER TABLE `penyedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penyedia`
--
ALTER TABLE `penyedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_penyedia1` FOREIGN KEY (`penyedia_id`) REFERENCES `penyedia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_user_has_item_item1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_item_user1` FOREIGN KEY (`user_NIK`) REFERENCES `users` (`NIK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_user1` FOREIGN KEY (`user_NIK`) REFERENCES `users` (`NIK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_order_has_item_item1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_has_item_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
