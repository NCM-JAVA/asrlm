-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2022 at 10:38 AM
-- Server version: 5.5.35-MariaDB-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adtuk_users`
--

CREATE TABLE `adtuk_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adtuk_users`
--

INSERT INTO `adtuk_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$Bzl67tEIF8xUsxBVBMde0MnS1CBUf2.', 'admin', 'niravalldonetech@gmail.com', 'https://ukac.uk.com', '2020-08-06 06:00:59', '', 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_details`
--

CREATE TABLE `buyer_details` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `block` varchar(50) DEFAULT NULL,
  `contactno` int(20) DEFAULT NULL,
  `commodity` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `decription` text,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_details`
--

INSERT INTO `buyer_details` (`id`, `name`, `district`, `block`, `contactno`, `commodity`, `email`, `decription`, `last_updated`) VALUES
(1, 'Ashish', 'dhemaji', 'dhemaji', 2147483647, 'aaa', 'sonualldonetech@gmail.com', 'dfhd', '2022-03-21 05:55:09'),
(2, 'sonu', 'nagaon', 'dolongghat', 2147483647, 'test', 'sonualldonetech@gmail.com', 'hii', '2022-03-21 10:54:55'),
(3, 'Nirav panchal', 'dhemaji', 'mstd', 2147483647, 'test', 'sonualldonetech@gmail.com', 'hii', '2022-03-21 11:00:42'),
(4, 'sonu', 'nagaon', 'dolongghat', 2147483647, 'test', 'sonualldonetech@gmail.com', 'df', '2022-03-21 11:03:47'),
(5, 'nirav chauhan', 'hailakandi', 'algapur', 2147483647, 'test', 'nirav@netcreativemind.com', 'test', '2022-03-22 04:50:48'),
(6, 'Nayalook', 'dhemaji', 'dhemaji', 1234567879, 'paddy', 'sonualldonetech@gmail.com', 'ok', '2022-03-22 09:55:09'),
(7, 'Nayalook', 'nagaon', 'dolongghat', 2147483647, 'paddy', 'niravphp1111@gmail.com', 'done', '2022-03-22 10:00:51'),
(8, 'Nayalook', 'nagaon', 'dolongghat', 2147483647, 'paddy', 'sonualldonetech@gmail.com', 'ok', '2022-03-22 10:10:17'),
(9, 'PDP', 'nagaon', '', 2147483647, 'Paddy', 'puberun.dekaphukan@gmail.com', 'Require 15 MT of Joha Paddy', '2022-04-02 06:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `commodities`
--

CREATE TABLE `commodities` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `commodity` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commodities`
--

INSERT INTO `commodities` (`id`, `category`, `subcategory`, `commodity`, `last_updated`) VALUES
(1, 'agriculture', 'rabi season', 'paddy (dhaan)', '2022-02-21 07:48:02'),
(2, 'agriculture', 'rabi season', 'groundnut (badam)', '2022-02-21 07:48:02'),
(3, 'agriculture', 'rabi season', 'sugarcane (kuhiyar)', '2022-02-21 07:48:02'),
(5, 'agriculture', 'rabi season', 'sunflower (beliful)', '2022-02-21 07:48:02'),
(6, 'agriculture', 'rabi season', 'linseed', '2022-02-21 07:48:02'),
(7, 'agriculture', 'rabi season', 'wheat (ghehun)', '2022-02-21 07:48:02'),
(8, 'agriculture', 'rabi season', 'oil seed (xoriyo)', '2022-02-21 07:48:02'),
(9, 'agriculture', 'rabi season', 'mungbean/urdean (mug dail)', '2022-02-21 07:48:02'),
(10, 'agriculture', 'rabi season', 'chickpea (kabuli boot)', '2022-02-21 07:48:02'),
(11, 'agriculture', 'rabi season', 'gram (boot dail)', '2022-02-21 07:48:02'),
(12, 'agriculture', 'rabi season', 'masur (mosoor dail)', '2022-02-21 07:48:02'),
(13, 'agriculture', 'rabi season', 'pulses/lentil (mahor dail)', '2022-02-21 07:48:02'),
(14, 'agriculture', 'rabi season', 'pea (motor)', '2022-02-21 07:48:02'),
(15, 'agriculture', 'kharif season', 'paddy (dhaan)', '2022-02-21 07:48:02'),
(16, 'agriculture', 'kharif season', 'bajra', '2022-02-21 07:48:02'),
(17, 'agriculture', 'kharif season', 'mungbean/ urdbean (mug dail)', '2022-02-21 07:48:02'),
(18, 'agriculture', 'kharif season', 'pulses / lentil', '2022-02-21 07:48:02'),
(19, 'agriculture', 'kharif season', 'sugarcane (kuhiyar)', '2022-02-21 07:48:02'),
(20, 'agriculture', 'kharif season', 'sunflower (beliful)', '2022-02-21 07:48:02'),
(21, 'agriculture', 'kharif season', 'castor (helosi)', '2022-02-21 07:48:02'),
(22, 'agriculture', 'kharif season', 'groundnut (badam)', '2022-02-21 07:48:02'),
(23, 'agriculture', 'kharif season', 'horse gram', '2022-02-21 07:48:02'),
(24, 'agriculture', 'kharif season', 'jute (mora paat)', '2022-02-21 07:48:02'),
(25, 'agriculture', 'zaid season (mar-jun)', 'paddy (dhaan)', '2022-05-18 09:36:37'),
(26, 'agriculture', 'zaid season (mar-jun)', 'bajra', '2022-05-18 09:36:37'),
(27, 'agriculture', 'zaid season (mar-jun)', 'mungbean/ urdbean (mug dail)', '2022-05-18 09:36:37'),
(28, 'agriculture', 'zaid season (mar-jun)', 'pulses / lentil', '2022-05-18 09:36:37'),
(29, 'agriculture', 'zaid season (mar-jun)', 'sugarcane (kuhiyar)', '2022-05-18 09:36:37'),
(30, 'agriculture', 'zaid season (mar-jun)', 'sunflower (beliful)', '2022-05-18 09:36:37'),
(31, 'agriculture', 'zaid season (mar-jun)', 'castor (helosi)', '2022-05-18 09:36:37'),
(32, 'agriculture', 'zaid season (mar-jun)', 'groundnut (badam)', '2022-05-18 09:36:37'),
(33, 'agriculture', 'zaid season (mar-jun)', 'horse gram', '2022-05-18 09:36:37'),
(34, 'agriculture', 'zaid season (mar-jun)', 'jute (mora paat)', '2022-05-18 09:36:37'),
(35, 'agriculture', 'zaid season (mar-jun)', 'paddy (dhaan)', '2022-02-21 07:48:02'),
(36, 'agriculture', 'zaid season (mar-jun)', 'mungbean/ urdbean (mug dail)', '2022-02-21 07:48:02'),
(37, 'agriculture', 'zaid season (mar-jun)', 'groundnut (badam)', '2022-02-21 07:48:02'),
(38, 'agriculture', 'zaid season (mar-jun)', 'sunflower (beliful)', '2022-02-21 07:48:02'),
(39, 'animal husbandry/livestock', 'cattle', 'cow (goru)', '2022-02-21 07:48:02'),
(40, 'animal husbandry/livestock', 'cattle', 'bullock (xaar goru)', '2022-02-21 07:48:02'),
(41, 'animal husbandry/livestock', 'cattle', 'buffalo (moah)', '2022-02-21 07:48:02'),
(42, 'animal husbandry/livestock', 'cattle', 'goat (sagoli)', '2022-02-21 07:48:02'),
(43, 'animal husbandry/livestock', 'cattle', 'sheep (bhera)', '2022-02-21 07:48:02'),
(44, 'animal husbandry/livestock', 'cattle', 'pig (gahori)', '2022-02-21 07:48:02'),
(45, 'animal husbandry/livestock', 'poultry', 'backyarad poultry', '2022-02-21 07:48:02'),
(46, 'animal husbandry/livestock', 'poultry', 'pigeon (paro)', '2022-02-21 07:48:02'),
(47, 'animal husbandry/livestock', 'poultry', 'broiler (broiler)', '2022-02-21 07:48:02'),
(48, 'animal husbandry/livestock', 'poultry', 'layer hen', '2022-02-21 07:48:02'),
(49, 'animal husbandry/livestock', 'poultry', 'duck', '2022-02-21 07:48:02'),
(50, 'horticulture', 'fruits', 'banana', '2022-02-21 07:48:02'),
(51, 'horticulture', 'fruits', 'jackfruit (kathol)', '2022-02-21 07:48:02'),
(52, 'horticulture', 'fruits', 'pineapple (anarokh)', '2022-02-21 07:48:02'),
(53, 'horticulture', 'fruits', 'assam lemon (nemu)', '2022-02-21 07:48:02'),
(54, 'horticulture', 'fruits', 'orange (komola)', '2022-02-21 07:48:02'),
(55, 'horticulture', 'fruits', 'litchi (lisu)', '2022-02-21 07:48:02'),
(56, 'horticulture', 'fruits', 'guava (modhuriaam)', '2022-02-21 07:48:02'),
(57, 'horticulture', 'fruits', 'mango (aam)', '2022-02-21 07:48:02'),
(58, 'horticulture', 'fruits', 'papaya (omita)', '2022-02-21 07:48:02'),
(59, 'horticulture', 'fruits', 'sapota (sopeta)', '2022-02-21 07:48:02'),
(60, 'horticulture', 'fruits', 'carambola (kordoi)', '2022-02-21 07:48:02'),
(61, 'horticulture', 'fruits', 'leteku', '2022-02-21 07:48:02'),
(62, 'horticulture', 'fruits', 'thekera', '2022-02-21 07:48:02'),
(63, 'horticulture', 'fruits', 'paniyal', '2022-02-21 07:48:02'),
(64, 'horticulture', 'fruits', 'rabab tenga', '2022-02-21 07:48:02'),
(65, 'horticulture', 'fruits', 'au tenga', '2022-02-21 07:48:02'),
(66, 'horticulture', 'vegetables', 'ash gourd(kumoora)', '2022-02-21 07:48:02'),
(67, 'horticulture', 'vegetables', 'bitter gourd (tita kerela)', '2022-02-21 07:48:02'),
(68, 'horticulture', 'vegetables', 'bottle gourd (lau)', '2022-02-21 07:48:02'),
(69, 'horticulture', 'vegetables', 'brinjal (begena)', '2022-02-21 07:48:02'),
(70, 'horticulture', 'vegetables', 'broccoli', '2022-02-21 07:48:02'),
(71, 'horticulture', 'vegetables', 'cabbage (bondhakobi)', '2022-02-21 07:48:02'),
(72, 'horticulture', 'vegetables', 'capsicum', '2022-02-21 07:48:02'),
(73, 'horticulture', 'vegetables', 'carrot (gajor)', '2022-02-21 07:48:02'),
(74, 'horticulture', 'vegetables', 'cauliflower (phulkobi)', '2022-02-21 07:48:02'),
(75, 'horticulture', 'vegetables', 'chow-chow (squash)', '2022-02-21 07:48:02'),
(76, 'horticulture', 'vegetables', 'dolichos bean (urohi)', '2022-02-21 07:48:02'),
(77, 'horticulture', 'vegetables', 'cowpea (lesera/dangbodi)', '2022-02-21 07:48:02'),
(78, 'horticulture', 'vegetables', 'knol khol (oulkobi)', '2022-02-21 07:48:02'),
(79, 'horticulture', 'vegetables', 'garlic (nohoru)', '2022-02-21 07:48:02'),
(80, 'horticulture', 'vegetables', 'french bean', '2022-02-21 07:48:02'),
(81, 'horticulture', 'vegetables', 'ladies finger(bhendi)', '2022-02-21 07:48:02'),
(82, 'horticulture', 'vegetables', 'drumstiick (sajina)', '2022-02-21 07:48:02'),
(83, 'horticulture', 'vegetables', 'cucumber (tiyoh)', '2022-02-21 07:48:02'),
(84, 'horticulture', 'vegetables', 'muskmelon(siral)', '2022-02-21 07:48:02'),
(85, 'horticulture', 'vegetables', 'spine gourd (bhat kerela)', '2022-02-21 07:48:02'),
(86, 'horticulture', 'vegetables', 'radish (mula)', '2022-02-21 07:48:02'),
(87, 'horticulture', 'vegetables', 'pea (motor)', '2022-02-21 07:48:02'),
(88, 'horticulture', 'vegetables', 'pointed gourd (potol)', '2022-02-21 07:48:02'),
(89, 'horticulture', 'vegetables', 'lettuce (lai xak)', '2022-02-21 07:48:02'),
(90, 'horticulture', 'vegetables', 'ridge gourd (jika)', '2022-02-21 07:48:02'),
(91, 'horticulture', 'vegetables', 'sponge gourd (bhol)', '2022-02-21 07:48:02'),
(92, 'horticulture', 'vegetables', 'tomato (bilahi)', '2022-02-21 07:48:02'),
(93, 'horticulture', 'vegetables', 'water melon (tormuj)', '2022-02-21 07:48:02'),
(94, 'horticulture', 'vegetables', 'snake gourd (chichinda)', '2022-02-21 07:48:02'),
(95, 'horticulture', 'vegetables', 'spinach beet (paleng xak)', '2022-02-21 07:48:02'),
(96, 'horticulture', 'vegetables', 'pumkin ( ronga lau)', '2022-02-21 07:48:02'),
(97, 'horticulture', 'vegetables', 'cucurbits', '2022-02-21 07:48:02'),
(98, 'horticulture', 'tuber crops', 'patato (aloo)', '2022-02-21 07:48:02'),
(99, 'horticulture', 'tuber crops', 'katha alu', '2022-02-21 07:48:02'),
(100, 'horticulture', 'tuber crops', 'sweet potato (mitha alu)', '2022-02-21 07:48:02'),
(101, 'horticulture', 'tuber crops', 'tapica (kosu)', '2022-02-21 07:48:02'),
(102, 'horticulture', 'tuber crops', 'colacasia(kosu)', '2022-02-21 07:48:02'),
(103, 'horticulture', 'tuber crops', 'yam (ronga alu)', '2022-02-21 07:48:02'),
(104, 'horticulture', 'spices crops', 'coriander (dhonia)', '2022-02-21 07:48:02'),
(105, 'horticulture', 'spices crops', 'ginger (adda)', '2022-02-21 07:48:02'),
(106, 'horticulture', 'spices crops', 'chili (jholokia)', '2022-02-21 07:48:02'),
(107, 'horticulture', 'spices crops', 'turmeric (halodhi)', '2022-02-21 07:48:02'),
(108, 'horticulture', 'spices crops', 'onion (piaz)', '2022-02-21 07:48:02'),
(109, 'horticulture', 'spices crops', 'gerlic (nohoru)', '2022-02-21 07:48:02'),
(110, 'horticulture', 'spices crops', 'black perer (jaluk)', '2022-02-21 07:48:02'),
(111, 'horticulture', 'spices crops', 'cumin & black cimin (jeera)', '2022-02-21 07:48:02'),
(112, 'horticulture', 'spices crops', 'mint (pudina)', '2022-02-21 07:48:02'),
(113, 'horticulture', 'spices crops', 'fenegreek (meethi)', '2022-02-21 07:48:02'),
(114, 'horticulture', 'spices crops', 'bay leaf (tej paat)', '2022-02-21 07:48:02'),
(115, 'horticulture', 'spices crops', 'curry leaf (n0roshingho)', '2022-02-21 07:48:02'),
(116, 'horticulture', 'spices crops', 'vanilla', '2022-02-21 07:48:02'),
(117, 'horticulture', 'spices crops', 'fennel (souf)', '2022-02-21 07:48:02'),
(118, 'horticulture', 'flowers', 'marigold', '2022-02-21 07:48:02'),
(119, 'horticulture', 'flowers', 'zinnia', '2022-02-21 07:48:02'),
(120, 'horticulture', 'flowers', 'salvia', '2022-02-21 07:48:02'),
(121, 'horticulture', 'flowers', 'portulaca', '2022-02-21 07:48:02'),
(122, 'horticulture', 'flowers', 'petunia', '2022-02-21 07:48:02'),
(123, 'horticulture', 'flowers', 'carnation', '2022-02-21 07:48:02'),
(124, 'horticulture', 'flowers', 'teuberoac', '2022-02-21 07:48:02'),
(125, 'horticulture', 'flowers', 'gladioli', '2022-02-21 07:48:02'),
(126, 'horticulture', 'flowers', 'gerbera', '2022-02-21 07:48:02'),
(127, 'horticulture', 'flowers', 'bougainvillea', '2022-02-21 07:48:02'),
(128, 'horticulture', 'flowers', 'mussaenda', '2022-02-21 07:48:02'),
(129, 'horticulture', 'flowers', 'chrysanthemum', '2022-02-21 07:48:02'),
(130, 'horticulture', 'flowers', 'dahlia', '2022-02-21 07:48:02'),
(131, 'horticulture', 'flowers', 'orchids', '2022-02-21 07:48:02'),
(132, 'horticulture', 'flowers', 'antirrhinum', '2022-02-21 07:48:02'),
(133, 'horticulture', 'flowers', 'aster', '2022-02-21 07:48:02'),
(134, 'horticulture', 'flowers', 'balsam', '2022-02-21 07:48:02'),
(135, 'horticulture', 'flowers', 'calendula', '2022-02-21 07:48:02'),
(136, 'horticulture', 'medicinal plant', 'amlakhi', '2022-02-21 07:48:02'),
(137, 'horticulture', 'medicinal plant', 'tulshi', '2022-02-21 07:48:02'),
(138, 'horticulture', 'medicinal plant', 'silikha', '2022-02-21 07:48:02'),
(139, 'horticulture', 'medicinal plant', 'bhumura', '2022-02-21 07:48:02'),
(140, 'horticulture', 'medicinal plant', 'bael nefafu', '2022-02-21 07:48:02'),
(141, 'horticulture', 'medicinal plant', 'brahmi sak', '2022-02-21 07:48:02'),
(142, 'horticulture', 'medicinal plant', 'maha bhringaraj', '2022-02-21 07:48:02'),
(143, 'horticulture', 'medicinal plant', 'modhusolen', '2022-02-21 07:48:02'),
(144, 'horticulture', 'medicinal plant', 'sarpagandha', '2022-02-21 07:48:02'),
(145, 'horticulture', 'medicinal plant', 'kalmegh', '2022-02-21 07:48:02'),
(146, 'horticulture', 'medicinal plant', 'neem', '2022-02-21 07:48:02'),
(147, 'horticulture', 'medicinal plant', 'safed musil', '2022-02-21 07:48:02'),
(148, 'horticulture', 'aromatic plants', 'citronella', '2022-02-21 07:48:02'),
(149, 'horticulture', 'aromatic plants', 'patchouli', '2022-02-21 07:48:02'),
(150, 'horticulture', 'aromatic plants', 'lemon grass', '2022-02-21 07:48:02'),
(151, 'horticulture', 'aromatic plants', 'vetiver', '2022-02-21 07:48:02'),
(152, 'horticulture', 'nut crops', 'areca nut (tamul)', '2022-02-21 07:48:02'),
(153, 'horticulture', 'nut crops', 'coco nut (narikol)', '2022-02-21 07:48:02'),
(154, 'horticulture', 'nut crops', 'cashew nut (kaju)', '2022-02-21 07:48:02'),
(155, 'horticulture', 'plantation crops', 'betel (pan)', '2022-02-21 07:48:02'),
(156, 'horticulture', 'plantation crops', 'coffee', '2022-02-21 07:48:02'),
(157, 'horticulture', 'plantation crops', 'agar', '2022-02-21 07:48:02'),
(158, 'horticulture', 'plantation crops', 'tea (saah)', '2022-02-21 07:48:02'),
(159, 'horticulture', 'plantation crops', 'rubber', '2022-02-21 07:48:02'),
(160, 'horticulture', 'bamboo plants', 'bamboo plants', '2022-02-21 07:48:02'),
(161, 'sericulture', 'types', 'eri', '2022-02-21 07:48:02'),
(162, 'sericulture', 'types', 'muga', '2022-02-21 07:48:02'),
(163, 'sericulture', 'types', 'tosser', '2022-02-21 07:48:02'),
(164, 'sericulture', 'types', 'paat', '2022-02-21 07:48:02'),
(165, 'fishery', 'species', 'catfish (magur)', '2022-02-21 07:48:02'),
(166, 'fishery', 'species', 'eel (kusiya)', '2022-02-21 07:48:02'),
(167, 'fishery', 'species', 'catla (bahu)', '2022-02-21 07:48:02'),
(168, 'fishery', 'species', 'hilsa (elisha)', '2022-02-21 07:48:02'),
(169, 'fishery', 'species', 'cosuatis barb (puthi)', '2022-02-21 07:48:02'),
(170, 'fishery', 'species', 'feather back (kandulee)', '2022-02-21 07:48:02'),
(171, 'fishery', 'species', 'grass carp', '2022-02-21 07:48:02'),
(172, 'fishery', 'species', 'rohu (rau)', '2022-02-21 07:48:02'),
(173, 'fishery', 'species', 'silver carp', '2022-02-21 07:48:02'),
(174, 'fishery', 'species', 'assamese kingfish (kadal)', '2022-02-21 07:48:02'),
(175, 'fishery', 'species', 'humped feather back (seetal)', '2022-02-21 07:48:02'),
(176, 'fishery', 'species', 'indian longfin eel (nadarbami)', '2022-02-21 07:48:02'),
(177, 'fishery', 'species', 'mrigal (mirika)', '2022-02-21 07:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `grampanchayat` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `district`, `block`, `grampanchayat`, `village`, `last_updated`) VALUES
(1, 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', '2022-02-20 04:26:53'),
(2, 'dhemaji', 'mstd', 'simen chapori', 'simen chapori', '2022-02-20 04:26:53'),
(3, 'dhemaji', 'dhemaji', 'naruathan', 'rotuwa nepali khuti', '2022-02-20 04:26:53'),
(4, 'hailakandi', 'lala', 'nichintapur', 'nichintapur pt-i', '2022-02-20 04:26:53'),
(5, 'hailakandi', 'algapur', 'panchgram', 'uttarkanchanpur pt-1', '2022-02-20 04:26:53'),
(6, 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', '2022-02-20 04:26:53'),
(7, 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', '2022-02-20 04:26:54'),
(8, 'tinsukia', 'sadiya', 'buraburi', 'ratanpur gaon', '2022-02-20 04:26:54'),
(9, 'tinsukia', 'guijan', 'guijan', 'guijan lg road', '2022-02-20 04:26:54'),
(10, 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', '2022-04-02 08:16:15'),
(11, 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', '2022-04-02 08:16:15'),
(12, 'hailakandi', 'katlicherra', 'dholai-molai', 'dholai-molai', '2022-04-02 08:16:15'),
(13, 'tinsukia', 'guijan', 'borguri', 'borguri', '2022-04-02 08:16:15'),
(14, 'dhemaji', 'mstd', 'jonai', 'joimaguri', '2022-04-02 08:16:15'),
(15, 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', '2022-04-02 08:28:27'),
(16, 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', '2022-04-02 11:40:54'),
(17, 'tinsukia', 'itakhuli', 'laipuli', 'morankari', '2022-04-02 17:57:08'),
(18, 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', '2022-04-02 17:57:08'),
(19, 'tinsukia', 'itakhuli', 'laipuli', 'dohutia gaon', '2022-04-02 17:57:08'),
(20, 'dhemaji', 'mstd', 'chandrapur', 'jonai', '2022-04-02 17:58:19'),
(21, 'tinsukia', 'itakhuli', 'kachamari', 'hukani gaon', '2022-04-08 05:59:05'),
(22, 'tinsukia', 'guijan', 'gottong', 'natun gaon', '2022-04-08 05:59:05'),
(23, 'tinsukia', 'guijan', 'gottong', 'natun rangagara', '2022-04-08 05:59:05'),
(24, 'tinsukia', 'guijan', 'guijan', 'guijan gaon', '2022-04-08 05:59:05'),
(25, 'tinsukia', 'guijan', 'guijan', 'guij an santipara', '2022-04-08 05:59:05'),
(26, 'tinsukia', 'guijan', 'guijan', 'guijan bazar', '2022-04-08 05:59:05'),
(27, 'tinsukia', 'kakopathar', 'bijulibon', 'mailapung gaon', '2022-04-08 05:59:05'),
(28, 'tinsukia', 'kakopathar', 'bijulibon', 'duwarmara sigpho gaon', '2022-04-08 05:59:05'),
(29, 'tinsukia', 'kakopathar', 'bijulibon', 'natun maithong', '2022-04-08 05:59:05'),
(30, 'tinsukia', 'kakopathar', 'kailashpur', 'nabajyoti', '2022-04-08 05:59:05'),
(31, 'tinsukia', 'sadiya', 'bura-buri', 'ratanpur gaon', '2022-04-08 05:59:05'),
(32, 'nagaon', 'barhampur', 'bamuni', 'bamuni-mikirgaon', '2022-04-13 05:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `member_panel`
--

CREATE TABLE `member_panel` (
  `mid` int(11) NOT NULL,
  `pgid` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `SHGname` varchar(55) DEFAULT NULL,
  `SHGcode` varchar(55) DEFAULT NULL,
  `district` varchar(55) DEFAULT NULL,
  `block` varchar(55) DEFAULT NULL,
  `grampanchayat` varchar(55) DEFAULT NULL,
  `village` text,
  `middlename` varchar(55) DEFAULT NULL,
  `education` varchar(155) DEFAULT NULL,
  `contactno` varchar(50) DEFAULT NULL,
  `doctype` varchar(255) DEFAULT NULL,
  `docidno` varchar(255) DEFAULT NULL,
  `aadharno` varchar(25) DEFAULT NULL,
  `membershiptype` varchar(50) DEFAULT NULL,
  `landarea` varchar(50) DEFAULT NULL,
  `irrigatedland` varchar(50) DEFAULT NULL,
  `nonirrigatedland` varchar(50) DEFAULT NULL,
  `totalwaterbody` varchar(50) DEFAULT NULL,
  `grazingland` varchar(50) DEFAULT NULL,
  `agriculture1` varchar(255) DEFAULT NULL,
  `agriculture2` varchar(255) DEFAULT NULL,
  `agriculture3` varchar(255) DEFAULT NULL,
  `agriculture4` varchar(255) DEFAULT NULL,
  `agriculture5` varchar(255) DEFAULT NULL,
  `horticulture1` varchar(255) DEFAULT NULL,
  `horticulture2` varchar(255) DEFAULT NULL,
  `horticulture3` varchar(255) DEFAULT NULL,
  `horticulture4` varchar(255) DEFAULT NULL,
  `horticulture5` varchar(255) DEFAULT NULL,
  `livestock1` varchar(255) DEFAULT NULL,
  `livestock2` varchar(255) DEFAULT NULL,
  `livestock3` varchar(255) DEFAULT NULL,
  `livestock4` varchar(255) DEFAULT NULL,
  `livestock5` varchar(255) DEFAULT NULL,
  `fishery` text,
  `sericulture` text,
  `others` varchar(255) DEFAULT NULL,
  `commodity` varchar(255) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `saleamount` varchar(50) DEFAULT NULL,
  `paymentrecieved` varchar(50) DEFAULT NULL,
  `paymentdue` varchar(50) DEFAULT NULL,
  `verifierapprover` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `isrejected` tinyint(3) NOT NULL DEFAULT '0',
  `isverified` tinyint(3) NOT NULL DEFAULT '0',
  `isapproved` tinyint(3) DEFAULT '0',
  `verifydate` varchar(155) DEFAULT NULL,
  `verifyby` tinyint(3) DEFAULT NULL,
  `rejecteddate` varchar(155) DEFAULT NULL,
  `approvedate` varchar(155) DEFAULT NULL,
  `approvedby` tinyint(3) DEFAULT NULL,
  `remarks` text,
  `rejectedby` int(11) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_panel`
--

INSERT INTO `member_panel` (`mid`, `pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `doctype`, `docidno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`, `verifierapprover`, `isrejected`, `isverified`, `isapproved`, `verifydate`, `verifyby`, `rejecteddate`, `approvedate`, `approvedby`, `remarks`, `rejectedby`, `last_updated`) VALUES
(1, 1, 'maumashri narzary', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'haren narzary', '5th stnd.', '9678801119', NULL, NULL, '702000000000', 'general member', '5', '5', '0', '0', '0', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'bakcyard poultry', 'duck', 'cow', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '3', 1, 0, 0, NULL, NULL, '15-05-2022 07:54:58 PM', NULL, NULL, 'This is just for test~~15-05-2022 07:54:58 PM', 74, '2022-05-15 14:24:58'),
(2, 1, 'jwnglani boro', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'mahar sing boro', '12th stnd.', '9678798866', NULL, NULL, '304000000000', 'general member', '8', '8', '0', '0', '0', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'bakcyard poultry', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '', '3', 1, 1, 0, '15-05-2022 08:01:23 PM', 74, '15-05-2022 08:06:24 PM', NULL, NULL, 'Reject for test~~15-05-2022 08:06:24 PM', 74, '2022-05-15 14:36:24'),
(3, 1, 'dipali boro', 'hithorkhi shg', '170725', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'bhadra ram boro', '7th stnd.', '8135879714', NULL, NULL, '327000000000', 'general member', '2', '3', '4', '5', '6', '', '', '', '', '', 'arecanut', 'coconut', '', '', '', 'bakcyard poultry', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-29 13:38:18'),
(4, 1, 'phataki boro', 'udangsri shg', '211018', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'paturam boro', 'nil', '8761970647', NULL, NULL, '236000000000', 'general member', '10', '10', '0', '0', '0', 'paddy', '', '', '', '', 'arecanut', 'coconut', 'mango', '', '', 'bakcyard poultry', 'pig', 'duck', 'cow', '', 'local breed carps', '', '', '', '', '', '', '', '', '2', 0, 1, 1, '15-05-2022 08:03:41 PM', 74, NULL, '15-05-2022 08:07:53 PM', 74, NULL, NULL, '2022-05-15 14:37:53'),
(5, 1, 'makani boro', 'udangsri shg', '211018', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'anil boro', '9th stnd.', '8822139131', NULL, NULL, '399000000000', 'general member', '0', '0', '0', '0', '0', '', '', '', '', '', 'arecanut', '', '', '', '', 'bakcyard poultry', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0, 1, 0, '05-07-2022 11:21:51 AM', 0, NULL, NULL, NULL, NULL, NULL, '2022-07-05 05:51:51'),
(6, 1, 'radha boro', 'jwmwi shg', '170992', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'hari chandra boro', '10th stnd.', '6900831948', NULL, NULL, '505000000000', 'general member', '6', '6', '0', '0', '0', 'paddy', '', '', '', '', 'arecanut', 'coconut', 'black pepper', '', '', 'bakcyard poultry', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(7, 1, 'sonali boro', 'jwmwi shg', '170992', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'parameswar boro', 'nil', '9864103529', NULL, NULL, '457000000000', 'general member', '0', '0', '0', '0', '0', '', '', '', '', '', 'arecanut', '', '', '', '', 'bakcyard poultry', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(8, 1, 'bijuli boro', 'jwmwi shg', '170992', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'khagen boro', '12th stand.', '9864689402', NULL, NULL, '800000000000', 'general member', '5', '5', '0', '0', '0', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'bakcyard poultry', 'goat', 'pig', 'cow', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(9, 1, 'satyabati basumatary', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'nenswn boro', '9th stnd.', '6000859516', NULL, NULL, '232000000000', 'general member', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(10, 1, 'abani narzary', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'rabiram narzary', 'nil', '6900377655', NULL, NULL, '252000000000', 'general member', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(11, 1, 'ramila daimari', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'thaneswar daimari', '8th stnd.', '8133922580', NULL, NULL, '426000000000', 'general member', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(12, 1, 'sujuki boro', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'sunil boro', '8th stnd.', '8822468049', NULL, NULL, '982000000000', 'general member', '2', '2', '', '', '', '', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(13, 1, 'bibari boro', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'nijwm boro', '10th stnd.', '6900842768', NULL, NULL, '395000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'pig', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(14, 1, 'nijamati boro', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'anil boro', '10th stnd.', '9864748797', NULL, NULL, '481000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:50'),
(15, 1, 'hangma boro', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'dipak boro', '9th stand.', '6000859516', NULL, NULL, '987000000000', 'general member', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:51'),
(16, 1, 'pramila basumatary', 'thentamali shg', '124800', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'naren narzary', 'post graduate', '9101167347', NULL, NULL, '950000000000', 'general member', '6', '6', '', '', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'pig', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:51'),
(17, 1, 'jonali boro', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'narayan boro', 'nil', '6901062015', NULL, NULL, '459000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'coconut', 'mango', '', '', 'backyard poultry', 'pig', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:51'),
(18, 1, 'khaubli boro', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'khagen boro', 'nil', '8779061623', NULL, NULL, '999000000000', 'general member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'pig', 'cow', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:51'),
(19, 1, 'jonaki boro', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'khagen boro', 'nil', '8472880024', NULL, NULL, '380000000000', 'general member', '5', '5', '', '', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'pig', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:51'),
(20, 1, 'sapna boro', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'ramesh boro', '7th stnd.', '9707245368', NULL, NULL, '461000000000', 'general member', '15', '15', '', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', 'coconut', '', '', '', 'backyard poultry', 'pig', 'duck', 'goat', 'cow', 'local  breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 06:21:52'),
(21, 1, 'mani boro', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'bhaben boro', 'nil', '7086947979', NULL, NULL, '923000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'coconut', '', '', '', 'backyard poultry', 'pig', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:51'),
(22, 1, 'preety maya brahma', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'ranjit boro', '12th stnd.', '8471973895', NULL, NULL, '568000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(23, 1, 'fwisali basumatary', 'swdwmsri jivika shg', '178517', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'nagen daimari', 'ba', '8638788093', NULL, NULL, '463000000000', 'general member', '8', '8', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'coconut', 'orange', '', '', 'backyard poultry', 'pig', 'pig', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(24, 1, 'mwinathi daimari', 'aronai women shg', '124771', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'pabitra boro', 'ba', '9365780313', NULL, NULL, '650000000000', 'general member', '4', '4', '', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(25, 1, 'swmsri boro', 'aronai women shg', '124771', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'dwidensa boro', 'ba', '9678311141', NULL, NULL, '800000000000', 'general member', '4', '4', '', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(26, 1, 'mamoni basumatry', 'bihamjw shg', '143935', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'har kanta kachari', '10th stnd', '8011144689', NULL, NULL, '890000000000', 'general member', '5', '5', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'orange', 'banana', '', '', 'backyard poultry', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(27, 1, 'dipali daimari', 'bihamjw shg', '143935', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'digreswar daimari', '5th stnd.', '6901453065', NULL, NULL, '980000000000', 'general member', '1', '1', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'pine apple', '', '', '', 'backyard poultry', 'pig', 'duck', 'goat', 'cow', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(28, 1, 'sanbwsory boro', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'radha kanta boro', '10th stnd.', '8812816820', NULL, NULL, '913000000000', 'general member', '5', '5', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'black pepper', 'orange', 'banana', 'coconut', 'backyard poultry', 'hen', 'duck', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(29, 1, 'kutabi boro', 'anjali shg', '124798', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'mahendra boro', '5th stnd.', '7099224978', NULL, NULL, '533000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'cow', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(30, 1, 'kutabi boro', 'rodali shg', '143931', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'dhanu boro', '', '7086968084', NULL, NULL, '213000000000', 'general member', '2', '2', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'cow', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(31, 1, 'junu rabha', 'anjali shg', '124798', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'banti sarmah', '10th stnd.', '7896341521', NULL, NULL, '529000000000', 'general member', '10', '10', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', 'tea estate', '', '', 'pig', 'backyard poultry', 'cow', 'duck', 'goat', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(32, 1, 'mohima daimary', 'somaina shg', '248692', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'babu daimary', '9th stnd.', '6001135381', NULL, NULL, '463000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:52'),
(33, 1, 'ahini boro', 'somaina shg', '248692', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'swmdwn boro', '10th stnd.', '6900377651', NULL, NULL, '553000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'coconut', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(34, 1, 'basanti boro', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'lt. lohit boro', '', '6901452845', NULL, NULL, '774000000000', 'general member', '3', '3', '', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', 'banana', 'coconut', 'black pepper', '', 'duck', 'backyard poultry', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(35, 1, 'manju boro', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'basanta boro', '', '9707523319', NULL, NULL, '237000000000', 'general member', '2', '2', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', 'coconut', '', '', 'pig', 'backyard poultry', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(36, 1, 'manju boro', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'gabkarad boro', '', '8471959573', NULL, NULL, '769000000000', 'general member', '7', '7', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'pig', 'cow', 'goat', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(37, 1, 'thunlai daimari', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'ratneswar daimari', '7th stnd.', '9678161455', NULL, NULL, '240000000000', 'general member', '2', '2', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'backyard poultry', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(38, 1, 'sangita daimari', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'madhab daimari', '', '8135892497', NULL, NULL, '997000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'backyard poultry', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(39, 1, 'haina daimari', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'simangsha daimari', '12th stnd.', '7636898839', NULL, NULL, '585000000000', 'general member', '5', '5', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'backyard poultry', 'cow', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(40, 1, 'sabita baro', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'lagan chandra boro', '10th stand.', '8474036832', NULL, NULL, '286000000000', 'general member', '4', '4', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'backyard poultry', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(41, 1, 'malati narzary', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'chandan narzary', '10th stand.', '8472835102', NULL, NULL, '341000000000', 'general member', '6', '6', '', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', 'coconut', '', '', '', 'backyard poultry', 'goat', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(42, 1, 'swmsri boro', 'jwngthi shg', '124801', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'vikrama boro', '12th stand.', '8761063600', NULL, NULL, '266000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(43, 1, 'anjima daimari', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'khargeswar daimari', '10th stand.', '9957615489', NULL, NULL, '665000000000', 'general member', '10', '9', '', '1', '', 'paddy', '', '', '', '', 'arecanut', 'banana', 'orange', '', '', 'backyard poultry', 'goat', 'hen', 'cow', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(44, 1, 'kalpana boro', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'lt. amulya baglary', '7th stnd.', '9101499795', NULL, NULL, '900000000000', 'general member', '10', '10', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', 'orange', '', '', 'backyard poultry', 'duck', 'hen', 'cow', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(45, 1, 'dipali boro', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'kusha ram boro', 'ba pass', '8011417199', NULL, NULL, '409000000000', 'general member', '3', '3', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', 'orange', '', '', 'backyard poultry', 'duck', 'hen', 'cow', 'goat', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:53'),
(46, 1, 'bina swargiari', 'bwrsri shg', '124739', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'kamal kanta boro', '12th stnd.', '88227848813', NULL, NULL, '982000000000', 'general member', '15', '15', '', '1', '', 'paddy', '', '', '', '', 'arecanut', 'black pepper', 'orange', 'banana', '', 'backyard poultry', 'duck', 'hen', '', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(47, 1, 'rahima basumatary', 'bidangsri shg', '161426', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'suni ram basumatary', '5th stnd.', '6001397775', NULL, NULL, '768000000000', 'general member', '4', '3', '', '1', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', '', '', '', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(48, 1, 'pokhila daimari', 'bwrsri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'jadab daimari', '5th stnd.', '9864368958', NULL, NULL, '757000000000', 'general member', '4', '3', '', '1', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'backyard poultry', 'hen', '', '', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(49, 1, 'nilima basumatary', 'midangsri shg', '161459', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'paban basumatary', '5th stnd.', '7086751057', NULL, NULL, '943000000000', 'executive member', '25', '23', '', '2', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', '', '', '', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(50, 1, 'beauti basumatary', 'jewary shg', '164343', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'thauraumadao', '12th pass', '6003654932', NULL, NULL, '634000000000', 'executive member', '10', '10', '', '1', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', '', '', '', '', 'local breed curps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(51, 1, 'labanya baro', 'beursri shg', '124799', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'ranjialu daimari', '10th pass', '9678810729', NULL, NULL, '918000000000', 'general member', '10', '10', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', '', '', '', 'backyard poultry', '', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(52, 1, 'haimoni boro', 'anjali shg', '124798', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', 'dayaram boro', '5th stnd.', '8761838907', NULL, NULL, '485000000000', 'general member', '0.5', '0.5', '', '', '', 'paddy', '', '', '', '', 'arecanut', 'banana', 'orange', '', '', 'backyard poultry', 'hen', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(53, 8, 'durgeswari rabha', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'uttam rabha', '5th stand.', '', NULL, NULL, '', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(54, 8, 'jesmin daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'j. marak', '', '', NULL, NULL, '507000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(55, 8, 'swmshri daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'agusta daimari', '7th stand.', '9957946833', NULL, NULL, '974000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(56, 8, 'jaymati swargiary', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'mridul swargiary', '5th stand.', '', NULL, NULL, '653000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:54'),
(57, 8, 'rupasri baglari', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'tapeswar baglari', '', '8724952828', NULL, NULL, '961000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(58, 8, 'jumila swargiary', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'jayanta swargiary', '', '', NULL, NULL, '383000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(59, 8, 'mandira baglary', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'ransai baglary', '', '8011462515', NULL, NULL, '596000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(60, 8, 'rohila daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'baneswar daimari', '', '8011462515', NULL, NULL, '596000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(61, 8, 'pranita daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'kanchan daimari', '5th stand.', '804466438', NULL, NULL, '254000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(62, 8, 'mwina daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'basrhwngkha daimari', '5th stand.', '8479834801', NULL, NULL, '334000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(63, 8, 'manjula daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'ramesh daimari', '8th stand.', '', NULL, NULL, '886000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(64, 8, 'sabitri daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'balram daimari', '', '8472890926', NULL, NULL, '983000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(65, 8, 'aikon swargiary', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'khagen swargiary', '', '9954936631', NULL, NULL, '473000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(66, 8, 'sidri baglary', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'belan baglary', '', '7086595304', NULL, NULL, '895000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(67, 8, 'khwli daimari', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'binay daimari', '', '', NULL, NULL, '872000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(68, 8, 'ganeswari swargiary', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'dambaru awargiary', '', '8753936351', NULL, NULL, '600000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(69, 8, 'ratni swargiary', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'subut awargiary', '5th stand.', '7086448440', NULL, NULL, '730000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(70, 8, 'anima daimari', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'swamkha daimari', '5th stand.', '8133960260', NULL, NULL, '258000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(71, 8, 'gaodang basumatary', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'ratul daimari', '', '6000254130', NULL, NULL, '651000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:55'),
(72, 8, 'asha swargiary', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'billiam swargiary', '10th stand.', '7896826232', NULL, NULL, '556000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(73, 8, 'ansuli swargiary', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'khagen swargiary', '10th stand.', '7896510460', NULL, NULL, '935000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(74, 8, 'jelpa daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'gabinda daimari', '10th stand.', '6000853186', NULL, NULL, '611000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(75, 8, 'mainawsri daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'durga daimari', '', '', NULL, NULL, '738000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(76, 8, 'kini daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'nijwm daimari', '12 th stand.', '9101734280', NULL, NULL, '582000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(77, 8, 'bina daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'niran daimari', '', '7086944134', NULL, NULL, '424000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(78, 8, 'baneswari daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'bulbul daimari', '5th stand.', '', NULL, NULL, '32110838383', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(79, 8, 'manisha swargiary', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'rupon swargiary', '5th stand.', '9365587377', NULL, NULL, '805000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(80, 8, 'bebani daimari', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'simon daimari', '5th stand.', '', NULL, NULL, '245000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(81, 8, 'bimali daimari', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'dharmendra daimari', '5th stand.', '', NULL, NULL, '594000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(82, 8, 'thaneswari swargiary', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'bidhan swargiary', '5th stand.', '', NULL, NULL, '858000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(83, 8, 'damayanti swargiary', 'alaishri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'tankeswar swargiary', '5th stand.', '', NULL, NULL, '645000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(84, 8, 'joyshri swargiary', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'pradip swargiary', '5th stand.', '', NULL, NULL, '985000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(85, 8, 'joshna swargiary', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'naba swargiary', '', '6001012689', NULL, NULL, '554000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(86, 8, 'dikhonti swargiari', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'suben swargiary', '', '', NULL, NULL, '407000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(87, 8, 'makoni daimari', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'dipen daimari', '', '7896600538', NULL, NULL, '820000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(88, 8, 'bina swargiary', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'ratul swargiary', '5th stnd.', '', NULL, NULL, '432000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(89, 8, 'dipali baglary', 'lothasri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'babu baglary', '', '', NULL, NULL, '794000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(90, 8, 'hanna daimari', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'rahul daimari', '5th stand.', '8474831495', NULL, NULL, '937000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '10000', '10000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:56'),
(91, 8, 'khwoli swargiary', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'mohan swargiary', '', '', NULL, NULL, '281000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(92, 8, 'mirita baglary', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'pritush baglary', '', '901643458', NULL, NULL, '482000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(93, 8, 'jumita baglary', 'alosi shg', '8417', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'mahendra baglary', '', '', NULL, NULL, '855000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(94, 8, 'renu baglary', 'alaisri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'biren baglary', '7th stnd.', '', NULL, NULL, '485000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(95, 8, 'fwrmaisri baglary', 'alaisri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'dhupguri', 'nijam baglary', '0', '6003994213', NULL, NULL, '649000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(96, 8, 'binita basumatary', 'lothosri shg', '8904', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'manoj basumatary', '0', '6091659617', NULL, NULL, '654000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(97, 8, 'promita basumatary', 'alaisri shg', '8407', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'jonash basumatary', '0', '8472895837', NULL, NULL, '765000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(98, 8, 'suruti daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'gabinda daimari', '0', '', NULL, NULL, '945000000000', 'general member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(99, 8, 'sabitri swargiary', 'lapashri shg', '8404', 'udalguri', 'udalguri', 'udalguri', 'dhupguri gaon', 'baneswar swargiary', '0', '9954272186', NULL, NULL, '422000000000', 'executive member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '2000', '2000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(100, 8, 'ronjoli daimari', 'jwngthi shg', '8406', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', 'nabin daimari', '0', '9854565189', NULL, NULL, '664000000000', 'executive member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(101, 8, 'mirina daimari', 'ten sister shg', '8405', 'udalguri', 'udalguri', 'udalguri', 'dhupguri gaon', 'ismail daimari', '10th stnd.', '8922831628', NULL, NULL, '692000000000', 'executive member', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(102, 8, 'eliza daimari', 'alashi shg', '8917', 'udalguri', 'udalguri', 'udalguri', 'dhupguri gaon', 'jeson daimari', '12th stnd.', '6002701268', NULL, NULL, '409000000000', 'executive member', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '10000', '10000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(103, 2, 'pratima ramchiary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'khusi ramchiary', 'ma', '8473974443', NULL, NULL, '813162369260', 'president', '6', 'yes', '', 'yes', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'goat', 'pig', '', '', '', '', '', '', 'potato', '30', '20/-', '600', '600', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(104, 2, 'ranjita boruah', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'mahidhar boruah', 'hslc', '7086750719', NULL, NULL, '334128020116', 'secreatry', '3', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'no', '', '', '', '', 'duck', 'cow', 'pig', '', '', '', '', '', '', 'potato', '39', '20/-', '780', '780', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:57'),
(105, 2, 'lipika phukan', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'lakheswar phukan', 'hslc', '9957399247', NULL, NULL, '980335383472', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'cow', 'pig', '', '', '', '', '', '', 'potato', '30', '20/-', '600', '600', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(106, 2, 'sunmai gogoi', 'ajonta shg', '11370', 'dhemaji', 'mstd', '', 'handique', 'haldhar gogoi', 'hs', '', NULL, NULL, '', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'cow', '', '', '', '', '', '', '', 'potato', '36', '20/-', '720', '720', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(107, 2, 'gitanjali dehingia', 'sarujmukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'durna dhingia', 'hslc', '8812090100', NULL, NULL, '287941082256', 'member', '7', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'goat', '', '', '', '', '', '', 'potato', '50', '20/-', '1000', '1000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(108, 2, 'dipa boruah', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'babul boruah', 'hs', '6900134566', NULL, NULL, '942843767819', 'member', '3', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', '', '', '', '', '', '', '', 'potato', '42', '20/-', '840', '840', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(109, 2, 'amiya pator', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'padeswar pator', 'hs', '8472058326', NULL, NULL, '994943476441', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'no', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '40', '20/-', '800', '800', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(110, 2, 'sunada boruah', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'babu borush', 'hslc', '8011711290', NULL, NULL, '294599335371', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'no', 'no', '', '', 'betelnut', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', 'potato', '35', '20/-', '700', '700', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(111, 2, 'bijuli rabha ramchiary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'jatin ramchiary', 'hs', '8011223347', NULL, NULL, '398565559129', 'member', '6', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', '', '', '', '', '', '', '', '', 'potato', '52', '20/-', '1040', '1040', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(112, 2, 'junali swargiary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'sanjay swargiary', 'hs', '8473046115', NULL, NULL, '850541282925', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'goat', '', '', '', '', '', '', 'potato', '30', '20/-', '600', '600', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(113, 2, 'dipali ramchiary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'lohit ramchiary', 'hs', '', NULL, NULL, '811213015513', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(114, 2, 'anita ramchiary', 'ajwli shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'gopal ramchiary', 'hslc', '8442669736', NULL, NULL, '', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'cow', 'pig', 'goat', '', '', '', '', '', '', 'potato', '50', '20/-', '1000', '1000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(115, 2, 'gasomi boro', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'lobo boro', 'v', '', NULL, NULL, '313947097498', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'cow', 'pig', 'goat', '', '', '', '', '', '', 'potato', '53', '20/-', '1060', '1060', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(116, 2, 'bimola ramchiary', 'ajwli shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'nijwm ranchiary', 'x', '', NULL, NULL, '562330568092', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'cow', 'pig', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(117, 2, 'bimola basumatary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'gobin basumatary', 'viii', '', NULL, NULL, '', 'member', '3', 'yes', '', 'no', 'no', 'no', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'cow', 'pig', 'goat', '', '', '', '', '', '', 'potato', '34', '20/-', '680', '680', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(118, 2, 'sajani basumatary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'gojen basumatary', 'v', '8011905481', NULL, NULL, '761915950688', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'lemon', '', '', '', '', 'cow', 'pig', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(119, 2, 'bijuli boro', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'krishna boro', 'viii', '', NULL, NULL, '339628676223', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'cow', 'pig', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58');
INSERT INTO `member_panel` (`mid`, `pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `doctype`, `docidno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`, `verifierapprover`, `isrejected`, `isverified`, `isapproved`, `verifydate`, `verifyby`, `rejecteddate`, `approvedate`, `approvedby`, `remarks`, `rejectedby`, `last_updated`) VALUES
(120, 2, 'purnima kherkatary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'motilal kherkatery', 'hs', '6002767302', NULL, NULL, '254026447300', 'member', '1', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(121, 2, 'ansuli ramchiary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'daimalu ramchiary', 'ba', '', NULL, NULL, '804500639549', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', '', 'chiken', '', '', '', '', '', '', 'potato', '47', '20/-', '940', '940', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:58'),
(122, 2, 'keri narzary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'sarot narzary', 'viii', '9678364557', NULL, NULL, '985700169195', 'member', '3', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '48', '20/-', '960', '960', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(123, 2, 'monjula swargiary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'jayanta swargiary', 'viii', '9678497374', NULL, NULL, '852872142744', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(124, 2, 'rina konwar', 'panitula mahila shahitya atma sahayak group', '114311', 'dhemaji', 'mstd', '', 'majgaon', 'gopal konwar', 'viii', '8472055467', NULL, NULL, '467319384304', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '52', '20/-', '1040', '1040', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(125, 2, 'ilabala boro', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'khuddo boro', 'ix', '7636831928', NULL, NULL, '205324257556', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '36', '20/-', '720', '720', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(126, 2, 'nirmali daimary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'pranjil doimary', 'v', '6000845676', NULL, NULL, '351598403051', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(127, 2, 'haina swargiary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'ranjan swargiary', 'hs', '8011730830', NULL, NULL, '828990684862', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '53', '20/-', '1060', '1060', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(128, 2, 'suhani basumatary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'susil basumatary', 'ix', '9365453715', NULL, NULL, '378010283232', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '45', '20/-', '900', '900', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(129, 2, 'ronsing kherkatary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'dijen kherkatry', 'v', '9394548652', NULL, NULL, '202646262267', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '21', '20/-', '420', '420', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(130, 2, 'sonjita boro', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'swmdwn boro', 'hslc', '6002577046', NULL, NULL, '', 'member', '3', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(131, 2, 'jugami basumatry', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'ranjit kr. basumatary', 'ba', '9365294190', NULL, NULL, '842927169158', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(132, 2, 'rupeswary swargiary', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'raju swargiary', 'hs', '6002838455', NULL, NULL, '586423545425', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '76', '20/-', '1520', '1520', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(133, 2, 'nomi phukan', 'surujmukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'dulal phukan', 'hs', '7338768153', NULL, NULL, '301788746442', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', 'potato', '85', '20/-', '1700', '1700', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(134, 2, 'mousumi gogoi', 'junaki shg', '105912', 'dhemaji', 'mstd', '', 'majgaon', 'ananta gogoi', 'ba', '', NULL, NULL, '', 'member', '3', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', '', 'chiken', '', '', '', '', '', '', 'potato', '46', '20/-', '920', '920', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:22:59'),
(135, 2, 'khiyadha handique', 'nijora shg', '114346', 'dhemaji', 'mstd', '', 'handique', 'rradip handique', 'hslc', '9954849596', NULL, NULL, '661136930125', 'member', '1', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', '', 'chiken', '', '', '', '', '', '', 'potato', '78', '20/-', '1560', '1560', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(136, 2, 'gasami boro', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'majgaon', 'lobo boro', 'v', '7636853905', NULL, NULL, '275529984179', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', '', 'pig', 'chiken', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(137, 2, 'jyoti gogoi', 'panitula mahila shahitya atma sahayak group', '114311', 'dhemaji', 'mstd', '', 'handique', 'tonkeswar gogoi', 'viii', '', NULL, NULL, '801223181902', 'member', '6', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '88', '20/-', '1760', '1760', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(138, 2, 'rina boro', 'rani shg', '108460', 'dhemaji', 'mstd', '', 'handique', 'madan boro', 'ix', '9365639017', NULL, NULL, '916568216505', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'goat,pig', 'cow', '', '', '', '', '', '', 'potato', '52', '20/-', '1040', '1040', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(139, 2, 'dipali chutia phukan', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'debananda phukan', 'ba', '9954239191', NULL, NULL, '611820278689', 'member', '7', 'yes', '', 'yes', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'pineapple', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '60', '20/-', '1200', '1200', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(140, 2, 'joymoti dutta', 'hunali shg', '117920', 'dhemaji', 'mstd', '', 'handique', 'puna dutta', 'ix', '6001495199', NULL, NULL, '812667031477', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', 'lemon', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '30', '20/-', '600', '600', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(141, 2, 'sabitri phukan', 'surujmukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'robin phukan', 'hs', '', NULL, NULL, '', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '50', '20/-', '1000', '1000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(142, 2, 'reboti konwar', 'ajanta shg', '11370', 'dhemaji', 'mstd', '', 'handique', 'nitul konwar', 'hslc', '7635979157', NULL, NULL, '', 'member', '6', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(143, 2, 'monika boro', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'pardip boro', 'hs', '', NULL, NULL, '473194018627', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '60', '20/-', '1200', '1200', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(144, 2, 'khonaisri kherkatary', 'ajwali shg', '238570', 'dhemaji', 'mstd', '', 'majgaon', 'lokhon kherkatary', 'ix', '9678834165', NULL, NULL, '393950935462', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '65', '20/-', '1300', '1300', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(145, 2, 'amiya konwar', 'panitula mahila shahitya atma sahayak group', '114311', 'dhemaji', 'mstd', '', 'handique', 'kinaram konwar', 'vii', '', NULL, NULL, '725472410214', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(146, 2, 'ushamoni konwar', 'panitula mahila shahitya atma sahayak group', '114311', 'dhemaji', 'mstd', '', 'handique', 'upen konwar', 'vii', '', NULL, NULL, '', 'member', '5', 'yes', '', 'no', 'no', 'paddy', '', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(147, 2, 'nolini konwar', 'panitula mahila shahitya atma sahayak group', '114311', 'dhemaji', 'mstd', '', 'handique', 'punseswa konwar', 'ix', '8811017570', NULL, NULL, '479039277442', 'member', '4', 'yes', '', 'no', 'no', 'paddy', '', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(148, 2, 'tutumoni dutta', 'milanbali sowlakhmi atma sahayak group', '113313', 'dhemaji', 'mstd', '', 'handique', 'putul dutta', 'hs', '8011385282', NULL, NULL, '621261461382', 'member', '7', 'yes', '', 'yes', 'no', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', 'potato', '54', '20/-', '1080', '1080', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(149, 2, 'junmoni phukan', 'nijora shg', '114346', 'dhemaji', 'mstd', '', 'handique', 'hemanta phukan', 'ba', '', NULL, NULL, '561842668717', 'member', '2', 'yes', '', 'no', 'no', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', 'potato', '59', '20/-', '1180', '1180', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(150, 2, 'moromi das duwarah', 'sanali shg', '118595', 'dhemaji', 'mstd', '', 'majgaon', 'sanjib duwarah', 'ba', '8011033295', NULL, NULL, '3274779946678', 'member', '6', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'pineapple', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', 'potato', '75', '20/-', '1500', '1500', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(151, 2, 'susmita phukan', 'surujmukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'kumbeswar phukan', 'hs', '9957793127', NULL, NULL, '797816616795', 'member', '7', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', 'potato', '84', '20/-', '1680', '1680', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:00'),
(152, 2, 'moni konwar', 'santi shg', '184355', 'dhemaji', 'mstd', '', 'handique', 'jiten konwar', 'x', '7896888429', NULL, NULL, '663306436207', 'member', '6', 'yes', '', 'yes', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'lemon', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(153, 2, 'dimpal baruah', 'seumukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'lalit boruah', 'hslc', '7896231537', NULL, NULL, '876295557092', 'member', '3', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(154, 2, 'rashmi rekha handique', 'nijora shg', '114346', 'dhemaji', 'mstd', '', 'handique', 'utpal handique', 'hs', '', NULL, NULL, '792241903498', 'member', '4', 'yes', '', 'yes', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(155, 2, 'janima baruah', 'malini shg', '282579', 'dhemaji', 'mstd', '', 'handique', 'manash boruah', 'hs', '9954744028', NULL, NULL, '605922605798', 'member', '4', 'yes', '', 'yes', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(156, 2, 'dipti konwar', 'surabi shg', '114380', 'dhemaji', 'mstd', '', 'handique', 'lulu konwar', 'ix', '6003925507', NULL, NULL, '68271352343', 'member', '5', 'yes', '', 'yes', 'no', 'paddy', 'potato', 'pumpkin', '', '', '', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(157, 2, 'matu phukan', 'surabi shg', '114380', 'dhemaji', 'mstd', '', 'handique', 'kartik phukan', 'x', '6000481650', NULL, NULL, '652785359936', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(158, 2, 'nijora phukan', 'seumukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'krishna phukan', 'x', '9394545566', NULL, NULL, '655875519279', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(159, 2, 'nitumoni konwar', 'santi shg', '118595', 'dhemaji', 'mstd', '', 'handique', 'kumbeswar konwar', 'x', '7365985071', NULL, NULL, '797816616795', 'member', '2', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', '', '', '', '', 'duck', 'pig', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(160, 2, 'champa duwarah', 'jeoti mahila atmosahai group', '120797', 'dhemaji', 'mstd', '', 'majgaon', 'rajib duwarah', 'hslc', '9707365594', NULL, NULL, '877464772330', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'pineapple', '', '', '', 'duck', '', '', '', '', '', '', '', '', 'potato', '55', '20/-', '1100', '1100', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(161, 2, 'anjali phukan gohain', 'seumukhi shg', '113291', 'dhemaji', 'mstd', '', 'handique', 'luhit gohain', 'hs', '8011438589', NULL, NULL, '', 'member', '6', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'lemon', '', '', '', 'duck', 'pig', '', '', '', '', '', '', '', 'potato', '44', '20/-', '880', '880', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(162, 2, 'tankeswari dehingia', 'panitula mahila shahitya atma sahayak group', '114311', 'dhemaji', 'mstd', '', 'handique', 'bilesha dhehingia', 'x', '8011982419', NULL, NULL, '94598739337', 'member', '7', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'lemon', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', 'potato', '52', '20/-', '1040', '1040', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(163, 2, 'dulumoni phukan sonowal', 'jasingpho shg', '106970', 'dhemaji', 'mstd', '', 'handique', 'karuna sonowal', 'hs', '', NULL, NULL, '304057152545', 'member', '5', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'lemon', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', 'potato', '50', '20/-', '1000', '1000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(164, 2, 'nibedita phukan', 'nijora shg', '114346', 'dhemaji', 'mstd', '', 'handique', 'bijoy phukon', 'hslc', '', NULL, NULL, '692673989837', 'member', '4', 'yes', '', 'no', 'no', 'paddy', 'potato', 'pumpkin', '', '', 'betelnut', 'lemon', '', '', '', 'duck', '', 'cow', '', '', '', '', '', '', '', '50', '20/-', '1000', '1000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(165, 3, 'sonujmoni borauh', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'minal borauh', 'b.a', '8011290872', NULL, NULL, '324527986279', 'president', '14', 'n/a', '12', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', 'ginger', 'pumpkin', '', 'piggery', 'byp', 'duckery', '', '', '', 'silk worm', '', '', 'piggery', '75', '250', '18750', '18750', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(166, 3, 'pari gogoi', 'hadini shg', '12105', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'bhaben gogoi', '9th pass', '9395217066', NULL, NULL, '663653496550', 'member', '8', 'n/a', '8', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', '', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(167, 3, 'binita hazarika', 'surujmukhi shg', '88309', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'panab hazarika', 'h.s pass', '8134880491', NULL, NULL, '841530760395', 'member', '5', 'n/a', '5', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', '', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(168, 3, 'sabitri sonowal', 'lakhimi shg', '20032', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'diganta sonowal', '9th pass', '9394204084', NULL, NULL, '591030432642', 'member', '5', 'n/a', '5', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(169, 3, 'chandama sonowal', 'lakhimi shg', '20032', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa bali', 'bipul sonowal', 'h.s pass', '6003507117', NULL, NULL, '633204598196', 'member', '7', 'n/a', '7', 'na', 'na', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:01'),
(170, 3, 'eamakumari chetri', 'kanaklata shg', '13976', 'dhemaji', 'dhemaji', 'naruathan', 'nepali khuti', 'gakul chetri', 'l.p pass', '9074041796', NULL, NULL, '409677429602', 'member', '5', 'n/a', '6', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(171, 3, 'ambika parajuli chetry', 'kanaklata shg', '13976', 'dhemaji', 'dhemaji', 'naruathan', 'nepali khuti', 'basu chetry', 'h.s.l.c pass', '9957430225', NULL, NULL, '203547554222', 'member', '10', 'n/a', '10', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(172, 3, 'ranjana chetri', 'kanaklata shg', '13976', 'dhemaji', 'dhemaji', 'naruathan', 'nepali khuti', 'govindra chetri', 'h.s.l.c pass', '8822177690', NULL, NULL, '796193183033', 'member', '10', 'n/a', '10', 'na', '3', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(173, 3, 'munu ray', 'kanaklata shg', '13976', 'dhemaji', 'dhemaji', 'naruathan', 'nepali khuti', 'chanam ray', '9th pass', '6002876483', NULL, NULL, '439659518693', 'member', '5', 'n/a', '5', 'na', 'na', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(174, 3, 'sangita sonowal', 'surujmukhi shg', '88309', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'dilip phukan', 'h.s', '6000715367', NULL, NULL, '905804416975', 'member', '12', 'n/a', '11', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', '', '', '', '', 'byp', '7', '200', '1400', '2100', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(175, 3, 'janmoni chetia', 'dariti shg', '19083', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'bireshwar chetia', 'h.s.l.c pass', '', NULL, NULL, '901076200321', 'member', '5', 'n/a', '5', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', 'local', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(176, 3, 'dipti sonowal', 'sakhi shg', '52540', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'biswajit sonowal', 'h.s', '', NULL, NULL, '424546238414', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', '', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(177, 3, 'janmoni sonowal', 'sakhi shg', '52540', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'ganesh sonowal', 'h.s', '', NULL, NULL, '423284983016', 'member', '12', 'n/a', '12', 'na', '3', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', '', '', '', 'piggery', 'byp', '', '', '', '', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(178, 3, 'maosumi sonowal saikia', 'sakhi shg', '52540', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'jatin saikia', 'h.s', '6001023027', NULL, NULL, '811689351812', 'member', '5', 'n/a', '4', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', 'local', 'silk worm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(179, 3, 'kan sonowal', 'sakhi shg', '52540', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'mridul sonowal', 'h.s.l.c pass', '', NULL, NULL, '287224944302', 'member', '5', 'n/a', '5', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(180, 3, 'apuna bora', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa bali', 'jaganath bora', 'l.p pass', '6282134536', NULL, NULL, '458917802874', 'member', '8', 'n/a', '6', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(181, 3, 'dipa ray', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'nepali khuti', 'chitra pay', '9th pass', '9707737664', NULL, NULL, '907824357815', 'member', '10', 'n/a', '9', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', 'ginger', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', '', '', '', 'piggery', '85', '280', '23800', '23800', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(182, 3, 'janmoni sonowal', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa bali', 'rajdeep sonowal', 'b.a', '7002718142', NULL, NULL, '880320261210', 'member', '8', 'n/a', '8', 'na', 'na', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(183, 3, 'kalpana sonowal', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa bali', 'rutul sonowal', '9th pass', '936641178', NULL, NULL, '587306512732', 'member', '6', 'n/a', '6', 'na', 'na', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '20', '200', '4000', '6000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(184, 3, 'chintumoni bora', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa bali', 'bheeban bora', 'h.s', '9864575358', NULL, NULL, '241669629742', 'secretary', '8', 'n/a', '6', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '14', '200', '2800', '4200', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(185, 3, 'sabitri sonowal', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', '9th pass', '', NULL, NULL, '516104268185', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', '', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(186, 3, 'annada sonowal', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', 'h.s', '', NULL, NULL, '493631537524', 'member', '10', 'n/a', '9', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(187, 3, 'dipali sonowal', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'jitu sonowal', 'h.s.l.c pass', '', NULL, NULL, '477198728117', 'member', '12', 'n/a', '11', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(188, 3, 'rikumoni sonowal', 'randali shg', '26585', 'dhemaji', 'dhemaji', 'naruathan', '', 'dibrjyoti sonowal', 'h.s', '7002637970', NULL, NULL, '455523903691', 'member', '9', 'n/a', '8', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(189, 3, 'matu bora', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'ripid bora', 'h.s.l.c pass', '8638880890', NULL, NULL, '709451780468', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:02'),
(190, 3, 'lilaswari saikia', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'lit bijaya sakia', 'h.s.l.c pass', '8753943365', NULL, NULL, '939909471327', 'member', '8', 'n/a', '7', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', 'silkworm', '', '', 'piggery', '40', '300', '12000', '12000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(191, 3, 'riku manu chutia', 'joymoti jeevika shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'subrat chutia', 'h.s.l.c pass', '8453387979', NULL, NULL, '276409778168', 'member', '10', 'n/a', '9', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(192, 3, 'bhanikam chutia', 'sadhani aruhi shg', '15415', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'jadu moni chutia', 'h.s.l.c pass', '7099136241', NULL, NULL, '812353884558', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '30', '200', '6000', '9000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(193, 3, 'hemanjali borauh chetia', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'harindra chutia', 'h.s', '6002890821', NULL, NULL, '603347614348', 'member', '10', 'n/a', '9', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(194, 3, 'munu chutia', 'joymoti jeevika shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'hira chutia', 'h.s.l.c pass', '8011290080', NULL, NULL, '755198718765', 'member', '10', 'n/a', '9', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'piggery', '60', '300', '18000', '18000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(195, 3, 'rupa borah', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'nakul borah', 'h.s.l.c pass', '6002383232', NULL, NULL, '261732652211', 'member', '14', 'n/a', '12', 'na', '2', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '14', '200', '2800', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(196, 3, 'runu chutia', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'achyat chutia', '10th', '8822863194', NULL, NULL, '748118970350', 'member', '8', 'n/a', 'n/a', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(197, 3, 'nijaru gogoi chutia', 'joymoti shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'babai boruah', 'h.s', '', NULL, NULL, '644127479320', 'member', '9', 'n/a', '8', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '42', '200', '8400', '8400', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(198, 3, 'jayamoni chutia', 'joymoti shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'satya chutia', '10th', '', NULL, NULL, '416258073895', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(199, 3, 'chitra chutia', 'sadhani aruhi shg', '15415', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'ananta chutia', 'b.a', '8133874229', NULL, NULL, '781179422721', 'member', '7', 'n/a', '', '', '', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(200, 3, 'archana chutia', 'sadhani aruhi shg', '15415', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'tiken chutia', '10th', '9864315456', NULL, NULL, '573912994930', 'member', '10', 'n/a', '8', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(201, 3, 'dhumoni chutia', 'joymoti jeevika shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'prabitra chutia', '10th', '6002900283', NULL, NULL, '271742656605', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '45', '9000', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(202, 3, 'sita chutia', 'joymoti jeevika shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'nandeswar chutia', '10th', '9365022690', NULL, NULL, '319218669487', 'member', '8', 'n/a', '7', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(203, 3, 'monalisha bora', 'joymoti jeevika shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'mani ram bora', '10th', '7994930379', NULL, NULL, '682308086950', 'member', '12', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(204, 3, 'mouchumi chutia', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'chiran chutia', 'h.s', '9365780967', NULL, NULL, '501474877418', 'member', '15', 'n/a', '13', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(205, 3, 'dipika bora', 'sadhani aruhi shg', '15415', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'padip bora', '10th', '9395634868', NULL, NULL, '414518425034', 'member', '16', 'n/a', '14', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(206, 3, 'kajli mami bora chutia', 'sadhani aruhi shg', '15415', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'bubul bora', '10th', '9394207191', NULL, NULL, '915071440871', 'member', '10', 'n/a', '9', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(207, 3, 'nirupama chutia', 'maa shg', '24908', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'jayanta chutia', '9th pass', '8486402921', NULL, NULL, '412332490737', 'member', '14', 'n/a', '10', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', 'turmeric', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '30', '200', '6000', '6000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(208, 3, 'chinimai borah', 'joymoti jeevika shg', '21297', 'dhemaji', 'dhemaji', 'naruathan', 'kapahtali', 'padmeswar borah', '10th', '6002592210', NULL, NULL, '988900504533', 'member', '13', 'n/a', '12', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(209, 3, 'bandana gogoi', 'surujmukhi shg', '88309', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'huiti gogoi', 'h.s', '6003522964', NULL, NULL, '259148916918', 'member', '10', 'n/a', '8', 'na', '2', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '35', '200', '7000', '7000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(210, 3, 'chumpi hazarika', 'surujmukhi shg', '88309', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'kushal hazarika', 'h.s', '734955099', NULL, NULL, '519324454527', 'member', '8', 'n/a', '6', 'na', '2', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(211, 3, 'ritamoni sonowal', 'surujmukhi shg', '88309', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'dulasawa sonowal', 'h.s.l.c pass', '', NULL, NULL, '830516949018', 'member', '6', 'n/a', '6', 'na', 'na', 'paddy', '', '', '', '', 'potato', 'turmeric', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:03'),
(212, 3, 'parismita saikia', 'medini shg', '12105', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', '9th pass', '9365282172', NULL, NULL, '542526724603', 'member', '10', 'n/a', '7', 'na', '3', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(213, 3, 'mandira mudal', 'medini shg', '12105', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', 'h.s.l.c pass', '9395184257', NULL, NULL, '422698067073', 'member', '9', 'n/a', '7', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(214, 3, 'kabita hazarika', 'medini shg', '12105', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', 'h.s.l.c pass', '60001482484', NULL, NULL, '372901305398', 'member', '5', 'n/a', '4', 'na', '1', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', '', '', '', '', 'local', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(215, 3, 'bina sonowal', 'randali shg', '26585', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa bali', 'budheswar sonowal', 'l.p pass', '', NULL, NULL, '757458287063', 'member', '10', 'n/a', '8', 'na', '2', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(216, 3, 'janmoni gogoi borah', 'lakhimi shg', '20032', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'lalit borah', 'h.s', '', NULL, NULL, '821322775410', 'member', '9', 'n/a', '8', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '18', '200', '3600', '3600', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(217, 3, 'mamoni sonowal', 'lakhimi shg', '20032', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'ananta sonowal', '9th pass', '6000458521', NULL, NULL, '469514816309', 'member', '7', 'n/a', '6', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(218, 3, 'labanya sonowal', 'randali shg', '26585', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'susil sonowal', 'h.s.l.c pass', '', NULL, NULL, '858727149131', 'member', '8', 'n/a', '7', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(219, 3, 'kanaklata sonowal', 'randali shg', '26585', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'kamal sonowal', '11th pass', '', NULL, NULL, '620483320075', 'member', '8', 'n/a', '6', 'na', '2', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '14', '200', '2800', '2800', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(220, 3, 'animai chutia', 'randali shg', '26585', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', 'h.s.l.c pass', '7635837844', NULL, NULL, '688758679069', 'member', '10', 'n/a', 'n/a', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(221, 3, 'matu sonowal', 'randali shg', '26585', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'naruyan sonowal', '11th pass', '', NULL, NULL, '784525795058', 'member', '7', 'n/a', '7', 'na', '1', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(222, 3, 'animai borgohain', 'surujmukhi shg', '88309', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'jintu borgohain', 'h.s.l.c pass', '', NULL, NULL, '986384416793', 'member', '5', 'n/a', '5', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', 'byp', '30', '200', '6000', '6000', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(223, 3, 'rapuri saikia', 'milijuli shg', '32957', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', '', '', '', NULL, NULL, '768221100696', 'member', '8', 'n/a', '8', 'na', 'na', 'paddy', 'mustard', '', '', '', 'potato', '', '', 'pumpkin', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(224, 3, 'dipali borgohain', 'medini shg', '12105', 'dhemaji', 'dhemaji', 'naruathan', 'ratuwa', 'hunator borgohain', '9th pass', '9395087517', NULL, NULL, '477272451658', 'member', '4', 'n/a', '4', 'na', 'na', 'paddy', '', '', '', '', 'potato', '', '', '', '', 'piggery', 'byp', '', '', '', 'local', 'silkworm', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(225, 5, 'momina begum', 'santi mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar part-i', 'aynul hoque', 'literate', '9707102968', NULL, NULL, '580504582311', 'secretary', '1', '1', '', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'pumpkin', 'raddish', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(226, 5, 'laily begam mazumder', 'alo mohila shg', '74637', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'mayajul hoque mazumdar', 'literate', '7636925449', NULL, NULL, '844280586634', 'member', '2', '0.5', '1', '', '', 'paddy', '', '', '', '', 'rajmah', 'bean', 'radish', '', '', 'backyard poultry', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(227, 5, 'taslina begom laskar', 'alo mohila shg', '74637', 'hailakandi', 'algapur', 'panchgram', 'new panchgram', 'fakrul islam', 'literate', '9085833583', NULL, NULL, '250231843744', 'member', '1.5', '1', '0.5', '', '', 'paddy', '', '', '', '', 'brinjal', 'rajmah', 'arecanut', 'tomato', '', 'backyard poultry', 'cow', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(228, 5, 'nurun nessa', 'alo mohila shg', '74637', 'hailakandi', 'algapur', 'panchgram', 'panchgram', 'tazir uddin', 'literate', '9101700162', NULL, NULL, '412927408185', 'president', '0.5', '0.5', '', '', '0.1', '', '', '', '', '', 'gourd', 'tomato', 'bean', '', '', 'backyard poultry', 'cow', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(229, 5, 'nazma begum', 'alo mohila shg', '74637', 'hailakandi', 'algapur', 'panchgram', 'panchgram', 'nasir uddin', 'literate', '8099138630', NULL, NULL, '642799881018', 'member', '1', '0.5', '0.5', '', '0.15', 'paddy', '', '', '', '', 'potato', 'cabbage', 'rajmah', '', '', 'backyard poultry', 'cow', 'goat', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(230, 5, 'momota begom', 'pervin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'jashim uddin', 'literate', '6900471919', NULL, NULL, '408490655085', 'member', '0.5', '0.5', '', '2', '0.5', '', '', '', '', '', 'pumpkin', 'rajmah', 'potato', '', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:04'),
(231, 5, 'muslima begum mazumder', 'royal star shg', '65221', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'kabul haque mazumder', 'literate', '9101604814', NULL, NULL, '536986494408', 'member', '4', '1.5', '2.5', '1', '0.5', 'paddy', '', '', '', '', 'potato', 'rajmah', 'arecanut', 'bean', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(232, 5, 'pampa rani das', 'mohila kalyan shg', '17467', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'pabitra chandra das', 'literate', '9706701299', NULL, NULL, '923333701633', 'member', '1', '0.3', '0.7', '0.5', '', 'paddy', '', '', '', '', 'pumpkin', 'rajmah', 'gourd', 'brinjal', '', 'backyard poultry', 'cow', 'duck', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(233, 5, 'parbati das', 'nari sakti shg', '80985', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'dipak chandra das', 'literate', '9126394080', NULL, NULL, '797425888122', 'member', '1', '0.5', '0.5', '', '', 'paddy', '', '', '', '', 'brinjal', 'pumpkin', 'radish', 'cucumber', '', 'backyard poultry', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(234, 5, 'layla begam laskar', 'amar jyoti mohila shg', '30197', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'ajir uddin laskar', 'literate', '8876258869', NULL, NULL, '765782954111', 'member', '1', '1', '', '', '', 'paddy', '', '', '', '', 'rajmah', 'tomato', 'lady\'s finger', '', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(235, 5, 'amina khatun', 'santi mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'abdul hasib', 'literate', '9707843302', NULL, NULL, '597400637598', 'member', '2', '0.5', '1.5', '', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'arecanut', 'raddish', '', 'backyard poultry', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05');
INSERT INTO `member_panel` (`mid`, `pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `doctype`, `docidno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`, `verifierapprover`, `isrejected`, `isverified`, `isapproved`, `verifydate`, `verifyby`, `rejecteddate`, `approvedate`, `approvedby`, `remarks`, `rejectedby`, `last_updated`) VALUES
(236, 5, 'azifa begum', 'gupa shg', '28026', 'hailakandi', 'algapur', 'panchgram', 'bokrihawor part-i', 'abdul malik', 'literate', '9954903113', NULL, NULL, '248326820137', 'member', '1.5', '0.5', '1', '0.5', '', 'paddy', '', '', '', '', 'bean', 'tomato', 'rajmah', '', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(237, 5, 'karima begum', 'santi mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'sahab uddin', 'literate', '8486155078', NULL, NULL, '380053163427', 'member', '2', '1', '1', '', '', 'paddy', '', '', '', '', 'radish', 'cabbage', 'arecanut', 'rajmah', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(238, 5, 'chayal begum', 'pervin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar part-i', 'nazim uddin', 'literate', '8876563917', NULL, NULL, '388829116794', 'member', '3', '1', '2', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'bean', 'arecanut', '', 'backyard poultry', 'cow', 'duck', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(239, 5, 'halecha bibi', 'pervin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar part-i', 'usman ali', '', '8822629601', NULL, NULL, '633921663628', 'member', '2', '1', '1', '', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'arecanut', 'brinjal', '', 'backyard poultry', 'cow', 'goat', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(240, 5, 'nazma begum', 'pervin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'tamij uddin', 'literate', '9127503185', NULL, NULL, '542182276646', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'potato', 'rajmah', 'radish', '', '', 'backyard poultry', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(241, 5, 'jasminara begum', 'pervin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'abul hussain', 'literate', '6000092671', NULL, NULL, '995753897553', 'member', '1', '1', '', '', '', '', '', '', '', '', 'cabbage', 'lady\'s finger', 'rajmah', '', '', 'backyard poultry', 'cow', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(242, 5, 'jahura begum', 'santi mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'panchgram', 'sofiq ahamed', 'literate', '7099246867', NULL, NULL, '946877437170', 'member', '2', '1', '1', '0.5', '', 'mustard', '', '', '', '', 'rajmah', 'potato', 'bean', 'arecanut', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(243, 5, 'fulkumari robidas', 'jonokalayan shiv durga shg', '19436', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'kutu robidas', 'literate', '6900608903', NULL, NULL, '890340654588', 'member', '0.25', '0.25', '', '', '', '', '', '', '', '', 'bean', 'rajmah', 'arecanut', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(244, 5, 'sibani rani das', 'jonakalayan shiv durga shg', '19436', 'hailakandi', 'algapur', 'panchgram', 'bokrihawor part-ii', 'lt. rajkumar das', 'literate', '7896678237', NULL, NULL, '737958641905', 'member', '0.25', '0.25', '', '0.1', '', '', '', '', '', '', 'bean', 'corriender', 'arecanut', '', '', 'backyard poultry', 'goat', 'cow', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(245, 5, 'korima khatun', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'bokrihawor part-i', 'lt.intaj ali', '', '9707102968', NULL, NULL, '696159674844', 'member', '1', '1', '', '0.5', '', '', '', '', '', '', 'pumpkin', 'rajmah', 'brinjal', 'potato', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(246, 5, 'lokki robidas', 'jonokalayan shiv durga shg', '19463', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'kutu robidas', 'literate', '7483315746', NULL, NULL, '763244294447', 'member', '1.5', '0.5', '1', '', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'tomato', '', '', 'backyard poultry', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(247, 5, 'fatima begum', 'parvin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'bokrihawor part-i', 'ashuk ali', 'literate', '', NULL, NULL, '967775775854', 'member', '0.25', '0.25', '', '', '', '', '', '', '', '', 'tomato', 'bean', '', '', '', 'backyard poultry', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(248, 5, 'farhana begam', 'parvin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'bokrihawor part-i', 'anwar hussain', 'literate', '8486155309', NULL, NULL, '638820860524', 'member', '2', '1', '1', '1', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'pumpkin', 'raddish', '', 'backyard poultry', 'cow', 'duck', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(249, 5, 'layla begam', 'parvin shg', '28507', 'hailakandi', 'algapur', 'panchgram', 'bokrihawor part-i', 'mafur ali', 'literate', '', NULL, NULL, '651863633477', 'member', '1', '1', '', '', '', '', '', '', '', '', 'rajmah', 'potato', 'brinjal', 'raddish', '', 'backyard poultry', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(250, 5, 'hasina begom', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'sobir ahamed', 'literate', '', NULL, NULL, '360558922988', 'member', '1', '1', '', '', '', '', '', '', '', '', 'potato', 'rajmah', 'bean', 'tomato', '', 'backyard poultry', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:05'),
(251, 5, 'asarun nasa', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'eliyas ahamed', 'literate', '8134972863', NULL, NULL, '875466428288', 'member', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(252, 5, 'rahana begom', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'babu hussain', 'literate', '8134972863', NULL, NULL, '549163485516', 'member', '2', '1', '1', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'brinjal', 'bean', '', 'backyard poultry', 'cow', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(253, 5, 'tazima begom', 'happy mohila shg', '59573', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'abul hussain', 'literate', '', NULL, NULL, '700565600440', 'member', '1', '0.5', '0.5', '0.25', '', 'paddy', '', '', '', '', 'potato', 'rajmah', 'arecanut', 'tomato', '', 'backyard poultry', 'cow', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(254, 5, 'rita rani nath', 'hatiyarpar women  shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'banamali nath', 'literate', '', NULL, NULL, '546134463430', 'member', '3', '1', '2', '0.5', '', 'paddy', '', '', '', '', 'raddish', 'brinjal', 'rajmah', 'potato', '', 'backyard poultry', 'cow', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(255, 5, 'husna begum', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'muslim uddin', 'literate', '9395732671', NULL, NULL, '905647497038', 'member', '2', '1', '1', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'arecanut', '', '', 'backyard poultry', 'goat', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(256, 5, 'lily begum', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'anwar hussain laskar', 'literate', '8435810118', NULL, NULL, '278375705754', 'member', '0.5', '0.5', '', '0.5', '', '', '', '', '', '', 'potato', 'rajma', 'bean', 'arecanut', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(257, 5, 'jahanara begum', 'happy mohila shg', '59573', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'taj uddin talukder', 'literate', '8876164586', NULL, NULL, '451249019603', 'member', '2', '1', '1', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'pumpkin', 'arecanut', '', 'backyard poultry', 'duck', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(258, 5, 'mamtaj begum', 'happy mohila shg', '59573', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'sarif uddin laskar', 'literate', '9394437290', NULL, NULL, '938841193425', 'member', '3', '1.5', '1.5', '0.5', '0.5', 'paddy', '', '', '', '', 'potato', 'rajma', 'pumpkin', 'arecanut', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(259, 5, 'wahida begum talukder', 'happy mohila shg', '59573', 'hailakandi', 'algapur', 'panchgram', 'dakshin badarpur', 'samsul isam talukder', 'literate', '9864475221', NULL, NULL, '856194394420', 'member', '1', '0.5', '0.5', '', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'bean', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(260, 5, 'sahanara begam', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'abdul hoque', 'literate', '8486012766', NULL, NULL, '333526452464', 'member', '0.5', '0.5', '', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'ladies finger', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(261, 5, 'rabiya  khatun', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'fakar uddin', 'literate', '908537932', NULL, NULL, '770502721311', 'member', '0.5', '0.5', '', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'bean', 'arecanut', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(262, 5, 'sushanti das', 'royal star shg', '65221', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'nibas das', 'ilieterate', '', NULL, NULL, '443916237047', 'member', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(263, 5, 'newarun nessa', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'akadas ali', 'ilieterate', '6000296366', NULL, NULL, '22256072272', 'member', '0.1', '', '', '', '', '', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(264, 5, 'rajimun nessa choudhury', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'jamal uddin', 'literate', '9864028213', NULL, NULL, '243780254129', 'member', '2.5', '1', '1.5', '0.25', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'bean', 'arecanut', '', 'backyard poultry', 'cow', 'goat', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(265, 5, 'salma sultana choudhury', 'moon shg', '65219', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'kholil uddin', 'literate', '8638988428', NULL, NULL, '464898831886', 'member', '1', '0.5', '0.5', '0.25', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(266, 5, 'basanti rabidas', 'janakalyan shiv durga shg', '19463', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'gopal rabidas', 'ilieterate', '8134085821', NULL, NULL, '460495496777', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'brinjal', 'bean', 'pumpkin', 'arecanut', '', 'backyard poultry', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(267, 5, 'achiya begom', 'hatyarpar women shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'ala uddin', 'literate', '6900556224', NULL, NULL, '682537390142', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'arecanut', 'rajma', '', '', '', 'backyard poultry', 'cow', 'goat', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(268, 5, 'korima begum laskar', 'hatyarpar women shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'abul hussain laskar', 'literate', '7086637164', NULL, NULL, '290542533427', 'member', '2', '1', '1', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'ladies finger', 'cabbage', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(269, 5, 'dilwara begam', 'hatyarpar women shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'jaynul hoque', 'literate', '6900556224', NULL, NULL, '344239523159', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'arecanut', 'rajma', 'bean', '', '', 'backyard poultry', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(270, 5, 'maharun nessa', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'ali raja', 'literate', '8974160968', NULL, NULL, '976622994282', 'member', '', '', '', '', '', '', '', '', '', '', 'arecanut', 'rajma', 'bean', '', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(271, 5, 'subaboti nuniya', 'mohila unnayan shg', '2334', 'hailakandi', 'algapur', 'panchgram', 'panchgram', 'mohesh nuniya', 'literate', '', NULL, NULL, '847562324846', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'potato', 'rajma', 'ladies finger', 'cabbage', '', 'backyard poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(272, 5, 'minara begum', 'mohila unnayan shg', '2334', 'hailakandi', 'algapur', 'panchgram', 'panchgram', 'islam uddin', 'literate', '9394173714', NULL, NULL, '297923426627', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'potato', 'rajma', 'cucumber', 'pumpkin', '', 'backyard poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(273, 5, 'safiya begum', 'hatarpar women shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'kamal uddin', 'literate', '7086094836', NULL, NULL, '465587874811', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'bean', 'ladies finger', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:06'),
(274, 5, 'sabiya nuniya', 'hatyarpar shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'putul nuniya', 'literate', '', NULL, NULL, '625819987054', 'member', '', '', '', '', '', '', '', '', '', '', 'arecanut', '', '', '', '', 'backyard poultry', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(275, 5, 'fulow das', 'hatyarpar women shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'debendra das', 'literate', '863865738', NULL, NULL, '327543000777', 'member', '0.25', '', '1', '1', '', '', '', '', '', '', 'arecanut', 'rajma', 'bean', '', '', 'backyard poultry', 'duck', 'goat', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(276, 5, 'archana das', 'hatiyarpar women shg', '19032', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'satyendra das', 'literate', '8811852487', NULL, NULL, '727048222199', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'potato', 'rajma', 'acreanut', '', '', 'backyard poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(277, 5, 'rinku rani das', 'mohila kalyan shg', '17467', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'manindra das', 'literate', '9365568434', NULL, NULL, '639474569341', 'member', '0.5', '0.5', '', '0.2', '', '', '', '', '', '', 'pumpkin', 'cabbage', 'tomato', '', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(278, 5, 'sujita das', 'nari sakti shg', '80985', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'jitendra das', 'literate', '9678220080', NULL, NULL, '440217017286', 'member', '0.5', '0.5', '', '0.5', '', '', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'cow', 'duck', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(279, 5, 'hafsa begom', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar', 'abdul sahid', 'literate', '', NULL, NULL, '384501637016', 'member', '1.5', '1.5', '', '0.5', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'acreanut', 'cucumber', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(280, 5, 'gulasa bibi', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar', 'lt. fayaj ali', 'literate', '7086520649', NULL, NULL, '448809611645', 'member', '2', '1', '1', '0.5', '', 'paddy', '', '', '', '', 'ladies finger', 'bean', 'cauliflower', 'tomato', '', 'backyard poultry', 'goat', 'duck', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(281, 5, 'ruhi begom', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'uttar kanchanpur part-i', 'nazim uddin', 'literate', '', NULL, NULL, '363777654381', 'member', '0.5', '0.5', '', '', '', '', '', '', '', '', 'potato', 'rajma', 'green chilli', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(282, 5, 'kamana rani das', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'panchgram', 'rabindra das', 'literate', '', NULL, NULL, '303120379760', 'member', '1', '0.5', '0.5', '', '', 'mustard', '', '', '', '', 'potato', 'rajma', 'water gourd', 'pumpkin', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(283, 5, 'sadana das', 'gupa shg', '28026', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar', 'barindra das', 'literate', '6901091100', NULL, NULL, '377304186202', 'member', '1', '1', '', '0.25', '', 'paddy', '', '', '', '', 'potato', 'rajma', 'pea', 'pumpkin', '', 'backyard poultry', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(284, 5, 'monowara begom', 'shanti mohila shg', '16609', 'hailakandi', 'algapur', 'panchgram', 'bokrihowar', 'samsul hoque', 'literate', '9954397693', NULL, NULL, '900590878875', 'member', '1', '1', '', '0.25', '', '', '', '', '', '', 'potato', 'rajma', 'pea', 'corriender leaf', '', 'backyard poultry', 'duck', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(285, 6, 'mangali bordoloi', 'rupali', '3717', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'ranjit bordoloi', 'literate', '62846332', NULL, NULL, '58547328859', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(286, 6, 'parama dewraja', 'akash', '19164', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'ratan bordoloi', 'literate', '61579481', NULL, NULL, '', 'member', '8', '', '8', '1', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'goat', 'piggery', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(287, 6, 'sandhya dewraja', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'manash dewraja', 'literate', '961342837', NULL, NULL, '289896496699', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'backyard poultry', 'piggery', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(288, 6, 'runumoni bordoloi dewraja', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'mrinal kumar dewraja', 'literate', '61767673', NULL, NULL, '753187536174', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:07'),
(289, 6, 'subharani basumatary', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'santosh dewri', 'literate', '91141116', NULL, NULL, '398319975863', 'member', '1', '', '1', '1.5', '', 'paddy', 'maize', 'arhar dal', '', '', 'seasonal vegetables', '', '', '', '', 'duck', 'piggery', 'backyard poultry', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(290, 6, 'ribhamani gaonkhowa', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chariponia', 'lalit chandra gaonkhowa', 'literate', '6374538', NULL, NULL, '995444492618', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'broiler', '', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(291, 6, 'mina bordoloi dewraja', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'jitul dewraja', 'literate', '6197156', NULL, NULL, '34834642941', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(292, 6, 'rita patar', 'prarena', '5735', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'prakash dewraja', 'literate', '6755326', NULL, NULL, '759484321576', 'member', '4', '', '4', '1.5', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'duck', '', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(293, 6, 'chagemai dewri', 'seuji', '1134', 'nagaon', 'dolongghat', 'chabukdhara', 'chariponia', 'mukunda dewri', 'illiterate', '6118665', NULL, NULL, '22576563913', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(294, 6, 'sonpahi bordoloi patar', 'gouri', '95519', 'nagaon', 'dolongghat', 'chabukdhara', 'banalabari', 'apurba patar', 'literate', '9864134378', NULL, NULL, '35514844862', 'member', '3', '', '3', '', '', 'paddy', 'mustard', '', '', '', '', '', '', '', '', 'duck', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(295, 6, 'rekha moni dewraja', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'jyoti prasad dewraja', 'literate', '936567528', NULL, NULL, '883833995282', 'member', '5', '', '5', '', '', 'paddy', 'mustard', 'jute', '', '', '', '', '', '', '', 'duck', 'cow', '', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(296, 6, 'suwala kunwar', 'parthana', '1821', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'hemanta kunwar', 'literate', '6526432', NULL, NULL, '7817334545', 'member', '2.5', '', '2.5', '', '', 'paddy', 'mustard', '', '', '', '', '', '', '', '', 'duck', 'backyard poultry', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(297, 6, 'minakshi bordoloi', 'rupali', '3717', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'ramen bordoloi', 'literate', '9864788741', NULL, NULL, '43678974673', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(298, 6, 'ayashwaryya dekadoloi', 'rupali', '3717', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'chakiram dekadoloi', 'literate', '6526432', NULL, NULL, '252951448462', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(299, 6, 'rupali dewri', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'rajani kanta dewri', 'literate', '813592321', NULL, NULL, '42637991963', 'member', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', 'duck', '', '', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(300, 6, 'rekha dewraja', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'sunanda dewraja', 'literate', '911937933', NULL, NULL, '914531569514', 'member', '5', '', '5', '0.6', '', 'paddy', 'mustard', '', '', '', '', '', '', '', '', 'duck', 'goat', 'cow', '', '', 'mixed', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(301, 6, 'chayarani bora', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'rakesh senapati', 'literate', '61586475', NULL, NULL, '7536578527', 'member', '6', '', '6', '0.5', '', 'paddy', 'mustard', 'potato', '', '', '', '', '', '', '', 'duck', '', '', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(302, 6, 'rina senapati', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'bharat senapati', 'literate', '6348334', NULL, NULL, '366612324', 'member', '8', '', '8', '1.5', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', '', '', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(303, 6, 'manisha dewri', 'seuji', '1134', 'nagaon', 'dolongghat', 'chabukdhara', 'chariponia', 'sapan kumar dewri', 'literate', '62299871', NULL, NULL, '28131767645', 'member', '2', '', '2', '0.4', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'backyard poultry', 'cow', '', '', 'rou, mirika', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(304, 6, 'gitanjali konwar', 'gouri', '95519', 'nagaon', 'dolongghat', 'chabukdhara', 'banalabari', 'jadumon konwar', 'literate', '6983881', NULL, NULL, '', 'member', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(305, 6, 'rajiti patar dewraja', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'bhaben chandra dewraja', 'literate', '95773531', NULL, NULL, '', 'secretary', '1', '', '1', '0.2', '', 'mustard', '', '', '', '', 'seasonal vegetables', '', '', '', '', 'duck', 'goat', 'backyard poultry', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(306, 6, 'pushpa deka doloi', 'kolpatarua', '3735', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'parikhit deka doloi', 'literate', '959762965', NULL, NULL, '65874678', 'member', '5', '', '5', '2', '', 'paddy', 'mustard', 'jute', '', '', '', '', '', '', '', 'duck', 'goat', 'cow', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(307, 6, 'satya bordoloi', 'momi', '3862', 'nagaon', 'dolongghat', 'chabukdhara', 'bogalpori', 'jyotish bordoloi', 'literate', '8638776238', NULL, NULL, '933898113', 'member', '5', '', '5', '2', '', 'paddy', 'mustard', '', '', '', 'seasonal vegetables', '', '', '', '', 'duck', 'cow', 'goat', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(308, 6, 'juri dewraja', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'satyabrat dewraja', 'literate', '9859392255', NULL, NULL, '9377746427', 'member', '8', '', '8', '', '', 'paddy', 'mustard', '', '', '', 'seasonal vegetables', '', '', '', '', 'duck', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(309, 6, 'satyawati dewraja', 'jiban jyoti', '3861', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'makhan dewraja', 'literate', '62874633', NULL, NULL, '33883773611', 'member', '4', '', '4', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', '', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:08'),
(310, 6, 'arati dewraja', 'jiban jyoti', '3861', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'dharmendra dewraja', 'literate', '6256242', NULL, NULL, '', 'member', '2', '', '2', '1', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', '', '', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(311, 6, 'arpana bordoloi', 'akash', '19164', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'bikram bordoloi', 'literate', '986432935', NULL, NULL, '', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(312, 6, 'mita dewri patar', 'gouri', '95519', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'amar patar', 'literate', '811541211', NULL, NULL, '66667282899', 'member', '1', '', '1', '', '', 'paddy', 'mustard', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(313, 6, 'junu dewraja', 'anshuman', '95523', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'dimbeswar deka', 'literate', '6282727399', NULL, NULL, '874534312631', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(314, 6, 'pabitri bordoloi', 'anshuman', '95523', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'ashok bordoloi', 'literate', '986453893', NULL, NULL, '52557417288', 'member', '9', '', '9', '3.5', '', 'paddy', '', '', '', '', '', '', '', '', '', 'piggery', 'backyard poultry', '', '', '', 'mirika, dhekera', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(315, 6, 'runti bordoloi', 'gouri', '95519', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'putu bordoloi', 'literate', '7896836384', NULL, NULL, '59439881168', 'member', '5', '', '5', '', '', 'paddy', '', '', '', '', 'seasonal vegetables', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(316, 6, 'jugemai dewraja', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'jaydeep deuraja', 'literate', '61484287', NULL, NULL, '95155829383', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(317, 6, 'rashmirekha patar dewraja', 'anshuman', '95523', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'jyotish dewraja', 'literate', '61484287', NULL, NULL, '27264711', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(318, 6, 'beautimoni dekadoloi', 'rani', '19634', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'bhakta dekadoloi', 'literate', '939522972', NULL, NULL, '8312125524', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(319, 6, 'ritamoni dekadoloi', 'lakhmi pagati', '5688', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'khadeswar dekadoloi', 'literate', '9365412384', NULL, NULL, '61872337147', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(320, 6, 'ajmani bordoloi', 'juri', '3859', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'gopal bordoloi', 'literate', '988644547', NULL, NULL, '61899793761', 'member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(321, 6, 'nilima deuraja', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'rajib deuraja', 'literate', '9365248245', NULL, NULL, '3922553922', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'backyard poultry', 'goat', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(322, 6, 'ranjana dewraja', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'shubh dewraja', 'literate', '6932149', NULL, NULL, '42136133974', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', '', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(323, 6, 'sabitra konwar', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'madusudhan konwar', 'literate', '63125228', NULL, NULL, '988618183281', 'member', '3', '', '3', '1', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(324, 6, 'brinda deuraja', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'sumit deuraja', 'literate', '69426144', NULL, NULL, '622364322', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(325, 6, 'purabi dewraja', 'jagaran', '95522', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'sanjay dewraja', 'literate', '62738168', NULL, NULL, '77145479432', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(326, 6, 'patima deuraja', 'ranjani', '5635', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'khagan deuraja', 'literate', '', NULL, NULL, '6954685566', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'piggery', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(327, 6, 'binita dewri', 'ranjani', '5635', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'khanashar dewri', 'literate', '', NULL, NULL, '', 'member', '3', '', '3', '0.5', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'cow', '', '', '', 'mirika, rou', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(328, 6, 'man patar dewraja', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'lakhi kanta dewraja', 'literate', '62725689', NULL, NULL, '84626343636', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'piggery', 'backyard poultry', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(329, 6, 'rinku deuraja', 'jeuti', '417', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'indra deuraja', 'literate', '9365582956', NULL, NULL, '', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'duck', '', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(330, 6, 'suntara bordoloi', 'samanaya', '', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'bipul bordoloi', 'literate', '', NULL, NULL, '', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'backyard poultry', '', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:09'),
(331, 6, 'prabha dewraja', 'nibha jyoti', '', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'phukan dewraja', 'literate', '67795794', NULL, NULL, '58363512692', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'piggery', 'goat', 'cow', '', '', 'silkworm- gamucha, sadar mekhela', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(332, 6, 'rekha dewraja', 'akash', '19164', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'bubu dewraja', 'literate', '', NULL, NULL, '', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(333, 6, 'padma konwar', 'ranjani', '5635', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'adiram konwar', 'literate', '', NULL, NULL, '', 'member', '2', '', '2', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', 'duck', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(334, 6, 'herati gaonkhuwa', 'kolpatarua', '3735', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', 'mantu gaonkhowa', 'literate', '69618296', NULL, NULL, '742232365429', 'member', '5', '', '5', '0.5', '', 'paddy', 'mustard', '', '', '', '', '', '', '', '', 'cow', 'duck', 'goat', '', '', 'glass cup, rohu, mirika, vokua, b ghat etc.', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(335, 7, 'saraswati bordoloi', 'smriti', '5646', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'dilabahar bordoloi', 'ix', '957744138', NULL, NULL, '73784659693', 'general member', '3', '', '3', '1', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'pig', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(336, 7, 'amiya bordoloi', 'modern', '5481', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'binay kumar bordoloi', '1th stand.', '6712548', NULL, NULL, '965857239611', 'general member', '6', '', '6', '4', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(337, 7, 'urbashi bordoloi', 'modern', '5481', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'jiten hazarika', '1th stand.', '94141596', NULL, NULL, '242911268581', 'general member', '7', '', '7', '5', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(338, 7, 'dipali bordoloi', 'junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'binay bordoloi', '1th stand.', '89935931', NULL, NULL, '522251723163', 'general member', '1', '', '1', '1', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'cow', '', '', '', 'local breed carps', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(339, 7, 'rupali bordoloi', 'junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'paruj bordoloi', '', '911434139', NULL, NULL, '672911126431', 'general member', '3', '', '3', '1', '0.5', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'cow', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(340, 7, 'dhanmai bordoloi', 'smriti', '5646', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'padmeswar bordoloi', '', '', NULL, NULL, '27193682697', 'general member', '5', '', '5', '1.2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'cow', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(341, 7, 'junmoni bordoloi', 'sunali', '5462', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'pinku bordoloi', '', '9864665194', NULL, NULL, '34475835943', 'general member', '2.5', '', '2.5', '7', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', 'backyard poultry', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(342, 7, 'janti bordoloi bharali', 'janani', '54', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'ritu moni bharali', 'graduate', '62676962', NULL, NULL, '483767567', 'general member', '5', '', '5', '5', '', 'mustard', '', '', '', '', '', '', '', '', '', 'duck', 'cow', 'backyard poultry', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(343, 7, 'shewali bordoloi', 'janani', '54', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'kantak bordoloi', '8th stand.', '88221258', NULL, NULL, '4788212279', 'general member', '8.5', '', '8.5', '1.2', '', 'maize', 'paddy', '', '', '', 'seasonal vegetables', '', '', '', '', 'cow', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(344, 7, 'nirala bordoloi', 'junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'jadab chandra bordoloi', '1th stand.', '626376932', NULL, NULL, '58339835845', 'general member', '7', '', '7', '1', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', '', '', '', '', 'local breed carps', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(345, 7, 'purabi moran', 'sanjivani', '443', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'seni ram moran', 'graduate', '6693548', NULL, NULL, '327225583855', 'general member', '15', '', '15', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', 'goat', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(346, 7, 'bornali bordoloi', 'junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'lakhidhar bordoloi', '1th stand.', '947744138', NULL, NULL, '97159842392', 'general member', '1', '', '1', '4', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'pig', 'backyard poultry', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(347, 7, 'rajita patar', 'janani', '54', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'hiranya bordoloi', '1th stand.', '986432566', NULL, NULL, '3139518541', 'general member', '1', '', '1', '15', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(348, 7, 'junmoni bordoloi', 'utpal', '5625', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'ranjit bordoloi', '8th stand.', '939522383', NULL, NULL, '65265744754', 'general member', '2', '', '2', '6', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'pig', 'backyard poultry', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(349, 7, 'jinti bordoloi', 'janani', '54', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'budhi bordoloi', '1th stand.', '62992', NULL, NULL, '78531891361', 'executive member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'pig', 'backyard poultry', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(350, 7, 'gauri bordoloi', 'paschim junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'birochan bordoloi', '9th stand', '626376932', NULL, NULL, '5951665887', 'general member', '8', '', '8', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', 'backyard poultry', 'goat', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10');
INSERT INTO `member_panel` (`mid`, `pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `doctype`, `docidno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`, `verifierapprover`, `isrejected`, `isverified`, `isapproved`, `verifydate`, `verifyby`, `rejecteddate`, `approvedate`, `approvedby`, `remarks`, `rejectedby`, `last_updated`) VALUES
(351, 7, 'gafuli bordoloi', 'parishrami', '43', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'prahlad bordoloi', '12th stand.', '72125269', NULL, NULL, '561297459', 'executive member', '5', '', '5', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', 'goat', '', '', 'local breed carps', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(352, 7, 'kabita bordoloi', 'parishrami', '43', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'prahlad bordoloi', 'post graduate', '72125269', NULL, NULL, '49831189385', 'general member', '5', '', '5', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'duck', 'cow', 'goat', '', '', 'local breed carps', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:10'),
(353, 7, 'bhagyawati bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'puranshing bordoloi', '1th stand.', '899918646', NULL, NULL, '55438318512', 'general member', '12', '', '12', '3', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(354, 7, 'subhakanti bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'saki ram bordoloi', '12th stand.', '6212839', NULL, NULL, '8225791583', 'general member', '1', '', '1', '7', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'cow', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(355, 7, 'rupali bodo', 'junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'jyoti prasad deka', 'graduate', '61324216', NULL, NULL, '782483396264', 'general member', '1', '', '1', '6', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'duck', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(356, 7, 'juri bordoloi', 'modern', '5481', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'nabin bordoloi', '9th stand', '8822356349', NULL, NULL, '44173732445', 'general member', '7', '', '7', '3', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'pig', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(357, 7, 'pahita bordoloi', 'mousumi', '44', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'bhadrasing bordoloi', '', '9954114267', NULL, NULL, '34899485139', 'general member', '4', '', '4', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'backyard poultry', 'pig', 'goat', 'cow', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(358, 7, 'barnali bordoloi', 'kanaklata', '41', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'lal bordoloi', '9th stand', '6327352', NULL, NULL, '38361342144', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(359, 7, 'madhumai bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'nalbotia bordoloi', '9th stand', '', NULL, NULL, '', 'general member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(360, 7, 'gulapi bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'hanedhar bordoloi', '8th stand.', '', NULL, NULL, 'ccg157784', 'general member', '4', '', '4', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(361, 7, 'nabanita bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'modhusing bordoloi', '9th stand', '', NULL, NULL, '79138847546', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(362, 7, 'sitamai bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'budheswar bordoloi', '9th stand', '', NULL, NULL, '968585735815', 'general member', '6', '', '6', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(363, 7, 'binu konwar', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'nipen konwar', '7th stand.', '', NULL, NULL, '457343449', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(364, 7, 'bonita bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'putu bordoloi', '3rd stand.', '', NULL, NULL, '542517554547', 'general member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(365, 7, 'bibimai bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'jugeswar bordoloi', '7th stand.', '', NULL, NULL, '76925583773', 'general member', '4', '', '4', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(366, 7, 'jyoti bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'ajay bordoloi', '9th stand', '', NULL, NULL, '84748663169', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(367, 7, 'amleswari bordoloi', 'bishnu jyoti', '384', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'basua bordoloi', '5th stand', '', NULL, NULL, '', 'general member', '2', '', '2', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(368, 7, 'alpana bordoloi', 'mousumi', '44', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'bulen bordoloi', '1th stand.', '', NULL, NULL, '254964875545', 'general member', '6', '', '6', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(369, 7, 'arati bordoloi', 'mousumi', '44', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'maheswar bordoloi', '7th stand.', '', NULL, NULL, '', 'general member', '4', '', '4', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(370, 7, 'dipa konwar', 'sonali', '5462', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'bipin konwar', '5th stand', '', NULL, NULL, '', 'general member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(371, 7, 'karabi bordoloi', 'sonali', '5462', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'tulan bordoloi', '8th stand.', '', NULL, NULL, '', 'general member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:11'),
(372, 7, 'rupanjali bordoloi', 'sonali', '5462', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'guneswar bordoloi', '9th stand', '', NULL, NULL, '', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(373, 7, 'nirada bordoloi', 'janani', '54', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'bankhi bordoloi', '7th stand.', '', NULL, NULL, 'ccg155766', 'general member', '2', '', '2', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(374, 7, 'chan kumari bordoloi', 'janani', '54', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'debojit bordoloi', '1th stand.', '', NULL, NULL, 'ccg158378', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(375, 7, 'sima bordoloi', 'junali', '3638', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'biplob bordoloi', '5th stand', '', NULL, NULL, 'ccg159359', 'general member', '4', '', '4', '', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(376, 7, 'majan bordoloi', 'sunali', '5462', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'akan bordoloi', '6th stand.', '', NULL, NULL, '334721175524', 'general member', '6', '', '6', '1.5', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', 'local breed carps', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(377, 7, 'lakhi prabha bordoloi', 'papori', '115987', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'swadhin bordoloi', '3rd stand.', '', NULL, NULL, 'ccg159268', 'general member', '6', '', '6', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(378, 7, 'podumi bordoloi', 'papori', '115987', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'navajyoti bordoloi', '1th stand.', '', NULL, NULL, '534995428761', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(379, 7, 'upasana bordoloi', 'kanaklata', '41', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'tinku bordoloi', '9th stand', '', NULL, NULL, '857293675142', 'general member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(380, 7, 'bhagya bordoloi', 'papori', '115987', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'prafulla bordoloi', '7th stand.', '', NULL, NULL, 'ccg155562', 'general member', '5', '', '5', '2', '', 'paddy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'local breed carps', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(381, 7, 'anjana bordoloi', 'smriti', '5646', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'abhinash bordoloi', '5th stand', '', NULL, NULL, '27944622462', 'general member', '6', '', '6', '3', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', 'local breed carps', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(382, 7, 'indumoni rajbonshi', 'parishrami', '43', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'bubul rajbonshi', '6th stand.', '', NULL, NULL, '56722688812', 'general member', '5', '', '5', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(383, 7, 'amiya bordoloi', 'modern', '5481', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'chitra bordoloi', '1th stand.', '', NULL, NULL, 'ccg63578', 'general member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(384, 7, 'buli bordoloi', 'parishrami', '43', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', 'babul bordoloi', '3rd stand.', '', NULL, NULL, '787969463152', 'general member', '6', '', '6', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', 'traditional handloom clothes', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:12'),
(385, 10, 'sabita chanda', 'radhika', '', 'tinsukia', 'ratanpur', 'guijan', 'guijan', 'shyamol chanda', 'literate', '799733862', NULL, NULL, '287161', 'member', '3', '', '3', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(386, 10, 'lakhimai hazarika', 'bohagi gut', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', 'rubul kalita', 'literate', '995412461', NULL, NULL, '86948871896', 'member', '3', '', '', '', '', 'paddy', 'mustard', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(387, 10, 'junu deka', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', 'pramud deka', 'literate', '813482662', NULL, NULL, '578763992521', 'member', '2', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(388, 10, 'mina dutta', 'sarada', '164879', 'tinsukia', 'guijan', 'guijan', 'guijan', 'sameer  dutta', 'literate', '799733862', NULL, NULL, '29743938349', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(389, 10, 'rupa chanda rai', 'shyama', '8147', 'tinsukia', 'guijan', 'guijan', 'guijan', 'arup rai', 'literate', '91194742', NULL, NULL, '51337686552', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '2', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(390, 10, 'juma dutta', 'sarada', '72749', 'tinsukia', 'guijan', 'guijan', 'guijan', 'sanjay dutta', 'literate', '619895', NULL, NULL, '632689794163', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(391, 10, 'suparna malakar', 'radhika', '73241', 'tinsukia', 'guijan', 'guijan', 'guijan', 'sujit chandra', 'literate', '911825557', NULL, NULL, '3793222889', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(392, 10, 'mina chandra', 'radhika', '73241', 'tinsukia', 'guijan', 'guijan', 'guijan', 'ajit chandra', 'literate', '62728424', NULL, NULL, '66639922758', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'pig', 'goat', 'poultry', 'duckery', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(393, 10, 'rupanjali deka', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', 'anil deka', 'literate', '9411115', NULL, NULL, '7117886337', 'member', '2', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(394, 10, 'smriti talukdar', 'akakhi tora', '195865', 'tinsukia', 'guijan', 'guijan', 'guijan', 'rinkumoni patra', 'literate', '977471177', NULL, NULL, '49462936146', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', 'areca nut', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(395, 10, 'rekhamoni kalita', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', 'bipul kalita', 'literate', '799733862', NULL, NULL, '72986484881', 'member', '2', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(396, 10, 'ritamoni chanda', 'taniksha', '72755', 'tinsukia', 'guijan', 'guijan', 'guijan', 'bipul chanda', 'literate', '995436566', NULL, NULL, '691629937', 'member', '0.5', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(397, 10, 'mina biswas', 'joya', '78247', 'tinsukia', 'guijan', 'guijan', 'guijan', 'ketuki biswas', 'literate', '62323383', NULL, NULL, '4893972437', 'member', '0.5', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(398, 10, 'purnima das', 'shandro', '', 'tinsukia', 'guijan', 'guijan', 'guijan', 'sujit das', 'literate', '9954449168', NULL, NULL, '73182897727', 'member', '0.5', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:13'),
(399, 10, 'soni kumari', 'jagitri', '', 'tinsukia', 'guijan', 'guijan', 'guijan', 'sujit das', 'literate', '9954672919', NULL, NULL, '698455598735', 'member', '0.5', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(400, 10, 'mina devi', 'joya', '78247', 'tinsukia', 'guijan', 'guijan', 'guijan', 'sujit das', 'literate', '9954672919', NULL, NULL, '2416252829', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(401, 10, 'bina roy', 'akakhi tora', '', 'tinsukia', 'guijan', 'guijan', 'guijan', 'kisu roy', 'literate', '9954932875', NULL, NULL, '9531244596', 'member', '0.5', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(402, 10, 'kalpana biswas', 'joya', '78247', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '9531244596', NULL, NULL, '3683913514', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(403, 10, 'sandhya das', 'tora', '183', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '62642512', NULL, NULL, '4426121654', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(404, 10, 'joya rani das', 'tara', '183', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '811713799', NULL, NULL, '79465398763', 'member', '1', '', '', '', '', '', '', '', '', '', 'vegetables', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(405, 10, 'urmila chand', 'chandra', '', 'tinsukia', 'guijan', 'guijan', 'guijan', 'amal chand', 'literate', '8822596939', NULL, NULL, '', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(406, 10, 'maya shil chandra', 'radhika', '73291', 'tinsukia', 'guijan', 'guijan', 'guijan', 'uttam chandra', 'literate', '6269886', NULL, NULL, '66639922758', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'arecanut', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(407, 10, 'ratan das', 'chandana', '1194', 'tinsukia', 'guijan', 'guijan', 'guijan', 'krishna das', 'literate', '8486816781', NULL, NULL, '57949482754', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', 'goat', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(408, 10, 'bichitra das', 'pranami', '79322', 'tinsukia', 'guijan', 'guijan', 'guijan', 'shayal das', 'illiterate', '811713556', NULL, NULL, '6272663893', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', 'bamboo', '', '', '', '', 'poultry', 'duck', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(409, 10, 'namita sarkar', 'chandana', '1194', 'tinsukia', 'guijan', 'guijan', 'guijan', 'pintu sarkar', 'literate', '811713556', NULL, NULL, '772344822297', 'member', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(410, 10, 'sunena dev', 'pranami', '79322', 'tinsukia', 'guijan', 'guijan', 'guijan krishna para', 'joymoniyal sharma', 'literate', '9957546445', NULL, NULL, '837382657382', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', 'bamboo', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(411, 10, 'sumitra das choudhury', 'hapun', '7283', 'tinsukia', 'guijan', 'guijan', 'guijan santa para', 'rajesh choudhury', 'literate', '81164319', NULL, NULL, '936796847', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(412, 10, 'rudradhori dutta', 'saroda', '72749', 'tinsukia', 'guijan', 'guijan', 'guijan santa para', 'nirajan dutta', 'literate', '977212674', NULL, NULL, '936796847', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(413, 10, 'arati sarkar', 'rhue', '14883', 'tinsukia', 'guijan', 'guijan', 'guijan santa para', 'nirajan dutta', 'literate', '9954328634', NULL, NULL, '765419765465', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', 'arecanut', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(414, 10, 'mamon chakrawati', 'tamiksha', '72755', 'tinsukia', 'guijan', 'guijan', 'guijan', 'bolaya chakrawati', 'literate', '995467168', NULL, NULL, '', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'tea', '', '', '', '', 'poultry', 'duck', 'cattle', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(415, 10, 'karabi das', 'ananda', '9219', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '9411153', NULL, NULL, '729864849918', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'tea', 'banana', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:14'),
(416, 10, 'pakhi rani das', 'radhey', '73291', 'tinsukia', 'guijan', 'guijan', 'guijan', 'ram krishna das', 'literate', '977471177', NULL, NULL, '67964496174', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'bamboo', '', '', '', '', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(417, 10, 'payal das', 'shyama', '8147', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '', NULL, NULL, '26595334445', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'bamboo', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(418, 10, 'shilpa das', 'om', '152317', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '', NULL, NULL, '413591294', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(419, 10, 'ripa das', 'pronami', '79322', 'tinsukia', 'guijan', 'guijan', 'guijan', 'kanak das', 'literate', '78696516', NULL, NULL, '818792346178', 'executive', '0.5', '', '', '', '', 'vegetables', '', '', '', '', 'bamboo', '', '', '', '', 'poultry', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(420, 10, 'sima paul', 'ananda', '9219', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '', NULL, NULL, '9187166832', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(421, 10, 'pinki biswas', 'pronami', '79322', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '689764', NULL, NULL, '27285942731', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(422, 10, 'ranju singh', 'jagriti', '19556', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '8638343581', NULL, NULL, '763985675498', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(423, 10, 'pinki biswas', 'pronami', '79322', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '689764', NULL, NULL, '27285942731', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(424, 10, 'binita sarkar shill', 'ma durga', '93579', 'tinsukia', 'guijan', 'guijan', 'guijan', 'goutam shill', 'literate', '7664972916', NULL, NULL, '93221411771', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(425, 10, 'rupali das', 'moon', '6716', 'tinsukia', 'guijan', 'guijan', 'guijan', 'shymal das', 'literate', '95826664', NULL, NULL, '59334526198', 'member', '', '', '', '', '', 'vegetables', '', '', '', '', 'banana', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(426, 10, 'sabitri das', 'shampa', '6885', 'tinsukia', 'guijan', 'guijan', 'guijan', 'bhulla das', 'literate', '95826664', NULL, NULL, '59334526198', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'banana', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(427, 10, 'shanta devi', 'tara', '183', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '97698489', NULL, NULL, '67586462756', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', 'bamboo', 'lemon', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(428, 10, 'puja kumari sha', 'pronami', '79322', 'tinsukia', 'guijan', 'guijan', 'guijan', 'prohlad sha', 'literate', '9365461', NULL, NULL, '26277187546', 'member', '1', '0.5', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(429, 10, 'sobi das', 'hopun', '7283', 'tinsukia', 'guijan', 'guijan', 'guijan', 'chitro das', 'literate', '6263861', NULL, NULL, '819698369', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(430, 10, 'shandhya das', 'tara', '183', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '62642512', NULL, NULL, '4426121654', 'member', '1', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(431, 10, 'manju deka', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '', NULL, NULL, '689188833', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(432, 10, 'kanaklota deka', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '', NULL, NULL, '695697813763', 'member', '0.5', '', '', '', '', 'vegetables', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(433, 10, 'putoli das', 'tara', '183', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '', NULL, NULL, '34497697432', 'member', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:15'),
(434, 10, 'parul kalita', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', 'ratul kalita', 'literate', '911196726', NULL, NULL, '72277285364', 'member', '1', '', '', '', '', 'vegetable', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(435, 10, 'konaklota deka', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '9954882335', NULL, NULL, '6377964156', 'member', '0.5', '', '', '', '', 'vegetable', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(436, 10, 'mitali deka', 'bohagi', '18774', 'tinsukia', 'guijan', 'guijan', 'guijan', 'jintu deka', 'literate', '', NULL, NULL, '981235313662', 'member', '0.5', '', '', '', '', 'vegetable', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(437, 10, 'dipali das', 'chandra', '164879', 'tinsukia', 'guijan', 'guijan', 'guijan', 'dulal das', 'literate', '8638369', NULL, NULL, '', 'member', '1', '', '', '', '', 'vegetable', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(438, 10, 'mira das', 'bishal', '9352', 'tinsukia', 'guijan', 'guijan', 'guijan', '', 'literate', '9365826522', NULL, NULL, '38787125345', 'member', '0.5', '', '', '', '', 'vegetable', '', '', '', '', '', '', '', '', '', 'poultry', 'duckery', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(439, 10, 'dipali mazumdar', 'ruhi', '14683', 'tinsukia', 'guijan', 'guijan', 'guijan', 'khakan mazumdar', 'literate', '72862628', NULL, NULL, '8188111355', 'member', '5', '', '', '', '', 'vegetable', '', '', '', '', 'tea', 'banana', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(440, 10, 'nikita dev', 'chandra', '164879', 'tinsukia', 'guijan', 'guijan', 'guijan', 'monu dev', 'literate', '786987444', NULL, NULL, '25839841484', 'member', '0.5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'poultry', 'duckery', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(441, 10, 'shandhya pal', 'hopun', '7283', 'tinsukia', 'guijan', 'guijan', 'guijan', 'dilip paul', 'literate', '977284627', NULL, NULL, '', 'member', '1', '', '', '', '', 'vegetable', '', '', '', '', 'cocunut', '', '', '', '', 'poultry', 'duckery', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(442, 10, 'jomun dev', 'parbati', '11567', 'tinsukia', 'guijan', 'guijan', 'guijan', 'subad dev', 'literate', '786987444', NULL, NULL, '27285942731', 'member', '0.5', '', '', '', '', 'vegetable', '', '', '', '', '', '', '', '', '', 'poultry', 'duckery', '', '', '', '', '', '', '', '', '', '', '', '1', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(443, 10, 'namita sarkar', 'chandro', '164879', 'tinsukia', 'guijan', 'guijan', 'guijan', 'pintu sarkar', '', '811713556', NULL, NULL, '772344822247', 'member', '0.5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(444, 9, 'susilla sonowal', 'gunjan', '51454', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'rumar sonowal', 'literate', '9865151132', NULL, NULL, '3443 7579 891', 'member', '1', '', '', '', '', 'rice', '', '', '', '', '', '', '', '', '', 'goat', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(445, 9, 'priti sonowal', 'mokuhi', '51452', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'prabin sonowal', 'literate', '', NULL, NULL, '621917141193', 'member', '2', '', '2', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'goat', 'duck', 'hen', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(446, 9, 'rupali hazarika', 'gunjan mokuhi', '', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'narendra hazarika', 'literate', '', NULL, NULL, '75555743517', 'member', '1', '', '1', '', '', 'rice', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(447, 9, 'labanya sonowal', 'surjyamukhi', '36484', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'emanta sonowal', 'literate', '847382587', NULL, NULL, '92768934324', 'member', '7', '', '7', '', '', 'rice', 'mustard', '', '', '', 'betel nut', '', '', '', '', 'goat', 'pig', 'hen', 'duck', 'cow', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(448, 9, 'jibalata nath', 'jyamoti', '5574', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'bodon nath', 'literate', '9678711468', NULL, NULL, '6797284926', 'member', '1', '', '1', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(449, 9, 'rupama nath', 'jyamoti', '5574', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'pulin nath', 'literate', '81165576', NULL, NULL, '43637343285', 'member', '1', '', '1', '', '', 'rice', '', '', '', '', '', '', '', '', '', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(450, 9, 'papari sonowal', 'handhani', '36228', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'nitin sonowal', 'literate', '691464382', NULL, NULL, '692764675', 'member', '5', '', '5', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(451, 9, 'rumi sonowal', 'dipyoti', '3868', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'norando sonowal', 'literate', '7695866554', NULL, NULL, '53118124574', 'member', '5', '', '5', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'cow', 'goat', 'pig', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(452, 9, 'lalita sonowal', 'handhani', '36228', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'lolit sonowal', 'literate', '63795644', NULL, NULL, '997322757239', 'member', '6', '', '6', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(453, 9, 'rupali sonowal baruah', 'dipyoti', '3868', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'himanta baruah', 'literate', '', NULL, NULL, '852557423889', 'member', '4', '', '4', '', '', 'rice', 'mustard', '', '', '', 'betel nut', '', '', '', '', 'goat', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:16'),
(454, 9, 'renuka sonowal', 'handhani', '36228', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'habit sonowal', 'literate', '63156653', NULL, NULL, '83391921449', 'member', '4', '', '4', '', '', 'rice', 'mustard', '', '', '', 'betel nut', '', '', '', '', 'goat', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(455, 9, 'kumoda saikia', 'moukuhi', '51452', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'jiten saikia', 'literate', '', NULL, NULL, '722765876825', 'member', '5', '', '5', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'goat', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(456, 9, 'kunjalata deuraja', 'milanjyoti pakhupalon', '5578', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'sunil deuraja', 'literate', '62285837', NULL, NULL, '6297132952', 'member', '1', '', '1', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(457, 9, 'manati nath', 'milanjyoti pakhupalon', '5578', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'madhu nath', 'literate', '6918137', NULL, NULL, '7972872742', 'member', '2', '', '2', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(458, 9, 'smita abhayapuria nath', 'sammony', '11513', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'bonit nath', 'literate', '9265235633', NULL, NULL, '689825285845', 'member', '2', '', '2', '', '', 'rice', '', '', '', '', '', '', '', '', '', 'hen', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(459, 9, 'joymoti nath sonowal', 'gunjan', '51454', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'rajani sonowal', 'literate', '69175356', NULL, NULL, '36268675412', 'member', '4', '', '4', '', '', 'rice', 'sesame', '', '', '', 'betel nut', '', '', '', '', 'hen', 'duck', 'goat', 'pig', '', '', '', '', 'goat', 'goat', '1kg', 'rs 6', 'rs 46', 'rs 46', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(460, 9, 'pinki borgohain sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'humal sonowal', 'literate', '995713436', NULL, NULL, '32489993343', 'member', '7', '', '7', '', '', 'rice', 'sesame', 'mustard', 'pulses', '', 'betel nut', '', '', '', '', 'hen', 'duck', 'goat', 'pig', 'duck', 'row, kamalcap, grasscap', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(461, 9, 'papari sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'manuranjan sonowal', 'literate', '81355192', NULL, NULL, '754221288749', 'member', '3', '', '3', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'duck', 'goat', 'pig', '', 'row, kamalcap', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(462, 9, 'anukha sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'gupal sonowal', 'literate', '786229333', NULL, NULL, '44677565586', 'member', '8', '', '8', '', '', 'rice', 'mustard', '', '', '', '', '', '', '', '', 'hen', 'goat', 'duck', '', '', 'row', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(463, 9, 'archana sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'hirakanta sonowal', 'literate', '8135956185', NULL, NULL, '87465821924', 'member', '4', '', '4', '', '', 'rice', 'mustard', '', '', '', 'betelnut', '', '', '', '', 'goat', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(464, 9, 'junali sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'ananda sonowal', 'literate', '8638394479', NULL, NULL, '41145552143', 'member', '2', '', '2', '', '', 'rice', 'mustard', '', '', '', 'betelnut', '', '', '', '', 'hen', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(465, 9, 'krishna sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'padma sonowal', 'literate', '856959449', NULL, NULL, '476588467438', 'member', '3', '', '3', '', '', 'rice', 'mustard', '', '', '', 'betelnut', '', '', '', '', 'hen', 'cow', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(466, 9, 'anamika sonowal', 'sammony', '11513', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'mukunadra sonowal', 'literate', '61555', NULL, NULL, 'kmjps2925d', 'member', '3', '', '3', '', '', 'rice', '', '', '', '', '', '', '', '', '', 'hen', 'pig', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(467, 9, 'martina duwarah hazarika', 'sammony', '11513', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'arun hazarika', 'literate', '811493673', NULL, NULL, '49778342494', 'member', '2', '', '2', '', '', 'rice', '', '', '', '', '', '', '', '', '', 'hen', 'duck', 'goat', 'pig', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(468, 9, 'mridula borah', 'jyamoti', '5574', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'krishna baruah', 'literate', '6151345', NULL, NULL, '4573956916', 'member', '1', '', '1', '', '', 'rice', 'mustard', '', '', '', 'betel nut', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(469, 9, 'junmoni hazarika', 'surjyamukhi', '36484', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'jatindra hazarika', 'literate', '62485621', NULL, NULL, '289486638717', 'member', '4', '', '4', '', '', 'rice', 'mustard', '', '', '', 'potato', '', '', '', '', 'hen', 'pig', 'goat', 'duck', '', 'kamalcap, grasscap', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(470, 9, 'manjula sonowal', 'manakhi', '11521', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'manindra sonowal', 'literate', '6169832', NULL, NULL, '972618277', 'member', '1', '', '1', '', '', 'rice', 'mustard', '', '', '', 'betel nut', 'potato', '', '', '', 'hen', 'cow', 'goat', 'pig', 'duck', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(471, 9, 'bornali sonowal', 'sandhoni', '36228', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'mojin sonowal', 'literate', '61248837', NULL, NULL, '93295299269', 'member', '1', '', '1', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'duck', 'goat', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(472, 9, 'banti nath', 'joymoti', '5574', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'thoneswar nath', 'literate', '81165576', NULL, NULL, '9827619324', 'member', '1', '', '1', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(473, 9, 'kunjolata sonowal nath', 'gunjan', '51454', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'khagen borah sonowal', 'literate', '799891173', NULL, NULL, '44214183636', 'member', '3', '', '3', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', 'hen', 'cow', 'goat', 'duck', 'pig', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(474, 9, 'babi nath', 'joymoti', '5574', 'tinsukia', 'sadiya', 'bura buri', 'ratanpur', 'dipak nath', 'literate', '8822391318', NULL, NULL, '426571831664', 'member', '2', '', '2', '', '', 'rice', '', '', '', '', 'betel nut', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(475, 9, 'sabitri nath', 'sammony', '11513', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'prafulla nath', 'illiterate', '977613478', NULL, NULL, '458 167 5317', 'member', '2', '', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'cow', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:17'),
(476, 9, 'hiranya borah bhuyan', 'moukuhi', '51452', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'dhan bhuyan', 'illiterate', '8471977235', NULL, NULL, '9654 3339 4138', 'member', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'poultry', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18');
INSERT INTO `member_panel` (`mid`, `pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `doctype`, `docidno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`, `verifierapprover`, `isrejected`, `isverified`, `isapproved`, `verifydate`, `verifyby`, `rejecteddate`, `approvedate`, `approvedby`, `remarks`, `rejectedby`, `last_updated`) VALUES
(477, 9, 'jina sonowal', 'sammony', '11513', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'dipan sonowal', 'illiterate', '995461342', NULL, NULL, '391 63 963', 'member', '5', '', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(478, 9, 'hiramoni borah', 'sammony', '11513', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'biddut phukan', 'illiterate', '953136522', NULL, NULL, '3731 3118 885', 'member', '1', '', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'poultry', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(479, 9, 'sunita nath', 'sammony', '11513', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'hari nath', 'illiterate', '9678698916', NULL, NULL, '6424 581 1347', 'member', '3', '', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'poultry', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(480, 9, 'riju moni nath', 'sammony', '11514', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'ananda nath', 'illiterate', '9678711468', NULL, NULL, '8521 7814 7722', 'member', '1', '', '', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'poultry', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(481, 9, 'jonali sonowal', 'junja', '51454', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'prabin sonowal', 'illiterate', '847194322', NULL, NULL, '2397 9259 6871', 'member', '1', '', '1', '', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(482, 9, 'kakumoni sonowal', 'manakhi', '11521', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'sushil sonowal', 'literate', '9678772532', NULL, NULL, '44 3236 3412', 'member', '6', '', '', '', '0.5', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'hen', 'goat', 'pig', 'cow', 'duck', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(483, 9, 'brindawali hazarika', 'joymoti', '5574', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'harendra hazarika', 'illiterate', '7636923924', NULL, NULL, '6933 5597 7865', 'member', '1', '', '1', '', '', 'paddy', 'pea', 'mustard', 'pulses', '', '', '', '', '', '', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(484, 9, 'subanti nath', 'joymoti', '5574', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'rabin nath', 'illiterate', '691793944', NULL, NULL, '9876 9222 612', 'member', '1', '', '1', '', '', 'paddy', 'mustard', '', '', '', 'areca nut', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(485, 9, 'karabi hazarika', 'joymoti', '5575', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'nonda hazarika', 'illiterate', '72545471', NULL, NULL, '4634 45 5889', 'member', '3', '', '', '', '', 'paddy', '', '', '', '', 'areca nut', '', '', '', '', 'goat', 'cow', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(486, 9, 'promila saikia', 'moukuhi', '51452', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'bapukan saikia', 'illiterate', '813553918', NULL, NULL, '3349 986 44', 'member', '3', '', '3', '', '', 'paddy', 'mustard', '', '', '', 'areca nut', '', '', '', '', 'goat', 'pig', 'duck', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(487, 9, 'purnima nath', 'milanjyoti', '5578', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'raju nath', 'illiterate', '8822411279', NULL, NULL, '3658 7291 1512', 'member', '3', '', '', '', '', 'paddy', '', '', '', '', 'areca nut', '', '', '', '', 'goat', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(488, 9, 'sumi sonowal', 'surajmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'kumud sonowal', 'illiterate', '88226556', NULL, NULL, '5896 969 4847', 'member', '1', '', '1', '', '', 'paddy', 'mustard', '', '', '', 'areca nut', '', '', '', '', 'goat', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(489, 9, 'diparani borah sonowal', 'gunjan', '51454', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'rajan sonowal', 'illiterate', '62738586', NULL, NULL, '51 4244 951', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'pig', 'duck', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(490, 9, 'narmada sonowal', 'moukuhi', '11521', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'huban sonowal', 'illiterate', '88226556', NULL, NULL, '5313 3637 995', 'member', '1', '', '1', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'goat', 'pig', 'duck', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(491, 9, 'pariti gogoi sonowal', 'surajmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'jiban sonowal', 'literate', '939526946', NULL, NULL, '467 2165 9958', 'member', '1', '', '1', '', '', 'paddy', 'mustard', 'pulses', '', '', 'arecanut', '', '', '', '', 'goat', 'cow', 'duck', 'hen', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:18'),
(492, 9, 'rijumoni borgohain', 'surajmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'hemehondra boruah', 'illiterate', '799733862', NULL, NULL, '8492 212 2315', 'member', '3', '', '3', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'goat', 'hen', 'duck', 'pig', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(493, 9, 'chayanika sonowal', '', '', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'binondra sonowal', 'illiterate', '617954', NULL, NULL, '396 583 5824', 'member', '4', '', '4', '', '1', 'paddy', 'mustard', 'banana', '', '', '', '', '', '', '', 'goat', 'hen', 'duck', 'cow', 'pig', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(494, 9, 'dipa borah', 'moukuhi', '51452', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'dharani borah', 'illiterate', '799185249', NULL, NULL, '461 9237 754', 'member', '7', '', '7', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'goat', 'hen', 'duck', 'cow', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(495, 9, 'shanti nath', 'sammony', '11513', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'gulap nath', 'illiterate', '847397482', NULL, NULL, '877 1937 1623', 'member', '3', '', '', '', '', 'paddy', 'potato', '', '', '', 'arecanut', '', '', '', '', 'goat', 'hen', 'cow', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(496, 9, 'rijumoni borgahain', 'swasmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'hemchandra boruah', 'illiterate', '799733862', NULL, NULL, '84922122315', 'member', '3', '', '3', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'pig', 'goat', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(497, 9, 'lakhima nath', 'joymoti', '5574', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'tapan nath', 'illiterate', '9678433925', NULL, NULL, '4919 4179 3566', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(498, 9, 'jahnabi saikia', 'surajmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'khirud saikia', 'illiterate', '99571 31988', NULL, NULL, '4817 571 163', 'member', '2', '', '2', '', '', 'paddy', 'pea', 'pulses', 'mustard', '', 'arecanut', '', '', '', '', 'goat', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(499, 9, 'ranjita nath', 'surajmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'anil nath', 'illiterate', '62153961', NULL, NULL, '8621 665 6417', 'member', '2', '', '2', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(500, 9, 'bhagyawoti sonowal', 'surajmukhi', '36484', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'diganta sonowal', '', '786383441', NULL, NULL, '7187 4919 4341', 'member', '3', '', '3', '', '', 'paddy', '', '', '', '', '', '', '', '', '', 'goat', 'pig', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(501, 9, 'manika sonowal', 'junja', '51454', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'pabitra sonowal', '', '8761937874', NULL, NULL, '462 417 3378', 'member', '2', '', '2', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'hen', 'pig', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(502, 9, 'pingi saikia', 'moukuhi', '51452', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'rajoni sonowal', '', '81149453', NULL, NULL, '854 1947 4964', 'member', '2', '', '2', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'hen', 'pig', 'goat', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(503, 9, 'kandu bora', 'moukuhi', '51452', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'jugal bora', '', '8133822812', NULL, NULL, '9878 3725 1323', 'member', '4', '', '', '', '', 'paddy', '', '', '', '', 'arecanut', '', '', '', '', 'goat', 'hen', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(504, 9, 'champa saikia', 'moukuhi', '51452', 'tinisukia', 'sadiya', 'bura buri', 'ratanpur', 'sununda saikia', '', '8472873948', NULL, NULL, '319 6776 3527', 'member', '3', '', '', '', '', 'paddy', 'mustard', '', '', '', 'arecanut', '', '', '', '', 'goat', 'hen', 'poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:23:19'),
(531, 10, 'Dibru Member 1', 'DibruMemSHG', 'SHGDibru1', 'dhemaji', 'dhemaji', 'naruathan', 'rotuwa nepali khuti', 'Hareshbhai', 'Literate', '8866718265', NULL, NULL, 'others', 'test', '1', '2', '4', '5', '6', 'bajra', 'sunflower (beliful)', 'pulses/lentil (mahor dail)', 'pea (motor)', 'masur (mosoor dail)', 'banana', 'carambola (kordoi)', NULL, 'rabab tenga', 'thekera', 'buffalo (moah)', 'buffalo (moah)', 'sheep (bhera)', 'sheep (bhera)', 'pig (gahori)', 'indian longfin eel (nadarbami)', 'paat', '', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 06:50:03'),
(536, 17, 'Jyoti Gogoi', 'Rupantor', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Biren Gogoi', 'Illiterate', '9394410494', NULL, NULL, 'others', 'member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 08:32:36'),
(542, 17, 'Jyoti Gogoi', 'Rupantor', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Biren Gogoi', 'Illiterate', '9394410494', NULL, NULL, 'others', 'member', '4', '0', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'carrot (gajor)', 'bitter gourd (tita kerela)', NULL, 'bottle gourd (lau)', 'french bean', 'backyarad poultry', 'pig (gahori)', '', '', '', '', '', '', '', '', '', '', '10000', '10082', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 08:46:48'),
(545, 12, 'BINITA DAS KOCH', 'Uttar Nagaon ', '73742', 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', 'Pradip Koch', 'Literate', '8822896558', NULL, NULL, 'others', 'Secretary', '12', '8', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'patato (aloo)', '', NULL, '', '', 'goat (sagoli)', 'cow (goru)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '2000', '1500', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 08:46:59'),
(547, 16, 'Anamika Pegu', 'WDC Jetuka women  SHG', '223321', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Jyotish Pegu', 'Literate', '6002230020', NULL, NULL, 'others', 'Member', '6', '0', '6', '0', '0', 'paddy (dhaan)', '', '', '', '', 'ginger (adda)', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:00:52'),
(548, 17, 'Jayaboti Sonowal ', 'Rupantar', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Drunadeep Gogoi', 'Literate', '8880582005', NULL, NULL, 'others', 'Member', '3', '0', '3', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'pig (gahori)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:07:31'),
(549, 14, 'Riyajun Begum Laskar', 'Jibon Shanti SHG', '243004', 'hailakandi', 'katlicherra', 'dholai-molai', 'dholai-molai', 'Kalam Uddin', 'Literate', '7636077496', NULL, NULL, 'others', 'Member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:08:21'),
(550, 13, 'Kanika Banik', 'Pub Sowalani Babatukanath SHG', '255782', 'nagaon', 'laokhowa', 'ambagan', NULL, 'Aatal Banik', 'Literate', '7637844944', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'pointed gourd (potol)', 'mango (aam)', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:13:16'),
(551, 14, 'Riyajun Begum Laskar', 'Jibon Shanti SHG', '243004', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Kalam Uddin', 'Literate', '7636077496', NULL, NULL, 'others', 'Member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:11:00'),
(552, 12, 'AMBIKA DAS', 'UTTAR NAGAON JEUTI JEEVIKA SHG ', '73742', 'udalguri', 'mazbat', 'naoherua', NULL, 'BHASKAR DEKA', 'Literate', '6001894928', NULL, NULL, 'others', 'Member ', '10', '6', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', '', NULL, '', '', 'goat (sagoli)', 'cow (goru)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:26:07'),
(553, 14, 'Riyajun Begum Laskar', 'Jibon Shanti SHG', '243004', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Kalam Uddin', 'Literate', '7636077496', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:16:59'),
(554, 13, 'Bina Ray', 'Pushpanjali SHG', '91342', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Dushanta Ray', 'Literate', '9954744984', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:21:38'),
(555, 16, 'Jushna Pegu', 'Karsang SHG', '263570', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Mondeswar Pegu', 'Literate', '9864403099', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:22:11'),
(556, 14, 'Malika Begum', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Harun Rasid', 'Illiterate', '8472901796', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:24:41'),
(557, 13, 'Shipra Mandal', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Luknath Mandal', 'Literate', '8473923589', NULL, NULL, 'others', 'Secretary', '3', '3', '0', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:32:05'),
(558, 16, 'Dipamoni pegu', 'Karsang SHG', '263570', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Suresh Pegu', 'Literate', '6003301838', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'ginger (adda)', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', '', '', '', '', '', '', 'Pig', '1', '18000', '18000', '18000', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:27:28'),
(559, 14, 'Jahanara Begum', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Jahanara Begum', 'Literate', '7637917621', NULL, NULL, 'others', 'President', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', '', '', '', 'others', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:35:31'),
(560, 17, 'Jyostna Gogoi', 'Rupantor', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Krishna kanta gogoi', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '4', '0', '4', '0', '0', '', '', '', '', '', 'bottle gourd (lau)', 'bitter gourd (tita kerela)', NULL, 'sponge gourd (bhol)', 'ridge gourd (jika)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:32:10'),
(562, 17, 'Jyotimoi Gogoi', 'Rupantor', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Hemen Gogoi', 'Literate', '9394410494', NULL, NULL, 'others', 'Member', '5', '0', '5', '0', '0', 'paddy (dhaan)', '', '', '', '', 'tea (saah)', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:37:23'),
(565, 13, 'Parul Ray', 'Pushpanjali SHG', '91342', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Chitra Ray', 'Illiterate', '6900082440', NULL, NULL, 'others', 'Member', '2', '0', '2', '5', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', 'cow (goru)', '', '', '', '', 'catla (bahu)', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:41:17'),
(566, 17, 'Ilaboti Gohain', 'Rupantor', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Lt Jibon Gohain', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '5', '0', '5', '0', '0', 'paddy (dhaan)', '', '', '', '', 'tea (saah)', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:40:18'),
(567, 14, 'Anwara Bibi', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Ayaj Uddin', 'Illiterate', '9707266843', NULL, NULL, 'others', 'Member', '1', '1', '0', '0', '0', 'paddy (dhaan)', '', '', '', '', 'areca nut (tamul)', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:42:47'),
(568, 16, 'Alila Laung', 'Jaymaguri Seuji SHG', '223328', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Subash Lalung', 'Literate', '6000377747', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'turmeric (halodhi)', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:46:27'),
(569, 13, 'Bina Mandal', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Minanath Mandal', 'Literate', '6000207310', NULL, NULL, 'others', 'Member', '3', '0', '3', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'pointed gourd (potol)', '', NULL, '', '', 'cow (goru)', 'layer hen', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:48:45'),
(570, 14, 'Rahima Bibi', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Sayar Ali', 'Illiterate', '9954048430', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'pumkin ( ronga lau)', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:49:03'),
(571, 14, 'Alimun Nessa', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Romis Uddin', 'Illiterate', '8472046058', NULL, NULL, 'others', 'Member', '3', '1', '0', '1', '0', 'paddy (dhaan)', '', '', '', '', 'tomato (bilahi)', 'patato (aloo)', NULL, 'areca nut (tamul)', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', 'others', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:54:59'),
(572, 13, 'Tapashi Ray', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Gopal Ray', 'Literate', '6000787007', NULL, NULL, 'others', 'Member', '4', '4', '0', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'ridge gourd (jika)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:55:45'),
(573, 17, 'Ranjita Bora Gohain', 'Rupantor', '116233', 'tinsukia', 'itakhuli', 'laipuli', NULL, 'Debojit Gohain', 'Literate', '600046449', NULL, NULL, 'others', 'Member', '4', '0', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'tea (saah)', 'bitter gourd (tita kerela)', NULL, 'cabbage (bondhakobi)', 'gerlic (nohoru)', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 09:58:19'),
(574, 13, 'Mamata Mandal', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Subrat Mandal', 'Literate', '9613302740', NULL, NULL, 'others', 'Member', '15', '15', '0', '5', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'pointed gourd (potol)', '', NULL, '', '', 'cow (goru)', 'duck', '', '', '', 'catla (bahu)', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:00:05'),
(575, 16, 'Jutima Taye', 'Polo SHG', '223322', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Dhoneswar Chintey', 'Literate', '6000377747', NULL, NULL, 'others', 'President', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'ginger (adda)', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', '', '', '', '', '', '', 'Pig', '1', '20000', '20000', '20000', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:01:15'),
(576, 17, 'Bobita Gohain', 'Rupantar', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Hemkanta Gogoi', 'Literate', '9395648329', NULL, NULL, 'others', 'Member', '4', '0', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'tea (saah)', 'bottle gourd (lau)', NULL, 'bitter gourd (tita kerela)', 'cabbage (bondhakobi)', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:01:44'),
(577, 13, 'Mayarani Mandal', 'Pushpanjali SHG', '91342', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Raja Kanta Mandal', 'Literate', '8011251700', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'ridge gourd (jika)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:05:01'),
(578, 17, 'Anamika Gohain', 'Tora', '267041', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Anupjyoti Gohain', 'Illiterate', '8880582005', NULL, NULL, 'others', 'Member', '6', '0', '6', '0', '0', 'paddy (dhaan)', '', '', '', '', 'tea (saah)', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:05:46'),
(579, 16, 'Jutima Taye', 'Polo SHG', '223322', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Jiteswar Taye', 'Literate', '6003565693', NULL, NULL, 'others', 'Member', '4', '0', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:05:25'),
(580, 17, 'Bhanu Bogohain', 'Tora', '267041', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Jayanta Gogoi', 'Illiterate', '8880582005', NULL, NULL, 'others', 'Member', '6', '0', '6', '0', '0', 'paddy (dhaan)', '', '', '', '', 'areca nut (tamul)', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:08:31'),
(581, 16, 'Monika Lalung', 'A/c Twa SHG', '263336', 'dhemaji', 'mstd', 'jonai', 'joimaguri', 'Kamal Lalung', 'Literate', '6000377747', NULL, NULL, 'others', 'Secretary', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'pig (gahori)', 'backyarad poultry', '', '', '', '', '', '', 'Pig', '1', '18000', '18000', '18000', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:10:09'),
(582, 13, 'Suma Mandal', 'Diya SHG', '91447', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Harish Mandal', 'Literate', '9101976953', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:10:26'),
(583, 17, 'Niru Gogoi', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Duleshwar Gogoi', 'Illiterate', '9395648329', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:12:12'),
(584, 17, 'Moromi Gogoi', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Numal  Gogoi', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:15:15'),
(586, 17, 'Kalpana Gogoi', 'Suroj', '116409', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Pulok Gogoi', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:19:14'),
(587, 13, 'Pinky Chakraborty', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Babul Chakraborty', 'Literate', '9706233296', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:23:54'),
(588, 17, 'Moloya Chutia', 'Bordoishila', '102073', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Nipen Chutia', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:22:13'),
(589, 17, 'Rajumoni Gohain', 'Junak', '200235', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Lt Madhab Gohain', 'Illiterate', '9395648329', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'pig (gahori)', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:27:28'),
(590, 13, 'Mamata Mandal', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Kulacharan Mandal', 'Literate', '9678601135', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '5', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', 'duck', '', '', 'rohu (rau)', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:29:26'),
(591, 17, 'Tiluprobha', 'Junak', '200235', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Manoj Baruah', 'Illiterate', '7896097756', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'pig (gahori)', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:32:06'),
(592, 13, 'Pampi Mandal', 'Drub SHG', '109331', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Tapan Chakraborty', 'Literate', '7636801254', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:32:46'),
(593, 17, 'Jyotimoni Phukon', 'Rupantar', '116233', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Tikendrajit Gogoi', 'Literate', '7896097756', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'pig (gahori)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:34:54'),
(594, 13, 'Rakhi Aich', 'Anusuchit Jati SHG', '4210', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Ajay Aich', 'Literate', '8876389306', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', 'jute (mora paat)', '', '', '', '', 'pumkin ( ronga lau)', 'mango (aam)', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:39:35'),
(595, 17, 'Jun Baruah', 'Tora', '267041', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Nobojoti Gohain', 'Literate', '8638287920', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', 'tea (saah)', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:44:54'),
(596, 13, 'Jaya Biswas', 'Anusuchit Jati SHG', '4210', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Sapan Biswas', 'Literate', '9085392356', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'jute (mora paat)', '', '', '', '', 'pointed gourd (potol)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:49:44'),
(597, 17, 'Ranjumoni Chetia', 'Suroj', '116409', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', 'Swapno  Chetia', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '3', '0', '3', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 10:53:29'),
(599, 13, 'Marami Banik', 'Anusuchit Jati SHG', '4210', 'nagaon', NULL, NULL, NULL, 'Prantush Banik', 'Literate', '8812094694', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'pea (motor)', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:01:41'),
(600, 14, 'Sorupjan Bibi', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'LT. Furkan Ali', 'Illiterate', '6003025517', NULL, NULL, 'others', 'Member', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:02:20'),
(601, 13, 'Bipula Mandal', 'Anusuchit Jati SHG', '4210', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'SreeKanta Mandal', 'Literate', '9707326559', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'radish (mula)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:07:37'),
(602, 13, 'JabaRani Mandal Das', 'Trishna SHG', '91337', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Dananjay Das', 'Literate', '8822785986', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', 'oil seed (xoriyo)', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:11:18'),
(603, 13, 'Uma Banik', 'Priti SHG', '100520', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Sakti Banik', 'Literate', '8404016530', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', 'mango (aam)', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:16:30'),
(604, 14, 'Amina Begum', 'Malika', '287043', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Alta Hussain', 'Illiterate', '8134026065', NULL, NULL, 'others', 'Member', '3', '2', '0', '1', '0', 'paddy (dhaan)', '', '', '', '', 'areca nut (tamul)', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:23:37'),
(606, 13, 'Hira Banik', 'Baba Lukanath SHG', '255782', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Sukumar Banik', 'Literate', '8876273351', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 11:55:22'),
(607, 13, 'Nayanmoni Debnath', 'Jaygun SHG', '4670', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Gauttam Debnath', 'Literate', '8822580402', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 12:00:42'),
(608, 13, 'Amena Khatun', 'Nayan Moni SHG', '255550', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Baharul Islam', 'Literate', '9864035294', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'spine gourd (bhat kerela)', 'mango (aam)', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 12:05:58'),
(609, 13, 'Manshikha Banik', 'Santishuda SHG', '35321', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Monoranjan Banik', 'Literate', '9678277050', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 12:09:49'),
(610, 13, 'Alaka Banik', 'Santishuda SHG', '35321', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Subal Banik', 'Literate', '6002858161', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'bitter gourd (tita kerela)', 'banana', NULL, 'mango (aam)', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 12:14:24'),
(611, 13, 'Sefali Chakrabarti', 'Santishuda SHG', '35321', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Palash Chakrabarti', 'Literate', '8822386574', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'bitter gourd (tita kerela)', 'mango (aam)', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 05:19:41'),
(612, 13, 'Mina Mandal', 'Santishuda SHG', '35321', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Narish Mandal', 'Literate', '8876052864', NULL, NULL, 'others', 'President', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'pulses/lentil (mahor dail)', '', '', '', 'lettuce (lai xak)', '', NULL, '', '', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 05:27:56'),
(613, 13, 'Rimpi Sarkar', 'Ashirbath SHG', '4818', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Nilajit Sarkar', 'Literate', '6901626822', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 05:32:21'),
(614, 13, 'Rekha Paul', 'Ashirbath SHG', '4818', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Dilip Paul', 'Literate', '8472029258', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 05:45:48'),
(615, 13, 'Alaka Dhar', 'Ashirbath SHG', '4818', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Bipul Dhar', 'Literate', '7663014148', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'mango (aam)', '', NULL, '', '', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 05:48:42'),
(616, 13, 'Sufia Khatun', 'Asom Pragati', '3479', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Abdul Rasid', 'Literate', '8099197207', NULL, NULL, 'others', 'Member', '3', '0', '3', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'spine gourd (bhat kerela)', '', NULL, '', '', 'cow (goru)', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 05:53:37'),
(617, 13, 'Kunja Rani Banik', 'Santishuda SHG', '35321', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Sunil Banik', 'Literate', '6003848159', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 06:46:06'),
(618, 13, 'Hamida Khatun', 'Nayan Moni SHG', '255550', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Ibrahim Ali', 'Literate', '8761951287', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'ash gourd(kumoora)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 07:00:06'),
(619, 13, 'Rupali Das Mandal', 'Anusuchit Jati SHG', '4210', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Mridul Mandal', 'Literate', '6001558431', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', 'jute (mora paat)', '', '', '', '', 'bottle gourd (lau)', 'mango (aam)', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 07:09:20'),
(620, 13, 'Sefali Mandal', 'Kallyani SHG', '285929', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Sukumar Mandal', 'Literate', '6001021096', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'french bean', 'radish (mula)', NULL, 'jackfruit (kathol)', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 07:16:48'),
(621, 13, 'Shibani Das', 'Kallyani SHG', '285929', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Makhan Das', 'Literate', '6000766360', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'pumkin ( ronga lau)', 'mango (aam)', NULL, '', '', 'cow (goru)', 'duck', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 07:22:34'),
(622, 13, 'Karuna Malik Das', 'Mandira SHG', '253652', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Subal Das', 'Literate', '6000776360', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'cow (goru)', 'duck', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 07:27:40'),
(623, 13, 'Dipali Banik', 'Baba Lukanath SHG', '255782', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Sadan Banik', 'Literate', '7577026218', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', 'mango (aam)', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:07:38'),
(624, 13, 'Ujjala Bhugan', 'Baba Lukanath SHG', '255782', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Kanai Biswas', 'Literate', '6003303291', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', 'pumkin ( ronga lau)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:17:47'),
(625, 13, 'Minati Barman', 'Jaymaa SHG', '107530', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Babul Barman', 'Literate', '9366775059', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:24:56'),
(626, 13, 'Sumki Haldar Saikia', 'Ma Saraswati SHG', '290789', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Prabin Saikia', 'Literate', '6002190156', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'pointed gourd (potol)', '', NULL, '', '', 'goat (sagoli)', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:29:55'),
(627, 13, 'Anita Rani Sarkar', 'Chandra Mallika', '4902', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', 'Susen Sarkar', 'Literate', '8724094664', NULL, NULL, 'others', 'Member', '3', '0', '3', '1', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'mango (aam)', '', NULL, '', '', '', '', '', '', '', 'rohu (rau)', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:33:19'),
(628, 13, 'Kanchan Bhuyan', 'Prabath SHG', '78749', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Jugesh Bhuyan', 'Literate', '7896610907', NULL, NULL, 'others', 'Member', '5', '0', '5', '0', '0', 'paddy (dhaan)', '', '', '', '', 'pointed gourd (potol)', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:37:57'),
(629, 13, 'Firuja Khatun', 'Nayan Moni SHG', '255550', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Khud Ali', 'Literate', '6003654790', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', 'mango (aam)', NULL, '', '', 'cow (goru)', 'goat (sagoli)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:45:41'),
(630, 13, 'Aleka Khatun', 'Junaki SHG', '108434', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Abdul Malek', 'Literate', '863855729', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'tapica (kosu)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 08:51:11'),
(631, 13, 'Rahima Khatun', 'Junaki SHG', '108434', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Abdullah', 'Literate', '7638040192', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'mango (aam)', '', NULL, '', '', 'goat (sagoli)', 'layer hen', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:08:37'),
(632, 13, 'Majeda Khatun', 'Junaki SHG', '108434', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Rasid', 'Literate', '8099197225', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'mango (aam)', '', NULL, '', '', 'duck', 'layer hen', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:12:13'),
(634, 13, 'Farida Khatun', 'Junaki SHG', '108434', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Eusuf Ali', 'Literate', '8134866986', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'mango (aam)', '', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:28:55'),
(635, 13, 'Sumitra Barman', 'Nibedita SHG', '4749', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Rameshar Barman', 'Literate', '9366775059', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', 'french bean', '', NULL, '', '', 'cow (goru)', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:40:13'),
(636, 13, 'Champa Biswas Mallik', 'Ashirbath SHG', '4818', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Dhananjay Mallik', 'Literate', '6901626822', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'jackfruit (kathol)', '', NULL, '', '', 'goat (sagoli)', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:44:50');
INSERT INTO `member_panel` (`mid`, `pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `doctype`, `docidno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`, `verifierapprover`, `isrejected`, `isverified`, `isapproved`, `verifydate`, `verifyby`, `rejecteddate`, `approvedate`, `approvedby`, `remarks`, `rejectedby`, `last_updated`) VALUES
(637, 13, 'Anjana Das Sarkar', 'Ashirbath SHG', '4818', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Mintu Sarkar', 'Literate', '9954842136', NULL, NULL, 'others', 'Member', '5', '0', '5', '1', '0', 'paddy (dhaan)', '', '', '', '', 'jackfruit (kathol)', '', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', 'silver carp', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:48:16'),
(638, 13, 'Khama Choudhuni', 'Mandira SHG', '253652', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Bijay Choudhuri', 'Literate', '6901694197', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'lettuce (lai xak)', 'jackfruit (kathol)', NULL, '', '', 'layer hen', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 09:53:44'),
(639, 13, 'Soma Mallik', 'Mandira SHG', '253652', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Addaitta Mallik', 'Literate', '9864492799', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'jackfruit (kathol)', 'ladies finger(bhendi)', NULL, '', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:16:36'),
(640, 13, 'Junu Dutt', 'Santishuda SHG', '35321', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Rabi Dutt', 'Literate', '6003303291', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', '', '', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:20:03'),
(641, 13, 'Mamataj Begum', 'Asom Pragati SHG', '3479', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Allal Uddin', 'Literate', '6002774273', NULL, NULL, 'others', 'Member', '7', '0', '7', '1', '0', 'paddy (dhaan)', 'jute (mora paat)', '', '', '', 'banana', '', NULL, '', '', 'layer hen', 'goat (sagoli)', 'cow (goru)', '', '', 'rohu (rau)', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:23:50'),
(642, 13, 'Eliza Begum', 'Asom Pragati SHG', '3479', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Abdul Muslom', 'Literate', '6002774273', NULL, NULL, 'others', 'Member', '5', '0', '5', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'mango (aam)', '', NULL, '', '', 'backyarad poultry', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:28:04'),
(643, 13, 'Muluk Jan', 'Asom Pragati SHG', '3479', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Akkas Ali', 'Literate', '6002774273', NULL, NULL, 'others', 'Member', '6', '0', '6', '0', '0', 'paddy (dhaan)', '', '', '', '', 'mango (aam)', '', NULL, '', '', 'cow (goru)', 'backyarad poultry', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:32:07'),
(644, 13, 'Gita Chudari', 'Kallyani SHG', '285929', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Keshab Chudari', 'Literate', '6002344346', NULL, NULL, 'others', 'Member', '0.4', '0', '0.4', '0', '0', '', '', '', '', '', 'bottle gourd (lau)', 'spine gourd (bhat kerela)', NULL, 'jackfruit (kathol)', '', 'cow (goru)', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:36:03'),
(645, 13, 'Hafiza Khatun', 'Asom Pragati SHG', '3479', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Habibul Ali', 'Literate', '8099197207', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', 'oil seed (xoriyo)', '', '', '', 'bottle gourd (lau)', '', NULL, '', '', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:39:49'),
(646, 13, 'Rajiya Khatun', 'Junaki SHG', '108434', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Abdul Awal', 'Literate', '6003654790', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', 'paddy (dhaan)', '', '', '', '', 'bottle gourd (lau)', 'mango (aam)', NULL, '', '', 'backyarad poultry', 'duck', 'cow (goru)', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:43:22'),
(647, 13, 'Morjan Nesha', 'Nayan Moni SHG', '255550', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Sukur Ali', 'Literate', '9864035294', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'bottle gourd (lau)', 'mango (aam)', NULL, '', '', 'cow (goru)', 'layer hen', 'duck', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:47:21'),
(648, 13, 'Archana Banik', 'Palash SHG', '101876', 'nagaon', 'laokhowa', 'ambagan', 'pub-suwaloni', 'Nirmal Banik', 'Literate', '9365214584', NULL, NULL, 'others', 'Member', '0.2', '0', '0.2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'goat (sagoli)', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-04 10:50:06'),
(649, 17, 'MONI DEHINGIA', 'Junak', '200235', 'tinsukia', 'itakhuli', 'laipuli', 'dohutia gaon', 'PALASH DEHINGIA', 'Illiterate', '8880582005', NULL, NULL, 'others', 'SECRETARY', '2', '0', '2', '0', '0', '', '', '', '', '', 'tea (saah)', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 11:36:57'),
(650, 17, 'SUVOMAI BORAH', 'KUTIHILPO', '116021', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'JITU GOGOI', 'Literate', '9706515342', NULL, NULL, 'others', 'Member', '3', '0', '3', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 11:41:40'),
(652, 17, 'BIMALI GOGOI', 'Junak', '111976', 'tinsukia', 'itakhuli', 'laipuli', 'dohutia gaon', 'HEMO GOGOI', 'Illiterate', '9706515342', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 11:47:40'),
(653, 17, 'RENU GOGOI', 'Junak', '111976', 'tinsukia', 'itakhuli', 'laipuli', 'dohutia gaon', 'AJIT BORUAH', 'Illiterate', '9706515342', NULL, NULL, 'others', 'member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 11:49:56'),
(654, 17, 'MONURAMA GOGOI', 'BIRANGANA', '211526', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'DHIREN GOGOI', 'Literate', '8638287920', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 11:52:30'),
(655, 17, 'GITIMONI BORUAH', 'BIRANGANA', '211526', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'BHUPENDRA BORUAH', 'Literate', '9706515342', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 12:01:15'),
(656, 17, 'PORINITA BORUAH', 'BIRANGANA', '211526', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'BHAIRAV BORUAH', 'Literate', '8638287920', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:03:05'),
(657, 17, 'BONTI BORGOHAIN', 'BIRANGANA', '211526', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'MONURANJAN BORGOHAIN', 'Literate', '9706515342', NULL, NULL, 'others', 'Member', '2', '0', '2', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:06:07'),
(658, 17, 'BUTNI MURA', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'LT RAGHU MURA', 'Illiterate', '8638287920', NULL, NULL, 'others', 'Member', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:15:34'),
(659, 17, 'MONALISA BARUAH', 'BIRANGANA', '211526', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'MONUJ GURUNG', 'Illiterate', '7896097756', NULL, NULL, 'others', 'Member', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:21:50'),
(660, 17, 'DIPTI GOGOI', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'ALAKYA GOGOI', 'Illiterate', '9395648329', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:25:05'),
(661, 17, 'Jyoti Gogoi', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'morankari', 'LILA  GOGOI', 'Illiterate', '8880582005', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:27:20'),
(662, 17, 'JUNTI GOGOI', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'KOMOL GOGOI', 'Illiterate', '9706515342', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:33:08'),
(663, 17, 'RUPALI GOGOI', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'INDRESHWAR GOGOI', 'Illiterate', '7896097756', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', '', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:35:41'),
(664, 17, 'SARITA BHUMIJ', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'SANJAY BHUMIJ', 'Illiterate', '9394410494', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:47:19'),
(665, 17, 'MAMONI KURMI', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'LT NANDESHWAR KURMI', 'Illiterate', '9706515342', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 06:49:56'),
(666, 17, 'BHOBANI GOGOI', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'LT HOBESHWAR GOGOI', 'Illiterate', '7896097756', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 07:05:18'),
(667, 17, 'DIPALI KURMI', 'Meghali', '116182', 'tinsukia', 'itakhuli', 'laipuli', 'dhoria raitak', 'UMAKANTA KURMI', 'Illiterate', '8638287920', NULL, NULL, 'others', 'Member', '1', '0', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', '', '', NULL, '', '', 'backyarad poultry', 'duck', '', '', '', '', '', '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 07:11:49'),
(673, 14, 'Sara Begum Mazumder', 'Sagar Basi SHG', '286935', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Islam Uddin Mazumder', 'Illiterate', '8474077913', NULL, NULL, 'others', 'Member', '.5', '.5', '0', '0', '0', '', '', '', '', '', 'patato (aloo)', '', NULL, '', '', 'backyarad poultry', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 12:06:50'),
(674, 14, 'Ataful Bibi', 'Mazumdar SHG', '290982', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Masharaf Ali', 'Literate', '6901160929', NULL, NULL, 'others', 'Member', '6', '2', '2.5', '0', '1.5', 'paddy (dhaan)', '', '', '', '', 'french bean', 'patato (aloo)', NULL, 'areca nut (tamul)', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', 'duck', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 12:17:26'),
(675, 14, 'Saleya Begum Mazumdar', 'Mazumdar SHG', '290982', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Samsul Hoque mazumdar', 'Literate', '7338220443', NULL, NULL, 'others', 'Member', '1', '1', '0', '0', '0', 'paddy (dhaan)', '', '', '', '', 'areca nut (tamul)', '', NULL, '', '', 'backyarad poultry', 'goat (sagoli)', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 12:43:36'),
(676, 14, 'Rajia Begom', 'Mazumdar SHG', '290982', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Hilal Uddin Mazumder', 'Literate', '8011650339', NULL, NULL, 'others', 'Member', '2', '1', '1', '0', '0', 'paddy (dhaan)', '', '', '', '', 'areca nut (tamul)', 'bottle gourd (lau)', NULL, 'brinjal (begena)', '', 'backyarad poultry', 'duck', 'cow (goru)', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 12:49:10'),
(677, 14, 'Laile Begum Laskar', 'Mazumdar SHG', '290982', 'hailakandi', 'katlicherra', 'dholai-molai', NULL, 'Islam Uddin', 'Literate', '8133933062', NULL, NULL, 'others', 'Member', '1', '1', '0', '0', '0', 'paddy (dhaan)', '', '', '', '', 'patato (aloo)', 'areca nut (tamul)', NULL, '', '', 'backyarad poultry', 'cow (goru)', 'goat (sagoli)', 'duck', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 12:53:24'),
(678, 12, 'KARABI DEKA', 'UTTAR NAGAON JEUTI JEEVIKA SHG ', '73742', 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', 'PUNAKON DEKA', 'Literate', '8135980534', NULL, NULL, 'others', 'Member', '14', '10', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', '', NULL, 'patato (aloo)', 'mango (aam)', 'goat (sagoli)', 'cow (goru)', 'backyarad poultry', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-13 08:16:49'),
(679, 12, 'BASONTI KOCH', 'UTTAR NAGAON JEUTI JEEVIKA SHG ', '73742', 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', 'RAJON KOCH', 'Literate', '8135973032', NULL, NULL, 'others', 'Member', '8', '5', '3', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', 'patato (aloo)', NULL, 'mango (aam)', '', 'goat (sagoli)', 'cow (goru)', 'backyarad poultry', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-13 08:21:35'),
(680, 12, 'SIKHAMONI  KOCH', 'UTTAR NAGAON JEUTI JEEVIKA SHG ', '73742', 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', 'HIRAN KOCH', 'Literate', '8135973032', NULL, NULL, 'others', 'Member', '9', '5', '4', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', 'patato (aloo)', NULL, 'maha bhringaraj', 'mint (pudina)', 'goat (sagoli)', 'cow (goru)', 'backyarad poultry', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-13 09:27:08'),
(681, 12, 'MADHABI KOCH', 'UTTAR NAGAON JEUTI JEEVIKA SHG ', '73742', 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', 'LATE BISTI RAM KOCH', 'Illiterate', '6002876890', NULL, NULL, 'others', 'Member', '14', '10', '0', '0', '0', 'paddy (dhaan)', '', '', '', '', 'banana', 'patato (aloo)', NULL, '', '', 'goat (sagoli)', 'cow (goru)', 'backyarad poultry', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-13 09:30:52'),
(690, 26, 'Sonu Singh', 'D Singh', '2022', 'nagaon', 'barhampur', 'bamuni', 'bamuni-mikirgaon', 'DS', 'literate', '8127294757', 'Other', '5555555555', NULL, 'President', '2', '3', '4', '5', '6', 'paddy (dhaan)', 'masur (mosoor dail)', 'mungbean/ urdbean (mug dail)', 'pulses/lentil (mahor dail)', 'gram (boot dail)', 'guava (modhuriaam)', 'carambola (kordoi)', 'carambola (kordoi)', 'mango (aam)', 'papaya (omita)', 'buffalo (moah)', 'buffalo (moah)', 'buffalo (moah)', 'cow (goru)', 'sheep (bhera)', 'catfish (magur)', 'muga', 'yes', 'test', '12', '11', '132', '11', '11', '3', 1, 0, 0, NULL, NULL, '04-06-2022 03:36:53 PM', NULL, NULL, '~~04-06-2022 03:36:53 PM', 0, '2022-06-04 10:06:53'),
(691, 26, 'Sonu Singh', 'D Singh', '2022', 'dhemaji', 'dhemaji', 'naruathan', 'rotuwa nepali khuti', 'DS', 'literate', '8127294757', 'AdhaarCard', '5555555555', NULL, 'ASS', '2', '3', '4', '5', '6', 'wheat (ghehun)', 'sugarcane (kuhiyar)', 'mungbean/ urdbean (mug dail)', 'pulses / lentil', 'pea (motor)', 'jackfruit (kathol)', 'cashew nut (kaju)', 'gerlic (nohoru)', 'ash gourd(kumoora)', 'rubber', 'cow (goru)', 'cow (goru)', 'cow (goru)', 'bullock (xaar goru)', 'broiler (broiler)', NULL, NULL, 'yes', '', '', '', '', '', '', '2', 0, 1, 1, '05-07-2022 03:29:40 PM', 74, NULL, '05-07-2022 03:30:00 PM', 74, NULL, NULL, '2022-07-05 10:00:00'),
(692, 26, 'test', 'test', 'TEST02', 'dhemaji', 'dhemaji', 'naruathan', 'rotuwa nepali khuti', 'Hareshbhai', 'illiterate', '8866718265', 'AdhaarCard', '12345678901', NULL, 'Test', '2', '6', '4', '4', '4', 'groundnut (badam)', '', '', '', '', '', '', '', '', '', 'cow (goru)', '', '', '', '', NULL, NULL, '', 'Paddy', '100', '10', '1000', '1000', '0', '3', 1, 0, 0, NULL, NULL, '05-07-2022 03:29:23 PM', NULL, NULL, 'details not proper~~05-07-2022 03:29:23 PM', 74, '2022-07-05 09:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `pg_bankdetails`
--

CREATE TABLE `pg_bankdetails` (
  `id` int(11) NOT NULL,
  `pgid` int(11) NOT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `account_type` varchar(100) DEFAULT NULL,
  `IFSC` varchar(50) DEFAULT NULL,
  `branchname` varchar(155) DEFAULT NULL,
  `accountno` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pg_bankdetails`
--

INSERT INTO `pg_bankdetails` (`id`, `pgid`, `bankname`, `account_type`, `IFSC`, `branchname`, `accountno`, `modified_date`) VALUES
(1, 1, 'AGVB', 'Saving', 'PUNB0RRBAGB', 'BHERGAON', '7057010037086', '2022-02-22 01:31:32'),
(2, 2, 'Indian Bank', 'Saving', 'IDIB000S700', 'Simen Chapori', '50528586333', '2022-02-22 01:32:39'),
(3, 3, 'AGVB', 'Saving', NULL, 'Butikor', '7007050000277', '2022-02-22 01:33:22'),
(4, 4, 'Central Bank of India', 'Saving', 'CBIN0284219', 'Hailakandi', '3881822787', '2022-02-22 01:34:18'),
(5, 5, 'Central Bank of India', 'Saving ', 'CBIN0281616', 'Pachgram', '3898741626', '2022-02-22 01:35:15'),
(6, 6, 'Overseas Bank', 'Saving ', 'IOBA0001140', 'Mikirbheta', '114001000035868', '2022-02-22 01:38:00'),
(7, 7, 'AGVB', 'Saving', 'PUNB0RRAGB', 'Hatichung', '7247010050731', '2022-02-22 01:38:52'),
(8, 8, 'North East Small Finance Bank', 'Saving', 'NESF0000215', 'Udalguri ', '10210000127603', '2022-02-22 07:25:56'),
(9, 9, 'SBI', 'Saving', NULL, 'CHAPAKHOWA', '39858787582', '2022-02-22 07:26:05'),
(10, 10, 'Apex Bank ', 'Saving', 'HDFC0CACABL', 'TINSUKIA', NULL, '2022-02-22 01:47:51'),
(11, 15, 'HDFC', 'Saving', 'ui', 'uhi', '225', '2022-05-05 06:07:22'),
(12, 15, 'ICICI', 'Saving', 'loij', 'kj', '34567', '2022-05-05 06:07:22'),
(13, 26, 'AGVB', 'Current', 'frfrfr', 'frfrff', '45565656566565', '2022-05-05 09:29:33'),
(14, 11, 'SBI', 'Saving', 'SBIN0007172', 'fdsgrgr', '1233456789', '2022-05-05 09:43:29'),
(15, 26, 'PNB', 'Current', 'vdvdvvd', 'ddvdv', '57554545', '2022-05-05 12:04:31'),
(16, 21, 'AGVB', 'Current', 'ffdfdff', 'dfdfdfdf', '87578', '2022-05-05 12:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `pg_mbs`
--

CREATE TABLE `pg_mbs` (
  `id` int(11) NOT NULL,
  `pgid` int(11) DEFAULT NULL,
  `commodity` varchar(100) DEFAULT NULL,
  `opstock` varchar(50) DEFAULT NULL,
  `oprate` varchar(50) DEFAULT NULL,
  `opamount` varchar(50) DEFAULT NULL,
  `opwastingqty` varchar(50) DEFAULT NULL,
  `opwastingrate` varchar(50) DEFAULT NULL,
  `opwastingamount` varchar(50) DEFAULT NULL,
  `procureqty` varchar(50) DEFAULT NULL,
  `procurerate` varchar(50) DEFAULT NULL,
  `procureamount` varchar(50) DEFAULT NULL,
  `procurewastageqty` varchar(50) DEFAULT NULL,
  `procurewastagerate` varchar(50) DEFAULT NULL,
  `procurewastageamount` varchar(50) DEFAULT NULL,
  `saleqty` varchar(50) DEFAULT NULL,
  `salerate` varchar(50) DEFAULT NULL,
  `saleamount` varchar(50) DEFAULT NULL,
  `salewastageqty` varchar(50) DEFAULT NULL,
  `salewastagerate` varchar(50) DEFAULT NULL,
  `salewastageamount` varchar(50) DEFAULT NULL,
  `closingstockqty` varchar(50) DEFAULT NULL,
  `closingstockrate` varchar(50) DEFAULT NULL,
  `closingstockamount` varchar(50) DEFAULT NULL,
  `closingstockwastageqty` varchar(50) DEFAULT NULL,
  `closingstockwastagerate` varchar(50) DEFAULT NULL,
  `closingstockwastageamount` varchar(50) DEFAULT NULL,
  `surplusqty` varchar(50) DEFAULT NULL,
  `surplusrate` varchar(50) DEFAULT NULL,
  `surplusamount` varchar(50) DEFAULT NULL,
  `surpluswastageqty` varchar(50) DEFAULT NULL,
  `surpluswastagerate` varchar(50) DEFAULT NULL,
  `surpluswastageamount` varchar(50) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pg_monthlyfinance`
--

CREATE TABLE `pg_monthlyfinance` (
  `id` int(11) NOT NULL,
  `pgid` int(11) NOT NULL,
  `APGname` varchar(155) DEFAULT NULL,
  `APGmiddlename` varchar(155) DEFAULT NULL,
  `APGcommodity` varchar(155) DEFAULT NULL,
  `APGrate` varchar(100) DEFAULT NULL,
  `APGamount` varchar(100) DEFAULT NULL,
  `TPGname` varchar(155) DEFAULT NULL,
  `TPGmiddlename` varchar(155) DEFAULT NULL,
  `TPGcommodity` varchar(155) DEFAULT NULL,
  `TPGquantity` varchar(100) DEFAULT NULL,
  `TPGrate` varchar(100) DEFAULT NULL,
  `TPGamount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pg_monthlytransactionaldetails`
--

CREATE TABLE `pg_monthlytransactionaldetails` (
  `id` int(11) NOT NULL,
  `pgid` int(11) DEFAULT NULL,
  `openingbalance` varchar(100) DEFAULT NULL,
  `receipts` varchar(100) DEFAULT NULL,
  `asp` varchar(100) DEFAULT NULL,
  `otherr` varchar(50) DEFAULT NULL,
  `totalreceipts` varchar(100) DEFAULT NULL,
  `papc` varchar(100) DEFAULT NULL,
  `ctcc` varchar(50) DEFAULT NULL,
  `otherex` varchar(50) DEFAULT NULL,
  `totalexppay` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pg_monthlytransactionaldetails`
--

INSERT INTO `pg_monthlytransactionaldetails` (`id`, `pgid`, `openingbalance`, `receipts`, `asp`, `otherr`, `totalreceipts`, `papc`, `ctcc`, `otherex`, `totalexppay`, `last_updated`) VALUES
(1, 2, '5100', NULL, NULL, NULL, NULL, NULL, NULL, 'Tea', '20', '2022-02-21 10:53:59'),
(2, 4, '1000', NULL, NULL, '150000', NULL, NULL, NULL, NULL, NULL, '2022-02-21 10:56:43'),
(3, 5, '3624', NULL, NULL, '150260', '150260', NULL, NULL, NULL, NULL, '2022-02-21 10:57:53'),
(4, 9, '151500', NULL, NULL, NULL, NULL, '145000', '0', '6000', NULL, '2022-02-21 11:01:20'),
(5, 10, '170000', NULL, NULL, NULL, NULL, '120000', NULL, '50000', '125000', '2022-02-21 11:04:11'),
(6, 15, '', '', '', '', '', '', '', '', '', '2022-05-13 05:23:09'),
(7, 26, '', '', '', '', '', '', '', '', '', '2022-05-18 09:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `pg_nonpgmbs`
--

CREATE TABLE `pg_nonpgmbs` (
  `id` int(11) NOT NULL,
  `pgid` int(11) DEFAULT NULL,
  `commodity` varchar(100) DEFAULT NULL,
  `opstock` varchar(50) DEFAULT NULL,
  `oprate` varchar(50) DEFAULT NULL,
  `opamount` varchar(50) DEFAULT NULL,
  `opwastingqty` varchar(50) DEFAULT NULL,
  `opwastingrate` varchar(50) DEFAULT NULL,
  `opwastingamount` varchar(50) DEFAULT NULL,
  `procureqty` varchar(50) DEFAULT NULL,
  `procurerate` varchar(50) DEFAULT NULL,
  `procureamount` varchar(50) DEFAULT NULL,
  `procurewastageqty` varchar(50) DEFAULT NULL,
  `procurewastagerate` varchar(50) DEFAULT NULL,
  `procurewastageamount` varchar(50) DEFAULT NULL,
  `saleqty` varchar(50) DEFAULT NULL,
  `salerate` varchar(50) DEFAULT NULL,
  `saleamount` varchar(50) DEFAULT NULL,
  `salewastageqty` varchar(50) DEFAULT NULL,
  `salewastagerate` varchar(50) DEFAULT NULL,
  `salewastageamount` varchar(50) DEFAULT NULL,
  `closingstockqty` varchar(50) DEFAULT NULL,
  `closingstockrate` varchar(50) DEFAULT NULL,
  `closingstockamount` varchar(50) DEFAULT NULL,
  `closingstockwastageqty` varchar(50) DEFAULT NULL,
  `closingstockwastagerate` varchar(50) DEFAULT NULL,
  `closingstockwastageamount` varchar(50) DEFAULT NULL,
  `surplusqty` varchar(50) DEFAULT NULL,
  `surplusrate` varchar(50) DEFAULT NULL,
  `surplusamount` varchar(50) DEFAULT NULL,
  `surpluswastageqty` varchar(50) DEFAULT NULL,
  `surpluswastagerate` varchar(50) DEFAULT NULL,
  `surpluswastageamount` varchar(50) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pg_panel`
--

CREATE TABLE `pg_panel` (
  `pgid` int(11) NOT NULL,
  `pgname` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `grampanchayat` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `dof` varchar(255) DEFAULT NULL,
  `president_name` varchar(255) DEFAULT NULL,
  `secretary_name` varchar(255) DEFAULT NULL,
  `treasurer_name` varchar(255) DEFAULT NULL,
  `pramoted_uder` varchar(255) DEFAULT NULL,
  `category` varchar(155) DEFAULT NULL,
  `sub_category` varchar(155) DEFAULT NULL,
  `commodityname` varchar(155) DEFAULT NULL,
  `USname` varchar(100) DEFAULT NULL,
  `USnomember` varchar(50) DEFAULT NULL,
  `USnovillage` varchar(50) DEFAULT NULL,
  `PSname` varchar(100) DEFAULT NULL,
  `PSnomember` varchar(50) DEFAULT NULL,
  `PSnovillage` varchar(50) DEFAULT NULL,
  `KSname` varchar(100) DEFAULT NULL,
  `KSnomember` varchar(50) DEFAULT NULL,
  `KSnovillage` varchar(50) DEFAULT NULL,
  `VAAUS` text,
  `VAAPS` text,
  `VAAKS` text,
  `VAACRP` text,
  `CRPname` varchar(100) DEFAULT NULL,
  `CRPnomember` varchar(50) DEFAULT NULL,
  `CRPnovillage` varchar(50) DEFAULT NULL,
  `BOR` text,
  `ABOR` varchar(255) DEFAULT NULL,
  `TLAgriculture` text,
  `TLHorticulture` text,
  `TLLivestock` text,
  `TLFishery` text,
  `TLSericulture` text,
  `TLOthers` text,
  `cb_cihcb` varchar(100) DEFAULT NULL,
  `cb_cihbb` varchar(100) DEFAULT NULL,
  `cb_total` varchar(100) DEFAULT NULL,
  `cb_frombuyer` varchar(100) DEFAULT NULL,
  `cb_payproducermember` varchar(100) DEFAULT NULL,
  `finalenumerator_name` varchar(100) DEFAULT NULL,
  `finalpresidentsec_name` varchar(100) DEFAULT NULL,
  `finalblockcoordinator` varchar(100) DEFAULT NULL,
  `finaldate` varchar(50) DEFAULT NULL,
  `finalplace` varchar(100) DEFAULT NULL,
  `su_paymenttomember` varchar(155) DEFAULT NULL,
  `su_paymentduepgmember` varchar(155) DEFAULT NULL,
  `su_paymentduenonpgmember` varchar(155) DEFAULT NULL,
  `su_reinvesttopg` varchar(200) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pg_panel`
--

INSERT INTO `pg_panel` (`pgid`, `pgname`, `district`, `block`, `grampanchayat`, `village`, `dof`, `president_name`, `secretary_name`, `treasurer_name`, `pramoted_uder`, `category`, `sub_category`, `commodityname`, `USname`, `USnomember`, `USnovillage`, `PSname`, `PSnomember`, `PSnovillage`, `KSname`, `KSnomember`, `KSnovillage`, `VAAUS`, `VAAPS`, `VAAKS`, `VAACRP`, `CRPname`, `CRPnomember`, `CRPnovillage`, `BOR`, `ABOR`, `TLAgriculture`, `TLHorticulture`, `TLLivestock`, `TLFishery`, `TLSericulture`, `TLOthers`, `cb_cihcb`, `cb_cihbb`, `cb_total`, `cb_frombuyer`, `cb_payproducermember`, `finalenumerator_name`, `finalpresidentsec_name`, `finalblockcoordinator`, `finaldate`, `finalplace`, `su_paymenttomember`, `su_paymentduepgmember`, `su_paymentduenonpgmember`, `su_reinvesttopg`, `last_updated`) VALUES
(1, 'himalaya pg', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', '17-11-2020', 'labainya boro', 'beena swargiary', 'fwisali basumatary', 'nretp', 'horticulture', '', 'agriculture', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'grading,sorting,storing,weighing,collective marketing', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register,purchase sale & stock register,loan ledger', '', 'basic livelihoods training,farmer field school,pashu pathshaala', '', 'basic livelihoods training,farmer field school,pashu pathshaala', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-22 07:02:38'),
(2, 'niyor pg', 'dhemaji', 'mstd', 'simen chapori', 'simen chapori', '28-08-2020', 'pratima ramchiary', 'ranjita boruah', 'mousomi gogoi', 'nretp', 'agriculture', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register', '', 'basic livelihoods training', '', '', '', '', '', '80', '5700', '5780', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-22 07:02:38'),
(3, 'milan jyoti pg', 'dhemaji', 'dhemaji', 'naruathan', 'rotuwa nepali khuti', '07-10-2020', 'sorujmoni rajkhowa boruah', 'chintumoni bora', '', 'nretp', 'livestock', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register,purchase sale & stock register,loan ledger', '', '', '', 'pashu pathshaala', '', '', '', '0', '1200', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-22 07:02:38'),
(4, 'mohila jagoran vo  dairy producer group', 'hailakandi', 'lala', 'nichintapur', 'nichintapur pt-i', '19-10-2020', 'rizma begum laskar', 'jolly nath', '', 'nretp', 'livestock', '', 'dairy', '', '0', '0', 'Sunita Chowhan', '50', '1', 'Saharana Begum Laskar', '50', '1', NULL, 'nota', NULL, '', NULL, NULL, NULL, 'Minutes of the Meeting Book,Bank Book for all transactions,Saving Register,Purchase Sale and Stock Register,Stock Movement Register,Bill Book and Receipt Book,Doule Entry Cash Book,Loan Ledger,no', '', 'Basic Livelihoods Training,,,,,Soil Nutrients Management,Pest Management,,,,,Other', '', 'basic livelihoods training,breed selection,sty/shed preparation & management,feed management,health care and management', '', '', 'capacity building', '', '151,000', '', '', '', '', '', '', '', '', '', '', '', '', '2022-05-06 06:07:07'),
(5, 'sahara poultry pg', 'hailakandi', 'algapur', 'panchgram', 'uttarkanchanpur pt-1', '18-02-2021', 'nurun nessa', 'momina begum', '', 'nretp', 'livestock', '', 'backyard poultry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register', '', 'basic livelihoods training,soil nutrients management,pest management,other~vermi compost', '', 'basic livelihoods training,breed selection,sty/shed preparation & management,feed management', '', '', 'capacity building', '300', '153884', '154184', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-22 07:02:39'),
(6, 'sewali pg', 'nagaon', 'dolongghat', 'chabukdhara', 'chabukdhara', '30-11-2020', 'gitanjali konwar', 'rajiti patar dewraja', 'n/a', 'nretp', 'livestock', 'duckery', 'duck', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'storing', 'storing', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register,purchase sale & stock register,bill book & receipt book', '', '', '', 'basic livelihoods training,pashu pathshaala', '', '', '', '', '1000', '1000', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:09:07'),
(7, 'parijat pg', 'nagaon', 'dolongghat', 'borchila', 'gakhajua', '28-12-2020', 'gafuli bordoloi', 'jinti bordoloi', 'purabi bordoloi', 'nretp', 'fishery', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'n/a', 'storing', 'storing', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register,bill book & receipt book,loan ledger', '', '', '', '', 'basic livelihoods training,pashu pathshaala', '', '', '', '1000', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:09:02'),
(8, 'jiri pg', 'udalguri', 'udalguri', 'udalguri', 'thana udalguri', '23-09-2020', 'eliza daimari', 'merina daimari', '', 'nretp', 'agriculture,livestock,horticulture', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no of the above', 'no of the above', 'no of the above', 'no of the above', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register', '', '', '', '', '', '', '', '', '5000', '5000', 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-22 07:02:39'),
(9, 'tarali sagoli palan utpadak gut', 'tinsukia', 'sadiya', 'buraburi', 'ratanpur gaon', '15-10-2020', 'dipa rani borah sonowal', 'pinki borgohain sonowal', 'jyotimoni', 'nretp', 'livestock', 'goatery', 'goatery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register,purchase sale & stock register,loan ledger', '', '', '', 'basic livelihoods training,breed selection,sty/shed preparation & management,feed management,breeding,health care and management', '', '', '', '0', '500', '500', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:21:13'),
(10, 'dibru saikhuwa poultry pg', 'tinsukia', 'guijan', 'guijan', 'guijan lg road', '25-07-2019', 'sabita chanda,9435456509', 'ripa das, 7086965016', '', 'nretp', 'livestock', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processing,', 'processing,collective marketing', '', 'processing,collective marketing', NULL, NULL, NULL, 'minutes of meeting book,bank book for all transactions,savings register,purchase sale & stock register,stock movement register,loan ledger', '', '', '', '', '', '', '', '1000', '30000', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 05:19:52'),
(11, 'puberan pg', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', '01-01-2021', 'beena swargiary', 'fwisali basumatary', '', 'nretp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 09:41:50'),
(12, 'tagar pg', 'udalguri', 'mazbat', 'naoherua', 'uttar nagaon', '01-01-1970', 'joishree daimari', 'binita das konch', 'bobita deka', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 07:56:51'),
(13, 'prerona krishi pg', 'nagaon', 'laokhowa', 'ambagan', 'paschim suwalani', '01-01-1970', 'mina mandal', 'shipra mandal', 'anita sarkar', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 07:56:51'),
(14, 'satyamoti pg', 'hailakandi', 'katlicherra', 'dholai-molai', 'dholai-molai', '11-11-2020', 'jahanara begum', 'halima begum mazumdar', '', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 07:56:51'),
(15, 'akakhi ganga pg', 'tinsukia', 'guijan', 'borguri', 'borguri', '05-12-2021', 'amina baruah', 'nomita borgohain', 'babita baruah', 'nretp', 'agriculture', 'Sub-Category', 'Name of Commodity', '', '0', '0', '', '0', '0', '', '0', '0', 'drying', NULL, NULL, NULL, NULL, NULL, NULL, ',,Saving Register,Purchase Sale and Stock Register,Stock Movement Register,Bill Book and Receipt Book,Doule Entry Cash Book,Loan Ledger,yes', NULL, ',,,,,,,,,,,yes', NULL, NULL, NULL, ',,Cultivation techniques, Nutrition and disease Management,,,,,,,yes', 'fdfd,ddf,fdfdfd,fdfdfdf,ddfdf', '11', '11', '11', '11', '11', 'nirav chauhan', 'nirav chauhan', 'nirav chauhan', '2022-05-05', 'ahm', '123', '321', '123', NULL, '2022-07-05 05:40:56'),
(16, 'ujjal pg', 'dhemaji', 'mstd', 'jonai', 'joimaguri', '03-01-2021', 'jiboni sintey', 'monika lalung', 'rumi lalung', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 07:56:51'),
(17, 'barnali pg', 'tinsukia', 'itakhuli', 'laipuli', 'hilikhaguri', '12-12-2020', 'jun baruah', 'aimoni dihingiya', 'porinita baruah', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 08:25:48'),
(19, 'torali sagoli utpadak gut', 'tinsukia', 'sadiya', 'bura-buri', 'ratanpur gaon', '15-10-2020', 'diparani borah sonowal', 'pinki buragohain sonowal', 'jyotimoni', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-08 05:57:22'),
(20, 'swagatom', 'tinsukia', 'kakopathar', 'kailashpur', 'nabajyoti', '16-09-2019', 'reboti khaklari gogoi', 'gitali boruah', 'dipti gogoi', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-08 05:57:22'),
(21, 'monalisha producer group', 'tinsukia', 'kakopathar', 'bijulibon', 'notun maithong', '24-04-2019', 'junu pretin', 'renu limbu', '', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-08 05:57:22'),
(22, 'alphine goatery producer group', 'tinsukia', 'guijan', 'gottong', 'natun rangara gaon', '20-10-2021', 'purnima dutta boruah', 'rupa saikia', 'ritumoni moran', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-08 05:57:22'),
(23, 'bamuni gahori utpadak gut', 'nagaon', 'barhampur', 'bamuni', 'bamuni-mikirgaon', '30-06-2017', 'kamini kropi', 'konmai doloi', '', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-13 05:08:27'),
(25, 'praveen', 'ahmedabad', 'maninagar', 'ghodasar', 'smruti mandir', '17-11-2020', 'nirav h chauhan', 'beena', 'sammy', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 10:46:14'),
(26, 'nirav', 'dhemaji', 'dhemaji', 'naruathan', 'rotuwa nepali khuti', '28-08-2020', 'Puberun DP 8866718265', 'sangita', 'rummy', 'nretp', 'agriculture', 'Kharif season', 'Paddy (dhaan)', 'cdcdc', '07', '13', 'vddvvdv', '45', '13', 'fdfd', '555', '7', 'storing,packaging,weighing,collective_marketing', 'grading', 'weighing', NULL, NULL, NULL, NULL, 'Minutes of the Meeting Book,,Saving Register,Purchase Sale and Stock Register,Stock Movement Register,Bill Book and Receipt Book,Doule Entry Cash Book,Loan Ledger,no', NULL, 'Basic Livelihoods Training,,,,Seed Sorting & treatment,,,,,,,yes', ',,,,,,,,,,,yes', ',,,,,,,,', ',,,,,,,,,,,,,,yes', ',,,,,,,,,yes', 'other xyz,,,,', '100', '5000', '5100', '2000', '1500', 'XYZ', 'VKUSZ', 'RTY', '2022-05-04', 'Udlgri', '500000', '250000', '250000', NULL, '2022-07-05 10:06:47'),
(27, 'puberan sir pg', 'udalguri', 'bhergaon', 'khagrabari', 'nalbari', '17-11-2020', 'labainya boro', 'beena swargiary', 'fwisali basumatary', 'nretp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05 10:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `pg_support`
--

CREATE TABLE `pg_support` (
  `id` int(11) NOT NULL,
  `pgid` int(11) NOT NULL,
  `SRPGsof` text,
  `SRPGtof` text,
  `SRPGamount` text,
  `SRPGtos` text,
  `SRPGdate` text,
  `SRPGpurpose` text,
  `SRPGtosamount` text,
  `PMPGsof` text,
  `PMPGrp` text,
  `PMPGinterest_rate` text,
  `PMPGinterest_ratepaidout` text,
  `PMPGmonthlyemi` text,
  `PMPGamountdue` text,
  `loanduration` text,
  `commencement_date` text,
  `completion_date` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pg_support`
--

INSERT INTO `pg_support` (`id`, `pgid`, `SRPGsof`, `SRPGtof`, `SRPGamount`, `SRPGtos`, `SRPGdate`, `SRPGpurpose`, `SRPGtosamount`, `PMPGsof`, `PMPGrp`, `PMPGinterest_rate`, `PMPGinterest_ratepaidout`, `PMPGmonthlyemi`, `PMPGamountdue`, `loanduration`, `commencement_date`, `completion_date`) VALUES
(1, 15, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(2, 15, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(3, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(4, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(5, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(6, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(7, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(8, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(9, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', ''),
(10, 26, 'clf', 'other', '', 'grant', '', '', '', 'clf', '', '', NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `emp_code` bigint(15) NOT NULL,
  `sha_key` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `profile_img` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text,
  `mobile` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `zipcode` varchar(8) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `emp_code`, `sha_key`, `user_group_id`, `name`, `organization`, `profile_img`, `state`, `city`, `address`, `mobile`, `phone`, `zipcode`, `gender`, `branch`, `status`, `last_modified`) VALUES
(74, 'shubham.sharma@netcreativemind.com', 'd2ad3544dd044bd527209fe99b85b1e6e0833a63', 5, '16249669986059e1bf6813f6.84790348', 3, 'Shubham Sharma', NULL, '', 'Assam', 'Amdavad', 'xyz', '8866718265', '8866718265', '380050', 'male', NULL, '1', '2022-04-28 06:55:12'),
(76, 'nirav.chauhan@netcreativemind.com', '7e0fa7d30cb5de6bb2599ea6720171202375e8f3', 0, '896214759618b5bc9011d15.52571005', 3, 'Nirav Chauhan', NULL, '', 'Gujarat', '', NULL, '8866718265', '8866718265', '', 'male', NULL, '1', '2021-11-10 05:43:29'),
(98, 'niravalldonetech@gmail.com', '922915e7a064be8dc5e9d2df3a566e948ce8fb45', 0, '41855986619102977b5564.18438787', 4, 'nirav chauhan', 'Grant Thornton', '', 'Gujarat', '', NULL, '8866718265', '8866718265', '', 'male', NULL, '1', '2021-11-14 12:35:35'),
(99, 'mohammad.sajid@netcreativemind.com', '395a29097b1f3b34c486c11f0d62c7ed35fdb238', 0, '1261714833624e84037d5c91.31938993', 3, 'M Sajid', 'Grant Thornton', '', 'Delhi', '', NULL, '9654936266', '9654936266', '', 'male', NULL, '1', '2022-04-28 06:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_assignment`
--

CREATE TABLE `user_assignment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `group_type` varchar(100) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `group_type`, `last_modified`) VALUES
(1, 'verifier', '2021-10-06 06:17:54'),
(2, 'approver', '2021-10-06 06:17:51'),
(3, 'admin', '2021-10-06 06:16:51'),
(4, 'visitor', '2021-10-06 06:17:05'),
(5, 'Stock Control', '2013-11-19 08:21:48'),
(6, 'Manager', '2013-11-19 08:22:35'),
(11, 'employee', '2015-09-22 03:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `verifier_panel`
--

CREATE TABLE `verifier_panel` (
  `id` int(11) NOT NULL,
  `pgid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `block` varchar(100) DEFAULT NULL,
  `promoted_under` varchar(150) DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  `remark` text,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verifier_panel`
--

INSERT INTO `verifier_panel` (`id`, `pgid`, `mid`, `district`, `block`, `promoted_under`, `status`, `remark`, `last_updated`) VALUES
(1, 682, NULL, 'hailakandi', 'algapur', NULL, '0', NULL, '2022-04-19 10:49:04'),
(2, NULL, 683, 'hailakandi', 'katlicherra', NULL, '0', NULL, '2022-04-19 11:11:03'),
(3, 22, 684, 'dhemaji', 'dhemaji', NULL, '0', NULL, '2022-04-19 11:18:08'),
(4, 15, 685, 'dhemaji', 'dhemaji', NULL, '0', NULL, '2022-04-26 09:40:33'),
(5, 22, 686, 'dhemaji', 'mstd', NULL, '0', NULL, '2022-04-29 12:18:05'),
(6, 15, 687, 'dhemaji', 'mstd', NULL, '0', NULL, '2022-05-05 05:46:21'),
(7, 15, 688, 'dhemaji', 'dhemaji', NULL, '0', NULL, '2022-05-05 05:50:37'),
(8, 26, 689, 'dhemaji', 'dhemaji', NULL, '0', NULL, '2022-05-06 10:56:41'),
(9, 26, 690, 'nagaon', 'barhampur', NULL, '0', NULL, '2022-05-12 05:40:59'),
(10, 26, 691, 'dhemaji', 'dhemaji', NULL, '0', NULL, '2022-05-18 09:14:35'),
(11, 26, 692, 'dhemaji', 'dhemaji', NULL, '0', NULL, '2022-07-05 09:56:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adtuk_users`
--
ALTER TABLE `adtuk_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `buyer_details`
--
ALTER TABLE `buyer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district` (`district`),
  ADD KEY `block` (`block`),
  ADD KEY `grampanchayat` (`grampanchayat`);

--
-- Indexes for table `member_panel`
--
ALTER TABLE `member_panel`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `pg_bankdetails`
--
ALTER TABLE `pg_bankdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `pg_mbs`
--
ALTER TABLE `pg_mbs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `pg_monthlyfinance`
--
ALTER TABLE `pg_monthlyfinance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg_monthlytransactionaldetails`
--
ALTER TABLE `pg_monthlytransactionaldetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `pg_nonpgmbs`
--
ALTER TABLE `pg_nonpgmbs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `pg_panel`
--
ALTER TABLE `pg_panel`
  ADD PRIMARY KEY (`pgid`),
  ADD KEY `distict` (`district`,`block`,`grampanchayat`,`village`);

--
-- Indexes for table `pg_support`
--
ALTER TABLE `pg_support`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgid` (`pgid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_group_id` (`user_group_id`);

--
-- Indexes for table `user_assignment`
--
ALTER TABLE `user_assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifier_panel`
--
ALTER TABLE `verifier_panel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgid` (`pgid`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adtuk_users`
--
ALTER TABLE `adtuk_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer_details`
--
ALTER TABLE `buyer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `member_panel`
--
ALTER TABLE `member_panel`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=693;

--
-- AUTO_INCREMENT for table `pg_bankdetails`
--
ALTER TABLE `pg_bankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pg_mbs`
--
ALTER TABLE `pg_mbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_monthlyfinance`
--
ALTER TABLE `pg_monthlyfinance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_monthlytransactionaldetails`
--
ALTER TABLE `pg_monthlytransactionaldetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pg_nonpgmbs`
--
ALTER TABLE `pg_nonpgmbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_panel`
--
ALTER TABLE `pg_panel`
  MODIFY `pgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pg_support`
--
ALTER TABLE `pg_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `user_assignment`
--
ALTER TABLE `user_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `verifier_panel`
--
ALTER TABLE `verifier_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
