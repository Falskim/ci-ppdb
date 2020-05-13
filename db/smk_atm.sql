-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 02:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id`, `title`, `file_name`, `created`, `modified`, `status`) VALUES
(1, '', '35-145-1-PB.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) UNSIGNED NOT NULL,
  `Tanggal_Daftar` varchar(128) NOT NULL,
  `REG` varchar(25) NOT NULL,
  `Tingkat` varchar(5) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Nama_Siswa` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Asal_Sekolah` varchar(50) NOT NULL,
  `NISN` varchar(50) NOT NULL,
  `No_Ijazah` varchar(50) DEFAULT NULL,
  `No_SKHUN` varchar(50) DEFAULT NULL,
  `No_UN` varchar(50) DEFAULT NULL,
  `NIK` varchar(50) NOT NULL,
  `TTL` varchar(100) NOT NULL,
  `Alamat_Tinggal` varchar(256) NOT NULL,
  `Transportasi` varchar(50) NOT NULL,
  `Jenis_Tinggal` varchar(35) NOT NULL,
  `Rencana_Tinggal` varchar(35) NOT NULL,
  `Ukuran_Pakaian` varchar(5) NOT NULL,
  `No_HP` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `No_KKS` varchar(50) DEFAULT NULL,
  `Nama_Ayah` varchar(100) NOT NULL,
  `Lahir_Ayah` varchar(50) NOT NULL,
  `Pekerjaan_Ayah` varchar(35) NOT NULL,
  `Pendidikan_Ayah` varchar(35) NOT NULL,
  `Penghasilan_Ayah` varchar(30) NOT NULL,
  `Nama_Ibu` varchar(100) NOT NULL,
  `Lahir_Ibu` varchar(50) NOT NULL,
  `Pekerjaan_Ibu` varchar(35) NOT NULL,
  `Pendidikan_Ibu` varchar(35) NOT NULL,
  `Penghasilan_Ibu` varchar(30) NOT NULL,
  `Nama_Wali` varchar(100) DEFAULT NULL,
  `Lahir_Wali` varchar(50) NOT NULL,
  `Pekerjaan_Wali` varchar(35) DEFAULT NULL,
  `Pendidikan_Wali` varchar(35) DEFAULT NULL,
  `Penghasilan_Wali` varchar(30) DEFAULT NULL,
  `Tinggi_Badan` varchar(5) NOT NULL,
  `Berat_Badan` varchar(5) NOT NULL,
  `Jarak_Sekolah` varchar(5) NOT NULL,
  `Waktu_Tempuh` varchar(5) NOT NULL,
  `Saudara_Kandung` varchar(2) NOT NULL,
  `Prestasi_1` varchar(256) DEFAULT NULL,
  `Prestasi_2` varchar(256) DEFAULT NULL,
  `Prestasi_3` varchar(256) DEFAULT NULL,
  `Beasiswa_1` varchar(256) DEFAULT NULL,
  `Beasiswa_2` varchar(256) DEFAULT NULL,
  `Beasiswa_3` varchar(256) DEFAULT NULL,
  `Akta_Lahir` varchar(256) NOT NULL,
  `KK` varchar(256) NOT NULL,
  `Bio_Raport` varchar(256) NOT NULL,
  `KTP_Ayah` varchar(256) NOT NULL,
  `KTP_Ibu` varchar(256) NOT NULL,
  `Ijazah_SMP` varchar(256) DEFAULT NULL,
  `SKHUN_SMP` varchar(256) DEFAULT NULL,
  `Surat_Lulus_SMP` varchar(256) DEFAULT NULL,
  `KPS/PKH` varchar(256) DEFAULT NULL,
  `Password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status_lolos` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `Tanggal_Daftar`, `REG`, `Tingkat`, `Prodi`, `Nama_Siswa`, `Jenis_Kelamin`, `Asal_Sekolah`, `NISN`, `No_Ijazah`, `No_SKHUN`, `No_UN`, `NIK`, `TTL`, `Alamat_Tinggal`, `Transportasi`, `Jenis_Tinggal`, `Rencana_Tinggal`, `Ukuran_Pakaian`, `No_HP`, `Email`, `No_KKS`, `Nama_Ayah`, `Lahir_Ayah`, `Pekerjaan_Ayah`, `Pendidikan_Ayah`, `Penghasilan_Ayah`, `Nama_Ibu`, `Lahir_Ibu`, `Pekerjaan_Ibu`, `Pendidikan_Ibu`, `Penghasilan_Ibu`, `Nama_Wali`, `Lahir_Wali`, `Pekerjaan_Wali`, `Pendidikan_Wali`, `Penghasilan_Wali`, `Tinggi_Badan`, `Berat_Badan`, `Jarak_Sekolah`, `Waktu_Tempuh`, `Saudara_Kandung`, `Prestasi_1`, `Prestasi_2`, `Prestasi_3`, `Beasiswa_1`, `Beasiswa_2`, `Beasiswa_3`, `Akta_Lahir`, `KK`, `Bio_Raport`, `KTP_Ayah`, `KTP_Ibu`, `Ijazah_SMP`, `SKHUN_SMP`, `Surat_Lulus_SMP`, `KPS/PKH`, `Password`, `role_id`, `status_lolos`) VALUES
(1, '11/03/2019', 'ATM-123456789', '1', 'Usaha Perjalanan Wisata', 'Pramadita Sielda Dewi', 'Perempuan', 'SMPN 45 Kota Bandung', '928472347347', 'DN-82875438754', NULL, NULL, '327590303857', 'Bandung, 24 Oktober 1999', 'Jl.Cikaso No.197', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'M', '087566777999', 'pramaditasielda@gmail.com', '', 'Yadi', '1966', 'Pensiunan', 'SMA Sederajat', 'Kurang dari Rp.1.000.000', 'Yani', '1972', 'Tidak Bekerja', 'SMA Sederajat', 'Lebih dari Rp.2.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '158', '55', '1,3', '30', '1', '', '', '', '', '', '', 'car.jpg', 'book.jpg', '', '', '', '', '', '', '', '', 0, 1),
(7, '4-3-2020', 'ATM-1234572', '1', 'Usaha Perjalanan Wisata', 'Vania Dinda', 'Perempuan', 'SMP Plus Parahiyangan', '987463776476', NULL, NULL, NULL, '327646483888', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(8, '4-3-2020', 'ATM-1234573', '1', 'Agribisnis Ternak Unggas', 'Damadika Husein Sagara', 'Laki-laki', 'SMPN 2 Majalengka', '9834858875487', NULL, NULL, NULL, '324545465656', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(9, '5-3-2020', 'ATM-1234574', '1', 'Pemasaran', 'Siti Auliya Syarif', 'Perempuan', 'SMPN 1 Majalengka', '98492482475', NULL, NULL, NULL, '32454655666', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(10, '5-3-2020', 'ATM-1234575', '1', 'Usaha Perjalanan Wisata', 'Kirana Dwinanda ', 'Perempuan', 'SMP Tiara Citra', '9484873262625', NULL, NULL, NULL, '3275433454555', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(11, '5-3-2020', 'ATM-1234576', '1', 'Agribisnis Ternak Unggas', 'Budiawan Kusuma Dana', 'Laki-laki', 'SMP Bani Adam', '9859458753847', NULL, NULL, NULL, '3274958587576', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(12, '6-3-2020', 'ATM-1234577', '1', 'Pemasaran', 'Surya Nabawi', 'Laki-laki', 'SMPN 1 Majalengka', '984826346746', NULL, NULL, NULL, '3276454532222', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(37, '', 'ATM-12345342', '2', 'Usaha Perjalanan Wisata', 'Dannia', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', 0, 0),
(38, '', 'afsdfsd', '1', 'Agribisnis Peternakan Unggas', 'Dannia', 'Perempuan', 'dsfsfgds', '3542543', '', NULL, NULL, '34534565436', 'fgrdgre645', 'trhr', 'Kendaraan Pribadi', 'Bersama Orang Tua', 'Asrama', 'M', '65756857', 'nara@gmail.com', '', 'ahsja', '34654', 'Nelayan', 'SMP Sederajat', 'Lebih dari Rp.2.000.000', 'hfghfgjf', '45353', 'Wiraswasta', 'SMP Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', NULL, NULL, NULL, '156', '55', '2', '60', '3', '', '', '', '', '', '', '0f948ef9244e8de6c597c26dba806aa1.jpg', '9c319328e5f938d9634ebc64219d4be6.jpg', '115-1155227_single-color-icons-movie-slate1-movie-slate-icon.png', 'book1.png', 'card.jpg', '', '', '', '', '', 0, 1),
(41, '', 'ATM-123453231', '1', 'Usaha Perjalanan Wisata', 'Nilam Sekar', 'Perempuan', 'SMPN 14 Kota Jakarta', '998548547857857', 'DN-UEUWR4URH8573', NULL, NULL, '325374858756545454', 'Kediri, 14 Agustus 2005', 'Jl. Bahagia Selamanya No. 78', 'Jalan Kaki', 'Asrama', 'Panti Asuhan', 'M', '084756645321', 'Nilams@gmail.com', '', 'Dodi Diansyah', '1970', 'Pedagang Kecil', 'SMA Sederajat', 'Rp.1.000.000 - Rp.2.000.000', 'Nining Ningsih', '1975', 'Pedagang Kecil', 'SMA Sederajat', 'Kurang dari Rp.1.000.000', '', '', NULL, NULL, NULL, '165', '58', '1,5', '45', '0', '', '', '', '', '', '', 'card.jpg', 'car1.jpg', '', 'card.jpg', '', '', '', '', '', '', 0, 1),
(42, '', 'ATM-12456', '2', 'Usaha Perjalanan Wisata', 'Renaldi Naufal Atmaja', 'Laki-laki', 'SMP Unggul Berdikari', '98742762645234', '-', '-', '-', '3239565654747', 'Bandung, 19 Oktober 2005', 'Jl.Perjuangan 5 RT.08 RW.09 Kel.Sukaraja', 'Kendaraan Umum', 'Asrama', 'Bersama Orang Tua', 'XL', '08974637282744', 'naufalatmaja@gmail.com', '', 'Budiawan Randi', '1988', 'Karyawan Swasta', 'D1-D3', 'Lebih dari Rp.2.000.000', 'Putriani Narni', '1988', 'Tidak bekerja', 'SMA Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', NULL, NULL, NULL, '180', '70', '1', '15', '1', '', '', '', '', '', '', 'ikon.jpeg', 'Screenshot (1).png', 'Screenshot (9).png', 'Screenshot (11).png', 'Screenshot (8).png', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `REG` varchar(128) NOT NULL,
  `Tingkat` varchar(128) NOT NULL,
  `Prodi` varchar(128) NOT NULL,
  `Nama_Siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `REG`, `Tingkat`, `Prodi`, `Nama_Siswa`) VALUES
(1, 'ATM', '1', 'Agribisnis Peternakan Unggas', 'SWAD');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
