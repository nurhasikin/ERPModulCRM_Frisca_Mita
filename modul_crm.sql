-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 12:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `status_kehadiran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_karyawan`, `tanggal_absensi`, `status_kehadiran`) VALUES
(1, 3, '2021-01-14', 'Hadir'),
(3, 4, '2021-01-15', 'Hadir'),
(5, 2215, '2021-01-26', 'Sakit'),
(6, 8, '2021-01-05', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` int(11) NOT NULL,
  `jumlah_uang` int(11) NOT NULL,
  `status_gaji` varchar(50) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `jumlah_uang`, `status_gaji`, `id_karyawan`) VALUES
(1, 13000000, 'Lunas', 2),
(3, 345678, 'afgh', 8);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama_invoice` varchar(255) NOT NULL,
  `tgl_invoice` varchar(255) NOT NULL,
  `jenis_pembayaran` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama_invoice`, `tgl_invoice`, `jenis_pembayaran`, `status`) VALUES
(1, 'a', '2021-01-13', 'Angsuran', 'a'),
(2, 'dhf', '2021-01-06', 'xdhf', 'xhf');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `no_hp`, `email`, `jabatan`) VALUES
(2, 'Nurhasikin', 'Jl. Paus', '08123456765', 'nurhasikin18si@mahasiswa.pcr.ac.id', 'Staff'),
(3, 'Intan Nuur Laily', 'Jl. Tanjung Datok', '082344355567', 'intan18si@mahasiswa.pcr.ac.id', 'sekretaris'),
(4, 'Egitya Thoiba', 'Jl. Nelayan', '081234657099', 'egitya18si@mahasiswa.pcr.ac.id', 'Staff'),
(5, 'Fajri Hidayat', 'Jl. Cipta Karya', '081234657000', 'fajri18si@mahasiswa.pcr.ac.id', 'Staff'),
(6, 'Frisca Martha Veronica', 'Jl. Sukajadi Ujung', '082345443567', 'frisca18si@mahasiswa.pcr.ac.id', 'Finance'),
(7, 'Nuraisyah Ayu Susmita', 'Jl. Tegal Sari', '08234456566', 'nuraisyah18si@mahasiswa.pcr.ac.id', 'Staff'),
(8, 'Gifar Ulwan', 'Jl. Putri Tujuh', '095233434447', 'gifar18si@mahasiswa.pcr.ac.id', 'Staff'),
(9, 'Nanda Tri Wahyudi', 'Jl. Palas', '089844536672', 'nanda18si@mahasiswa.pcr.ac.id', 'Sales'),
(2214, 'Refaldo Syafril', 'Jl. Melur', '08342245664', 'refaldo18si@mahasiswa.pcr.ac.id', 'S'),
(2215, 'ais', 'Jl. Bayam', '08123345677', 'ais@gmail.com', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `kinerjasales`
--

CREATE TABLE `kinerjasales` (
  `id` int(50) NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `status_kinerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kinerjasales`
--

INSERT INTO `kinerjasales` (`id`, `nama_sales`, `status_kinerja`) VALUES
(1, 'Super Junior', 'Sangat Baik'),
(2, 'Egitiya', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id` int(11) NOT NULL,
  `jenis_karyawan` varchar(50) NOT NULL,
  `lama_kontrak` varchar(50) NOT NULL,
  `tanggal_bekerja` date NOT NULL,
  `tanggal_pensiun` date NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id`, `jenis_karyawan`, `lama_kontrak`, `tanggal_bekerja`, `tanggal_pensiun`, `id_karyawan`) VALUES
(3, 'tidak tetap', '2 bulan', '2021-02-02', '2021-03-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_23_011042_pelanggan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `nama_sales` varchar(255) NOT NULL,
  `deskriptiom` varchar(255) NOT NULL,
  `tgl_order` varchar(255) NOT NULL,
  `diskon_invoice` varchar(255) NOT NULL,
  `jenis_pembayaran` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `nama_sales`, `deskriptiom`, `tgl_order`, `diskon_invoice`, `jenis_pembayaran`, `harga`) VALUES
(1, 'a', 'a', '2021-01-29', '10%', 'a', 'Rp.200000'),
(2, 'Cantik A', 'Cantik', '2020-12-12', '10', 'Tunai', '21000000');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlpn` double NOT NULL,
  `jejak_interaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segmentasi_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perilaku_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama_pelanggan`, `tgl_lahir`, `no_tlpn`, `jejak_interaksi`, `segmentasi_pelanggan`, `perilaku_pelanggan`, `created_at`, `updated_at`) VALUES
(1, 'Frisca Martha Veronica', '2000-05-08', 81298780011, 'Baik', 'Pemasaran', 'Baik', NULL, '2021-01-23 00:33:32'),
(2, 'Nuraisyah Ayu Susmita', '2000-08-05', 81298780018, 'Baik', 'Pembelian', 'Baik', NULL, '2021-01-23 00:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(15) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis_unit` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tgl_transaksi`, `jenis_unit`, `status`, `nama_pelanggan`) VALUES
(1, '2020-12-23', 'Perumahan', 'Cicil', 'Lee Kwang Soo'),
(2, '2002-10-25', 'Ruko', 'Lunas', 'Dhea Natasya');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `nama_promo` varchar(255) NOT NULL,
  `diskon_promo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `nama_promo`, `diskon_promo`) VALUES
(1, 'Penjualan Rumah Type A', '90%'),
(2, 'sgfbd', 'drhf');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `tanggal`, `tempat`, `id_karyawan`) VALUES
(1, '2021-01-28', 'hotel pangeran', 2),
(3, '2021-01-25', 'dhf', 2215);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Frisca Martha Veronica', 'frisca@gmail.com', '$2y$10$IQUfxMFAyAMa9.YQXLZc7uJ3M23gp3ARi/D2Stm7J6aPXO7PNeL2e', '0fbXW5dB4C34jKEOXKi7xCT4nbnQQ2zx54ewueXo1mmThkDZ3BwVnEHdyGoS', '2021-01-05 17:59:21', '2021-01-05 17:59:21'),
(2, 'Frisca Martha Veronica', 'frisca18si@mahasiswa.pcr.ac.id', '$2y$10$LkMbs21x5kDvbg2uBdqkl.RzvM4YCEigQ2.c7ZZ7GG/8P41AR.WgS', 'Tv4ka6YBH6o8dRrdakuwUrAilheE7fIE66oKQZfqkF9JGADP7X63b4s5uipZ', '2021-01-12 17:26:52', '2021-01-12 17:26:52'),
(3, 'aldoo', 'refaldo18si@mahasiswa.pcr.ac.id', '$2y$10$A1E/7TE/G3VO.AwFGoZ3wehRZy9RDg7eGdk9bZYCoo0sU.QfTd3Uy', 'vNnY8nMWPqPUfdwiZmgiWGuDPC6HQ8VxZNmgqIavt5Lsg507Z0WYUmC7yQXq', '2021-01-12 20:00:21', '2021-01-12 20:00:21'),
(4, 'EGITYA TOYIBA TERRRRRRRCATIKS', 'egitia18si@mahasiswa.pcr.ac.id', '$2y$10$GKgaAsHfT9Ckr/5qjSxFyu5c1IifbqTg.MK7M6pNzEyq6ckR4l45q', 'y7uLiZLdqF71gvi7TQkYWdSQ1aws1aU9AoeXFLMLUv0Ln3DD8HhHZ6DqzhPe', '2021-01-12 21:10:25', '2021-01-12 21:10:25'),
(5, 'egit', 'egiti@mahasiswa.pcr.ac.id', '$2y$10$gxO3EpA0r0S9wQpPKMKdFOk/dSKo6OQWgIma0mWNR.PwMBzMeYC46', 'kEgbV0NYGH7lN6xaGbU2C9RFdwkKE4kcBbnxDog1SkehURnTrE2qnmuQmje4', '2021-01-12 21:14:40', '2021-01-12 21:14:40'),
(6, 'aaa', 'aa@mahasiswa.pcr.ac.id', '$2y$10$ZXVbcE8wml7v8qKD5MgpZunXGEaMtB/xrhnqBb2PzNP.j6f4AfBue', 'jNVBbMVBImaiC5BXwPBZ5jNWcxHn61giKt52Tf1QfNt1PPL9IjP9MLfvSQZQ', '2021-01-12 22:51:12', '2021-01-12 22:51:12'),
(7, 'aaaaa', 'aaaaa@mahasiswa.pcr.ac.id', '$2y$10$5OumTJKNPKzeucJ092Rf9.FS2CHk6BzLXGOUEM7Enc4BDcGukCj62', 'RnepMaZ80t8cZgSl9LqZbi7BxfxBgHaq7LJwftDpMw8YED4mJwPShJXP3xhJ', '2021-01-12 22:55:35', '2021-01-12 22:55:35'),
(8, 'egitia TERCANTIKKKKE', 'egit@mahasiswa.pcr.ac.id', '$2y$10$yB5HES6Aqc3Mkj.32bzmzOtccVI1ABorT4sLM1gxM647dCh9u3o92', 'h5j5oFczuRDMwbCkR8KvGxeqUVuvhe9uLhxeABarWgcLKkI9ObLDoyY2FO4A', '2021-01-12 22:56:26', '2021-01-12 22:56:26'),
(9, 'aaaaaaaa', 'aai@mahasiswa.pcr.ac.id', '$2y$10$khEKGcYtxV2JQJNDuXKn.e/mLMbUCxTEBV.n20VA6EcJCvFgIt0bu', '4zxFk8kA2Bzexn36NrpnWmfU4tlmmH3cQEuV9aGbhfrYOqisWHAPS7Gfobhr', '2021-01-12 22:57:09', '2021-01-12 22:57:09'),
(10, 'egityaCantiker', 'egitiaai@mahasiswa.pcr.ac.id', '$2y$10$5/bc6K5QFCebFvMrsiY2N.NwB2APXxr0POSNTiz99mVwXXAgJwBQ2', 'hJORFNgXq5XnLPGulLTGPfctV3paruwOykDMmQkcG1xN7OGLavLppOln7Our', '2021-01-12 22:58:02', '2021-01-12 22:58:02'),
(11, 'aaaaaaaaa', 'refaldosi@mahasiswa.pcr.ac.id', '$2y$10$0ktppV9YSdQ41rpIDSJfQOaVBz2IJoxtgO4Agp8aS9TszMw/b44XC', NULL, '2021-01-19 22:57:14', '2021-01-19 22:57:14'),
(12, 'alalala', 'aa@gmail.com', '$2y$10$hKVmaPSQt7lSlhW516JJeeq4fyM1W1lVKcYwCpSD8amlHL2iDs3xy', NULL, '2021-01-22 06:47:51', '2021-01-22 06:47:51'),
(13, 'CRM', 'crm@gmail.com', '$2y$10$QBNussXlA8vDVa5x7lW.j.A6WX4V48.AKEMh89lsU6mvPrkD17TW.', 'zTLycYhZ6nt0JEa4LfAjTohvsUtiGx9dH7tw2z66Tvgcc8DilcDQJgKZWSfR', '2021-01-23 00:25:07', '2021-01-23 00:25:07'),
(14, 'Frisca M V', 'frisca12@gmail.com', '$2y$10$BgzrDkNEt.WFtPzB9sKvyuTXO/wLk76UZ8YSBi68ceD5cqEIpYEhC', 'eDE6hv7sPiN73MXUCRqW0f9Gb8LXPjJF9BS3CRLWbWI66SPkPZYVEaCXM4O1', '2021-01-23 01:38:34', '2021-01-23 01:38:34'),
(15, 'nurhasikin', 'nurhasikin18si@mahasiswa.pcr.ac.id', '$2y$10$Zq5kD8pVmffBF21Af4n.nOwgeyGzsGGVLEsWH5iMI8SWthgZLFBXW', 'M7C1tWL38xbo3YvhPMpfmvdeN5xDv1wdFdbqM6XlZZpSWjPIMfKWjHmD7hAe', '2021-01-26 03:06:14', '2021-01-26 03:06:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kinerjasales`
--
ALTER TABLE `kinerjasales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2219;

--
-- AUTO_INCREMENT for table `kinerjasales`
--
ALTER TABLE `kinerjasales`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`);

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`);

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`);

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
