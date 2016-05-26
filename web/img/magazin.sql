-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mai 2016 la 18:01
-- Versiune server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `access` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `email`, `access`) VALUES
(1, 'Abstracter', 'Abstracter', 'vasile.stoilov@gmail.com', '0');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `article_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `wallper` longtext COLLATE utf8_unicode_ci,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `articles`
--

INSERT INTO `articles` (`id`, `name`, `article_type`, `wallper`, `article_id`) VALUES
(1, 'jungla', 'book', '', 1),
(2, 'Life', 'book', 'img/book1.jpg', 2),
(3, 'College', 'book', 'img/td.jpg', 3),
(4, 'LOOOOOOOL', 'book', 'img/1308484165987.png', 4),
(6, 'Nokia C3', 'phone', 'img/nokia-c3-ofic.jpg', 2),
(7, 'Ice&Fire', 'computer', '/img/7d2-12.jpg', 1),
(8, 'I7-6700k', 'component', 'img/proci7.jpg', 1),
(9, 'mouse x7', 'peripheral', 'img/mosuex7.png', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wallper` longtext COLLATE utf8_unicode_ci,
  `article_type` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `description`, `year`, `wallper`, `article_type`, `price`, `stock`, `views`) VALUES
(1, 'jungla', 'junglaman', 'best jungla book', '23.05.2016', NULL, 'book', 0, 0, 0),
(2, 'Life', 'Jora', 'this book is about life', '14.12.2015', 'img/book1.jpg', 'book', 0, 0, 0),
(3, 'College', 'Tudor Munteanu', 'po piane', '19.05.2016', 'img/td.jpg', 'book', 0, 0, 0),
(4, 'LOOOOOOOL', 'Smillik', 'loloooooll', '13.05.2016', 'img/1308484165987.png', 'book', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `components`
--

CREATE TABLE IF NOT EXISTS `components` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `article_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `component_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `wallper` longtext COLLATE utf8_unicode_ci,
  `image1` longtext COLLATE utf8_unicode_ci,
  `image2` longtext COLLATE utf8_unicode_ci,
  `image3` longtext COLLATE utf8_unicode_ci,
  `image4` longtext COLLATE utf8_unicode_ci,
  `image5` longtext COLLATE utf8_unicode_ci,
  `mem_capacity` longtext COLLATE utf8_unicode_ci,
  `mem_type` longtext COLLATE utf8_unicode_ci,
  `mem_standart` longtext COLLATE utf8_unicode_ci,
  `voltage` longtext COLLATE utf8_unicode_ci,
  `producer` longtext COLLATE utf8_unicode_ci,
  `power` longtext COLLATE utf8_unicode_ci,
  `dimensions` longtext COLLATE utf8_unicode_ci,
  `weigth` longtext COLLATE utf8_unicode_ci,
  `rpm` longtext COLLATE utf8_unicode_ci,
  `noise` longtext COLLATE utf8_unicode_ci,
  `data_transfer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `timing_cas` longtext COLLATE utf8_unicode_ci,
  `form_factor` longtext COLLATE utf8_unicode_ci,
  `cpu` longtext COLLATE utf8_unicode_ci,
  `gpu` longtext COLLATE utf8_unicode_ci,
  `mag_frecvence` longtext COLLATE utf8_unicode_ci,
  `cache_l1` longtext COLLATE utf8_unicode_ci,
  `cache_l2` longtext COLLATE utf8_unicode_ci,
  `cache_l3` longtext COLLATE utf8_unicode_ci,
  `g_processor` longtext COLLATE utf8_unicode_ci,
  `pfc` longtext COLLATE utf8_unicode_ci,
  `interface` longtext COLLATE utf8_unicode_ci,
  `connections` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `components`
--

INSERT INTO `components` (`id`, `name`, `article_type`, `component_type`, `wallper`, `image1`, `image2`, `image3`, `image4`, `image5`, `mem_capacity`, `mem_type`, `mem_standart`, `voltage`, `producer`, `power`, `dimensions`, `weigth`, `rpm`, `noise`, `data_transfer`, `timing_cas`, `form_factor`, `cpu`, `gpu`, `mag_frecvence`, `cache_l1`, `cache_l2`, `cache_l3`, `g_processor`, `pfc`, `interface`, `connections`, `description`, `price`, `stock`, `views`) VALUES
(1, 'I7-6700k', 'component', 'Processor', 'img/proci7.jpg', 'img/proci71.jpg', NULL, NULL, NULL, NULL, NULL, 'ddr3', NULL, NULL, 'Intel Corporation', '60W', NULL, '30g', NULL, NULL, '', NULL, NULL, '4,0GHz-4,5GHz, octa-core', NULL, '5000 MHz', '8Mb', '36Mb', NULL, 'Radeon HD 7480D', NULL, NULL, NULL, NULL, 9000, 10, 12);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `computers`
--

CREATE TABLE IF NOT EXISTS `computers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `article_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `image1` longtext COLLATE utf8_unicode_ci,
  `image2` longtext COLLATE utf8_unicode_ci,
  `image3` longtext COLLATE utf8_unicode_ci,
  `image4` longtext COLLATE utf8_unicode_ci,
  `image5` longtext COLLATE utf8_unicode_ci,
  `os` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carcase` longtext COLLATE utf8_unicode_ci,
  `weigth` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ports` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `procesor` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ram` longtext COLLATE utf8_unicode_ci NOT NULL,
  `memory_ssd` longtext COLLATE utf8_unicode_ci,
  `memory_hdd` longtext COLLATE utf8_unicode_ci,
  `video` longtext COLLATE utf8_unicode_ci NOT NULL,
  `game` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `power_supply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `wallper` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `computers`
--

INSERT INTO `computers` (`id`, `name`, `article_type`, `image1`, `image2`, `image3`, `image4`, `image5`, `os`, `carcase`, `weigth`, `ports`, `procesor`, `ram`, `memory_ssd`, `memory_hdd`, `video`, `game`, `power_supply`, `description`, `price`, `stock`, `views`, `wallper`) VALUES
(1, 'Ice&Fire', 'computer', 'img/7d2-12.jpg', NULL, NULL, NULL, NULL, 'Windows 8.1', 'Corsar', '8kg', 'HDMI/USB2.0/USB3.0/j', 'Intel® Core™ i7-6700K', '32 GB', '500 GB', '2TB', 'Nvidia GTX 990 Ti 24GB', 'YES', '1000W', '......................', 60000, 10, 34, '/img/7d2-12.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `peripherals`
--

CREATE TABLE IF NOT EXISTS `peripherals` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `article_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `wallper` longtext COLLATE utf8_unicode_ci,
  `image1` longtext COLLATE utf8_unicode_ci,
  `image2` longtext COLLATE utf8_unicode_ci,
  `image3` longtext COLLATE utf8_unicode_ci,
  `image4` longtext COLLATE utf8_unicode_ci,
  `image5` longtext COLLATE utf8_unicode_ci,
  `component_type` longtext COLLATE utf8_unicode_ci,
  `mouse_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `btn_number` int(11) DEFAULT NULL,
  `btn_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `color` longtext COLLATE utf8_unicode_ci NOT NULL,
  `weigth` longtext COLLATE utf8_unicode_ci,
  `resolution` longtext COLLATE utf8_unicode_ci,
  `keyboard` longtext COLLATE utf8_unicode_ci,
  `keyboard_type` longtext COLLATE utf8_unicode_ci,
  `interface` longtext COLLATE utf8_unicode_ci,
  `connector` longtext COLLATE utf8_unicode_ci,
  `carcase` longtext COLLATE utf8_unicode_ci,
  `frecvence_band` longtext COLLATE utf8_unicode_ci,
  `noise` longtext COLLATE utf8_unicode_ci,
  `rms_power` longtext COLLATE utf8_unicode_ci,
  `dimensions` longtext COLLATE utf8_unicode_ci,
  `producer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `volum_control` longtext COLLATE utf8_unicode_ci,
  `cable_length` longtext COLLATE utf8_unicode_ci,
  `mem_capacity` longtext COLLATE utf8_unicode_ci,
  `r_speed` longtext COLLATE utf8_unicode_ci,
  `w_speed` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `peripherals`
--

INSERT INTO `peripherals` (`id`, `name`, `article_type`, `wallper`, `image1`, `image2`, `image3`, `image4`, `image5`, `component_type`, `mouse_type`, `btn_number`, `btn_type`, `color`, `weigth`, `resolution`, `keyboard`, `keyboard_type`, `interface`, `connector`, `carcase`, `frecvence_band`, `noise`, `rms_power`, `dimensions`, `producer`, `volum_control`, `cable_length`, `mem_capacity`, `r_speed`, `w_speed`, `description`, `price`, `stock`, `views`) VALUES
(1, 'mouse x7', 'peripheral', 'img/mosuex7.png', 'img/mosuex7.png', NULL, NULL, NULL, NULL, 'mouse', 'optical', 7, '', 'black', '300g', '400dpi-2000dpi', NULL, NULL, NULL, 'usb', NULL, NULL, NULL, NULL, NULL, 'logitech', NULL, '1,5m', NULL, NULL, NULL, NULL, 350, 100, 21);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `article_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `image1` longtext COLLATE utf8_unicode_ci,
  `image2` longtext COLLATE utf8_unicode_ci,
  `image3` longtext COLLATE utf8_unicode_ci,
  `image4` longtext COLLATE utf8_unicode_ci,
  `image5` longtext COLLATE utf8_unicode_ci,
  `technology` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dimensions` longtext COLLATE utf8_unicode_ci,
  `weigth` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyboard` longtext COLLATE utf8_unicode_ci,
  `sim` longtext COLLATE utf8_unicode_ci,
  `gps` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usb` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camera_primary` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camera_secondary` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser` longtext COLLATE utf8_unicode_ci,
  `battery` longtext COLLATE utf8_unicode_ci,
  `battery_stand_by` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `battery_talk_time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `audio_quality` longtext COLLATE utf8_unicode_ci,
  `loudspeaker` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `wallper` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `phones`
--

INSERT INTO `phones` (`id`, `name`, `article_type`, `image1`, `image2`, `image3`, `image4`, `image5`, `technology`, `dimensions`, `weigth`, `keyboard`, `sim`, `gps`, `usb`, `camera_primary`, `camera_secondary`, `browser`, `battery`, `battery_stand_by`, `battery_talk_time`, `audio_quality`, `loudspeaker`, `description`, `price`, `stock`, `views`, `wallper`) VALUES
(2, 'Nokia C3', 'phone', 'img/nokia-c3-ofic.jpg', 'img/nokiac3-2.jpg', NULL, NULL, NULL, 'GSM', '400x400', '140', NULL, 'dualSim', 'yes', 'microUSB', '10Mpx', '32Mpx', 'WAP 2.0/xHTML, HTML, Adobe Flash Lite', 'Removable Li-Ion 1320 mAh battery (BL-5J)', 'Up to 800 h', '7h', 'Noise -89.2dB / Crosstalk -70.3dB', 'Voice 75dB / Noise 66dB / Ring 77dB', NULL, 1400, 2000, 10, 'img/nokia-c3-ofic.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` char(15) NOT NULL,
  `subname` char(15) NOT NULL,
  `email` text NOT NULL,
  `login` char(20) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `subname`, `email`, `login`, `password`) VALUES
(1, 'vasea', 'vasea', '', 'vasea', 'vasea'),
(2, '123', '123', '', '123', '123'),
(3, 'aaa', 'aaa', '', 'aaa', 'aaaa'),
(4, 'bbb', 'bbb', '', 'bbb', 'bbb'),
(5, 'xxx', 'xxx@xxx.xx', 'xxx', 'xxx', 'xxx'),
(6, 'fff', 'fff@fff.ff', 'fff', 'fff', 'fff'),
(7, 'as', 'as@as.r', 'as', 'as', 'as'),
(8, '22', '22', '123@123.123', '22', '22'),
(9, 'sad', 'as', 'as@as.r', 'saddd', 'as'),
(10, 'as', 'as', '22@123.123', 'sa', '12'),
(11, 'tudor', 'tudor', 'tudor@gmail.com', 'tudor', 'tudor'),
(12, 'ry', 'ry', 'ry@ry.ry', 'ry', 'ry'),
(13, 'ff', 'ff', 'ff@ff', 'ff', 'ff'),
(14, 'saasadsa', 'asdsadsad', 'dasdsada@aa.rs', 'dasda', 'asda'),
(15, 'as', 'as', 'as@as.as', 'da', 'as'),
(16, 'octa', 'octa', 'ocata@octa.q', 'octa', 'octa'),
(17, 'ion', 'ion', 'ion@ion.i', 'ion', 'ion'),
(18, 'tudor', 'tudor', 'tudor@tudor.tudor', 'tudort', 'tttttt'),
(19, 'goog', 'goog', 'gooog@gooog.goo', 'gooog', 'goog'),
(20, 'xxxxxx', 'xxxxxxxxxx', 'xxxxx@xxxxxx.xx', 'xxxxxxxxxx', 'xxxxxxxx'),
(21, 'bromania', 'bromania', 'bromania@rrr.rr', 'bromania', 'bromania');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peripherals`
--
ALTER TABLE `peripherals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peripherals`
--
ALTER TABLE `peripherals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
