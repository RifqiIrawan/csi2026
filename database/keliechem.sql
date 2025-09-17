# Host: localhost  (Version: 5.5.5-10.1.36-MariaDB)
# Date: 2025-02-09 13:17:47
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "company"
#

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` varchar(10) DEFAULT NULL,
  `description` text,
  `datecreated` datetime DEFAULT NULL,
  `nama2` varchar(255) DEFAULT NULL,
  `description2` text,
  `nama3` varchar(255) DEFAULT NULL,
  `description3` text,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "company"
#

REPLACE INTO `company` VALUES (1,'about','fce4107997868c192cab55de2df3370d.png','./assets/images/upload/company/','1','<p>PT. Kelie Chemical World was established in April 2006 as a privately owned company. The management and activities of the company are in the hand of very experience personnel, a total of nearly 100 years of experience. Major experiences are in management, technical, marketing and sales of chemicals. Servicing various chemical industries including resins, paints / coatings, inks, oil &amp; gas, bio fuel industries. The company has identified the needs of highly qualified personnel, innovative techniques and quality materials to support the growth of the chemical industries including resins, paints / coatings, inks, oil &amp; gas, bio fuel, cement, other chemicals and mining industries especially in Indonesia and through out the Asian region. These needs are good opportunities, therefore it is our purpose to respond and fulfill these needs We are looking forward to working together with you to develop a long lasting relationship to our mutual benefits.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Concept</strong></p>\r\n\r\n<p>The green color of our stationeries indicates our strong support for a &lsquo;GREEN&rsquo; environment and the &lsquo;GREEN&rsquo; world in general. The benzene ring shows our commitment to serving the various industries. The world map inside the benzene ring shows our future dream to serve the global businesses.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Vision</strong></p>\r\n\r\n<p>To utilize skill and know how of experience personnel to become the best business solution for the industries including cleaning chemical, resins, paints / coatings, inks, oil &amp; gas, biofuel industries</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Mission</strong></p>\r\n\r\n<p>To give added values to customers, share holders, employees and public in general in line with the company&rsquo;s growth. To provide competitive goods and services by giving priority to high quality and innovation in technology. To improve and upgrade the technical skill and know how in line with customer&rsquo;s requirement. To implement a good corporate governance.</p>\r\n','2025-02-09 11:52:31',NULL,NULL,NULL,NULL,'5','A','2025-02-09 12:05:31');

#
# Structure for table "content"
#

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `freetext` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "content"
#

REPLACE INTO `content` VALUES (1,'PT. Kelie Chemical World was established in April 2006 as a privately owned company. \r\nThe management and activities of the company are in the hand of very experience personnel, a total of nearly 100 years of experience. Major experiences are in management , technical, marketing and sales of chemicals. Servicing various chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel industries. The company has identified the needs of highly qualified personnel, innovative techniques and quality materials to support the growth of the chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel, cement , other chemicals and mining industries especially in Indonesia and through out the Asian region. These needs are good opportunities, therefore it is our purpose to respond and fulfill these needs We are looking forward to working together with you to develop a long lasting relationship to our mutual benefits.<br>\r\n<br><br>\r\nOur Concept<br>\r\nThe green color of our stationeries indicates our strong support for a `GREEN` environment and the `GREEN` world in general. The benzene ring shows our commitment to serving the various industries. The world map inside the benzene ring shows our future dream to serve the global businesses.<br><br>\r\nOur Mission<br>\r\nTo give added values to customers, share holders, employees and public in general in line with the company’s growth. To provide competitive goods and services by giving priority to high quality and innovation in technology. To improve and upgrade the technical skill and know how in line with customer’s requirement. To implement a good corporate governance.');

#
# Structure for table "customer"
#

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `datecreated` date DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

#
# Data for table "customer"
#

REPLACE INTO `customer` VALUES (3,'PT. Kencana Intidasar','Epoxy resin','1','2025-01-19','1','A',NULL),(4,'PT. Asia Petrocom Services','Drill pipe, Drill collar','1','2025-01-19','1','A',NULL),(5,'PT. Propan Raya ICC','Organic Solvent','1','2025-01-19','1','A',NULL),(6,'PT. Danapaint Indonesia','Concultancy','1','2025-01-19','1','A',NULL),(7,'PT. Prakarsa Karya Sejati','Basic chemicals, organic solvent','1','2025-01-19','1','A',NULL),(8,'PT. Trikemindo Utama','Pigments','1','2025-01-19','1','A',NULL),(9,'PT. Tri Haafco Pratama','Basic chemicals, organic solvent','1','2025-01-19','1','A',NULL),(10,'PT. Anugrah Nugi Pratama','Basic chemicals','1','2025-01-19','1','A',NULL),(11,'PT. United Chemicals Inter Aneka','Epoxy resin, Exhibition booth','1','2025-01-19','1','A',NULL),(12,'PTP. Nusantara XIII (persero)','Basic chemicals, organic solvent','1','2025-01-19','1','A',NULL),(13,'Pertamina Learning Center','Training','1','2025-01-19','1','A',NULL),(14,'PT. Pakar Widya Chemindo','Exhibition booth','1','2025-01-19','1','A',NULL),(15,'PT. Monokem Surya','Exhibition booth','1','2025-01-19','1','A',NULL),(16,'PT. Pardic Jaya Chemicals','Exhibition booth','1','2025-01-19','1','A',NULL),(17,'PT. Colorindo Chemtra','Exhibition booth','1','2025-01-19','1','A',NULL),(18,'PT. Kusuma Kemindo Sentosa','Exhibition booth','1','2025-01-19','1','A',NULL),(19,'PT. Royal Chemie Indonesia','Exhibition booth','1','2025-01-19','1','A',NULL),(20,'PT. Worldwide Resins & Chemicals','Exhibition booth','1','2025-01-19','1','A',NULL),(21,'PT. Hidup Makmur Lestari Abadi','Exhibition booth','1','2025-01-19','1','A',NULL),(22,'PT. Mata Pelangi Chemindo','Exhibition booth','1','2025-01-19','1','A',NULL),(23,'PT. Justus Sakti Raya','Exhibition booth','1','2025-01-19','1','A',NULL),(24,'PT. Merck Indonesiar','Exhibition booth','1','2025-01-19','1','A',NULL),(25,'PT. Bentala Sakti','Exhibition booth','1','2025-01-19','1','A',NULL),(26,'PT. Perhutani','Exhibition booth','1','2025-01-19','1','A',NULL),(27,'PT. Primatek / Lenteq','Exhibition booth','1','2025-01-19','1','A',NULL),(28,'PT. Inawan Chemindo','Exhibition booth','1','2025-01-19','1','A',NULL),(29,'PT. Tuna Sumber Ideakreasi','Exhibition booth','1','2025-01-19','1','A',NULL),(30,'Frost & Sullivan Pty. Ltd., Singapore','Consultancy','2','2025-01-19','1','A',NULL),(31,'Global Intelligence Alliance, China','Consultancy','2','2025-01-19','1','A',NULL),(32,'APS Specialty Chemicals, New Zealand','Organic Solvent','2','2025-01-19','1','A',NULL),(33,'Omni – Chem136, USA','Fine Chemical','2','2025-01-19','1','A',NULL),(34,'Lotus Ingredients, Ltd., Hongkong','Organic Solvent, basic chemicals','2','2025-01-19','1','A',NULL),(35,'TZ Trading Inc., Mexico','Inorganic acids','2','2025-01-19','1','A',NULL),(36,'Distribuidora De Sosa, Mexico','Basic chemicals','2','2025-01-19','1','A',NULL),(37,'OCA Pty. Ltd., Australia','Basic chemicals, organic solvent','2','2025-01-19','1','A',NULL),(38,'Golden Arrow Coating Co. Ltd., Thailand','Pigments, Resins, Consultancy','2','2025-01-19','1','A',NULL),(39,'PT Argo Manunggal','textile','1','2025-02-02','5','A',NULL);

#
# Structure for table "design_header"
#

CREATE TABLE `design_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` varchar(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "design_header"
#

REPLACE INTO `design_header` VALUES (2,'glassman asia 2019','Image1.jpg','./assets/images/upload/header/','1','2025-01-19 02:41:43','1','A',NULL),(3,'trencheless 2019','Image2.jpg','./assets/images/upload/header/','2','2025-01-19 02:42:49','1','A',NULL),(4,'coating','Image3.jpg','./assets/images/upload/header/','3','2025-01-19 02:43:56','1','A',NULL),(5,'WTPM Asia','Image4.jpg','./assets/images/upload/header/','4','2025-01-19 02:44:49','1','A',NULL),(6,'chemcleaner','Image5.jpg','./assets/images/upload/header/','5','2025-01-19 02:46:01','1','A',NULL),(7,'CC72','Image6.jpg','./assets/images/upload/header/','6','2025-01-19 02:46:19','1','A',NULL),(8,'test','Image7.jpg','./assets/images/upload/header/','7','2025-02-02 21:43:48','5','A',NULL),(9,'test2','Image8.jpg','./assets/images/upload/header/','8','2025-02-02 21:45:28','5','A',NULL);

#
# Structure for table "event"
#

CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `urut` varchar(10) DEFAULT NULL,
  `description` text,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "event"
#

REPLACE INTO `event` VALUES (1,'Goku Super saiya vegeto','a7a357817972423e4eea82b6b1e6bde5.jpg','./assets/images/upload/event/',1,'1','<p>Seri animasi&nbsp;<em>Dragon Ball</em>&nbsp;selalu menampilkan berbagai macam transformasi dari berbagai tokohnya. Contohnya adalah Goku atau Vegeta. Banyaknya transformasi yang menarik dari para karakternya, juga menjadi salah satu alasan mengapa banyak orang yang menyukai seri animasi&nbsp;<em>Dragon Ball</em>&nbsp;ini selain dari sisi jalan ceritanya. Super Saiyan Blue adalah salah satu transformasi terkuat di universe&nbsp;<em>Dragon Ball</em>.</p>\r\n\r\n<p>Super Saiyan Blue adalah sebuah transformasi spesial, yang muncul di cerita&nbsp;<em>Dragon Ball</em>&nbsp;baik di anime ataupun di serinya. Berikut adalah beberapa hal yang patut diketahui oleh&nbsp;<em>Geeks</em>&nbsp;semua tentang Super Saiyan Blue.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2025-02-06 23:36:30','kjasdhkjsakjdhkjsakdjkajsdhkjashdkjhbsakjdhkjsahkjdsakdsfsadsadsadsadsadsadsadsadsad','A','2025-02-09 12:38:16'),(2,'Super saiya Blue','5dae73127be6f3c361675cd15a9a051a.jpg','./assets/images/upload/event/',2,'2','<p>Goku dan Vegeta dapat memanfaatkan kekuatan dewa yang ada di dalam mereka, sambil mempertahankan bentuk fisik dan kekuatan Super Saiyan. Ini memberi mereka keuntungan yang besar dalam pertarungan, karena mereka dapat menggunakan kekuatan mereka dengan efisien dan memaksimalkan serangan mereka.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kekuatan Super Saiyan Blue Goku dan Vegeta tidak hanya terbatas pada tingkat kekuatan mereka. Mereka juga memiliki akses ke teknik-teknik khusus yang hanya dapat dilakukan dalam bentuk ini. Salah satu contohnya adalah &quot;God Kamehameha,&quot; serangan yang menggabungkan kekuatan Super Saiyan Blue dengan serangan khas Goku, Kamehameha.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Serangan ini memiliki kekuatan yang luar biasa dan mampu menghancurkan musuh-musuh yang kuat. Selain itu, Goku dan Vegeta juga memiliki kemampuan untuk meningkatkan kekuatan mereka lebih jauh lagi melalui pelatihan yang intensif.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam pertarungan melawan musuh-musuh seperti Jiren dan Broly, mereka telah menunjukkan kemampuan untuk melampaui batas-batas yang sebelumnya dianggap tidak tercapai. Kekuatan mereka terus berkembang, dan mereka terus mencari cara baru untuk meningkatkan kekuatan mereka.</p>\r\n','2025-02-06 23:43:47','5','A','2025-02-09 13:00:58'),(4,'213213213213','07dda0dfcbba2e1e09d45eb7bf733531.jpg','./assets/images/upload/event/',3,'3','Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut','2025-02-07 00:30:15','5','A','2025-02-07 00:30:51'),(5,'arby','Image4.jpg','./assets/images/upload/event/',4,'4','<p>test</p>\r\n','2025-02-07 21:56:58','5','A',NULL);

#
# Structure for table "login"
#

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "login"
#

REPLACE INTO `login` VALUES (1,'rifqi','rifqiirawan','d93591bdf7860e1e4ee2fca799911215','A','2025-01-14 00:00:00','1',NULL,NULL),(4,'Rifqi Irawan  ','rifqiirawan@gmail.com','202cb962ac59075b964b07152d234b70','A','2025-01-15 23:47:18','1',NULL,NULL),(5,'administrator','admin','81dc9bdb52d04dc20036dbd8313ed055','A','2025-01-15 23:47:18','1',NULL,NULL);

#
# Structure for table "news"
#

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `urut` varchar(10) DEFAULT NULL,
  `description` text,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "news"
#

REPLACE INTO `news` VALUES (1,'Kemenko PMK','Image1.jpg','./assets/images/upload/news/',2,'1','KEMENKO PMK – Asisten Deputi Riset Teknologi dan Kemitraan Industri Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan (Kemenko PMK) Katiman menyampaikan, Pemerintah memiliki prioritas untuk memastikan setiap daerah mendapatkan akses pendidikan yang layak dan setara.\n\nLangkah ini sejalan dengan arahan Presiden yang menegaskan program prioritas pada revitalisasi sekolah, membangun sekolah unggul, dan mempercepat digitalisasi pembelajaran untuk meningkatkan kualitas pendidikan di seluruh Indonesia.\n\nHal tersebut disampaikan Katiman saat mewakili Deputi Bidang Koordinasi Peningkatan Kualitas Pendidikan pada Forum Group Discussion (FGD) Mengawal Keberlanjutan Pembangunan SDM Berkualitas dan Unggul melalui Pendidikan, di Kantor BPKP, Jakarta, pada Rabu, (5/2/2025).\n\n“Fokus utama dalam program ini adalah pemerataan sarana dan prasarana (sarpras), digitalisasi pembelajaran, serta peningkatan kualitas pendidikan di sekolah unggulan,” ujar Katiman.\n\nLebih lanjut, Katiman menyampaikan bahwa menurut data dari Kementerian Pendidikan, Dasar dan Menengah (Kemendikdasmen), masih banyak sekolah yang belum mendapatkan alokasi anggaran untuk perbaikan sarpras selama beberapa tahun terakhir.\n\nKatiman juga menyampaikan akan memastikan revitalisasi ini tidak hanya menyentuh sekolah negeri, tetapi juga sekolah swasta yang membutuhkan dukungan. Oleh karena itu, ada alokasi anggaran yang disiapkan untuk membantu sekolah swasta dalam program ini.\n\nSelain revitalisasi fisik, Katiman menyampaikan, pemerintah juga menaruh perhatian pada masalah kekurangan guru di daerah terpencil, terutama di wilayah Indonesia Timur. Banyak kasus di mana sekolah sudah berdiri, tetapi tidak memiliki tenaga pendidik yang cukup. Bahkan, di beberapa wilayah konflik, guru memilih meninggalkan tempat tugas karena alasan keamanan.\n\n\"Kami mendapat laporan bahwa di beberapa daerah, tentara ikut mengajar anak-anak karena tidak ada guru yang bertahan lama di sana. Ini menjadi tantangan yang harus kami hadapi dengan solusi yang tepat,\" tambah Katiman.\n\nKemudian, Pemerintah juga tengah membangun Sekolah Menengah Atas (SMA) Unggulan, baik yang bersifat baru maupun transformatif. Sekolah unggulan baru akan dibangun dari nol di 4 (empat) lokasi awal, termasuk di Ibu Kota Nusantara (IKN) dan beberapa wilayah lain di Indonesia. Sementara itu, sekolah unggulan transformatif akan ditingkatkan dari sekolah-sekolah yang sudah berkualitas tinggi agar sesuai dengan standar pendidikan yang ditetapkan pemerintah.\n\n\"Program ini diharapkan bisa menghasilkan lulusan yang siap bersaing di tingkat global, bahkan mampu masuk ke 100 universitas terbaik dunia. Oleh karena itu, kami tengah mengkoordinasikan penyusunan Instruksi Presiden (Inpres) dan  Peraturan Presiden (Perpres) yang akan menjadi payung hukum bagi program ini,\" jelas Asdep Katiman.\n\nAsdep Katiman juga menyatakan selain pembangunan fisik, digitalisasi pendidikan juga menjadi bagian dari agenda pemerintah. Dalam hal ini, pemerintah tengah mempersiapkan kebijakan yang lebih bijak terkait penggunaan media sosial oleh anak-anak dalam proses pembelajaran.\n\nMengacu pada kebijakan di beberapa negara seperti Australia, yang melarang dan membatasi anak-anak di bawah 16 tahun menggunakan media sosial tertentu, Indonesia juga tengah mempertimbangkan pendekatan serupa untuk melindungi peserta didik dari dampak negatif teknologi.\n\nKemudian, program pembangunan SMA Unggul Garuda ini diharapkan bisa berjalan mulai tahun ini agar hasilnya bisa diukur sebagai capaian dari Pemerintahan Kabinet Merah Putih. Dengan demikian, program ini dapat diukur efektivitasnya dan memberikan dampak nyata bagi dunia pendidikan Indonesia. (*)','2025-02-07 00:32:36','5','A',NULL),(2,' Ternyata, Gas 3 Kg Masih Langka','58b233635f4faf92591c5b4aa88e8870.jpg','./assets/images/upload/news/',2,'2','<p><strong>Denpasar,&nbsp;Balijani.id</strong>&nbsp;~ Pengacara sekaligus mantan wartawan, Jro Komang Sutrisna, SH, mengkritik keras PT Pertamina (Persero) yang ia nilai telah bertindak layaknya pemilik subsidi elpiji 3 kg.</p>\r\n\r\n<p>Padahal, menurutnya, Pertamina hanyalah pelaksana yang ditunjuk untuk menyalurkan subsidi dari pemerintah kepada masyarakat miskin. Ia menilai mekanisme distribusi yang diterapkan Pertamina cenderung tertutup, tidak transparan, dan berpotensi melanggar regulasi yang mengatur persaingan usaha serta kewenangan pemerintah daerah.</p>\r\n\r\n<p>Lebih lanjut, Jro Sutrisna yang kini membentuk Lembaga Kajian Bali Shanti (LKBS), menyoroti bagaimana setiap tahun kuota elpiji subsidi selalu dimohon oleh pemerintah daerah untuk memenuhi kebutuhan masyarakat. Namun, sebagai pemilik barang subsidi, pernahkah pemerintah daerah melalui Dinas Perdagangan melakukan audit ke dalam sistem distribusi elpiji subsidi yang dititipkan di Pertamina?</p>\r\n\r\n<p>Ia menegaskan bahwa kontrol penuh Pertamina terhadap subsidi melanggar Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah, yang mengatur bahwa pemerintah daerah memiliki hak dalam mengelola dan mengawasi sumber daya yang berkaitan dengan kesejahteraan rakyat.</p>\r\n\r\n<p>Selain itu, tindakan Pertamina juga berpotensi melanggar Undang-Undang Nomor 5 Tahun 1999 tentang Larangan Praktik Monopoli dan Persaingan Usaha Tidak Sehat.</p>\r\n\r\n<p>Ketua LKBS ini, juga menyoroti sistem pembayaran yang diterapkan dalam distribusi elpiji subsidi, di mana pangkalan harus membayar lebih dulu kepada agen sebelum mendapatkan pasokan.</p>\r\n\r\n<p>Menurut Undang-Undang Nomor 30 Tahun 2007 tentang Energi, pengelolaan energi, termasuk subsidi, harus dilakukan untuk meningkatkan kesejahteraan rakyat dan memastikan distribusinya tepat sasaran. Namun, dalam praktiknya, sistem pembayaran ini justru menimbulkan ketidakjelasan alur subsidi dan membuka ruang manipulasi harga.</p>\r\n\r\n<p>Selain itu, Peraturan Presiden Nomor 104 Tahun 2007 telah menetapkan bahwa harga jual elpiji subsidi tidak boleh lebih tinggi dari yang ditetapkan pemerintah. Namun, karena pangkalan harus membayar lebih dulu, agen yang menerima pembayaran bisa dengan mudah mengontrol harga dan menyimpangkan distribusi.</p>\r\n\r\n<p>Lebih lanjut, Peraturan Menteri ESDM Nomor 13 Tahun 2018 juga mewajibkan distribusi elpiji subsidi dilakukan tepat sasaran. Namun, sistem pembayaran di awal ini justru memicu praktik mark-up harga dan menimbulkan ketidakpastian distribusi.</p>\r\n\r\n<p>Jro Sutrisna juga menyoroti isu pengoplosan gas subsidi yang selalu sengaja dihembuskan ke publik ketika terjadi kelangkaan elpiji 3 kg. Ia menyebut hal itu hanya sebagian kecil dari kebocoran di tingkat hilir. Menurutnya, selama ini aparat penegak hukum hanya menangkap pekerja lapangan, sedangkan aktor besar di balik sistem manipulasi distribusi gas subsidi tetap aman dan tidak tersentuh hukum.</p>\r\n\r\n<p>Menurut Jro Sutrisna, manipulasi ini bukan sekadar pengoplosan skala kecil, tetapi bermula dari kebijakan sistematis yang menyunat alokasi gas bersubsidi dan mengalihkannya ke industri dengan harga lebih tinggi.</p>\r\n\r\n<p>Modusnya sangat licik. Dokumen distribusi gas subsidi tetap diterbitkan, tetapi dalam praktiknya, sebagian alokasi gas 3 kg yang seharusnya untuk masyarakat miskin justru dijual ke industri atau dikemas ulang menjadi gas non-subsidi.</p>\r\n','2025-02-07 00:33:25','5','A','2025-02-09 13:07:38'),(3,'test artikel','Image3.jpg','./assets/images/upload/news/',3,'3','<p><strong>Pengertian Teks</strong></p>\r\n\r\n<p>Teks adalah sebuah tulisan yang disusun dengan kalimat yang memiliki konteks. Kalau dalam teori sastra, teks adalah segala benda yang dapat &ldquo;dibaca&rdquo;, baik benda tersebut berupa karya sastra, tanda jalan, atau gaya pakaian.</p>\r\n\r\n<p>Tapi, dalam hal ini, cakupannya hanya akan seputar &ldquo;tulisan&rdquo; saja ya,&nbsp;<em>guys</em>. Maka dari itu, setiap teks bahasa Inggris memiliki struktur dan kaidah kebahasaan (language feature) dalam penulisannya.</p>\r\n\r\n<p><strong>Jenis-jenis Teks Bahasa Inggris</strong></p>\r\n\r\n<p><strong>1. Descriptive Text&nbsp;</strong></p>\r\n\r\n<p><em>Descriptive text</em>&nbsp;bertujuan untuk menggambarkan/menjelaskan kepada pembaca mengenai seseorang, tempat, benda, hewan, dan hal lainnya secara detail. Pada teks ini, suatu objek akan dipaparkan secara rinci. Fungsinya supaya pembaca bisa membayangkan bagaimana bentuk, suasana, atau wujud dari suatu objek. Struktur dari&nbsp;<em>descriptive text&nbsp;</em>adalah&nbsp;<em>identification&nbsp;</em>dan&nbsp;<em>description</em>.</p>\r\n\r\n<p><strong>2. Explanation Text</strong></p>\r\n\r\n<p>Sederhananya,&nbsp;<em>descriptive</em>&nbsp;<em>text</em>&nbsp;itu berisi mengenai penjelasan yang menjawab pertanyaan &ldquo;what&rdquo; atau &ldquo;apa&rdquo;.&nbsp;<em>Nah</em>, sementara,&nbsp;<em>explanation text&nbsp;</em>adalah jenis teks untuk menjawab pertanyaan &ldquo;how&rdquo;, alias bagaimana. Jadi, teks eksplanasi berfungsi untuk menjelaskan bagaimana suatu hal bisa terjadi, sifatnya logis dan mendetail.&nbsp;</p>\r\n\r\n<p>Umumnya&nbsp;<em>explanation text</em>&nbsp;digunakan banyak orang untuk memaparkan fenomena alam, sosial, dan juga budaya. Supaya pembaca bisa semakin mudah untuk memahami isi teks, biasanya sang penulis akan melengkapi teks dengan gambar yang relevan. Struktur dari&nbsp;<em>explanation text&nbsp;</em>adalah&nbsp;<em>general statement, explanation</em>, dan ada juga yang menambahkannya dengan&nbsp;<em>conclusion</em>.</p>\r\n\r\n<p><strong>3. Recount Text&nbsp;</strong></p>\r\n\r\n<p>Kamu hobi mengabadikan pengalaman melalui tulisan?&nbsp;<em>Nah</em>, berarti&nbsp;<em>recount text&nbsp;</em>bisa jadi salah satu teks yang cocok untuk kamu tulis. Jadi,&nbsp;<em>recount&nbsp;</em>adalah teks yang menjelaskan cerita/pengalaman dari kejadian lampau, misal cerita&nbsp;<em>traveling</em>, mengikuti lomba, dan lain-lain.&nbsp; Struktur teks recount adalah&nbsp;<em>orientation, series of event,&nbsp;</em>kemudian diakhiri dengan&nbsp;<em>reorientation</em>.</p>\r\n\r\n<p><strong>4. Narrative Text (Teks Naratif)</strong></p>\r\n\r\n<p>Apakah kamu sering mendengarkan kisah Cinderella dan sepatu kacanya?&nbsp;<em>Yap!&nbsp;</em>Itu merupakan salah satu contoh dari&nbsp;<em>narrative text&nbsp;</em>atau narasi yang bersifat fiktif dan menghibur.&nbsp;<em>Narrative text</em>&nbsp;merupakan sebuah teks yang biasa dijadikan sebagai bahan&nbsp;<em>story telling</em>&nbsp;atau dongeng bahasa Indonesia mau pun bahasa Inggris. Generic structure dari&nbsp;<em>narrative text&nbsp;</em>adalah&nbsp;<em>orientation, complication, resolution</em>, dan yang terakhir&nbsp;<em>reorientation</em>.</p>\r\n\r\n<p><strong>5. Report Text</strong></p>\r\n\r\n<p>Kalau membaca kata &ldquo;report&rdquo;, biasanya kita akan langsung teringat dengan &ldquo;laporan&rdquo;.&nbsp;<em>Yap,&nbsp;</em>teks ini digunakan untuk menuliskan laporan/informasi dari suatu objek, atau bisa juga dari hasil penelitian.&nbsp;<em>Hmm</em>, apa bedanya dengan descriptive text?</p>\r\n\r\n<p>Kalau tujuan dari teks deskripsi itu menceritakan sesuatu secara detail dan lebih spesifik.&nbsp;<em>Nah</em>, dalam&nbsp;<em>report text</em>, sebuah objek akan digambarkan secara umum. Contohnya adalah mengenai &ldquo;My Cat&rdquo;, lalu kamu menuliskan bagaimana warna kucing itu, siapa namanya, apa jenisnya, bagaimana ciri-cirinya,&nbsp;<em>etc</em>.</p>\r\n\r\n<p>Teks report akan memberikan deskripsi terhadap &ldquo;Cat&rdquo; pada umumnya. Misal kakinya ada berapa, bagian tubuhnya ada apa saja,&nbsp;<em>and many more</em>. Dalam teks ini,&nbsp;<em>generic structure</em>&nbsp;yang akan kamu temukan adalah&nbsp;&nbsp;<em>general classification&nbsp;</em>dan&nbsp;<em>description.&nbsp;</em></p>\r\n\r\n<p>Meskipun jenis teks bahasa Inggris-nya cukup banyak, kamu nggak perlu galau. Soalnya, English Academy kan sudah memberikan penjelasan masing-masing jenis teks yang populer pada artikel terpisah. Jadi, kamu bisa belajar dengan lebih detail melalui artikel tersebut. Semangat!</p>\r\n','2025-02-09 11:34:54','5','A',NULL);

#
# Structure for table "partner"
#

CREATE TABLE `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `urut` varchar(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "partner"
#

REPLACE INTO `partner` VALUES (2,'Quartz Business Media','Partner1.jpg','./assets/images/upload/partner/','https://www.quartzltd.com/','1','2025-01-19 04:30:37','1','A','2025-02-05 00:43:32'),(3,'Westrade Group LTd','Partner2.jpg','./assets/images/upload/partner/','https://www.westrade.co.uk/','2','2025-01-19 04:30:59','1','A',NULL),(4,'DMG Events','Partner3.jpg','./assets/images/upload/partner/','https://www.dmgevents.com/','3','2025-01-19 04:31:11','1','A',NULL),(5,'test','Partner4.jpg','./assets/images/upload/partner/','https://www.google.com','4','2025-02-02 21:46:33','5','A',NULL);

#
# Structure for table "product"
#

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` varchar(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "product"
#

REPLACE INTO `product` VALUES (1,'Chem Cleaner Brochure','Product1.jpg','./assets/images/upload/product/','1','2025-01-19 04:06:04','1','A',NULL),(2,'Patented phospate brine brochure upon request','Product2.jpg','./assets/images/upload/product/','2','2025-01-19 04:06:27','1','A',NULL),(3,'Chem Cleaner CC72','Product3.png','./assets/images/upload/product/','3','2025-01-19 04:08:41','1','A',NULL),(4,'W T P M A','Product4.jpg','./assets/images/upload/product/','4','2025-01-19 04:12:13','1','A',NULL),(5,'A P C S','Product5.jpg','./assets/images/upload/product/','5','2025-01-19 04:14:02','1','A',NULL),(6,'glassman','Product6.jpg','./assets/images/upload/product/','6','2025-01-19 04:15:45','1','A',NULL),(7,'test','Product7.jpg','./assets/images/upload/product/','7','2025-02-02 21:49:26','5','A',NULL);

#
# Structure for table "profile"
#

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `address` text,
  `gmaps` text,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "profile"
#

REPLACE INTO `profile` VALUES (1,'PT. Kelie Chemical Word','logo_com1.png','./assets/images/upload/logo/','keliechem','Jl. Gading Indah Utara II, NH-17/19,\r\nKelapa Gading, Jakarta 14250\r\nINDONESIA.','https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl. Gading Indah Utara II Blok Nh 17 No.19 19, RT.2/RW.12, Pegangsaan Dua, Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14250, Indonesia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed','+62 21 453 2003','+62 21 452 2959','contact@keliechem.com','www.keliechem.com','A','2025-02-02 03:07:09','5',NULL);

#
# Structure for table "sosmed"
#

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "sosmed"
#

REPLACE INTO `sosmed` VALUES (1,'youtube','youtube','https://www.google.com','A','2025-02-02 00:52:06','5'),(2,'instagram','instagram','wqeqeqeqweqwewqewqe','A','2025-02-02 00:52:37','5'),(3,'fb','facebook',NULL,'A','2025-02-02 00:53:55','5'),(4,'twitter','twitter',NULL,'A','2025-02-02 00:54:07','5'),(5,'tiktok','tiktok','http://tiktok.com/','A','2025-02-02 21:54:37','5');

#
# Structure for table "submit_form"
#

CREATE TABLE `submit_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "submit_form"
#

REPLACE INTO `submit_form` VALUES (1,'123','123','azmiradina52@gmail.com','213','2025-01-27 23:32:26'),(2,'dfsf','werewr','rifqiirawan@gmail.com','erwrewrewr','2025-01-27 23:34:45'),(3,'wqeqe','wqeqe','kantorrifqi17@gmail.com','wqewqe','2025-01-27 23:35:56'),(4,'Rifqi Irawan','test','admin@gmail.com','1234','2025-02-02 21:52:05'),(5,'yacuy','Test Program','abc@gmail.com','lalalalalala','2025-02-07 21:59:33');

#
# Structure for table "visitor_ip"
#

CREATE TABLE `visitor_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip4` varchar(255) DEFAULT NULL,
  `ip_public` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `vendor` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "visitor_ip"
#

REPLACE INTO `visitor_ip` VALUES (1,'::1','103.129.48.195','Bekasi','ID','-6.2349,106.9896','AS135478 PT. Cyberindo Aditama','Asia/Jakarta','2025-02-02 21:53:23'),(2,'::1','103.19.110.220','Tangerang','ID','-6.1781,106.6300','AS132641 PT Netciti Persada','Asia/Jakarta','2025-02-05 09:09:59'),(3,'::1','103.145.244.16','Pasarkemis','ID','-6.1703,106.5303','AS132641 PT Netciti Persada','Asia/Jakarta','2025-02-05 17:47:49'),(4,'::1','103.145.218.218','Jakarta','ID','-6.2146,106.8451','AS132641 PT Netciti Persada','Asia/Jakarta','2025-02-05 17:57:44'),(5,'::1','101.128.125.186','Jakarta','ID','-6.2146,106.8451','AS135478 PT. Cyberindo Aditama','Asia/Jakarta','2025-02-05 22:40:46');
