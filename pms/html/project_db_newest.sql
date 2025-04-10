-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 10:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `civ_cities`
--

CREATE TABLE `civ_cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `clients_address` varchar(255) NOT NULL,
  `clients_hq_location` varchar(255) NOT NULL,
  `clients_category` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients_table`
--

INSERT INTO `clients_table` (`id`, `clients_name`, `clients_email`, `clients_address`, `clients_hq_location`, `clients_category`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'A&K Construction', '', 'Behind Setraco, Bldg Plot 527 Shehu YarAdua Way, Kado District Abuja, FCT Nigeria.', 'Abuja', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:42:00'),
(2, 'African Reinsurance Corporation - Africa Re', 'www.lambertelectromec.com', 'Plot1679KarimuKotunStreetVictoria IslandLagosNigeria', 'Abuja', 'End User/Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(3, 'Alcon Nig Ltd', '', 'Plot 17 Trans Amadi Industrial Layout, Port Harcourt, Rivers State, Nigeria.', 'Port Harcourt', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:43:00'),
(4, 'Arbico Limited', '', 'Block 7 Plot D Industrial Cres Ilupeju 102215, Lagos.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:44:00'),
(5, 'Ato Architects', '', '12 Dr Ladi Alakija, Avenue Lekki Phase 1', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:47:00'),
(6, 'Avantis Engineering', '', '', '', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:48:00'),
(7, 'Avison Young', '', '65, Gresham Street London, EC2V7NQ Unitied Kingdom.', 'London', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:37:00'),
(8, 'Baron Architect', '', '292 Murtala Muhammed Way, yaba, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:50:00'),
(9, 'Blessing Charles', '', '100 EeastWest road, Rumuokoro, PortHarcourtm Rivers State,Nigeria', 'Port Harcourt', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:51:00'),
(10, 'Bovell Ross', '', 'Block B Suite 6 The Crescent East, 3 Eglin Road, Sunninghill Johannesburg.', 'South Africa', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:53:00'),
(11, 'Consar', '', 'Plot No. 11 Asokwa Industrial Area Kumasi, Ghana.', 'Ghana', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:55:00'),
(12, 'Consar Limited', '', 'PMB 25 Cantoment, Post Office Accra Ghana.', 'Ghana', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:56:00'),
(13, 'Consol Associate', '', '12 Jasper Ike street, off TF Kuboye road by oniru market lekki, phase1 lagos.', 'Lagos', 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:58:00'),
(14, 'Costec Consultant', '', 'Plot 21, Awkuzu Street,off Providence Street, Lekki Phase 1, Lekki, Lagos State', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 07:59:00'),
(15, 'CPMS', '', 'Comprehensive Project Management Services Ltd 3rd floor Krestal laure Complex 376 Ikorodu road, Maryland Lagos.', 'Lagos', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:00:00'),
(16, 'Craneburg', '', '29, Bourdillon Rd Ikoyi, Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:03:00'),
(17, 'Dag Industries Nigeria Limited', '', 'No-11, Sapara Williams Street, Off Ladipo Oluwole Street, Ikeja Industrial Estate, Lagos, Nigeria.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:04:00'),
(18, 'Delano Architect', '', '86B Isale Eko Avenue, Dolphin Estate Ikoyi Lagos.', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:05:00'),
(19, 'Desimone Limited', '', '64 Eric Moore Road, Iganmu Industrial Estate Surulere Lagos, Nigeria West Africa.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:06:00'),
(20, 'Ecad Architect', '', '3rd Floor 62 Awolowo Road, lkoyi Lagos, Nigeria', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:07:00'),
(21, 'Eris Property Limited', '', '', 'Ghana', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:09:00'),
(22, 'Faan', '', 'FAAN Headquarter, Ikeja, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:10:00'),
(23, 'Farrow Laing', '', 'Lords Office Estates Building 3276 West Avenue, Centurion.', 'Ghana', 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:11:00'),
(24, 'Fidelis Eguaoje', '', '64 Eric Moore Road, Lagos Nigeria.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:13:00'),
(25, 'First Bank Nigeria', '', '35 Samuel Asabia House, Marina Branch, Lagos.', 'Lagos', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:14:00'),
(26, 'FMA Architect', '', 'FMA Architects Ltd Penthouse Suite St Nicholas House Catholic Mission Street Lagos.', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:16:00'),
(27, 'Foab Partnership', '', '17 Morris Street, Abule Ijesha, Yaba, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:16:00'),
(28, 'Folmak Partnership', '', 'Chartered Quantity Surveyors Cost Advisers Project Managers 2nd Floor 14 Amara Olu Street By Zenith Bank Agidingbi CBD Ikeja Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:29:00'),
(29, 'Gabonn Associate', '', '8B Oluwole Street Lekki Phase I Lekki, Eti-Osa, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:31:00'),
(30, 'Goldkey Developers Limited', '', 'PwC Tower A4 Rangoon Lane Cantonments City', 'Ghana', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 08:54:00'),
(31, 'Harioto Limited', '', 'Plot 11 Gbagada Oworonshoki Express, Gbagada, Lagos.', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 01:59:00'),
(32, 'Haussman Group', '', '2 Onikoyi Rd, Ikoyi, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:00:00'),
(33, 'HOS Consult Limited', '', '55 Moleye street off Herbert Marcaulay Alagomeji Yaba lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:07:00'),
(34, 'Interstate Architects', '', '45, Muritala Muhammed Int, Airport Rd, Tinuose House, Ajao Estate', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:08:00'),
(35, 'Iron Product Limited (IPL)', '', '9 Eko Street Parkview Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:09:00'),
(36, 'Ispaceinterior', '', '202B Etim Iyang Crescent, V.I', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:10:00'),
(37, 'Ivy Engineering Services', '', '6 Taiwo Close, off Kudirat Abiola way, Alausa-Ikrja Lagos.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:10:00'),
(38, 'James Cubbit', '', '1 Alfred Rewane Road falomo ikoyi lagos', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:24:00'),
(39, 'Justmoh', '', 'Accra', 'Ghana', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:25:00'),
(40, 'KOA', '', '12a Morris Street, Abule-Ijesha, Yaba, Lagos', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:26:00'),
(41, 'Loa Architect', '', '134 Obafemi Awolowo Way, Ikeja Lagos.', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:28:00'),
(42, 'M. Barbisotti & Sons (MBS)', '', 'Akasanoma Rd, Tema, Ghana', 'Ghana', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:30:00'),
(43, 'MAR & MOR', '', '', '', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:31:00'),
(44, 'Mayssa International Limited', '', '202B Etim Inyang Crescent, Victoria Island Lagos.', 'Lagos', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:33:00'),
(45, 'Medanha & Sousa', '', 'North Labone, Accra, Ghana', 'Ghana', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:34:00'),
(46, 'MFA Patnership', '', '4 ADCS Street U3 Estate Lekki Phase1 Oceanside Lagos.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:36:00'),
(47, 'Mtn', '', 'MTN Head office Falomo', 'Lagos', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:37:00'),
(48, 'Nadeem Group', '', 'SED Office Sunrise Hills Asokoro district Abuja', 'Abuja', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:38:00'),
(49, 'NCDMB', '', '', '', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:39:00'),
(50, 'NNPC Group', '', '', 'Lagos', 'End User / Owner', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:39:00'),
(51, 'OJ &T Consultant', '', '2 Ebun St, Yaba Lagos Mainland.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:42:00'),
(52, 'Primetech Design And Engineering Nig Ltd', '', 'Plot 305 Idu Industrial Area 1B Idu 900102 FCT Abuja Nigeria.', 'Abuja', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:43:00'),
(53, 'Profica', '', 'First Floor (1b), 28 Raymond Njoku Road, Off Awolowo Rd, Ikoyi, Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:45:00'),
(54, 'Pro-M Limited', '', '15B Adewole Kuku Street,Lekki Phase One Lagos', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:44:00'),
(55, 'PWO Architect', '', '25 Ologun Agbaje Str Eti-Osa 106104 Lagos', 'Lagos', 'Architects', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:46:00'),
(56, 'RIB Pentad Quantity Surveyors', '', '1st Floor Banking Court Menlyn Maine Central Square Cnr Aramist Corobay Avenue Waterkloof Glen', 'Ghana', 'Qs Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:48:00'),
(57, 'Sea Surveyors Ltd', '', '3rd Floor, C.T. Investment Building, 3/5. Boyle Street, Onikan', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:55:00'),
(58, 'Setraco', '', 'Setraco Building Plot 526, Shehu YarAdua Way Kado District Abuja. P.M.B. 105, Garki, Abuja, Nigeria', 'Abuja', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 02:59:00'),
(59, 'Shaoma Nigeria Limited', '', '11 Kola Adeyeye, Ikosi - CMD Road Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:02:00'),
(60, 'Studio Ola Ltd', '', '12A, Morris Street, \\n Off Herbert Macaulay Way,\\nAbule-Ijesha,\\nYaba, Lagos', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:06:00'),
(61, 'Tecnimont', '', 'ViaGaetanoDeCastillia6A20124MilanItaly', 'Italy', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:10:00'),
(62, 'Tesrt', '', '', '', '', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin@lambertelectromec.com', '2023-01-09 23:00:00'),
(63, 'Tillyard', '', 'Fourth Floor, 241, Igbosore Road', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:15:00'),
(64, 'Topklan Eng. Services', '', 'Unit 302 56, Olonode Street, Off Hughes Avenue Alagomeji, Yaba, Lagos.', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:16:00'),
(65, 'Total E & P', '', 'Plot 25, Trans Amadi Industrial Layout ', 'Port Harcourt', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:17:00'),
(66, 'Total E&P Nigeria Cpfa Ltd.', '', '35 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:17:00'),
(67, 'Transcorp Hotels', '', '1, Aguiyi Ironsi Street, Maitama, PMB 200, Abuja Nigeria', 'Abuja', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:18:00'),
(68, 'Triumph', '', '1A Akinyemi Avenue Lekki Epe ExpressWay Oniru Lagos Nigeria', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:20:00'),
(69, 'Turner And Townsend', '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:21:00'),
(70, 'UICL', '', 'United Integrated Construction Ltd. 22B idowu Taylor street VI 2nd Floor Lagos', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:22:00'),
(71, 'Unecon', '', '18 Johnson Street Off Coker Road Ilupeju Estate.', 'Lagos', 'Mep Consultant', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:23:00'),
(72, 'Unicef', '', '', '', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:23:00'),
(73, 'Uraga Power Solutions', '', '6B Mekunwen Road, Off Oyinkan Abayomi Drive, Ikoyi, Lagos', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:24:00'),
(74, 'Vita Construction', '', 'Plot 18, Aminu Jinadu Close, Iganmu Industrial Estate, Surulere, Lagos ', 'Lagos', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:24:00'),
(75, 'Waltersmith Petroman Oil Limited', '', '47 Glover Road Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 's.ashafa', '2023-01-12 03:25:00'),
(76, 'Wartsila', '', '', '', 'Other Consultants', 'admin@lambertelectromec.com', '2023-01-11 20:38:48', 'admin', '2023-01-11 09:05:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keypersons_table`
--

INSERT INTO `keypersons_table` (`id`, `clients_name`, `clients_id`, `clients_email`, `clients_address`, `clients_hq_location`, `clients_category`, `key_person`, `key_persons_tel`, `key_persons_email`, `title`, `info`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Ato Architects', 2, '', '12 Dr Ladi Alakija, Avenue Lekki Phase 1', 'Lagos', 'Architects', 'Project Management Committee', '14616820', '', '', '', 'admin@lambertelectromec.com', '2023-01-09 23:00:00', 'admin', '2023-01-12 08:42:00'),
(3, 'Avantis Engineering', 3, '', '', '', 'Mep Consultant', 'John Doe', '08105342439', 'johndoe@gmail.com', '', '', 'admin@lambertelectromec.com', '2023-01-12 20:37:57', 'admin', '2023-01-12 08:39:00'),
(4, 'A&K Construction', 1, '', 'Behind Setraco, Bldg Plot 527 Shehu YarAdua Way, Kado District Abuja, FCT Nigeria.', 'Abuja', 'General Contractor', 'Christian Saab', '2348052296126', 'csaab@ak-construction.com', 'Procurement Officer', '', 's.ashafa@lambertelectromec.com', '2023-01-13 09:44:12', 's.ashafa@lambertelectromec.com', '2023-01-13 09:44:12'),
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
(44, 'KOA', 40, '', '12a Morris Street, Abule-Ijesha, Yaba, Lagos', 'Lagos', 'Mep Consultant', 'James Ezechi', '2342341761229', 'oje@koaconsultants.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:03:06', 's.ashafa@lambertelectromec.com', '2023-01-16 08:03:06'),
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
(67, 'Total E&P Nigeria Cpfa Ltd.', 66, '', '35 Kofo Abayomi Street, Victoria Island, Lagos, Nigeria', 'Lagos', 'Other Consultants', 'Abidemi Oluwadamilola-Elliott', '23408135815725', 'Abidemi.ELLIOTT@tepngcpfa.com', 'Contracts & Procurement', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:47:57', 's.ashafa@lambertelectromec.com', '2023-01-16 08:47:57'),
(68, 'Transcorp Hotels', 67, '', '1, Aguiyi Ironsi Street, Maitama, PMB 200, Abuja Nigeria', 'Abuja', 'Other Consultants', 'Isaac Offiah', '23408039181416', 'isaac.offiah@transcorphotelspl.com', 'Project Management Executive', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:49:20', 's.ashafa@lambertelectromec.com', '2023-01-16 08:49:20'),
(69, 'Triumph', 68, '', '1A Akinyemi Avenue Lekki Epe ExpressWay Oniru Lagos Nigeria', 'Lagos', 'General Contractor', 'Bello Ojeifo', '08035652908', 'b.ojeifo@triumphpg.com', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:50:52', 's.ashafa@lambertelectromec.com', '2023-01-16 08:50:52'),
(70, 'Turner And Townsend', 69, '', 'Turner&TownsendHouse21FrickerRoadIllovo', 'Lagos', 'Project Manager', 'Peter-James (PJ) Jacquire', '270797029213', 'PJacquire@turntown.co.za', 'Senior Quantity Surveyor', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:51:51', 's.ashafa@lambertelectromec.com', '2023-01-16 08:51:51'),
(71, 'UICL', 70, '', 'United Integrated Construction Ltd. 22B idowu Taylor street VI 2nd Floor Lagos', 'Lagos', 'General Contractor', 'Abbass Atwi', '2347065199998', 'abbas@uicl.cc', 'Mr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 08:53:50', 's.ashafa@lambertelectromec.com', '2023-01-16 08:53:50'),
(72, 'Unecon', 71, '', '18 Johnson Street Off Coker Road Ilupeju Estate.', 'Lagos', 'Mep Consultant', 'Tunde Ogunde', '08033119674', 'ogunde@uneconassociates.com', 'Engr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:02:42', 's.ashafa@lambertelectromec.com', '2023-01-16 09:02:42'),
(73, 'Unicef', 72, '', '', '', 'Other Consultants', 'Bid Regsitration Unit', '2123267000', 'nysdbidding@unicef.org', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:04:11', 's.ashafa@lambertelectromec.com', '2023-01-16 09:04:11'),
(74, 'Uraga Power Solutions', 73, '', '6B Mekunwen Road, Off Oyinkan Abayomi Drive, Ikoyi, Lagos', 'Lagos', 'General Contractor', 'Adeyemi Akolade', '08037421529', 'adeyemi.akolade@uragapowersolutions.com', 'Engr', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:05:48', 's.ashafa@lambertelectromec.com', '2023-01-16 09:05:48'),
(75, 'Vita Construction', 74, '', 'Plot 18, Aminu Jinadu Close, Iganmu Industrial Estate, Surulere, Lagos ', 'Lagos', 'Other Consultants', 'Louis Vacanas', '35799420651', 'louis.vacanas@vita-construction.com', '', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:06:56', 's.ashafa@lambertelectromec.com', '2023-01-16 09:06:56'),
(76, 'Waltersmith Petroman Oil Limited', 75, '', '47 Glover Road Ikoyi Lagos Nigeria', 'Lagos', 'General Contractor', 'Uche Ngene', '07034145974', 'uche.ngene@waltersmithng.com', 'Mrs', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:07:45', 's.ashafa@lambertelectromec.com', '2023-01-16 09:07:45'),
(77, 'Wartsila', 76, '', '', '', 'Other Consultants', 'Vesa Korvo', '358405529961', 'Vesa.korvo_external@wartsila.com', 'Senior Chief Project Engineer', '', 's.ashafa@lambertelectromec.com', '2023-01-16 09:08:54', 's.ashafa@lambertelectromec.com', '2023-01-16 09:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `ngn_cities`
--

CREATE TABLE `ngn_cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `additional_information` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_info_table`
--

INSERT INTO `project_info_table` (`id`, `project_title`, `project_client`, `keyperson`, `division`, `project_manager`, `qs_manager`, `mep_consultants`, `architect`, `project_duration`, `rfi_due`, `tender_received_date`, `tender_due`, `tender_submission_date`, `tender_amount`, `currency`, `project_country`, `project_city`, `project_importance`, `contract_type`, `prelim_pricing`, `pricing_strategy`, `date_extension`, `rate_used`, `procurement_type`, `boq`, `specification`, `drawings`, `tender_form`, `tender_instruction`, `basic_rate`, `labour_rate`, `other_tender_doc`, `technical_drawings`, `slds`, `mos`, `scope_understanding`, `pow`, `other_technical_doc`, `code`, `tender_code`, `project_status`, `progress`, `tender_awarded_date`, `vendor_information`, `additional_information`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'High Court of Lagos State, Igbosere', 'Re-build Lagos', '', 'Building & Factories', 'Re-Build Lagos', 'HOS', 'CA Consultant', 'Onestream Consultants Ltd', 'N/A', '2022-07-14', '2022-07-06', '2022-07-20', '2022-07-20', '4457074101', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'Directly include VEs Related To Brands & Specifications & Clarify', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 101, 'BNF-HIG-NGN-101', 'Approved', 'Submitted', '', 'Only Tender Code', '1. We can make use of all the VEs or alternatives that CA consultants will accept on projects.\r\n2. We have requested for extension, however we are awaiting feedback from the client.', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(2, 'Remodelling of First Bank Head Office 6th Floor', 'First Bank Nigeria', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-07-05', '2022-07-04', '2022-07-06', '2022-07-07', '52633253', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 102, 'BNF-REM-NGN-102', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(3, 'Restoring the New Port Harcourt Refinery (NPHR) and the Old Port Harcourt Refinery (OPHR)', 'Tecnimont ', '', 'Oil & Gas', '', '', '', '', 'N/A', '2022-07-18', '2022-07-08', '2022-07-25', '', '', '', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', 'Site Visit Declaration', 103, 'ONG-RES-NGN-103', 'Declined', 'Declined', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(4, 'Edo Museum of West African Art (EMOWAA) Pavilion, Benin, Edo State', 'EMOWAA', '', 'Building & Factories', 'FOAB', 'Sea Surveyors', 'Avantis', '', '12 months', '2022-07-19', '2022-07-14', '2022-09-29', '2022-07-29', '4567594074', 'NGN', 'Nigeria', 'Benin City', 'High', 'Remeasured', 'Standard (Combined)', 'Alternative On Brands are Acceptable', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 104, 'BNF-EDO-NGN-104', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(5, 'Throne of Grace Redeem Church. Ebute Metta', 'The Redeem Church', '', 'Building & Factories', 'Courtney Michael Partnership', 'Billing Cost Associate', 'KOA Partnership', '', '30 months', '2022-07-15', '2022-07-08', '2022-07-29', '2022-08-08', '3687259690', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'Directly include VEs Related To Brands & Specifications & Clarify', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Boq: Not Required', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', '', 105, 'BNF-THR-NGN-105', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(6, 'Remedial Work on Assa Locations 01, 02 & Access Road', 'Waltersmith', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-07-20', '2022-07-18', '2022-07-21', '2022-07-22', '67387000', 'NGN', 'Nigeria', 'Port Harcourt', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs: VEs/Alternative Brands to be submitted separately', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', 'Scope of Work', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 106, 'BNF-REM-NGN-106', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(7, 'The Minnie Mouse Project', 'LEAMINGTON PROPERTIES LTD', '', 'Building & Factories', 'ACCL', 'Consol Associates', 'MFA Partnership ', 'SAOTA', 'N/A', '2022-08-31', '2022-08-15', '2022-09-30', '', '', '', 'Nigeria', 'Victoria Island', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', '', 107, 'BNF-THE-NGN-107', 'Declined', 'Declined', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(8, 'Staff Housing Rivers State University, Port Harcourt', 'Megastar', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-08-20', '2022-08-17', '2022-08-24', '', '', '', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Understanding of Scope', 'POW', '', 108, 'BNF-STA-NGN-108', 'Declined', 'Declined', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(9, 'L5 - Towers _ Preliminary', 'POLTON MORGAN', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-08-31', '2022-08-22', '2022-09-05', '2022-09-07', '7492000', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 109, 'BNF-L5 -NGN-109', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(10, 'Building Office at Ota _ Shell Nigeria', 'SHELL', '', 'Building & Factories', 'UICL', '', '', 'ATO Architect', 'N/A', '2022-08-29', '2022-08-25', '2022-09-01', '2022-09-30', '1848574030', 'NGN', 'Nigeria', 'Abeokuta', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 110, 'BNF-BUI-NGN-110', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(11, 'Construction of 5 Storey  Lecture Hall_ University of Ghana', 'Consar', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-09-09', '2022-09-01', '2022-09-16', '', '', '', 'Ghana', 'Accra', 'Low', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 111, 'BNF-CON-GHA-111', 'Declined', 'Declined', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(12, 'ABlnBev - Gateway 6.4', 'ABlnBev', '', 'Building & Factories', '', '', 'WCS Quantity Surveyors', '', '6 months', '2022-09-09', '2022-09-06', '2022-09-16', '2022-10-12', '1333950409', 'NGN', 'Nigeria', 'Ogun', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW', 'Certificate of Authority of Signature, Previous Project, Turnover, Organogram', 112, 'BNF-ABL-NGN-112', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(13, 'MISA GLOVER - ELECTRICAL, EXTRA LOW VOLTAGE & PLUMBING INSTALLATION TENDER', 'MISA LIMITED', '', 'Building & Factories', 'Squarelines Limited', '', 'OJAT', 'AMARCH CONSULTANT', 'N/A', '2022-10-10', '2022-10-06', '2022-10-12', '', '', '', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 113, 'BNF-MIS-NGN-113', 'Declined', 'Declined', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(14, 'Hillside Multispeciality Hospital, Diagnostic Centre', 'ARTEC', '', 'Building & Factories', '', '', 'KOA', 'ARTEC', 'N/A', '', '2022-10-07', '2022-10-21', '2022-11-14', '8929138690', 'NGN', 'Nigeria', 'Abuja', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', 'Not Application', 114, 'BNF-HIL-NGN-114', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(15, 'Proposed Hospitality Development, Asaba', 'CCP', '', 'Building & Factories', '', '', 'CCP', '', 'N/A', '2022-10-14', '2022-10-07', '2022-10-21', '2022-10-21', '3179688516', '', 'Nigeria', 'Asaba', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', '', 'Form of Tender', 'Instruction to Tender', '', '', '', '', '', '', '', '', '', 115, 'BNF-PRO-NGN-115', 'Approved', 'Submitted', '', 'Only use project name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(16, 'LJA - GMT Creek Road Terminal Lagos', 'Julius Berger/GMT Limited', '', 'Building & Factories', '', '', 'TANGER MED ENGINEERING', '', 'N/A', '2022-10-13', '2022-10-10', '2022-10-20', '2022-10-20', '3850624', '', 'Nigeria', 'Lagos', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', '', '', '', '', 116, 'BNF-LJA-NGN-116', 'Approved', 'Submitted', '', 'Only use project name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(17, 'Padah LNG Project', 'Orascom', '', 'Power', '', '', '', '', 'N/A', '2022-10-13', '2022-10-04', '2022-10-31', '', '', '', 'Nigeria', 'Port Harcourt', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 117, 'PWR-PAD-NGN-117', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(18, 'African Data Centre  - 1250kVA Miniature Substation Estimate', 'Royal HaskoningDHV Ltd', '', 'Power', '', '', '', '', 'N/A', '2022-10-17', '2022-10-13', '2022-10-20', '2022-11-21', '610712', 'USD', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 118, 'PWR-AFR-NGN-118', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(19, 'Freetown Sierra Leone Temple Project - MEP', 'Consar', '', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-10-13', '2022-10-18', '', '', '', 'Ghana', 'Accra', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 119, 'BNF-FRE-GHA-119', 'Declined', 'Declined', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(20, 'UBA Ghana Head Office Project', 'UBA/Afriland Properties', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-10-21', '2022-10-15', '2022-11-15', '2022-11-18', '8999382', 'USD', 'Ghana', 'Accra', 'Very High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', 'HSE, Quantity Control & Assurance, Subcontractor Procedure', 120, 'BNF-UBA-GHA-120', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(21, 'BCG Benin Tender ', 'Julius Berger', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-10-27', '2022-10-19', '2022-11-07', '2022-11-08', '28522722441', 'CFA', 'Nigeria', 'Benin City', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 121, 'BNF-BCG-NGN-121', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(22, 'TYDF, Abuja', 'Nadeem Group', '', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-11-02', '2022-11-25', '2022-12-01', '6492519535', 'NGN', 'Nigeria', 'Abuja', 'Medium', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', 'The brief introduction of the organization, Project References, Warranties & Guarantees', 122, 'BNF-TYD-NGN-122', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(23, 'ACE - Centenary City Royale Residence Abuja', 'Julius Berger', '', 'Building & Factories', '', '', '', '', 'N/A', '', '2022-10-30', '2022-11-03', '2022-10-05', '16247131', 'NGN', 'Nigeria', 'Abuja', 'High', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification: Not Required', 'Drawings: Not Required', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 123, 'BNF-ACE-NGN-123', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(24, 'The African Center of Excellence for Genomics of Infectious Diseases (ACEGID) Phase 2', 'Turner & Townsend', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-11-22', '2022-11-10', '2022-11-24', '', '', '', 'Nigeria', 'Ogun', 'High', 'Lump Sum', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 124, 'BNF-THE-NGN-124', 'Declined', 'Declined', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(25, 'Proposed Ghana DC Project', 'Arup', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-11-14', '2022-11-11', '2022-11-25', '2022-12-11', '65628091', 'USD', 'Ghana', 'Accra', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 125, 'BNF-PRO-GHA-125', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(26, 'LNW_Proposal', 'Northwest Petroleum & Gas / Primetech', '', 'Building & Factories', '', '', 'Primetech', '', 'N/A', '', '2022-11-15', '2022-11-25', '2022-11-30', '5393118107', 'NGN', 'Nigeria', 'Lagos', 'High', 'Remeasured', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 126, 'BNF-LNW-NGN-126', 'Approved', 'Submitted', '', '', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(27, 'ASSA New Drilling Location Preparation', 'Waltersmith', '', 'Oil & Gas', '', '', '', '', 'N/A', '', '2022-11-16', '2022-12-02', '2022-12-02', '818622693', 'NGN', 'Nigeria', 'Owerri', 'Medium', 'Remeasured', 'Per Package', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Understanding of Scope', 'POW', '', 127, 'ONG-ASS-NGN-127', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(28, 'EFCC Training Academy Abuja', 'EFCC/Julius Berger', '', 'Building & Factories', '', '', 'MBS Engineering Limited', 'GlobArch Associates', 'N/A', '', '2022-11-22', '2022-11-30', '2022-12-07', '7614647046', '', 'Nigeria', 'Abuja', 'High', 'Remeasured', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 128, 'BNF-EFC-NGN-128', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(29, 'Residential Development at Lakowe Golf & Country Estate, Lagos', 'Mixta Africa', '', 'Building & Factories', 'Greenhouse Inc Limited', 'Jabak Consultants', 'Topklan  Engineering Services', 'CMD + A', 'N/A', '2022-12-05', '2022-11-28', '2022-12-12', '2022-12-12', '6877257344', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Per Package', 'As Per Specs', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Instruction to Tender', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS', 'Scope of Understanding: Not Required', 'POW', '', 129, 'BNF-RES-NGN-129', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(30, 'Rehabilitation Works of Access Road Waltersmith', 'Waltersmith', '', 'Oil & Gas', '', '', '', '', '15 months', '2022-12-02', '2022-11-29', '2022-12-12', '2022-12-12', '1249703503', '', 'Nigeria', 'Owerri', 'High', 'Remeasured', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', '', '', '', '', '', '', '', 'MOS', '', 'POW', '', 130, 'ONG-REH-NGN-130', 'Approved', 'Submitted', '', 'Only use project name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(31, 'LDC Project Eko Atlantic', 'Julius Berger', '', 'Building & Factories', '', '', '', '', 'N/A', '2022-12-06', '2022-12-02', '2022-12-12', '2022-12-12', '4436311', 'NGN', 'Nigeria', 'Lagos', 'Medium', 'Lump Sum', 'Standard (Combined)', 'As Per Specs', 'No', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Tender Form: Not Required', 'Tender Instruction: Not Required', 'Basic Rate: Not Required', 'Labour Rate: Not Required', '', 'Technical Drawings: Not Required', 'Slds: Not Required', 'MOS: Not Required', 'Scope of Understanding: Not Required', 'POW: Not Required', '', 131, 'BNF-LDC-NGN-131', 'Approved', 'Submitted', '', 'Only use Project Name', '', '', '2022-01-02 13:39:25', '', '2023-01-02 13:39:25'),
(32, 'Dummy Project', 'Consar', 'Eunice Agyemang', 'Power', 'Other Project Manager', 'Consol Associate', 'Pro-M Limited', 'Other Architects', '1 month', '2023-01-11', '2023-01-01', '2023-01-18', '2023-01-20', '40000000', '₦', 'Nigeria', 'Agbor', 'High', 'Lump Sum', 'Standard (Combined)', 'Alternative On Brands are Acceptable', 'Yes', 'Equipment/Imported Items', 'Standard (Sea Freight)', 'Unpriced BOQ', 'Specification', 'Drawings', 'Form of Tender', 'Instruction to Tender', 'Schedule of Basic Rate', 'Schedule of Labour Rate', '', 'Drawings', 'SLDs', 'MOS', 'Understanding of Scope', 'POW', '', 132, 'PWR-DUM-NGN-132', 'On Hold', 'Awarded', '2023-01-18', 'Project Name & Tender Code', '', '', '2023-01-18 20:34:57', '', '2023-01-18 20:34:57');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `ngn_cities`
--
ALTER TABLE `ngn_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `project_info_table`
--
ALTER TABLE `project_info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tender_document_sections`
--
ALTER TABLE `tender_document_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
