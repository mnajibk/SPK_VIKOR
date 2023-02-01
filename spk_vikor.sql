-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2023 pada 15.29
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_vikor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kode_alternatif` varchar(255) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `nilai_raport` decimal(5,2) NOT NULL,
  `nilai_ekstrakulikuler` int(11) NOT NULL,
  `nilai_prestasi` int(11) NOT NULL,
  `nilai_sikap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `slug`, `kode_alternatif`, `nama_alternatif`, `kelas`, `nilai_raport`, `nilai_ekstrakulikuler`, `nilai_prestasi`, `nilai_sikap`) VALUES
(1, 'a1', 'A1', 'AHMAD DAVID ALFIYAN MAHMUDZ', '8A', '0.00', 4, 0, 4),
(2, 'a2', 'A2', 'AZRO SHOFIA FATIN', '8A', '100.00', 4, 0, 4),
(3, 'a3', 'A3', 'BURHANUDDIN RAMZI JOHANZAH', '8A', '77.47', 2, 0, 3),
(4, 'a4', 'A4', 'DEWI AISYAH', '8A', '84.91', 2, 0, 3),
(5, 'a5', 'A5', 'IBNU HANAFI SABIL', '8A', '78.72', 2, 0, 3),
(6, 'a6', 'A6', 'JESSICA PUTRI VANESSA', '8A', '82.84', 3, 0, 3),
(7, 'a7', 'A7', 'KEIYLA SAFIRINDA PUTRI', '8A', '84.72', 3, 0, 3),
(8, 'a8', 'A8', 'KHUSNIATUL WIDAD', '8A', '88.47', 3, 0, 3),
(9, 'a9', 'A9', 'M.ALFAN RIZQI MAUALANA', '8A', '83.25', 3, 0, 3),
(10, 'a10', 'A10', 'MOHAMMAD RIZKI ADAM RAFICO', '8A', '85.25', 2, 0, 4),
(11, 'a11', 'A11', 'MUHAMMAD ARIL HAQ', '8A', '85.13', 2, 0, 4),
(12, 'a12', 'A12', 'MUHAMMAD HABIBURRACHMAN FAHRI', '8A', '83.00', 2, 0, 3),
(13, 'a13', 'A13', 'MUHAMMAD ILHAM ARDIANSYAH', '8A', '79.91', 2, 0, 3),
(14, 'a14', 'A14', 'MUHAMMAD NAUFAL', '8A', '83.59', 3, 0, 4),
(15, 'a15', 'A15', 'MUHAMMAD TAQIYUDDIN ANNABHANI', '8A', '83.06', 2, 0, 3),
(16, 'a16', 'A16', 'NARITA SALSA AMANDA', '8A', '84.78', 2, 0, 3),
(17, 'a17', 'A17', 'NOOR MUHAMMAD AKMAL MAULANA', '8A', '87.84', 2, 0, 4),
(18, 'a18', 'A18', 'NUR\'AINI PUTRI DIANA TASYA', '8A', '81.06', 2, 0, 3),
(19, 'a19', 'A19', 'NURUL ANJANI SOFIYANTI', '8A', '85.38', 3, 0, 4),
(20, 'a20', 'A20', 'RETTY NUR FARADISA', '8A', '81.03', 2, 0, 3),
(21, 'a21', 'A21', 'REVA RAHMADANI', '8A', '82.19', 2, 0, 3),
(22, 'a22', 'A22', 'UMI USWATUN HASANAH', '8A', '84.03', 2, 45, 3),
(23, 'a23', 'A23', 'WILDA KURNIAWATI', '8A', '81.03', 2, 0, 3),
(24, 'a24', 'A24', 'ZAHFA AMANDA ALMAGHFIRAH', '8A', '84.03', 3, 0, 3),
(25, 'a25', 'A25', 'FENDY NOVA ARDIANSYAH', '8A', '77.56', 2, 0, 3),
(26, 'a26', 'A26', 'ACHMAT ANDRIA', '8B', '77.94', 2, 0, 3),
(27, 'a27', 'A27', 'AHMAD MUNDHOFAR SAFA\'UDIN', '8B', '80.31', 2, 0, 4),
(28, 'a28', 'A28', 'AHMAD RANGGAYUDHA', '8B', '81.28', 3, 0, 3),
(29, 'a29', 'A29', 'AHMAD RISKY MAULANA', '8B', '78.50', 3, 0, 3),
(30, 'a30', 'A30', 'AISYAH RISQIYAH PUTRI', '8B', '88.28', 3, 0, 4),
(31, 'a31', 'A31', 'ALIYAH SALWA ZAHIRAH', '8B', '87.63', 3, 0, 4),
(32, 'a32', 'A32', 'AMELIA KHUSNUL KHOTIMAH', '8B', '88.56', 2, 0, 4),
(33, 'a33', 'A33', 'AURELIA NUR GESTIAN', '8B', '88.69', 3, 0, 4),
(34, 'a34', 'A34', 'DANY ROSIHAN ANWAR', '8B', '78.47', 2, 0, 3),
(35, 'a35', 'A35', 'FITRI OKTAVIANTI', '8B', '85.03', 2, 0, 3),
(36, 'a36', 'A36', 'HAWA HASANAH', '8B', '89.66', 2, 100, 4),
(37, 'a37', 'A37', 'IBRAHIMOAVIC', '8B', '75.81', 2, 0, 3),
(38, 'a38', 'A38', 'LAZUARDI FIRMANSYAH', '8B', '86.38', 2, 0, 4),
(39, 'a39', 'A39', 'M. SALMAN ALFARISI', '8B', '80.47', 3, 0, 3),
(40, 'a40', 'A40', 'M.WAHYUDI', '8B', '80.38', 3, 0, 3),
(41, 'a41', 'A41', 'MASNING KHUZAIMAH', '8B', '87.50', 2, 0, 4),
(42, 'a42', 'A42', 'MINAHUS SANIYAH NADYA SHAFWAH', '8B', '83.03', 3, 0, 4),
(43, 'a43', 'A43', 'MOH. MA\'RUF ISLAMUDDIN', '8B', '81.16', 3, 0, 3),
(44, 'a44', 'A44', 'MOHAMMAD WIFAQUL AZMI', '8B', '86.41', 3, 0, 4),
(45, 'a45', 'A45', 'MUHAMMAD RIVALDY AL BAIHAQI', '8B', '76.97', 3, 0, 3),
(46, 'a46', 'A46', 'NAILATUN NAJAH AL-ABADIYAH', '8B', '88.16', 2, 0, 4),
(47, 'a47', 'A47', 'NUR LAILI TASKIYAH', '8B', '86.47', 2, 0, 4),
(48, 'a48', 'A48', 'OKNI GUNAWAN', '8B', '83.22', 3, 0, 3),
(49, 'a49', 'A49', 'QOTHRUN NADA FAJRIAH', '8B', '88.69', 3, 0, 4),
(50, 'a50', 'A50', 'RAHMA AULIA TRI AGUSTIN', '8B', '90.03', 2, 0, 4),
(51, 'a51', 'A51', 'REGA ALEK ANTONIO', '8B', '75.91', 2, 0, 3),
(52, 'a52', 'A52', 'SALSA SEPTIANA RAMADANI', '8B', '86.06', 2, 0, 3),
(53, 'a53', 'A53', 'ZAHRA WARDA FIRDAUSI', '8B', '90.41', 2, 0, 4),
(54, 'a54', 'A54', 'ACHMAD REIHAN HASYIM ZHAMID', '8C', '81.88', 3, 0, 3),
(55, 'a55', 'A55', 'ADAM FUAD', '8C', '85.28', 3, 0, 3),
(56, 'a56', 'A56', 'ANZILIA FEBIYANTI', '8C', '83.81', 2, 0, 3),
(57, 'a57', 'A57', 'BADRIYATUN NI\'MAH SUCI', '8C', '90.47', 3, 0, 4),
(58, 'a58', 'A58', 'CAHAYA LESTARI', '8C', '83.09', 2, 0, 3),
(59, 'a59', 'A59', 'DAVINA ILMIYAH SAFITRI', '8C', '87.91', 2, 0, 4),
(60, 'a60', 'A60', 'HALIMATUS SAKDIAH', '8C', '81.25', 2, 0, 3),
(61, 'a61', 'A61', 'HANIFATUZ ZAHRO', '8C', '84.69', 2, 0, 3),
(62, 'a62', 'A62', 'KHOIRO QONITA', '8C', '84.56', 2, 0, 3),
(63, 'a63', 'A63', 'M. IQBAL ADI FIRMANSYAH', '8C', '80.16', 2, 0, 3),
(64, 'a64', 'A64', 'M.ALFIN RIZQI MAUALANA', '8C', '84.25', 3, 0, 3),
(65, 'a65', 'A65', 'M.SHOFI ZAHRY FIRDAUS', '8C', '85.94', 2, 0, 4),
(66, 'a66', 'A66', 'MOH. HILAL ALGHIFARI', '8C', '84.00', 2, 0, 3),
(67, 'a67', 'A67', 'MUHAMMAD ALEVIAN ALKHAFI', '8C', '84.66', 3, 0, 3),
(68, 'a68', 'A68', 'MUHAMMAD AZRIEL ASKANDAR', '8C', '85.09', 3, 0, 3),
(69, 'a69', 'A69', 'MUHAMMAD FIRMAN HUDA', '8C', '86.72', 2, 0, 3),
(70, 'a70', 'A70', 'MUHAMMAD WISNU SUKMA ARIFUDDIN', '8C', '84.94', 3, 0, 4),
(71, 'a71', 'A71', 'NABILA KHOIRUN NISA\'', '8C', '87.16', 3, 0, 4),
(72, 'a72', 'A72', 'NABILAH ZAHRA AMELIYAH', '8C', '89.41', 2, 0, 4),
(73, 'a73', 'A73', 'NANDA KURNIA LILLAH', '8C', '85.59', 2, 0, 4),
(74, 'a74', 'A74', 'NAYLA NAJWA SHOFARINA', '8C', '85.28', 2, 0, 4),
(75, 'a75', 'A75', 'NUR ANISATUL FUADIYAH', '8C', '87.84', 2, 0, 4),
(76, 'a76', 'A76', 'RAMANDA PRASETYA WIJAYA', '8C', '83.03', 3, 0, 3),
(77, 'a77', 'A77', 'SALSABILLAH INDAH PUTRI', '8C', '83.97', 2, 0, 3),
(78, 'a78', 'A78', 'SEKAR AYU ROSYIDAH', '8C', '83.47', 2, 0, 3),
(79, 'a79', 'A79', 'SYAFIRA ROBIATUL ADAWIYAH', '8C', '88.53', 2, 0, 3),
(81, 'a80', 'A80', 'Siswa Berprestasi', '8A', '0.00', 0, 0, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kode_kriteria` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `bobot` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `slug`, `kode_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'c1', 'C1', 'Nilai Raport', '0.50'),
(2, 'c2', 'C2', 'Nilai Ekstrakulikuler', '0.10'),
(3, 'c3', 'C3', 'Nilai Prestasi', '0.15'),
(4, 'c4', 'C4', 'Nilai Sikap', '0.25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `nama_kriteria` (`nama_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
