-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2023 pada 06.27
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(50) NOT NULL,
  `no_binder` varchar(10) NOT NULL,
  `sp` varchar(30) NOT NULL,
  `sp_des` varchar(30) NOT NULL,
  `sp_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `buyer` varchar(30) NOT NULL,
  `vendor` varchar(30) NOT NULL,
  `item` varchar(15) NOT NULL,
  `ldi` varchar(30) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `measure` varchar(30) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `unit_price` varchar(10) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `no_binder`, `sp`, `sp_des`, `sp_date`, `buyer`, `vendor`, `item`, `ldi`, `qty`, `measure`, `currency`, `unit_price`, `total_price`, `remarks`) VALUES
('36444f92-2f4f-4c2c-81e5-34a449119857', 'dsadasdasd', 'asdasd', 'asdas', 'asdas', 'asdasda', 'asdasd', 'asdasd', 'asdasdas', '232', 'sadas', 'asdas', '11', '2', 'asd'),
('385869a2-5f21-44fd-a0d2-6e18bfe153b1', 'dasda', 'asdas', 'asda', 'asdas', 'asdas', 'asdsa', 'asd', 'asdsa', '22', 'dsad', 'asd', '213', '23', 'sada'),
('4d202542-853a-4e78-b874-064846c951a8', 'dasads', 'dasdaads', 'asdsdaa', 'asdsda', 'sdaasd', 'asdsada', 'asd', 'asdasdsda', '12312', 'asddsaa', 'ewqeq', '12231', '123', 'asda'),
('5d6eb9fc-3517-4521-b9b8-dec0ff8873e0', 'APL-2020', 'tel-29', 'Lengkap', '26 Agustus 2020', 'hahaah', 'dataku', '12', 'dataku punyaku', '1', 'dataku', 'dataku', '1,000', '1,000', 'dataku'),
('5f5df8be-afaf-4a55-b0ca-255598db16c1', 'APL-2020', 'ads', 'asd', 'das', 'ads', 'ads', 'das', 'ads', '12', 'asdas', 'sad', '1', '1', 'dsa'),
('a4e933ed-e61a-42d5-89f6-0253e4bbf50a', 'APL-2020', 'tel-29', 'Lengkap', '26 Agustus 2020', 'hahaah', 'dataku', '12', 'dataku punyaku', '1', 'dataku', 'dataku', '1,000', '1,000', 'dataku'),
('af954b39-7e7e-4490-adbc-b7075e27cb8e', 'APL-2020', 'sadads', 'sdaasdasd', 'asdasd', 'asdasdasda', 'dasdasdasd', 'sdaasdads', 'asddasasddsadasda', '12321', 'dassdaasd', 'asddsaasd', '1231', '12321', 'asdsdaads'),
('c8a136e9-d115-42c2-9d4f-f39d9aa4225c', 'APL-2020', 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asdadsa', 'dasdasd', 'asdasd', '1231', 'asdasd', 'asda', '123', '1121', 'dassada'),
('f6aa31ec-0983-43c1-9be5-5b400b378824', 'APL-2020', 'tel-29', 'Lengkap', '26 Agustus 2020', 'hahaah', 'dataku', '12', 'dataku punyaku', '1', 'dataku', 'dataku', '1,000', '1,000', 'dataku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('11f4c850-3104-11ee-9537-201e881467d3', 'abdul', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1'),
('a427c323-40a2-11ee-9a5e-201e881467d3', 'azzam', 'azzam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1'),
('ae590539-40a2-11ee-9a5e-201e881467d3', 'rendyka', 'rendyka', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
