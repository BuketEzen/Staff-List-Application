-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Nis 2021, 11:23:59
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniter`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staff`
--

CREATE TABLE `staff` (
  `id` int(20) NOT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `detail` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `staff`
--

INSERT INTO `staff` (`id`, `title`, `detail`) VALUES
(1, 'Buket Ezen', 'Software staff'),
(2, 'Mustafa Özgür', 'Experienced software staff'),
(6, 'Emre', 'Experienced brand staff'),
(15, 'bitter', 'cat staff'),
(32, 'Gamze Güçlü', 'Experienced Software Staff');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
