-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 16.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalprojectpbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `ID_KATEGORI` varchar(30) NOT NULL,
  `NAMA_KATEGORI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
('JAR', 'Perangkat Jaringan'),
('KPC', 'Komponen PC'),
('LAC', 'Aksesori Laptop'),
('LUN', 'Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `ID_LAYANAN` varchar(30) NOT NULL,
  `ID_TEKNISI` varchar(30) DEFAULT NULL,
  `NAMA_LAYANAN` varchar(255) NOT NULL,
  `DESKRIPSI_LAYANAN` varchar(1000) NOT NULL,
  `HARGA_LAYANAN` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`ID_LAYANAN`, `ID_TEKNISI`, `NAMA_LAYANAN`, `DESKRIPSI_LAYANAN`, `HARGA_LAYANAN`) VALUES
('D101', 'DR01', 'Pemulihan Data', 'Pemulihan data yang hilang atau terhapus dari hard drive atau SSD.', 300000),
('D102', 'DR01', 'Backup Data', 'Layanan backup data penting ke media penyimpanan eksternal.', 300000),
('H101', 'HW01', 'Penggantian Layar Laptop', 'Penggantian layar laptop yang pecah atau rusak.', 1500000),
('H102', 'HW01', 'Penggantian Keyboard', 'Penggantian keyboard laptop yang rusak atau tidak berfungsi.', 800000),
('H103', 'HW01', 'Perbaikan Motherboard', 'Perbaikan motherboard yang mengalami kerusakan atau gangguan.', 2500000),
('M101', 'AP01', 'Perbaikan dan Upgrade MacBook', 'Perbaikan hardware dan upgrade MacBook.', 3000000),
('M102', 'AP01', 'Instalasi macOS', 'Instalasi ulang atau pembaruan macOS pada MacBook.', 600000),
('N101', 'NT01', 'Setup Jaringan WiFi', 'Instalasi dan konfigurasi jaringan WiFi untuk rumah atau kantor.', 700000),
('S101', 'SW01', 'Instalasi Ulang OS', 'Instalasi ulang sistem operasi untuk memperbaiki masalah software.', 500000),
('S102', 'SW01', 'Penghapusan Virus dan Malware', 'Penghapusan virus, malware, dan spyware dari laptop.', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `ID_ORDER` varchar(30) NOT NULL,
  `TANGGAL_ORDER` date NOT NULL,
  `ID_PENGGUNA` varchar(30) DEFAULT NULL,
  `ID_LAYANAN` varchar(30) DEFAULT NULL,
  `ID_PRODUK` varchar(30) DEFAULT NULL,
  `HARGA_TOTAL` decimal(30,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`ID_ORDER`, `TANGGAL_ORDER`, `ID_PENGGUNA`, `ID_LAYANAN`, `ID_PRODUK`, `HARGA_TOTAL`) VALUES
('O001', '2024-06-14', 'U101', 'D101', NULL, 300000),
('O002', '2024-06-14', 'U102', 'D102', NULL, 300000),
('O003', '2024-06-14', 'U103', 'H101', 'P006', 10500000),
('O004', '2024-06-14', 'U104', 'H102', 'P007', 2300000),
('O005', '2024-06-14', 'U105', 'H103', 'P008', 14500000),
('O006', '2024-06-14', 'U101', 'M101', 'P009', 3800000),
('O007', '2024-06-14', 'U102', 'M102', 'P010', 3000000),
('O008', '2024-06-14', 'U103', 'N101', 'P011', 18700000),
('O009', '2024-06-14', 'U104', 'S101', 'P012', 1300000),
('O010', '2024-06-14', 'U105', 'S102', 'P013', 6400000),
('O011', '2024-06-14', 'U101', 'D101', 'P014', 2300000),
('O012', '2024-06-14', 'U102', 'D102', 'P015', 3300000),
('O013', '2024-06-14', 'U103', 'H103', 'P016', 18500000),
('O014', '2024-06-14', 'U104', 'M101', 'P017', 5500000),
('O015', '2024-06-14', 'U105', 'M102', 'P018', 8600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `ID_DETAIL` varchar(30) NOT NULL,
  `ID_ORDER` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order_details`
--

INSERT INTO `order_details` (`ID_DETAIL`, `ID_ORDER`) VALUES
('OD001', 'O001'),
('OD002', 'O002'),
('OD003', 'O003'),
('OD004', 'O004'),
('OD005', 'O005'),
('OD006', 'O006'),
('OD007', 'O007'),
('OD008', 'O008'),
('OD009', 'O009'),
('OD010', 'O010'),
('OD011', 'O011'),
('OD012', 'O012'),
('OD013', 'O013'),
('OD014', 'O014'),
('OD015', 'O015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `ID_PAYMENT` varchar(30) NOT NULL,
  `ID_DETAIL` varchar(30) DEFAULT NULL,
  `TANGGAL_PAYMENT` date NOT NULL,
  `JUMLAH_PAYMENT` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`ID_PAYMENT`, `ID_DETAIL`, `TANGGAL_PAYMENT`, `JUMLAH_PAYMENT`) VALUES
('P001', 'OD001', '2024-06-14', 300000),
('P002', 'OD002', '2024-06-14', 300000),
('P003', 'OD003', '2024-06-14', 10500000),
('P004', 'OD004', '2024-06-14', 2300000),
('P005', 'OD005', '2024-06-14', 14500000),
('P006', 'OD006', '2024-06-14', 3800000),
('P007', 'OD007', '2024-06-14', 3000000),
('P008', 'OD008', '2024-06-14', 18700000),
('P009', 'OD009', '2024-06-14', 1300000),
('P010', 'OD010', '2024-06-14', 6400000),
('P011', 'OD011', '2024-06-14', 2300000),
('P012', 'OD012', '2024-06-14', 3300000),
('P013', 'OD013', '2024-06-14', 18500000),
('P014', 'OD014', '2024-06-14', 5500000),
('P015', 'OD015', '2024-06-14', 8600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID_PRODUK` varchar(30) NOT NULL,
  `NAMA_PRODUK` varchar(300) NOT NULL,
  `DESKRIPSI_PRODUK` varchar(1000) NOT NULL,
  `HARGA_PRODUK` decimal(30,0) NOT NULL,
  `ID_KATEGORI` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `NAMA_PRODUK`, `DESKRIPSI_PRODUK`, `HARGA_PRODUK`, `ID_KATEGORI`) VALUES
('P002', 'Mouse Wireless Logitech MX Master 3', 'Mouse nirkabel dengan desain ergonomis dan sensor akurat.', 1200000, 'LAC'),
('P003', 'Intel Core i9-10900K', 'Prosesor desktop high-end dengan performa luar biasa untuk gaming dan tugas berat.', 8000000, 'KPC'),
('P004', 'TP-Link Archer C6 Router', 'Router dual-band dengan kecepatan tinggi dan cakupan luas.', 500000, 'JAR'),
('P005', 'Microsoft Office 365 Personal', 'Lisensi perangkat lunak office untuk penggunaan pribadi.', 800000, 'LUN'),
('P006', 'Laptop HP Pavilion 15', 'Laptop ringan dengan desain elegan cocok untuk pekerjaan sehari-hari.', 9000000, 'LAP'),
('P007', 'Logitech G Pro X Keyboard', 'Keyboard mekanis dengan saklar GX Blue yang responsif dan tahan lama.', 1500000, 'LAC'),
('P008', 'Gigabyte GeForce RTX 3080', 'Kartu grafis high-end dengan performa luar biasa untuk gaming dan rendering.', 12000000, 'KPC'),
('P009', 'Ubiquiti UniFi AP AC Lite', 'Access point WiFi dengan kecepatan tinggi dan fitur manajemen jaringan canggih.', 800000, 'JAR'),
('P010', 'Adobe Photoshop CC', 'Perangkat lunak pengeditan foto dan desain grafis profesional.', 2400000, 'LUN'),
('P011', 'Dell XPS 15 9500', 'Laptop ultrabook dengan layar 4K OLED dan performa tinggi.', 18000000, 'LAP'),
('P012', 'Razer DeathAdder Elite Mouse', 'Mouse gaming dengan sensor optik 16.000 DPI dan ergonomi yang nyaman.', 800000, 'LAC'),
('P013', 'AMD Ryzen 9 5900X', 'Prosesor desktop kelas atas dengan 12 core dan performa multi-thread yang luar biasa.', 6000000, 'KPC'),
('P014', 'Linksys Velop Mesh WiFi System', 'Sistem mesh WiFi dengan cakupan luas untuk rumah atau kantor.', 2000000, 'JAR'),
('P015', 'Windows 10 Pro', 'Lisensi sistem operasi Windows 10 untuk kebutuhan bisnis dan profesional.', 3000000, 'LUN'),
('P016', 'MacBook Air M1', 'Laptop ultrabook Apple dengan chip M1 yang cepat dan efisien.', 16000000, 'LAP'),
('P017', 'Corsair K95 RGB Platinum XT Keyboard', 'Keyboard gaming mekanis premium dengan lampu RGB dan tombol makro.', 2500000, 'LAC'),
('P018', 'NVIDIA GeForce RTX 3070', 'Kartu grafis gaming dengan performa yang sangat baik untuk resolusi tinggi.', 8000000, 'KPC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `ID_TEKNISI` varchar(30) NOT NULL,
  `NAMA_TEKNISI` varchar(50) NOT NULL,
  `EMAIL_TEKNISI` varchar(50) NOT NULL,
  `NO_HP` varchar(50) NOT NULL,
  `SPESIALISASI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`ID_TEKNISI`, `NAMA_TEKNISI`, `EMAIL_TEKNISI`, `NO_HP`, `SPESIALISASI`) VALUES
('AP01', 'Risky Aditya', 'riskyaditya@gmail.com', '856739123', 'Apple Macbook'),
('DR01', 'Anton Sugiarto', 'antonsugi@gmail.com', '856328977', 'Data Recovery'),
('HW01', 'Fajar Hidayat', 'fajarhidayat@gmail.com', '896733849', 'Hardware'),
('NT01', 'Satria Pratama', 'satriatama@gmail.com', '851236777', 'Networking'),
('SW01', 'Fahri Gunawan', 'gunawanfahri@gmail.com', '899986328', 'Software');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `ID_PENGGUNA` varchar(30) NOT NULL,
  `NAMA_PENGGUNA` varchar(50) NOT NULL,
  `EMAIL_PENGGUNA` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID_PENGGUNA`, `NAMA_PENGGUNA`, `EMAIL_PENGGUNA`, `PASSWORD`) VALUES
('U101', 'Belda Putri', 'beldaputri@gmail.com', 'bld010508'),
('U102', 'Annisa Mutia', 'annisamutia@gmail.com', 'annisamutia123'),
('U103', 'Putri Nurdiana', 'putrinurdiana@gmail.com', 'putri0909'),
('U104', 'Fairuz Zairah Abista', 'zairahfa@gmail.com', 'zairah321'),
('U105', 'Assifa Khairunnisa', 'assifa@gmail.com', 'assifa145');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`ID_LAYANAN`),
  ADD KEY `ID_TEKNISI` (`ID_TEKNISI`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_ORDER`),
  ADD KEY `ID_PENGGUNA` (`ID_PENGGUNA`),
  ADD KEY `ID_LAYANAN` (`ID_LAYANAN`),
  ADD KEY `ID_PRODUK` (`ID_PRODUK`);

--
-- Indeks untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID_DETAIL`),
  ADD KEY `ID_ORDER` (`ID_ORDER`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID_PAYMENT`),
  ADD KEY `ID_DETAIL` (`ID_DETAIL`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_PRODUK`),
  ADD KEY `ID_KATEGORI` (`ID_KATEGORI`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`ID_TEKNISI`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_PENGGUNA`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`ID_TEKNISI`) REFERENCES `teknisi` (`ID_TEKNISI`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ID_PENGGUNA`) REFERENCES `users` (`ID_PENGGUNA`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ID_LAYANAN`) REFERENCES `layanan` (`ID_LAYANAN`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`ID_PRODUK`) REFERENCES `produk` (`ID_PRODUK`);

--
-- Ketidakleluasaan untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`ID_ORDER`) REFERENCES `orders` (`ID_ORDER`);

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`ID_DETAIL`) REFERENCES `order_details` (`ID_DETAIL`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
