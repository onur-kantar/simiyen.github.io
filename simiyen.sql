-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2020, 22:42:40
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `simiyen`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surName` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `name`, `surName`, `phone`, `address`, `mail`, `about`) VALUES
(1, 'Onur', 'Kantar', '05416088368', 'sancaktepe / istanbul', 'onurkantr@gmail.com', 'Bilgisayar egitimime Samandira Mesleki Ve Teknik Anadolu Lisesi\'nde Bilisim Teknolojileri alaninda ogrenim gorerek basladim. Lise zorunlu stajimi Master Net Savunma ve Guvenlik Teknolojileri\'nde yaptim. Bilgisayar egitimime su anda Kocaeli Universitesi\'nde Bilisim Sistemleri Muhendisligi bolumunu okuyarak devam ediyorum. Ogrenim hayatim boyunca C# diline merak salip uzerinde projeler yaptim. Ayrica Unity ile C# programlama dilini kullanarak telefon ve bilgisayar oyunlari gelistirdim. Bu oyunlarimdan &quot;Spin Hit&quot; isimli oyunumu Google Play üzerinde yayinladim.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `short` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `title`, `url`, `content`, `short`, `date`, `user_id`, `category_id`) VALUES
(1, 'Selçuk Bayraktar’dan ‘Akıncı’ paylaşımı', 'bayraktar-paylasimi', 'T3 Vakfı Mütevelli Heyeti Başkanı ve Bay-Kar Teknik Müdürü Selçuk Bayraktar Twitter hesabı üzerinden heyecanlandıran bir paylaşımda bulundu. \r\n\r\nBayraktar, Akıncı TİHA ile ilgili bir belgeselin kısa sürede yayınlanacağını duyurdu ve söz konusu belgeselin fragmanını yayınladı.\r\n\r\nAKINCI’NIN ÖZELLİKLERİ NELER?\r\n\r\n40 bin feet irtifaya kadar çıkabilen Akıncı, 24 saat havada kalabiliyor. Bu özellikleriyle savaş uçaklarının yaptığı bazı görevleri de gerçekleştirebiliyor.\r\n\r\n20 metre kanat açıklığına sahip Akıncı, Cirit, Bozok, Gökdoğan ve Bozdoğan gibi yerli mühimmatlarla donatılacak.\r\n\r\n', 'Baykar Teknik Müdürü ve T3 Vakfı Mütevelli Heyeti Başkanı Selçuk Bayraktar, Akıncı TİHA ile ilgili bir belgeselin kısa sürede yayınlanacağını açıkladı.', '2020-05-22 16:07:39', 14, 2),
(2, 'Alibaba’dan yapay zekaya 1.4 milyar dolar yatırım\r\n', 'alibaba', 'Çin merkezli online alışveriş devi Alibaba Tmall Genie akıllı hoparlörünü daha donanımlı hale getirmek için yapay zekaya 1.4 milyar dolar (9.5 milyar TL) yatırım yapma kararı aldı.\r\n\r\nUluslararası haber ajansı Reuters’ta yer alan habere göre, şirket bu parayı Tmall Genie\'ye daha fazla içerik eklemek ve özel teknolojiler geliştirmek için harcayacak. \r\n\r\nAkıllı hoparlör pazarında Xiaomi ve Baidu ile rekabet içerisinde olan Alibaba söz konusu hoparlörün ilk versiyonunu 2017 yılında piyasaya sürmüştü.\r\n\r\nİngiltere\'de faaliyet gösteren teknoloji analizi kuruluşu Canalys\'in raporuna göre, Alibaba 2019’da 16.8 milyon akıllı hoparlör sevkiyatı gerçekleştirdi. \r\n\r\nAlibaba’nın bu alandaki en büyük rakiplerinden birisi olan bir başka Çin merkezli şirket olan Baidu ise  aynı dönemde 17.3 milyon adetle Alibaba’yı geride bıraktı.', 'Çin merkezli online alışveriş devi Alibaba Tmall Genie akıllı hoparlörünü daha donanımlı hale getirmek için yapay zekaya 1.4 milyar dolar (9.5 milyar TL) yatırım yapma kararı aldı.', '2020-05-22 16:07:39', 14, 1),
(8, 'Google 1 Temmuz\'da \'rekabet\' savunması yapacak', 'google-savunma', 'Rekabet Kurumunun internet sitesinden yapılan duyuruya göre, Google\'ın genel arama hizmetlerine yönelik güncellemelerle ve Adwords (Google\'ın arama sonuçlarında, iş ortağı sitelerde reklam gösterimi sağlayan pazarlama aracı) reklamlarıyla teşebbüslerin faaliyetlerini zorlaştırarak, Rekabetin Korunması Hakkında Kanun\'un ilgili maddesini ihlal edip etmediğinin tespitine yönelik yürütülen soruşturmada sözlü savunma aşamasına gelindi.\r\nGoogle Reklamcılık ve Pazarlama Ltd. Şti, Google International LLC, Google LLC, Google Ireland Limited ve Alphabet Inc. hakkında yürütülen soruşturmanın sözlü savunma toplantısı, 1 Temmuz\'da yapılacak.', 'Rekabet Kurumu, Google hakkında yürütülen soruşturmanın sözlü savunma toplantısının, 1 Temmuz\'da gerçekleştirileceğini bildirdi.', '2020-05-22 17:22:32', 14, 1),
(9, 'NASA paralel evreni keşfetti mi? İşte manşetlerin arkasındaki gerçek', 'nasa', 'İçinde yaşadığımız evrenden tamamen farklı paralel bir evren veya evrenlerin olup olmadığı uzun bir süredir bilim dünyasının tartıştığı konuların başında geliyor.  \r\n\r\nİnsanoğlunun hayallerinin sınırlarını zorlayan paralel evren teorisi yıllardır kurgunun da vazgeçmediği öğelerden bir tanesi. \r\n\r\nParalel evren teorisi, yani içinde yaşadığımız evrenin dışında  başka bir evrenin daha bulunduğu hipotezi bir kez daha gündemde.  \r\n\r\nBu iddia son birkaç gündür yerli ve yabancı pek çok gazetenin manşetlerini süslüyor. \r\n\r\nBenzer bir durum geçtiğimiz yıllarda pek çok sitede yer alan ‘NASA açıkladı: Burçlar değişti’ başlıklı haber ile de karşımıza çıkmış, bunun sahte haberler üreten bir sitenin ana akım medyayı kandırma girişimi olduğu ortaya çıkmıştı.\r\n\r\nPeki kısa sürede pek çok internet platformunun Türkçeleştirdiği bu haberlerdeki iddialı ifadelerin ne kadarı gerçek ne kadarı abartı?\r\n\r\nAmerikan Havacılık ve Uzay Dairesi (NASA) destekli olarak yapılan bir araştırmanın bulgularının, paralel e', 'Son günlerde yerli yabancı pek çok platform NASA\'nın finanse ettiği bir deneyde paralel evrenin keşfedildiği haberlerini okurlarına servis ediyor. Peki bu haberlerdeki iddialı ifadelerin ne kadarı gerçek ne kadarı abartı?', '2020-05-22 17:23:34', 14, 1),
(10, 'Doğanın yaşam örgüsü alarm veriyor: Biyolojik çeşitlilik kaybı artıyor', 'doga-alarm-veriyor', 'Canlı yaşam çeşitliliğinin azalmasıyla, dünyanın biyolojik değerlerinden her gün biraz daha yoksun kalması, insanoğlunun, doğadaki yaşam örgüsüne tutunarak ekonomik ve sosyal kalkınmayı sürdürmesini, sağlıklı, mutlu ve refah dolu bir geleceğe sahip olmasını da tehdit ediyor.\r\n\r\nSürdürülebilir dünya için doğal yaşam çeşitliliğinin korunması ve geliştirilmesini teşvik amacıyla Birleşmiş Milletler (BM) bünyesinde her yıl 22 Mayıs, &quot;Uluslararası Biyolojik Çeşitlilik&quot; günü olarak kutlanıyor.\r\n\r\nBu yıl, &quot;Çözüm Doğada&quot; temasıyla kutlanacak gün, yeni tip corona virüs (Covid-19) salgınıyla mücadele tedbirleri kapsamında ilk kez sadece çevrim içi kampanyalarla anılacak.', 'İklim değişikliği, tüketici tercihleri, kentleşme, demografi, tarımsal kirlilik ve aşırı hasat gibi unsurlar, doğada biyolojik çeşitliliği olumsuz etkileyerek yaklaşık 1 milyon canlı türünü yok olma tehlikesiyle baş başa bıraktı.', '2020-05-22 17:24:45', 14, 2),
(11, 'Facebook’a alışveriş dopingi', 'facebook-alisveris', 'Facebook dünya online alışveriş platformlarına rakip olacak yeni özelliğini görücüye çıkarmıştı\r\n\r\nFacebook ve sosyal medya devinin bünyesinde bulunan Instagram\'da kullanılacak özelliğin hizmete girmesi sonrası hisse değerleri rekor kırdı. \r\n\r\nCNBC’de yer alan habere göre 230 doları geçen hisselerde yüzde 6.5’luk bir artış gözlemlendi. \r\n\r\nFacebook söz konusu özellik sayesinde kullanıcıların sosyal medya platformları üzerinden ürün satmalarını mümkün hale getirdi. \r\n\r\nÖnümüzdeki dönemde WhatsApp, Messenger ve Instagram Direct üzerinden de sohbet içinden alışveriş yapabilecek.', 'Facebook’un çevrimiçi alışveriş özelliğini Facebook ve Instagram’da devreye almasının ardından hisse değerleri rekor kırdı.', '2020-05-22 17:25:31', 14, 1),
(12, 'Boston Dynamics\'in robot köpeği çoban oldu', 'boston-dynamics', 'Robot köpek Spot’un hünerlerini sergilediği yeni bir video paylaşıldı.\r\n\r\nABD\'li teknoloji şirketi Boston Dynamics\'in ürettiği robot köpek bu sefer bir koyun sürüsüne çobanlık yaptı.\r\n\r\nRobotik yazılım şirketi Rocos, satın aldığı robot köpeğin Yeni Zelanda kırlarında otlayan bir koyun sürüsünü güttüğü anların videosunu paylaştı.\r\n\r\nGörüntülere bakılırsa tıpkı bir çoban köpeği gibi, koyunları belli bir alanda otlamaları için yönlendiren robot köpek, bir insan gözetimine ihtiyaç duymuyor.', 'ABD\'li bir teknoloji firması tarafından üretilen robot köpek Spot, bir koyun sürüsüne çobanlık yaptı.', '2020-05-22 17:29:00', 14, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Duyuru'),
(2, 'Haber');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_surName` varchar(255) NOT NULL,
  `contact_mail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `contact_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_surName`, `contact_mail`, `title`, `message`, `contact_date`, `user_id`) VALUES
(17, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'aaaa', 'addddd', '2020-05-23 23:28:48', 14),
(18, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'asd', 'asd', '2020-05-23 23:29:28', 14),
(19, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'title lan', 'anaaaaaaaa', '2020-05-23 23:30:05', 14),
(20, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'çalışıyo', 'lannnnnnnnn', '2020-05-23 23:31:04', 14),
(21, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'aaaaaadddddddd', 'ddddddddssssssss', '2020-05-23 23:45:54', 14),
(22, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'Deneme Konu', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quisquam rem vel suscipit nam deserunt officiis accusantium beatae, similique, voluptatum vitae quidem voluptas natus quod at odio quibusdam veniam eligendi. Lorem, ipsum dolor sit ame', '2020-05-24 11:49:29', 14),
(23, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'aaaaa', 'ddddddddddddddd', '2020-05-24 18:40:04', 14),
(24, 'Onur', 'Kantar', 'onurkantr@gmail.com', 'sea', 'ase', '2020-06-17 17:54:13', 14);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'üye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surName`, `userName`, `mail`, `password`, `date`, `role_id`) VALUES
(14, 'Onur', 'Kantar', 'onur123', 'onurkantr@gmail.com', '$2y$10$vIltJzN/XWw1U3dUbtddzO4t0RIKRPEbizTcHjqNAeuo05tDqqLOy', '2020-05-19 16:52:38', 1),
(18, 'Uğur', 'Kantar', 'uur123', 'ugur@gmail.com', '$2y$10$2FT1Evd1DwujnI4pBduUpOg.LqqHcF3d1VOZT.e7nLCgMUTAnd.96', '2020-05-24 14:24:09', 2),
(19, 'Yusuf', 'Karali', 'yusu', 'yusubey@gmail.com', '$2y$10$l1AuI7otSoQ2FxAwuBgI.ubofcY8DFXnNoTF1kvS6GzL2xP7/RlRu', '2020-05-24 14:26:34', 2),
(20, 'Kadir', 'Karali', 'kadobaskan', 'kadir@gmail.com', '$2y$10$I5W5.F7uZZv8vsFCpv4JzOzwvdDTm5F6G3r8CwLCubCAT/BnwyNdO', '2020-05-24 14:27:03', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`,`mail`),
  ADD KEY `role_id` (`role_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Tablo kısıtlamaları `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
