-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 26 Oca 2015, 12:40:37
-- Sunucu sürümü: 5.1.69
-- PHP Sürümü: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `op`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilan`
--

CREATE TABLE IF NOT EXISTS `ilan` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ilanveren_id` int(255) NOT NULL,
  `ilan_tarihi` varchar(2555) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ilan` varchar(2555) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `ilan`
--

INSERT INTO `ilan` (`id`, `ilanveren_id`, `ilan_tarihi`, `ilan`) VALUES
(1, 2, '26/01/2015', 'qwertfgyhujÄ±kopl'),
(2, 2, '26/01/2015', 'ilan1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
