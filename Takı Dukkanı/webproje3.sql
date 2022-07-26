-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2022, 16:40:19
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webproje3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anabolum`
--

CREATE TABLE `anabolum` (
  `anaBolumID` int(11) NOT NULL,
  `anaBolumResim` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `anaBolumBaslik` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `anaBolumAcıklama` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `anaBolumYazar` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `anabolum`
--

INSERT INTO `anabolum` (`anaBolumID`, `anaBolumResim`, `anaBolumBaslik`, `anaBolumAcıklama`, `anaBolumYazar`) VALUES
(1, '_resimler/banner.jpg', '~ HOŞGELDİNİZ ~', 'Siz hayal edin biz gerçekleştirelim..\r\nMakrome Örme Çanta, Makrome Bileklik, Makrome Duvar veya Kapı Dekorları, Düş Kapanı, Kokulu Taş İsimlik, Kokulu Taş Doğum Panosu, Ayna Setleri\r\nve\r\nÖzel günlerinizden kalan hatıralarınızı saklayabilmeniz için aracı oluyoruz..\r\nİstediğiniz renk ve modele göre siparişleriniz hazırlanır.\r\nSipariş vermek için İletişim bölümünden bizlere ulaşabilirsiniz... ', ' Seda Nur BAYKAL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bileklikresim`
--

CREATE TABLE `bileklikresim` (
  `bileklikId` int(11) NOT NULL,
  `bileklikResim` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `bileklikresim`
--

INSERT INTO `bileklikresim` (`bileklikId`, `bileklikResim`) VALUES
(1, '_resimler/bileklik/bileklik6.jpg'),
(2, '_resimler/bileklik/bileklik1.jpg'),
(3, '_resimler/bileklik/bileklik3.jpg'),
(4, '_resimler/bileklik/bileklik4.jpg'),
(5, '_resimler/bileklik/bileklik2.jpg'),
(6, '_resimler/bileklik/bileklik7.jpg'),
(7, '_resimler/bileklik/bileklik8.jpg'),
(8, '_resimler/bileklik/bileklik5.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `genelresim`
--

CREATE TABLE `genelresim` (
  `genelResim` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL,
  `genelResimId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `genelresim`
--

INSERT INTO `genelresim` (`genelResim`, `genelResimId`) VALUES
('_resimler/diger/vazo1.jpg', 1),
('_resimler/diger/terlik2.jpg', 2),
('_resimler/diger/anahtarlik1.jpg', 3),
('_resimler/bileklik/bileklik1.jpg', 4),
('_resimler/canta/canta2.jpg', 5),
('_resimler/duvarSusu/duvarSusu1.jpg', 6),
('_resimler/kokuluTas/kokuluTas1.jpg', 7),
('_resimler/duvarSusu/duvarSusu2.jpg', 8),
('_resimler/canta/canta1.jpg', 9),
('_resimler/bileklik/bileklik2.jpg', 10),
('_resimler/kokuluTas/kokuluTas2.jpg', 11),
('_resimler/canta/canta3.jpg', 12);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kokulutasresim`
--

CREATE TABLE `kokulutasresim` (
  `kokulutasId` int(11) NOT NULL,
  `kokulutasResim` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kokulutasresim`
--

INSERT INTO `kokulutasresim` (`kokulutasId`, `kokulutasResim`) VALUES
(1, '_resimler/kokuluTas/kokuluTas1.jpg'),
(2, '_resimler/kokuluTas/kokuluTas2.jpg'),
(3, '_resimler/kokuluTas/kokuluTas5.jpg'),
(4, '_resimler/kokuluTas/kokuluTas4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makromeresim`
--

CREATE TABLE `makromeresim` (
  `makromeId` int(11) NOT NULL,
  `makromeResim` varchar(40) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `makromeresim`
--

INSERT INTO `makromeresim` (`makromeId`, `makromeResim`) VALUES
(1, '_resimler/duvarSusu/duvarSusu1.jpg'),
(2, '_resimler/duvarSusu/duvarSusu2.jpg'),
(3, '_resimler/duvarSusu/duvarSusu3.jpg'),
(4, '_resimler/duvarSusu/duvarSusu7.jpg'),
(5, '_resimler/duvarSusu/duvarSusu5.jpg'),
(6, '_resimler/duvarSusu/duvarSusu6.jpg'),
(7, '_resimler/duvarSusu/duvarSusu4.jpg'),
(8, '_resimler/duvarSusu/duvarSusu8.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yuvarlakresim`
--

CREATE TABLE `yuvarlakresim` (
  `yuvarlakResim` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yuvarlakResimId` int(11) DEFAULT NULL,
  `yuvarlakAcıklama` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yuvarlakresim`
--

INSERT INTO `yuvarlakresim` (`yuvarlakResim`, `yuvarlakResimId`, `yuvarlakAcıklama`) VALUES
('_resimler/bileklik/bileklik4.jpg', NULL, 'Bileklik'),
('_resimler/canta/canta2.jpg', NULL, 'Çanta'),
('_resimler/duvarSusu/duvarSusu1.jpg', NULL, 'Kapı/Duvar Dekor'),
('_resimler/dusKapani/dusKapani1.jpg', NULL, 'Düş Kapanı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anabolum`
--
ALTER TABLE `anabolum`
  ADD PRIMARY KEY (`anaBolumID`);

--
-- Tablo için indeksler `bileklikresim`
--
ALTER TABLE `bileklikresim`
  ADD PRIMARY KEY (`bileklikId`);

--
-- Tablo için indeksler `genelresim`
--
ALTER TABLE `genelresim`
  ADD PRIMARY KEY (`genelResimId`);

--
-- Tablo için indeksler `kokulutasresim`
--
ALTER TABLE `kokulutasresim`
  ADD PRIMARY KEY (`kokulutasId`);

--
-- Tablo için indeksler `makromeresim`
--
ALTER TABLE `makromeresim`
  ADD PRIMARY KEY (`makromeId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anabolum`
--
ALTER TABLE `anabolum`
  MODIFY `anaBolumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bileklikresim`
--
ALTER TABLE `bileklikresim`
  MODIFY `bileklikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `genelresim`
--
ALTER TABLE `genelresim`
  MODIFY `genelResimId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `kokulutasresim`
--
ALTER TABLE `kokulutasresim`
  MODIFY `kokulutasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `makromeresim`
--
ALTER TABLE `makromeresim`
  MODIFY `makromeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
