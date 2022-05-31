-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 May 2022, 08:12:23
-- Sunucu sürümü: 8.0.21
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phpfinal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `amazonlogin`
--

DROP TABLE IF EXISTS `amazonlogin`;
CREATE TABLE IF NOT EXISTS `amazonlogin` (
  `KID` int NOT NULL AUTO_INCREMENT,
  `Ad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Parola` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`KID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `amazonlogin`
--

INSERT INTO `amazonlogin` (`KID`, `Ad`, `Soyad`, `Email`, `Parola`) VALUES
(1, 'SERKAN', 'AKSU', 'aksuse@gmail.com', 'sa1234'),
(2, 'ROBERT', 'NADA', 'nakano@gmail.com', 'NAKANO'),
(3, 'ANGELA', 'TAYLOR', 'taylor@gmail.com', 'TAYLOR'),
(4, 'KİRAZ', 'GEBHARD', 'gebhard@gmail.com', 'GEBHARD'),
(5, 'DEBORAH', 'FLORES', 'flores@gmail.com', 'FLORES'),
(6, 'GARY', 'FLORES', 'flores@gmail.com', 'FLORES'),
(7, 'ANDRE', 'SMITH', 'smith@gmail.com', 'SMITH'),
(8, 'Fatih', 'Bayrakdar', 'fatihbayrakdar95@gmail.co', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
