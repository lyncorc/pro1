-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2022 pada 19.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pra_ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_dosen`
--

CREATE TABLE `m_dosen` (
  `no_urut_dosen` int(11) NOT NULL,
  `nm_dosen` varchar(45) DEFAULT NULL,
  `nidn_dosen` varchar(45) DEFAULT NULL,
  `jenis_klmn_dosen` varchar(45) DEFAULT NULL,
  `kd_jabatab_dosen` varchar(45) DEFAULT NULL,
  `status_dosen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_dosen`
--

INSERT INTO `m_dosen` (`no_urut_dosen`, `nm_dosen`, `nidn_dosen`, `jenis_klmn_dosen`, `kd_jabatab_dosen`, `status_dosen`) VALUES
(1, 'handri edit', '1234', 'laki laki', 'Ko', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mahasiswa`
--

CREATE TABLE `m_mahasiswa` (
  `nim_mhs` varchar(45) NOT NULL,
  `kd_prodi` varchar(45) NOT NULL,
  `nm_mhs` varchar(45) DEFAULT NULL,
  `tempat_lhr_mhs` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `tgl_lhr_mhs` varchar(45) DEFAULT NULL,
  `jenis_klm_mhs` varchar(45) DEFAULT NULL,
  `tgl_msk_mhs` date DEFAULT NULL,
  `alamat_mhs` varchar(45) DEFAULT NULL,
  `tlpn_mhs` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_prodi`
--

CREATE TABLE `m_prodi` (
  `kd_prodi` varchar(45) NOT NULL,
  `kd_jenis_prodi` varchar(45) DEFAULT NULL,
  `nm_prodi` varchar(45) DEFAULT NULL,
  `status_prodi` varchar(45) DEFAULT NULL,
  `email_prodi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_semester`
--

CREATE TABLE `m_semester` (
  `kd_semester` varchar(45) NOT NULL,
  `ket_semester` varchar(45) DEFAULT NULL,
  `thn_semester` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_user`
--

CREATE TABLE `m_user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_user`
--

INSERT INTO `m_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`no_urut_dosen`);

--
-- Indeks untuk tabel `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`,`kd_prodi`);

--
-- Indeks untuk tabel `m_prodi`
--
ALTER TABLE `m_prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indeks untuk tabel `m_semester`
--
ALTER TABLE `m_semester`
  ADD PRIMARY KEY (`kd_semester`);

--
-- Indeks untuk tabel `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
