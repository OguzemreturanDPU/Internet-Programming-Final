-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Oca 2023, 13:45:35
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `oguzbank`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminkullanici`
--

CREATE TABLE `adminkullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adminkullanici`
--

INSERT INTO `adminkullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2022-12-28 00:15:07', '', '', '', 'ogzmre@gmail.com', '05335805433', '098f6bcd4621d373cade4e832627b4f6', 'Oğuz Emre Turan', '', '', '', '', '5', 1),
(2, '2023-01-03 23:50:20', '', '', '', 'Fatih@gmail.com', '05446724391', '12aralık', 'Fatih Ataman', '', '', '', '', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smptuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smptuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, '', 'Oguz Bank Scripti', 'Oguz Bank Scripti, Murat Hoca\'nın Sabir Terzi\'den Daha Fazla Puan Vereceği Sayfayız. Bu Kadar Emeğer En Az 95 Verilen Final Projesidir.', 'banka, php, learning, student php', 'Oğuz Emre Turan', '0533 580 54 33', '0533 580 54 33', '0533 580 54 33', 'ogzmre@gmail.com', 'Kütahya', 'Merkez', 'Dumlupınar Üniversitesi', '7 x 24 açık banka scripti', 'ayar_maps_api', 'ayar_analystic_api', 'ayar_zopim_api', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', '', 'password', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgilerim`
--

CREATE TABLE `bilgilerim` (
  `bilgiler_id` int(11) NOT NULL,
  `bilgiler_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bilgiler_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `bilgiler_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgiler_yas` int(3) NOT NULL,
  `bilgiler_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bakiye` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilgilerim`
--

INSERT INTO `bilgilerim` (`bilgiler_id`, `bilgiler_ad`, `bilgiler_soyad`, `password`, `bilgiler_mail`, `bilgiler_yas`, `bilgiler_zaman`, `bakiye`) VALUES
(10, 'Muhammet', 'Aynacı', '', 'muhammet@cilgincocuk.com', 21, '2022-12-14 06:01:36', 5),
(11, 'Görkem', 'Söner', '', 'gorkem@gmail.com', 21, '2022-12-20 06:18:31', 2),
(12, 'Mustafa', 'Atatürk', '', 'Ataturk@gmail.com', 89, '2022-12-20 10:19:18', 70),
(19, 'Beyza', 'Kaplan', '356a192b7913b04c54574d18c28d46e6395428ab', 'Beyza@aasd.com', 13, '2022-12-21 15:02:44', 0),
(21, 'Buse', 'Yiğit Turan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'buse@gmail.com', 21, '2022-12-21 15:04:03', 3),
(22, 'Oğuz', 'Turan', '49042c54de64a1e9bf0b33e00245660ef92dc7bd', 'ogzmail@gmail.com', 21, '2022-12-21 15:09:40', 40),
(25, 'Fatih', 'Ataman', '356a192b7913b04c54574d18c28d46e6395428ab', 'Fatih@gmail.com', 21, '2022-12-28 17:35:49', 63),
(26, 'Furkan', 'Özdemircan', '356a192b7913b04c54574d18c28d46e6395428ab', 'Furkan@gmail.com', 21, '2022-12-29 12:04:01', 342),
(27, 'Muhammed', 'Aynacı', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'muhammed@gmail.com', 22, '2023-01-02 15:04:08', 1999997990);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Oguz Bank Sürüm', 'Oguz Bank sürümü ile ilgili detaylı içerik bulabilirsiniz.', 'video_kodu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islem`
--

CREATE TABLE `islem` (
  `sno` int(5) NOT NULL,
  `yapilanislem` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gonderen` text COLLATE utf8_turkish_ci NOT NULL,
  `alıcı` text COLLATE utf8_turkish_ci NOT NULL,
  `bakiye` int(9) NOT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `islem`
--

INSERT INTO `islem` (`sno`, `yapilanislem`, `gonderen`, `alıcı`, `bakiye`, `datetime`) VALUES
(1, 'EFT', 'Oguz', 'Kadir', 10, '2022-12-20 00:00:00'),
(2, 'EFT', 'Mustafa', 'Oğuz', 12, '0000-00-00 00:00:00'),
(3, 'EFT', 'Mustafa', 'Muhammet', 10, '0000-00-00 00:00:00'),
(5, 'EFT', 'Oğuz', 'Görkem', 5, '2022-12-22 22:45:23'),
(6, 'EFT', 'Muhammet', 'Mustafa', 2, '2022-12-26 14:53:24'),
(7, 'EFT', 'Mustafa', 'Oğuz Emre', 10, '2023-01-02 17:59:03'),
(8, 'Para Yatırma', 'Muhammed', 'Muhammed', 0, '2023-01-03 13:58:22'),
(9, 'Para Cekme', 'Fatih', 'Fatih', 0, '2023-01-03 14:01:43'),
(10, 'Para Yatırma', 'Fatih', 'Fatih', 1, '2023-01-03 14:03:16'),
(11, 'Para Cekme', 'Fatih', 'Fatih', 2, '2023-01-03 14:05:09'),
(12, 'Para Cekme', 'Fatih', 'Fatih', 97, '2023-01-03 14:06:13'),
(13, 'Para Cekme', 'Fatih', 'Fatih', 4, '2023-01-03 14:15:32'),
(14, 'Para Yatırma', 'Fatih', 'Fatih', 3, '2023-01-03 14:17:55'),
(15, 'EFT/Havale', 'Fatih', 'Oğuz Emre', 0, '2023-01-03 14:20:26'),
(16, 'EFT/Havale', 'Muhammet', 'Buse', 3, '2023-01-03 14:22:39'),
(17, 'Para Yatırma', 'Furkan', 'Furkan', 100, '2023-01-03 23:24:28');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminkullanici`
--
ALTER TABLE `adminkullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `bilgilerim`
--
ALTER TABLE `bilgilerim`
  ADD PRIMARY KEY (`bilgiler_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `islem`
--
ALTER TABLE `islem`
  ADD PRIMARY KEY (`sno`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminkullanici`
--
ALTER TABLE `adminkullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `bilgilerim`
--
ALTER TABLE `bilgilerim`
  MODIFY `bilgiler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `islem`
--
ALTER TABLE `islem`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
