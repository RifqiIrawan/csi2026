-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2025 at 11:22 PM
-- Server version: 10.5.26-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k4238877_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `nama2` varchar(255) DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `nama3` varchar(255) DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `nama`, `file_name`, `folder_name`, `urut`, `description`, `datecreated`, `nama2`, `description2`, `nama3`, `description3`, `createdby`, `status`, `dateupdate`) VALUES
(2, 'About', '7c9e199846acfc692e4ac995d26c7304.jpg', './assets/images/upload/company/', 1, '<p>PT. Kelie Chemical World was established in April 2006 as a privately owned company. The management and activities of the company are in the hands of very experienced personnel, with a total of nearly 100 years of experience. Major experiences are in management, technical, marketing, and sales of chemicals. Servicing various chemical industries, including resins, paints/coatings, inks, oil &amp; gas, and biofuel industries.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The company has identified the needs for highly qualified personnel, innovative techniques, and quality materials to support the growth of the chemical industries, including resins, paints/coatings, inks, oil &amp; gas, biofuel, cement, other chemicals, and mining industries, especially in Indonesia and throughout the Asian region. These needs are good opportunities; therefore, it is our purpose to respond to and fulfill these needs. We are looking forward to working together with you to develop a long-lasting relationship to our mutual benefit.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Concept</strong></p>\r\n\r\n<p>The green color of our stationeries indicates our strong support for a &lsquo;GREEN&rsquo; environment and the &lsquo;GREEN&rsquo; world in general. The benzene ring shows our commitment to serving various industries. The world map inside the benzene ring shows our future dream to serve global businesses.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Vision</strong></p>\r\n\r\n<p>To utilize the skills and know-how of experienced personnel to become the best business solution for industries, including cleaning chemicals, resins, paints/coatings, inks, oil &amp; gas, and biofuel industries.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Mission</strong></p>\r\n\r\n<p>To give added value to customers, shareholders, employees, and the public in general, in line with the company&rsquo;s growth. To provide competitive goods and services by giving priority to high quality and innovation in technology. To improve and upgrade technical skills and know-how in line with customer requirements. To implement good corporate governance.</p>\r\n', '2025-02-19 17:08:24', NULL, NULL, NULL, NULL, '6', 'A', '2025-02-19 17:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `freetext` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `freetext`) VALUES
(1, 'PT. Kelie Chemical World was established in April 2006 as a privately owned company. \r\nThe management and activities of the company are in the hand of very experience personnel, a total of nearly 100 years of experience. Major experiences are in management , technical, marketing and sales of chemicals. Servicing various chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel industries. The company has identified the needs of highly qualified personnel, innovative techniques and quality materials to support the growth of the chemical industries including resins, paints / coatings, inks, oil & gas, bio fuel, cement , other chemicals and mining industries especially in Indonesia and through out the Asian region. These needs are good opportunities, therefore it is our purpose to respond and fulfill these needs We are looking forward to working together with you to develop a long lasting relationship to our mutual benefits.<br>\r\n<br><br>\r\nOur Concept<br>\r\nThe green color of our stationeries indicates our strong support for a `GREEN` environment and the `GREEN` world in general. The benzene ring shows our commitment to serving the various industries. The world map inside the benzene ring shows our future dream to serve the global businesses.<br><br>\r\nOur Mission<br>\r\nTo give added values to customers, share holders, employees and public in general in line with the company’s growth. To provide competitive goods and services by giving priority to high quality and innovation in technology. To improve and upgrade the technical skill and know how in line with customer’s requirement. To implement a good corporate governance.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `datecreated` date DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `services`, `kategori`, `datecreated`, `createdby`, `status`, `dateupdate`) VALUES
(3, 'PT. Kencana Intidasar', 'Epoxy resin', '1', '2025-01-19', '1', 'A', NULL),
(4, 'PT. Asia Petrocom Services', 'Drill pipe, Drill collar', '1', '2025-01-19', '1', 'A', NULL),
(5, 'PT. Propan Raya ICC', 'Organic Solvent', '1', '2025-01-19', '1', 'A', NULL),
(6, 'PT. Danapaint Indonesia', 'Concultancy', '1', '2025-01-19', '1', 'A', NULL),
(7, 'PT. Prakarsa Karya Sejati', 'Basic chemicals, organic solvent', '1', '2025-01-19', '1', 'A', NULL),
(8, 'PT. Trikemindo Utama', 'Pigments', '1', '2025-01-19', '1', 'A', NULL),
(9, 'PT. Tri Haafco Pratama', 'Basic chemicals, organic solvent', '1', '2025-01-19', '1', 'A', NULL),
(10, 'PT. Anugrah Nugi Pratama', 'Basic chemicals', '1', '2025-01-19', '1', 'A', NULL),
(11, 'PT. United Chemicals Inter Aneka', 'Epoxy resin, Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(12, 'PTP. Nusantara XIII (persero)', 'Basic chemicals, organic solvent', '1', '2025-01-19', '1', 'A', NULL),
(13, 'Pertamina Learning Center', 'Training', '1', '2025-01-19', '1', 'A', NULL),
(14, 'PT. Pakar Widya Chemindo', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(15, 'PT. Monokem Surya', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(16, 'PT. Pardic Jaya Chemicals', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(17, 'PT. Colorindo Chemtra', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(18, 'PT. Kusuma Kemindo Sentosa', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(19, 'PT. Royal Chemie Indonesia', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(20, 'PT. Worldwide Resins & Chemicals', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(21, 'PT. Hidup Makmur Lestari Abadi', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(22, 'PT. Mata Pelangi Chemindo', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(23, 'PT. Justus Sakti Raya', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(24, 'PT. Merck Indonesiar', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(25, 'PT. Bentala Sakti', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(26, 'PT. Perhutani', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(27, 'PT. Primatek / Lenteq', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(28, 'PT. Inawan Chemindo', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(29, 'PT. Tuna Sumber Ideakreasi', 'Exhibition booth', '1', '2025-01-19', '1', 'A', NULL),
(30, 'Frost & Sullivan Pty. Ltd., Singapore', 'Consultancy', '2', '2025-01-19', '1', 'A', NULL),
(31, 'Global Intelligence Alliance, China', 'Consultancy', '2', '2025-01-19', '1', 'A', NULL),
(32, 'APS Specialty Chemicals, New Zealand', 'Organic Solvent', '2', '2025-01-19', '1', 'A', NULL),
(33, 'Omni – Chem136, USA', 'Fine Chemical', '2', '2025-01-19', '1', 'A', NULL),
(34, 'Lotus Ingredients, Ltd., Hongkong', 'Organic Solvent, basic chemicals', '2', '2025-01-19', '1', 'A', NULL),
(35, 'TZ Trading Inc., Mexico', 'Inorganic acids', '2', '2025-01-19', '1', 'A', NULL),
(36, 'Distribuidora De Sosa, Mexico', 'Basic chemicals', '2', '2025-01-19', '1', 'A', NULL),
(37, 'OCA Pty. Ltd., Australia', 'Basic chemicals, organic solvent', '2', '2025-01-19', '1', 'A', NULL),
(38, 'Golden Arrow Coating Co. Ltd., Thailand', 'Pigments, Resins, Consultancy', '2', '2025-01-19', '1', 'A', NULL),
(39, 'PT Argo Manunggal', 'textile', '1', '2025-02-02', '5', 'A', NULL),
(40, 'Pura Barutama', 'Event WT Asia ', '1', '2025-02-18', '6', 'A', NULL),
(42, 'PT. Projava ', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(43, 'Lang Laser System Gmbh ', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(44, 'BMS Filterrods Industry', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(45, 'PT. Indojaya Mandiri', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(46, 'PT. Hertz Flavours Makmur Indonesia', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(47, 'PT. Mitra Sentosa Mandiri', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(48, 'PT. Wismilak Inti Makmur, Tbk', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(49, 'PT. Solunova Alami Indonesia', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(50, 'MOI Engineering Pvt Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', '2025-03-07'),
(51, 'LONO International Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(52, 'Mates International Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(53, 'Shenzhen Fisrt Union Technology Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(54, 'Universal Cigarette Manufacturing UCM', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(55, 'PT. Beckhoff Automation Indonesia', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(56, 'Libre Science & Technology Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(57, 'CV. Sumber Teknik', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(58, 'PT. Far East Leaf Indonesia', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(59, 'PT. Karya Murni Indocipta', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(60, 'PT. Buana Multi Teknik', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(61, 'Xinhai Technology Group Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(62, 'PT. Yuto Packaging Technology Indonesia', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(63, 'Primary Engineering (Thailand) Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(64, 'Global Leaf Tobacco Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(65, 'Yangzhou Kings Shield Mould Technology Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(66, 'ACTEGA Terra Gmbh', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(67, 'Hangzhou Qufair Network Technology Co Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(68, 'Budhan Engineerings Pvt Ltd', 'Exhibition Booth', '2', '2025-03-07', '6', 'A', NULL),
(69, 'PT. Jala Tritumenggung (Zirro)', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(70, 'PT. Misumi Indonesia', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL),
(71, 'CV. Albisindo Bersama Nusantara', 'Exhibition Booth', '1', '2025-03-07', '6', 'A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `design_header`
--

CREATE TABLE `design_header` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `design_header`
--

INSERT INTO `design_header` (`id`, `nama`, `file_name`, `folder_name`, `urut`, `datecreated`, `createdby`, `status`, `dateupdate`) VALUES
(2, 'glassman asia 2019', 'Image1.jpg', './assets/images/upload/header/', 1, '2025-01-19 02:41:43', '1', 'A', NULL),
(3, 'trencheless 2019', 'Image2.jpg', './assets/images/upload/header/', 2, '2025-01-19 02:42:49', '1', 'A', NULL),
(4, 'coating', 'Image3.jpg', './assets/images/upload/header/', 3, '2025-01-19 02:43:56', '1', 'A', NULL),
(5, 'WTPM Asia', 'Image4.jpg', './assets/images/upload/header/', 4, '2025-01-19 02:44:49', '1', 'A', NULL),
(6, 'chemcleaner', 'Image5.jpg', './assets/images/upload/header/', 5, '2025-01-19 02:46:01', '1', 'A', NULL),
(7, 'CC72', 'Image6.jpg', './assets/images/upload/header/', 6, '2025-01-19 02:46:19', '1', 'A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `file_name`, `folder_name`, `position`, `urut`, `description`, `datecreated`, `createdby`, `status`, `dateupdate`) VALUES
(8, 'Asia Pasific Coatings Show', 'Image1.png', './assets/images/upload/event/', 1, 1, '<p>Across 3 days, the event was attended by 4,986 unique attendees from 78 different countries that included Indonesia, China, Malaysia, Singapore and India.</p>\r\n\r\n<p>A total of 236 exhibitors from 14 countries, including Indonesia, Germany, South Korea, Netherlands, India, UAE and China amongst others, participated.</p>\r\n\r\n<p>Visitors also had complimentary access to the Asia Pacific Coatings Conference on day 1 and the Business Presentations Hub on day 2, where 16 speakers elaborated on the latest trends, products and solutions in the coatings industry.</p>\r\n', '2025-02-19 15:04:15', '6', 'A', NULL),
(9, 'World Tobbaco Asia ', 'd28489176862db5f254e9dead2962702.jpg', './assets/images/upload/event/', 2, 2, '<p>Exhibiting at WT Asia 2025 will provide your company with the perfect platform to showcase your latest products and services to a range of international attendees. Exhibit at WT Asia and you&#39;ll be able to:</p>\r\n\r\n<p>Meet with high-quality business decision makers<br />\r\nLaunch new products and research other advances in the market<br />\r\nRaise awareness of your brand and product portfolio<br />\r\nGain important feedback from existing and potential clients<br />\r\nNetwork with the industry in a social setting without distractions<br />\r\nParticipate in and benefit from the international WT publicity campaign<br />\r\nGain valuable insight on future trends and innovations</p>\r\n\r\n<p>For further information contact:</p>\r\n\r\n<p>Adiwan Djohanli, +62 811-991-595; adiwan.djohanli@keliechem.com</p>\r\n', '2025-02-19 15:29:11', '6', 'A', '2025-02-19 16:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `userupdate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `status`, `tanggal`, `createdby`, `dateupdate`, `userupdate`) VALUES
(1, 'Joy', 'Joy', '25f9e794323b453885f5181f1b624d0b', 'A', '2025-01-14 00:00:00', '1', '2025-02-13 05:02:40', '5'),
(4, 'Rifqi Irawan  ', 'rifqiirawan@gmail.com', '202cb962ac59075b964b07152d234b70', 'A', '2025-01-15 23:47:18', '1', NULL, NULL),
(5, 'administrator', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'A', '2025-01-15 23:47:18', '1', NULL, NULL),
(6, 'Wahyuni', 'Wahyuni', '81dc9bdb52d04dc20036dbd8313ed055', 'A', '2025-02-13 05:02:02', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `nama`, `file_name`, `folder_name`, `url`, `urut`, `datecreated`, `createdby`, `status`, `dateupdate`) VALUES
(2, 'Quartz Business Media', 'Partner1.jpg', './assets/images/upload/partner/', 'https://www.quartzltd.com/', 1, '2025-01-19 04:30:37', '1', 'A', '2025-02-05 00:43:32'),
(3, 'Westrade Group LTd', 'Partner2.jpg', './assets/images/upload/partner/', 'https://www.westrade.co.uk/', 2, '2025-01-19 04:30:59', '1', 'A', NULL),
(4, 'DMG Events', 'Partner3.jpg', './assets/images/upload/partner/', 'https://www.dmgevents.com/', 3, '2025-01-19 04:31:11', '1', 'A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `folder_name` varchar(100) DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `file_name`, `folder_name`, `urut`, `datecreated`, `createdby`, `status`, `dateupdate`) VALUES
(1, 'Chem Cleaner Brochure', 'c4d772a0a0343a043afbd1b113382bb6.pdf', './assets/images/upload/product/', 1, '2025-01-19 04:06:04', '1', 'A', '2025-03-10 23:20:03'),
(2, 'Patented phospate brine brochure upon request', 'Product2.jpg', './assets/images/upload/product/', 2, '2025-01-19 04:06:27', '1', 'A', NULL),
(3, 'Chem Cleaner CC72', 'Product3.png', './assets/images/upload/product/', 3, '2025-01-19 04:08:41', '1', 'A', NULL),
(4, 'W T P M A', 'Product4.jpg', './assets/images/upload/product/', 4, '2025-01-19 04:12:13', '1', 'A', NULL),
(5, 'A P C S', 'Product5.jpg', './assets/images/upload/product/', 5, '2025-01-19 04:14:02', '1', 'A', NULL),
(6, 'glassman', 'Product6.jpg', './assets/images/upload/product/', 6, '2025-01-19 04:15:45', '1', 'A', NULL),
(8, 'Disinfectant ChemCleaner CC41', 'Product7.jpg', './assets/images/upload/product/', 7, '2025-03-07 16:21:52', '6', 'A', NULL),
(9, 'Hand Sanitizer ChemCleaner CC41S refil @ 1 Liter', 'Product8.jpg', './assets/images/upload/product/', 8, '2025-03-07 16:22:55', '6', 'A', NULL),
(10, 'Hand Sanitizer ChemCleaner CC41S Spray 100ml', 'd5c4aaf48d8d13b5fe721c4865e8466a.jpeg', './assets/images/upload/product/', 9, '2025-03-07 16:23:33', '6', 'A', '2025-03-07 16:45:41'),
(11, 'Hand Sanitizer ChemCleaner CC41S Pump 1 Liter', '304949405e33569b22ddc0d79ae14237.jpeg', './assets/images/upload/product/', 10, '2025-03-07 16:24:08', '6', 'A', '2025-03-07 16:46:32'),
(12, 'V&B Care Fogging Disinfectant Xtra Lavender 1 Liter ', 'e675e1ef31c246233b6e81e701dfaff1.jpg', './assets/images/upload/product/', 11, '2025-03-07 16:24:52', '6', 'A', '2025-03-07 16:40:30'),
(13, 'V&B Care Fogging Disinfectant 1 Liter ', '46928a1d00607a26b3c9c829cfc4cab1.jpg', './assets/images/upload/product/', 12, '2025-03-07 16:25:27', '6', 'A', '2025-03-07 16:40:53'),
(14, 'V&B Care Disinfectant Refil 5 Liter', 'a7636d15c11b4a19a451c8d10a472cbe.jpg', './assets/images/upload/product/', 13, '2025-03-07 16:26:00', '6', 'A', '2025-03-07 16:41:15'),
(15, 'V&B Care Disinfectant pump 500 ml', '55693f2d1c7484350d82d6a0fb826814.jpg', './assets/images/upload/product/', 14, '2025-03-07 16:26:40', '6', 'A', '2025-03-07 16:42:16'),
(16, 'Electric Fogging Machine', 'df246b08e0d4e902f9741b5fb6721519.jpg', './assets/images/upload/product/', 15, '2025-03-07 16:27:03', '6', 'A', '2025-03-07 16:44:07'),
(17, 'Nano Disinfectant Sprayer', '9e2f431ca4d4c6ce0432c194a813a943.jpeg', './assets/images/upload/product/', 16, '2025-03-07 16:28:27', '6', 'A', '2025-03-07 16:43:26'),
(18, 'Thermal Mist Fog Sprayer', 'cb6612136850e95234fae603d9d69b8a.jpg', './assets/images/upload/product/', 17, '2025-03-07 16:30:19', '6', 'A', '2025-03-07 16:43:50'),
(23, '32424', 'Product18.pdf', './assets/images/upload/product/', 18, '2025-03-10 23:14:11', '5', 'A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gmaps` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `company_name`, `logo`, `folder`, `nick_name`, `address`, `gmaps`, `phone`, `fax`, `email`, `website`, `status`, `datecreated`, `createdby`, `dateupdate`) VALUES
(1, 'PT. Kelie Chemical Word', 'logo_com1.png', './assets/images/upload/logo/', 'keliechem', 'Jl. Gading Indah Utara II, NH-17/19,\r\nKelapa Gading, Jakarta 14250\r\nINDONESIA.', 'https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl. Gading Indah Utara II Blok Nh 17 No.19 19, RT.2/RW.12, Pegangsaan Dua, Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14250, Indonesia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', '+62 21 453 2003', '+62 21 452 2959', 'contact@keliechem.com', 'www.keliechem.com', 'A', '2025-02-02 03:07:09', '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `nama`, `icon`, `url`, `status`, `datecreated`, `createdby`) VALUES
(1, 'youtube', 'youtube', '-', 'P', '2025-02-02 00:52:06', '5'),
(2, 'instagram', 'instagram', '-', 'A', '2025-02-02 00:52:37', '5'),
(3, 'fb', 'facebook', '-', 'A', '2025-02-02 00:53:55', '5'),
(4, 'twitter', 'twitter', '-', 'P', '2025-02-02 00:54:07', '5'),
(5, 'tiktok', 'tiktok', '-', 'P', '2025-02-02 21:54:37', '5'),
(6, 'Linkedin', 'linkedin', '-', 'A', '2025-02-18 10:38:16', '6');

-- --------------------------------------------------------

--
-- Table structure for table `submit_form`
--

CREATE TABLE `submit_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `submit_form`
--

INSERT INTO `submit_form` (`id`, `name`, `subject`, `email`, `message`, `datecreated`) VALUES
(1, '123', '123', 'azmiradina52@gmail.com', '213', '2025-01-27 23:32:26'),
(2, 'dfsf', 'werewr', 'rifqiirawan@gmail.com', 'erwrewrewr', '2025-01-27 23:34:45'),
(3, 'wqeqe', 'wqeqe', 'kantorrifqi17@gmail.com', 'wqewqe', '2025-01-27 23:35:56'),
(4, 'Rifqi Irawan', 'test', 'admin@gmail.com', '1234', '2025-02-02 21:52:05'),
(5, 'yacuy', 'Test Program', 'abc@gmail.com', 'lalalalalala', '2025-02-07 21:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_ip`
--

CREATE TABLE `visitor_ip` (
  `id` int(11) NOT NULL,
  `ip4` varchar(255) DEFAULT NULL,
  `ip_public` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `vendor` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `visitor_ip`
--

INSERT INTO `visitor_ip` (`id`, `ip4`, `ip_public`, `city`, `country`, `lokasi`, `vendor`, `timezone`, `datecreated`) VALUES
(1, '::1', '103.129.48.195', 'Bekasi', 'ID', '-6.2349,106.9896', 'AS135478 PT. Cyberindo Aditama', 'Asia/Jakarta', '2025-02-02 21:53:23'),
(2, '::1', '103.19.110.220', 'Tangerang', 'ID', '-6.1781,106.6300', 'AS132641 PT Netciti Persada', 'Asia/Jakarta', '2025-02-05 09:09:59'),
(3, '::1', '103.145.244.16', 'Pasarkemis', 'ID', '-6.1703,106.5303', 'AS132641 PT Netciti Persada', 'Asia/Jakarta', '2025-02-05 17:47:49'),
(4, '::1', '103.145.218.218', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS132641 PT Netciti Persada', 'Asia/Jakarta', '2025-02-05 17:57:44'),
(5, '::1', '101.128.125.186', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS135478 PT. Cyberindo Aditama', 'Asia/Jakarta', '2025-02-05 22:40:46'),
(6, '103.30.93.82', '103.30.93.82', 'Denpasar', 'ID', '-8.6500,115.2167', 'AS18103 Neuviz Net', 'Asia/Makassar', '2025-02-12 22:51:32'),
(7, '3.249.241.118', '3.249.241.118', 'Dublin', 'IE', '53.3331,-6.2489', 'AS16509 Amazon.com, Inc.', 'Europe/Dublin', '2025-02-12 23:07:48'),
(8, '182.253.170.58', '118.99.114.166', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS17451 BIZNET NETWORKS', 'Asia/Jakarta', '2025-02-13 07:25:16'),
(9, '180.252.113.95', '180.252.113.95', 'Bekasi', 'ID', '-6.2349,106.9896', 'AS7713 PT Telekomunikasi Indonesia', 'Asia/Jakarta', '2025-02-13 08:45:28'),
(10, '185.159.158.50', '185.159.158.50', 'Reykjavík', 'IS', '64.1355,-21.8954', 'AS56704 Farice ehf', 'Atlantic/Reykjavik', '2025-02-14 02:05:13'),
(11, '3.80.153.68', '3.80.153.68', 'Ashburn', 'US', '39.0437,-77.4875', 'AS14618 Amazon.com, Inc.', 'America/New_York', '2025-02-14 03:44:47'),
(12, '40.80.158.10', '40.80.158.10', 'San Jose', 'US', '37.3394,-121.8950', 'AS8075 Microsoft Corporation', 'America/Los_Angeles', '2025-02-14 07:31:56'),
(13, '182.2.143.210', '182.2.143.210', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23693 PT. Telekomunikasi Selular', 'Asia/Jakarta', '2025-02-14 12:30:27'),
(14, '149.113.237.164', '149.113.237.164', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23700 Linknet-Fastnet ASN', 'Asia/Jakarta', '2025-02-16 11:13:41'),
(15, '3.255.211.120', '3.255.211.120', 'Dublin', 'IE', '53.3331,-6.2489', 'AS16509 Amazon.com, Inc.', 'Europe/Dublin', '2025-02-17 10:34:10'),
(16, '139.194.221.155', '139.194.221.155', 'Bekasi', 'ID', '-6.2349,106.9896', 'AS23700 Linknet-Fastnet ASN', 'Asia/Jakarta', '2025-02-17 15:08:07'),
(17, '180.252.121.243', '180.252.121.243', 'Bekasi', 'ID', '-6.2349,106.9896', 'AS7713 PT Telekomunikasi Indonesia', 'Asia/Jakarta', '2025-02-18 09:57:10'),
(18, '140.213.9.187', '140.213.35.213', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS24203 PT XL Axiata', 'Asia/Jakarta', '2025-02-18 10:54:58'),
(19, '182.2.145.143', '182.2.145.143', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23693 PT. Telekomunikasi Selular', 'Asia/Jakarta', '2025-02-18 10:55:00'),
(20, '139.194.221.155', '139.194.221.155', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23700 Linknet-Fastnet ASN', 'Asia/Jakarta', '2025-02-18 12:22:05'),
(21, '111.94.186.13', '111.94.9.84', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23700 Linknet-Fastnet ASN', 'Asia/Jakarta', '2025-02-19 18:47:28'),
(22, '222.165.221.190', '222.165.221.190', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS24207 PT NettoCyber Indonesia', 'Asia/Jakarta', '2025-02-25 10:35:06'),
(23, '182.2.143.48', '182.2.143.60', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23693 PT. Telekomunikasi Selular', 'Asia/Jakarta', '2025-02-26 13:12:12'),
(24, '103.145.218.218', '182.2.143.60', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS23693 PT. Telekomunikasi Selular', 'Asia/Jakarta', '2025-02-26 13:14:41'),
(25, '103.145.218.218', '103.145.244.16', 'Pasarkemis', 'ID', '-6.1703,106.5303', 'AS132641 PT Netciti Persada', 'Asia/Jakarta', '2025-02-26 13:15:34'),
(26, '103.146.63.126', '103.146.63.126', 'Parung', 'ID', '-6.4214,106.7331', 'AS139457 PT Semut Data Indonesia', 'Asia/Jakarta', '2025-02-27 14:03:24'),
(27, '180.252.120.68', '180.252.120.68', 'Bekasi', 'ID', '-6.2349,106.9896', 'AS7713 PT Telekomunikasi Indonesia', 'Asia/Jakarta', '2025-03-06 08:23:23'),
(28, '180.252.113.250', '180.252.113.250', 'Bekasi', 'ID', '-6.2349,106.9896', 'AS7713 PT Telekomunikasi Indonesia', 'Asia/Jakarta', '2025-03-07 15:27:41'),
(29, '52.50.200.128', '52.50.200.128', 'Dublin', 'IE', '53.3331,-6.2489', 'AS16509 Amazon.com, Inc.', 'Europe/Dublin', '2025-03-07 16:50:22'),
(30, '140.213.5.198', '112.215.238.59', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS24203 PT XL Axiata', 'Asia/Jakarta', '2025-03-07 18:17:09'),
(31, '140.213.5.198', '112.215.65.78', 'Jakarta', 'ID', '-6.2146,106.8451', 'AS24203 PT XL Axiata', 'Asia/Jakarta', '2025-03-07 18:44:11'),
(32, '3.249.120.20', '3.249.120.20', 'Dublin', 'IE', '53.3331,-6.2489', 'AS16509 Amazon.com, Inc.', 'Europe/Dublin', '2025-03-09 10:26:26'),
(33, '52.215.181.46', '52.215.181.46', 'Dublin', 'IE', '53.3331,-6.2489', 'AS16509 Amazon.com, Inc.', 'Europe/Dublin', '2025-03-10 22:37:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_header`
--
ALTER TABLE `design_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_form`
--
ALTER TABLE `submit_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_ip`
--
ALTER TABLE `visitor_ip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `design_header`
--
ALTER TABLE `design_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `submit_form`
--
ALTER TABLE `submit_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitor_ip`
--
ALTER TABLE `visitor_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
