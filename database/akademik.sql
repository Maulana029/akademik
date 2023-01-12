-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 05:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kolektif_ppdb`
--

CREATE TABLE `data_kolektif_ppdb` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `jml_formulir_keluar` varchar(100) NOT NULL,
  `tgl_formulir_keluar` varchar(100) NOT NULL,
  `jml_formulir_masuk` varchar(100) NOT NULL,
  `tgl_formulir_masuk` varchar(100) NOT NULL,
  `no_telp_kolektif` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kolektif_ppdb`
--

INSERT INTO `data_kolektif_ppdb` (`id`, `nama_lengkap`, `keterangan`, `jml_formulir_keluar`, `tgl_formulir_keluar`, `jml_formulir_masuk`, `tgl_formulir_masuk`, `no_telp_kolektif`) VALUES
(26, 'ananda', 'wali', '5', '2022-09-09', '3', '2022-09-10', ''),
(27, 'maulana', 'staff', '6', '2022-09-10', '5', '2022-09-11', ''),
(28, 'maulana', 'staff', '6', '2022-09-10', '5', '2022-09-11', ''),
(29, 'ahmad maulana', 'guru', '2', '2022-09-09', '1', '2022-09-10', ''),
(30, 'ahmad maulana', 'guru', '2', '2022-09-09', '1', '2022-09-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_ppdb`
--

CREATE TABLE `data_ppdb` (
  `id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `transportasi` varchar(80) NOT NULL,
  `tinggal` varchar(80) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `thn_lahir_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pendidikan_ayah` varchar(40) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `thn_lahir_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `pendidikan_ibu` varchar(40) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `no_telp_ortu` varchar(15) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `sekolah_smp` varchar(50) NOT NULL,
  `alamat_sekolah_smp` varchar(100) NOT NULL,
  `sekolah_sd` varchar(50) NOT NULL,
  `alamat_sekolah_sd` varchar(100) NOT NULL,
  `tb` varchar(10) NOT NULL,
  `bb` varchar(10) NOT NULL,
  `jml_saudara` varchar(10) NOT NULL,
  `anak_ke` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ppdb`
--

INSERT INTO `data_ppdb` (`id`, `status`, `jurusan`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `transportasi`, `tinggal`, `no_telp`, `email`, `nama_ayah`, `thn_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `nama_ibu`, `thn_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `no_telp_ortu`, `alamat_ortu`, `sekolah_smp`, `alamat_sekolah_smp`, `sekolah_sd`, `alamat_sekolah_sd`, `tb`, `bb`, `jml_saudara`, `anak_ke`) VALUES
(41, 'Siswa Baru', 'TKJ', 'Ahmad Maulana', 'Laki - laki', '1234567890', '32160228080888887', 'Bekasi', '2009-09-09', 'Islam', 'Kp. Babelan', '009', '009', 'Babelan Kota', 'Babelan', 'Bekasi', 'Jawa Barat', 'Sepeda Motor', 'Bersama Orang Tua', '1234567890', '1@gmail.com', 'Malih', '1987', 'Buruh', 'SD / MI', 'Rp. 500.000 - 1.000.000', 'Marnih', '1989', 'Ibu Rumah Tangga', 'Tidak Sekolah', 'Tidak Berpenghasilan', '098765432112', 'Kp. Babelan Rt. 010 / 007 Babelan Bekasi ', 'SMP Attaqwa', 'Kp. Babelan', 'MI Attaqwa', 'kp. babelan', '175', '45', '3', '2'),
(42, 'Pindahan', 'AKL', 'M. Hardiansyah', 'Perempuan', '1234567890', '0987654321123456', 'Bekasi', '2023-01-01', 'Islam', 'Kp. Babelan', '001', '006', 'Babelan Kota', 'Babelan', 'Bekasi', 'Jawa Barat', 'Jalan Kaki', 'Panti Asuhan', '098765432112', '1@gmail.com', 'Malih', '1987', 'Buruh', 'SD / MI', 'Rp. 500.000 - 1.000.000', 'Marnih', '1989', 'Ibu Rumah Tangga', 'SD / MI', 'Rp. 500.000 - 1.000.000', '098765432109', 'Kp. Babelan Rt. 010 / 007 Babelan Bekasi ', 'SMP Attaqwa', 'Kp. Babelan', 'MI Attaqwa', 'Kp. Babelan', '164', '47', '3', '3'),
(43, 'Siswa Baru', 'TKJ', 'Maulana', 'Laki - laki', '000000001', '321600000000', 'Bekasi', '2009-09-09', 'Islam', 'Kp. Babelan', '09', '09', 'Babelan Kota', 'Babelan', 'Bekasi', 'Jawa Barat', 'Jalan Kaki', 'Bersama Orang Tua', '0897', '1@gmail.com', 'Malih', '1987', 'Buruh', 'Tidak Sekolah', 'Tidak Berpenghasilan', 'Marnih', '1989', 'Ibu Rumah Tangga', 'Tidak Sekolah', 'Tidak Berpenghasilan', '00008', 'Kp. Babelan Rt. 010 / 007 Babelan Bekasi ', 'SMP Attaqwa', 'Kp. Babelan', 'MI Attaqwa', 'Kp. Babelan', '198', '90', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `jabatan`, `email`, `password`) VALUES
(1, 'Ahmad Maulana', 'Administrator', 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kolektif_ppdb`
--
ALTER TABLE `data_kolektif_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ppdb`
--
ALTER TABLE `data_ppdb`
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
-- AUTO_INCREMENT for table `data_kolektif_ppdb`
--
ALTER TABLE `data_kolektif_ppdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `data_ppdb`
--
ALTER TABLE `data_ppdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
