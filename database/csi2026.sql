# Host: localhost  (Version: 5.5.5-10.1.36-MariaDB)
# Date: 2025-11-26 01:07:49
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
  `upload_file` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "book_stand"
#

REPLACE INTO `book_stand` VALUES (1,'coating show','<p><span style=\"font-size:18px\">Please choose your booth, fill in the contract form completely and send to&nbsp;<a href=\"mailto:hetty@coatingshow.com\"><strong>hetty@coatingshow.com</strong></a>. The stand booking is based on first come first serve only. The Exhibitor will be notified of a confirmed booking. The organizer has the right to refuse a booking without giving any explanation.</span></p>\r\n\r\n<p><span style=\"font-size:28px\"><strong>Type of Booth/Stand</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Shell Scheme</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Each 3x3 sqm Shell Scheme, the following is included:</span></p>\r\n','<p><span style=\"font-size:14px\"><strong>Other sizes shell scheme shall be multification of 3x3 sqm</strong>.</span></p>\r\n\r\n<p><strong><span style=\"font-size:14px\">Space Only</span></strong></p>\r\n\r\n<ul>\r\n\t<li><span style=\"font-size:14px\">Empty space, you need to design your own booth/stand and submit the design to us for approval </span></li>\r\n\t<li><span style=\"font-size:14px\">After approval from us, you may construct your booth/stand.</span></li>\r\n\t<li><span style=\"font-size:14px\">Electricity/power requirement will be charged to you.</span></li>\r\n</ul>\r\n','spec.png','f925106948bda371ae3dbd39b0966982.docx','A');

#
# Structure for table "carousel"
#

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_title` varchar(255) DEFAULT NULL,
  `status_header` varchar(1) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "carousel"
#

REPLACE INTO `carousel` VALUES (1,'Carousel','0','sdsasdsad','3f05a6b137d91d95620d937313593544.png','<p>sadsad</p>\r\n','A'),(2,NULL,NULL,'dfs32432','b6b280684a4ee0a85d295e22c99f60ae.jpg','<p>3243254fdgfhfh</p>\r\n','A'),(3,NULL,NULL,'sdsadsad','7f93f62be863a285ce5f08b8601434c0.jpg','<p>sdada</p>\r\n','A'),(4,NULL,NULL,'asdsadsa','e9539b84d9751152fe15772490efa20a.png','<p>sadsad</p>\r\n','A'),(5,NULL,NULL,'sadsadsa','be8bd607c1fc5e68c52d5a3c93654867.jpg','<p>sadsad</p>\r\n','A');

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
  `name` text,
  `company` text,
  `position` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `wa` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "contact"
#

REPLACE INTO `contact` VALUES (2,'Adrian Lioe','-','Event Director','628119166060',NULL,'adrian.lioe@coatingshow.com','A',1),(3,'Hetty Clark','-','sales','628119036060',NULL,'hetty@coatingshow.com','A',1),(4,'Fang fang','Asia Coatings and Ink Federation (ACIF)',NULL,'+8615718850277',NULL,'acifok@163.com','A',2),(5,'Xinyu, Jiang','Asia Coatings and Ink Federation (ACIF)','','+8613640906319',NULL,'1943659200@qq.com','A',2),(6,'Jack','Beijing Huachuang International Fairs Co., Ltd','','+86 400-844-0513','+86 13520883170','duanhw123@126.com','A',3),(7,'Ms. Eva','Dongchu Exhibition?Wuhan?Co., Ltd','','+86  18707165218','+86  15337187586','eva027@foxmail.com','A',3),(8,'asadsa',NULL,'ererer','213',NULL,'suramto@amt.co.id','P',3),(9,'adsadsa','234324435435sfsdfdsfdsf','34343','3434',NULL,'rifqiirawan@gmail.com','A',2);

#
# Structure for table "contact_bg"
#

CREATE TABLE `contact_bg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "contact_bg"
#

REPLACE INTO `contact_bg` VALUES (1,'Contact Us','6a94490156feb661691c5c756141d1d7.jpg',NULL,'A');

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

REPLACE INTO `content` VALUES (1,'PT. Kelie Chemical World was established in April 2006 as a privately owned company. \r\nThe management and activities of the company are in the hand of very experience personnel, a total of nearly 100 years of experience. Major experiences are in management , technical, marketing and sales of chemicals. Servicing various chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel industries. The company has identified the needs of highly qualified personnel, innovative techniques and quality materials to support the growth of the chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel, cement , other chemicals and mining industries especially in Indonesia and through out the Asian region. These needs are good opportunities, therefore it is our purpose to respond and fulfill these needs We are looking forward to working together with you to develop a long lasting relationship to our mutual benefits.<br>\r\n<br><br>\r\nOur Concept<br>\r\nThe green color of our stationeries indicates our strong support for a `GREEN` environment and the `GREEN` world in general. The benzene ring shows our commitment to serving the various industries. The world map inside the benzene ring shows our future dream to serve the global businesses.<br><br>\r\nOur Mission<br>\r\nTo give added values to customers, share holders, employees and public in general in line with the companyís growth. To provide competitive goods and services by giving priority to high quality and innovation in technology. To improve and upgrade the technical skill and know how in line with customerís requirement. To implement a good corporate governance.');

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

REPLACE INTO `content1` VALUES (1,'WELCOME TO Coating Show','<p><span style=\"font-size:24px\">Don&rsquo;t miss the opportunity to promote your products internationally, regionally and locally at affordable costs.</span></p>\r\n','EMPOWERING INDUSTRIES','b02ef907f562a511fb77413438ea7b19.jpg','A');

#
# Structure for table "coperation"
#

CREATE TABLE `coperation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "coperation"
#

REPLACE INTO `coperation` VALUES (2,'wqewqewq','93d9ba498d44b192746920662999e4ee.jpg','<p>sadsa</p>\r\n','A');

#
# Structure for table "csi_events"
#

CREATE TABLE `csi_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_year` year(4) NOT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_events"
#

REPLACE INTO `csi_events` VALUES (1,'Global Printing & Packaging Expo',2025,'JIEXPO','2025-05-08','2025-05-10','2025-10-12 07:38:45','sysadmin','2025-10-12 07:38:45','sysadmin');

#
# Structure for table "csi_menus"
#

CREATE TABLE `csi_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `menu_name` varchar(100) NOT NULL,
  `controller` varchar(200) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `sort_order` int(11) DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_menus"
#

REPLACE INTO `csi_menus` VALUES (1,NULL,'HOME','controller','',1,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(2,NULL,'EXHIBITING','controller','',2,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(3,NULL,'VISITING','controller','',3,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(4,NULL,'INFORMATION','controller','',4,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(5,NULL,'CONTACT','controller','',5,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(6,NULL,'NEWSUPADATE ','controller','',5,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(7,2,'Why Exhibit','controller','',1,'2025-09-24 22:43:23','sysadmin','2025-09-24 22:43:23','sysadmin'),(8,2,'Exhibitor List','controller','',2,'2025-09-24 22:43:23','sysadmin','2025-09-24 22:43:23','sysadmin'),(9,2,'Exhibitor Visa','controller','',3,'2025-09-24 22:43:23','sysadmin','2025-09-24 22:43:23','sysadmin'),(10,3,'Why Visit','controller',NULL,1,'2025-10-15 03:18:18','sysadmin','2025-10-15 03:18:32','sysadmin'),(11,3,'Conference Schedule','controller',NULL,2,'2025-10-15 03:19:05','sysadmin','2025-10-15 03:19:32','sysadmin'),(12,3,'Post Show Report','controller',NULL,3,'2025-10-15 03:19:39','sysadmin','2025-10-15 03:19:53','sysadmin');

#
# Structure for table "csi_contents"
#

CREATE TABLE `csi_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `content_year` int(11) NOT NULL,
  `content_type` enum('header','banner','section','visa-information','company-profile','show-feature','footer') NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) DEFAULT NULL,
  `body_text` text,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csi_contents_menu` (`menu_id`),
  CONSTRAINT `fk_csi_contents_menu` FOREIGN KEY (`menu_id`) REFERENCES `csi_menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_contents"
#

REPLACE INTO `csi_contents` VALUES (1,7,2026,'banner','WHY EXHIBIT','Exhibiting at Coating Show will provide your company with the perfect platform to showcase your latest products and services to a range of local and international attendees.','','active','2025-09-24 23:10:35','sysadmin','2025-10-09 03:39:20','sysadmin'),(2,7,2026,'section','Section - 1',NULL,'<h2 style=\"text-align:center;\"><strong>Take part in Indo Intertex 2026 and get your business to the next level.</strong></h2>','active','2025-09-24 23:10:35','sysadmin','2025-11-23 03:33:31','sysadmin'),(3,7,2026,'section','Section - 2','At Coating Show you\'ll be able to:','<ul><li>Connect with a targeted audience of industry professionals and decision makers</li><li>Utilize the event as a platform to launch new products and services to a wide and relevant audience.</li><li>Engage directly with end-users to understand their needs and preferences better</li><li>Collect high-quality leads and generate new business opportunities by engaging with potential customers</li><li>Build and strengthen relationships with existing customers and partners by meeting them face-to-face</li><li>Explore opportunities for expanding your business into new markets and regions</li></ul>','inactive','2025-09-25 23:39:39','sysadmin','2025-11-19 03:06:32',NULL),(4,7,0,'visa-information','','Important Visa Information for Entry into Indonesia',NULL,'','2025-09-25 23:47:59','sysadmin','2025-11-19 03:07:41',NULL),(5,8,2026,'company-profile','CSI 2026 Exhibitors',NULL,NULL,'active','2025-09-28 05:58:35','sysadmin','2025-10-10 03:56:04','sysadmin'),(6,9,2026,'banner','Exhibitor Visa','','','active','2025-09-28 14:27:30','sysadmin','2025-11-09 07:53:41','sysadmin'),(7,9,2026,'section','Exhibitor Visa Information and Support','Exhibitor Visa Information and Support','Exhibitors participating in our event may be required to obtain a visa depending on \r\n                  their nationality and the host countryís regulations. The organizing committee will \r\n                  provide assistance by issuing official invitation letters to support the visa \r\n                  application process.\r\n Please ensure that you apply for your visa well in advance of your planned travel \r\n                  date. The process and requirements may vary by embassy or consulate. It is the \r\n                  responsibility of each exhibitor to secure the necessary travel documents before \r\n                  arriving at the event venue.\r\n For further inquiries or to request a visa support letter, please contact our \r\n                  Exhibitor Support Team at <a href=\"mailto:visa-support@example.com\">visa-support@example.com</a>.','active','2025-09-28 14:28:15','sysadmin','2025-10-26 14:42:40','sysadmin'),(12,7,2026,'banner',' Banner Title ',' Banner Subtitle ','','inactive','2025-10-04 09:09:51','sysadmin','2025-10-09 03:39:20','sysadmin'),(13,7,2026,'section',' Section Title ',NULL,'<p><strong>Section Description</strong></p>','inactive','2025-10-09 09:07:13','sysadmin','2025-11-19 03:07:06','sysadmin'),(14,10,2026,'banner','WHY VISIT','The Coating Show is the premier gathering for professionals in the coatings industry. Update',NULL,'active','2025-10-19 14:21:11','sysadmin','2025-11-02 01:55:43','sysadmin'),(15,10,2026,'section','NETWORKING OPPORTUNITIES','Seize networking opportunities with top companies through face-to-face meetings.',NULL,'active','2025-10-19 14:54:26','sysadmin','2025-10-19 17:18:40','sysadmin'),(16,10,2026,'show-feature','Global Suppliers',NULL,NULL,'active','2025-10-19 17:15:05','sysadmin','2025-10-19 17:15:14','sysadmin'),(17,10,2026,'show-feature','Live Demonstration',NULL,NULL,'active','2025-10-19 17:15:16','sysadmin','2025-10-19 17:15:41','sysadmin'),(18,9,2027,'section','III Exhibitor Visa Information and Support',NULL,'<p>Exhibitors participating in our event may be required to obtain a visa depending on&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;their nationality and the host countryís regulations. The organizing committee will&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;provide assistance by issuing official invitation letters to support the visa&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;application process.<br>Please ensure that you apply for your visa well in advance of your planned travel&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;date. The process and requirements may vary by embassy or consulate. It is the&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;responsibility of each exhibitor to secure the necessary travel documents before&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;arriving at the event venue.<br>For further inquiries or to request a visa support letter, please contact our&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Exhibitor Support Team at &lt;a href=\"mailto:visa-support@example.com\"&gt;visa-support@example.com&lt;/a&gt;.</p>','active','2025-10-26 14:43:50','sysadmin','2025-10-26 14:43:50','sysadmin'),(20,9,2029,'section','VII Exhibitor Visa Information and Support',NULL,'<p>Desc</p>','inactive','2025-10-26 14:55:04','sysadmin','2025-10-26 15:18:42','sysadmin'),(29,11,2026,'banner','CONFERENCE SCHEDULE',NULL,NULL,'active','2025-11-18 08:17:10','sysadmin','2025-11-22 17:48:38','sysadmin'),(30,8,2026,'banner','Banner Tahun 2026','',NULL,'active','0000-00-00 00:00:00','',NULL,NULL),(35,11,2026,'show-feature','A',NULL,NULL,'active','2025-11-22 11:51:21','sysadmin','2025-11-22 14:37:33','sysadmin'),(36,11,2026,'show-feature','C',NULL,NULL,'active','2025-11-22 14:36:14','sysadmin','2025-11-22 14:37:36','sysadmin'),(37,11,2026,'show-feature','D',NULL,NULL,'active','2025-11-22 16:08:16','sysadmin','2025-11-22 16:08:16','sysadmin'),(38,11,2026,'show-feature','Z',NULL,NULL,'active','2025-11-22 16:08:46','sysadmin',NULL,NULL),(39,11,2027,'banner','Section Title Update',NULL,NULL,'inactive','2025-11-23 04:52:22','sysadmin',NULL,NULL),(40,10,2026,'show-feature','section 3',NULL,NULL,'active','2025-11-23 09:38:00','sysadmin','2025-11-23 09:38:00','sysadmin');

#
# Structure for table "csi_content_company_profile"
#

CREATE TABLE `csi_content_company_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `content_media_id` int(11) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `stand_no` varchar(50) DEFAULT NULL,
  `short_description` text,
  `long_description` text,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(50) DEFAULT NULL,
  `address` text,
  `website_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csi_content_company_profile` (`content_id`),
  CONSTRAINT `fk_csi_content_company_profile` FOREIGN KEY (`content_id`) REFERENCES `csi_contents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_content_company_profile"
#

REPLACE INTO `csi_content_company_profile` VALUES (1,5,3,'Actega GmbH','C01','Actega GmbH test','ACTEGA is a division of the internationally operating specialty chemicals group ALTANA. With production facilities in Europe, North and South America and China, ACTEGA develops, produces and distributes specialty coatings, inks, adhesives and sealing compounds with a focus on the packaging industry. Following the motto \"Packed with Expertise\", ACTEGA does not only offer technically sophisticated product solutions, but also meets the high safety standards of the food, beverages, pharmaceutical and toy industries. Whether for flexible and metal packaging, folding cartons or labels, products by ACTEGA provide packaging with a high-quality appearance and innovative functionalities.\r\n\r\nProducts include coatings, inks, compounds, sealants, adhesives and auxiliary\'s for packaging, labels, closures, cans, tubes & monoblocs and publication & commercial.','Actega GmbH','info.actega@altana.com','+49 281 670-8','Abelstraﬂe 43, 46483 Wesel, Germany','http://www.actega.com/','https://www.linkedin.com/company/actega/','https://twitter.com/ACTEGA_global','https://web.facebook.com/ACTEGA','https://www.youtube.com/actega','https://www.instagram.com/actega_global/','2025-09-28 10:31:25','sysadmin','2025-11-20 02:28:47','sysadmin'),(2,5,4,'Aiger Engineering','B10','Aiger Engineering','For over 30 years, Aiger Engineering Ltd designs and produces brand new machinery for filter manufacture and special cigarette packers. Present worldwide, Aiger is leader in modular FleX filter combining and making. On Stand B10, we will show you how we retrofit our technology to your existing lines. ','Aiger Engineering',NULL,NULL,'246 Vasil Levski Street\r\n4003\r\nBulgaria','https://www.aiger.com/','https://www.linkedin.com/company/aiger-uk/',NULL,NULL,NULL,'https://www.instagram.com/aigerengineering/','2025-09-28 14:56:52','sysadmin','2025-09-28 14:57:34','sysadmin'),(3,5,5,'Ali Machinery Dubai','K10','Ali Machinery Dubai','Who we are Primarily, we specialize in the provision of Tobacco Machinery. Our expertise encompasses not only the trading of machinery but also extends to being a dedicated supplier. This specialization is enriched by our comprehensive solutions tailored for emerging Cigarette Companies. What sets us apart is our ability to offer firsthand insights through our active Cigarette Manufacturing operation in the UAE. Clients have the opportunity to witness our machines in full production, fostering transparency and trust. Moreover, our commitment to excellence is evident in our provision of Free Demonstrations and Training within the confines of our factory premises. Our machine range is all-encompassing, including Cigarette Maker: MK-8 D, boasting a remarkable speed of up to 2800 Cigarettes per minute. Packing Line: HLP 2 Complete Packing Line, functioning at an impressive pace of 180 Packs per minute. We take pride in being more than just suppliers ñ we are partners in the journey of establishing successful cigarette manufacturing ventures.','Ali Machinery Dubai',NULL,'+971554530226','FACTORY MO0464 STREET N300\r\nJAFZA',NULL,NULL,NULL,NULL,NULL,NULL,'2025-09-28 15:01:31','','2025-09-28 15:01:31',NULL),(4,5,6,'Anhui Great Nation Essential Oils Co., Ltd.','O30','Anhui Great Nation Essential Oils Co., Ltd.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2025-09-28 15:03:53','','2025-09-28 15:04:20',NULL),(5,5,29,'TechNova Solutions','A12','A global technology provider specializing in AI-driven automation and enterprise software solutions.','A global technology provider specializing in AI-driven automation and enterprise software solutions.','David Wong','david.wong@technova.com','+62 811 9988 221','Jl. Gatot Subroto No. 22, Jakarta Selatan','https://www.technova-solutions.com','https://linkedin.com/company/technova','https://twitter.com/technova','https://facebook.com/technova','https://youtube.com/@technova','https://instagram.com/technova','2025-11-20 02:22:41','sysadmin','2025-11-20 02:22:41','sysadmin'),(6,5,30,'GreenFarm Agriculture','B07',NULL,'<p>Provider of sustainable smart-farming technology and organic agricultural products. update</p>','Maria Hutagalung','maria@greenfarm.agri','+62 812 3400 1100','Jl. Raya Bogor No. 55, Bogor','https://www.greenfarm.agri','https://linkedin.com/company/greenfarm','','https://facebook.com/greenfarm','','https://instagram.com/greenfarm','2025-11-20 02:33:22','sysadmin','2025-11-20 04:11:38','sysadmin');

#
# Structure for table "csi_content_media"
#

CREATE TABLE `csi_content_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `media_type` enum('image','video') NOT NULL,
  `file_path` varchar(200) DEFAULT NULL,
  `url_path` varchar(255) DEFAULT NULL,
  `menu_controller` varchar(100) DEFAULT NULL,
  `sort_order` int(11) DEFAULT '0',
  `is_main` tinyint(1) DEFAULT '0',
  `caption` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csi_content_media` (`content_id`),
  CONSTRAINT `fk_csi_content_media` FOREIGN KEY (`content_id`) REFERENCES `csi_contents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_content_media"
#

REPLACE INTO `csi_content_media` VALUES (1,1,'image','assets/uploads/why_exhibit/banner.jpg','',NULL,1,1,NULL,'2025-09-24 23:25:36','sysadmin','2025-10-09 03:39:20','sysadmin'),(2,2,'image','assets/uploads/why_exhibit/36963e1a6220ad018f02854545809c2a.png',NULL,NULL,1,1,NULL,'2025-09-24 23:25:36','sysadmin','2025-11-23 03:33:31','sysadmin'),(3,5,'image','assets/uploads/exhibitor_list/actega.jpg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 06:06:16','sysadmin','2025-09-28 14:48:43','sysadmin'),(4,5,'image','assets/uploads/exhibitor_list/aiger.jpg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 14:53:59','sysadmin','2025-09-28 14:59:38','sysadmin'),(5,5,'image','assets/uploads/exhibitor_list/ali_machinery_dubai.jpg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 14:59:03','sysadmin','2025-09-28 14:59:52','sysadmin'),(6,5,'image','assets/uploads/exhibitor_list/anhui_great_nation.jpeg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 15:02:59','sysadmin','2025-09-28 15:05:20','sysadmin'),(11,12,'image','assets/uploads/why_exhibit/128cc7c6dbdb9ec17a023d81e75f1272.png','',NULL,1,1,NULL,'2025-10-04 09:09:51','sysadmin','2025-10-06 02:48:31','sysadmin'),(12,6,'image','assets/uploads/exhibitor_visa/2fbfe8d5871af987081aa1d3d3aeb87e.jpg','',NULL,1,1,NULL,'2025-10-11 13:20:36','sysadmin','2025-11-09 07:53:41','sysadmin'),(13,14,'image','assets/uploads/why_visit/banner.jpg','',NULL,1,1,NULL,'2025-10-19 14:53:22','sysadmin','2025-11-22 13:42:48','sysadmin'),(14,15,'image','assets/uploads/why_visit/section.png',NULL,NULL,1,1,NULL,'2025-10-19 14:54:59','sysadmin','2025-10-19 14:55:26','sysadmin'),(15,16,'image','assets/uploads/why_visit/section1.jpg',NULL,NULL,1,1,NULL,'2025-10-19 17:15:53','sysadmin','2025-10-19 17:16:26','sysadmin'),(16,17,'image','assets/uploads/why_visit/section2.jpg',NULL,NULL,2,1,NULL,'2025-10-19 17:16:35','sysadmin','2025-11-23 08:49:00','sysadmin'),(17,18,'image','assets/uploads/exhibitor_visa/',NULL,NULL,1,1,NULL,'2025-10-26 14:43:50','sysadmin','2025-10-26 14:43:50','sysadmin'),(19,20,'image','assets/uploads/exhibitor_visa/2cf2b09093a802569daecfe4bb651db7.png',NULL,NULL,1,1,NULL,'2025-10-26 14:55:04','sysadmin','2025-10-26 15:18:42','sysadmin'),(28,29,'image','assets/uploads/conference_schedule/2756330.jpg',NULL,NULL,1,1,NULL,'2025-11-18 08:17:53','sysadmin','2025-11-18 08:19:00','sysadmin'),(29,5,'image','assets/uploads/exhibitor_list/be39b70b858c30597471100c56ed1bea.jpeg',NULL,'exhibiting/company-profile',1,1,NULL,'2025-11-20 02:22:41','sysadmin','2025-11-20 02:25:01','sysadmin'),(30,5,'image','assets/uploads/exhibitor_list/22ee01b4dc97e986b2777dffcb54f29c.png',NULL,'exhibiting/company-profile',1,1,NULL,'2025-11-20 02:33:22','sysadmin','2025-11-20 04:11:38','sysadmin'),(32,30,'image','assets/uploads/exhibitor_list/banner.jpg',NULL,NULL,1,1,NULL,'2025-11-21 04:26:58','sysadmin','2025-11-22 06:51:41','sysadmin'),(37,35,'image','assets/uploads/conference_schedule/1.jpg',NULL,NULL,1,1,NULL,'2025-11-22 11:51:52','sysadmin','2025-11-22 11:52:09','sysadmin'),(38,36,'image','assets/uploads/conference_schedule/2.jpg',NULL,NULL,2,1,NULL,'2025-11-22 11:52:35','sysadmin','2025-11-22 14:36:48','sysadmin'),(39,37,'image','assets/uploads/conference_schedule/1d4d6aa6b9879739c20bebc766580319.jpg',NULL,NULL,1,1,NULL,'2025-11-22 16:08:16','sysadmin','2025-11-22 16:08:16','sysadmin'),(40,38,'image','assets/uploads/conference_schedule/c006d8925879067059a68808e3a7a415.jpg',NULL,NULL,1,1,NULL,'2025-11-22 16:08:46','sysadmin','2025-11-22 16:22:49','sysadmin'),(41,39,'image','assets/uploads/conference_schedule/f1d122a7196ee8b9f92d3349de72975f.jpg',NULL,NULL,1,1,NULL,'2025-11-23 04:52:22','sysadmin','2025-11-23 05:48:26','sysadmin'),(42,40,'image','assets/uploads/why_visit/ff832f1a10875c44ab47f64883d1d665.jpg',NULL,NULL,3,1,NULL,'2025-11-23 09:38:00','sysadmin','2025-11-23 09:38:00','sysadmin');

#
# Structure for table "csi_programs"
#

CREATE TABLE `csi_programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `speaker_id` int(11) DEFAULT NULL,
  `program_title` varchar(255) NOT NULL,
  `program_type` enum('Seminar','Workshop') NOT NULL,
  `program_date` date NOT NULL,
  `program_start_time` time DEFAULT NULL,
  `program_end_time` time DEFAULT NULL,
  `program_location` varchar(100) DEFAULT NULL,
  `program_description` text,
  `program_register_link` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csiprogram_csievent` (`event_id`),
  CONSTRAINT `fk_csiprogram_csievent` FOREIGN KEY (`event_id`) REFERENCES `csi_events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_programs"
#

REPLACE INTO `csi_programs` VALUES (1,1,1,'Penerapan Wajib Sertifikasi Halal untuk Kemasan Pangan 2026','Seminar','2025-05-08','09:30:00','00:00:00','JIEXPO - Hall D-1','Seminar membahas kewajiban sertifikasi halal untuk kemasan pangan yang akan diterapkan pada tahun 2026, serta persiapan yang harus dilakukan oleh pelaku industri kemasan.','https://example.com/register1','2025-10-12 07:39:12','sysadmin','2025-10-12 07:39:12','sysadmin'),(2,1,2,'From Design to CTP','Workshop','2025-05-09','10:30:00','16:00:00','JIEXPO - Hall D-1','Workshop praktis membahas proses produksi grafis mulai dari desain hingga Computer to Plate (CTP) dengan pendekatan teknologi terkini.','https://example.com/register2','2025-10-12 07:39:12','sysadmin','2025-10-12 07:39:12','sysadmin'),(3,1,NULL,'The 10th Indonesia Printing Summit 2025: Trend Digitalisasi dan Sustainability Bisnis Percetakan','Seminar','2025-05-10','15:30:00','16:15:00','JIEXPO - Hall D-1','Seminar membahas arah digitalisasi industri percetakan di Indonesia serta penerapan praktik keberlanjutan dalam bisnis percetakan modern.','https://example.com/register3','2025-10-12 07:39:12','sysadmin','2025-10-12 07:39:12','sysadmin');

#
# Structure for table "csi_report_files"
#

CREATE TABLE `csi_report_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `report_title` varchar(255) NOT NULL,
  `report_description` text,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `file_size` bigint(20) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `uploaded_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uploaded_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_report_files"
#

REPLACE INTO `csi_report_files` VALUES (1,'CSI 2025 Post Show Report','CSI 2025 Post Show Report','1760633516_CSI_2025_Post_Show_Report','assets/uploads/post_show_report/1760633516_CSI_2025_Post_Show_Report.pdf','.pdf',916,1,'2025-10-15 08:20:07','sysadmin','2025-10-16 23:51:56','sysadmin');

#
# Structure for table "csi_speakers"
#

CREATE TABLE `csi_speakers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `speaker_name` varchar(255) NOT NULL,
  `speaker_organization` varchar(255) DEFAULT NULL,
  `speaker_bio` text,
  `speaker_contact_email` varchar(100) DEFAULT NULL,
  `speaker_website` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "csi_speakers"
#

REPLACE INTO `csi_speakers` VALUES (1,'Indonesia Packaging Federation (IPF)','IPF','Organization focusing on packaging development and standards in Indonesia.','info@ipf.or.id','https://ipf.or.id','2025-10-12 07:38:55','sysadmin','2025-10-12 07:38:55','sysadmin'),(2,'Indonesian Graphics and Media Engineering Association (ATGMI)','ATGMI','Professional association promoting excellence in graphics and media engineering in Indonesia.','contact@atgmi.org','https://atgmi.org','2025-10-12 07:38:55','sysadmin','2025-10-12 07:38:55','sysadmin');

#
# Structure for table "csi_testimonials"
#

CREATE TABLE `csi_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial_author` varchar(150) NOT NULL,
  `testimonial_position` varchar(200) DEFAULT NULL,
  `testimonial_company` varchar(200) DEFAULT NULL,
  `testimonial_message` text NOT NULL,
  `testimonial_order` int(5) DEFAULT '0',
  `testimonial_status` tinyint(1) DEFAULT '1',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "csi_testimonials"
#

REPLACE INTO `csi_testimonials` VALUES (1,'Bernice','Business Relations Team Lead Bajukertas & Co','','With the presence of this exhibition, I hope it will support the growth of Indonesia\'s textile industry and help bring the nation to greater success in the global textile market.',1,1,'2025-11-19 08:25:06','sysadmin','2025-11-19 08:25:06','sysadmin'),(2,'Bela Lou','Founder','Pola Manufacture','The results went beyond our expectations. Thank you to INATEX & Indo Intertex for providing a platform where we could connect with clients, audiences, and fellow exhibitors.',2,1,'2025-11-19 08:25:06','sysadmin','2025-11-19 08:25:06','sysadmin'),(3,'Claudia','Chief Marketing Officer','Pukka Indonusa','This year\'s exhibition has been truly impressive. The visitor traffic has been non-stop, with a constant stream of people stopping by our booth.',3,1,'2025-11-19 08:25:06','sysadmin','2025-11-19 08:25:06','sysadmin'),(4,'Kurniawan Hendrianto','Senior Product Manager','Rudolf Group','Indo Intertex has been an outstanding exhibition. I was surprised by how busy it is this year, especially considering it\'s an odd numbered year. The number of visitors to the Rudolf booth was remarkable. Our collaboration with Indo Intertex has brought us great value.',4,1,'2025-11-19 08:25:06','sysadmin','2025-11-19 08:25:06','sysadmin');

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

REPLACE INTO `event` VALUES (3,'03-05 JUNE 2026 At Jakarta International Convention Center','Become An Exhibitor!','<p style=\"margin-bootom:0rem;font-size:18px;font-family: Montserrat, sans-serif;\">Don&rsquo;t miss the opportunity to promote your products internationally, regionally and locally</p>\r\n\r\n<p style=\"margin-bootom:0rem;font-size:18px;font-family: Montserrat, sans-serif;\">at affordable costs.</p>\r\n\r\n<p style=\"margin-bootom:0rem; font-size:1.25rem;font-family: Montserrat, sans-serif;line-height:normal;letter-spacing: 10px;\">03-05 JUNE 2026</p>\r\n\r\n<p style=\"margin-bootom:0rem;font-size:1.313rem;font-family: Montserrat, sans-serif;line-height:normal;letter-spacing: 10px;\">JAKARTA INTERNATIONAL CONVENTION CENTER</p>\r\n','ca5f30a66f02254d2ea021c2a03ccbe9.jpg','VISIT Coating Show !','<p style=\"margin-bootom:0rem;font-size:16px;font-family: Montserrat, sans-serif;text-align:center;\">Register now and explore hundreds of brands in one single place.</p>\r\n\r\n<p style=\"margin-bootom:0rem;font-size:20px;font-family: Montserrat, sans-serif;text-align:center;\">FREE ADMISSION</p>\r\n','ab338fd2ffc088ad7acb4df64c516bb6.jpg','A','2025-09-28 22:46:12','5',NULL);

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
  `icon` varchar(255) DEFAULT NULL,
  `simbol` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "event_value"
#

REPLACE INTO `event_value` VALUES (1,'Exhibitors','200','fa fa-handshake-o','+',2,'A'),(2,'Attandance','34','fa fa-users','+',2,'A'),(3,'Speakers','92','fa fa-microphone','+',2,'A'),(4,'Product','74','fa fa-list-alt','\"S',2,'A'),(6,'SQM','24000','fa fa-camera','+',1,'A'),(7,'Exhibitors','500','fa fa-users','+',1,'A'),(8,'Countries','12','fa fa-globe','+',1,'A'),(9,'Visitors','16000','fa fa-user-circle','+',1,'A');

#
# Structure for table "floor_plan"
#

CREATE TABLE `floor_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "floor_plan"
#

REPLACE INTO `floor_plan` VALUES (2,'test123','126d84a4893c986ee6a0c988901401a6.pdf','A');

#
# Structure for table "header_news"
#

CREATE TABLE `header_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "header_news"
#

REPLACE INTO `header_news` VALUES (3,'NEWS UPDATE','ac22a346cbdd96536e2c98c980ce0a73.jpg','A','2025-10-14 22:48:01');

#
# Structure for table "highlights"
#

CREATE TABLE `highlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `url` text,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "highlights"
#

REPLACE INTO `highlights` VALUES (1,'test','https://www.youtube.com/watch?v=vr2Uz3SYFNQ','A','<p><em>Reading&nbsp;</em>merupakan salah satu aspek yang dinilai dalam tes kemahiran bahasa Inggris seperti pada TOEFL atau pun IELTS.&nbsp;<em>Nah</em>, kalau berbicara tentang&nbsp;<em>reading&nbsp;</em>pasti tak lepas dari yang namanya kalimat dan teks bahasa Inggris.</p>\r\n\r\n<p>Pada umumnya, macam-macam teks yang akan kamu pelajari di artikel ini nggak jauh berbeda dengan jenis teks dalam bahasa Indonesia. Masing-masing teks tersebut memiliki tujuan/fungsi sosial masing-masing. Jadi,&nbsp;<em>yuk</em>&nbsp;kita cari tahu definisi, fungsi, struktur, dan contoh paragraf dari setiap teks-nya!</p>\r\n\r\n<p><strong>Pengertian Teks</strong></p>\r\n\r\n<p>Teks adalah sebuah tulisan yang disusun dengan kalimat yang memiliki konteks. Kalau dalam teori sastra, teks adalah segala benda yang dapat &ldquo;dibaca&rdquo;, baik benda tersebut berupa karya sastra, tanda jalan, atau gaya pakaian.</p>\r\n\r\n<p>Tapi, dalam hal ini, cakupannya hanya akan seputar &ldquo;tulisan&rdquo; saja ya,&nbsp;<em>guys</em>. Maka dari itu, setiap teks bahasa Inggris memiliki struktur dan kaidah kebahasaan (language feature) dalam penulisannya.</p>\r\n\r\n<p><strong>Jenis-jenis Teks Bahasa Inggris</strong></p>\r\n\r\n<p><strong>1. Descriptive Text&nbsp;</strong></p>\r\n\r\n<p><em>Descriptive text</em>&nbsp;bertujuan untuk menggambarkan/menjelaskan kepada pembaca mengenai seseorang, tempat, benda, hewan, dan hal lainnya secara detail. Pada teks ini, suatu objek akan dipaparkan secara rinci. Fungsinya supaya pembaca bisa membayangkan bagaimana bentuk, suasana, atau wujud dari suatu objek. Struktur dari&nbsp;<em>descriptive text&nbsp;</em>adalah&nbsp;<em>identification&nbsp;</em>dan&nbsp;<em>description</em>.</p>\r\n\r\n<p><strong>2. Explanation Text</strong></p>\r\n\r\n<p>Sederhananya,&nbsp;<em>descriptive</em>&nbsp;<em>text</em>&nbsp;itu berisi mengenai penjelasan yang menjawab pertanyaan &ldquo;what&rdquo; atau &ldquo;apa&rdquo;.&nbsp;<em>Nah</em>, sementara,&nbsp;<em>explanation text&nbsp;</em>adalah jenis teks untuk menjawab pertanyaan &ldquo;how&rdquo;, alias bagaimana. Jadi, teks eksplanasi berfungsi untuk menjelaskan bagaimana suatu hal bisa terjadi, sifatnya logis dan mendetail.&nbsp;</p>\r\n\r\n<p>Umumnya&nbsp;<em>explanation text</em>&nbsp;digunakan banyak orang untuk memaparkan fenomena alam, sosial, dan juga budaya. Supaya pembaca bisa semakin mudah untuk memahami isi teks, biasanya sang penulis akan melengkapi teks dengan gambar yang relevan. Struktur dari&nbsp;<em>explanation text&nbsp;</em>adalah&nbsp;<em>general statement, explanation</em>, dan ada juga yang menambahkannya dengan&nbsp;<em>conclusion</em>.</p>\r\n\r\n<p><strong>3. Recount Text&nbsp;</strong></p>\r\n\r\n<p>Kamu hobi mengabadikan pengalaman melalui tulisan?&nbsp;<em>Nah</em>, berarti&nbsp;<em>recount text&nbsp;</em>bisa jadi salah satu teks yang cocok untuk kamu tulis. Jadi,&nbsp;<em>recount&nbsp;</em>adalah teks yang menjelaskan cerita/pengalaman dari kejadian lampau, misal cerita&nbsp;<em>traveling</em>, mengikuti lomba, dan lain-lain.&nbsp; Struktur teks recount adalah&nbsp;<em>orientation, series of event,&nbsp;</em>kemudian diakhiri dengan&nbsp;<em>reorientation</em>.</p>\r\n\r\n<p><strong>4. Narrative Text (Teks Naratif)</strong></p>\r\n\r\n<p>Apakah kamu sering mendengarkan kisah Cinderella dan sepatu kacanya?&nbsp;<em>Yap!&nbsp;</em>Itu merupakan salah satu contoh dari&nbsp;<em>narrative text&nbsp;</em>atau narasi yang bersifat fiktif dan menghibur.&nbsp;<em>Narrative text</em>&nbsp;merupakan sebuah teks yang biasa dijadikan sebagai bahan&nbsp;<em>story telling</em>&nbsp;atau dongeng bahasa Indonesia mau pun bahasa Inggris. Generic structure dari&nbsp;<em>narrative text&nbsp;</em>adalah&nbsp;<em>orientation, complication, resolution</em>, dan yang terakhir&nbsp;<em>reorientation</em>.</p>\r\n\r\n<p><strong>5. Report Text</strong></p>\r\n\r\n<p>Kalau membaca kata &ldquo;report&rdquo;, biasanya kita akan langsung teringat dengan &ldquo;laporan&rdquo;.&nbsp;<em>Yap,&nbsp;</em>teks ini digunakan untuk menuliskan laporan/informasi dari suatu objek, atau bisa juga dari hasil penelitian.&nbsp;<em>Hmm</em>, apa bedanya dengan descriptive text?</p>\r\n\r\n<p>Kalau tujuan dari teks deskripsi itu menceritakan sesuatu secara detail dan lebih spesifik.&nbsp;<em>Nah</em>, dalam&nbsp;<em>report text</em>, sebuah objek akan digambarkan secara umum. Contohnya adalah mengenai &ldquo;My Cat&rdquo;, lalu kamu menuliskan bagaimana warna kucing itu, siapa namanya, apa jenisnya, bagaimana ciri-cirinya,&nbsp;<em>etc</em>.</p>\r\n\r\n<p>Teks report akan memberikan deskripsi terhadap &ldquo;Cat&rdquo; pada umumnya. Misal kakinya ada berapa, bagian tubuhnya ada apa saja,&nbsp;<em>and many more</em>. Dalam teks ini,&nbsp;<em>generic structure</em>&nbsp;yang akan kamu temukan adalah&nbsp;&nbsp;<em>general classification&nbsp;</em>dan&nbsp;<em>description.&nbsp;</em></p>\r\n\r\n<p>Meskipun jenis teks bahasa Inggris-nya cukup banyak, kamu nggak perlu galau. Soalnya, English Academy kan sudah memberikan penjelasan masing-masing jenis teks yang populer pada artikel terpisah. Jadi, kamu bisa belajar dengan lebih detail melalui artikel tersebut. Semangat!</p>\r\n'),(2,'Video Larva','https://www.youtube.com/watch?v=2upTEXu63UY','A','<p>&nbsp;</p>\r\n\r\n<p>These are Best Season 3 Larva Episodes! Enjoy the Season 3 top 10 videos.</p>\r\n\r\n<p>If your best episode is not included, please leave a comment with the name of your best episode!</p>\r\n\r\n<p>Season 3 Top 10</p>\r\n\r\n<p>10: Season 3 Episode 101 Chsirstmas</p>\r\n'),(3,'video sinchan','https://www.youtube.com/watch?v=pGagTnyJOs4','A','<h1>film 1 jam Sinchan BHS Indonesian</h1>\r\n'),(4,'boneka','https://www.youtube.com/watch?v=zb47CstE7R4','A','');

#
# Structure for table "hotel"
#

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "hotel"
#

REPLACE INTO `hotel` VALUES (2,'The Sultan Hotel & Residence Jakarta','rifqiirawan@gmail.com','12345666','https://sultanjakarta.com/','3a52aa43184cbeb93c8e168c04b85f2b.jpg','A'),(3,'Artotel Gelora Senayan Jakarta','rifqiirawan17@gmail.com','213213213','https://www.artotelgelorasenayan.com/','a7fd905b3e81c493930e1b996c97c26e.jpg','A'),(4,'Hotel Mulia Senayan','rifqiirawan@gmail.com','324324324','https://www.themulia.com/jakarta','ce086e7d00d011962499cc470ee3f9ae.jpg','A');

#
# Structure for table "information"
#

CREATE TABLE `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_title` varchar(255) DEFAULT NULL,
  `status_header` varchar(1) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `description` text,
  `link_maps` text,
  `run_number` int(11) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "information"
#

REPLACE INTO `information` VALUES (1,'Visitor Information','0','INF-0001','Visiting','Exhibition Hours','<p>any trade visitor in short</p>\r\n','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20905.407326721463!2d106.79399165714851!3d-6.231624899687399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6adbd77af01%3A0x23abed373d7987d2!2sJakarta%20Convention%20Center!5e1!3m2!1sen!2sid!4v1764015652730!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>',1,'A','2025-10-12 13:50:24','5',NULL,NULL);

#
# Structure for table "information_detail"
#

CREATE TABLE `information_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_header` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "information_detail"
#

REPLACE INTO `information_detail` VALUES (21,'INF-0001',1,'calendar','13 -15 Agustus','2025-11-25 03:59:37'),(22,'INF-0001',1,'map','JExpo kemayoran jakarta','2025-11-25 03:59:37'),(23,'INF-0001',1,'person-check','visitor must register','2025-11-25 03:59:37'),(24,'INF-0001',1,'person-standing','all visitors must be properly attired','2025-11-25 03:59:37'),(25,'INF-0001',1,'cash','free admission','2025-11-25 03:59:37');

#
# Structure for table "information_hours"
#

CREATE TABLE `information_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_header` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `times` varchar(255) DEFAULT NULL,
  `date_text` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "information_hours"
#

REPLACE INTO `information_hours` VALUES (9,'INF-0001',2,'10:00am - 18:00pm','12 - 14 Agustus 2025','2025-11-25 03:59:37'),(10,'INF-0001',2,'10:00am - 17:30pm','15 Agustus 2025','2025-11-25 03:59:37');

#
# Structure for table "link_event"
#

CREATE TABLE `link_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "link_event"
#

REPLACE INTO `link_event` VALUES (1,'Coating show 2025','https://ems.coatingshow.com/Event/Show_Event/1/e39b7ecf3805de07f96ddee1d18b5eea','A');

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
# Structure for table "member"
#

CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "member"
#

REPLACE INTO `member` VALUES (1,'sadsadsad','47e372a51121579f10cde0c0d52800f5.png','<p>asdsad</p>\r\n','A');

#
# Structure for table "menu"
#

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "menu"
#

REPLACE INTO `menu` VALUES (1,'Home','Dashboard',1,'A','<p>-</p>\r\n'),(2,'Exhibiting',NULL,2,'A',NULL),(4,'Information',NULL,4,'A',NULL),(5,'Contact','Contact_us',5,'A',NULL),(6,'News Update','News_Update',6,'A',NULL),(7,'Visiting',NULL,3,'A','<p>-</p>\r\n');

#
# Structure for table "news_update"
#

CREATE TABLE `news_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `date_news` date DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` longtext,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "news_update"
#

REPLACE INTO `news_update` VALUES (1,'4 Tips for Choosing Quality Paint, Coatings, and Ink','2024-11-04','<p><strong>4 Tips for Choosing Quality Paint, Coatings, and Ink -&nbsp;</strong>Choosing quality paint, coatings, and ink is crucial for achieving satisfactory end results for various design and project needs, whether in the industrial or household sector','<p><strong>4 Tips for Choosing Quality Paint, Coatings, and Ink -&nbsp;</strong>Choosing quality paint, coatings, and ink is crucial for achieving satisfactory end results for various design and project needs, whether in the industrial or household sector. Therefore, it is important to ensure the quality when selecting paint, coatings, and ink. With so many options available in the market, it can be challenging to find products that meet your requirements. To assist you in determining quality paint, coatings, and ink, we will provide tips that you can follow when choosing them for various needs!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1.&nbsp;Conduct a Pre-Purchase Survey</strong></p>\r\n\r\n<p>The first thing to consider is conducting a survey of several products before making a purchase. Avoid rushing when choosing paint, coatings, and ink. To find quality products more easily, compare different brands and align them with your needs and preferences. Additionally, you can review user feedback from those who have used the products. Nowadays, you can easily find user reviews online, which can serve as an indicator for finding quality and reliable products.</p>\r\n\r\n<p><strong>2.&nbsp;Match According to Your Needs</strong></p>\r\n\r\n<p>It is important to choose products that align with your needs, specifications, and&nbsp;desired end results. Determine where you will be using the paint, coatings, and ink. For example, make sure you identify the surfaces to be painted, the areas where&nbsp;coatings will be applied, and the media for printing. This will help you find the best-suited products for your needs, ensuring that you don&#39;t make the wrong choice.</p>\r\n\r\n<p><strong>3. Consider the Price Factor&nbsp;</strong></p>\r\n\r\n<p>Another important aspect to consider when selecting quality paint, coatings, and ink&nbsp;is the price factor. Price is not always a guarantee of product quality, but it can be an&nbsp;indicator of quality. Carefully weigh the products you intend to choose. Compare&nbsp;prices of similar products and evaluate the value and advantages of each. Lastly, ensure that you align your selection with your budget.</p>\r\n','A','2025-10-14 23:07:25'),(2,'Understanding Raw Materials in the Production of Paints, Coating, and Inks','2025-10-02','7418d0b8d14ba5176460f21c57406e9f.png','<p><strong>Understanding Raw Materials in the Production of Paints, Coating, and Inks-&nbsp;</strong>In daily life, everyone often uses paint, coatings, and inks to support coloring activities, from printing to coating various objects. Behind the vibrant colors and perfect shine of paint, coatings, and inks, there is a complex processing of each raw material. But do you know what raw materials are actually used in the production of these products? In this article, we will explain the raw materials used in the production of paint, coatings, and inks. There are four main raw materials in paint, coatings, and inks. Let&#39;s discuss them!</p>\r\n\r\n<p><strong>1. Resin or Binder</strong></p>\r\n\r\n<p>Resin is a polymer material that functions as a film-forming agent and as a binder for pigments or colors in paints, coatings, and inks. This forms a layer/film containing coloring materials (pigments). The type of resin used will determine the quality of the paint, coatings, and ink layer/film, such as resistance to weather, scratches, and gloss effects. Some common examples of resins used are Acrylic, Alkyd, and Epoxy.</p>\r\n','A','2025-10-14 23:49:50'),(3,'test','2025-11-07','16577b3ed9231b9c1db946533354e399.jpg','<p>6. Contoh Artikel Kesehatan</p>\r\n\r\n<p><strong>Pentingnya Olahraga untuk Kesehatan Optimal</strong></p>\r\n\r\n<p>Oleh: Ringgana Wandy Wiguna</p>\r\n\r\n<p><img alt=\"contoh artikel kesehatan\" src=\"https://cdn-web-2.ruangguru.com/landing-pages/assets/f63f5955-e02f-4474-9ebe-4215c9a62fbf.jpg\" /></p>\r\n\r\n<p>Olahraga merupakan bagian integral dari gaya hidup sehat yang memberikan manfaat tak terbantahkan bagi kesehatan fisik dan mental.&nbsp;Melakukan olahraga secara teratur dapat membantu menjaga kesehatan secara optimal dan meningkatkan kualitas hidup.&nbsp;</p>\r\n\r\n<p>Dalam artikel ini, kita akan menjelajahi pentingnya olahraga dalam menjaga kesehatan secara menyeluruh serta memberikan beberapa tips untuk memulai dan menjaga rutinitas olahraga yang konsisten.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Manfaat Kesehatan Fisik</strong></p>\r\n\r\n<p>Olahraga teratur membantu menjaga berat badan yang sehat, meningkatkan kekuatan dan kekuatan otot, serta meningkatkan kesehatan jantung dan sistem kardiovaskular.</p>\r\n\r\n<p>Aktivitas fisik juga dapat meningkatkan fleksibilitas, keseimbangan, dan koordinasi tubuh, yang semuanya penting untuk menjaga mobilitas dan mengurangi risiko cedera. Berikut adalah beberapa keunggulan yang lainnya:</p>\r\n\r\n<ul>\r\n\t<li><strong>Meningkatkan kebugaran dan stamina:</strong>&nbsp;Melalui olahraga, tubuh dapat meningkatkan kebugaran dan stamina, sehingga individu mampu menjalani aktivitas sehari-hari dengan lebih mudah dan berenergi.</li>\r\n\t<li><strong>Memperkuat otot dan tulang:</strong>&nbsp;Melakukan olahraga membantu memperkuat otot dan tulang, sehingga dapat mengurangi risiko cedera dan osteoporosis.</li>\r\n\t<li><strong>Menjaga kesehatan jantung:</strong>&nbsp;Olahraga dapat menjaga kesehatan jantung dengan menurunkan tekanan darah, kolesterol, dan risiko penyakit jantung.</li>\r\n\t<li><strong>Menurunkan berat badan:</strong>&nbsp;Dengan membakar kalori melalui olahraga, individu dapat menurunkan berat badan dan mengurangi risiko obesitas serta penyakit terkaitnya.</li>\r\n\t<li><strong>Meningkatkan kualitas tidur:</strong>&nbsp;Melakukan olahraga secara teratur dapat membantu meningkatkan kualitas tidur, sehingga individu dapat tidur lebih nyenyak dan berkualitas.</li>\r\n</ul>\r\n','A','2025-11-25 04:34:29'),(4,'asdsad','2025-11-25','9e1464f3baf2253a69ed47612134579a.jpg','<p><a href=\"https://www.mpaskina.com/10-lukisan-terkenal-di-dunia-beserta-maknanya-sudah-tahu/\">10 Lukisan Terkenal di Dunia Beserta Maknanya. Sudah Tahu?</a>&nbsp;&ndash; Lukisan merupakan bentuk seni rupa yang melibatkan penciptaan gambar atau karya visual di atas permukaan datar seperti kanvas, kertas, kayu, atau medium lainnya. Seniman menggunakan berbagai alat seperti kuas, cat, tinta, pastel, atau bahan lainnya untuk membuat gambar yang menggambarkan objek, pemandangan, abstraksi, atau konsep tertentu.</p>\r\n\r\n<p>Lukisan adalah salah satu bentuk seni rupa yang paling klasik dan luas. Seniman menggunakan berbagai teknik, medium, dan gaya untuk menciptakan karya yang menggambarkan dunia nyata atau abstrak. Lukisan memungkinkan seniman untuk mengekspresikan kreativitas mereka dan menyampaikan pesan, emosi, atau gagasan kepada penonton dengan cara visual.</p>\r\n\r\n<p>Tentu, berikut adalah 10 lukisan terkenal di dunia beserta sedikit informasi tentang makna atau konteksnya:</p>\r\n\r\n<p><img alt=\"10 Lukisan Terkenal di Dunia Beserta Maknanya. Sudah Tahu?\" src=\"https://www.mpaskina.com/wp-content/uploads/2023/12/lukisan-terkenal-di-dunia-the-scream-768x1024.jpg\" style=\"height:1024px; width:768px\" /></p>\r\n\r\n<p><strong>&ldquo;Mona Lisa&rdquo; oleh Leonardo da Vinci</strong></p>\r\n\r\n<p>Makna: Lukisan ini adalah salah satu potret paling ikonik dalam sejarah seni rupa. Senyum misterius Mona Lisa telah memicu banyak spekulasi dan interpretasi tentang ekspresi dan makna di balik lukisan ini.</p>\r\n\r\n<p><strong>&ldquo;The Starry Night&rdquo; oleh Vincent van Gogh</strong></p>\r\n\r\n<p>Makna: Lukisan ini menggambarkan pemandangan malam yang dramatis dan unik. Van Gogh menciptakan karya ini di masa ketika ia berada di rumah sakit jiwa, menggambarkan pengalamannya yang intens dan emosional.</p>\r\n\r\n<p><strong>&ldquo;The Last Supper&rdquo; oleh Leonardo da Vinci</strong></p>\r\n\r\n<p>Makna: Lukisan ini menggambarkan momen terakhir Yesus bersama para muridnya sebelum penangkapan dan pengkhianatan. Ini adalah salah satu lukisan agama paling ikonik dalam sejarah seni.</p>\r\n\r\n<p><strong>&ldquo;Girl with a Pearl Earring&rdquo; oleh Johannes Vermeer</strong></p>\r\n\r\n<p>Makna: Potret ini dikenal karena keanggunannya dan fokus pada mata gadis dengan anting mutiara besar, menimbulkan rasa misteri dan daya tarik yang kuat.</p>\r\n\r\n<p><strong>&ldquo;The Scream&rdquo; oleh Edvard Munch</strong></p>\r\n\r\n<p>Makna: Lukisan ini menunjukkan figur yang terdistorsi dalam ekspresi ketakutan. Dikatakan bahwa lukisan ini mencerminkan kecemasan dan isolasi emosional yang dialami oleh Munch.</p>\r\n\r\n<p><strong>&ldquo;Guernica&rdquo; oleh Pablo Picasso</strong></p>\r\n\r\n<p>Makna: Lukisan ini adalah protes terhadap serangan udara brutal terhadap kota Guernica di Spanyol selama Perang Saudara Spanyol. Lukisan ini menjadi lambang anti-perang dan kekerasan.</p>\r\n\r\n<p><strong>&ldquo;The Birth of Venus&rdquo; oleh Sandro Botticelli</strong></p>\r\n\r\n<p>Makna: Karya ini menggambarkan dewi Venus yang lahir dari laut dalam mitologi Romawi. Lukisan ini menggambarkan keindahan, keanggunan, dan kekuatan mitologi klasik.</p>\r\n\r\n<p><strong>&ldquo;The Persistence of Memory&rdquo; oleh Salvador Dal&iacute;</strong></p>\r\n\r\n<p>Makna: Lukisan ini menampilkan jam tangan meleleh dan lingkungan yang surreal. Ini menggambarkan konsep waktu yang relatif dan keterpecahan realitas, mencerminkan pandangan Dal&iacute; tentang dunia.</p>\r\n\r\n<p><strong>&ldquo;The Creation of Adam&rdquo; oleh Michelangelo</strong></p>\r\n\r\n<p>Makna: Bagian dari langit-langit Kapel Sistine, lukisan ini menggambarkan momen penting ketika Adam diberi kehidupan oleh Tuhan. Ini adalah representasi ikonik dari penciptaan manusia dalam agama Kristen.</p>\r\n','A','2025-11-25 04:44:10'),(5,'asdsad','2025-11-07','c3c9891fd06cf2bdc2118f4532dd9137.jpg','<p><a href=\"https://www.mpaskina.com/10-lukisan-terkenal-di-dunia-beserta-maknanya-sudah-tahu/\">10 Lukisan Terkenal di Dunia Beserta Maknanya. Sudah Tahu?</a>&nbsp;&ndash; Lukisan merupakan bentuk seni rupa yang melibatkan penciptaan gambar atau karya visual di atas permukaan datar seperti kanvas, kertas, kayu, atau medium lainnya. Seniman menggunakan berbagai alat seperti kuas, cat, tinta, pastel, atau bahan lainnya untuk membuat gambar yang menggambarkan objek, pemandangan, abstraksi, atau konsep tertentu.</p>\r\n\r\n<p>Lukisan adalah salah satu bentuk seni rupa yang paling klasik dan luas. Seniman menggunakan berbagai teknik, medium, dan gaya untuk menciptakan karya yang menggambarkan dunia nyata atau abstrak. Lukisan memungkinkan seniman untuk mengekspresikan kreativitas mereka dan menyampaikan pesan, emosi, atau gagasan kepada penonton dengan cara visual.</p>\r\n\r\n<p>Tentu, berikut adalah 10 lukisan terkenal di dunia beserta sedikit informasi tentang makna atau konteksnya:</p>\r\n\r\n<p><img alt=\"10 Lukisan Terkenal di Dunia Beserta Maknanya. Sudah Tahu?\" src=\"https://www.mpaskina.com/wp-content/uploads/2023/12/lukisan-terkenal-di-dunia-the-scream-768x1024.jpg\" style=\"height:1024px; width:768px\" /></p>\r\n\r\n<p><strong>&ldquo;Mona Lisa&rdquo; oleh Leonardo da Vinci</strong></p>\r\n\r\n<p>Makna: Lukisan ini adalah salah satu potret paling ikonik dalam sejarah seni rupa. Senyum misterius Mona Lisa telah memicu banyak spekulasi dan interpretasi tentang ekspresi dan makna di balik lukisan ini.</p>\r\n\r\n<p><strong>&ldquo;The Starry Night&rdquo; oleh Vincent van Gogh</strong></p>\r\n\r\n<p>Makna: Lukisan ini menggambarkan pemandangan malam yang dramatis dan unik. Van Gogh menciptakan karya ini di masa ketika ia berada di rumah sakit jiwa, menggambarkan pengalamannya yang intens dan emosional.</p>\r\n\r\n<p><strong>&ldquo;The Last Supper&rdquo; oleh Leonardo da Vinci</strong></p>\r\n\r\n<p>Makna: Lukisan ini menggambarkan momen terakhir Yesus bersama para muridnya sebelum penangkapan dan pengkhianatan. Ini adalah salah satu lukisan agama paling ikonik dalam sejarah seni.</p>\r\n\r\n<p><strong>&ldquo;Girl with a Pearl Earring&rdquo; oleh Johannes Vermeer</strong></p>\r\n\r\n<p>Makna: Potret ini dikenal karena keanggunannya dan fokus pada mata gadis dengan anting mutiara besar, menimbulkan rasa misteri dan daya tarik yang kuat.</p>\r\n\r\n<p><strong>&ldquo;The Scream&rdquo; oleh Edvard Munch</strong></p>\r\n\r\n<p>Makna: Lukisan ini menunjukkan figur yang terdistorsi dalam ekspresi ketakutan. Dikatakan bahwa lukisan ini mencerminkan kecemasan dan isolasi emosional yang dialami oleh Munch.</p>\r\n\r\n<p><strong>&ldquo;Guernica&rdquo; oleh Pablo Picasso</strong></p>\r\n\r\n<p>Makna: Lukisan ini adalah protes terhadap serangan udara brutal terhadap kota Guernica di Spanyol selama Perang Saudara Spanyol. Lukisan ini menjadi lambang anti-perang dan kekerasan.</p>\r\n\r\n<p><strong>&ldquo;The Birth of Venus&rdquo; oleh Sandro Botticelli</strong></p>\r\n\r\n<p>Makna: Karya ini menggambarkan dewi Venus yang lahir dari laut dalam mitologi Romawi. Lukisan ini menggambarkan keindahan, keanggunan, dan kekuatan mitologi klasik.</p>\r\n\r\n<p><strong>&ldquo;The Persistence of Memory&rdquo; oleh Salvador Dal&iacute;</strong></p>\r\n\r\n<p>Makna: Lukisan ini menampilkan jam tangan meleleh dan lingkungan yang surreal. Ini menggambarkan konsep waktu yang relatif dan keterpecahan realitas, mencerminkan pandangan Dal&iacute; tentang dunia.</p>\r\n\r\n<p><strong>&ldquo;The Creation of Adam&rdquo; oleh Michelangelo</strong></p>\r\n\r\n<p>Makna: Bagian dari langit-langit Kapel Sistine, lukisan ini menggambarkan momen penting ketika Adam diberi kehidupan oleh Tuhan. Ini adalah representasi ikonik dari penciptaan manusia dalam agama Kristen.</p>\r\n','A','2025-11-25 04:45:35'),(6,'sadsad','2025-11-20','bd2ecc73b331b81dbd34de7a77bfa1a9.jpg','<p><a href=\"https://www.mpaskina.com/10-lukisan-terkenal-di-dunia-beserta-maknanya-sudah-tahu/\">10 Lukisan Terkenal di Dunia Beserta Maknanya. Sudah Tahu?</a>&nbsp;&ndash; Lukisan merupakan bentuk seni rupa yang melibatkan penciptaan gambar atau karya visual di atas permukaan datar seperti kanvas, kertas, kayu, atau medium lainnya. Seniman menggunakan berbagai alat seperti kuas, cat, tinta, pastel, atau bahan lainnya untuk membuat gambar yang menggambarkan objek, pemandangan, abstraksi, atau konsep tertentu.</p>\r\n\r\n<p>Lukisan adalah salah satu bentuk seni rupa yang paling klasik dan luas. Seniman menggunakan berbagai teknik, medium, dan gaya untuk menciptakan karya yang menggambarkan dunia nyata atau abstrak. Lukisan memungkinkan seniman untuk mengekspresikan kreativitas mereka dan menyampaikan pesan, emosi, atau gagasan kepada penonton dengan cara visual.</p>\r\n\r\n<p>Tentu, berikut adalah 10 lukisan terkenal di dunia beserta sedikit informasi tentang makna atau konteksnya:</p>\r\n\r\n<p><img alt=\"10 Lukisan Terkenal di Dunia Beserta Maknanya. Sudah Tahu?\" src=\"https://www.mpaskina.com/wp-content/uploads/2023/12/lukisan-terkenal-di-dunia-the-scream-768x1024.jpg\" style=\"height:1024px; width:768px\" /></p>\r\n\r\n<h3><strong>&ldquo;Mona Lisa&rdquo; oleh Leonardo da Vinci</strong></h3>\r\n\r\n<p>Makna: Lukisan ini adalah salah satu potret paling ikonik dalam sejarah seni rupa. Senyum misterius Mona Lisa telah memicu banyak spekulasi dan interpretasi tentang ekspresi dan makna di balik lukisan ini.</p>\r\n\r\n<h3><strong>&ldquo;The Starry Night&rdquo; oleh Vincent van Gogh</strong></h3>\r\n\r\n<p>Makna: Lukisan ini menggambarkan pemandangan malam yang dramatis dan unik. Van Gogh menciptakan karya ini di masa ketika ia berada di rumah sakit jiwa, menggambarkan pengalamannya yang intens dan emosional.</p>\r\n\r\n<h3><strong>&ldquo;The Last Supper&rdquo; oleh Leonardo da Vinci</strong></h3>\r\n\r\n<p>Makna: Lukisan ini menggambarkan momen terakhir Yesus bersama para muridnya sebelum penangkapan dan pengkhianatan. Ini adalah salah satu lukisan agama paling ikonik dalam sejarah seni.</p>\r\n\r\n<h3><strong>&ldquo;Girl with a Pearl Earring&rdquo; oleh Johannes Vermeer</strong></h3>\r\n\r\n<p>Makna: Potret ini dikenal karena keanggunannya dan fokus pada mata gadis dengan anting mutiara besar, menimbulkan rasa misteri dan daya tarik yang kuat.</p>\r\n\r\n<h3><strong>&ldquo;The Scream&rdquo; oleh Edvard Munch</strong></h3>\r\n\r\n<p>Makna: Lukisan ini menunjukkan figur yang terdistorsi dalam ekspresi ketakutan. Dikatakan bahwa lukisan ini mencerminkan kecemasan dan isolasi emosional yang dialami oleh Munch.</p>\r\n\r\n<h3><strong>&ldquo;Guernica&rdquo; oleh Pablo Picasso</strong></h3>\r\n\r\n<p>Makna: Lukisan ini adalah protes terhadap serangan udara brutal terhadap kota Guernica di Spanyol selama Perang Saudara Spanyol. Lukisan ini menjadi lambang anti-perang dan kekerasan.</p>\r\n\r\n<h3><strong>&ldquo;The Birth of Venus&rdquo; oleh Sandro Botticelli</strong></h3>\r\n\r\n<p>Makna: Karya ini menggambarkan dewi Venus yang lahir dari laut dalam mitologi Romawi. Lukisan ini menggambarkan keindahan, keanggunan, dan kekuatan mitologi klasik.</p>\r\n\r\n<h3><strong>&ldquo;The Persistence of Memory&rdquo; oleh Salvador Dal&iacute;</strong></h3>\r\n\r\n<p>Makna: Lukisan ini menampilkan jam tangan meleleh dan lingkungan yang surreal. Ini menggambarkan konsep waktu yang relatif dan keterpecahan realitas, mencerminkan pandangan Dal&iacute; tentang dunia.</p>\r\n\r\n<h3><strong>&ldquo;The Creation of Adam&rdquo; oleh Michelangelo</strong></h3>\r\n\r\n<p>Makna: Bagian dari langit-langit Kapel Sistine, lukisan ini menggambarkan momen penting ketika Adam diberi kehidupan oleh Tuhan. Ini adalah representasi ikonik dari penciptaan manusia dalam agama Kristen.</p>\r\n','A','2025-11-25 04:46:00');

#
# Structure for table "organizer"
#

CREATE TABLE `organizer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "organizer"
#

REPLACE INTO `organizer` VALUES (1,'sadsadsa','89b6bd1b5afc7265df1ed7f91c28144b.png','<p>asdsad</p>\r\n','A');

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
# Structure for table "pnicheme_ems"
#

CREATE TABLE `pnicheme_ems` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pnicheme_ems"
#


#
# Structure for table "product"
#

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(1) DEFAULT NULL,
  `position` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "product"
#

REPLACE INTO `product` VALUES (1,'Pigments','74bf02aa247101ff39134fe8968eda90.jpg','<p>-</p>\r\n','A',1),(2,'Resins','fb7d24140e446a50fdcb5b5c9469a78f.jpg','','A',2),(3,'Additives','51962878ea5565056fba54a76717b014.jpg','','A',3),(4,'Production Machines','7064ce078eacf44bf846ab7d13cf8891.jpg','','A',4),(5,'Laboratory Testing Equipments','da02fdc20775460939324aa7425c7caa.jpg','','A',5),(6,'LABORATORY TESTING  EQUIPMENTS','4a551212dd8bbe4963508e36c771f10d.jpg','','A',6),(7,'Paint Manufactures','763a02533db52fdfb7f1dceaa053e201.jpg','','A',7),(8,'Painting Equipments','5ec10955ba7ca42b7a64c6361a5b5c5b.png','','A',8),(9,'Painting Contractors','f2f58525e9bbee39f8f1365d7e36a0aa.jpg','','A',9),(10,'sdadasd','26657d107495a1ae4d5a29da70c41f77.jpg','ssdfds','A',44),(11,'wqewqewq','a7ddda1f1b0ebdbb275fac5fa18a5a91.jpg','qwewqe','A',44),(12,'LABORATORY TESTING  EQUIPMENTS','d588c64d3b555f02ee559af437eb8ca3.jpg','reretesadad','A',100);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "profile"
#

REPLACE INTO `profile` VALUES (2,'PT. Warna Karya Gemilang','<p>Coating Show aims to bring together professionals, stakeholders, and enthusiasts from the industries to explore the latest innovations, technologies, and trends. This event will serve as a platform for networking, knowledge exchange and business opportunities within the coatings industries.</p>\r\n\r\n<p>The show is an international show attended by business operators and visitors of related industries globally, regionally and locally. The multinational, regional and local exhibitors shall have the opportunity to directly meeting their clients and products&rsquo; end users.</p>\r\n','406186a9020cc0914eb96de9282941c6.png','./assets/images/upload/profile/','coating show','asdsad','asdsad','089514903217','123213','developer@argomanunggalgroup.com','adasd','A','2025-10-02 22:04:47','5',NULL);

#
# Structure for table "quick_link"
#

CREATE TABLE `quick_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "quick_link"
#

REPLACE INTO `quick_link` VALUES (1,'Home','Dashboard','A',NULL),(2,'Why Exhibit?',NULL,'A',1),(3,'Hotel Booking','Hotel_Booking','A',NULL),(4,'News Update','News_Update','A',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sosmed"
#

REPLACE INTO `sosmed` VALUES (1,'youtube','youtube','https://google.com','A','2025-02-02 00:52:06','5'),(2,'instagram','instagram','https://instagram.com','A','2025-02-02 00:52:37','5'),(3,'fb','facebook','https://facebook.com','A','2025-02-02 00:53:55','5'),(4,'twitter','twitter','https://twitter.com','A','2025-02-02 00:54:07','5'),(5,'tiktok','tiktok','http://tiktok.com/','A','2025-02-02 21:54:37','5');

#
# Structure for table "sponsors"
#

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `position` int(10) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sponsors"
#

REPLACE INTO `sponsors` VALUES (1,'asdsadsad','sponsors1.png','./assets/images/upload/sponsors/','https://coatingshow.com/','2025-10-09 23:02:02','5','A',1,'2025-11-22 02:35:09'),(2,'wqewqe','sponsors2.png','./assets/images/upload/sponsors/',NULL,'2025-10-09 23:02:13','5','A',2,NULL),(3,'test333','1e66fbe1e29567a7171527ebbc01205f.jpg','./assets/images/upload/sponsors/','http://tiktok.com/3','2025-10-26 15:45:41','5','A',45,'2025-10-27 22:24:33');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "submenu"
#

REPLACE INTO `submenu` VALUES (1,'2','Why Exhibit','Exhibiting/whyexhibit_index','A',''),(2,'2','Exhibitor List','Exhibiting/exhibitorlist_index','A',NULL),(3,'2','Exhibitor Visa','Exhibiting/exhibitor_visa','A',NULL),(4,'7','Why Visit','Visiting/visiting_index','A',NULL),(5,'7','Conference Schedule','Visiting/conference_schedule_index','A',NULL),(6,'7','Post Show Report','Visiting/download_show_report','A',NULL),(8,'4','Visitor Information','Visitor_Information','A',NULL),(9,'4','Accommodation','Hotel_Booking','A','<p>for acomodation</p>\r\n');

#
# Structure for table "submit_form"
#

CREATE TABLE `submit_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_addres` text,
  `suburb` text,
  `city` text,
  `postal_code` text,
  `country` varchar(255) DEFAULT '',
  `description` text,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "submit_form"
#

REPLACE INTO `submit_form` VALUES (1,'e3efd1ce3465b9e7ca1e1b3fca841cff','Mrs','rifqi Irawan3','Female','61','2','rifqiirawan17@gmail.com','asasdsad3','asdsad3','asdsad3','asd3','asd3','adsa3','Christmas Island','asdasdsa3','2025-10-12 19:21:34'),(2,'5d8ae32893328f4b09229babf1d5f5e5','Mr','coating show','Male','43','w21321','developer@argomanunggalgroup.com','asdsadsadas','sad','dsad','sadsa','sadsad','asdas','Argentina','sadsad','2025-10-12 19:22:37');

#
# Structure for table "support"
#

CREATE TABLE `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "support"
#

REPLACE INTO `support` VALUES (1,'test','support1.png','./assets/images/upload/support/','https://coatingshow.com/2',1,'2025-10-21 13:21:28','5','A','2025-11-22 03:09:19'),(2,'swqeq','support2.png','./assets/images/upload/support/','https://coatingshow.com/',2,'2025-10-21 13:21:38','5','A','2025-11-22 03:22:12'),(3,'sadsad','support3.png','./assets/images/upload/support/','',3,'2025-10-21 13:21:48','5','A',NULL),(4,'adasd','support4.png','./assets/images/upload/support/','',4,'2025-10-21 13:23:18','5','A',NULL),(5,'sdsad','support5.png','./assets/images/upload/support/','',5,'2025-10-21 13:23:29','5','A',NULL),(6,'sadsad','support6.png','./assets/images/upload/support/','',6,'2025-10-21 13:25:24','5','A',NULL),(7,'sdsad','support7.png','./assets/images/upload/support/','',7,'2025-10-21 13:25:34','5','A',NULL),(11,'qwqe232','support8.jpg','./assets/images/upload/support/','http://tiktok.com/',8,'2025-11-22 03:17:03','5','A',NULL),(12,'trytry','support9.jpg','./assets/images/upload/support/','http://tiktok.com/',9,'2025-11-22 03:17:58','5','A',NULL);

#
# Structure for table "swiper"
#

CREATE TABLE `swiper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `subtitle` text,
  `image` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "swiper"
#

REPLACE INTO `swiper` VALUES (1,'<p>asdsad22222324</p>\r\n',NULL,'3b1eac2ad24b99d01951b8009681948c.jpg',NULL,'A'),(3,'<p>sadsa</p>\r\n',NULL,'3d4d0d5cd63a5b9faa963645c5de54f9.jpg',NULL,'A'),(4,'<p>dsaq3e3q2e</p>\r\n',NULL,'5adab9f5102690f79a7b21053bb5ed7f.jpg',NULL,'A');
