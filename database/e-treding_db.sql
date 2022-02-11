-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 11:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-treding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `detail_bio` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `motto`, `detail_bio`) VALUES
(23, 'Dengan E-treding bisnismu makin berkembang', 'Video production work with producing video content. It is the analogical of film making, but the images are digitally recorded instead of film stock. There are three levels of video production: production, pre-production and post-production the images are digitally recorded instead of film stock producing video content. It is the');

-- --------------------------------------------------------

--
-- Table structure for table `about_detail`
--

CREATE TABLE `about_detail` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_detail`
--

INSERT INTO `about_detail` (`id`, `judul`, `text`, `image`) VALUES
(2, 'Pintar', 'Pintar adalah mampu mengerjakan sesuatu tanpa mencontek', 'portfolio-4.jpg'),
(3, 'Ramah', 'User interface sangat mudah di mengerti', 'portfolio-2.jpg'),
(4, 'Cerdas', 'E-treding mampu untuk membantu dalam usahamu', 'portfolio-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `alamat` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `alamat`, `email`, `telepon`) VALUES
(2, 'Jln. Buah Batu Jawa Barat Indonesia', 'coba1@gmail.com', '08814067696');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `nama`, `icon`, `url`) VALUES
(8, 'Tentang Aplikasi', 'fas fa-fw fa-user-cog', 'admin_menu/about'),
(15, 'Slider Image', 'fas fa-fw fa-photo-video', 'admin_menu/banner_image'),
(17, 'Portofolio', 'fas fa-fw fa-camera-retro', 'admin_menu/portofolio'),
(18, 'Fitur', 'fas fa-database', 'admin_menu/fitur'),
(19, 'Pricing', 'fas fa-shopping-bag', 'admin_menu/pricing'),
(20, 'Under_Pricing', 'fas fa-address-book', 'admin_menu/contact'),
(21, 'Partner', 'fas fa-trademark', 'admin_menu/partner'),
(22, 'Team', 'fas fa-users', 'admin_menu/karyawan'),
(23, 'About/Sebelah Home', 'fab fa-autoprefixer', 'admin_menu/about_detail'),
(24, 'Testimoni', 'fas fa-child', 'admin_menu/testimonial'),
(25, 'Custommer Service', 'far fa-id-badge', 'admin_menu/contact_us'),
(26, 'Footer', 'fas fa-bookmark', 'admin_menu/footer'),
(27, 'Alamat dan Email', 'fas fa-archway', 'admin_menu/address');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `texts` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `text`, `texts`, `image`) VALUES
(19, 'Ini Adalah Banner Image', 'Coba Banner Image lagi coba aja coba terus', 'advanced-feature-1.jpg'),
(20, 'E-treding mampu untuk membantu dalam usahamu', 'Coba Banner Image', '11.jpg'),
(21, 'Pintar adalah mampu mengerjakan sesuatu tanpa mencontek', 'Cusss', 'hero-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `hd` varchar(100) NOT NULL,
  `text1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `hd`, `text1`) VALUES
(1, 'Are You Ready', 'To looossssss');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telpon` int(20) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `nama`, `email`, `telpon`, `subjek`, `pesan`) VALUES
(3, 'Leo', 'leorzky@gmail.com', 2147483647, 'Pesan Aplikasi', 'Pesan Aplikasi untuk apotek'),
(5, 'Dani', 'coba@gmail.com', 2147483647, 'aaaa', 'aaaaaa'),
(6, 'Dani', 'coba@gmail.com', 2147483647, 'aaaa', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `text` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id`, `judul`, `text`, `image`) VALUES
(3, 'Login', 'Login adalah proses masuk ke jaringan komputer dengan memasukkan identitas akun minimal terdiri dari username/akun pengguna dan password untuk mendapatkan hak akses', 'Capture11.PNG'),
(4, 'Master Data', 'Master data adalah sekumpulan data penting yang tersimpan dalam database', 'Capture12.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `judul`, `fb`, `ig`, `tw`, `yt`, `image`) VALUES
(3, 'Follow Me', 'https://facebook.com/', 'https://instagram.com/', 'https://twitter.com/', 'https://youtube.com/', 'IMG-20211216-WA00111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nm_kry` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `jbt` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nm_kry`, `fb`, `ig`, `tw`, `jbt`, `image`) VALUES
(1, 'Muhammad Jafar', 'https://facebook.com/', 'https://instagram.com/', 'https://twitter.com/', 'Developer', 'project-image05.jpg'),
(2, 'Muhammad Raffly', 'https://facebook.com/', 'https://instagram.com/', 'https://twitter.com/', 'Developer', 'team-3.jpg'),
(3, 'Luna', 'https://facebook.com/', 'https://instagram.com/', 'https://twitter.com/', 'Developer Front-end', 'team-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `nama`, `image`) VALUES
(2, 'Baso Jangkung Edit', 'portfolio-8.jpg'),
(3, 'Kuaci', 'working-girl.png');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `link`, `image`) VALUES
(3, 'Martabak Legit Simadu', 'https://www.youtube.com/watch?v=OnfYLBNvrPw', 'boci2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `hd` varchar(100) NOT NULL,
  `text1` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `hd`, `text1`, `link`) VALUES
(1, 'Basic', 'Master data, Supplier, Penjualan, Analisis Penjualan', 'http://trading.khazanahmaeru.com/'),
(3, 'Pro', 'Akun Fixed', 'http://tradinglegit.khazanahmaeru.com/'),
(4, 'Medium', 'Master Data, Kelola Keuangan, Kelola Barang, Kelola Suplier, Kelola Manajemen Bisnis, Kelola Penjual', 'http://trading.khazanahmaeru.com/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `jbt` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `nama`, `text`, `jbt`, `image`) VALUES
(3, 'Fedri', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.ipsum dolor sit amet', 'Dokter', 'project-image05.jpg'),
(4, 'Werder Brainer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.ipsum dolor sit amet', 'Pengusaha', 'project-image03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(200) NOT NULL,
  `as_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `as_id`, `image`, `date_created`) VALUES
(13, 'leo', 'leorzky@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'user.png', 1638937809),
(14, 'Admin', 'admin@admin.com', '10e11afcc32a478481873261e937db4b', 1, 'user.png', 1638947814),
(15, 'coba', 'coba@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'user.png', 1639030381);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_detail`
--
ALTER TABLE `about_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `about_detail`
--
ALTER TABLE `about_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
