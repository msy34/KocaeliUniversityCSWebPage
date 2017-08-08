-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Kas 2016, 09:47:54
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `koubilgisayar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `DuyuruId` int(11) NOT NULL,
  `DuyuruTipi` text NOT NULL,
  `Baslik` varchar(400) NOT NULL,
  `Aciklama` text NOT NULL,
  `Tarih` date NOT NULL,
  `YayinlayanId` int(11) NOT NULL,
  `Ek` text,
  `WebLink` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`DuyuruId`, `DuyuruTipi`, `Baslik`, `Aciklama`, `Tarih`, `YayinlayanId`, `Ek`, `WebLink`) VALUES
(42, 'bolum', '2016-2017 Vize Sınavları Hk.', '<p>\r\n\r\nBölümümüz 2016-2017 Vize Sınav Programı ektedir.\r\n\r\n<br></p>', '2016-10-28', 2, '../Ekler/yu84.xlsx', ''),
(44, 'bolum', 'Muafiyet Sınav Tarihi (dikey Geçişle Gelen Öğrenciler İçin)', '2016-2017 Eğitim-Öğretim yılında Fakültenize/Yüksekokulunuza dikey geçiş ile gelen öğrenciler için 03 Kasım 2016 tarihinde saat 14:00\'da Modern Diller Bölüm Başkanlığımız tarafından Yüksekokul binamızda yabancı dil muafiyet sınavı yapılacaktır', '2016-10-28', 2, NULL, NULL),
(45, 'bolum', 'Microsoft Dreamspark Üyeliği Hakk.', '<p>\r\n\r\nBir çok Microsoft ürününü ücretsiz indirebileceğiniz Microsoft Dreamspark, Microsoft Imagine olarak yeni bir isim almıştır. <br><br>Sadece Bilgisayar Müh. Bölümü öğrencileri bu üyelikten yararlanabilir. Ek dosyada e-mail adresiniz yanlış girilmiş ise üye olamamışsınız demektir. Kontrol ediniz.\r\n\r\n<br></p>', '2016-10-17', 2, '../Ekler/rt8419.txt', 'https://imagine.microsoft.com/en-US'),
(46, 'bolum', 'İngilizce Muafiyet Sınav Sonuçları', '<p>\r\n\r\n2016-2017 Eğitim-Öğretim Yılında Bölümümüze kayıt yaptırıp 28 Eylül 2016 tarihinde İngilizce dersi muafiyet sınavına giren öğrencilerinizin muafiyet sınav sonuçları Modern Diller Bölüm Başkanlığımızca hazırlanarak ilgide sunulmuştur.\r\n\r\n<br></p>', '2016-10-14', 2, '../Ekler/yu9771.pdf', ''),
(47, 'bolum', '2016-2017 Güz Dönemi Lisans Ders Programları', '<p>Bölümümüz 2016-2017 Eğitim Öğretim yılı Güz yarıyılı lisans ders programları ektedir.<br></p>', '2016-09-30', 2, '../Ekler/yu5037).zip', ''),
(48, 'genel', 'Netaş Coop Stajı', '<p>\r\n\r\nNetaş Coop 2017 şubat mart nisan aylarında stajyer öğrenci alımı yapacaktır. Bu dönemde staj yapmak isteyenler 17 Kasım 2016 tarihine kadar ekteki ilandaki maile CV ile başvuru yapabilirler. <br>Kimler başvurabilir: <br>3. Sınıf 2. Öğretimler <br>Yazılı ve sözlü iletişimde iyi seviyede olan İngilizce bilgisi <br>3 aylık staj dönemi boyunca hafta içi 3-4 tam gün devamlılık\r\n\r\n<br></p>', '2016-11-02', 4, '../Ekler/ty8055.pdf', ''),
(49, 'genel', 'Programlama I Ders Sunumları', '<p><b>Ektedir.</b></p>', '2016-11-02', 4, '', ''),
(50, 'genel', 'Os Ders Notu', '<p><b>Ektedir.</b><b></b></p>', '2016-11-01', 9, '../Ekler/fg8262.ppt', ''),
(51, 'genel', 'Araştırma Problemleri, Dönem Ve Bitirme Projesi Öğrencilerimin Dikkatine', '<p>\r\n\r\n2 Ekim Çarşamba günü öğrencilerle görüşme yapılmayacaktır.\r\n\r\n<br></p>', '2016-11-01', 3, '', ''),
(52, 'genel', 'İşaret Ve Sistemler Dersi (Doç. Dr. Halil Yiğit Ten Dersi Alan Öğrenciler) Hk.', '<p>\r\n\r\n2 Kasım 2016 tarihinde yapılacak olan İşaret ve Sistemler dersi I. ve II. Öğretimler (Doç. Dr. Halil Yiğit ten dersi alan öğrenciler) için ileriki bir tarihte yapılmak üzere ertelenmiştir. \r\n\r\n<br></p>', '2016-11-01', 5, '', ''),
(53, 'genel', 'Dikey Geçişle Gelen Öğr. Dikkatine', '<p>\r\n\r\nSadece dikey geçişle gelen öğrencilerimiz için 3 Kasım Perşembe günü saat 14.00 te, Yabancı Diller Yüksek Okulunda Ek Muafiyet Sınavı yapılacaktır.\r\n\r\n<br></p>', '2016-10-31', 7, '', ''),
(54, 'genel', '1. Sınıflar Dikkatine', '<p>\r\n\r\nİngilizce I ve İngilizce II derslerine ait Muafiyet notları sisteminize işlenmiştir.<br><br>Girilmeyen veya yanlış girilen not karşılığı varsa Uzman Ömür Cana gelip düzelttiriniz.\r\n\r\n<br></p>', '2016-10-28', 7, '', ''),
(55, 'genel', 'TEV-SINGA Karşılıksız Doktora Bursu', '<p>\r\n\r\n</p>\r\n\r\n<p>konyada TEV-SINGA karşılıksız Doktora burs ilanı ekte bilginize sunulmaktadır.</p><p>Son Başvuru Tarihi: 31 Aralık 2016</p><p>Üniversite son sınıf öğrencileri, yeni mezunlar, yüksek lisans ya da doktoraya başvuranlar ya da mezunlar aday olabilirler.</p><p>Dünyanın en iyi 15 üniversitesi ve mühendislik alanlarında dünyanın en iyi 6 üniversitesi arasında yer alan üniversitelerde doktora yapma imkanı sağlanmaktadır.</p>\r\n\r\n<p></p>\r\n\r\n<br><p></p>', '2016-10-27', 6, '../Ekler/as7724.pdf', ''),
(56, 'genel', 'Staj Sunumunu Bana Yapmış Öğrencilerin Dikkatine!', '<p>\r\n\r\nStaj bilgilerinizin girişi yapılmış olup aşağıdaki bilgileri Öğrenci Bilgi Sistemi üzerinden kontrol etmeniz gerekmektedir. Bir aksilik olması durumunda da bana dönüş yapınız.</p><p>Staj Yaptığınız Kurumun İsmi</p><p>Staj Yaptığınız Şehir ve Ülke</p><p>Staj Başlama ve Bitiş Tarihleri</p><p>Kabul Edilen Staj Gün Sayısı</p><p>Durumunuzun Başarılı olması</p>\r\n\r\n<br><p></p>', '2016-10-27', 10, '', ''),
(57, 'genel', 'Bilgisayar Grafikleri Projelerin Sunum Tarihleri', '<p></p><blockquote><pre><u><b>Ektedir. Tarihlere dikkat ediniz</b></u>.</pre></blockquote><p></p><p>\r\n\r\n\r\n\r\n<br></p>', '2016-10-27', 8, '../Ekler/yu7525xlsx', ''),
(58, 'genel', 'Yazlab I Proje 1 Sunumu Hk. (1.öğretim)', '<p>\r\n\r\nSunumlar ekte belirtilen gün ve saatlerde Bölüm Bilgisayar Laboratuvarında alınacaktır. Başka gün ve saatlerde sunum yapılmayacaktır. Sunuma proje klasörünün kopyalandığı CD, proje raporunun çıktısı, demo nun yapılacağı ve proje kodunun gösterileceği bir bilgisayar ile gelmeniz gerekmektedir.\r\n\r\n<br></p>', '2016-11-28', 11, '', 'http://bilgisayar.kocaeli.edu.tr/files/22_2016-2017%20Yaz%C4%B1l%C4%B1m%20Laboratuvar%C4%B1%20I%20Proje%20I%20Grup%20Listesi.xlsx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `HaberId` int(11) NOT NULL,
  `HaberBaslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `HaberDetay` text COLLATE utf8_turkish_ci NOT NULL,
  `HaberResim` text COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` date NOT NULL,
  `WebLink` text COLLATE utf8_turkish_ci,
  `YayinlayanId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`HaberId`, `HaberBaslik`, `HaberDetay`, `HaberResim`, `Tarih`, `WebLink`, `YayinlayanId`) VALUES
(9, 'PMI-TR ve Proje Yönetimine Giriş Tanıtım Etkinliği', '<p>\r\n\r\nPMI (Project Magement Institute) Türkiye Ve Kocaeli Üniversitesi işbirliği ile düzenenecek PMI-TR ve Proje Yönetimine Giriş Ve Tanıtım Etkinliğine tüm öğrencilerimiz davetlidir. Yer: Prof. Dr. Savaş Ayberk Konferans Salonu Tarih: 10 Kasım 2016 Saat: 14:00-17:00 Konuşmacı: A. Buğu Bayazıt Yıldırım\r\n\r\n<br></p>', '../Ekler/ty281.jpg', '2016-11-02', '', 2),
(10, 'Görüntü Döküman İşleme Semineri', '<p>\r\n\r\nDigiform Şirketinden Gürkan Karagöz Tarafından Görüntü Döküman İşleme Ve Mobil Tabanlı Görüntü İşleme Üzerine 9 Kasım Çarşamba Günü Saat 14.00-16.00 Arasında Prof. Dr. Savaş Ayberk Konferans Salonunda Seminer Verilecektir.\r\n\r\n<br></p>', '../Ekler/as7924.jpg', '2016-11-02', '', 2),
(11, 'Öğrencilerimizin Projelerinin Tübitak Başarısı', '<p>\r\n\r\n2209-a Kapsamında Bu Dönem Kocaeli Üniversitesinde Desktelenen Toplam 6 Projenin 4 Ü Bilgisayar Mühendisliği Öğrencileri Tarafından Hazırlanmıştır.\r\n\r\n<br></p>', '../Ekler/fg5172.jpg', '2016-11-02', '', 2),
(12, 'Recent Advances İn Language Processing', '<p>\r\n\r\nRecent Advances İn Language Processing\r\n\r\n<br></p>', '../Ekler/fg2474.jpg', '2016-11-02', '', 2),
(13, 'Fiberli Günler Semineri', '<p>\r\n\r\n<b>Fiberli Günler Semineri\r\n</b>\r\n<br></p>', '../Ekler/ty6138.JPG', '2016-11-02', '', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `KullaniciId` int(11) NOT NULL,
  `KullaniciAdi` varchar(30) NOT NULL,
  `Parola` varchar(200) NOT NULL,
  `AdSoyad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`KullaniciId`, `KullaniciAdi`, `Parola`, `AdSoyad`) VALUES
(2, 'admin', 'super', 'Bölüm Başkanlığı'),
(3, 'binner', 'binner', 'Yrd. Doç.Burak Inner'),
(4, 'ogok', 'ogok', 'Öğr.Gör.Dr. Onur Gök'),
(5, 'fkaya', 'fkaya', 'Araş.Gör. Fidan Kaya'),
(6, 'seken', 'seken', 'Araş.Gör. Süleyman Eken'),
(7, 'ocan', 'ocan', 'Uzman Ömür Can'),
(8, 'oakbulut', 'oakbulut', 'Yrd.Doç.Dr. Orhan Akbulut'),
(9, 'siomurca', 'siomurca', 'Doç.Dr. Sevinç İlhan Omurca'),
(10, 'eekinci', 'eekinci', 'Arş.Gör. Ekin Ekinci'),
(11, 'hozcan', 'hozcan', 'Arş.Gör. Hikmetcan Özcan');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`DuyuruId`),
  ADD KEY `YayinlayanId` (`YayinlayanId`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`HaberId`),
  ADD KEY `YayinlayanId` (`YayinlayanId`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`KullaniciId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `DuyuruId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `HaberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `KullaniciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `duyurular`
--
ALTER TABLE `duyurular`
  ADD CONSTRAINT `duyurular_ibfk_1` FOREIGN KEY (`YayinlayanId`) REFERENCES `kullanici` (`KullaniciId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `haberler`
--
ALTER TABLE `haberler`
  ADD CONSTRAINT `haberler_ibfk_1` FOREIGN KEY (`YayinlayanId`) REFERENCES `kullanici` (`KullaniciId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
