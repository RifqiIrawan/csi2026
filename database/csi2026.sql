# Host: localhost  (Version: 5.5.5-10.1.36-MariaDB)
# Date: 2025-09-24 23:05:06
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
  `urut` int(10) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "company"
#

REPLACE INTO `company` VALUES (1,'About Us','253ac002b47f0577a1fd45434f471def.jpg','./assets/images/upload/company/',1,'<p>qqqq</p>\r\n','2025-03-18 09:55:08',NULL,NULL,NULL,NULL,'5','A','2025-03-18 10:43:50');

#
# Structure for table "content"
#

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `freetext` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "content"
#

REPLACE INTO `content` VALUES (1,'PT. Kelie Chemical World was established in April 2006 as a privately owned company. \r\nThe management and activities of the company are in the hand of very experience personnel, a total of nearly 100 years of experience. Major experiences are in management , technical, marketing and sales of chemicals. Servicing various chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel industries. The company has identified the needs of highly qualified personnel, innovative techniques and quality materials to support the growth of the chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel, cement , other chemicals and mining industries especially in Indonesia and through out the Asian region. These needs are good opportunities, therefore it is our purpose to respond and fulfill these needs We are looking forward to working together with you to develop a long lasting relationship to our mutual benefits.<br>\r\n<br><br>\r\nOur Concept<br>\r\nThe green color of our stationeries indicates our strong support for a `GREEN` environment and the `GREEN` world in general. The benzene ring shows our commitment to serving the various industries. The world map inside the benzene ring shows our future dream to serve the global businesses.<br><br>\r\nOur Mission<br>\r\nTo give added values to customers, share holders, employees and public in general in line with the company’s growth. To provide competitive goods and services by giving priority to high quality and innovation in technology. To improve and upgrade the technical skill and know how in line with customer’s requirement. To implement a good corporate governance.');

#
# Structure for table "content1"
#

CREATE TABLE `content1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image_title` text,
  `image` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "content1"
#

REPLACE INTO `content1` VALUES (1,'asdsadsad','<p>asdsad</p>\r\n','adsadsa','08f606ffd4907f888f0796160ad2bd81.jpg','A');

#
# Structure for table "customer"
#

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "customer"
#

REPLACE INTO `customer` VALUES (2,'Rifqi Irawan  ','Customer1.png','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',1,'2025-03-22 02:13:28','5','A',NULL,1),(3,'sadsa','Customer2.jpg','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',2,'2025-03-25 17:00:01','5','A',NULL,1),(4,'sadasdas','Customer3.jpg','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',3,'2025-03-25 17:00:11','5','A',NULL,1),(5,'sadsad','Customer4.jpg','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',4,'2025-03-25 17:00:21','5','A',NULL,1),(6,'asdad','Customer5.png','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',5,'2025-03-25 17:00:31','5','A',NULL,1),(7,'3242','Customer6.png','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',6,'2025-03-25 17:03:25','5','A',NULL,1),(8,'234234','Customer7.jpg','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',7,'2025-03-25 17:03:38','5','A',NULL,1),(9,'32424','Customer8.jpg','./assets/images/upload/customer/','https://stackoverflow.com/questions/17711146/how-to-open-link-in-a-new-tab-in-html',8,'2025-03-25 17:03:51','5','A',NULL,1),(10,'test','Customer9.jpg','./assets/images/upload/customer/','aaaa',9,'2025-03-29 21:45:02','5','A',NULL,1);

#
# Structure for table "customer_old"
#

CREATE TABLE `customer_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `datecreated` date DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "customer_old"
#


#
# Structure for table "event"
#

CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `description1` text,
  `image1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `description2` text,
  `image2` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "event"
#

REPLACE INTO `event` VALUES (1,'03-05 JUNE 2026 at Jakarta International Convention Center','asdsada1','<p>asdsadada1</p>\r\n','993c249454a5bd5ad3730299aef47d67.jpeg','adadada2','<p>asdsadasd</p>\r\n','558dab34fe60026a2ce18e643b8f2fe2.jpeg','A','2025-09-22 23:25:17','5',NULL),(2,'sadsadsa','sadsadsad','<p>asdsada</p>\r\n','de899aa19444462cfa798b9810b5465e.jpg','13ad','<p>asdasdsa</p>\r\n','832dd1585c4aba11c993af61f35dd3d9.png','A','2025-09-22 23:26:54','5',NULL);

#
# Structure for table "event_old"
#

CREATE TABLE `event_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `description` text,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "event_old"
#

REPLACE INTO `event_old` VALUES (8,'Asia Pasific Coatings Show','Image1.png','./assets/images/upload/event/',1,1,'<p>Across 3 days, the event was attended by 4,986 unique attendees from 78 different countries that included Indonesia, China, Malaysia, Singapore and India.</p>\r\n\r\n<p>A total of 236 exhibitors from 14 countries, including Indonesia, Germany, South Korea, Netherlands, India, UAE and China amongst others, participated.</p>\r\n\r\n<p>Visitors also had complimentary access to the Asia Pacific Coatings Conference on day 1 and the Business Presentations Hub on day 2, where 16 speakers elaborated on the latest trends, products and solutions in the coatings industry.</p>\r\n','2025-02-19 15:04:15','6','A',NULL),(9,'World Tobbaco Asia ','d28489176862db5f254e9dead2962702.jpg','./assets/images/upload/event/',2,2,'<p>Exhibiting at WT Asia 2025 will provide your company with the perfect platform to showcase your latest products and services to a range of international attendees. Exhibit at WT Asia and you&#39;ll be able to:</p>\r\n\r\n<p>Meet with high-quality business decision makers<br />\r\nLaunch new products and research other advances in the market<br />\r\nRaise awareness of your brand and product portfolio<br />\r\nGain important feedback from existing and potential clients<br />\r\nNetwork with the industry in a social setting without distractions<br />\r\nParticipate in and benefit from the international WT publicity campaign<br />\r\nGain valuable insight on future trends and innovations</p>\r\n\r\n<p>For further information contact:</p>\r\n\r\n<p>Adiwan Djohanli, +62 811-991-595; adiwan.djohanli@keliechem.com</p>\r\n','2025-02-19 15:29:11','6','A','2025-02-19 16:19:15');

#
# Structure for table "event_value"
#

CREATE TABLE `event_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `value` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "event_value"
#

REPLACE INTO `event_value` VALUES (1,'Paint Companies in Indonesia','232','A');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "login"
#

REPLACE INTO `login` VALUES (1,'Joy','Joy','25f9e794323b453885f5181f1b624d0b','A','2025-01-14 00:00:00','1','2025-02-13 05:02:40','5'),(4,'Rifqi Irawan  ','rifqiirawan@gmail.com','202cb962ac59075b964b07152d234b70','A','2025-01-15 23:47:18','1',NULL,NULL),(5,'administrator','admin','81dc9bdb52d04dc20036dbd8313ed055','A','2025-01-15 23:47:18','1',NULL,NULL),(6,'Wahyuni','Wahyuni','81dc9bdb52d04dc20036dbd8313ed055','A','2025-02-13 05:02:02','5',NULL,NULL);

#
# Structure for table "menu"
#

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "menu"
#

REPLACE INTO `menu` VALUES (2,'Pigments','A','asdsa'),(3,'Resins','A','sdsad');

#
# Structure for table "product"
#

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "product"
#

REPLACE INTO `product` VALUES (1,'qweqwe','A','wqe');

#
# Structure for table "product_old"
#

CREATE TABLE `product_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "product_old"
#

REPLACE INTO `product_old` VALUES (1,'Chem Cleaner Brochure','c4d772a0a0343a043afbd1b113382bb6.pdf','./assets/images/upload/product/',1,'2025-01-19 04:06:04','1','A','2025-03-10 23:20:03'),(2,'Patented phospate brine brochure upon request','Product2.jpg','./assets/images/upload/product/',2,'2025-01-19 04:06:27','1','A',NULL),(3,'Chem Cleaner CC72','Product3.png','./assets/images/upload/product/',3,'2025-01-19 04:08:41','1','A',NULL),(4,'W T P M A','Product4.jpg','./assets/images/upload/product/',4,'2025-01-19 04:12:13','1','A',NULL),(5,'A P C S','Product5.jpg','./assets/images/upload/product/',5,'2025-01-19 04:14:02','1','A',NULL),(6,'glassman','Product6.jpg','./assets/images/upload/product/',6,'2025-01-19 04:15:45','1','A',NULL),(8,'Disinfectant ChemCleaner CC41','Product7.jpg','./assets/images/upload/product/',7,'2025-03-07 16:21:52','6','A',NULL),(9,'Hand Sanitizer ChemCleaner CC41S refil @ 1 Liter','Product8.jpg','./assets/images/upload/product/',8,'2025-03-07 16:22:55','6','A',NULL),(10,'Hand Sanitizer ChemCleaner CC41S Spray 100ml','d5c4aaf48d8d13b5fe721c4865e8466a.jpeg','./assets/images/upload/product/',9,'2025-03-07 16:23:33','6','A','2025-03-07 16:45:41'),(11,'Hand Sanitizer ChemCleaner CC41S Pump 1 Liter','304949405e33569b22ddc0d79ae14237.jpeg','./assets/images/upload/product/',10,'2025-03-07 16:24:08','6','A','2025-03-07 16:46:32'),(12,'V&B Care Fogging Disinfectant Xtra Lavender 1 Liter ','e675e1ef31c246233b6e81e701dfaff1.jpg','./assets/images/upload/product/',11,'2025-03-07 16:24:52','6','A','2025-03-07 16:40:30'),(13,'V&B Care Fogging Disinfectant 1 Liter ','46928a1d00607a26b3c9c829cfc4cab1.jpg','./assets/images/upload/product/',12,'2025-03-07 16:25:27','6','A','2025-03-07 16:40:53'),(14,'V&B Care Disinfectant Refil 5 Liter','a7636d15c11b4a19a451c8d10a472cbe.jpg','./assets/images/upload/product/',13,'2025-03-07 16:26:00','6','A','2025-03-07 16:41:15'),(15,'V&B Care Disinfectant pump 500 ml','55693f2d1c7484350d82d6a0fb826814.jpg','./assets/images/upload/product/',14,'2025-03-07 16:26:40','6','A','2025-03-07 16:42:16'),(16,'Electric Fogging Machine','df246b08e0d4e902f9741b5fb6721519.jpg','./assets/images/upload/product/',15,'2025-03-07 16:27:03','6','A','2025-03-07 16:44:07'),(17,'Nano Disinfectant Sprayer','9e2f431ca4d4c6ce0432c194a813a943.jpeg','./assets/images/upload/product/',16,'2025-03-07 16:28:27','6','A','2025-03-07 16:43:26'),(18,'Thermal Mist Fog Sprayer','cb6612136850e95234fae603d9d69b8a.jpg','./assets/images/upload/product/',17,'2025-03-07 16:30:19','6','A','2025-03-07 16:43:50'),(23,'32424','Product18.pdf','./assets/images/upload/product/',18,'2025-03-10 23:14:11','5','A',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "profile"
#


#
# Structure for table "support"
#

CREATE TABLE `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "support"
#

REPLACE INTO `support` VALUES (2,'Quartz Business Media','Partner1.jpg','./assets/images/upload/support/','https://www.quartzltd.com/',1,'2025-01-19 04:30:37','1','A','2025-02-05 00:43:32'),(3,'Westrade Group LTd1','2c560a382b08b1ea76746f914978d364.jpg','./assets/images/upload/support/','https://www.westrade.co.uk/',2,'2025-01-19 04:30:59','1','A','2025-09-24 23:04:20');
