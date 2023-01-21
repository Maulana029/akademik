-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2023 pada 05.18
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ppdb`
--

CREATE TABLE `data_ppdb` (
  `id` int(10) NOT NULL,
  `status_siswa` varchar(50) NOT NULL,
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
(1, 'Administrator Sekolah', 'Panitia ', 'admin.ppdb@gmail.com', 'a3d61cf1bc6167bbb2fa46153e43ec64');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `data_ppdb`
--
ALTER TABLE `data_ppdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
