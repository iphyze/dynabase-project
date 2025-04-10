-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2023 at 03:15 PM
-- Server version: 10.3.39-MariaDB-log
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `clients_category_table`
--

CREATE TABLE `clients_category_table` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_category_table`
--

INSERT INTO `clients_category_table` (`id`, `category_name`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(2, 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(3, 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(4, 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(5, 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(6, 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(7, 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients_table`
--

CREATE TABLE `clients_table` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(255) NOT NULL,
  `clients_email` varchar(255) NOT NULL,
  `clients_website` varchar(255) NOT NULL,
  `clients_address` varchar(255) NOT NULL,
  `clients_hq_location` varchar(255) NOT NULL,
  `clients_category` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_table`
--

INSERT INTO `clients_table` (`id`, `clients_name`, `clients_email`, `clients_website`, `clients_address`, `clients_hq_location`, `clients_category`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'A&K Construction', '', '', 'Behind Setraco, Bldg Plot 527 Shehu YarAdua Way, Kado District Abuja, FCT Nigeria.', 'Abuja', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin', '2023-02-03 03:19:00'),
(2, 'African Reinsurance Corporation - Africa Re', '', '', 'Plot1679KarimuKotunStreetVictoria IslandLagosNigeria', 'Abuja', 'End User/Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'm.sofuye', '2023-01-30 10:45:00'),
(3, 'Alcon Nig Ltd', '', '', 'Plot 17 Trans Amadi Industrial Layout, Port Harcourt, Rivers State, Nigeria.', 'Port Harcourt', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:43:00'),
(4, 'Arbico Limited', '', '', 'Block 7 Plot D Industrial Cres Ilupeju 102215, Lagos.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:44:00'),
(5, 'Ato Architects', '', '', '12 Dr Ladi Alakija, Avenue Lekki Phase 1', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:47:00'),
(6, 'Avantis Engineering', '', '', '', '', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:48:00'),
(7, 'Avison Young', '', '', '65, Gresham Street London, EC2V7NQ Unitied Kingdom.', 'London', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:37:00'),
(8, 'Baron Architect', '', '', '292 Murtala Muhammed Way, yaba, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:50:00'),
(9, 'Blessing Charles', '', '', '100 EeastWest road, Rumuokoro, PortHarcourtm Rivers State,Nigeria', 'Port Harcourt', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:51:00'),
(10, 'Bovell Ross', '', '', 'Block B Suite 6 The Crescent East, 3 Eglin Road, Sunninghill Johannesburg.', 'South Africa', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:53:00'),
(11, 'Consar', '', '', 'Plot No. 11 Asokwa Industrial Area Kumasi, Ghana.', 'Ghana', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:55:00'),
(12, 'Consar Limited', '', '', 'PMB 25 Cantoment, Post Office Accra Ghana.', 'Ghana', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:56:00'),
(13, 'Consol Associate', '', '', '12 Jasper Ike street, off TF Kuboye road by oniru market lekki, phase1 lagos.', 'Lagos', 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:58:00'),
(14, 'Costec Consultant', '', '', 'Plot 21, Awkuzu Street,off Providence Street, Lekki Phase 1, Lekki, Lagos State', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:59:00'),
(15, 'CPMS', '', '', 'Comprehensive Project Management Services Ltd 3rd floor Krestal laure Complex 376 Ikorodu road, Maryland Lagos.', 'Lagos', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:00:00'),
(16, 'Craneburg', '', '', '29, Bourdillon Rd Ikoyi, Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:03:00'),
(17, 'Dag Industries Nigeria Limited', '', '', 'No-11, Sapara Williams Street, Off Ladipo Oluwole Street, Ikeja Industrial Estate, Lagos, Nigeria.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:04:00'),
(18, 'Delano Architect', '', '', '86B Isale Eko Avenue, Dolphin Estate Ikoyi Lagos.', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:05:00'),
(19, 'Desimone Limited', '', '', '64 Eric Moore Road, Iganmu Industrial Estate Surulere Lagos, Nigeria West Africa.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:06:00'),
(20, 'Ecad Architect', '', '', '3rd Floor 62 Awolowo Road, lkoyi Lagos, Nigeria', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:07:00'),
(21, 'Eris Property Limited', '', '', '', 'Ghana', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:09:00'),
(22, 'Faan', '', '', 'FAAN Headquarter, Ikeja, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:10:00'),
(23, 'Farrow Laing', '', '', 'Lords Office Estates Building 3276 West Avenue, Centurion.', 'Ghana', 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:11:00'),
(24, 'Fidelis Eguaoje', '', '', '64 Eric Moore Road, Lagos Nigeria.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:13:00'),
(25, 'First Bank Nigeria', '', '', '35 Samuel Asabia House, Marina Branch, Lagos.', 'Lagos', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:14:00'),
(26, 'FMA Architect', '', '', 'FMA Architects Ltd Penthouse Suite St Nicholas House Catholic Mission Street Lagos.', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:16:00'),
(27, 'Foab Partnership', '', '', '17 Morris Street, Abule Ijesha, Yaba, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:16:00'),
(28, 'Folmak Partnership', '', '', 'Chartered Quantity Surveyors Cost Advisers Project Managers 2nd Floor 14 Amara Olu Street By Zenith Bank Agidingbi CBD Ikeja Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:29:00'),
(29, 'Gabonn Associate', '', '', '8B Oluwole Street Lekki Phase I Lekki, Eti-Osa, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:31:00'),
(30, 'Goldkey Developers Limited', '', '', 'PwC Tower A4 Rangoon Lane Cantonments City', 'Ghana', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:54:00'),
(31, 'Harioto Limited', '', '', 'Plot 11 Gbagada Oworonshoki Express, Gbagada, Lagos.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 01:59:00'),
(32, 'Haussman Group', '', '', '2 Onikoyi Rd, Ikoyi, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:00:00'),
(33, 'HOS Consult Limited', '', '', '55 Moleye street off Herbert Marcaulay Alagomeji Yaba lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:07:00'),
(34, 'Interstate Architects', '', '', '45, Muritala Muhammed Int, Airport Rd, Tinuose House, Ajao Estate', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:08:00'),
(35, 'Iron Product Limited (IPL)', '', '', '9 Eko Street Parkview Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:09:00'),
(36, 'Ispaceinterior', '', '', '202B Etim Iyang Crescent, V.I', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:10:00'),
(37, 'Ivy Engineering Services', '', '', '6 Taiwo Close, off Kudirat Abiola way, Alausa-Ikrja Lagos.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:10:00'),
(38, 'James Cubbit', '', '', '1 Alfred Rewane Road falomo ikoyi lagos', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:24:00'),
(39, 'Justmoh', '', '', 'Accra', 'Ghana', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:25:00'),
(40, 'KOA', '', 'https://koaconsultants.com/', '12a Morris Street, Abule-Ijesha, Yaba, Lagos', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'm.sofuye', '2023-03-14 10:26:00'),
(41, 'Loa Architect', '', '', '134 Obafemi Awolowo Way, Ikeja Lagos.', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:28:00'),
(42, 'M. Barbisotti & Sons (MBS)', '', '', 'Akasanoma Rd, Tema, Ghana', 'Ghana', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:30:00'),
(43, 'MAR & MOR', '', '', '', '', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:31:00'),
(44, 'Mayssa International Limited', '', '', '202B Etim Inyang Crescent, Victoria Island Lagos.', 'Lagos', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:33:00'),
(45, 'Medanha & Sousa', '', '', 'North Labone, Accra, Ghana', 'Ghana', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:34:00'),
(46, 'MFA Patnership', '', '', '4 ADCS Street U3 Estate Lekki Phase1 Oceanside Lagos.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:36:00'),
(47, 'Mtn', '', '', 'MTN Head office Falomo', 'Lagos', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:37:00'),
(48, 'Nadeem Group', '', '', 'SED Office Sunrise Hills Asokoro district Abuja', 'Abuja', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:38:00'),
(49, 'NCDMB', '', '', '', '', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:39:00'),
(50, 'NNPC Group', '', '', '', 'Lagos', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:39:00'),
(51, 'OJ &T Consultant', '', '', '2 Ebun St, Yaba Lagos Mainland.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:42:00'),
(52, 'Primetech Design And Engineering Nig Ltd', '', '', 'Plot 305 Idu Industrial Area 1B Idu 900102 FCT Abuja Nigeria.', 'Abuja', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:43:00'),
(53, 'Profica', '', '', 'First Floor (1b), 28 Raymond Njoku Road, Off Awolowo Rd, Ikoyi, Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:45:00'),
(54, 'Pro-M Limited', '', '', '15B Adewole Kuku Street,Lekki Phase One Lagos', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:44:00'),
(55, 'PWO Architect', '', '', '25 Ologun Agbaje Str Eti-Osa 106104 Lagos', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:46:00'),
(56, 'RIB Pentad Quantity Surveyors', '', '', '1st Floor Banking Court Menlyn Maine Central Square Cnr Aramist Corobay Avenue Waterkloof Glen', 'Ghana', 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:48:00'),
(57, 'Sea Surveyors Ltd', '', '', '3rd Floor, C.T. Investment Building, 3/5. Boyle Street, Onikan', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:55:00'),
(58, 'Setraco', '', '', 'Setraco Building Plot 526, Shehu YarAdua Way Kado District Abuja. P.M.B. 105, Garki, Abuja, Nigeria', 'Abuja', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:59:00'),
(59, 'Shaoma Nigeria Limited', '', '', '11 Kola Adeyeye, Ikosi - CMD Road Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:02:00'),
(60, 'Studio Ola Ltd', '', '', '12A, Morris Street, \\n Off Herbert Macaulay Way,\\nAbule-Ijesha,\\nYaba, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:06:00'),
(61, 'Tecnimont', '', '', 'ViaGaetanoDeCastillia6A20124MilanItaly', 'Italy', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:10:00'),
(62, 'Tesrt', '', '', '', '', '', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(63, 'Tillyard', '', '', 'Fourth Floor, 241, Igbosore Road', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:15:00'),
(64, 'Topklan Eng. Services', '', '', 'Unit 302 56, Olonode Street, Off Hughes Avenue Alagomeji, Yaba, Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:16:00'),
(65, 'Total E & P', '', '', 'Plot 25, Trans Amadi Industrial Layout ', 'Port Harcourt', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:17:00'),
(66, 'Total E&P Nigeria Cpfa Ltd.', '', '', '35 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:17:00'),
(67, 'Transcorp Hotels', '', '', '1, Aguiyi Ironsi Street, Maitama, PMB 200, Abuja Nigeria', 'Abuja', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:18:00'),
(68, 'Triumph', '', '', '1A Akinyemi Avenue Lekki Epe ExpressWay Oniru Lagos Nigeria', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:20:00'),
(69, 'Turner And Townsend', '', '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:21:00'),
(70, 'UICL', '', '', 'United Integrated Construction Ltd. 22B idowu Taylor street VI 2nd Floor Lagos', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:22:00'),
(71, 'Unecon', '', '', '18 Johnson Street Off Coker Road Ilupeju Estate.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:23:00'),
(72, 'Unicef', '', '', '', '', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:23:00'),
(73, 'Uraga Power Solutions', '', '', '6B Mekunwen Road, Off Oyinkan Abayomi Drive, Ikoyi, Lagos', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:24:00'),
(74, 'Vita Construction', '', 'https://vita-construction.com/', 'Plot 18, Aminu Jinadu Close, Iganmu Industrial Estate, Surulere, Lagos ', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'm.sofuye', '2023-02-27 08:35:00'),
(75, 'Waltersmith Petroman Oil Limited', '', '', '47 Glover Road Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:25:00'),
(76, 'Wartsila', '', '', '', '', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-11 20:38:48', 'admin', '2023-01-11 09:05:00'),
(77, 'JOJO & PARTNERS', '', '', '31 Gbagada Road, Bariga Lagos', 'Lagos', 'General Contractor', 'm.sofuye@lambertelectromec.com', '2023-01-23 08:17:33', 'admin', '2023-01-23 08:39:00'),
(78, 'TOTAL ARIBA', '', '', 'Port Harcourt', 'Lagos', 'End User / Owner', 'm.sofuye@lambertelectromec.com', '2023-01-27 11:16:19', 'm.sofuye@lambertelectromec.com', '2023-01-27 11:16:19'),
(79, 'Consultants Collaborative Partnership (CCP)', '', '', ' Plot 17, Block, 25 Chief Yesufu Abiodun Oniru Rd, Oniru 101241, Victoria Island, Lagos', 'Lagos', 'Project Manager', 'm.sofuye@lambertelectromec.com', '2023-01-30 09:40:11', 'm.sofuye@lambertelectromec.com', '2023-01-30 09:40:11'),
(80, 'DUFRANC NIGERIA', '', '', 'DU-FRANC & PARTNERS LIMITED  3rdFloor  179 Igbosere Road,  Lagos Island', 'Lagos', 'Qs Manager', 'm.sofuye@lambertelectromec.com', '2023-01-30 10:40:57', 'm.sofuye@lambertelectromec.com', '2023-01-30 10:40:57'),
(81, 'FRANCOISE AKINOSHOLA LTD', '', '', '13B  Abimbola Okulaja Close Lekki Phase 1', 'Lagos', 'Architects', 'm.sofuye@lambertelectromec.com', '2023-02-09 11:12:47', 'admin', '2023-02-09 02:03:00'),
(82, 'Monterosa Construction Limited', '', 'https://desimoneltd.com/companies/monterosa-construction-limited/', '64 Eric More Road, Industrial Estate , Surulere', 'Lagos', 'General Contractor', 'm.sofuye@lambertelectromec.com', '2023-02-09 13:30:21', 'm.sofuye@lambertelectromec.com', '2023-02-09 13:30:21'),
(83, 'ACCL', '', 'https://www.acclarchitects.com', '2nd Floor, FABAC Centre, 3 Ligali Ayorinde Avenue, Victoria Island, Lagos, Nigeria', 'Lagos', 'Architects', 's.ashafa@lambertelectromec.com', '2023-02-13 12:17:51', 's.ashafa@lambertelectromec.com', '2023-02-13 12:17:51'),
(84, 'APD Project Management Ltd', '', 'https://apd.com.ng/', ' 5th floor, Church House, 29 Marina Rd, Lagos Island 102273, Lago', 'Lagos', 'Project Manager', 's.ashafa@lambertelectromec.com', '2023-02-13 12:21:23', 's.ashafa@lambertelectromec.com', '2023-02-13 12:21:23'),
(85, 'Atkins Associates', '', '', '10 Ologolo Village Road, Lekki Epe Exp Way, Lagos.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-13 12:26:48', 's.ashafa@lambertelectromec.com', '2023-02-13 12:26:48'),
(86, 'CA Consultants Limited', '', '', '6th floor, UBA House 57, Marina Lagos Nigeria.', 'Lagos', 'Mep Consultant', 's.ashafa@lambertelectromec.com', '2023-02-13 12:28:03', 's.ashafa@lambertelectromec.com', '2023-02-13 12:28:03'),
(87, 'Cappa Dalberto', '', 'https://www.capdal.com/', '72 Campbell St, Lagos Island 102273, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-13 12:30:03', 's.ashafa@lambertelectromec.com', '2023-02-13 12:30:03'),
(88, 'Courtney Michael Partnership', '', '', '173B Isale Eko Avenue Dolphin Estate Ikoyi Lagos', 'Lagos', 'Project Manager', 's.ashafa@lambertelectromec.com', '2023-02-13 12:32:30', 's.ashafa@lambertelectromec.com', '2023-02-13 12:32:30'),
(89, 'Dufranc', '', '', '19 Military road, Onikan, Lagos', 'Lagos', 'Qs Manager', 's.ashafa@lambertelectromec.com', '2023-02-13 12:33:34', 's.ashafa@lambertelectromec.com', '2023-02-13 12:33:34'),
(90, 'INZAG Germany GMBH', '', '', 'Mezzanine Floor One Airport Square  Plot 21 Airport City Accra Ghana.', 'Ghana', 'General Contractor', 's.ashafa@lambertelectromec.com', '2023-02-13 12:35:38', 's.ashafa@lambertelectromec.com', '2023-02-13 12:35:38'),
(91, 'Julius Berger', '', 'https://.julius-berger.com', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 's.ashafa@lambertelectromec.com', '2023-02-13 12:37:40', 'm.sofuye', '2023-04-13 10:29:00'),
(92, 'Ladol Free Zone', '', '', 'LADOLFree Zone Apapa Port Tarkwa Bay Lagos Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-13 12:39:36', 's.ashafa@lambertelectromec.com', '2023-02-13 12:39:36'),
(93, 'MAN Enterprise', '', '', 'Achrafieh Charles MalekAveSole Center6th floor Beirut Lebanon', 'Lebanon', 'General Contractor', 's.ashafa@lambertelectromec.com', '2023-02-13 12:44:16', 's.ashafa@lambertelectromec.com', '2023-02-13 12:44:16'),
(94, 'Megastar', '', 'https://megastarng.com/', '100 East West Road, Rumuokoro, Port Harcourt, Rivers State, Nigeria', 'Port Harcourt', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-13 12:46:29', 's.ashafa@lambertelectromec.com', '2023-02-13 12:46:29'),
(95, 'MICHELETTI & CO LTD', '', '', 'Head Office Pantang Hospital Road PMBCT 281 Cantonments', 'Ghana', 'General Contractor', 's.ashafa@lambertelectromec.com', '2023-02-13 12:55:43', 's.ashafa@lambertelectromec.com', '2023-02-13 12:55:43'),
(96, 'Monterosa Construction', '', '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 's.ashafa@lambertelectromec.com', '2023-02-13 13:02:30', 's.ashafa@lambertelectromec.com', '2023-02-13 13:02:30'),
(97, 'UBA', '', '', 'UBA House, 57 Marina, Lagos Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-13 13:04:25', 's.ashafa@lambertelectromec.com', '2023-02-13 13:04:25'),
(98, 'WBHO', '', '', '156 Ophans Crescent, North Labone, Accra, Ghana', 'Ghana', 'General Contractor', 's.ashafa@lambertelectromec.com', '2023-02-13 13:05:40', 's.ashafa@lambertelectromec.com', '2023-02-13 13:05:40'),
(99, 'Popham Walter Odusote', '', 'https://www.pwoarch.com', '4th floor, South Atlantic Petroleum Towers, No 1, Adeola Odeku street, Victoria Island, Lagos, Nigeria. ', 'Lagos', 'Project Manager', 's.ashafa@lambertelectromec.com', '2023-02-14 08:23:13', 's.ashafa@lambertelectromec.com', '2023-02-14 08:23:13'),
(100, '21st Century Evolution System', '', 'https://www.21st-evolution.com', '5th Floor, 11 Awolowo Road, Ikoyi', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 09:16:14', 's.ashafa@lambertelectromec.com', '2023-02-14 09:16:14'),
(101, 'Rubicon', '', 'https://group.rubiconsa.com', 'Unit 9 & 10, Topaz Boulevard Montague Park, Montague Park, Cape Town', 'South Africa', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 10:15:18', 's.ashafa@lambertelectromec.com', '2023-02-14 10:15:18'),
(102, 'Schneider Electric', '', 'https://se.com/ng', '1 Tunder Gafar Close, Off Adeniyi Jones, Ikeja, Lagos,  Nigeria.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 10:30:03', 's.ashafa@lambertelectromec.com', '2023-02-14 10:30:03'),
(103, 'Arabi Bello & Associates', '', 'https://www.arabibello.com', '20 Ekoro-Oruro River Street, Off Osun Crescent, Off IBB Boulevard, Maitama - Abuja', 'Abuja', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 10:37:58', 's.ashafa@lambertelectromec.com', '2023-02-14 10:37:58'),
(104, 'AOS Orwell', '', 'https://www.aosorwell.com', '272, Trans Amadi Industrial Layout, Port Harcourt, Nigeria', 'Port Harcourt', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 11:17:27', 's.ashafa@lambertelectromec.com', '2023-02-14 11:17:27'),
(105, 'Aveon Offshore', '', '', '50C Glover Road, Ikoyi, Lagos,  Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 11:32:11', 's.ashafa@lambertelectromec.com', '2023-02-14 11:32:11'),
(106, 'Hyprops Nigeria Limited', '', 'https://www.hyprops.com', '6 Ojulari Street, Off Kusenla Road, Ikate Elegushi, Lekki, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 12:29:00', 's.ashafa@lambertelectromec.com', '2023-02-14 12:29:00'),
(107, 'AfreximBank', '', 'https://www.afreximbank.com', 'No. 2 Gnassingbe Eyadema Street Off Yakubu Gowon Crescent Asokoro, Abuja, Nigeria', 'Abuja', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 13:19:39', 's.ashafa@lambertelectromec.com', '2023-02-14 13:19:39'),
(108, 'Jinko Solar', '', 'http://www.jinkosolar.com', 'Jinko Building. 99 Shouyang Road, Jingan District, Shangai 200072, China', 'China', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 13:41:33', 's.ashafa@lambertelectromec.com', '2023-02-14 13:41:33'),
(109, 'Siemens', '', '', 'Theilerstrasse 1a 6300 Zug Switzerland', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 13:54:11', 's.ashafa@lambertelectromec.com', '2023-02-14 13:54:11'),
(110, 'Siemens Energy', '', 'https://www.siemens-energy.com', '1 waterside south, LN5 7FD Lincoln, United kingdom', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 13:58:15', 's.ashafa@lambertelectromec.com', '2023-02-14 13:58:15'),
(111, 'Preemtech BV', '', '', '', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 14:28:16', 's.ashafa@lambertelectromec.com', '2023-02-14 14:28:16'),
(112, 'Zenith Bank Plc', '', 'https://www.zenithbank.com', 'Plot 87, Ajose Adeogun Street, Victoria Island, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 14:33:02', 's.ashafa@lambertelectromec.com', '2023-02-14 14:33:02'),
(113, 'Armada', '', 'https://www.armadaint.com', 'Aksoy Residence, 1476 Sokak, No. 2 D. 15 Alsancak, 35220 Izmir, Turkiye', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-14 14:37:56', 's.ashafa', '2023-02-14 02:38:00'),
(114, 'CKR Consulting Engineers', '', 'https://www..ckr.co.za', '2nd  floor, Office 203, Nr. 11 9th Str, 104 Oxford Building, Houghton Estate, Johannesburg, 2198,  South Africa', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 09:01:58', 's.ashafa@lambertelectromec.com', '2023-02-15 09:01:58'),
(115, 'Toptech Engineering Limited', '', 'https://www.toptechengineeringltd.com', '9, Oguntona Crescent, off Oworonshoki/Oshodi Expressway, Opp, UPS Nig Ltd. Gbagada Phase 1, Gbagada, Lagos - Nigeria.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 09:10:45', 's.ashafa@lambertelectromec.com', '2023-02-15 09:10:45'),
(116, 'SVA', '', 'https://www.svarchitects.com', '3rd Floor, 19th Ninth Street, Houghton Estate, Johannesburg, 2196, South Africa', 'South Africa', 'Architects', 's.ashafa@lambertelectromec.com', '2023-02-15 14:35:42', 's.ashafa@lambertelectromec.com', '2023-02-15 14:35:42'),
(117, 'Medallion', '', 'https://www.medallion.ng', '8A Saka Tinubu Street, Victoria Island, Lagos.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 14:42:02', 's.ashafa@lambertelectromec.com', '2023-02-15 14:42:02'),
(118, 'Ouranos', '', 'https://ouranos.com.ng', '19B Community Road, Off Allen Avenue, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 14:48:04', 's.ashafa@lambertelectromec.com', '2023-02-15 14:48:04'),
(119, 'OG Power', '', 'https://www.ogpower.com', '', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 14:50:53', 's.ashafa@lambertelectromec.com', '2023-02-15 14:50:53'),
(120, 'IEPM', '', 'https://www.iepm-ng.com', '7 Adetoro Adelaja, Magodo GRA Phase 2, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 14:54:56', 's.ashafa@lambertelectromec.com', '2023-02-15 14:54:56'),
(121, '2G Energy', '', 'https://www.2-g.com', 'Benzstrasse 3 | 48619 Heek Germany', 'Germany', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-15 15:21:16', 's.ashafa@lambertelectromec.com', '2023-02-15 15:21:16'),
(122, 'NIBSS', '', 'htttps://www.nibss-plc.com.ng', 'Plot 2130 Ahmadu Bello Way, Victoria Island, P.M.B 12617, Lagis, Nigeria.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:09:11', 's.ashafa@lambertelectromec.com', '2023-02-16 08:09:11'),
(123, 'Powerup Renewables', '', 'https://www.powerup.com', 'Plot 5, Chief Yesufu Abiodu Oniru Street, Victoria Island, Lagos, Nigeria.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:11:02', 's.ashafa@lambertelectromec.com', '2023-02-16 08:11:02'),
(124, 'Maire Tecnimont ', '', 'https://www.mairetecnimont.it', 'Tecnimont House, Chiunchot Bunder, 504, Link Road, Matad (w), Mumbai 400 064, India.', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:14:21', 's.ashafa@lambertelectromec.com', '2023-02-16 08:14:21'),
(125, 'B.Appah Electrical Limited', '', '', 'No.  7 Patrice Lumumba Close Airport Residential Area Accra P.O Box OS 7 Osu Accra, Ghana', 'Ghana', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:18:16', 's.ashafa@lambertelectromec.com', '2023-02-16 08:18:16'),
(126, 'Sumetzberger', '', 'https://www.sumetzberger.com', 'ing. sumetzberger GMBH., A 1110 Vienna, Leberstrasse 1608', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:45:35', 's.ashafa@lambertelectromec.com', '2023-02-16 08:45:35'),
(127, 'Mota-Engil', '', 'https://www.mota-engil.com', '10, Mekunwen Road, Ikoyi = 106104, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:47:01', 's.ashafa@lambertelectromec.com', '2023-02-16 08:47:01'),
(128, 'Coleman Wires and Cables', '', 'https://www.colemancables.com', 'km34 Lagos-Ibadan Expressway, Arepo, Ogun State, Nigeria', 'Ogun State', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:48:46', 's.ashafa@lambertelectromec.com', '2023-02-16 08:48:46'),
(129, 'TOA Electronics', '', 'https://www.toasa.co.za', '', 'South Africa', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:50:39', 's.ashafa@lambertelectromec.com', '2023-02-16 08:50:39'),
(130, 'PAIX', '', 'https://www.paix.co', ' 42 Ring Road Central, P.O  Box 1632 Accra, Ghana', 'Ghana', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 08:52:01', 's.ashafa@lambertelectromec.com', '2023-02-16 08:52:01'),
(131, 'Panaserv Nigeria Limited', '', '', '247B Muri Okunola Street, Victoria Islam, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 09:59:27', 's.ashafa@lambertelectromec.com', '2023-02-16 09:59:27'),
(132, 'Altitude', '', 'https://www.altituderesidence.com', '', 'Ghana', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 10:02:11', 's.ashafa@lambertelectromec.com', '2023-02-16 10:02:11'),
(133, 'Miele ', '', 'https://www.mieleng.com', '53, Gana Street, Maitama, Abuja.', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 10:03:30', 's.ashafa@lambertelectromec.com', '2023-02-16 10:03:30'),
(134, 'ReliaBuild', '', 'https://www.reliabuild.com.ng', '21 Parakou Crescent,Wuse 2, Abuja', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 10:05:01', 's.ashafa@lambertelectromec.com', '2023-02-16 10:05:01'),
(135, 'Nestle Ghana Ltd', '', '', 'Nestle Ghana Ltd, Tema Factory P.O. Box 8350 Tema.', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 10:06:36', 's.ashafa@lambertelectromec.com', '2023-02-16 10:06:36'),
(136, 'Engie', '', 'https://www.engie.com', 'immeuble Greenburo Cocody - Banque Mondiale 08 BO 2953 Abidjan 08 Cote D\'ivoire', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 10:08:39', 's.ashafa@lambertelectromec.com', '2023-02-16 10:08:39'),
(137, 'Unique Josap Engineering ', '', 'https://www.uniquejosap.com', 'UJE Plaza, Rowi Juction, Akuetteh Tawiah St. P.O Box Af 484, Adenta', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 10:44:26', 's.ashafa', '2023-02-16 10:56:00'),
(138, 'Archtect', '', 'https://www.archtectgroupnigeria.com', '8, akinwalw street, opp. Nationwide petrol station Yaya Abatan, Ogba - Ikeja, Lagos', 'Lagos', 'Architects', 's.ashafa@lambertelectromec.com', '2023-02-16 11:02:11', 's.ashafa@lambertelectromec.com', '2023-02-16 11:02:11'),
(139, 'Rainoil', '', 'https://www.rainoil.com.ng', 'Plot 8, Block 116, Akiogun Road, By Bosun Adekoya Street, Lekki, Lagos.', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 11:05:23', 's.ashafa@lambertelectromec.com', '2023-02-16 11:05:23'),
(140, 'Billing Cost Associates', '', 'https://www.billingcostassociates.com', '2nd floor Cross\'s Grace House,  Macarthy Street, Onikan Lagos.', 'Lagos', 'Qs Manager', 's.ashafa@lambertelectromec.com', '2023-02-16 11:07:06', 's.ashafa@lambertelectromec.com', '2023-02-16 11:07:06'),
(141, 'Banah-Moshel Projects Limited', '', 'https://www.bmproltd.com', 'Deco Orbit,  16 Alaba Willianms Street, Lekki Phase 1, Lagos', 'Lagos', 'Project Manager', 's.ashafa@lambertelectromec.com', '2023-02-16 11:08:59', 's.ashafa@lambertelectromec.com', '2023-02-16 11:08:59'),
(142, 'Verde', '', 'https://www.verde.ie', '', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 11:14:09', 's.ashafa@lambertelectromec.com', '2023-02-16 11:14:09'),
(143, 'Tetracom', '', 'https://www.tetracom.com.ib', 'HolcoM Bldg - 1st Floor - Block A - Corniche El Nahr P.O Box 16 6666 Beirut 1100 2140, Lebanon', 'Lebanon', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-16 11:20:00', 's.ashafa@lambertelectromec.com', '2023-02-16 11:20:00'),
(144, 'Ahmed+Partners', '', '', '3 Ali Akilu Road, Kaduna Nigeria', 'Kaduna', 'Qs Manager', 's.ashafa@lambertelectromec.com', '2023-02-16 11:23:50', 's.ashafa@lambertelectromec.com', '2023-02-16 11:23:50'),
(145, 'MAN Energy Solutions', '', 'https://www.man-es.com', 'First FRloor (Rear Wing), Bunmi\'s Place 37B Opebi Road, Ikeja, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 08:31:52', 's.ashafa@lambertelectromec.com', '2023-02-17 08:31:52'),
(146, 'Nevadic Chemicals', '', 'https://www.nevadic.com', 'Plot 14A, Block 53, Adebayo Doherty Road, Lekki Phase 1, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 08:35:06', 's.ashafa@lambertelectromec.com', '2023-02-17 08:35:06'),
(147, 'First Synergi Construction  Limited', '', 'https://www.firstsynergiconstruction.com', '17 Emma Abimbola Cole Street, Lekki Scheme 1, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 08:39:47', 's.ashafa@lambertelectromec.com', '2023-02-17 08:39:47'),
(148, 'Horatio Limited', '', 'https://ww.horatiolimited.com', 'Plot 11, Redmption Crescent, Gbagada Industrial Estate, Oworonshoki-Apapa Expressway, Gbagada, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 08:49:18', 's.ashafa@lambertelectromec.com', '2023-02-17 08:49:18'),
(149, 'Elektron', '', 'https://www.elektronenergy.com', '8, Gabaro Close, Victoria Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 08:54:40', 's.ashafa@lambertelectromec.com', '2023-02-17 08:54:40'),
(150, 'Stanbic Bank Ghana', '', '', 'Stanbic Heights 215 South Liberation Link, Airport City, P.O. Box CT 2344, Cantonment, Accra, Ghana.', 'Ghana', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 08:57:56', 's.ashafa@lambertelectromec.com', '2023-02-17 08:57:56'),
(151, 'Beneprojecti Nig.  Ltd', '', 'https://www.beneprojecti.com', 'Plot 9, Olabanji Olajide Street, Off Mobolaji Johnson Estate, Lekki Phase 1, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 09:01:21', 's.ashafa@lambertelectromec.com', '2023-02-17 09:01:21'),
(152, 'Renergy Power Solution', '', 'https://www.renergypowersolutions.com', 'Plot 4, Rehoboth Close Off Castle and temple drive, Lekki Phase 1, Lagos', 'Lagos', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 09:07:24', 's.ashafa@lambertelectromec.com', '2023-02-17 09:07:24'),
(153, 'Schrack Seconet', '', 'https://www.schrack-seconet.com', 'A-1120 Vienna Eibesbrunnergasse 18', '', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 09:12:36', 's.ashafa@lambertelectromec.com', '2023-02-17 09:12:36'),
(154, 'Artec Practice Limited', '', '', '2 Euphrates Street, Off Aguiyi Ironsi, Maitama, FCT-Abuja', 'Abuja', 'Other Consultants', 's.ashafa@lambertelectromec.com', '2023-02-17 09:15:09', 's.ashafa@lambertelectromec.com', '2023-02-17 09:15:09'),
(155, 'ZUTARI IMPACT ENGINEERING', '', 'https://www.zutari.com/', '5 Admiralty Street. Waterside, off Admiralty way, Lekki Phase 1', 'Lagos', 'General Contractor', 'm.sofuye@lambertelectromec.com', '2023-02-22 11:05:08', 'm.sofuye@lambertelectromec.com', '2023-02-22 11:05:08'),
(156, 'MainOne', '', 'https://www.mainone.net/', 'FABAC Centre, 3B Ligali Ayorinde St, Victoria Island, Lagos', 'Lagos', 'General Contractor', 'm.sofuye@lambertelectromec.com', '2023-02-22 12:00:13', 'm.sofuye@lambertelectromec.com', '2023-02-22 12:00:13'),
(157, 'MEARSK', '', 'https://www.maersk.com/', 'Maersk Procurement  Godrej Two, Pirojshanagar,  Vikhroli East, Mumbai 400079 ', 'Mumbai', 'End User / Owner', 'm.sofuye@lambertelectromec.com', '2023-02-22 14:07:38', 'm.sofuye@lambertelectromec.com', '2023-02-22 14:07:38'),
(158, 'Guarantee Trust Bank PLC (GTBank)', '', 'https://www.gtbank.com/', 'Block 5, Victoria Island, Annex, Lekki ', 'Lagos', 'End User / Owner', 'm.sofuye@lambertelectromec.com', '2023-02-22 15:43:48', 'm.sofuye@lambertelectromec.com', '2023-02-22 15:43:48'),
(159, 'GAAD Integrated Services Limited', '', '', '2 Somade Alley St, Obanikoro 102216, Lagos', 'Lagos', 'Mep Consultant', 'm.sofuye@lambertelectromec.com', '2023-03-01 14:02:16', 'm.sofuye@lambertelectromec.com', '2023-03-01 14:02:16'),
(160, 'G3 Systems Limited', '', 'https://us-west-2.protection.sophos.com/?d=g3-systems.co.uk&u=aHR0cDovL3d3dy5nMy1zeXN0ZW1zLmNvLnVrLw==&p=m&i=NjNjNjU5Mzg1ODUyZWQyMzRiMGIwNjA0&t=UktxWXNGRnF1cDBXNFZxT21lVm9GSTlpY0p1MVpSbVZTdjdzMDZxbERkaz0=&h=909b283df2974ea98bc5d6e289d45f8b&s=AVNPUEhUT0NFT', 'Brunel Building, 11 Mereside, Osprey Quay, Portland, Dorset, DT5 1PY, UK ', 'United Kingdom', 'Project Manager', 'm.sofuye@lambertelectromec.com', '2023-05-11 12:43:12', 'm.sofuye@lambertelectromec.com', '2023-05-11 12:43:12'),
(161, 'IMEASSESTS', '', 'https://imeassets.com', '1. Towry Cl., Victoria Island, Lagos 106104, Nigeria', 'Lagos', 'Project Manager', 'm.sofuye@lambertelectromec.com', '2023-05-11 17:02:31', 'm.sofuye@lambertelectromec.com', '2023-05-11 17:02:31'),
(162, 'PFO Construction', '', '', 'Immeuble SCI le bd latrille Cocody, Abidjan', 'Abidjan', 'General Contractor', 'm.sofuye@lambertelectromec.com', '2023-05-17 14:31:39', 'm.sofuye@lambertelectromec.com', '2023-05-17 14:31:39'),
(163, 'APTRON', '', 'https://aptronconsults.ng/', 'Suite 126, Midel Center Plot 14, off Oladipo Diya Way (By FCT High Court Road Gudu District, 900104, Abuja', 'Abuja', 'Mep Consultant', 'm.sofuye@lambertelectromec.com', '2023-05-19 11:19:41', 'm.sofuye@lambertelectromec.com', '2023-05-19 11:19:41'),
(164, 'PNHG - Building Future', '', 'https://pn-hg.com/es/contacto', '', 'Cote D\'iviore', 'General Contractor', 'm.sofuye@lambertelectromec.com', '2023-05-22 11:39:46', 'm.sofuye@lambertelectromec.com', '2023-05-22 11:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `document_table`
--

CREATE TABLE `document_table` (
  `id` int(11) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `presentation_code` varchar(255) NOT NULL,
  `document_category` varchar(255) NOT NULL,
  `updated_content` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_table`
--

INSERT INTO `document_table` (`id`, `document_title`, `document_type`, `presentation_code`, `document_category`, `updated_content`, `document`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'New Profile Document', 'Profile', 'NPD-457', 'Nigerian Content', 'N/A', 'g45qjl_Nzekwue Ifeanyi Malcom.pdf', 'admin', '2023-01-02 20:53:03', 'admin', '2023-01-02 20:53:03'),
(2, 'Hotels Presentation (Rev 01)', 'Presentation', 'LEM-PRE-BUI-05-0822', 'Building and Factories', 'N/A', '59qs2f_Hotels Presentation.pdf', 's.ashafa', '2023-01-10 11:10:10', 's.ashafa', '2023-01-10 11:10:10'),
(3, 'Hospital and Medical Center (Rev 01)', 'Presentation', 'LEM-PRE-BUI-06-1022', 'Building and Factories', 'N/A', 'jrd70u_Hospital and Medical Center.pdf', 's.ashafa', '2023-01-10 11:18:27', 's.ashafa', '2023-01-10 11:18:27'),
(4, 'Villa Development (Rev 01)', 'Presentation', 'LEM-PRE-BUI-04-0622', 'Building and Factories', 'N/A', 'z2p15s_Villa Development.pdf', 's.ashafa', '2023-01-10 11:19:58', 's.ashafa', '2023-01-10 11:21:00'),
(5, 'Nigeria Content Tower (Rev 01)', 'Presentation', 'LEM-PRE-BUI-03-0622', 'Building and Factories', 'N/A', 'rx968y_Nigeria Content Tower.pdf', 's.ashafa', '2023-01-10 11:23:30', 's.ashafa', '2023-01-10 11:23:30'),
(6, 'Heritage Place (Rev 01)', 'Presentation', 'LEM-PRE-BUI-02-0622', 'Building and Factories', 'N/A', 'f59lba_Heritage Place.pdf', 's.ashafa', '2023-01-10 11:24:22', 's.ashafa', '2023-01-10 11:26:00'),
(7, 'Eko Towers (Rev 01)', 'Presentation', 'LEM-PRE-BUI-01-0622', 'Building and Factories', 'N/A', 'y97t3l_EKO Towers.pdf', 's.ashafa', '2023-01-10 11:25:37', 's.ashafa', '2023-01-10 11:25:37'),
(8, 'Data Center and Telecom Infrastructure (Rev 01)', 'Presentation', 'LEM-PRE-DAC-01-0822', 'Data Center', 'N/A', 'ib2na6_LEM-PRE-DAC-01-0822-Rev02 - Data Center.pdf', 's.ashafa', '2023-01-10 11:28:21', 's.ashafa', '2023-01-10 11:30:00'),
(9, 'Data Center and Telecom Infrastructure (Version 2 - Rev 01)', 'Presentation', 'LEM-PRE-DAC-02-0822', 'Data Center', 'N/A', '897bec_LEM-PRE-DAC-02-1022-Rev01 - Data Center (Version 2).pdf', 's.ashafa', '2023-01-10 11:32:19', 's.ashafa', '2023-01-10 11:32:19'),
(10, 'Hybrid Power Solutions (Rev 01)', 'Presentation', 'LEM-PRE-POW-01-1222', 'Energy Division', 'N/A', '1w9i72_LEM-PRE-POW-01-1222-Rev01 - Hybrid Power Solutions.pdf', 's.ashafa', '2023-01-10 11:36:51', 's.ashafa', '2023-01-10 11:36:51'),
(11, 'Oil and Gas', 'Presentation', 'LEM-PRE-POW-02-0822', 'Energy Division', 'N/A', '8542kq_Oil and Gas Presentation.pdf', 's.ashafa', '2023-01-10 11:42:31', 's.ashafa', '2023-01-10 11:42:31');

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
-- Table structure for table `keypersons_table`
--

CREATE TABLE `keypersons_table` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(255) NOT NULL,
  `clients_id` int(11) NOT NULL,
  `clients_email` varchar(255) NOT NULL,
  `clients_address` varchar(255) NOT NULL,
  `clients_hq_location` varchar(255) NOT NULL,
  `clients_category` varchar(255) NOT NULL,
  `key_person` varchar(255) NOT NULL,
  `key_persons_tel` varchar(255) NOT NULL,
  `key_persons_email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keypersons_table`
--

INSERT INTO `keypersons_table` (`id`, `clients_name`, `clients_id`, `clients_email`, `clients_address`, `clients_hq_location`, `clients_category`, `key_person`, `key_persons_tel`, `key_persons_email`, `title`, `info`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'African Reinsurance Corporation - Africa Re', 2, '', 'Plot1679KarimuKotunStreetVictoria IslandLagosNigeria', 'Abuja', 'End User/Owner', 'Project Management Committee', '14616820', '', '', '', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'm.sofuye', '2023-01-30 10:45:00'),
(3, 'Avantis Engineering', 3, '', '', '', 'Mep Consultant', 'John Doe', '08105342439', 'johndoe@gmail.com', '', '', 'admin@lambertelectromec.com', '2023-01-12 20:37:57', 'admin', '2023-01-12 08:39:00'),
(4, 'A&K Construction', 1, '', 'Behind Setraco, Bldg Plot 527 Shehu YarAdua Way, Kado District Abuja, FCT Nigeria.', 'Abuja', 'General Contractor', 'Christian Saab', '2348052296126', 'csaab@ak-construction.com', 'Procurement Officer', '', 's.ashafa@lambertelectromec.com', '2023-01-13 09:44:12', 'admin', '2023-02-03 03:19:00'),
(5, 'Alcon Nig Ltd', 3, '', 'Plot 17 Trans Amadi Industrial Layout, Port Harcourt, Rivers State, Nigeria.', 'Port Harcourt', 'Other Consultants', 'Project Management Committee', '014616820', '', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 09:53:50', 's.ashafa@lambertelectromec.com', '2023-01-13 09:53:50'),
(6, 'Alcon Nig Ltd', 3, '', 'Plot 17 Trans Amadi Industrial Layout, Port Harcourt, Rivers State, Nigeria.', 'Port Harcourt', 'Other Consultants', 'Trevor Keeney', '23408168131528', 'tkeeney@alcon-nig.com', 'General Manager, Strategy & Business Development', '', 's.ashafa@lambertelectromec.com', '2023-01-13 09:54:55', 's.ashafa@lambertelectromec.com', '2023-01-13 09:54:55'),
(7, 'Arbico Limited', 4, '', 'Block 7 Plot D Industrial Cres Ilupeju 102215, Lagos.', 'Lagos', 'General Contractor', 'Oladeji Omonijo', '09088990014', 'oladeji.omonijo@arbico.ng', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 09:57:46', 's.ashafa@lambertelectromec.com', '2023-01-13 09:57:46'),
(8, 'Ato Architects', 5, '', '12 Dr Ladi Alakija, Avenue Lekki Phase 1', 'Lagos', 'Architects', 'Segun Babalola', '08023720642', 'segunb@atoarchitects.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 09:58:55', 's.ashafa@lambertelectromec.com', '2023-01-13 09:58:55'),
(9, 'Avantis Engineering', 6, '', '', '', 'Mep Consultant', 'Christian A. Nadar', '', 'c.nader@avantisengineering.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:00:18', 's.ashafa@lambertelectromec.com', '2023-01-13 10:00:18'),
(10, 'Avison Young', 7, '', '65, Gresham Street London, EC2V7NQ Unitied Kingdom.', 'London', 'Other Consultants', 'Jeff Stevens', '4402079112955', 'jeff.steven@avisonyoung.com', 'Project Directors, EMEA and Consultancy', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:02:06', 's.ashafa@lambertelectromec.com', '2023-01-13 10:02:06'),
(11, 'Baron Architect', 8, '', '292 Murtala Muhammed Way, yaba, Lagos', 'Lagos', 'Other Consultants', 'Jimi Omotesho', '', 'projects@baronarchitecture.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:04:05', 's.ashafa@lambertelectromec.com', '2023-01-13 10:04:05'),
(12, 'Blessing Charles', 9, '', '100 EeastWest road, Rumuokoro, PortHarcourtm Rivers State,Nigeria', 'Port Harcourt', 'General Contractor', 'Blessing Charles', '2348072090151', 'b.charles@megastarnig.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:06:34', 's.ashafa@lambertelectromec.com', '2023-01-13 10:06:34'),
(13, 'Bovell Ross', 10, '', 'Block B Suite 6 The Crescent East, 3 Eglin Road, Sunninghill Johannesburg.', 'South Africa', 'Project Manager', 'Marcus Ross', '23407064175889', 'marcus@bovellross.com', 'Director', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:09:40', 's.ashafa@lambertelectromec.com', '2023-01-13 10:09:40'),
(14, 'Consar', 11, '', 'Plot No. 11 Asokwa Industrial Area Kumasi, Ghana.', 'Ghana', 'Other Consultants', 'Eunice Agyemang', '233302815671233', '', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:14:01', 's.ashafa@lambertelectromec.com', '2023-01-13 10:14:01'),
(15, 'Consar Limited', 12, '', 'PMB 25 Cantoment, Post Office Accra Ghana.', 'Ghana', 'General Contractor', 'Kilpatrick Atta Poku', '233541193598', 'k.poku@consarltd.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:14:53', 's.ashafa@lambertelectromec.com', '2023-01-13 10:14:53'),
(16, 'Consol Associate', 13, '', '12 Jasper Ike street, off TF Kuboye road by oniru market lekki, phase1 lagos.', 'Lagos', 'Qs Manager', 'Omosalewa Ogunwole', '07030837733', 'omosalewa@consolassociates.com', 'Ms', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:16:14', 's.ashafa@lambertelectromec.com', '2023-01-13 10:16:14'),
(17, 'Costec Consultant', 14, '', 'Plot 21, Awkuzu Street,off Providence Street, Lekki Phase 1, Lekki, Lagos State', 'Lagos', 'Other Consultants', 'A.J. Alufohai', '23408034030278', 'aj@costecconsultants.com', 'Managing Partner', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:17:53', 's.ashafa@lambertelectromec.com', '2023-01-13 10:17:53'),
(18, 'CPMS', 15, '', 'Comprehensive Project Management Services Ltd 3rd floor Krestal laure Complex 376 Ikorodu road, Maryland Lagos.', 'Lagos', 'Project Manager', 'Oluwafemi Akinterinwa', '08076726960', 'Aoluwafemi@cpmslimited.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:19:10', 's.ashafa@lambertelectromec.com', '2023-01-13 10:19:10'),
(19, 'Craneburg', 16, '', '29, Bourdillon Rd Ikoyi, Lagos.', 'Lagos', 'Other Consultants', 'Johnny Sassine', '23408140000488', 'Jsassine@craneburg.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:19:49', 's.ashafa@lambertelectromec.com', '2023-01-13 10:19:49'),
(20, 'Dag Industries Nigeria Limited', 17, '', 'No-11, Sapara Williams Street, Off Ladipo Oluwole Street, Ikeja Industrial Estate, Lagos, Nigeria.', 'Lagos', 'Other Consultants', 'Joseph Antony', '23408150682692', 'joseph@bajajnigeria.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:20:58', 's.ashafa@lambertelectromec.com', '2023-01-13 10:20:58'),
(21, 'Delano Architect', 18, '', '86B Isale Eko Avenue, Dolphin Estate Ikoyi Lagos.', 'Lagos', 'Architects', 'Bukola Abiodun', '08025435386', 'bukola@delanoarchitects.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:22:04', 's.ashafa@lambertelectromec.com', '2023-01-13 10:22:04'),
(22, 'Desimone Limited', 19, '', '64 Eric Moore Road, Iganmu Industrial Estate Surulere Lagos, Nigeria West Africa.', 'Lagos', 'General Contractor', 'Abrie Van Wyk', '2330547098155', 'abie@desimoneitd.com', 'Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:22:56', 's.ashafa@lambertelectromec.com', '2023-01-13 10:22:56'),
(23, 'Desimone Limited', 19, '', '64 Eric Moore Road, Iganmu Industrial Estate Surulere Lagos, Nigeria West Africa.', 'Lagos', 'General Contractor', 'Kwaku Kusi - Appiah', '2330209220862', 'kwakukusiappiah@desimoneltd.com', 'Tendering & Contacts Co-Ordinator', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:23:47', 's.ashafa@lambertelectromec.com', '2023-01-13 10:23:47'),
(24, 'Desimone Limited', 19, '', '64 Eric Moore Road, Iganmu Industrial Estate Surulere Lagos, Nigeria West Africa.', 'Lagos', 'General Contractor', 'Bennie Solomon', '233245520713', 'bennie@desimoneltd.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:25:04', 's.ashafa@lambertelectromec.com', '2023-01-13 10:25:04'),
(25, 'Ecad Architect', 20, '', '3rd Floor 62 Awolowo Road, lkoyi Lagos, Nigeria', 'Lagos', 'Architects', 'Leke Adekanbi', '2348025491695', 'adekanbi@ecadarchitect.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:30:24', 's.ashafa@lambertelectromec.com', '2023-01-13 10:30:24'),
(26, 'Eris Property Limited', 21, '', '', 'Ghana', 'End User / Owner', 'Nana Aba Derby', '233540124857', 'nderby@eris.com.gh', 'Development Manager Ghana', '', 's.ashafa@lambertelectromec.com', '2023-01-13 10:39:42', 's.ashafa@lambertelectromec.com', '2023-01-13 10:39:42'),
(27, 'Faan', 22, '', 'FAAN Headquarter, Ikeja, Lagos', 'Lagos', 'Other Consultants', 'Lawal Abdullahi', '23408033358048', 'lawal.abdullahi@faan.gov.ng', 'SA (Tech) to MD/CE', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:38:27', 's.ashafa@lambertelectromec.com', '2023-01-16 07:38:27'),
(28, 'Farrow Laing', 23, '', 'Lords Office Estates Building 3276 West Avenue, Centurion.', 'Ghana', 'Qs Manager', 'Brendan Gildenhuys', '270828084174', 'Brendan@farrowlaing.co.za', 'Director', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:40:20', 's.ashafa@lambertelectromec.com', '2023-01-16 07:40:20'),
(29, 'Fidelis Eguaoje', 24, '', '64 Eric Moore Road, Lagos Nigeria.', 'Lagos', 'General Contractor', 'Fidelis Eguaoje', '09060000714', 'fidelis@mclnig.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:41:33', 's.ashafa@lambertelectromec.com', '2023-01-16 07:41:33'),
(30, 'First Bank Nigeria', 25, '', '35 Samuel Asabia House, Marina Branch, Lagos.', 'Lagos', 'End User / Owner', 'Olakunle Afolabi', '07030787167', '', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:45:06', 's.ashafa@lambertelectromec.com', '2023-01-16 07:45:06'),
(31, 'FMA Architect', 26, '', 'FMA Architects Ltd Penthouse Suite St Nicholas House Catholic Mission Street Lagos.', 'Lagos', 'Architects', 'Feyishola Ogunneye', '07038429944', 'feyi@fmaarchitects.com', 'Mrs', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:46:21', 's.ashafa@lambertelectromec.com', '2023-01-16 07:46:21'),
(32, 'Foab Partnership', 27, '', '17 Morris Street, Abule Ijesha, Yaba, Lagos', 'Lagos', 'Other Consultants', 'Ayo Alao', '23408033503779', 'ayo@foab.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:49:27', 's.ashafa@lambertelectromec.com', '2023-01-16 07:49:27'),
(33, 'Folmak Partnership', 28, '', 'Chartered Quantity Surveyors Cost Advisers Project Managers 2nd Floor 14 Amara Olu Street By Zenith Bank Agidingbi CBD Ikeja Lagos', 'Lagos', 'Other Consultants', 'Hadiza Apata', '23413422312', 'folmak2002@yahoo.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:50:53', 's.ashafa@lambertelectromec.com', '2023-01-16 07:50:53'),
(34, 'Gabonn Associate', 29, '', '8B Oluwole Street Lekki Phase I Lekki, Eti-Osa, Lagos', 'Lagos', 'Other Consultants', 'Gabriel Nwapa', '23408055797144', 'gabiidoo@yahoo.co.uk', 'Director', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:52:10', 's.ashafa@lambertelectromec.com', '2023-01-16 07:52:10'),
(35, 'Goldkey Developers Limited', 30, '', 'PwC Tower A4 Rangoon Lane Cantonments City', 'Ghana', 'General Contractor', 'Isaac Chirstian', '2330249435882', 'isaac.christian@goldkeydeveloper.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:53:54', 's.ashafa@lambertelectromec.com', '2023-01-16 07:53:54'),
(36, 'Harioto Limited', 31, '', 'Plot 11 Gbagada Oworonshoki Express, Gbagada, Lagos.', 'Lagos', 'General Contractor', 'Besty Ogeh', '08035926030', 'besty.ogeh@horatiolimited.com', 'Proposal Coordinator', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:54:46', 's.ashafa@lambertelectromec.com', '2023-01-16 07:54:46'),
(37, 'Haussman Group', 32, '', '2 Onikoyi Rd, Ikoyi, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Iruaku Okonyia', '23409028860788', 'iruaku@haussmangroup.com', 'Country Lead- Nigeria', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:55:38', 's.ashafa@lambertelectromec.com', '2023-01-16 07:55:38'),
(38, 'HOS Consult Limited', 33, '', '55 Moleye street off Herbert Marcaulay Alagomeji Yaba lagos', 'Lagos', 'Other Consultants', 'Lenin Adebalogun', '08065329304', 'lenin.adebalogun@hosconsult.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:56:40', 's.ashafa@lambertelectromec.com', '2023-01-16 07:56:40'),
(39, 'Interstate Architects', 34, '', '45, Muritala Muhammed Int, Airport Rd, Tinuose House, Ajao Estate', 'Lagos', 'Other Consultants', 'Arc O.P.A Ladega', '08033303551', 'opaladega@interstatearchitects.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:57:31', 's.ashafa@lambertelectromec.com', '2023-01-16 07:57:31'),
(40, 'Iron Product Limited (IPL)', 35, '', '9 Eko Street Parkview Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'Babatunde Fatunla', '2348074141402', 'tunde@ipi.com.ng', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 07:59:01', 's.ashafa@lambertelectromec.com', '2023-01-16 07:59:01'),
(41, 'Ispaceinterior', 36, '', '202B Etim Iyang Crescent, V.I', 'Lagos', 'Other Consultants', 'Jamiu', '23408033937236', 'jamiu@ispaceinterior.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:00:04', 's.ashafa@lambertelectromec.com', '2023-01-16 08:00:04'),
(42, 'Ivy Engineering Services', 37, '', '6 Taiwo Close, off Kudirat Abiola way, Alausa-Ikrja Lagos.', 'Lagos', 'Mep Consultant', 'Dunni Olaleye', '2348033136688', 'dunni.olaleye@ivyengineers.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:00:52', 's.ashafa@lambertelectromec.com', '2023-01-16 08:00:52'),
(43, 'Justmoh', 39, '', 'Accra', 'Ghana', 'General Contractor', 'Enoch Gyasi', '2330243560421', 'enoch.gyasi@justmoh.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:02:18', 's.ashafa@lambertelectromec.com', '2023-01-16 08:02:18'),
(44, 'KOA', 40, '', '12a Morris Street, Abule-Ijesha, Yaba, Lagos', 'Lagos', 'Mep Consultant', 'James Ezechi', '2342341761229', 'oje@koaconsultants.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:03:06', 'm.sofuye', '2023-03-14 10:26:00'),
(45, 'M. Barbisotti & Sons (MBS)', 42, '', 'Akasanoma Rd, Tema, Ghana', 'Ghana', 'Other Consultants', 'Ivan Savoldelli', '233544068294', 'ivan.s@mbsghana.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:04:08', 's.ashafa@lambertelectromec.com', '2023-01-16 08:04:08'),
(46, 'Mayssa International Limited', 44, '', '202B Etim Inyang Crescent, Victoria Island Lagos.', 'Lagos', 'Project Manager', 'Olatunde Olaniyan', '08035483430', 'tunde@mayssa.com', 'Quantity Surveyors', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:05:25', 's.ashafa@lambertelectromec.com', '2023-01-16 08:05:25'),
(47, 'Medanha & Sousa', 45, '', 'North Labone, Accra, Ghana', 'Ghana', 'Other Consultants', 'Nii Kofi Doodoo', '233302797266', 'nii.dodoo@mendanhaesousa.com', 'Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:06:13', 's.ashafa@lambertelectromec.com', '2023-01-16 08:06:13'),
(48, 'MFA Patnership', 46, '', '4 ADCS Street U3 Estate Lekki Phase1 Oceanside Lagos.', 'Lagos', 'Mep Consultant', 'Chukwuemeka Nweke', '013429060', 'cnweke@mfapartnership.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:07:09', 's.ashafa@lambertelectromec.com', '2023-01-16 08:07:09'),
(49, 'Mtn', 47, '', 'MTN Head office Falomo', 'Lagos', 'End User / Owner', 'Osereime Ojo', '', 'Osereime.Ojo@mtn.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:07:45', 's.ashafa@lambertelectromec.com', '2023-01-16 08:07:45'),
(50, 'Nadeem Group', 48, '', 'SED Office Sunrise Hills Asokoro district Abuja', 'Abuja', 'General Contractor', 'Raja Tauma', '9613648266', 'elie.nammour@nadeem.com', 'CEO', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:08:51', 's.ashafa@lambertelectromec.com', '2023-01-16 08:08:51'),
(51, 'NCDMB', 49, '', '', '', 'Other Consultants', 'Emmanuel Yusuf', '', 'emmanuel.yusuf@ncdmb.gov.ng', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:09:24', 's.ashafa@lambertelectromec.com', '2023-01-16 08:09:24'),
(52, 'NNPC Group', 50, '', '', 'Lagos', 'End User / Owner', 'Suleiman Umar', '', 'Suleiman.Umar2@nnpcgroup.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:10:14', 's.ashafa@lambertelectromec.com', '2023-01-16 08:10:14'),
(53, 'OJ &T Consultant', 51, '', '2 Ebun St, Yaba Lagos Mainland.', 'Lagos', 'Mep Consultant', 'Tunde Olaniyi', '012954987', '', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:11:26', 's.ashafa@lambertelectromec.com', '2023-01-16 08:11:26'),
(54, 'Primetech Design And Engineering Nig Ltd', 52, '', 'Plot 305 Idu Industrial Area 1B Idu 900102 FCT Abuja Nigeria.', 'Abuja', 'Mep Consultant', 'Festus Ani', '08063472565', 'Festus.Ani@primetechnigeria.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:12:22', 's.ashafa@lambertelectromec.com', '2023-01-16 08:12:22'),
(55, 'Pro-M Limited', 54, '', '15B Adewole Kuku Street,Lekki Phase One Lagos', 'Lagos', 'Mep Consultant', 'Chuka Okoye', '0810004004', 'chuka@pro-mlimited.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:15:59', 's.ashafa@lambertelectromec.com', '2023-01-16 08:15:59'),
(56, 'Profica', 53, '', 'First Floor (1b), 28 Raymond Njoku Road, Off Awolowo Rd, Ikoyi, Lagos.', 'Lagos', 'Other Consultants', 'Oluwole Oke', '23408187026985', 'wole@profica.com', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:18:14', 's.ashafa@lambertelectromec.com', '2023-01-16 08:18:14'),
(57, 'PWO Architect', 55, '', '25 Ologun Agbaje Str Eti-Osa 106104 Lagos', 'Lagos', 'Architects', 'Otunyo Abed', '', 'dotunyo@pwoarch-ngr.com', 'Snr Mechanical Engineer', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:21:54', 's.ashafa@lambertelectromec.com', '2023-01-16 08:21:54'),
(58, 'RIB Pentad Quantity Surveyors', 56, '', '1st Floor Banking Court Menlyn Maine Central Square Cnr Aramist Corobay Avenue Waterkloof Glen', 'Ghana', 'Qs Manager', 'Stefan Gouws', '270123481040', 'Stefan.Gouws@za.rlb.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:22:38', 's.ashafa@lambertelectromec.com', '2023-01-16 08:22:38'),
(59, 'Sea Surveyors Ltd', 57, '', '3rd Floor, C.T. Investment Building, 3/5. Boyle Street, Onikan', 'Lagos', 'Other Consultants', 'Olufemi T. Adedayo', '2347033411275', 'tolufemi@seasurveyors.com', 'Snr Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:26:08', 's.ashafa@lambertelectromec.com', '2023-01-16 08:26:08'),
(60, 'Setraco', 58, '', 'Setraco Building Plot 526, Shehu YarAdua Way Kado District Abuja. P.M.B. 105, Garki, Abuja, Nigeria', 'Abuja', 'Other Consultants', 'Maroun Abi Habib', '23407055990908', 'maroun.abihabib@setraco.net', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:27:56', 's.ashafa@lambertelectromec.com', '2023-01-16 08:27:56'),
(61, 'Shaoma Nigeria Limited', 59, '', '11 Kola Adeyeye, Ikosi - CMD Road Lagos.', 'Lagos', 'Other Consultants', 'Alphonsus Udosen', '234809880517', 'contracts@shaomanig.com', 'Tenders/Civil Engineers', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:34:42', 's.ashafa@lambertelectromec.com', '2023-01-16 08:34:42'),
(62, 'Studio Ola Ltd', 60, '', '12A, Morris Street, \n Off Herbert Macaulay Way,\nAbule-Ijesha,\nYaba, Lagos', 'Lagos', 'Other Consultants', 'Tuoyo Jemerigbe', '2348023115085', 'tobi@studio-ola.design.com', 'MD/Principal', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:36:54', 's.ashafa@lambertelectromec.com', '2023-01-16 08:36:54'),
(63, 'Tecnimont', 61, '', 'ViaGaetanoDeCastillia6A20124MilanItaly', 'Italy', 'General Contractor', 'Tavazza Angelo Maria', '390263136323', '', 'Construction Subcontracts Manager', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:42:03', 's.ashafa@lambertelectromec.com', '2023-01-16 08:42:03'),
(64, 'Tillyard', 63, '', 'Fourth Floor, 241, Igbosore Road', 'Lagos', 'Other Consultants', 'Yemi Osisami', '23408033000559', 'yemi.osisami@tillyardng.com', 'Chartered Quantity Surveyors', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:43:58', 's.ashafa@lambertelectromec.com', '2023-01-16 08:43:58'),
(65, 'Topklan Eng. Services', 64, '', 'Unit 302 56, Olonode Street, Off Hughes Avenue Alagomeji, Yaba, Lagos.', 'Lagos', 'Other Consultants', 'Odubiyi Femi', '23408023599742', 'topklanprojects@topklan.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:45:37', 's.ashafa@lambertelectromec.com', '2023-01-16 08:45:37'),
(66, 'Total E & P', 65, '', 'Plot 25, Trans Amadi Industrial Layout ', 'Port Harcourt', 'Other Consultants', 'Anthony OBAZEE ', '2340803062382', 'Anthony.Obazee@total.com', 'Projects Admin. Manager, PHC', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:47:03', 's.ashafa@lambertelectromec.com', '2023-01-16 08:47:03'),
(67, 'Total E&P Nigeria Cpfa Ltd.', 66, '', '35 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Abidemi Oluwadamilola-Elliott', '23408135815725', 'Abidemi.ELLIOTT@tepngcpfa.com', 'Contracts & Procurement', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:47:57', 'm.sofuye', '2023-03-14 10:28:00'),
(68, 'Transcorp Hotels', 67, '', '1, Aguiyi Ironsi Street, Maitama, PMB 200, Abuja Nigeria', 'Abuja', 'Other Consultants', 'Isaac Offiah', '23408039181416', 'isaac.offiah@transcorphotelspl.com', 'Project Management Executive', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:49:20', 's.ashafa@lambertelectromec.com', '2023-01-16 08:49:20'),
(69, 'Triumph', 68, '', '1A Akinyemi Avenue Lekki Epe ExpressWay Oniru Lagos Nigeria', 'Lagos', 'General Contractor', 'Bello Ojeifo', '08035652908', 'b.ojeifo@triumphpg.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:50:52', 's.ashafa@lambertelectromec.com', '2023-01-16 08:50:52'),
(70, 'Turner And Townsend', 69, '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'Peter-James (PJ) Jacquire', '270797029213', 'PJacquire@turntown.co.za', 'Senior Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:51:51', 's.ashafa@lambertelectromec.com', '2023-01-16 08:51:51'),
(71, 'UICL', 70, '', 'United Integrated Construction Ltd. 22B idowu Taylor street VI 2nd Floor Lagos', 'Lagos', 'General Contractor', 'Abbass Atwi', '2347065199998', 'abbas@uicl.cc', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:53:50', 's.ashafa@lambertelectromec.com', '2023-01-16 08:53:50'),
(72, 'Unecon', 71, '', '18 Johnson Street Off Coker Road Ilupeju Estate.', 'Lagos', 'Mep Consultant', 'Tunde Ogunde', '08033119674', 'ogunde@uneconassociates.com', 'Engr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:02:42', 's.ashafa@lambertelectromec.com', '2023-01-16 09:02:42'),
(73, 'Unicef', 72, '', '', '', 'Other Consultants', 'Bid Regsitration Unit', '2123267000', 'nysdbidding@unicef.org', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:04:11', 's.ashafa@lambertelectromec.com', '2023-01-16 09:04:11'),
(74, 'Uraga Power Solutions', 73, '', '6B Mekunwen Road, Off Oyinkan Abayomi Drive, Ikoyi, Lagos', 'Lagos', 'General Contractor', 'Adeyemi Akolade', '08037421529', 'adeyemi.akolade@uragapowersolutions.com', 'Engr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:05:48', 's.ashafa@lambertelectromec.com', '2023-01-16 09:05:48'),
(75, 'Vita Construction', 74, '', 'Plot 18, Aminu Jinadu Close, Iganmu Industrial Estate, Surulere, Lagos ', 'Lagos', 'General Contractor', 'Louis Vacanas', '35799420651', 'louis.vacanas@vita-construction.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:06:56', 'm.sofuye', '2023-02-27 08:35:00'),
(76, 'Waltersmith Petroman Oil Limited', 75, '', '47 Glover Road Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'Uche Ngene', '07034145974', 'uche.ngene@waltersmithng.com', 'Mrs', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:07:45', 's.ashafa@lambertelectromec.com', '2023-01-16 09:07:45'),
(77, 'Wartsila', 76, '', '', '', 'Other Consultants', 'Vesa Korvo', '358405529961', 'Vesa.korvo_external@wartsila.com', 'Senior Chief Project Engineer', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:08:54', 's.ashafa@lambertelectromec.com', '2023-01-16 09:08:54'),
(78, 'JOJO & PARTNERS', 77, '', '31 Gbagada Road, Bariga Lagos', 'Lagos', 'General Contractor', 'Engr Qadri Yunus', '', 'yunusqadri@jojopartners.com', '', '', 'm.sofuye@lambertelectromec.com', '2023-01-23 08:21:11', 'admin', '2023-01-23 08:48:00'),
(79, 'TOTAL ARIBA', 78, '', 'Port Harcourt', 'Lagos', 'End User / Owner', 'OBOH Peter', '', '', 'e -sourcing TOTALEnergies', '', 'm.sofuye@lambertelectromec.com', '2023-01-27 11:21:34', 'm.sofuye@lambertelectromec.com', '2023-01-27 11:21:34'),
(80, 'Consultants Collaborative Partnership (CCP)', 79, '', ' Plot 17, Block, 25 Chief Yesufu Abiodun Oniru Rd, Oniru 101241, Victoria Island, Lagos', 'Lagos', 'Project Manager', 'Diran Akerele', '', 'dirana@consultantscollaborative.com', '', '', 'm.sofuye@lambertelectromec.com', '2023-01-30 09:45:40', 'm.sofuye@lambertelectromec.com', '2023-01-30 09:45:40'),
(81, 'DUFRANC NIGERIA', 80, '', 'DU-FRANC & PARTNERS LIMITED  3rdFloor  179 Igbosere Road,  Lagos Island', 'Lagos', 'Qs Manager', 'Marcus Akinpelu', '', 'marcus.a@dufrancng.com', '', '', 'm.sofuye@lambertelectromec.com', '2023-01-30 09:54:00', 'admin', '2023-01-30 11:37:00'),
(82, 'Monterosa Construction Limited', 82, '', '64 Eric More Road, Industrial Estate , Surulere', 'Lagos', 'General Contractor', 'Lozenzo Fanottoli', '07088529692', 'lorenzo@mclnig.com', 'Mr', '', 'm.sofuye@lambertelectromec.com', '2023-02-09 13:55:08', 'm.sofuye@lambertelectromec.com', '2023-02-09 13:55:08'),
(83, 'ACCL', 83, '', '2nd Floor, FABAC Centre, 3 Ligali Ayorinde Avenue, Victoria Island, Lagos, Nigeria', 'Lagos', 'Architects', 'Onyekachi Igbokwe', '23417920558', 'oigbokwe@accl.biz', 'Architect', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:10:24', 's.ashafa@lambertelectromec.com', '2023-02-13 13:10:24'),
(84, 'ACCL', 83, '', '2nd Floor, FABAC Centre, 3 Ligali Ayorinde Avenue, Victoria Island, Lagos, Nigeria', 'Lagos', 'Architects', 'Fred Coker', '', 'Fcoker@accl.biz', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:11:22', 's.ashafa@lambertelectromec.com', '2023-02-13 13:11:22'),
(85, 'ACCL', 83, '', '2nd Floor, FABAC Centre, 3 Ligali Ayorinde Avenue, Victoria Island, Lagos, Nigeria', 'Lagos', 'Architects', 'Belinda Atiyio', '08060787811', 'batiyio@accl.biz', 'Senior Architect', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:12:41', 's.ashafa@lambertelectromec.com', '2023-02-13 13:12:41'),
(86, 'APD Project Management Ltd', 84, '', ' 5th floor, Church House, 29 Marina Rd, Lagos Island 102273, Lago', 'Lagos', 'Project Manager', 'Olabanji Olajide', '07033959018', 'banji.apdprojectmgt@gmail.com', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:15:33', 's.ashafa@lambertelectromec.com', '2023-02-13 13:15:33'),
(87, 'APD Project Management Ltd', 84, '', ' 5th floor, Church House, 29 Marina Rd, Lagos Island 102273, Lago', 'Lagos', 'Project Manager', 'ShashI Kumar', '08170286333', 's.shashi@apd.com.ng', 'Country Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:16:48', 's.ashafa@lambertelectromec.com', '2023-02-13 13:16:48'),
(88, 'Atkins Associates', 85, '', '10 Ologolo Village Road, Lekki Epe Exp Way, Lagos.', 'Lagos', 'Other Consultants', 'Akingbala Akinkunmi', '08071518367', 'a_akingbala@outlook.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:25:25', 's.ashafa@lambertelectromec.com', '2023-02-13 13:25:25'),
(89, 'CA Consultants Limited', 86, '', '6th floor, UBA House 57, Marina Lagos Nigeria.', 'Lagos', 'Mep Consultant', 'Samuel Odeyemi', '08137629982', 'sodeyemi@cacons.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:32:30', 's.ashafa@lambertelectromec.com', '2023-02-13 13:32:30'),
(90, 'CA Consultants Limited', 86, '', '6th floor, UBA House 57, Marina Lagos Nigeria.', 'Lagos', 'Mep Consultant', 'Bamidele Famuyiwa', '08034957611', 'bfamuyiwa@cacons.com', 'Engr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:33:06', 's.ashafa@lambertelectromec.com', '2023-02-13 13:33:06'),
(91, 'Cappa Dalberto', 87, '', '72 Campbell St, Lagos Island 102273, Lagos', 'Lagos', 'Other Consultants', 'Mattia Perazzo', '234012120481', 'mperazzo@capdal.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:34:10', 's.ashafa@lambertelectromec.com', '2023-02-13 13:34:10'),
(92, 'Cappa Dalberto', 87, '', '72 Campbell St, Lagos Island 102273, Lagos', 'Lagos', 'Other Consultants', 'Chiamaka Okide', '07038996676', 'cokide@capdal.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:34:45', 's.ashafa@lambertelectromec.com', '2023-02-13 13:34:45'),
(93, 'Courtney Michael Partnership', 88, '', '173B Isale Eko Avenue Dolphin Estate Ikoyi Lagos', 'Lagos', 'Project Manager', 'Moremi Wale-Aina', '08118910212', '', 'Mr.', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:36:31', 's.ashafa@lambertelectromec.com', '2023-02-13 13:36:31'),
(94, 'Courtney Michael Partnership', 88, '', '173B Isale Eko Avenue Dolphin Estate Ikoyi Lagos', 'Lagos', 'Project Manager', 'Chigozirim Akuma', '2348118910208', 'cakuma@courtneymichael.co.uk', 'Assistant Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:37:18', 's.ashafa@lambertelectromec.com', '2023-02-13 13:37:18'),
(95, 'Dufranc', 89, '', '19 Military road, Onikan, Lagos', 'Lagos', 'Qs Manager', 'Akinkunmi Akngbala', '234017732137', 'kunmi.akingbala@dufrancng.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:38:33', 's.ashafa@lambertelectromec.com', '2023-02-13 13:38:33'),
(96, 'Dufranc', 89, '', '19 Military road, Onikan, Lagos', 'Lagos', 'Qs Manager', 'Toyosi Popoola', '08023414570', 'toyosi.popoola@dufrancng.com', 'Mr.', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:39:16', 's.ashafa@lambertelectromec.com', '2023-02-13 13:39:16'),
(97, 'INZAG Germany GMBH', 90, '', 'Mezzanine Floor One Airport Square  Plot 21 Airport City Accra Ghana.', 'Ghana', 'General Contractor', 'Daniel Fernandes', '233501627199', 'daniel.fernandes@inzag.de', 'Commercial and Engineering Man', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:58:35', 's.ashafa@lambertelectromec.com', '2023-02-13 13:58:35'),
(98, 'INZAG Germany GMBH', 90, '', 'Mezzanine Floor One Airport Square  Plot 21 Airport City Accra Ghana.', 'Ghana', 'General Contractor', 'Joao Lages', '233244310577', 'joao.lages@inzag.de', 'Commercial Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 13:59:17', 's.ashafa@lambertelectromec.com', '2023-02-13 13:59:17'),
(99, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Sublet Detlef', '', 'detlef.sube@julius-berger.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:02:18', 'm.sofuye', '2023-04-13 10:29:00'),
(100, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Bruno Beljo', '4961113903730', 'bruno.beljo@julius-berger.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:05:54', 'm.sofuye', '2023-04-13 10:29:00'),
(101, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Thomas Kreher', '4901741987856', 'thomas.kreher@julius-berger.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:09:27', 'm.sofuye', '2023-04-13 10:29:00'),
(102, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Angelo Gallettino', '08091792152', 'rimon.marisho@julius-berger.com', 'Mr.', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:10:26', 'm.sofuye', '2023-04-13 10:29:00'),
(103, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Grzegorz Smolka', '4961113903123', 'grzegorz.smolka@julius-berger.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:15:59', 'm.sofuye', '2023-04-13 10:29:00'),
(104, 'Ladol Free Zone', 92, '', 'LADOLFree Zone Apapa Port Tarkwa Bay Lagos Nigeria', 'Lagos', 'Other Consultants', 'Ugwu Christopher', '07038281731', 'ugwu_christopher@ladol.com', 'Inst and Control Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:18:42', 's.ashafa@lambertelectromec.com', '2023-02-13 14:18:42'),
(105, 'Ladol Free Zone', 92, '', 'LADOLFree Zone Apapa Port Tarkwa Bay Lagos Nigeria', 'Lagos', 'Other Consultants', 'Tega ERHIWHA', '234014619711', 'erhiwha_oghenetega@ladol.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:19:50', 's.ashafa@lambertelectromec.com', '2023-02-13 14:19:50'),
(106, 'MAN Enterprise', 93, '', 'Achrafieh Charles MalekAveSole Center6th floor Beirut Lebanon', 'Lebanon', 'General Contractor', 'Elie Karam', '9611215111', 'elie.karam@manenterprise.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:31:13', 's.ashafa@lambertelectromec.com', '2023-02-13 14:31:13'),
(107, 'MAN Enterprise', 93, '', 'Achrafieh Charles MalekAveSole Center6th floor Beirut Lebanon', 'Lebanon', 'General Contractor', 'Paul Toumajian', '9611215111', 'paul.toumajian@manenterprise.com', 'Electrical Engineer', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:32:30', 's.ashafa@lambertelectromec.com', '2023-02-13 14:32:30'),
(108, 'Megastar', 94, '', '100 East West Road, Rumuokoro, Port Harcourt, Rivers State, Nigeria', 'Port Harcourt', 'Other Consultants', 'Otonye Ekine', '2348072090151', 'o.ekine@megastarnig.com', 'Contract Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:34:48', 's.ashafa@lambertelectromec.com', '2023-02-13 14:34:48'),
(109, 'Megastar', 94, '', '100 East West Road, Rumuokoro, Port Harcourt, Rivers State, Nigeria', 'Port Harcourt', 'Other Consultants', 'Seigha Adukeh', '2348071274090', 's.adukeh@megastarnig.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:35:59', 's.ashafa@lambertelectromec.com', '2023-02-13 14:35:59'),
(110, 'Megastar', 94, '', '100 East West Road, Rumuokoro, Port Harcourt, Rivers State, Nigeria', 'Port Harcourt', 'Other Consultants', 'Yisa Olatunde', '2348023234225', 'y.olatunde@megastarnig.com', 'Head Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:42:06', 's.ashafa@lambertelectromec.com', '2023-02-13 14:42:06'),
(111, 'Megastar', 94, '', '100 East West Road, Rumuokoro, Port Harcourt, Rivers State, Nigeria', 'Port Harcourt', 'Other Consultants', 'Blessing Charles', '', '', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:43:30', 's.ashafa@lambertelectromec.com', '2023-02-13 14:43:30'),
(112, 'MICHELETTI & CO LTD', 95, '', 'Head Office Pantang Hospital Road PMBCT 281 Cantonments', 'Ghana', 'General Contractor', 'Emmanuel Dagadu', '233302522680', 'emmanuel.dagadu@michelettighan.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:46:02', 's.ashafa@lambertelectromec.com', '2023-02-13 14:46:02'),
(113, 'MICHELETTI & CO LTD', 95, '', 'Head Office Pantang Hospital Road PMBCT 281 Cantonments', 'Ghana', 'General Contractor', 'Padmore Asante Osae', '2330543369295', 'padmore.osae@micheletti.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:46:54', 's.ashafa@lambertelectromec.com', '2023-02-13 14:46:54'),
(114, 'MICHELETTI & CO LTD', 95, '', 'Head Office Pantang Hospital Road PMBCT 281 Cantonments', 'Ghana', 'General Contractor', 'John Alex Dadzie', '2330302511561', 'john.dadzie@michelettighana.com', 'Commercial Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:48:28', 's.ashafa@lambertelectromec.com', '2023-02-13 14:48:28'),
(115, 'MICHELETTI & CO LTD', 95, '', 'Head Office Pantang Hospital Road PMBCT 281 Cantonments', 'Ghana', 'General Contractor', 'Isaac Christian', '2330249435882', 'isaac.christian@michelettighan.com', 'Estimator', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:49:11', 's.ashafa@lambertelectromec.com', '2023-02-13 14:49:11'),
(116, 'Monterosa Construction', 96, '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 'Leonard Lamptey', '2348133405865', 'leonard@mclnig.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:52:45', 's.ashafa@lambertelectromec.com', '2023-02-13 14:52:45'),
(117, 'Monterosa Construction', 96, '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 'Patrick Ayinde', '2348037500582', 'payinde@mclnig.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:53:50', 's.ashafa@lambertelectromec.com', '2023-02-13 14:53:50'),
(118, 'Monterosa Construction', 96, '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 'Ike Edmondo', '', 'edmondo@mclnig.com', 'Mr.', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:55:54', 's.ashafa@lambertelectromec.com', '2023-02-13 14:55:54'),
(119, 'Monterosa Construction', 96, '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 'Heino Pretorius', '2349078034668', 'heino@desimoneltd.com', 'Project Manager / Client Mng', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:56:48', 's.ashafa@lambertelectromec.com', '2023-02-13 14:56:48'),
(120, 'Monterosa Construction', 96, '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 'Fidelis Eguaoje', '08055462032', 'fidelis@mclnig.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 14:58:11', 's.ashafa@lambertelectromec.com', '2023-02-13 14:58:11'),
(121, 'UBA', 97, '', 'UBA House, 57 Marina, Lagos Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Olushola Salako', '23408028469813', 'olushola.salako@ubagroup.com', 'Head Facilities Management', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:01:14', 's.ashafa@lambertelectromec.com', '2023-02-13 15:01:14'),
(122, 'UBA', 97, '', 'UBA House, 57 Marina, Lagos Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Emmanuel Ige', '23408083755153', 'emmanuel.ige@ubagroup.com', 'Value Assurance Officer', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:02:23', 's.ashafa@lambertelectromec.com', '2023-02-13 15:02:23'),
(123, 'UBA', 97, '', 'UBA House, 57 Marina, Lagos Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Value Assurance', '', '', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:03:47', 's.ashafa@lambertelectromec.com', '2023-02-13 15:03:47'),
(124, 'UBA', 97, '', 'UBA House, 57 Marina, Lagos Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Samuel Dada', '08068127883', 'samuel.dada@ubagroup.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:04:42', 's.ashafa@lambertelectromec.com', '2023-02-13 15:04:42'),
(125, 'WBHO', 98, '', '156 Ophans Crescent, North Labone, Accra, Ghana', 'Ghana', 'General Contractor', 'Jarryd Abraham', '2330113218455', 'jarryabraham@wbho.co.za', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:07:21', 's.ashafa@lambertelectromec.com', '2023-02-13 15:07:21'),
(126, 'WBHO', 98, '', '156 Ophans Crescent, North Labone, Accra, Ghana', 'Ghana', 'General Contractor', 'Shaun George', '2330114456963', 'Shaun.George@wbho.co.za', '', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:08:11', 's.ashafa@lambertelectromec.com', '2023-02-13 15:08:11'),
(127, 'WBHO', 98, '', '156 Ophans Crescent, North Labone, Accra, Ghana', 'Ghana', 'General Contractor', 'Morewane Given Malapane', '27789028083', 'Given.Malapane@wbho.co.za', 'Roads and Earthworks ', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:09:10', 's.ashafa@lambertelectromec.com', '2023-02-13 15:09:10'),
(128, 'KOA', 40, '', '12a Morris Street, Abule-Ijesha, Yaba, Lagos', 'Lagos', 'Mep Consultant', 'Lawrence Adetogun', '23417611229', 'lawrence.adetogun@koaconsultants.com', 'Associate Director', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:21:43', 'm.sofuye', '2023-03-14 10:26:00'),
(129, 'FMA Architect', 26, '', 'FMA Architects Ltd Penthouse Suite St Nicholas House Catholic Mission Street Lagos.', 'Lagos', 'Architects', 'Olufemi A. Agboola', '2348034030418', 'femi@fmaarchitects.com', 'Managing Partner', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:27:22', 's.ashafa@lambertelectromec.com', '2023-02-13 15:27:22'),
(130, 'Turner And Townsend', 69, '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'Bruce A. Haswell', '', 'bruce.a.haswell@turntown.com', 'Regional Director - West Africa', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:30:14', 's.ashafa@lambertelectromec.com', '2023-02-13 15:30:14'),
(131, 'JOJO & PARTNERS', 77, '', '31 Gbagada Road, Bariga Lagos', 'Lagos', 'General Contractor', 'Feyisitan Sulaiman Oladun', '2348033601521', 'feyi@jojoandpartners.com', 'Project Engineer', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:48:47', 's.ashafa@lambertelectromec.com', '2023-02-13 15:48:47'),
(132, 'JOJO & PARTNERS', 77, '', '31 Gbagada Road, Bariga Lagos', 'Lagos', 'General Contractor', 'Gbenga Babayemi', '2347088145003', 'gbengababayemi@jojoandpartners.com', 'Partner', '', 's.ashafa@lambertelectromec.com', '2023-02-13 15:51:37', 's.ashafa@lambertelectromec.com', '2023-02-13 15:51:37'),
(133, 'Popham Walter Odusote', 99, '', '4th floor, South Atlantic Petroleum Towers, No 1, Adeola Odeku street, Victoria Island, Lagos, Nigeria. ', 'Lagos', 'Project Manager', 'Mafolasire Issac', '2348033938896', 'imafolashire@pwoarch-ngr.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-14 08:26:00', 's.ashafa@lambertelectromec.com', '2023-02-14 08:26:00'),
(134, 'Popham Walter Odusote', 99, '', '4th floor, South Atlantic Petroleum Towers, No 1, Adeola Odeku street, Victoria Island, Lagos, Nigeria. ', 'Lagos', 'Project Manager', 'Johnson Akinwale', '2348032891814', 'jakinwale@pwoarch-ngr.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-14 08:29:00', 's.ashafa@lambertelectromec.com', '2023-02-14 08:29:00'),
(135, 'JOJO & PARTNERS', 77, '', '31 Gbagada Road, Bariga Lagos', 'Lagos', 'General Contractor', 'Tunde Olukoya', '2348063401062', 'tundeolukoya@jojoandpartners.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-14 08:48:36', 's.ashafa@lambertelectromec.com', '2023-02-14 08:48:36'),
(136, 'Ladol Free Zone', 92, '', 'LADOLFree Zone Apapa Port Tarkwa Bay Lagos Nigeria', 'Lagos', 'Other Consultants', 'Jide Jadesimi', '2347034077787', 'jadesimi_jide@ladol.com', 'Executive Director Business Development', '', 's.ashafa@lambertelectromec.com', '2023-02-14 08:51:06', 's.ashafa@lambertelectromec.com', '2023-02-14 08:51:06'),
(137, 'Cappa Dalberto', 87, '', '72 Campbell St, Lagos Island 102273, Lagos', 'Lagos', 'Other Consultants', 'Project Manager', '2348096557231', 'aadebayo@capdal.com', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 08:57:43', 's.ashafa@lambertelectromec.com', '2023-02-14 08:57:43'),
(138, 'Turner And Townsend', 69, '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'Folarin Olaleye', '2347036810780', 'folarin.olaleye@turntown.com', 'Cost Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 08:59:49', 's.ashafa@lambertelectromec.com', '2023-02-14 08:59:49'),
(139, 'Turner And Townsend', 69, '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'Moses Munga', '254703492175', 'moses.munga@turntown.com', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 09:01:43', 's.ashafa@lambertelectromec.com', '2023-02-14 09:01:43'),
(140, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Christophe Fierens', '2347048054328', 'christophe.fierens@julius-berger.com', 'Project Manager | Region West', '', 's.ashafa@lambertelectromec.com', '2023-02-14 09:05:44', 'm.sofuye', '2023-04-13 10:29:00'),
(141, 'Julius Berger', 91, '', '10, Shettima A. Munguno Street, Crescent, Abuja.', 'Abuja', 'General Contractor', 'Stefan Uelzmann', '2348097699487', 'stefan.uelzmann@julius-berger.com', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 09:07:21', 'm.sofuye', '2023-04-13 10:29:00'),
(142, '21st Century Evolution System', 100, '', '5th Floor, 11 Awolowo Road, Ikoyi', 'Lagos', 'Other Consultants', 'Ashish Gajjar', '2348095978877', 'g.ashish@21st-evolution.com', 'Regional Channel Account  Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 09:30:42', 's.ashafa@lambertelectromec.com', '2023-02-14 09:30:42'),
(143, '21st Century Evolution System', 100, '', '5th Floor, 11 Awolowo Road, Ikoyi', 'Lagos', 'Other Consultants', 'Oluwapelumi Mustapha', '23467912131', 'm.busayo@21st-evolution.com', 'Manager, Business Development', '', 's.ashafa@lambertelectromec.com', '2023-02-14 09:35:41', 's.ashafa@lambertelectromec.com', '2023-02-14 09:35:41'),
(144, '21st Century Evolution System', 100, '', '5th Floor, 11 Awolowo Road, Ikoyi', 'Lagos', 'Other Consultants', 'Ayoola Ajuwon', '2349152316726', 'a.ayoola@21st-evolution.com', 'Regional General Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 09:39:58', 's.ashafa@lambertelectromec.com', '2023-02-14 09:39:58'),
(145, 'Rubicon', 101, '', 'Unit 9 & 10, Topaz Boulevard Montague Park, Montague Park, Cape Town', 'South Africa', 'Other Consultants', 'Robert Frey', '27721266532', 'robertf@province.co.za', 'Consultant', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:22:02', 's.ashafa@lambertelectromec.com', '2023-02-14 10:22:02'),
(146, 'Rubicon', 101, '', 'Unit 9 & 10, Topaz Boulevard Montague Park, Montague Park, Cape Town', 'South Africa', 'Other Consultants', 'Jannie Malan', '27825558811', 'jan@province.co.za', 'Director', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:26:07', 's.ashafa@lambertelectromec.com', '2023-02-14 10:26:07'),
(147, 'Schneider Electric', 102, '', '1 Tunder Gafar Close, Off Adeniyi Jones, Ikeja, Lagos,  Nigeria.', 'Lagos', 'Other Consultants', 'Christophe Begat', '2349094587069', 'christophe.begat@se.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:31:00', 's.ashafa', '2023-02-14 10:32:00'),
(148, 'Schneider Electric', 102, '', '1 Tunder Gafar Close, Off Adeniyi Jones, Ikeja, Lagos,  Nigeria.', 'Lagos', 'Other Consultants', 'Obinna Uche', '2348057495659', 'Obinna.uche@schneider-electric.com', 'Services Director', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:33:09', 's.ashafa', '2023-02-14 10:34:00'),
(149, 'Arabi Bello & Associates', 103, '', '20 Ekoro-Oruro River Street, Off Osun Crescent, Off IBB Boulevard, Maitama - Abuja', 'Abuja', 'Other Consultants', 'Ken K. Ofili', '2348023073862', 'kenarch2001@yahoo.com.co.uk', 'Associate Partner', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:39:59', 's.ashafa@lambertelectromec.com', '2023-02-14 10:39:59'),
(150, 'Arabi Bello & Associates', 103, '', '20 Ekoro-Oruro River Street, Off Osun Crescent, Off IBB Boulevard, Maitama - Abuja', 'Abuja', 'Other Consultants', 'Tomini Olanrewaju', '2348022789220', 'o.tomini@arabibello.com', 'Architect', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:40:49', 's.ashafa', '2023-02-14 10:42:00'),
(151, 'Goldkey Developers Limited', 30, '', 'PwC Tower A4 Rangoon Lane Cantonments City', 'Ghana', 'General Contractor', 'Matthew Charles Smith', '233245356716', 'matthew.swith@goldkeydevelopers.com', 'Project Director', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:46:28', 's.ashafa@lambertelectromec.com', '2023-02-14 10:46:28'),
(152, 'Goldkey Developers Limited', 30, '', 'PwC Tower A4 Rangoon Lane Cantonments City', 'Ghana', 'General Contractor', 'Issac Christian', '233245326216', 'issac.christian@goldkeydeveloper.com', 'Project Scheduler/Estimator', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:47:57', 's.ashafa@lambertelectromec.com', '2023-02-14 10:47:57'),
(153, 'Goldkey Developers Limited', 30, '', 'PwC Tower A4 Rangoon Lane Cantonments City', 'Ghana', 'General Contractor', 'Emmanuel Bentil', '233245307016', 'emmanuel.bentil@goldkeydevelopers.com', 'Senior Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-02-14 10:49:48', 's.ashafa@lambertelectromec.com', '2023-02-14 10:49:48'),
(154, 'AOS Orwell', 104, '', '272, Trans Amadi Industrial Layout, Port Harcourt, Nigeria', 'Port Harcourt', 'Other Consultants', 'Olajide Olayiwola', '2349055034054', 'olajide.olayiwola@aosorwell.com', 'Senior Sales Specialist', '', 's.ashafa@lambertelectromec.com', '2023-02-14 11:20:37', 's.ashafa@lambertelectromec.com', '2023-02-14 11:20:37'),
(155, 'AOS Orwell', 104, '', '272, Trans Amadi Industrial Layout, Port Harcourt, Nigeria', 'Port Harcourt', 'Other Consultants', 'Ranjit Negi', '2349055034057', 'ranjit.negi@aosorwell.com', 'Key Account Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 11:23:29', 's.ashafa@lambertelectromec.com', '2023-02-14 11:23:29'),
(156, 'AOS Orwell', 104, '', '272, Trans Amadi Industrial Layout, Port Harcourt, Nigeria', 'Port Harcourt', 'Other Consultants', 'Anand Bhatia', '2348058010826', 'anand.bhatia@aosorwell.com', 'Country Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 11:25:13', 's.ashafa@lambertelectromec.com', '2023-02-14 11:25:13'),
(157, 'AOS Orwell', 104, '', '272, Trans Amadi Industrial Layout, Port Harcourt, Nigeria', 'Port Harcourt', 'Other Consultants', 'Ekene Onyekwelu', '2347059994341', 'ekene.onyekwelu@oasorwell.com', 'Senior Sales Engineer', '', 's.ashafa@lambertelectromec.com', '2023-02-14 11:27:44', 's.ashafa@lambertelectromec.com', '2023-02-14 11:27:44'),
(158, 'AOS Orwell', 104, '', '272, Trans Amadi Industrial Layout, Port Harcourt, Nigeria', 'Port Harcourt', 'Other Consultants', 'Abumenre Odigie', '2348037847002', 'abumenre.odigie@aosorwell.com', 'Deputy Country Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 11:29:50', 's.ashafa@lambertelectromec.com', '2023-02-14 11:29:50'),
(159, 'Aveon Offshore', 105, '', '50C Glover Road, Ikoyi, Lagos,  Nigeria', 'Lagos', 'Other Consultants', 'Fabien Larguier', '2348147966609', '', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 11:35:00', 's.ashafa@lambertelectromec.com', '2023-02-14 11:35:00'),
(160, 'Aveon Offshore', 105, '', '50C Glover Road, Ikoyi, Lagos,  Nigeria', 'Lagos', 'Other Consultants', 'Humphrey Oyarekhua', '2348065721788', 'hoyakarehua@aveonoffshore.com', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 12:07:16', 's.ashafa@lambertelectromec.com', '2023-02-14 12:07:16'),
(161, 'Hyprops Nigeria Limited', 106, '', '6 Ojulari Street, Off Kusenla Road, Ikate Elegushi, Lekki, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Uchenna Egere', '2348062264467', 'uegere@hyprops.com', 'Senior Management, Business Development', '', 's.ashafa@lambertelectromec.com', '2023-02-14 12:58:27', 's.ashafa@lambertelectromec.com', '2023-02-14 12:58:27');
INSERT INTO `keypersons_table` (`id`, `clients_name`, `clients_id`, `clients_email`, `clients_address`, `clients_hq_location`, `clients_category`, `key_person`, `key_persons_tel`, `key_persons_email`, `title`, `info`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(162, 'Hyprops Nigeria Limited', 106, '', '6 Ojulari Street, Off Kusenla Road, Ikate Elegushi, Lekki, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Okezie Akwiwu', '2348033052199', 'oakwiwu@hyprops.com', 'Managing Director/Chief Executive', '', 's.ashafa@lambertelectromec.com', '2023-02-14 13:04:25', 's.ashafa@lambertelectromec.com', '2023-02-14 13:04:25'),
(163, 'AfreximBank', 107, '', 'No. 2 Gnassingbe Eyadema Street Off Yakubu Gowon Crescent Asokoro, Abuja, Nigeria', 'Abuja', 'Other Consultants', 'Abdoulaye Kone', '2349087357621', 'akone@afreximbank.com', 'Regional Chief Operating Officer', '', 's.ashafa@lambertelectromec.com', '2023-02-14 13:22:54', 's.ashafa@lambertelectromec.com', '2023-02-14 13:22:54'),
(164, 'AfreximBank', 107, '', 'No. 2 Gnassingbe Eyadema Street Off Yakubu Gowon Crescent Asokoro, Abuja, Nigeria', 'Abuja', 'Other Consultants', 'Oluwaseun Alabi', '2349088928236', 'oalabi@afreximbank.com', 'Assistant Manager Administration', '', 's.ashafa@lambertelectromec.com', '2023-02-14 13:25:10', 's.ashafa@lambertelectromec.com', '2023-02-14 13:25:10'),
(165, 'Jinko Solar', 108, '', 'Jinko Building. 99 Shouyang Road, Jingan District, Shangai 200072, China', 'China', 'Other Consultants', 'Esther Jerome', '2348063152044', 'esther.jerome@jinkosolar.com', 'Sales Representative Nigeria', '', 's.ashafa@lambertelectromec.com', '2023-02-14 13:47:20', 's.ashafa@lambertelectromec.com', '2023-02-14 13:47:20'),
(166, 'Jinko Solar', 108, '', 'Jinko Building. 99 Shouyang Road, Jingan District, Shangai 200072, China', 'China', 'Other Consultants', 'Willaims Ossai', '2348034149045', 'williams.ossai@jinkosolar.com', 'Sales Manager Nigeria', '', 's.ashafa@lambertelectromec.com', '2023-02-14 13:48:13', 's.ashafa', '2023-02-14 01:50:00'),
(167, 'Siemens', 109, '', 'Theilerstrasse 1a 6300 Zug Switzerland', '', 'Other Consultants', 'Michael Ambuehl', '41793869233', 'michael.ambuehl@siemens.com', 'Director Sales & Business Development', '', 's.ashafa@lambertelectromec.com', '2023-02-14 14:00:51', 's.ashafa@lambertelectromec.com', '2023-02-14 14:00:51'),
(168, 'Siemens Energy', 110, '', '1 waterside south, LN5 7FD Lincoln, United kingdom', '', 'Other Consultants', 'John Roberts', '447921242668', 'john.m.roberts@siemens-energy.com', 'Sales Manager - Gas Turbines', '', 's.ashafa@lambertelectromec.com', '2023-02-14 14:03:11', 's.ashafa@lambertelectromec.com', '2023-02-14 14:03:11'),
(169, 'Wartsila', 76, '', '', '', 'Other Consultants', 'Roger Ehnstrom', '358405956049', 'roger.ehnstrom@warsila.com', 'Subcontracting Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-14 14:08:51', 's.ashafa@lambertelectromec.com', '2023-02-14 14:08:51'),
(170, 'Preemtech BV', 111, '', '', '', 'Other Consultants', 'Bryan Preem', '2348165836234', 'bryan@preemtech.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-14 14:30:10', 's.ashafa@lambertelectromec.com', '2023-02-14 14:30:10'),
(171, 'Armada', 113, '', 'Aksoy Residence, 1476 Sokak, No. 2 D. 15 Alsancak, 35220 Izmir, Turkiye', '', 'Other Consultants', 'Hakan Ozel', '905334859468', 'hakanozel@armadaint.com', 'Managing Partner', '', 's.ashafa@lambertelectromec.com', '2023-02-14 15:00:52', 's.ashafa@lambertelectromec.com', '2023-02-14 15:00:52'),
(172, 'Zenith Bank Plc', 112, '', 'Plot 87, Ajose Adeogun Street, Victoria Island, Lagos', 'Lagos', 'Other Consultants', 'Nwokp Jude C.', '2348037462691', '', 'Property (Electrical Engineer)', '', 's.ashafa@lambertelectromec.com', '2023-02-15 08:45:01', 's.ashafa@lambertelectromec.com', '2023-02-15 08:45:01'),
(173, 'Topklan Eng. Services', 64, '', 'Unit 302 56, Olonode Street, Off Hughes Avenue Alagomeji, Yaba, Lagos.', 'Lagos', 'Other Consultants', 'Sheriff Kilanse', '2348023599742', 'sheriff@topklan.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-15 08:51:42', 's.ashafa@lambertelectromec.com', '2023-02-15 08:51:42'),
(174, 'CKR Consulting Engineers', 114, '', '2nd  floor, Office 203, Nr. 11 9th Str, 104 Oxford Building, Houghton Estate, Johannesburg, 2198,  South Africa', '', 'Other Consultants', 'Ryan Neilson', '27836000455', 'rneilson@ckr.co.za', 'Director - African Division', '', 's.ashafa@lambertelectromec.com', '2023-02-15 09:06:42', 's.ashafa@lambertelectromec.com', '2023-02-15 09:06:42'),
(175, 'Toptech Engineering Limited', 115, '', '9, Oguntona Crescent, off Oworonshoki/Oshodi Expressway, Opp, UPS Nig Ltd. Gbagada Phase 1, Gbagada, Lagos - Nigeria.', 'Lagos', 'Other Consultants', 'Salami Wasiu Abiola', '2348030897630', 'wasiu.salami@toptechengineeringltd.com', 'Brand Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-15 09:18:26', 's.ashafa@lambertelectromec.com', '2023-02-15 09:18:26'),
(176, 'Toptech Engineering Limited', 115, '', '9, Oguntona Crescent, off Oworonshoki/Oshodi Expressway, Opp, UPS Nig Ltd. Gbagada Phase 1, Gbagada, Lagos - Nigeria.', 'Lagos', 'Other Consultants', 'Adedeji Adeniyi', '23433026985', 'deji.adeniyi@toptechengineeringltd.com', 'Group Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-15 14:16:20', 's.ashafa@lambertelectromec.com', '2023-02-15 14:16:20'),
(177, 'SVA', 116, '', '3rd Floor, 19th Ninth Street, Houghton Estate, Johannesburg, 2196, South Africa', 'South Africa', 'Architects', 'Lyall Dukes', '270832678230', 'ldukes@svarchitects.com', 'Executive', '', 's.ashafa@lambertelectromec.com', '2023-02-15 14:37:45', 's.ashafa@lambertelectromec.com', '2023-02-15 14:37:45'),
(178, 'Medallion', 117, '', '8A Saka Tinubu Street, Victoria Island, Lagos.', 'Lagos', 'Other Consultants', 'Adebunmi Oluwafemi', '2347030406597', 'fadebunmi@medallioncom.com', 'Datacenter Support Engineer', '', 's.ashafa@lambertelectromec.com', '2023-02-15 14:43:10', 's.ashafa@lambertelectromec.com', '2023-02-15 14:43:10'),
(179, 'Ouranos', 118, '', '19B Community Road, Off Allen Avenue, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Adedotun Adeyemi', '2348077777650', 'adedotun.a@ouranos.com.ng', 'Chief Technology Officer', '', 's.ashafa@lambertelectromec.com', '2023-02-15 14:49:45', 's.ashafa@lambertelectromec.com', '2023-02-15 14:49:45'),
(180, 'OG Power', 119, '', '', '', 'Other Consultants', 'Neale Atkinson', '2347039615612', 'na@ogpower.com', 'IPP Director', '', 's.ashafa@lambertelectromec.com', '2023-02-15 14:51:23', 's.ashafa', '2023-02-15 02:52:00'),
(181, 'IEPM', 120, '', '7 Adetoro Adelaja, Magodo GRA Phase 2, Lagos', 'Lagos', 'Other Consultants', 'Akhibi Godfrey', '2348035355047', 'gakhibi@ieom-ng.com', 'Technical Director', '', 's.ashafa@lambertelectromec.com', '2023-02-15 14:58:48', 's.ashafa@lambertelectromec.com', '2023-02-15 14:58:48'),
(182, '2G Energy', 121, '', 'Benzstrasse 3 | 48619 Heek Germany', 'Germany', 'Other Consultants', 'James Hobday', '2348168915761', 'j.hobday@2-g.com', 'Vice President for Sales Africa', '', 's.ashafa@lambertelectromec.com', '2023-02-15 15:22:56', 's.ashafa@lambertelectromec.com', '2023-02-15 15:22:56'),
(183, 'Toptech Engineering Limited', 115, '', '9, Oguntona Crescent, off Oworonshoki/Oshodi Expressway, Opp, UPS Nig Ltd. Gbagada Phase 1, Gbagada, Lagos - Nigeria.', 'Lagos', 'Other Consultants', 'Wilson Elgbadon', '2348036533599', 'wilson.elgbadon@toptechengineeringltd.com', 'Business Development Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:21:07', 's.ashafa@lambertelectromec.com', '2023-02-16 08:21:07'),
(184, 'Powerup Renewables', 123, '', 'Plot 5, Chief Yesufu Abiodu Oniru Street, Victoria Island, Lagos, Nigeria.', 'Lagos', 'Other Consultants', 'Chidi Obike', '2348189281000', 'chidiobike@powerup.com', 'Chief Executive Officer', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:22:39', 's.ashafa@lambertelectromec.com', '2023-02-16 08:22:39'),
(185, 'NIBSS', 122, '', 'Plot 2130 Ahmadu Bello Way, Victoria Island, P.M.B 12617, Lagis, Nigeria.', 'Lagos', 'Other Consultants', 'Niyi Ajao', '234127160714', 'najao@nibss-plc.com.ng', 'Deputy Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:40:26', 's.ashafa@lambertelectromec.com', '2023-02-16 08:40:26'),
(186, 'Maire Tecnimont ', 124, '', 'Tecnimont House, Chiunchot Bunder, 504, Link Road, Matad (w), Mumbai 400 064, India.', '', 'Other Consultants', 'Pietro Busnelli', '917045040729', '', 'Site Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:41:24', 's.ashafa@lambertelectromec.com', '2023-02-16 08:41:24'),
(187, 'B.Appah Electrical Limited', 125, '', 'No.  7 Patrice Lumumba Close Airport Residential Area Accra P.O Box OS 7 Osu Accra, Ghana', 'Ghana', 'Other Consultants', 'Ben Appah', '233244315075', '', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:42:15', 's.ashafa@lambertelectromec.com', '2023-02-16 08:42:15'),
(188, 'TOTAL ARIBA', 78, '', 'Port Harcourt', 'Lagos', 'End User / Owner', 'Osiohwo Pius', '08039063734', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-16 08:46:13', 'm.sofuye@lambertelectromec.com', '2023-02-16 08:46:13'),
(189, 'Sumetzberger', 126, '', 'ing. sumetzberger GMBH., A 1110 Vienna, Leberstrasse 1608', '', 'Other Consultants', 'Josef Gebhard', '436646276607', 'j.gebhard@sumetzberg.at', 'Sales Export Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:57:40', 's.ashafa@lambertelectromec.com', '2023-02-16 08:57:40'),
(190, 'Coleman Wires and Cables', 128, '', 'km34 Lagos-Ibadan Expressway, Arepo, Ogun State, Nigeria', 'Ogun State', 'Other Consultants', 'George O.K Onafowokan', '2348035608585', 'george@colemancables.com', 'Managing Director/CEO', '', 's.ashafa@lambertelectromec.com', '2023-02-16 08:59:18', 's.ashafa@lambertelectromec.com', '2023-02-16 08:59:18'),
(191, 'Mota-Engil', 127, '', '10, Mekunwen Road, Ikoyi = 106104, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Antonio Salgueiro', '2348128183737', 'antonio.salgueiro@mota-engil.ng', 'Logistics Technician (RAILWAY)', '', 's.ashafa@lambertelectromec.com', '2023-02-16 09:00:55', 's.ashafa@lambertelectromec.com', '2023-02-16 09:00:55'),
(192, 'Turner And Townsend', 69, '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'Gerald T. Madondo', '27613399886', 'gmadondo@turntown.co.za', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-16 09:42:36', 'm.sofuye@lambertelectromec.com', '2023-02-16 09:42:36'),
(193, 'TOA Electronics', 129, '', '', 'South Africa', 'Other Consultants', 'Oyeleke Akeem', '2348130053369', 'oakeem@toasa.co.za', 'Sales and Marketing', '', 's.ashafa@lambertelectromec.com', '2023-02-16 09:45:35', 's.ashafa@lambertelectromec.com', '2023-02-16 09:45:35'),
(194, 'TOA Electronics', 129, '', '', 'South Africa', 'Other Consultants', 'Ralph Singer', '27836303066', 'rsinger@toasa.co.za', 'Director: Sub-Saharan Africa', '', 's.ashafa@lambertelectromec.com', '2023-02-16 09:49:00', 's.ashafa@lambertelectromec.com', '2023-02-16 09:49:00'),
(195, 'PAIX', 130, '', ' 42 Ring Road Central, P.O  Box 1632 Accra, Ghana', 'Ghana', 'Other Consultants', 'Hentie Joubert', '233201207157', 'hentie.joubert@paix.co', 'Paix Site Build Out Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-16 09:50:43', 's.ashafa@lambertelectromec.com', '2023-02-16 09:50:43'),
(196, 'PAIX', 130, '', ' 42 Ring Road Central, P.O  Box 1632 Accra, Ghana', 'Ghana', 'Other Consultants', 'Halfan Mwiri', '233201207156', 'halfan.mwiri@paix.co', 'Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-16 09:51:37', 's.ashafa@lambertelectromec.com', '2023-02-16 09:51:37'),
(197, '21st Century Evolution System', 100, '', '5th Floor, 11 Awolowo Road, Ikoyi', 'Lagos', 'Other Consultants', 'Mustapha Olasunkanmi', '2348086122903', 'molasunkanmi@21st-evolution.com', 'Chief Strategist', '', 's.ashafa@lambertelectromec.com', '2023-02-16 09:56:50', 's.ashafa@lambertelectromec.com', '2023-02-16 09:56:50'),
(198, 'Panaserv Nigeria Limited', 131, '', '247B Muri Okunola Street, Victoria Islam, Lagos', 'Lagos', 'Other Consultants', 'Bryan Preem', '2348180433333', 'cac.sales@panaservgroup.com', '', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:09:06', 's.ashafa', '2023-02-16 10:10:00'),
(199, 'Altitude', 132, '', '', 'Ghana', 'Other Consultants', 'Joe Leslie', '0244389282', 'jl@conerstonedevelopmentsgh.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:12:27', 's.ashafa@lambertelectromec.com', '2023-02-16 10:12:27'),
(200, 'Nestle Ghana Ltd', 135, '', 'Nestle Ghana Ltd, Tema Factory P.O. Box 8350 Tema.', '', 'Other Consultants', 'Adekunle Adelakun', '233559709735', 'adekunle.adelakun@gh.nestle.com', 'Factory Engineer', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:13:35', 's.ashafa@lambertelectromec.com', '2023-02-16 10:13:35'),
(201, 'Miele ', 133, '', '53, Gana Street, Maitama, Abuja.', '', 'Other Consultants', 'Pamela Gadzama', '2349091427751', 'Pamela.gadzama@aplusng.com', 'Head of Brand & Sales', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:18:31', 's.ashafa@lambertelectromec.com', '2023-02-16 10:18:31'),
(202, 'ReliaBuild', 134, '', '21 Parakou Crescent,Wuse 2, Abuja', '', 'Other Consultants', 'Sagir Mai', '2348036188616', 'sagirmai@reliabuild.com.ng', 'Executive Director, Services', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:20:49', 's.ashafa@lambertelectromec.com', '2023-02-16 10:20:49'),
(203, 'Engie', 136, '', 'immeuble Greenburo Cocody - Banque Mondiale 08 BO 2953 Abidjan 08 Cote D\'ivoire', '', 'Other Consultants', 'Arnauld Davy', '22578146590', 'arnauld.davy@engie.com', 'Business Development', '', 'admin@lambertelectromec.com', '2023-02-16 10:44:54', 'admin@lambertelectromec.com', '2023-02-16 10:44:54'),
(204, 'Alcon Nig Ltd', 3, '', 'Plot 17 Trans Amadi Industrial Layout, Port Harcourt, Rivers State, Nigeria.', 'Port Harcourt', 'Other Consultants', 'Mher Bakalian', '2348132000555', 'mbakalian@alcon-nig.com', 'Technical/Production Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:55:07', 's.ashafa@lambertelectromec.com', '2023-02-16 10:55:07'),
(205, 'Unique Josap Engineering ', 137, '', 'UJE Plaza, Rowi Juction, Akuetteh Tawiah St. P.O Box Af 484, Adenta', '', 'Other Consultants', 'Jospeh Appiah', '233302555377', 'joeapp63@yahoo.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-16 10:59:37', 's.ashafa@lambertelectromec.com', '2023-02-16 10:59:37'),
(206, 'Ahmed+Partners', 144, '', '3 Ali Akilu Road, Kaduna Nigeria', 'Kaduna', 'Qs Manager', 'Ifeanyi Obieje', '2348038689219', 'Ifeanyi4jc@yahoo.com', 'Consultant', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:10:33', 's.ashafa@lambertelectromec.com', '2023-02-16 13:10:33'),
(207, 'Tetracom', 143, '', 'HolcoM Bldg - 1st Floor - Block A - Corniche El Nahr P.O Box 16 6666 Beirut 1100 2140, Lebanon', 'Lebanon', 'Other Consultants', 'Antoun Halabi', '9611582111', 'antoun.halabi@tetracom.lb', 'CEO', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:11:46', 's.ashafa@lambertelectromec.com', '2023-02-16 13:11:46'),
(208, 'Verde', 142, '', '', '', 'Other Consultants', 'Paul Van den Bergh', '2348132415827', 'paul.vandenbergh@verde.ie', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:14:14', 's.ashafa@lambertelectromec.com', '2023-02-16 13:14:14'),
(209, 'Rainoil', 139, '', 'Plot 8, Block 116, Akiogun Road, By Bosun Adekoya Street, Lekki, Lagos.', 'Lagos', 'Other Consultants', 'Emmanuel Omuojine', '2348023176028', 'emmanuel.omuojine@rainoil.com.ng', 'Head, Strategy & Business Development', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:16:12', 's.ashafa@lambertelectromec.com', '2023-02-16 13:16:12'),
(210, 'Billing Cost Associates', 140, '', '2nd floor Cross\'s Grace House,  Macarthy Street, Onikan Lagos.', 'Lagos', 'Qs Manager', 'Niyi Ijogun', '2348023396844', 'n.ijogun@billingcostassociates.com', 'Managing Partner', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:17:11', 's.ashafa@lambertelectromec.com', '2023-02-16 13:17:11'),
(211, 'Archtect', 138, '', '8, akinwalw street, opp. Nationwide petrol station Yaya Abatan, Ogba - Ikeja, Lagos', 'Lagos', 'Architects', 'Adeolu Adewale', '2348034069869', '', 'Architect', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:17:56', 's.ashafa@lambertelectromec.com', '2023-02-16 13:17:56'),
(212, 'Banah-Moshel Projects Limited', 141, '', 'Deco Orbit,  16 Alaba Willianms Street, Lekki Phase 1, Lagos', 'Lagos', 'Project Manager', 'Olumuyiwa Diyaolu', '2348033267669', 'bmp@bmproltd.com', 'Projects Coordinator', '', 's.ashafa@lambertelectromec.com', '2023-02-16 13:18:24', 's.ashafa', '2023-02-16 01:20:00'),
(213, 'MAN Energy Solutions', 145, '', 'First FRloor (Rear Wing), Bunmi\'s Place 37B Opebi Road, Ikeja, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Joseph Amarachi', '2348037542184', 'amarachi.anyalewechi@man-es.com', 'Country Manager - Nigeria', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:21:52', 's.ashafa@lambertelectromec.com', '2023-02-17 09:21:52'),
(214, 'Beneprojecti Nig.  Ltd', 151, '', 'Plot 9, Olabanji Olajide Street, Off Mobolaji Johnson Estate, Lekki Phase 1, Lagos', 'Lagos', 'Other Consultants', 'Vitalis Okoro', '2347065561220', 'okoro@beneprojecto.com', 'Business Development Executive', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:23:04', 's.ashafa@lambertelectromec.com', '2023-02-17 09:23:04'),
(215, 'Nevadic Chemicals', 146, '', 'Plot 14A, Block 53, Adebayo Doherty Road, Lekki Phase 1, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Dave Nwosu', '2348184393448', 'dave.nwosu@nevadic.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:38:43', 's.ashafa@lambertelectromec.com', '2023-02-17 09:38:43'),
(216, 'First Synergi Construction  Limited', 147, '', '17 Emma Abimbola Cole Street, Lekki Scheme 1, Lagos', 'Lagos', 'Other Consultants', 'Yusuf Salako', '2348028277475', 'y.salako@firstsynergiconstruction.com', 'Architect, Project Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:41:24', 's.ashafa@lambertelectromec.com', '2023-02-17 09:41:24'),
(217, 'Horatio Limited', 148, '', 'Plot 11, Redmption Crescent, Gbagada Industrial Estate, Oworonshoki-Apapa Expressway, Gbagada, Lagos', 'Lagos', 'Other Consultants', 'Eyado Ocho', '2348175151217', 'eyado.ocho@horatiolimited.com', 'Managing Director', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:42:29', 's.ashafa@lambertelectromec.com', '2023-02-17 09:42:29'),
(218, 'Elektron', 149, '', '8, Gabaro Close, Victoria Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Jide Onakoya', '2348024881030', 'jide.onakoya@elektronenergy.com', 'Chief Operating Officer', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:44:51', 's.ashafa@lambertelectromec.com', '2023-02-17 09:44:51'),
(219, 'Stanbic Bank Ghana', 150, '', 'Stanbic Heights 215 South Liberation Link, Airport City, P.O. Box CT 2344, Cantonment, Accra, Ghana.', 'Ghana', 'Other Consultants', 'Edmund Bertino Baabereyir', '233244988938', 'baabereyire@stanbic.com.gh', 'Head | GRES | Ghana', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:51:24', 's.ashafa@lambertelectromec.com', '2023-02-17 09:51:24'),
(220, 'Renergy Power Solution', 152, '', 'Plot 4, Rehoboth Close Off Castle and temple drive, Lekki Phase 1, Lagos', 'Lagos', 'Other Consultants', 'Kelvin Albert Apeku', '2348067985157', '', 'CEO', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:53:57', 's.ashafa@lambertelectromec.com', '2023-02-17 09:53:57'),
(221, 'Schrack Seconet', 153, '', 'A-1120 Vienna Eibesbrunnergasse 18', '', 'Other Consultants', 'Patrick Eveleens, BA', '436649641498', 'p.eveleens@schracks-seconet.com', 'Area Sales Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-17 09:57:43', 's.ashafa@lambertelectromec.com', '2023-02-17 09:57:43'),
(222, 'Artec Practice Limited', 154, '', '2 Euphrates Street, Off Aguiyi Ironsi, Maitama, FCT-Abuja', 'Abuja', 'Other Consultants', 'Abdulwaheed Babatunde Yahya', '2348035296886', 'ab.waheeyahya@artecpracticltd.com.ng', 'Architect', '', 's.ashafa@lambertelectromec.com', '2023-02-17 10:44:45', 's.ashafa@lambertelectromec.com', '2023-02-17 10:44:45'),
(223, 'AfreximBank', 107, '', 'No. 2 Gnassingbe Eyadema Street Off Yakubu Gowon Crescent Asokoro, Abuja, Nigeria', 'Abuja', 'Other Consultants', 'Eric Monchu Intong', '201222999044', 'imonchu@afreximbank.com', 'Senior Manager', '', 's.ashafa@lambertelectromec.com', '2023-02-17 10:57:43', 's.ashafa@lambertelectromec.com', '2023-02-17 10:57:43'),
(224, 'ZUTARI IMPACT ENGINEERING', 155, '', '5 Admiralty Street. Waterside, off Admiralty way, Lekki Phase 1', 'Lagos', 'General Contractor', 'Ambrose Nwaorgu', '', 'Ambrose.Nwaorgu@zutari.com', 'Senior Quantity Surveyor', '', 'm.sofuye@lambertelectromec.com', '2023-02-22 11:08:13', 'm.sofuye@lambertelectromec.com', '2023-02-22 11:08:13'),
(225, 'MainOne', 156, '', 'FABAC Centre, 3B Ligali Ayorinde St, Victoria Island, Lagos', 'Lagos', 'General Contractor', 'MainOne Procurement', '08090404000', 'procurement@mainone.net', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-22 12:07:16', 'm.sofuye@lambertelectromec.com', '2023-02-22 12:07:16'),
(226, 'MEARSK', 157, '', 'Maersk Procurement  Godrej Two, Pirojshanagar,  Vikhroli East, Mumbai 400079 ', 'Mumbai', 'End User / Owner', 'Rajesh Gadade', '', 'rajesh.gadade@maersk.com', 'Assistant Project Manager', '', 'm.sofuye@lambertelectromec.com', '2023-02-22 14:47:49', 'm.sofuye@lambertelectromec.com', '2023-02-22 14:47:49'),
(227, 'Guarantee Trust Bank PLC (GTBank)', 158, '', 'Block 5, Victoria Island, Annex, Lekki ', 'Lagos', 'End User / Owner', 'David Bolarin', '08029500272', 'david.bolarin@gtbank.com', 'GT Projects, Adminstration', '', 'm.sofuye@lambertelectromec.com', '2023-02-22 15:53:53', 'm.sofuye@lambertelectromec.com', '2023-02-22 15:53:53'),
(228, 'Vita Construction', 74, '', 'Plot 18, Aminu Jinadu Close, Iganmu Industrial Estate, Surulere, Lagos ', 'Lagos', 'General Contractor', 'Bayo Sawa', '08033049458', 'bayosawa@vita-construction.com', 'Chief Estimator', '', 'm.sofuye@lambertelectromec.com', '2023-02-27 08:42:53', 'm.sofuye@lambertelectromec.com', '2023-02-27 08:42:53'),
(229, 'Guarantee Trust Bank PLC (GTBank)', 158, '', 'Block 5, Victoria Island, Annex, Lekki ', 'Lagos', 'End User / Owner', 'Funmilola Adeniran', '08025013532', 'funmilola.adeniran@gtbank.com', 'GT Project, Administration', '', 'm.sofuye@lambertelectromec.com', '2023-03-01 12:34:36', 'm.sofuye@lambertelectromec.com', '2023-03-01 12:34:36'),
(230, 'TOTAL ARIBA', 78, '', 'Port Harcourt', 'Lagos', 'End User / Owner', 'Osemeke Neville', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-03-14 08:42:26', 'm.sofuye@lambertelectromec.com', '2023-03-14 08:42:26'),
(231, 'G3 Systems Limited', 160, '', 'Brunel Building, 11 Mereside, Osprey Quay, Portland, Dorset, DT5 1PY, UK ', 'United Kingdom', 'Project Manager', 'Lee Williams', '4407983700135', 'Lee.Williams@g3-systems.co.uk', 'Mr', '', 'm.sofuye@lambertelectromec.com', '2023-05-11 12:45:25', 'm.sofuye@lambertelectromec.com', '2023-05-11 12:45:25'),
(232, 'Monterosa Construction', 96, '', '64 Eric Moore Road, Iganmu Industrial Estate, Surulere, Lagos, Nigeria', 'Lagos', 'General Contractor', 'Drikus Sadie', '08138496160', 'drikus@desimoneltd.com', 'Mr', '', 'm.sofuye@lambertelectromec.com', '2023-05-11 16:43:54', 'm.sofuye@lambertelectromec.com', '2023-05-11 16:43:54'),
(233, 'IMEASSESTS', 161, '', '1. Towry Cl., Victoria Island, Lagos 106104, Nigeria', 'Lagos', 'Project Manager', 'Olamide Vigo', '2348135130225', 'olamide.v@imeassets.com', 'Business Development Manger', '', 'm.sofuye@lambertelectromec.com', '2023-05-11 17:05:30', 'm.sofuye@lambertelectromec.com', '2023-05-11 17:05:30'),
(234, 'PFO Construction', 162, '', 'Immeuble SCI le bd latrille Cocody, Abidjan', 'Abidjan', 'General Contractor', 'Jean Claude DAO', '', 'jeanclaude.dao@pfo-construction.com', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-17 14:37:09', 'm.sofuye@lambertelectromec.com', '2023-05-17 14:37:09'),
(235, 'PFO Construction', 162, '', 'Immeuble SCI le bd latrille Cocody, Abidjan', 'Abidjan', 'General Contractor', 'BEATRICE KOUADIO', '2250757753545', 'beatrice.kouadio@pfo-construction.com', 'IngÃ©nieur travaux (CET)', '', 'm.sofuye@lambertelectromec.com', '2023-05-19 08:05:04', 'm.sofuye@lambertelectromec.com', '2023-05-19 08:05:04');

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
  `keyperson` varchar(255) NOT NULL,
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
  `currency` varchar(255) NOT NULL,
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
  `tender_awarded_date` varchar(255) NOT NULL,
  `vendor_information` varchar(255) NOT NULL,
  `document_link` varchar(255) NOT NULL,
  `additional_information` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_info_table`
--

INSERT INTO `project_info_table` (`id`, `project_title`, `project_client`, `keyperson`, `division`, `project_manager`, `qs_manager`, `mep_consultants`, `architect`, `project_duration`, `rfi_due`, `tender_received_date`, `tender_due`, `tender_submission_date`, `tender_amount`, `currency`, `project_country`, `project_city`, `project_importance`, `contract_type`, `prelim_pricing`, `pricing_strategy`, `date_extension`, `rate_used`, `procurement_type`, `boq`, `specification`, `drawings`, `tender_form`, `tender_instruction`, `basic_rate`, `labour_rate`, `other_tender_doc`, `technical_drawings`, `slds`, `mos`, `scope_understanding`, `pow`, `other_technical_doc`, `code`, `tender_code`, `project_status`, `progress`, `tender_awarded_date`, `vendor_information`, `document_link`, `additional_information`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'High Court of Lagos State, Igbosere', 'Re-build Lagos', '', 'Building & Factories', 'Re-Build Lagos', 'HOS', 'CA Consultant', 'Onestream Consultants Ltd', 'N/A', '2022-07-14', '2022-07-06', '2022-07-20', '2022-07-20', '4457074101', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'Directly include VEs Related To Brands & Specifications & Clarify', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 101, 'NGN-BNF-HIG-23/101', 'Approved', 'Submitted', '', 'Only Tender Code', '', '1. We can make use of all the VEs or alternatives that CA consultants will accept on projects.\r\n2. We have requested for extension, however we are awaiting feedback from the client.', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(2, 'Remodelling of First Bank Head Office 6th Floor', 'First Bank Nigeria', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-07-05', '2022-07-04', '2022-07-06', '2022-07-07', '52633253', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 102, 'NGN-BNF-REM-23/102', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(3, 'Restoring the New Port Harcourt Refinery (NPHR) and the Old Port Harcourt Refinery (OPHR)', 'Tecnimont ', '', 'Oil & Gas', '', '', '', '', 'N/A', '2022-07-18', '2022-07-08', '2022-07-25', '', '', '', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', 'Site Visit Declaration', 103, 'NGN-ONG-RES-23/103', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(4, 'Edo Museum of West African Art (EMOWAA) Pavilion, Benin, Edo State', 'Foab Partnership', 'Ayo Alao', 'Building & Factories', 'FOAB', '', '', '', '12 months', '2022-07-19', '2022-07-14', '2022-09-29', '2022-07-29', '4567594074', 'NGN', 'Nigeria', 'Benin City', 'High', 'Remeasured', 'Standard (Combined)', 'Alternative On Brands are Acceptable', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 104, 'NGN-BNF-EDO-23/104', 'Approved', 'Submitted', '', 'Only use Project Name', '', '1	Expresssion of Interest	Tender Received from FOAB	01/06/2022		Tender Sumbitted	09/06/2022		Tender Acknowledged	14/06/2022		\r\n2	Letter of Tender - MEP	Received  from FOAB	11/07/2022		RFI	22/07/2022		Response to RFI	26/07/2022		\r\n3	1st Submission	1st Subm', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(5, 'Throne of Grace Redeem Church. Ebute Metta', 'The Redeem Church', '', 'Building & Factories', 'Courtney Michael Partnership', 'Billing Cost Associate', 'KOA Partnership', '', '30 months', '2022-07-15', '2022-07-08', '2022-07-29', '2022-08-08', '3687259690', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'Directly include VEs Related To Brands & Specifications & Clarify', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Boq: Not Required', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', '', 105, 'NGN-BNF-THR-23/105', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(6, 'Remedial Work on Assa Locations 01, 02 & Access Road', 'Waltersmith', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-07-20', '2022-07-18', '2022-07-21', '2022-07-22', '67387000', 'NGN', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs: VEs/Alternative Brands to be submitted separately', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', 'Scope of Work', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 106, 'NGN-BNF-REM-23/106', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(7, 'The Minnie Mouse Project', 'LEAMINGTON PROPERTIES LTD', '', 'Building & Factories', 'ACCL', 'Consol Associates', 'MFA Partnership ', 'SAOTA', 'N/A', '2022-08-31', '2022-08-15', '2022-09-30', '', '', '', 'Nigeria', 'Victoria Island', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', '', 107, 'NGN-BNF-THE-23/107', 'Declined', 'Declined', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(8, 'Staff Housing Rivers State University, Port Harcourt', 'Megastar', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-08-20', '2022-08-17', '2022-08-24', '', '', '', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Understanding of Scope', 'POW', '', 108, 'NGN-BNF-STA-23/108', 'Declined', 'Declined', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(9, 'L5 - Towers _ Preliminary', 'POLTON MORGAN', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-08-31', '2022-08-22', '2022-09-05', '2022-09-07', '7492000', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 109, 'NGN-BNF-L5 -23/109', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(10, 'Building Office at Ota _ Shell Nigeria', 'SHELL', '', 'Building & Factories', 'UICL', '', '', 'ATO Architect', 'N/A', '2022-08-29', '2022-08-25', '2022-09-01', '2022-09-30', '1848574030', 'NGN', 'Nigeria', 'Abeokuta', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 110, 'NGN-BNF-BUI-23/110', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(11, 'Construction of 5 Storey  Lecture Hall_ University of Ghana', 'Consar', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-09-09', '2022-09-01', '2022-09-16', '', '', '', 'Ghana', 'Accra', 'Low', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 111, 'GHA-BNF-CON-23/111', 'Declined', 'Declined', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(12, 'ABlnBev - Gateway 6.4', 'ABlnBev', '', 'Building & Factories', '', '', 'WCS Quantity Surveyors', '', '6 months', '2022-09-09', '2022-09-06', '2022-09-16', '2022-10-12', '1333950409', 'NGN', 'Nigeria', 'Ogun', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW', 'Certificate of Authority of Signature, Previous Project, Turnover, Organogram', 112, 'NGN-BNF-ABL-23/112', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(13, 'MISA GLOVER - ELECTRICAL, EXTRA LOW VOLTAGE & PLUMBING INSTALLATION TENDER', 'MISA LIMITED', '', 'Building & Factories', 'Squarelines Limited', '', 'OJAT', 'AMARCH CONSULTANT', 'N/A', '2022-10-10', '2022-10-06', '2022-10-12', '', '', '', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 113, 'NGN-BNF-MIS-23/113', 'Declined', 'Declined', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(14, 'Hillside Multispeciality Hospital, Diagnostic Centre', 'ARTEC', '', 'Building & Factories', '', '', 'KOA', 'ARTEC', 'N/A', '', '2022-10-07', '2022-10-21', '2022-11-14', '8929138690', 'NGN', 'Nigeria', 'Abuja', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', 'Not Application', 114, 'NGN-BNF-HIL-23/114', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(15, 'Proposed Hospitality Development, Asaba', 'CCP', '', 'Building & Factories', '', '', 'CCP', '', 'N/A', '2022-10-14', '2022-10-07', '2022-10-21', '2022-10-21', '3179688516', '', 'Nigeria', 'Asaba', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', '', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', '', '', '', '', 115, 'NGN-BNF-PRO-23/115', 'Approved', 'Submitted', '', 'Only use project name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(16, 'LJA - GMT Creek Road Terminal Lagos', 'Julius Berger/GMT Limited', '', 'Building & Factories', '', '', 'TANGER MED ENGINEERING', '', 'N/A', '2022-10-13', '2022-10-10', '2022-10-20', '2022-10-20', '3850624', '', 'Nigeria', 'Lagos', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 116, 'NGN-BNF-LJA-23/116', 'Approved', 'Submitted', '', 'Only use project name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(17, 'Padah LNG Project', 'Orascom', '', 'Power', '', '', '', '', 'N/A', '2022-10-13', '2022-10-04', '2022-10-31', '', '', '', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 117, 'NGN-PWR-PAD-23/117', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(18, 'African Data Centre  - 1250kVA Miniature Substation Estimate', 'Royal HaskoningDHV Ltd', '', 'Power', '', '', '', '', 'N/A', '2022-10-17', '2022-10-13', '2022-10-20', '2022-11-21', '610712', 'USD', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 118, 'NGN-PWR-AFR-23/118', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(19, 'Freetown Sierra Leone Temple Project - MEP', 'Consar', '', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-10-13', '2022-10-18', '', '', '', 'Ghana', 'Accra', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 119, 'GHA-BNF-FRE-23/119', 'Declined', 'Declined', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(20, 'UBA Ghana Head Office Project', 'UBA/Afriland Properties', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-10-21', '2022-10-15', '2022-11-15', '2022-11-18', '8999382', 'USD', 'Ghana', 'Accra', 'Very High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', 'HSE, Quantity Control & Assurance, Subcontractor Procedure', 120, 'GHA-BNF-UBA-23/120', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(21, 'BCG Benin Tender ', 'Julius Berger', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-10-27', '2022-10-19', '2022-11-07', '2022-11-08', '28522722441', 'CFA', 'Nigeria', 'Benin City', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 121, 'NGN-BNF-BCG-23/121', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(22, 'TYDF, Abuja', 'Nadeem Group', 'Others', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-11-02', '2022-11-25', '2022-12-01', '6492519535', 'NGN', 'Nigeria', 'Abuja', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', 'The brief introduction of the organization, Project References, Warranties & Guarantees', 122, 'NGN-BNF-TYD-23/122', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(23, 'ACE - Centenary City Royale Residence Abuja', 'Julius Berger', '', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-10-30', '2022-11-03', '2022-10-05', '16247131', 'NGN', 'Nigeria', 'Abuja', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 123, 'NGN-BNF-ACE-23/123', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(24, 'The African Center of Excellence for Genomics of Infectious Diseases (ACEGID) Phase 2', 'Turner & Townsend', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-11-22', '2022-11-10', '2022-11-24', '', '', '', 'Nigeria', 'Ogun', 'High', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 124, 'NGN-BNF-THE-23/124', 'Declined', 'Declined', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(25, 'Proposed Ghana DC Project', 'Arup', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-11-14', '2022-11-11', '2022-11-25', '2022-12-11', '65628091', 'USD', 'Ghana', 'Accra', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 125, 'GHA-BNF-PRO-23/125', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(26, 'LNW_Proposal', 'Northwest Petroleum & Gas / Primetech', '', 'Building & Factories', '', '', 'Primetech', '', 'N/A', '', '2022-11-15', '2022-11-25', '2022-11-30', '5393118107', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 126, 'NGN-BNF-LNW-23/126', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(27, 'ASSA New Drilling Location Preparation', 'Waltersmith', '', 'Oil & Gas', '', '', '', '', 'N/A', '', '2022-11-16', '2022-12-02', '2022-12-02', '818622693', 'NGN', 'Nigeria', 'Owerri', 'Medium', 'Remeasured', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', '', 127, 'NGN-ONG-ASS-23/127', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(28, 'EFCC Training Academy Abuja', 'EFCC/Julius Berger', '', 'Building & Factories', '', '', 'MBS Engineering Limited', 'GlobArch Associates', 'N/A', '', '2022-11-22', '2022-11-30', '2022-12-07', '7614647046', '', 'Nigeria', 'Abuja', 'High', 'Remeasured', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 128, 'NGN-BNF-EFC-23/128', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(29, 'Residential Development at Lakowe Golf & Country Estate, Lagos', 'Mixta Africa', '', 'Building & Factories', 'Greenhouse Inc Limited', 'Jabak Consultants', 'Topklan  Engineering Services', 'CMD + A', 'N/A', '2022-12-05', '2022-11-28', '2022-12-12', '2022-12-12', '6877257344', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Scope of Understanding: Not Required', 'POW', '', 129, 'NGN-BNF-RES-23/129', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(30, 'Rehabilitation Works of Access Road Waltersmith', 'Waltersmith', '', 'Oil & Gas', '', '', '', '', '15 months', '2022-12-02', '2022-11-29', '2022-12-12', '2022-12-12', '1249703503', '', 'Nigeria', 'Owerri', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', 'MOS', '', 'POW', '', 130, 'NGN-ONG-REH-23/130', 'Approved', 'Submitted', '', 'Only use project name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(31, 'LDC Project Eko Atlantic', 'Julius Berger', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-12-06', '2022-12-02', '2022-12-12', '2022-12-12', '4436311', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 131, 'NGN-BNF-LDC-23/131', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2022-01-02 13:39:00', 'm.sofuye@lambertelectromec.com', '2023-01-02 13:39:00'),
(32, 'Delloitte 7th Floor Repartitioning', 'JOJO & PARTNERS', 'Engr Qadri Yunus', 'Building & Factories', '', '', '', '', '6 months', '2023-01-26', '2023-01-18', '2023-01-26', '2023-02-07', '161261275', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 133, 'NGN-BNF-DEL-23/133', 'Approved', 'Submitted', '', 'Only use Project Name', 'https://lambertelectromecgroup.sharepoint.com/:f:/s/LambertelectromecIntranet/bd-dept/EmJpn1i8WQ1ArPgcQLfzUKEBDUProyJEoqT2NAm0Pu8XQA?e=2vKRQj ', '', 'm.sofuye@lambertelectromec.com', '2023-01-23 09:01:00', 'm.sofuye@lambertelectromec.com', '2023-01-23 09:01:00'),
(33, 'HVAC UPGRADE FOR TEPNG PHC BASE', 'TOTAL ARIBA', 'OBOH Peter', 'Oil & Gas', '', '', '', '', 'N/A', '2023-01-06', '2023-01-27', '2023-01-15', '2023-03-17', '116383500', 'NGN', 'Nigeria', 'Port Harcourt', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', 'Scope of Work', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 134, 'NGN-ONG-HVA-23/134', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2023-01-27 12:27:00', 'm.sofuye@lambertelectromec.com', '2023-01-27 12:27:00'),
(34, 'Edible Oil  Production Factory Development, at Industrial Flowergate Scheme, Owode-Obafemi Ogun State', 'DUFRANC NIGERIA', 'Marcus Akinpelu', 'Building & Factories', 'Consultants Collaborative Partnership (CCP)', '', '', '', 'N/A', '2023-02-01', '2023-01-27', '2023-02-10', '2023-02-14', '3591597471', 'NGN', 'Nigeria', 'Abeokuta', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 135, 'NGN-BNF-EDI-23/135', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2023-01-30 12:57:00', 'm.sofuye@lambertelectromec.com', '2023-01-30 12:57:00'),
(35, 'Ballore Project, Agbara', 'Monterosa Construction Limited', 'Lozenzo Fanottoli', 'Building & Factories', '', '', '', '', '', '', '2023-02-06', '2023-02-18', '', '', '', 'Nigeria', 'Lagos', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 136, 'NGN-BNF-BAL-23/136', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-09 14:37:00', 'm.sofuye@lambertelectromec.com', '2023-02-09 14:37:00'),
(36, 'Revamp of Canteen DX Unit 3 at Main Base Port Harcourt', 'TOTAL ARIBA', 'Osiohwo Pius', 'Building & Factories', '', '', '', '', '', '', '2023-02-14', '2023-02-28', '2023-02-23', '19884732', 'NGN', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Boq: Not Required', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 137, 'NGN-BNF-REV-23/137', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-16 08:54:00', 'm.sofuye@lambertelectromec.com', '2023-02-16 08:54:00'),
(37, 'Installation of Water Flow Meters at Water and Sewage Treatment Plants  Main Base PH', 'TOTAL ARIBA', 'Osiohwo Pius', 'Oil & Gas', '', '', '', '', '', '', '2023-02-14', '2023-02-20', '2023-03-20', '2389500', 'NGN', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Fast Delivery (Local Market if possible + Air Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 138, 'NGN-ONG-INS-23/138', 'Approved', 'Submitted', '', 'Project Name & Tender Code', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-16 09:17:00', 'm.sofuye@lambertelectromec.com', '2023-02-16 09:17:00'),
(38, 'MEPF Budgetary Quotation_ Turner & Townsend', 'Turner And Townsend', 'Gerald T. Madondo', 'Building & Factories', '', '', '', '', '', '', '2023-02-03', '2023-02-17', '', '', '', 'Ghana', 'Kumasi', 'Very High', 'Preliminary Budgeting', 'Standard (Combined)', 'As Per Specs', 'Yes', 'First Fix', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 139, 'NGN-BNF-MEP-23/139', 'Approved', 'In Progress', '', 'Only Tender Code', '', 'Budgetary Pricing for now.\r\nClient and project information not to be disclosed at this stage.', 'm.sofuye@lambertelectromec.com', '2023-02-16 10:02:00', 'm.sofuye@lambertelectromec.com', '2023-02-16 10:02:00'),
(39, 'Kimberly Pepisco Budgetary Offer', 'ZUTARI IMPACT ENGINEERING', 'Ambrose Nwaorgu', 'Building & Factories', '', '', '', '', '', '', '2023-02-15', '2023-02-21', '2023-02-21', '435601927', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Preliminary Budgeting', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 140, 'NGN-BNF-KIM-23/140', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-22 11:18:00', 'm.sofuye@lambertelectromec.com', '2023-02-22 11:18:00'),
(40, 'Data Centre Building Construction Mainone', 'MainOne', 'MainOne Procurement', 'Building & Factories', '', '', '', '', '12 months', '', '2023-02-17', '2023-02-03', '', '5255943133', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Boq: Not Required', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Drawings', 'Slds: Not Required', 'MOS: Not Required', 'Understanding of Scope', 'POW', '', 141, 'NGN-BNF-DAT-23/141', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-22 12:22:00', 'm.sofuye@lambertelectromec.com', '2023-02-22 12:22:00'),
(41, 'Onne Data Centre', 'MEARSK', 'Rajesh Gadade', 'Data Centre', '', '', '', '', '', '', '2023-02-22', '2023-03-04', '2023-03-20', '1418546', 'USD', 'Nigeria', 'Lagos', 'Medium', 'Remeasured', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', 'General Technical file', 142, 'NGN-DCT-ONN-23/142', 'Approved', 'Submitted', '', '', '', 'There was an online bidding on 24/03/2023-  $1,414.999.63', 'm.sofuye@lambertelectromec.com', '2023-02-22 15:33:00', 'm.sofuye@lambertelectromec.com', '2023-02-22 15:33:00'),
(42, 'Supply & Installation Plumbing & Fixtures_Vita Constructions', 'Vita Construction', 'Bayo Sawa', 'Building & Factories', '', '', '', '', '', '', '2023-02-18', '2023-02-24', '2023-02-24', '243617344', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 143, 'NGN-BNF-SUP-23/143', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-02-28 08:26:00', 'm.sofuye@lambertelectromec.com', '2023-02-28 08:26:00'),
(43, 'GTB Event Centre at Oniru', 'Guarantee Trust Bank PLC (GTBank)', 'Funmilola Adeniran', 'Building & Factories', '', '', '', '', '', '', '2023-03-01', '2023-03-08', '', '920263906', 'NGN', 'Nigeria', 'Lagos', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 144, 'NGN-BNF-GTB-23/144', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-03-01 14:07:00', 'm.sofuye@lambertelectromec.com', '2023-03-01 14:07:00'),
(44, 'Maintenance of Medical Gas System in Main Base Clinic TOTAL', 'TOTAL ARIBA', 'Osemeke Neville', 'Oil & Gas', '', '', '', '', '', '', '2023-03-10', '2023-03-23', '', '', '', 'Nigeria', 'Lagos', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 145, 'NGN-ONG-MAI-23/145', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-03-14 09:07:00', 'm.sofuye@lambertelectromec.com', '2023-03-14 09:07:00'),
(45, 'Residential Development for Baylink on Plot 9A Onikoyi, ( Formerly Turnbull Road) Ikoyi, Lagos', 'Monterosa Construction', 'Leonard Lamptey', 'Building & Factories', '', '', '', '', '', '', '2023-03-30', '2023-04-12', '', '', '', 'Nigeria', 'Lagos', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 146, 'NGN-BNF-RES-23/146', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-03-31 10:12:00', 'm.sofuye@lambertelectromec.com', '2023-03-31 10:12:00'),
(46, 'ACC10 Enabling Works Project', 'WBHO', 'Shaun George', 'Building & Factories', '', '', '', '', '', '', '2023-04-04', '2023-04-18', '', '', '', 'Ghana', 'Accra', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 147, 'GHA-BNF-ACC-23/147', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-04-25 15:41:00', 'm.sofuye@lambertelectromec.com', '2023-04-25 15:41:00'),
(47, 'Design, Construction and Installation of 2.5MVA 33-0.145KV Transformer Substation', 'TOTAL ARIBA', 'OBOH Peter', 'Oil & Gas', '', '', '', '', '', '', '2023-04-12', '2023-05-26', '2023-04-24', '653492610', 'NGN', 'Nigeria', 'Port Harcourt', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 148, 'NGN-ONG-DES-23/148', 'Approved', 'Submitted', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-02 09:29:00', 'm.sofuye@lambertelectromec.com', '2023-05-19 08:52:58'),
(48, 'OML58 Sewage Treatment Plant', 'TOTAL ARIBA', 'OBOH Peter', 'Oil & Gas', '', '', '', '', '', '', '2023-04-14', '2023-05-05', '', '', '', 'Nigeria', 'Port Harcourt', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 149, 'NGN-ONG-OML-23/149', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-02 14:54:00', 'm.sofuye@lambertelectromec.com', '2023-05-19 11:01:58'),
(49, 'Mechanical Design & Electrical Designs ( Bourdillon Project)', 'Popham Walter Odusote', 'Mafolasire Issac', 'Building & Factories', '', '', '', '', '', '', '2023-05-19', '2023-05-30', '', '', '', 'Nigeria', 'Lagos', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 150, 'NGN-BNF-MEC-23/150', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-04 09:57:00', 'm.sofuye@lambertelectromec.com', '2023-05-09 08:18:08'),
(51, 'BDHC Lagos', 'G3 Systems Limited', 'Lee Williams', 'Building & Factories', 'G3 Systems Limited', '', '', '', '', '', '2023-05-03', '2023-05-24', '', '', '', 'Nigeria', 'Lagos', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 151, 'NGN-BNF-BDH-23/151', 'On Hold', 'Pending', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-11 12:48:31', 'm.sofuye@lambertelectromec.com', '2023-05-19 12:00:06'),
(52, 'World Bank Country Office Abuja', 'Monterosa Construction', 'Drikus Sadie', 'Building & Factories', '', '', 'APTRON', '', '', '', '2023-05-09', '2023-05-25', '', '', '', 'Nigeria', 'Abuja', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Schedule of Basic Rate', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 152, 'NGN-BNF-WOR-23/152', 'Declined', 'Declined', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-11 16:52:02', 'm.sofuye@lambertelectromec.com', '2023-05-19 11:21:04'),
(53, ' Rural Electrification Agency EEP_Phase3 (Solar Hybrid Mini Grids) Tender', 'IMEASSESTS', 'Olamide Vigo', 'Power', '', '', '', '', '', '', '2023-05-11', '2023-06-22', '', '', '', 'Nigeria', 'Lagos', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 153, 'NGN-PWR- RU-23/153', 'On Hold', 'Pending', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-11 17:11:49', 'm.sofuye@lambertelectromec.com', '2023-05-18 08:22:15'),
(54, 'IVC - Tour Cacao', 'PFO Construction', 'Jean Claude DAO', 'Building & Factories', '', '', '', '', '', '', '', '', '', '', '', 'Ivory Coast', 'Abidjan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 154, 'CIV-BNF-IVC-23/154', 'On Hold', 'Pending', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-17 14:40:03', 'm.sofuye@lambertelectromec.com', '2023-05-17 14:40:03'),
(55, 'T&T Data Centre Plumbing Work, Lagos', 'Turner And Townsend', 'Folarin Olaleye', 'Oil & Gas', '', '', '', '', '', '', '2023-05-18', '2023-05-26', '', '', '', 'Nigeria', 'Lagos', 'High', 'Preliminary Budgeting', 'Standard (Combined)', 'Alternative On Brands are Acceptable', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 155, 'NGN-ONG-T&T-23/155', 'Approved', 'In Progress', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-18 09:26:41', 'm.sofuye@lambertelectromec.com', '2023-05-19 13:29:12'),
(56, ' LEM-CI - PALAIS PRESIDENTIEL _ CONSULTATION ELEC_MEC', 'PFO Construction', 'BEATRICE KOUADIO', 'Building & Factories', '', '', '', '', '', '', '2023-03-29', '2023-04-15', '', '', '', 'Ivory Coast', 'Abidjan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 156, 'CIV-BNF- LE-23/156', 'On Hold', 'Pending', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-19 08:11:27', 'm.sofuye@lambertelectromec.com', '2023-05-19 08:11:27'),
(57, 'LEM CI - PROJECT COMPLEX AKWABA', 'PNHG - Building Future', 'Others', 'Building & Factories', '', '', '', '', '', '', '2023-05-22', '2023-06-14', '', '', '', 'Ivory Coast', 'Abidjan', '', '', '', '', '', '', '', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', '', '', '', '', 157, 'CIV-BNF-LEM-23/157', 'On Hold', 'Pending', '', '', '', '', 'm.sofuye@lambertelectromec.com', '2023-05-22 11:42:52', 'm.sofuye@lambertelectromec.com', '2023-05-22 11:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `tender_document_sections`
--

CREATE TABLE `tender_document_sections` (
  `id` int(11) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_type` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tender_document_sections`
--

INSERT INTO `tender_document_sections` (`id`, `section_title`, `section_type`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Company  Information', 'Tender', 'Admin', '2023-01-02 14:47:46', 'Admin', '2023-01-02 14:47:46'),
(2, 'Organizational Capacity and Capability', 'Tender', 'Admin', '2023-01-02 14:47:46', 'Admin', '2023-01-02 14:47:46'),
(3, 'Experience and Technical Capacity', 'Tender', 'Admin', '2023-01-02 14:48:31', 'Admin', '2023-01-02 14:48:31'),
(4, 'Health, Safety and Environment', 'Tender', 'Admin', '2023-01-02 14:48:31', 'Admin', '2023-01-02 14:48:31'),
(5, 'Quality Assurance and Control', 'Tender', 'Admin', '2023-01-02 14:49:12', 'Admin', '2023-01-02 14:49:12'),
(6, 'Nigerian Content', 'Tender', 'Admin', '2023-01-02 14:49:12', 'Admin', '2023-01-02 14:49:12'),
(7, 'Financial Capability', 'Tender', 'Admin', '2023-01-02 14:49:35', 'Admin', '2023-01-02 14:49:35'),
(8, 'Building and Factories', 'Presentation', 'Admin', '2023-01-02 14:57:43', 'Admin', '2023-01-02 14:57:43'),
(9, 'Energy Division', 'Presentation', 'Admin', '2023-01-02 14:57:43', 'Admin', '2023-01-02 14:57:43'),
(10, 'Data Center', 'Presentation', 'Admin', '2023-01-02 14:59:02', 'Admin', '2023-01-02 14:59:02'),
(11, 'Quality Assurance', 'Presentation', 'Admin', '2023-01-02 15:00:22', 'Admin', '2023-01-02 15:00:22'),
(12, 'Oil and Gas Profile', 'Profile', 'Admin', '2023-01-02 15:00:22', 'Admin', '2023-01-02 15:00:22');

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
(4, 'Tope', 'Oloidi', 't.oloidi@lambertelectromec.com', 'c7ed79ea6b0661663877a8d64f863e79', 'Admin', 'm.sofuye@lambertelectromec.com', 'admin@lambertelectromec.com'),
(5, 'Joseph', 'Kadamani', 'j.kadamani@lambertelectromec.com', 'bbbc5c4b06a53dff502ac4e8eb50ac04', 'Others', 'admin@lambertelectromec.com', 'admin@lambertelectromec.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civ_cities`
--
ALTER TABLE `civ_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_category_table`
--
ALTER TABLE `clients_category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_table`
--
ALTER TABLE `clients_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_table`
--
ALTER TABLE `document_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gha_cities`
--
ALTER TABLE `gha_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keypersons_table`
--
ALTER TABLE `keypersons_table`
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
-- Indexes for table `tender_document_sections`
--
ALTER TABLE `tender_document_sections`
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
-- AUTO_INCREMENT for table `clients_category_table`
--
ALTER TABLE `clients_category_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients_table`
--
ALTER TABLE `clients_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `document_table`
--
ALTER TABLE `document_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gha_cities`
--
ALTER TABLE `gha_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `keypersons_table`
--
ALTER TABLE `keypersons_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `ngn_cities`
--
ALTER TABLE `ngn_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `project_info_table`
--
ALTER TABLE `project_info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tender_document_sections`
--
ALTER TABLE `tender_document_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
