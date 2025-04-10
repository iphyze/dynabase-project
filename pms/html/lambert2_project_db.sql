-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2022 at 11:51 AM
-- Server version: 10.3.37-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lambert2_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `civ_cities`
--

CREATE TABLE `civ_cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civ_cities`
--

INSERT INTO `civ_cities` (`id`, `city_name`) VALUES
(1, 'Abidjan'),
(2, 'Abobo'),
(3, 'Bouake'),
(4, 'Daloa'),
(5, 'San-Pedro'),
(6, 'Yamoussoukro'),
(7, 'Korhogo'),
(8, 'Man'),
(9, 'Divo'),
(10, 'Gagnoa'),
(11, 'Abengourou'),
(12, 'Anyama'),
(13, 'Agboville'),
(14, 'Grand-Bassam'),
(15, 'Dabou'),
(16, 'Dimbokro'),
(17, 'Ferkessedougou'),
(18, 'Adzope'),
(19, 'Bouafle'),
(20, 'Sinfra'),
(21, 'Katiola'),
(22, 'Bondoukou'),
(23, 'Danane'),
(24, 'Oume'),
(25, 'Seguela'),
(26, 'Bingerville'),
(27, 'Issia'),
(28, 'Odienne'),
(29, 'Duekoue'),
(30, 'Agnibilekrou'),
(31, 'Daoukro'),
(32, 'Tengrela'),
(33, 'Guiglo'),
(34, 'Toumodi'),
(35, 'Boundiali'),
(36, 'Lakota'),
(37, 'Aboisso'),
(38, 'Arrah'),
(39, 'Bonoua'),
(40, 'Akoupe'),
(41, 'Tiassale'),
(42, 'Zuenoula'),
(43, 'Bongouanou'),
(44, 'Vavoua'),
(45, 'Affery'),
(46, 'Touba'),
(47, 'Bouna'),
(48, 'Sassandra'),
(49, 'Beoumi'),
(50, 'Biankouma'),
(51, 'Tanda'),
(52, 'Mankono'),
(53, 'Bangolo'),
(54, 'Tabou'),
(55, 'Adiake'),
(56, 'Sakassou'),
(57, 'Toulepleu Guere'),
(58, 'Dabakala'),
(59, 'Botro'),
(60, 'Guiberoua'),
(61, 'Bocanda'),
(62, 'Ayame'),
(63, 'Grand-Lahou');

-- --------------------------------------------------------

--
-- Table structure for table `gha_cities`
--

CREATE TABLE `gha_cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gha_cities`
--

INSERT INTO `gha_cities` (`id`, `city_name`) VALUES
(1, 'Aboso'),
(2, 'Aburi'),
(3, 'Accra'),
(4, 'Aflao'),
(5, 'Agogo'),
(6, 'Akim Oda'),
(7, 'Akim Swedru'),
(8, 'Akropong'),
(9, 'Akwatia'),
(10, 'Anloga'),
(11, 'Apam'),
(12, 'Asamankese'),
(13, 'Atsiaman'),
(14, 'Axim'),
(15, 'Bawku'),
(16, 'Bechem'),
(17, 'Begoro'),
(18, 'Bekwai'),
(19, 'Berekum'),
(20, 'Bibiani'),
(21, 'Bolgatanga'),
(22, 'Cape Coast'),
(23, 'Dome'),
(24, 'Duayaw Nkwanta'),
(25, 'Dunkwa'),
(26, 'Ejura'),
(27, 'Elmina'),
(28, 'Foso'),
(29, 'Gbawe'),
(30, 'Ho'),
(31, 'Hohoe'),
(32, 'Japekrom'),
(33, 'Kasoa'),
(34, 'Keta'),
(35, 'Kete Krachi'),
(36, 'Kibi'),
(37, 'Kintampo'),
(38, 'Koforidua'),
(39, 'Konongo'),
(40, 'Kpandae'),
(41, 'Kpandu'),
(42, 'Kumasi'),
(43, 'Mampong'),
(44, 'Medina Estates'),
(45, 'Mpraeso'),
(46, 'Mumford'),
(47, 'Navrongo'),
(48, 'Nsawam'),
(49, 'Nungua'),
(50, 'Obuase'),
(51, 'Prestea'),
(52, 'Salaga'),
(53, 'Saltpond'),
(54, 'Savelugu'),
(55, 'Sekondi-Takoradi'),
(56, 'Shama Junction'),
(57, 'Suhum'),
(58, 'Sunyani'),
(59, 'Swedru'),
(60, 'Tafo'),
(61, 'Takoradi'),
(62, 'Tamale'),
(63, 'Tarkwa'),
(64, 'Techiman'),
(65, 'Tema'),
(66, 'Teshi Old Town'),
(67, 'Wa'),
(68, 'Wenchi'),
(69, 'Winneba'),
(70, 'Yendi');

-- --------------------------------------------------------

--
-- Table structure for table `ngn_cities`
--

CREATE TABLE `ngn_cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngn_cities`
--

INSERT INTO `ngn_cities` (`id`, `city_name`) VALUES
(1, 'Aba'),
(2, 'Abak'),
(3, 'Abakaliki'),
(4, 'Abeokuta'),
(5, 'Abuja'),
(6, 'Ado-Ekiti'),
(7, 'Ado-Odo'),
(8, 'Adoru'),
(9, 'Afikpo'),
(10, 'Agaie'),
(11, 'Agbabu'),
(12, 'Agbor'),
(13, 'Agenebode'),
(14, 'Ago-Are'),
(15, 'Agulu'),
(16, 'Ahoada'),
(17, 'Ajaokuta'),
(18, 'Ajasse Ipo'),
(19, 'Aku'),
(20, 'Akure'),
(21, 'Akwanga'),
(22, 'Alapa'),
(23, 'Aliade'),
(24, 'Amagunze'),
(25, 'Amaigbo'),
(26, 'Amper'),
(27, 'Anchau'),
(28, 'Anka'),
(29, 'Ankpa'),
(30, 'Apomu'),
(31, 'Aramoko-Ekiti'),
(32, 'Argungu'),
(33, 'Arochukwu'),
(34, 'Asaba'),
(35, 'Atani'),
(36, 'Auchi'),
(37, 'Auna'),
(38, 'Awgu'),
(39, 'Awka'),
(40, 'Azare'),
(41, 'Babana'),
(42, 'Badagry'),
(43, 'Badeggi'),
(44, 'Baissa'),
(45, 'Bakori'),
(46, 'Bama'),
(47, 'Bara'),
(48, 'Baro'),
(49, 'Bauchi'),
(50, 'Bebeji'),
(51, 'Beli'),
(52, 'Bena'),
(53, 'Bende'),
(54, 'Benin City'),
(55, 'Benisheikh'),
(56, 'Bida'),
(57, 'Billiri'),
(58, 'Bin Yauri'),
(59, 'Birnin Kebbi'),
(60, 'Birnin Kudu'),
(61, 'Birniwa'),
(62, 'Biu'),
(63, 'Bode Saadu'),
(64, 'Boju'),
(65, 'Bokani'),
(66, 'Bokkos'),
(67, 'Bomadi'),
(68, 'Bonny'),
(69, 'Bori'),
(70, 'Buga'),
(71, 'Bugana'),
(72, 'Buguma'),
(73, 'Bukuru'),
(74, 'Burumburum'),
(75, 'Burutu'),
(76, 'Calabar'),
(77, 'Chakwama'),
(78, 'Dakingari'),
(79, 'Damasak'),
(80, 'Damaturu'),
(81, 'Dambatta'),
(82, 'Damboa'),
(83, 'Dan Gora'),
(84, 'Dan Sadau'),
(85, 'Dange'),
(86, 'Danja'),
(87, 'Dapchi'),
(88, 'Darazo'),
(89, 'Daura'),
(90, 'Daura'),
(91, 'Deba'),
(92, 'Degema Hulk'),
(93, 'Dekina'),
(94, 'Dikwa'),
(95, 'Dindima'),
(96, 'Doma'),
(97, 'Dukku'),
(98, 'Duku'),
(99, 'Dutse'),
(100, 'Dutsen Wai'),
(101, 'Dutsin-Ma'),
(102, 'Ebute Ikorodu'),
(103, 'Effium'),
(104, 'Efon-Alaaye'),
(105, 'Egbe'),
(106, 'Eha Amufu'),
(107, 'Ejigbo'),
(108, 'Ejirin'),
(109, 'Eket'),
(110, 'Ekpoma'),
(111, 'Elele'),
(112, 'Emure-Ekiti'),
(113, 'Enugu'),
(114, 'Enugu-Ezike'),
(115, 'Enugu-Ukwu'),
(116, 'Epe'),
(117, 'Esuk Oron'),
(118, 'Ete'),
(119, 'Etinan'),
(120, 'Ezza-Ohu'),
(121, 'Fiditi'),
(122, 'Funtua'),
(123, 'Gabarin'),
(124, 'Gagarawa'),
(125, 'Gamawa'),
(126, 'Gamboru'),
(127, 'Gandi'),
(128, 'Ganye'),
(129, 'Garko'),
(130, 'Gashua'),
(131, 'Gassol'),
(132, 'Gaya'),
(133, 'Gbongan'),
(134, 'Geidam'),
(135, 'Gembu'),
(136, 'Gombe'),
(137, 'Gombi'),
(138, 'Goniri'),
(139, 'Gorgoram'),
(140, 'Goronyo'),
(141, 'Gujba'),
(142, 'Gumel'),
(143, 'Gummi'),
(144, 'Gusau'),
(145, 'Gwadabawa'),
(146, 'Gwandu'),
(147, 'Gwaram'),
(148, 'Gwarzo'),
(149, 'Gwoza'),
(150, 'Hadejia'),
(151, 'Hinna'),
(152, 'Holma'),
(153, 'Hunkuyi'),
(154, 'Ibadan'),
(155, 'Ibeto'),
(156, 'Ibi'),
(157, 'Icheu'),
(158, 'Idah'),
(159, 'Idanre'),
(160, 'Ifaki'),
(161, 'Ifo'),
(162, 'Ifon'),
(163, 'Igabi'),
(164, 'Igarra'),
(165, 'Igbara-Odo'),
(166, 'Igbeti'),
(167, 'Igboho'),
(168, 'Igbo-Ora'),
(169, 'Igbor'),
(170, 'Igbo-Ukwu'),
(171, 'Igede-Ekiti'),
(172, 'Ihiala'),
(173, 'Iho'),
(174, 'Ijebu-Igbo'),
(175, 'Ijebu-Jesa'),
(176, 'Ijebu-Ode'),
(177, 'Ijero-Ekiti'),
(178, 'Ikang'),
(179, 'Ikeja'),
(180, 'Ikere-Ekiti'),
(181, 'Ikire'),
(182, 'Ikirun'),
(183, 'Ikom'),
(184, 'Ikot Ekpene'),
(185, 'Ila Orangun'),
(186, 'Ilare'),
(187, 'Ilaro'),
(188, 'Ilesa'),
(189, 'Illela'),
(190, 'Ilobu'),
(191, 'Ilorin'),
(192, 'Imeko'),
(193, 'Inisa'),
(194, 'Iperu'),
(195, 'Ipoti'),
(196, 'Isanlu-Itedoijowa'),
(197, 'Isara'),
(198, 'Ise-Ekiti'),
(199, 'Isieke'),
(200, 'Itu'),
(201, 'Iwo'),
(202, 'Jalingo'),
(203, 'Jebba'),
(204, 'Jega'),
(205, 'Jibia'),
(206, 'Jimeta'),
(207, 'Jos'),
(208, 'Kabba'),
(209, 'Kachia'),
(210, 'Kaduna'),
(211, 'Kafanchan'),
(212, 'Kafarati'),
(213, 'Kafin Hausa'),
(214, 'Kagoro'),
(215, 'Kaiama'),
(216, 'Kajuru'),
(217, 'Kaltungo'),
(218, 'Kamba'),
(219, 'Kangiwa'),
(220, 'Kankara'),
(221, 'Kano'),
(222, 'Kari'),
(223, 'Katagum'),
(224, 'Katsina'),
(225, 'Katsina-Ala'),
(226, 'Kaura Namoda'),
(227, 'Kazaure'),
(228, 'Keffi'),
(229, 'Kibiya'),
(230, 'Kisi'),
(231, 'Kiyawa'),
(232, 'Konduga'),
(233, 'Konkwesso'),
(234, 'Kontagora'),
(235, 'Koton-Karfe'),
(236, 'Kujama'),
(237, 'Kuje'),
(238, 'Kukawa'),
(239, 'Kumagunnam'),
(240, 'Kumo'),
(241, 'Kura'),
(242, 'Kuta'),
(243, 'Kwale'),
(244, 'Kwatarkwashi'),
(245, 'Kwolla'),
(246, 'Lafia'),
(247, 'Lafiagi'),
(248, 'Lagos'),
(249, 'Lalupon'),
(250, 'Langtang'),
(251, 'Lapai'),
(252, 'Lau'),
(253, 'Lekki'),
(254, 'Lere'),
(255, 'Lere'),
(256, 'Lokoja'),
(257, 'Machina'),
(258, 'Madagali'),
(259, 'Madala'),
(260, 'Madara'),
(261, 'Magumeri'),
(262, 'Mahuta'),
(263, 'Maiduguri'),
(264, 'Maiyama'),
(265, 'Makoko'),
(266, 'Makurdi'),
(267, 'Mallammaduri'),
(268, 'Malumfashi'),
(269, 'Mando'),
(270, 'Marte'),
(271, 'Maru'),
(272, 'Mashi'),
(273, 'Mberubu'),
(274, 'Minna'),
(275, 'Miringa'),
(276, 'Misau'),
(277, 'Modakeke'),
(278, 'Mokwa'),
(279, 'Monguno'),
(280, 'Moriki'),
(281, 'Mubi'),
(282, 'Musawa'),
(283, 'Mutum Biyu'),
(284, 'Nafada'),
(285, 'Nasarawa'),
(286, 'Ngala'),
(287, 'Ngurore'),
(288, 'Nguru'),
(289, 'Nkpor'),
(290, 'Nkwerre'),
(291, 'Nnewi'),
(292, 'Nsukka'),
(293, 'Numan'),
(294, 'Obiaruku'),
(295, 'Obonoma'),
(296, 'Obubra'),
(297, 'Obudu'),
(298, 'Ochobo'),
(299, 'Ode'),
(300, 'Offa'),
(301, 'Ogaminana'),
(302, 'Ogoja'),
(303, 'Ogurugu'),
(304, 'Oguta'),
(305, 'Ogwashi-Uku'),
(306, 'Ohafia-Ifigh'),
(307, 'Oke Ila'),
(308, 'Oke Mesi'),
(309, 'Okeho'),
(310, 'Okene'),
(311, 'Okigwe'),
(312, 'Okrika'),
(313, 'Okuta'),
(314, 'Olupona'),
(315, 'Omoku'),
(316, 'Omu-Aran'),
(317, 'Ondo'),
(318, 'Onitsha'),
(319, 'Opi'),
(320, 'Ore'),
(321, 'Orita-Eruwa'),
(322, 'Orlu'),
(323, 'Orodo'),
(324, 'Osogbo'),
(325, 'Otan Ayegbaju'),
(326, 'Otukpa'),
(327, 'Owerri'),
(328, 'Owo'),
(329, 'Owode'),
(330, 'Oyan'),
(331, 'Oyo'),
(332, 'Ozubulu'),
(333, 'Pankshin'),
(334, 'Panyam'),
(335, 'Patigi'),
(336, 'Pindiga'),
(337, 'Port Harcourt'),
(338, 'Potiskum'),
(339, 'Rabah'),
(340, 'Rano'),
(341, 'Rijau'),
(342, 'Ringim'),
(343, 'Ruma'),
(344, 'Runka'),
(345, 'Sade'),
(346, 'Saki'),
(347, 'Samamiya'),
(348, 'Sapele'),
(349, 'Sauri'),
(350, 'Shagamu'),
(351, 'Shani'),
(352, 'Shinkafi'),
(353, 'Siluko'),
(354, 'Soba'),
(355, 'Sofo-Birnin-Gwari'),
(356, 'Sokoto'),
(357, 'Suleja'),
(358, 'Suya'),
(359, 'Takai'),
(360, 'Takum'),
(361, 'Talata Mafara'),
(362, 'Tambuwal'),
(363, 'Tegina'),
(364, 'Toungo'),
(365, 'Tsafe'),
(366, 'Twon-Brass'),
(367, 'Uba'),
(368, 'Ubiaja'),
(369, 'Udi'),
(370, 'Uga'),
(371, 'Ugbokpo'),
(372, 'Ugep'),
(373, 'Ughelli'),
(374, 'Umuahia'),
(375, 'Umunede'),
(376, 'Uromi'),
(377, 'Uruobo-Okija'),
(378, 'Uyo'),
(379, 'Vom'),
(380, 'Victoria Island'),
(381, 'Wagini'),
(382, 'Wamba'),
(383, 'Warri'),
(384, 'Wasagu'),
(385, 'Wawa'),
(386, 'Wudil'),
(387, 'Wukari'),
(388, 'Wurno'),
(389, 'Wuyo'),
(390, 'Yandev'),
(391, 'Yashikira'),
(392, 'Yelwa'),
(393, 'Yenagoa'),
(394, 'Yola'),
(395, 'Yuli'),
(396, 'Zaki Biam'),
(397, 'Zalanga'),
(398, 'Zango'),
(399, 'Zaria'),
(400, 'Zungeru'),
(401, 'Zuru'),
(402, 'Ogun');

-- --------------------------------------------------------

--
-- Table structure for table `project_info_table`
--

CREATE TABLE `project_info_table` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_client` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `project_manager` varchar(255) NOT NULL,
  `qs_manager` varchar(255) NOT NULL,
  `mep_consultants` varchar(255) NOT NULL,
  `architect` varchar(255) NOT NULL,
  `project_duration` varchar(255) NOT NULL,
  `rfi_due` varchar(255) NOT NULL,
  `tender_received_date` varchar(255) NOT NULL,
  `tender_due` varchar(255) NOT NULL,
  `tender_submission_date` varchar(255) NOT NULL,
  `tender_amount` varchar(255) NOT NULL,
  `project_country` varchar(255) NOT NULL,
  `project_city` varchar(255) NOT NULL,
  `project_importance` varchar(255) NOT NULL,
  `contract_type` varchar(255) NOT NULL,
  `prelim_pricing` varchar(255) NOT NULL,
  `pricing_strategy` varchar(255) NOT NULL,
  `date_extension` varchar(255) NOT NULL,
  `rate_used` varchar(255) NOT NULL,
  `procurement_type` varchar(255) NOT NULL,
  `boq` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `drawings` varchar(255) NOT NULL,
  `tender_form` varchar(255) NOT NULL,
  `tender_instruction` varchar(255) NOT NULL,
  `basic_rate` varchar(255) NOT NULL,
  `labour_rate` varchar(255) NOT NULL,
  `other_tender_doc` varchar(255) NOT NULL,
  `technical_drawings` varchar(255) NOT NULL,
  `slds` varchar(255) NOT NULL,
  `mos` varchar(255) NOT NULL,
  `scope_understanding` varchar(255) NOT NULL,
  `pow` varchar(255) NOT NULL,
  `other_technical_doc` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `tender_code` varchar(255) NOT NULL,
  `project_status` varchar(255) NOT NULL DEFAULT 'On Hold',
  `progress` varchar(255) NOT NULL DEFAULT 'Pending',
  `vendor_information` varchar(255) NOT NULL,
  `additional_information` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_info_table`
--

INSERT INTO `project_info_table` (`id`, `project_title`, `project_client`, `division`, `project_manager`, `qs_manager`, `mep_consultants`, `architect`, `project_duration`, `rfi_due`, `tender_received_date`, `tender_due`, `tender_submission_date`, `tender_amount`, `project_country`, `project_city`, `project_importance`, `contract_type`, `prelim_pricing`, `pricing_strategy`, `date_extension`, `rate_used`, `procurement_type`, `boq`, `specification`, `drawings`, `tender_form`, `tender_instruction`, `basic_rate`, `labour_rate`, `other_tender_doc`, `technical_drawings`, `slds`, `mos`, `scope_understanding`, `pow`, `other_technical_doc`, `code`, `tender_code`, `project_status`, `progress`, `vendor_information`, `additional_information`) VALUES
(1, 'High Court of Lagos State, Igbosere', 'Re-build Lagos', 'Building & Factories', 'Re-Build Lagos', 'HOS', 'CA Consultant', 'Onestream Consultants Ltd', 'N/A', '2022-07-14', '2022-07-06', '2022-07-20', '', '', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'Directly include VEs Related To Brands & Specifications & Clarify', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 101, 'BNF-HIG-NGN-101', 'Approved', 'Submitted', 'Only tender code', '1. We can make use of all the VEs or alternatives that CA consultants will accept on projects.\r\n2. We have requested for extension, however we are awaiting feedback from the client.'),
(2, 'Remodelling of First Bank Head Office 6th Floor', 'First Bank Nigeria', 'Building & Factories', '', '', '', '', 'N/A', '2022-07-05', '2022-07-04', '2022-07-06', '', '', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', '', 102, 'BNF-REM-NGN-102', 'Approved', 'Submitted', 'Only use project name', ''),
(3, 'Restoring the New Port Harcourt Refinery (NPHR) and the Old Port Harcourt Refinery (OPHR)', 'Tecnimont ', 'Oil & Gas', '', '', '', '', 'N/A', '2022-07-18', '2022-07-08', '2022-07-25', '', '', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', '', '', 'Instruction to Tender', 'Schedule of Basic rate', 'Schedule of labour rate', '', 'Drawings', '', 'MOS', '', 'POW', 'Site Visit Declaration', 103, 'ONG-RES-NGN-103', 'On Hold', 'Pending', 'Only tender code', ''),
(4, 'Edo Museum of West African Art (EMOWAA) Pavilion, Benin, Edo State', 'EMOWAA', 'Building & Factories', 'FOAB', 'Sea Surveyors', 'Avantis', '', '12 months', '2022-07-19', '2022-07-14', '2022-09-29', '', '', 'Nigeria', 'Benin City', 'High', 'Remeasured', 'Standard (Combined)', 'Alternative On Brands are Acceptable', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', '', '', '', '', 104, 'BNF-EDO-NGN-104', 'Approved', 'Submitted', 'Only use project name', ''),
(5, 'Throne of Grace Redeem Church. Ebute Metta', 'The Redeem Church', 'Building & Factories', 'Courtney Michael Partnership', 'Billing Cost Associate', 'KOA Partnership', '', '30 months', '2022-07-15', '2022-07-08', '2022-07-29', '', '', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'Directly include VEs Related To Brands & Specifications & Clarify', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', '', '', '', '', '', '', '', '', '', '', 'MOS', 'Understanding of Scope', 'POW', '', 105, 'BNF-THR-NGN-105', 'Approved', 'Submitted', 'Only use project name', ''),
(6, 'Remedial Work on Assa Locations 01, 02 & Access Road', 'Waltersmith', 'Building & Factories', '', '', '', '', 'N/A', '2022-07-20', '2022-07-18', '2022-07-21', '', '', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs: VEs/Alternative Brands to be submitted separately', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', 'Scope of Work', '', '', '', '', '', '', 106, 'BNF-REM-NGN-106', 'Approved', 'Submitted', 'Only use project name', ''),
(7, 'The Minnie Mouse Project', 'LEAMINGTON PROPERTIES LTD', 'Building & Factories', 'ACCL', 'Consol Associates', 'MFA Partnership ', 'SAOTA', 'N/A', '2022-08-31', '2022-08-15', '2022-09-30', '', '', 'Nigeria', 'Victoria Island', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', 'MOS', 'Understanding of Scope', 'POW', '', 107, 'BNF-THE-NGN-107', 'Declined', 'Pending', 'Only use project name', ''),
(8, 'Staff Housing Rivers State University, Port Harcourt', 'Megastar', 'Building & Factories', '', '', '', '', 'N/A', '2022-08-20', '2022-08-17', '2022-08-24', '', '', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', 'Instruction to Tender', '', '', '', '', '', '', 'Understanding of Scope', 'POW', '', 108, 'BNF-STA-NGN-108', 'Declined', 'Pending', 'Only use project name', ''),
(9, 'L5 - Towers _ Preliminary', 'POLTON MORGAN', 'Building & Factories', '', '', '', '', 'N/A', '2022-08-31', '2022-08-22', '2022-09-05', '', '', 'Nigeria', 'Lagos', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', '', 'Specification', '', '', '', '', '', '', '', '', '', '', '', '', 109, 'BNF-L5 -NGN-109', 'Approved', 'Submitted', 'Only use project name', ''),
(10, 'Building Office at Ota _ Shell Nigeria', 'SHELL', 'Building & Factories', 'UICL', '', '', 'ATO Architect', 'N/A', '2022-08-29', '2022-08-25', '2022-09-01', '', '', 'Nigeria', 'Abeokuta', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 110, 'BNF-BUI-NGN-110', 'Approved', 'Submitted', 'Only use project name', ''),
(11, 'Construction of 5 Storey  Lecture Hall_ University of Ghana', 'Consar', 'Building & Factories', '', '', '', '', 'N/A', '2022-09-09', '2022-09-01', '2022-09-16', '', '', 'Ghana', 'Accra', 'Low', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', '', 111, 'BNF-CON-GHA-111', 'Declined', 'Pending', 'Only use project name', ''),
(12, 'ABlnBev - Gateway 6.4', 'ABlnBev', 'Building & Factories', '', '', 'WCS Quantity Surveyors', '', '6 months', '2022-09-09', '2022-09-06', '2022-09-16', '', '', 'Nigeria', 'Ogun', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', 'Instruction to Tender', 'Schedule of Basic rate', 'Schedule of labour rate', '', '', '', '', '', 'POW', 'Certificate of Authority of Signature, Previous Project, Turnover, Organogram', 112, 'BNF-ABL-NGN-112', 'Approved', 'Submitted', 'Only use project name', ''),
(13, 'MISA GLOVER - ELECTRICAL, EXTRA LOW VOLTAGE & PLUMBING INSTALLATION TENDER', 'MISA LIMITED', 'Building & Factories', 'Squarelines Limited', '', 'OJAT', 'AMARCH CONSULTANT', 'N/A', '2022-10-10', '2022-10-06', '2022-10-12', '', '', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', '', 113, 'BNF-MIS-NGN-113', 'Declined', 'Pending', 'Only use project name', ''),
(14, 'Hillside Multispeciality Hospital, Diagnostic Centre', 'ARTEC', 'Building & Factories', '', '', 'KOA', 'ARTEC', 'N/A', '', '2022-10-07', '2022-10-21', '', '', 'Nigeria', 'Abuja', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', 'Not Application', 114, 'BNF-HIL-NGN-114', 'Approved', 'In Progress', 'Only use project name', ''),
(15, 'Proposed Hospitality Development, Asaba', 'CCP', 'Building & Factories', '', '', 'CCP', '', 'N/A', '2022-10-14', '2022-10-07', '2022-10-21', '2022-10-21', '3179688516', 'Nigeria', 'Asaba', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', '', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', '', '', '', '', 115, 'BNF-PRO-NGN-115', 'Approved', 'Submitted', 'Only use project name', ''),
(16, 'LJA - GMT Creek Road Terminal Lagos', 'Julius Berger/GMT Limited', 'Building & Factories', '', '', 'TANGER MED ENGINEERING', '', 'N/A', '2022-10-13', '2022-10-10', '2022-10-20', '2022-10-20', '3850624', 'Nigeria', 'Lagos', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 116, 'BNF-LJA-NGN-116', 'Approved', 'Submitted', 'Only use project name', ''),
(17, 'Padah LNG Project', 'Orascom', 'Power', '', '', '', '', 'N/A', '2022-10-13', '2022-10-04', '2022-10-31', '', '', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 117, 'PWR-PAD-NGN-117', 'Approved', 'Submitted', 'Only use project name', ''),
(18, 'African Data Centre  - 1250kVA Miniature Substation Estimate', 'Royal HaskoningDHV Ltd', 'Power', '', '', '', '', 'N/A', '2022-10-17', '2022-10-13', '2022-10-20', '', '', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', '', 118, 'PWR-AFR-NGN-118', 'Approved', 'In Progress', 'Only use project name', ''),
(19, 'Freetown Sierra Leone Temple Project - MEP', 'Consar', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-10-13', '2022-10-18', '', '', 'Ghana', 'Accra', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', '', '', '', '', '', '', '', '', '', '', 119, 'BNF-FRE-GHA-119', 'Declined', 'Pending', 'Only use project name', ''),
(20, 'UBA Ghana Head Office Project', 'UBA/Afriland Properties', 'Building & Factories', '', '', '', '', 'N/A', '2022-10-21', '2022-10-15', '2022-11-15', '', '', 'Ghana', 'Accra', 'Very High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', 'Instruction to Tender', '', '', '', '', '', 'MOS', 'Understanding of Scope', 'POW', 'HSE, Quantity Control & Assurance, Subcontractor Procedure', 120, 'BNF-UBA-GHA-120', 'Approved', 'Submitted', 'Only use project name', ''),
(21, 'BCG Benin Tender ', 'Julius Berger', 'Building & Factories', '', '', '', '', 'N/A', '2022-10-27', '2022-10-19', '2022-11-07', '', '', 'Nigeria', 'Benin City', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 121, 'BNF-BCG-NGN-121', 'Approved', 'Submitted', 'Only use project name', ''),
(22, 'TYDF, Abuja', 'Nadeem Group', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-11-02', '2022-11-25', '', '', 'Nigeria', 'Abuja', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', '', '', 'Instruction to Tender', '', '', '', '', '', '', 'Understanding of Scope', 'POW', 'The brief introduction of the organization, Project References, Warranties & Guarantees', 122, 'BNF-TYD-NGN-122', 'Approved', 'In Progress', 'Only use project name', ''),
(23, 'ACE - Centenary City Royale Residence Abuja', 'Julius Berger', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-10-30', '2022-11-03', '', '16247131', 'Nigeria', 'Abuja', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', '', 123, 'BNF-ACE-NGN-123', 'Approved', 'Submitted', 'Only use project name', ''),
(24, 'The African Center of Excellence for Genomics of Infectious Diseases (ACEGID) Phase 2', 'Turner & Townsend', 'Building & Factories', '', '', '', '', 'N/A', '2022-11-22', '2022-11-10', '2022-11-24', '', '', 'Nigeria', 'Ogun', 'High', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', '', '', '', '', 124, 'BNF-THE-NGN-124', 'Declined', 'Pending', 'Only use project name', ''),
(25, 'Proposed Ghana DC Project', 'Arup', 'Building & Factories', '', '', '', '', 'N/A', '2022-11-14', '2022-11-11', '2022-11-25', '', '', 'Ghana', 'Accra', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', '', '', '', '', '', '', '', '', '', '', '', '', 125, 'BNF-PRO-GHA-125', 'Approved', 'In Progress', 'Only use project name', ''),
(26, 'LNW_Proposal', 'Northwest Petroleum & Gas / Primetech', 'Building & Factories', '', '', 'Primetech', '', 'N/A', '', '2022-11-15', '2022-11-25', '', '', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', '', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 126, 'BNF-LNW-NGN-126', 'Approved', 'In Progress', 'Only use project name', ''),
(27, 'ASSA New Drilling Location Preparation', 'Waltersmith', 'Oil & Gas', '', '', '', '', 'N/A', '', '2022-11-16', '2022-12-02', '', '', 'Nigeria', 'Owerri', 'Medium', 'Remeasured', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', 'Instruction to Tender', '', '', '', '', '', 'MOS', 'Understanding of Scope', 'POW', '', 127, 'ONG-ASS-NGN-127', 'Approved', 'In Progress', 'Only use project name', ''),
(28, 'EFCC Training Academy Abuja', 'EFCC/Julius Berger', 'Building & Factories', '', '', 'MBS Engineering Limited', 'GlobArch Associates', 'N/A', '', '2022-11-22', '2022-11-30', '', '', 'Nigeria', 'Abuja', 'High', 'Remeasured', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 128, 'BNF-EFC-NGN-128', 'Approved', 'In Progress', 'Only use project name', ''),
(29, 'Residential Development at Lakowe Golf & Country Estate, Lagos', 'Mixta Africa', 'Building & Factories', 'Greenhouse Inc Limited', 'Jabak Consultants', 'Topklan  Engineering Services', 'CMD + A', 'N/A', '2022-12-05', '2022-11-28', '2022-12-12', '', '', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', 'Instruction to Tender', '', '', '', '', '', 'MOS', '', 'POW', '', 129, 'BNF-RES-NGN-129', 'Approved', 'In Progress', 'Only use project name', ''),
(30, 'Rehabilitation Works of Access Road Waltersmith', 'Waltersmith', 'Oil & Gas', '', '', '', '', '15 months', '2022-12-02', '2022-11-29', '2022-12-12', '2022-12-12', '1249703503', 'Nigeria', 'Owerri', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', 'MOS', '', 'POW', '', 130, 'ONG-REH-NGN-130', 'Approved', 'Submitted', 'Only use project name', ''),
(31, 'LDC Project Eko Atlantic', 'Julius Berger', 'Building & Factories', '', '', '', '', 'N/A', '2022-12-06', '2022-12-02', '2022-12-12', '2022-12-12', '4436311', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 131, 'BNF-LDC-NGN-131', 'Approved', 'Submitted', 'Only use project name', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `integrity` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `fname`, `lname`, `email`, `password`, `integrity`, `created_by`, `updated_by`) VALUES
(1, 'Mayowa', 'Sofuye', 'm.sofuye@lambertelectromec.com', '2d73ec3d647f776cf7c20fed678e1b38', 'Admin', 'admin@lambertelectromec.com', 'admin@lambertelectromec.com'),
(2, 'Admin', 'User', 'admin@lambertelectromec.com', '608f72eb95bfaefe1a826a7dc97b3cfe', 'Admin', 'admin@lambertelectromec.com', 'admin@lambertelectromec.com'),
(3, 'Sulaimon', 'Ashafa', 's.ashafa@lambertelectromec.com', '5943fecad6384177ab1b73b08dc1959c', 'User', 'm.sofuye@lambertelectromec.com', 's.ashafa@lambertelectromec.com'),
(4, 'Tope', 'Oloidi', 't.oloidi@lambertelectromec.com', 'c7ed79ea6b0661663877a8d64f863e79', 'Admin', 'm.sofuye@lambertelectromec.com', 'm.sofuye@lambertelectromec.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civ_cities`
--
ALTER TABLE `civ_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gha_cities`
--
ALTER TABLE `gha_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngn_cities`
--
ALTER TABLE `ngn_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_info_table`
--
ALTER TABLE `project_info_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `civ_cities`
--
ALTER TABLE `civ_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `gha_cities`
--
ALTER TABLE `gha_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `ngn_cities`
--
ALTER TABLE `ngn_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `project_info_table`
--
ALTER TABLE `project_info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
