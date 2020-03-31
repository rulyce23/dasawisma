-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2020 pada 09.12
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dasawisma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_anggotakeluarga`
--

CREATE TABLE `tm_anggotakeluarga` (
  `id_anggotakeluarga` smallint(6) NOT NULL,
  `id_keluarga` smallint(6) DEFAULT NULL,
  `no_KTP` varchar(25) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `status_dalam_keluarga` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `d_entry` date DEFAULT NULL,
  `d_edit` date DEFAULT NULL,
  `d_delete` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL,
  `id_user_edit` smallint(6) DEFAULT NULL,
  `id_user_delete` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_anggotakeluarga`
--

INSERT INTO `tm_anggotakeluarga` (`id_anggotakeluarga`, `id_keluarga`, `no_KTP`, `nama_lengkap`, `status_dalam_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `d_entry`, `d_edit`, `d_delete`, `id_user_entry`, `id_user_edit`, `id_user_delete`) VALUES
(1, 1, '123456', 'Yusuf', 'Kepala Rumah Tangga', 'L', 'bandung', '2000-03-01', '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(2, 1, '23456', 'Maryam', 'Anggota Keluarga', 'P', 'bandung', '2000-03-02', '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(3, 2, '1237', 'Ahmad', 'Kepala Rumah Tangga', 'L', 'bandung', '2000-03-01', '2020-03-01', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_dasawisma`
--

CREATE TABLE `tm_dasawisma` (
  `id_dasawisma` int(11) NOT NULL,
  `nama_dasawisma` varchar(50) DEFAULT NULL,
  `id_RT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_dasawisma`
--

INSERT INTO `tm_dasawisma` (`id_dasawisma`, `nama_dasawisma`, `id_RT`) VALUES
(1, 'Mawar', 1),
(2, 'Melati', 1),
(3, 'Anggrek', 1),
(4, 'Anyelir', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_element`
--

CREATE TABLE `tm_element` (
  `id_element` bigint(20) NOT NULL,
  `element` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_element`
--

INSERT INTO `tm_element` (`id_element`, `element`) VALUES
(1, 'Alamat KK sesuai dengan Alamat Rumah'),
(2, 'Alamat Rumah Tinggal'),
(3, 'Provinsi'),
(4, 'Kota/Kabupaten'),
(5, 'Kecamatan'),
(6, 'Kelurahan/Desa'),
(7, 'Status Perkawinan'),
(8, 'Apakah Memiliki Buku Nikah'),
(9, 'Status Dalam Keluarga'),
(10, 'Status Anggota Keluarga'),
(11, 'Pendidikan'),
(12, 'Pekerjaan'),
(13, 'Kelompok Pendapatan Bulanan'),
(14, 'Status Ibu (jika warga Istri/Ibu)'),
(15, 'Riwayat Medis Penyakit'),
(16, 'Akseptor KB'),
(17, 'Jenis Akseptor KB'),
(18, 'Aktif Kegiatan Posyandu'),
(19, 'Frekuensi'),
(20, 'Memiliki Tabungan'),
(21, 'Mengikuti Kelompok Belajar'),
(22, 'Jenis Kelompok Belajar'),
(23, 'Mengikuti Bina Keluarga Balita'),
(24, 'Mengikuti PAUD/Sejenis'),
(25, 'Mengikuti Koperasi'),
(26, 'Jenis Koperasi'),
(27, 'Disabilitas'),
(28, 'Jenis Disabilitas'),
(29, 'Memiliki Akte Kelahiran'),
(30, 'Kepesertaan Asuransi Kesehatan'),
(31, 'Jenis Kepesertaan'),
(32, 'Memiliki KJP'),
(33, 'Jenis KJP'),
(34, 'Memiliki Kartu Lansia'),
(35, 'Memiliki Kartu Keluarga Harapan'),
(36, 'Jumlah Anggota Keluarga'),
(37, 'Jumlah Anggota Keluarga - Laki2'),
(38, 'Jumlah Anggota Keluarga - Perempuan'),
(39, 'Jumlah KK'),
(40, 'Jumlah Balita'),
(41, 'Jumlah PUS'),
(42, 'Jumlah WUS'),
(43, 'Jumlah Ibu Hamil'),
(44, 'Jumlah Ibu Menyusui'),
(45, 'Jumlah Lansia'),
(46, 'Jumlah 3 Buta'),
(47, 'NOP (Nomor Objek Pajak pada PBB)'),
(48, 'Status Rumah Tinggal'),
(49, 'Sertifikat Tanah (untuk rumah milik pribadi)'),
(50, 'Makanan Pokok'),
(51, 'Jika bukan Beras, makanan pokoknya'),
(52, 'Penerapan menu B2SA Sehari-hari'),
(53, 'Jumlah Lantai Rumah Tinggal'),
(54, 'Kondisi Bangunan Rumah Tinggal'),
(55, 'Penerangan Rumah'),
(56, 'Jenis Penerangan'),
(57, 'Jamban'),
(58, 'Tempat Sampah'),
(59, 'Pilah Sampah Rumah Tangga'),
(60, 'Komposting'),
(61, 'Saluran buang Air Limbah Rumah'),
(62, 'Lubang Serapan Biopori'),
(63, 'Jumlah Lubang'),
(64, 'Menempel Stiker P4K'),
(65, 'Sumber Air'),
(66, 'Penghayatan dan Pengamalan Pancasila'),
(67, 'Jenis Kegiatan Penghayatan dan Pengamalan Pancasila'),
(68, 'Kerja Bakti'),
(69, 'Jenis Kegiatan Kerja Bakti'),
(70, 'Rukun Kematian'),
(71, 'Jenis Kegiatan Rukun Kematian'),
(72, 'Kegiatan Keagamaan'),
(73, 'Jenis Kegiatan Keagamaan'),
(74, 'Arisan'),
(75, 'Jenis Kegiatan Arisan'),
(76, 'Jimpitan'),
(77, 'Jenis Kegiatan Jimpitan'),
(78, 'Peternakan'),
(79, 'Komoditi Peternakan'),
(80, 'Perikanan'),
(81, 'Komoditi Perikanan'),
(82, 'Lumbung Hidup'),
(83, 'Komoditi Lumbung Hidup'),
(84, 'Warung Hidup'),
(85, 'Komoditi Warung Hidup'),
(86, 'Apotik Hidup (TOGA)'),
(87, 'Komoditi TOGA'),
(88, 'Tanaman Produktif'),
(89, 'Komoditi Tanaman Produktif'),
(90, 'Tanaman Keras atau Pelindung'),
(91, 'Komoditi Tanaman Keras atau Pelindung'),
(92, 'Tanaman Hias'),
(93, 'Komoditi Tanaman Hias'),
(94, 'Tanaman Buah Dalam Pot (Tabulapot)'),
(95, 'Komoditi Tanaman Tabulapot'),
(96, 'Pangan'),
(97, 'Komoditi Pangan'),
(98, 'Sandang'),
(99, 'Komoditi Sandang'),
(100, 'Jasa'),
(101, 'Komoditi Jasa'),
(102, 'Warung'),
(103, 'Komoditi Warung'),
(104, 'Jasa'),
(105, 'Komoditi Jasa'),
(106, 'Kerajinan'),
(107, 'Komoditi Kerajinan'),
(108, 'Jahit'),
(109, 'Komoditi Jahit'),
(110, 'UP2K - Lain-lain'),
(111, 'Komoditi UP2K - Lain-lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_jawaban_multiple`
--

CREATE TABLE `tm_jawaban_multiple` (
  `id_multiple` smallint(6) NOT NULL,
  `id_variabel` smallint(6) NOT NULL,
  `value` varchar(100) NOT NULL,
  `d_entry` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_jawaban_multiple`
--

INSERT INTO `tm_jawaban_multiple` (`id_multiple`, `id_variabel`, `value`, `d_entry`, `id_user_entry`) VALUES
(1, 21, 'Kambing', '2020-03-01', NULL),
(2, 21, 'Kelinci', '2020-03-01', NULL),
(3, 21, 'Ayam', '2020-03-01', NULL),
(4, 21, 'Burung', '2020-03-01', NULL),
(5, 23, 'Lele', '2020-03-01', NULL),
(6, 23, 'Mas', '2020-03-01', NULL),
(7, 23, 'Mujair', '2020-03-01', NULL),
(8, 23, 'Nila', '2020-03-01', NULL),
(9, 23, 'Patin', '2020-03-01', NULL),
(10, 23, 'Ikan Hias', '2020-03-01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_jawaban_opsional`
--

CREATE TABLE `tm_jawaban_opsional` (
  `id_opsional` smallint(6) NOT NULL,
  `id_variabel` smallint(6) NOT NULL,
  `value` varchar(255) NOT NULL,
  `d_entry` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_jawaban_opsional`
--

INSERT INTO `tm_jawaban_opsional` (`id_opsional`, `id_variabel`, `value`, `d_entry`, `id_user_entry`) VALUES
(1, 2, 'Milik Pribadi/Keluarga', '2020-03-01', NULL),
(2, 2, 'Sewa/Kontrak', '2020-03-01', NULL),
(3, 3, 'SHM', '2020-03-01', NULL),
(4, 3, 'AJB', '2020-03-01', NULL),
(5, 3, 'HGB', '2020-03-01', NULL),
(6, 3, 'Girik', '2020-03-01', NULL),
(7, 3, 'Tidak ada', '2020-03-01', NULL),
(8, 4, 'Beras', '2020-03-01', NULL),
(9, 4, 'Non Beras', '2020-03-01', NULL),
(10, 5, 'Gandum', '2020-03-01', NULL),
(11, 5, 'Umbi-umbian', '2020-03-01', NULL),
(12, 5, 'Jagung', '2020-03-01', NULL),
(13, 5, 'Sagu', '2020-03-01', NULL),
(14, 6, 'Ya', '2020-03-01', NULL),
(15, 6, 'Tidak', '2020-03-01', NULL),
(16, 7, '1', '2020-03-01', NULL),
(17, 7, '2', '2020-03-01', NULL),
(18, 7, '3', '2020-03-01', NULL),
(19, 7, '4', '2020-03-01', NULL),
(20, 8, 'Sehat', '2020-03-01', NULL),
(21, 8, 'Kurang Sehat', '2020-03-01', NULL),
(22, 9, 'Bagus', '2020-03-01', NULL),
(23, 9, 'Kurang', '2020-03-01', NULL),
(24, 10, 'Lampu Putih', '2020-03-01', NULL),
(25, 10, 'Lampu Bohlam', '2020-03-01', NULL),
(26, 10, 'Kedua Jenis Lampu', '2020-03-01', NULL),
(27, 11, 'Tidak Ada', '2020-03-01', NULL),
(28, 11, 'Ada', '2020-03-01', NULL),
(29, 12, 'Tidak Ada', '2020-03-01', NULL),
(30, 12, 'Ada', '2020-03-01', NULL),
(31, 13, 'Tidak Ada', '2020-03-01', NULL),
(32, 13, 'Ada', '2020-03-01', NULL),
(33, 14, 'Tidak Ada', '2020-03-01', NULL),
(34, 14, 'Ada', '2020-03-01', NULL),
(35, 15, 'Tidak Ada', '2020-03-01', NULL),
(36, 15, 'Ada', '2020-03-01', NULL),
(37, 16, 'Tidak Ada', '2020-03-01', NULL),
(38, 16, 'Ada', '2020-03-01', NULL),
(39, 18, 'Tidak Ada', '2020-03-01', NULL),
(40, 18, 'Ada', '2020-03-01', NULL),
(41, 19, 'PDAM', '2020-03-01', NULL),
(42, 19, 'Sumur Air Tanah', '2020-03-01', NULL),
(43, 19, 'Sungai', '2020-03-01', NULL),
(44, 19, 'Air hujan', '2020-03-01', NULL),
(45, 20, 'Ya', '2020-03-01', NULL),
(46, 20, 'Tidak', '2020-03-01', NULL),
(47, 22, 'Ya', '2020-03-01', NULL),
(48, 22, 'Tidak', '2020-03-01', NULL),
(49, 24, 'Ya', '2020-03-01', NULL),
(50, 24, 'Tidak', '2020-03-01', NULL),
(51, 26, 'Ya', '2020-03-01', NULL),
(52, 26, 'Tidak', '2020-03-01', NULL),
(53, 28, 'Ya', '2020-03-01', NULL),
(54, 28, 'Tidak', '2020-03-01', NULL),
(55, 30, 'Ya', '2020-03-01', NULL),
(56, 30, 'Tidak', '2020-03-01', NULL),
(57, 32, 'Ya', '2020-03-01', NULL),
(58, 32, 'Tidak', '2020-03-01', NULL),
(59, 34, 'Ya', '2020-03-01', NULL),
(60, 34, 'Tidak', '2020-03-01', NULL),
(61, 36, 'Ya', '2020-03-01', NULL),
(62, 36, 'Tidak', '2020-03-01', NULL),
(63, 38, 'Ya', '2020-03-01', NULL),
(64, 38, 'Tidak', '2020-03-01', NULL),
(65, 40, 'Ya', '2020-03-01', NULL),
(66, 40, 'Tidak', '2020-03-01', NULL),
(67, 42, 'Ya', '2020-03-01', NULL),
(68, 42, 'Tidak', '2020-03-01', NULL),
(69, 44, 'Ya', '2020-03-01', NULL),
(70, 44, 'Tidak', '2020-03-01', NULL),
(71, 46, 'Ya', '2020-03-01', NULL),
(72, 46, 'Tidak', '2020-03-01', NULL),
(73, 48, 'Ya', '2020-03-01', NULL),
(74, 48, 'Tidak', '2020-03-01', NULL),
(75, 50, 'Ya', '2020-03-01', NULL),
(76, 50, 'Tidak', '2020-03-01', NULL),
(77, 52, 'Ya', '2020-03-01', NULL),
(78, 52, 'Tidak', '2020-03-01', NULL),
(79, 64, 'Menikah', '2020-03-01', NULL),
(80, 64, 'Lajang', '2020-03-01', NULL),
(81, 64, 'Duda', '2020-03-01', NULL),
(82, 64, 'Janda', '2020-03-01', NULL),
(83, 65, 'Ya', '2020-03-01', NULL),
(84, 65, 'Tidak', '2020-03-01', NULL),
(85, 66, 'Islam', '2020-03-01', NULL),
(86, 66, 'Kristen', '2020-03-01', NULL),
(87, 66, 'Katolik', '2020-03-01', NULL),
(88, 66, 'Hindu', '2020-03-01', NULL),
(89, 66, 'Budha', '2020-03-01', NULL),
(90, 66, 'Kepercayaan', '2020-03-01', NULL),
(91, 67, 'Tidak tamat SD', '2020-03-01', NULL),
(92, 67, 'SD/MI', '2020-03-01', NULL),
(93, 67, 'SMP', '2020-03-01', NULL),
(94, 67, 'SMU/SMK', '2020-03-01', NULL),
(95, 67, 'Diploma', '2020-03-01', NULL),
(96, 67, 'S1', '2020-03-01', NULL),
(97, 67, 'S2', '2020-03-01', NULL),
(98, 68, 'Pedagang', '2020-03-01', NULL),
(99, 68, 'Swasta', '2020-03-01', NULL),
(100, 68, 'Wirausaha', '2020-03-01', NULL),
(101, 68, 'PNS', '2020-03-01', NULL),
(102, 68, 'TNI/Polri', '2020-03-01', NULL),
(103, 68, 'Lainnya', '2020-03-01', NULL),
(104, 69, '0-5juta', '2020-03-01', NULL),
(105, 69, '5-10juta', '2020-03-01', NULL),
(106, 69, '10-15juta', '2020-03-01', NULL),
(107, 69, '>15juta', '2020-03-01', NULL),
(108, 70, 'Hamil', '2020-03-01', NULL),
(109, 70, 'Melahirkan', '2020-03-01', NULL),
(110, 70, 'Menyusui', '2020-03-01', NULL),
(111, 70, 'Nifas', '2020-03-01', NULL),
(112, 71, 'TB Paru', '2020-03-01', NULL),
(113, 71, 'Diabetes', '2020-03-01', NULL),
(114, 71, 'Kanker Serviks', '2020-03-01', NULL),
(115, 71, 'Stanting', '2020-03-01', NULL),
(116, 71, 'Anemia', '2020-03-01', NULL),
(117, 71, 'Kanker Payudara', '2020-03-01', NULL),
(118, 71, 'Leukimia', '2020-03-01', NULL),
(119, 71, 'Cacingan', '2020-03-01', NULL),
(120, 71, 'Kanker Rahim', '2020-03-01', NULL),
(121, 71, 'DBD', '2020-03-01', NULL),
(122, 71, 'HIV', '2020-03-01', NULL),
(123, 71, 'Bayi Gizi Kurang', '2020-03-01', NULL),
(124, 71, 'Bayi Gizi Buruk', '2020-03-01', NULL),
(125, 71, 'Bayi Gizi Lebih', '2020-03-01', NULL),
(126, 71, 'Lainnya', '2020-03-01', NULL),
(127, 71, 'Tidak ada', '2020-03-01', NULL),
(128, 72, 'Ya', '2020-03-01', NULL),
(129, 72, 'Tidak', '2020-03-01', NULL),
(130, 73, 'Kondom', '2020-03-01', NULL),
(131, 73, 'Pil', '2020-03-01', NULL),
(132, 73, 'Suntik', '2020-03-01', NULL),
(133, 73, 'IUD', '2020-03-01', NULL),
(134, 73, 'Implant', '2020-03-01', NULL),
(135, 73, 'MOW', '2020-03-01', NULL),
(136, 73, 'MOP', '2020-03-01', NULL),
(137, 74, 'Ya', '2020-03-01', NULL),
(138, 74, 'Tidak', '2020-03-01', NULL),
(139, 76, 'Ya', '2020-03-01', NULL),
(140, 76, 'Tidak', '2020-03-01', NULL),
(141, 77, 'Ya', '2020-03-01', NULL),
(142, 77, 'Tidak', '2020-03-01', NULL),
(143, 78, 'Paket A', '2020-03-01', NULL),
(144, 78, 'Paket B', '2020-03-01', NULL),
(145, 78, 'Paket C', '2020-03-01', NULL),
(146, 79, 'Ya', '2020-03-01', NULL),
(147, 79, 'Tidak', '2020-03-01', NULL),
(148, 80, 'Ya', '2020-03-01', NULL),
(149, 80, 'Tidak', '2020-03-01', NULL),
(150, 81, 'Ya', '2020-03-01', NULL),
(151, 81, 'Tidak', '2020-03-01', NULL),
(152, 83, 'Ya', '2020-03-01', NULL),
(153, 83, 'Tidak', '2020-03-01', NULL),
(154, 84, 'Tuna Rungu', '2020-03-01', NULL),
(155, 84, 'Tuna Wicara', '2020-03-01', NULL),
(156, 84, 'Tuna Netra', '2020-03-01', NULL),
(157, 84, 'Idiot', '2020-03-01', NULL),
(158, 84, 'Autis', '2020-03-01', NULL),
(159, 84, 'Lumpuh Karena Sakit', '2020-03-01', NULL),
(160, 85, 'Ya', '2020-03-01', NULL),
(161, 85, 'Tidak', '2020-03-01', NULL),
(162, 86, 'Ya', '2020-03-01', NULL),
(163, 86, 'Tidak', '2020-03-01', NULL),
(164, 87, 'BPJS Mandiri', '2020-03-01', NULL),
(165, 87, 'ASKES', '2020-03-01', NULL),
(166, 87, 'KIS/KJS', '2020-03-01', NULL),
(167, 87, 'Swasta', '2020-03-01', NULL),
(168, 88, 'Ya', '2020-03-01', NULL),
(169, 88, 'Tidak', '2020-03-01', NULL),
(170, 89, 'SD', '2020-03-01', NULL),
(171, 89, 'SMP', '2020-03-01', NULL),
(172, 89, 'SMA', '2020-03-01', NULL),
(173, 90, 'Ya', '2020-03-01', NULL),
(174, 90, 'Tidak', '2020-03-01', NULL),
(175, 91, 'Ya', '2020-03-01', NULL),
(176, 91, 'Tidak', '2020-03-01', NULL),
(177, 92, 'Ya', '2020-03-01', NULL),
(178, 92, 'Tidak', '2020-03-01', NULL),
(179, 94, 'Ya', '2020-03-01', NULL),
(180, 94, 'Tidak', '2020-03-01', NULL),
(181, 96, 'Ya', '2020-03-01', NULL),
(182, 96, 'Tidak', '2020-03-01', NULL),
(183, 98, 'Ya', '2020-03-01', NULL),
(184, 98, 'Tidak', '2020-03-01', NULL),
(185, 100, 'Ya', '2020-03-01', NULL),
(186, 100, 'Tidak', '2020-03-01', NULL),
(187, 102, 'Ya', '2020-03-01', NULL),
(188, 102, 'Tidak', '2020-03-01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_kategori`
--

CREATE TABLE `tm_kategori` (
  `id_kategori` smallint(6) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `d_entry` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_kategori`
--

INSERT INTO `tm_kategori` (`id_kategori`, `kategori`, `d_entry`, `id_user_entry`) VALUES
(1, 'Rumah Tinggal', '2020-03-01', NULL),
(2, 'Keluarga', '2020-03-01', NULL),
(3, 'Anggota Keluarga', '2020-03-01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_keluarga`
--

CREATE TABLE `tm_keluarga` (
  `id_keluarga` smallint(6) NOT NULL,
  `id_rumahtinggal` smallint(6) DEFAULT NULL,
  `no_KK` varchar(25) NOT NULL,
  `nama_kepalakeluarga` varchar(50) DEFAULT NULL,
  `d_entry` date DEFAULT NULL,
  `d_edit` date DEFAULT NULL,
  `d_delete` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL,
  `id_user_edit` smallint(6) DEFAULT NULL,
  `id_user_delete` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_keluarga`
--

INSERT INTO `tm_keluarga` (`id_keluarga`, `id_rumahtinggal`, `no_KK`, `nama_kepalakeluarga`, `d_entry`, `d_edit`, `d_delete`, `id_user_entry`, `id_user_edit`, `id_user_delete`) VALUES
(1, 1, '12345', 'Yusuf', '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(3, 2, '124567', 'Edi', '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(5, 1, '3114', 'Ruly Rizki Perdana', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_rt`
--

CREATE TABLE `tm_rt` (
  `id_RT` int(11) NOT NULL,
  `Nama_RT` varchar(10) DEFAULT NULL,
  `id_RW` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_rt`
--

INSERT INTO `tm_rt` (`id_RT`, `Nama_RT`, `id_RW`) VALUES
(1, 'RT 1', 1),
(2, 'RT 2', 1),
(3, 'RT 3', 1),
(4, 'RT 4', 1),
(5, 'RT 5', 1),
(6, 'RT 1', 2),
(7, 'RT 2', 2),
(8, 'RT 3', 2),
(9, 'RT 4', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_rumahtinggal`
--

CREATE TABLE `tm_rumahtinggal` (
  `id_rumahtinggal` bigint(20) NOT NULL,
  `no_survey` smallint(6) DEFAULT NULL,
  `no_ktp_kepalarumahtangga` varchar(25) NOT NULL,
  `nama_kepalarumahtangga` varchar(50) DEFAULT NULL,
  `alamat_rumahtinggal` varchar(250) DEFAULT NULL,
  `id_dasawisma` smallint(6) DEFAULT NULL,
  `d_entry` date DEFAULT NULL,
  `d_edit` date DEFAULT NULL,
  `d_delete` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL,
  `id_user_edit` smallint(6) DEFAULT NULL,
  `id_user_delete` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_rumahtinggal`
--

INSERT INTO `tm_rumahtinggal` (`id_rumahtinggal`, `no_survey`, `no_ktp_kepalarumahtangga`, `nama_kepalarumahtangga`, `alamat_rumahtinggal`, `id_dasawisma`, `d_entry`, `d_edit`, `d_delete`, `id_user_entry`, `id_user_edit`, `id_user_delete`) VALUES
(1, 1, '122345', 'Yusuf', 'Jl Cicendo', 1, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(2, 2, '1345', 'Rahman', 'Awani', 2, '2020-03-01', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_rw`
--

CREATE TABLE `tm_rw` (
  `id_RW` int(11) NOT NULL,
  `nama_RW` varchar(10) DEFAULT NULL,
  `id_wilayah` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_rw`
--

INSERT INTO `tm_rw` (`id_RW`, `nama_RW`, `id_wilayah`) VALUES
(1, 'RW 1', 3273061001),
(2, 'RW 2', 3273061001),
(3, 'RW 3', 3273061001),
(4, 'RW 4', 3273061001),
(5, 'RW 5', 3273061001),
(6, 'RW 1', 3273061003),
(7, 'RW 2', 3273061003),
(8, 'RW 3', 3273061003),
(9, 'RW 4', 3273061003),
(10, 'RW 5', 3273061003);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_usergroups`
--

CREATE TABLE `tm_usergroups` (
  `id_group` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `group_description` varchar(255) DEFAULT NULL,
  `area` enum('Pusat','Provinsi','KotaKab','Kecamatan','Kelurahan','Dasawisma') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_usergroups`
--

INSERT INTO `tm_usergroups` (`id_group`, `name`, `description`, `group_description`, `area`) VALUES
(1, 'petugas-dasawisma', 'Petugas Dasawisma', 'Entry Data Hasil Survey', 'Dasawisma'),
(2, 'admin-pkk-kelurahan', 'Admin TP PKK Kelurahan', 'Create RT, RW dan Kelompok Dasawisma, Create User Dasawisma, View Laporan untuk area dibawahnya, Entry Data Hasil Survey', 'Kelurahan'),
(3, 'anggota-pkk-kelurahan', 'Anggota TP PKK Kelurahan', 'View Laporan untuk area dibawahnya, Entry Data Hasil Survey', 'Kelurahan'),
(4, 'admin-pkk-kecamatan', 'Admin TP PKK Kecamatan', 'View Laporan untuk area dibawahnya, Create Admin TP PKK Kelurahan', 'Kecamatan'),
(5, 'anggota-pkk-kecamatan', 'Anggota TP PKK Kecamatan', 'View Laporan untuk area dibawahnya', 'Kecamatan'),
(6, 'admin-pkk-kotakabupaten', 'Admin TP PKK Kota Kabupaten', 'View Laporan untuk area dibawahnya, Pengajuan Variabel Data baru, Create Admin TP PKK Kecamatan', 'KotaKab'),
(7, 'anggota-pkk-kotakabupaten', 'Anggota TP PKK Kota Kabupaten', 'View Laporan untuk area dibawahnya', 'KotaKab'),
(8, 'admin-pkk-provinsi', 'Admin TP PKK Provinsi', 'View Laporan untuk area dibawahnya, Create Variabel Data baru, Create Admin TP PKK Kota Kabupaten', 'Provinsi'),
(9, 'anggota-pkk-provinsi', 'Anggota TP PKK Provinsi', 'View Laporan untuk area dibawahnya', 'Provinsi'),
(10, 'admin-pkk-pusat', 'Admin TP PKK Provinsi', 'View Laporan untuk area dibawahnya', 'Pusat'),
(11, 'administrator', 'Administrator', NULL, 'Pusat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_users`
--

CREATE TABLE `tm_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_group` smallint(6) DEFAULT NULL,
  `d_created` datetime DEFAULT NULL,
  `id_wilayah` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_users`
--

INSERT INTO `tm_users` (`id_user`, `username`, `password`, `id_group`, `d_created`, `id_wilayah`) VALUES
(1, 'adminpusat', 'apaaja', 10, '2020-03-27 19:43:17', 0),
(2, 'adminprovjabar', 'apaaja', 8, '2020-03-27 19:44:54', 32),
(3, 'anggotaprovjabar', 'apaaja', 9, '2020-03-27 19:47:31', 32),
(4, 'adminkotabandung', 'apaaja', 6, '2020-03-27 19:48:23', 3273),
(5, 'adminkeccicendo', 'apaaja', 4, '2020-03-29 17:13:36', 327306),
(6, 'adminkelhusen', 'apaaja', 2, '2020-03-29 17:14:39', 3273061001),
(7, 'dasawismamawar', 'apaaja', 1, '2020-03-29 17:15:47', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_variabel`
--

CREATE TABLE `tm_variabel` (
  `id_variabel` smallint(6) NOT NULL,
  `id_kategori` smallint(6) NOT NULL,
  `variabel` varchar(255) NOT NULL,
  `tipe_jawaban` enum('Multiple Choice','Esay Tipe Date','Esay Tipe Text','Esay Tipe Numeric','Opsional') NOT NULL,
  `kategori1` enum('Anggota Keluarga','Keluarga','Rumah Tinggal') NOT NULL DEFAULT 'Anggota Keluarga',
  `kategori2` enum('Industri','UP2K','PTP','Umum') NOT NULL,
  `d_entry` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_variabel`
--

INSERT INTO `tm_variabel` (`id_variabel`, `id_kategori`, `variabel`, `tipe_jawaban`, `kategori1`, `kategori2`, `d_entry`, `id_user_entry`) VALUES
(1, 1, 'NOP (Nomor Objek Pajak pada PBB)', 'Esay Tipe Text', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(2, 1, 'Status Rumah Tinggal', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(3, 1, 'Sertifikat Tanah (untuk rumah milik pribadi)', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(4, 1, 'Makanan Pokok Sehari-hari', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(5, 1, 'Jika bukan Beras, makanan pokoknya', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(6, 1, 'Penerapan menu B2SA Sehari-hari', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(7, 1, 'Jumlah Lantai Rumah Tinggal', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(8, 1, 'Kriteria Rumah', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(9, 1, 'Penerangan Rumah', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(10, 1, 'Jenis Penerangan', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(11, 1, 'Mempunyai Jamban Keluarga', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(12, 1, 'Memiliki Tempat Pembuangan Sampah', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(13, 1, 'Pilah Sampah Rumah Tangga', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(14, 1, 'Komposting', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(15, 1, 'Mempunyai Saluran Pembuangan Air Limbah', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(16, 1, 'Lubang Serapan Biopori', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(17, 1, 'Jumlah Lubang', 'Esay Tipe Numeric', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(18, 1, 'Menempel Stiker P4K', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(19, 1, 'Sumber Air Keluarga', 'Opsional', 'Rumah Tinggal', 'Umum', '2020-03-01', NULL),
(20, 1, 'Peternakan', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(21, 1, 'Komoditi Peternakan', 'Multiple Choice', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(22, 1, 'Perikanan', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(23, 1, 'Komoditi Perikanan', 'Multiple Choice', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(24, 1, 'Lumbung Hidup', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(25, 1, 'Komoditi Lumbung Hidup', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(26, 1, 'Warung Hidup', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(27, 1, 'Komoditi Warung Hidup', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(28, 1, 'Apotik Hidup (TOGA)', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(29, 1, 'Komoditi TOGA', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(30, 1, 'Tanaman Produktif', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(31, 1, 'Komoditi Tanaman Produktif', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(32, 1, 'Tanaman Keras atau Pelindung', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(33, 1, 'Komoditi Tanaman Keras atau Pelindung', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(34, 1, 'Tanaman Hias', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(35, 1, 'Komoditi Tanaman Hias', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(36, 1, 'Tanaman Buah Dalam Pot (Tabulapot)', 'Opsional', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(37, 1, 'Komoditi Tanaman Tabulapot', 'Esay Tipe Text', 'Rumah Tinggal', 'PTP', '2020-03-01', NULL),
(38, 1, 'Pangan', 'Opsional', 'Rumah Tinggal', 'Industri', '2020-03-01', NULL),
(39, 1, 'Komoditi Pangan', 'Esay Tipe Text', 'Rumah Tinggal', 'Industri', '2020-03-01', NULL),
(40, 1, 'Sandang', 'Opsional', 'Rumah Tinggal', 'Industri', '2020-03-01', NULL),
(41, 1, 'Komoditi Sandang', 'Esay Tipe Text', 'Rumah Tinggal', 'Industri', '2020-03-01', NULL),
(42, 1, 'Jasa', 'Opsional', 'Rumah Tinggal', 'Industri', '2020-03-01', NULL),
(43, 1, 'Komoditi Jasa', 'Esay Tipe Text', 'Rumah Tinggal', 'Industri', '2020-03-01', NULL),
(44, 1, 'Warung', 'Opsional', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(45, 1, 'Komoditi Warung', 'Esay Tipe Text', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(46, 1, 'Jasa', 'Opsional', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(47, 1, 'Komoditi Jasa', 'Esay Tipe Text', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(48, 1, 'Kerajinan', 'Opsional', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(49, 1, 'Komoditi Kerajinan', 'Esay Tipe Text', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(50, 1, 'Jahit', 'Opsional', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(51, 1, 'Komoditi Jahit', 'Esay Tipe Text', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(52, 1, 'UP2K - Lain-lain', 'Opsional', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(53, 1, 'Komoditi UP2K - Lain-lain', 'Esay Tipe Text', 'Rumah Tinggal', 'UP2K', '2020-03-01', NULL),
(54, 2, 'Jumlah Anggota Keluarga', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(55, 2, 'Jumlah Anggota Keluarga - Laki2', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(56, 2, 'Jumlah Anggota Keluarga - Perempuan', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(57, 2, 'Jumlah Balita', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(58, 2, 'Jumlah PUS', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(59, 2, 'Jumlah WUS', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(60, 2, 'Jumlah Ibu Hamil', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(61, 2, 'Jumlah Ibu Menyusui', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(62, 2, 'Jumlah Lansia', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(63, 2, 'Jumlah 3 Buta', 'Esay Tipe Numeric', 'Keluarga', 'Umum', '2020-03-01', NULL),
(64, 3, 'Status Perkawinan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(65, 3, 'Apakah Memiliki Buku Nikah', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(66, 3, 'Agama', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(67, 3, 'Pendidikan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(68, 3, 'Pekerjaan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(69, 3, 'Kelompok Pendapatan Bulanan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(70, 3, 'Status Ibu (jika warga Istri/Ibu)', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(71, 3, 'Riwayat Medis Penyakit', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(72, 3, 'Akseptor KB', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(73, 3, 'Jenis Akseptor KB', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(74, 3, 'Aktif Kegiatan Posyandu', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(75, 3, 'Frekuensi', 'Esay Tipe Numeric', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(76, 3, 'Memiliki Tabungan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(77, 3, 'Mengikuti Kelompok Belajar', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(78, 3, 'Jenis Kelompok Belajar', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(79, 3, 'Mengikuti Bina Keluarga Balita', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(80, 3, 'Mengikuti PAUD/Sejenis', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(81, 3, 'Mengikuti Koperasi', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(82, 3, 'Jenis Koperasi', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(83, 3, 'Disabilitas', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(84, 3, 'Jenis Disabilitas', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(85, 3, 'Memiliki Akte Kelahiran', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(86, 3, 'Kepesertaan Asuransi Kesehatan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(87, 3, 'Jenis Kepesertaan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(88, 3, 'Memiliki KJP', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(89, 3, 'Jenis KJP', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(90, 3, 'Memiliki Kartu Lansia', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(91, 3, 'Memiliki Kartu Keluarga Harapan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(92, 3, 'Penghayatan dan Pengamalan Pancasila', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(93, 3, 'Jenis Kegiatan Penghayatan dan Pengamalan Pancasila', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(94, 3, 'Kerja Bakti', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(95, 3, 'Jenis Kegiatan Kerja Bakti', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(96, 3, 'Rukun Kematian', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(97, 3, 'Jenis Kegiatan Rukun Kematian', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(98, 3, 'Kegiatan Keagamaan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(99, 3, 'Jenis Kegiatan Keagamaan', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(100, 3, 'Arisan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(101, 3, 'Jenis Kegiatan Arisan', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(102, 3, 'Jimpitan', 'Opsional', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL),
(103, 3, 'Jenis Kegiatan Jimpitan', 'Esay Tipe Text', 'Anggota Keluarga', 'Umum', '2020-03-01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_wilayah`
--

CREATE TABLE `tm_wilayah` (
  `id_wilayah` bigint(20) NOT NULL,
  `code` varchar(15) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `datatype` varchar(10) DEFAULT NULL,
  `level` smallint(6) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_wilayah`
--

INSERT INTO `tm_wilayah` (`id_wilayah`, `code`, `title`, `datatype`, `level`, `parent_id`) VALUES
(32, '32', 'Jawa Barat', 'Provinsi', 1, NULL),
(3201, '3201', 'Kab. Bogor', 'Kabupaten', 2, 32),
(3202, '3202', 'Kab. Sukabumi', 'Kabupaten', 2, 32),
(3203, '3203', 'Kab. Cianjur', 'Kabupaten', 2, 32),
(3204, '3204', 'Kab. Bandung', 'Kabupaten', 2, 32),
(3205, '3205', 'Kab. Garut', 'Kabupaten', 2, 32),
(3206, '3206', 'Kab. Tasikmalaya', 'Kabupaten', 2, 32),
(3207, '3207', 'Kab. Ciamis', 'Kabupaten', 2, 32),
(3208, '3208', 'Kab. Kuningan', 'Kabupaten', 2, 32),
(3209, '3209', 'Kab. Cirebon', 'Kabupaten', 2, 32),
(3211, '3211', 'Kab. Sumedang', 'Kabupaten', 2, 32),
(3212, '3212', 'Kab. Indramayu', 'Kabupaten', 2, 32),
(3213, '3213', 'Kab. Subang', 'Kabupaten', 2, 32),
(3214, '3214', 'Kab. Purwakarta', 'Kabupaten', 2, 32),
(3215, '3215', 'Kab. Karawang', 'Kabupaten', 2, 32),
(3216, '3216', 'Kab. Bekasi', 'Kabupaten', 2, 32),
(3217, '3217', 'Kab. Bandung Barat', 'Kabupaten', 2, 32),
(3218, '3218', 'Kab. Pangandaran', 'Kabupaten', 2, 32),
(3271, '3271', 'Kota Bogor', 'Kota', 2, 32),
(3272, '3272', 'Kota Sukabumi', 'Kabupaten', 2, 32),
(3273, '3273', 'Kota Bandung', 'Kota', 2, 32),
(3274, '3274', 'Kota Cirebon', 'Kota', 2, 32),
(3275, '3275', 'Kota Bekasi', 'Kota', 2, 32),
(3276, '3276', 'Kota Depok', 'Kota', 2, 32),
(3277, '3277', 'Kota Cimahi', 'Kota', 2, 32),
(3278, '3278', 'Kota Tasikmalaya', 'Kota', 2, 32),
(3279, '3279', 'Kota Banjar', 'Kota', 2, 32),
(327301, '327301', 'Sukasari', 'Kecamatan', 3, 3273),
(327302, '327302', 'Coblong', 'Kecamatan', 3, 3273),
(327303, '327303', 'Babakan Ciparay', 'Kecamatan', 3, 3273),
(327304, '327304', 'Bojongloa Kaler', 'Kecamatan', 3, 3273),
(327305, '327305', 'Andir', 'Kecamatan', 3, 3273),
(327306, '327306', 'Cicendo', 'Kecamatan', 3, 3273),
(327307, '327307', 'Sukajadi', 'Kecamatan', 3, 3273),
(327308, '327308', 'Cidadap', 'Kecamatan', 3, 3273),
(327309, '327309', 'Bandung Wetan', 'Kecamatan', 3, 3273),
(327310, '327310', 'Astana Anyar', 'Kecamatan', 3, 3273),
(327311, '327311', 'Regol', 'Kecamatan', 3, 3273),
(327312, '327312', 'Batununggal', 'Kecamatan', 3, 3273),
(327313, '327313', 'Lengkong', 'Kecamatan', 3, 3273),
(327314, '327314', 'Cibeunying Kidul', 'Kecamatan', 3, 3273),
(327315, '327315', 'Bandung Kulon', 'Kecamatan', 3, 3273),
(327316, '327316', 'Kiaracondong', 'Kecamatan', 3, 3273),
(327317, '327317', 'Bojongloa Kidul', 'Kecamatan', 3, 3273),
(327318, '327318', 'Cibeunying Kaler', 'Kecamatan', 3, 3273),
(327319, '327319', 'Sumur Bandung', 'Kecamatan', 3, 3273),
(327320, '327320', 'Antapani', 'Kecamatan', 3, 3273),
(327321, '327321', 'Bandung Kidul', 'Kecamatan', 3, 3273),
(327322, '327322', 'Buahbatu', 'Kecamatan', 3, 3273),
(327323, '327323', 'Rancasari', 'Kecamatan', 3, 3273),
(327324, '327324', 'Arcamanik', 'Kecamatan', 3, 3273),
(327325, '327325', 'Cibiru', 'Kecamatan', 3, 3273),
(327326, '327326', 'Ujungberung', 'Kecamatan', 3, 3273),
(327327, '327327', 'Gedebage', 'Kecamatan', 3, 3273),
(327328, '327328', 'Panyileukan', 'Kecamatan', 3, 3273),
(327329, '327329', 'Cinambo', 'Kecamatan', 3, 3273),
(327330, '327330', 'Mandalajati', 'Kecamatan', 3, 3273),
(3273061001, '3273061001', 'Husen Sastranegara', 'Kelurahan', 4, 327306),
(3273061002, '3273061002', 'Arjuna', 'Kelurahan', 4, 327306),
(3273061003, '3273061003', 'Pajajaran', 'Kelurahan', 4, 327306),
(3273061004, '3273061004', 'Pasir Kaliki', 'Kelurahan', 4, 327306),
(3273061005, '3273061005', 'Pamoyanan', 'Kelurahan', 4, 327306),
(3273061006, '3273061006', 'Sukaraja', 'Kelurahan', 4, 327306);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_wilayahterkecil`
--

CREATE TABLE `tm_wilayahterkecil` (
  `id_wilayahterkecil` bigint(20) NOT NULL,
  `code` varchar(15) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `datatype` varchar(10) DEFAULT NULL,
  `level` smallint(6) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_wilayahterkecil`
--

INSERT INTO `tm_wilayahterkecil` (`id_wilayahterkecil`, `code`, `title`, `datatype`, `level`, `parent_id`) VALUES
(1, '1', 'RW 1', 'RW', 5, 3273061001),
(2, '2', 'RW 2', 'RW', 5, 3273061001),
(3, '3', 'RW 3', 'RW', 5, 3273061001),
(4, '4', 'RW 4', 'RW', 5, 3273061001),
(5, '5', 'RW 5', 'RW', 5, 3273061001),
(6, '6', 'RT 1', 'RT', 6, 1),
(7, '7', 'RT 2', 'RT', 6, 1),
(8, '8', 'RT 3', 'RT', 6, 1),
(9, '9', 'RT 4', 'RT', 6, 1),
(10, '10', 'RT 5', 'RT', 6, 1),
(11, '11', 'Mawar', 'Dasawisma', 7, 6),
(12, '12', 'Melati', 'Dasawisma', 7, 6),
(13, '13', 'Anyelir', 'Dasawisma', 7, 6),
(14, '14', 'RW 1', 'RW', 5, 3273061002),
(15, '15', 'RW 2', 'RW', 5, 3273061002),
(16, '16', 'RW 3', 'RW', 5, 3273061002),
(17, '17', 'RT 1', 'RT', 6, 14),
(18, '18', 'RT 2', 'RT', 6, 14),
(19, '19', 'RT 3', 'RT', 6, 14),
(20, '20', 'RT 1', 'RT', 6, 17),
(21, '21', 'RT 2', 'RT', 6, 17),
(22, '22', 'RT 3', 'RT', 6, 17),
(23, '23', 'Anggrek', 'Dasawisma', 7, 20),
(24, '24', 'Tulip', 'Dasawisma', 7, 20),
(25, '25', 'Bakung', 'Dasawisma', 7, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_anggotakeluarga`
--

CREATE TABLE `tr_anggotakeluarga` (
  `tr_anggotakeluarga` smallint(6) NOT NULL,
  `id_anggotakeluarga` smallint(6) DEFAULT NULL,
  `id_variabel` smallint(6) DEFAULT NULL,
  `id_opsional` smallint(6) DEFAULT NULL,
  `esay_numeric` smallint(6) DEFAULT NULL,
  `esay_text` varchar(255) DEFAULT NULL,
  `esay_date` date DEFAULT NULL,
  `id_multipel` smallint(6) DEFAULT NULL,
  `d_entry` date DEFAULT NULL,
  `d_edit` date DEFAULT NULL,
  `d_delete` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL,
  `id_user_edit` smallint(6) DEFAULT NULL,
  `id_user_delete` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tr_anggotakeluarga`
--

INSERT INTO `tr_anggotakeluarga` (`tr_anggotakeluarga`, `id_anggotakeluarga`, `id_variabel`, `id_opsional`, `esay_numeric`, `esay_text`, `esay_date`, `id_multipel`, `d_entry`, `d_edit`, `d_delete`, `id_user_entry`, `id_user_edit`, `id_user_delete`) VALUES
(1, 1, 64, 80, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(2, 1, 65, 83, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(3, 1, 66, 85, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(4, 1, 67, 91, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(5, 1, 68, 98, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(6, 2, 64, 80, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(7, 2, 65, 83, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(8, 2, 66, 85, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(9, 2, 67, 91, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(10, 2, 68, 99, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_keluarga`
--

CREATE TABLE `tr_keluarga` (
  `tr_keluarga` smallint(6) NOT NULL,
  `id_keluarga` smallint(6) DEFAULT NULL,
  `id_variabel` smallint(6) DEFAULT NULL,
  `id_opsional` smallint(6) DEFAULT NULL,
  `esay_numeric` smallint(6) DEFAULT NULL,
  `esay_text` varchar(255) DEFAULT NULL,
  `esay_date` date DEFAULT NULL,
  `id_multiple` smallint(6) DEFAULT NULL,
  `d_entry` date DEFAULT NULL,
  `d_edit` date DEFAULT NULL,
  `d_delete` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL,
  `id_user_edit` smallint(6) DEFAULT NULL,
  `id_user_delete` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tr_keluarga`
--

INSERT INTO `tr_keluarga` (`tr_keluarga`, `id_keluarga`, `id_variabel`, `id_opsional`, `esay_numeric`, `esay_text`, `esay_date`, `id_multiple`, `d_entry`, `d_edit`, `d_delete`, `id_user_entry`, `id_user_edit`, `id_user_delete`) VALUES
(1, 1, 54, NULL, 3, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(2, 1, 55, NULL, 2, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(3, 1, 56, NULL, 1, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(4, 1, 57, NULL, 1, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(5, 1, 58, NULL, 1, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(6, 2, 54, NULL, 2, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(7, 2, 55, NULL, 1, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(8, 2, 56, NULL, 1, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(9, 2, 57, NULL, 1, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_rumahtinggal`
--

CREATE TABLE `tr_rumahtinggal` (
  `tr_rumahtinggal` smallint(6) NOT NULL,
  `id_rumahtinggal` smallint(6) DEFAULT NULL,
  `id_variabel` smallint(6) DEFAULT NULL,
  `id_opsional` smallint(6) DEFAULT NULL,
  `esay_numeric` smallint(6) DEFAULT NULL,
  `esay_text` varchar(200) DEFAULT NULL,
  `esay_date` date DEFAULT NULL,
  `id_multiple` smallint(6) DEFAULT NULL,
  `d_entry` date DEFAULT NULL,
  `d_edit` date DEFAULT NULL,
  `d_delete` date DEFAULT NULL,
  `id_user_entry` smallint(6) DEFAULT NULL,
  `id_user_edit` smallint(6) DEFAULT NULL,
  `id_user_delete` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tr_rumahtinggal`
--

INSERT INTO `tr_rumahtinggal` (`tr_rumahtinggal`, `id_rumahtinggal`, `id_variabel`, `id_opsional`, `esay_numeric`, `esay_text`, `esay_date`, `id_multiple`, `d_entry`, `d_edit`, `d_delete`, `id_user_entry`, `id_user_edit`, `id_user_delete`) VALUES
(1, 1, 2, 1, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(2, 1, 4, 8, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(3, 1, 8, 20, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(4, 1, 16, 38, NULL, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(5, 1, 17, NULL, 10, '', NULL, NULL, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(6, 1, 21, NULL, NULL, '', NULL, 2, '2020-03-01', NULL, NULL, NULL, NULL, NULL),
(7, 1, 21, NULL, NULL, '', NULL, 3, '2020-03-01', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tm_anggotakeluarga`
--
ALTER TABLE `tm_anggotakeluarga`
  ADD PRIMARY KEY (`id_anggotakeluarga`,`no_KTP`);

--
-- Indeks untuk tabel `tm_dasawisma`
--
ALTER TABLE `tm_dasawisma`
  ADD PRIMARY KEY (`id_dasawisma`);

--
-- Indeks untuk tabel `tm_element`
--
ALTER TABLE `tm_element`
  ADD PRIMARY KEY (`id_element`);

--
-- Indeks untuk tabel `tm_jawaban_multiple`
--
ALTER TABLE `tm_jawaban_multiple`
  ADD PRIMARY KEY (`id_multiple`);

--
-- Indeks untuk tabel `tm_jawaban_opsional`
--
ALTER TABLE `tm_jawaban_opsional`
  ADD PRIMARY KEY (`id_opsional`);

--
-- Indeks untuk tabel `tm_kategori`
--
ALTER TABLE `tm_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tm_keluarga`
--
ALTER TABLE `tm_keluarga`
  ADD PRIMARY KEY (`id_keluarga`,`no_KK`);

--
-- Indeks untuk tabel `tm_rt`
--
ALTER TABLE `tm_rt`
  ADD PRIMARY KEY (`id_RT`);

--
-- Indeks untuk tabel `tm_rumahtinggal`
--
ALTER TABLE `tm_rumahtinggal`
  ADD PRIMARY KEY (`id_rumahtinggal`,`no_ktp_kepalarumahtangga`);

--
-- Indeks untuk tabel `tm_rw`
--
ALTER TABLE `tm_rw`
  ADD PRIMARY KEY (`id_RW`);

--
-- Indeks untuk tabel `tm_usergroups`
--
ALTER TABLE `tm_usergroups`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `tm_users`
--
ALTER TABLE `tm_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tm_variabel`
--
ALTER TABLE `tm_variabel`
  ADD PRIMARY KEY (`id_variabel`);

--
-- Indeks untuk tabel `tm_wilayah`
--
ALTER TABLE `tm_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- Indeks untuk tabel `tm_wilayahterkecil`
--
ALTER TABLE `tm_wilayahterkecil`
  ADD PRIMARY KEY (`id_wilayahterkecil`);

--
-- Indeks untuk tabel `tr_anggotakeluarga`
--
ALTER TABLE `tr_anggotakeluarga`
  ADD PRIMARY KEY (`tr_anggotakeluarga`);

--
-- Indeks untuk tabel `tr_keluarga`
--
ALTER TABLE `tr_keluarga`
  ADD PRIMARY KEY (`tr_keluarga`);

--
-- Indeks untuk tabel `tr_rumahtinggal`
--
ALTER TABLE `tr_rumahtinggal`
  ADD PRIMARY KEY (`tr_rumahtinggal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tm_keluarga`
--
ALTER TABLE `tm_keluarga`
  MODIFY `id_keluarga` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
