# Host: localhost  (Version: 5.5.5-10.1.36-MariaDB)
# Date: 2025-10-10 18:18:00
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
  `uplod_file` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "book_stand"
#

REPLACE INTO `book_stand` VALUES (1,'coating show','<p><span style=\"font-size:18px\">Please choose your booth, fill in the contract form completely and send to&nbsp;<a href=\"mailto:hetty@coatingshow.com\"><strong>hetty@coatingshow.com</strong></a>. The stand booking is based on first come first serve only. The Exhibitor will be notified of a confirmed booking. The organizer has the right to refuse a booking without giving any explanation.</span></p>\r\n\r\n<p><span style=\"font-size:28px\"><strong>Type of Booth/Stand</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Shell Scheme</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Each 3x3 sqm Shell Scheme, the following is included:</span></p>\r\n','<p><span style=\"font-size:14px\"><strong>Other sizes shell scheme shall be multification of 3x3 sqm</strong>.</span></p>\r\n\r\n<p><strong><span style=\"font-size:14px\">Space Only</span></strong></p>\r\n\r\n<ul>\r\n\t<li><span style=\"font-size:14px\">Empty space, you need to design your own booth/stand and submit the design to us for approval </span></li>\r\n\t<li><span style=\"font-size:14px\">After approval from us, you may construct your booth/stand.</span></li>\r\n\t<li><span style=\"font-size:14px\">Electricity/power requirement will be charged to you.</span></li>\r\n</ul>\r\n','spec.png',NULL,'A');

#
# Structure for table "carousel"
#

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "carousel"
#

REPLACE INTO `carousel` VALUES (1,'sdsasdsad','3f05a6b137d91d95620d937313593544.png','<p>sadsad</p>\r\n','A'),(2,'32432432','45b674604aa7fe3a036ed3f1a70def67.jpg','<p>wqewqew</p>\r\n','A');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "contact"
#

REPLACE INTO `contact` VALUES (2,'Adrian Lioe','Event Director','628119166060','adrian.lioe@coatingshow.com','A'),(3,'Hetty Clark','sales','628119036060','hetty@coatingshow.com','A');

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

REPLACE INTO `content1` VALUES (1,'WELCOME TO Coating Show','Donít miss the opportunity to promote your products internationally, regionally and locally at affordable costs.\r\n','<span>WELCOME TO EMPOWERING INDUSTRIES</span>','08f606ffd4907f888f0796160ad2bd81.jpg','A');

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
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csi_content_company_profile` (`content_id`),
  CONSTRAINT `fk_csi_content_company_profile` FOREIGN KEY (`content_id`) REFERENCES `csi_sidik`.`csi_contents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

#
# Data for table "csi_content_company_profile"
#

REPLACE INTO `csi_content_company_profile` VALUES (1,5,3,'Actega GmbH','C01','Actega GmbH','ACTEGA is a division of the internationally operating specialty chemicals group ALTANA. With production facilities in Europe, North and South America and China, ACTEGA develops, produces and distributes specialty coatings, inks, adhesives and sealing compounds with a focus on the packaging industry. Following the motto \"Packed with Expertise\", ACTEGA does not only offer technically sophisticated product solutions, but also meets the high safety standards of the food, beverages, pharmaceutical and toy industries. Whether for flexible and metal packaging, folding cartons or labels, products by ACTEGA provide packaging with a high-quality appearance and innovative functionalities.\r\n\r\nProducts include coatings, inks, compounds, sealants, adhesives and auxiliary\'s for packaging, labels, closures, cans, tubes & monoblocs and publication & commercial.','Actega GmbH','info.actega@altana.com','+49 281 670-8','Abelstraﬂe 43, 46483 Wesel, Germany','http://www.actega.com/','https://www.linkedin.com/company/actega/','https://twitter.com/ACTEGA_global','https://web.facebook.com/ACTEGA','https://www.youtube.com/actega','https://www.instagram.com/actega_global/','2025-09-28 10:31:25','sysadmin','2025-09-28 13:15:27','sysadmin'),(2,5,4,'Aiger Engineering','B10','Aiger Engineering','For over 30 years, Aiger Engineering Ltd designs and produces brand new machinery for filter manufacture and special cigarette packers. Present worldwide, Aiger is leader in modular FleX filter combining and making. On Stand B10, we will show you how we retrofit our technology to your existing lines. ','Aiger Engineering',NULL,NULL,'246 Vasil Levski Street\r\n4003\r\nBulgaria','https://www.aiger.com/','https://www.linkedin.com/company/aiger-uk/',NULL,NULL,NULL,'https://www.instagram.com/aigerengineering/','2025-09-28 14:56:52','sysadmin','2025-09-28 14:57:34','sysadmin'),(3,5,5,'Ali Machinery Dubai','K10','Ali Machinery Dubai','Who we are Primarily, we specialize in the provision of Tobacco Machinery. Our expertise encompasses not only the trading of machinery but also extends to being a dedicated supplier. This specialization is enriched by our comprehensive solutions tailored for emerging Cigarette Companies. What sets us apart is our ability to offer firsthand insights through our active Cigarette Manufacturing operation in the UAE. Clients have the opportunity to witness our machines in full production, fostering transparency and trust. Moreover, our commitment to excellence is evident in our provision of Free Demonstrations and Training within the confines of our factory premises. Our machine range is all-encompassing, including Cigarette Maker: MK-8 D, boasting a remarkable speed of up to 2800 Cigarettes per minute. Packing Line: HLP 2 Complete Packing Line, functioning at an impressive pace of 180 Packs per minute. We take pride in being more than just suppliers ñ we are partners in the journey of establishing successful cigarette manufacturing ventures.','Ali Machinery Dubai',NULL,'+971554530226','FACTORY MO0464 STREET N300\r\nJAFZA',NULL,NULL,NULL,NULL,NULL,NULL,'2025-09-28 15:01:31','','2025-09-28 15:01:31',NULL),(4,5,6,'Anhui Great Nation Essential Oils Co., Ltd.','O30','Anhui Great Nation Essential Oils Co., Ltd.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2025-09-28 15:03:53','','2025-09-28 15:04:20',NULL);

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
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csi_content_media` (`content_id`),
  CONSTRAINT `fk_csi_content_media` FOREIGN KEY (`content_id`) REFERENCES `csi_sidik`.`csi_contents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

#
# Data for table "csi_content_media"
#

REPLACE INTO `csi_content_media` VALUES (1,1,'image','assets/uploads/why_exhibit/banner.jpg',NULL,NULL,1,1,NULL,'2025-09-24 23:25:36','sysadmin','2025-09-25 08:07:29','sysadmin'),(2,2,'image','assets/uploads/why_exhibit/section.png',NULL,NULL,1,1,NULL,'2025-09-24 23:25:36','sysadmin','2025-09-25 23:13:40','sysadmin'),(3,5,'image','assets/uploads/exhibitor_list/actega.jpg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 06:06:16','sysadmin','2025-09-28 14:48:43','sysadmin'),(4,5,'image','assets/uploads/exhibitor_list/aiger.jpg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 14:53:59','sysadmin','2025-09-28 14:59:38','sysadmin'),(5,5,'image','assets/uploads/exhibitor_list/ali_machinery_dubai.jpg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 14:59:03','sysadmin','2025-09-28 14:59:52','sysadmin'),(6,5,'image','assets/uploads/exhibitor_list/anhui_great_nation.jpeg',NULL,'exhibiting/company-profile',1,0,NULL,'2025-09-28 15:02:59','sysadmin','2025-09-28 15:05:20','sysadmin');

#
# Structure for table "csi_contents"
#

CREATE TABLE `csi_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `content_year` int(11) NOT NULL,
  `content_type` enum('header','banner','section','footer') NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) DEFAULT NULL,
  `body_text` text,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_csi_contents_menu` (`menu_id`),
  CONSTRAINT `fk_csi_contents_menu` FOREIGN KEY (`menu_id`) REFERENCES `csi_sidik`.`csi_menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

#
# Data for table "csi_contents"
#

REPLACE INTO `csi_contents` VALUES (1,7,2026,'banner','WHY EXHIBIT','Exhibiting at Coating Show will provide your company with the perfect platform to showcase your latest products and services to a range of local and international attendees.','','2025-09-24 23:10:35','sysadmin','2025-09-24 23:10:35','sysadmin'),(2,7,2026,'section','','Indonesia is the biggest economy in South East Asia and has managed its economy well pior and after Covid-19 pandemy. The macro economic indicators are:','<ul class=\"p-3\">\r\n        <li>Indonesia is the largest country in ASEAN, 280 million population</li>\r\n        <li>Indonesian Yearly GDP &gt; 5%, the highest in ASEAN</li>\r\n        <li>There are 200 paints / coatings companies in Indonesia</li>\r\n        <li>Paint consumption is around 5kg per year /capita, still low in ASEAN</li>\r\n        <li>Indonesian Paint Market 2024 is forecasted &gt;1.000.000 tons and growing around 5% per year</li>\r\n    </ul>','2025-09-24 23:10:35','sysadmin','2025-09-24 23:10:35','sysadmin'),(3,7,2026,'section','','At Coating Show you\'ll be able to:','<ul class=\"p-3\">\r\n                <li>Connect with a targeted audience of industry professionals and decision makers</li>\r\n                <li>Utilize the event as a platform to launch new products and services to a wide and relevant audience.</li>\r\n                <li>Engage directly with end-users to understand their needs and preferences better</li>\r\n                <li>Collect high-quality leads and generate new business opportunities by engaging with potential customers</li>\r\n                <li>Build and strengthen relationships with existing customers and partners by meeting them face-to-face</li>\r\n                <li>Explore opportunities for expanding your business into new markets and regions</li>\r\n            </ul>','2025-09-25 23:39:39','sysadmin','2025-09-26 00:03:45',NULL),(4,7,2026,'section','','Important Visa Information for Entry into Indonesia','<p style=\"margin: 15px;\">\r\n    Please ensure you have the correct visa to legally enter and stay in Indonesia for attending, speaking, or exhibiting at our event. \r\n    A tourist visa is not valid for these purposes. The following link is for applying for the appropriate visa in advance:\r\n</p>\r\n\r\n<a class=\"btn primary-btn\" \r\n   href=\"https://evisa.imigrasi.go.id/\" \r\n   style=\"background-color: #4CAF50; \r\n          color: white; \r\n          padding: 12px 30px; \r\n          text-decoration: none; \r\n          font-weight: bold; \r\n          border-radius: 5px; \r\n          display: inline-block; \r\n          margin: 20px 0;\" \r\n   target=\"_blank\">\r\n   Apply for Visa\r\n</a>\r\n\r\n<p style=\"margin-top: 15px;\">\r\n    <strong>The organizer is not responsible for those who enter the show with incorrect visas.</strong>\r\n</p>\r\n','2025-09-25 23:47:59','sysadmin','2025-09-26 00:03:47',NULL),(5,8,2026,'','CSI 2026 Exhibitors',NULL,NULL,'2025-09-28 05:58:35','sysadmin','2025-09-28 06:00:24','sysadmin'),(6,9,2026,'banner','Exhibitor Visa',NULL,'','2025-09-28 14:27:30','sysadmin','2025-09-28 14:28:25','sysadmin'),(7,9,2026,'section','',NULL,'Exhibitors participating in our event may be required to obtain a visa depending on \r\n                  their nationality and the host countryís regulations. The organizing committee will \r\n                  provide assistance by issuing official invitation letters to support the visa \r\n                  application process.\r\n Please ensure that you apply for your visa well in advance of your planned travel \r\n                  date. The process and requirements may vary by embassy or consulate. It is the \r\n                  responsibility of each exhibitor to secure the necessary travel documents before \r\n                  arriving at the event venue.\r\n For further inquiries or to request a visa support letter, please contact our \r\n                  Exhibitor Support Team at <a href=\"mailto:visa-support@example.com\">visa-support@example.com</a>.','2025-09-28 14:28:15','sysadmin','2025-09-28 14:28:38','sysadmin');

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
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

#
# Data for table "csi_menus"
#

REPLACE INTO `csi_menus` VALUES (1,NULL,'HOME','controller','',1,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(2,NULL,'EXHIBITING','controller','',2,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(3,NULL,'VISITING','controller','',3,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(4,NULL,'INFORMATION','controller','',4,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(5,NULL,'CONTACT','controller','',5,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(6,NULL,'NEWSUPADATE ','controller','',5,'2025-09-24 22:41:04','sysadmin','2025-09-24 22:41:04','sysadmin'),(7,2,'Why Exhibit','controller','',1,'2025-09-24 22:43:23','sysadmin','2025-09-24 22:43:23','sysadmin'),(8,2,'Exhibitor List','controller','',2,'2025-09-24 22:43:23','sysadmin','2025-09-24 22:43:23','sysadmin'),(9,2,'Exhibitor Visa','controller','',3,'2025-09-24 22:43:23','sysadmin','2025-09-24 22:43:23','sysadmin');

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
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "event_value"
#

REPLACE INTO `event_value` VALUES (1,'Paint Companies in Indonesia','200','A'),(2,'Multi National / Regional Brands','34','A'),(3,'National Brands','92','A'),(4,'Small / Medium Manufacturers','74','A');

#
# Structure for table "floor_plan"
#

CREATE TABLE `floor_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "floor_plan"
#


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "highlights"
#

REPLACE INTO `highlights` VALUES (1,'test','vr2Uz3SYFNQ','A','<p>dasdsadasdsadsad</p>\r\n'),(2,'Video Larva','2upTEXu63UY','A','<p>&nbsp;</p>\r\n\r\n<p>These are Best Season 3 Larva Episodes! Enjoy the Season 3 top 10 videos.</p>\r\n\r\n<p>If your best episode is not included, please leave a comment with the name of your best episode!</p>\r\n\r\n<p>Season 3 Top 10</p>\r\n\r\n<p>10: Season 3 Episode 101 Chsirstmas</p>'),(3,'video sinchan','MR3gFZBOC0A','A','<h1>film 1 jam Sinchan BHS Indonesian</h1>\r\n');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "member"
#

REPLACE INTO `member` VALUES (1,'sadsadsad','47e372a51121579f10cde0c0d52800f5.png','<p>asdsad</p>\r\n','A'),(2,'dasdsa','da71a48f3a72f081fc970dbb7939d256.png','<p>sadsad</p>\r\n','A');

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

REPLACE INTO `menu` VALUES (1,'Home',NULL,'A',NULL),(2,'Exhibiting',NULL,'A',NULL),(3,'Visiting',NULL,'A',NULL),(4,'Information',NULL,'A',NULL),(5,'Contact',NULL,'A',NULL),(6,'News Update',NULL,'A',NULL);

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

REPLACE INTO `organizer` VALUES (1,'sdfsdfdsf','bfbb0bd4b06f35fea55425f3b11e21a7.png','<p>wrewrwrew</p>\r\n','A');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "profile"
#

REPLACE INTO `profile` VALUES (2,'PT. Warna Karya Gemilang','<p><span style=\"font-size:20px;text-align: justify;\">Coating Show aims to bring together professionals, stakeholders, and enthusiasts from the industries to explore the latest innovations, technologies, and trends. This event will serve as a platform for networking, knowledge exchange and business opportunities within the coatings industries.</span></p>\r\n<p style=\"font-size: 20px;text-align: justify;\">The show is an international show attended by business operators and visitors of related industries globally, regionally and locally. The multinational, regional and local exhibitors shall have the opportunity to directly meeting their clients and productsí end users.</p>','logo_com2.png','./assets/images/upload/profile/','coating show indonesia','asdsad','asdsad','213213','123213','developer@argomanunggalgroup.com','adasd','A','2025-10-02 22:04:47','5',NULL);

#
# Structure for table "quick_link"
#

CREATE TABLE `quick_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "quick_link"
#

REPLACE INTO `quick_link` VALUES (1,'Home','-','A'),(2,'Why Exhibit?','-','A'),(3,'Hotel Booking','-','A'),(4,'News Update','-','A');

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

REPLACE INTO `sosmed` VALUES (1,'youtube','youtube','https://www.google.com','A','2025-02-02 00:52:06','5'),(2,'instagram','instagram','wqeqeqeqweqwewqewqe','A','2025-02-02 00:52:37','5'),(3,'fb','facebook',NULL,'A','2025-02-02 00:53:55','5'),(4,'twitter','twitter',NULL,'A','2025-02-02 00:54:07','5'),(5,'tiktok','tiktok','http://tiktok.com/','A','2025-02-02 21:54:37','5');

#
# Structure for table "sponsors"
#

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sponsors"
#

REPLACE INTO `sponsors` VALUES (1,'asdsadsad','sponsors1.png','./assets/images/upload/sponsors/',1,'2025-10-09 23:02:02','5','A',NULL),(2,'wqewqe','sponsors2.png','./assets/images/upload/sponsors/',2,'2025-10-09 23:02:13','5','A',NULL);

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
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "support"
#

REPLACE INTO `support` VALUES (2,'Quartz Business Media','Partner1.jpg','./assets/images/upload/support/',1,'2025-01-19 04:30:37','1','A','2025-02-05 00:43:32'),(3,'Westrade Group LTd1','Support3.jpg','./assets/images/upload/support/',2,'2025-01-19 04:30:59','1','A','2025-09-24 23:04:20'),(4,'sasadsa','support3.jpg','./assets/images/upload/support/',3,'2025-10-05 00:27:58','LOG-000004','A',NULL),(5,'sadad','support4.jpg','./assets/images/upload/support/',4,'2025-10-05 00:28:08','LOG-000004','A',NULL),(6,'adad','support5.jpg','./assets/images/upload/support/',5,'2025-10-05 00:28:17','LOG-000004','A',NULL);

#
# Structure for table "visitor_information"
#

CREATE TABLE `visitor_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` text,
  `datecreated` datetime DEFAULT NULL,
  `description` text,
  `userid` varchar(255) DEFAULT NULL,
  `run_number` int(11) DEFAULT '1',
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "visitor_information"
#


#
# Structure for table "visitor_information_detail"
#

CREATE TABLE `visitor_information_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_attention` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "visitor_information_detail"
#

REPLACE INTO `visitor_information_detail` VALUES (27,'ATT-006','Visitors Must wear their badge at all times while inside the venue.','2025-06-12 09:33:34'),(28,'ATT-006','Entry is strictly limited to visitors aged 18 years and above. Children and minors are not permitted inside the exhibition hall.','2025-06-12 09:33:34'),(29,'ATT-006','All visitors are required to wear business attire. Visitors wearing shorts or slippers cannot enter the exhibition hall.','2025-06-12 09:33:34'),(30,'ATT-006','Smoking is strictly prohibited within the exhibition hall and all indoor areas.','2025-06-12 09:33:34'),(31,'ATT-006','Weapons and dangerous items are prohibited in the exhibition area.','2025-06-12 09:33:34'),(32,'ATT-006','Photography and video recording of exhibits is not allowed without the exhibitor\'s permission.','2025-06-12 09:33:34'),(33,'ATT-006','The Organiser reserves the right to refuse entry into exhibition halls without being required to give a reason.','2025-06-12 09:33:34'),(70,'ATT-007','Dilaran memakai Sandal','2025-06-13 00:13:04'),(71,'ATT-007','dilarang merokok','2025-06-13 00:13:04'),(72,'ATT-007','dilarang foto','2025-06-13 00:13:04'),(73,'ATT-007','dilarang pakai celana pendek','2025-06-13 00:13:04'),(74,'ATT-007','dilarang masuk tanpa badge','2025-06-13 00:13:04');
