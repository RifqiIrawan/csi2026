# Host: localhost  (Version: 5.5.5-10.1.36-MariaDB)
# Date: 2025-10-02 23:36:57
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "book_stand"
#

CREATE TABLE `book_stand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `description2` text,
  `file_name` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "book_stand"
#

REPLACE INTO `book_stand` VALUES (1,'sadsad','<p>adssad</p>\r\n','<p>asdasd</p>\r\n','spec.png','A');

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
# Structure for table "contact"
#

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "contact"
#

REPLACE INTO `contact` VALUES (1,'wwerew423424','ewrewrewr','324324324','developer@argomanunggalgroup.com','A');

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

REPLACE INTO `content1` VALUES (1,'WELCOME TO Coating Show','Don’t miss the opportunity to promote your products internationally, regionally and locally at affordable costs.\r\n','<span>WELCOME TO EMPOWERING INDUSTRIES</span>','08f606ffd4907f888f0796160ad2bd81.jpg','A');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "event"
#

REPLACE INTO `event` VALUES (3,'03-05 JUNE 2026 At Jakarta International Convention Center','Become An Exhibitor!','<p style=\"margin-bootom:0rem;font-size:18px;font-family: Montserrat, sans-serif\">Don&rsquo;t miss the opportunity to promote your products internationally, regionally and locally</p>\r\n\r\n<p style=\"margin-bootom:0rem;font-size:18px;font-family: Montserrat, sans-serif\">at affordable costs.</p>\r\n\r\n<p style=\"margin-bootom:0rem; font-size:1.25rem;font-family: Montserrat, sans-serif;line-height:normal;letter-spacing: 10px\">03-05 JUNE 2026</p>\r\n\r\n<p style=\"margin-bootom:0rem;font-size:1.313rem;font-family: Montserrat, sans-serif;line-height:normal;letter-spacing: 10px\">JAKARTA INTERNATIONAL CONVENTION CENTER</p>\r\n','ca5f30a66f02254d2ea021c2a03ccbe9.jpg','VISIT Coating Show !','<p style=\"margin-bootom:0rem;font-size:16px;font-family: Montserrat, sans-serif;text-align:center;color:white\">Register now and explore hundreds of brands in one single place.</p>\r\n\r\n<p style=\"margin-bootom:0rem;font-size:20px;font-family: Montserrat, sans-serif;text-align:center;color:white\">FREE ADMISSION</p>\r\n','ab338fd2ffc088ad7acb4df64c516bb6.jpg','A','2025-09-28 22:46:12','5',NULL);

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
  `title` text,
  `value` varchar(255) DEFAULT '',
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "event_value"
#

REPLACE INTO `event_value` VALUES (1,'Paint Companies in Indonesia','200','A'),(2,'Multi National / Regional Brands','34','A'),(3,'National Brands','92','A'),(4,'Small / Medium Manufacturers','74','A');

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
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "menu"
#

REPLACE INTO `menu` VALUES (1,'Home',NULL,'A',NULL),(2,'Exhibiting',NULL,'A',NULL),(3,'Visiting',NULL,'A',NULL),(4,'Information',NULL,'A',NULL),(5,'Contact',NULL,'A',NULL),(6,'News Upadate ',NULL,'A',NULL);

#
# Structure for table "partner"
#

CREATE TABLE `partner` (
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "partner"
#

REPLACE INTO `partner` VALUES (2,'Quartz Business Media','Partner1.jpg','./assets/images/upload/partner/','https://www.quartzltd.com/',1,'2025-01-19 04:30:37','1','A','2025-02-05 00:43:32'),(3,'Westrade Group LTd','Partner2.jpg','./assets/images/upload/partner/','https://www.westrade.co.uk/',2,'2025-01-19 04:30:59','1','A',NULL),(4,'DMG Events','Partner3.jpg','./assets/images/upload/partner/','https://www.dmgevents.com/',3,'2025-01-19 04:31:11','1','A',NULL);

#
# Structure for table "product"
#

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  `urut` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "product"
#

REPLACE INTO `product` VALUES (1,'Pigments','A',NULL,1),(2,'Resins','A',NULL,2),(3,'Additives','A',NULL,3),(4,'Production<br>Machines','A',NULL,4),(5,'Laboratory Testing Equipments','A',NULL,5),(6,'Packaging Suppliers/Producers','A',NULL,6),(7,'Paint<br>Manufactures','A',NULL,7),(8,'Painting<br>Equipments','A',NULL,8),(9,'Painting<br>Contractors','A',NULL,9);

#
# Structure for table "profile"
#

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `vision` text,
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

REPLACE INTO `profile` VALUES (2,'coating show','<p><span style=\"font-size:20px;text-align: justify;\">Coating Show aims to bring together professionals, stakeholders, and enthusiasts from the industries to explore the latest innovations, technologies, and trends. This event will serve as a platform for networking, knowledge exchange and business opportunities within the coatings industries.</span></p>\r\n<p style=\"font-size: 20px;text-align: justify;\">The show is an international show attended by business operators and visitors of related industries globally, regionally and locally. The multinational, regional and local exhibitors shall have the opportunity to directly meeting their clients and products’ end users.</p>','logo_com2.png','./assets/images/upload/profile/','coating show indonesia','asdsad','asdsad','213213','123213','developer@argomanunggalgroup.com','adasd','A','2025-10-02 22:04:47','5',NULL);

#
# Structure for table "quick_link"
#

CREATE TABLE `quick_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "quick_link"
#


#
# Structure for table "sosmed"
#

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sosmed"
#

REPLACE INTO `sosmed` VALUES (1,'youtube','youtube','-','P','2025-02-02 00:52:06','5'),(2,'instagram','instagram','-','A','2025-02-02 00:52:37','5'),(3,'fb','facebook','-','A','2025-02-02 00:53:55','5'),(4,'twitter','twitter','-','P','2025-02-02 00:54:07','5'),(5,'tiktok','tiktok','-','P','2025-02-02 21:54:37','5'),(6,'Linkedin','linkedin','-','A','2025-02-18 10:38:16','6');

#
# Structure for table "submenu"
#

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) DEFAULT NULL,
  `sub_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "submenu"
#

REPLACE INTO `submenu` VALUES (1,'2','Why Exhibit',NULL,'A',NULL),(2,'2','Exhibitor List',NULL,'A',NULL),(3,'2','Exhibitor Visa',NULL,'A',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "support"
#

REPLACE INTO `support` VALUES (2,'Quartz Business Media','Partner1.jpg','./assets/images/upload/support/','https://www.quartzltd.com/',1,'2025-01-19 04:30:37','1','A','2025-02-05 00:43:32'),(3,'Westrade Group LTd1','Support3.jpg','./assets/images/upload/support/','https://www.westrade.co.uk/',2,'2025-01-19 04:30:59','1','A','2025-09-24 23:04:20');
