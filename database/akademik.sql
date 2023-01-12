-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 07.26
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

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
-- Struktur dari tabel `data_kolektif_ppdb`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kolektif_ppdb`
--

INSERT INTO `data_kolektif_ppdb` (`id`, `nama_lengkap`, `keterangan`, `jml_formulir_keluar`, `tgl_formulir_keluar`, `jml_formulir_masuk`, `tgl_formulir_masuk`, `no_telp_kolektif`) VALUES
(21, 'ahmad maulana', '', '0', '', '0', '', ''),
(22, 'ahmad maulana', '', '0', '', '0', '', ''),
(23, 'ananda', 'wali', '5', '2022-09-09', '3', '2022-09-10', ''),
(24, 'ananda', 'wali', '5', '2022-09-09', '3', '2022-09-10', ''),
(25, 'ananda', 'wali', '5', '2022-09-09', '3', '2022-09-10', ''),
(26, 'ananda', 'wali', '5', '2022-09-09', '3', '2022-09-10', ''),
(27, 'maulana', 'staff', '6', '2022-09-10', '5', '2022-09-11', ''),
(28, 'maulana', 'staff', '6', '2022-09-10', '5', '2022-09-11', ''),
(29, 'ahmad maulana', 'guru', '2', '2022-09-09', '1', '2022-09-10', ''),
(30, 'ahmad maulana', 'guru', '2', '2022-09-09', '1', '2022-09-10', ''),
(31, 'ahmad maulana', 'staff', '2', '2922-09-09', '9', '1999-09-09', '089677898990');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ppdb`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_ppdb`
--

INSERT INTO `data_ppdb` (`id`, `status`, `jurusan`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `transportasi`, `tinggal`, `no_telp`, `email`, `nama_ayah`, `thn_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `nama_ibu`, `thn_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `no_telp_ortu`, `alamat_ortu`, `sekolah_smp`, `alamat_sekolah_smp`, `sekolah_sd`, `alamat_sekolah_sd`, `tb`, `bb`, `jml_saudara`, `anak_ke`) VALUES
(8, 'Siswa Baru', 'AKL', 'ahmad maulana', 'Laki - laki', '8', '9', 'Bekasi', '2009-09-09', 'Islam', 'Kp. babelan', '10', '007', 'babelan kota', 'babelan', 'bekasi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Siswa Baru', 'AKL', 'ahmad maulana', 'Laki - laki', '1', '2', 'Bekasi', '2012-09-12', 'Islam', 'Kp. babelan', '008', '007', 'babelan kota', 'babelan', 'bekasi', 'jawa barat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Siswa Baru', 'AKL', 'ananda', 'Laki - laki', '00000', '09898989', 'Bekasi', '2004-09-09', 'Islam', 'Kp. babelan', '009', '007', 'babelan kota', 'babelan', 'bekasi', 'jawa barat', 'Sepeda Motor', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Pindahan', 'TKRO', 'sholiha', 'Perempuan', '0909', '1234567890', 'Bekasi', '2002-02-07', 'Islam', 'Kp. babelan', '001', '010', 'babelan kota', 'babelan', 'bekasi', 'jawa barat', 'Sepeda Motor', 'Bersama Orang Tua', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Pindahan', 'AKL', 'ananda', 'Perempuan', '12345', '0987654321', 'Bekasi', '2001-03-09', 'Islam', 'Kp. babelan', '005', '035', 'bahagia', 'babelan', 'bekasi', 'jawa barat', 'Sepeda Motor', 'Bersama Orang Tua', '0989898989', '1@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Siswa Baru', 'TKJ', 'ahmad', 'Laki - laki', '090909', '89898989898989', 'Bekasi', '2007-08-09', 'Islam', 'Kp. babelan', '008', '006', 'babelan kota', 'babelan', 'bekasi', 'jawa barat', 'Sepeda Motor', 'Bersama Orang Tua', '1234567890', '1@gmail.com', 'malih', '1987', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Siswa Baru', 'TKJ', 'maulana', 'Laki - laki', '1', '1', 'Bekasi', '2000-09-01', 'Islam', 'Kp. babelan', '008', '007', 'babelan kota', 'babelan', 'bekasi', 'jawa barat', 'Jalan Kaki', 'Bersama Orang Tua', '1234567890', '1@gmail.com', 'malih', '1987', 'buruh', 'SD / MI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Siswa Baru', 'AKL', 'maulana', 'Laki - laki', '1', '1', '1', '2020-01-01', 'Islam', '1', '1', '1', '1', '1', '1', '1', 'Jalan Kaki', 'Bersama Orang Tua', '1', '1@gmail.com', '1', '1', '1', 'Tidak Sekolah', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'Siswa Baru', 'AKL', 'ahmad', 'Laki - laki', '3', '3', '3', '2011-12-01', 'Islam', '3', '3', '3', '3', '3', '3', '3', 'Jalan Kaki', 'Bersama Orang Tua', '3', '3@gmail.com', '3', '3', '3', 'Tidak Sekolah', 'Rp. 500.000 - 1.000.000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Pindahan', 'TKJ', '5', 'Laki - laki', '5', '5', '5', '2018-01-01', 'Islam', '5', '5', '5', '5', '5', '5', '5', 'Jalan Kaki', 'Bersama Orang Tua', '5', '5@gmail.com', '5', '5', '5', 'Tidak Sekolah', 'Tidak Berpenghasilan', '5', '5', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Siswa Baru', 'AKL', '3', 'Laki - laki', '3', '3', '3', '2019-01-01', 'Islam', '4', '4', '4', '4', '4', '4', '4', 'Jalan Kaki', 'Bersama Orang Tua', '4', '4@gmail.com', '4', '4', '4', 'Tidak Sekolah', 'Rp. 500.000 - 1.000.000', '4', '4', '4', 'SD / MI', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'Siswa Baru', 'AKL', 'ananda', 'Perempuan', '2', '2', '2', '2020-01-01', 'Islam', '2', '2', '2', '2', '2', '2', '2', 'Jalan Kaki', 'Bersama Orang Tua', '2', '2@gmail.com', '2', '2', '2', 'Tidak Sekolah', 'Tidak Berpenghasilan', '2', '2', '2', 'Tidak Sekolah', 'Tidak Berpenghasilan', '232323', '', '', '', '', '', '', '', '', ''),
(37, 'Siswa Baru', 'TKJ', 'Ahmad Maulana', 'Laki - laki', '09090989', '321900000000000', 'Bekasi', '2009-09-09', 'Islam', 'Kp. Babelan', '010', '007', 'Babelan Kota', 'Babelan', 'Bekasi', 'Jawa Barat', 'Jalan Kaki', 'Bersama Orang Tua', '089667899890', '1@gmail.com', 'Malih', '1987', 'Buruh', 'SD / MI', 'Rp. 500.000 - 1.000.000', 'Marnih', '1989', 'Ibu Rumah Tangga', 'SD / MI', 'Rp. 500.000 - 1.000.000', '089667899098', 'Kp. Babelan Rt. 010 / 007 Babelan Bekasi ', 'SMP Attaqwa', 'Kp. Babelan', 'MI Attaqwa', 'Kp. Babelan', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `jabatan`, `email`, `password`) VALUES
(1, 'Ahmad Maulana', 'Administrator', 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kolektif_ppdb`
--
ALTER TABLE `data_kolektif_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ppdb`
--
ALTER TABLE `data_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kolektif_ppdb`
--
ALTER TABLE `data_kolektif_ppdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `data_ppdb`
--
ALTER TABLE `data_ppdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
