-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `tahun_lulus` int(10) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_kelamin` char(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `kompetensi` varchar(111) NOT NULL,
  `alamat` text NOT NULL,
  `iscurrent` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `tahun_lulus`, `nis`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `email`, `telepon`, `agama`, `kompetensi`, `alamat`, `iscurrent`) VALUES
(1, 0, '00506', 'Yusuf ', '21321312', 'L', 'Yogyakarta', '2022-08-09', 'kimochi@gmail.com', '09098908098', '1', '', 'jl.prof yohanes', ''),
(2, 0, '00506', 'putra daffa', '21321312', 'L', 'Yogyakarta', '2022-06-21', 'kimochi@gmail.com', '09098908098', 'Islam', '', 'jl.prof yohanes', ''),
(4, 0, '', 'asdasd', '', 'L', '', '0000-00-00', '', '', 'Islam', '', '', ''),
(5, 0, '', 'asdasd', '', 'L', '', '0000-00-00', '', '', 'Islam', '', '', ''),
(6, 0, '', 'pu', '', 'L', '', '0000-00-00', '', '', '1', '', '', ''),
(8, 0, '', 'asdasdasd', '', 'L', '', '0000-00-00', '', '', '1', '', '', ''),
(10, 2019, '12321', 'Yusuf Daffa', '21321312', 'L', 'Yogyakarta', '2022-08-18', 'lipinus123@gmail.com', '012409147112', 'Islam', ' Rekayasa Perangkat Lunak', 'anjay', '');

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `angkatan_id` int(11) NOT NULL,
  `angkatan_tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`angkatan_id`, `angkatan_tahun`) VALUES
(1, '2019'),
(8, '2020'),
(9, '2021'),
(12, '2022');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id` int(11) NOT NULL,
  `alias` varchar(5) NOT NULL,
  `kompetensi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id`, `alias`, `kompetensi`) VALUES
(34, 'MM', 'Multi Media '),
(40, 'BC', 'Board Casting'),
(42, 'TKJ', 'Teknik Komputer jaringan'),
(43, 'RPL', 'Rekayasa Perangkat Lunak'),
(44, 'AK', 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `status_alumni`
--

CREATE TABLE `status_alumni` (
  `status_id` int(11) NOT NULL,
  `status_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tracer`
--

CREATE TABLE `tracer` (
  `id` int(11) NOT NULL,
  `tracer_nis` varchar(51) NOT NULL,
  `tracer_tahun` varchar(41) NOT NULL,
  `tracer_status` int(111) NOT NULL,
  `tracer_instansi` varchar(256) NOT NULL,
  `tracer_departemen` varchar(256) NOT NULL,
  `tracer_alamat` text NOT NULL,
  `tracer_mulai` date NOT NULL,
  `tracer_posisi` varchar(100) NOT NULL,
  `tracer_salari` varchar(128) NOT NULL,
  `tracer_linear` tinyint(1) NOT NULL,
  `tracer_iscurrent` char(1) NOT NULL,
  `tracer_modifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `data_created`) VALUES
(21, 'Yusuf Daffa', 'lipinus123@gmail.com', 'default.jpg', '$2y$10$/F4xzWRYWPMCmFovTUgkHe8oedoCvz7kM0dUIZ837VH/15MAdKy66', 1, 1, 1661422681),
(22, 'Daffa Putra', 'dpmansyur@gmail.com', 'default.jpg', '$2y$10$BOvFFHvtz.A.eF11mMmWF.5CRmAIbf4EZMw7DIY0D7YNRSgN7jEte', 2, 1, 1661422710);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(2, 'Sub'),
(3, 'Pengaturan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'c_daffa_admin', '', 1),
(2, 2, 'Home', 'c_daffa_user', '', 1),
(3, 1, 'Data Alumni', 'c_daffa_admin/alumni', '', 1),
(4, 2, 'Data Alumni', 'c_daffa_user/alumni', '', 1),
(5, 1, 'Pengaturan', 'c_daffa_admin/informasi', '', 1),
(6, 1, 'Masterdata', 'c_daffa_admin/masterdata', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`angkatan_id`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_alumni`
--
ALTER TABLE `status_alumni`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tracer`
--
ALTER TABLE `tracer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `angkatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `status_alumni`
--
ALTER TABLE `status_alumni`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracer`
--
ALTER TABLE `tracer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
