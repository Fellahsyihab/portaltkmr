-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 09:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tkmr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_about`
--

CREATE TABLE `admin_about` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_berita`
--

CREATE TABLE `admin_berita` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_manrisk`
--

CREATE TABLE `admin_manrisk` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `nama`, `icon`, `url`) VALUES
(46, 'Banner', 'fa-sharp fa-solid fa-images', 'banner_image'),
(47, 'Sekilas Tentang TKMR', 'fa-regular fa-address-card', 'skls_tkmr'),
(49, 'Poster', 'fa-sharp fa-solid fa-images', 'pstr_tkmr'),
(50, 'Team', 'fa-solid fa-people-group', 'krywn_tkmr'),
(51, 'E-Learning', 'fa-sharp fa-regular fa-file-video', 'elrn_tkmr'),
(52, 'Produk PUSRI', 'fa-solid fa-shop', 'prdk_tkmr'),
(53, 'Kabar TKMR', 'fa-regular fa-newspaper', 'kbr_tkmr');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambardua` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `text`, `gambar`, `gambardua`, `foto`) VALUES
(55, 'GOVERNANCE & RISK MANAGEMENT', 'kantor82.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `elrn_tkmr`
--

CREATE TABLE `elrn_tkmr` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elrn_tkmr`
--

INSERT INTO `elrn_tkmr` (`id`, `judul`, `link`, `image`) VALUES
(2, 'SLANK', 'https://www.youtube.com/watch?v=-XOQt2zLm3o', 'Slank_Poster4.jpg'),
(4, 'DEWA 19', 'https://www.veed.io/view/3ba74e22-215f-43fd-9014-b7f1ca1a6c02?sharingWidget=true&panel=', 'Dewa_191.jpeg'),
(6, 'PROFILE PUSRI', 'https://www.youtube.com/watch?v=Ztw4FIC-aX0', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kbr_tkmr`
--

CREATE TABLE `kbr_tkmr` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `isi` mediumtext NOT NULL,
  `pembuat` varchar(100) NOT NULL,
  `waktu` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kbr_tkmr`
--

INSERT INTO `kbr_tkmr` (`id`, `judul`, `slug`, `isi`, `pembuat`, `waktu`, `gambar`) VALUES
(9, 'VIRAL.!, KAK JIMMY MENYATAKAN CINTA NYA KE PACAR NYA', 'ROMANCE', '<p><em>Kejadian ini sangat menegangkan bagi karyawan <strong>PT.PUPUK SRIWIDJAJA PALEMBANG</strong>, terutama anggota departemen Tata Kelola & Manajemen Risiko kejadian ini berlangsung pada hari sabtu weekend, yang di mana <strong>\"Jimmy Candra\"</strong> Menyatakan cinta nya di Palembang Square Mall yang di saksikan banyak orang, Sehingga momen ini Viral di media sosial dan mendapatkan banyak view sehingga FYP di TikTok, dan pihak Departemen HUMAS menbagikan momen ini ke Instagram <strong>PUSRI</strong>, untuk video selengkap nya lihat di Instagram <strong>PUSRI.</strong></em></p>', 'MBAK SEPTY', 1687511596, 'Bro_Jimmy2411.jpeg'),
(13, 'Mahasiswa Polsri Membuat Profile Departemen TKMR Berbasis Website', 'MAGANG', '<p>Mahasiswa Politeknik Negeri Sriwijaya Jurusan D4 Manajemen Informatika, ber-inovasi membuat profile untuk mempermudah pihak departemen TKMR membuat media informasi baik itu Infomasi,Pupuk,Karyawan,dan media Berita, Mahasiswa Polsri ini terdiri dari dua orang yang bernama, <strong>MUHAMMAD AGUNG PRATAMA & M. TRI OKTA DIANSYAH, </strong>mereka menyelesaikan Projek dari bulan Maret sampai Juli sebagai hasil output Magang di Departemen TKMR.</p>', 'ADMIN', 1688285101, 'POSTER.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `krywn_tkmr`
--

CREATE TABLE `krywn_tkmr` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krywn_tkmr`
--

INSERT INTO `krywn_tkmr` (`id`, `nama`, `jabatan`, `image`) VALUES
(6, 'AMIR HAMZAH', 'VP TATA KELOLA & MANAJEMEN RISIKO', 'Pak_Amir12.jpeg'),
(7, 'M.Randy A.', 'AVP MANAJEMEN RISIKO', 'Randy_Anugrah.jpg'),
(8, 'SEPTY HANDAYANI', 'AVP TATA KELOLA PERUSAHAAN', 'Mbak_Septy.jpeg'),
(12, 'AMANCIK', 'AVP KESEKRETARIATAN DAN PELAPORAN', 'pak_amanciks1.jpg'),
(15, 'HENDI A LESMANA', 'OFFICER ANALISIS RISIKO', 'HENDI_31.jpeg'),
(16, 'ADE LIA DIAN S', 'OFFICER ANALISIS RISIKO', 'Mbak_Adel1.jpeg'),
(17, 'JIMMY CHANDRA', 'OFFICER TATA KELOLA PERUSAHAAN', 'Bro_Jimmy111.jpeg'),
(18, 'RACHMAWATI OKTAVIA', 'OFFICER TATA KELOLA PERUSAHAAN', 'mbak_Rachma.png'),
(19, 'MUHAMMAD RIDUAN', 'OFFICER KESEKRETARIATAN DAN PELAPORAN', 'bang_wan1.jpeg'),
(20, 'ANDIKA PUTRA', 'OFFICER KESEKRETARIATAN DAN PELAPORAN', 'Andika.jpeg'),
(21, 'Ali Rahman', 'OFFICER KESEKRETARIATAN DAN PELAPORAN', 'kk_ali1.png'),
(22, 'YULIA FALINTINA', 'ADMIN DOF', 'mbak_yuls1.jpg'),
(23, 'LISCA PRESILIA', 'SEKRETARIS MANAJER TKMR', 'mbak_lisca1.jpg'),
(24, 'CHIKA ADHELINA', 'ADMIN RISIKO', 'Chika1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `phrg_tkmr`
--

CREATE TABLE `phrg_tkmr` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `thn1` varchar(100) NOT NULL,
  `thn2` varchar(100) NOT NULL,
  `thn3` varchar(100) NOT NULL,
  `thn4` varchar(100) NOT NULL,
  `judul1` varchar(2000) NOT NULL,
  `judul2` varchar(100) NOT NULL,
  `judul3` varchar(100) NOT NULL,
  `judul4` varchar(100) NOT NULL,
  `text1` varchar(2000) NOT NULL,
  `text2` varchar(2000) NOT NULL,
  `text3` varchar(2000) NOT NULL,
  `text4` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phrg_tkmr`
--

INSERT INTO `phrg_tkmr` (`id`, `gambar`, `gambar2`, `thn1`, `thn2`, `thn3`, `thn4`, `judul1`, `judul2`, `judul3`, `judul4`, `text1`, `text2`, `text3`, `text4`) VALUES
(10, '', '', '2021', '2022', '2023', '2024', 'PENGHARGAAN KE SATU TKMR', 'PENGHARGAAN KE DUA TKMR', 'PENGHARGAAN KE TIGA TKMR', 'PENGHARGAAN KE EMPAT TKMR', 'TKMR MERAIH KE SUKSESAN', 'TKMR MERAIH KE SUKSESAN', 'TKMR MERAIH KE SUKSESAN', 'TKMR MERAIH KE SUKSESAN');

-- --------------------------------------------------------

--
-- Table structure for table `prdk_tkmr`
--

CREATE TABLE `prdk_tkmr` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prdk_tkmr`
--

INSERT INTO `prdk_tkmr` (`id`, `judul`, `image`) VALUES
(1, 'UREA', 'UREA.jpg'),
(2, 'NPK 16-16-16', 'NPK16.jpg'),
(3, 'NPK KOPI', 'NPKKOPI.jpg'),
(4, 'NPK SINGKONG', 'NPKSINGKONG.jpg'),
(5, 'NPK PHONSKA', 'PHONSKA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pstr_tkmr`
--

CREATE TABLE `pstr_tkmr` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pstr_tkmr`
--

INSERT INTO `pstr_tkmr` (`id`, `text`, `image`) VALUES
(6, 'GOVERNANCE & RISK MANAGEMENT', 'banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skls_tkmr`
--

CREATE TABLE `skls_tkmr` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `next` varchar(2000) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jbt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skls_tkmr`
--

INSERT INTO `skls_tkmr` (`id`, `judul`, `text`, `next`, `bio`, `gambar`, `nama`, `jbt`) VALUES
(16, 'SEKILAS', 'Penerapan tata kelola perusahaan yang baik Good Corporate Governance (GCG) merupakan keharusan dan landasan penting bagi keberhasilan mewujudkan visi dan misi serta kelangsungan usaha perusahaan.', 'Dengan penerapan Manajemen Risiko yang merupakan upaya yang terkoordinasi dan diarahkan dalam pengelolaan risiko perusahaan, maka risiko yang timbul dan berpotensi mengganggu operasional perusahaan dilakukan langkah-langkah mekanisme penanganan secara berkala berupa upaya pencegahan risiko, mitigasi risiko dan berbagi risiko.', 'TATA KELOLA & MANAJEMEN RISIKO', 'Pak_Amir81.jpeg', 'AMIR HAMZAH', 'VP TATA KELOLA & MANAJEMEN RISIKO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `as_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `as_id`, `gambar`, `date_created`) VALUES
(8, 'Muhammad Agung ', 'user01@gmail.com', '$2y$10$ls71ePtCBYPJbOk9Lc617.p.R8Gimb67yVcWRxqo2IbSu6ey8xVyC', 1, 'user.png', 1682361616),
(9, 'agung', 'agungsavage12@gmail.com', '$2y$10$ZGpNXs9pTkp5ZxM4lo5LCuOl6pCaixwDnfnM8dAy.ftxZjDHymBUi', 1, 'user.png', 1682368838),
(13, 'test', 'test01@gmail.com', '$2y$10$nyaNHFS94vUGoyqw64b5.e.UAcXY48Cq1fE7VP16l.NZsWbpBx/Tq', 2, 'user.png', 1688100246),
(14, 'GCG', 'admingcg@pusri.co.id', '$2y$10$PbOfG.jEeoP0SiAV28C4/OwWPBiHaaegqI11rC5FNiaD1Mk64PWEm', 1, 'user.png', 1688468848),
(15, 'MANRISK', 'adminmanrisk@pusri.co.id', '$2y$10$0brEmofA1nHflZq8hJ7l0u1ys.7MnzO7uOBZH6CradwDheDMNFpE.', 1, 'user.png', 1688469017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_about`
--
ALTER TABLE `admin_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_berita`
--
ALTER TABLE `admin_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_manrisk`
--
ALTER TABLE `admin_manrisk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elrn_tkmr`
--
ALTER TABLE `elrn_tkmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kbr_tkmr`
--
ALTER TABLE `kbr_tkmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krywn_tkmr`
--
ALTER TABLE `krywn_tkmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phrg_tkmr`
--
ALTER TABLE `phrg_tkmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prdk_tkmr`
--
ALTER TABLE `prdk_tkmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pstr_tkmr`
--
ALTER TABLE `pstr_tkmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skls_tkmr`
--
ALTER TABLE `skls_tkmr`
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
-- AUTO_INCREMENT for table `admin_about`
--
ALTER TABLE `admin_about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin_berita`
--
ALTER TABLE `admin_berita`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_manrisk`
--
ALTER TABLE `admin_manrisk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `elrn_tkmr`
--
ALTER TABLE `elrn_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kbr_tkmr`
--
ALTER TABLE `kbr_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `krywn_tkmr`
--
ALTER TABLE `krywn_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phrg_tkmr`
--
ALTER TABLE `phrg_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prdk_tkmr`
--
ALTER TABLE `prdk_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pstr_tkmr`
--
ALTER TABLE `pstr_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skls_tkmr`
--
ALTER TABLE `skls_tkmr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
