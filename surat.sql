-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Sep 2018 pada 12.08
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `kode_arsip` char(10) NOT NULL,
  `tempat_arsip` varchar(100) DEFAULT NULL,
  `keterangan_arsip` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_dispos` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_registrasi_masuk` int(11) DEFAULT NULL,
  `status_disposisi` int(11) DEFAULT NULL,
  `perintah_disposisi` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima`
--

-- CREATE TABLE `penerima` (
--   `id_penerima` int(11) NOT NULL,
--   `nama_penerima` varchar(100) DEFAULT NULL,
--   `alamat_penerima` varchar(200) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengirim`
--

-- CREATE TABLE `pengirim` (
--   `id_pengirim` int(11) NOT NULL,
--   `nama` varchar(100) DEFAULT NULL,
--   `alamat` varchar(100) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_registrasi_keluar` int(11) NOT NULL,
  `kode_arsip` char(10) DEFAULT NULL,
  -- `id_penerima` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `no_surat_keluar` varchar(100) DEFAULT NULL,
  `lampiran_keluar` varchar(20) DEFAULT NULL,
  `perihal_keluar` varchar(50) DEFAULT NULL,
  `korespondensi` char(10) DEFAULT NULL,
  `status_keluar` int(11) DEFAULT NULL,
  `files_keluar` varchar(1024) DEFAULT NULL,
  `sifat_keluar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_registrasi_masuk` int(11) NOT NULL,
  `kode_arsip` char(10) DEFAULT NULL,
  -- `id_pengirim` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_surat_masuk` varchar(100) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `lampiran_masuk` varchar(20) DEFAULT NULL,
  `perihal_masuk` varchar(50) DEFAULT NULL,
  `sifat_masuk` varchar(50) DEFAULT NULL,
  `files_masuk` varchar(1024) DEFAULT NULL,
  `status_masuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip` char(16) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `level` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama`, `password`, `level`) VALUES
(1, '1234567890123456', 'admin', 'admin', 'admin'),
(2, '1234567890123455', 'kabag', 'kabag', 'kabag'),
(3, '1234567890123454', 'kadin', 'kadin', 'kadin'),
(4, '1234567890123453', 'staff', 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`kode_arsip`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_dispos`),
  ADD KEY `fk_dispo_user` (`id_user`),
  ADD KEY `fk_dispo_masuk` (`no_registrasi_masuk`);

--
-- Indexes for table `penerima`
--
-- ALTER TABLE `penerima`
--   ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `pengirim`
--
-- ALTER TABLE `pengirim`
--   ADD PRIMARY KEY (`id_pengirim`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_registrasi_keluar`),
  ADD KEY `fk_keluar_kode` (`kode_arsip`),
  ADD KEY `fk_keluar_user` (`id_user`);
  -- ADD KEY `fk_ke_penerima` (`id_penerima`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_registrasi_masuk`),
  ADD KEY `fk_masuk_arsip` (`kode_arsip`),
  ADD KEY `fk_masuk_user` (`id_user`);
  -- ADD KEY `fk_masuk_pengirim` (`id_pengirim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_dispos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerima`
--
-- ALTER TABLE `penerima`
--   MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengirim`
--
-- ALTER TABLE `pengirim`
--   MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `no_registrasi_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `no_registrasi_masuk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `fk_dispo_masuk` FOREIGN KEY (`no_registrasi_masuk`) REFERENCES `surat_masuk` (`no_registrasi_masuk`),
  ADD CONSTRAINT `fk_dispo_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  -- ADD CONSTRAINT `fk_ke_penerima` FOREIGN KEY (`id_penerima`) REFERENCES `penerima` (`id_penerima`),
  ADD CONSTRAINT `fk_keluar_kode` FOREIGN KEY (`kode_arsip`) REFERENCES `arsip` (`kode_arsip`),
  ADD CONSTRAINT `fk_keluar_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `fk_masuk_arsip` FOREIGN KEY (`kode_arsip`) REFERENCES `arsip` (`kode_arsip`),
  -- ADD CONSTRAINT `fk_masuk_pengirim` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirim` (`id_pengirim`),
  ADD CONSTRAINT `fk_masuk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
