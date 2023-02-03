-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Şub 2023, 14:04:26
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `padet` varchar(20) NOT NULL,
  `pkategori` text NOT NULL,
  `modelno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`id`, `pname`, `padet`, `pkategori`, `modelno`) VALUES
(1, 'Motor', '2', 'Araba', '7854521'),
(2, 'Sandalye', '3', 'Ev', '8759321'),
(3, 'Mouse', '1', 'Ofis', '4955863'),
(4, 'Telefon', '5', 'Kişisel', '8567125'),
(5, 'Lamba', '2', 'Ofis', '2254156');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fname`) VALUES
(10, 'muratcangencer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Muratcan Gencer'),
(11, 'altf4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'altf4'),
(12, 'adana01@hotmail.com', '25f9e794323b453885f5181f1b624d0b', 'Adana'),
(13, 'adana02@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana Alt F4'),
(14, 'adana03@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana 3'),
(15, 'adana04@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana 4'),
(16, 'adana05@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana 5'),
(17, 'adana6@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana 6'),
(18, 'adana7@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana 7'),
(19, 'adana8@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Adana 07');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
